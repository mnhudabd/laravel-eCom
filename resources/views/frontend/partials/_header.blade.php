
<header class="section-header">

<nav class="navbar navbar-dark navbar-expand p-0 bg-primary">
<div class="container">
    <ul class="navbar-nav d-none d-md-flex mr-auto">
        <li class="nav-item"><a class="nav-link" href="{{ route('frontend.home') }}">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Delivery</a></li>
        <li class="nav-item"><a class="nav-link" href="#">Payment</a></li>
    </ul>
    <ul class="navbar-nav">
        <li  class="nav-item"><a href="#" class="nav-link"> Call: +8801729299208</a></li>
        <!--
        <li class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"> English </a>
            
            <ul class="dropdown-menu dropdown-menu-right" style="max-width: 100px;">
                <li><a class="dropdown-item" href="#">Arabic</a></li>
                <li><a class="dropdown-item" href="#">Russian </a></li>
            </ul>
        </li>
        -->
    </ul> <!-- list-inline //  -->
  </div> <!-- navbar-collapse .// -->
</div> <!-- container //  -->
</nav> <!-- header-top-light.// -->

<section class="header-main border-bottom">
    <div class="container">
<div class="row align-items-center">
    <div class="col-lg-2 col-6">
        <a href="{{ route('frontend.home') }}" class="brand-wrap">
            <img class="logo" src="{{ asset('images/logos/'.'logo.png')}}">
        </a> <!-- brand-wrap.// -->
    </div>
    <div class="col-lg-6 col-12 col-sm-12">
        <form action="#" class="search">
            <div class="input-group w-100">
                <input type="text" class="form-control" placeholder="Search">
                <div class="input-group-append">
                  <button class="btn btn-primary" type="submit">
                    <i class="fa fa-search"></i>
                  </button>
                </div>
            </div>
        </form> <!-- search-wrap .end// -->
    </div> <!-- col.// -->
    <div class="col-lg-4 col-sm-6 col-12">
        <div class="widgets-wrap float-md-right">
            <div class="widget-header  mr-3">
                <a href="{{ route('cart.show') }}" class="icon icon-sm rounded-circle border"><i class="fa fa-shopping-cart" aria-hidden="true"></i>
</a>
                <span class="badge badge-pill badge-danger notify">0</span>
            </div>
            <div class="widget-header icontext">
                <a href="#" class="icon icon-sm rounded-circle border"><i class="fa fa-user"></i></a>
                <div class="text">
                    <span class="text-muted">Welcome!</span>
                    <div class="flex-center position-ref full-height">
                            <div class="top-right links">                            
                                    <a href="#">Login</a> | 
                                        <a href="#">Register</a>                              
                            </div>
                    </div>
                </div>
            </div>
        </div> <!-- widgets-wrap.// -->
    </div> <!-- col.// -->
</div> <!-- row.// -->
    </div> <!-- container.// -->
</section> <!-- header-main .// -->


<nav class="navbar navbar-main navbar-expand-lg navbar-light border-bottom">
  <div class="container">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav" aria-controls="main_nav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="main_nav">
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link pl-0" data-toggle="dropdown" href="#"><strong> <i class="fa fa-bars"></i> &nbsp  Categories</strong></a>
          <div class="dropdown-menu">
                @foreach($categories as $category)
                    <a class="dropdown-item" href="{{ $category -> slug }}"> {{ $category -> name }} </a>
                @endforeach
          </div> 
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Fashion</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Supermarket</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Electronics</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Baby &amp Toys</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Fitness sport</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Clothing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Furnitures</a>
        </li>
      </ul>
    </div> <!-- collapse .// -->

  </div> <!-- container .// -->
</nav>

    <!-- Test nav start  -->
   
    <!-- Test nav end  -->


</header> <!-- section-header.// -->

