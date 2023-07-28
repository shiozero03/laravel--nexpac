@extends('pages.admin.theme.layout')
@section('title', 'Dashboard')
@section('content')
<style type="text/css">
	.dashboard-card .iconic{
		opacity: 20%;
		right: 10px;
		top: 50%;
		transform: translateY(-50%) rotate(-15deg);
		font-size: 4rem;
	}
	.dashboard-card a{
		color: white;
		transition: .3s ease;
	}
	.dashboard-card a:hover{
		color: cornsilk;
		transition: .3s ease;
	}
	.dataTables_length, .dataTables_filter, .dataTables_paginate{
		display: none;
	}
</style>
<div class="row">
	<div class="col-lg-3 col-md-6 col-12 my-1">
		<div class="dashboard-card w-100 border border-success rounded overflow-hidden">
			<div class="position-relative pt-2 px-2">
				<div class="col-8">
					<h2>Product</h2>
					<hr style="margin: 0">
					<h1 class="mt-1">{{ $product->count() }}</h1>
				</div>
				<h1 class="position-absolute iconic"><i class="fas fa-shopping-cart "></i></h1>
			</div>
			<div class="bg-success p-2">
				<a href="" class="text-decoration-none">See More . . .</a>
			</div>
		</div>
	</div>
	<div class="col-lg-3 col-md-6 col-12 my-1">
		<div class="dashboard-card w-100 border border-primary rounded overflow-hidden">
			<div class="position-relative pt-2 px-2">
				<div class="col-8">
					<h2>Applications</h2>
					<hr style="margin: 0">
					<h1 class="mt-1">{{ $application->count() }}</h1>
				</div>
				<h1 class="position-absolute iconic"><i class="mdi mdi-camera-iris"></i></h1>
			</div>
			<div class="bg-primary p-2">
				<a href="" class="text-decoration-none">See More . . .</a>
			</div>
		</div>
	</div>
	<div class="col-lg-3 col-md-6 col-12 my-1">
		<div class="dashboard-card w-100 border border-danger rounded overflow-hidden">
			<div class="position-relative pt-2 px-2">
				<div class="col-8">
					<h2>Certifications</h2>
					<hr style="margin: 0">
					<h1 class="mt-1">{{ $certificate->count() }}</h1>
				</div>
				<h1 class="position-absolute iconic"><i class="fas fa-medal "></i></h1>
			</div>
			<div class="bg-danger p-2">
				<a href="" class="text-decoration-none">See More . . .</a>
			</div>
		</div>
	</div>
	<div class="col-lg-3 col-md-6 col-12 my-1">
		<div class="dashboard-card w-100 border border-info rounded overflow-hidden">
			<div class="position-relative pt-2 px-2">
				<div class="col-8">
					<h2>Contact</h2>
					<hr style="margin: 0">
					<h1 class="mt-1">{{ $contact->count() }}</h1>
				</div>
				<h1 class="position-absolute iconic"><i class="fas fa-message "></i></h1>
			</div>
			<div class="bg-info p-2">
				<a href="" class="text-decoration-none">See More . . .</a>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-md-6 my-2">
		<h3><strong><i class="mdi mdi-cart me-2"></i>Product</strong></h3>
		<div class="table-responsive">
			<table class="table table-bordered table-striped" id="product">
				<thead>
					<tr>
						<th>No</th>
						<th>Product Picture</th>
						<th>Product Name</th>
					</tr>
				</thead>
				<tbody>
					<?php $no = 1 ?>
					@foreach($product as $pro)
					<tr>
						<td>{{ $no++ }}</td>
						<td class="text-center" width="30%"><img src="{{ asset('assets/images/products/'.$pro->product_picture) }}" width="60px"></td>
						<td>{{ $pro->product_name }}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
	<div class="col-md-6 my-2">
		<h3><strong><i class="mdi mdi-camera-iris me-2"></i>Application</strong></h3>
		<div class="table-responsive">
			<table class="table table-bordered table-striped" id="application">
				<thead>
					<tr>
						<th>No</th>
						<th>Product Picture</th>
						<th>Product Name</th>
					</tr>
				</thead>
				<tbody>
					<?php $no = 1 ?>
					@foreach($application as $app)
					<tr>
						<th>{{ $no++ }}</th>
						<td class="text-center" width="30%"><img src="{{ asset('assets/images/applications/'.$app->application_picture) }}" width="60px"></td>
						<td>{{ $app->application_name }}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection
@section('script')
<script type="text/javascript">
	$(document).ready(function(){
		$('#product').DataTable()
		$('#application').DataTable()
	})
</script>
@endsection