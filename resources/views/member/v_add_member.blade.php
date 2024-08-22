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
        <form method="POST" action="{{ route('register') }}">
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
            <div class="mb-3 mt-3">
                <label class="mb-2 text-warning">CONFIRM PASSWORD</label>
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
            </div>
            <div class="d-grid">
                <button type="submit" class="btn btn-light">Register</button>
                <a href="/dirput-pta/admin/member" class="btn btn-danger mt-2"></i>Kembali</a>
            </div>
        </form>
    </div>
</div>
@endsection