    {{-- the layout file applied on every file on the project --}}
    <x-layout>
    {{-- the navbar contains the project's logo and the subscription link --}}
@empty($posts)
<x-404-page/>
@endempty
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


    <div class="lg:grid lg:grid-cols-2 lg:gap-4">
    @foreach( $posts as $post )
    <div>

    <x-post-grid-card :post="$post" class="{{ $loop->iteration < 2 ? 'col-span-2 ' : 'col-span-3'}}"/>

    </div>

@endforeach
    </div>




    </div>
    {{-- show the most recent post --}}

    <div class="px-8 mt-1 h-1/2 hidden w-4/12 -mx-8 lg:block">

    <x-notice-board />
    </div>

    </div>

    <div class="mt-8">
    <x-pagination-bar>
        {{$posts->links()}}
    </x-pagination-bar>
    </div>
    </div>

    </x-layout>
