@extends('layouts.v_template-trans')

@section('content')

<div class="panel panel-default container mt-5">

    @include('layouts.v_deskripsi-trans')

    <div class="panel-heading">
        <h4 class="panel-title mt-5 text-center">
            UBAH DATA PUTUSAN ANONIMASI
        </h4>
    </div>
    <div class="panel-body">
        <form action="/dirput-pta/admin/update/{{$dirput->id_dirput}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card">
                <div class="card-body">
                    <div class="border p-3 rounded">
                        <div class="mb-3">
                            <label class="mb-2 text-warning">NOMOR PERKARA BANDING</label>
                            <input type="text" class="form-control @error('no_banding') is-invalid @enderror" value="{{$dirput->no_banding}}" name="no_banding">
                            <div id="validationServerUsernameFeedback" class="invalid-feedback text-danger">
                                @error('no_banding')
                                {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="j_perkara">Jenis Perkara</label>
                            <select name="j_perkara" type="text" class="form-control @error('j_perkara') is-invalid @enderror">
                                <option>{{$dirput->j_perkara}}</option>
                                <option> Asal Usul Anak </option>
                                <option> Cerai Gugat </option>
                                <option> Cerai Talak </option>
                                <option> Dispensasi Kawin </option>
                                <option> Ekonomi Syariah </option>
                                <option> Ganti Rugi terhadap Wali </option>
                                <option> Hak-hak Bekas Isteri </option>
                                <option> Harta Bersama </option>
                                <option> Hibah </option>
                                <option> Isbath Nikah </option>
                                <option> Izin Kawin </option>
                                <option> Izin Poligami </option>
                                <option> Kelalaian Kewajiban Suami/Isteri </option>
                                <option> Kewarisan </option>
                                <option> Lain-lain </option>
                                <option> Nafkah Anak oleh Ibu </option>
                                <option> P3HP/Penetapan Ahli Waris </option>
                                <option> Pembatalan Perkawinan </option>
                                <option> Pencabutan Kekuasaan Orang Tua </option>
                                <option> Pencabutan Kekuasaan Wali </option>
                                <option> Pencegahan Perkawinan </option>
                                <option> Pengesahan Anak/Pengangkatan Anak </option>
                                <option> Penguasaan Anak/Hadlonah </option>
                                <option> Penolakan Kawin Campuran </option>
                                <option> Penolakan Perkawinan oleh PPN </option>
                                <option> Penunjukan Orang Lain Sbg Wali </option>
                                <option> Perwalian </option>
                                <option> Wakaf </option>
                                <option> Wali Adhol </option>
                                <option> Wasiat </option>
                                <option> Zakat/Infaq/Shodaqoh </option>
                            </select>
                            <div id="validationServerUsernameFeedback" class="invalid-feedback text-danger">
                                @error('j_perkara')
                                {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="mb-2 text-warning">TANGGAL PUTUS</label>
                            <input type="date" class="form-control @error('tgl_put_banding') is-invalid @enderror" value="{{$dirput->tgl_put_banding}}" name="tgl_put_banding">
                            <div id="validationServerUsernameFeedback" class="invalid-feedback text-danger">
                                @error('tgl_put_banding')
                                {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3 mt-2">
                            <label class="mb-2 text-warning">PUTUSAN ANONIMASI</label>
                            <div>{{ $dirput->putusan }}</div>
                        </div>
                        <div class="mb-3">
                            <label class="mb-2 text-warning">UBAH DOKUMEN PUTUSAN</label>
                            <input type="file" class="form-control form-control-sm @error('putusan') is-invalid @enderror" value="{{$dirput->putusan}}" name="putusan">
                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                @error('putusan')
                                {{ $message }}
                                @enderror
                            </div>
                            <div class="mb-3 mt-3">
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