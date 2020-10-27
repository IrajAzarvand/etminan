<!-- right side column. contains the logo and sidebar -->
{{-- <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-right image">
                <img src="{{ asset('images/panel/user.png') }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-right info">
                <p>{{ DashboardUser::$UserName }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> آنلاین</a>
            </div>
        </div>

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">منو</li>
            <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> داشبورد</a></li>
            <li><a href="/" target="_blank"><i class="fa fa-globe"></i> صفحه اصلی سایت</a></li>

            @foreach (DashboardUser::$Menus as $item)
                {{--========================================================================--}}
                {{-- <li class="treeview active">
                    <a id="{{ $item->MainMenu }}" href="{{ $item->Url }}">
                <i class="{{ $item->Icon ? $item->Icon : '' }}"></i>
                <span>{{ $item->MainMenu }}</span>
                @if ($item->sub_menus->count())
                    <span class="pull-left-container">
                        <i class="fa fa-angle-right pull-left"></i>
                    </span>
                @endif
                </a>
                @if ($item->sub_menus->count())
                    <ul class="treeview-menu">
                        @foreach ($item->sub_menus as $subitem)
                            <li><a id="{{ $subitem->SubMenu }}" href="{{ route($subitem->Url) }}">
                                    <i class="{{ $subitem->Icon ? $subitem->Icon : 'fa fa-circle-o' }}"></i>
                                    <span>{{ $subitem->SubMenu }}</span>
                                    <span class="pull-left-container">
                                        <small id="yellow" class="label pull-left bg-yellow"></small>
                                        <small id="green" class="label pull-left bg-green"></small>
                                        <small id="red" class="label pull-left bg-red"></small>
                                        <small id="blue" class="label pull-left bg-blue"></small>
                                        <small id="white" class="label pull-left bg-white"></small>
                                    </span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                @endif
                </li> --}}
                {{--========================================================================--}}
                {{--
            @endforeach
        </ul>
    </section> --}}
    <!-- /.sidebar -->
    {{--
</aside> --}}













<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">

        <span class="brand-text font-weight-light">پنل مدیریت</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <div>
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="{{ asset('images/panel/user.png') }}" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">{{ DashboardUser::$UserName }}</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->

                    <li class="nav-item">
                        <a href="{{ route('dashboard') }}" class="nav-link">
                            <i class="nav-icon fa fa-dashboard"></i>
                            <p>
                                داشبورد
                            </p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="/" class="nav-link" target="_blank">
                            <i class="nav-icon fa fa-globe"></i>
                            <p>
                                صفحه اصلی سایت
                            </p>
                        </a>
                    </li>

                    @foreach (DashboardUser::$Menus as $item)
                        {{--========================================================================--}}
                        <li class="nav-item has-treeview">
                            <a class="nav-link" id="{{ $item->MainMenu }}" href="{{ $item->Url }}">
                                <i class="nav-icon {{ $item->Icon ? $item->Icon : '' }}"></i>
                                <p>
                                    {{ $item->MainMenu }}
                                    <i class="right fa fa-angle-left"></i>
                                </p>
                            </a>
                            @if ($item->sub_menus->count())
                                <ul class="nav nav-treeview">
                                    @foreach ($item->sub_menus as $subitem)
                                        <li class="nav-item">
                                            <a class="nav-link" id="{{ $subitem->SubMenu }}"
                                                href="{{ route($subitem->Url) }}">
                                                <i
                                                    class="nav-icon {{ $subitem->Icon ? $subitem->Icon : 'fa fa-circle-o' }}"></i>
                                                <p>{{ $subitem->SubMenu }}</p>
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        </li>
                        {{--========================================================================--}}

                    @endforeach
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
    </div>
    <!-- /.sidebar -->
</aside>
