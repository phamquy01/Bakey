<?php

namespace App\Services;

use App\Mail\OrderMail;
use Illuminate\Support\Facades\Mail;

class MailService
{
    public function sendOrderMail($order)
    {

        $data = [
            'order' => $order,
            'items' => $order->items,
        ];
        Mail::to($order->email)->send(new OrderMail($data));
    }
}
