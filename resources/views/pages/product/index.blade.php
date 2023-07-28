@extends('pages.theme.layout')
@section('tittle', 'Product')
@section('content')
	<style type="text/css">
		.content-header{
			position: relative;
			width: 100%;
			background:  url("{{ asset('assets/images/home/background.jpg')  }}");
			background-position: center;
			background-repeat: no-repeat;
		}
		.top-product{
			bottom: 0;
		}
		@media screen and (max-width: 464px){
			.content-header{
				position: relative;
				height: 25vh;
				background-size: 100% auto;
			}	
			.content-header h1{
				font-size: 1rem;
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
			.manufacturing-content h4{
				font-size: 12px;
			}
			.modal{
				width: 80%;
				height: 80vh;
				margin-left: 10%;
				margin-top: 10vh;
			}
			.text-food-small{
				font-size: .5rem;
			}
		}
		@media screen and (max-width: 767px) and (min-width: 465px){
			.content-header{
				position: relative;
				height: 25vh;
				background-size: 100% auto;
			}	
			.content-header h1{
				font-size: 1rem;
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
			.manufacturing-content h4{
				font-size: 12px;
			}
			.modal{
				width: 80%;
				height: 80vh;
				margin-left: 10%;
				margin-top: 10vh;
			}
		}
		@media screen and (max-width: 991px) and (min-width: 768px){
			.content-header{
				position: relative;
				height: 50vh;
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
				margin: 50px 5px 0 5px;
			}
			.manufacturing-content h5{
				font-size: 12px;
			}
			.modal{
				width: 70%;
				height: 70vh;
				margin-left: 15%;
				margin-top: 15vh;
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
			.manufacturing-content h5{
				font-size: 18px;
			}
			.manufacturing-content{
				margin: 100px 50px 0 50px;
			}
			.modal{
				width: 60%;
				height: 80vh;
				margin-left: 20%;
				margin-top: 10vh;
			}
		}
		.modal-dialog{
			margin-top: -7.5px;
		}
		input{
			color: white;
		}
		.menu-pro{ color: #6d6e71; font-weight: 400 }
		.menu-pro:hover, .menu-pro.active{ color: #6d6e71; font-weight: 600 }
	</style>
	<section class="content-header d-flex align-items-center justify-content-center overflow-hidden">
		<div class="text-white bg-blue position-absolute w-100 px-md-5 px-3 pt-md-3 pb-md-2 pt-2 pb-2 top-product text-center">
			<h1 style="margin: 0">
				FOOD SAFE EVERYWERE
			</h1>
		</div>
	</section>
	<section class="manufacturing-content" data-aos="fade-down">
		<div class="container">
			<div class="text-center text-gray">
				<div class="d-flex align-items-center">
					<div class="col-5 text-end">
						<h4><a onclick="menuProduct(0)" href="javascript:void(0)" class="text-decoration-none menu-product menu-pro active">Splyt-pak<sup>TM</sup> Aseptic Packaging</a></h4>
					</div>
					<div class="col-2 text-center">
						<i class="fas fa-circle mb-3" style="font-size: 8px"></i>
					</div>
					<div class="col-5 text-start">
						<h4><a onclick="menuProduct(1)" href="javascript:void(0)" class="text-decoration-none menu-product menu-pro">Food & Beverage Paper Packaging</a></h4>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="">
		<div class="container">
			<div id="splyt-pak" class="animate__animated animate__zoomIn">
				<div class="row">
					@foreach($productSplyt as $splyt)
					<div class="col-md-3 col-6 my-2" style="cursor: pointer;">
						<img class="splyt-get" src="{{ asset('assets/images/products/'.$splyt->product_picture) }}" width="100%" id="{{ $splyt->product_id }}" data-aos="fade-down">
					</div>
					@endforeach
				</div>
			</div>
			<div id="food-beverage" class="d-none animate__animated animate__zoomIn" >
				<div class="row">
					@foreach($productFood as $food)
					<div class="col-md-4 col-6 my-lg-5 my-md-4 my-2" style="cursor: pointer;">
						<div class="mx-lg-5 mx-md-3">
							<img class="food-get" src="{{ asset('assets/images/products/'.$food->product_picture) }}" width="100%" id="{{ $food->product_id }}" data-aos="fade-down">
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>
	</section>
	<section class=""></section>
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
	<br><br><br>
	<script type="text/javascript">
		document.getElementsByClassName('menu-top')[4].classList.remove('active');
		function menuProduct(id){
			if(id == 1){
				$('#food-beverage').removeClass('d-none');
				$('#splyt-pak').addClass('d-none')
				document.getElementsByClassName('menu-product')[1].classList.add('active')
				document.getElementsByClassName('menu-product')[0].classList.remove('active')
			} else if(id == 0){
				$('#food-beverage').addClass('d-none');
				$('#splyt-pak').removeClass('d-none')
				document.getElementsByClassName('menu-product')[1].classList.remove('active')
				document.getElementsByClassName('menu-product')[0].classList.add('active')
			}
		}
		$(document).ready(function(){
			$(document).on('click', '#plus-amount', function(){
				var amount = $('#amount').val();
				if(parseInt(order) < 500000){
					var test = parseInt(amount) + 1;
					var amount = $('#amount').val(test);
				}
			})
			$(document).on('click', '#minus-amount', function(){
				var amount = $('#amount').val();
				if(parseInt(amount) > 300000){
					var test = parseInt(amount) - 1;
					var amount = $('#amount').val(test);
				}
			})
			$(document).on('click', '#plus-order', function(){
				var order = $('#order').val();
				if(parseInt(order) < 500000){
					var test = parseInt(order) + 1;
					var order = $('#order').val(test);
				}
			})
			$(document).on('click', '#minus-order', function(){
				var order = $('#order').val();
				if(parseInt(order) > 300000){
					var test = parseInt(order) - 1;
					var order = $('#order').val(test);
				}
			})
			$(document).on('click', '.splyt-get', function(){
				var id = $(this).attr('id')
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
			})
			$(document).on('click', '.food-get', function(){
				var id = $(this).attr('id')
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
			})
		})
	</script>
	@if(Session::has('success'))
	<script type="text/javascript">
		iziToast.success({
            title : "Success",
            message: "Thanks for your order !",
            position: "topCenter"
        })
	</script>
	@endif
	@if(Session::has('error'))
	<script type="text/javascript">
		iziToast.error({
            title : "Error",
            message: "Your order's failed !",
            position: "topCenter"
        })
	</script>
	@endif
@endsection