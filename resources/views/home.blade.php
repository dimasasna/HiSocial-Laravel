@extends('layouts.main')

@section('container')
<div class="max-w-[1920px] sm:max-w-full md:max-w-full lg:max-w-full xl:max-w-[1920px] mx-auto">

    <!-- Banner -->
    <section class="lg:mt-0 relative flex flex-col items-center font-plus-jakarta-sans sm:w-full px-6">
        <div class="relative z-20 flex flex-row mt-[40px] gap-5 max-w-[1215px] mx-auto lg:mb-10 ">
            <div class="w-full h-full">
                <h1 class="text-[30px] leading-tight font-medium text-[#001D33] lg:text-[55px] ">Keep Growing With
                    Forward Thinking With Us.</h1>
                <p class="leading-relaxed mt-4 text-[16px] lg:text-[18px]">We Are HiSocial Digital, a digital
                    marketing
                    and Creative design company based in Yogyakarta, Indonesia. Let's create the best product
                    experience
                    with our experienced members.<br><br>Helping you manage your marketing budget more effectively.
                    We
                    can tailor a marketing plan to suit your budget and ensure efficient use of funds.</p>
                <button
                    class="text-white mt-5 lg:mt-10 bg-[#008FFF] hover:bg-blue-600 shadow-3xl rounded-[30px] shadow-blue-400 w-full h-[50px] lg:h-14 lg:w-[263px] flex justify-center items-center font-medium text-[20px]">Get
                    Started <img class="ml-4" src="assets/icons/arrow-bg.svg" alt=""></button>

            </div>
            <div class="max-h-full w-full ml-10 hidden lg:block">
                <img class="object-cover" src="assets/img/banner-home.png" alt="" />
                <div
                    class="bg-[#008FFF] w-full mt-2 rounded-[10px] text-white px-5 py-3 flex flex-row flex-wrap justify-between text-center tracking-tight">
                    <div>
                        <h1 class="text-[50px] font-semibold">15+</h1>
                        <p>Succesfull Project</p>
                    </div>
                    <div>
                        <h1 class="text-[50px] font-semibold">05+</h1>
                        <p>Super Happy Client</p>
                    </div>
                    <div>
                        <h1 class="text-[50px] font-semibold">02+</h1>
                        <p>Year of Experience</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Banner -->

    <!-- Experience Stories -->
    <section class="flex flex-row gap-24 mt-12 max-w-[1215px] mx-auto">
        <div class="px-4 lg:px-0">
            <h1 class="mb-3  text-3xl   lg:mb-12 lg:text-5xl">We Create Impactful Experience
                Stories</h1>
            <div class="flex flex-col lg:flex-row gap-8 mx-1 my-8">
                <img class="lg:w-24 w-16 h-auto" src="assets/icons/shape1.svg" alt="">
                <div>
                    <h1 class="lg:text-[24px] text-[18px] ">Strategi Marketing</h1>
                    <p class="mt-2 leading-relaxed -tracking-tight text-[14px] lg:text-[16px]">Custom digital
                        marketing and creative strategies
                        informed by strong judgment & your business deserves to get better than prepackaged
                        strategies </p>
                </div>
            </div>
            <div class="flex flex-col lg:flex-row gap-8 mx-1 my-8">
                <img class="lg:w-24 w-16 h-auto" src="assets/icons/shape2.svg" alt="">
                <div>
                    <h1 class="text-[18px] lg:text-[24px]">Branding Identity</h1>
                    <p class="mt-2 leading-relaxed -tracking-tight text-[14px] lg:text-[16px]">See the progress
                        we're making & what's driving
                        results, at any time, we keep you informed transparently on a consistent basis and keep you
                        updated.</p>
                </div>
            </div>
            <div class="flex flex-col lg:flex-row gap-8 mx-1 my-8">
                <img class="lg:w-24 w-16 h-auto" src="assets/icons/shape3.svg" alt="">
                <div>
                    <h1 class="text-[18px] lg:text-[24px]">Breaktrough</h1>
                    <p class="mt-2 leading-relaxed -tracking-tight text-[14px] lg:text-[16px]">Services that match
                        your greatest ROI, moving in
                        the same direction towards growth goals better than ever. And deliver modern, tangible
                        breakthroughs.</p>
                </div>
            </div>
        </div>
        <img class="hidden md:block " src="assets/img/ourwork.png" />
    </section>
    <!-- End Experience Stories -->

    <!-- Several Service -->
    <section class="max-w-[1215px] mx-auto lg:my-20 mt-4 px-4 lg:px-0">
        <div class="flex flex-row lg:justify-end justify-center  gap-10">
            <h1 class="text-[30px] lg:text-[50px] lg:w-[50%] leading-none font-medium">We Offer Several Service For
                You</h1>
            <p class="w-[50%] lg:flex items-center text-[18px] hidden">We have outstanding experience across a wide
                range of
                sectors with work spanning geography, scale and scope. No challenge is too big or messy, familiar or
                unfamiliar, vast or special.</p>
        </div>
        <div class="flex flex-row justify-between lg:mt-14 mt-8 gap-10">
            <img class="w-50% hidden lg:block" src="assets/img/several-service.png" alt="">
            <div class="lg:w-[50%] w-full">
                <div
                    class="w-full h-auto flex flex-row justify-start items-center gap-6 bg-white shadow-[0_3px_10px_rgb(0,0,0,0.2)] p-4 mb-4 rounded-[15px]">
                    <div
                        class="bg-[#008FFF] rounded-full h-[40px] w-[40px] lg:h-[68px] lg:w-[68px] flex items-center justify-center text-white">
                        <h1 class="text-center lg:text-[24px]">01.</h1>
                    </div>
                    <h1 class="lg:text-[30px] text-[18px] font-semibold text-[#012A42]">Social Media Management</h1>
                </div>
                <div
                    class="w-full h-auto flex flex-row justify-start items-center gap-6 bg-white shadow-[0_3px_10px_rgb(0,0,0,0.2)] p-4 mb-4 rounded-[15px]">
                    <div
                        class="bg-[#008FFF] rounded-full w-[40px] h-[40px] lg:h-[68px] lg:w-[68px] flex items-center justify-center text-white">
                        <h1 class="text-center lg:text-[24px]">02.</h1>
                    </div>
                    <h1 class="lg:text-[30px] text-[18px] font-semibold text-[#012A42]">Branding Indentity Visual
                    </h1>
                </div>
                <div
                    class="w-full h-auto flex flex-row justify-start items-center gap-6 bg-white shadow-[0_3px_10px_rgb(0,0,0,0.2)] p-4 mb-4 rounded-[15px]">
                    <div
                        class="bg-[#008FFF] rounded-full w-[40px] h-[40px] lg:h-[68px] lg:w-[68px] flex items-center justify-center text-white">
                        <h1 class="text-center lg:text-[24px]">03.</h1>
                    </div>
                    <h1 class="text-[18px] lg:text-[30px] font-semibold text-[#012A42]">Logo & Branding Identity
                    </h1>
                </div>
                <div
                    class="w-full h-auto flex flex-row justify-start items-center gap-6 bg-white shadow-[0_3px_10px_rgb(0,0,0,0.2)] p-4 mb-4 rounded-[15px]">
                    <div
                        class="bg-[#008FFF] rounded-full w-[40px] h-[40px] lg:h-[68px] lg:w-[68px] flex items-center justify-center text-white">
                        <h1 class="text-center lg:text-[24px]">04.</h1>
                    </div>
                    <h1 class="text-[18px] lg:text-[30px] font-semibold text-[#012A42]">Website & System</h1>
                </div>
                <div
                    class="w-full h-auto flex flex-row justify-start items-center gap-6 bg-white shadow-[0_3px_10px_rgb(0,0,0,0.2)] p-4  rounded-[15px]">
                    <div
                        class="bg-[#008FFF] rounded-full w-[40px] h-[40px] lg:h-[68px] lg:w-[68px] flex items-center justify-center text-white">
                        <h1 class="text-center lg:text-[24px]">05.</h1>
                    </div>
                    <h1 class="text-[18px] lg:text-[30px] font-semibold text-[#012A42]">Digital Marketing Strategy
                    </h1>
                </div>
            </div>
        </div>
    </section>
    <!-- End Several Service -->

    <!-- Other Service -->
    <section class="max-w-[1215px] h-full mx-auto lg:mt-32 mt-16 px-4 lg:px-0">
        <div class="flex justify-center flex-col items-center">
            <h1 class="text-[32px] lg:text-[50px] leading-none font-medium">Other Services That We've
                Made</h1>
            <p class="lg:mt-8 mt-4 text-[14px] lg:text-[20px] lg:text-center lg:w-[75%]">We have extensive
                experience across a
                wide range of
                sectors with other work, including cashier systems and digital marketing learning.</p>
        </div>
        <div class="flex flex-col lg:flex-row flex-wrap mt-6 justify-center">
            <div class="lg:w-[50%] relative ">
                <img class="w-full opacity-80" src="assets/img/other-service-1.png" alt="">
                <div
                    class="relative flex bg-white  p-4 justify-between lg:w-[409px]  lg:mx-auto h-[51px] items-center lg:rounded-full lg:bottom-24 bottom-7 shadow-[0_3px_10px_rgb(0,0,0,0.2)] rounded-[10px]">
                    <h1 class="text-[14px] lg:text-[18px] font-semibold">Sistem Toko (SISKO)</h1>
                    <button
                        class="bg-[#008FFF] hover:bg-blue-600 px-4 py-1 rounded-full text-white text-[14px] lg:text-[16px]">Learn
                        More</button>
                </div>
            </div>
            <div class="lg:w-[50%] relative ">
                <img class="w-full opacity-80 " src="assets/img/other-service-2.png" alt="">
                <div
                    class="relative flex bg-white  p-4 justify-between lg:w-[409px]  lg:mx-auto h-[51px] items-center lg:rounded-full lg:bottom-24 bottom-7 shadow-[0_3px_10px_rgb(0,0,0,0.2)] rounded-[10px]">
                    <h1 class="text-[14px] lg:text-[18px] font-semibold">Online Course (Eduwork)</h1>
                    <button
                        class="bg-[#008FFF] hover:bg-blue-600 px-4 py-1 rounded-full text-white text-[14px] lg:text-[16px]">Learn
                        More</button>
                </div>
            </div>
        </div>
    </section>
    <!-- End Other Service -->

    <!-- Project -->
    <section class="max-w-[1215px] h-full mx-auto lg:mb-20 mb-4 mt-8 lg:mt-12 px-4 lg:px-0">
        <div class="flex flex-col lg:flex-row justify-between px-2 items-center">
            <h1 class="text-[30px] lg:text-[50px] text-[#012840] leading-none font-medium">Our Project Have Done
            </h1>
            <button
                class="bg-[#008FFF] hover:bg-blue-600 text-white px-12 rounded-full text-[18px] h-[52px] hidden lg:block">Explore
                More +</button>
        </div>
        <div class="flex flex-col lg:flex-row lg:mt-8 mt-6 gap-0">
            <div class="lg:w-[55%]"><img class="w-full object-cover" src="assets/img/home-project1.png" alt="">
            </div>
            <div class="lg:w-[45%] bg-[#012840] p-6 lg:p-10 text-white">
                <h1 class="text-[24px] lg:text-[34px]">Puma Indonesia</h1>
                <p class="text-[12px] lg:text-[18px] leading-loose tracking-wide mt-4">Maximize Your Sport
                    Performance & Stay
                    Stylish w/ PUMA's Latest Collection. Free Shipping. Shop High Quality Shoes, Sports Gear &
                    Accessories @PUMA Indonesia Official Online Store. </p>
            </div>
        </div>
        <div class="flex flex-col lg:flex-row mt-6 gap-0">
            <div class="lg:w-[55%] lg:hidden"><img class="w-full" src="assets/img/home-project2.png" alt=""></div>
            <div class="lg:w-[45%] bg-[#012840] p-6 lg:p-10 text-white">
                <h1 class="text-[24px] lg:text-[34px]">Fruit & Saladies</h1>
                <p class="text-[12px] lg:text-[18px] leading-loose tracking-wide mt-4">In common language usage,
                    fruit normally
                    means the seed-associated fleshy structures (or produce) of plants that typically are sweet or
                    sour and edible in the raw state, such as apples, bananas, grapes, lemons, oranges, and
                    strawberries</p>
            </div>
            <div class="lg:w-[55%] hidden lg:block"><img class="w-full" src="assets/img/home-project2.png" alt="">
            </div>
        </div>
        <div class="flex flex-col lg:flex-row mt-6 gap-0">
            <div class="lg:w-[55%]"><img class="w-full" src="assets/img/home-project3.png" alt=""></div>
            <div class="lg:w-[45%] bg-[#012840] p-6 lg:p-10 text-white">
                <h1 class="text-[24px] lg:text-[34px]">Beauty & Health</h1>
                <p class="text-[12px] lg:text-[18px] leading-loose tracking-wide mt-4">Natural Moisturizing Factors
                    + Beta Glucan
                    is a lightweight gel moisturizer designed to provide all-day hydration after just one
                    application.* It is formulated with natural moisturizing factors,</p>
            </div>
        </div>
        <button
            class="bg-[#008FFF] hover:bg-blue-600 text-white px-12 rounded-[10px] w-full mt-4 text-[18px] h-[52px] lg:hidden">Explore
            More +</button>
    </section>
    <!-- End Project -->

    <!-- Testimonial slider -->
    <section class="max-w-[1215px] h-full mx-auto mb-10 lg:mb-20 px-4 lg:px-0">
        <div class="flex justify-center items-center pt-12">
            <h1 class="text-[24px] lg:text-[36px] text-center  leading-none font-medium">What's the review from them
                about the <span class="text-[#008FFF]">HiSocial Digital</span>?</h1>
        </div>
        <div class="flex flex-row justify-between lg:mt-12 mt-4 swiper">
            <div class="swiper-wrapper py-4 w-full h-full">
                <div
                    class="w-full h-full rounded-[20px] shadow-[0_3px_10px_rgb(0,0,0,0.2)] flex flex-col lg:flex-row justify-start items-center lg:items-start swiper-slide">
                    <img class="p-6 lg:p-0 w-52 lg:w-full" src="assets/img/testi-profil1.png" alt="">
                    <div class="p-6">
                        <img src="assets/icons/kutip.svg" alt="">
                        <p class="text-[14px] lg:text-[16px] font-thin mt-4">Increase sales, can reach a wider
                            market area. from studying
                            advertising until the content is told so you understand better how to take care of the
                            brand 🫶🏻</p>
                    </div>
                </div>
                <div
                    class="w-full h-full rounded-[20px] shadow-[0_3px_10px_rgb(0,0,0,0.2)] flex flex-col lg:flex-row justify-start items-center lg:items-start swiper-slide">
                    <img class="p-6 lg:p-0 w-52 lg:w-full" src="assets/img/testi-profil2.png" alt="">
                    <div class="p-6">
                        <img src="assets/icons/kutip.svg" alt="">
                        <p class="text-[14px] lg:text-[16px] font-thin mt-4">Increase sales, can reach a wider
                            market area. from studying
                            advertising until the content is told so you understand better how to take care of the
                            brand.</p>
                    </div>
                </div>
                <div
                    class="w-full h-full rounded-[20px] shadow-[0_3px_10px_rgb(0,0,0,0.2)] flex flex-col lg:flex-row justify-start items-center lg:items-start swiper-slide">
                    <img class="p-6 lg:p-0 w-52 lg:w-full" src="assets/img/testi-profil1.png" alt="">
                    <div class="p-6">
                        <img src="assets/icons/kutip.svg" alt="">
                        <p class="text-[14px] lg:text-[16px] font-thin mt-4">Increase sales, can reach a wider
                            market area. from studying
                            advertising until the content is told so you understand better how to take care of the
                            brand 🫶🏻</p>
                    </div>
                </div>
                <div
                    class="w-full h-full rounded-[20px] shadow-[0_3px_10px_rgb(0,0,0,0.2)] flex flex-col lg:flex-row justify-start items-center lg:items-start swiper-slide">
                    <img class="p-6 lg:p-0 w-52" src="assets/img/testi-profil2.png" alt="">
                    <div class="p-6">
                        <img src="assets/icons/kutip.svg" alt="">
                        <p class="text-[14px] lg:text-[16px] font-thin mt-4">Increase sales, can reach a wider
                            market area. from studying
                            advertising until the content is told so you understand better how to take care of the
                            brand.</p>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next rounded-full "></div>
            <div class="swiper-button-prev rounded-full "></div>
        </div>
    </section>
    <!-- End Testimonial slider -->

    <!-- Price Plan -->
    <section class="max-w-[1215px] h-full mx-auto mb-10 lg:mb-20 px-4 lg:px-0">
        <div class="flex flex-col justify-center items-center ">
            <h1 class="text-[38px] lg:text-[50px] text-[#008FFF] leading-none font-medium text-center">Pricing &
                Plan for Everyone</h1>
            <p class="lg:mt-8 mt-4 text-[14px] lg:text-[20px] text-center w-[75%] hidden lg:block">You can choose a
                package that
                suits your social media management needs, or you can contact them for other related services.</p>
        </div>
        <div class="flex flex-row flex-wrap lg:flex-nowrap justify-between items-center mt-8 lg:mt-12 gap-4">
            <div class="flex justify-between max-w-full mx-auto items-center text-[#008FFF] lg:hidden">
                <button class="section-button rounded-[10px] text-center w-[110px] h-[40px]" data-target="hibronze"
                    id="button-bronze">HiBronze</button>
                <button class="section-button rounded-[10px] text-center w-[110px] h-[40px]" data-target="hisilver"
                    id="button-silver">HiSilver</button>
                <button class="section-button rounded-[10px] text-center w-[110px] h-[40px]" data-target="higold"
                    id="button-gold">HiGold</button>
            </div>
            <div id="hibronze" class="w-full h-full shadow-[0_3px_10px_rgb(0,0,0,0.2)] p-6 rounded-[20px] price ">
                <h1 class="text-[28px] my-4">HiBronze</h1>
                <p class="text-[16px] my-4">The HiBronze package includes several benefits that you will get.</p>
                <h1 class="text-[34px] lg:text-[36px] my-4">IDR. 1.500.000 <span
                        class="text-[16px] font-thin">/Month</span></h1>
                <button
                    class="w-full h-[44px] outline outline-[#008FFF] hover:bg-slate-200 rounded-[36px] text-[#008FFF] my-4">Get
                    Started Now</button>
                <div class="mt-8 flex items-center justify-start gap-4">
                    <img src="assets/icons/ceklist.svg" alt="">
                    <p>40 Desain Konten, 24 Feed & 16 Story</p>
                </div>
                <div class="mt-4 flex items-center justify-start gap-4">
                    <img src="assets/icons/ceklist.svg" alt="">
                    <p>4 Video Reels / TikTok Video</p>
                </div>
                <div class="mt-4 flex items-center justify-start gap-4">
                    <img src="assets/icons/ceklist.svg" alt="">
                    <p>Dashboard Content</p>
                </div>
                <div class="mt-4 flex items-center justify-start gap-4">
                    <img src="assets/icons/ceklist.svg" alt="">
                    <p>Copy Writing & Hastag</p>
                </div>
                <div class="mt-4 flex items-center justify-start gap-4">
                    <img src="assets/icons/ceklist.svg" alt="">
                    <p>Monthly Report & Konsultasi</p>
                </div>
                <div class="mt-4 flex items-center justify-start gap-4">
                    <img src="assets/icons/ceklist.svg" alt="">
                    <p>Boost Iklan Marketing</p>
                </div>
                <div class="mt-4 flex items-center justify-start gap-4">
                    <img src="assets/icons/ceklist.svg" alt="">
                    <p>Free Website Toko / Personal</p>
                </div>
                <div class="mt-4 flex items-center justify-start gap-4">
                    <img src="assets/icons/ceklist.svg" alt="">
                    <p>Video Leaning Digital Marketing </p>
                </div>
            </div>
            <div id="hisilver" class="w-full h-full shadow-[0_3px_10px_rgb(0,0,0,0.2)] p-6 rounded-[20px] price">
                <h1 class="text-[28px] my-4">HiSilver</h1>
                <p class="text-[16px] my-4">The HiSilver package includes several benefits that you will get.</p>
                <h1 class="text-[34px] lg:text-[36px] my-4">IDR. 2.500.000 <span
                        class="text-[16px] font-thin">/Month</span></h1>
                <button
                    class="w-full h-[44px] outline outline-[#008FFF] hover:bg-slate-200 rounded-[36px] text-[#008FFF] my-4">Get
                    Started Now</button>
                <div class="mt-8 flex items-center justify-start gap-4">
                    <img src="assets/icons/ceklist.svg" alt="">
                    <p>80 Desain Konten, 40 Feed & 40 Story</p>
                </div>
                <div class="mt-4 flex items-center justify-start gap-4">
                    <img src="assets/icons/ceklist.svg" alt="">
                    <p>8 Video Reels / TikTok Video</p>
                </div>
                <div class="mt-4 flex items-center justify-start gap-4">
                    <img src="assets/icons/ceklist.svg" alt="">
                    <p>Dashboard Content</p>
                </div>
                <div class="mt-4 flex items-center justify-start gap-4">
                    <img src="assets/icons/ceklist.svg" alt="">
                    <p>Copy Writing & Hastag</p>
                </div>
                <div class="mt-4 flex items-center justify-start gap-4">
                    <img src="assets/icons/ceklist.svg" alt="">
                    <p>Monthly Report & Konsultasi</p>
                </div>
                <div class="mt-4 flex items-center justify-start gap-4">
                    <img src="assets/icons/ceklist.svg" alt="">
                    <p>Boost Iklan Marketing</p>
                </div>
                <div class="mt-4 flex items-center justify-start gap-4">
                    <img src="assets/icons/ceklist.svg" alt="">
                    <p>Free Website Toko / Personal</p>
                </div>
                <div class="mt-4 flex items-center justify-start gap-4">
                    <img src="assets/icons/ceklist.svg" alt="">
                    <p>Video Leaning Digital Marketing </p>
                </div>
            </div>
            <div id="higold" class="w-full h-full shadow-[0_3px_10px_rgb(0,0,0,0.2)] p-6 rounded-[20px] price">
                <h1 class="text-[28px] my-4">HiGold</h1>
                <p class="text-[16px] my-4">The HiGold package includes several benefits that you will get.</p>
                <h1 class="text-[34px] lg:text-[36px] my-4">IDR. 4.000.000 <span
                        class="text-[16px] font-thin">/Month</span></h1>
                <button
                    class="w-full h-[44px] outline outline-[#008FFF] hover:bg-slate-200 rounded-[36px] text-[#008FFF] my-4">Get
                    Started Now</button>
                <div class="mt-8 flex items-center justify-start gap-4">
                    <img src="assets/icons/ceklist.svg" alt="">
                    <p>120 Desain Konten, 60 Feed & 60 Story</p>
                </div>
                <div class="mt-4 flex items-center justify-start gap-4">
                    <img src="assets/icons/ceklist.svg" alt="">
                    <p>12 Video Reels / TikTok Video</p>
                </div>
                <div class="mt-4 flex items-center justify-start gap-4">
                    <img src="assets/icons/ceklist.svg" alt="">
                    <p>Dashboard Content</p>
                </div>
                <div class="mt-4 flex items-center justify-start gap-4">
                    <img src="assets/icons/ceklist.svg" alt="">
                    <p>Copy Writing & Hastag</p>
                </div>
                <div class="mt-4 flex items-center justify-start gap-4">
                    <img src="assets/icons/ceklist.svg" alt="">
                    <p>Monthly Report & Konsultasi</p>
                </div>
                <div class="mt-4 flex items-center justify-start gap-4">
                    <img src="assets/icons/ceklist.svg" alt="">
                    <p>Boost Iklan Marketing</p>
                </div>
                <div class="mt-4 flex items-center justify-start gap-4">
                    <img src="assets/icons/ceklist.svg" alt="">
                    <p>Free Website Toko / Personal</p>
                </div>
                <div class="mt-4 flex items-center justify-start gap-4">
                    <img src="assets/icons/ceklist.svg" alt="">
                    <p>Video Leaning Digital Marketing </p>
                </div>
            </div>
        </div>
    </section>
    <!-- End Price Plan -->

    <!-- Our Partner -->
    <section class="max-w-[1215px] h-full mx-auto mb-14 lg:mb-20 px-4 lg:px-0">
        <div class="flex flex-col lg:flex-row justify-between items-center">
            <div>
                <h1 class="text-[40px] lg:text-[50px] text-center lg:text-start text-[#0088FF]">Our Partner</h1>
                <p class="text-[18px] lg:text-[24px] text-center lg:text-start lg:w-[60%]">We Have Collaborated With
                    Companies And Educational Agencies.</p>
            </div>
            <div class="grid grid-cols-2 gap-6 mt-6">
                <img class="opacity-60" src="assets/img/eduwork.png" alt="">
                <img class="opacity-60" src="assets/img/elvron.png" alt="">
                <img class="opacity-60" src="assets/img/upscale.png" alt="">
                <img class="opacity-60" src="assets/img/sisko.png" alt="">
            </div>
        </div>
    </section>
    <!-- End Our Partner -->
@endsection
