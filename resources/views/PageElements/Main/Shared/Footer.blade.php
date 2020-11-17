<footer>
    @php
    $Footer=collect($IndexContents)->where('section','footer');
    foreach ($Footer as $key => $value) {
    if($value['element_title']=='address')
    {
    $Address= $value['element_content'];
    }
    elseif($value['element_title']=='copyright')
    {
    $CopyRight= $value['element_content'];
    }
    elseif($value['element_title']=='section_title')
    {
    $SectionTitle= $value['element_content'];
    }
    }


    @endphp
    <section class="footer_teasers_wrapper dark_section">
        <div class="container">
            <div class="row">

                <div class="footer_teaser pl_about_us_widget col-sm-9 col-md-9">
                    <h3>{{$SectionTitle}}</h3>

                    <p>{{$Address}}</p>
                </div>
                <div class="footer_teaser pl_about_us_widget col-sm-9 col-md-9">
                    <p><i class="fa fa-envelope"></i> info@hajabdollah.com</p>
                </div>

                <div class="footer_teaser pl_about_us_widget col-sm-9 col-md-9">
                    <p><i class="fa fa-phone"></i> 041-34328221 | 041-34328223</p>
                </div>
                <div class="footer_teaser pl_about_us_widget col-sm-9 col-md-9">
                    <div class="footer_social">
                        <div class="social_wrapper">
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-paper-plane"></i></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-md-4">{{$CopyRight}}</div>
                <div class="col-sm-4 col-md-4"></div>
            </div>
        </div>
    </div>
</footer>
