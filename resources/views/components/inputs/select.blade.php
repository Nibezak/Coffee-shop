@props(['tags'])

<select x-cloak id="select" {{$attributes->merge(["class"=>"block px-3 py-1 border-2 border-gray-400 rounded-md "])}} >
    @php
  $tags = \App\Models\Tag::all();
  @endphp
  @foreach($tags as $tag)
  <option value="{{$tag->id}}" >{{$tag->name}}</option>
  @endforeach
</select>
<p class="text-gray-400 text-sm pt-2 my-2">Hold <kbd class="border border-gray-500 px-6 mx-3 rounded-md shadow-sm">Ctrl</kbd> to Select multiple tags to copy text (Windows).</p>
<p class="text-gray-400 text-sm block">Hold <kbd class="border border-gray-500 px-6 mx-3 rounded-md shadow-sm">Cmd</kbd> to Select multiple tags to copy text (Mac Os).</p>

