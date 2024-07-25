<nav x-data="{ isOpen: false }" class="bg-gradient-to-r from-lime-600 via-lime-800 to-lime-600 shadow-lg fixed w-full z-10 transition duration-500 ease-in-out" :class="{ 'bg-white': isOpen, 'bg-gradient-to-r from-lime-600 via-lime-800 to-lime-600': !isOpen, 'shadow-lg': isOpen, 'shadow-none': !isOpen, 'sticky top-0': window.pageYOffset > 0 }">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="relative flex items-center justify-between h-16">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    <a href="/">
                        <img class="h-12 w-12" src="img/logoPT.png" alt="logo">
                    </a>
                </div>
            </div>
            <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-4">
                        <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
                        <x-nav-link href="/about" :active="request()->is('about')">About</x-nav-link>
                        <x-nav-link href="/faq" :active="request()->is('faq')">FAQ</x-nav-link>
                        <x-nav-link href="/layanan" :active="request()->is('layanan')">Layanan</x-nav-link>
                        <x-nav-link href="/regulasi" :active="request()->is('regulasi')">Regulasi</x-nav-link>
                        <x-nav-link href="/libary" :active="request()->is('libary')">Library</x-nav-link>
                        <a href="/contact" class="bg-cyan-500 {{ request()->is('contact') ? 'bg-gray-900 text-white' : 'text-black hover:bg-gray-700 hover:text-white' }} rounded-md px-3 py-2 text-sm font-medium">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <!-- Mobile menu (sm:hidden) -->
    <div x-show="isOpen" class="sm:hidden">
        <div class="px-2 pt-2 pb-3 space-y-1">
            <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
            <x-nav-link href="/about" :active="request()->is('about')">About</x-nav-link>
            <x-nav-link href="/faq" :active="request()->is('faq')">FAQ</x-nav-link>
            <x-nav-link href="/layanan" :active="request()->is('layanan')">Layanan</x-nav-link>
            <x-nav-link href="/regulasi" :active="request()->is('regulasi')">Regulasi</x-nav-link>
            <x-nav-link href="/libary" :active="request()->is('libary')">Library</x-nav-link>
            <a href="/contact" class="bg-cyan-500 {{ request()->is('contact') ? 'bg-gray-900 text-white' : 'text-black hover:bg-gray-700 hover:text-white' }} rounded-md px-3 py-2 text-sm font-medium">Contact Us</a>
        </div>
    </div>
</nav>

   