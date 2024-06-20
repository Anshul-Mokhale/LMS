@include('header', ['head' => 'LMS'])
<div class="loader"></div>

@include('navbar', ['head' => 'home'])
<div class="lms-home">
    <div class="lms-home-1">
        <div class="home-title">
            <h2>Learning Management System - Empower Your Journey to Knowledge</h2>
            <p>unlock your potential and start your journey towards success!</p>
            <div>
                <a href="/" class="get-started">Get Started Now</a>
            </div>
        </div>
        <div class="home-image">
            <img src={{ asset('img/teachingHome.svg') }} alt="home image">
        </div>
    </div>
    <div class="lms-home-2">

    </div>
</div>

@include('footer')
