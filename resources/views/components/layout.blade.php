    @php
use App\Models\User;
use Illuminate\Support\Facades\Auth;
$author = Auth::user();
@endphp
    <!DOCTYPE html>
    <html>
    <head>
    <meta charset="utf-8">
    <title>Codeblog</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/css/tailwind.css">
    <link rel="stylesheet" type="text/css" href="/css/editor.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/3.2.2/cdn.js" defer></script>
    <script src="/js/progress-bar.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/turbolinks/5.2.0/turbolinks.js" integrity="sha512-G3jAqT2eM4MMkLMyQR5YBhvN5/Da3IG6kqgYqU9zlIH4+2a+GuMdLb5Kpxy6ItMdCfgaKlo2XFhI0dHtMJjoRw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
 <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"defer></script>
    <script src="/js/assets/js/init-alpine.js"></script>
    <script src="/js/app.js"></script>

<style type="text/css">
    /* width */
::-webkit-scrollbar {
  width: 14px;
}

/* Track */
::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px grey;
  border-radius: 5px;
}

/* Handle */
::-webkit-scrollbar-thumb {
  background: #c4c9cc;
  border-radius: 10px;
}


</style>
    </head>
    <body >
    <!-- component -->
    <div class="overflow-x-hidden  bg-gray-100"  x-data="data()" >
<!-- component -->
    {{$slot}}
    </div>
<x-flash-message />
<x-ckeditor/>
    </body>
    </html>



