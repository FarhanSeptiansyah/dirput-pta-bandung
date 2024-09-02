@extends('layouts.v_template-trans')

@section('content')

<body class="bg-theme bg-theme2">
    <!-- wrapper -->
    <div class="wrapper">
        <div class="authentication-reset-password d-flex align-items-center justify-content-center">
            <div class="row">
                <div class="col-12 col-lg-10 mx-auto">
                    <div class="card">
                        <div class="row g-0">
                            <div class="col-lg-5 border-end">
                                <div class="card-body">
                                    <form action="/dirput-pta/admin/member/process_reset_password/{id_dirput}" method="POST">
                                        @csrf
                                        <div class="p-5">
                                            <h4 class="mt-5 font-weight-bold">Genrate New Password</h4>
                                            <p class="">We received your reset password request. Please enter your new password!</p>
                                            <div class="mb-3">
                                                <label for="password" class="form-label">New Password</label>
                                                <input type="password" id="password" name="password" class="form-control" placeholder="Enter new password" />
                                            </div>
                                            <div class="d-grid gap-2">
                                                <button type="submit" class="btn btn-light">Change Password</button> <a href="/" class="btn btn-light"><i class='bx bx-arrow-back mr-1'></i>Back to Home</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <img src="{{ asset('template')}}/assets/images/login-images/forgot-password-frent-img.jpg" class="card-img login-img h-100" alt="...">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end wrapper -->
@endsection