<x-admins.layouts.layouts>
<form method="POST" action="/accounts/sponsors/create">
  @csrf
<textarea class="h-screen w-full rounded-md border-2 border-blue-300 px-3 py-3 focus:outline-none focus:shadow-outline-blue" name="ad"></textarea>
<button type="submit">Submit</button>
</form>
</x-admins.layouts.layouts>
