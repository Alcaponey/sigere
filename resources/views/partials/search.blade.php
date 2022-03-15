<div class="navbar-menu-wrapper navbar-search-wrapper d-none d-lg-flex align-items-center">
    @if(Route::currentRouteName() != 'home')
    <ul class="navbar-nav mr-lg-2">
        <li class="nav-item nav-search d-none d-lg-block">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search Here..." aria-label="search" aria-describedby="search">
            </div>
        </li>
    </ul>
    @endif
    <ul class="navbar-nav navbar-nav-right">
        <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="profileDropdown">
                <img src="{{asset('images/faces/user_100px.png')}}" alt="profile"/>
                <span class="nav-profile-name">{{ auth()->user()->nombres." ".auth()->user()->apellidos }}</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                <a class="dropdown-item">
                    <i class="mdi mdi-settings text-primary"></i>
                    Settings
                </a>
                <a class="dropdown-item">
                    <i class="mdi mdi-logout text-primary"></i>
                    Logout
                </a>
            </div>
        </li>
        <li class="nav-item">
            <a href="#" class="nav-link icon-link">
                <i class="mdi mdi-logout"></i>
            </a>
        </li>
    </ul>
</div>