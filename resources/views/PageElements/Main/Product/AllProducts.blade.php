@extends('PageElements.Main.MasterLayout')
@section('PageTitle', 'محصولات')
@section('content')

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
                        {{--                    <li><a href="#" data-filter=".cat_artists">هنری</a></li>--}}
                        @foreach($CategoriesList as $cat)
                            <li><a href="#" data-filter=".{{$cat['name']}}">{{$cat['name']}}</a></li>

                        @endforeach
                    </ul>
                    <div class="row isotope_portfolio_container">
                        @foreach($PList as$item)
                            <div class="{{$item['cat']}} col-xs-12 col-sm-6 col-md-4 col-lg-4">
                                <div class="portfolio_item">
                                    <a href="portfolio_item.html">
                                        <figure
                                            style="background-image:url({{$item['image']}})">
                                            <figcaption>
                                                <div class="portfolio_description">
                                                    <h3>{{$item['name']}}</h3>

                                                </div>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </div>
                            </div>
                        @endforeach


                    </div>
                </div>
            </section>
        </div>
    </section>

@endsection
