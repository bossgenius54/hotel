<!DOCTYPE html>
<html lang="en">
<head>
    <title>Наши предложения</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
    <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="styles/main_styles.css">
    <link rel="stylesheet" type="text/css" href="styles/offers_styles.css">
    <link rel="stylesheet" type="text/css" href="styles/offers_responsive.css">
</head>

<body>

<header class="header">

    <!-- Top Bar -->

    <div class="top_bar">
        <div class="container">
            <div class="row">
                <div class="col d-flex flex-row">
                    <div class="phone">+7 702 511 30 08</div>
                    <div class="social">
                        <ul class="social_list">
                            <li class="social_list_item"><a href="https://www.instagram.com/domiki_borovoe_2018/" target="_blank"><i class="fa fa-instagram" aria-hidden="true">&nbsp;&nbsp;@domiki_borovoe_2018</i></a></li>
                        </ul>
                    </div>
                    <div class="user_box ml-auto">
                        <div class="user_box_login user_box_link"><a href="#">Кіру</a></div>
                        <div class="user_box_register user_box_link"><a href="#">Тіркелу</a></div>
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
            <li class="menu_item"><a href="./index.html">Басты бет</a></li>
            <li class="menu_item"><a href="./about.html">Біз туралы</a></li>
            <li class="menu_item"><a href="./offers.html">Бөлмелер</a></li>
            <li class="menu_item"><a href="./blog.html">Жаңалықтар</a></li>
            <li class="menu_item"><a href="./contact.html">Контакт</a></li>
        </ul>
    </div>
</div>

<!-- Home -->

<div class="home">
    <div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/main-bg.jpg"></div>
    <div class="home_content">
        <div class="home_title">Бөлмелер түрлері</div>
    </div>
</div>

<!-- Offers -->

<div class="offers">

    <!-- Offers -->

    <div class="container">
        <div class="row">
            <div class="col-lg-1 temp_col"></div>
            <div class="col-lg-11">

                <!-- Offers Sorting -->
                <div class="offers_sorting_container">
                    <ul class="offers_sorting">
                        <li>
                            <span class="sorting_text">баға</span>
                            <i class="fa fa-chevron-down"></i>
                            <ul>
                                <li class="sort_btn" data-isotope-option='{ "sortBy": "original-order" }' data-parent=".price_sorting"><span>бәрі</span></li>
                                <li class="sort_btn" data-isotope-option='{ "sortBy": "price" }' data-parent=".price_sorting"><span>өсу реті </span></li>
                            </ul>
                        </li>
                        <li>
                            <span class="sorting_text">тізім</span>
                            <i class="fa fa-chevron-down"></i>
                            <ul>
                                <li class="sort_btn" data-isotope-option='{ "sortBy": "original-order" }'><span>әдеттегідей</span></li>
                                <li class="sort_btn" data-isotope-option='{ "sortBy": "name" }'><span>алфавитті</span></li>
                            </ul>
                        </li>
                        <li>
                            <span class="sorting_text">рейтинг</span>
                            <i class="fa fa-chevron-down"></i>
                            <ul>
                                <li class="filter_btn" data-filter="*"><span>бәрі</span></li>
                                <li class="sort_btn" data-isotope-option='{ "sortBy": "stars" }'><span>әдеттегідей</span></li>
                                <li class="filter_btn" data-filter=".rating_3"><span>3</span></li>
                                <li class="filter_btn" data-filter=".rating_4"><span>4</span></li>
                                <li class="filter_btn" data-filter=".rating_5"><span>5</span></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-12">
                <!-- Offers Grid -->

                <div class="offers_grid">

                    <!-- Offers Item -->

                    <div class="offers_item rating_4">
                        <div class="row">
                            <div class="col-lg-1 temp_col"></div>
                            <div class="col-lg-3 col-1680-4">
                                <div class="offers_image_container">
                                    <div class="offers_image_background" style="background-image:url(images/rooms/cottage.jpg)"></div>
                                    <div class="offer_name"><a href="single_listing.html">Коттедж</a></div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="offers_content">
                                    <div class="offers_price">60 000<span>тәулігіне</span></div>
                                    <div class="rating_r rating_r_4 offers_rating" data-rating="4">
                                        <i></i>
                                        <i></i>
                                        <i></i>
                                        <i></i>
                                        <i></i>
                                    </div>
                                    <p class="offers_text"><b>Орналастыру жағдайы:</b> 20 орын</p>
                                    <div class="offers_icons">
                                        <ul class="offers_icons_list">
                                            <li class="offers_icons_item"><img src="images/post.png" alt=""></li>
                                            <li class="offers_icons_item"><img src="images/compass.png" alt=""></li>
                                            <li class="offers_icons_item"><img src="images/bicycle.png" alt=""></li>
                                            <li class="offers_icons_item"><img src="images/sailboat.png" alt=""></li>
                                        </ul>
                                    </div>
                                    <div class="button book_button"><a href="single_listing.html">Көру<span></span><span></span><span></span></a></div>
                                    <div class="offer_reviews">
                                        <div class="offer_reviews_content">
                                            <div class="offer_reviews_title">Өте жақсы</div>
                                            <div class="offer_reviews_subtitle">100 рет қаралды</div>
                                        </div>
                                        <div class="offer_reviews_rating text-center">4</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Offers Item -->

                    <div class="offers_item rating_3">
                        <div class="row">
                            <div class="col-lg-1 temp_col"></div>
                            <div class="col-lg-3 col-1680-4">
                                <div class="offers_image_container">
                                    <div class="offers_image_background" style="background-image:url(images/rooms/standart.jpg)"></div>
                                    <div class="offer_name"><a href="single_listing.html">Стандарт номер</a></div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="offers_content">
                                    <div class="offers_price">3 500<span>тәулігіне</span></div>
                                    <div class="rating_r rating_r_3 offers_rating" data-rating="3">
                                        <i></i>
                                        <i></i>
                                        <i></i>
                                        <i></i>
                                        <i></i>
                                    </div>
                                    <p class="offers_text"><b>Орналастыру жағдайы:</b> 2-орынды</p>
                                    <div class="offers_icons">
                                        <ul class="offers_icons_list">
                                            <li class="offers_icons_item"><img src="images/post.png" alt=""></li>
                                            <li class="offers_icons_item"><img src="images/compass.png" alt=""></li>
                                            <li class="offers_icons_item"><img src="images/bicycle.png" alt=""></li>
                                            <li class="offers_icons_item"><img src="images/sailboat.png" alt=""></li>
                                        </ul>
                                    </div>
                                    <div class="button book_button"><a href="single_listing.html">Көру<span></span><span></span><span></span></a></div>
                                    <div class="offer_reviews">
                                        <div class="offer_reviews_content">
                                            <div class="offer_reviews_title">Өте жақсы</div>
                                            <div class="offer_reviews_subtitle">100 рет қаралды</div>
                                        </div>
                                        <div class="offer_reviews_rating text-center">3</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Offers Item -->

                    <div class="offers_item rating_5">
                        <div class="row">
                            <div class="col-lg-1 temp_col"></div>
                            <div class="col-lg-3 col-1680-4">
                                <div class="offers_image_container">
                                    <div class="offers_image_background" style="background-image:url(images/rooms/summer.jpg)"></div>
                                    <div class="offer_name"><a href="single_listing.html">Жазғы бөлмелер</a></div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="offers_content">
                                    <div class="offers_price">3 500<span>тәулігіне</span></div>
                                    <div class="rating_r rating_r_5 offers_rating"  data-rating="5">
                                        <i></i>
                                        <i></i>
                                        <i></i>
                                        <i></i>
                                        <i></i>
                                    </div>
                                    <p class="offers_text"><b>Орналастыру жағдайы:</b> 2-орынды</p>
                                    <div class="offers_icons">
                                        <ul class="offers_icons_list">
                                            <li class="offers_icons_item"><img src="images/post.png" alt=""></li>
                                            <li class="offers_icons_item"><img src="images/compass.png" alt=""></li>
                                            <li class="offers_icons_item"><img src="images/bicycle.png" alt=""></li>
                                            <li class="offers_icons_item"><img src="images/sailboat.png" alt=""></li>
                                        </ul>
                                    </div>
                                    <div class="button book_button"><a href="single_listing.html">Көру<span></span><span></span><span></span></a></div>
                                    <div class="offer_reviews">
                                        <div class="offer_reviews_content">
                                            <div class="offer_reviews_title">Өте жақсы</div>
                                            <div class="offer_reviews_subtitle">100 рет қаралды</div>
                                        </div>
                                        <div class="offer_reviews_rating text-center">5</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Offers Item -->

                    <div class="offers_item rating_4">
                        <div class="row">
                            <div class="col-lg-1 temp_col"></div>
                            <div class="col-lg-3 col-1680-4">
                                <div class="offers_image_container">
                                    <div class="offers_image_background" style="background-image:url(images/rooms/econom.jpg)"></div>
                                    <div class="offer_name"><a href="single_listing.html">Эконом номер</a></div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="offers_content">
                                    <div class="offers_price">2 000<span>тәулігіне</span></div>
                                    <div class="rating_r rating_r_4 offers_rating" data-rating="4">
                                        <i></i>
                                        <i></i>
                                        <i></i>
                                        <i></i>
                                        <i></i>
                                    </div>
                                    <p class="offers_text"><b>Орналастыру жағдайы:</b> 4-орынды</p>
                                    <div class="offers_icons">
                                        <ul class="offers_icons_list">
                                            <li class="offers_icons_item"><img src="images/post.png" alt=""></li>
                                            <li class="offers_icons_item"><img src="images/compass.png" alt=""></li>
                                            <li class="offers_icons_item"><img src="images/bicycle.png" alt=""></li>
                                            <li class="offers_icons_item"><img src="images/sailboat.png" alt=""></li>
                                        </ul>
                                    </div>
                                    <div class="button book_button"><a href="single_listing.html">Көру<span></span><span></span><span></span></a></div>
                                    <div class="offer_reviews">
                                        <div class="offer_reviews_content">
                                            <div class="offer_reviews_title">Өте жақсы</div>
                                            <div class="offer_reviews_subtitle">100 рет қаралды</div>
                                        </div>
                                        <div class="offer_reviews_rating text-center">4</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Offers Item -->

                    <div class="offers_item rating_3">
                        <div class="row">
                            <div class="col-lg-1 temp_col"></div>
                            <div class="col-lg-3 col-1680-4">
                                <div class="offers_image_container">
                                    <div class="offers_image_background" style="background-image:url(images/rooms/summerbysrub.jpg)"></div>
                                    <div class="offer_name"><a href="single_listing.html">Ағашты жазғы үй</a></div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="offers_content">
                                    <div class="offers_price">2 000<span>тәулігіне</span></div>
                                    <div class="rating_r rating_r_3 offers_rating" data-rating="3">
                                        <i></i>
                                        <i></i>
                                        <i></i>
                                        <i></i>
                                        <i></i>
                                    </div>
                                    <p class="offers_text"><b>Орналастыру жағдайы:</b> 2-орынды</p>
                                    <p class="offers_text"> Қолайлықсыз</p>
                                    <div class="offers_icons">
                                        <ul class="offers_icons_list">
                                            <li class="offers_icons_item"><img src="images/post.png" alt=""></li>
                                            <li class="offers_icons_item"><img src="images/compass.png" alt=""></li>
                                            <li class="offers_icons_item"><img src="images/bicycle.png" alt=""></li>
                                            <li class="offers_icons_item"><img src="images/sailboat.png" alt=""></li>
                                        </ul>
                                    </div>
                                    <div class="button book_button"><a href="single_listing.html">Көру<span></span><span></span><span></span></a></div>
                                    <div class="offer_reviews">
                                        <div class="offer_reviews_content">
                                            <div class="offer_reviews_title">Өте жақсы</div>
                                            <div class="offer_reviews_subtitle">100 рет қаралды</div>
                                        </div>
                                        <div class="offer_reviews_rating text-center">3</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="offers_item rating_5 summerX">
                        <div class="row">
                            <div class="col-lg-1 temp_col"></div>
                            <div class="col-lg-3 col-1680-4">
                                <div class="offers_image_container">
                                    <div class="offers_image_background" style="background-image:url(images/rooms/summerX.jpg)"></div>
                                    <div class="offer_name"><a href="single_listing.html">Жазғы бөлмелер</a></div>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="offers_content">
                                    <div class="offers_price">2 000<span>тәулігіне</span></div>
                                    <div class="rating_r rating_r_5 offers_rating"  data-rating="5">
                                        <i></i>
                                        <i></i>
                                        <i></i>
                                        <i></i>
                                        <i></i>
                                    </div>
                                    <p class="offers_text"><b>Орналастыру жағдайы:</b> 2-орынды</p>
                                    <p class="offers_text"> Қолайлықсыз</p>
                                    <div class="offers_icons">
                                        <ul class="offers_icons_list">
                                            <li class="offers_icons_item"><img src="images/post.png" alt=""></li>
                                            <li class="offers_icons_item"><img src="images/compass.png" alt=""></li>
                                            <li class="offers_icons_item"><img src="images/bicycle.png" alt=""></li>
                                            <li class="offers_icons_item"><img src="images/sailboat.png" alt=""></li>
                                        </ul>
                                    </div>
                                    <div class="button book_button"><a href="single_listing.html">Көру<span></span><span></span><span></span></a></div>
                                    <div class="offer_reviews">
                                        <div class="offer_reviews_content">
                                            <div class="offer_reviews_title">Өте жақсы</div>
                                            <div class="offer_reviews_subtitle">100 рет қаралды</div>
                                        </div>
                                        <div class="offer_reviews_rating text-center">5</div>
                                    </div>
                                </div>
                            </div>
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
                    <div class="footer_title">Біздің контактілеріміз</div>
                    <div class="footer_content footer_contact">
                        <ul class="contact_info_list">
                            <li class="contact_info_item d-flex flex-row">
                                <div><div class="contact_info_icon"><img src="images/placeholder.svg" alt=""></div></div>
                                <div class="contact_info_text">Бурабай, Обозная 14</div>
                            </li>
                            <li class="contact_info_item d-flex flex-row">
                                <div><div class="contact_info_icon"><img src="images/phone-call.svg" alt=""></div></div>
                                <div class="contact_info_text">+7 702 511 30 08</div>
                            </li>
                            <li class="contact_info_item d-flex flex-row">
                                <div><div class="contact_info_icon"><img src="images/instagram.png" alt=""></div></div>
                                <div class="contact_info_text"><a href="https://www.instagram.com/domiki_borovoe_2018/" target="_blank">@domiki_borovoe_2018</a></div>
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
<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/offers_custom.js"></script>

</body>

</html>