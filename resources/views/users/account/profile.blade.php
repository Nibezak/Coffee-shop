<x-layout>
    <x-navbar/>
<div class="bg-white px-2 py-3">

    <div class="px-6 mt-4 overflow-x-hidden lg:px-10">
      <div class="flex flex-col md:flex-row md:justify-between">
        <div class="flex items-center">
          <span>
            <svg class="w-4 h-4 mr-2 text-gray-600 fill-current" viewBox="0 0 16 16" version="1.1" width="16" height="16" aria-hidden="true"><path fill-rule="evenodd" d="M2 2.5A2.5 2.5 0 014.5 0h8.75a.75.75 0 01.75.75v12.5a.75.75 0 01-.75.75h-2.5a.75.75 0 110-1.5h1.75v-2h-8a1 1 0 00-.714 1.7.75.75 0 01-1.072 1.05A2.495 2.495 0 012 11.5v-9zm10.5-1V9h-8c-.356 0-.694.074-1 .208V2.5a1 1 0 011-1h8zM5 12.25v3.25a.25.25 0 00.4.2l1.45-1.087a.25.25 0 01.3 0L8.6 15.7a.25.25 0 00.4-.2v-3.25a.25.25 0 00-.25-.25h-3.5a.25.25 0 00-.25.25z"></path>
            </svg>
          </span>

          <div class="text-xl font-semibold text-blue-700 cursor-pointer hover:underline">
            <a href="{{ route('all-posts') }}">Go to Blog</a></div>
        </div>
        <div class="mt-4 mb-2 md:hidden">
          <span class="text-sm">
          A utility-first CSS framework for rapid UI development.
          </span>
          <div class="my-2">
            <a class="flex items-center mb-1 text-sm font-semibold text-blue-600 hover:underline" href="#">
              <svg class="w-4 h-4 mr-2 text-gray-700" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"></path></svg>
              tailwindcss.com/</a>
            <a href="" class="flex items-center mb-1 text-sm font-medium text-gray-700 hover:underline">
              <svg height="16" class="w-4 h-4 mr-2 text-gray-700 fill-current" mr="2" viewBox="0 0 16 16" version="1.1" width="16" aria-hidden="true">
                <path fill-rule="evenodd" d="M8.75.75a.75.75 0 00-1.5 0V2h-.984c-.305 0-.604.08-.869.23l-1.288.737A.25.25 0 013.984 3H1.75a.75.75 0 000 1.5h.428L.066 9.192a.75.75 0 00.154.838l.53-.53-.53.53v.001l.002.002.002.002.006.006.016.015.045.04a3.514 3.514 0 00.686.45A4.492 4.492 0 003 11c.88 0 1.556-.22 2.023-.454a3.515 3.515 0 00.686-.45l.045-.04.016-.015.006-.006.002-.002.001-.002L5.25 9.5l.53.53a.75.75 0 00.154-.838L3.822 4.5h.162c.305 0 .604-.08.869-.23l1.289-.737a.25.25 0 01.124-.033h.984V13h-2.5a.75.75 0 000 1.5h6.5a.75.75 0 000-1.5h-2.5V3.5h.984a.25.25 0 01.124.033l1.29.736c.264.152.563.231.868.231h.162l-2.112 4.692a.75.75 0 00.154.838l.53-.53-.53.53v.001l.002.002.002.002.006.006.016.015.045.04a3.517 3.517 0 00.686.45A4.492 4.492 0 0013 11c.88 0 1.556-.22 2.023-.454a3.512 3.512 0 00.686-.45l.045-.04.01-.01.006-.005.006-.006.002-.002.001-.002-.529-.531.53.53a.75.75 0 00.154-.838L13.823 4.5h.427a.75.75 0 000-1.5h-2.234a.25.25 0 01-.124-.033l-1.29-.736A1.75 1.75 0 009.735 2H8.75V.75zM1.695 9.227c.285.135.718.273 1.305.273s1.02-.138 1.305-.273L3 6.327l-1.305 2.9zm10 0c.285.135.718.273 1.305.273s1.02-.138 1.305-.273L13 6.327l-1.305 2.9z"></path></svg>
              MIT License
            </a>
            <div class="flex">
              <a href="" class="flex items-center mb-1 text-sm font-medium text-gray-700 hover:underline hover:text-blue-500">
                <svg class="w-4 h-4 mr-2 fill-current" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
                  <path d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
                </svg>
              24.1k stars
            </a>

            </div>
          </div>
        </div>
<x-reads/>
          <div class="flex mx-4">
       <x-total-stars/>
        </div>
        <div class="flex justify-between md:hidden">
          <button type="button" class="flex justify-center w-1/2 py-1 mr-2 text-center  border border-gray-400 rounded-lg focus:outline-none hover:bg-gray-200">
            <div class="flex items-center px-2">
              <svg class="w-4 h-4 mr-1 text-gray-700" fill="currentColor" viewBox="0 0 20 20">
                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
              </svg>
              <span class="self-center text-sm font-medium">Unstar</span>
            </div>
          </button>
          <button type="button" class="flex justify-center w-1/2 py-1 ml-2 text-center bg-gray-100 border border-gray-400 rounded-lg focus:outline-none hover:bg-gray-300">
            <div class="flex items-center px-2">
              <svg class="w-4 h-4 mr-1 text-gray-700" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                <path d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                <path d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
              </svg>
              <span class="self-center text-sm font-medium">reads</span>
              <svg class="w-3 h-3 ml-1 text-gray-700 fill-current" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M19 9l-7 7-7-7"></path>
              </svg>
            </div>
          </button>
        </div>
      </div>
      <div class="flex  items-center justify-center px-10 mt-6 -mx-10 border-b select-none md:mt-4">
        <div class="flex">
          <div class="flex items-center hidden px-4 pb-2 text-sm border-b-2 border-transparent cursor-pointer hover:border-gray-300 md:block md:flex">
            <svg class="hidden w-5 h-5 mr-1 text-gray-700 md:block" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
              <path d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z"></path><path d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
            Create
          </div>
          <div class="flex items-center hidden px-4 pb-2 text-sm border-b-2 border-transparent cursor-pointer hover:border-gray-300 lg:flex lg:block">
            <svg class="hidden w-5 h-5 mr-1 text-gray-700 md:block" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
              <path d="M20.618 5.984A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016zM12 9v2m0 4h.01"></path></svg>
            Settings
          </div>
          <div class="flex items-center hidden px-4 pb-2 text-sm border-b-2 border-transparent cursor-pointer hover:border-gray-300 lg:flex lg:block">
            <svg class="hidden w-5 h-5 mr-1 text-gray-700 md:block" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M16 8v8m-4-5v5m-4-2v2m-2 4h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
         Advertise
          </div>
        </div>
        <div class="flex items-start pb-2 cursor-pointer md:hidden">
          <svg class="w-5 h-5 text-gray-700 fill-current" fill="currentColor" viewBox="0 0 20 20"><path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z"></path></svg>
        </div>
      </div>
      <div class="container pb-10 mx-auto mt-8">
        <div class="md:flex" id="wrapper">
          <x-all-author-posts :posts="$posts"/>

    {{-- <x-management-board/> --}}

          <div class="ml-4 md:w-1/4">
            <div class="hidden md:block">
              <p class="text-base font-semibold text-black">Actions</p>

            </div>
<!-- component -->
<div class="max-w-sm bg-white shadow-lg rounded-lg overflow-hidden my-4">
        <img class="w-full h-56 object-cover object-center" src="https://i.pravatar.cc/?u={{auth()->user()->username}}"  alt="avatar">
        <div class="flex items-center px-2 py-3 bg-gray-900 justify-between">

            <div class="mx-3 text-white font-semibold text-lg inline-flex text-green-400">
                  <svg class="h-6 w-6  fill-current" viewBox="0 0 512 512">
                <path d="M256 48C150 48 64 136.2 64 245.1v153.3c0 36.3 28.6 65.7 64 65.7h64V288h-85.3v-42.9c0-84.7 66.8-153.3 149.3-153.3s149.3 68.5 149.3 153.3V288H320v176h64c35.4 0 64-29.3 64-65.7V245.1C448 136.2 362 48 256 48z"/>
            </svg>
         <h1 class="px-2"> Editor </h1>
       </div>
            <div class="px-2">
              <button class=" mx-3 text-blue-500 font-semibold text-sm  border-2 border-blue-600 px-3 py-1 bg-transparent rounded-md hover:bg-blue-600 hover:text-white">Edit</button>
            </div>
        </div>
        <div class="py-4 px-6">
            <h1 class="text-2xl font-semibold text-gray-800">{{auth()->user()->name}}</h1>
            <p class="py-2 text-md font-semibold text-gray-500">{{auth()->user()->username}}</p>


            <div class="flex items-center mt-4 text-gray-500">
                <svg class="h-6 w-6 fill-current" viewBox="0 0 512 512">
                    <path d="M437.332 80H74.668C51.199 80 32 99.198 32 122.667v266.666C32 412.802 51.199 432 74.668 432h362.664C460.801 432 480 412.802 480 389.333V122.667C480 99.198 460.801 80 437.332 80zM432 170.667L256 288 80 170.667V128l176 117.333L432 128v42.667z"/>
                </svg>
                <h1 class="px-2 text-sm font-semibold text-gray-500">{{auth()->user()->email}}</h1>
            </div>
        </div>
    </div>
          </div>
        </div>
        <div class="mt-8">
          <div class="w-full px-8 mx-auto hidden md:block md:container">
              <div class="items-center justify-between py-8 border-t md:flex">
                <div class="flex justify-start justify-between text-xs md:mt-0 md:w-2/5">
                  <div class="mr-4 text-gray-600">
                    © 2020 GitHub, Inc.
                  </div>
                  <div class="mr-4">
                    <a href="#" class="text-blue-600 hover:underline focus:outline-none">
                      Terms
                    </a>
                  </div>
                  <div class="mr-4">
                    <a href="#" class="text-blue-600 hover:underline focus:outline-none">
                      Privacy
                    </a>
                  </div>
                  <div class="mr-4">
                    <a href="#" class="text-blue-600 hover:underline focus:outline-none">
                      Security
                    </a>
                  </div>
                  <div class="mr-4">
                    <a href="#" class="text-blue-600 hover:underline focus:outline-none">
                      Status
                    </a>
                  </div>
                  <div class="mr-4">
                    <a href="#" class="text-blue-600 hover:underline focus:outline-none">
                      Help
                    </a>
                  </div>
                </div>
                <div class="justify-center hidden w-1/5 text-center md:block">
                  <svg class="w-6 h-6 mx-auto text-gray-500 cursor-pointer fill-current hover:text-gray-600" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"></path></svg>
                </div>
                <div class="flex justify-end justify-between mt-2 text-xs text-right md:mt-0 md:w-2/5">
                  <div class="ml-4">
                    <a href="#" class="text-blue-600 hover:underline focus:outline-none">
                      Contact GitHub
                    </a>
                  </div>
                  <div class="ml-4">
                    <a href="#" class="text-blue-600 hover:underline focus:outline-none">
                      Pricing
                    </a>
                  </div>
                  <div class="ml-4">
                    <a href="#" class="text-blue-600 hover:underline focus:outline-none">
                      Api
                    </a>
                  </div>
                  <div class="ml-4">
                    <a href="#" class="text-blue-600 hover:underline focus:outline-none">
                      Training
                    </a>
                  </div>
                  <div class="ml-4">
                    <a href="#" class="text-blue-600 hover:underline focus:outline-none">
                      Blog
                    </a>
                  </div>
                  <div class="ml-4">
                    <a href="#" class="text-blue-600 hover:underline focus:outline-none">
                      About
                    </a>
                  </div>
                </div>
              </div>
          </div>
        </div>
        <div class="mt-12 border-t md:hidden border-gray-200 pt-8 mx-auto">
          <p class="text-base leading-6 text-gray-600 xl:text-center">
            © 2020 GitHub, Inc.,
          </p>
        </div>
      </div>
    </div>
</div>
</x-layout>




















































