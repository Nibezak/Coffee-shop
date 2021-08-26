<div class="relative px-2 block" x-data="{ isOpen: false }">
                <button @click="isOpen = !isOpen" class="p-1 bg-gray-200 rounded-full focus:outline-none focus:ring">
        <img src="https://i.pravatar.cc/?u={{auth()->user()->username}}" width="30" height="30" class="rounded-full border border-8 border-gray-200">

                </button>
                <!-- green dot -->
                <div class="absolute right-0 p-1 bg-green-400 rounded-full bottom-3 animate-ping"></div>
                <div class="absolute right-0 p-1 bg-green-400 border border-white rounded-full bottom-3"></div>

                <div @click.away="isOpen = false" x-show.transition.opacity="isOpen" class="
                    absolute
                    z-50
                    w-48
                    max-w-md
                    mt-3
                    transform
                    bg-white
                    rounded-md
                    shadow-lg
                    -translate-x-3/4
                    min-w-max
                  " style="display: none;">
                  <div class="flex flex-col p-4 space-y-1 font-medium border-b">
                    <span class="text-gray-800">{{auth()->user()->name}}</span>
                    <span class="text-xs text-gray-400">{{auth()->user()->email}}</span>
                  </div>
                  <ul class="flex flex-col p-2 my-2 space-y-1">
                    <li>
                      <a href="#" class="block px-2 py-1 transition text-sm font-semibold text-gray-500 px-2 py-2 rounded-md hover:bg-gray-100">Profile</a>
                    </li>
                    <li>
                      <a href="#" class="block px-2 py-1 transition text-sm font-semibold text-gray-500 px-2 py-2 rounded-md hover:bg-gray-100">Settings</a>
                    </li>
                  </ul>
                  <div class="block px-2 py-1 transition rounded-md hover:bg-gray-100 justify-start">
                <x-logout-button/>
                  </div>
                </div>
              </div>
