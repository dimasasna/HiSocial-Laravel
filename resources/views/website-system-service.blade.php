@extends('layouts.main')

@section('container')

    <!-- Banner -->
    <section
        class="relative w-[100vw-1px] h-[calc(100vh-74px)] lg:h-[calc(100vh-80px)] xl:h-[calc(100vh-80px)] mx-auto flex justify-center items-center">
        <img class="w-full h-full inset-0 absolute object-cover scale-y-110 lg:scale-y-100"
            src="/assets/img/banner-website.png" alt="Banner Service Detail" />
        <div class="absolute z-20 flex flex-row justify-center items-center  gap-5 max-w-[1215px] mx-auto mb-10 px-4">
            <div class="max-w-[1050px] h-full relative z-20 text-center md:py-20 py-11">
                <h1 class="text-[38px] max-w-[935px] font-bold text-[#004073] leading-tight lg:text-[60px]">Unlock Your
                    Digital
                    Potential With Our Expert <span class="text-[#008FFF]"> Website And System Service</span></h1>
                <p class="leading-loose mt-4 text-[16px] lg:text-[20px]">Elevate Your Online Presence, Streamline
                    Operations, and Drive Results</p>
                <button
                    class="text-white lg:mt-20 mt-10 bg-blue-500 hover:bg-blue-600 shadow-3xl rounded-[20px] shadow-blue-400 w-full h-[50px] lg:h-14 lg:w-72 ">Get
                    Started</button>
            </div>
        </div>
    </section>
    <!-- End Banner -->

    <div class="max-w-[1920px] sm:max-w-full md:max-w-full lg:max-w-full xl:max-w-[1920px] mx-auto">
        <!-- Collaborate Company -->
        @include('partials.corporate-colaboration')
        <!-- End Collaborate Company -->


        <!-- Offer -->
        <section class="lg:mt-20 mt-8 md:mb-32 font-plus-jakarta-sans relative">
            <div class="max-w-[500px] mx-auto text-center text-[#002B44] md:text-[50px] text-[30px] font-bold">
                <h1>What We Offers?</h1>
            </div>
            <div
                class="max-w-[1215px] mx-auto h-full flex flex-row lg:mt-10 flex-wrap lg:justify-between justify-center gap-8 lg:gap-0 p-6 lg:p-0 relative z-10">
                <div class="w-[390px] h-[409px] bg-white rounded-[20px] shadow-2xl relative z-10">
                    <div class="min-h-[117px] w-full bg-[#008FFF] rounded-t-[20px] text-white p-6">
                        <h1><img src="/assets/icons/icon-offer1.svg" alt=""></h1>
                        <h2 class="font-bold text-[20px] lg:text-[25px] mt-3">Website Development</h2>
                    </div>
                    <div class="p-6 inset-0 items-center leading-loose font-light flex flex-col">
                        <p class="min-h-[180px] text-[14px] lg:text-[16px] text-justify opacity-60">Boost your website
                            and get
                            more engagement
                            from your customers. We create
                            responsive, attention-grabbing websites that leave a lasting impression.</p>
                        <div class="w-full justify-center flex">
                            <button
                                class="flex items-center justify-center font-normal bg-blue-500 hover:bg-blue-600 text-white rounded-full text-[16px] h-[32px] w-[140px]">Learn
                                More</button>
                        </div>
                    </div>
                </div>
                <div class="w-[390px] h-[409px] bg-white rounded-[20px] shadow-2xl relative z-10">
                    <div class="min-h-[117px] w-full bg-[#008FFF] rounded-t-[20px] text-white p-6">
                        <h1><img src="/assets/icons/icon-offer2.svg" alt=""></h1>
                        <h2 class="font-bold text-[20px] lg:text-[25px] mt-3">System & Integration</h2>
                    </div>
                    <div class="p-6 inset-0 items-center leading-loose font-light flex flex-col">
                        <p class="min-h-[180px] text-[14px] lg:text-[16px] text-justify opacity-60">Streamline your
                            business
                            operations with our
                            system development and
                            integration solutions. From CRM systems to e-commerce platforms, we tailor solutions
                            that
                            enhance efficiency and productivity.</p>
                        <div class="w-full justify-center flex">
                            <button
                                class="flex items-center justify-center font-normal bg-blue-500 hover:bg-blue-600 text-white rounded-full text-[16px] h-[32px] w-[140px]">Learn
                                More</button>
                        </div>
                    </div>
                </div>
                <div class="w-[390px] h-[409px] bg-white rounded-[20px] shadow-2xl relative z-10">
                    <div class="min-h-[117px] w-full bg-[#008FFF] rounded-t-[20px] text-white p-6">
                        <h1><img src="/assets/icons/icon-offer3.svg" alt=""></h1>
                        <h2 class="font-bold text-[20px] lg:text-[25px] mt-3">Maintenance & Support</h2>
                    </div>
                    <div class="p-6 inset-0 items-center leading-loose font-light flex flex-col">
                        <p class="min-h-[180px] text-[14px] lg:text-[16px] text-justify opacity-60">We dont just build
                            and
                            leave. Our team
                            provides ongoing maintenance and
                            support to keep your website and systems running smoothly. Count on us for updates,
                            security, and troubleshooting.</p>
                        <div class="w-full justify-center flex">
                            <button
                                class="flex items-center justify-center font-normal bg-blue-500 hover:bg-blue-600 text-white rounded-full text-[16px] h-[32px] w-[140px]">Learn
                                More</button>
                        </div>
                    </div>
                </div>

            </div>
            <div class=" bg-sky-300 w-72 h-72 blur-[300px] z-0 opacity-70 absolute lg:h-full lg:w-full top-[70%]" />
        </section>
        <!-- End Offer -->

        <!-- WhyUs -->
        <section class="px-6  lg:px-32 xl:px-0 font-plus-jakarta-sans lg:pb-12 lg:mt-6 relative">
            <div class="relative  w-full mx-auto py-10">
                <div class="relative flex  justify-center items-center ">
                    <div class="relative hidden lg:inline-block flex-1 rounded-xl z-10  max-w-[1215px]">
                        <img src=/assets/img/website-whyus.png alt="WhyUs" />
                    </div>
                    <div
                        class="lg:absolute lg:w-[65%] lg:h-[633px] lg:top-[50%] lg:bottom-[50%]  lg:right-0 px-8 lg:px-10 py-8 lg:py-8 bg-white lg:-translate-y-[50%] rounded-s-xl  shadow-[0_3px_10px_rgb(0,0,0,0.2)] z-0">
                        <div class="lg:ml-64 my-4 lg:mt-20 leading-tight z-20  max-w-[600px]">
                            <h1 class="lg:text-[32px] text-[28px] leading-tight font-normal text-[#008FFF]">
                                Why Choose Us</h1>
                            <p class="mt-4 xl:mt-5 text-[38px] xl:text-[50px] font-medium">We Deliver Increased
                                Opportunities For Your Online Business</p>
                            <p class="leading-loose mt-6">Whether you're a startup looking to establish your digital
                                footprint or an established enterprise seeking to optimize your systems, we have the
                                expertise and solutions to make it happen.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End WhyUs -->


        <!-- What Do You Need -->
        <section class="mx-4 h-full lg:mt-20 font-plus-jakarta-sans relative z-10">
            <div class="h-full max-w-[1215px] mx-auto relative z-10">
                <div class="flex flex-row flex-wrap max-w-full justify-center lg:justify-between">
                    <div class="max-w-[789px]">
                        <h1 class="text-[32px] px-2 lg:text-[50px] font-bold">What Do You Need?</h1>
                    </div>
                    <div class="flex max-w-full flex-wrap items-center mt-2 md:mt-0 lg:px-0">
                        <button
                            class="m-2 h-[44px] lg:w-[150px] w-full bg-blue-500 hover:bg-blue-600 text-white shadow-3xl rounded-full shadow-blue-400 text-[16px]">Website
                            & Apps</button>
                        <button
                            class="m-2 h-[44px] lg:w-[170px] w-full bg-transparent hover:bg-slate-200 border border-slate-500 shadow-3xl rounded-full shadow-blue-400 font-light text-[16px]">Company
                            Profile</button>
                        <button
                            class="m-2 h-[44px] lg:w-[150px] w-full bg-transparent hover:bg-slate-200 border border-slate-500 shadow-3xl rounded-full shadow-blue-400 font-light text-[16px]">Marketplace</button>
                    </div>
                </div>
                <div class="h-full mt-2 md:mt-10 flex flex-wrap justify-center items-center gap-4">
                    <div class="border w-[390px] h-full bg-white rounded-[20px] shadow-xl relative z-10">
                        <div>
                            <img src="/assets/img/website-offer1.png" alt="Service Project 1" />
                        </div>
                        <div class="flex justify-end h-12 pr-4 mb-2 items-center">
                            <h1 class="font-bold md:text-[20px] mr-4">Flower Farm</h1>
                            <h2 class="cursor-pointer"><img class="w-8 md:w-full" src="/assets/icons/icon-offer.svg"
                                    alt="" /></h2>
                        </div>
                    </div>
                    <div class="w-[390px] h-full bg-white rounded-[20px] shadow-xl relative z-10">
                        <div>
                            <img src="/assets/img/website-offer2.png" alt="Service Project 2" />
                        </div>
                        <div class="flex justify-end h-12 pr-4 mb-2 items-center">
                            <h1 class="font-bold md:text-[20px] mr-4">Flower Farm</h1>
                            <h2 class="cursor-pointer"><img class="w-8 md:w-full" src="/assets/icons/icon-offer.svg"
                                    alt="" /></h2>
                        </div>
                    </div>
                    <div class="w-[390px] h-full bg-white rounded-[20px] shadow-xl relative z-10">
                        <div>
                            <img src="/assets/img/website-offer3.png" alt="Service Project 3" />
                        </div>
                        <div class="flex justify-end h-12 pr-4 mb-2 items-center">
                            <h1 class="font-bold md:text-[20px] mr-4">Flower Farm</h1>
                            <h2 class="cursor-pointer"><img class="w-8 md:w-full" src="/assets/icons/icon-offer.svg"
                                    alt="" /></h2>
                        </div>
                    </div>
                    <div class="w-[390px] h-full bg-white rounded-[20px] shadow-xl relative z-10">
                        <div>
                            <img src="/assets/img/website-offer4.png" alt="Service Project 4" />
                        </div>
                        <div class="flex justify-end h-12 pr-4 mb-2 items-center">
                            <h1 class="font-bold md:text-[20px] mr-4">Flower Farm</h1>
                            <h2 class="cursor-pointer"><img class="w-8 md:w-full" src="/assets/icons/icon-offer.svg"
                                    alt="" /></h2>
                        </div>
                    </div>
                    <div class="w-[390px] h-full bg-white rounded-[20px] shadow-xl relative z-10">
                        <div>
                            <img src="/assets/img/website-offer5.png" alt="Service Project 5" />
                        </div>
                        <div class="flex justify-end h-12 pr-4 mb-2 items-center">
                            <h1 class="font-bold md:text-[20px] mr-4">Flower Farm</h1>
                            <h2 class="cursor-pointer"><img class="w-8 md:w-full" src="/assets/icons/icon-offer.svg"
                                    alt="" /></h2>
                        </div>
                    </div>
                    <div class=" bg-sky-300 w-72 h-72 blur-[100px] z-0 opacity-50 absolute lg:h-[500px] lg:w-full " />
                </div>

            </div>

        </section>
        <!-- End What Do You Need -->

        <!-- Project Slider -->
        <section class="font-plus-jakarta-sans">
            <div class="max-w-[600px] mx-auto h-full lg:mt-20 mt-8 px-4">
                <h1 class="text-center text-[32px] md:text-[50px] text-[#002B44] font-bold">Our Success Project</h1>
                <div
                    class="w-full h-full  flex flex-row flex-wrap justify-between px-20 md:px-40 mt-6 font-bold md:text-[20px]">
                    <h1 class="w-[50%] border-r-2 text-[#999999] cursor-pointer">Website</h1>
                    <h1 class="text-[#008FFF] cursor-pointer">Apps</h1>
                </div>
            </div>
            <div class="max-w-[1536px] h-full mx-auto mt-10 swiper swiper-project relative">
                <div class="swiper-wrapper relative">
                    <div class="swiper-slide  flex justify-center items-center flex-wrap ">
                        <img class="" src="/assets/img/project-slider1.png" alt="">
                    </div>
                    <div class="swiper-slide  flex justify-center items-center flex-wrap">
                        <img class="max-w-[100%] max-h-[100%] h-auto" src="/assets/img/project-slider2.png" alt="">
                    </div>
                    <div class="swiper-slide  flex justify-center items-center">
                        <img class="max-w-[100%] max-h-[100%] h-auto" src="/assets/img/project-slider3.png" alt="">
                    </div>
                    <div class="swiper-slide flex justify-center items-center">
                        <img class="max-w-[100%] max-h-[100%] h-auto" src="/assets/img/project-slider4.png" alt="">
                    </div>
                    <div class="swiper-slide  flex justify-center items-center">
                        <img class="max-w-[100%] max-h-[100%] h-auto" src="/assets/img/project-slider5.png" alt="">
                    </div>
                    <div class="swiper-slide  flex justify-center items-center">
                        <img class="max-w-[100%] max-h-[100%] h-auto" src="/assets/img/project-slider5.png" alt="">
                    </div>
                    <div class="swiper-slide  flex justify-center items-center">
                        <img class="max-w-[100%] max-h-[100%] h-auto" src="/assets/img/project-slider4.png" alt="">
                    </div>
                    <div class="swiper-slide  flex justify-center items-center">
                        <img class="max-w-[100%] max-h-[100%] h-auto" src="/assets/img/project-slider3.png" alt="">
                    </div>
                    <div class="swiper-slide  flex justify-center items-center">
                        <img class="max-w-[100%] max-h-[100%] h-auto" src="/assets/img/project-slider2.png" alt="">
                    </div>
                    <div class="swiper-slide  flex justify-center items-center">
                        <img class="max-w-[100%] max-h-[100%] h-auto" src="/assets/img/project-slider1.png" alt="">
                    </div>
                </div>
                <div
                    class="swiper-button-next rounded-full md:bg-[#EDC700] md:text-white text-[12px] md:h-[75px] md:w-[75px] z-30">
                </div>
                <div class="swiper-button-prev rounded-full md:bg-[#EDC700] md:text-white md:h-[75px] md:w-[75px] z-30">
                </div>
                <div
                    class=" bg-sky-300 w-28 h-full blur-[40px] rounded-full z-20 opacity-100 absolute top-0 left-0 hidden lg:block">
                </div>
                <div
                    class=" bg-sky-300 w-28 h-full blur-[40px] rounded-full z-20 opacity-100 absolute top-0 right-0 hidden lg:block">
                </div>
            </div>
        </section>
        <!-- End Project Slider -->

        <!-- Design Price -->
        @include('partials.design-price')
        <!-- End Design Price -->

        <!-- Testi -->
        <section class="font-plus-jakarta-sans">
            <div class="w-full h-full bg-[#B0DCFF] pb-12 relative z-20">
                <div
                    class="max-w-[800px] mx-auto text-[28px] md:text-[50px] text-[#002B44] font-bold text-center lg:pt-14 pt-8">
                    <h1>Client Success Stories</h1>
                </div>
                <div
                    class="max-w-[1215px] h-full w-full justify-center mx-auto  mt-12  swiper  flex flex-col px-6 mySwiper">
                    <div class="swiper-wrapper ">
                        <div class="bg-white rounded-[20px] h-[300px] w-[240px] p-8 swiper-slide  ">
                            <div class="flex">
                                <img class="rounded-full" src="/assets/img/testi-profil.png" alt="" />
                                <div class="flex flex-col w-full pl-4 justify-center">
                                    <h1 class="md:text-[30px] text-[24px] text-[#008FFF] font-bold">John</h1>
                                    <p class="md:text-[18px] text-[14px] font-thin">CEO, XYZ Company</p>
                                </div>
                            </div>
                            <div class="mt-6 ">
                                <p class="opacity-60">Working with HiSocial was a game-changer for our brand. Their logo
                                    design and
                                    branding
                                    strategy catapulted our business to new heights.</p>
                            </div>
                        </div>
                        <div class="bg-white rounded-[20px] h-[300px] w-[340px]  p-8  swiper-slide ">
                            <div class="flex">
                                <img class="rounded-full" src="/assets/img/testi-profil.png" alt="" />
                                <div class="flex flex-col w-full pl-4 justify-center">
                                    <h1 class="md:text-[30px] text-[24px] text-[#008FFF] font-bold">John</h1>
                                    <p class="md:text-[18px] text-[14px] font-thin">CEO, XYZ Company</p>
                                </div>
                            </div>
                            <div class="mt-6">
                                <p class="opacity-60">Working with HiSocial was a game-changer for our brand. Their logo
                                    design and
                                    branding
                                    strategy catapulted our business to new heights.</p>
                            </div>
                        </div>
                        <div class="bg-white rounded-[20px] h-[300px] w-[540px]  p-8  swiper-slide ">
                            <div class="flex">
                                <img class="rounded-full" src="/assets/img/testi-profil.png" alt="" />
                                <div class="flex flex-col w-full pl-4 justify-center">
                                    <h1 class="md:text-[30px] text-[24px] text-[#008FFF] font-bold">John</h1>
                                    <p class="md:text-[18px] text-[14px] font-thin">CEO, XYZ Company</p>
                                </div>
                            </div>
                            <div class="mt-6">
                                <p class="opacity-60">Working with HiSocial was a game-changer for our brand. Their logo
                                    design and
                                    branding
                                    strategy catapulted our business to new heights.</p>
                            </div>
                        </div>
                        <div class="bg-white rounded-[20px] h-[300px] w-[600px]  p-8  swiper-slide ">
                            <div class="flex">
                                <img class="rounded-full" src="/assets/img/testi-profil.png" alt="" />
                                <div class="flex flex-col w-full pl-4 justify-center">
                                    <h1 class="md:text-[30px] text-[24px] text-[#008FFF] font-bold">John</h1>
                                    <p class="md:text-[18px] text-[14px] font-thin">CEO, XYZ Company</p>
                                </div>
                            </div>
                            <div class="mt-6">
                                <p class="opacity-60">Working with HiSocial was a game-changer for our brand. Their logo
                                    design and
                                    branding
                                    strategy catapulted our business to new heights.</p>
                            </div>
                        </div>
                        <div class="bg-white rounded-[20px] h-[300px] w-[600px]  p-8  swiper-slide ">
                            <div class="flex">
                                <img class="rounded-full" src="/assets/img/testi-profil.png" alt="" />
                                <div class="flex flex-col w-full pl-4 justify-center">
                                    <h1 class="md:text-[30px] text-[24px] text-[#008FFF] font-bold">John</h1>
                                    <p class="md:text-[18px] text-[14px] font-thin">CEO, XYZ Company</p>
                                </div>
                            </div>
                            <div class="mt-6">
                                <p class="opacity-60">Working with HiSocial was a game-changer for our brand. Their logo
                                    design and
                                    branding
                                    strategy catapulted our business to new heights.</p>
                            </div>
                        </div>
                    </div>
                    <div class="mt-14">
                        <div class="swiper-pagination myPagination"></div>
                    </div>
                </div>
                <div
                    class="w-[443px] h-[443px] rounded-full  absolute z-0 left-[3%] top-[15%] bg-[#80C5FA] overflow-hidden hidden lg:block">
                    <div
                        class="w-[443px] h-[443px] rounded-full border border-white absolute z-0 left-[10%] bottom-[10%]">
                    </div>
                </div>
                <div
                    class="w-[443px] h-[443px] rounded-full  absolute z-0 right-[3%] top-[15%] bg-[#80C5FA] overflow-hidden hidden lg:block">
                    <div
                        class="w-[443px] h-[443px] rounded-full border border-white absolute z-0 left-[10%] bottom-[10%]">
                    </div>
                </div>

            </div>
        </section>
        <!-- End Testi -->


@endsection
