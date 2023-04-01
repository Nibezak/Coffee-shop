<x-layout />

<!-- component -->
<link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
<link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">


<section class="relative  bg-blueGray-50">
<div class="relative pt-16 pb-32 flex content-center items-center justify-center min-h-screen-75">
        <div class="absolute top-0 w-full h-full bg-center bg-cover" style="
            background-image: url('/images/mac.avif');
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
                Get the best Coffee of your life
                </h1>
                <p class="mt-4 text-lg text-blueGray-200">
                  It is an honor to have you try our coffee
                </p>
              </div>

            </div>
          </div>
        </div>
      </div>

      <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
       <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.1.4/dist/tailwind.min.css" rel="stylesheet">
   <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <title>Bread Factory</title>
    <style type="text/css">
        .swiper-container {
  width: 100%;
  height: 400px;
  margin: 50px auto;
}

.swiper-slide img {
  width: 70%;
  height: 70%;
  object-fit: cover;
}

.swiper-pagination {
  position: relative;
  bottom: 10px;
}

    </style>
</head>
<body>
<div class="pt-10 flex justify-center">

<!-- main body starts here -->

  <div class="py-8 px-4 lg:px-24">
    <h2 class="text-2xl font-bold mb-4 text-center text-gray-800">OUR MENU</h2>
    <div class="grid gap-4 md:grid-cols-2 lg:grid-cols-3">

    @foreach($products as $product)
      <div class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg  ">
        <img src="{{$product->thumbnail}}" alt="Product 1" class="object-cover w-full h-48">
        <div class="p-4">
          <h3 class="text-lg font-semibold text-gray-800 mb-2">{{$product->name}}</h3>
          <p class="text-gray-600">{{$product->verse}}</p>
        </div>
<div class="flex justify-center">
          <h3 class="text-lg font-semibold text-gray-600 bg-gray-200 px-8 py-3 rounded-md mb-2">{{$product->price}} Frw</h3>

</div>

      </div>
      @endforeach
    </div>
          <div class="flex justify-center py-5 my-5">
        <a class="text-blue-600 bg-gray-50 hover:underline" style="cursor: pointer;">
          See more on the menu
        </a>
      </div>
  </div>
  
  </div>




<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
  var swiper = new Swiper('.swiper-container', {
    slidesPerView: 1,
    spaceBetween: 30,
    loop: true,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },
  });
</script>




</body>
</html>

      <section class="pb-10 bg-blueGray-200 ">

<footer class="text-gray-100 bg-gray-800">
  <div class="max-w-6xl mx-auto py-12 px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row justify-between">
    <div class="mb-6 md:mb-0">
      <h3 class="text-lg font-medium mb-2">Customer Care</h3>
      <ul class="list-none">
        <li class="mb-2"><a href="#" class="hover:text-gray-400">Contact Us</a></li>
        <li class="mb-2"><a href="#" class="hover:text-gray-400">FAQs</a></li>
        <li class="mb-2"><a href="#" class="hover:text-gray-400">Shipping & Returns</a></li>
      </ul>
    </div>
    <div class="mb-6 md:mb-0">
      <h3 class="text-lg font-medium mb-2">Social Media</h3>
      <ul class="list-none">
        <li class="mb-2"><a href="#" class="hover:text-gray-400">Facebook</a></li>
        <li class="mb-2"><a href="#" class="hover:text-gray-400">Twitter</a></li>
        <li class="mb-2"><a href="#" class="hover:text-gray-400">Instagram</a></li>
      </ul>
    </div>
    <div>
      <h3 class="text-lg font-medium mb-2">Contact Details</h3>
      <ul class="list-none">
        <li class="mb-2">123 Main Street</li>
        <li class="mb-2">Anytown, USA 12345</li>
        <li class="mb-2">Phone: (555) 555-5555</li>
        <li class="mb-2">Email: info@example.com</li>
      </ul>
    </div>
  </div>
  <div class="bg-gray-800 py-4">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-between items-center">
      <p>&copy; 2023 Example Company. All rights reserved.</p>
      <div class="flex space-x-4">
        <a href="#" class="text-gray-400 hover:text-gray-300"><i class="fab fa-facebook-f"></i></a>
        <a href="#" class="text-gray-400 hover:text-gray-300"><i class="fab fa-twitter"></i></a>
        <a href="#" class="text-gray-400 hover:text-gray-300"><i class="fab fa-instagram"></i></a>
      </div>
    </div>
  </div>
</footer>
</footer>
      </section>
      </section>
