@extends('pages.theme.layout')
@section('tittle', 'Contact Us')
@section('content')
	<style type="text/css">
		@media screen and (min-width: 992px){
			.content-header{
				position: relative;
				height: 60vh;
				background-size: 100% auto;
			}
			.find-us iframe{
				width: 100%;
				height: 450px;
			}
		}
		@media screen and (max-width: 991px) and (min-width: 768px){
			.find-us iframe{
				width: 100%;
				height: 300px;
			}
		}
		@media screen and (max-width: 767px){
			.find-us iframe{
				width: 100%;
				height: 250px;
			}
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
	</style>
	<div class="bg-dark d-none" id="cover-roll" style="z-index: 100; height: 100vh; width: 100%; position: fixed; top: 0; left: 0; display: flex; align-items: center; justify-content: center;">
		<h1 class="text-white animate__animated animate__pulse animate__infinite" style="font-family: 'Monotype Corsiva';">Sending ...</h1>
	</div>
	<section class="content-header d-flex align-items-center justify-content-center overflow-hidden">
		<img src="{{ asset('assets/images/contact/Contact Us.jpg') }}" width="100%">
	</section>
	<section class="text-center">
		<div>
			<div class="bg-blue py-3 contact-us" data-aos="fade-down">
				<br><br>
				<h1 class="text-white mb-lg-4 mb-2">CONTACT US</h1>
				<!-- <form class="text-start text-white" action="{{ route('contact.store') }}" method="post"> -->
				<div class="text-start text-white" id="submitform">
					<div class="row">
						<div class="col-6">
							<div class="form-group mx-md-4 mt-3 me-md-4">
								<label>First Name</label>
								<input type="text" name="firstname" id="firstname" class="w-100 bg-blue text-white" required>
							</div>
						</div>
						<div class="col-6">
							<div class="form-group mx-md-4 mt-3 ms-md-4">
								<label>Last Name</label>
								<input type="text" name="lastname" id="lastname" class="w-100 bg-blue text-white" required>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-6">
							<div class="form-group mx-md-4 mt-3 me-md-4">
								<label>Email</label>
								<input type="email" name="email" id="email" class="w-100 bg-blue text-white" required>
							</div>
						</div>
						<div class="col-6">
							<div class="form-group mx-md-4 mt-3 ms-md-4">
								<label>Phone</label>
								<input type="number" name="telephone" id="telephone" class="w-100 bg-blue text-white" required>
							</div>
						</div>
					</div>
					<div>
						<div class="form-group mx-md-4 mt-3">
							<label>Company</label>
							<input type="text" name="company" id="company" class="w-100 bg-blue text-white" required>
						</div>
						<div class="form-group mx-md-4 mt-3">
							<label>Position</label>
							<input type="text" name="position" id="position" class="w-100 bg-blue text-white" required>
						</div>
					</div>
					<div class="form-group mx-md-4 mt-3 text-center">
						<br>
						<button class="btn btn-light px-5" id="submit"><strong>SUBMIT</strong></button><br>
						<small id="message-success" class="d-none">Thanks for submitting!</small>
						<br><br>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="my-md-5 my-5 find-us">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-5" data-aos="fade-right">
					<div class="border-blue border-5">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.2873136622698!2d106.78246831435057!3d-6.225797662705745!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f131ae27f3cd%3A0xc19276eedb276f0d!2sNexpac%20Aseptik%20Indonesia!5e0!3m2!1sid!2sid!4v1679209081107!5m2!1sid!2sid" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
					</div>
				</div>
				<div class="col-lg-6 col-md-7" data-aos="fade-left">
					<div class="mx-md-4 text-blue">
						<h1>FIND US</h1>
						<div class="group-find-us">
							<h5>Alamat</h5>
							<span class="text-gray">Jl. Arteri Permata Hijau No.11, RT.11/RW.10, Grogol Utara, Kec. Kby. Lama, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12210, Indonesia</span>
						</div>
						<div class="group-find-us mt-lg-3 mt-2">
							<h5>Email</h5>
							<span class="text-gray">support.nexpac@sansico.com</span>
						</div>
						<div class="group-find-us mt-lg-3 mt-2">
							<h5>Call</h5>
							<span class="text-gray">(021) 53663888</span>
						</div>
						<a href="https://www.facebook.com/NexpacFoodPackaging" target="__blank" class="text-decoration-none text-blue">
							<div class="group-find-us mt-lg-3 mt-2 d-flex align-items-center">
								<h2 style="margin: 0"><i class="fab fa-facebook me-3"></i></h2>
								<span class="text-gray"> Nexpac</span>
							</div>
						</a>
						<a href="https://www.instagram.com/nexpac.id/" target="__blank" class="text-decoration-none text-blue">
							<div class="group-find-us mt-md-1 mt-1 d-flex align-items-center">
								<h2 style="margin: 0"><i class="fab fa-instagram me-3"></i></h2>
								<span class="text-gray ms-1"> Nexpac.id</span>
							</div>
						</a>
						<a href="https://www.linkedin.com/company/nexpacaseptikindonesia/about/" target="__blank" class="text-decoration-none text-blue">
							<div class="group-find-us mt-md-1 mt-1 d-flex align-items-center">
								<h2 style="margin: 0"><i class="fab fa-linkedin me-3"></i></h2>
								<span class="text-gray ms-1"> Nexpac AseptiK Indonesia</span>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<script type="text/javascript">
		document.getElementsByClassName('menu-top')[5].classList.add('active');
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
					'_token': "{{ csrf_token() }}",
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