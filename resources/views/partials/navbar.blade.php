<!-- Navbar -->
<nav class="w-full sticky top-0 h-auto px-5 lg:px-32 xl:px-0 bg-white drop-shadow-navbar z-50">
    <div class="relative flex items-center justify-between max-w-[1215px] w-full h-[74px] lg:h-20 xl:h-[100px] mx-auto">
        <img
            src="assets/img/logo.png"
            class="cursor-pointer h-11 lg:h-12 xl:h-14"
            alt="logo hi-social"
        >
        <ul class="hidden lg:flex items-center space-x-7 xl:space-x-10">
            <li class="hover:text-gray-400">
                <a href="/">Home</a>
            </li>
            <li class="hover:text-gray-400">
                <a href="">Service</a>
            </li>
            <li class="hover:text-gray-400">
                <a href="/portofolio">Portofolio</a>
            </li>
            <li class="hover:text-gray-400">
                <a href="/about">About Us</a>
            </li>
            <li>
                <a href="/contact">
                    <button class="bg-blue-500 font-thin px-4 py-1 ml-6 text-white rounded-full hover:bg-blue-600 active:bg-blue-700">Contact Us</button>
                </a>
            </li>
        </ul>
        <button class="menu-btn lg:hidden">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
        </button>
    </div>
</nav>
<div class="nav-menu fixed w-screen h-auto lg:hidden left-0 right-0 -top-[100vh] px-5 py-8 bg-white/[.6] backdrop-blur z-40 opacity-40 transition-all duration-700">
    <ul class="font-bold space-y-2">
        <li class="pb-2 hover:text-gray-400 font-thin">
            <a href="/">Home</a>
        </li>
        <li class="pb-2 hover:text-gray-400 font-thin">
            <a href="">Service</a>
        </li>
        <li class="pb-2 hover:text-gray-400 font-thin">
            <a href="/portofolio">Portofolio</a>
        </li>
        <li class="pb-2 hover:text-gray-400 font-thin">
            <a href="/about">About Us</a>
        </li>
        <li class="pt-8">
            <a href="/contact">
                <button class="bg-blue-500 w-full lg:w-auto px-4 py-3 text-white rounded-full hover:bg-blue-600 active:bg-blue-700">Contact Us</button>
            </a>
        </li>
    </ul>
</div>
<!-- Akhir Navbar -->
