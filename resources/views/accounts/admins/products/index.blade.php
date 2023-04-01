<x-admins.layouts.layouts>
    <div class="lg:grid lg:grid-cols-3 lg:gap-4">

@forelse($products as $product)
     <div class="group relative my-5 py-5 px-2 mx-2 bg-gray-100 shadow-lg">
          <div class="relative w-full bg-white rounded-lg overflow-hidden group-hover:opacity-75 sm:aspect-w-2 flex justify-center py-2 bg-gray-50 py-5 my-5 ">
          <img src="{{$product->thumbnail}}" width="230" height="230">
          </div>
          <h3 class=" text-sm text-gray-500 py-4 px-2">


           <strong>Product name:  </strong>  {!! $product->name!!}

          </h3>
            <h3 class=" text-sm text-gray-500 py-4 px-2">

            <strong> price paid : </strong>{!! number_format($product->price)!!}

          </h3>
          <div class="flex justify-center px-5 py-2">
          <p class="text-base  text-gray-500">{{$product->verse}}</p>
          </div>
        <div class="flex justify-end">
          {{-- <button class="px-10 -py-1 mt-3 bg-green-500 rounded-md text-white focus:outline-none">Edit</button> --}}
          <form method="POST" action="/accounts/products/{{$product->id}}">
            @method('DELETE')
            @csrf
          <button class="px-4 py-2 mt-3 bg-red-600 font-semibold  rounded-md text-white focus:outline-none" type="submit">delete</button>
</form>
        </div>
        </div>
        @empty
        <div class="col-span-8 w-full h-full flex justify-center">
    <div class="mt-32 py-3 fixed bg-gray-200 px-6 round-md text-gray-500 ">
        It Appears , nothing Has been added  yet On this page , please <a class="text-blue-500" href="/accounts/ads/create">add Something
        </a>
    </div>
</div>
@endforelse



</div>
</x-admins.layouts.layouts>


