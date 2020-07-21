
@extends('frontend.layouts.master')

@section('main')

    @include('frontend.partials._hero')

<!-- ========================= SECTION POPULAR ========================= -->
<section class="section-content">
<div class="container">

<header class="section-heading">
    <h3 class="section-title">Popular products</h3>
</header><!-- sect-heading -->

<div class="row">
    @foreach($products as $product)
    <div class="col-md-3">
        <div href="#" class="card card-product-grid">
            <a href="{{ route('product.details', $product -> slug) }}" class="img-wrap overlay"> 
                <img class="" src="{{ $product->getFirstMediaUrl('products') }}" alt="{{ $product -> title }}">  </a> 
            <figcaption class="info-wrap">
                <a href="{{ route('product.details', $product -> slug) }}" class="title">{{ $product -> title }}</a>
                
                
                <div class="d-flex justify-content-between align-items-center">
                    <div class="rating-wrap">
                    <ul class="rating-stars">
                        <li style="width:80%" class="stars-active"> 
                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                        </li>
                        <li>
                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> 
                        </li>
                    </ul>
                    <span class="label-rating text-muted"> 34 reviws</span>
                </div>
                    <div class="price mt-2">‎

                        @if($product -> sale_price !==  null && $product -> sale_price > 0)

                            ৳ <strike>{{ $product-> price }}</strike> ৳ {{ $product -> sale_price }}
                         @else

                          ৳{{ $product-> price }}

                          @endif
                    </div>

                </div>
                <div class="d-flex justify-content-between align-items-center">
                    
                    <div class="btn-group">
                        <button type="button" class="btn btn-sm btn-outline-primary">
                            Add to wishlist                            
                        </button>
                    </div>
                    <div class="btn-group">
                        <form action="{{ route('cart.add') }}" method="post">
                            @csrf
                            <input type="hidden" name="product_id" value="{{ $product -> id }}">
                            <button type="submit" class="btn btn-sm btn-outline-primary"> 
                                <span class="text">Add to cart</span>  
                            </button>
                        </form>
                    </div>
                </div> 
                
            </figcaption>
        </div>
    </div> 
    @endforeach
       

<div class="col-md-12" style="text-align: center;">
    {{ $products->render() }}
</div>

</div>

</div> <!-- container .//  -->

</section>
<!-- ========================= SECTION POPULAR END// ========================= -->

<!-- ========================= SECTION NEW ARRIVED ========================= -->
<section class="section-content">
<div class="container">

<header class="section-heading">
    <h3 class="section-title">New arrived</h3>
</header><!-- sect-heading -->
<div class="row">
    <div class="col-md-3">
        <div href="#" class="card card-product-grid">
            <a href="#" class="img-wrap"> <img src="images/items/5.jpg"> </a>
            <figcaption class="info-wrap">
                <a href="#" class="title">Just another product name</a>
                
                <div class="rating-wrap">
                    <ul class="rating-stars">
                        <li style="width:80%" class="stars-active"> 
                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                        </li>
                        <li>
                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> 
                        </li>
                    </ul>
                    <span class="label-rating text-muted"> 34 reviws</span>
                </div>
                <div class="price mt-1">$179.00</div> <!-- price-wrap.// -->
            </figcaption>
        </div>
    </div> <!-- col.// -->
    <div class="col-md-3">
        <div href="#" class="card card-product-grid">
            <a href="#" class="img-wrap"> <img src="images/items/6.jpg"> </a>
            <figcaption class="info-wrap">
                <a href="#" class="title">Some item name here</a>
                
                <div class="rating-wrap">
                    <ul class="rating-stars">
                        <li style="width:80%" class="stars-active"> 
                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                        </li>
                        <li>
                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> 
                        </li>
                    </ul>
                    <span class="label-rating text-muted"> 34 reviws</span>
                </div>
                <div class="price mt-1">$280.00</div> <!-- price-wrap.// -->
            </figcaption>
        </div>
    </div> <!-- col.// -->
    <div class="col-md-3">
        <div href="#" class="card card-product-grid">
            <a href="#" class="img-wrap"> <img src="images/items/7.jpg"> </a>
            <figcaption class="info-wrap">
                <a href="#" class="title">Great product name here</a>
                
                <div class="rating-wrap">
                    <ul class="rating-stars">
                        <li style="width:80%" class="stars-active"> 
                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                        </li>
                        <li>
                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> 
                        </li>
                    </ul>
                    <span class="label-rating text-muted"> 34 reviws</span>
                </div>
                <div class="price mt-1">$56.00</div> <!-- price-wrap.// -->
            </figcaption>
        </div>
    </div> <!-- col.// -->
    <div class="col-md-3">
        <div href="#" class="card card-product-grid">
            <a href="#" class="img-wrap"> <img src="images/items/9.jpg"> </a>
            <figcaption class="info-wrap">
                <a href="#" class="title">Just another product name</a>
                
                <div class="rating-wrap">
                    <ul class="rating-stars">
                        <li style="width:80%" class="stars-active"> 
                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                        </li>
                        <li>
                            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i> 
                        </li>
                    </ul>
                    <span class="label-rating text-muted"> 34 reviws</span>
                </div>
                <div class="price mt-1">$179.00</div> <!-- price-wrap.// -->
            </figcaption>
        </div>
    </div> <!-- col.// -->
</div> <!-- row.// -->

</div> <!-- container .//  -->
</section>
<!-- ========================= SECTION NEW ARRIVED END// ========================= -->

<!-- ========================= SECTION RECOMMENDED ========================= -->
<section class="section-content padding-bottom-sm">
<div class="container">

<header class="section-heading">
    <a href="#" class="btn btn-outline-primary float-right">See all</a>
    <h3 class="section-title">Recommended</h3>
</header><!-- sect-heading -->

<div class="row">

    <div class="col-md-3">
        <div href="#" class="card card-product-grid">
            <a href="#" class="img-wrap"> <img src="images/items/1.jpg"> </a>
            <figcaption class="info-wrap">
                <a href="#" class="title">Just another product name</a>
                <div class="price mt-1">$179.00</div> <!-- price-wrap.// -->
            </figcaption>
        </div>
    </div> <!-- col.// -->


    <div class="col-md-3">
        <div href="#" class="card card-product-grid">
            <a href="#" class="img-wrap"> <img src="images/items/2.jpg"> </a>
            <figcaption class="info-wrap">
                <a href="#" class="title">Some item name here</a>
                <div class="price mt-1">$280.00</div> <!-- price-wrap.// -->
            </figcaption>
        </div>
    </div> <!-- col.// -->
    <div class="col-md-3">
        <div href="#" class="card card-product-grid">
            <a href="#" class="img-wrap"> <img src="images/items/3.jpg"> </a>
            <figcaption class="info-wrap">
                <a href="#" class="title">Great product name here</a>
                <div class="price mt-1">$56.00</div> <!-- price-wrap.// -->
            </figcaption>
        </div>
    </div> <!-- col.// -->
    <div class="col-md-3">
        <div href="#" class="card card-product-grid">
            <a href="#" class="img-wrap"> <img src="images/items/4.jpg"> </a>
            <figcaption class="info-wrap">
                <a href="#" class="title">Just another product name</a>
                <div class="price mt-1">$179.00</div> <!-- price-wrap.// -->
            </figcaption>
        </div>
    </div> <!-- col.// -->
</div> <!-- row.// -->

</div> <!-- container .//  -->
</section>
<!-- ========================= SECTION RECOMMENDED END// ========================= -->

@stop