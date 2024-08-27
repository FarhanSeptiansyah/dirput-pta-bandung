<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" href="{{{ asset('favicon/favicon.ico') }}}" />
    <!--plugins-->

    <title> {{ $title }} | PTA Bandung</title>

    <link href="{{ asset('template')}}/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <link href="{{ asset('template')}}/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
    <link href="{{ asset('template')}}/assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
    <link href="{{ asset('template')}}/assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
    <!-- loader-->
    <link href="{{ asset('template')}}/assets/css/pace.min.css" rel="stylesheet" />
    <script src="{{ asset('template')}}/assets/js/pace.min.js"></script>
    <!-- Bootstrap CSS -->
    <link href="{{ asset('template')}}/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('template')}}/assets/css/bootstrap-extended.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link href="{{ asset('template')}}/assets/css/app.css" rel="stylesheet">
    <link href="{{ asset('template')}}/assets/css/icons.css" rel="stylesheet">

</head>

<body class="bg-theme bg-theme3">
    <!--wrapper-->
    <div class="wrapper">
        <!--sidebar wrapper -->
        @include('layouts.v_sidebar-trans')
        <!--end sidebar wrapper -->

        <!--start header -->
        <!--end header -->

        <!--start page wrapper -->
        @yield('content')
        <!--end page wrapper -->

        <!--start overlay-->
        <div class="overlay toggle-icon"></div>
        <!--end overlay-->
        <!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
        <!--End Back To Top Button-->
        <!--start footer -->
        @include('layouts.v_footer-trans')
        <!--end footer -->
    </div>
    <!--end wrapper-->

    <!--start switcher-->

    <!--end switcher-->

    <!-- Bootstrap JS -->
    <script src="{{ asset('template')}}/assets/js/bootstrap.bundle.min.js"></script>
    <!--plugins-->
    <script src="{{ asset('template')}}/assets/js/jquery.min.js"></script>
    <script src="{{ asset('template')}}/assets/plugins/simplebar/js/simplebar.min.js"></script>
    <script src="{{ asset('template')}}/assets/plugins/metismenu/js/metisMenu.min.js"></script>
    <script src="{{ asset('template')}}/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
    <script src="{{ asset('template')}}/assets/plugins/apexcharts-bundle/js/apexcharts.min.js"></script>
    <script src="{{ asset('template')}}/assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('template')}}/assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#Transaction-History').DataTable({
                lengthMenu: [
                    [6, 10, 20, -1],
                    [6, 10, 20, 'Todos']
                ]
            });
        });
    </script>

    <!--app JS-->
    <script src="{{ asset('template')}}/assets/js/app.js"></script>
    <script>
        new PerfectScrollbar('.product-list');
        new PerfectScrollbar('.customers-list');
    </script>
    <!--plugins-->
    <script src="{{ asset('template')}}/assets/js/jquery.min.js"></script>
    <script src="{{ asset('template')}}/assets/plugins/simplebar/js/simplebar.min.js"></script>
    <script src="{{ asset('template')}}/assets/plugins/metismenu/js/metisMenu.min.js"></script>
    <script src="{{ asset('template')}}/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
    <script src="{{ asset('template')}}/assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('template')}}/assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#example').DataTable(

            );
            $("div.dataTables_filter input").focus();
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#example').DataTable()
        });
    </script>

    <script>
        $(document).ready(function() {
            var table = $('#example2').DataTable({
                lengthChange: false,
                buttons: ['copy', 'excel', 'pdf', 'print']
            });

            table.buttons().container()
                .appendTo('#example2_wrapper .col-md-6:eq(0)');
        });
    </script>
    <!--app JS-->
    <script src="{{ asset('template')}}assets/js/app.js"></script>
</body>

</html>