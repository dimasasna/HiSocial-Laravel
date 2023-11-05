@extends('layouts.main')

@section('container')
    <!-- Hero -->
    <div class="relative">
        <div class="relative w-[100vw-1px] h-[calc(100vh-74px)] lg:h-[calc(100vh-200px)] xl:h-[calc(100vh-280px)] mx-auto">
            <img src="assets/img/portofolio/Background.png"
                class="absolute w-full h-full object-cover object-center z-10"
                alt="gambar hero"
            >
            <div class="absolute flex flex-col justify-center h-[80%] px-6 lg:px-0 text-left inset-0 my-auto md:text-center space-y-4 lg:space-y-6 xl:space-y-7 z-20">
                <h1 class="lg:pb-20 text-3xl lg:text-5xl xl:text-6xl font-bold lg:leading-tight xl:leading-tight text-pb-normal-active">Explore Our Portfolio of <br class="hidden md:block"/><span class="text-p-normal">Digital Excellence</span></h1>
            </div>
        </div>

        <div class="hidden lg:block relative px-6 lg:px-0 lg:w-[70%] max-w-[1065px] mx-auto">
            <div class="relative -top-16 z-40 lg:flex w-full max-w-[1065px] h-[109px] bg-white drop-shadow-[0px_5px_20px_rgba(0,0,0,0.15)] lg:rounded-2xl">
                <button
                    id="menu-portofolio"
                    data-menu="social media management"
                    class="relative flex-1 w-full h-full p-4 font-normal text-pb-normal-active hover:font-semibold hover:bg-[#ABD9FF] font-inter transition-all rounded-l-2xl border-r hover:after:absolute hover:after:inset-x-0 hover:after:-bottom-[70%] hover:after:mx-auto hover:after:content-[''] hover:after:w-[60px] hover:after:h-[60px] hover:after:rotate-45 hover:after:drop-shadow-none hover:after:bg-[#ABD9FF] after:delay-200 hover:after:z-0"
                >
                    Social Media<br/>Management
                </button>
                <button
                    id="menu-portofolio"
                    data-menu="branding identity visual"
                    class="relative flex-1 w-full h-full p-4 font-normal text-pb-normal-active hover:font-semibold hover:bg-[#ABD9FF] font-inter transition-all hover:after:absolute hover:after:inset-x-0 hover:after:-bottom-[70%] hover:after:mx-auto hover:after:content-[''] hover:after:w-[60px] hover:after:h-[60px] hover:after:rotate-45 hover:after:drop-shadow-none hover:after:bg-[#ABD9FF] after:delay-200 hover:after:z-0 border-r"
                >
                    Branding Identity<br/>Visual
                </button>
                <button
                    id="menu-portofolio"
                    data-menu="logo branding identity"
                    class="relative flex-1 w-full h-full p-4 font-normal text-pb-normal-active hover:font-semibold hover:bg-[#ABD9FF] font-inter transition-all hover:after:absolute hover:after:inset-x-0 hover:after:-bottom-[70%] hover:after:mx-auto hover:after:content-[''] hover:after:w-[60px] hover:after:h-[60px] hover:after:rotate-45 hover:after:drop-shadow-none hover:after:bg-[#ABD9FF] after:delay-200 hover:after:z-0 border-r"
                >
                    Logo Branding<br/>Identity
                </button>
                <button
                    id="menu-portofolio"
                    data-menu="website and system"
                    class="relative flex-1 w-full h-full p-4 font-normal text-pb-normal-active hover:font-semibold hover:bg-[#ABD9FF] font-inter transition-all hover:after:absolute hover:after:inset-x-0 hover:after:-bottom-[70%] hover:after:mx-auto hover:after:content-[''] hover:after:w-[60px] hover:after:h-[60px] hover:after:rotate-45 hover:after:drop-shadow-none hover:after:bg-[#ABD9FF] after:delay-200 hover:after:z-0 border-r"
                >
                    Website And<br/>System
                </button>
                <button
                    id="menu-portofolio"
                    data-menu="digital marketing startegy"
                    class="relative flex-1 w-full h-full p-4 font-normal text-pb-normal-active hover:font-semibold hover:bg-[#ABD9FF] font-inter transition-all hover:after:absolute hover:after:inset-x-0 hover:after:-bottom-[70%] hover:after:mx-auto hover:after:content-[''] hover:after:w-[60px] hover:after:h-[60px] hover:after:rotate-45 hover:after:drop-shadow-none hover:after:bg-[#ABD9FF] after:delay-200 hover:after:z-0 rounded-r-2xl"
                >
                    Digital Marketing<br/>Startegy
                </button>
            </div>

            <div style="opacity: 0;" class="toolbar absolute inset-x-0 -bottom-20 flex justify-center items-center w-full max-w-[1065px] h-[109px] mx-auto px-10 py-4 bg-[#ABD9FF] lg:rounded-2xl transition-all duration-500 z-40">
                <p class="lg:text-md xl:text-lg text-center font-inter"></p>
            </div>
        </div>
    </div>
    <!-- Akhir Hero -->

    <!-- Social Media Management -->
    <div class="relative w-full px-5 lg:px-32 xl:px-0 py-8 lg:py-11 lg:mt-14">
        <div class="relative max-w-[1180px] w-full mx-auto lg:pb-12 border-b-2">
            <h1 class="text-4xl text-center lg:text-left lg:text-6xl xl:text-7xl font-bold leading-none text-pb-normal-active">Social Media<br /><span class="text-p-normal">Management</span></h1>
            <div class="grid grid-cols-2 lg:grid-cols-3 gap-2 lg:gap-5 mt-6 lg:mt-8">
                <button class="group rounded-lg lg:rounded-xl row-start-1 col-start-1 col-span-2 lg:col-span-1 overflow-hidden">
                    <img src="assets/img/portofolio/social-media-management1.png" class="w-full group-hover:scale-105 object-cover object-center transition-all duration-500" alt="gambar">
                </button>
                <button class="group rounded-lg lg:rounded-xl overflow-hidden">
                    <img src="assets/img/portofolio/social-media-management2.png" class="w-full group-hover:scale-110 object-cover object-center transition-all duration-500" alt="gambar">
                </button>
                <button class="group rounded-lg lg:rounded-xl overflow-hidden">
                    <img src="assets/img/portofolio/social-media-management3.png" class="w-full group-hover:scale-110 object-cover object-center transition-all duration-500" alt="gambar">
                </button>
                <button class="group rounded-lg lg:rounded-xl overflow-hidden">
                    <img src="assets/img/portofolio/social-media-management4.png" class="w-full group-hover:scale-110 object-cover object-center transition-all duration-500" alt="gambar">
                </button>
                <button class="group rounded-lg lg:rounded-xl overflow-hidden">
                    <img src="assets/img/portofolio/social-media-management4.png" class="w-full group-hover:scale-110 object-cover object-center transition-all duration-500" alt="gambar">
                </button>
                <button class="group rounded-lg lg:rounded-xl overflow-hidden">
                    <img src="assets/img/portofolio/social-media-management6.png" class="w-full group-hover:scale-110 object-cover object-center transition-all duration-500" alt="gambar">
                </button>
                <button class="group rounded-lg lg:rounded-xl overflow-hidden">
                    <img src="assets/img/portofolio/social-media-management6.png" class="w-full group-hover:scale-110 object-cover object-center transition-all duration-500" alt="gambar">
                </button>
                <button class="group rounded-lg lg:rounded-xl overflow-hidden">
                    <img src="assets/img/portofolio/social-media-management8.png" class="w-full group-hover:scale-110 object-cover object-center transition-all duration-500" alt="gambar">
                </button>
                <button class="group rounded-lg lg:rounded-xl overflow-hidden">
                    <img src="assets/img/portofolio/social-media-management8.png" class="w-full group-hover:scale-110 object-cover object-center transition-all duration-500" alt="gambar">
                </button>
            </div>
            <div class="flex justify-center items-center gap-3 py-8 lg:py-0 lg:gap-7 lg:mt-14">
                <button class="">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                    </svg>
                </button>
                <button class="px-4 py-[6px] lg:px-5 lg:py-2 text-xs lg:text-base text-white bg-[#0070C8] rounded-xl lg:rounded-2xl">1</button>
                <button class="px-4 py-[6px] lg:px-5 lg:py-2 text-xs lg:text-base text-white bg-[#0070C8] rounded-xl lg:rounded-2xl">2</button>
                <button class="px-4 py-[6px] lg:px-5 lg:py-2 text-xs lg:text-base text-white bg-[#0070C8] rounded-xl lg:rounded-2xl">3</button>
                <button class="">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <!-- Akhir Social Media Management -->

    <!-- Branding Identity Visual -->
    <div class="relative w-full px-5 lg:px-32 xl:px-0 py-8 lg:py-11">
        <div class="relative max-w-[1180px] w-full mx-auto lg:pb-12 border-b-2">
            <h1 class="text-4xl text-center lg:text-left lg:text-6xl xl:text-7xl font-bold leading-none text-pb-normal-active">Branding <br /><span class="text-p-normal">Identity Visual</span></h1>
            <div class="grid grid-cols-2 lg:grid-cols-3 gap-2 lg:gap-5 mt-6 lg:mt-8">
                <button class="group rounded-lg lg:rounded-xl row-start-1 col-start-1 col-span-2 lg:col-span-1 overflow-hidden">
                    <img src="assets/img/portofolio/social-media-management1.png" class="w-full group-hover:scale-105 object-cover object-center transition-all duration-500" alt="gambar">
                </button>
                <button class="group rounded-lg lg:rounded-xl overflow-hidden">
                    <img src="assets/img/portofolio/social-media-management2.png" class="w-full group-hover:scale-110 object-cover object-center transition-all duration-500" alt="gambar">
                </button>
                <button class="group rounded-lg lg:rounded-xl overflow-hidden">
                    <img src="assets/img/portofolio/social-media-management3.png" class="w-full group-hover:scale-110 object-cover object-center transition-all duration-500" alt="gambar">
                </button>
                <button class="group rounded-lg lg:rounded-xl overflow-hidden">
                    <img src="assets/img/portofolio/social-media-management4.png" class="w-full group-hover:scale-110 object-cover object-center transition-all duration-500" alt="gambar">
                </button>
                <button class="group rounded-lg lg:rounded-xl overflow-hidden">
                    <img src="assets/img/portofolio/social-media-management4.png" class="w-full group-hover:scale-110 object-cover object-center transition-all duration-500" alt="gambar">
                </button>
                <button class="group rounded-lg lg:rounded-xl overflow-hidden">
                    <img src="assets/img/portofolio/social-media-management6.png" class="w-full group-hover:scale-110 object-cover object-center transition-all duration-500" alt="gambar">
                </button>
                <button class="group rounded-lg lg:rounded-xl overflow-hidden">
                    <img src="assets/img/portofolio/social-media-management6.png" class="w-full group-hover:scale-110 object-cover object-center transition-all duration-500" alt="gambar">
                </button>
                <button class="group rounded-lg lg:rounded-xl overflow-hidden">
                    <img src="assets/img/portofolio/social-media-management8.png" class="w-full group-hover:scale-110 object-cover object-center transition-all duration-500" alt="gambar">
                </button>
                <button class="group rounded-lg lg:rounded-xl overflow-hidden">
                    <img src="assets/img/portofolio/social-media-management8.png" class="w-full group-hover:scale-110 object-cover object-center transition-all duration-500" alt="gambar">
                </button>
            </div>
            <div class="flex justify-center items-center gap-3 py-8 lg:py-0 lg:gap-7 lg:mt-14">
                <button class="">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                    </svg>
                </button>
                <button class="px-4 py-[6px] lg:px-5 lg:py-2 text-xs lg:text-base text-white bg-[#0070C8] rounded-xl lg:rounded-2xl">1</button>
                <button class="px-4 py-[6px] lg:px-5 lg:py-2 text-xs lg:text-base text-white bg-[#0070C8] rounded-xl lg:rounded-2xl">2</button>
                <button class="px-4 py-[6px] lg:px-5 lg:py-2 text-xs lg:text-base text-white bg-[#0070C8] rounded-xl lg:rounded-2xl">3</button>
                <button class="">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <!-- Branding Identity Visual -->

    <!-- Logo Branding Indentity -->
    <div class="relative w-full px-5 lg:px-32 xl:px-0 py-8 lg:py-11">
        <div class="relative max-w-[1180px] w-full mx-auto lg:pb-12 border-b-2">
            <h1 class="text-4xl text-center lg:text-left lg:text-6xl xl:text-7xl font-bold leading-none text-pb-normal-active">Logo Branding <br /><span class="text-p-normal">Indentity</span></h1>
            <div class="grid grid-cols-2 lg:grid-cols-3 gap-2 lg:gap-5 mt-6 lg:mt-8">
                <button class="group rounded-lg lg:rounded-xl row-start-1 col-start-1 col-span-2 lg:col-span-1 overflow-hidden">
                    <img src="assets/img/portofolio/social-media-management1.png" class="w-full group-hover:scale-105 object-cover object-center transition-all duration-500" alt="gambar">
                </button>
                <button class="group rounded-lg lg:rounded-xl overflow-hidden">
                    <img src="assets/img/portofolio/social-media-management2.png" class="w-full group-hover:scale-110 object-cover object-center transition-all duration-500" alt="gambar">
                </button>
                <button class="group rounded-lg lg:rounded-xl overflow-hidden">
                    <img src="assets/img/portofolio/social-media-management3.png" class="w-full group-hover:scale-110 object-cover object-center transition-all duration-500" alt="gambar">
                </button>
                <button class="group rounded-lg lg:rounded-xl overflow-hidden">
                    <img src="assets/img/portofolio/social-media-management4.png" class="w-full group-hover:scale-110 object-cover object-center transition-all duration-500" alt="gambar">
                </button>
                <button class="group rounded-lg lg:rounded-xl overflow-hidden">
                    <img src="assets/img/portofolio/social-media-management4.png" class="w-full group-hover:scale-110 object-cover object-center transition-all duration-500" alt="gambar">
                </button>
                <button class="group rounded-lg lg:rounded-xl overflow-hidden">
                    <img src="assets/img/portofolio/social-media-management6.png" class="w-full group-hover:scale-110 object-cover object-center transition-all duration-500" alt="gambar">
                </button>
                <button class="group rounded-lg lg:rounded-xl overflow-hidden">
                    <img src="assets/img/portofolio/social-media-management6.png" class="w-full group-hover:scale-110 object-cover object-center transition-all duration-500" alt="gambar">
                </button>
                <button class="group rounded-lg lg:rounded-xl overflow-hidden">
                    <img src="assets/img/portofolio/social-media-management8.png" class="w-full group-hover:scale-110 object-cover object-center transition-all duration-500" alt="gambar">
                </button>
                <button class="group rounded-lg lg:rounded-xl overflow-hidden">
                    <img src="assets/img/portofolio/social-media-management8.png" class="w-full group-hover:scale-110 object-cover object-center transition-all duration-500" alt="gambar">
                </button>
            </div>
            <div class="flex justify-center items-center gap-3 py-8 lg:py-0 lg:gap-7 lg:mt-14">
                <button class="">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                    </svg>
                </button>
                <button class="px-4 py-[6px] lg:px-5 lg:py-2 text-xs lg:text-base text-white bg-[#0070C8] rounded-xl lg:rounded-2xl">1</button>
                <button class="px-4 py-[6px] lg:px-5 lg:py-2 text-xs lg:text-base text-white bg-[#0070C8] rounded-xl lg:rounded-2xl">2</button>
                <button class="px-4 py-[6px] lg:px-5 lg:py-2 text-xs lg:text-base text-white bg-[#0070C8] rounded-xl lg:rounded-2xl">3</button>
                <button class="">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <!-- Logo Branding Indentity -->

    <!-- Website And System -->
    <div class="relative w-full px-5 lg:px-32 xl:px-0 py-8 lg:py-11">
        <div class="relative max-w-[1180px] w-full mx-auto lg:pb-12 border-b-2">
            <h1 class="text-4xl text-center lg:text-left lg:text-6xl xl:text-7xl font-bold leading-none text-pb-normal-active">Website<br /><span class="text-p-normal">And System</span></h1>
            <div class="grid grid-cols-2 lg:grid-cols-3 gap-2 lg:gap-5 mt-6 lg:mt-8">
                <button class="group rounded-lg lg:rounded-xl row-start-1 col-start-1 col-span-2 lg:col-span-1 overflow-hidden">
                    <img src="assets/img/portofolio/social-media-management1.png" class="w-full group-hover:scale-105 object-cover object-center transition-all duration-500" alt="gambar">
                </button>
                <button class="group rounded-lg lg:rounded-xl overflow-hidden">
                    <img src="assets/img/portofolio/social-media-management2.png" class="w-full group-hover:scale-110 object-cover object-center transition-all duration-500" alt="gambar">
                </button>
                <button class="group rounded-lg lg:rounded-xl overflow-hidden">
                    <img src="assets/img/portofolio/social-media-management3.png" class="w-full group-hover:scale-110 object-cover object-center transition-all duration-500" alt="gambar">
                </button>
                <button class="group rounded-lg lg:rounded-xl overflow-hidden">
                    <img src="assets/img/portofolio/social-media-management4.png" class="w-full group-hover:scale-110 object-cover object-center transition-all duration-500" alt="gambar">
                </button>
                <button class="group rounded-lg lg:rounded-xl overflow-hidden">
                    <img src="assets/img/portofolio/social-media-management4.png" class="w-full group-hover:scale-110 object-cover object-center transition-all duration-500" alt="gambar">
                </button>
                <button class="group rounded-lg lg:rounded-xl overflow-hidden">
                    <img src="assets/img/portofolio/social-media-management6.png" class="w-full group-hover:scale-110 object-cover object-center transition-all duration-500" alt="gambar">
                </button>
                <button class="group rounded-lg lg:rounded-xl overflow-hidden">
                    <img src="assets/img/portofolio/social-media-management6.png" class="w-full group-hover:scale-110 object-cover object-center transition-all duration-500" alt="gambar">
                </button>
                <button class="group rounded-lg lg:rounded-xl overflow-hidden">
                    <img src="assets/img/portofolio/social-media-management8.png" class="w-full group-hover:scale-110 object-cover object-center transition-all duration-500" alt="gambar">
                </button>
                <button class="group rounded-lg lg:rounded-xl overflow-hidden">
                    <img src="assets/img/portofolio/social-media-management8.png" class="w-full group-hover:scale-110 object-cover object-center transition-all duration-500" alt="gambar">
                </button>
            </div>
            <div class="flex justify-center items-center gap-3 py-8 lg:py-0 lg:gap-7 lg:mt-14">
                <button class="">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                    </svg>
                </button>
                <button class="px-4 py-[6px] lg:px-5 lg:py-2 text-xs lg:text-base text-white bg-[#0070C8] rounded-xl lg:rounded-2xl">1</button>
                <button class="px-4 py-[6px] lg:px-5 lg:py-2 text-xs lg:text-base text-white bg-[#0070C8] rounded-xl lg:rounded-2xl">2</button>
                <button class="px-4 py-[6px] lg:px-5 lg:py-2 text-xs lg:text-base text-white bg-[#0070C8] rounded-xl lg:rounded-2xl">3</button>
                <button class="">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <!-- Website And System -->

    <!-- Website And System -->
    <div class="relative w-full px-5 lg:px-32 xl:px-0 py-8 lg:py-11">
        <div class="relative max-w-[1180px] w-full mx-auto lg:pb-12 border-b-2">
            <h1 class="text-4xl text-center lg:text-left lg:text-6xl xl:text-7xl font-bold leading-none text-pb-normal-active">Digital Marketing<br /><span class="text-p-normal">Startegy</span></h1>
            <div class="grid grid-cols-2 lg:grid-cols-3 gap-2 lg:gap-5 mt-6 lg:mt-8">
                <button class="group rounded-lg lg:rounded-xl row-start-1 col-start-1 col-span-2 lg:col-span-1 overflow-hidden">
                    <img src="assets/img/portofolio/social-media-management1.png" class="w-full group-hover:scale-105 object-cover object-center transition-all duration-500" alt="gambar">
                </button>
                <button class="group rounded-lg lg:rounded-xl overflow-hidden">
                    <img src="assets/img/portofolio/social-media-management2.png" class="w-full group-hover:scale-110 object-cover object-center transition-all duration-500" alt="gambar">
                </button>
                <button class="group rounded-lg lg:rounded-xl overflow-hidden">
                    <img src="assets/img/portofolio/social-media-management3.png" class="w-full group-hover:scale-110 object-cover object-center transition-all duration-500" alt="gambar">
                </button>
                <button class="group rounded-lg lg:rounded-xl overflow-hidden">
                    <img src="assets/img/portofolio/social-media-management4.png" class="w-full group-hover:scale-110 object-cover object-center transition-all duration-500" alt="gambar">
                </button>
                <button class="group rounded-lg lg:rounded-xl overflow-hidden">
                    <img src="assets/img/portofolio/social-media-management4.png" class="w-full group-hover:scale-110 object-cover object-center transition-all duration-500" alt="gambar">
                </button>
                <button class="group rounded-lg lg:rounded-xl overflow-hidden">
                    <img src="assets/img/portofolio/social-media-management6.png" class="w-full group-hover:scale-110 object-cover object-center transition-all duration-500" alt="gambar">
                </button>
                <button class="group rounded-lg lg:rounded-xl overflow-hidden">
                    <img src="assets/img/portofolio/social-media-management6.png" class="w-full group-hover:scale-110 object-cover object-center transition-all duration-500" alt="gambar">
                </button>
                <button class="group rounded-lg lg:rounded-xl overflow-hidden">
                    <img src="assets/img/portofolio/social-media-management8.png" class="w-full group-hover:scale-110 object-cover object-center transition-all duration-500" alt="gambar">
                </button>
                <button class="group rounded-lg lg:rounded-xl overflow-hidden">
                    <img src="assets/img/portofolio/social-media-management8.png" class="w-full group-hover:scale-110 object-cover object-center transition-all duration-500" alt="gambar">
                </button>
            </div>
            <div class="flex justify-center items-center gap-3 py-8 lg:py-0 lg:gap-7 lg:mt-14">
                <button class="">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                    </svg>
                </button>
                <button class="px-4 py-[6px] lg:px-5 lg:py-2 text-xs lg:text-base text-white bg-[#0070C8] rounded-xl lg:rounded-2xl">1</button>
                <button class="px-4 py-[6px] lg:px-5 lg:py-2 text-xs lg:text-base text-white bg-[#0070C8] rounded-xl lg:rounded-2xl">2</button>
                <button class="px-4 py-[6px] lg:px-5 lg:py-2 text-xs lg:text-base text-white bg-[#0070C8] rounded-xl lg:rounded-2xl">3</button>
                <button class="">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
    <!-- Digital Marketing Startegy -->

    <!-- Client Say -->
        <div class="relative w-full px-5 lg:px-32 xl:px-0 py-8 lg:py-11 lg:mt-16">
            <div
                class="relative lg:flex gap-6 max-w-[1180px] w-full mx-auto p-8 bg-[#E6F1FA] rounded-2xl overflow-hidden lg:overflow-visible">
                <img src="assets/img/portofolio/client-say-texture.svg"
                    class="absolute lg:top-0 lg:bottom-0 right-0 lg:right-0 h-[200px] max-w-none lg:max-w-full lg:h-full z-0"
                    alt="texture" />
                <div class="absolute hidden lg:block -top-[10%] right-[4%] space-y-4">
                    <img src="assets/img/portofolio/client-say1.svg" class=" h-[106px] xl:h-auto drop-shadow-[-4px_4px_8px_rgba(0,0,0,0.25)]"
                        alt="gambar client say" />
                    <img src="assets/img/portofolio/client-say2.svg"
                        class=" h-[106px] xl:h-auto -translate-x-[60%] drop-shadow-[-4px_4px_8px_rgba(0,0,0,0.25)]"
                        alt="gambar client say" />
                </div>
                <div class="relative flex-[40%] z-10">
                    <h1
                        class="text-2xl lg:text-4xl xl:text-5xl font-bold lg:leading-tight xl:leading-tight text-pb-normal-active">
                        What our Happy<br />Client say.</h1>
                    <p class="mt-4 xl:mt-5 text-lg xl:text-2xl">Recommendations from satisfied costumers that offirm the
                        value of a product or service.</p>
                </div>
                <div class="hidden lg:block flex-[60%]">

                </div>
            </div>
        </div>
        <!-- Akhir Client Say -->

        <!-- Design Price -->
        <div class="w-full px-6 lg:px-32 xl:px-0 my-12 lg:my-20 relative ">
            <div class="max-w-[1215px] w-full mx-auto relative z-20">
                <h1
                    class="text-2xl lg:text-4xl xl:text-5xl font-bold text-center lg:leading-tight xl:leading-tight text-pb-normal-active">
                    Design <span class="text-p-normal">Prices</span></h1>
                <p class="mt-4 xl:mt-5 text-base lg:text-lg xl:text-2xl text-center">Professional and best Logo and
                    Branding Identity
                    Service Packages at the lowest costs.</p>
                <div
                    class="my-8 bg-white drop-shadow-[0px_5px_20px_rgba(0,0,0,0.10)] rounded-xl overflow-hidden hidden lg:block relative z-10">
                    <div class="flex flex-col lg:flex-row lg:gap-4">
                        <div class="flex-1 px-10 pt-16 pb-10 text-center ">
                            <h4 class="text-xl xl:text-2xl font-bold text-[#008FFF]">HiBronze</h4>
                            <p class="mt-3 text-2xl font-semibold">IDR 1.500.000</p>
                            <p class="text-sm text-[#4B5768]">/ Month</p>
                            <button
                                class="border-[#008FFF] text-[#008FFF] p-[12px] border w-full mt-12 font-bold group-hover:text-pb-normal-active group-hover:bg-[#EDC700] rounded-full text-sm xl:text-base hover:bg-slate-200 ">Get
                                Started Now</button>
                        </div>
                        <div
                            class="group flex-1 px-10 pt-16 pb-10 text-center bg-[#008FFF] text-white  rounded-bl-xl rounded-br-xl">
                            <h4 class="text-xl xl:text-2xl font-bold text-white">HiSilver</h4>
                            <p class="mt-3 text-2xl font-bold">IDR 1.500.000</p>
                            <p class="text-sm text-[#E6EAEC]">/ Month</p>
                            <button
                                class="btn-outline w-full mt-12 font-bold text-pb-normal-active bg-[#EDC700] hover:bg-[#edaa00] rounded-full text-sm xl:text-base p-[12px]">Get
                                Started Now</button>
                        </div>
                        <div class="flex-1 px-10 pt-16 pb-10 text-center hover:rounded-br-xl">
                            <h4 class="text-xl xl:text-2xl font-bold text-p-normal text-[#008FFF]">HiGold</h4>
                            <p class="mt-3 text-2xl font-bold">IDR 1.500.000</p>
                            <p class="text-sm text-[#4B5768]">/ Month</p>
                            <button
                                class="border-[#008FFF] text-[#008FFF] p-[12px] border w-full mt-12 font-bold group-hover:text-pb-normal-active group-hover:bg-[#EDC700] rounded-full text-sm xl:text-base hover:bg-slate-200">Get
                                Started Now</button>
                        </div>
                    </div>
                    <div class="flex px-10 pt-20 pb-11">
                        <div class="flex-1 text-[#002B44]">
                            <h4 class="font-bold xl:text-2xl">Benefits</h4>
                            <ul class="mt-5 lg:space-y-[14px] xl:space-y-[13px] xl:text-2xl">
                                <li>Content Feeds & Story</li>
                                <li>Reels & TikTok Videos</li>
                                <li>Dashboard Content</li>
                                <li>Copywriting & Hastag</li>
                                <li>Monthly Report & Consultation</li>
                                <li>Boost marketing adverstisement</li>
                                <li>Free company website/ Personal</li>
                                <li>Digital marketing lerning videos</li>
                            </ul>
                        </div>
                        <div class="flex-1 xl:text-2xl">
                            <div class="flex text-center">
                                <h4 class="flex-1 font-bold">HiBronze</h4>
                                <h4 class="flex-1 font-bold">HiSilver</h4>
                                <h4 class="flex-1 font-bold">HiGold</h4>
                            </div>
                            <div class="mt-4 text-[#6FBFFF] text-base xl:text-2xl">
                                <div class="flex pt-2 text-center font-normal border-b border-b-[#D9EEFF]">
                                    <h4 class="flex-1 opacity-100">30</h4>
                                    <h4 class="flex-1 text-[#008FFF]">60</h4>
                                    <h4 class="flex-1 opacity-100">90</h4>
                                </div>
                                <div class="flex pt-[10px] xl:pt-3 text-center font-bold border-b border-b-[#D9EEFF]">
                                    <h4 class="flex-1 opacity-100">4</h4>
                                    <h4 class="flex-1 text-[#008FFF]">8</h4>
                                    <h4 class="flex-1 opacity-100">12</h4>
                                </div>
                                <div
                                    class="flex pt-[10px] xl:pt-3 pb-2 text-center font-semibold border-b border-b-[#D9EEFF]">
                                    <h4 class="flex justify-center flex-1 lg:h-[20px] xl:h-6 opacity-60"><img
                                            src="./assets/icons/check-circle.svg" alt="icon check" /></h4>
                                    <h4 class="flex justify-center flex-1 lg:h-[20px] xl:h-6"><img
                                            src="./assets/icons/check-circle.svg" alt="icon check" /></h4>
                                    <h4 class="flex justify-center flex-1 lg:h-[20px] xl:h-6 opacity-60"><img
                                            src="assets/icons/check-circle.svg" alt="icon check" /></h4>
                                </div>
                                <div
                                    class="flex pt-[10px] xl:pt-3 pb-2 text-center font-semibold border-b border-b-[#D9EEFF]">
                                    <h4 class="flex justify-center flex-1 lg:h-[20px] xl:h-6 opacity-60"><img
                                            src="./assets/icons/check-circle.svg" alt="icon check" /></h4>
                                    <h4 class="flex justify-center flex-1 lg:h-[20px] xl:h-6"><img
                                            src="./assets/icons/check-circle.svg" alt="icon check" /></h4>
                                    <h4 class="flex justify-center flex-1 lg:h-[20px] xl:h-6 opacity-60"><img
                                            src="./assets/icons/check-circle.svg" alt="icon check" /></h4>
                                </div>
                                <div
                                    class="flex pt-[10px] xl:pt-3 pb-2 text-center font-semibold border-b border-b-[#D9EEFF]">
                                    <h4 class="flex justify-center flex-1 lg:h-[20px] xl:h-6 opacity-60"><img
                                            src="./assets/icons/check-circle.svg" alt="icon check" /></h4>
                                    <h4 class="flex justify-center flex-1 lg:h-[20px] xl:h-6"><img
                                            src="./assets/icons/check-circle.svg" alt="icon check" /></h4>
                                    <h4 class="flex justify-center flex-1 lg:h-[20px] xl:h-6 opacity-60"><img
                                            src="./assets/icons/check-circle.svg" alt="icon check" /></h4>
                                </div>
                                <div
                                    class="flex pt-[10px] xl:pt-3 pb-2 text-center font-semibold border-b border-b-[#D9EEFF]">
                                    <h4 class="flex justify-center flex-1 lg:h-[20px] xl:h-6 opacity-60"><img
                                            src="./assets/icons/check-circle.svg" alt="icon check" /></h4>
                                    <h4 class="flex justify-center flex-1 lg:h-[20px] xl:h-6"><img
                                            src="./assets/icons/check-circle.svg" alt="icon check" /></h4>
                                    <h4 class="flex justify-center flex-1 lg:h-[20px] xl:h-6 opacity-60"><img
                                            src="./assets/icons/check-circle.svg" alt="icon check" /></h4>
                                </div>
                                <div
                                    class="flex pt-[10px] xl:pt-3 pb-2 text-center font-semibold border-b border-b-[#D9EEFF]">
                                    <h4 class="flex justify-center flex-1 lg:h-[20px] xl:h-6 opacity-60"><img
                                            src="./assets/icons/check-circle.svg" alt="icon check" /></h4>
                                    <h4 class="flex justify-center flex-1 lg:h-[20px] xl:h-6"><img
                                            src="./assets/icons/check-circle.svg" alt="icon check" /></h4>
                                    <h4 class="flex justify-center flex-1 lg:h-[20px] xl:h-6 opacity-60"><img
                                            src="./assets/icons/check-circle.svg" alt="icon check" /></h4>
                                </div>
                                <div
                                    class="flex pt-[10px] xl:pt-3 pb-2 text-center font-semibold border-b border-b-[#D9EEFF]">
                                    <h4 class="flex justify-center flex-1 lg:h-[20px] xl:h-6 opacity-60"><img
                                            src="./assets/icons/check-circle.svg" alt="icon check" /></h4>
                                    <h4 class="flex justify-center flex-1 lg:h-[20px] xl:h-6"><img
                                            src="./assets/icons/check-circle.svg" alt="icon check" /></h4>
                                    <h4 class="flex justify-center flex-1 lg:h-[20px] xl:h-6 opacity-60"><img
                                            src="./assets/icons/check-circle.svg" alt="icon check" /></h4>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- Responsive Mobile Price -->
                <div class="lg:hidden mt-4">
                    <div class="flex justify-between items-center text-[#008FFF]">
                        <button class="section-button rounded-[10px] text-center w-[110px] h-[40px]"
                            data-target="hibronze" id="button-bronze">HiBronze</button>
                        <button class="section-button rounded-[10px] text-center w-[110px] h-[40px]"
                            data-target="hisilver" id="button-silver">HiSilver</button>
                        <button class="section-button rounded-[10px] text-center w-[110px] h-[40px]"
                            data-target="higold" id="button-gold">HiGold</button>
                    </div>
                    <div id="hibronze"
                        class="h-full py-6 w-full shadow-[0_3px_10px_rgb(0,0,0,0.2)] mt-8 text-black px-6 rounded-[10px] price">
                        <h1 class="text-center text-[32px] ">IDR 1.500.000</h1>
                        <p class="text-center text-[14px] font-light">/Month</p>
                        <div class="flex justify-center">
                            <button
                                class="mt-6 w-full h-[44px] rounded-[10px]  border border-[#008FFF] text-[#008FFF]">Get
                                Started Now</button>
                        </div>
                        <h1 class="mt-8 text-[18px]">Benefits</h1>
                        <div class="flex justify-between mt-4">
                            <p class="text-[16px]">Content Feed & Story</p>
                            <p class="text-[16px] font-semibold text-[#008FFF]">30</p>
                        </div>
                        <div class="flex justify-between mt-4">
                            <p class="text-[16px]">Reels & TikTok Video</p>
                            <p class="text-[16px] font-semibold text-[#008FFF]">4</p>
                        </div>
                        <div class="flex justify-between mt-4">
                            <p class="text-[16px]">Dashboard Content</p>
                            <p class="text-[16px] font-semibold"><img class="w-[18px]"
                                    src="assets/icons/check-circle.svg" alt=""></p>
                        </div>
                        <div class="flex justify-between mt-4">
                            <p class="text-[16px]">Copywriting & Hastag</p>
                            <p class="text-[16px] font-semibold"><img class="w-[18px]"
                                    src="assets/icons/check-circle.svg" alt=""></p>
                        </div>
                        <div class="flex justify-between mt-4">
                            <p class="text-[16px]">Montly Report & Consultation</p>
                            <p class="text-[16px] font-semibold"><img class="w-[18px]"
                                    src="assets/icons/check-circle.svg" alt=""></p>
                        </div>
                        <div class="flex justify-between mt-4">
                            <p class="text-[16px]">Boost Marketing Advertisement</p>
                            <p class="text-[16px] font-semibold"><img class="w-[18px]"
                                    src="assets/icons/check-circle.svg" alt=""></p>
                        </div>
                        <div class="flex justify-between mt-4">
                            <p class="text-[16px]">Free Company Website/Personal</p>
                            <p class="text-[16px] font-semibold"><img class="w-[18px]"
                                    src="assets/icons/check-circle.svg" alt=""></p>
                        </div>
                        <div class="flex justify-between mt-4">
                            <p class="text-[16px]">Digital Marketing Learning Video</p>
                            <p class="text-[16px] font-semibold"><img class="w-[18px]"
                                    src="assets/icons/check-circle.svg" alt=""></p>
                        </div>
                    </div>
                    <div id="hisilver"
                        class="h-full py-6 w-full bg-[#008FFF] mt-8 text-white px-6 rounded-[10px] price">
                        <h1 class="text-center text-[32px]">IDR 1.500.000</h1>
                        <p class="text-center text-[14px] font-light">/Month</p>
                        <div class="flex justify-center">
                            <button
                                class="mt-6 w-full h-[44px] rounded-[10px]  bg-[#EDC700] hover:bg-[#edaa00] text-black">Get
                                Started Now</button>
                        </div>
                        <h1 class="mt-8 text-[18px]">Benefits</h1>
                        <div class="flex justify-between mt-4">
                            <p class="text-[16px]">Content Feed & Story</p>
                            <p class="text-[16px] font-semibold">60</p>
                        </div>
                        <div class="flex justify-between mt-4">
                            <p class="text-[16px]">Reels & TikTok Video</p>
                            <p class="text-[16px] font-semibold">8</p>
                        </div>
                        <div class="flex justify-between mt-4">
                            <p class="text-[16px]">Dashboard Content</p>
                            <p class="text-[16px] font-semibold"><img class="w-[18px] "
                                    src="assets/icons/check-circle-white.svg" alt=""></p>
                        </div>
                        <div class="flex justify-between mt-4">
                            <p class="text-[16px]">Copywriting & Hastag</p>
                            <p class="text-[16px] font-semibold"><img class="w-[18px] "
                                    src="assets/icons/check-circle-white.svg" alt=""></p>
                        </div>
                        <div class="flex justify-between mt-4">
                            <p class="text-[16px]">Montly Report & Consultation</p>
                            <p class="text-[16px] font-semibold"><img class="w-[18px] "
                                    src="assets/icons/check-circle-white.svg" alt=""></p>
                        </div>
                        <div class="flex justify-between mt-4">
                            <p class="text-[16px]">Boost Marketing Advertisement</p>
                            <p class="text-[16px] font-semibold"><img class="w-[18px] "
                                    src="assets/icons/check-circle-white.svg" alt=""></p>
                        </div>
                        <div class="flex justify-between mt-4">
                            <p class="text-[16px]">Free Company Website/Personal</p>
                            <p class="text-[16px] font-semibold"><img class="w-[18px] "
                                    src="assets/icons/check-circle-white.svg" alt=""></p>
                        </div>
                        <div class="flex justify-between mt-4">
                            <p class="text-[16px]">Digital Marketing Learning Video</p>
                            <p class="text-[16px] font-semibold"><img class="w-[18px] "
                                    src="assets/icons/check-circle-white.svg" alt=""></p>
                        </div>
                    </div>
                    <div id="higold"
                        class="h-full py-6 w-full shadow-[0_3px_10px_rgb(0,0,0,0.2)] mt-8 text-black px-6 rounded-[20px] price">
                        <h1 class="text-center text-[32px]">IDR 1.500.000</h1>
                        <p class="text-center text-[14px] font-light">/Month</p>
                        <div class="flex justify-center">
                            <button
                                class="mt-6 w-full h-[44px] rounded-[10px]  border border-[#008FFF] text-[#008FFF]">Get
                                Started Now</button>
                        </div>
                        <h1 class="mt-8 text-[18px]">Benefits</h1>
                        <div class="flex justify-between mt-4">
                            <p class="text-[16px]">Content Feed & Story</p>
                            <p class="text-[16px] font-semibold text-[#008FFF]">90</p>
                        </div>
                        <div class="flex justify-between mt-4">
                            <p class="text-[16px]">Reels & TikTok Video</p>
                            <p class="text-[16px] font-semibold text-[#008FFF]">12</p>
                        </div>
                        <div class="flex justify-between mt-4">
                            <p class="text-[16px]">Dashboard Content</p>
                            <p class="text-[16px] font-semibold"><img class="w-[18px]"
                                    src="assets/icons/check-circle.svg" alt=""></p>
                        </div>
                        <div class="flex justify-between mt-4">
                            <p class="text-[16px]">Copywriting & Hastag</p>
                            <p class="text-[16px] font-semibold"><img class="w-[18px]"
                                    src="assets/icons/check-circle.svg" alt=""></p>
                        </div>
                        <div class="flex justify-between mt-4">
                            <p class="text-[16px]">Montly Report & Consultation</p>
                            <p class="text-[16px] font-semibold"><img class="w-[18px]"
                                    src="assets/icons/check-circle.svg" alt=""></p>
                        </div>
                        <div class="flex justify-between mt-4">
                            <p class="text-[16px]">Boost Marketing Advertisement</p>
                            <p class="text-[16px] font-semibold"><img class="w-[18px]"
                                    src="assets/icons/check-circle.svg" alt=""></p>
                        </div>
                        <div class="flex justify-between mt-4">
                            <p class="text-[16px]">Free Company Website/Personal</p>
                            <p class="text-[16px] font-semibold"><img class="w-[18px]"
                                    src="assets/icons/check-circle.svg" alt=""></p>
                        </div>
                        <div class="flex justify-between mt-4">
                            <p class="text-[16px]">Digital Marketing Learning Video</p>
                            <p class="text-[16px] font-semibold"><img class="w-[18px]"
                                    src="assets/icons/check-circle.svg" alt=""></p>
                        </div>
                    </div>
                </div>
                <!-- End Responsive Mobile Price -->
            </div>
        </div>
        <!-- End Design Price -->

        <!-- Transforms Your Brands -->
        <div class="px-5 lg:px-32 xl:px-0 py-8 lg:py-11">
            <div class="max-w-[1180px] w-full mx-auto pt-6 pb-20 lg:px-20 text-center">
                <h1
                    class="px-6 lg:px-0 text-2xl lg:text-4xl xl:text-5xl font-bold lg:leading-tight xl:leading-tight text-pb-normal-active">
                    Ready to transform your brand?</h1>
                <p class="mt-4 xl:mt-5 text-lg xl:text-2xl">Our talented content creators will design eye-catching visuals
                    and craft engaging copy that resonates with your audience.</p>
                <button
                    class="btn-blue px-6 lg:px-8 lg:py-3 xl:px-10 xl:py-4 mt-8 lg:mt-11 xl:mt-11 font-bold xl:text-xl rounded-full">Get
                    Started
                    <span class="">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="inline-block fill-black ml-1 -mt-1 w-4 h-4 p-[2px] bg-white rounded-full">
                          <path fill-rule="evenodd" d="M16.28 11.47a.75.75 0 010 1.06l-7.5 7.5a.75.75 0 01-1.06-1.06L14.69 12 7.72 5.03a.75.75 0 011.06-1.06l7.5 7.5z" clip-rule="evenodd" />
                        </svg>
                    </span>
                </button>
            </div>
        </div>
        <!-- Akhir Transforms Your Brands -->
@endsection
