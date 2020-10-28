@php
$NewProducts=collect($IndexContents)->where('section','new_products');
$SectionTitle=$NewProducts->where('element_title','section_title')->pluck('element_content')->first();
$BtnNewProducts=$NewProducts->where('element_title','btn_title')->pluck('element_content')->first();
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
        <div class="portfolio_strict row">
            <div class="col-sm-4 col-md-4">
                <div class="portfolio_item wow fadeInUp"><a href="portfolio_item.html">
                        <figure style="background-image:url({{ asset('Main/images/portfolio/b3.jpg') }})">
                            <figcaption>
                                <div class="portfolio_description">
                                    <h3>پروژه کلین استارت</h3>
                                    <span class="cross"></span>
                                    <p>طراحی</p>
                                </div>
                            </figcaption>
                        </figure>
                    </a></div>
            </div>
            <div class="col-sm-4 col-md-4">
                <div class="portfolio_item wow fadeInUp"><a href="portfolio_item.html">
                        <figure style="background-image:url({{ asset('Main/images/portfolio/a4.jpg') }})">
                            <figcaption>
                                <div class="portfolio_description">
                                    <h3>پروژه کلین استارت</h3>
                                    <span class="cross"></span>
                                    <p>طراحی</p>
                                </div>
                            </figcaption>
                        </figure>
                    </a></div>
            </div>
            <div class="col-sm-4 col-md-4">
                <div class="portfolio_item wow fadeInUp"><a href="portfolio_item.html">
                        <figure style="background-image:url({{ asset('Main/images/portfolio/t5.jpg') }})">
                            <figcaption>
                                <div class="portfolio_description">
                                    <h3>پروژه کلین استارت</h3>
                                    <span class="cross"></span>
                                    <p>طراحی</p>
                                </div>
                            </figcaption>
                        </figure>
                    </a></div>
            </div>
        </div>
        <div class="centered_button"><a class="btn btn-primary" href="portfolio.html">{{ $BtnNewProducts }}</a></div>
    </div>
</section>
