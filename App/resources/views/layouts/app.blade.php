<x-laravel-ui-adminlte::adminlte-layout>

    <body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">
            <!-- Left side column. contains the logo and sidebar -->
            @include('layouts.sidebar')

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                @yield('content')
            </div>

            <!-- Main Footer -->
            <footer class="main-footer">
                <div class="float-right d-none d-sm-block">
                    <b>Version</b> 3.1.0
                </div>
                <strong>Copyright &copy; 2014-2023.</strong> All rights
                reserved.
            </footer>
        </div>
    </body>
</x-laravel-ui-adminlte::adminlte-layout>
