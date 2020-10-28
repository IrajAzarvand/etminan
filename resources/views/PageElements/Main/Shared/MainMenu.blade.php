@php
$MainNav=NavPicker();
@endphp
<div id="mainmenu" class="menu_container">
    @php
    if (App::getLocale()=='fa' || App::getLocale()=='ar') {
    echo '<label class="mobile_collapser">منو</label>';

    } else {
    echo '<label class="mobile_collapser">Menu</label>';

    }
    @endphp

    <!-- Mobile menu title -->
    <ul>
        @foreach ($MainNav as $main_menu)
            <li @if ($main_menu->sub_navs->count()) class="has-dropdown"
        @endif>
        <a @if ($main_menu->sub_navs->count())
            href="#"
        @else
            href="{{ $main_menu->route_name ? route($main_menu->route_name) : $main_menu->url }}"
            @endif>
            {{ $main_menu['content_' . App::getLocale()] }}</a>
        @if ($main_menu->sub_navs->count())
            <div class="dmui_dropdown_block">
                <div class="dmui-container">
                    <div class="dmui-col span1">
                        <div class="dmui-container">
                            <ul class="dmui-submenu">
                                @foreach ($main_menu->sub_navs as $sub_menu)
                                    <li><a
                                            href="{{ $sub_menu->route_name ? route($sub_menu->route_name) : $sub_menu->url }}"><img
                                                src="{{ asset('Main/images/' . $sub_menu['content_' . App::getLocale()] . '.png') }}"
                                                alt=""> {{ $sub_menu['content_' . App::getLocale()] }}</a></li>
                                @endforeach

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        </li>
        @endforeach
        {{-- <li><a href="#">زبان ها</a>--}}
            {{-- <div class="dmui_dropdown_block">--}}
                {{-- <div class="dmui-container">--}}
                    {{-- <div class="dmui-col span1">--}}
                        {{-- <div class="dmui-container">--}}
                            {{-- <ul class="dmui-submenu">--}}
                                {{-- <li><a href="{{ route('locale', ['fa']) }}"> <img
                                            src="{{ asset('Main/images/IranFlag.png') }}" alt=""> فارسی / Persian</a>
                                </li>--}}
                                {{-- <li><a href="{{ route('locale', ['en']) }}"><img
                                            src="{{ asset('Main/images/UsaFlag.png') }}" alt=""> انگلیسی / English</a>
                                </li>--}}
                                {{-- <li><a href="{{ route('locale', ['ru']) }}"><img
                                            src="{{ asset('Main/images/RussiaFlag.png') }}" alt=""> روسی / Russian</a>
                                </li>--}}
                                {{-- <li><a href="{{ route('locale', ['ar']) }}"><img
                                            src="{{ asset('Main/images/ArabiaFlag.png') }}" alt=""> عربی / Arabic</a>
                                </li>--}}
                                {{-- </ul>--}}
                            {{-- </div>--}}
                        {{-- </div>--}}
                    {{-- </div>--}}
                {{-- </div>--}}
            {{-- </li>--}}
    </ul>
</div>
