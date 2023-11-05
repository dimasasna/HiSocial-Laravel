<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <link rel="shortcut icon" href="assets/img/logo-hisocial.png">
    <link href="https://fonts.cdnfonts.com/css/cabinet-grotesk" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
        @vite('resources/css/app.css')
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
