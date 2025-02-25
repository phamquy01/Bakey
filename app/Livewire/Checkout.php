<?php

namespace App\Livewire;

use Livewire\Component;

class Checkout extends Component
{
    public $order;

    public function mount()
    {
        $this->order = app('order')->order();
    }
    public function render()
    {
        return view('livewire.checkout');
    }
}
