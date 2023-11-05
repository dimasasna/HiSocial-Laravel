@extends('layouts.main')

@section('container')
    <div class="max-w-[1920px] sm:max-w-full md:max-w-full lg:max-w-full xl:max-w-[1920px] mx-auto">

        <!-- Banner -->
        <section
            class="max-w-[1215px] mx-auto lg:mt-40 mt-[100px] md:w-10/12 font-plus-jakarta-sans gap-y-16 mb-24 grid grid-cols-1  md:gap-x-7 lg:mb-20 md:grid-cols-7 lg:gap-x-16 px-4 lg:px-0">
            <div class="order-last space-y-5 md:order-first lg:space-y-10 md:col-span-3">
                <h1 class="font-medium text-3xl md:text-left lg:text-6xl">Do New Things and Develop With us
                </h1>
                <p class="lg:text-xl">All of our dedication is done with heart and research so that our partners achieve
                    their company goals.</p>
                <button
                    class="text-white mt-5 lg:mt-10 bg-[#008FFF] hover:bg-blue-600 shadow-3xl rounded-[30px] shadow-blue-400 w-full h-[50px] lg:h-14 lg:w-[263px] flex justify-center items-center font-medium text-[20px]">Contact
                    Us<img class="ml-4" src="assets/icons/arrow-bg.svg" alt=""></button>
            </div>

            <div class="order-first flex justify-center items-center md:order-last md:col-span-4 ">
                <div class="flex justify-around relative z-30 w-full ">
                    <img src="assets/img/banner-about1.png" alt="about1"
                        class=" rounded-full  object-none object-center w-24 h-60 md:h-66 lg:w-[179px] lg:h-[402px]" />
                    <img src="assets/img/banner-about2.png" alt="about2"
                        class="mt-6   rounded-full  object-none w-24 h-60 md:h-66 lg:w-[179px] lg:h-[402px] lg:mt-10" />
                    <img src="assets/img/banner-about3.png" alt="about3"
                        class="  rounded-full  object-none w-24 h-60 md:h-66 lg:w-[179px] lg:h-[402px]" />
                </div>
                <div
                    class="rounded-full bg-sky-300 w-72 h-72 blur-[100px] z-0 opacity-70 absolute lg:h-[403px] lg:w-[703px]" />
            </div>
        </section>
        <!-- End Banner -->

        <!-- Vision -->
        <section class="max-w-[1215px] mx-auto lg:my-20 mt-8 px-4 lg:px-0">
            <div class="flex flex-col lg:flex-row gap-2">
                <div class="lg:w-[53%] w-full h-full">
                    <div class="grid grid-cols-2 gap-4">
                        <img class="w-full" src="assets/img/vision1.png" alt="">
                        <img class="w-full" src="assets/img/vision2.png" alt="">
                        <img class="w-full col-span-2" src="assets/img/vision3.png" alt="">
                    </div>
                </div>
                <div class="lg:w-[47%] w-full h-full lg:pl-8 py-8">
                    <h1
                        class="border-t-4 border-t-[#FFCE4F] inline text-[32px] lg:text-[50px] tracking-wide font-semibold pt-4">
                        Vision</h1>
                    <p class="text-[14px] lg:text-[20px] mt-4 font-thin tracking-wide leading-relaxed text-justify">
                        Empowering
                        businesses to thrive in the digital landscape by delivering innovative data-driven solutions and
                        being at the forefront of digital marketing and technology services</p>
                </div>
            </div>
        </section>
        <!-- End Vision -->

        <!-- Mision -->
        <section class="max-w-[1215px] mx-auto lg:my-20 lg:mt-8 px-4 lg:px-0">
            <div class="flex flex-col-reverse lg:flex-row gap-2">
                <div class="lg:w-[47%] w-full h-full py-8 pr-8">
                    <h1
                        class="border-t-4 border-t-[#FFCE4F] inline text-[32px] lg:text-[50px] tracking-wide font-semibold pt-4">
                        Mision</h1>
                    <p class="text-[14px] lg:text-[20px] mt-4 font-thin tracking-wide leading-relaxed text-justify">Our
                        mission is to
                        leverage cutting-edge technology and creative strategies to drive digital success for our
                        clients. By cultivating strategic partnerships and embracing constant innovation, we aim to
                        provide exceptional online experiences, enhance brand awareness, and maximize our clients'
                        digital reach and ROI.</p>
                </div>
                <div class="lg:w-[53%] w-full h-full  ">
                    <img src="assets/img/mision.png" alt="">
                </div>
            </div>
        </section>
        <!-- End Mision -->

        <!-- Meet Our Team -->
        <section class="max-w-[1215px] mx-auto lg:my-20 lg:mt-8 mt-6 px-4 lg:px-0">
            <div class="flex justify-center flex-col items-center">
                <h1 class="text-[32px] lg:text-[50px] leading-none font-bold">Meet Our Team</h1>
                <p class="lg:mt-8 mt-4 text-[14px] lg:text-[20px] text-center lg:w-[75%]">HiSocial Digital gives you
                    the satisfaction & components you need to create a website, landing page or social media management.
                </p>
            </div>
            <div class="flex flex-col items-center justify-center mt-8">
                <div class="shadow-[0_3px_10px_rgb(0,0,0,0.2)] lg:px-8 lg:py-3 p-3 rounded-[20px] mb-2 text-center">
                    <h1 class="text-[12px] lg:text-[16px] font-bold">Dodi Prakoso</h1>
                    <p class="font-thin text-[10px] lg:text-[14px] opacity-70">Co-Founder, CEO</p>
                </div>
                <img src="assets/img/List.png" alt="">
            </div>
        </section>
        <!-- End Meet Our Team -->

        <!-- Contact Admin -->
        <section class="max-w-[1215px] mx-auto mt-8 px-4 lg:px-0">
            <div class="w-full rounded-[20px]  bg-[#002B4C] text-white relative">
                <div
                    class="h-full w-[221px] bg-[#187CFF] z-0 right-0 absolute rounded-l-[100px] object-cover rounded-r-[20px] hidden lg:block">
                </div>
                <div class="flex flex-col lg:flex-row z-10 relative lg:p-12 px-12 py-6">
                    <h1 class="text-[16px] lg:text-[25px] text-center lg:text-left lg:w-[50%] w-full font-medium">Confused
                        about determining the program according to your
                        company's needs?</h1>
                    <div
                        class="lg:w-[50%] w-full flex justify-center mt-6 lg:mt-0 lg:justify-end mr-20 items-center text-black">
                        <button
                            class="bg-white hover:bg-slate-200 px-12 py-2 rounded-[74px] lg:text-[24px] font-medium">Contact
                            Admin</button>
                    </div>

                </div>

            </div>
        </section>
        <!-- End Contact Admin -->
    @endsection
