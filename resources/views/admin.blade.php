@extends('layouts.layoutAdmin')

@section('content')
		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Dashboard</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Dashboard</a>
						</li>
						<li><i class='bx bx-chevron-right' ></i></li>
						<li>
							<a class="active" href="#">Home</a>
						</li>
					</ul>
				</div>
			</div>

			<ul class="box-info">
				<li>
					<i class='bx bxs-calendar-check' ></i>
					<span class="text">
						<h3>6</h3>
						<p>Category</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-book' ></i>
					<span class="text">
						<h3>18</h3>
						<p>Book</p>
					</span>
				</li>
			</ul>
		<!-- MAIN -->
	</section>

@endsection
