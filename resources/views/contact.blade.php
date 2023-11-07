@extends('layouts.main')

@section('container')

 <!-- Hero -->
 <div class="w-full px-5 lg:px-32 xl:px-0 pt-4 pb-8 lg:pt-8 lg:py-8">
    <div class="max-w-[1215px] w-full mx-auto">
        <div class="lg:flex lg:gap-14 lg:items-center space-y-10 lg:space-y-0">
            <div class="lg:flex-[32%] xl:flex-[36%] ">
                <div class="lg:w-full h-[340px] xl:h-[410px] rounded-2xl overflow-hidden shadow-[0px_8px_0px_0px_rgba(0,143,255,1)] lg:shadow-[8px_8px_0px_4px_rgba(0,143,255,1)]">
                    <img src="./assets/img/hero-contact-us.png" class="w-[417px] h-[410px] object-cover object-center " alt="gambar">
                </div>
            </div>
            <div class="lg:flex-[68%] xl:flex-[64%] space-y-2 lg:space-y-4">
                <h1 class="relative text-3xl lg:text-5xl xl:text-6xl text-p-normal font-bold lg:leading-tight xl:leading-tight">We Are Ready To Help You</h1>
                <p class="font-normal leading-relaxed lg:leading-loose text-md lg:text-lg xl:text-xl">Consult Your Digital Marketing Needs With Us. Our Digital Marketing Team Will Be Ready To Provide Solutions To Achieve Your Business Goals.</p>
                <p class="pt-4 pb-2"><a href="" class="text-md lg:text-lg xl:text-xl font-semibold text-[#002B44]">Lets chat our marketing team</a></p>
                <button class="flex items-center gap-3 px-5 text-sm lg:text-base py-3 xl:px-6 xl:py-[14px] bg-[#0EAE39] font-normal text-white rounded-xl">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                        <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                    </svg>
                    Chat in Whatsapp
                </button>
            </div>
        </div>
    </div>
</div>
<!-- Akhir Hero -->

<!-- Contact -->
<div class="w-full px-5 lg:px-32 xl:px-0 py-8">
    <div class="max-w-[1180px] w-full mx-auto space-y-8">
        <div class="flex flex-col gap-8 lg:flex-row">
            <div class="flex-1 space-y-3 lg:space-y-6">
                <h1 class="text-lg lg:text-2xl xl:text-3xl">Socail Media</h1>
                <div class="text-[#595959] flex flex-wrap gap-3">
                    <button class="border-2 p-2 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi w-5 h-5 lg:w-6 lg:h-6 bi-twitter-x" viewBox="0 0 16 16">
                          <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865l8.875 11.633Z"/>
                        </svg>
                    </button>
                    <button class="border-2 p-2 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi w-5 h-5 lg:w-6 lg:h-6 bi-facebook" viewBox="0 0 16 16">
                          <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                        </svg>
                    </button>
                    <button class="border-2 p-2 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi w-5 h-5 lg:w-6 lg:h-6 bi-instagram" viewBox="0 0 16 16">
                          <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
                        </svg>
                    </button>
                    <button class="border-2 p-2 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi w-5 h-5 lg:w-6 lg:h-6 bi-github" viewBox="0 0 16 16">
                          <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
                        </svg>
                    </button>
                    <button class="border-2 p-2 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi w-5 h-5 lg:w-6 lg:h-6 bi-twitter" viewBox="0 0 16 16">
                            <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                        </svg>
                    </button>
                    <button class="border-2 p-2 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi w-5 h-5 lg:w-6 lg:h-6 bi-behance" viewBox="0 0 16 16">
                          <path d="M4.654 3c.461 0 .887.035 1.278.14.39.07.711.216.996.391.286.176.497.426.641.747.14.32.216.711.216 1.137 0 .496-.106.922-.356 1.242-.215.32-.566.606-.997.817.606.176 1.067.496 1.348.922.281.426.461.957.461 1.563 0 .496-.105.922-.285 1.278a2.317 2.317 0 0 1-.782.887c-.32.215-.711.39-1.137.496a5.329 5.329 0 0 1-1.278.176L0 12.803V3h4.654zm-.285 3.978c.39 0 .71-.105.957-.285.246-.18.355-.497.355-.887 0-.216-.035-.426-.105-.567a.981.981 0 0 0-.32-.355 1.84 1.84 0 0 0-.461-.176c-.176-.035-.356-.035-.567-.035H2.17v2.31c0-.005 2.2-.005 2.2-.005zm.105 4.193c.215 0 .426-.035.606-.07.176-.035.356-.106.496-.216s.25-.215.356-.39c.07-.176.14-.391.14-.641 0-.496-.14-.852-.426-1.102-.285-.215-.676-.32-1.137-.32H2.17v2.734h2.305v.005zm6.858-.035c.286.285.711.426 1.278.426.39 0 .746-.106 1.032-.286.285-.215.46-.426.53-.64h1.74c-.286.851-.712 1.457-1.278 1.848-.566.355-1.243.566-2.06.566a4.135 4.135 0 0 1-1.527-.285 2.827 2.827 0 0 1-1.137-.782 2.851 2.851 0 0 1-.712-1.172c-.175-.461-.25-.957-.25-1.528 0-.531.07-1.032.25-1.493.18-.46.426-.852.747-1.207.32-.32.711-.606 1.137-.782a4.018 4.018 0 0 1 1.493-.285c.606 0 1.137.105 1.598.355.46.25.817.532 1.102.958.285.39.496.851.641 1.348.07.496.105.996.07 1.563h-5.15c0 .58.21 1.11.496 1.396zm2.24-3.732c-.25-.25-.642-.391-1.103-.391-.32 0-.566.07-.781.176-.215.105-.356.25-.496.39a.957.957 0 0 0-.25.497c-.036.175-.07.32-.07.46h3.196c-.07-.526-.25-.882-.497-1.132zm-3.127-3.728h3.978v.957h-3.978v-.957z"/>
                        </svg>
                    </button>
                    <button class="border-2 p-2 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi w-5 h-5 lg:w-6 lg:h-6 bi-dribbble" viewBox="0 0 16 16">
                          <path fill-rule="evenodd" d="M8 0C3.584 0 0 3.584 0 8s3.584 8 8 8c4.408 0 8-3.584 8-8s-3.592-8-8-8zm5.284 3.688a6.802 6.802 0 0 1 1.545 4.251c-.226-.043-2.482-.503-4.755-.217-.052-.112-.096-.234-.148-.355-.139-.33-.295-.668-.451-.99 2.516-1.023 3.662-2.498 3.81-2.69zM8 1.18c1.735 0 3.323.65 4.53 1.718-.122.174-1.155 1.553-3.584 2.464-1.12-2.056-2.36-3.74-2.551-4A6.95 6.95 0 0 1 8 1.18zm-2.907.642A43.123 43.123 0 0 1 7.627 5.77c-3.193.85-6.013.833-6.317.833a6.865 6.865 0 0 1 3.783-4.78zM1.163 8.01V7.8c.295.01 3.61.053 7.02-.971.199.381.381.772.555 1.162l-.27.078c-3.522 1.137-5.396 4.243-5.553 4.504a6.817 6.817 0 0 1-1.752-4.564zM8 14.837a6.785 6.785 0 0 1-4.19-1.44c.12-.252 1.509-2.924 5.361-4.269.018-.009.026-.009.044-.017a28.246 28.246 0 0 1 1.457 5.18A6.722 6.722 0 0 1 8 14.837zm3.81-1.171c-.07-.417-.435-2.412-1.328-4.868 2.143-.338 4.017.217 4.251.295a6.774 6.774 0 0 1-2.924 4.573z"/>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="flex-1 space-y-3 lg:space-y-6">
                <h1 class="text-lg lg:text-2xl xl:text-3xl">Contact</h1>
                <ul class="text-[#252525] space-y-4">
                    <li class="flex gap-4 items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-envelope text-[#B0BCC4]" viewBox="0 0 16 16">
                          <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                        </svg>
                        hisocialagency@gmail.com
                    </li>
                    <li class="flex gap-4 items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-telephone text-[#B0BCC4]" viewBox="0 0 16 16">
                          <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                        </svg>
                        021 23456789
                    </li>
                </ul>
            </div>
        </div>
        <div class="space-y-3 lg:space-y-6">
            <h1 class="text-lg lg:text-2xl xl:text-3xl">Contact Us</h1>
            <form action="" class="w-full text-center space-y-4 lg:space-y-6">
                <section class="flex flex-col lg:flex-row gap-4 lg:gap-6 w-full">
                    <input
                        type="text"
                        class="flex-1 border lg:border-2 px-4 py-2 text-md lg:px-6 lg:py-3 xl:px-7 xl:py-4 rounded-lg focus:outline-blue-300"
                        placeholder="Name"
                    >
                    <input
                        type="text"
                        class="flex-1 border lg:border-2 px-4 py-2 text-md lg:px-6 lg:py-3 xl:px-7 xl:py-4 rounded-lg focus:outline-blue-300"
                        placeholder="Email"
                    >
                </section>
                <section class="flex flex-col lg:flex-row gap-4 lg:gap-6 w-full">
                    <input
                        type="text"
                        class="flex-1 border lg:border-2 px-4 py-2 text-md lg:px-6 lg:py-3 xl:px-7 xl:py-4 rounded-lg focus:outline-blue-300"
                        placeholder="Phone"
                    >
                    <input
                        type="text"
                        class="flex-1 border lg:border-2 px-4 py-2 text-md lg:px-6 lg:py-3 xl:px-7 xl:py-4 rounded-lg focus:outline-blue-300"
                        placeholder="Business Name"
                    >
                </section>
                <section class="flex flex-col lg:flex-row gap-4 lg:gap-6 w-full">
                    <input
                        type="text"
                        class="flex-1 border lg:border-2 px-4 py-2 text-md lg:px-6 lg:py-3 xl:px-7 xl:py-4 rounded-lg focus:outline-blue-300"
                        placeholder="Website/ Social Media"
                    >
                    <input
                        type="text"
                        class="flex-1 border lg:border-2 px-4 py-2 text-md lg:px-6 lg:py-3 xl:px-7 xl:py-4 rounded-lg focus:outline-blue-300"
                        placeholder="Where did you find us"
                    >
                </section>
                <textarea class="w-full min-h-[140px] lg:min-h-[280px] border lg:border-2 px-4 py-2 text-md lg:px-6 lg:py-3 xl:px-7 xl:py-4 rounded-lg focus:outline-blue-300" placeholder="Your Project Details"></textarea>
                <button class="btn-blue lg:text-lg xl:text-x px-10 py-3 l lg:px-14 lg:py-3 xl:px-16 xl:py-4 font-semibold bg-[#008FFF] rounded-full">Send Message</button>
            </form>
        </div>
    </div>
</div>
<!-- Akhir Contact -->

@endsection
