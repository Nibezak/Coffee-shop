    <nav class="px-6 py-4 bg-white shadow">
    <div class=" flex flex-col mx-auto md:flex-row md:items-center md:justify-between">
    <div class="flex items-center justify-between">
    <div>
    <a href="{{route("all-posts")}}" class="text-xl font-bold font-mono text-gray-800 md:text-2xl">
                    <span class="text-blue-500 text-2xl font-mono font-semibold">CodeInit.Inc</span>
    </a>
    </div>
    @auth
    <div class="md:hidden lg:hidden">
<x-account-button />
    </div>
@else
<div class="md:hidden lg:hidden">
<x-login-button/>
</div>
    @endauth
    </div>
    <x-navbar-links />
    </div>
    </nav>
