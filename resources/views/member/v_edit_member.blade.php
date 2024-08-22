@extends('layouts.v_template-trans')

@section('content')



<div class="panel panel-default container mt-5">

    @include('layouts.v_deskripsi-trans')

    <div class="panel-heading">
        <h4 class="panel-title mt-5 text-center">
            UBAH DATA USER
        </h4>
    </div>
    <div class="panel-body">
        <form action="/dirput-pta/admin/member/update/{{$member->id}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card">
                <div class="card-body">
                    <div class="border p-3 rounded">
                        <div class="mb-3">
                            <label class="mb-2 text-warning">NAMA</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{$member->name}}" name="name">
                            <div id="validationServerNameFeedback" class="invalid-feedback text-danger">
                                @error('name')
                                {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="mb-2 text-warning">USERNAME</label>
                            <input type="text" class="form-control @error('username') is-invalid @enderror" value="{{$member->username}}" name="username">
                            <div id="validationServerUsernameFeedback" class="invalid-feedback text-danger">
                                @error('username')
                                {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="mb-2 text-warning">EMAIL</label>
                            <input type="text" class="form-control @error('email') is-invalid @enderror" value="{{$member->email}}" name="email">
                            <div id="validationServeremailFeedback" class="invalid-feedback text-danger">
                                @error('email')
                                {{ $message }}
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="mb-2 text-warning">LEVEL USER</label>
                            <select name="level" class="form-control @error('level') is-invalid @enderror">
                                <option>{{$member->level}}</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label>Foto</label>
                            <div>
                                <img src="{{asset('img/'.$member->foto_user)}}" width="40" height="60" />
                            </div>
                            <label class="mb-2 text-warning">UBAH FOTO</label>
                            <input type="file" class="form-control form-control-sm @error('foto_user') is-invalid @enderror" value="{{$member->foto_user}}" name="foto_user">
                            <div id="validationServerfoto_userFeedback" class="invalid-feedback">
                                @error('foto_user')
                                {{ $message }}
                                @enderror
                            </div>
                            <div class="mb-3 mt-3">
                                <button class="btn btn-sm btn-outline-success px-3 mb-2">Simpan</button>
                                <a href="/dirput-pta/admin/member" class="btn btn-sm btn-outline-danger px-3 mb-2"></i>Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
        </form>
    </div>
</div>
@endsection