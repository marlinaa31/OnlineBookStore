@extends('layouts.layoutUser')

@section('content')

<head>
    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="{{ url('css/bootstrap.css') }}" />
    <!-- font awesome style -->
    <link href="{{ url('css/font-awesome.min.css') }}" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="{{ url('css/style.css') }}" rel="stylesheet" />

    <!-- CSS -->
	<link rel="stylesheet" type="text/css" href="{{ url('assets/css/custom.css') }}">
    <!-- responsive style -->
    <link href="{{ url('css/responsive.css') }}" rel="stylesheet" />
  </head>
  <div class="container">
		<!-- JUDUL HALAMAN -->
		<div class="row mt-4">
			<div class="col-12">
				<h5 class="text-judul-halaman">Shipping Details</h5>
			</div>
		</div>


		<div class="row">
			<!-- KOLOM 1 -->
			<div class="col-md-7">
				<form>
					<h5 class="text-judul">Alamat Pengiriman</h5>

                    <label class="w-100 mb-3">
						Nama <br>
						<input type="text" class="form-control">
					</label>
					<label class="w-100 mb-3">
						Alamat lengkap <br>
						<input type="text" class="form-control">
					</label>
					<label class="w-100 mb-3">
						Provinsi <br>
						<input type="text" class="form-control">
					</label>
					<label class="w-100 mb-3">
						Kabupaten / Kota <br>
						<input type="text" class="form-control">
					</label>
					<label class="w-100 mb-3">
						Kode POS <br>
						<input type="number" class="form-control">
					</label>

					<h3 class="text-judul mt-4">Delivery Courier</h3>
					<label class="w-100 mb-3 border rounded p-2">
						<input type="radio" name="kurir">
						<img src="assets/img/kurir-1.png" style="width: 4rem; height: 1rem;">
						<span class="float-end">+ IDR 10.000</span>
					</label>
					<label class="w-100 mb-3 border rounded p-2">
						<input type="radio" name="kurir">
						<img src="assets/img/kurir-2.png">
						<span class="float-end">+ IDR 12.000</span>
					</label>


					<h3 class="text-judul mt-4">Payment Methods</h3>
					<label class="w-100 mb-3 border rounded p-2">
						<input type="radio" name="pembayaran">
						Transfer Bank
					</label>
					<label class="w-100 mb-3 border rounded p-2">
						<input type="radio" name="pembayaran">
						Cash on Delivery (COD)
					</label>
					<label class="w-100 mb-3 border rounded p-2">
						<input type="radio" name="pembayaran">
						<img src="assets/img/bayar-1.png">
					</label>
					<label class="w-100 mb-3 border rounded p-2">
						<input type="radio" name="pembayaran">
						<img src="assets/img/bayar-2.png">
					</label>
					<label class="w-100 mb-3 border rounded p-2">
						<input type="radio" name="pembayaran">
						<img src="assets/img/bayar-3.png">
					</label>

					<button type="submit" class="btn btn-lg btn-success mt-4 mb-5">Pay</button>

				</form>
			</div>

			<!-- KOLOM 2 -->
			<div class="col-md-4 offset-md-1">
				<div class="card sticky-top">
				  <div class="card-header bg-white">
				    <h3 class="text-judul">Payment Details</h3>
				  </div>
				  <div class="card-body">
				    <div class="row mt-2 mb-2">
				    	<div class="col-md"><small>Sub Total</small></div>
				    	<div class="col-md">IDR 290.500</div>
				    </div>
				    <div class="row mt-2 mb-2">
				    	<div class="col-md"><small>Shipping Costs</small></div>
				    	<div class="col-md">IDR 10.000</div>
				    </div>
				    <div class="row mt-2 mb-2">
				    	<div class="col-md"><small>Total</small></div>
				    	<div class="col-md">IDR 300.500</div>
				    </div>
				  </div>
				  <div class="card-footer">
				    <button type="submit" class="btn btn-lg btn-success w-100">Pay</button>
				  </div>
				</div>
			</div>
		</div>
	</div>
    <!-- PENUTUP CONTAINER -->

     <!-- jQery -->

     <script src="{{ url('js/jquery-3.4.1.min.js') }}"></script>
     <!-- bootstrap js -->
     <script src="{{ url('js/bootstrap.js') }}"></script>
     <script src="{{ url('js/bootstrap.min.js') }}"></script>
     <!-- custom js -->
     <script src="{{ url('js/custom.js') }}"></script>
     <!-- Google Map -->
     <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
     </script>
     <!-- End Google Map -->
   @endsection
