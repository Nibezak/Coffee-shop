@props(['ad'])
<div class="shadow-lg ">

{{-- <div class="mt-2 flex items-center p-4 bg-white rounded-lg shadow-xs">
<div class="p-3 mr-4 text-blue-500 bg-blue-100 rounded-full">

<img src="/images/chime.png" class="w-16">
</div>
<div>
<p class="mb-2 text-sm font-medium text-gray-600">
Sponsor-ship
</p>
<a href="#" class="text-blue-500">Create an Account</a> <p class="text-gray-600 font-mono"> for free and make your banking experience easier</p>
</div>
</div> --}}
</div>
<div class="py-2 bottom-0 transition transform duration-500 "
x-data="{show :false }"
x-init= "setTimeout(() => show = true , 1000)"
x-show = "show">
@if($ad)
{!!$ad->content!!}
@else
<div class=" py-3 mt-2 mb-2 pb-1 pt-2 bg-gray-200 px-6 round-md text-gray-500 ">
        It Appears , nothing Has been added  Contact us to earn this , Ad Spot <a class="text-blue-500" href="https://mail.google.com/mail/u/0/#inbox" target="_blank">code.404.initiative
        </a>
    </div>
@endif
</div>
<div>
    <a href="https://mail.google.com/mail/u/0/#inbox" class="text-gray-400 font-light">want to earn a place on the notice board? Talk to us on Gmail
        <span class="text-blue-500 px-3 py-3 mb-2">code.404.initiative@gmail.com< </span></a>
</div>
