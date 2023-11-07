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
            <div class="absolute flex flex-col justify-center h-[80%] px-5 lg:px-0 text-left inset-0 m-auto md:text-center space-y-4 lg:space-y-6 xl:space-y-7 z-20">
                <h1 class="text-3xl lg:text-5xl xl:text-6xl font-bold lg:leading-tight xl:leading-tight text-pb-normal-active">Unlock the Power of Social Media with<br class="hidden md:block"/>Our <span class="text-p-normal">Expert Management Service</span></h1>
                <p class="md:w-[76%] md:mx-auto font-normal leading-relaxed lg:leading-normal text-md lg:text-lg xl:text-xl">Welcome to Hisocial your trusted partner in navigating the dynamic world of social media. We understand that managing  your social media presence can be overwhelming. That's why we're here to offer you a comprehensive Social Media Management Service that takes your brand to the next level.</p>
                <div>
                    <button class="btn-blue w-full md:w-auto lg:px-16 lg:py-3 xl:px-20 xl:py-4 mt-5 lg:mt-6 xl:mt-8 font-bold xl:text-xl rounded-xl">Get Started</button>
                </div>
            </div>
        </div>
        <!-- Akhir Hero -->

    @include('partials.corporate-colaboration')

    <!-- Why Choose Us -->
    <div class="w-full px-5 md:px-32 xl:px-0 py-8 lg:py-11">
            <div class="grid grid-cols-1 gap-5 lg:grid-cols-2 lg:gap-9 xl:gap-11 max-w-[1180px] w-full mx-auto">
                <div class="flex pb-2 md:pb-0 justify-center md:justify-start items-center">
                    <h1 class="text-3xl lg:text-5xl xl:text-6xl text-center md:text-left font-bold lg:leading-tight xl:leading-tight text-pb-normal-active">Why you should <span class="block text-p-normal">choose us?</span></h1>
                </div>
                <div class="md:h-56 xl:h-56 py-6 md:pb-0 lg:py-8 px-7 lg:px-8 space-y-3 lg:space-y-4  rounded-xl bg-white drop-shadow-card">
                    <div class="flex items-center gap-2 xl:gap-3">
                        <img src="/assets/icons/expertise-that-matters.svg" alt="icon" class="w-7 lg:w-8 xl:w-9 h-auto" />
                        <h4 class="text-base lg:text-xl xl:text-2xl font-bold">Expertise That Matters</h4>
                    </div>
                    <p class="text-sm lg:text-base text-justify">At Hisocial, our team consists of social media experts who live and breathe the digital landscape. We stay ahead of trends, algorithms, and updates to ensure your brand remains relevant and engaging.</p>
                </div>
                <div class="md:h-56 xl:h-56 py-6 md:pb-0 lg:py-8 px-7 lg:px-8 space-y-3 lg:space-y-4  rounded-xl bg-white drop-shadow-card">
                    <div class="flex items-center gap-2 xl:gap-3">
                        <img src="/assets/icons/tailored-strategies.svg" alt="icon" class="w-7 lg:w-8 xl:w-9 h-auto" />
                        <h4 class="text-base lg:text-xl xl:text-2xl font-bold">Tailored Strategies</h4>
                    </div>
                    <p class="text-sm lg:text-base text-justify">We know that one size doesn't fit all. We'll craft a customized social media strategy to meet your unique goals and objectives. Whether it's increasing brand awareness, driving leads, or boosting sales, we've got you covered.</p>
                </div>
                <div class="md:h-56 xl:h-56 py-6 md:pb-0 lg:py-8 px-7 lg:px-8 space-y-3 lg:space-y-4  rounded-xl bg-white drop-shadow-card">
                    <div class="flex items-center gap-2 xl:gap-3">
                        <img src="/assets/icons/content-that-captivates.svg" alt="icon" class="w-7 lg:w-8 xl:w-9 h-auto" />
                        <h4 class="text-base lg:text-xl xl:text-2xl font-bold">Content That Captivates</h4>
                    </div>
                    <p class="text-sm lg:text-base text-justify">Our skilled content creators know how to craft compelling, shareable content that resonates with your target audience. From eye-catching visuals to engaging captions, we'll make sure your brand shines.</p>
                </div>
                <div class="md:h-56 xl:h-56 py-6 md:pb-0 lg:py-8 px-7 lg:px-8 space-y-3 lg:space-y-4  rounded-xl bg-white drop-shadow-card">
                    <div class="flex items-center gap-2 xl:gap-3">
                        <img src='/assets/icons/consistent-engagement.svg' alt="icon" class="w-7 lg:w-8 xl:w-9 h-auto" />
                        <h4 class="text-base lg:text-xl xl:text-2xl font-bold">Consistent Engagement</h4>
                    </div>
                    <p class="text-sm lg:text-base text-justify">Social media is all about being social! We'll engage with your followers, respond to comments, and foster a community around your brand, increasing loyalty and trust.</p>
                </div>
                <div class="md:h-56 xl:h-56 py-6 md:pb-0 lg:py-8 px-7 lg:px-8 space-y-3 lg:space-y-4  rounded-xl bg-white drop-shadow-card">
                    <div class="flex items-center gap-2 xl:gap-3">
                        <img src="/assets/icons/data-driven-insights.svg" alt="icon" class="w-7 lg:w-8 xl:w-9 h-auto" />
                        <h4 class="text-base lg:text-xl xl:text-2xl font-bold">Data-Driven Insights</h4>
                    </div>
                    <p class="text-sm lg:text-base text-justify">We don't guess; we measure. Our data analysts will provide you with regular reports, allowing you to see the impact of our efforts and make informed decisions.</p>
                </div>
            </div>
        </div>
        <!-- Akhir Why Choose Us -->

        <div class="relative">
            <div class="absolute inset-0 w-full h-full bg-gradient-to-t from-[#FAFAFA] via-[rgba(184,224,255,0.19)] to-[#FAFAFA] z-0"></div>
        <!-- Media Social Stategy -->
        <div class="relative px-5 md:px-32 xl:px-0 py-8 lg:py-11">
            <div class="flex flex-col md:flex-row items-center gap-6 max-w-[1180px] w-full mx-auto">
                <div class="grid grid-cols-2 grid-rows-2 gap-3 md:gap-4 flex-1">
                    <img src="/assets/img/service/social-media-strategy-1.png" alt="social media stategi image" />
                    <img src="/assets/img/service/social-media-strategy-2.png" alt="social media stategi image" />
                    <img src="/assets/img/service/social-media-strategy-3.png" alt="social media stategi image" />
                    <img src="/assets/img/service/social-media-strategy-4.png" alt="social media stategi image" />
                </div>
                <div class="flex-1 text-center md:text-right">
                    <h1 class="text-2xl lg:text-4xl xl:text-5xl font-bold lg:leading-tight xl:leading-tight text-pb-normal-active">Social Media Strategy</h1>
                    <p class="mt-4 xl:mt-5 lg:pl-8 text-base lg:text-lg xl:text-2xl">We'll work closely with you to develop a comprehensive social media strategy aligned with your business objectives.</p>
                    <button class="btn-blue py-2 md:w-auto lg:px-12 lg:py-3 xl:px-14 xl:py-3 mt-8 lg:mt-11 xl:mt-11 font-bold xl:text-xl bg-[#005AA0] rounded-xl">Learn more</button>
                </div>
            </div>
        </div>
        <!-- Akhir Media Social Stategy -->

        <!-- Content Creation -->
        <div class="relative px-5 lg:px-32 xl:px-0 py-8 lg:py-11">
            <div class="flex flex-col lg:flex-row gap-6 items-center max-w-[1180px] w-full mx-auto overflow-hidden">
                <div class="relative md:hidden w-full h-[calc(100vh-60vh)] bg-yellow-400 overflow-hidden rounded-xl">
                    <img src="/assets/img/service/content-creation-phone1.svg"
                        class="absolute top-[10%] left-0 right-0 xl:left-[20%] w-[80%] mx-auto drop-shadow-[-11px_6px_12px_rgba(0,0,0,0.27)] z-20"
                        alt="conten creation image" />
                    <img src="/assets/img/service/content-creation-phone2.svg"
                        class="absolute bottom-[10%] -right-[10%] w-[222px] drop-shadow-[-11px_6px_12px_rgba(0,0,0,0.27)] z-10"
                        alt="conten creation image" />
                </div>
                <div class="flex-[38%] text-center lg:text-left">
                    <h1 class="text-2xl lg:text-4xl xl:text-5xl font-bold lg:leading-tight xl:leading-tight text-pb-normal-active">
                        Content Creation</h1>
                    <p class="mt-4 xl:mt-5 text-base lg:text-lg xl:text-2xl">Our talented content creators will design eye-catching
                        visuals and craft engaging copy that resonates with your audience.</p>
                    <button
                        class="btn-blue py-2 md:w-auto lg:px-12 lg:py-3 xl:px-14 xl:py-3 mt-8 lg:mt-11 xl:mt-11 font-bold xl:text-xl bg-[#005AA0] rounded-xl">Learn
                        more</button>
                </div>
                <div class="relative hidden lg:block lg:flex-[62%]">
                    <img src="/assets/img/service/content-creation-bg.svg" class="object-cover lg:relative" alt="conten creation image" />
                    <img src="/assets/img/service/content-creation-phone1.svg"
                        class="absolute top-6 lg:left-[23%] xl:left-[20%] w-[182px] xl:w-auto drop-shadow-[-11px_6px_12px_rgba(0,0,0,0.27)] z-10"
                        alt="conten creation image" />
                    <img src="/assets/img/service/content-creation-phone2.svg"
                        class="absolute bottom-6 lg:right-[14%] xl:right-[20%] w-[182px] xl:w-auto drop-shadow-[-11px_6px_12px_rgba(0,0,0,0.27)] z-10"
                        alt="conten creation image" />
                </div>
            </div>
        </div>
        <!-- Akhir Content Creation -->

        <!-- Community Management -->
        <div class="relative px-5 lg:px-32 xl:px-0 py-8 lg:py-11">
            <div class="flex items-center max-w-[1180px] w-full mx-auto">
                <div class="flex flex-col lg:flex-row items-center gap-6 lg:gap-8 w-full bg-[#B9E0FF] px-6 md:px-8 py-8 rounded-xl">
                    <div class="grid grid-cols-2 gap-3 lg:gap-4 lg:flex-[40%] xl:flex-[42%]">
                        <div class="w-full h-full rounded-tl-lg lg:rounded-tl-xl lg:drop-shadow-[7px_4px_10px_rgba(0,0,0,0.25)] overflow-hidden">
                            <img src="/assets/img/service/community-management1.png" class="w-full h-full object-cover" alt="gambar community management" />
                        </div>
                        <div class="w-full h-full rounded-tr-lg lg:rounded-tr-xl lg:drop-shadow-[7px_4px_10px_rgba(0,0,0,0.25)] overflow-hidden">
                            <img src="/assets/img/service/community-management2.png" class="w-full h-full object-cover" alt="gambar community management" />
                        </div>
                        <div class="w-full h-full rounded-b-lg lg:rounded-b-xl lg:drop-shadow-[7px_4px_10px_rgba(0,0,0,0.25)] overflow-hidden rows-start-2 col-span-2">
                            <img src="/assets/img/service/community-management3.png" class="w-full h-full object-cover" alt="gambar community management" />
                        </div>
                    </div>
                    <div class="lg:flex-[60%] xl:flex-[58%] text-center md:text-right lg:pr-4">
                        <h1
                            class="text-2xl lg:text-4xl xl:text-5xl font-bold lg:leading-tight xl:leading-tight text-pb-normal-active">
                            Community Management
                        </h1>
                        <p class="mt-4 xl:mt-5 text-base lg:text-lg xl:text-2xl lg:pl-8">Our talented content creators will design
                            eye-catching visuals and craft engaging copy that resonates with your audience.</p>
                        <button
                            class="btn-blue md:w-auto py-2 lg:px-12 lg:py-3 xl:px-14 xl:py-3 mt-6 lg:mt-8 xl:mt-10 font-bold xl:text-xl bg-[#005AA0] rounded-xl">Learn
                            more</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Akhir Community Management -->

        <!-- Paid Advertising -->
        <div class="relative px-5 lg:px-32 xl:px-0 py-10 lg:py-11">
            <div class="relative max-w-[1180px] w-full mx-auto">
                <div class="relative flex flex-col-reverse gap-4 lg:gap-0 lg:flex-row lg:justify-center lg:items-center">
                    <div class="lg:absolute lg:w-[65%] lg:h-[84%] lg:top-[50%] lg:bottom-[50%] lg:left-0 lg:right-0 lg:px-10 lg:py-8 text-center lg:bg-white lg:text-left z-10 lg:-translate-y-[50%] rounded-xl lg:rounded-none">
                        <h1 class="text-2xl lg:text-4xl xl:text-5xl font-bold lg:leading-tight xl:leading-tight text-pb-normal-active">
                            Paid Advertising</h1>
                        <p class="mt-2 lg:mt-4 xl:mt-5 text-base lg:text-lg xl:text-2xl">Boost your reach and drive conversions with our targeted
                            social media advertising campaigns.</p>
                        <button
                            class="btn-blue md:w-auto py-2 lg:px-12 lg:py-3 xl:px-14 xl:py-3 mt-8 lg:mt-7 xl:mt-9 font-bold xl:text-xl bg-[#005AA0] rounded-xl">Learn
                            more</button>
                    </div>
                    <div class="relative lg:flex-1 w-full">
                    </div>
                    <div class="relative lg:block lg:flex-1 rounded-xl overflow-hidden">
                        <img src="/assets/img/service/paid-advertising.png" alt="gambar paid advertising" />
                    </div>
                </div>
            </div>
        </div>
        <!-- Akhir Paid Advertising -->

        <!-- Analytic Reporting -->
        <div class="relative px-5 lg:px-32 xl:px-0 py-10 lg:py-4">
            <div class="flex flex-col lg:flex-row items-center gap-6 lg:gap-10 max-w-[1180px] w-full mx-auto lg:py-10">
                <div class="relative w-full h-auto lg:flex-[40%] overflow-hidden">
                    <div class="absolute inset-0 w-full h-full mx-auto my-auto rounded-full gradient-analytic-reporting"></div>
                    <img src="/assets/img/service/analytic-and-reporting.png" class="relative w-[70%] h-auto mx-auto lg:w-full md:mt-0 z-10" alt="gambar analytic and reporting" />
                </div>
                <div class="lg:flex-[60%] text-center md:text-right">
                    <h1 class="text-2xl lg:text-4xl xl:text-5xl font-bold lg:leading-tight xl:leading-tight text-pb-normal-active">
                        Analytics & Reporting</h1>
                    <p class="mt-2 lg:mt-4 xl:mt-5 text-base lg:text-lg xl:text-2xl">Access valuable insights into your social media performance,
                        allowing you to make data-driven decisions.</p>
                    <button
                        class="btn-blue lg:w-auto py-2 lg:px-12 lg:py-3 xl:px-14 xl:py-3 mt-8 lg:mt-7 xl:mt-9 font-bold xl:text-lg bg-[#005AA0] rounded-xl">Learn
                        more</button>
                </div>
            </div>
        </div>
        <!-- Analytic Reporting -->
        </div>

        <!-- Our Success Project -->
        <div class="relative w-full px-5 lg:px-32 xl:px-0 bg-[#B8E0FF] overflow-hidden">
            <div
                class="absolute -bottom-[12px] -right-[220px] w-[284px] h-[284px] border-white border-[8px] rounded-full z-0 ">
            </div>
            <div class="absolute -top-[12px] -left-[220px] w-[284px] h-[284px] border-white border-[8px] rounded-full z-0 ">
            </div>
            <div class="relative max-w-[1180px] w-full mx-auto  pt-10 lg:py-0 lg:pt-16 lg:pb-10 z-10">
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <h1
                        class="text-2xl lg:text-4xl xl:text-5xl font-bold lg:leading-tight xl:leading-tight text-pb-normal-active">
                        Our Success Project</h1>
                    <button class="btn-blue hidden lg:block px-6 lg:px-12 lg:py-3 xl:px-14 xl:py-3 font-bold xl:text-xl bg-[#005AA0] bg-[#005AA0] rounded-xl">View our portfolio</button>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 gap-3 lg:gap-5 py-8">
                    <div class="space-y-3 lg:space-y-4 p-3 lg:p-4 text-right bg-white rounded-t-xl lg:rounded-tl-xl">
                        <div class="rounded-lg overflow-hidden">
                            <img src="/assets/img/service/our-success-project1.png" alt="gambar our success project" />
                        </div>
                        <div class="flex items-center gap-1 justify-end pb-2 font-bold">
                            <h4 class="text-base lg:text-lg">Ice Cream Cake</h4>
                            <span class="rotate-45">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-8 lg:w-9 lg:h-9 fill-p-normal">
                                    <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm.53 5.47a.75.75 0 00-1.06 0l-3 3a.75.75 0 101.06 1.06l1.72-1.72v5.69a.75.75 0 001.5 0v-5.69l1.72 1.72a.75.75 0 101.06-1.06l-3-3z" clip-rule="evenodd" />
                                </svg>
                            </span>
                        </div>
                    </div>
                    <div class="space-y-3 lg:space-y-4 p-3 lg:p-4 text-right bg-white rounded-none">
                        <div class="rounded-lg overflow-hidden">
                            <img src="/assets/img/service/our-success-project2.png" alt="gambar our success project" />
                        </div>
                        <div class="flex items-center gap-1 justify-end pb-2 font-bold">
                            <h4 class="text-base lg:text-lg">Ice Cream Cake</h4>
                            <span class="rotate-45">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-8 lg:w-9 lg:h-9 fill-p-normal">
                                    <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm.53 5.47a.75.75 0 00-1.06 0l-3 3a.75.75 0 101.06 1.06l1.72-1.72v5.69a.75.75 0 001.5 0v-5.69l1.72 1.72a.75.75 0 101.06-1.06l-3-3z" clip-rule="evenodd" />
                                </svg>
                            </span>
                        </div>
                    </div>
                    <div class="space-y-3 lg:space-y-4 p-3 lg:p-4 text-right bg-white rounded-none lg:rounded-tr-xl">
                        <div class="rounded-lg overflow-hidden">
                            <img src="/assets/img/service/our-success-project3.png" alt="gambar our success project" />
                        </div>
                        <div class="flex items-center gap-1 justify-end pb-2 font-bold">
                            <h4 class="text-base lg:text-lg">Ice Cream Cake</h4>
                            <span class="rotate-45">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-8 lg:w-9 lg:h-9 fill-p-normal">
                                    <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm.53 5.47a.75.75 0 00-1.06 0l-3 3a.75.75 0 101.06 1.06l1.72-1.72v5.69a.75.75 0 001.5 0v-5.69l1.72 1.72a.75.75 0 101.06-1.06l-3-3z" clip-rule="evenodd" />
                                </svg>
                            </span>
                        </div>
                    </div>
                    <div class="space-y-3 lg:space-y-4 p-3 lg:p-4 text-right bg-white rounded-none lg:rounded-bl-xl">
                        <div class="rounded-lg overflow-hidden">
                            <img src="/assets/img/service/our-success-project4.png" alt="gambar our success project" />
                        </div>
                        <div class="flex items-center gap-1 justify-end pb-2 font-bold">
                            <h4 class="text-base lg:text-lg">Ice Cream Cake</h4>
                            <span class="rotate-45">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-8 lg:w-9 lg:h-9 fill-p-normal">
                                    <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm.53 5.47a.75.75 0 00-1.06 0l-3 3a.75.75 0 101.06 1.06l1.72-1.72v5.69a.75.75 0 001.5 0v-5.69l1.72 1.72a.75.75 0 101.06-1.06l-3-3z" clip-rule="evenodd" />
                                </svg>
                            </span>
                        </div>
                    </div>
                    <div class="space-y-3 lg:space-y-4 p-3 lg:p-4 text-right bg-white rounded-none lg:rounded-none">
                        <div class="rounded-lg overflow-hidden">
                            <img src="/assets/img/service/our-success-project5.png" alt="gambar our success project" />
                        </div>
                        <div class="flex items-center gap-1 justify-end pb-2 font-bold">
                            <h4 class="text-base lg:text-lg">Ice Cream Cake</h4>
                            <span class="rotate-45">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-8 lg:w-9 lg:h-9 fill-p-normal">
                                    <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm.53 5.47a.75.75 0 00-1.06 0l-3 3a.75.75 0 101.06 1.06l1.72-1.72v5.69a.75.75 0 001.5 0v-5.69l1.72 1.72a.75.75 0 101.06-1.06l-3-3z" clip-rule="evenodd" />
                                </svg>
                            </span>
                        </div>
                    </div>
                    <div class="space-y-3 lg:space-y-4 p-3 lg:p-4 text-right bg-white rounded-b-xl lg:rounded-none lg:rounded-br-xl">
                        <div class="rounded-lg overflow-hidden">
                            <img src="/assets/img/service/our-success-project6.png" alt="gambar our success project" />
                        </div>
                        <div class="flex items-center gap-1 justify-end pb-2 font-bold">
                            <h4 class="text-base lg:text-lg">Ice Cream Cake</h4>
                            <span class="rotate-45">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-8 h-8 lg:w-9 lg:h-9 fill-p-normal">
                                    <path fill-rule="evenodd" d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm.53 5.47a.75.75 0 00-1.06 0l-3 3a.75.75 0 101.06 1.06l1.72-1.72v5.69a.75.75 0 001.5 0v-5.69l1.72 1.72a.75.75 0 101.06-1.06l-3-3z" clip-rule="evenodd" />
                                </svg>
                            </span>
                        </div>
                    </div>
                    <button class="btn-blue lg:hidden mt-4 py-2 px-6 lg:px-12 lg:py-3 xl:px-14 xl:py-3 font-bold xl:text-xl bg-[#005AA0] bg-[#005AA0] rounded-xl">View our portfolio</button>
                </div>
            </div>
        </div>
        <!-- Akhir Our Success Project -->

        <!-- Client Say -->
        <div class="w-full px-5 lg:px-32 xl:px-0 py-8 lg:py-11">
            <div
                class="relative lg:flex gap-6 max-w-[1180px] w-full mx-auto p-8 bg-[#E6F1FA] rounded-2xl overflow-hidden lg:overflow-visible">
                <img src="/assets/img/service/client-say-texture.svg"
                    class="absolute lg:top-0 lg:bottom-0 right-0 lg:right-0 h-[200px] max-w-none lg:max-w-full lg:h-full z-0"
                    alt="texture" />
                <div class="absolute hidden lg:block -top-[10%] right-[4%] space-y-4">
                    <img src="/assets/img/service/client-say1.svg" class=" h-[106px] xl:h-auto drop-shadow-[-4px_4px_8px_rgba(0,0,0,0.25)]"
                        alt="gambar client say" />
                    <img src="/assets/img/service/client-say2.svg"
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

    @include('partials.design-price')

@endsection
    