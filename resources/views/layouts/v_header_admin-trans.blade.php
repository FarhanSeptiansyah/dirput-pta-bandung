<header>
	<div class="container">
		<nav class="navbar navbar-expand">
			<div class="top-menu ms-auto">
			</div>
			<div class="user-box dropdown text-start">
				<a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
					<img src="{{ asset('template')}}/img/logo-pta.png" class="user-img" alt="user avatar">
					<img src="{{ asset('/img/'.Auth::user()->foto_user) }}" width="50" height="60" class="user-img" alt="user avatar" />
					<div class="user-info ps-3">
						<h6 class="designattion mb-0">Selamat datang {{ Auth::user()->name }}</h6>
						<p class="designattion mb-0">Anda login sebagai @if(Auth::user()->level===1)
							Administrator
							@elseif(Auth::user()->level===2)
							Staf
							@elseif(Auth::user()->level===3)
							User
							@endif</p>
					</div>
				</a>
				<ul class="dropdown-menu dropdown-menu-start">
					<li><a class="dropdown-item" href="javascript:;"><i class="bx bx-user"></i><span>Profile</span></a>
					</li>
					<li><a class="dropdown-item" href="/dirput-pta/admin/member"><i class="bx bx-user"></i><span>Management User</span></a>
					</li>
					<li><a class="dropdown-item" href="/dirput-pta/admin/"><i class='bx bx-home-circle'></i><span>Halaman Admin</span></a>
					</li>
					<li><a class="dropdown-item" href="/"><i class='bx bx-home-circle'></i><span>Halaman User</span></a>
					</li>
					<li><a class="dropdown-item" href="/dirput-pta/admin"><i class="bx bx-cog"></i><span>Login</span></a>
					</li>
					<div class="dropdown-divider mb-0"></div>
					</li>
					<li>
						<form id="logout-form" action="{{ route('logout') }}" method="POST" class="">
							@csrf
							<button type="submit" class="dropdown-item"><i class='bx bx-log-out-circle'></i><span>Logout</span></button>
						</form>
					</li>
				</ul>
			</div>
		</nav>
	</div>
</header>