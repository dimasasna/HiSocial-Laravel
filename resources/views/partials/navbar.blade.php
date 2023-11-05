<!-- Navbar -->
<nav>
    <div class="w-full fixed top-0 h-auto px-6 lg:px-32 xl:px-0 bg-white  z-[999999]  shadow-xl">
        <div class="flex items-center  justify-between max-w-[1220px]  h-[74px] lg:h-20  mx-auto  ">
            <a href="/"><img src="./assets/img/logo.png" class="cursor-pointer h-11 lg:h-12 xl:h-14" alt="logo hi-social"></a>
            <ul class="hidden lg:flex items-center space-x-7 xl:space-x-10 text-[18px]">
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
                        <button
                            class="bg-blue-500 font-thin px-4 py-1 ml-6 text-white rounded-full hover:bg-blue-600 active:bg-blue-700">Contact
                            Us</button>
                    </a>
                </li>
            </ul>
            <button class="menu-btn lg:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-7 h-7">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </button>
        </div>
    </div>
    <div
        class="nav-menu fixed w-screen h-[250px] lg:hidden left-0 right-0 -top-[100vh] px-6 py-4 bg-white z-40 opacity-40 transition-all duration-700 shadow-2xl">
        <ul class="font-normal space-y-2">
            <li class="pb-2  hover:text-gray-400   hover:border-b-gray-300">
                <a href="/">Home</a>
            </li>
            <li class="pb-2 hover:text-gray-400  hover:border-b-gray-300">
                <a href="">Service</a>
            </li>
            <li class="pb-2 hover:text-gray-400  hover:border-b-gray-300">
                <a href="/portofolio">Portofolio</a>
            </li>
            <li class="pb-2 hover:text-gray-400  hover:border-b-gray-300">
                <a href="/about">About Us</a>
            </li>
            <li class="pt-2">
                <a href="/contact">
                    <button
                        class="bg-blue-500 font-thin w-full lg:w-auto px-4 py-2 text-white rounded-full hover:bg-blue-600 active:bg-blue-700">Contact
                        Us</button>
                </a>
            </li>
        </ul>
    </div>
</nav>
<!-- End Navbar -->
