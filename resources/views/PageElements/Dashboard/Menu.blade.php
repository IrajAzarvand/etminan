<!-- right side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-right image">
                <img src="{{asset('images/panel/user.png')}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-right info">
                <p>{{DashboardUser::$UserName}}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> آنلاین</a>
            </div>
        </div>

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">منو</li>
            <li><a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> داشبورد</a></li>


            <li class="treeview">
                <a href="#">
                    <i class="fa fa-gears"></i>
                    <span>نمودارها</span>
                    <span class="pull-left-container">
              <i class="fa fa-angle-right pull-left"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="pages/charts/chartjs.html"><i class="fa fa-circle-o"></i>نمودار ChartJS</a></li>
                    <li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i>نمودار Morris</a></li>
                    <li><a href="pages/charts/flot.html"><i class="fa fa-circle-o"></i>نمودار Flot</a></li>
                    <li><a href="pages/charts/inline.html"><i class="fa fa-circle-o"></i>نمودار Inline charts</a></li>
                </ul>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
