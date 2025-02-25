<?php 

namespace App\Livewire;

use Illuminate\Support\Facades\Cookie;
use Livewire\Component;
use Livewire\Attributes\On;

class Header extends Component
{
    public $itemCount;
    public $hasProductInCart;
    public $order;
    public $miniCartIsOpen = false;
    public function mount()
    {
        $this->refreshOrder();
    }

    #[On('orderUpdated')]
    public function refreshOrder()
    {
        $this->order = app('order')->order();
        $this->itemCount = (int) Cookie::get(app('order')->orderCookieKey['OrderId']) > 0 ? $this->order ? $this->order->order_number : (int) Cookie::get(app('order')->orderCookieKey['OrderItemCount']) : 0;
        $this->hasProductInCart = (bool) $this->itemCount;
    }
    public function removeItem($itemId)
    {
        $orderItem = $this->order->items->find($itemId);
        if ($orderItem) {
            app('order')->removeItem($orderItem);
        }
        $this->refreshOrder();
    }
    public function render()
    {
        return view('livewire.header');
    }
}