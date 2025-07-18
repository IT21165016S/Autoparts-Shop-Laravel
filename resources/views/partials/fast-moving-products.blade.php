<section class="fast-moving-products my-10">
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-2xl font-semibold">Fast Moving</h2>
            <a href="#" class="text-gray-600 hover:text-gray-800">View All →</a>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            @foreach ($products as $product)
                <div class="bg-white p-4 rounded-lg shadow-md">
                    <div class="relative">
                        <img src="{{ $product->image }}" alt="{{ $product->name }}" class="w-full h-40 object-cover mb-2">
                        <div class="absolute top-2 right-2 bg-green-600 text-white px-2 text-xs rounded">8%</div>
                    </div>
                    <div class="flex justify-between items-center mb-2">
                        <div class="flex space-x-2">
                            <span class="inline-block bg-yellow-500 text-white text-xs px-1 rounded">⭐️⭐️⭐️⭐️⭐️</span>
                            <span class="text-sm">1 Review</span>
                        </div>
                        <button class="bg-gray-200 hover:bg-gray-300 p-2 rounded">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.477 15.047A2 2 0 006.477 21h9.045a2 2 0 001.414-.586l6.158-13.006A2 2 0 0021 3h-2" />
                            </svg>
                        </button>
                    </div>
                    <h3 class="text-lg font-bold">{{ $product->name }}</h3>
                    <p class="text-red-600 font-bold">LKR {{ $product->price }}</p>
                    <div class="flex space-x-2 mb-2">
                        <span class="bg-gray-200 text-gray-600 px-2 py-1 rounded">100k miles</span>
                        <span class="bg-gray-200 text-gray-600 px-2 py-1 rounded">Auto</span>
                        <span class="bg-gray-200 text-gray-600 px-2 py-1 rounded">Electric</span>
                    </div>
                    <p class="text-sm">2025-05-27</p>
                </div>
            @endforeach
        </div>
    </div>
</section>