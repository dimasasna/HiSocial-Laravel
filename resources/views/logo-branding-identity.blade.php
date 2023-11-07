@extends('layouts.main')

@section('container')
<!-- Hero -->
<div class="relative w-[100vw-1px] h-[calc(100vh-74px)] lg:h-[calc(100vh-80px)] xl:h-[calc(100vh-80px)] mx-auto">
            <img
                src="/assets/img/service/banner-logo-branding-identity.png"
                class="relative w-full h-full object-cover object-center z-10"
                alt="gambar hero"
            >
            <div class="absolute flex flex-col justify-center h-[80%] px-6 lg:px-0 text-left inset-0 my-auto md:text-center space-y-4 lg:space-y-6 xl:space-y-7 z-20">
                <h1 class="text-3xl lg:text-5xl xl:text-6xl font-bold lg:leading-tight xl:leading-tight text-pb-normal-active">Craft A memorable And Impactful Logo<br class="hidden md:block"/>Branding <span class="text-p-normal"> With Our Services</span></h1>
                <p class="md:w-[76%] md:mx-auto font-normal leading-relaxed lg:leading-relaxed xl:leading-relaxed text-base lg:text-xl xl:text-2xl">At HiSocial, we are passionate about helping businesses create a lasting impression through exceptional branding. Our logo and branding identity services are tailored to elevate your brand and make it memorable.</p>
                <div>
                    <button class="btn-blue w-full md:w-auto lg:px-16 lg:py-3 xl:px-20 xl:py-4 mt-5 lg:mt-6 xl:mt-8 font-bold xl:text-xl rounded-xl">Get Started</button>
                </div>
            </div>
        </div>
    <!-- Akhir Hero -->

    @include('partials.corporate-colaboration')

    <!-- Our Services -->
    <div class="relative px-5 lg:px-32 xl:px-0 py-8 lg:py-20 bg-gradient-to-t from-[#FAFAFA] via-[rgba(184,224,255,0.19)] to-[#FAFAFA]">
        <div class="relative flex flex-col lg:flex-row lg:items-center gap-7 max-w-[1180px] w-full mx-auto">
            <div class="lg:flex-[48%] text-center lg:text-left">
                <h1 class="text-2xl lg:text-4xl xl:text-5xl font-bold lg:leading-tight xl:leading-tight text-pb-normal-active">What is in our<br class="hidden lg:block" />srvices?</h1>
                <p class="mt-4 xl:mt-5 text-md lg:text-base xl:text-2xl">
                    Make A Lasting Impression With Our Comprehensive Branding Identity Visual Service.
                </p>
                <button class="btn-blue hidden lg:block md:w-auto lg:px-12 lg:py-3 xl:px-14 xl:py-3 mt-6 lg:mt-8 xl:mt-10 font-bold xl:text-xl bg-[#005AA0] rounded-xl">Learn more</button>
            </div>
            <div class="lg:flex-[52%] grid grid-cols-1 lg:grid-cols-2 mt-6 lg:mt-0 gap-4 lg:gap-6 w-full h-full">
                <div class="relative h-[240px] md:h-auto p-6 xl:pb-10 bg-white space-y-1 rounded-xl drop-shadow-[0px_5px_20px_rgba(0,0,0,0.10)] shadow-[0px_6px_0px_rgba(0,143,255,1)] z-10">
                    <span class="w-[36px] h-[36px] p-2 inline-block bg-p-normal rounded-full">
                        <img src="/assets/icons/our-service1.png" class="w-8" alt="design--v1"/>
                    </span>
                    <p class="font-bold pt-2 text-lg lg:text-xl text-[#008FFF]">Logo Design</p>
                    <p class="text-justify text-md lg:text-base leading-relaxed">Our expert designers craft unique logos that embody your brand's personality and values.</p>
                </div>
                <div class="relative h-[240px] md:h-auto p-6 xl:pb-10 bg-white space-y-1 rounded-xl drop-shadow-[0px_5px_20px_rgba(0,0,0,0.10)] shadow-[0px_6px_0px_rgba(0,143,255,1)] z-10">
                    <span class="w-[36px] h-[36px] p-2 inline-block bg-p-normal rounded-full">
                        <img src="/assets/icons/our-service2.png" class="w-7" alt="design--v1"/>
                    </span>
                    <p class="font-bold pt-2 text-lg lg:text-xl text-[#008FFF]">Branding Stragegy</p>
                    <p class="text-justify text-md lg:text-base leading-relaxed">We work with you to define a clear brand strategy that sets you apart from the competition.</p>
                </div>
                <div class="relative h-[240px] md:h-auto p-6 xl:pb-10 bg-white space-y-1 rounded-xl drop-shadow-[0px_5px_20px_rgba(0,0,0,0.10)] shadow-[0px_6px_0px_rgba(0,143,255,1)] z-10">
                    <span class="w-[36px] h-[36px] p-2 inline-block bg-p-normal rounded-full">
                        <img src="/assets/icons/our-service3.png" class="w-7" alt="design--v1"/>
                    </span>
                    <p class="font-bold pt-2 text-lg lg:text-xl text-[#008FFF]">Brand Guideline</p>
                    <p class="text-justify text-md lg:text-base leading-relaxed">We ensure alignment of branding materials on all your products.</p>
                </div>
                <div class="relative h-[240px] md:h-auto p-6 xl:pb-10 bg-white space-y-1 rounded-xl drop-shadow-[0px_5px_20px_rgba(0,0,0,0.10)] shadow-[0px_6px_0px_rgba(0,143,255,1)] z-10">
                    <span class="w-[36px] h-[36px] p-2 inline-block bg-p-normal rounded-full">
                        <img src="/assets/icons/our-service4.png" class="w-7" alt="design--v1"/>
                    </span>
                    <p class="font-bold pt-2 text-lg lg:text-xl text-[#008FFF]">Print & Digital Assets</p>
                    <p class="text-justify text-md lg:text-base leading-relaxed">we design all the collateral you need to convey your brand's message effectively.</p>
                </div>
            </div>
            <div class="text-center">
                <button class="btn-blue lg:hidden px-8 py-2 w-auto lg:px-12 lg:py-3 xl:px-14 xl:py-3 mt-6 lg:mt-8 xl:mt-10 font-bold xl:text-xl bg-[#005AA0] rounded-xl">Learn more</button>
            </div>

        </div>
    </div>
    <!-- Akhir Our Services -->

    <!-- Why Choose Us -->
    <div class="relative px-5 lg:px-32 xl:px-0 py-8 lg:py-14">
        <div class="relative max-w-[1180px] w-full mx-auto">
            <h1 class="text-2xl text-center mb-8 lg:text-4xl xl:text-5xl font-bold lg:leading-tight xl:leading-tight text-pb-normal-active">Why Choose Us</h1>
            <div class="relative w-full h-full">
                <div class="hidden lg:block w-[60%] bg-white">
                    <img src="/assets/img/service/why-choose-us.png" class="w-full object-cover" alt="gambar">
                </div>
                <div class="relative lg:absolute flex items-center lg:w-[56%] h-full right-0 inset-y-0">
                    <div class="flex flex-col lg:flex-row gap-6 w-full">
                        <div class="flex-1 space-y-6">
                            <div class="relative w-full h-[250px] lg:h-[260px] xl:h-[320px] px-6 pt-7 pb-8 bg-white space-y-1 rounded-xl drop-shadow-[0px_5px_20px_rgba(0,0,0,0.10)] shadow-[6px_6px_0px_rgba(0,143,255,1)] z-10">
                                <span class="w-[36px] h-[36px] p-[6px] inline-block bg-p-normal rounded-full">
                                    <img src="/assets/img/service/why-choose-us1.png" class="w-8" alt="design--v1"/>
                                </span>
                                <p class="font-bold pt-2 text-xl lg:text-2xl text-[#008FFF]">Experience</p>
                                <p class="text-justify text-md lg:text-base xl:text-xl leading-relaxed">With years of experience in branding, we understand what it takes to create a strong brand presence.</p>
                            </div>
                            <div class="relative w-full h-[250px] lg:h-[260px] xl:h-[320px] px-6 pt-7 pb-8 bg-white space-y-1 rounded-xl drop-shadow-[0px_5px_20px_rgba(0,0,0,0.10)] shadow-[6px_6px_0px_rgba(0,143,255,1)] z-10">
                                <span class="w-[36px] h-[36px] p-[6px] inline-block bg-p-normal rounded-full">
                                    <img src="/assets/img/service/why-choose-us2.png" class="w-8" alt="design--v1"/>
                                </span>
                                <p class="font-bold pt-2 text-xl lg:text-2xl text-[#008FFF]">Client Success</p>
                                <p class="text-justify text-md lg:text-base xl:text-xl leading-relaxed">We measure our success by the success of our clients. Check out our portfolio to see the brands we've transformed.</p>
                            </div>
                        </div>
                        <div class="flex-1">
                            <div class="relative w-full top-[25%] h-[250px] lg:h-[260px] xl:h-[320px] px-6 pt-7 pb-8 bg-white space-y-1 rounded-xl drop-shadow-[0px_5px_20px_rgba(0,0,0,0.10)] shadow-[6px_6px_0px_rgba(0,143,255,1)] z-10">
                                <span class="w-[36px] h-[36px] p-[6px] inline-block bg-p-normal rounded-full">
                                    <img src="/assets/img/service/why-choose-us3.png" class="w-8" alt="design--v1"/>
                                </span>
                                <p class="font-bold pt-2 text-xl lg:text-2xl text-[#008FFF]">Creativity</p>
                                <p class="text-justify text-md lg:text-base xl:text-xl leading-relaxed">Our designers are passionate about creativity and innovation, ensuring your brand stands out in a crowded market.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Akhir Why Chose Us -->

    <!-- Our Success Project -->
    <div class="relative px-5 lg:px-32 xl:px-0 py-8 lg:py-14">
        <div class="relative max-w-[1180px] w-full mx-auto">
            <div class="flex justify-center flex-col lg:block lg:bg-white lg:p-12 lg:pt-14 rounded-2xl space-y-8 lg:space-y-16 lg:drop-shadow-[0px_5px_20px_rgba(0,0,0,0.10)]">
                <div class="flex flex-col md:flex-row justify-between items-center">
                    <h1 class="text-2xl lg:text-4xl xl:text-5xl font-bold lg:leading-tight xl:leading-tight text-pb-normal-active">Our Success Project</h1>
                    <button class="hidden lg:block btn-blue px-6 lg:px-12 lg:py-3 xl:px-14 xl:py-3 mt-6 lg:mt-0 xl:mt-0 font-bold xl:text-xl  bg-[#005AA0] rounded-xl">View our portfolio</button>
                </div>
                <div class="grid grid-cols-2 lg:grid-cols-3 lg:grid-rows-[220px_230px_230px] xl:grid-rows-[250px_250px_250px] gap-3 lg:gap-5 h-full">
                    <button class="row-span-2 col-span-2 lg:row-start-1 lg:row-span-2 rounded-lg lg:rounded-xl overflow-hidden">
                        <img src="/assets/img/service/logo-branding/our-success-project1 copy.png" class="w-full h-full object-cover object-center hover:scale-105 transition-all duration-700" alt="gambar">
                    </button>
                    <button class="col-start-2 row-start-1 lg:col-start-2 rounded-lg lg:rounded-xl overflow-hidden">
                        <img src="/assets/img/service/logo-branding/our-success-project3 copy.png" class="w-full h-full object-cover object-center hover:scale-105 transition-all duration-700" alt="gambar">
                    </button>
                    <button class="lg:row-span-2 rounded-lg lg:rounded-xl overflow-hidden">
                        <img src="/assets/img/service/logo-branding/our-success-project5 copy.png" class="w-full h-full object-cover object-center hover:scale-105 transition-all duration-700" alt="gambar">
                    </button>
                    <button class="row-start-1 lg:row-start-3 rounded-lg lg:rounded-xl overflow-hidden">
                        <img src="/assets/img/service/logo-branding/our-success-project2 copy.png" class="w-full h-full object-cover object-center hover:scale-105 transition-all duration-700" alt="gambar">
                    </button>
                    <button class="rounded-lg lg:rounded-xl overflow-hidden lg:row-span-2">
                        <img src="/assets/img/service/logo-branding/our-success-project4 copy.png" class="w-full h-full object-cover object-center hover:scale-105 transition-all duration-700" alt="gambar">
                    </button>
                    <button class="col-span-2 rounded-lg lg:rounded-xl overflow-hidden">
                        <img src="/assets/img/service/logo-branding/our-success-project6 copy.png" class="w-full h-full object-cover object-center hover:scale-105 transition-all duration-700" alt="gambar">
                    </button>
                </div>
                <button class="lg:hidden text-center mx-auto btn-blue px-6 lg:px-12 lg:py-3 xl:px-14 xl:py-3 mt-6 lg:mt-0 xl:mt-0 font-bold xl:text-xl  bg-[#005AA0] rounded-xl">View our portfolio</button>
            </div>
        </div>
    </div>
    <!-- Akhir Our Success Project -->

    <!-- Client Say -->
    <div class="relative py-8 lg:py-10">
        <h1 class="text-2xl text-center lg:text-4xl xl:text-5xl font-bold lg:leading-tight xl:leading-tight text-pb-normal-active">What Client Say</h1>
        <div class="hidden lg:block relative w-full h-[280px] mt-32 bg-[#6FBFFF]">
            <img src="/assets/img/service/what-client-say-bg.png" class="w-full h-full object-cover" alt="gambar">
        </div>
        <div class="px-5 lg:px-32 xl:px-0 ">
            <div class="relative max-w-[1180px] bg-white mt-16 lg:mt-0 lg:h-6 w-full mx-auto space-y-3 lg:space-y-0">
                <div class="lg:absolute lg:mx-auto lg:-top-[340px] lg:inset-x-0 w-full h-auto lg:w-[333px] lg:h-[146px] pt-9 p-4 lg:px-6 lg:py-8 bg-white rounded-xl drop-shadow-[0px_5px_20px_rgba(0,0,0,0.25)]">
                    <div class="absolute inset-x-0 -top-[34%] lg:-top-[39%] w-[86px] h-[86px] mx-auto border-[8px] border-[#D9EEFF] rounded-full  overflow-hidden">
                        <img src="/assets/img/service/what-client-say1.png" class="w-[76px] h-[76px] object-cover object-center" alt="">
                    </div>
                    <div class="text-center  text-[#002B44]">
                        <p class="font-bold text-md lg:text-lg">Joseph</p>
                        <p class="text-[10px] mt-1 lg:mt-0 lg:text-xs">I can't recommend HiSocial Solutions enough. They've boosted our revenue and transformed our online presence. A trusted partner, indeed!</p>
                        <img src="/assets/icons/rating.png" class="w-[114px] h-auto mx-auto mt-1" alt="rating">
                    </div>
                </div>
                <div class="lg:absolute lg:-top-20 lg:inset-0 flex lg:gap-2 w-full h-auto lg:w-[393px] lg:h-[126px] p-4 lg:p-4 bg-white rounded-xl drop-shadow-[0px_5px_20px_rgba(0,0,0,0.25)]">
                    <div class="flex-[200px] lg:flex-[240px] lg:w-[86px] lg:h-[86px] rounded-full overflow-hidden">
                        <img src="/assets/img/service/what-client-say2.png" class="w-[54px] h-[54px] lg:w-[76px] lg:h-[76px] object-cover object-center" alt="gambar">
                    </div>
                    <div class="text-left text-[#002B44]">
                        <p class="font-bold text-xs lg:text-lg">John, CEO, XYZ Company</p>
                        <p class="text-[10px] mt-1 lg:mt-0 lg:text-xs">HiSocial's logo design and branding strategy were a game-changer for our brand, propelling our business to new heights.</p>
                        <img src="/assets/icons/rating.png" class="w-[114px] h-auto mt-1" alt="rating">
                    </div>
                </div>
                <div class="lg:absolute lg:-top-36 lg:right-0 lg:inset-y-0 flex lg:gap-2 w-full h-auto lg:w-[393px] lg:h-[126px] p-4 lg:p-4 bg-white rounded-xl drop-shadow-[0px_5px_20px_rgba(0,0,0,0.25)]">
                    <div class="flex-[200px] lg:flex-[240px] lg:w-[86px] lg:h-[86px] rounded-full overflow-hidden">
                        <img src="/assets/img/service/what-client-say2.png" class="w-[54px] h-[54px] lg:w-[76px] lg:h-[76px] object-cover object-center" alt="gambar">
                    </div>
                    <div class="text-left text-[#002B44]">
                        <p class="font-bold text-xs lg:text-lg">John, CEO, XYZ Company</p>
                        <p class="text-[10px] mt-1 lg:mt-0 lg:text-xs">HiSocial's logo design and branding strategy were a game-changer for our brand, propelling our business to new heights.</p>
                        <img src="/assets/icons/rating.png" class="w-[114px] h-auto mt-1" alt="rating">
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Akhir Client Say -->

    @include('partials.design-price')

@endsection
