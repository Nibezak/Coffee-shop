@props(['author'])
          <div class="w-full  mr-4 md:w-3/4 overflow-y-scroll h-screen">
            <div class="my-4 ">

              <div class="-mt-6 flex justify-between px-4 py-3 bg-indigo-100 border border-indigo-200 rounded-t-lg">
                <div class="flex items-center">
                  <img class="w-6 h-6 mr-2 rounded-md" src="https://i.pravatar.cc/?u={{auth()->user()->username}}"  alt="">
                  <p class="text-sm font-semibold">{{auth()->user()->username}}</p>
                  <span class="ml-2 text-sm text-gray-600 font-semibold">Joined {{auth()->user()->created_at->diffForHumans()}}</span>
                </div>
                <div class="hidden md:block md:flex">


                  <a href="" class="items-center mb-1 ml-4 text-sm font-medium text-gray-700 hover:underline hover:text-blue-500 hidden lg:block lg:flex">
                    <svg class="w-4 h-4 mr-1" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                      <path d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z"></path>
                    </svg>
                    {{auth()->user()->posts->count()}} posts
                  </a>
                </div>
              </div>

              <div class="justify-between hidden text-center border-b border-l border-r rounded-b-lg md:block">


                @forelse($author->posts as $post)
                <div class="justify-between flex px-4 py-6 border-b-2 border-gray-200 text-sm hover:bg-gray-200">
                  <div class="flex w-full justify-between">
                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                      <path d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                    </svg>

                    <a  href="/posts/{{$post->slug}}" class="ml-2 block font-bold text-gray-600 text-md cursor-pointer hover:underline hover:text-blue-500" title="{{$post->title}}">{{ Str::limit($post->title, 10, ' ...')}}:</a>

                    <a class="w-1/3 text-left px-6 cursor-pointer ">{{Str::limit($post->verse,40 ,'..')}}</a>
                    <p class="w-1/4 ml-2 text-right text-gray-500 font-semibold mx-3 my-1">{{$post->created_at->diffForHumans()}} </p>
                    <form method="POST" action="/posts/{{$post->id}}/delete">
                      @csrf
                   <button class=" ml-2 text-right  font-semibold bg-red-600 px-3 py-1 rounded-md text-white" type="submit">Delete</button>
                    </form>
                      <form method="GET" action="/posts/{{$post->id}}/edit">
                      @csrf
                   <button class=" ml-2 text-right  font-semibold bg-green-600 px-3 py-1 rounded-md text-white" type="submit">Edit</button>
                    </form>
                  </div>
                </div>
                @empty

                <div class="absolute w-3/5 h-1/2 -mt-24">
  <section class="py-52">
    <div class="items-center block">
      <span class="block text-xl font-semibold text-gray-600">Looks Like you haven't posted anything yet!</span>
      <span class="block text-lg text-gray-600">Try Posting Something on your page</span>
      <span class="block text-lg  text-gray-600">Hit the <a href="#" class="text-blue-500 underline">documantation</a> for the Guide</span>
{{-- // Create blog toggle  --}}

<!-- component -->

<section class=" flex  p-10 justify-center items-start">
<x-buttons.create-blog/>

  </section>
</div>
</section>
@endforelse



              </div>

            </div>
          </div>
