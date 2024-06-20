<nav>
    <i class='bx bx-menu'></i>
    {{-- <a href="#" class="nav-link">Categories</a> --}}
    <div id="sideb">
        <a class="brand"><i class='bx bx-code-alt'></i></a>
    </div>

    <form action="#">
        <div class="form-input">
            <input type="search" placeholder="Search..." style="display: none">
            <button type="submit" class="search-btn" style="display: none"><i class='bx bx-search'></i></button>
        </div>
    </form>
    <input type="checkbox" id="switch-mode" hidden>
    <label for="switch-mode" class="switch-mode"></label>
    {{-- <a href="#" class="notification">
        <i class='bx bxs-bell' ></i>
        <span class="num">8</span>
    </a> --}}
    {{-- <a href="#" class="profile">
        <img src="img/people.png">
    </a> --}}
    <div class="dropdown">
        <button class="btn dropdown-toggle profile" type="button" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="{{ asset('img/user.png') }}">
        </button>
        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item ble" href="{{ route('profile') }}"><i class='bx bx-user'></i> Profile</a></li>
            <li><a class="dropdown-item ble" href="#"><i class='bx bx-cog'></i> Settings</a></li>
            <li><a class="dropdown-item text-danger" href="#"><i class='bx bx-power-off'></i> Logout</a></li>
        </ul>
    </div>


    <a class="btn bbdd" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button"
        aria-controls="offcanvasExample">
        <i class="fa-solid fa-bars"></i>
    </a>
</nav>
<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel"
    style="width: 280px">
    <div class="offcanvas-header text-white">
        {{-- <h5 class="offcanvas-title" id="offcanvasExampleLabel">Offcanvas</h5> --}}
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"><i
                class="fa-solid fa-xmark"></i></button>
    </div>
    <div class="offcanvas-body">
        <ul class="side-menue top tp">
            <li class="{{ $side === 'home' ? 'actt' : '' }}">
                <a href="{{ route('home') }}">
                    <i class='bx bxs-dashboard'></i>
                    <span class="text">Dashboard</span>
                </a>
            </li>
            <li class="{{ $side === 'course' ? 'actt' : '' }}">
                <a href="{{ route('courses') }}">
                    <i class='bx bxs-book'></i>
                    <span class="text">courses</span>
                </a>
            </li>

        </ul>
    </div>
</div>
