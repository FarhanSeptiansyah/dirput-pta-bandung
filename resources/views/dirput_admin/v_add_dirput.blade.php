@extends('layouts.v_template-trans')

@section('content')
<div class="panel panel-default container-sm">

    @include('layouts.v_deskripsi-trans')

    <div class="panel-heading">
        <h4 class="panel-title mt-2 text-center">
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
                            <label for="j_perkara">Jenis Perkara</label>
                            <select name="j_perkara" class="form-control @error('j_perkara') is-invalid @enderror">
                                <option>--pilih jenis perkara--</option>
                                <option>Asal Usul Anak</option>
                                <option>Bantahan Atas Lelang Eksekusi Hak Tanggungan</option>
                                <option>Cerai Gugat</option>
                                <option>Cerai Talak</option>
                                <option>Derden Verzet</option>
                                <option>Dispensasi Kawin</option>
                                <option>Ekonomi Syariah</option>
                                <option>Ganti Rugi terhadap Wali</option>
                                <option>Gugatan Mahar</option>
                                <option>Gugatan Nafkah Lampau/Madhiyah</option>
                                <option>Hak-hak Bekas Isteri</option>
                                <option>Harta Bersama</option>
                                <option>Hibah</option>
                                <option>Isbath Nikah</option>
                                <option>Izin Kawin</option>
                                <option>Izin Poligami</option>
                                <option>Kelalaian Kewajiban Suami/Isteri</option>
                                <option>Kewarisan</option>
                                <option>Lain-lain</option>
                                <option>Nafkah Anak oleh Ibu</option>
                                <option>P3HP/Penetapan Ahli Waris</option>
                                <option>Pembatalan Akta Hibah</option>
                                <option>Pembatalan Akta Perjanjian Kesepakatan Bersama</option>
                                <option>Pembatalan Isbat Nikah</option>
                                <option>Pembatalan Penetapan</option>
                                <option>Pembatalan Penetapan Wali Adhol</option>
                                <option>Pembatalan Perkawinan</option>
                                <option>Pembatalan Perwalian</option>
                                <option>Pembatalan Perwalian</option>
                                <option>Pembatalan Wali Pengampu</option>
                                <option>Pembatalan Wasiat</option>
                                <option>Pencabutan Hak Hadhanah</option>
                                <option>Pencabutan Kekuasaan Orang Tua</option>
                                <option>Pencabutan Kekuasaan Wali</option>
                                <option>Pencegahan Perkawinan</option>
                                <option>Pengesahan Anak/Pengangkatan Anak</option>
                                <option>Penguasaan Anak/Hadlonah</option>
                                <option>Penolakan Kawin Campuran</option>
                                <option>Penolakan Perkawinan oleh PPN</option>
                                <option>Penunjukan Orang Lain Sbg Wali</option>
                                <option>Penyangkalan Wali Nikah</option>
                                <option>Perbuatan Melawan Hukum</option>
                                <option>Perlawanan Eksekusi </option>
                                <option>Perlawanan Eksekusi Hak Tanggungan</option>
                                <option>Perlawanan Sita</option>
                                <option>Permohonan Penyangkalan Wali Nikah</option>
                                <option>Perwalian</option>
                                <option>Wakaf</option>
                                <option>Wali Adhol</option>
                                <option>Wasiat</option>
                                <option>Zakat/Infaq/Shodaqoh</option>
                            </select>
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