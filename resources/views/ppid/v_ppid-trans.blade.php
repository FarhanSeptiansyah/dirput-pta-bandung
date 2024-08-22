@extends('layouts.v_template-trans')

@section('content')


<body class="bg-theme bg-theme2">
    <!--wrapper-->
    <div class="wrapper">
        <!--sidebar wrapper -->

        <!--end sidebar wrapper -->

        <!--start header -->
        @include('layouts.v_header_admin-trans')
        <!--end header -->

        <!--start Judul -->
        @include('layouts.v_deskripsi-trans')
        <!--end Judul -->

        <div class="container">
            <div class="col">
                <div class="card radius-15">
                    <div class="card-body text-center">
                        <div class="p-4 border radius-15">
                            <img src="{{ asset('template')}}/img/VjhFohQbEkJi1FBfJsWuXXdpiYx4v1nJjSDGvK90.jpg" width="300" height="400" class="rounded-circle shadow" alt="">
                            <h5 class="mb-0 mt-5">Rahmat Setiawan, S.H. </h5>
                            <p class="mb-3">Pejabat PPID PTA Bandung</p>
                            <div class="list-inline contacts-social mt-3 mb-3"> <a href="javascript:;" class="list-inline-item bg-light text-white border-0"><i class="bx bxl-facebook"></i></a>
                                <a href="javascript:;" class="list-inline-item bg-light text-white border-0"><i class="bx bxl-twitter"></i></a>
                                <a href="javascript:;" class="list-inline-item bg-light text-white border-0"><i class="bx bxl-google"></i></a>
                                <a href="javascript:;" class="list-inline-item bg-light text-white border-0"><i class="bx bxl-linkedin"></i></a>
                            </div>
                            <div class="d-grid"> <a href="#" class="btn btn-light radius-15">Contact Me</a>
                                <div class="d-grid"> <a href="/dirput-pta/admin/member" class="btn btn-light radius-15 mt-3">Back</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--end page wrapper -->
            <!--start overlay-->
            <div class="overlay toggle-icon"></div>
            <!--end overlay-->
            <!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
            <!--End Back To Top Button-->
        </div>
        <!--end wrapper-->


        <!--start switcher-->
        @include('layouts.v_switcher-trans')
        <!--end switcher-->

        <!-- Bootstrap JS -->
        <script src="{{ asset('template')}}/assets/js/bootstrap.bundle.min.js"></script>
        <!--plugins-->
        <script src="{{ asset('template')}}/assets/js/jquery.min.js"></script>
        <script src="{{ asset('template')}}/assets/plugins/simplebar/js/simplebar.min.js"></script>
        <script src="{{ asset('template')}}/assets/plugins/metismenu/js/metisMenu.min.js"></script>
        <script src="{{ asset('template')}}/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
        <!--app JS-->
        <script src="{{ asset('template')}}/assets/js/app.js"></script>
</body>

</html>
@endsection