<?php

namespace App\Livewire;

use App\Jobs\UpdateProductsFromAPI;
use App\Models\Product;
use Livewire\Component;
use Illuminate\Support\Facades\Http;

class UpdateProducts extends Component
{
    public $status = "NOT SYNCED";
    public $data;
    public $count = 0;

    public function update()
    {
        $status = "SYNCING";
        $response  = Http::acceptJson()->get('http://127.0.0.1:8080');
        
        if ($response->successful()) {
            $this->status = "SYNCED";
        } else {
            $this->status = "ERROR";
        }

        $this->data = collect($response->json());
        $this->count = $this->data->count();

        UpdateProductsFromAPI::dispatch($this->data);

        $this->status = "SYNCED AND QUEUED FOR UPDATE";
    }

    public function removeAll()
    {
        Product::query()->delete();
        return redirect()->to('/dashboard')->with('status', 'All products removed');
    }

    public function render()
    {
        return view('livewire.update-products');
    }
}
