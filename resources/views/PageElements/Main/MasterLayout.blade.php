<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <title>{{config('app.name')}}</title>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="HandheldFriendly" content="true" />
    <meta name="apple-touch-fullscreen" content="yes" />

    @include('PageElements.Main.CoreCSS')

    <!-- Fav and touch icons -->
    <link rel="shortcut icon" href="{{asset('favicon.ico')}}">
</head>
<body class="sticky_header">

<div class="overflow_wrapper">
    <header>
        <div class="container">
            <div class="logo"><a class="brand" href="/"> <img src="{{asset('images/logo.png')}}" alt="optional logo"> </a></div>
            <div id="mainmenu" class="menu_container">
                <label class="mobile_collapser">منو</label>
                <!-- Mobile menu title -->
                <ul>
                    <li class="active"><a href="index.html">خانه</a></li>
                    <li><a href="about_us.html">درباره ما</a></li>
                    <li><a href="services.html">خدمات</a></li>
                    <li><a href="portfolio.html">نمونه کار</a></li>
                    <li><a href="blog.html">وبلاگ</a></li>
                    <li><a href="contact.html">تماس با ما</a></li>
                    <li><a href="#">ویژگی ها</a>
                        <div class="dmui_dropdown_block full_width" style="background-image: url(images/mega_menu_background.png); background-repeat:no-repeat; background-position:-70px;width:500px;">
                            <div class="dmui-container">
                                <div class="dmui-col span3">
                                    <div class="dmui-container">
                                        <ul class="dmui-submenu">
                                            <li><a href="home_alternative.html">جایگزین خانه</a></li>
                                            <li><a href="page_alternative.html">جایگزین برگه</a></li>
                                            <li><a href="gallery.html">نمونه کار ماسونری</a></li>
                                            <li><a href="portfolio_item.html">نمونه کار تکی</a></li>
                                            <li><a href="portfolio_item_2.html">نمونه کار تکی 2</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="dmui-col span3">
                                    <div class="dmui-container">
                                        <ul class="dmui-submenu">
                                            <li><a href="single_post.html">نوشته تکی</a></li>
                                            <li><a href="404.html">خطای 404</a></li>
                                            <li><a href="register.html">ثبت نام یا ورود</a></li>
                                            <li><a href="elements.html">عناصر طراحی</a></li>
                                            <li><a href="documentation/index.html">مستندات <span class="label label-danger">جدید</span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="triangle-up-left"></div>
            <div class="triangle-up-right"></div>
        </div>
    </header>
    <section id="slider_wrapper" class="slider_wrapper full_page_photo">
        <div id="main_flexslider" class="flexslider">
            <ul class="slides">
                <li class="item" style="background-image: url(images/1.jpg)">
                    <div class="container">
                        <div class="carousel-caption animated bounceInUp">
                            <h1>یک <strong>قالب</strong> منعطف<br>
                                مناسب برای کسب و کار شما</h1>
                            <p class="lead skincolored">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                        </div>
                    </div>
                </li>
                <li class="item" style="background-image: url(images/2.jpg)">
                    <div class="container">
                        <div class="carousel-caption animated bounceInUp">
                            <h1>یک <strong>قالب</strong> منعطف<br>
                                مناسب برای کسب و کار شما</h1>
                            <p class="lead skincolored">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                        </div>
                    </div>
                </li>
                <li class="item" style="background-image: url(images/3.jpg)">
                    <div class="container">
                        <div class="carousel-caption animated bounceInUp">
                            <h1>یک <strong>قالب</strong> منعطف<br>
                                مناسب برای کسب و کار شما</h1>
                            <p class="lead skincolored">لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. </p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <div class="main">
        <div class="container triangles-of-section">
            <div class="triangle-up-left"></div>
            <div class="square-left"></div>
            <div class="triangle-up-right"></div>
            <div class="square-right"></div>
        </div>
        <section class="features_teasers_wrapper">
            <div class="container">
                <div class="row">
                    <div class="feature_teaser col-sm-4 col-md-4"> <img alt="responsive" src="images/phone-v2.png">
                        <h3>طراحی واکنش گرا و تمیز</h3>
                        <p>چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.</p>
                    </div>
                    <div class="feature_teaser col-sm-4 col-md-4"> <img alt="responsive" src="images/lib-v2.png">
                        <h3>بر اساس بوت استرپ</h3>
                        <p>چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.</p>
                    </div>
                    <div class="feature_teaser col-sm-4 col-md-4"> <img alt="responsive" src="images/rocket_trans-v2.png">
                        <h3>استفاده واقعی از LESS</h3>
                        <p>چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد.</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="call_to_action dark_section">
            <div class="container">
                <h3>تمرکز قالب بر <strong><span class="rotate">زیبایی, سادگی, خلاقیت </span></strong> است</h3>
                <h4>و ما معتقدیم بر این اصول پایدار بوده ایم</h4>
                <a class="btn btn-primary" href="#">میهن وبمستر!</a> </div>
        </section>
        <section class="portfolio_teasers_wrapper">
            <div class="container triangles-of-section">
                <div class="triangle-up-left"></div>
                <div class="square-left"></div>
                <div class="triangle-up-right"></div>
                <div class="square-right"></div>
            </div>
            <div class="container">
                <h2 class="section_header fancy centered">پروژه های اخیری که اجرا کرده ایم<small>ما به پروژه هایمان افتخار می کنیم</small></h2>
                <div class="portfolio_strict row">
                    <div class="col-sm-4 col-md-4">
                        <div class="portfolio_item wow fadeInUp"> <a href="portfolio_item.html">
                                <figure style="background-image:url(images/portfolio/b3.jpg)">
                                    <figcaption>
                                        <div class="portfolio_description">
                                            <h3>پروژه کلین استارت</h3>
                                            <span class="cross"></span>
                                            <p>طراحی</p>
                                        </div>
                                    </figcaption>
                                </figure>
                            </a> </div>
                    </div>
                    <div class="col-sm-4 col-md-4">
                        <div class="portfolio_item wow fadeInUp"> <a href="portfolio_item.html">
                                <figure style="background-image:url(images/portfolio/a4.jpg)">
                                    <figcaption>
                                        <div class="portfolio_description">
                                            <h3>پروژه کلین استارت</h3>
                                            <span class="cross"></span>
                                            <p>طراحی</p>
                                        </div>
                                    </figcaption>
                                </figure>
                            </a> </div>
                    </div>
                    <div class="col-sm-4 col-md-4">
                        <div class="portfolio_item wow fadeInUp"> <a href="portfolio_item.html">
                                <figure style="background-image:url(images/portfolio/t5.jpg)">
                                    <figcaption>
                                        <div class="portfolio_description">
                                            <h3>پروژه کلین استارت</h3>
                                            <span class="cross"></span>
                                            <p>طراحی</p>
                                        </div>
                                    </figcaption>
                                </figure>
                            </a> </div>
                    </div>
                </div>
                <div class="centered_button"><a class="btn btn-primary" href="portfolio.html">نمونه های دیگر</a></div>
            </div>
            <div class="clients_section wow fadeInUp">
                <div class="container">
                    <h2 class="section_header elegant centered">مشتریان عزیز ما <small>که به همگی افتخار می کنیم</small></h2>
                    <div class="clients_list"> <a href="#"><img src="images/clients/wordpress.png" alt="client"></a> <a href="#"><img src="images/clients/jquery.png" alt="client"></a> <a href="#"><img src="images/clients/microlancer.png" alt="client"></a> <a href="#"><img src="images/clients/bbpress.png" alt="client"></a> <a href="#"><img src="images/clients/wpml.png" alt="client"></a> </div>
                </div>
            </div>
        </section>
        <section class="twitter_feed_wrapper skincolored_section">
            <div class="container">
                <div class="row">
                    <div class="twitter_feed_icon wow fadeInDown"><a href="https://twitter.com/PlethoraThemes"><i class="fa fa-twitter"></i></a></div>
                    <div id="twitter_flexslider" class="flexslider">
                        <ul class="slides">
                            <li class="item">
                                <blockquote>
                                    <p> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.<a href="http://mihanwebmaster.com/">میهن وبمستر</a></p>
                                </blockquote>
                            </li>
                            <li class="item">
                                <blockquote>
                                    <p> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.<a href="http://mihanwebmaster.com/">میهن وبمستر</a></p>
                                </blockquote>
                            </li>
                            <li class="item">
                                <blockquote>
                                    <p> لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است.<a href="http://mihanwebmaster.com/">میهن وبمستر</a></p>
                                </blockquote>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <footer>
            <section class="footer_teasers_wrapper dark_section">
                <div class="container triangles-of-section">
                    <div class="triangle-up-left"></div>
                    <div class="square-left"></div>
                    <div class="triangle-up-right"></div>
                    <div class="square-right"></div>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="footer_teaser pl_about_us_widget col-sm-4 col-md-4">
                            <h3>در تماس باشید</h3>
                            <p>میهن وبمستر <small>منابع طراحی وب و گرافیک</small><br>
                                ایران تهران خ شهید مطهری برج آزادی پ 007</p>
                            <p><i class="fa fa-envelope"></i> contact@example.com</p>
                            <p><i class="fa fa-phone"></i> (+98) 265-9987</p>
                            <div class="footer_social">
                                <div class="social_wrapper"><a href="https://www.facebook.com/mihanwebmaster"><i class="fa fa-facebook"></i></a> <a href="#"><i class="fa fa-youtube"></i></a> <a href="#googleplus"><i class="fa fa-google-plus"></i></a></div>
                            </div>
                        </div>
                        <div class="footer_teaser pl_latest_news_widget col-sm-4 col-md-4">
                            <h3>آخرین اخبار</h3>
                            <ul class="media-list">
                                <li class="media"> <a href="#" class="media-photo" style="background-image:url(images/portfolio/t5.jpg)"></a> <a href="#" class="media-date">19<span>مرداد</span></a>
                                    <h5 class="media-heading"><a href="#">عنوان آخرین خبر در این محل نوشته می شود...</a></h5>
                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است...</p>
                                </li>
                                <li class="media"> <a href="#" class="media-photo" style="background-image:url(images/portfolio/t4.jpg)"></a> <a href="#" class="media-date">18<span>تیر</span></a>
                                    <h5 class="media-heading"><a href="#">یک عنوان دیگر از خبر...</a></h5>
                                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است...</p>
                                </li>
                            </ul>
                        </div>
                        <div class="footer_teaser pl_flickr_widget col-sm-4 col-md-4" id="latest-flickr-images">
                            <h3>فلیکرفید</h3>
                            <ul>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <div class="copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4 col-md-4">کپی رایت  ©2014 تمامی حقوق محفوظ است </div>
                        <div class="col-sm-4 col-md-4"></div>
                        <div class="text-right col-sm-4 col-md-4">فارسی شده توسط <a href="http://mihanwebmaster.com/">میهن وبمستر</a> </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
@include('PageElements.Main.CoreJS')
</div>
</body>
</html>