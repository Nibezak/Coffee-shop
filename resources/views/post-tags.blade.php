<x-layout>

<x-navbar/>
    <div class="px-6 py-8">



        <div class="container flex justify-between mx-auto">
            <div class="w-full lg:w-8/12">
        <div class="flex items-center justify-between">
            <x-action-button>

                <x-previous-page-link />

            </x-action-button>

<x-filters-bar />

</div>
@foreach($posts as $post)
<div class="mt-6 max-w-4xl px-10 py-6 mx-auto bg-white rounded-lg shadow-md">
                        <div class="flex items-center justify-between">

                            <span class="font-semibold text-gray-600">

                             {!!$post->created_at->diffForHumans()!!}

                            </span>

                                @foreach( $post->post_card_tags as $tag )

                        <x-tag-link href="/tags/{{$tag->slug}}">

                                    {!! $tag->slug !!}

                           </x-tag-link>

                                @endforeach

                        </div>

                        <div class="mt-2">
                            <h1  class="text-2xl font-bold text-gray-700 ">
                        {{$post->title}}
                    </h1>
                            <div class="space-y-4 lg:text-lg leading-loose">
                          {{$post->verse}}
                            </div>




                        </div>

                        <div class="flex items-center justify-between mt-4">
<!-- component -->
<!-- This is an example component -->
<div class="flex justify-center items-center">
    @foreach(range(1,5) as $star)
<x-star-rating />
@endforeach

</div>
                            <div>
                                <a href="/authors/{{$post->author->username}}" class="flex items-center">

                                    <p class="font-semibold text-base">
                                        post by <span class="font-bold">
                                    {{$post->author->username}}
                                </span>
                                </p>

                                <img src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=731&amp;q=80" alt="avatar" class="hidden object-cover w-10 h-10 mx-4 rounded-full sm:block">

                                </a>
                            </div>
                        </div>
                    </div>
@endforeach
{{-- div-end --}}

            </div>

                <div class="px-8 mt-1 h-1/2 hidden w-4/12 -mx-8 lg:block">

                    <x-notice-board />

                </div>

        </div>




                    <div class="mt-8">
          <x-pagination-bar />
                </div>
    </div>




</x-layout>
