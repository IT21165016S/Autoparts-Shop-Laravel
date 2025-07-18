<section class="dream-cars my-10">
    <div class="container mx-auto px-4">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-2xl font-semibold">Your Dream Car</h2>
            <a href="#" class="text-gray-600 hover:text-gray-800">View All →</a>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            @foreach ($cars as $car)
                <div class="bg-white p-4 rounded-lg shadow-md">
                    <img src="{{ $car->image }}" alt="{{ $car->name }}" class="w-full h-40 object-cover mb-2">
                    <h3 class="text-lg font-bold">{{ $car->name }}</h3>
                    <p class="text-gray-600 mb-2">Eheliyagoda</p>
                    <p class="text-red-600 font-bold">LKR {{ $car->price }}</p>
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