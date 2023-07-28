<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Nexpac Aseptic Indonesia | @yield('title')</title>
<link rel="stylesheet" href="{{ asset('assets/vendors/feather/feather.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendors/mdi/css/materialdesignicons.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendors/ti-icons/css/themify-icons.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendors/typicons/typicons.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendors/simple-line-icons/css/simple-line-icons.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendors/css/vendor.bundle.base.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendors/js/select.dataTables.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/vendors/css/vertical-layout-light/style.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/jquery.dataTables.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/fontawesome/css/all.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/iziToast/iziToast.min.css') }}">

<link rel="shortcut icon" href="{{ asset('assets/images/Fatikafe.png') }}" />
  <style type="text/css">
    @media screen and (max-width: 991px){
      .table-resp{
        overflow: scroll;
        white-space: nowrap;
      }
    }
  </style>

</head>
<body class="sidebar-light">
	<div class="container-scroller">
		@include('pages.admin.theme.header')
  	<div class="container-fluid page-body-wrapper">
  		@include('pages.admin.theme.sidebar')
    		<div class="main-panel">
      		<div class="content-wrapper bg-white">
        			<div class="row">
          			<div class="col-sm-12">
            			@yield('content')
          			</div>
        			</div>
      		</div>
    		</div>
  	</div>
	</div>
	@include('pages.admin.theme.footer')

	<script src="{{ asset('assets/vendors/js/vendor.bundle.base.js') }}"></script>
	<script src="{{ asset('assets/vendors/chart.js/Chart.min.js') }}"></script>
	<script src="{{ asset('assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
	<script src="{{ asset('assets/vendors/progressbar.js/progressbar.min.js') }}"></script>
	<script src="{{ asset('assets/vendors/js/off-canvas.js') }}"></script>
	<script src="{{ asset('assets/vendors/js/hoverable-collapse.js') }}"></script>
	<script src="{{ asset('assets/vendors/js/template.js') }}"></script>
	<script src="{{ asset('assets/vendors/js/settings.js') }}"></script>
	<script src="{{ asset('assets/vendors/js/todolist.js') }}"></script>
	<script src="{{ asset('assets/vendors/js/jquery.cookie.js') }}" type="text/javascript"></script>
	<script src="{{ asset('assets/vendors/js/dashboard.js') }}"></script>
	<script src="{{ asset('assets/vendors/js/Chart.roundedBarCharts.js') }}"></script>
	<script src="{{ asset('assets/js/jquery.dataTables.min.js') }}"></script>
	<script src="{{ asset('assets/iziToast/iziToast.min.js') }}"></script>

	@yield('script')
	
	<script type="text/javascript">
  	window.setTimeout("waktu()", 1000);
  	function waktu() {
    	var waktu = new Date();
    	setTimeout("waktu()", 1000);
    	$("#waktu").attr('placeholder', waktu.getHours()+' : '+waktu.  getMinutes()+' : '+waktu.getSeconds())
    	$('#copyright').innerHTML = waktu.getFullYear()
  	}
	</script>
</body>
</html>