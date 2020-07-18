
@extends('frontend.layouts.master')


@section('main')

	
<section class="section-name bg padding-y-sm">
<div class="container">
<header class="section-heading">
	<h3 class="section-title">Product detail</h3>
</header><!-- sect-heading -->

	<div class="row">
			<div class="col-md-12">
			<output>
				<div class="card">
				<div class="row no-gutters">
					<aside class="col-md-6">
			<article class="gallery-wrap">
			<div class="img-big-wrap">
			  <div> <a href="#"><img src="images/items/12.jpg"></a></div>
			</div> <!-- slider-product.// -->
			<div class="thumbs-wrap">
			  <a href="" class="item-thumb"> <img src="images/items/12.jpg"></a>
			  <a href="" class="item-thumb"> <img src="images/items/12-1.jpg"></a>
			  <a href="" class="item-thumb"> <img src="images/items/12-2.jpg"></a>
			</div> <!-- slider-nav.// -->
			</article> <!-- gallery-wrap .end// -->
					</aside>
					<main class="col-md-6 border-left">
			<article class="content-body">

			<h2 class="title">{{ $product -> title }}</h2>

			<div class="rating-wrap my-3">
				<ul class="rating-stars">
					<li style="width:80%" class="stars-active">
						<i class="fa fa-star"></i> <i class="fa fa-star"></i>
						<i class="fa fa-star"></i> <i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
					</li>
					<li>
						<i class="fa fa-star"></i> <i class="fa fa-star"></i>
						<i class="fa fa-star"></i> <i class="fa fa-star"></i>
						<i class="fa fa-star"></i>
					</li>
				</ul>
				<small class="label-rating text-muted">132 reviews</small>
				<small class="label-rating text-success"> <i class="fa fa-clipboard-check"></i> 154 orders </small>
			</div> <!-- rating-wrap.// -->

			<div class="mb-3">
				<var class="price h4">৳ {{ $product-> price }}</var>
				<!--<span class="text-muted">/per kg</span> -->
			</div> <!-- price-detail-wrap .// -->

			<p>{{ $product-> description }}</p>


			<dl class="row">
			  <dt class="col-sm-3">Model#</dt>
			  <dd class="col-sm-9">Odsy-1000</dd>

			  <dt class="col-sm-3">Color</dt>
			  <dd class="col-sm-9">Brown</dd>

			  <dt class="col-sm-3">Delivery</dt>
			  <dd class="col-sm-9">Russia, USA, and Europe </dd>
			</dl>

			<hr>
				<div class="form-row">
					<div class="form-group col-md flex-grow-0">
						<label>Quantity</label>
						<div class="input-group mb-3 input-spinner">
						  <div class="input-group-prepend">
							<button class="btn btn-light" type="button" id="button-plus"> + </button>
						  </div>
						  <input type="text" class="form-control" value="1">
						  <div class="input-group-append">
							<button class="btn btn-light" type="button" id="button-minus"> − </button>
						  </div>
						</div>
					</div> <!-- col.// -->
					<div class="form-group col-md">
							<label>Select size</label>
							<div class="mt-1">
								<label class="custom-control custom-radio custom-control-inline">
								  <input type="radio" name="select_size" checked="" class="custom-control-input">
								  <div class="custom-control-label">Small</div>
								</label>

								<label class="custom-control custom-radio custom-control-inline">
								  <input type="radio" name="select_size" class="custom-control-input">
								  <div class="custom-control-label">Medium</div>
								</label>

								<label class="custom-control custom-radio custom-control-inline">
								  <input type="radio" name="select_size" class="custom-control-input">
								  <div class="custom-control-label">Large</div>
								</label>

							</div>
					</div> <!-- col.// -->
				</div> <!-- row.// -->




				<dl class="row">
				  <dt class="col-sm-5"><a href="#" class="btn  btn-primary"> Buy now </a></dt>
				  <dd class="col-sm-7">
				  	<form action="{{ route('cart.add') }}" method="post">
						@csrf
						<input type="hidden" name="product_id" value="{{ $product->id }}">
						<button type="submit" class="btn  btn-outline-primary"> 
							<span class="text">Add to cart</span> <i class="fas fa-shopping-cart"></i>  
						</button>
					</form>
					</dd>
				</dl>
			</article> <!-- product-info-aside .// -->
					</main> <!-- col.// -->
				</div> <!-- row.// -->
			</div> <!-- card.// -->
			</output>

		</div>
		</div>
	</div>
</section>

@endsection