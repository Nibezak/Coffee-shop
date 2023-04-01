<nav class="px-6 py-4 bg-white shadow">
  <div class="flex flex-col mx-auto md:flex-row md:items-center md:justify-between">
    <div class="flex items-center justify-between">
      <div>
        <a href="{{ route('all-posts') }}" class="text-xl font-bold font-mono text-gray-800 md:text-2xl">
          <a href="/" class="text-blue-500 text-2xl font-mono font-semibold">
            <img src="/images/logo.png" class="w-12">
          </a>
        </a>
      </div>

    <div class="nav-links-secondary">
      <a href="/about" class="text-gray-800 hover:text-gray-600">About Us</a>
      <a href="/accounts/settings" class="text-gray-800 hover:text-gray-600">Settings</a>
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
    <div class="nav-links">
      <x-navbar-links />
    </div>
  </div>
</nav>
<style type="text/css">
.nav-links-secondary {
  display: flex;
  gap: 1rem;
}

.nav-links-secondary a {
  font-size: 1.2rem;
  font-weight: 500;
  color: #333;
  text-decoration: none;
  padding: 0.5rem 1rem;
  border-radius: 0.5rem;
}

.nav-links-secondary a:hover {
  background-color: #f4f4f4;
  color: #666;
}

</style>