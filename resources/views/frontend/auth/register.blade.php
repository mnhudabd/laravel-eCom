@extends('frontend.layouts.master')


@section('main')

<!-- ========================= SECTION PAGETOP ========================= -->
<section class="section-pagetop bg">
<div class="container">
    <h2 class="title-page">Register</h2>
</div> <!-- container //  -->
</section>
<!-- ========================= SECTION INTRO END// ========================= -->
 {{ csrf_field() }} 
<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-content padding-y">
    <div class="container">

        <div class="row">
            <main class="col-md-8">
                @include('frontend.partials._message')
                
                <form action="{{ route('register') }}" class="form" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name">Full Name</label>
                        <input type="text" name="name" value="{{ old('name') }}" required class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="email" name="email" value="{{ old('email') }}" required class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="phone_number">Phone Number</label>
                        <input type="text" name="phone_number" value="{{ old('phone_number') }}" required class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" required class="form-control">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-block btn-success">
                        Register
                        </button>
                    </div>


                </form>
            </main> <!-- col.// -->
            <aside class="col-md-4">
                <div class="card mb-4">
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
                              <dd class="text-right">৳ </dd>
                            </dl>
                            <dl class="dlist-align">
                              <dt>Discount:</dt>
                              <dd class="text-right">৳ 00.00</dd>
                            </dl>
                            <dl class="dlist-align">
                              <dt>Total:</dt>
                              <dd class="text-right  h5"><strong>৳</strong></dd>
                            </dl>
                            <hr>
                            <p class="text-center mb-3">
                                <img src="images/misc/payments.png" height="26">
                            </p>
                            <a href="" class="btn btn-primary btn-block"> Make Purchase <i class="fa fa-chevron-right"></i> </a>
                            <a href="" class="btn btn-light btn-block"><i class="fa fa-chevron-left"></i> Continue Shopping</a>
                            
                    </div> <!-- card-body.// -->
                </div>  <!-- card .// -->
            </aside> <!-- col.// -->
        </div>

    </div> <!-- container .//  -->
</section>
<!-- ========================= SECTION CONTENT END// ========================= -->



@stop
