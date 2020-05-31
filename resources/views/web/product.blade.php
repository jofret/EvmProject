@extends('layouts.shopmax')

@section('zoom')
<link href="{{asset('assets/css/magnify.css')}}" rel="stylesheet">
@endsection

@section('content')
<div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="{{url('/')}}">Home</a> <span class="mx-2 mb-0">/</span> <a href="{{route('catalogo')}}">Catálogo</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">{{$product->category->name}}</strong></div>
        </div>
      </div>
    </div>  

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="item-entry">
              <a href="#" class="md-height bg-gray d-block">
                <img src="{{$product->file}}" data-magnify-src="{{$product->file2}}" alt="Image" class="img-fluid">
              </a>
            </div>

          </div>
          <div class="prendas col-md-5">
            <div class="row">
              <div class="col-md-6">
                <h2 class="text-black">{{$product->name}}</h2>
                <p><strong class="text-primary h4">S/ {{$product->pricing}} </strong></p>
              </div>
               <div class="col-md-6">
                <p><a href="https://api.whatsapp.com/send?phone=51988482198&text=hola, quisiera información de un producto que veo en su web" class="buy-now btn btn-sm height-auto px-4 py-3 btn-success"> <i class="lni lni-whatsapp size-xs lni-flashing-effect"></i> PREGÚNTAME </a></p>
              </div>
            </div>

            {!! $product->body !!}
            <hr>
            <p>
              - Nuestras prendas son elaboradas con fibras naturales en una cadena sostenible.<br>
              - Precios únicamente disponible para Perú.<br>
              - Precio en soles.<br>
              - Esta oferta es solo disponible para la reactivación de nuestros colaboradores.<br>
              - Costo de envío 10 soles, dentro de Lima Metropolitana.<br>
            </p>

            <hr>
            <h4>Componentes</h4>
            
            <div class="mb-1 d-flex">
              @foreach($product->tags as $tag)<!--{{ route('tag', $tag->slug) }}-->
                <label for="option-sm" class="d-flex mr-3 mb-3">
                    <span class="d-inline-block mr-2" style="top:-2px; position: relative;"></span><span class="d-inline-block text-black"><a href="{{route('tag', $tag->slug)}}">{{ $tag->name }}</a></span>
                </label>
              @endforeach
            </div>
            <!-- <div class="mb-5">
              
              <div class="input-group mb-3" style="max-width: 120px;">
              <div class="input-group-prepend">
                <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
              </div>
              <input type="text" class="form-control text-center" value="1" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
              <div class="input-group-append">
                <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
              </div>
            </div>

            </div>
             -->


          </div>
        </div>
      </div>
    </div>

    <div class="site-section block-3 site-blocks-2">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-7 site-section-heading text-center pt-4">
            <h2>Relacionados a esta categoría</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 block-3">
            <div class="nonloop-block-3 owl-carousel">
              @foreach($productsRelations as $productRelation)
              <div class="item">
                <div class="item-entry">
                  <a href="{{route('post',$productRelation->slug)}}" class="product-item md-height bg-gray d-block">
                    <img src="{{$productRelation->file}}" alt="{{$productRelation->name}}" class="img-fluid">
                  </a>
                  <h2 class="item-title"><a href="{{route('post',$productRelation->slug)}}">{{$productRelation->name}}</a></h2>
                  <strong class="item-price">{{$productRelation->pricing}}</strong>
                  <div class="star-rating">
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection

@section('zoomscript')
<script src="{{asset('assets/js/jquery.magnify.js')}}"></script>
<script>
  $(document).ready(function() {

      $('img').magnify();

  });

</script>
@endsection