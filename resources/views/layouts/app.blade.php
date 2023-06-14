<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css"
        integrity="sha512-t4GWSVZO1eC8BM339Xd7Uphw5s17a86tIZIj8qRxhnKub6WoyhnrxeCIMeAqBPgdZGlCcG2PrZjMc+Wr78+5Xg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div class="app">
        <header>
            <div class="container">
                <div class="header-wrap">
                    <div class="logo">
                        <a href="#">
                            <img src="https://preview.colorlib.com/theme/confer/img/core-img/logo.png" alt="">
                        </a>
                    </div>
                    <ul class="menu">
                        <li>
                            <a href="#">HOME</a>
                        </li>
                        <li>
                            <a href="#">ABOUT</a>
                        </li>
                        <li>
                            <a href="#">TEAM
                            </a>

                        </li>
                        <li>
                            <a href="#">CONTACT</a>
                        </li>
                    </ul>
                    <div class="menu-mobile">
                        <div class="menu-icon">
                            <i class="fa-solid fa-bars"></i>
                        </div>
                        <div class="overlay"></div>
                        <div class="menu-mobile-wrap">
                            <div class="close-icon">
                                <i class="fa-solid fa-xmark"></i>
                            </div>
                            <ul>
                                <li>
                                    <a href="#">HOME</a>
                                </li>
                                <li>
                                    <a href="#">ABOUT</a>
                                </li>
                                <li>
                                    <a href="#">BLOG
                                    </a>

                                </li>
                                <li>
                                    <a href="#">CONTACT</a>
                                </li>
                                <li>
                                    <a href="#">SERVICE</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        @yield('content')
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-12">
                        <div class="footer__logo">
                            <img src="https://preview.colorlib.com/theme/confer/img/core-img/logo.png" alt="">
                        </div>
                        <div class="footer__slogan">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas
                            praesentium rem sunt, accusantium doloribus ipsa ea tempore ab
                            delectus, error maiores aperiam! Nam sit consequatur animi
                            voluptatem. Voluptatum, delectus possimus?
                        </div>
                    </div>
                    <div class="col-md-3 col-12">
                        <div class="footer__title">
                            <h3>Workshops</h3>
                        </div>
                        <div class="footer__list">
                            <ul>
                                <li><a href="#">OSHA Compliance</a></li>
                                <li><a href="#">OSHA Compliance</a></li>
                                <li><a href="#">OSHA Compliance</a></li>
                                <li><a href="#">OSHA Compliance</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-12">
                        <div class="footer__title">
                            <h3>Contact</h3>
                        </div>
                        <div class="footer__list">
                            <ul>
                                <li><a href="#">OSHA Compliance</a></li>
                                <li><a href="#">OSHA Compliance</a></li>
                                <li><a href="#">OSHA Compliance</a></li>
                                <li><a href="#">OSHA Compliance</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-12">
                        <div class="footer__title">
                            <h3>Contact</h3>
                        </div>
                        <div class="footer__map">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.778169771149!2d105.78633311464596!3d21.041560192717686!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab36a57a4489%3A0x3c250a8f357e81de!2zOSBQLiBUcuG6p24gUXXhu5FjIEhvw6BuLCBE4buLY2ggVuG7jW5nIEjhuq11LCBD4bqndSBHaeG6pXksIEjDoCBO4buZaSAxMDAwMDAsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1679929926559!5m2!1svi!2s"
                                width="600" height="300" style="border: 0" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        const menuMobileWrap = document.querySelector('.menu-mobile-wrap');
        const menuMobile = document.querySelector('.menu-mobile');
        const hambugerIcon = document.querySelector('.menu-icon');
        const closeIcon = document.querySelector('.close-icon');
        const overlay = document.querySelector('.menu-mobile .overlay');
        hambugerIcon.onclick = () => {
            menuMobile.classList.add('active');
            menuMobileWrap.classList.add('active');
        }
        closeIcon.onclick = () => {
            menuMobile.classList.remove('active');
            menuMobileWrap.classList.remove('active');
        }
        overlay.onclick = () => {
            menuMobile.classList.remove('active');
            menuMobileWrap.classList.remove('active');
        }
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 0,
            nav: false,
            items: 1,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: true
        })
    </script>
    @if (session('status'))
        <script>
            Swal.fire("Success!!!!", "{{ session('status') }}", "success");
        </script>
    @endif
</body>

</html>
