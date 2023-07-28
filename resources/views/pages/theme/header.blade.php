<header class="px-lg-5 px-md-4 px-3 bg-white fixed-top" id="header" style="position: fixed">
	<nav class="navbar navbar-dark fixed">
		<div class="me-auto position-relative" style="z-index: 5">
			<a href="{{ route('home') }}"><img src="{{ asset('assets/images/logo.png') }}" height="30px"></a>
		</div>
		<div class="ms-lg-auto d-lg-none me-2 position-relative" style="z-index: 5">
			<h1 id="toggle-menu"><i class="fas fa-bars"></i></h1>
		</div>
		<div class="ms-lg-auto mt-lg-3 d-lg-block hidden" id="header-menu">
			<ul>
				<li class="d-lg-inline-block d-block">
					<a href="{{ route('home') }}" class="text-decoration-none menu-top mx-lg-2">
						<strong>HOME</strong>
					</a>
				</li>
				<li class="d-lg-inline-block d-block">
					<a href="{{ route('aboutus') }}" class="text-decoration-none menu-top mx-lg-2">
						<strong>ABOUT US</strong>
					</a>
				</li>
				<li class="d-lg-inline-block d-block">
					<a href="{{ route('manufacturing') }}" class="text-decoration-none menu-top mx-lg-2">
						<strong>MANUFACTURING</strong>
					</a>
				</li>
				<li class="d-lg-inline-block d-block position-relative dropdown-cover-app" id="aplications">
					<a href="javascript:void(0)" class="text-decoration-none menu-top mx-lg-2" >
						<strong>APPLICATIONS</strong>
					</a>
					<div class="bg-white dropdown-content p-lg-2 hide-dropdown" id="menu-dropdown-aplication">
						<ul>
							<li class="d-block my-lg-2">
								<a href="{{ route('aseptic') }}" class="text-decoration-none menu-dropdown mx-lg-2">
									<strong>ASEPTIK PACKAGING</strong>
								</a>
							</li>
							<li class="d-block my-lg-2">
								<a href="{{ route('paper') }}" class="text-decoration-none menu-dropdown mx-lg-2">
									<strong>PAPER PACKAGING</strong>
								</a>
							</li>
						</ul>
					</div>
				</li>
				<li class="d-lg-inline-block d-block">
					<a href="{{ route('product') }}" class="text-decoration-none menu-top mx-lg-2">
						<strong>PRODUCT</strong>
					</a>
				</li>
				<li class="d-lg-inline-block d-block">
					<a href="{{ route('contact') }}" class="text-decoration-none menu-top mx-lg-2">
						<strong>CONTACT US</strong>
					</a>
				</li>
			</ul>
		</div>
	</nav>
</header>
<br><br><br>