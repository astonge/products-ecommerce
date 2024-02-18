<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Product;

class ListProducts extends Component
{

    public $products;

    public function mount()
    {
        $this->refreshProducts();
    }

    public function getListeners()
    {
        return [
            'echo:products,ProductsUpdated' => 'refreshProducts',
        ];
    }

    public function refreshProducts()
    {
        $this->products = Product::query()->get();
    }

    public function render()
    {
        return view('livewire.list-products');
    }
}
