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
        <h1>Features</h1>
        <div class="feature-box">
            <div class="feature-box-1">
                <div class="feature-box-1-left">
                    <div class="feature-box-1-left-1">
                        <img src={{ asset('img/meeting.svg') }} alt="meet">
                        <div>
                            <h3>Live Sessions</h3>
                            <p>Schedule and conduct live interactive sessions.</p>
                        </div>
                    </div>
                    <div class="feature-box-1-left-2">
                        <img src={{ asset('img/test.svg') }} alt="test">
                        <div>
                            <h3>Assignments & Tests</h3>
                            <p>Manage assignments and tests efficiently.</p>
                        </div>
                    </div>
                </div>
                <div class="feature-box-1-right">
                    <img src={{ asset('img/codeing.svg') }} alt="code">
                    <div>
                        <h3>Online Coding Platform</h3>
                        <p>Integrated platform for coding practice and assignments.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="lms-home-2">
        <h1>How it works</h1>
        <div class="method-box">
            <div class="method-box-1">
                <img src={{ asset('img/Signup.svg') }} alt="Signup">
                <h3>Institute Registration</h3>
            </div>
            <div class="method-box-2">
                <img src={{ asset('img/plan.svg') }} alt="Pricing">
                <h3>Select Plan</h3>
            </div>
            <div class="method-box-2">
                <img src={{ asset('img/create_grp.svg') }} alt="class">
                <h3>Create Course</h3>
            </div>
        </div>
    </div>

</div>



@include('footer')
