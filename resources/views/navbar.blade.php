<Nav class="lms-navbar">

    <div class="lms-logo">
        <img src={{ asset('img/LMS_logo.png') }} alt="Logo">
        <h2>LMS</h2>
    </div>
    <div class="lms-links">
        @if ($head == 'home')
            <li class="active"><a href="/">Home</a></li>
        @else
            <li><a href="/">Home</a></li>
        @endif
        @if ($head == 'about')
            <li class="active"><a href="/about">About</a></li>
        @else
            <li><a href="/about">About</a></li>
        @endif
        @if ($head == 'contact')
            <li class="active"><a href="/contact">Contact</a></li>
        @else
            <li><a href="/contact">Contact</a></li>
        @endif
        @if ($head == 'help')
            <li class="active"><a href="/help">Help</a></li>
        @else
            <li><a href="/help">Help</a></li>
        @endif
        @if ($head == 'pricing')
            <li class="active"><a href="/pricing">Pricing</a></li>
        @else
            <li><a href="/pricing">Pricing</a></li>
        @endif
    </div>
    <div class="lms-auth">
        <li><a href="/sign-in">Login</a></li>
        <li><a href="/sign-up">Signup</a></li>
    </div>
    <div class="lms-toggle-btn">
        <button type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample"
            aria-controls="offcanvasExample">
            <i class='bx bx-menu'></i>
        </button>
    </div>

</Nav>

{{-- sidebar menu --}}
<div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-header">
        <img src={{ asset('img/LMS_logo.png') }} style="width:60px; height:50px" alt="">
        <h2>LMS</h2>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <div class="offcanvas-links">
            @if ($head == 'home')
                <li class="active"><a href="/">Home</a></li>
            @else
                <li><a href="/">Home</a></li>
            @endif
            @if ($head == 'about')
                <li class="active"><a href="/about">About</a></li>
            @else
                <li><a href="/about">About</a></li>
            @endif
            @if ($head == 'contact')
                <li class="active"><a href="/contact">Contact</a></li>
            @else
                <li><a href="/contact">Contact</a></li>
            @endif
            @if ($head == 'help')
                <li class="active"><a href="/help">Help</a></li>
            @else
                <li><a href="/help">Help</a></li>
            @endif
            @if ($head == 'pricing')
                <li class="active"><a href="/pricing">Pricing</a></li>
            @else
                <li><a href="/pricing">Pricing</a></li>
            @endif
            <li class="auth-button"><a href="/sign-in">Login</a></li>
            <li class="auth-button"><a href="/sign-up">Signup</a></li>
        </div>

    </div>
</div>
