<x-admins.layouts.layouts>

<div>
  <div class="md:grid md:grid-cols-3 md:gap-6 mt-10 px-3">
    <div class="md:col-span-1">
      <div class="px-4 sm:px-0">
        <h3 class="text-lg font-medium leading-6 text-gray-900">Add a new Product to the Menu</h3>
        <p class="mt-1 text-sm text-gray-600 font-light">
          This information will be displayed publicly so be careful what you share.
        </p>
      </div>
    </div>
    <div class="mt-5 md:mt-0 md:col-span-2">
      <form method="POST" action="/accounts/products/create">
        @csrf
        <div class="shadow sm:rounded-md sm:overflow-hidden">
          <div class="px-4 py-5 bg-white space-y-6 sm:p-6">

                        <div class="grid grid-cols-3 gap-6">
              <div class="col-span-3 sm:col-span-2">
                <label  class="block text-sm font-medium text-gray-700">
                Thumbnail
                </label>
                <div class="mt-1 flex rounded-md shadow-sm">
                  <input type="name" name="thumbnail" class="focus:outline-none flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="Image url">
                </div>
                @error('thumbnail')
                <div class="block">
                  <span class="text-red-500 font-light">{{$message}}</span>
                </div>
                @enderror
              </div>
            </div>


            <div class="grid grid-cols-3 gap-6">
              <div class="col-span-3 sm:col-span-2">
                <label  class="block text-sm font-medium text-gray-700">
                Product's name
                </label>
                <div class="mt-1 flex rounded-md shadow-sm">
                  <input type="name" name="name" class="focus:outline-none flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="cafe late">
                </div>
                @error('name')
                <div class="block">
                  <span class="text-red-500 font-light">{{$message}}</span>
                </div>
                @enderror
              </div>
            </div>

    <div class="grid grid-cols-3 gap-6">
            </div>
            <div>
              <label for="about" class="block text-sm font-medium text-gray-700">
               add a small description
              </label>
              <div class="mt-1">
                <textarea id="about" name="verse" class="shadow-sm h-full focus:outline-none mt-1 block w-full sm:text-sm border border-gray-300 rounded-md" placeholder="describe the product"></textarea>
              </div>
                 @error('verse')
                <div class="block">
                  <span class="text-red-500 font-light">{{$message}}</span>
                </div>
                @enderror
            </div>

        <div class="grid grid-cols-3 gap-6">
              <div class="col-span-3 sm:col-span-2">
                <label for="company-website" class="block text-sm font-medium text-gray-700">
              Price for Item
                </label>
                <div class="mt-1 flex rounded-md shadow-sm">
                  <input type="number" name="price" class="focus:outline-none flex-1 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" placeholder="Rwandan Francs">
                </div>
                   @error('price')
                <div class="block">
                  <span class="text-red-500 font-light">{{$message}}</span>
                </div>
                @enderror
              </div>
            </div>

          </div>
          <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
            <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
              Save
            </button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>


</x-admins.layouts.layouts>
