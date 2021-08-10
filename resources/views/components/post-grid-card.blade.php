    @props(['post'])
      <div
      {{$attributes->merge(["class"=>"mt-6 max-w-4xl px-10 py-6 mx-auto bg-white rounded-lg shadow-md"])}}>

                        <div class="flex items-center justify-between"><span class="font-semibold text-gray-600">
                                {!! $post->created_at->diffForHumans() !!}</span>
                                {{-- post's tags --}}


                                @foreach($post->postgrid_card_tags as $tag)

                         <x-tag-link>
                             {!! $tag->slug !!}
                         </x-tag-link>
                                @endforeach



                        </div>
                        <div class="mt-2">
                            <a href="/posts/{{$post->slug}}"
                            class="text-2xl font-bold text-gray-700 hover:underline">
                        {!! $post->title !!}
                    </a>
                            <p class="mt-2 text-gray-600">
                                {!! $post->verse !!}
                            </p>
                        </div>

                        <div class="flex items-center justify-between mt-4">
                            <a href="/posts/{{$post->slug}}"
                                class="text-blue-500 hover:underline">
                                Read more
                            </a>

                            <div>
                                <a href="/authors/{{$post->author->username}}" class="flex items-center">
                                <img
                                        src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=731&amp;q=80"
                                        alt="avatar" class="hidden object-cover w-10 h-10 mx-4 rounded-full sm:block">

                                    <h1 class="font-bold text-gray-700 hover:underline">
                                        {!! $post->author->username !!}
                                </h1>

                                </a>
                            </div>
                        </div>
                    </div>
