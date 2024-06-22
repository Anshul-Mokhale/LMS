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
    <div class="lms-home-2">
        <h1>Pricing</h1>
        <div class="lms-home-pricing">
            <div class="pricing-basic">
                <h4>Basic</h4>
                <ul>
                    <li>Up to 5 Courses</li>
                    <li>Up to 50 Students</li>
                    <li>Up to 5 Teachers</li>
                    <li>Basic Support</li>
                    <li>Access to Study Materials</li>
                </ul>
            </div>
            <div class="pricing-standard">
                <h4>Standard</h4>
                <ul>
                    <li>Up to 10 Courses</li>
                    <li>Up to 100 Students</li>
                    <li>Up to 10 Teachers</li>
                    <li>Priority Support</li>
                    <li>Access to Study Materials and Live Sessions</li>
                </ul>
            </div>
            <div class="pricing-advance">
                <h4>Premium</h4>
                <ul>
                    <li>Unlimited Courses</li>
                    <li>Unlimited Students</li>
                    <li>Unlimited Teachers</li>
                    <li>24/7 Premium Support</li>
                    <li>All Features Included</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="lms-home-2">
        <h1>What Customers Say</h1>
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="testimonial-content">
                        <p>"This platform has transformed the way we manage and deliver our courses. It's user-friendly
                            and efficient."</p>
                        <h4>- John Doe, ABC Institute</h4>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testimonial-content">
                        <p>"The live chat and coding platform features are fantastic. Our students are more engaged than
                            ever."</p>
                        <h4>- Jane Smith, XYZ Academy</h4>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testimonial-content">
                        <p>"We've been able to scale our operations seamlessly thanks to this LMS. Highly recommend!"
                        </p>
                        <h4>- Mark Johnson, EduTech</h4>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testimonial-content">
                        <p>"The support team is amazing. They helped us get up and running in no time."</p>
                        <h4>- Emily White, Learning Hub</h4>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testimonial-content">
                        <p>"Our teachers find it very easy to create and manage courses. The feedback from students has
                            been overwhelmingly positive."</p>
                        <h4>- Michael Brown, Future Learn</h4>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testimonial-content">
                        <p>"The analytics tools provide great insights into student progress and course effectiveness."
                        </p>
                        <h4>- Sarah Wilson, Bright Academy</h4>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testimonial-content">
                        <p>"This LMS is a game-changer. It has all the features we need and more."</p>
                        <h4>- David Lee, Smart Education</h4>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testimonial-content">
                        <p>"I love the study materials section. It's very comprehensive and easy to use."</p>
                        <h4>- Laura Kim, EduPath</h4>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="testimonial-content">
                        <p>"The platform is reliable and constantly updated with new features. Great investment for our
                            institute."</p>
                        <h4>- James Williams, Learning Tree</h4>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>


</div>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper(".mySwiper", {
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        autoplay: {
            delay: 5000,
            disableOnInteraction: false,
        },
        loop: true,
    });
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
