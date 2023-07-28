@extends('pages.theme.layout')
@section('tittle', 'Applications')
@section('content')
	<style type="text/css">
		.content-header{
			position: relative;
			width: 100%;
		}
		.top-manufact{
			bottom: -50px;
		}
		@media screen and (max-width: 464px){
			.content-header{
				position: relative;
				height: 40vh;
			}
			.aseptic{
				margin: 50px 0 0 0;
			}
			h5.tittle-home{
				font-size: 10px;
				margin: 0;
			}
			.aseptic-content{
				margin: 50px 10px 0 10px;
			}
			.aseptic-content h5{
				font-size: 10px;
			}
		}
		@media screen and (max-width: 767px) and (min-width: 465px){
			.content-header{
				position: relative;
				height: 40vh;
			}
			.aseptic{
				margin: 50px 5px 0 5px;
				line-height: 18px;
			}
			h5.tittle-home{
				font-size: 14px;
			}
			.aseptic-content{
				margin: 50px 10px 0 10px;
			}
			.aseptic-content h5{
				font-size: 12px;
			}
		}
		@media screen and (max-width: 991px) and (min-width: 768px){
			.content-header{
				position: relative;
				height: 60vh;
				background-size: 100% auto;
			}
			.aseptic{
				margin: 50px 5px 0 5px;
			}
			h5.tittle-home{
				font-size: 16px;
			}
			.manufacturing span{
				font-size: 13px;
				line-height: 18px;
			}
			.aseptic-content{
				margin: 50px 10px 0 10px;
			}
			.aseptic-content h5{
				font-size: 12px;
			}
		}
		@media screen and (min-width: 992px){
			.content-header{
				position: relative;
				height: 90vh;
				background-size: 100% auto;
			}
			.aseptic{
				margin: 50px 50px 0 50px;
			}
			h5.tittle-home{
				font-size: 25px;
			}
			.aseptic-content h5{
				font-size: 18px;
			}
			.aseptic-content{
				margin: 100px 50px 0 50px;
			}
			h1.text-name{
				font-size: 50px;
			}
			.top-manufact h1{
				font-size: 3rem;
			}
		}
	</style>
	<section class="content-header d-flex align-items-center justify-content-center">
		<img src="{{ asset('assets/images/packaging/Header Aseptic Packaging.png')  }}" class="position-absolute w-100" style="top: 0">
		<div class="text-white bg-blue text-center position-absolute w-100 px-md-5 px-3 py-2 top-manufact">
			<h1 class="m-0">
				ASEPTIC PACKAGING
			</h1>
		</div>
	</section>
	<div style="margin-top: 100px;">
		<section class="aseptic">
			<div class="container">
				<div class="text-center text-gray mx-md-5" data-aos="fade-down">
					<h5 class="tittle-home">
						Nexpac Aseptic Packaging is specially made<br>to be a packaging that protects the quality of food<br>and beverages inside packaging until delivered to consumers.
					</h5>
					<br>
					<h5 class="tittle-home">
						The aseptic packaging is used for various food products and beverages,<br>including milk, juice, tea, coconut cream, pudding and several others.
					</h5>
				</div>
			</div>
		</section>
	</div>	
	<section class="aseptic-content">
		<div class="container px-lg-5">
			<div class="mx-md-5 px-lg-5 mx-3">
				@foreach($aseptic as $asc)
					<div class="d-md-flex align-items-center my-3" data-aos="fade-down">
						<div class="col-md-6 text-center text-blue">
							<h1 class="text-blue text-name mx-3">{{ $asc->application_name }}</h1>
							<h4 class="text-gray">{{ $asc->application_spec }}</h4>
						</div>
						<div class="col-md-6 text-end">
							<img src="{{ asset('assets/images/packaging/'.$asc->application_picture) }}" width="70%">
						</div>
					</div>
				@endforeach
			</div>
		</div>
	</section>
	<section class="manufacturing-content"></section>
	<script type="text/javascript">
		document.getElementsByClassName('menu-top')[3].classList.add('active');
		document.getElementsByClassName('menu-dropdown')[0].classList.add('active');
	</script>
@endsection