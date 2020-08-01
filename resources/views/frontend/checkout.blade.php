@extends('frontend.layouts.master')

@section('main')

<!-- ========================= SECTION PAGETOP ========================= -->
<section class="section-pagetop bg">
<div class="container">
	<h2 class="title-page">Checkout</h2>
</div> <!-- container //  -->
</section>
<!-- ========================= SECTION INTRO END// ========================= -->
 
<!-- ========================= SECTION CONTENT ========================= -->

	<div class="container">

		<div class="row">

			@guest()
				<div class="alert alert-info">
					You need to <strong><a href="{{ route('login') }}">Login</a></strong>  first to complete your order.
				</div>

			@else 
			<div class="alert alert-info">
					You are ordering as, {{ auth() -> user() -> name }}
				</div>
			@endguest

		</div>
    @auth()
  </div>

  <div class="container">
  	<div class="row">

  		<!-- //sidebar -->

      <div class="col-md-4 order-md-2 mb-4">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-muted">Your cart</span>
          <span class="badge badge-secondary badge-pill">{{ count($cart) }}</span>
        </h4>
        <ul class="list-group mb-3">
          
          @foreach($cart as $key => $product)
          <li class="list-group-item d-flex justify-content-between lh-condensed">
            <div>
              <h6 class="my-0">{{ $product['title'] }}</h6>
              <small class="text-muted">Quantity: {{ $product['quantity'] }}</small>
            </div>
            <span class="text-muted">৳{{ number_format($product['total_price'], 2) }}</span>
          </li>
          @endforeach
          <li class="list-group-item d-flex justify-content-between">
            <span>Total ৳(BDT)  </span>
            <strong>{{ number_format($total, 2) }}</strong>
          </li>
        </ul>

        <form class="card p-2">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Promo code">
            <div class="input-group-append">
              <button type="submit" class="btn btn-secondary">Redeem</button>
            </div>
          </div>
        </form>
      </div>
      <!-- //sidebar -->

      <div class="col-md-8 order-md-1">
        <h4 class="mb-3">Billing address</h4>
        @include('frontend.partials._message')
        <form action="{{ route('order') }}" method="post">
          @csrf
          <div class="mb-3">
            <label for="customer_name">Customer Name</label>
            <div class="input-group">
              <input type="text" class="form-control" name="customer_name" value="{{ auth()->user()->name }}" required>
              
            </div>
          </div>

          <div class="mb-3">
            <label for="phone_number">Customer Phone Number </label>
            <input type="text" class="form-control" name="customer_phone_number" value="{{ auth()->user()->phone_number }}" required>
          </div>

          <div class="mb-3">
            <label for="address">Address</label>
            <div class="input-group">
              <textarea name="address" class="form-control" value="{{ auth()->user()->address }}" required></textarea>
            </div>
          </div>


          <div class="row">

            <div class="col-md-5 mb-3">
              <label for="city">City</label>
              <input type="text" name="city" class="form-control" value="{{ auth()->user()->city }}" placeholder="City" required=>
            </div>
            <div class="col-md-5 mb-3">
              <label for="postal_code">Postal Code</label>
              <input type="text" name="postal_code" class="form-control" value="{{ auth()->user()->postal_code }}" placeholder="Postal Code" required=>
            </div>
          </div>

          <hr class="mb-4">
          <!--
          <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="same-address">
            <label class="custom-control-label" for="same-address">Shipping address is the same as my billing address</label>
          </div>
          <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="save-info">
            <label class="custom-control-label" for="save-info">Save this information for next time</label>
          </div>
          -->
          <hr class="mb-4">

          <h4 class="mb-3">Payment</h4>
          <!--
          <div class="d-block my-3">
            <div class="custom-control custom-radio">
              <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
              <label class="custom-control-label" for="credit"> Cash On Delivery</label>
            </div>

            <div class="custom-control custom-radio">
              <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
              <label class="custom-control-label" for="debit">Visa card</label>
            </div>
            <div class="custom-control custom-radio">
              <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
              <label class="custom-control-label" for="paypal">Master card </label>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="cc-name">Name on card</label>
              <input type="text" class="form-control" id="cc-name" placeholder="" required>
              <small class="text-muted">Full name as displayed on card</small>
              <div class="invalid-feedback">
                Name on card is required
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="cc-number">Credit card number</label>
              <input type="text" class="form-control" id="cc-number" placeholder="" required>
              <div class="invalid-feedback">
                Credit card number is required
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3 mb-3">
              <label for="cc-expiration">Expiration</label>
              <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
              <div class="invalid-feedback">
                Expiration date required
              </div>
            </div>
            <div class="col-md-3 mb-3">
              <label for="cc-cvv">CVV</label>
              <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
              <div class="invalid-feedback">
                Security code required
              </div>
            </div>
          </div>
        -->
          <hr class="mb-4">
          <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</button>
        </form>
      </div>

    </div>
  </div>
  @endauth

	</div>

@stop