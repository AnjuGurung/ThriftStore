<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thrift Store</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <!-- Header -->
    <header class="bg-blue-600 text-white">
        <div class="container mx-auto flex items-center justify-between py-4 px-6">
            <h1 class="text-xl font-bold">Thrift Store</h1>
            <div class="flex items-center gap-4">
                <input type="text" placeholder="Search products" class="rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-300">
                <button class="bg-orange-500 text-white px-4 py-2 rounded-lg">Search</button>
                <a href="/login" class="text-white">Login</a>
                <a href="/register" class="bg-orange-500 text-white px-4 py-2 rounded-lg">Cart</a>
            </div>
        </div>
    </header>

    <!-- Categories Section -->
    <section class="bg-white shadow">
        <div class="container mx-auto flex gap-6 py-4 px-6">
            <a href="#" class="text-gray-700 hover:text-blue-500">Electronics</a>
            <a href="#" class="text-gray-700 hover:text-blue-500">Fashion</a>
            <a href="#" class="text-gray-700 hover:text-blue-500">Home & Living</a>
            <a href="#" class="text-gray-700 hover:text-blue-500">Sports</a>
            <a href="#" class="text-gray-700 hover:text-blue-500">Books</a>
            <a href="#" class="text-gray-700 hover:text-blue-500">More...</a>
        </div>
    </section>

    <!-- Main Content -->
    <main class="container mx-auto px-6 py-8">
        <!-- Banner -->
        <!-- <div class="rounded-lg overflow-hidden shadow-lg mb-8">
            <img src="https://via.placeholder.com/1200x400" alt="Banner" class="w-full">
        </div> -->

        <!-- Featured Products -->
        <section>
            <h2 class="text-2xl font-bold mb-6">Featured Products</h2>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
                <!-- Loop through products and display dynamically -->
                @foreach($products as $product)
                <div class="bg-white rounded-lg shadow p-4">
                    <img src="{{ Storage::url($product->image_url) }}" alt="{{ $product->name }}" class="w-full h-40 object-cover rounded">
                    <h3 class="text-lg font-semibold mt-4">{{ $product->name }}</h3>
                    <p class="text-gray-500">Rs. {{ number_format($product->price, 2) }}</p>
                    <button class="mt-4 bg-blue-600 text-white px-4 py-2 rounded-lg w-full">Add to Cart</button>
                </div>
                @endforeach
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-6">
        <div class="container mx-auto text-center">
            <p>© 2025 Thrift Store. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>