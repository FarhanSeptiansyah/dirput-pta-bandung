@extends('layouts.v_template-trans')

@section('content')

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
        <br><br>
        <h4 class="panel-title text-center">
            DATA USER
        </h4>
        <!-- Notificatin -->
        @if (session('pesan'))
        <div class="alert border-0 alert-dismissible fade show py-2">
            <div class="d-flex align-items-center">
                <div class="font-35 text-white"><i class='bx bxs-check-circle'></i>
                </div>
                <div class="ms-3">
                    <h6 class="mb-0 text-white">Success Alerts</h6>
                    <div class="text-white">{{ session('pesan') }} !!!</div>
                </div>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <div class="card-body">
            <div class="table-responsive">
                <td class="text-center" style="font-size: 5px;">
                    @if(Auth::user()->role==='admin')
                    <a href="/home" class="btn btn-sm btn-outline-danger px-3 mb-2"></i>Kembali</a>
                    <a href="/dirput-pta/admin/member/add" class="btn btn-sm btn-outline-light px-3 mb-2"></i>Tambah User</a>
                    @elseif(Auth::user()->role==='staf')
                    <a href="/home" class="btn btn-sm btn-outline-danger px-3 mb-2"></i>Kembali</a>
                    @elseif(Auth::user()->role==='member')

                    @endif
                </td>
                </td>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th class="text-center">NO</th>
                            <th class="text-center">FOTO</th>
                            <th class="text-center">NAMA</th>
                            <th class="text-center">USERNAME</th>
                            <th class="text-center">ROLE</th>
                            <th class="text-center">SETTING</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th class="text-center">NO</th>
                            <th class="text-center">FOTO</th>
                            <th class="text-center">NAMA</th>
                            <th class="text-center">USERNAME</th>
                            <th class="text-center">ROLE</th>
                            <th class="text-center">SETTING</th>
                        </tr>
                    </tfoot>
                    @foreach ($member as $data)
                    <tr>
                        <td class="text-center" scope="row">{{$loop->iteration}}</td>
                        <td class="text-center"> <img src="{{ asset('public/img/'.$data->foto_user) }}" width="30" height="40" alt="" title=""></td>
                        <td>{{ $data->name }}</td>
                        <td class="text-center">{{ $data->username }}</td>
                        <td class="text-center">
                            {{ $data->role }}
                        </td>
                        <td class="text-center">
                            @if(Auth::user()->role==='admin')
                            <a href="/dirput-pta/admin/member/edit/{{$data->id}}" class="btn btn-sm btn-outline-warning px-3">Detail</a>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-sm btn-outline-danger px-3" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $data->id }}">
                                hapus</button>
                            @elseif(Auth::user()->role==='staf')
                            <a href="/dirput-pta/admin/member/ppid" class="btn btn-sm btn-outline-warning px-3">Login admin</a>
                            @elseif(Auth::user()->role==='member')
                            <a href="/dirput-pta/admin/member/ppid" class="btn btn-sm btn-outline-warning px-3">Login admin</a>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </table>
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

@foreach ($member as $data)
<!--start Modal Hapus -->
<div class="modal fade" id="deleteModal{{ $data->id }}" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header text-center">
                <h5 class="modal-title text-warning"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <p class="text-center">Apakah anda ingin menghapus user {{ $data->name }} ?</p>
            <div class="modal-footer">
                <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Tidak</button>
                <a href="/dirput-pta/admin/member/delete/{{$data->id}}" type="button" class="btn btn-sm btn-danger">Ya</a>
            </div>
        </div>
    </div>
</div>
<!--end Modal Hapus-->

@endforeach

<!-- Bootstrap JS -->
<script src="{{ asset('template')}}/assets/js/bootstrap.bundle.min.js"></script>
<!--plugins-->
<script src="{{ asset('template')}}/assets/js/jquery.min.js"></script>
<script src="{{ asset('template')}}/assets/plugins/simplebar/js/simplebar.min.js"></script>
<script src="{{ asset('template')}}/assets/plugins/metismenu/js/metisMenu.min.js"></script>
<script src="{{ asset('template')}}/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
<!--app JS-->
<script src="{{ asset('template')}}/assets/js/app.js"></script>
@endsection