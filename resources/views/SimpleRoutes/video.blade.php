@extends('layouts.shopmax')

@section('content')
 <div class="site-blocks-cover inner-page" style="background-image: url('{{asset('assets/images/hero_2.jpg')}}'); background-repeat: no-repeat; background-size: cover; background-position: center" data-aos="fade">
      <div class="container">
        <div class="row">
        
        </div>
      </div>
    </div>

    <div class="custom-border-bottom py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Video</strong></div>
        </div>
      </div>
    </div>


    <div class="site-section custom-border-bottom" id="video" data-aos="fade">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-6 offset-md-3">
            <div class="block-16">
              <div class="site-section-heading pt-3 mb-4">
                <h2 class="text-black loves text-center">Ev. M Project</h2>
              </div>
              <figure>
                <img src="{{asset('assets/images/video-recovery.jpg')}}" alt="video evelyn monteza recovery" class="img-fluid rounded">
                <a href="{{asset('assets/video/video.mp4')}}" class="play-button popup-vimeo"><span class="icon-play"></span></a>

              </figure>
            </div>
          </div>
          <div class="col-md-1"></div>
        </div>
      </div>
    </div>
 @endsection