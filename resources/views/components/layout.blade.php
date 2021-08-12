    <!DOCTYPE html>
    <html>
    <head>
    <meta charset="utf-8">
    <title>Codeblog</title>
    <link rel="stylesheet" type="text/css" href="/css/tailwind.css">
    <link rel="stylesheet" type="text/css" href="/css/editor.css">

    </head>
    <body>
    <!-- component -->
    <div class="overflow-x-hidden bg-gray-100">

    {{$slot}}
    </div>
    <footer class="bg-gray-100 border border-gray-200 rounded-md shadow-sm border-opacity-1 rounded-xl text-center mb-12 py-6 px-10 mt-16">
    <img src="/images/codeface.svg" alt="" class="mx-auto  my-6" style="width: 145px;">
    <h5 class="text-3xl text-gray-500">Stay in touch with the latest posts</h5>
    <p class="text-sm mt-3 text-gray-600">Promise to keep the inbox clean. No bugs.</p>

    <div class="mt-10">
    <div class="relative inline-block mx-auto lg:bg-gray-200 rounded-full">

    <form method="POST" action="#" id="newsletter" class="lg:flex text-sm">
    <div class="lg:py-3 lg:px-5 flex items-center">
    <label for="email" class="hidden lg:inline-block ">
    {{-- <img src="/images/mailbox-icon.svg" alt="mailbox letter"> --}}
    </label>

    <input id="email" type="text" placeholder="Your email address"
    class="lg:bg-transparent py-2 lg:py-0 pl-4 focus-within:outline-none">
    </div>

    <button type="submit"
    class="transition-colors duration-300 bg-blue-500 hover:bg-blue-600 mt-4 lg:mt-0 lg:ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-8 #newsletter"
    >
    Subscribe
    </button>
    </form>
    </div>
    </div>
    </footer>
    </body>
    </html>
