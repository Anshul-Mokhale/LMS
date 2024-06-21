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
                <div>
                    <h2>Institute Registration</h2>
                    <p>Register Your institue to get access of this LMS.</p>
                </div>
            </div>
            <div class="method-box-2">
                <img src={{ asset('img/plan.svg') }} alt="Pricing">
                <div>
                    <h2>Select Plan</h2>
                    <p>Select over various plan at a good deal.</p>
                </div>
            </div>
            <div class="method-box-2">
                <img src={{ asset('img/create_grp.svg') }} alt="class">
                <div>
                    <h2>Create Course</h2>
                    <p>Create course, assign teacher and students.</p>
                </div>
            </div>
        </div>
    </div>

</div>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const boxes = document.querySelectorAll('.method-box-1, .method-box-2, .method-box-3');
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('in-view');
                } else {
                    entry.target.classList.remove('in-view'); // Remove class if out of view
                }
            });
        }, {
            threshold: 0.5 // Adjust this threshold as needed
        });

        boxes.forEach(box => {
            observer.observe(box);
        });
    });
</script>




@include('footer')
