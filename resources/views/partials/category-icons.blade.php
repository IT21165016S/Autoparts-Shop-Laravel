<section class="category-icons my-10">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-4">
            @foreach ($categories as $category)
                <div class="bg-white p-4 rounded-lg shadow-md flex flex-col items-center">
                    <img src="{{ $category->icon }}" alt="{{ $category->name }}" class="w-10 h-10 mb-2">
                    <p class="text-center">{{ $category->name }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>