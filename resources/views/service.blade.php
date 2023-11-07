@extends('layouts.main')

@section('container')

 <!-- Hero -->
<div class="relative w-[100vw-1px] h-[calc(100vh-74px)] lg:h-screen mx-auto lg:mb-[200px] ">
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
    <div class="relative inset-x-0 -top-[16%] lg:-top-[20%] w-full h-auto overflow-hidden z-30">
        <img src="assets/img/service/element.svg" class="w-full h-auto scale-150 lg:scale-100" alt="element">
    </div>
</div>
<!-- Akhir Hero -->

<!-- Filter -->
<section class="max-w-[1215px] mx-auto mt-4  px-4 lg:px-0">
    <div class="flex lg:flex-row flex-col justify-center items-center gap-4">
        <p class="lg:w-[60%] lg:leading-loose tracking-wide">Many of our design projects are dedicated to a company or individual, by helping and
            providing needs for them, making us understand that a design has a sense so that users feel comfortable
            and interested in buying it.</p>
        <div class="lg:w-[30%] flex justify-end items-end lg:gap-6 gap-2 mt-4 lg:mt-0">
            <button
                class="w-full left-0 bg-[#008FFF] rounded-[10px] h-[55px]  text-white text-[22px] font-thin  hover:bg-blue-600">Social
                Media Management</button>
            <div
                class="w-[59px] h-[55px] bg-[#D9EEFF] flex justify-center items-center rounded-[8px] cursor-pointer hover:bg-slate-200">
                <img src="assets/icons/Vector.svg" alt=""></div>
        </div>
    </div>
</section>
<!-- End Filter -->

<!-- Social Media Management -->
<section class="max-w-[1215px] mx-auto mt-8 lg:mt-16 px-4 lg:px-0">
    <h1 class="text-center text-[#008FFF] text-[32px] lg:text-[50px] font-semibold">Social Media <span
            class="text-black">Management</span></h1>
    <div class="flex flex-col lg:flex-row lg:mt-8 mt-4 gap-4">
        <div class="lg:w-[55%] w-full flex-col flex gap-4 h-full">
            <div class="flex flex-row bg-white shadow-[0_3px_10px_rgb(0,0,0,0.2)] rounded-[10px] p-4">
                <div class="flex justify-center items-center w-[30%] lg:w-[15%]">
                    <img class="" src="assets/icons/mediation.svg" alt="">
                </div>
                <div class="w-[85%]">
                    <h1 class="text-[#008FFF] text-[18px] lg:text-[20px]">Increased Engagement</h1>
                    <p class="text-[14px] lg:text-[16px]">We will assist in increased engagement so as to improve
                        overall experience, motivation,
                        learning, relationships and performance.</p>
                </div>
            </div>
            <div class="flex flex-row bg-white shadow-[0_3px_10px_rgb(0,0,0,0.2)] rounded-[10px] p-4 ">
                <div class="flex justify-center items-center w-[30%] lg:w-[15%] ">
                    <img class="" src="assets/icons/BrandAwareness.svg" alt="">
                </div>
                <div class="w-[85%]">
                    <h1 class="text-[#008FFF] text-[18px] lg:text-[20px]">Brand Awareness</h1>
                    <p class="text-[14px] lg:text-[16px]">Increase your sensitivity to brand awarnes, so you can
                        Strengthen positive image, Increase
                        consumer loyalty, Facilitate decision making, Assist in marketing, Increased brand value,
                        Ease of product expansion, Better competitiveness.</p>
                </div>
            </div>
            <div class="flex flex-row bg-white shadow-[0_3px_10px_rgb(0,0,0,0.2)] rounded-[10px] p-4">
                <div class="flex justify-center items-center w-[30%] lg:w-[15%]">
                    <img class="" src="assets/icons/AudienceGrowth.svg" alt="">
                </div>
                <div class="w-[85%]">
                    <h1 class="text-[#008FFF] text-[18px] lg:text-[20px]">Audience Growth</h1>
                    <p class="text-[14px] lg:text-[16px]">Our team will assist in the aspect of audience growth, so
                        as to increase brand awareness,
                        increase sales and expand the market.</p>
                </div>
            </div>
        </div>
        <div class="lg:w-[45%] mt-4 lg:mt-0 px-4 flex flex-col justify-start text-justify">
            <img class="w-full h-[200px] scale-x-[1.1] -mt-4" src="assets/img/service/social-service.png" alt="">
            <p class="lg:text-[18px] leading-relaxed tracking-wider mt-6"><span
                    class="border-t-4 pt-4 border-[#EDC700]">Our team of</span> experts will curate and manage your
                social media platforms to help you effectively engage with your target audience, increase brand
                awareness, and drive conversions.</p>
            <div class="w-full mt-6">
                <button
                    class="w-full mx-auto bg-[#008FFF] rounded-[37px] h-lg:[54px] h-[40px] text-white text-[22px] font-medium  hover:bg-blue-600">Learn
                    More</button>
            </div>
        </div>
    </div>
</section>
<!-- End Social Media Management -->

<!-- Portfolio -->
<section class="max-w-[1215px] mx-auto mt-28 px-4 lg:px-0">
    <div class="flex justify-between items-center">
        <h1 class="lg:text-[50px] text-[36px] text-[#008FFF] font-semibold">Portfolio</h1>
        <a href="" class="flex gap-4 border-b-2 border-[#EDC700] py-2 hover:opacity-50 lg:text-[20px] font-bold">
            <p>See More Portfolio</p> <img src="assets/icons/arrow-right-circle.svg" alt="">
        </a>
    </div>
    <div class="grid lg:grid-cols-2 grid-cols-1 w-full mt-4">
        <div class="flex lg:flex-row flex-col lg:-ml-4">
            <img class="scale-[1.15] lg:scale-100" src="assets/img/service/portfolio1.png" alt="">
            <div class="mt-4">
                <h1 class="text-[20px] font-semibold">Treets Traditional</h1>
                <p
                    class="text-[18px] mt-4 lg:leading-loose tracking-tight text-justify opacity-80 pb-10 border-b-4">
                    Our team of experts will curate and manage your social media platforms to help you effectively
                    engage with your target audience.</p>
            </div>
        </div>
        <div class="flex lg:flex-row flex-col">
            <img class="scale-[1.15] lg:scale-100" src="assets/img/service/portfolio2.png" alt="">
            <div class="mt-4">
                <h1 class="text-[20px] font-semibold">Jeni</h1>
                <p
                    class="text-[18px] mt-4 lg:leading-loose tracking-tight text-justify opacity-80 pb-10 border-b-4">
                    Our team of experts will curate and manage your social media platforms to help you effectively
                    engage with your target audience.</p>
            </div>
        </div>
        <div class="flex lg:flex-row flex-col lg:-ml-4">
            <img class="scale-[1.15] lg:scale-100" src="assets/img/service/portfolio3.png" alt="">
            <div class="mt-4">
                <h1 class="text-[20px] font-semibold">More Energy</h1>
                <p
                    class="text-[18px] mt-4 lg:leading-loose tracking-tight text-justify opacity-80 pb-10 border-b-4">
                    Our team of experts will curate and manage your social media platforms to help you effectively
                    engage with your target audience.</p>
            </div>
        </div>
        <div class="flex lg:flex-row flex-col">
            <img class="scale-[1.15] lg:scale-100" src="assets/img/service/portfolio4.png" alt="">
            <div class="mt-4">
                <h1 class="text-[20px] font-semibold">Facebk</h1>
                <p
                    class="text-[18px] mt-4 lg:leading-loose tracking-tight text-justify opacity-80 pb-10 border-b-4">
                    Our team of experts will curate and manage your social media platforms to help you effectively
                    engage with your target audience.</p>
            </div>
        </div>

    </div>
</section>
<!-- End Portfolio -->

<!-- Branding Identity Visual -->
<section class="max-w-[1215px] mx-auto mt-12 lg:mt-28 px-4 lg:px-0">
    <div class="flex lg:flex-row flex-col justify-between lg:items-center">
        <h1 class="lg:w-[50%] text-[38px] lg:text-[55px] text-[#002B44] font-semibold tracking-tight leading-tight">
            Branding <br><span class="text-[#008FFF]">Identity Visual</span></h1>
        <p class="lg:w-[50%]  lg:text-[20px] lg:leading-loose lg:tracking-wide mt-2 text-justify">We'll work closely
            with you to create a unique
            and visually appealing brand identity that resonates with your target market. From logo design to visual
            elements, we'll make sure your brand stands out.</p>
    </div>
    <div
        class="flex flex-col justify-center items-center mt-6 text-[20px] lg:text-[32px] font-semibold text-[#002B44] lg:leading-loose lg:tracking-wider">
        <h1>Why Branding Identity is Important?</h1>
        <div class="h-1 w-[200px] bg-[#EDC700]"></div>
    </div>
    <div class="grid lg:grid-cols-3 lg:mt-8 mt-4 gap-y-2 gap-x-4 text-justify">
        <div class="p-2">
            <div class="flex  text-[#008FFF] font-semibold">
                <img src="assets/icons/check-circle.svg" alt="">
                <h1 class="text-[18px] ml-4">Strengthen first impression</h1>
            </div>
            <p class="text-[14px] mt-4 leading-loose tracking-wide">The logo, colors, and visual design are the
                elements that potential customers see first.</p>
        </div>
        <div class="p-2">
            <div class="flex ] text-[#008FFF] font-semibold">
                <img src="assets/icons/check-circle.svg" alt="">
                <h1 class="text-[18px] ml-4">Differentiate from competitors</h1>
            </div>
            <p class="text-[14px] mt-4 leading-loose tracking-wide">In a crowded market, strong visual branding
                helps your brand to stand out and differentiate itself from competitors.</p>
        </div>
        <div class="p-2">
            <div class="flex ] text-[#008FFF] font-semibold">
                <img src="assets/icons/check-circle.svg" alt="">
                <h1 class="text-[18px] ml-4">Increase professional impression</h1>
            </div>
            <p class="text-[14px] mt-4 leading-loose tracking-wide">Strong visual branding reflects a professional
                image and convinces potential customers that your brand is a valuable choice.</p>
        </div>
        <div class="p-2">
            <div class="flex ] text-[#008FFF] font-semibold">
                <img src="assets/icons/check-circle.svg" alt="">
                <h1 class="text-[18px] ml-4">Support marketing strategies</h1>
            </div>
            <p class="text-[14px] mt-4 leading-loose tracking-wide">Strong visual branding provides a solid
                foundation for your marketing strategy.</p>
        </div>
        <div class="p-2">
            <div class="flex ] text-[#008FFF] font-semibold">
                <img src="assets/icons/check-circle.svg" alt="">
                <h1 class="text-[18px] ml-4">Increase customer loyalty</h1>
            </div>
            <p class="text-[14px] mt-4 leading-loose tracking-wide">With strong visual branding, customers will feel
                more connected to your brand and are more likely to become loyal customers.</p>
        </div>
        <div class="p-2 flex justify-center items-center">
            <button
                class="w-full mx-auto bg-[#008FFF] rounded-[37px] lg:h-[54px] h-[40px] text-white text-[22px] font-medium  hover:bg-blue-600">Learn
                More</button>
        </div>

    </div>
</section>
<!-- End Branding Identity Visual -->

<!-- Our Project Done -->
<section class="max-w-[1215px] mx-auto lg:mt-24 mt-12">
    <div class="flex flex-col justify-center items-center font-semibold">
        <h1 class="lg:text-[50px] text-[38px] text-[#008FFF]">Our Project Done</h1>
        <div class="h-1 w-[200px] bg-[#EDC700]"></div>
    </div>
    <div class="flex lg:flex-row flex-col gap-4 lg:mt-6 mt-4">
        <div>
            <img class="w-full" src="assets/img/service/project-service.png" alt="">
            <div class="px-6 text-justify">
                <h1 class="text-[32px] font-bold">Kinger</h1>
                <p class="leading-loose tracking-wide opacity-70 mt-4">Kinger is a fashion design company that also
                    makes soufenir for customer loyalty. We have been
                    working together since 2018 which has built the company's branding and significantly improved
                    the quality of product identity.</p>
                <a class="flex text-[#008FFF] gap-4 mt-4 font-bold hover:opacity-50" href="">
                    <p>View project</p><img src="assets/icons/arrow-blue.svg" alt="">
                </a>
            </div>
        </div>
        <div>
            <img class="w-full" src="assets/img/service/project-service.png" alt="">
            <div class="px-6 text-justify">
                <h1 class="text-[32px] font-bold">Kinger</h1>
                <p class="leading-loose tracking-wide opacity-70 mt-4">Kinger is a fashion design company that also
                    makes soufenir for customer loyalty. We have been
                    working together since 2018 which has built the company's branding and significantly improved
                    the quality of product identity.</p>
                <a class="flex text-[#008FFF] gap-4 mt-4 font-bold hover:opacity-50" href="">
                    <p>View project</p><img src="assets/icons/arrow-blue.svg" alt="">
                </a>
            </div>
        </div>
        <div>
            <img class="w-full" src="assets/img/service/project-service.png" alt="">
            <div class="px-6 text-justify">
                <h1 class="text-[32px] font-bold">Kinger</h1>
                <p class="leading-loose tracking-wide opacity-70 mt-4">Kinger is a fashion design company that also
                    makes soufenir for customer loyalty. We have been
                    working together since 2018 which has built the company's branding and significantly improved
                    the quality of product identity.</p>
                <a class="flex text-[#008FFF] gap-4 mt-4 font-bold hover:opacity-50" href="">
                    <p>View project</p><img src="assets/icons/arrow-blue.svg" alt="">
                </a>
            </div>
        </div>

    </div>
</section>
<!-- End Our Project Done -->

<!-- Logo & Branding Identity -->
<section class="max-w-[1215px] mx-auto lg:mt-28 mt-12 px-4 lg:px-0">
    <div class="flex flex-col justify-center items-center lg:text-center">
        <h1 class="lg:text-[60px] text-[38px] text-[#008FFF] font-semibold">Logo & Branding <span
                class="text-[#002B44]">Identity</span></h1>
        <p class="lg:text-[20px] max-w-[1018px] tracking-wide leading-loose text-justify lg:text-center">Stand out
            from the competition with a professionally
            designed logo and branding. Our team will create a unique logo that captures the essence of your brand,
            and will design complementary branding materials to reinforce your brand's image.</p>
    </div>
    <div class="flex justify-center items-center mt-6">
        <img class="w-full object-cover scale-x-[1.03]" src="assets/img/service/logobrandingidentity.png" alt="">
    </div>
    <div class="flex lg:flex-row flex-col mt-4  items-center gap-x-8">
        <p class="lg:text-[20px] tracking-wide leading-loose text-justify">logo branding is important because it
            helps with
            recognition,
            differentiation, brand identity, professionalism, and building brand loyalty. A well-designed logo can
            make a lasting and positive impact on a brand's success.</p>
        <button
            class="w-full mt-4 lg:mt-0 flex justify-center items-center gap-4 mx-auto bg-[#008FFF] rounded-[37px] h-[45px] lg:h-[54px] text-white text-[22px] font-medium  hover:bg-blue-600">View
            Portfolio <img src="assets/icons/arrow-right-circle-white.svg" alt=""></button>
    </div>
</section>
<!-- End Logo & Branding Identity -->

<!-- Website And System SLider -->
<section class=" mx-auto lg:mt-28 mt-12 px-4 lg:px-0">
    <div class="flex lg:flex-row flex-col justify-between lg:items-center max-w-[1215px] mx-auto">
        <h1
            class="lg:text-[60px] text-[38px] text-[#002B44] font-semibold tracking-normal leading-tight lg:w-[30%]">
            Website <br><span class="text-[#008FFF]">& </span>System</h1>
        <p class="lg:w-[70%] lg:text-[20px] leading-loose mt-2">Get a stunning and functional website that
            represents your
            brand and delivers an exceptional user experience. Our team will design and develop a custom website
            with seamless integrations and user-friendly navigation.</p>
    </div>
    <div class="swiper website-swiper max-w-[1536px] mx-auto mt-7 lg:mt-14 relative">
        <div class="swiper-wrapper relative">
            <div class="swiper-slide rounded-[20px]">
                <img src="assets/img/website-slide1.png" alt="">
            </div>
            <div class="swiper-slide rounded-[20px]">
                <img src="assets/img/website-slider2.png" alt="">
            </div>
            <div class="swiper-slide rounded-[20px]">
                <img src="assets/img/website-slider3.png" alt="">
            </div>
            <div class="swiper-slide rounded-[20px]">
                <img src="assets/img/website-slide1.png" alt="">
            </div>
            <div class="swiper-slide rounded-[20px]">
                <img src="assets/img/website-slider2.png" alt="">
            </div>
            <div class="swiper-slide rounded-[20px]">
                <img src="assets/img/website-slider3.png" alt="">
            </div>
        </div>
        <div
            class="swiper-button-next rounded-full md:bg-[#EDC700] md:text-white text-[12px] md:h-[75px] md:w-[75px] z-30">
        </div>
        <div class="swiper-button-prev rounded-full md:bg-[#EDC700] md:text-white md:h-[75px] md:w-[75px] z-30">
        </div>
        <div
            class=" bg-white w-28 h-full blur-[40px] rounded-full z-20 opacity-100 absolute top-0 left-0 hidden lg:block">
        </div>
        <div
            class=" bg-white w-28 h-full blur-[40px] rounded-full z-20 opacity-100 absolute top-0 right-0 hidden lg:block">
        </div>
    </div>
    <div class="flex lg:flex-row flex-col w-full lg:max-w-[1215px] mx-auto gap-10 mt-14">
        <div class="max-w-[700px]">
            <h1 class="lg:text-[34px] text-[28px] font-semibold">The Importance Of A Stunning And Functional Website
            </h1>
            <p class="lg:text-[20px] text-justify leading-relaxed mt-4">The combination of an easy-to-use interface
                and enhanced functionality allows users to easily access and utilize the features offered by the
                product or application. This enhances the overall user experience and makes the user more satisfied
                with the product.</p>
        </div>
        <div class="flex lg:justify-end justify-center items-center w-full ">
            <button
                class="w-[306px] lg:mt-10 flex justify-center items-center gap-4  bg-[#008FFF] rounded-[37px] h-[45px] lg:h-[54px] text-white text-[22px] font-medium  hover:bg-blue-600">Explore
                Our Project <img src="assets/icons/arrow-right-circle-white.svg" alt=""></button>
        </div>
    </div>
</section>
<!-- End Website And System SLider -->

<!-- Digital Marketing Strategy -->
<section class="max-w-[1215px] mx-auto mt-12 lg:mt-28 px-4 lg:px-0">
    <h1 class="lg:text-center text-[38px] lg:text-[60px] text-[#008FFF] font-semibold">Digital Marketing <span
            class="text-[#002B44]">Strategy</span></h1>
    <div class="flex lg:flex-row flex-col mt-6 gap-6">
        <img class="scale-[1.04]" src="assets/img/service/digitalmarketingstrategy.png" alt="">
        <div class="lg:px-6 ">
            <p class="lg:text-[20px] leading-loose lg:tracking-wide text-justify">Our data-driven digital marketing
                strategies will help you reach your target audience, optimize your online presence, and achieve your
                business goals. We'll analyze your market, competitors, and target audience to create tailored
                strategies.</p>
            <button
                class="w-[306px] mt-5 lg:mt-10 mx-auto lg:mx-0 flex justify-center items-center gap-4  bg-[#008FFF] rounded-[37px] h-[45px] lg:h-[54px] text-white text-[22px] font-medium  hover:bg-blue-600">Explore
                Our Project <img src="assets/icons/arrow-right-circle-white.svg" alt=""></button>
        </div>
    </div>
    <p class="text-center lg:text-[20px] my-10">We Provide A Complete Package With A Comprehensive Digital Marketing
        Strategy On Offer:</p>
    <div class="w-full lg:h-80 h-auto bg-[#E6EAEC] rounded-[20px] p-10 flex lg:flex-row flex-col">
        <div class="w-full h-full flex flex-col justify-center item-center lg:gap-y-12 gap-y-4">
            <div class="flex items-center gap-4 font-bold">
                <img src="assets/icons/check-circle-black.svg" alt="">
                <p>Search engine Optimization (SEO)</p>
            </div>
            <div class="flex  items-center  gap-4 font-bold ">
                <img src="assets/icons/check-circle-black.svg" alt="">
                <p>Content Marketing </p>
            </div>
            <div class="flex  items-center gap-4 font-bold ">
                <img src="assets/icons/check-circle-black.svg" alt="">
                <p>Mobile Marketing</p>
            </div>
        </div>
        <div class="w-full h-full flex flex-col justify-center item-center lg:gap-y-12 gap-y-4 mt-2">
            <div class="flex  items-center gap-4 font-bold">
                <img src="assets/icons/check-circle-black.svg" alt="">
                <p>Search engine Marketing (SEM)</p>
            </div>
            <div class="flex  items-center gap-4 font-bold">
                <img src="assets/icons/check-circle-black.svg" alt="">
                <p>Email Marketing</p>
            </div>
            <div class="flex items-center gap-4 font-bold">
                <img src="assets/icons/check-circle-black.svg" alt="">
                <p>Video Marketing</p>
            </div>
        </div>
        <div class="w-full h-full flex flex-col justify-center item-center lg:gap-y-12 gap-y-4 mt-2">
            <div class="flex  items-center gap-4 font-bold">
                <img src="assets/icons/check-circle-black.svg" alt="">
                <p>Data Analytics And Performance Measurement</p>
            </div>
            <div class="flex  items-center gap-4 font-bold">
                <img src="assets/icons/check-circle-black.svg" alt="">
                <p>Influencer Marketing</p>
            </div>
            <div class="flex  items-center gap-4 font-bold">
                <img src="assets/icons/check-circle-black.svg" alt="">
                <p>Social Media Marketing</p>
            </div>
        </div>
    </div>
</section>
<!-- End Digital Marketing Strategy -->

<!-- Contact Admin -->
<section class="max-w-[1215px] mx-auto mt-8 px-4 lg:px-0">
    <div class="w-full rounded-[20px]  bg-[#002B4C] text-white relative">
        <div
            class="h-full w-[221px] bg-[#187CFF] z-0 right-0 absolute rounded-l-[100px] object-cover rounded-r-[20px] hidden lg:block">
        </div>
        <div class="flex flex-col lg:flex-row z-10 relative lg:p-12 px-12 py-6">
            <h1 class="text-[16px] lg:text-[25px] text-center lg:text-left lg:w-[50%] w-full font-medium">
                Confused about determining the program according to your
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
