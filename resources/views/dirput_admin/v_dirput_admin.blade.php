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
			<br><br>
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
						<a href="/dirput-pta/admin/add" class="btn btn-sm btn-outline-light px-3 mb-2"><i class="lni lni-circle-plus"></i>Tambah Data</a>
					</td>
					<table id="example" class="table table-striped table-bordered" style="width:100%">
						<thead>
							<tr>
								<th class="text-center" style="width: 10px;">NO</th>
								<th class="text-center">NOMOR PERKARA BANDING</th>
								<th class="text-center">PUTUSAN</th>
								<th class="text-center">UPLOAD</th>
								<th class="text-center" style="width: 150px;">ACTION</th>
							</tr>
						</thead>
						<tfoot>
							<tr>
								<th class="text-center">NO</th>
								<th class="text-center">NOMOR PERKARA BANDING</th>
								<th class="text-center">PUTUSAN</th>
								<th class="text-center">UPLOAD</th>
								<th class="text-center" style="width: 150px;">ACTION</th>
						</tfoot>
						<tbody>
							@foreach ($dirput as $data)
							<tr>
								<td class="text-center">{{$loop->iteration}}</td>
								<td class="text-center"><span class="btn btn-sm btn-outline-light px-3 mb-2">Putusan Pengadilan Tinggi Agama Bandung Nomor {{ $data->no_banding }}</span></td>
								<td class="text-center">
									@if($data->putusan=="")
									<i class="lni lni-ban text-danger"></i>
									<span class="btn btn-sm btn-outline-danger px-3 mb-2">not avalaible</span>
									@elseif($data->putusan=="0000-00-00")
									<i class="lni lni-ban text-danger"></i>
									<span class="btn btn-sm btn-outline-danger px-3 mb-2">putusan not avalaible</span>
									@else
									<a href="/dirput-pta/dirput/{{$data->putusan}}" class="btn btn-sm btn-outline-light px-3 mb-2" target="_blank">
										<i class="lni lni-cloud-download"></i>
										<span>download</span>
									</a>
									@endif
								</td>
								<td class="text-center">
									@if($data->updated_at=="")
									<span class="btn btn-sm btn-outline-light px-3 mb-2">{{ date('d-m-Y H:i:s', strtotime($data->created_at)) }}</span>
									@elseif($data->updated_at=="0000-00-00 00:00:00")
									<span class="btn btn-sm btn-outline-light px-3 mb-2">{{ date('d-m-Y H:i:s', strtotime($data->created_at)) }}</span>
									@else
									<span class="btn btn-sm btn-outline-light px-3 mb-2">{{ date('d-m-Y H:i:s', strtotime($data->updated_at)) }}</span>
									@endif
								</td>
								<td class="text-center">
									@if(Auth::user()->level===1)
									<a href="/dirput-pta/admin/edit/{{$data->id_dirput}}" class="btn btn-sm btn-outline-primary px-3">edit</a>
									<!-- Button trigger modal -->
									<button type="button" class="btn btn-sm btn-outline-danger px-3" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $data->id_dirput }}">
										hapus</button>
									@elseif(Auth::user()->level===2)
									<a href="/dirput-pta/admin/edit/{{$data->id_dirput}}" class="btn btn-sm btn-outline-primary px-3">edit</a>
									<!-- Button trigger modal -->
									<button type="button" class="btn btn-sm btn-outline-danger px-3" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $data->id_dirput }}">
										hapus</button>
									@elseif(Auth::user()->level===3)
									<button class="btn btn-sm btn-outline-warning px-3">Login Admin</button>
									@endif
								</td>
							</tr>
							@endforeach
						</tbody>
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

	@foreach ($dirput as $data)
	<!--start Modal Hapus -->
	<div class="modal fade" id="deleteModal{{ $data->id_dirput }}" tabindex="-1" aria-hidden="true">
		<div class="modal-dialog modal-sm">
			<div class="modal-content">
				<div class="modal-header text-center">
					<h5 class="modal-title text-warning"></h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<p class="text-center">Apakah anda ingin menghapus perkara nomor {{ $data->no_banding }} ?</p>
				<div class="modal-footer">
					<button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Tidak</button>
					<a href="/dirput-pta/admin/delete/{{$data->id_dirput}}" type="button" class="btn btn-sm btn-danger">Ya</a>
				</div>
			</div>
		</div>
	</div>
	<!--end Modal Hapus-->

	@endforeach

	<!--start switcher-->
	@include('layouts.v_switcher-trans')
	<!--end switcher-->

	<!-- Bootstrap JS -->
	<script src="assets/js/bootstrap.bundle.min.js"></script>
	<!--plugins-->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
	<script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
	<script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
	<!--app JS-->
	<script src="assets/js/app.js"></script>
</body>

</html>
@endsection