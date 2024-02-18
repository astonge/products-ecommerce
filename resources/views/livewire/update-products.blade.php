<div>
    <form wire:submit="update">
        <div class="grid grid-cols-3 gap-4 content-start">
            <div class="flex items-center">
                <button type="submit" class="p-2 bg-blue-700 rounded">Sync Products</button>
            </div>
            <div class="flex items-center">
                <p class="ml-2 text-white">{{ $status }}</p>
            </div>
            <div class="justify-self-end">
                <button 
                    type="button"
                    wire:click="removeAll"
                    wire:confirm="Are you sure you want to delete all products?"
                    class="p-2 bg-red-700 rounded">Remove All Products</button>
            </div>
        </div>
    </form>
    <hr width="100%" class="mt-4"/>
    <p class="text-white">{{ $count }}</p>
</div>
