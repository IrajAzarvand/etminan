@extends('PageElements.Main.InnerPagesLayout')
@section('PageTitle', 'محصولات')
@section('content')

    <div class="full_page_photo no_photo">
        <div class="hgroup">
            <div class="hgroup_title animated bounceInUp skincolored">
                <div class="container">
                    <h1 class="">{{$SectionTitle}}</h1>
                </div>
            </div>
            <div class="hgroup_subtitle animated bounceInUp ">
                <div class="container">
                    <p></p>
                </div>
            </div>
        </div>
    </div>
    <div class="main">

        <section class="portfolio_slider_wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-8">
                        <div class="portfolio_slider_wrapper">
                            <div class="flexslider" id="portfolio_slider">
                                <ul class="slides">
                                    @foreach($Product['images'] as $image)
                                        <li class="item" data-thumb="{{$image}}"
                                            style="background-image: url({{$image}})">
                                            <div class="container"><a href="{{$image}}" target="_blank" class="lightbox_portfolio"
                                                                      title="title on a"></a>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div id="carousel" class="flexslider">
                                <ul class="slides">
                                    @foreach($Product['images'] as $image)
                                        <li><img src="{{$image}}" alt=""></li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <div class="portfolio_details">
                            <h2 class="section_header">درباره این پروژه</h2>
                            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                                است. چاپگرها و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط
                                فعلی تکنولوژی مورد نیاز و کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای
                                زیادی در شصت و سه درصد گذشته، حال و آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با
                                نرم افزارها شناخت بیستری را برای طراحان رایانه ای ولورم ایپسوم متن ساختگی با تولید سادگی
                                نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و متون بلکه روزنامه و
                                مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و کاربردهای
                                متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و
                                آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیستری را برای
                                طراحان رایانه ای و</p>
                            <p>طراحی شده توسط <a href="http://mihanwebmaster.com/" target="_blank">میهن وبمستر</a>. </p>
                            <br>
                            <br>
                            <div>
                                <p><strong>تاریخ:</strong> اردیبهشت 93</p>
                                <p><strong>مشتری:</strong> شرکت ملی نفت</p>
                                <p><strong>دسته بندی:</strong> طراحی</p>
                                <p><strong>مکان:</strong> اروپا</p>
                                <p><strong>امتیاز:</strong><span class="rating r9"></span></p>
                            </div>
                            <br>
                            <br>
                            <a href="#" class="btn btn-danger center-block ">خرید محصول</a></div>
                    </div>
                </div>
                <ul class="pager">
                    <li class="next"><a href="portfolio_item.html">← بازگشت</a></li>
                </ul>
            </div>
        </section>
        <section class="portfolio_teasers_wrapper">
            <div class="container">
                <h2 class="elegant centered section_header">پروژه های مرتبط<small></small></h2>
                <div class="portfolio_strict row">
                    <div class="col-sm-4 col-md-4">
                        <div class="portfolio_item"><a href="portfolio_item.html">
                                <figure style="background-image:url(images/portfolio/b2.jpg)">
                                    <figcaption>
                                        <div class="portfolio_description">
                                            <h3>پروژه میهن وبمستر</h3>
                                            <span class="cross"></span>
                                            <p>مردم</p>
                                        </div>
                                    </figcaption>
                                </figure>
                            </a></div>
                    </div>
                    <div class="col-sm-4 col-md-4">
                        <div class="portfolio_item"><a href="portfolio_item.html">
                                <figure style="background-image:url(images/portfolio/t5.jpg)">
                                    <figcaption>
                                        <div class="portfolio_description">
                                            <h3>پروژه میهن وبمستر</h3>
                                            <span class="cross"></span>
                                            <p>مردم</p>
                                        </div>
                                    </figcaption>
                                </figure>
                            </a></div>
                    </div>
                    <div class="col-sm-4 col-md-4">
                        <div class="portfolio_item"><a href="portfolio_item.html">
                                <figure style="background-image:url(images/portfolio/p3.jpg)">
                                    <figcaption>
                                        <div class="portfolio_description">
                                            <h3>پروژه میهن وبمستر</h3>
                                            <span class="cross"></span>
                                            <p>مردم</p>
                                        </div>
                                    </figcaption>
                                </figure>
                            </a></div>
                    </div>
                </div>
            </div>
        </section>

    </div>


@endsection

