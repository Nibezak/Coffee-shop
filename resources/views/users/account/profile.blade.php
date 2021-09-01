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
        {{-- navbar --}}
<x-action-navbar/>
{{-- end navbar  --}}

      <div class="container pb-10 mx-auto mt-8">
        <div class="md:flex" id="wrapper">
          {{-- author's posts --}}
          <x-all-author-posts :author="$author"/>

    {{-- <x-management-board/> --}}

          <div class="ml-4 md:w-1/4">
            <div class="hidden md:block">
              <p class="text-base font-semibold text-black">Actions</p>

            </div>
<!-- component -->
<div class="max-w-sm bg-white shadow-lg rounded-lg overflow-hidden my-4">

        <x-profile-info-card />
    </div>
          </div>
        </div>
        <div class="mt-8">
          <div class="w-full px-8 mx-auto hidden md:block md:container">


              </div>
          </div>
        </div>

      </div>
    </div>
</div>
</x-layout>




















































