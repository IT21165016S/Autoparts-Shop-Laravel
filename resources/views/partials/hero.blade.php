<header class="bg-teal-600 text-white">
    <div class="container mx-auto px-4 py-4 flex justify-between items-center">
        <!-- Logo -->
        <div class="flex items-center space-x-2">
            <!-- Hamburger Menu (Mobile Only) -->
            <button class="md:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>

            <!-- Logo Image -->
            <img src="/resources/image/Logo.png" alt="DriveProX" class="h-6">

            <!-- Logo Text -->
            <span class="text-xl font-bold ml-2">DriveProX</span>
        </div>

        <!-- Search Bar (Desktop Only) -->
        <form action="#" class="search-bar flex-grow md:flex hidden md:block">
            <input type="text"
                   placeholder="Search by Make Model Year, Product Type, Part Number, or Brand"
                   class="px-4 py-2 rounded-l-md w-full">
            <button type="submit" class="bg-white hover:bg-gray-100 p-2 rounded-r-md">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-5.197-5.197m0 0A7.5 7.5 0 103.303 3.303m18 13.697a9 9 0 11-12.728-12.73l5.197 5.197a8.955 8.955 0 01-1.414 1.414l1.205 7.226c.047.28.166.529.225.709H18a3.006 3.006 0 00-3-3V8.25a3.006 3.006 0 00-3-3H7.5z" />
                </svg>
            </button>
        </form>

        <!-- Cart & Profile Icons -->
        <div class="flex items-center space-x-4">
            <button>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h2l.477 15.047A2 2 0 006.477 21h9.045a2 2 0 001.414-.586l6.158-13.006A2 2 0 0021 3h-2" />
                </svg>
            </button>
            <button>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.5 12a3.75 3.75 0 107.5 0 3.75 3.75 0 00-7.5 0z" />
                </svg>
            </button>
        </div>
    </div>
</header>