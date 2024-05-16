<!-- partial:partials/_navbar.html -->
<nav class="flex-row p-0 navbar col-lg-12 col-12 fixed-top d-flex">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
      <img height="50px" width="70px" style="margin-right:12px" src="{{ asset('front/images/main-logo/main-logo.png') }}"
       alt="logo">
       @if(Auth::guard('admin')->user()->type == 'vendor')
       <b>Seller Dashboard</b>
       @else
       <b>Admin Dashboard</b>
       @endif
       
    </div>
    
    <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler align-self-center" type="button" data-toggle="minimize">
        <span class="icon-menu"></span>
        </button>
        {{-- <ul class="navbar-nav mr-lg-2">
            <li class="nav-item nav-search d-none d-lg-block">
                <div class="input-group">
                    <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                        <span class="input-group-text" id="search">
                        <i class="icon-search"></i>
                        </span>
                    </div>
                    <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search">
                </div>
            </li>
        </ul> --}}
        <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
                <a class="nav-link dropdown-toggle" href="{{ url('admin/update-admin-details') }}" data-toggle="dropdown" id="profileDropdown">


                    {{-- Show the admin image if exists --}}
                   
                    <i class="icon-ellipsis"></i>

                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                    <a href="{{ url('admin/update-admin-details') }}" class="dropdown-item">
                    <i class="ti-settings text-primary"></i>
                    Settings
                    </a>
                    <a href="{{ url('admin/logout') }}" class="dropdown-item">
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