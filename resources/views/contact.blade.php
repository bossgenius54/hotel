<!DOCTYPE html>
<html lang="en">
<head>
    <title>Контакт</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
    <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="styles/contact_styles.css">
    <link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
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
                <li class="menu_item"><a href="./index.html">Главная</a></li>
                <li class="menu_item"><a href="./about.html">О нас</a></li>
                <li class="menu_item"><a href="./offers.html">Предложения</a></li>
                <li class="menu_item"><a href="#">Галерея</a></li>
                <li class="menu_item"><a href="./contact.html">Контакт</a></li>
            </ul>
        </div>
    </div>

    <!-- Home -->

    <div class="home">
        <div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/main-bg1.jpg"></div>
        <div class="home_content">
            <div class="home_title">Контакт</div>
        </div>
    </div>
    <!-- Contact -->

    <div class="contact_form_section">
        <div class="container">
            <div class="row">
                <div class="col">

                    <!-- Contact Form -->
                    <div class="contact_form_container">
                        <div class="contact_title text-center">Свяжитесь с нами</div>
                        <form action="#" id="contact_form" class="contact_form text-center">
                            <input type="text" id="contact_form_name" class="contact_form_name input_field" placeholder="Имя" required="required" data-error="Name is required.">
                            <input type="text" id="contact_form_email" class="contact_form_email input_field" placeholder="E-mail" required="required" data-error="Email is required.">
                            <input type="text" id="contact_form_subject" class="contact_form_subject input_field" placeholder="Тема" required="required" data-error="Subject is required.">
                            <textarea id="contact_form_message" class="text_field contact_form_message" name="message" rows="4" placeholder="Сообщение" required="required" data-error="Please, write us a message."></textarea>
                            <button type="submit" id="form_submit_button" class="form_submit_button button trans_200">Отправить<span></span><span></span><span></span></button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <br/>

    <!-- Google Map -->

    <div class="travelix_map">
        <div id="google_map" class="google_map">
            <div class="map_container">
                <div id="map"></div>
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
                                <li class="footer_nav_item"><a href="./index.html">Главная</a></li>
                                <li class="footer_nav_item"><a href="./about.html">О нас</a></li>
                                <li class="footer_nav_item"><a href="./offers.html">Предложения</a></li>
                                <li class="footer_nav_item"><a href="#">Галерея</a></li>
                                <li class="footer_nav_item"><a href="./contact.html">Контакт</a></li>
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
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="js/contact_custom.js"></script>

</body>

</html>