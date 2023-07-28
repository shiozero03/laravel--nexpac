@extends('pages.theme.layout')
@section('tittle', 'Manufacturing')
@section('content')
	<style type="text/css">
		.content-header{
			position: relative;
			width: 100%;
			background: url("{{ asset('assets/images/manufacturing/Banner.png')  }}");
			background-position: center;
			background-repeat: no-repeat;
		}
		.top-manufact{
			top: 0;
			background-color: rgba(3, 78, 158, 0.5);
		}

		@media screen and (max-width: 464px){
			.content-header{
				position: relative;
				height: calc(60vh - 10vh);
			}
			.manufacturing{
				margin: 50px 0 0 0;
			}
			h3.tittle-home{
				font-size: 12px;
			}
			.manufacturing-content{
				margin: 50px 10px 0 10px;
			}
			.manufacturing-content img{
				width: 50%;
				margin-bottom: 10px;
			}
			.manufacturing-content h5{
				font-size: 10px;
			}
		}
		@media screen and (max-width: 767px) and (min-width: 465px){
			.content-header{
				position: relative;
				height: calc(60vh - 10vh);
			}
			.manufacturing{
				margin: 50px 10px 0 10px;
				line-height: 18px;
			}
			h3.tittle-home{
				font-size: 16px;
			}
			.manufacturing-content{
				margin: 50px 10px 0 10px;
			}
			.manufacturing-content img{
				width: 30%;
				margin-bottom: 10px;
			}
			.manufacturing-content h5{
				font-size: 12px;
			}
		}
		@media screen and (max-width: 991px) and (min-width: 768px){
			.content-header{
				position: relative;
				height: calc(80vh - 10vh);
				background-size: 100% auto;
			}
			.manufacturing{
				margin: 50px 50px 0 50px;
			}
			h3.tittle-home{
				font-size: 22px;
			}
			.manufacturing span{
				font-size: 13px;
				line-height: 18px;
			}
			.manufacturing-content{
				margin: 50px 10px 0 10px;
			}
			.manufacturing-content img{
				width: 100%;
			}
			.manufacturing-content h5{
				font-size: 12px;
			}
		}
		@media screen and (min-width: 992px){
			.content-header{
				position: relative;
				height: calc(85vh - 10vh);
				background-size: 100% auto;
			}
			.manufacturing{
				margin: 50px 50px 0 50px;
			}
			h3.tittle-home{
				font-size: 30px;
			}
			.manufacturing-content img{
				width: 100%;
			}
			.manufacturing-content h5{
				font-size: 18px;
			}
			.manufacturing-content{
				margin: 100px 50px 0 50px;
			}
		}
	</style>
	<section class="content-header d-flex align-items-center justify-content-center overflow-hidden">
		<div class="text-white bg-blue position-absolute w-100 px-md-5 px-3 py-md-3 py-2 top-manufact">
			<h1>
				MANUFACTURING
			</h1>
		</div>
	</section>
	<section class="manufacturing">
		<div class="container">
			<div class="text-center text-tersier-nexpac mx-md-5" data-aos="fade-down">
				<h3 class="tittle-home" style="opacity: 50%;">
					We commited to produce food safe packaging<br>to serve our customer and protect our earth with<br>environtmental safe packaging design and material.
				</h3>
			</div>
		</div>
	</section>
	<section class="">
		<div class="container">
			<div class="mx-lg-5 mx-md-3">
				<div class="d-md-flex align-items-center manufacturing-content" data-aos="fade-down">
					<div class="col-md-3">
						<img src="{{ asset('assets/images/manufacturing/International food safety standard.png') }}">
					</div>
					<div>
						<div class="ms-2 text-gray manufacturing-documentation">
							<h5 class="text-blue mb-2">INTERNATIONAL<br>FOOD SAFETY STANDARD</h5>
							<h5 class="text-gray" style="margin: 0; font-weight: 400;">More than 30 years experience in the packaging industry.<br>Nexpac machine uses aseptic standard for packaging<br>lamination procedurdees that follow ISO 9001:2015<br>and FSSC 22000.</h5>
							</h5>
						</div>
					</div>
				</div>
				<div class="d-md-flex align-items-center manufacturing-content text-end" data-aos="fade-down">
					<div class="col-md-3">
						<img src="{{ asset('assets/images/manufacturing/traceable.png') }}" class="d-md-none">
					</div>
					<div class="col-md-6 text-end">
						<div class="me-2 text-tersier-nexpac manufacturing-documentation">
							<h5 class="text-blue mb-2">TRACEABLE</h5>
							<h5 class="text-gray" style="margin: 0; font-weight: 400">We care about food safety and our customer<br>health. Nexpac committed to use food-grade<br>certifications material for our productions<br><br>We care about our environtment. Nexpac<br>is FSC certified - ensures that products come<br>from responsibly managed forests that provide<br>environmental, social and economic benefits</h5>
							</h5>
						</div>
					</div>
					<div class="col-md-3 d-md-block d-none">
						<img src="{{ asset('assets/images/manufacturing/traceable.png') }}">
					</div>
				</div>
				<div class="d-md-flex align-items-center manufacturing-content" data-aos="fade-down">
					<div class="col-md-3">
						<img src="{{ asset('assets/images/manufacturing/Fast Lead Time.png') }}">
					</div>
					<div class="col-md-6">
						<div class="ms-2 text-tersier-nexpac manufacturing-documentation">
							<h5 class="text-blue mb-2">FAST LEAD TIME</h5>
							<h5 class="text-gray" style="margin: 0; font-weight: 400;">Work closely with our customer from development<br>until process production. Nexpac offer customized<br>design services and our reliable delivery fleet is always<br>ready to deliver our products to your doorstep.</h5>
							</h5>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="manufacturing-content"></section>
	<script type="text/javascript">
		document.getElementsByClassName('menu-top')[2].classList.add('active');
	</script>
@endsection