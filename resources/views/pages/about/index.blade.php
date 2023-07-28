@extends('pages.theme.layout')
@section('tittle', 'About Us')
@section('content')
	<style type="text/css">
		@media screen and (max-width: 464px){
			.overview{
				margin: 100px 10px 0 10px;
			}
			h1.tittle-home{
				font-size: 30px;
			}
			.overview span{
				font-size: 12px;
				line-height: 15px;
			}
		}
		@media screen and (max-width: 767px) and (min-width: 465px){
			.overview{
				margin: 100px 10px 0 10px;
				line-height: 18px;
			}
			h1.tittle-home{
				font-size: 40px;
			}
			.overview span{
				font-size: 13px;
				line-height: 18px;
			}
		}
		@media screen and (max-width: 991px) and (min-width: 768px){
			.overview{
				margin: 100px 50px 0 50px;
			}
			h1.tittle-home{
				font-size: 45px;
			}
			.overview span{
				font-size: 13px;
				line-height: 18px;
			}
		}
		@media screen and (min-width: 992px){
			.overview{
				margin: 100px 50px 0 50px;
			}
			h1.tittle-home{
				font-size: 50px;
			}
		}
	</style>
	<section class="overview">
		<div class="container">
			<div class="mx-lg-5 px-lg-5">
				<div class="d-md-flex align-items-center">
					<div class="d-md-none text-center mb-3">
						<img src="{{ asset('assets/images/about-us/overview.png') }}" width="80%">
					</div>
					<div class="col-lg-7 col-md-7 text-center text-gray">
						<div class="mx-md-2">
							<h1 class="text-blue mb-md-3 mb-2 tittle-home">
								OVERVIEW
							</h1>
							<span>
								The local food industry in Indonesia has long struggled with a lack of<br class="d-md-block d-none">affordable, high quality, food grade processing and packaging<br class="d-md-block d-none">solutions. <b>Nexpac</b> is an Indonesian food and beverage packaging<br class="d-md-block d-none">company that aims to solve this problem by delivering international<br class="d-md-block d-none">standard processing and packaging solutions for the domestic food<br class="d-md-block d-none">industry.<br><br>
								Based in the Greater Jakarta Area, Nexpac is part of Sansico Group,<br class="d-md-block d-none">an diversified international group with strong Asian presence that<br class="d-md-block d-none">was founded in 1977.
							</span>
						</div>
					</div>
					<div class="col-md-5 d-md-block d-none">
						<img src="{{ asset('assets/images/about-us/overview.png') }}" width="100%">
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="overview">
		<div class="container">
			<div class="text-center text-gray" data-aos="fade-down">
				<h1 class="text-blue mb-md-3 mb-2 tittle-home">
					VISION
				</h1>
				<span>
					To be the next system supplier of choice for<br>the food & beverage industry in Indonesia
				</span>
			</div>
		</div>
	</section>
	<section class="overview">
		<div class="container">
			<div class="text-center text-gray" data-aos="fade-down">
				<h1 class="text-blue mb-md-3 mb-2 tittle-home">
					MISION
				</h1>
				<span>
					We provide packaging solution and service for<br>food & beverage industry with the spirit of partnership
				</span>
			</div>
		</div>
	</section>
	<section class="text-center overview">
		<div class="certification">
			<div class="mx-md-5 mx-3 py-3">
				<div class="mx-md-5 mx-3 py-3">
					<h1 class="tittle-home text-blue" data-aos="fade-down" style="margin:0">CERTIFICATIONS</h1>
					<span class="text-gray" data-aos="fade-down">We are fully certified company</span>
					<div class="row mt-3">
						@foreach($certification as $certificate)
						<div class="col-md-3 col-4" data-aos="fade-down">
							<img alt="{{ $certificate->certification_name }}" src="{{ asset('assets/images/certifications/'.$certificate->certification_picture) }}" width="80%" style="margin: 32px 10%;">
						</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</section>

	<script type="text/javascript">
		document.getElementsByClassName('menu-top')[1].classList.add('active');
	</script>
@endsection