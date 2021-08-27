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
    <div class="overflow-x-hidden  bg-gray-100">
<!-- component -->

    {{$slot}}
    </div>
<x-flash-message />
    </body>
    </html>


