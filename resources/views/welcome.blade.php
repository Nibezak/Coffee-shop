
<x-layout>

<!-- component -->


</x-layout>

<!-- component -->
<link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
<link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">


<section class="relative  bg-blueGray-50">
<div class="relative pt-16 pb-32 flex content-center items-center justify-center min-h-screen-75">
        <div class="absolute top-0 w-full h-full bg-center bg-cover" style="
            background-image: url('/images/mac.jpg');
          ">
          <span id="blackOverlay" class="w-full h-full absolute opacity-75 bg-black"></span>
        </div>
        <div class="container relative mx-auto">
          <div class="items-center flex flex-wrap">
            <div class="w-full lg:w-6/12 px-4 ml-auto mr-auto text-center">
                    <nav class=" dark:bg-gray-800">
        <div class="container p-6 mx-auto">

            <div class="flex items-center justify-center mt-6 text-gray-600 capitalize dark:text-gray-300">
                <a href="#" class="text-gray-300 dark:text-gray-200 border-b-2 border-blue-500 mx-1.5 sm:mx-6">home</a>


                <a href="/about" class="text-gray-300 border-b-2 border-transparent hover:text-gray-800 dark:hover:text-gray-200 hover:border-blue-500 mx-1.5 sm:mx-6">About </a>

                <a href="{{route('all-posts')}}" class="text-gray-300 font-semibold border-b-2 border-transparent hover:text-gray-800 dark:hover:text-gray-200 hover:border-blue-500 mx-1.5 sm:mx-6">blog</a>
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
              <div class="pr-12">
                <h1 class="text-white font-semibold text-5xl">
                My Love Letter to the World!
                </h1>
                <p class="mt-4 text-lg text-blueGray-200">
                  On this PlatForm , I will Post everything I know , any skill I know will be shared with you here, so please come along!
                </p>
              </div>
                       <form method="POST" action="newsletter/subscribe">
                            @csrf
                    <div class="mb-6 in">
                        <label for="email" class="block font-semibold mb-2 text-md text-gray-400 dark:text-gray-400">Email Address</label>
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
        <div class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden h-70-px" style="transform: translateZ(0px)">
          <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" version="1.1" viewBox="0 0 2560 100" x="0" y="0">
            <polygon class="text-blueGray-200 fill-current" points="2560 0 2560 100 0 100"></polygon>
          </svg>
        </div>
      </div>
      <section class="pb-10 bg-blueGray-200 -mt-24">
        <div class="container mx-auto px-4">
          <div class="flex flex-wrap">
            <div class="lg:pt-12 pt-6 w-full md:w-4/12 px-4 text-center">
              <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                <div class="px-4 py-5 flex-auto">
                  <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-red-400">
                    <i class="fas fa-award"></i>
                  </div>
                  <h6 class="text-xl font-semibold">Advertisement</h6>
                  <p class="mt-2 mb-4 text-blueGray-500">
                  You can  <a href="/about" class="text-blue-500 underline font-sans tracking-wider">Contact us</a>
                   If you want to earn a spot on our Ads Board
                  </p>
                </div>
              </div>
            </div>
            <div class="w-full md:w-4/12 px-4 text-center">
              <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                <a href="/posts">
                <div class="px-4 py-5 flex-auto">
                  <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-lightBlue-400">
                    <i class="fas fa-retweet"></i>
                  </div>
                  <h6 class="text-xl font-semibold">Blogging</h6>
                  <p class="mt-2 mb-4 text-blueGray-500">
                    For Now we are still a small community , so only the members acknowledged By the admin Can Join us
                  </p>
                </div>
            </a>
              </div>
            </div>
            <div class="pt-6 w-full md:w-4/12 px-4 text-center">
              <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-8 shadow-lg rounded-lg">
                <a href="https://www.youtube.com/channel/UCwk7eIb_6omKANWoedv5Hfw">
                <div class="px-4 py-5 flex-auto">
                  <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 mb-5 shadow-lg rounded-full bg-red-600">
                    <i class="fab fa-youtube"></i>
                  </div>
                  <h6 class="text-xl font-semibold">Youtube!</h6>
                  <p class="mt-2 mb-4 text-blueGray-500">
                  I casually Make videos about programming now and then , It would really help If you Subscribe
                  </p>
                </div>
            </a>
              </div>
            </div>
          </div>
           <footer class="relative  pt-8 pb-6 mt-1">
  <div class="container mx-auto px-4">
    <div class="flex flex-wrap items-center md:justify-between justify-center">
      <div class="w-full md:w-6/12 px-4 mx-auto text-center">
        <div class="text-sm text-blueGray-500 font-semibold py-1">
          <p class="text-gray-500 font-light">Website Made With love By:</p> Nibeza N. kevin.
        </div>
      </div>
    </div>
  </div>
</footer>
      </section>
      </section>
