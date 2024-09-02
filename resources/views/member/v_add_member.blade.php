@extends('layouts.v_template-trans')

@section('content')



<div class="panel panel-default container-sm mt-5">

    @include('layouts.v_deskripsi-trans')

    <div class="panel-heading">
        <h4 class="panel-title mt-5 text-center">
            INPUT DATA USER
        </h4>
    </div>
    <div class="panel-body mt-2">
        <form method="POST" action="/dirput-pta/admin/member/insert">
            @csrf
            <div class="mb-3 mt-3">
                <label class="mb-2 text-warning">NAMA</label>
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="mb-3 mt-3">
                <label class="mb-2 text-warning">USERNAME</label>
                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                @error('username')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="mb-3 mt-3">
                <label class="mb-2 text-warning">ROLE</label>
                <select name="role" class="form-control form-control-sm @error('penyerah') is-invalid @enderror">
                                <option>--Pilih Role--</option>
                                <option>admin</option>
                                <option>staf</option>
                                <option>member</option>
                            </select>
                @error('username')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="mb-3 mt-3">
                <label class="mb-2 text-warning">EMAIL</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="mb-3 mt-3">
                <label class="mb-2 text-warning">PASSWORD</label>
                <input tid="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="d-grid">
                <button type="submit" class="btn btn-light">Register</button>
                <a href="/dirput-pta/admin/member" class="btn btn-danger mt-2"></i>Kembali</a>
            </div>
        </form>
    </div>
</div>
@endsection