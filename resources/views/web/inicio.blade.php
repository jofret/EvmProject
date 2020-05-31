@extends('layouts.shopmax')

@section('content')
<div class="site-section">
      <div class="container">
        <div class="row">
          <div class="title-section mb-5 col-12">
            <h2 class="loves">Lookbook</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-3 col-md-6 item-entry mb-4">
            <a href="#" class="product-item md-height bg-gray d-block">
              <img src="{{asset('assets/images/img/modeloPorada1.jpg')}}" alt="evm project Lookbook" class="img-fluid">
            </a>
          </div>
          <div class="col-lg-3 col-md-6 item-entry mb-4">
            <a href="#" class="product-item md-height bg-gray d-block">
              <img src="{{asset('assets/images/img/modeloPorada2.jpg')}}" alt="evm project Lookbook" class="img-fluid">
            </a>
           
          </div>

          <div class="col-lg-3 col-md-6 item-entry mb-4">
            <a href="#" class="product-item md-height bg-gray d-block">
             <img src="{{asset('assets/images/img/modeloPorada3.jpg')}}" alt="evm project Lookbook" class="img-fluid">
            </a>            
          </div>
          <div class="col-lg-3 col-md-6 item-entry mb-4">
            <a href="#" class="product-item md-height bg-gray d-block">
              <img src="{{asset('assets/images/img/modeloPorada4.jpg')}}" alt="evm project Lookbook" class="img-fluid">
            </a>
          </div>


        </div>
      </div>
    </div>
@endsection