<?php

namespace App\Services;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use Carbon\Carbon;
use Illuminate\Support\Facades\Cookie;


class OrderService
{
    public $orderStatus;
    public $paymentStatus;
    public $orderCookieKey;

    public function __construct()
    {
        $this->orderStatus = [
            'Draft' => 1,
            'Pending' => 2,
            'Processing' => 3,
            'Completed' => 4,
            'Cancelled' => 5,
            'Refunded' => 6,
            'Failed' => 7,
        ];
        $this->paymentStatus = [
            'Pending' => 1,
            'Processing' => 2,
            'Completed' => 3,
            'Cancelled' => 4,
            'Refunded' => 5,
            'Failed' => 6,
        ];
        $this->orderCookieKey = [
            'OrderId' => 'order_id',
            'OrderItemCount' => 'order_item_count',
        ];
    }
    private function createDraftOrder(): Order
    {
        $code = $this->generateCode();
        while (true) {
            if ($this->isDuplicateCode($code)) {
                $code = $this->generateCode();
            } else {
                break;
            }
        }
        return Order::create(['status' => $this->orderStatus['Draft'], 'code' => $code]);
    }

    public function order(): Order
    {
        if (Cookie::has($this->orderCookieKey['OrderId'])) {
            $order = Order::with(['items', 'items.product'])->find(Cookie::get($this->orderCookieKey['OrderId']));
            if (!$order) {
                $order = $this->createDraftOrder();
                Cookie::queue($this->orderCookieKey['OrderId'], $order->id);
            } else {
                Cookie::queue($this->orderCookieKey['OrderItemCount'], $order->items->sum('quantity'));
            }
        } else {
            $order = $this->createDraftOrder();
            Cookie::queue($this->orderCookieKey['OrderId'], $order->id);
        }
        return $order;
    }

    private function update(Order $order): Order
    {
        $items = $order->items()->get();
        // $order->total_discount = $items->sum('total_discount');
        $order->total_amount = $items->sum('total');
        $order->total_tax = $items->sum('total_tax');
        $order->total_shipping = $items->sum('total_shipping');
        $order->total_price = $items->sum('total_price');
        $order->order_number = $items->sum('quantity');
        $order->save();
        Cookie::queue($this->orderCookieKey['OrderItemCount'],  $order->order_number);
        return $order;
    }

    public function addItem(Product $product, int $qty = 1): Order
    {
        if (Cookie::has($this->orderCookieKey['OrderId'])) {
            $order = Order::find(Cookie::get($this->orderCookieKey['OrderId']));
            if (!$order) {
                $order = $this->createDraftOrder();
                Cookie::queue($this->orderCookieKey['OrderId'], $order->id);
            }
        } else {
            $order = $this->createDraftOrder();
            Cookie::queue($this->orderCookieKey['OrderId'], $order->id);
        }

        $orderItem = $order->items()->where('product_id', $product->id)->first();
        if ($orderItem) {
            $qty = (int) $orderItem->quantity + $qty;
        } else {
            $orderItem = new OrderItem(['order_id' => $order->id]);
        }

        $price = $product->price;

        $discount = 0;
        $total_discount = $discount * $qty;

        $total = $price * $qty - $total_discount;
        $total_price = $total;
        $orderItem->fill([
            'product_id' => $product->id,
            'quantity' => $qty,
            'price' => $price,
            'discount' => $discount,
            'total_discount' => $total_discount,
            'total' => $total,
            'total_price' => $total_price,
        ]);
        $orderItem->save();
        return $this->update($order);
    }

    public function removeItem(OrderItem $orderItem): Order
    {
        $order = $orderItem->order()->first();
        $orderItem->delete();
        return $this->update($order);
    }

    public function updateItemQuantity(OrderItem $orderItem, int $quantity): void
    {
        $orderItem->quantity = $quantity;
        $total = $orderItem->price * $quantity;
        $orderItem->total = $total;

        $total_discount = $orderItem->discount * $quantity;
        $orderItem->total_discount = $total_discount;

        $total_tax = $orderItem->tax * $quantity;
        $orderItem->total_tax = $total_tax;

        $total_shipping = $orderItem->shipping_fee * $quantity;
        $orderItem->total_shipping = $total_shipping;

        $orderItem->total_price = $total + $total_tax + $total_shipping;

        $orderItem->save();
        $order = $orderItem->order()->first();
        $this->update($order);
    }

    public function isDuplicateCode($code)
    {
        return Order::where('code', $code)->count() > 0;
    }

    public function generateCode(): string
    {
        $prefix = "OD";

        $date = Carbon::now();
        $formattedDate = $date->format('ymd');

        $randomNumber = mt_rand(1000000, 9999999);

        return $prefix . $formattedDate . $randomNumber;
    }

    public function complete(Order $order): bool
    {
        $order->status = $this->orderStatus['Pending'];
        $order->payment_method = $this->paymentStatus['Pending'];
        Cookie::queue(Cookie::forget($this->orderCookieKey['OrderId']));
        Cookie::queue(Cookie::forget($this->orderCookieKey['OrderItemCount']));
        app('mail')->sendOrderMail($order);
        return $order->save();
    }
}
