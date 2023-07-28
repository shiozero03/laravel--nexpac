@extends('pages.theme.layout')
@section('tittle', 'Applications')
@section('content')
	<style type="text/css">
		.content-header{
			position: relative;
			width: 100%;
		}
		.top-manufact{
			top: 0;
			background-color: rgba(3, 78, 158, 0.5);
		}
		@media screen and (max-width: 464px){
			.content-header{
				position: relative;
				height: 25vh;
			}
			.aseptic{
				margin: 50px 0 0 0;
			}
			h5.tittle-home{
				font-size: 10px;
				margin: 0;
			}
			.aseptic-content{
				margin: 50px 5px 0 5px;
			}
			.aseptic-content h4{
				font-size: 14px;
			}
			.text-paper h6{
				font-size: 10px
			}
		}
		@media screen and (max-width: 767px) and (min-width: 465px){
			.content-header{
				position: relative;
				height: 30vh;
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
			.aseptic-content h4{
				font-size: 15px;
			}
			.text-paper h6{
				font-size: 9.5px
			}
		}
		@media screen and (max-width: 991px) and (min-width: 768px){
			.content-header{
				position: relative;
				height: 40vh;
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
			.aseptic-content h4{
				font-size: 12px;
			}
			.text-paper h6{
				font-size: 10px
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
			.aseptic-content h4{
				font-size: 18px;
			}
			.aseptic-content{
				margin: 100px 30px 0 30px;
			}
			h1.text-name{
				font-size: 45px;
				font-weight: 600;
			}
			.text-paper h6{
				font-size: 18px;
				font-weight: 400
			}
		}
		h1.text-name{
			font-weight: 600;
		}
		.margin-75-r{
			margin-left: 10%;
		}
		.margin-75-l{
			margin-right: 10%;
		}
	</style>
	<section class="content-header d-flex align-items-center justify-content-center overflow-hidden">
		<img src="{{ asset('assets/images/packaging/Banner.jpg')  }}" class="position-absolute w-100" style="top: 0">
		<div class="text-white position-absolute w-100 px-md-5 px-3 py-md-3 py-2 top-manufact">
			<h1>
				PAPER PACKAGING
			</h1>
		</div>
	</section>
	<section class="aseptic">
		<div class="container">
			<div class="text-center text-gray mx-md-5" data-aos="fade-down">
				<h5 class="tittle-home">
					Nexpac is a food packaging company with aseptic standard<br>for packaging lamination in indonesia, that is committed to<br>customizable with environmentally safe packaging design and material.
				</h5>
			</div>
		</div>
	</section>
	<section class="mx-md-5 px-lg-5">
		<div class="container px-lg-4">
			<div class="mx-md-2 px-lg-4">
				@foreach($paper as $ppr)					
					<div class="d-md-flex align-items-center paper-aos aseptic-content" data-aos="fade-down">
						<div class="col-md-5 pict-resp-show">
							<img src="{{ asset('assets/images/packaging/'.$ppr->application_picture) }}" width="100%">
						</div>
						<div class="col-md-7 text-paper text-gray">
							<div class="mx-lg-4 mx-md-2">
								<h1 class="text-blue text-name"><?= ''.$ppr->application_name ?></h1>
								<div class="border-1 border-blue mt-1 mb-2 aplication-break"></div>
								<h6><?= ''.$ppr->application_about ?></h6>
							</div>
						</div>
						<div class="col-md-5 pict-resp-hidden mt-md-2 mt-3">
							<img src="{{ asset('assets/images/packaging/'.$ppr->application_picture) }}" width="100%">
						</div>
					</div>
					<br class="d-md-block d-none">
				@endforeach
			</div>
		</div>
	</section>
	<section class="aseptic-content"></section>
	<script type="text/javascript">
		document.getElementsByClassName('menu-top')[3].classList.add('active');
		document.getElementsByClassName('menu-dropdown')[1].classList.add('active');

		var pictresphidden = document.getElementsByClassName('pict-resp-hidden');
		setInterval(function(){
			if($(window).width() > 767){
				for (var i = 0; i < pictresphidden.length; i++) {
					if(i%2 != 0){
						document.getElementsByClassName('pict-resp-show')[i].classList.add('d-none')
						document.getElementsByClassName('pict-resp-hidden')[i].classList.remove('d-none')
						document.getElementsByClassName('text-paper')[i].classList.add('text-md-end')
						document.getElementsByClassName('aplication-break')[i].classList.add('margin-75-r')
					} else {
						document.getElementsByClassName('pict-resp-hidden')[i].classList.add('d-none')
						document.getElementsByClassName('pict-resp-show')[i].classList.remove('d-none')
						document.getElementsByClassName('text-paper')[i].classList.add('text-md-start')
						document.getElementsByClassName('aplication-break')[i].classList.add('margin-75-l')
					}
				}
			} else {
				for (var i = 0; i < pictresphidden.length; i++) {
					
					document.getElementsByClassName('pict-resp-show')[i].classList.add('d-none')
					document.getElementsByClassName('pict-resp-hidden')[i].classList.remove('d-none')
					document.getElementsByClassName('text-paper')[i].classList.add('text-center')
				}
			}
		}, 100)
	</script>
@endsection