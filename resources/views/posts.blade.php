    {{-- the layout file applied on every file on the project --}}
    <x-layout>
    {{-- the navbar contains the project's logo and the subscription link --}}
    <x-navbar/>


    <div class="px-6 py-8"> {{-- In referrence of the slot which contains everything visible to the page --}}



    <div class="container flex justify-between mx-auto">
    <div class="w-full lg:w-8/12">
    <div class="flex items-center justify-between">
    {{-- the action button will display "All Posts " if we are at the home page and display a "Go back " BUTTON if we are elsewhere --}}
    <x-action-button>
    @if(request()->is('/'))
    All Posts
    @else
    <x-previous-page-link />
    @endif
    </x-action-button>

    <x-filters-bar />{{--  show all filters --}}
    </div>

    @empty($posts) {{-- take this action if the posts are empty --}}
    <p> Sorry, no Posts yet! </p>
    @endempty
    @if($posts->count() > 1)
    <x-post-card :posts="$posts[1]" /> {{-- show the post-card if the posts are not empty --}}
    <x-post-card :posts="$posts[2]" /> {{-- show the post-card if the posts are not empty --}}
    @endif
    @if( $posts->count() < 2) {{-- if the available post are more that 2 create a grid for other posts --}}

    @forelse($posts as $post)
    <x-post-grid-card :post="$post" class="{{ $loop->iteration < 2 ? ' ' : 'col-span-3'}}"/>
    @empty
    {{-- If the posts are less than 2 that means the grid is not need  take an action --}}
    @endforelse
    @endif




    </div>
    {{-- show the most recent post --}}

    <div class="px-8 mt-1 h-1/2 hidden w-4/12 -mx-8 lg:block">
    <div class="px-2 mt-10 py-3">
    <h1 class="mb-4 text-xl font-bold text-gray-700">Most Recent Post</h1>

    <x-recent-post :posts="$posts[0]"/>

    </div>
    <h1 class="mb-4 text-xl font-bold text-gray-700">Notice Board</h1>
    <div>
    <x-notice-board />

    </div>
    </div>

    </div>



    <div class="lg:grid lg:grid-cols-3 lg:gap-4">
    @forelse( $posts->skip(3) as $post )
    <div>

    <x-post-grid-card :post="$post" class="{{ $loop->iteration < 2 ? ' ' : 'col-span-3'}}"/>

    </div>
    @empty
    nothing yet
    @endforelse
    </div>
    <div class="mt-8">
    <x-pagination-bar />
    </div>
    </div>

    </x-layout>
