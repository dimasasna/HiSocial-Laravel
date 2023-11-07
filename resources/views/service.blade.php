@extends('layouts.main')

@section('container')

 <!-- Hero -->
<div class="relative w-[100vw-1px] h-[calc(100vh-74px)] lg:h-screen mx-auto lg:mb-[200px]">
    <div class="w-full h-full overflow-hidden">
        <img 
            src="assets/img/service/bg.png"
            class="relative w-full h-full object-cover object-center z-10"
            alt="gambar hero"
        >
        <div class="absolute flex flex-col justify-center h-[80%] px-6 lg:px-0 inset-0 -top-[140px] lg:-top-20 my-auto text-center space-y-5 lg:space-y-6 xl:space-y-7 z-20">
            <span class="px-6 py-1 lg:w-[400px] lg:py-1 xl:w-[480px] mx-auto xl:py-2 lg:text-center lg:text-lg xl:text-xl bg-[rgba(255,255,255,0.6)] border lg:border-2 rounded-full">Improve Your Business With us</span>
            <h1 class="lg:pb-1 text-3xl lg:text-5xl xl:text-6xl font-bold lg:leading-tight font-plus-jakarta-sans xl:leading-tight text-pb-normal-active">Terhubung Satu Sama Lain<br class="hidden md:block"/>Bersama <span class="text-p-normal font-semibold">HiSocial Digitall</span></h1>
            <p class="md:w-[76%] md:mx-auto font-normal leading-relaxed lg:leading-relaxed xl:leading-relaxed text-md lg:text-2xl xl:text-3xl text-[rgba(82,82,91,1)]">All our dedication is carried out with heart and research so that our <br/>partners achieve the goals of the company.</p>
            <div class="space-x-2 lg:space-x-4">
                <button class="btn-blue md:w-auto lg:px-8 lg:py-3 xl:px-12 xl:py-4 font-normal xl:text-xl rounded-xl">Join Our Partner</button>
                <button class="btn-blue md:w-auto lg:px-8 lg:py-3 xl:px-12 xl:py-4 font-normal xl:text-xl bg-[#E9C927] rounded-xl">Learn More</button>
            </div>
        </div>
    </div>
    <div class="relative inset-x-0 -top-[16%] lg:-top-[20%] w-full h-full overflow-hidden z-30">
        <img src="assets/img/service/element.svg" class="w-full h-auto scale-150 lg:scale-100" alt="element">
    </div>
</div>
<!-- Akhir Hero -->

@endsection
