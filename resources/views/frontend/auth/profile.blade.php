@extends('frontend.layouts.master')


@section('main')

<!-- ========================= SECTION PAGETOP ========================= -->
<section class="section-pagetop bg">
<div class="container">
    <h2 class="title-page">Customer Profile</h2>
</div> <!-- container //  -->
</section>
<!-- ========================= SECTION INTRO END// ========================= -->
 {{ csrf_field() }} 
<!-- ========================= SECTION CONTENT ========================= -->
<section class="section-content padding-y">
    <div class="container">

        <div class="row">
            <main class="col-md-8">
                

                <p>Customer Orders </p>
                
                <table class="table table-bordered table-hover table-responsive">
                    <thead>
                        <tr>
                            <td>Order ID</td>
                            <td>Customer Name</td>
                            <td>Customer Phone Number</td>
                            <td>Total Amount</td>
                            <td>Paid Amount</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $order)
                        <tr>
                            <td>{{ $order->id }}</td>
                            <td>{{ $order->customer_name }}</td>
                            <td>{{ $order->customer_phone_number }}</td>
                            <td>{{ number_format($order->total_amount, 2) }}</td>
                            <td>{{ number_format($order->paid_amount, 2) }}</td>
                            <td>
                                <a href="{{ route('order.details', $order->id) }}">Details</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>


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
