<div>
    <h1>Product List</h1>
    <hr/>
    <div>
        <table class="table-fixed">
            <thead>
                <tr>
                    <th class="px-4 py-2">ID</th>
                    <th class="w-1/3 px-4 py-2">Name</th>
                    <th class="px-4 py-2">Price</th>
                    <th class="px-4 py-2">Quantity</th>
                    <th class="w-1/3 px-4 py-2">Image</th>
                    <th class="px-4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td class="border border-gray-500 px-4 py-2">{{ $product->id }}</td>
                        <td class="border border-gray-500 px-4 py-2">{{ $product->name }}</td>
                        <td class="border border-gray-500 px-4 py-2">{{ $product->price }}</td>
                        <td class="border border-gray-500 px-4 py-2">{{ $product->quantity }}</td>
                        <td class="border border-gray-500 px-4 py-2">
                            <div>
                                <img src="{{ $product->image_url }}" alt="{{ $product->name }}"/>
                            </div>
                        </td>
                        <td class="border border-gray-500 px-4 py-2">
                            <div class="grid grid-flow-col justify-items-center">
                                <button class="bg-blue-700 rounded p-2 m-2">Edit</button>
                                <button class="bg-red-700 rounded p-2 m-2">Delete</button>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
