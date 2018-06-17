<!DOCTYPE html>
<html lang="en">
<head>
    <title>Отдельная страница</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
    <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="styles/single_listing_styles.css">
    <link rel="stylesheet" type="text/css" href="styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="styles/single_listing_responsive.css">
</head>

<body>

<div class="super_container">

    <!-- Header -->

    <header class="header">

        <!-- Top Bar -->

        <div class="top_bar">
            <div class="container">
                <div class="row">
                    <div class="col d-flex flex-row">
                        <div class="phone">+7 702 511 30 08</div>
                        <div class="social">
                            <ul class="social_list">
                                <li class="social_list_item"><a href="#"><i class="fa fa-instagram" aria-hidden="true">&nbsp;&nbsp;@domiki_borovoe_2018</i></a></li>
                            </ul>
                        </div>
                        <div class="user_box ml-auto">
                            @guest
                            <div class="user_box_login user_box_link"><a href="/login">Вход</a></div>
                            <div class="user_box_register user_box_link"><a href="/register">Регистрация</a></div>
                            @else
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }} <span class="caret"></span>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                </ul>
                                @endguest
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Navigation -->

        <nav class="main_nav">
            <div class="container">
                <div class="row">
                    <div class="col main_nav_col d-flex flex-row align-items-center justify-content-start">
                        <div class="logo_container">
                            <div class="logo"><a href="#"><img src="images/logo1.png" alt=""></a></div>
                        </div>
                        <div class="main_nav_container ml-auto">
                            <ul class="main_nav_list">
                                <li class="main_nav_item"><a href="/">Басты бет</a></li>
                                <li class="main_nav_item"><a href="/about">Біз туралы</a></li>
                                <li class="main_nav_item"><a href="/offers">Бөлмелер</a></li>
                                <li class="main_nav_item"><a href="/gallary">Галерея</a></li>
                                <li class="main_nav_item"><a href="/contact">Контакт</a></li>
                            </ul>
                        </div>

                        <div class="hamburger">
                            <i class="fa fa-bars trans_200"></i>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

    </header>

    <div class="menu trans_500">
        <div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
            <div class="menu_close_container"><div class="menu_close"></div></div>
            <ul>
                <li class="menu_item"><a href="#">Главная</a></li>
                <li class="menu_item"><a href="about.html">О нас</a></li>
                <li class="menu_item"><a href="offers.html">Предложения</a></li>
                <li class="menu_item"><a href="#">Галерея</a></li>
                <li class="menu_item"><a href="contact.html">Контакт</a></li>
            </ul>
        </div>
    </div>

    <!-- Home -->

    <div class="home">
        <div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/main-bg.jpg"></div>
        <div class="home_content">
            <div class="home_title">Коттедж</div>
        </div>
    </div>


    <!-- Offers -->

    <div class="listing">

        <!-- Single Listing -->

        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="single_listing">

                        <!-- Hotel Info -->

                        <div class="hotel_info">

                            <!-- Title -->
                            <div class="hotel_title_container d-flex flex-lg-row flex-column">
                                <div class="hotel_title_content">
                                    <h1 class="hotel_title">Коттедж</h1>
                                    <div class="rating_r rating_r_4 hotel_rating">
                                        <i></i>
                                        <i></i>
                                        <i></i>
                                        <i></i>
                                        <i></i>
                                    </div>
                                </div>
                            </div>

                            <!-- Listing Image -->

                            <div class="hotel_image">
                                <img src="images/cottage/3.jpg" alt="">
                                <div class="hotel_review_container d-flex flex-column align-items-center justify-content-center">
                                    <div class="hotel_review">
                                        <div class="hotel_review_content">
                                            <div class="hotel_review_title">Очень хорошо</div>
                                            <div class="hotel_review_subtitle">100 просмотров</div>
                                        </div>
                                        <div class="hotel_review_rating text-center">4</div>
                                    </div>
                                </div>
                            </div>

                            <!-- Hotel Gallery -->

                            <div class="hotel_gallery">
                                <div class="hotel_slider_container">
                                    <div class="owl-carousel owl-theme hotel_slider">

                                        <!-- Hotel Gallery Slider Item -->
                                        <div class="owl-item">
                                            <a class="colorbox cboxElement" href="images/cottage/1.jpg">
                                                <img src="images/cottage/1.jpg" alt="https://unsplash.com/@jbriscoe">
                                            </a>
                                        </div>

                                        <!-- Hotel Gallery Slider Item -->
                                        <div class="owl-item">
                                            <a class="colorbox cboxElement" href="images/cottage/2.jpg">
                                                <img src="images/cottage/2.jpg" alt="https://unsplash.com/@grovemade">
                                            </a>
                                        </div>

                                        <!-- Hotel Gallery Slider Item -->
                                        <div class="owl-item">
                                            <a class="colorbox cboxElement" href="images/cottage/3.jpg">
                                                <img src="images/cottage/3.jpg" alt="https://unsplash.com/@fransaraco">
                                            </a>
                                        </div>

                                        <!-- Hotel Gallery Slider Item -->
                                        <div class="owl-item">
                                            <a class="colorbox cboxElement" href="images/cottage/4.jpg">
                                                <img src="images/cottage/4.jpg" alt="https://unsplash.com/@workweek">
                                            </a>
                                        </div>

                                        <!-- Hotel Gallery Slider Item -->
                                        <div class="owl-item">
                                            <a class="colorbox cboxElement" href="images/cottage/5.jpg">
                                                <img src="images/cottage/5.jpg" alt="https://unsplash.com/@workweek">
                                            </a>
                                        </div>

                                        <!-- Hotel Gallery Slider Item -->
                                        <div class="owl-item">
                                            <a class="colorbox cboxElement" href="images/cottage/6.jpg">
                                                <img src="images/cottage/6.jpg" alt="https://unsplash.com/@avidenov">
                                            </a>
                                        </div>

                                        <!-- Hotel Gallery Slider Item -->
                                        <div class="owl-item">
                                            <a class="colorbox cboxElement" href="images/cottage/7.jpg">
                                                <img src="images/cottage/7.jpg" alt="https://unsplash.com/@pietruszka">
                                            </a>
                                        </div>

                                        <!-- Hotel Gallery Slider Item -->
                                        <div class="owl-item">
                                            <a class="colorbox cboxElement" href="images/cottage/8.jpg">
                                                <img src="images/cottage/8.jpg" alt="https://unsplash.com/@rktkn">
                                            </a>
                                        </div>

                                        <!-- Hotel Gallery Slider Item -->
                                        <div class="owl-item">
                                            <a class="colorbox cboxElement" href="images/cottage/9.jpg">
                                                <img src="images/cottage/9.jpg" alt="https://unsplash.com/@mindaugas">
                                            </a>
                                        </div>
                                    </div>

                                    <!-- Hotel Slider Nav - Prev -->
                                    <div class="hotel_slider_nav hotel_slider_prev">
                                        <svg version="1.1" id="Layer_6" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                             width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
											<defs>
                                                <linearGradient id='hotel_grad_prev'>
                                                    <stop offset='0%' stop-color='#fa9e1b'/>
                                                    <stop offset='100%' stop-color='#8d4fff'/>
                                                </linearGradient>
                                            </defs>
                                            <path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
											M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
											C22.545,2,26,5.541,26,9.909V23.091z"/>
                                            <polygon class="nav_arrow" fill="#F3F6F9" points="15.044,22.222 16.377,20.888 12.374,16.885 16.377,12.882 15.044,11.55 9.708,16.885 11.04,18.219
											11.042,18.219 "/>
										</svg>
                                    </div>

                                    <!-- Hotel Slider Nav - Next -->
                                    <div class="hotel_slider_nav hotel_slider_next">
                                        <svg version="1.1" id="Layer_7" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                             width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
											<defs>
                                                <linearGradient id='hotel_grad_next'>
                                                    <stop offset='0%' stop-color='#fa9e1b'/>
                                                    <stop offset='100%' stop-color='#8d4fff'/>
                                                </linearGradient>
                                            </defs>
                                            <path class="nav_path" fill="#F3F6F9" d="M19,0H9C4.029,0,0,4.029,0,9v15c0,4.971,4.029,9,9,9h10c4.97,0,9-4.029,9-9V9C28,4.029,23.97,0,19,0z
										M26,23.091C26,27.459,22.545,31,18.285,31H9.714C5.454,31,2,27.459,2,23.091V9.909C2,5.541,5.454,2,9.714,2h8.571
										C22.545,2,26,5.541,26,9.909V23.091z"/>
                                            <polygon class="nav_arrow" fill="#F3F6F9" points="13.044,11.551 11.71,12.885 15.714,16.888 11.71,20.891 13.044,22.224 18.379,16.888 17.048,15.554
										17.046,15.554 "/>
										</svg>
                                    </div>

                                </div>
                            </div>

                            <!-- Hotel Info Text -->

                            <div class="hotel_info_text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu convallis tortor. Suspendisse potenti. In faucibus massa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam eu convallis tortor. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus quis vulputate eros, iaculis consequat nisl. Nunc et suscipit urna. Integer elementum orci eu vehicula pretium. Donec bibendum tristique condimentum. Aenean in lacus ligula. Phasellus euismod gravida eros. Aenean nec ipsum aliquet, pharetra magna id, interdum sapien. Etiam id lorem eu nisl pellentesque semper. Nullam tincidunt metus placerat, suscipit leo ut, tempus nulla. Fusce at eleifend tellus. Ut eleifend dui nunc, non fermentum quam placerat non. Etiam venenatis nibh augue, sed eleifend justo tristique eu</p>
                            </div>

                            <!-- Hotel Info Tags -->

                            <div class="hotel_info_tags">
                                <ul class="hotel_icons_list">
                                    <li class="hotel_icons_item"><img src="images/post.png" alt=""></li>
                                    <li class="hotel_icons_item"><img src="images/compass.png" alt=""></li>
                                    <li class="hotel_icons_item"><img src="images/bicycle.png" alt=""></li>
                                    <li class="hotel_icons_item"><img src="images/sailboat.png" alt=""></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->

    <footer class="footer">
        <div class="container">
            <div class="row">

                <!-- Footer Column -->
                <div class="col-lg-3 footer_column">
                    <div class="footer_col">
                        <div class="footer_content footer_about">
                            <div class="logo_container footer_logo">
                                <div class="logo"><a href="#"><img src="images/logo1.png" alt=""></a></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Footer Column -->
                <div class="col-lg-3 footer_column">
                    <div class="footer_col">
                        <div class="footer_title">Наши контакты</div>
                        <div class="footer_content footer_contact">
                            <ul class="contact_info_list">
                                <li class="contact_info_item d-flex flex-row">
                                    <div><div class="contact_info_icon"><img src="images/placeholder.svg" alt=""></div></div>
                                    <div class="contact_info_text">Боровое, ул. Обозная 14</div>
                                </li>
                                <li class="contact_info_item d-flex flex-row">
                                    <div><div class="contact_info_icon"><img src="images/phone-call.svg" alt=""></div></div>
                                    <div class="contact_info_text">+7 702 511 30 08</div>
                                </li>
                                <li class="contact_info_item d-flex flex-row">
                                    <div><div class="contact_info_icon"><img src="images/instagram.png" alt=""></div></div>
                                    <div class="contact_info_text"><a href="#" target="_top">@domiki_borovoe_2018</a></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </footer>

    <!-- Copyright -->

    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 order-lg-1 order-2  ">
                    <div class="copyright_content d-flex flex-row align-items-center">
                        <div>
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved</div>
                    </div>
                </div>
                <div class="col-lg-9 order-lg-2 order-1">
                    <div class="footer_nav_container d-flex flex-row align-items-center justify-content-lg-end">
                        <div class="footer_nav">
                            <ul class="footer_nav_list">
                                <li class="footer_nav_item"><a href="#">Главная</a></li>
                                <li class="footer_nav_item"><a href="about.html">О нас</a></li>
                                <li class="footer_nav_item"><a href="offers.html">Предложения</a></li>
                                <li class="footer_nav_item"><a href="#">Галерея</a></li>
                                <li class="footer_nav_item"><a href="contact.html">Контакт</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="plugins/colorbox/jquery.colorbox-min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="js/single_listing_custom.js"></script>

</body>

</html>