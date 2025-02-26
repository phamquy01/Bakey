<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Validate;

class Checkout extends Component
{
    public $order;
    public $name;
    public $email;
    public $phone;
    public $address;
    public $note;

    protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'phone' => 'required|regex:/^0\d{9}$/',
        'address' => 'required|string|max:255',
        'note' => 'string|max:255',
    ];
    protected $messages = [
        'name.required' => 'Tên không được để trống',
        'name.string' => 'Tên phải là chuỗi',
        'name.max' => 'Tên không được quá 255 ký tự',
        'email.required' => 'Email không được để trống',
        'email.email' => 'Email không đúng định dạng',
        'email.max' => 'Email không được quá 255 ký tự',
        'phone.required' => 'Số điện thoại không được để trống',
        'phone.regex' => 'Số điện thoại không đúng định dạng',
        'address.required' => 'Địa chỉ không được để trống',
        'address.string' => 'Địa chỉ phải là chuỗi',
        'address.max' => 'Địa chỉ không được quá 255 ký tự',
        'note.string' => 'Ghi chú phải là chuỗi',
        'note.max' => 'Ghi chú không được quá 255 ký tự',
    ];
    public function mount()
    {
        $this->order = app('order')->order();
    }

    public function completed()
    {
        $this->validate();
        $this->order->update([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
            'address' => $this->address,
            'order_note' => $this->note,
        ]);
        app('order')->complete($this->order);
        return redirect('/dat-hang-thanh-cong');
    }
    public function render()
    {
        return view('livewire.checkout');
    }
}
