@extends('PageElements.Main.MasterLayout')
@section('PageTitle', 'محصولات')
@section('content')

@php
$AllProducts=collect($ProductsContents)->where('section','products');
$SectionTitle=$AllProducts->where('element_title','section_title')->pluck('element_content')->first();
@endphp

<section class="portfolio_teasers_wrapper">
    <div class="container triangles-of-section">
        <div class="triangle-up-left"></div>
        <div class="square-left"></div>
        <div class="triangle-up-right"></div>
        <div class="square-right"></div>
    </div>
    <div class="container">
        <h2 class="section_header fancy centered">{{ $SectionTitle }}</h2>

        <section class="portfolio_strict">
            <div class="container">
                <ul class="portfolio_filters">
                    <li><a href="#" data-filter="*">همه</a></li>
                    <li><a href="#" data-filter=".cat_artists">هنری</a></li>
                    <li><a href="#" data-filter=".cat_people">مردم</a></li>
                    <li><a href="#" data-filter=".cat_travel">سفر</a></li>
                    <li><a href="#" data-filter=".cat_poetic">شاعرانه</a></li>
                </ul>
                <div class="row isotope_portfolio_container">
                    <div class="cat_travel col-xs-12 col-sm-6 col-md-4 col-lg-4">
                        <div class="portfolio_item">
                            <a href="portfolio_item.html">
                                <figure style="background-image:url({{asset('storage/Main/Products/1/img.jpg')}})">
                                    <figcaption>
                                        <div class="portfolio_description">
                                            <h3>پروژه میهن وبمستر</h3>
                                            <span class="cross"></span>
                                            <p>سفر</p>
                                        </div>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                    </div>
                    <div class="cat_people col-xs-12 col-sm-6 col-md-4 col-lg-4">
                        <div class="portfolio_item">
                            <a href="portfolio_item.html">
                                <figure style="background-image:url(images/portfolio/t5.jpg)">
                                    <figcaption>
                                        <div class="portfolio_description">
                                            <h3>پروژه میهن وبمستر</h3>
                                            <span class="cross"></span>
                                            <p>مردم</p>
                                        </div>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                    </div>
                    <div class="cat_artists col-xs-12 col-sm-6 col-md-4 col-lg-4">
                        <div class="portfolio_item">
                            <a href="portfolio_item.html">
                                <figure style="background-image:url(images/portfolio/p4.jpg)">
                                    <figcaption>
                                        <div class="portfolio_description">
                                            <h3>پروژه میهن وبمستر</h3>
                                            <span class="cross"></span>
                                            <p>هنری</p>
                                        </div>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                    </div>
                    <div class="cat_people col-xs-12 col-sm-6 col-md-4 col-lg-4">
                        <div class="portfolio_item">
                            <a href="portfolio_item.html">
                                <figure style="background-image:url(images/portfolio/b4.jpg)">
                                    <figcaption>
                                        <div class="portfolio_description">
                                            <h3>پروژه میهن وبمستر</h3>
                                            <span class="cross"></span>
                                            <p>مردم</p>
                                        </div>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                    </div>
                    <div class="cat_travel col-xs-12 col-sm-6 col-md-8 col-lg-8">
                        <div class="portfolio_item">
                            <a href="portfolio_item.html">
                                <figure style="background-image:url(images/portfolio/b1.jpg)">
                                    <figcaption>
                                        <div class="portfolio_description">
                                            <h3>پروژه میهن وبمستر</h3>
                                            <span class="cross"></span>
                                            <p>سفر</p>
                                        </div>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                    </div>
                    <div class="cat_people col-xs-12 col-sm-6 col-md-4 col-lg-4">
                        <div class="portfolio_item">
                            <a href="portfolio_item.html">
                                <figure style="background-image:url(images/portfolio/b5.jpg)">
                                    <figcaption>
                                        <div class="portfolio_description">
                                            <h3>پروژه میهن وبمستر</h3>
                                            <span class="cross"></span>
                                            <p>مردم</p>
                                        </div>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                    </div>
                    <div class="cat_poetic col-xs-12 col-sm-6 col-md-4 col-lg-4">
                        <div class="portfolio_item">
                            <a href="portfolio_item.html">
                                <figure style="background-image:url(images/portfolio/b3.jpg)">
                                    <figcaption>
                                        <div class="portfolio_description">
                                            <h3>پروژه میهن وبمستر</h3>
                                            <span class="cross"></span>
                                            <p>شاعرانه</p>
                                        </div>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                    </div>
                    <div class="cat_artists col-xs-12 col-sm-6 col-md-4 col-lg-4">
                        <div class="portfolio_item">
                            <a href="portfolio_item.html">
                                <figure style="background-image:url(images/portfolio/p3.jpg)">
                                    <figcaption>
                                        <div class="portfolio_description">
                                            <h3>پروژه میهن وبمستر</h3>
                                            <span class="cross"></span>
                                            <p>هنری</p>
                                        </div>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                    </div>
                    <div class="cat_travel col-xs-12 col-sm-6 col-md-8 col-lg-8">
                        <div class="portfolio_item">
                            <a href="portfolio_item.html">
                                <figure style="background-image:url(images/portfolio/t4.jpg)">
                                    <figcaption>
                                        <div class="portfolio_description">
                                            <h3>پروژه میهن وبمستر</h3>
                                            <span class="cross"></span>
                                            <p>سفر</p>
                                        </div>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                    </div>
                    <div class="cat_artists col-xs-12 col-sm-6 col-md-4 col-lg-4">
                        <div class="portfolio_item">
                            <a href="portfolio_item.html">
                                <figure style="background-image:url(images/portfolio/a5.jpg)">
                                    <figcaption>
                                        <div class="portfolio_description">
                                            <h3>پروژه میهن وبمستر</h3>
                                            <span class="cross"></span>
                                            <p>هنری</p>
                                        </div>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                    </div>
                    <div class="cat_poetic col-xs-12 col-sm-6 col-md-4 col-lg-4">
                        <div class="portfolio_item">
                            <a href="portfolio_item.html">
                                <figure style="background-image:url(images/portfolio/a6.jpg)">
                                    <figcaption>
                                        <div class="portfolio_description">
                                            <h3>پروژه میهن وبمستر</h3>
                                            <span class="cross"></span>
                                            <p>شاعرانه</p>
                                        </div>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                    </div>
                    <div class="cat_artists col-xs-12 col-sm-6 col-md-4 col-lg-4">
                        <div class="portfolio_item">
                            <a href="portfolio_item.html">
                                <figure style="background-image:url(images/portfolio/a1.jpg)">
                                    <figcaption>
                                        <div class="portfolio_description">
                                            <h3>پروژه میهن وبمستر</h3>
                                            <span class="cross"></span>
                                            <p>هنری</p>
                                        </div>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                    </div>
                    <div class="cat_artists col-xs-12 col-sm-6 col-md-4 col-lg-4">
                        <div class="portfolio_item">
                            <a href="portfolio_item.html">
                                <figure style="background-image:url(images/portfolio/a3.jpg)">
                                    <figcaption>
                                        <div class="portfolio_description">
                                            <h3>پروژه میهن وبمستر</h3>
                                            <span class="cross"></span>
                                            <p>هنری</p>
                                        </div>
                                    </figcaption>
                                </figure>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</section>

@endsection
