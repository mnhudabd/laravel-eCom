@extends('frontend.layouts.master')


@section('main')

<!-- ========================= SECTION PAGETOP ========================= -->
<section class="section-pagetop bg">
<div class="container">
	<h2 class="title-page">Shopping cart</h2>
</div> <!-- container //  -->
</section>
<!-- ========================= SECTION INTRO END// ========================= -->
 {{ csrf_field() }} 
<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-content padding-y">
<div class="container">

<div class="row">
	<main class="col-md-9">
<div class="card">

<table class="table table-borderless table-responsive table-shopping-cart">
<thead class="text-muted">
	<tr class="small text-uppercase">
		<th scope="col">Serial</th>
	  	<th scope="col">Product</th>
	  	<th scope="col" width="110">Quantity</th>
	  	<th scope="col" width="110">Price</th>
	  	<th scope="col" class="text-right" width="200"> </th>
	</tr>
</thead>
<tbody>

	@php $i = 1 @endphp

	@foreach($cart as $product)
	<tr>
		<td>
			<div class="price-wrap"> 
				<small  class="title text-dark"> {{ $i++ }} </small> 
			</div>
		</td>
		<td>
			<figure class="itemside">
				<div class="aside">
					<img src="images/items/1.jpg" class="img-sm"></div>
				<figcaption class="info">
					<a href="#" class="title text-dark">{{ $product['title'] }}</a>
					<p class="text-muted small">Size: XL, Color: blue, <br> Brand: Srishity</p>
				</figcaption>
			</figure>
		</td>
		<td> 
			<input type="number" name="quantity" value="">
			<select class="form-control">
				<option>1</option>
				<option>2</option>	
				<option>3</option>	
				<option>4</option>	
			</select> 
		</td>
		<td> 
			<div class="price-wrap"> 
				<var class="price">{{ $product['price'] }}</var> 
			</div>
		</td>
		<td class="text-right"> 
			<a data-original-title="Save to Wishlist" title="" href="" class="btn btn-light" data-toggle="tooltip">
			<i class="fa fa-heart"></i></a> 
			<a href="" class="btn btn-light"> Remove</a>
		</td>
	</tr>
	@endforeach
	



<tr>
	<td>
			<div class="price-wrap">
				<small class="title text-dark"> 1 </small>
			</div>
		</td>
	<td>
		<figure class="itemside">
			<div class="aside"><img src="images/items/2.jpg" class="img-sm"></div>
			<figcaption class="info">
				<a href="#" class="title text-dark">Product name  goes here nice</a>
				<p class="text-muted small">Size: XL, Color: blue, <br> Brand: Gucci</p>
			</figcaption>
		</figure>
	</td>
	<td> 
		<select class="form-control">
			<option>1</option>
			<option>2</option>	
			<option>3</option>	
			<option>4</option>	
		</select> 
	</td>
	<td> 
		<div class="price-wrap"> 
			<var class="price">$149.97</var> 
			<small  class="text-muted"> $75.00 each </small>  
		</div> 
	</td>
	<td class="text-right"> 
	<a data-original-title="Save to Wishlist" title="" href="" class="btn btn-light" data-toggle="tooltip"> <i class="fa fa-heart"></i></a> 
	<a href="" class="btn btn-light btn-round"> Remove</a>
	</td>
</tr>
<tr>
	<td>
			<div class="price-wrap"> 
				<small class="title text-dark"> 2 </small>
			</div>
		</td>
	<td>
		<figure class="itemside">
			<div class="aside"><img src="images/items/3.jpg" class="img-sm"></div>
			<figcaption class="info">
				<a href="#" class="title text-dark">Another name of some product goes just here</a>
				<p class="small text-muted">Size: XL, Color: blue,  Brand: Tissot</p>
			</figcaption>
		</figure>
	</td>
	<td> 
		<select class="form-control">
			<option>1</option>
			<option>2</option>	
			<option>3</option>	
		</select> 
	</td>
	<td> 
		<div class="price-wrap"> 
			<var class="price">$98.00</var> 
			<small class="text-muted"> $578.00 each</small> 
		</div> 
	</td>
	<td class="text-right"> 
		<a data-original-title="Save to Wishlist" title="" href="" class="btn btn-light" data-toggle="tooltip"> <i class="fa fa-heart"></i></a> 
		<a href="" class="btn btn-light btn-round"> Remove</a>
	</td>
</tr>

<tr>
	<td>
			<div class="price-wrap"> 
				<small class="title text-dark"> 3 </small>
			</div>
		</td>
	<td>
		<figure class="itemside">
			<div class="aside"><img src="images/items/3.jpg" class="img-sm"></div>
			<figcaption class="info">
				<a href="#" class="title text-dark">Another name of some product goes just here</a>
				<p class="small text-muted">Size: XL, Color: blue,  Brand: Tissot</p>
			</figcaption>
		</figure>
	</td>
	<td> 
		<select class="form-control">
			<option>1</option>
			<option>2</option>	
			<option>3</option>	
		</select> 
	</td>
	<td> 
		<div class="price-wrap"> 
			<var class="price">$98.00</var> 
			<small class="text-muted"> $578.00 each</small> 
		</div> 
	</td>
	<td class="text-right"> 
		<a data-original-title="Save to Wishlist" title="" href="" class="btn btn-light" data-toggle="tooltip"> <i class="fa fa-heart"></i></a> 
		<a href="" class="btn btn-light btn-round"> Remove</a>
	</td>
</tr>


</tbody>
</table>

<!--
<div class="card-body border-top">
	<a href="#" class="btn btn-primary float-md-right"> Make Purchase <i class="fa fa-chevron-right"></i> </a>
	<a href="#" class="btn btn-light"> <i class="fa fa-chevron-left"></i> Continue shopping </a>
</div>	
</div> 
-->
<!-- card.// -->

<div class="alert alert-success mt-3">
	<p class="icontext"><i class="icon text-success fa fa-truck"></i> Free Delivery within 10 August 2020 for Dhaka city</p>
</div>

	</main> <!-- col.// -->
	<aside class="col-md-3">
		<div class="card mb-3">
			<div class="card-body">
			<form>
				<div class="form-group">
					<label>Have coupon?</label>
					<div class="input-group">
						<input type="text" class="form-control" name="" placeholder="Coupon code">
						<span class="input-group-append"> 
							<button class="btn btn-primary">Apply</button>
						</span>
					</div>
				</div>
			</form>
			</div> <!-- card-body.// -->
		</div>  <!-- card .// -->
		<div class="card">
			<div class="card-body">
					<dl class="dlist-align">
					  <dt>Total price:</dt>
					  <dd class="text-right">USD 568</dd>
					</dl>
					<dl class="dlist-align">
					  <dt>Discount:</dt>
					  <dd class="text-right">USD 658</dd>
					</dl>
					<dl class="dlist-align">
					  <dt>Total:</dt>
					  <dd class="text-right  h5"><strong>$1,650</strong></dd>
					</dl>
					<hr>
					<p class="text-center mb-3">
						<img src="images/misc/payments.png" height="26">
					</p>
					<a href="#" class="btn btn-primary btn-block"> Make Purchase <i class="fa fa-chevron-right"></i> </a>
					<a href="#" class="btn btn-light btn-block"><i class="fa fa-chevron-left"></i> Continue Shopping</a>
					
			</div> <!-- card-body.// -->
		</div>  <!-- card .// -->
	</aside> <!-- col.// -->
</div>

</div> <!-- container .//  -->
</section>
<!-- ========================= SECTION CONTENT END// ========================= -->



@stop



