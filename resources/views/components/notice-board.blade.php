<div class="shadow-lg">
</div>

<div class="py-2 bottom-0 transition transform duration-500" x-data="{ show: false }" x-init="setTimeout(() => show = true, 1000)" x-show="show">

    @isset($ad)
        {!! $ad->content !!}
    @else
        <!-- If there is no ad, display nothing -->
    @endisset

</div>

