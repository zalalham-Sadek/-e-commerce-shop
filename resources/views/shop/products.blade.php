@extends('layouts.app')

@section('title', 'Products')

@section('content')


	<!-- breadcrumb-section -->
	<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>Fresh and Organic</p>
						<h1>Products</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- products -->
	<div class="product-section mt-150 mb-150">
		<div class="container">



			<div class="row product-lists">


                @foreach ($products as $product)
                <div class="col-lg-4 col-md-6 text-center ">
					<div class="single-product-item">
						<div class="product-image">
							<a href="{{ route('shop.product.details') }}">
								<img src="{{ asset($product['image']) }}" alt="{{ $product['name'] }}">
							</a>
						</div>
						<h3>{{ $product['name'] }}</h3>
						<p class="product-price"><span>Per Kg</span> {{ $product['price'] }}</p>
						<a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
					</div>
				</div>

                @endforeach

			</div>

			<div class="row">
				<div class="col-lg-12 text-center">
					<div class="pagination-wrap">
						<ul>
							<li><a href="#">Prev</a></li>
							<li><a href="#">1</a></li>
							<li><a class="active" href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">Next</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end products -->


@endsection
