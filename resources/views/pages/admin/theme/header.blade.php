<nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex align-items-top flex-row">
	<div class="text-center navbar-light navbar-brand-wrapper d-flex align-items-center justify-content-start">
		<div class="me-3">
			<button class="navbar-toggler navbar-toggler align-self-center" type="button" data-bs-toggle="minimize">
  				<span class="icon-menu"></span>
			</button>
		</div>
		<div>
			<a class="navbar-brand brand-logo" href="{{ route('home') }}">
  				<img src="{{ asset('assets/images/logo-admin.png') }}" alt="logo" class="ms-4" />
			</a>
			<a class="navbar-brand brand-logo-mini" href="{{ route('home') }}">
  				<img src="{{ asset('assets/images/logo-admin.png') }}" alt="logo" style="height: 30px;" />
			</a>
		</div>
	</div>
	<div class="navbar-menu-wrapper d-flex align-items-top"> 
		<ul class="navbar-nav">
			<li class="nav-item font-weight-semibold d-none d-lg-block ms-0">
  				<h1 class="welcome-text">Hello, <span class="text-black fw-bold">Administrator</span></h1>
			</li>
		</ul>
		<ul class="navbar-nav ms-auto">
			<li class="nav-item d-none d-lg-block">
  				<div class="input-group">
    				<span class="input-group-addon input-group-prepend border-right">
      					<span class="icon-clock input-group-text"></span>
    				</span>
    				<input type="text" class="form-control bg-white" readonly id="waktu">
  				</div>
			</li>
			<li class="nav-item dropdown d-none d-lg-block user-dropdown">
  				<a class="nav-link" id="UserDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">          
  					<img class="img-xs" src="{{ asset('assets/images/logo-admin.png') }}" alt="Profile image" style="height: 25px;">
  				</a>
  				<div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
    				<div class="dropdown-header text-center">            
      					<p class="mb-1 mt-3 font-weight-semibold">Administrator</p>
    				</div>
    				<hr style="margin: 0">
    				<a href="{{ route('logout') }}" class="dropdown-item"><i class="dropdown-item-icon mdi mdi-power text-primary me-2"></i>Sign Out</a>
  				</div>
			</li>
		</ul>
		<button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-bs-toggle="offcanvas">
			<span class="mdi mdi-menu"></span>
		</button>
	</div>
</nav>