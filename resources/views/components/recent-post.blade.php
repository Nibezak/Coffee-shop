@props(['posts'])

                    <div class="flex flex-col max-w-sm px-8 py-6 mx-auto bg-white rounded-lg shadow-md">

                        <div class="inline-flex items-center justify-center">


                            @foreach($posts->tags->take(3) as $tag)
                         <span
                                class="px-3 py-1 mx-2 bg-gray-300 text-gray-700 rounded-full text-white text-xs uppercase font-semibold"
                                style="font-size: 10px">
                            {{$tag->slug}}
                            </span>
                            @endforeach

                        </div>

                        <div class="mt-4">
                            <a href="/posts/{{$posts->slug}}"
                         class="text-lg font-medium text-gray-700 hover:underline">
                         {!!$posts->title!!}
                    </a>
                    </div>

                        <div class="flex items-center justify-between mt-4">

                            <div class="flex items-center">
                                <img
                                    src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=731&amp;q=80"
                                    alt="avatar" class="object-cover w-8 h-8 rounded-full">
                                    <a href="#"
                                    class="mx-3 text-sm text-gray-700 hover:underline">
                                    {{$posts->author->username}}
                                </a>
                                    </div>
                                    <span
                                class="text-md font-light text-blue-600">
                                {{$posts->updated_at->diffForHumans()}}
                            </span>

                        </div>

                    </div>

