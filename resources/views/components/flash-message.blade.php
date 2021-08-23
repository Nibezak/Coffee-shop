
<div class="fixed top-0 mt-16 z-10 bg-gray-50 w-full">
@if(session()->has('success'))
<div class="w-full h-full transition transform duration-500"
x-data="{show :true }"
x-init= "setTimeout(() => show = false , 3000)"
x-show = "show">

    <div class="fixed button-0 right-3 py-3 ">
        <div class="bg-white text-blue-500 border-2 border-blue-500 rounded-lg shadow-md px-4 py-2 border-1 border-gray-400">
            {{session()->get('success')}}
        </div>
    </div>
</div>
@endif
</div>
