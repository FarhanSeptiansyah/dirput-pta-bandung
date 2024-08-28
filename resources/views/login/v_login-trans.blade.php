<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--favicon-->
	<link rel="icon" href="{{{ asset('favicon/favicon.ico') }}}" />
	<!--plugins-->

	<title> Login | PTA Bandung</title>

	<link href="{{ asset('template')}}/assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
	<link href="{{ asset('template')}}/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
	<link href="{{ asset('template')}}/assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
	<link href="{{ asset('template')}}/assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
	<!-- loader-->
	<link href="{{ asset('template')}}/assets/css/pace.min.css" rel="stylesheet" />
	<script src="{{ asset('template')}}/assets/js/pace.min.js"></script>
	<!-- Bootstrap CSS -->
	<link href="{{ asset('template')}}/assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="{{ asset('template')}}/assets/css/bootstrap-extended.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
	<link href="{{ asset('template')}}/assets/css/app.css" rel="stylesheet">
	<link href="{{ asset('template')}}/assets/css/icons.css" rel="stylesheet">

</head>

<body class="bg-theme bg-theme3">
	<!-- wrapper -->
	<div class="wrapper">
		<div class="authentication-lock-screen d-flex align-items-center justify-content-center">
			<div class="card shadow-none bg-transparent">
				<div class="card-body p-md-5 text-center">
					<div class="">
						<a href="{{ route('register') }}">
							<img src="{{ asset('template')}}/assets/images/icons/user.png" class="mt-5" width="120" alt="" />
						</a>
					</div>
					<form method="POST" action="{{ route('login') }}">
						@csrf
						<div class="mb-3 mt-3 text-start">
							<label class="mb-2 text-warning">USERNAME</label>
							<input id="username" type="username" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus />
							@error('username')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
							@enderror
						</div>
						<div class="mb-3 mt-3 text-start">
							<label class="mb-2 text-warning">PASSWORD</label>
							<input tid="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
							@error('password')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
							@enderror
						</div>
						<div class="d-grid">
							<button type="submit" class="btn btn-light">Login</button>
						</div>
					</form>
					<div class="mt-2">
						Back to <a href="/dirput-pta-bandung">Dirput PTA Bandung</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end wrapper -->

</body>

</html>