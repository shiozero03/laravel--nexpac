<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Nexpac Aseptic Indonesia | Login</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.theme.default.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/fontawesome/css/all.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/iziToast/iziToast.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/aos.min.css') }}" />
	
	<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/newstyle.min.css') }}">

	<script type="text/javascript" src="{{ asset('assets/js/jquery.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/bootstrap/bootstrap.bundle.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/ckeditor/ckeditor.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/iziToast/iziToast.min.js') }}"></script>
	<script src="{{asset('assets/js/platform.min.js')}}" defer></script>
  	<script src="{{asset('assets/js/aos.min.js')}}"></script>
</head>
<body class="bg-secondary-nexpac">
	<section style="width: 100%; height: 100vh;" class="d-flex align-items-center justify-content-center">
		<div class="alert alert-success">
			<h2 style="margin: 0" class="text-center">ADMIN PANEL</h2>
			<div class="border-top border-success" style="margin: 0;"></div>
			<form class="px-4" method="post" action="{{ route('login.process') }}">
				@csrf
				<div class="form-group mt-2">
					<label>Username</label>
					<input type="text" name="username" required class="form-control">
				</div>
				<div class="form-group mt-2">
					<label>Password</label>
					<input type="password" name="password" required class="form-control">
				</div>
				<div class="form-group mt-2">
					<button class="btn btn-success w-100">LOGIN</button>
				</div>
				<div class="text-center mt-2">
					<a href="{{ route('home') }}" class="text-decoration-none"><i class="fas fa-arrow-left me-2"></i>Kembali ke halaman home</a>
				</div>
			</form>
		</div>
	</section>

	<script type="text/javascript" src="{{ asset('assets/js/myScript.js') }}"></script>

	@if(Session::has('error'))
	<script type="text/javascript">
		iziToast.error({
            title : "Login Gagal",
            message: "Username atau Password tidak sesuai!",
            position: "topCenter"
        })
	</script>
	@endif
	@if(Session::has('noaccess'))
	<script type="text/javascript">
		iziToast.error({
            title : "Gagal memuat halaman",
            message: "Anda harus login terlebihi dahulu!",
            position: "topCenter"
        })
	</script>
	@endif
	@if(Session::has('success'))
	<script type="text/javascript">
		iziToast.success({
            title : "Logout berhasil",
            message: "Akun anda telah di logout",
            position: "topCenter"
        })
	</script>
	@endif
</body>
</html>