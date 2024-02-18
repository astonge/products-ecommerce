<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Collection;
use App\Models\Product;
use App\Events\ProductsUpdated;

class UpdateProductsFromAPI implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $data;
    /**
     * Create a new job instance.
     */
    public function __construct(Collection $data)
    {
        $this->data = $data;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $this->data->each(function ($element) {
            Product::create([
                'name'      => $element['name'],
                'price'     => $element['price'],
                'quantity'  => $element['quantity'],
                'image_url' => 'https://fakeimg.pl/100/100',
            ]);
        });

        // TODO check that new products were created

        // Fire event when done adding products
        event(new ProductsUpdated());
    }
}
