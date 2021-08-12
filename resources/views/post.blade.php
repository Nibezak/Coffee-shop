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
    <div class="mt-6 max-w-4xl px-10 py-6 mx-auto bg-white rounded-lg shadow-md">
    <div class="flex items-center justify-between">

    <span class="font-semibold text-gray-600">

    {!!$post->created_at->diffForHumans()!!}

    </span>

    @foreach( $post->tags as $tag )

    <x-tag-link href="/tags/{{$tag->slug}}">

    {!! $tag->slug !!}

    </x-tag-link>

    @endforeach

    </div>

    <div class="mt-2">
    <h1  class="text-4xl font-bold p-4 text-gray-700 ">
    {!! $post->title !!}
    </h1>
    <x-read-time>
         {{ read_time($read_time)}}
    </x-read-time>
    <div class="space-y-4 lg:text-lg leading-loose">
    {!! $post->body !!}
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



    </div>

    <div class="sticky px-8 mt-1 h-1/2 hidden w-4/12 -mx-8 lg:block">

    <div class="bg-white p-3 border-t-4 border-blue-400">
    @include('components.authors-info-card')
    </div>


    <h1 class="mb-4 text-xl font-bold text-gray-700">Notice Board</h1>
    <div>
    <x-notice-board />

    </div>
    </div>

    </div>



    </div>


<div class="container">
<x-progress-bar />
</div>


    </x-layout>
