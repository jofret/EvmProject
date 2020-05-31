<div class="site-navbar bg-white py-2">

    <div class="search-wrap">
      <div class="container">
        <a href="#" class="search-close js-search-close"><span class="icon-close2"></span></a>
        <form action="#" method="post">
          <input type="text" class="form-control" placeholder="Search keyword and hit enter...">
        </form>  
      </div>
    </div>

    <div class="container">
      <div class="d-flex align-items-center justify-content-between">
        <div class="logo">
          <div class="site-logo">
            <a href="{{url('/')}}" class="js-logo-clone loves"><img src="{{asset('assets/images/LOGO-ok.png')}}" alt=""> Ev. M Project</a>
          </div>
        </div>
        <div class="main-nav d-none d-lg-block">
          <nav class="site-navigation text-right text-md-center" role="navigation">
            <ul class="site-menu js-clone-nav d-none d-lg-block">
              
              
              
              <li><a href="{{url('/nuestra-historia')}}">Nuestra historia</a></li>
              <li><a href="{{url('/fundadora')}}">Fundadora</a></li>
               

              <li class="has-children">
                <a href="#">lookbook</a>
                <ul class="dropdown">
                  <li><a href="{{url('/sumer-20')}}">Summer 20</a></li>
                  <li><a href="{{url('/fall-winter')}}">Fall winter 20</a></li>
                  <li><a href="{{url('/video')}}#video">Video</a></li>
                </ul>
              </li>

              <li class="has-children">
                <a href="#">colecciones</a>
                <ul class="dropdown">
                  <li><a href="{{url('/recovery')}}">Recovery</a></li>
                  <li><a href="{{url('/in-deep')}}">In deep</a></li>
                  <li><a href="{{url('/who-are-you')}}">Who are you?</a></li>
                </ul>
              </li>
              <li><a href="{{url('/catalogo')}}">Catálogo</a></li>
              <li><a href="{{url('/tiendas')}}#tiendas">Tiendas</a></li>
            </ul>
          </nav>
        </div>
        <div class="icons">
          <a href="#" class="site-menu-toggle js-menu-toggle ml-3 d-inline-block d-lg-none"><span class="icon-menu"></span></a>
        </div>
      </div>
    </div>
  </div>