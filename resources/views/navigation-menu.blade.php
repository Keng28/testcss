
        <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="{{url('/index')}}" class="logo d-flex align-items-center">
        <img src="{{asset('/img/genomics.png')}}" alt="">
        <span>IntelliGene</span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="{{url('/index')}}">Home</a></li>
          <div class="flex-shrink-0 dropdown">
            <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
              <img alt="mdo" width="32" height="32" class="rounded-circle" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}">
            </a>
            <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser2">
                <li><a class="dropdown-item" href="{{ route('profile.show') }}">Profile</a></li>
                <li><hr class="dropdown-divider"></li>
                <li>
                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                          <x-jet-dropdown-link href="{{ route('logout') }}"
                                              onclick="event.preventDefault();
                                              this.closest('form').submit();">
                              {{ __('Log Out') }}
                          </x-jet-dropdown-link>
                    </form>
                </li>
            </ul>
          </div>
          
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
