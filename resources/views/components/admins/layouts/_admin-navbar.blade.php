<header class="z-10 py-4 bg-white dark:bg-gray-800">
    <div class="container flex items-center justify-between h-full px-6 mx-auto text-blue-600 dark:text-blue-300">
        <!-- Mobile hamburger -->
        <button @click="toggleSideMenu" aria-label="Menu" class="p-1 mr-5 -ml-1 rounded-md md:hidden focus:outline-none focus:shadow-outline-blue">
            <svg aria-hidden="true" class="w-6 h-6" fill="currentColor" viewbox="0 0 20 20">
                <path clip-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" fill-rule="evenodd">
                </path>
            </svg>
        </button>
        <!-- Search input -->
        <div class="flex justify-center flex-1 lg:mr-32">
            <div class="relative w-full max-w-xl mr-6 focus-within:text-blue-500">
                <div class="absolute inset-y-0 flex items-center pl-2">

                </div>
                <div class="w-full pl-8 pr-2 bg-transparent">
                    
                </div>
            </div>
        </div>
        <ul class="flex items-center flex-shrink-0 space-x-6">
            <!-- Profile menu -->
            <li class="relative">
                <x-account-button>
                </x-account-button>
            </li>
        </ul>
    </div>
</header>
