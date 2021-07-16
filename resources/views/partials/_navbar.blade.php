<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" href="index.html"><img src="{{ asset('assets/images/kop.png')}}" class="mr-2" alt="logo"/> Poliwangi</a>
        <a class="navbar-brand brand-logo-mini" href="index.html"><img src="{{ asset('assets/images/kop.png')}}" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item nav-profile dropdown">
            <p class="p-4 mt-2">{{auth()->user()->nama}}</p>
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              @if(auth()->user()->id_role == '4')
                <img src="{{ auth()->user()->ambilFotoProfile() }}" alt="profile"/>
              @else
                <img src="{{ asset('Images/Profile/avatar.png')}}" alt="profile"/>
              @endif
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item">
                <i class="ti-settings text-primary"></i>
                Settings
              </a>
              <a class="dropdown-item" href="{{ route('logout')}}">
                <i class="ti-power-off text-primary"></i>
                Logout
              </a>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>