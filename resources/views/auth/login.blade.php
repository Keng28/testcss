<x-guest-layout>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <img src="{{ asset('img/genomics.png')}}" alt="">
        <span>Genome</span>
      </a>

      <nav id="navbar" class="navbar">
       
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  
  <main id="main">
    <section id="hero" class="hero d-flex align-items-center  form">
      <div class="container">

      <div class="row feture-tabs " data-aos="fade-up">
        <div class="col-lg-5 align-self-center ">

              <div class="box" data-aos="fade-up" data-aos-delay="400">
              @if (session('status'))
              <div class="mb-4 font-medium text-sm text-green-600">
                  {{ session('status') }}
              </div>
              @endif

  


              <form action="{{ route('login') }}" method="post" class='php-form'>
              @csrf
                <div class="row gy-4">
                <header class="section-header justify-content-start">
                <p>Login</p>
              </header>
                <div class="col-md-12">
                    <input id="email" class="form-control" type="email" name="email" :value="old('email')" placeholder="Email" required autofocus>
                </div>

                <div class="col-md-12">
                    <input id="password" class="form-control" type="password" name="password" placeholder="Password" required autocomplete="current-password">
                    <a href="#" class="d-flex flex-row-reverse">Forgot Password</a>
                </div>
                <button class="ml-4">
            {{ __('Log in') }}
        </button>

   
          

                <div class="col-md-12 text-center">
                    <a>Don't have an account?</a>
                    <a href="{{ route('register') }}">Register</a>
                </div>

                </div>
            </form>

              </div>

        </div>

        <div class="col-lg-7 hero-img align-self-center">
          <img src="{{ asset('img/hero-img.png')}}" class="img-fluid" alt="">
        </div>
      </div>
      </div>
    </section>




  </main><!-- End #main -->


  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Keng</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
       
        Designed by <a href="https://bootstrapmade.com/">Keng</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

</x-guest-layout>
