@extends('layouts.main')

@section('container')
    <!-- Banner -->
    <section
        class="relative w-[100vw-1px] h-[calc(100vh-74px)] lg:h-[calc(100vh-80px)] xl:h-[calc(100vh-80px)] mx-auto flex flex-row justify-center items-center">
        <img class="w-full h-full absolute object-cover" src="/assets/img/service-detail1.png"
            alt="Banner Service Detail" />
        <div
            class="absolute z-20 flex flex-row  gap-5 max-w-[1215px] mx-auto px-6 lg:px-0 w-full justify-center items-center">
            <div class="w-full h-full">
                <h1 class="text-[30px] font-bold text-[#004073] lg:text-[42px]">Elevate Your Brand With Our
                    Expert<span class="text-[#008FFF]"> Branding Identity Visual Service</span></h1>
                <p class="leading-loose font-thin mt-4 text-[16px] lg:text-[20px] text-justify">we know that a powerful
                    brand
                    identity goes
                    beyond aesthetics; it&apos;s a strategic asset that defines your business, speaks to your
                    audience, and sets you apart in a crowded market. We&apos;re here to partner with you and bring
                    your brand to life.</p>
                <button
                    class="text-white lg:text-[20px] mt-10 bg-[#008FFF] hover:bg-blue-600 shadow-3xl rounded-[20px] shadow-blue-400 w-full h-[50px] lg:h-14 lg:w-72 ">Get
                    Started</button>

            </div>
            <div class="h-full w-full ml-10 -mt-12 hidden lg:block">
                <img class="object-cover" src="/assets/img/service-image1.png" alt="bdl" />
            </div>
        </div>
    </section>
    <!-- End Banner -->
    <div class="max-w-[1920px] sm:max-w-full md:max-w-full lg:max-w-full xl:max-w-[1920px] mx-auto">

        @include('partials.corporate-colaboration')

        <!-- Offer -->
        <section class="mb-6 md:m-12 z-40 px-4 font-plus-jakarta-sans">
            <div class="relative z-20">
                <div class="mt-16 text-center max-w-[789px] mx-auto relative z-20">
                    <h1 class="text-[28px] lg:text-[42px] font-bold text-[#004073]">What We <span
                            class="text-[#008FFF]">Offer?</span></h1>
                    <p class="leading-loose mt-2 text-[14px] lg:text-[22px]">We Offer creative design solutions and
                        build
                        branding for our client companies including Logo, branding Strategy and Visual Identity.</p>
                </div>

                <div class="h-full mt-12 flex flex-row gap-2 max-w-[1215px] mx-auto relative z-20">
                    <div class="w-full -ml-4 hidden lg:block relative z-20">
                        <img src="/assets/img/imageoffer.png" alt="offer 1" class="w-full h-full" />
                    </div>
                    <div class="w-full flex flex-col fex-wrap gap-9 justify-center items-center relative z-20">
                        <div
                            class="h-[246px] max-w-[600px] rounded-[20px] shadow-[0_3px_10px_rgb(0,0,0,0.2)] relative z-20 bg-white">
                            <div class="border-b-2 h-[70px] flex justify-between items-center p-6 ">
                                <p class="flex text-[16px] lg:text-[20px] items-center font-semibold">Custom Visual
                                    Identity
                                </p>
                                <button
                                    class="text-[12px] flex flex-row items-center justify-between px-2 lg:px-4 md:text-[16px] md:w-[158px] h-[30px] lg:h-[40px] text-white bg-blue-500 hover:bg-blue-600 shadow-3xl rounded-full shadow-blue-400">Learn
                                    More <img class="pl-4 lg:pr-2" src="/assets/icons/arrow.svg" alt=""> </button>
                            </div>
                            <div class="p-6">
                                <p class="leading-7 text-[15px] lg:text-[18px]">We craft unique visual elements, from
                                    logos
                                    and color palettes to typography and imagery, tailored to your brands personality
                                    and
                                    message.</p>
                            </div>
                        </div>
                        <div
                            class="h-[246px] max-w-[600px] rounded-[20px] shadow-[0_3px_10px_rgb(0,0,0,0.2)] relative z-20 bg-white">
                            <div class="border-b-2 h-[70px] flex justify-between items-center p-6">
                                <p class="flex text-[16px] lg:text-[20px] items-center font-semibold">Eye-Catching
                                    Graphics
                                </p>
                                <button
                                    class="text-[12px] flex flex-row items-center justify-between px-2 lg:px-4 md:text-[16px] md:w-[158px] h-[30px] lg:h-[40px] text-white bg-blue-500 hover:bg-blue-600 shadow-3xl rounded-full shadow-blue-400">Learn
                                    More <img class="pl-4 lg:pr-2" src="/assets/icons/arrow.svg" alt=""> </button>
                            </div>
                            <div class="p-6">
                                <p class="leading-7 text-[16px] lg:text-[18px]">Our team of talented designers will
                                    create
                                    stunning visuals that captivate your audience and reinforce your brands story.</p>
                            </div>
                        </div>
                        <div
                            class="h-[246px] max-w-[600px] rounded-[20px] shadow-[0_3px_10px_rgb(0,0,0,0.2)] relative z-20 bg-white">
                            <div class="border-b-2 h-[70px] flex justify-between items-center p-6">
                                <p class="flex text-[16px] lg:text-[20px] items-center font-semibold">Brand
                                    Transformation
                                </p>
                                <button
                                    class="text-[12px] flex flex-row items-center justify-between px-2 lg:px-4 md:text-[16px] md:w-[158px] h-[30px] lg:h-[40px] text-white bg-blue-500 hover:bg-blue-600 shadow-3xl rounded-full shadow-blue-400">Learn
                                    More <img class="pl-4 lg:pr-2" src="/assets/icons/arrow.svg" alt=""> </button>
                            </div>
                            <div class="p-6">
                                <p class="leading-7 text-[16px] lg:text-[18px]">Our Branding Identity Visual Service
                                    will
                                    empower your brand to soar and leave an indelible mark.</p>
                            </div>
                        </div>

                    </div>

                </div>
                <div
                    class="w-[472px] h-[472px] rounded-full  absolute z-0 right-[16%] top-[3%] bg-[#E5F4FF]  hidden lg:block ">
                </div>
            </div>
        </section>
        <!-- End Offer -->

        <!-- WhyUs -->
        <section class="lg:mt-24 mt-12 lg:m-5 px-4">
            <div class="mx-auto max-w-[1215px] rounded-xl bg-[#008FFF] pb-2 font-plus-jakarta-sans">
                <div class="text-white h-52 text-center max-w-[789px] mx-auto p-6">
                    <h1 class="pt-5  text-[26px] lg:text-[42px] font-bold">Why<span class="text-[#EDC700]"> Work
                            With Us?</span></h1>
                    <p class="leading-loose font-light mt-2 text-[16px] lg:text-[20px]">We have collaborated with
                        various successful businessmen in building branding with our professionals.</p>
                </div>

                <div
                    class="items flex flex-row justify-center flex-wrap gap-10 max-w-6xl mx-auto md:my-12 my-6 px-6 lg:px-0 ">
                    <div class="h-full max-w-[335px] border rounded-[20px] bg-white shadow-[0_3px_10px_rgb(0,0,0,0.2)]">
                        <h1 class="m-4"><img src="/assets/icons/icon-why1.svg" alt=""></h1>
                        <h1 class="m-4 font-bold text-[#008FFF] md:text-[20px]">Experience</h1>
                        <p class="m-4 leading-normal font-light md:text-[18px] text-[14px]">With years of experience in
                            branding, we
                            understand what it takes to create a strong brand presence.</p>
                    </div>
                    <div class="h-full w-[335px]  border rounded-[20px] bg-white shadow-2xl">
                        <h1 class="m-4"><img src="/assets/icons/icon-why2.svg" alt=""></h1>
                        <h1 class="m-4 font-bold text-[#008FFF] md:text-[20px]">Creativity</h1>
                        <p class="m-4 leading-normal font-light md:text-[18px] text-[14px]">Our designers are passionate
                            about
                            creativity and innovation, ensuring your brand stands out in a crowded market.</p>
                    </div>
                    <div class="h-full w-[335px]  border rounded-[20px] bg-white shadow-2xl">
                        <h1 class="m-4"><img src="/assets/icons/icon-why3.svg" alt=""></h1>
                        <h1 class="m-4 font-bold text-[#008FFF] md:text-[20px]">Client Success</h1>
                        <p class="m-4 leading-normal font-light md:text-[18px] text-[14px]">We measure our success by
                            the success of
                            our clients. Check out our portfolio to see the brands we've transformed.</p>
                    </div>
                </div>

                <div
                    class=" h-full mx-7 max-w-full md:max-w-[580px] sm:max-w-[450px] rounded-[20px] bg-white my-10 shadow-2xl flex md:mx-auto ">
                    <div class="grid grid-cols-3 gap-2">
                        <div class="flex items-center justify-center col-span-2 m-4 border-r-2 pr-2">
                            <img class="" src="/assets/img/profil-us.png" alt="" />
                        </div>
                        <div class="text-center mr-4 mt-2">
                            <h1 class="text-[28px] lg:text-[50px] font-bold text-[#008FFF]">50+</h1>
                            <p class="font-semibold pb-4 text-[12px] sm:text-[16px]">Meet Our Professional</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End WhyUs -->

        <!-- Project -->
        <section class="mx-4 h-full lg:mt-20 mt-8 font-plus-jakarta-sans">
            <div class="h-full max-w-[1215px] mx-auto">
                <div class="flex flex-row flex-wrap max-w-full justify-center lg:justify-between">
                    <div class="max-w-[789px]">
                        <h1 class="text-[28px] lg:text-[38px] font-bold text-center "><span class="text-[#008FFF]">Our
                                Project</span>
                            Have Done</h1>
                    </div>
                    <div class="flex max-w-full flex-wrap items-center mt-2 md:mt-0 lg:px-0">
                        <button
                            class=" m-2 lg:w-[130px] w-full h-[44px] bg-blue-500 hover:bg-blue-600 shadow-3xl rounded-full shadow-blue-400 text-[16px] text-white">Logo
                            Design</button>
                        <button
                            class="m-2 lg:w-[170px] w-full h-[44px] bg-transparent hover:bg-slate-200 border border-slate-500 shadow-3xl rounded-full shadow-blue-400 font-light text-[16px]">Branding
                            Strategy</button>
                        <button
                            class="m-2 lg:w-[150px] w-full h-[44px] bg-transparent hover:bg-slate-200 border border-slate-500 shadow-3xl rounded-full shadow-blue-400 font-light text-[16px]">Visual
                            Identity</button>
                    </div>
                </div>
                <div class="h-full mt-2 md:mt-10 flex flex-wrap justify-center items-center gap-4">
                    <div class="border w-[390px] h-full bg-white rounded-[20px] shadow-xl">
                        <div>
                            <img src="/assets/img/service-project1.png" alt="Service Project 1" />
                        </div>
                        <div class="flex justify-end h-12 pr-4 mb-2 items-center">
                            <h1 class="font-bold md:text-[20px] mr-4">Flower Farm</h1>
                            <h2 class="cursor-pointer"><img class="w-8 md:w-full" src="/assets/icons/icon-offer.svg"
                                    alt="" /></h2>
                        </div>
                    </div>
                    <div class="w-[390px] h-full bg-white rounded-[20px] shadow-xl">
                        <div>
                            <img src="/assets/img/service-project2.png" alt="Service Project 2" />
                        </div>
                        <div class="flex justify-end h-12 pr-4 mb-2 items-center">
                            <h1 class="font-bold md:text-[20px] mr-4">Flower Farm</h1>
                            <h2 class="cursor-pointer"><img class="w-8 md:w-full" src="/assets/icons/icon-offer.svg"
                                    alt="" /></h2>
                        </div>
                    </div>
                    <div class="w-[390px] h-full bg-white rounded-[20px] shadow-xl">
                        <div>
                            <img src="/assets/img/service-project3.png" alt="Service Project 3" />
                        </div>
                        <div class="flex justify-end h-12 pr-4 mb-2 items-center">
                            <h1 class="font-bold md:text-[20px] mr-4">Flower Farm</h1>
                            <h2 class="cursor-pointer"><img class="w-8 md:w-full" src="/assets/icons/icon-offer.svg"
                                    alt="" /></h2>
                        </div>
                    </div>
                    <div class="w-[390px] h-full bg-white rounded-[20px] shadow-xl">
                        <div>
                            <img src="/assets/img/service-project4.png" alt="Service Project 4" />
                        </div>
                        <div class="flex justify-end h-12 pr-4 mb-2 items-center">
                            <h1 class="font-bold md:text-[20px] mr-4">Flower Farm</h1>
                            <h2 class="cursor-pointer"><img class="w-8 md:w-full" src="/assets/icons/icon-offer.svg"
                                    alt="" /></h2>
                        </div>
                    </div>
                    <div class="w-[390px] h-full bg-white rounded-[20px] shadow-xl">
                        <div>
                            <img src="/assets/img/service-project5.png" alt="Service Project 5" />
                        </div>
                        <div class="flex justify-end h-12 pr-4 mb-2 items-center">
                            <h1 class="font-bold md:text-[20px] mr-4">Flower Farm</h1>
                            <h2 class="cursor-pointer"><img class="w-8 md:w-full" src="/assets/icons/icon-offer.svg"
                                    alt="" /></h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Project -->

        <!-- Design Price -->
        @include('partials.design-price')
        <!-- End Design Price -->

        <!-- Testi -->
        <section class="bg-[#008FFF] h-full w-full pb-10 px-4 lg:px-0 font-plus-jakarta-sans">
            <div class="mx-auto pt-16 max-w-[1215px] flex justify-center xl:justify-start">
                <h1 class="lg:text-[50px] text-[38px] font-bold text-white"><span
                        class="text-[#002B44] border-b-4 pb-2">What</span> Client Say</h1>
            </div>
            <div class="my-12 flex flex-row flex-wrap gap-10 justify-center items-center max-w-[1230px] mx-auto">
                <div
                    class="xl:w-[350px] xl:h-[258px] w-[435px] h-full rounded-[20px] bg-white shadow-lg flex flex-col items-center p-4">
                    <div
                        class="w-[280px] h-[108px] xl:w-[284px] xl:h-[80px] mt-4 rounded-[20px] p-4 bg-[#008FFF] flex flex-row items-center text-white lg:ml-4">
                        <img class="border-8 border-white rounded-full lg:-ml-12 -ml-10 h-28"
                            src="/assets/img/testi-profil.png" alt="" />
                        <div class="flex flex-col w-full pl-4 -mt-2">
                            <h1 class="text-[20px] xl:text-[25px] font-bold">John</h1>
                            <p class="text-[14px] xl:text-[14px] font-thin">CEO, XYZ Company</p>
                        </div>
                    </div>
                    <div class="mt-6 p-2 text-[14px] xl:text-[16px] opacity-70">
                        <p>Working with HiSocial was a game-changer for our brand. Their logo design and branding
                            strategy catapulted our business to new heights.</p>
                    </div>
                </div>
                <div
                    class="w-[435px] h-full xl:h-[320px] rounded-[20px] bg-white shadow-lg flex flex-col items-center p-4 ">
                    <div
                        class="w-[280px] h-[108px] xl:w-[330px] xl:h-[108px] mt-4 rounded-[20px] p-4 bg-[#008FFF] flex flex-row items-center text-white">
                        <img class="border-8 border-white rounded-full -ml-10 xl:h-36 h-28"
                            src="/assets/img/testi-profil.png" alt="" />
                        <div class="flex flex-col w-full pl-4 -mt-2">
                            <h1 class="text-[20px] xl:text-[30px] font-bold">John</h1>
                            <p class="text-[16px] xl:text-[18px] font-thin">CEO, XYZ Company</p>
                        </div>
                    </div>
                    <div class="mt-6 p-2 text-[14px] lg:text-[20px] font-normal opacity-70">
                        <p>Working with HiSocial was a game-changer for our brand. Their logo design and branding
                            strategy catapulted our business to new heights.</p>
                    </div>
                </div>
                <div
                    class="xl:w-[350px] xl:h-[258px] w-[435px] h-full rounded-[20px] bg-white shadow-lg lg:flex flex-col items-center p-4 hidden">
                    <div
                        class="w-[280px] h-[108px] xl:w-[284px] xl:h-[80px] mt-4 rounded-[20px] p-4 bg-[#008FFF] flex flex-row items-center text-white lg:ml-4">
                        <img class="border-8 border-white rounded-full lg:-ml-12 -ml-10 h-28"
                            src="/assets/img/testi-profil.png" alt="" />
                        <div class="flex flex-col w-full pl-4 -mt-2">
                            <h1 class="text-[20px] xl:text-[25px] font-bold">John</h1>
                            <p class="text-[16px] xl:text-[14px] font-thin">CEO, XYZ Company</p>
                        </div>
                    </div>
                    <div class="mt-6 p-2 text-[14px] xl:text-[16px] opacity-70">
                        <p>Working with HiSocial was a game-changer for our brand. Their logo design and branding
                            strategy catapulted our business to new heights.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Testi -->

        <!-- Transform -->
        <section class="h-full lg:mt-20 mt-10 max-w-[1215px] mx-auto px-4 font-plus-jakarta-sans mb-12">
            <div class="h-full text-center max-w-full mx-auto flex flex-col justify-center items-center">
                <h1 class="lg:text-[48px] text-[32px] text-[#002B44] font-medium">Ready To Transform Your Brand?</h1>
                <p
                    class="max-w-lg md:max-w-3xl xl:max-w-4xl mx-auto leading-loose font-normal mt-2 lg:text-[20px] text-[16px]">
                    Unlock the potential of your brand with HiSocial. Let's collaborate and create a brand identity that
                    leaves a lasting impact. Contact us today to get started.</p>
                <button
                    class="lg:mt-12 flex px-8 items-center justify-center mt-6  h-[40px] w-[263px] lg:h-[61px] bg-[#008FFF] hover:bg-blue-600 text-white shadow-3xl rounded-full shadow-blue-400 lg:text-[20px]">Get
                    Started <img class="ml-4" src="assets/icons/arrow-bg.svg" alt=""></button>
            </div>
        </section>
        <!-- End Transform -->
@endsection
