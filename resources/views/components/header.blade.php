<header class="relative bg-cover bg-center bg-no-repeat  h-auto" >
  {{-- <div class="absolute inset-0 bg-black opacity-50"></div>
  <div class="relative flex items-center justify-center mx-auto max-w-7xl px-8 py-10 sm:px-6 lg:px-8 flex-col h-full">
      <h1 class="text-3xl font-bold tracking-tight text-white ">
          {{ $slot }}</h1>
  </div> --}}
  <nav x-data="{ isOpen: false }"  class= "bg-green-800">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="flex h-16 items-center justify-between">
        <div class="flex items-center">
          <div class="flex-shrink-0">
            <a href="/">
              <img class="h-12 w-12" src="img/logoPT.png" alt="logo">
            </a>
          </div>
        </div>
        <div class="flex-1 flex justify-center">
          <div class="hidden md:block">
            <div class="ml-10 flex items-baseline space-x-4">
              <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            {{-- <x-nav-link href="/" :active="request()->is('/')">Homes</x-nav-link> --}}
            <x-nav-link href="/about" :active="request()->is('about')">About</x-nav-link>
            <x-nav-link href="/faq" :active="request()->is('faq')">FAQ</x-nav-link>
            <x-nav-link href="/layanan" :active="request()->is('layanan')">Layanan</x-nav-link>
            <x-nav-link href="/regulasi" :active="request()->is('regulasi')">Regulasi</x-nav-link>
            <x-nav-link href="/libary" :active="request()->is('libary')">Libary</x-nav-link>
            {{-- <x-nav-link href="/contact" :active="request()->is('contact')" class="bg-cyan-500" >Contact</x-nav-link> --}}
            <a href="/contact" class="bg-cyan-500 {{request()->is('contact') ? ' bg-gray-900  text-white' : 'text-black hover:bg-gray-700 hover:text-white' }} rounded-md px-3 py-2 text-sm font-medium">Contact Us</a>


            </div>
          </div>
        </div>
          
        
        <div class="hidden md:block">
          <div class="ml-4 flex items-center md:ml-6">            
          </div>
        </div>
        <div class="-mr-2 flex md:hidden">
          <!-- Mobile menu button -->
          <button type="button" @click="isOpen = !isOpen" class="relative group inline-flex items-center justify-center rounded-full p-2 text-gray-400 focus:outline-none" aria-controls="mobile-menu" aria-expanded="false">
            <div class="relative flex overflow-hidden items-center justify-center w-[50px] h-[50px] transform transition-all duration-200 shadow-md">
              <div class="flex flex-col justify-between w-[20px] h-[20px] transform transition-all duration-300 origin-center overflow-hidden">
                <div :class="{'rotate-[42deg]': isOpen, 'rotate-0': !isOpen}" class="bg-white h-[2px] w-7 transform transition-all duration-300 origin-left"></div>
                <div :class="{'-translate-x-10': isOpen, 'translate-x-0': !isOpen}" class="bg-white h-[2px] w-1/2 rounded transform transition-all duration-300"></div>
                <div :class="{'-rotate-[42deg]': isOpen, 'rotate-0': !isOpen}" class="bg-white h-[2px] w-7 transform transition-all duration-300 origin-left"></div>
              </div>
            </div>
            <span class="sr-only">Open main menu</span>
          </button>
        </div>
        
      </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div x-show="isOpen" class="md:hidden" id="mobile-menu">
      <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
        <a href="/" class="{{request()->is('/') ? ' bg-gray-900  text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white" aria-current="page">Home</a>
        <a href="/about" class="{{request()->is('about') ? ' bg-gray-900  text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">About Us</a>
        <a href="/faq" class="{{request()->is('faq') ? ' bg-gray-900  text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">FAQ</a>
        <a href="/layanan" class="{{request()->is('layanan') ? ' bg-gray-900  text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Layanan</a>
        <a href="/regulasi" class="{{request()->is('regulasi') ? ' bg-gray-900  text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Regulasi</a>
        <a href="/libary" class="{{request()->is('libary') ? ' bg-gray-900  text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Libary</a>
        <a href="/contact" class="{{request()->is('contact') ? ' bg-gray-900  text-white' : 'text-black hover:bg-gray-700 hover:text-white' }} block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Contact Us</a>


      </div>
      {{-- <div class="border-t border-gray-700 pb-3 pt-4">
        <div class="flex items-center px-5">
          <div class="flex-shrink-0">
            <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
          </div>
          <div class="ml-3">
            <div class="text-base font-medium leading-none text-white">Tom Cook</div>
            <div class="text-sm font-medium leading-none text-gray-400">tom@example.com</div>
          </div>
          <button type="button" class="relative ml-auto flex-shrink-0 rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
            <span class="absolute -inset-1.5"></span>
            <span class="sr-only">View notifications</span>
            <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
            </svg>
          </button>
        </div>
        <div class="mt-3 space-y-1 px-2">
          <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Your Profile</a>
          <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Settings</a>
          <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Sign out</a>
        </div>
      </div> --}}
    </div>
  </nav>
</header>
