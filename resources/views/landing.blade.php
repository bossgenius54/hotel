<!DOCTYPE html>
<html lang="en">
<head>
    <title>Солнечный</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{asset('images/logo1.png')}}" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="{{asset('styles/bootstrap4/bootstrap.min.css')}}">
    <link href="{{asset('plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/OwlCarousel2-2.2.1/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('styles/main_styles.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('styles/responsive.css')}}">
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
                            <div class="user_box_login user_box_link"><a href="/login">Кіру</a></div>
                            <div class="user_box_register user_box_link"><a href="/register">Тіркелу</a></div>
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
                            <div class="logo"><a href="#"><img src="images/logo1.png" alt=""> </a></div>
                        </div>
                        <div class="main_nav_container ml-auto">
                            <ul class="main_nav_list">
                                <li class="main_nav_item"><a href="/">Басты бет</a></li>
                                <li class="main_nav_item"><a href="/about">Біз туралы</a></li>
                                <li class="main_nav_item"><a href="/offers">Бөлмелер</a></li>
                                <li class="main_nav_item"><a href="/blog">Жаңалықтар</a></li>
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
                <li class="menu_item"><a href="#">Басты бет</a></li>
                <li class="menu_item"><a href="about.html">Біз туралы</a></li>
                <li class="menu_item"><a href="offers.html">Бөлмелер</a></li>
                <li class="menu_item"><a href="#">Галерея</a></li>
                <li class="menu_item"><a href="contact.html">Контакт</a></li>
            </ul>
        </div>
    </div>

    <!-- Home -->

    <div class="home">

        <!-- Home Slider -->

        <div class="home_slider_container">

            <div class="owl-carousel owl-theme home_slider">
                <!-- Slider Item -->
                <div class="owl-item home_slider_item">
                    <div class="home_slider_background" style="background-image:url(images/main-bg2.jpg)"></div>

                    <div class="home_slider_content text-center">
                        <div class="home_slider_content_inner" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">
                            <h1>Солнечный</h1>
                            <div class="button home_slider_button"><div class="button_bcg"></div><a href="#bottom">Тапсырыс беру<span></span><span></span><span></span></a></div>
                        </div>
                    </div>
                </div>

                <!-- Slider Item -->
                <div class="owl-item home_slider_item">
                    <div class="home_slider_background" style="background-image:url(images/main-bg3.jpg)"></div>

                    <div class="home_slider_content text-center">
                        <div class="home_slider_content_inner" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">
                            <h1>Солнечный</h1>
                            <div class="button home_slider_button"><div class="button_bcg"></div><a href="./about.html">Ары қарай оқу<span></span><span></span><span></span></a></div>
                        </div>
                    </div>
                </div>

                <!-- Slider Item -->
                <div class="owl-item home_slider_item">
                    <div class="home_slider_background" style="background-image:url(images/main-bg1.jpg)"></div>

                    <div class="home_slider_content text-center">
                        <div class="home_slider_content_inner" data-animation-in="flipInX" data-animation-out="animate-out fadeOut">
                            <h1>Солнечный</h1>
                            <div class="button home_slider_button"><div class="button_bcg"></div><a href="./about.html">Ары қарай оқу<span></span><span></span><span></span></a></div>
                        </div>
                    </div>
                </div>



            </div>

            <!-- Home Slider Nav - Prev -->
            <div class="home_slider_nav home_slider_prev">
                <svg version="1.1" id="Layer_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                     width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
					<defs>
                        <linearGradient id='home_grad_prev'>
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

            <!-- Home Slider Nav - Next -->
            <div class="home_slider_nav home_slider_next">
                <svg version="1.1" id="Layer_3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                     width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
					<defs>
                        <linearGradient id='home_grad_next'>
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

            <!-- Home Slider Dots -->

            <div class="home_slider_dots">
                <ul id="home_slider_custom_dots" class="home_slider_custom_dots">
                    <li class="home_slider_custom_dot active"><div></div>01.</li>
                    <li class="home_slider_custom_dot"><div></div>02.</li>
                    <li class="home_slider_custom_dot"><div></div>03.</li>
                </ul>
            </div>

        </div>

    </div>

    <!-- Intro -->

    <div class="intro">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h2 class="intro_title text-center">Жеңілдіктер</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="intro_text text-center">
                        <p>Жаңалықтарды жіберіп алмаңыздар! Бізде құрметті клиенттеріміз үшін жеңілдіктер жүргізіледі! </p>
                    </div>
                </div>
            </div>
            <div class="row intro_items">

                <!-- Intro Item -->

                <div class="col-lg-4 intro_col">
                    <div class="intro_item">
                        <div class="intro_item_overlay"></div>
                        <div class="intro_item_background" style="background-image:url(images/main-bg.jpg)"></div>
                        <div class="intro_item_content d-flex flex-column align-items-center justify-content-center">
                            <div class="intro_date">Мамыр 5 - Маусым 25</div>
                            <div class="button intro_button"><div class="button_bcg"></div><a href="#">Ары қарай көру<span></span><span></span><span></span></a></div>
                            <div class="intro_center text-center">
                                <h1>Брондау кезіндегі жеңілдіктер</h1>
                                <div class="intro_price">2 000-нан бастап</div>
                                <div class="rating rating_4">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Intro Item -->

                <div class="col-lg-4 intro_col">
                    <div class="intro_item">
                        <div class="intro_item_overlay"></div>
                        <div class="intro_item_background" style="background-image:url(images/main-bg1.jpg)"></div>
                        <div class="intro_item_content d-flex flex-column align-items-center justify-content-center">
                            <div class="intro_date">Мамыр 5 - Маусым 25</div>
                            <div class="button intro_button"><div class="button_bcg"></div><a href="#">Ары қарай көру<span></span><span></span><span></span></a></div>
                            <div class="intro_center text-center">
                                <h1>Брондау кезіндегі жеңілдіктер</h1>
                                <div class="intro_price">2 000-нан бастап</div>
                                <div class="rating rating_4">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Intro Item -->

                <div class="col-lg-4 intro_col">
                    <div class="intro_item">
                        <div class="intro_item_overlay"></div>
                        <div class="intro_item_background" style="background-image:url(images/main-bg2.jpg)"></div>
                        <div class="intro_item_content d-flex flex-column align-items-center justify-content-center">
                            <div class="intro_date">Мамыр 5 - Маусым 25</div>
                            <div class="button intro_button"><div class="button_bcg"></div><a href="#">Ары қарай көру<span></span><span></span><span></span></a></div>
                            <div class="intro_center text-center">
                                <h1>Брондау кезіндегі жеңілдіктер</h1>
                                <div class="intro_price">2 000-нан бастап</div>
                                <div class="rating rating_4">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CTA -->

    <div class="cta">
        <div class="cta_background" style="background-image:url(images/cta.jpg)"></div>

        <div class="container">
            <div class="row">
                <div class="col">

                    <!-- CTA Slider -->

                    <div class="cta_slider_container">
                        <div class="owl-carousel owl-theme cta_slider">

                            <!-- CTA Slider Item -->
                            <div class="owl-item cta_item text-center">
                                <div class="cta_title">Біз туралы</div>
                                <div class="rating_r rating_r_4">
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                </div>
                                <p class="cta_text">«Солнечный» қонақ үйі тау мен өзен арасында көркем ортада, өзеннен 500 метр аралықта тыныш жерде, Бурабай демалу орнының дәл центрінде орналасқан. Біз сіздерге 2,3,4-адамдық ыңғайлы бөлмелер ұсынамыз.
                                </p>
                                <br />
                                <div class="button cta_button"><div class="button_bcg"></div><a href="./about.html">Оқу<span></span><span></span><span></span></a></div>
                            </div>

                            <!-- CTA Slider Item -->
                            <div class="owl-item cta_item text-center">
                                <div class="cta_title">Біздің артықшылықтарымыз</div>
                                <div class="rating_r rating_r_4">
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                    <i></i>
                                </div>
                                <p class="cta_text"> Қарағайлы орман айналасында, шудан алыс жердеміз. Бізде ыңғайлы эконом классты бөлмелерде орналастыру қарастарылыған. Сонымен қатар бізде тегін WiFi, жеке тұрақ орны, кабельді телевизор, мангалдар, ыдыстар,гриль-зона, бассейн, құмсалғыштармен қамтамасыз етілген.</p>
                                <div class="button cta_button"><div class="button_bcg"></div><a href="./about.html">Оқу<span></span><span></span><span></span></a></div>
                            </div>

                        </div>

                        <!-- CTA Slider Nav - Prev -->
                        <div class="cta_slider_nav cta_slider_prev">
                            <svg version="1.1" id="Layer_4" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
								<defs>
                                    <linearGradient id='cta_grad_prev'>
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

                        <!-- CTA Slider Nav - Next -->
                        <div class="cta_slider_nav cta_slider_next">
                            <svg version="1.1" id="Layer_5" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
								<defs>
                                    <linearGradient id='cta_grad_next'>
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
            </div>
        </div>

    </div>

    <!-- Offers -->

    <div class="offers">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h2 class="section_title">Қонақ үй бөлмелері</h2>
                </div>
            </div>
            <div class="row offers_items">

                <!-- Offers Item -->
                <div class="col-lg-6 offers_col">
                    <div class="offers_item">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="offers_image_container">
                                    <!-- Image by https://unsplash.com/@kensuarez -->
                                    <div class="offers_image_background" style="background-image:url(images/rooms/cottage.jpg)"></div>
                                    <div class="offer_name"><a href="#">Коттедж</a></div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="offers_content">
                                    <div class="offers_price">60 000 тг<span>тәулігіне</span></div>
                                    <div class="rating_r rating_r_4 offers_rating">
                                        <i></i>
                                        <i></i>
                                        <i></i>
                                        <i></i>
                                        <i></i>
                                    </div>
                                    <p class="offers_text"><b>Ораналастыру жағдайы:</b> 20 орын</p>
                                    <div class="offers_icons">
                                        <ul class="offers_icons_list">
                                            <li class="offers_icons_item"><img src="images/post.png" alt=""></li>
                                            <li class="offers_icons_item"><img src="images/compass.png" alt=""></li>
                                            <li class="offers_icons_item"><img src="images/bicycle.png" alt=""></li>
                                            <li class="offers_icons_item"><img src="images/sailboat.png" alt=""></li>
                                        </ul>
                                    </div>
                                    {{--<div class="offers_link"><a href="offers.html">Смотреть далее</a></div>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Offers Item -->
                <div class="col-lg-6 offers_col">
                    <div class="offers_item">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="offers_image_container">
                                    <!-- Image by Egzon Bytyqi -->
                                    <div class="offers_image_background" style="background-image:url(images/rooms/standart.jpg)"></div>
                                    <div class="offer_name"><a href="#">Стандарт номер</a></div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="offers_content">
                                    <div class="offers_price">3 500 тг<span>тәулігіне</span></div>
                                    <div class="rating_r rating_r_4 offers_rating">
                                        <i></i>
                                        <i></i>
                                        <i></i>
                                        <i></i>
                                        <i></i>
                                    </div>
                                    <p class="offers_text"><b>Ораналастыру жағдайы:</b> 2 орынды</p>
                                    <div class="offers_icons">
                                        <ul class="offers_icons_list">
                                            <li class="offers_icons_item"><img src="images/post.png" alt=""></li>
                                            <li class="offers_icons_item"><img src="images/compass.png" alt=""></li>
                                            <li class="offers_icons_item"><img src="images/bicycle.png" alt=""></li>
                                            <li class="offers_icons_item"><img src="images/sailboat.png" alt=""></li>
                                        </ul>
                                    </div>
                                    {{--<div class="offers_link"><a href="offers.html">Смотреть далее</a></div>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Offers Item -->
                <div class="col-lg-6 offers_col">
                    <div class="offers_item">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="offers_image_container">
                                    <!-- Image by https://unsplash.com/@mantashesthaven -->
                                    <div class="offers_image_background" style="background-image:url(images/rooms/summer.jpg)"></div>
                                    <div class="offer_name"><a href="#">Летние комнаты</a></div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="offers_content">
                                    <div class="offers_price">3 500 тг<span>тәулігіне</span></div>
                                    <div class="rating_r rating_r_4 offers_rating">
                                        <i></i>
                                        <i></i>
                                        <i></i>
                                        <i></i>
                                        <i></i>
                                    </div>
                                    <p class="offers_text"><b>Ораналастыру жағдайы:</b> 2 орынды</p>
                                    <div class="offers_icons">
                                        <ul class="offers_icons_list">
                                            <li class="offers_icons_item"><img src="images/post.png" alt=""></li>
                                            <li class="offers_icons_item"><img src="images/compass.png" alt=""></li>
                                            <li class="offers_icons_item"><img src="images/bicycle.png" alt=""></li>
                                            <li class="offers_icons_item"><img src="images/sailboat.png" alt=""></li>
                                        </ul>
                                    </div>
                                    {{--<div class="offers_link"><a href="offers.html">Смотреть далее</a></div>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Offers Item -->
                <div class="col-lg-6 offers_col">
                    <div class="offers_item">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="offers_image_container">
                                    <!-- Image by https://unsplash.com/@nevenkrcmarek -->
                                    <div class="offers_image_background" style="background-image:url(images/rooms/econom.jpg)"></div>
                                    <div class="offer_name"><a href="#">Эконом номер</a></div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="offers_content">
                                    <div class="offers_price">2 000 тг<span>тәулігіне</span></div>
                                    <div class="rating_r rating_r_4 offers_rating">
                                        <i></i>
                                        <i></i>
                                        <i></i>
                                        <i></i>
                                        <i></i>
                                    </div>
                                    <p class="offers_text"><b>Ораналастыру жағдайы:</b> 4 орынды</p>
                                    <p class="offers_text"></p>
                                    <div class="offers_icons">
                                        <ul class="offers_icons_list">
                                            <li class="offers_icons_item"><img src="images/post.png" alt=""></li>
                                            <li class="offers_icons_item"><img src="images/compass.png" alt=""></li>
                                            <li class="offers_icons_item"><img src="images/bicycle.png" alt=""></li>
                                            <li class="offers_icons_item"><img src="images/sailboat.png" alt=""></li>
                                        </ul>
                                    </div>
                                    {{--<div class="offers_link"><a href="offers.html">Смотреть далее</a></div>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Offers Item -->
                <div class="col-lg-6 offers_col">
                    <div class="offers_item">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="offers_image_container">
                                    <!-- Image by https://unsplash.com/@nevenkrcmarek -->
                                    <div class="offers_image_background" style="background-image:url(images/rooms/summerbysrub.jpg)"></div>
                                    <div class="offer_name"><a href="#">Летний домик из сруба</a></div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="offers_content">
                                    <div class="offers_price">2 000 тг<span>тәулігіне</span></div>
                                    <div class="rating_r rating_r_4 offers_rating">
                                        <i></i>
                                        <i></i>
                                        <i></i>
                                        <i></i>
                                        <i></i>
                                    </div>
                                    <p class="offers_text"><b>Ораналастыру жағдайы:</b> 2 орынды</p>
                                    <p class="offers_text">Қолайлықсыз</p>
                                    <div class="offers_icons">
                                        <ul class="offers_icons_list">
                                            <li class="offers_icons_item"><img src="images/post.png" alt=""></li>
                                            <li class="offers_icons_item"><img src="images/compass.png" alt=""></li>
                                            <li class="offers_icons_item"><img src="images/bicycle.png" alt=""></li>
                                            <li class="offers_icons_item"><img src="images/sailboat.png" alt=""></li>
                                        </ul>
                                    </div>
                                    {{--<div class="offers_link"><a href="offers.html">Смотреть далее</a></div>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Offers Item -->
                <div class="col-lg-6 offers_col">
                    <div class="offers_item">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="offers_image_container">
                                    <!-- Image by https://unsplash.com/@nevenkrcmarek -->
                                    <div class="offers_image_background" style="background-image:url(images/rooms/summerX.jpg)"></div>
                                    <div class="offer_name"><a href="#">Летние комнаты</a></div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="offers_content">
                                    <div class="offers_price">2 000 тг<span>тәулігіне</span></div>
                                    <div class="rating_r rating_r_4 offers_rating">
                                        <i></i>
                                        <i></i>
                                        <i></i>
                                        <i></i>
                                        <i></i>
                                    </div>
                                    <p class="offers_text"><b>Ораналастыру жағдайы:</b> 2 орынды</p>
                                    <p class="offers_text">Қолайлықсыз</p>
                                    <div class="offers_icons">
                                        <ul class="offers_icons_list">
                                            <li class="offers_icons_item"><img src="images/post.png" alt=""></li>
                                            <li class="offers_icons_item"><img src="images/compass.png" alt=""></li>
                                            <li class="offers_icons_item"><img src="images/bicycle.png" alt=""></li>
                                            <li class="offers_icons_item"><img src="images/sailboat.png" alt=""></li>
                                        </ul>
                                    </div>
                                    {{--<div class="offers_link"><a href="offers.html">Смотреть далее</a></div>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Testimonials -->

    <!-- Testimonials -->

    <div class="testimonials">
        <div class="test_border"></div>
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h2 class="section_title">Біз жайлы қонақтарымыз не ойлайды</h2>
                </div>
            </div>
            <div class="row">
                <div class="col">

                    <!-- Testimonials Slider -->

                    <div class="test_slider_container">
                        <div class="owl-carousel owl-theme test_slider">

                            <!-- Testimonial Item -->
                            {{--<div class="owl-item">--}}
                                {{--<div class="test_item">--}}
                                    {{--<div class="test_image"><img src="./images/comment/img1.jpg" alt="comment"></div>--}}
                                    {{--<div class="test_icon"><img src="images/backpack.png" alt=""></div>--}}
                                    {{--<div class="test_content_container">--}}
                                        {{--<div class="test_content">--}}
                                            {{--<div class="test_item_info">--}}
                                                {{--<div class="test_name">Дарина</div>--}}
                                                {{--<div class="test_date">Сәуір 24, 2018</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="test_quote_title">" Қонақ үй керемет "</div>--}}
                                            {{--<p class="test_quote_text">Бурабайға баратын болсаңыздар осы қонақ үйге келіңіздер!</p>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            <!-- Testimonial Item -->
                            {{--<div class="owl-item">--}}
                                {{--<div class="test_item">--}}
                                    {{--<div class="test_image"><img src="./images/comment/img2.jfif" alt="comment"></div>--}}
                                    {{--<div class="test_icon"><img src="images/backpack.png" alt=""></div>--}}
                                    {{--<div class="test_content_container">--}}
                                        {{--<div class="test_content">--}}
                                            {{--<div class="test_item_info">--}}
                                                {{--<div class="test_name">Дана</div>--}}
                                                {{--<div class="test_date">Мамыр 5, 2018</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="test_quote_title">" Қонақ үй керемет "</div>--}}
                                            {{--<p class="test_quote_text">Қажетті жағдайлар жасалған. Керемет!</p>--}}
                                        {{--</div>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                            <!-- Testimonial Item -->
                            <div class="owl-item">
                                <div class="test_item">
                                    <div class="test_image"><img src="./images/comment/img3.jfif" alt="comment"></div>
                                    <div class="test_icon"><img src="images/backpack.png" alt=""></div>
                                    <div class="test_content_container">
                                        <div class="test_content">
                                            <div class="test_item_info">
                                                <div class="test_name">Мадина</div>
                                                <div class="test_date">Маусым 2, 2018</div>
                                            </div>
                                            <div class="test_quote_title">" Қонақ үй керемет "</div>
                                            <p class="test_quote_text">Өте таза әрі көлге де жап-жақын орналасқан.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Testimonial Item -->
                            <div class="owl-item">
                                <div class="test_item">
                                    <div class="test_image"><img src="./images/comment/img4.jfif" alt="comment"></div>
                                    <div class="test_icon"><img src="images/backpack.png" alt=""></div>
                                    <div class="test_content_container">
                                        <div class="test_content">
                                            <div class="test_item_info">
                                                <div class="test_name">Айгерім</div>
                                                <div class="test_date">Май 5, 2017</div>
                                            </div>
                                            <div class="test_quote_title">" Қонақ үй керемет "</div>
                                            <p class="test_quote_text">Бағасы да арзан, жағдайлары да керемет!</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Testimonial Item -->
                            <div class="owl-item">
                                <div class="test_item">
                                    <div class="test_image"><img src="./images/comment/img5.jfif" alt="comment"></div>
                                    <div class="test_icon"><img src="images/backpack.png" alt=""></div>
                                    <div class="test_content_container">
                                        <div class="test_content">
                                            <div class="test_item_info">
                                                <div class="test_name">Дастан</div>
                                                <div class="test_date">Сәуір 24, 2018</div>
                                            </div>
                                            <div class="test_quote_title">" Қонақ үй керемет "</div>
                                            <p class="test_quote_text">Маған өте қатты ұнады. Келесіде де осы қонақ үйге келетін боламын.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Testimonial Item -->
                            <div class="owl-item">
                                <div class="test_item">
                                    <div class="test_image"><img src="./images/comment/img6.jfif" alt="comment"></div>
                                    <div class="test_icon"><img src="images/backpack.png" alt=""></div>
                                    <div class="test_content_container">
                                        <div class="test_content">
                                            <div class="test_item_info">
                                                <div class="test_name">Марат</div>
                                                <div class="test_date">Мамыр 5, 2018</div>
                                            </div>
                                            <div class="test_quote_title">" Қонақ үй керемет "</div>
                                            <p class="test_quote_text">Бурабай да керемет. Қонақ үй де керемет. Келгеніме еш өкінбеймін!</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Testimonials Slider Nav - Prev -->
                        <div class="test_slider_nav test_slider_prev">
                            <svg version="1.1" id="Layer_6" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
								<defs>
                                    <linearGradient id='test_grad_prev'>
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

                        <!-- Testimonials Slider Nav - Next -->
                        <div class="test_slider_nav test_slider_next">
                            <svg version="1.1" id="Layer_7" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                 width="28px" height="33px" viewBox="0 0 28 33" enable-background="new 0 0 28 33" xml:space="preserve">
								<defs>
                                    <linearGradient id='test_grad_next'>
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
            </div>

        </div>
    </div>

    <!-- Contact -->

    <div class="contact">
        <div class="contact_background" style="background-image:url(images/contact.png)"></div>

        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="contact_image">

                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="contact_form_container">
                        <a  name="bottom"></a>
                        <div class="contact_title">Тапсырыс беріңіз</div>
                        <form action="{{route('booking')}}" method="post" id="contact_form" class="contact_form">
                            @csrf
                            <input name="name" type="text" id="contact_form_name" class="contact_form_name input_field" placeholder="Аты" required="required" data-error="Name is required.">
                            <input name="email" type="email" id="contact_form_email" class="contact_form_email input_field" placeholder="E-mail" required="required" data-error="Email is required.">
                            <input name="phone" type="number" id="contact_form_name" class="contact_form_name input_field" placeholder="Телефона нөмірі" required="required" data-error="Phone number is required.">
                            <input name="humans" type="number" id="contact_form_email" class="contact_form_email input_field" placeholder="Қанақтар саны" required="required" data-error="Phone number is required.">
                            

                            <input name="arriving" type="date" id="contact_form_name" class="contact_form_name input_field" placeholder="Көшіп келу күні" required="required" data-error="Phone number is required.">
                            <input name="departing" type="date" id="contact_form_email" class="contact_form_email input_field" placeholder="Көшіп кету күні" required="required" data-error="Phone number is required.">
                            <select name="type" id="contact_form_subject" class="contact_form_subject input_field" required="required" >
                                <option style="background: #c5778b;" value="">Номерлер катигориясы</option>
                                <option style="background: #c5778b;" value="Летние комнаты (без удобств 2000тг/чел)">Летние комнаты (без удобств 2000тг/чел)</option>
                                <option style="background: #c5778b;" value="Летний домик из сруба (без удобств 2000тг/чел)">Летний домик из сруба (без удобств 2000тг/чел)</option>
                                <option style="background: #c5778b;" value="Летние комнаты (с удобствами 3500тг/чел)">Летние комнаты (с удобствами  3500тг/чел)</option>
                                <option style="background: #c5778b;" value="Номер эконом в коттедже  2000тг/чел">Номер эконом в коттедже ( 2000тг/чел)</option>
                                <option style="background: #c5778b;" value="Номер стандарт в коттедже 3500тг/чел">Номер стандарт в коттедже (3500тг/чел)</option>
                                <option style="background: #c5778b;" value="Коттедж 60000тг/чел">Коттедж (60000тг/чел)</option>
                            </select>
                            <select name="callback" id="contact_form_subject" class="contact_form_subject input_field" required="required" >
                                <option style="background: #c5778b;" value="">Сізге қайта хабарлассынба?</option>
                                <option style="background: #c5778b;" value="Позвонить обратно">Хабарласу керек</option>
                                <option style="background: #c5778b;" value="Не звонить обратно">Хабарласу қажеті жоқ</option>
                            </select>
                            <textarea id="contact_form_message" class="text_field contact_form_message" name="wishes" rows="4" placeholder="Хаттама" required="required" data-error="Please, write us a message."></textarea>
                            <button type="submit" id="form_submit_button" class="form_submit_button button">Жіберу<span></span><span></span><span></span></button>
                        </form>
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
                        <div class="footer_title">Біздің байланыстар</div>
                        <div class="footer_content footer_contact">
                            <ul class="contact_info_list">
                                <li class="contact_info_item d-flex flex-row">
                                    <div><div class="contact_info_icon"><img src="images/placeholder.svg" alt=""></div></div>
                                    <div class="contact_info_text">Бурабай, Обозная көшесі 14</div>
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
                            Дипломдық жоба. Орындаған: Шәріп Нұрсейіт, Сәулембаева Жанбота</div>
                    </div>
                </div>
                <div class="col-lg-9 order-lg-2 order-1">
                    <div class="footer_nav_container d-flex flex-row align-items-center justify-content-lg-end">
                        <div class="footer_nav">
                            <ul class="footer_nav_list">
                                <li class="main_nav_item"><a href="/">Басты бет</a></li>
                                <li class="main_nav_item"><a href="/about">Біз туралы</a></li>
                                <li class="main_nav_item"><a href="/offers">Бөлмелер</a></li>
                                <li class="main_nav_item"><a href="/blog">Жаңалықтар</a></li>
                                <li class="main_nav_item"><a href="/contact">Контакт</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


<script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('styles/bootstrap4/popper.js')}}"></script>
<script src="{{asset('styles/bootstrap4/bootstrap.min.js')}}"></script>
<script src="{{asset('plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
<script src="{{asset('plugins/easing/easing.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script>

</body>

</html>