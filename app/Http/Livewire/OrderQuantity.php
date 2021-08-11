<?php

namespace App\Http\Livewire;

use Livewire\Component;

class OrderQuantity extends Component
{
    public $description;
    public $unit_price;
    public $quantity = 1;
    public $total_amount;
    public $user;

    public function mount()
    {
        $this->total_amount = $this->quantity * $this->unit_price;
    }

    public function render()
    {
        return view('livewire.order-quantity');
    }

    public function inc()
    {
        $this->quantity++;
    }

    public function dec()
    {
        if ($this->quantity > 1) {
            $this->quantity--;
        }
    }

    public function updated($quantity)
    {
        dd('hi');
        // $this->total_amount = $this->unit_price * $quantity;
    }
}
