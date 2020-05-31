@extends('layouts.shopmax')
@section('content')
<div class="custom-border-bottom py-3">
  <div class="container">
    <div class="row">
      <div class="col-md-12 mb-0"><a href="{{url('/')}}">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Shop</strong></div>
    </div>
  </div>
</div>

<div class="site-section">
      <div class="container">

        <div class="row mb-5">
          <div class="col-md-9 order-1">

            <!-- <div class="row align">
              <div class="col-md-12 mb-5">
                <div class="float-md-left"><h2 class="text-black h5">Shop All</h2></div>
                <div class="d-flex">
                  <div class="dropdown mr-1 ml-md-auto">
                    <button type="button" class="btn btn-white btn-sm dropdown-toggle px-4" id="dropdownMenuOffset" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Latest
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuOffset">
                      <a class="dropdown-item" href="#">Men</a>
                      <a class="dropdown-item" href="#">Women</a>
                      <a class="dropdown-item" href="#">Children</a>
                    </div>
                  </div>
                  <div class="btn-group">
                    <button type="button" class="btn btn-white btn-sm dropdown-toggle px-4" id="dropdownMenuReference" data-toggle="dropdown">Reference</button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuReference">
                      <a class="dropdown-item" href="#">Relevance</a>
                      <a class="dropdown-item" href="#">Name, A to Z</a>
                      <a class="dropdown-item" href="#">Name, Z to A</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Price, low to high</a>
                      <a class="dropdown-item" href="#">Price, high to low</a>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->

            <div class="row mb-5">
              @foreach($products as $product)
              <div class="col-lg-6 col-md-6 item-entry mb-4">
                <a href="{{ route('post', $product->slug) }}" class="product-item md-height bg-gray d-block">
                  <img src="{{$product -> file}}" alt="{{$product -> name}}" class="img-fluid">
                </a>
                
                <strong class="item-price">{{$product -> category_id}}</strong>
              </div>
              @endforeach
            </div>
          </div>

<!--desde aqui categorias------>

          @include('includes.menulateralright')

        </div>

      </div>
    </div>
<div>
	
</div>
@endsection
