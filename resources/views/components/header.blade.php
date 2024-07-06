<header class="relative bg-cover bg-center bg-no-repeat h-auto">
  <nav x-data="{ isOpen: false, isScrolled: false }" id="navbar" class="fixed w-full z-10 py-4 transition duration-300"
       :class="{ 'bg-green-800': isScrolled, 'bg-transparent': !isScrolled }"
       @scroll.window="isScrolled = window.pageYOffset > 0">
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
      <div class="relative flex items-center justify-between h-16">
        <div class="flex items-left">
          <div class="flex-shrink-0">
            <a href="/">
              <!-- Smaller logo for smaller screens (hidden on lg screens and up) -->
              <img class="block lg:hidden h-8 w-auto transition duration-300"
                   :class="{ 'h-8': !isScrolled, 'h-12': isScrolled }"
                   src="img/logoPT.png"
                   alt="mkbu">
              <!-- Larger logo for larger screens (hidden on smaller screens) -->
              <img class="hidden lg:block h-8 w-auto transition duration-300"
                   :class="{ 'h-1': !isScrolled, 'h-20': isScrolled }"
                   src="img/logoPT.png"
                   alt="mkbu">
            </a>
          </div>
        </div>
        <!-- Other navigation items -->
        <div class="hidden sm:block sm:ml-6">
          <div class="flex space-x-4">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            <a href="/" class="{{ request()->is('/') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} rounded-md px-3 py-2 text-sm font-medium">Home</a>
            <a href="/about" class="{{ request()->is('about') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} rounded-md px-3 py-2 text-sm font-medium">About</a>
            <a href="/faq" class="{{ request()->is('faq') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} rounded-md px-3 py-2 text-sm font-medium">FAQ</a>
            <a href="/layanan" class="{{ request()->is('layanan') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} rounded-md px-3 py-2 text-sm font-medium">Layanan</a>
            <a href="/regulasi" class="{{ request()->is('regulasi') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} rounded-md px-3 py-2 text-sm font-medium">Regulasi</a>
            <a href="/libary" class="{{ request()->is('libary') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} rounded-md px-3 py-2 text-sm font-medium">Libary</a>
            <a href="/contact" class="{{ request()->is('contact') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} rounded-md px-3 py-2 text-sm font-medium">Contact Us</a>
          </div>
        </div>
        <div class="hidden md:block">
          <div class="ml-4 flex items-center md:ml-6">
            <!-- Additional items -->
          </div>
        </div>
        <div class="-mr-2 flex md:hidden">
          <!-- Mobile menu button -->
          <button type="button" @click="isOpen = !isOpen" class="relative group inline-flex items-center justify-center rounded-full p-2 text-gray-400 focus:outline-none" aria-controls="mobile-menu" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <!-- Menu icon -->
          </button>
        </div>
      </div>
    </div>
    <!-- Mobile menu, show/hide based on menu state -->
    <div x-show="isOpen" class="md:hidden" id="mobile-menu">
      <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
        <!-- Mobile menu links -->
        <a href="/" class="{{ request()->is('/') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} block rounded-md px-3 py-2 text-base font-medium">Home</a>
        <a href="/about" class="{{ request()->is('about') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} block rounded-md px-3 py-2 text-base font-medium">About</a>
        <a href="/faq" class="{{ request()->is('faq') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} block rounded-md px-3 py-2 text-base font-medium">FAQ</a>
        <a href="/layanan" class="{{ request()->is('layanan') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} block rounded-md px-3 py-2 text-base font-medium">Layanan</a>
        <a href="/regulasi" class="{{ request()->is('regulasi') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} block rounded-md px-3 py-2 text-base font-medium">Regulasi</a>
        <a href="/libary" class="{{ request()->is('libary') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} block rounded-md px-3 py-2 text-base font-medium">Libary</a>
        <a href="/contact" class="{{ request()->is('contact') ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} block rounded-md px-3 py-2 text-base font-medium">Contact Us</a>
      </div>
    </div>
  </nav>
</header>
<script src="js/app.js"></script>

