
@section('main-nav')
<div id="fix" class="fix">
<nav class="navbar top-nav fixedNav navbar-default">
    <div class="container">
      <div id="navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li><a target="_blank" href="https://www.facebook.com/Icarus"><span class="text-social">Follow us on:</span><i class="fa facebook fa-facebook-official"></i></a></li>
          <li><a href="mailto:halo@Icarus.co.ke"><span class="text-social">halo@Icarus.co.ke</span><i class="fa envelope fa-envelope"></i></a></li>
          <li><a href="tel: +254775077077"><span class="text-social"> +254775077077</span><i class="fa phone fa-phone"></i></a></li>
          <li><a href="/contact"><span class="text-quote text-social">Interested in our Pricing?</span><span><button class="btn shaking-btn btn-sm btn-quote text-white" id="quote">Free Quote</button></span></a></li>
        </ul>
      </div>
     <!--/.nav-collapse -->
    </div>
</nav>

<div class="fixedNav">
  <div id="main-nav" class="row main-nav">
    <div id="top-top" class="col-sm-12" role="heading">
           <div class="col-xs-9 col-sm-3"> 
            <a class="logo navbar-btn pull-left" href="/" title="Home" rel="home">
              <img class="img-responsive" id="nav-log" src="{{asset('imgs/logo_0.png')}}" alt="Home" />
            </a>
           </div>
            <div id="navigation-main" class="col-sm-9 push">
              <div class="navbar navbar-default sec-nav container" id="navbar" role="banner">
               
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle toggle-menu menu-right push-body" data-toggle="collapse" data-target=".navbar-collapse">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                </div>
                <div id="hiding">
                    <ul id="menu" class="hide-me">
                        <li><a target="_blank" href="https://www.facebook.com/Icarus"><span class="text-social"></span><i class="fa facebook fa-facebook-official"></i></a></li>
                        <li><a href="mailto:sale@os.my"><span class="text-social"></span><i class="fa envelope fa-envelope"></i></a></li>
                        <li><a href="tel:+603-9054 8817"><span class="text-social"></span><i class="fa phone fa-phone"></i></a></li>
                      </ul>
                    </div>
                <div class="navbar-collapse collapse">
                  <div class="region region-navigation-collapsible">
                      <nav role="navigation" aria-labelledby="our nav" id="our nav">
                      <ul class="menu nav navbar-nav">
                        <li class="home">
                          <a href="/" >Home</a>
                        </li>
                        <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-target="#" data-toggle="dropdown">Our Services <span class="caret"></span></a>
                        <ul class="menu dropdown-menu">
                        <li>
                          <a href="/web-design">Web Design</a>
                        </li>
                        <li>
                          <a href="/web-maintenance">Web Maintenance</a>
                        </li>
                         <li>
                        <a href="/services">More Services</a>
                        </li>
                       {{--  <li>
                          <a href="/drupalisation">PSD / HTML to Drupal</a>
                        </li> --}}
                        {{-- <li>
                          <a href="/real-estate-web-marketing-system">Real Estate Web Marketing System</a>
                        </li> --}}
                        </ul>
                        </li>
                        <li class="products">
                        <a href="/products">Products</a>
                        </li>
                        <li class="portfolio">
                          <a href="/portfolio">Portfolio</a>
                        </li>
                        <li class="dropdown">
                          <a href="/about" class="dropdown-toggle" data-target="#" data-toggle="dropdown" id="dropdownMenuButton" aria-haspopup="true">About Us <span class="caret"></span></a>
                        <ul class="menu dropdown-menu">
                        <li>
                          <a href="/about">Who We Are</a>
                        </li>
                        <li>
                        {{--<a href="/partner">Partner Programme</a>
                        </li>
                        <li>
                          <a href="/the-Icarus-start-up-partnership-program">Start-up Partnership Program</a>
                        </li>
                        <li> --}}
                          <a href="/join-Icarus">Join Us</a>
                        </li>
                        </ul>
                        </li>
                       {{--  <li class="blog">
                          <a href="/blog">Blog</a>
                        </li> --}}
                        <li class="contact">
                        <a href="/contact">Contact Us</a>
                        </li>
                      </ul>
                      </nav>
                      </div>
             </div>
            </div>
           </div>
          </div>
        </div>
  </div>
</div>
@endsection
