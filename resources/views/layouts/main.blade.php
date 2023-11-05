<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <link href="https://fonts.cdnfonts.com/css/cabinet-grotesk" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            extend: {
                colors: {
                    'white': '#fff',
                    'pb-normal-active': '#012033',
                    'pb-draker': '#000e16',
                    'p-normal': '#008fff',
                    'p-dark-hover': '#004073',
                },
                fontFamily: {
                    "plus-jakarta-sans": "Plus Jakarta Sans",
                    "inter": "Inter",
                    "CabinetGrotesk-Regular": "CabinetGrotesk-Regular",
                    "CabinetGrotesk-Medium": "CabinetGrotesk-Medium",
                    "CabinetGrotesk-Bold": "CabinetGrotesk-Bold",
                    "CabinetGrotesk-Extrabold": "CabinetGrotesk-Extrabold",
                },
                dropShadow: {
                    navbar: '0px 5px 20px rgba(0, 0, 0, 0.17)',
                    card: '-5px 6px 22px rgba(0, 0, 0, 0.25)'
                }
            }
        }
    </script>

    <style type="text/tailwindcss">
        @layer base {

            h1,
            h2,
            h3,
            h4,
            h5,
            h6 {
                font-family: 'CabinetGrotesk-Medium', sans-serif;
            }

            p,
            a,
            span,
            li {
                font-family: 'Inter', sans-serif;
            }

            button {
                font-weight: 700;
            }


        @font-face {
            font-family: 'CabinetGrotesk-Regular';
            src: url('./fonts/CabinetGrotesk-Regular.woff2') format('woff2'),
                url('./fonts/CabinetGrotesk-Regular.woff') format('woff'),
                url('./fonts/CabinetGrotesk-Regular.ttf') format('truetype');
            font-weight: 400;
            font-display: swap;
            font-style: normal;
        }

        @font-face {
            font-family: 'CabinetGrotesk-Medium';
            src: url('./fonts/CabinetGrotesk-Medium.woff2') format('woff2'),
                url('./fonts/CabinetGrotesk-Medium.woff') format('woff'),
                url('./fonts/CabinetGrotesk-Medium.ttf') format('truetype');
            font-weight: 500;
            font-display: swap;
            font-style: normal;
        }

        @font-face {
            font-family: 'CabinetGrotesk-Bold';
            src: url('./fonts/CabinetGrotesk-Bold.woff2') format('woff2'),
                url('./fonts/CabinetGrotesk-Bold.woff') format('woff'),
                url('./fonts/CabinetGrotesk-Bold.ttf') format('truetype');
            font-weight: 700;
            font-display: swap;
            font-style: normal;
        }

        @font-face {
            font-family: 'CabinetGrotesk-Extrabold';
            src: url('./fonts/CabinetGrotesk-Extrabold.woff2') format('woff2'),
                url('./fonts/CabinetGrotesk-Extrabold.woff') format('woff'),
                url('./fonts/CabinetGrotesk-Extrabold.ttf') format('truetype');
            font-weight: 800;
            font-display: swap;
            font-style: normal;
        }
    }
    @layer components {
            .input {
                @apply py-3 px-3 text-sm text-white placeholder:text-white outline-none bg-[#2563EB] border rounded-lg
            }
            .btn-outline {
                @apply bg-white border border-blue-500 text-blue-500 px-3 py-2 ;
            }
            .btn-blue {
                @apply bg-blue-500 px-4 py-3  hover:bg-blue-600 active:bg-blue-700 text-white;
            }
            .btn-dark {
                @apply bg-blue-500 px-4 py-3  hover:bg-blue-600 active:bg-blue-700 text-white;
            }
            .btn-yellow {
                @apply bg-yellow-500 px-3 py-3  hover:bg-yellow-600 active:bg-yellow-700 text-white;
            }
            .btn-white {
                @apply bg-white px-3 py-3  hover:bg-gray-100 active:bg-gray-200;
            }
            .liquid-after {
                @apply after:absolute after:content-[''] after:w-[140px]  after:rounded-br-[24%] after:-rotate-[12deg] after:h-[140px] after:shadow-[10px_60px_0px_rgba(0,143,255,1)] after:right-[176px] after:-bottom-[15px]
            }
            .liquid-before {
                @apply before:absolute before:content-[''] before:w-[140px]  before:rounded-br-[24%] before:rotate-[12deg] before:h-[140px] before:shadow-[60px_10px_0px_rgba(0,143,255,1)] before:-right-[15px] before:bottom-[176px] before:z-10
            }
        }
    </style>
</head>

<body>
    @include('partials.navbar')

    @yield('container')

    @include('partials.footer')

    <script src="js/index.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script type="module">
        const swiper = new Swiper('.swiper', {
            spaceBetween: 50,
            loop: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                767: {
                    slidesPerView: 2
                }
            },
        });

        function handleResponsiveLayout() {
            if (window.innerWidth < 1024) {
                // Layar berukuran 768px atau lebih kecil
                $(".price").hide();
                $("#hisilver").show();
                $("#button-silver").addClass("bg-[#008FFF]");
                $("#button-silver").addClass("text-white");
                $(".section-button").click(function() {
                    var target = $(this).data("target");
                    $(".price").hide();
                    $(".section-button").removeClass("bg-[#008FFF]");
                    $(".section-button").removeClass("text-white");
                    $("#" + target).show();
                    $(this).addClass("bg-[#008FFF]");
                    $(this).addClass("text-white");
                });
            } else {
                // Layar lebih besar dari 768px
                $(".price").show();
                $(".section-button").off("click"); // Menghapus event click pada tombol
                // Reset tampilan tombol
                $(".section-button").removeClass("bg-[#008FFF]");
                $(".section-button").removeClass("text-white");
            }
        }

        document.addEventListener("DOMContentLoaded", function() {
            handleResponsiveLayout(); // Jalankan fungsi saat halaman dimuat

            // Tambahkan event listener untuk menangani perubahan ukuran layar
            window.addEventListener("resize", function() {
                handleResponsiveLayout();
            });
        });
    </script>
</body>

</html>
