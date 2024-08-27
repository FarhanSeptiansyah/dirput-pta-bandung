@extends('layouts.v_template-trans')

@section('content')
<div class="panel panel-default container-sm mt-5">

    @include('layouts.v_deskripsi-trans')

    <div class="panel-heading">
        <h4 class="panel-title mt-5 text-center">
            INPUT PUTUSAN ANONIMASI
        </h4>
    </div>
    <div class="panel-body mt-2">
        <form action="/dirput-pta/admin/insert" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card">
                <div class="card-body">
                    <div class="border p-3 rounded">
                        <div class="mb-3">
                            <label class="mb-2 text-warning">NOMOR PERKARA BANDING</label>
                            <input type="text" class="form-control @error('no_banding') is-invalid @enderror" value="{{old('no_banding')}}" name="no_banding">
                            <div id="validationServerUsernameFeedback" class="invalid-feedback text-danger">
                                @error('no_banding')
                                {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="mb-2 text-warning">JENIS PERKARA</label>
                            <input type="text" class="form-control @error('j_perkara') is-invalid @enderror" value="{{old('j_perkara')}}" name="j_perkara">
                            <div id="validationServerUsernameFeedback" class="invalid-feedback text-danger">
                                @error('j_perkara')
                                {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="mb-2 text-warning">TANGGAL PUTUS</label>
                            <input type="date" class="form-control @error('tgl_put_banding') is-invalid @enderror" value="{{old('tgl_put_banding')}}" name="tgl_put_banding">
                            <div id="validationServerUsernameFeedback" class="invalid-feedback text-danger">
                                @error('tgl_put_banding')
                                {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="mb-2 text-warning">PUTUSAN ANONIMASI</label>
                            <input type="file" class="form-control @error('putusan') is-invalid @enderror" value="{{old('putusan')}}" name="putusan">
                            <div id="validationServerUsernameFeedback" class="invalid-feedback text-danger">
                                @error('putusan')
                                {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-sm btn-outline-success px-3 mb-2">Simpan</button>
                            <a href="/dirput-pta/admin" class="btn btn-sm btn-outline-danger px-3 mb-2"></i>Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection