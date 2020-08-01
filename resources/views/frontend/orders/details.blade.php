@extends('frontend.layouts.master')


@section('main')

<!-- ========================= SECTION PAGETOP ========================= -->
<section class="section-pagetop bg">
<div class="container">
    <h2 class="title-page">Order Details</h2>
</div> <!-- container //  -->
</section>
<!-- ========================= SECTION INTRO END// ========================= -->
 {{ csrf_field() }} 
<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-content padding-y">
    <div class="container">

        <div class="row">
            <main class="col-md-8">
                

                <p> Order ID : {{ $order->id }} </p>

                <ul class="list-group">
                    <li class="list-group-item">
                        Customer Name: {{ $order->customer_name }}
                    </li>
                    <li class="list-group-item">
                        Customer Phone Number: {{ $order->customer_phone_number }}
                    </li>
                    <li class="list-group-item">
                        Address: {{ $order->address }}                      
                    </li>
                    <li class="list-group-item">
                        City: {{ $order->city }} 
                    </li>
                    <li class="list-group-item">
                        Postal Code:{{ $order->postal_code }} 
                    </li>
                </ul>
                
                


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
