@extends('layouts.v_template-trans')

@section('content')
<!--wrapper-->
<div class="wrapper">
	<!--sidebar wrapper -->

	<!--end sidebar wrapper -->

	<!--start header -->
	<!--end header -->

	@include('layouts.v_deskripsi-trans')

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
					<div class="text-white">{{ session('pesan') }}!</div>
				</div>
			</div>
			<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>
		@endif
		<!-- <form method="GET" action="/filter">
				<span>
					<label>Start Date</label>
					<input type="date" name="start_date" class="form-control">
				</span>
				<span>
					<label>End Date</label>
					<input type="date" name="end_date" class="form-control">
				</span>
				<span>
					<button type="submit" class="btn btn-sm btn-outline-light px-3 mt-2 mb-2">FIlter</button>
				</span>
			</form> -->
		<div class="card-body">
			<div class="table-responsive">
				<table id="example" class="table table-borderedless" style="width:100%">
					<thead>
						<tr>
							<th class="text-start" style="width: 5px;">NO</th>
							<th class="text-start">NOMOR PERKARA BANDING</th>
							<th class="text-start">JENIS PERKARA</th>
							<th class="text-start">TANGGAL PUTUS</th>
							<th class="text-start">PUTUSAN</th>
							<th class="text-start">UPLOAD</th>
							<!-- <th class="text-start" style="width: 150px;">ACTION</th> -->
						</tr>
					</thead>
					<tfoot>
						<tr>
							<th class="text-start">NO</th>
							<th class="text-start">NOMOR PERKARA BANDING</th>
							<th class="text-start">JENIS PERKARA</th>
							<th class="text-start">TANGGAL PUTUS</th>
							<th class="text-start">PUTUSAN</th>
							<th class="text-start">UPLOAD</th>
							<!-- <th class="text-start">ACTION</th> -->
						</tr>
					</tfoot>
					<tbody>
						@foreach ($dirput as $data)
						<tr>
							<td class="text-start">{{$loop->iteration}}</td>
							<td class="text-start"><span class="btn btn-sm btn-outline-light px-3 mb-2">{{ $data->no_banding }}</span></td>
							<td class="text-start">
								@if($data->j_perkara=="")
								<i class="lni lni-ban text-danger"></i>
								@elseif($data->j_perkara=="0000-00-00")
								<i class="lni lni-ban text-danger"></i>
								@else
								<span class="btn btn-sm btn-outline-light px-3 mb-2">{{ $data->j_perkara }}</span>
								@endif
							</td>
							<td class="text-start">
								@if($data->tgl_put_banding=="")
								<i class="lni lni-ban text-danger"></i>
								@elseif($data->tgl_put_banding=="0000-00-00")
								<i class="lni lni-ban text-danger"></i>
								@else
								<span class="btn btn-sm btn-outline-light px-3 mb-2">{{ date('d-m-Y', strtotime($data->tgl_put_banding)) }}</span>
								@endif
							</td>
							<td class="text-start">
								@if($data->putusan=="")
								<i class="lni lni-ban text-danger"></i>
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
							<td class="text-start">
								@if($data->updated_at=="")
								<span class="btn btn-sm btn-outline-light px-3 mb-2">{{ date('d-m-Y H:i:s', strtotime($data->created_at)) }}</span>
								@elseif($data->updated_at=="0000-00-00 00:00:00")
								<span class="btn btn-sm btn-outline-light px-3 mb-2">{{ date('d-m-Y H:i:s', strtotime($data->created_at)) }}</span>
								@else
								<span class="btn btn-sm btn-outline-light px-3 mb-2">{{ date('d-m-Y H:i:s', strtotime($data->created_at)) }}</span>
								@endif
							</td>
							<!-- <td class="text-center">
									<a href="/dirput-pta/admin/edit/{{$data->id_dirput}}" class="btn btn-sm btn-outline-primary px-3">edit</a>
									<button type="button" class="btn btn-sm btn-outline-danger px-3" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $data->id_dirput }}">
										hapus</button>
								</td> -->
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
<!-- Modal Hapus -->

<div class="modal fade" id="deleteModal" tabindex="-1" aria-hidden="true">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header text-center">
				<h5 class="modal-title text-warning">Perhatian!!!</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<p class="text-center">Apakah anda ingin menghapus perkara nomor {{ $data->no_banding }} ?</p>
			<div class="modal-footer">
				<button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">Tidak</button>
				<a href="/dirput-pta/delete/{{$data->id_dirput}}" type="button" class="btn btn-sm btn-danger">Ya</a>
			</div>
		</div>
	</div>
</div>
<!-- /.modal -->
@endforeach
@endsection