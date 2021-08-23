<div class="flex-col hidden md:flex md:flex-row md:-mx-4">
@auth
<div x-data="{ dropdownOpen: false }" class="relative  inline-flex">
        <div class="item-center inline-flex  justify-between px-4  py-1">
<strong @click="dropdownOpen = ! dropdownOpen"  class="text-sm cursor-pointer font-semibold py-1 px-4">{{ ucwords(Auth::user()->username)}}</strong>

                        <button @click="dropdownOpen = ! dropdownOpen" class="relative block h-8 w-8 rounded-full overflow-hidden shadow focus:outline-none">
                            <img class="h-full w-full object-cover" src="https://images.unsplash.com/photo-1528892952291-009c663ce843?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=296&amp;q=80" alt="Your avatar">
                        </button>
</div>
                        <div x-show="dropdownOpen" @click="dropdownOpen = false" class="fixed inset-0 h-full w-full z-10" style="display: none;"></div>

                        <div x-show="dropdownOpen" class="absolute  right-0 mt-10  w-48 bg-white rounded-md overflow-hidden shadow-xl z-10" style="display: none;">
                         <x-logout-button/>
                        </div>
                    </div>
                    @else

<x-login-button/>


                    @endauth
</div>
