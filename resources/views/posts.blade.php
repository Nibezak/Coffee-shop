<x-layout>
<x-navbar/>
    <div class="px-6 py-8">



        <div class="container flex justify-between mx-auto">
            <div class="w-full lg:w-8/12">
        <div class="flex items-center justify-between">
<x-action-button>
    @if(request()->is('/'))
    All Posts
    @else
    <x-previous-page-link />
    @endif
</x-action-button>
<x-filters-bar />
</div>
@if( $posts->count() === 0 )
    <p> Sorry, no Posts yet! </p>
    @elseif( $posts->count() < 3)
    @foreach($posts as $post)
<x-post-grid-card :post="$post" class="{{ $loop->iteration < 2 ? ' ' : 'col-span-3'}}"/>

    @endforeach
    @else
<x-post-card :posts="$posts[1]" />
<x-post-card :posts="$posts[2]" />
@endif



            </div>

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
       {{--      </div> --}}
            {{-- posts page --}}
        </div>

{{-- <x-post-grid-card :post="$post" class="{{$loop->iteration < 3 ? 'col-span-2 ' : 'col-span-3'}}"/> --}}

<div class="lg:grid lg:grid-cols-3 lg:gap-4">
@forelse( $posts->skip(3) as $post )
<div>

<x-post-grid-card :post="$post" class="{{ $loop->iteration < 2 ? ' ' : 'col-span-3'}}"/>

</div>
@empty

@endforelse
</div>
                    <div class="mt-8">
          <x-pagination-bar />
                </div>
    </div>

</x-layout>
