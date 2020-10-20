<div id="mainmenu" class="menu_container">
    <label class="mobile_collapser">منو</label>
    <!-- Mobile menu title -->
    <ul>
        <li class="active"><a href="index.html">صفحه اصلی</a></li>
        <li><a href="about_us.html">محصولات</a></li>
        <li><a href="services.html">گالری تصاویر</a></li>
        <li><a href="portfolio.html">دفاتر فروش</a></li>
        <li><a href="blog.html">استخدام</a></li>
        <li><a href="#">درباره ما</a>
            <div class="dmui_dropdown_block" >
                <div class="dmui-container">
                    <div class="dmui-col span1">
                        <div class="dmui-container">
                            <ul class="dmui-submenu">
                                <li><a href="#">تاریخچه</a></li>
                                <li><a href="#">پیام مدیر عامل</a></li>
                                <li><a href="#">گواهینامه ها و افتخارات</a></li>
                                <li><a href="#">چارت سازمانی</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li><a href="contact.html">تماس با ما</a></li>
        <li><a href="#">زبان ها</a>
            <div class="dmui_dropdown_block" >
                <div class="dmui-container">
                    <div class="dmui-col span1">
                        <div class="dmui-container">
                            <ul class="dmui-submenu">
                                <li><a href="{{route('locale',['fa'])}}"> <img src="{{asset('Main/images/IranFlag.png')}}" alt=""> فارسی / Persian</a></li>
                                <li><a href="{{route('locale',['en'])}}"><img src="{{asset('Main/images/UsaFlag.png')}}" alt=""> انگلیسی / English</a></li>
                                <li><a href="{{route('locale',['ru'])}}"><img src="{{asset('Main/images/RussiaFlag.png')}}" alt=""> روسی / Russian</a></li>
                                <li><a href="{{route('locale',['ar'])}}"><img src="{{asset('Main/images/ArabiaFlag.png')}}" alt=""> عربی / Arabic</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </li>
    </ul>
</div>
