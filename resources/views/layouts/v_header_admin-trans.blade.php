<header>
	<div class="container">
		<div class="user-box dropdown">
			<a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
				<img src="{{ asset('/img/'.Auth::user()->foto_user) }}" class="user-img" alt="user avatar" />
				<div class="user-info ps-3">
					<h6 class="designattion mb-0">Selamat datang {{ Auth::user()->name }}</h6>
					<p class="designattion mb-0">Anda login sebagai @if(Auth::user()->role==='admin')
						Admin
						@elseif(Auth::user()->role==='staf')
						Staf
						@elseif(Auth::user()->role==='member')
						Visitor
						@endif</p>
				</div>
			</a>
			<ul class="dropdown-menu dropdown-menu-start">
				<!-- <li><a class="dropdown-item" href="javascript:;"><i class="bx bx-user"></i><span>Profile</span></a>
				</li> -->
				@if(Auth::user()->role==='admin')
				<li><a class="dropdown-item" href="/dirput-pta/admin/member"><i class="bx bx-user"></i><span>Management User</span></a>
				</li>
				<!-- <li><a class="dropdown-item" href="/dirput-pta/admin/"><i class='bx bx-home-circle'></i><span>Halaman Admin</span></a>
				</li> -->
				<!-- <li><a class="dropdown-item" href="/"><i class='bx bx-home-circle'></i><span>Halaman User</span></a>
				</li> -->
				<!-- <li><a class="dropdown-item" href="/dirput-pta/admin"><i class="bx bx-cog"></i><span>Login</span></a>
				</li> -->
				<div class="dropdown-divider mb-0"></div>
				</li>
				<li>
					<form id="logout-form" action="{{ route('logout') }}" method="POST" class="">
						@csrf
						<button type="submit" class="dropdown-item"><i class='bx bx-log-out-circle'></i><span>Logout</span></button>
					</form>
				</li>
				@elseif(Auth::user()->role==='staf')
				<li>
					<form id="logout-form" action="{{ route('logout') }}" method="POST" class="">
						@csrf
						<button type="submit" class="dropdown-item"><i class='bx bx-log-out-circle'></i><span>Logout</span></button>
					</form>
				</li>
				@elseif(Auth::user()->role==='member')
				<li>
					<form id="logout-form" action="{{ route('logout') }}" method="POST" class="">
						@csrf
						<button type="submit" class="dropdown-item"><i class='bx bx-log-out-circle'></i><span>Logout</span></button>
					</form>
				</li>
				@endif

			</ul>
		</div>
	</div>
</header>