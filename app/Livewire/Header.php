<?php 

namespace App\Livewire;

use Illuminate\Support\Facades\Cookie;
use Livewire\Component;
use Livewire\Attributes\On;

class Header extends Component
{
    public $itemCount;
    public $hasProductInCart;
    public function mount()
    {
        $this->getItemCount();
    }

    #[On('orderUpdated')]
    public function getItemCount()
    {
        $this->itemCount = (int) Cookie::get(app('order')->orderCookieKey['OrderId']) > 0 ? (int) Cookie::get(app('order')->orderCookieKey['OrderItemCount']) : 0;
        $this->hasProductInCart = (bool) $this->itemCount;
    }
    public function render()
    {
        return view('livewire.header');
    }
}