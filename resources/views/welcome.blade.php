
<x-layout>

<!-- component -->
<header class="bg-white dark:bg-gray-800">
    <nav class="bg-white dark:bg-gray-800">
        <div class="container p-6 mx-auto">
                    <span class="  w-1 h-1 ">
                        <img src="/images/logo.png" class="w-12">
                    </span>

            <div class="flex items-center justify-center mt-6 text-gray-600 capitalize dark:text-gray-300">
                <a href="#" class="text-gray-800 dark:text-gray-200 border-b-2 border-blue-500 mx-1.5 sm:mx-6">home</a>

                <a href="#" class="border-b-2 border-transparent hover:text-gray-800 dark:hover:text-gray-200 hover:border-blue-500 mx-1.5 sm:mx-6">features</a>

                <a href="#" class="border-b-2 border-transparent hover:text-gray-800 dark:hover:text-gray-200 hover:border-blue-500 mx-1.5 sm:mx-6">About </a>

                <a href="{{route('all-posts')}}" class="font-semibold border-b-2 border-transparent hover:text-gray-800 dark:hover:text-gray-200 hover:border-blue-500 mx-1.5 sm:mx-6">blog</a>
                @auth
                <x-account-button/>
                @endauth
                @guest
                <a href="{{route('login')}}" class="text-lg border-b-2 border-transparent  text-blue-500 hover:border-blue-500 mx-1.5 sm:mx-6">login</a>
{{--
           <a href="{{route('register')}}" class="text-lg border-b-2 border-transparent  text-blue-500 hover:border-blue-500 mx-1.5 sm:mx-6">register</a> --}}
                @endguest
            </div>
        </div>
    </nav>

    <div class="container flex flex-col px-6 py-4 mx-auto space-y-6 md:h-128 md:py-16 md:flex-row md:items-center md:space-x-6">
        <div class="flex flex-col items-center w-full md:flex-row md:w-1/2">
            <div class="flex justify-center order-2 mt-6 md:mt-0 md:space-y-3 md:flex-col">
                <button class="w-3 h-3 mx-2 bg-blue-500 rounded-full md:mx-0 focus:outline-none"></button>
                <button class="w-3 h-3 mx-2 bg-gray-300 rounded-full md:mx-0 focus:outline-none hover:bg-blue-500"></button>
                <button class="w-3 h-3 mx-2 bg-gray-300 rounded-full md:mx-0 focus:outline-none hover:bg-blue-500"></button>
                <button class="w-3 h-3 mx-2 bg-gray-300 rounded-full md:mx-0 focus:outline-none hover:bg-blue-500"></button>
            </div>

            <div class="max-w-lg md:mx-12 md:order-2">
                <h1 class="text-3xl font-medium tracking-wide text-gray-800 dark:text-white md:text-4xl">Programming News around </h1>
                <p class="mt-4 text-gray-600 text-lg dark:text-gray-300">We all a Team of developers who loves publishing about new technologies we have found and share them with you, Checkout out our <a href="{{ route('all-posts') }}" class="text-blue-500 underline">Blog page</a> to get started</p>
                <div class="mt-6">
                    {{-- newsletter section --}}
                        <form method="POST" action="newsletter/subscribe">
                            @csrf
                    <div class="mb-6 in">
                        <label for="email" class="block font-semibold mb-2 text-md text-gray-600 dark:text-gray-400">Email Address</label>
                        <input type="email" name="email" id="email" placeholder="you@company.com" class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500 @error('email') border border-8 border-red-600 border-opacity-100  @enderror" />
                        @error('email')
                       <span class="text-red-600 text-sm font-semibold px-3 py-2"> {{$message}}</span>
                        @enderror
                    </div>

                    <button class="block px-3 py-2 font-semibold text-center text-white transition-colors duration-200 transform bg-blue-500 rounded-md md:inline hover:bg-blue-400" type="submit">Sign up for NewsLetter</button>
                </form>
                </div>
            </div>
        </div>

        <div class="flex items-center justify-center w-full h-96 md:w-1/2 ">
            <img class="object-cover w-full h-full max-w-2xl rounded-md " src="/images/me.jpg" alt="apple watch photo">
        </div>
    </div>
</header>

        <section class="bg-gray-100"><!-- Start Features -->
            <div class="container mx-auto px-4 py-12 sm:py-16 md:py-20 xl:py-28">
                <div class="space-y-4 text-center mb-10 lg:mb-16">
                    <h2 class="text-4xl md:text-5xl font-semibold">Our service features</h2>
                    <p class="text-lg md:max-w-md mx-auto">Aliquid officiis cumque sunt sint. Et quo culpa. Enim sed natus molestiae fugiat cum consequatur quia sunt.</p>
                </div>
                <div class="grid sm:grid-cols-2 xl:grid-cols-4 gap-6 lg:gap-10">
                    <div class="bg-white transition-shadow duration-200 shadow hover:shadow-xl p-6 rounded-lg space-y-6">
                        <div class="bg-blue-600 flex items-center justify-center w-12 h-12 rounded-full text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M12.395 2.553a1 1 0 00-1.45-.385c-.345.23-.614.558-.822.88-.214.33-.403.713-.57 1.116-.334.804-.614 1.768-.84 2.734a31.365 31.365 0 00-.613 3.58 2.64 2.64 0 01-.945-1.067c-.328-.68-.398-1.534-.398-2.654A1 1 0 005.05 6.05 6.981 6.981 0 003 11a7 7 0 1011.95-4.95c-.592-.591-.98-.985-1.348-1.467-.363-.476-.724-1.063-1.207-2.03zM12.12 15.12A3 3 0 017 13s.879.5 2.5.5c0-1 .5-4 1.25-4.5.5 1 .786 1.293 1.371 1.879A2.99 2.99 0 0113 13a2.99 2.99 0 01-.879 2.121z" clip-rule="evenodd"></path>
                              </svg>
                        </div>
                        <div class="space-y-4">
                            <h4 class="text-2xl md:text-3xl font-semibold">Blogging</h4>
                            <p>Adipisci tempora pariatur modi recusandae. Omnis neque dolorum. Natus facere voluptatem.</p>
                        </div>
                    </div>
                    <div class="bg-white transition-shadow duration-200 shadow hover:shadow-xl p-6 rounded-lg space-y-6">
                        <div class="bg-blue-600 flex items-center justify-center w-12 h-12 rounded-full text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M6.672 1.911a1 1 0 10-1.932.518l.259.966a1 1 0 001.932-.518l-.26-.966zM2.429 4.74a1 1 0 10-.517 1.932l.966.259a1 1 0 00.517-1.932l-.966-.26zm8.814-.569a1 1 0 00-1.415-1.414l-.707.707a1 1 0 101.415 1.415l.707-.708zm-7.071 7.072l.707-.707A1 1 0 003.465 9.12l-.708.707a1 1 0 001.415 1.415zm3.2-5.171a1 1 0 00-1.3 1.3l4 10a1 1 0 001.823.075l1.38-2.759 3.018 3.02a1 1 0 001.414-1.415l-3.019-3.02 2.76-1.379a1 1 0 00-.076-1.822l-10-4z" clip-rule="evenodd"></path>
                              </svg>
                        </div>
                        <div class="space-y-4">
                            <h4 class="text-2xl md:text-3xl font-semibold">Content Creation</h4>
                            <p>Adipisci tempora pariatur modi recusandae. Omnis neque dolorum. Natus facere voluptatem.</p>
                        </div>
                    </div>
                    <div class="bg-white transition-shadow duration-200 shadow hover:shadow-xl p-6 rounded-lg space-y-6">
                        <div class="bg-blue-600 flex items-center justify-center w-12 h-12 rounded-full text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clip-rule="evenodd"></path>
                              </svg>
                        </div>
                        <div class="space-y-4">
                            <h4 class="text-2xl md:text-3xl font-semibold">NewsLetter</h4>
                            <p>Adipisci tempora pariatur modi recusandae. Omnis neque dolorum. Natus facere voluptatem.</p>
                        </div>
                    </div>
                    <div class="bg-white transition-shadow duration-200 shadow hover:shadow-xl p-6 rounded-lg space-y-6">
                        <div class="bg-blue-600 flex items-center justify-center w-12 h-12 rounded-full text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M11.3 1.046A1 1 0 0112 2v5h4a1 1 0 01.82 1.573l-7 10A1 1 0 018 18v-5H4a1 1 0 01-.82-1.573l7-10a1 1 0 011.12-.38z" clip-rule="evenodd"></path>
                              </svg>
                        </div>
                        <div class="space-y-4">
                            <h4 class="text-2xl md:text-3xl font-semibold">Web Design</h4>
                            <p>Adipisci tempora pariatur modi recusandae. Omnis neque dolorum. Natus facere voluptatem.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Features -->
</x-layout>
