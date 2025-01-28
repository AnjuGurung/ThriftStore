<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100">
    <div class="container mx-auto py-10">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-3xl font-bold">Product List</h1>
            <a href="{{ route('products.create') }}"
               class="bg-indigo-600 text-white px-4 py-2 rounded shadow hover:bg-indigo-700">
                Add Product
            </a>
        </div>

        @if (session('success'))
            <div class="mb-4 text-green-600">
                {{ session('success') }}
            </div>
        @endif

        <div class="bg-white shadow rounded-lg overflow-hidden">
            <table class="min-w-full table-auto">
                <thead>
                    <tr class="bg-gray-200 text-gray-700 uppercase text-sm leading-normal">
                        <th class="py-3 px-6 text-left">ID</th>
                        <th class="py-3 px-6 text-left">Name</th>
                        <th class="py-3 px-6 text-left">Price</th>
                        <th class="py-3 px-6 text-left">Quantity</th>
                        <th class="py-3 px-6 text-left">Actions</th>
                    </tr>
                </thead>
                <tbody class="text-gray-600 text-sm font-light">
                    @forelse ($products as $product)
                        <tr class="border-b border-gray-200 hover:bg-gray-100">
                            <td class="py-3 px-6">{{ $product->id }}</td>
                            <td class="py-3 px-6">{{ $product->name }}</td>
                            <td class="py-3 px-6">Rs.{{ number_format($product->price, 2) }}</td>
                            <td class="py-3 px-6">{{ $product->quantity }}</td>
                            <td class="py-3 px-6">
                                <div class="flex items-center space-x-4">
                                    <a href="{{ route('products.show', $product->id) }}"
                                       class="text-blue-500 hover:underline">View</a>
                                    <a href="{{ route('products.edit', $product->id) }}"
                                       class="text-indigo-500 hover:underline">Edit</a>
                                    <form action="{{ route('products.destroy', $product->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-500 hover:underline">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="text-center py-4">No products found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
