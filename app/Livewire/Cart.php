<?php

namespace App\Livewire;

use Livewire\Component;

class Cart extends Component
{
    public $order;
    public function mount()
    {
        $this->order = app('order')->order();
    }


    public function refreshOrder()
    {
       
    }
    public function removeItem($itemId)
    {
        $orderItem = $this->order->items->find($itemId);
        if ($orderItem) {
            app('order')->removeItem($orderItem);
        }
        $this->order = app('order')->order();
        $this->dispatch('orderUpdated');
    }
    public function render()
    {
        return view('livewire.cart');
    }
}
