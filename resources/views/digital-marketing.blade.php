@extends('layouts.main')

@section('container')
<!-- Hero -->
<div class="relative w-[100vw-1px] h-[calc(100vh-74px)] lg:h-[calc(100vh-80px)] xl:h-[calc(100vh-100px)] mx-auto">
    <div class="absolute inset-0 w-full h-full bg-[rgba(176,211,238,0.50)] z-0"></div>

            <img 
                src="/assets/img/service/banner-social-media-management.png"
                class="relative w-full h-full object-cover object-center z-10"
                alt="gambar hero"
            >
            <div class="absolute flex flex-col justify-center h-[80%] px-6 lg:px-0 text-left inset-0 my-auto md:text-center space-y-4 lg:space-y-6 xl:space-y-7 z-20">
                <h1 class="text-3xl lg:text-5xl xl:text-6xl font-bold lg:leading-tight xl:leading-tight text-pb-normal-active">Unlock Your Business's Full Potential<br class="hidden md:block"/>with a<span class="text-p-normal font-CabinetGrotesk-Medium"> Customized Digital Marketing Strategy</span></h1>
                <p class="md:w-[76%] md:mx-auto font-normal leading-relaxed lg:leading-normal text-md lg:text-lg xl:text-xl">Welcome to Hisocial – Your Partner in Digital Marketing Success!<br/> In today's fast-paced digital landscape, a strong online presence is not just an option; it's a necessity. To thrive and succeed in the competitive digital world, you need a tailored digital marketing strategy that aligns perfectly with your business goals and objectives. That's where we come in!</p>
                <div>
                    <button class="btn-blue w-full md:w-auto lg:px-16 lg:py-3 xl:px-20 xl:py-4 mt-5 lg:mt-6 xl:mt-8 font-bold xl:text-xl rounded-xl">Get Started</button>
                </div>
            </div>
        </div>
    <!-- Akhir Hero -->

    @include('partials.corporate-colaboration')

    <!-- Strategy Approach -->
    <div class="w-full px-6 md:px-32 xl:px-0 pt-12 pb-8 lg:py-14 xl:mt-16">
        <div class="flex flex-col-reverse lg:flex-row lg:items-center gap-6 lg:gap-12 max-w-[1180px] w-full mx-auto">
            <div class="lg:flex-1">
                <h1 class="text-2xl lg:text-4xl xl:text-5xl font-bold lg:leading-tight xl:leading-tight text-pb-normal-active">The Power of a Strategic Approach</h1>
                <p class="mt-4 xl:mt-5 text-base md:text-lg xl:text-xl xl:leading-relaxed"><span class="text-p-normal font-bold">At Hisocial,</span> we understand that digital marketing is more than just ads and social media posts. It's about crafting a comprehensive strategy that drives results. Our team of experts specializes in creating data-driven, ROI-focused digital marketing strategies that :</p>
                <ul class="list-inside mt-4">
                    <li class="flex gap-2 xl:gap-3 py-1">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-7 h-7 lg:w-9 lg:h-9 xl:w-10 xl:h-11 fill-p-normal">
                              <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" />
                            </svg>
                        </span>
                        <p class="text-base md:text-lg xl:text-xl xl:leading-relaxed"><span class="text-p-normal font-bold">Boost Visibility</span> : We'll make sure your brand stands out in the crowded digital space.</p>
                    </li>
                    <li class="flex gap-2 py-1">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-7 h-7 lg:w-9 lg:h-9 xl:w-10 xl:h-11 fill-p-normal">
                              <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" />
                            </svg>
                        </span>
                        <p class="text-base md:text-lg xl:text-xl xl:leading-relaxed"><span class="text-p-normal font-bold">Increase Engagement </span> : Engage your target audience and turn them into loyal customers.</p>
                    </li>
                    <li class="flex gap-2 py-1">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-7 h-7 lg:w-9 lg:h-9 xl:w-10 xl:h-11 fill-p-normal">
                              <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" />
                            </svg>
                        </span>
                        <p class="text-base md:text-lg xl:text-xl xl:leading-relaxed"><span class="text-p-normal font-bold">Drive Conversions</span> : Watch your leads transform into sales and revenue.</p>
                    </li>
                    <li class="flex gap-2 py-1">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-7 h-7 lg:w-9 lg:h-9 xl:w-10 xl:h-11 fill-p-normal">
                              <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" />
                            </svg>
                        </span>
                        <p class="text-base md:text-lg xl:text-xl xl:leading-relaxed"><span class="text-p-normal font-bold">Outperform Competitors</span> : Stay one step ahead of the competition with a strategic edge.</p>
                    </li>
                </ul>
            </div>
            <div class="lg:flex-1">
                <div class="w-full space-y-2 lg:space-y-5 h-full">
                    <div class="flex gap-2 lg:gap-5">
                        <div class="flex-[36%] rounded-xl overflow-hidden drop-shadow-[0px_5px_40px_rgba(0,0,0,0.16)]">
                            <img src="/assets/img/service/strategy-approach.png" alt="gambar">
                        </div>
                        <div class="flex-[64%] rounded-xl overflow-hidden drop-shadow-[0px_5px_40px_rgba(0,0,0,0.16)]">
                            <img src="/assets/img/service/strategy-approach2.png" alt="gambar">
                        </div> 
                    </div>
                    <div class="flex gap-3 lg:gap-5">
                        <div class="flex-1 rounded-xl overflow-hidden drop-shadow-[0px_5px_40px_rgba(0,0,0,0.16)]">
                            <img src="/assets/img/service/strategy-approach3.png" alt="gambar">
                        </div>
                        <div class="flex-1 rounded-xl overflow-hidden drop-shadow-[0px_5px_40px_rgba(0,0,0,0.16)]">
                            <img src="/assets/img/service/strategy-approach4.png" alt="gambar">
                        </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>
    <!-- Akhir Strategy Approach -->

    <!-- Tailored Approach -->
    <div class="w-full px-6 md:px-32 xl:px-0 py-8 lg:py-14">
        <div class="flex flex-col lg:flex-row lg:items-center gap-6 lg:gap-12 max-w-[1180px] w-full mx-auto">
            <div class="lg:flex-1">
                <div class="flex flex-col gap-3 lg:gap-5">
                    <div class="relative w-full h-[120px] lg:h-[325px] rounded-xl overflow-hidden drop-shadow-[0px_5px_40px_rgba(0,0,0,0.16)]">
                        <img src="/assets/img/service/tailored-approach1.png" class="relative h-full w-full object-cover" alt="gambar">
                    </div>
                    <div class="relative h-full rounded-xl overflow-hidden drop-shadow-[0px_5px_40px_rgba(0,0,0,0.16)]">
                        <img src="/assets/img/service/tailored-approach2.png" class="relative h-full w-full object-cover" alt="gambar">
                    </div>
                </div>  
            </div>
            <div class="lg:flex-1">
                <h1 class="text-2xl lg:text-4xl xl:text-5xl font-bold lg:leading-tight xl:leading-tight text-pb-normal-active">Our Tailored Approach</h1>
                <p class="mt-4 xl:mt-5 text-base md:text-lg xl:text-xl xl:leading-relaxed"><span class="text-p-normal font-bold">At Hisocial,</span> we don't believe in one-size-fits-all solutions. Your business is unique, and so should be your digital marketing strategy. Here's how our process works:</p>
                <ul class="list-inside mt-3">
                    <li class="flex gap-3 py-1">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-7 h-7 lg:w-9 lg:h-9 xl:w-10 xl:h-11 fill-p-normal">
                              <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" />
                            </svg>
                        </span>
                        <p class="text-base md:text-lg xl:text-xl xl:leading-relaxed"><span class="text-p-normal font-bold">Discovery</span> : We start by understanding your business, goals, and target audience.</p>
                    </li>
                    <li class="flex gap-2 py-1">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-7 h-7 lg:w-9 lg:h-9 xl:w-10 xl:h-11 fill-p-normal">
                              <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" />
                            </svg>
                        </span>
                        <p class="text-base md:text-lg xl:text-xl xl:leading-relaxed"><span class="text-p-normal font-bold">Strategy Development </span> : Our experts craft a customized digital marketing plan tailored to your needs.</p>
                    </li>
                    <li class="flex gap-2 py-1">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-7 h-7 lg:w-9 lg:h-9 xl:w-10 xl:h-11 fill-p-normal">
                              <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" />
                            </svg>
                        </span>
                        <p class="text-base md:text-lg xl:text-xl xl:leading-relaxed"><span class="text-p-normal font-bold">Execution</span>  We put the plan into action, leveraging the latest digital marketing techniques.</p>
                    </li>
                    <li class="flex gap-2 py-1">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-7 h-7 lg:w-9 lg:h-9 xl:w-10 xl:h-11 fill-p-normal">
                              <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" />
                            </svg>
                        </span>
                        <p class="text-base md:text-lg xl:text-xl xl:leading-relaxed"><span class="text-p-normal font-bold">Analysis</span> : Regular monitoring and adjustments to ensure optimal performance.</p>
                    </li>
                    <li class="flex gap-2 py-1">
                        <span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-7 h-7 lg:w-9 lg:h-9 xl:w-10 xl:h-11 fill-p-normal">
                              <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" />
                            </svg>
                        </span>
                        <p class="text-base md:text-lg xl:text-xl xl:leading-relaxed"><span class="text-p-normal font-bold">Results</span> : Watch your online presence soar and your business grow.</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Akhir Tailored Approach -->

    <!-- Our Success Project -->
    <!-- <div class="flex justify-center w-full px-6 md:px-32 xl:px-0 py-8 lg:py-14 bg-[#008FFF]">
        <div class="max-w-[1180px] w-full mx-auto">
            <div class="swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="flex flex-col liquid-after liquid-before relative w-full h-[480px] rounded-br-none bg-[#008FFF] rounded-3xl  overflow-hidden">
                        <div class="absolute bottom-0 right-0 w-[180px] h-[180px] p-3 bg-[#008FFF] rounded-br-[50%] rounded-[50%] rounded-br-none z-10">
                            <button class="relative w-full h-full p-6 bg-white rounded-full z-10">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-full h-full text-p-normal">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25" />
                                </svg>
                            </button>
                            <div class="w-full h-full rounded-full after:absolute after:bottom-0 after:left-5 after:content-[''] after:w-[80px] after:h-[40px] after:bg-[#008FFF] before:absolute before:right-0 before:top-5 before:content-[''] before:h-[80px] before:w-[40px] before:bg-[#008FFF] z-0"></div>
                        </div>
                        <div class="flex-[26%] bg-white"></div>
                        <div class="relative flex-[74%] w-full h-full z-0">
                            <img src="./asset/img/our-success-project1.png" class="absolute w-full h-full object-cover" alt="gambar our success project" />
                        </div>
                    </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="flex flex-col liquid-after liquid-before relative w-full h-[480px] rounded-br-none bg-[#008FFF] rounded-3xl  overflow-hidden">
                        <div class="absolute bottom-0 right-0 w-[180px] h-[180px] p-3 bg-[#008FFF] rounded-br-[50%] rounded-[50%] rounded-br-none z-10">
                            <button class="relative w-full h-full p-6 bg-white rounded-full z-10">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-full h-full text-p-normal">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25" />
                                </svg>
                            </button>
                            <div class="w-full h-full rounded-full after:absolute after:bottom-0 after:left-5 after:content-[''] after:w-[80px] after:h-[40px] after:bg-[#008FFF] before:absolute before:right-0 before:top-5 before:content-[''] before:h-[80px] before:w-[40px] before:bg-[#008FFF] z-0"></div>
                        </div>
                        <div class="flex-[26%] bg-white"></div>
                        <div class="relative flex-[74%] w-full h-full z-0">
                            <img src="./asset/img/our-success-project1.png" class="absolute w-full h-full object-cover" alt="gambar our success project" />
                        </div>
                    </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="flex flex-col liquid-after liquid-before relative w-full h-[480px] rounded-br-none bg-[#008FFF] rounded-3xl  overflow-hidden">
                        <div class="absolute bottom-0 right-0 w-[180px] h-[180px] p-3 bg-[#008FFF] rounded-br-[50%] rounded-[50%] rounded-br-none z-10">
                            <button class="relative w-full h-full p-6 bg-white rounded-full z-10">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-full h-full text-p-normal">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25" />
                                </svg>
                            </button>
                            <div class="w-full h-full rounded-full after:absolute after:bottom-0 after:left-5 after:content-[''] after:w-[80px] after:h-[40px] after:bg-[#008FFF] before:absolute before:right-0 before:top-5 before:content-[''] before:h-[80px] before:w-[40px] before:bg-[#008FFF] z-0"></div>
                        </div>
                        <div class="flex-[26%] bg-white"></div>
                        <div class="relative flex-[74%] w-full h-full z-0">
                            <img src="./asset/img/our-success-project1.png" class="absolute w-full h-full object-cover" alt="gambar our success project" />
                        </div>
                    </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="flex flex-col liquid-after liquid-before relative w-full h-[480px] rounded-br-none bg-[#008FFF] rounded-3xl  overflow-hidden">
                        <div class="absolute bottom-0 right-0 w-[180px] h-[180px] p-3 bg-[#008FFF] rounded-br-[50%] rounded-[50%] rounded-br-none z-10">
                            <button class="relative w-full h-full p-6 bg-white rounded-full z-10">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-full h-full text-p-normal">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 19.5l15-15m0 0H8.25m11.25 0v11.25" />
                                </svg>
                            </button>
                            <div class="w-full h-full rounded-full after:absolute after:bottom-0 after:left-5 after:content-[''] after:w-[80px] after:h-[40px] after:bg-[#008FFF] before:absolute before:right-0 before:top-5 before:content-[''] before:h-[80px] before:w-[40px] before:bg-[#008FFF] z-0"></div>
                        </div>
                        <div class="flex-[26%] bg-white"></div>
                        <div class="relative flex-[74%] w-full h-full z-0">
                            <img src="./asset/img/our-success-project1.png" class="absolute w-full h-full object-cover" alt="gambar our success project" />
                        </div>
                    </div>
                    </div>
                </div>

            </div>
        </div>
    </div> -->
    <!-- Akhir Our Success Project -->

    <!-- Why You Can Expect -->
    <div class="w-full px-6 lg:px-32 xl:px-0 py-8 lg:pb-14 lg:pt-24">
        <div class=" max-w-[1180px] w-full mx-auto space-y-4 ">
            <div class="relative flex flex-col-reverse lg:flex-row gap-6 px-6 py-10 lg:px-8 lg:pt-12 lg:pb-14 bg-[#E6F1FA] rounded-2xl overflow-hidden lg:overflow-visible lg:drop-shadow-[-4px_4px_8px_rgba(0,0,0,0.25)]">
                <img src="/assets/img/service/you-can-expect-shape.svg" class="absolute lg:top-0 lg:bottom-0 right-0 lg:right-0 h-[200px] max-w-none lg:max-w-full lg:h-full z-0" alt="texture" />
                <div class="lg:absolute lg:-top-[26%] lg:-right-[5%] space-y-2 lg:space-y-4">
                    <img src="/assets/img/service/you-can-expect1.svg" class=" lg:h-[106px] xl:h-auto lg:-translate-x-[60%] drop-shadow-[-4px_4px_8px_rgba(0,0,0,0.25)]"
                        alt="gambar client say" />
                    <img src="/assets/img/service/you-can-expect2.svg"
                        class="lg:h-[106px] xl:h-auto drop-shadow-[-4px_4px_8px_rgba(0,0,0,0.25)]"
                        alt="gambar client say" />
                </div>
                <div class="relative flex-1 z-10">
                    <h1
                        class="text-2xl lg:text-4xl xl:text-5xl font-bold lg:leading-tight xl:leading-tight text-pb-normal-active">
                        What You Can Expect</h1>
                    <p class="lg:max-w-[50%] xl:max-w-[60%] mt-4 xl:mt-5 text-base lg:text-lg xl:text-2xl">When you choose Hisocial you can expect:</p>
                </div>
                <div class="hidden lg:block flex-1">
        
                </div>
            </div>
            <div class="flex flex-col-reverse lg:flex-row gap-6 lg:gap-12 items-center pb-8 lg:pb-0 lg:p-4 lg:p-8 bg-white lg:drop-shadow-[-4px_4px_8px_rgba(0,0,0,0.25)] space-y-5 rounded-xl">
                <div class="flex-1">
                    <ul class="list-inside">
                        <li class="flex gap-2 xl:gap-3 py-1">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-7 h-7 lg:w-9 lg:h-9 xl:w-10 xl:h-11 fill-p-normal">
                                  <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" />
                                </svg>
                            </span>
                            <p class="text-base md:text-lg xl:text-xl xl:leading-relaxed"><span class="text-p-normal font-bold">Measurable Results</span> :Track your progress with transparent reporting.</p>
                        </li>
                        <li class="flex gap-2 py-1">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-7 h-7 lg:w-9 lg:h-9 xl:w-10 xl:h-11 fill-p-normal">
                                  <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" />
                                </svg>
                            </span>
                            <p class="text-base md:text-lg xl:text-xl xl:leading-relaxed"><span class="text-p-normal font-bold">Personalized Service </span> : Your success is our priority, and we treat your business as our own.</p>
                        </li>
                        <li class="flex gap-2 py-1">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-7 h-7 lg:w-9 lg:h-9 xl:w-10 xl:h-11 fill-p-normal">
                                  <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" />
                                </svg>
                            </span>
                            <p class="text-base md:text-lg xl:text-xl xl:leading-relaxed"><span class="text-p-normal font-bold">Affordable Pricing</span> : High-quality digital marketing that fits your budget.</p>
                        </li>
                        <li class="flex gap-2 py-1">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-7 h-7 lg:w-9 lg:h-9 xl:w-10 xl:h-11 fill-p-normal">
                                  <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" />
                                </svg>
                            </span>
                            <p class="text-base md:text-lg xl:text-xl xl:leading-relaxed"><span class="text-p-normal font-bold">Continuous Improvement</span> : We stay updated with industry trends to keep your strategy ahead of the curve.</p>
                        </li>
                    </ul>
                </div>
                <div class="flex-1 space-y-3 lg:space-y-4">
                    <img src="/assets/img/service/you-can-expect1.png" class="w-full object-cover rounded-xl drop-shadow-[0px_5px_20px_rgba(0,0,0,0.25)]" alt="gambar">
                    <div class="flex gap-3 lg:gap-4 w-full">
                        <div>
                            <img src="/assets/img/service/you-can-expect2.png" class="flex-1 w-full object-cover rounded-xl drop-shadow-[0px_5px_20px_rgba(0,0,0,0.25)]" alt="gambar">
                        </div>
                        <div>
                            <img src="/assets/img/service/you-can-expect3.png" class="flex-1 w-full object-cover rounded-xl drop-shadow-[0px_5px_20px_rgba(0,0,0,0.25)]" alt="gambar">  
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Akhir Why You Can Expect -->
    @include('partials.design-price')

@endsection
    