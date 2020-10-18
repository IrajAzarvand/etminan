
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{config('app.name')}} - @yield('PageTitle')</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

@include('PageElements.Dashboard.Css')

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
    @include('PageElements.Dashboard.DashboardUser')

@include('PageElements.Dashboard.Topbar')

@include('PageElements.Dashboard.Menu')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                داشبورد
            </h1>

        </section>

        <!-- Main content -->
        <section class="content">
            <!-- Info boxes -->
            <div class="row">

                @section('content')
                @show

            </div>
            <!-- /.row -->


        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer text-left">
        <strong>.CopyRight &copy; 2014-2020 <a href="http://etminan.net">Etminan Co</a></strong>
    </footer>


</div>
<!-- ./wrapper -->

@include('PageElements.Dashboard.Js')

</body>
</html>
