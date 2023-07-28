@extends('pages.theme.layout')
@section('tittle', 'Home')
@section('content')
	<style type="text/css">
		@media screen and (max-width: 464px){
			.text-home h1{
				font-size: .75rem;
			}
			.why-choose-nexpac, .customer-commitment, .certification{
				margin: 100px 10px 0 10px;
			}
			h1.tittle-home{
				font-size: 30px;
			}
			.why-choose-nexpac span{
				margin: 33px 0;
				font-size: 8px;
				font-weight: 500;
				line-height: 10px
			}
			.why-choose-nexpac .cover-img{
				height: 100px;
			}
			.customer-commitment img{
				width: 70%;
			}
			.customer-commitment .cover-text{
				margin-right: -100px;
				line-height: 14px;
				z-index: 1;
			}
			.cover-text span{
				font-size: .5rem;
			}
			.cover-text small{
				font-size: .4rem;
			}
			.span-text{
				line-height: 10px;
				margin-bottom: 25px
			}
		}
		@media screen and (max-width: 767px) and (min-width: 465px){
			.text-home h1{
				font-size: 1.25rem;
			}
			.why-choose-nexpac, .customer-commitment, .certification{
				margin: 100px 10px 0 10px;
				line-height: 18px;
			}
			h1.tittle-home{
				font-size: 40px;
			}
			.why-choose-nexpac span{
				margin: 33px 0;
				font-size: 15px;
				font-weight: 500;
			}
			.why-choose-nexpac .cover-img{
				height: 220px;
			}
			.customer-commitment img{
				width: 50%;
			}
			.customer-commitment .cover-text{
				margin-right: -70px;
				z-index: 1;
			}
			.cover-text span{
				font-size: .75rem;
			}
			.cover-text small{
				font-size: .6rem;
			}
			.span-text{
				line-height: 14px;
				margin-bottom: 25px
			}
		}
		@media screen and (max-width: 991px) and (min-width: 768px){
			.text-home h1{
				font-size: 1.5rem;
			}
			.why-choose-nexpac, .customer-commitment, .certification{
				margin: 100px 50px 0 50px;
			}
			h1.tittle-home{
				font-size: 45px;
			}
			.why-choose-nexpac span{
				margin: 33px 0;
				font-size: 10px;
				font-weight: 500;
			}
			.why-choose-nexpac .cover-img{
				height: 120px;
			}
			.customer-commitment img{
				width: 50%;
			}
			.customer-commitment .cover-text{
				margin-right: -70px;
				z-index: 1;
			}
			.cover-text span{
				font-size: .75rem;
			}
			.cover-text small{
				font-size: .5rem;
			}
			.span-text{
				line-height: 10px;
				margin-bottom: 25px
			}
		}
		@media screen and (min-width: 992px){
			.why-choose-nexpac, .customer-commitment, .certification{
				margin: 100px 100px 0 100px;
			}
			h1.tittle-home{
				font-size: 50px;
			}
			.why-choose-nexpac span{
				margin: 33px 0;
				font-size: 18px;
				font-weight: 500;
			}
			.why-choose-nexpac .cover-img{
				height: 200px;
			}
			.customer-commitment img{
				width: 50%;
			}
			.customer-commitment .cover-text{
				margin-right: -70px;
				z-index: 1;
			}
		}
		.text-home{
			top: 50%;
			transform: translateY(-50%);
		}
		.customer-commitment .text-commitment{
			margin: 37px auto;
		}
		.our-product, .contact-us, .instagramable{
			margin-top: 100px;
		}
		.contact-us input{
			background-color: #034e9e;
			border: none;
			border-bottom: 1px solid #fff;
		}
		.contact-us input:focus{
			outline:0px !important;
			background-color: #034e9e
		}
		.eapps-instagram-feed-header{
			display: none;
		}
	</style>
	<div class="bg-dark d-none" id="cover-roll" style="z-index: 100; height: 100vh; width: 100%; position: fixed; top: 0; left: 0; display: flex; align-items: center; justify-content: center;">
		<h1 class="text-white animate__animated animate__pulse animate__infinite" style="font-family: 'Monotype Corsiva';">Sending ...</h1>
	</div>
	<section class="position-relative text-center w-100 overflow-hidden">
		<img src="{{ asset('assets/images/home/background.jpg')  }}" width="100%">
		<div class="bg-dark w-100 position-absolute" style="height: 150vh; top: 0; opacity: 50%;"></div>
		<div class="position-absolute text-home w-100 text-center text-white">
			<h1>We deliver international standard</h1>
			<h1>F&B and Aseptic packaging solution for Indonesia</h1>
		</div>
	</section>
	<section class="why-choose-nexpac" data-aos="fade-down">
		<div class="container text-center">
			<h1 class="tittle-home text-blue">WHY CHOOSE NEXPAC</h1><br>
			<div class="row">
				<div class="col-md-3 col-6 text-center">
					<div class="text-blue span-text">
						<div class="cover-img overflow-hidden d-flex align-items-center justify-content-center">
							<img src="{{ asset('assets/images/home/1.png') }}" width="40%">
						</div>
						<span>Pioneer of Aseptic Packaging<br>Manufacturer in Indonesia</span>
					</div>
				</div>
				<div class="col-md-3 col-6 text-center">
					<div class="text-blue span-text">
						<div class="cover-img overflow-hidden d-flex align-items-center justify-content-center">
							<img src="{{ asset('assets/images/home/2.png') }}" width="100%" class="my-2">
						</div>
						<span>International<br>Food Safety Standard</span>
					</div>
				</div>
				<div class="col-md-3 col-6 text-center">
					<div class="text-blue span-text">
						<div class="cover-img overflow-hidden d-flex align-items-center justify-content-center">
							<img src="{{ asset('assets/images/home/3.png') }}" width="50%" class="my-2">
						</div>
						<span>More than 30 years in<br>Printing & Packaging Industry</span>
					</div>
				</div>
				<div class="col-md-3 col-6 text-center">
					<div class="text-blue span-text">
						<div class="cover-img overflow-hidden d-flex align-items-center justify-content-center">
							<img src="{{ asset('assets/images/home/4.png') }}" width="25%" class="my-2">
						</div>
						<span>One Step<br>Packaging Solution</span>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="text-center" data-aos="fade-down">
		<div class="customer-commitment">
			<h1 class="tittle-home text-blue">CUSTOMER COMMITMENT</h1>
			<br><br>
			<div class="w-100 d-flex align-items-center justify-content-center mt-2 text-commitment">
				<div class="bg-light-gray text-gray text-start px-4 py-lg-5 py-3 cover-text">
					<span>We commited to produce food safe<br>packaging to serve our customer and<br>protect our earth with environtmental<br>safe packaging design and material.</span><br><br class="d-md-block d-none">
					<small><a href="{{ route('manufacturing') }}" class="text-decoration-none text-gray">Learn More...</a></small>
				</div>
				<img src="{{ asset('assets/images/home/Customer Commitment.jpg') }}">
			</div>
		</div>
	</section>
	<section class="text-center mx-md-3" data-aos="fade-down">
		<div class="our-product bg-blue py-3 px-3">
			<h1 class="tittle-home text-white pb-2">OUR PRODUCT</h1>
			<div>
				<div class="owl-carousel owl-theme products">
					@foreach($product as $pro)
					<div class="item" data-aos="zoom-in">
						<img product="{{ $pro->product_category }}" class="productclick" id="{{ $pro->product_id }}" src="{{ asset('assets/images/products/'.$pro->product_picture) }}" style="width: 70%; margin:0 15%;">
					</div>
					@endforeach
				</div>
			</div>
		</div>
	</section>
	<section class="text-center my-3 my-md-5">
		<div class="certification">
			<div class="mx-md-5 mx-3 py-3">
				<div class="mx-md-5 mx-3 py-3">
					<h1 class="tittle-home text-blue" data-aos="fade-down" style="margin:0">CERTIFICATIONS</h1>
					<span class="text-gray" data-aos="fade-down">We are fully certified company</span>
					<div class="row mt-3">
						@foreach($certification as $certificate)
						<div class="col-md-3 col-4" data-aos="fade-down">
							<img src="{{ asset('assets/images/certifications/'.$certificate->certification_picture) }}" width="80%" style="margin: 32px 10%;">
						</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="text-center my-3 my-md-5">
		<div class="instagramable" data-aos="zoom-in">
			<div class="bg-light-gray mx-3 py-3 px-3">
				<div class="elfsight-app-29d0f2cc-1d95-4d2d-b910-1f1f14eaced4"></div>
			</div>
		</div>
	</section>
	<section class="text-center mt-3 mt-md-5">
		<div>
			<div class="bg-blue py-3 contact-us" data-aos="fade-down">
				<br><br>
				<h1 class="text-white mb-lg-4 mb-2">CONTACT US</h1>
				<!-- <form class="text-start text-white" action="{{ route('contact.store') }}" method="post"> -->
				<div class="text-start text-white" id="submitform">
					<div class="row">
						<div class="col-6">
							<div class="form-group mx-md-5 mt-3 me-md-4">
								<label>First Name</label>
								<input type="text" name="firstname" id="firstname" class="w-100 bg-primary-nexpac text-white" required>
							</div>
						</div>
						<div class="col-6">
							<div class="form-group mx-md-5 mt-3 ms-md-4">
								<label>Last Name</label>
								<input type="text" name="lastname" id="lastname" class="w-100 bg-primary-nexpac text-white" required>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-6">
							<div class="form-group mx-md-5 mt-3 me-md-4">
								<label>Email</label>
								<input type="email" name="email" id="email" class="w-100 bg-primary-nexpac text-white" required>
							</div>
						</div>
						<div class="col-6">
							<div class="form-group mx-md-5 mt-3 ms-md-4">
								<label>Phone</label>
								<input type="number" name="telephone" id="telephone" class="w-100 bg-primary-nexpac text-white" required>
							</div>
						</div>
					</div>
					<div>
						<div class="form-group mx-md-5 mt-3">
							<label>Company</label>
							<input type="text" name="company" id="company" class="w-100 bg-primary-nexpac text-white" required>
						</div>
						<div class="form-group mx-md-5 mt-3">
							<label>Position</label>
							<input type="text" name="position" id="position" class="w-100 bg-primary-nexpac text-white" required>
						</div>
					</div>
					<div class="form-group mx-md-5 mt-3 text-center">
						<br>
						<button class="btn btn-light" id="submit"><strong>SUBMIT</strong></button><br>
						<small id="message-success" class="d-none">Thanks for submitting!</small>
						<br><br>
					</div>
				</div>
			</div>
		</div>
	</section>
	<div class="modal fade modal bg-white rounded" id="splytmodal" tabindex="-1" aria-labelledby="splytmodalLabel" aria-hidden="true">
  		<div class="modal-dialog">
  			<div class="modal-content">
	  			<div class="modal-header">
	    			<h5 class="modal-title" id="splytmodalLabel"></h5>
	    			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
	  			</div>
	  			<div class="modal-body">
					<form method="post" action="{{ route('product.splytmail') }}">
						@csrf
						<div class="d-md-flex align-items-center">
							<div class="col-md-6">
								<img width="100%" id="image-splyt">
							</div>
							<div class="col-md-6" style="background-color: rgb(179, 179, 179);">
								<div class="px-3 py-2">
									<input type="hidden" name="product_name" id="name_splyt">
									<input type="hidden" name="product_size" id="size_splyt">
									<small class="text-white">Splyt-pak<sup>TM</sup> Aseptic Packaging</small><br>
									<h1 class="text-blue" id="text-splyt"></h1>
									<div class="form-group">
										<label class="text-white">Amount Order</label>
										<div class="input-group">
											<span id="minus-amount" class="input-group-text"><i class="fas fa-minus"></i></span>
				      						<input type="number" class="form-control bg-white" value="300000" name="amount" id="amount" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" min="300000" max="500000">
				      						<span id="plus-amount" class="input-group-text"><i class="fas fa-plus"></i></span>
										</div>
									</div>
									<div class="form-group mt-2">
										<label class="text-white">Name</label>
				      					<input type="text" class="form-control text-white" name="name" required style="background: none; outline: none; border: none; border-bottom: 1px solid white;">
									</div>
									<div class="form-group mt-2">
										<label class="text-white">Email</label>
				      					<input type="email" class="form-control text-white" name="email" required style="background: none; outline: none; border: none; border-bottom: 1px solid white;">
									</div>
									<div class="form-group mt-2">
										<label class="text-white">Phone</label>
				      					<input type="number" class="form-control text-white" name="phone" required style="background: none; outline: none; border: none; border-bottom: 1px solid white;">
									</div>
									<div class="form-group mt-2">
										<label class="text-white">Company and Position</label>
				      					<input type="text" class="form-control text-white" name="company" required style="background: none; outline: none; border: none; border-bottom: 1px solid white;">
									</div>
									<div class="form-group my-2">
										<button class="btn btn-primary w-100">SUBMIT</button>
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>
  		</div>
	</div>
	<div class="modal fade bg-white rounded" id="foodmodal" tabindex="-1" aria-labelledby="foodmodalLabel" aria-hidden="true">
  		<div class="modal-dialog">
    		<div class="modal-content">
	  			<div class="modal-header">
	    			<h5 class="modal-title" id="foodmodalLabel"></h5>
	    			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
	  			</div>
      			<div class="modal-body">
        			<form method="post" action="{{ route('product.foodmail') }}">
        				@csrf
        				<div class="d-lg-flex align-items-center">
        					<div class="col-lg-4">
        						<img width="100%" id="image-food">
        					</div>
        					<div class="col-lg-8 py-2 px-3" style="background-color: rgb(179, 179, 179);">
        						<div class="row">
        							<div class="col-md-6">
		        						<small class="text-white">Food & Beverage Paper Packaging</small><br>
		        						<h3 class="text-blue" id="text-food"></h3>
			        					<input type="hidden" name="product_name" id="name_food">
			        					<div class="position-relative">
				        					<i class="fas text-light-gray fa-caret-down position-absolute" style="top: 50%; transform: translateY(-50%); right: 10px; font-size: 1.5rem;"></i>
			        						<select id="select-value" class="form-control" name="size">
				        					</select>
				        				</div>
				        				<style type="text/css">
				        					.jenis-kertas:checked + .bg-paper{
				        						box-shadow: 2.5px 2.5px 5px 1px #000;
				        					}
				        				</style>
		        						<div class="d-flex my-2 align-items-center text-white">
			        						<div class="form-group me-2">
			        							<label class="d-flex align-items-center">
			        								<input required type="radio" name="color" value="Ivory 300gsm" class="d-none jenis-kertas" checked>
			        								<div class="bg-paper bg-white" style="width: 40px; height: 40px"></div>
			        								<div class="text-food-small">
			        									<small class="ms-2">Ivory</small><br><small class="ms-2">300gsm</small>
			        								</div>
			        							</label>
			        						</div>
			        						<div class="form-group">
			        							<label class="d-flex align-items-center">
			        								<input required type="radio" name="color" value="Ecokraft" class="d-none jenis-kertas">
			        								<div class="bg-paper" style="width: 40px; height: 40px; background-color: brown;"></div>
			        								<div class="text-food-small">
			        									<small class="ms-2">Ecokraft</small>
			        								</div>
			        							</label>
			        						</div>
			        					</div>
			        					<div id="description" class="text-white my-2"></div>
		        						<div class="form-group my-2">
		        							<label class="text-white">Amount Order</label>
		        							<div class="input-group">
		        								<span id="minus-order" class="input-group-text"><i class="fas fa-minus"></i></span>
		                  						<input type="number" class="form-control bg-white" min="300000" max="500000" value="300000" name="amount" id="order">
		                  						<span id="plus-order" class="input-group-text"><i class="fas fa-plus"></i></span>
		        							</div>
		        						</div>
		        					</div>
		        					<div class="col-md-6">
		        						<div class="form-group mt-2">
		        							<label class="text-white">Name</label>
		                  					<input type="text" class="form-control text-white" name="name" required style="background: none; outline: none; border: none; border-bottom: 1px solid white;">
		        						</div>
		        						<div class="form-group mt-2">
		        							<label class="text-white">Email</label>
		                  					<input type="email" class="form-control text-white" name="email" required style="background: none; outline: none; border: none; border-bottom: 1px solid white;">
		        						</div>
		        						<div class="form-group mt-2">
		        							<label class="text-white">Phone</label>
		                  					<input type="number" class="form-control text-white" name="phone" required style="background: none; outline: none; border: none; border-bottom: 1px solid white;">
		        						</div>
		        						<div class="form-group mt-2">
		        							<label class="text-white">Company and Position</label>
		                  					<input type="text" class="form-control text-white" name="company" required style="background: none; outline: none; border: none; border-bottom: 1px solid white;">
		        						</div>
		        					</div>
	        					</div>
        						<div class="form-group my-2">
        							<button class="btn btn-primary w-100">SUBMIT</button>
        						</div>
        					</div>
        				</div>
        			</form>
      			</div>
    		</div>
  		</div>
	</div>
	<script type="text/javascript">
		document.getElementsByClassName('menu-top')[0].classList.add('active');
		$('.products').owlCarousel({
			loop:true,
			margin:17.5,
			nav:true,
			dots: false,
			navText: [
				"<div class='nav-owl-button owl-prev text-white pt-xl-4 pt-md-2' style='background: none; font-size: 30px'><i class='fas fa-chevron-left'></i></div>",
				"<div class='nav-owl-button owl-next text-white pt-xl-4 pt-md-2' style='background: none; font-size: 30px'><i class='fas fa-chevron-right'></i></div>"
			],
			autoplay:true,
			autoplayTimeout:5000,
			responsive:{
				0:{
		    		items:1
				},
				600:{
		  			items:2
				},
				1000:{
		  			items:3
				}
			}
		})
		$('#submit').click(function(e){
			$('#cover-roll').removeClass('d-none')
			e.preventDefault();
			let firstname = $('#firstname').val();
			let lastname = $('#lastname').val();
			let email = $('#email').val();
			let telephone = $('#telephone').val();
			let company = $('#company').val();
			let position = $('#position').val();
			let token   = $("meta[name='csrf-token']").attr("content");

			$.ajax({
				url: "{{ route('contact.store') }}",
				type: 'post',
				cache: false,
				data: {
					'firstname': firstname,
					'lastname': lastname,
					'email': email,
					'telephone': telephone,
					'company': company,
					'position': position,
					'_token': "{{ csrf_token() }}"
				},
				success: function(data){
					$('#message-success').removeClass('d-none');
					$('#message-success').html('Thanks for submitting!');
					$('#firstname').val('');
					$('#lastname').val('');
					$('#email').val('');
					$('#telephone').val('');
					$('#company').val('');
					$('#position').val('');
					$('#cover-roll').addClass('d-none')
				},
				error: function(xhr){
					console.log(xhr)
					$('#message-success').removeClass('d-none')
					$('#message-success').html('<br><span class="alert alert-danger">Please fill all data</span><br>')
					$('#cover-roll').addClass('d-none')
				}
			});
		})
		$('.productclick').on('click', function(e){
			var product = e.target.getAttribute('product')
			var id = e.target.getAttribute('id')
			if(product == 'Food & Beverage'){
				var url = '{{route("productJson")}}';
				$('#select-value option').remove()
				$.get(url, {id:id}, function(data){
					var location = `{{ asset("assets/images/products/") }}`;
					var src = location+'/'+data.data.product_picture
					var arraytest = data.data.product_size
					const splitarray = arraytest.split(',')
					for (let i = 0; i < splitarray.length; i++) {
						var opt = document.createElement('option');
    					opt.value = splitarray[i];
    					opt.innerHTML = splitarray[i];
						$('#select-value').append(opt)	
					}
					$('#name_food').val(data.data.product_name)
					$('#image-food').attr('src', src)
					$('#text-food').html(data.data.product_name)
					$('#description').html(data.data.product_about)
					$('#foodmodal').modal('show')
				})
			} else {
				var url = '{{route("productJson")}}';
				$.get(url, {id:id}, function(data){
					var location = `{{ asset("assets/images/products/") }}`;
					var src = location+'/'+data.data.product_picture
					$('#name_splyt').val(data.data.product_name)
					$('#size_splyt').val(data.data.product_size)
					$('#image-splyt').attr('src', src)
					$('#text-splyt').html(data.data.product_size)
					$('#splytmodal').modal('show')
				})
			}

		})
		// function productclick(e){
		// 	console.log(e)
		// 	console.log($(this))
		// }
	</script>
	@if(Session::has('successContactUs'))
	<script type="text/javascript">
		iziToast.success({
            title : "Success",
            message: "Thanks for submitting !",
            position: "topCenter"
        })
	</script>
	@endif

@endsection