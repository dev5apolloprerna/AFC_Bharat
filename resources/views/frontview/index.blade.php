@extends('layouts.front')
@section('title', 'Home')
@section('content')


   <!-- Notification Bar -->
    <section class="notification-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="notification-bar">
                        <div class="notification-content">
                            <div class="notification-item"><i class="fas fa-bell me-2"></i> Admissions are now open for
                                2026-2027 academic year!</div>
                            <div class="notification-item"><i class="fas fa-bell me-2"></i> Special scholarships
                                available
                                for deserving students!</div>
                            <div class="notification-item"><i class="fas fa-bell me-2"></i> New university partnerships
                                in
                                Canada and Germany!</div>
                            <div class="notification-item"><i class="fas fa-bell me-2"></i> Limited seats available for
                                medical programs in Russia!</div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 ">
                    <a href="#" class="admission-open">
                        Admission Open <br><span>Apply Online</span>
                    </a>
                </div>
            </div>
        </div>
    </section>


    <!-- Image Slider -->
    <div id="home" class="slider-container">
        <div class="slider-item active" style="background-image: url('Front/assets/images/banner-1.webp');">
            <div class="slider-content">
                <h2>Welcome to AFC-BHARAT (Admission Facility Center) and Education Consultant</h2>
                <p>Your trusted partner in domestic and overseas education</p>
            </div>
        </div>
        <div class="slider-item" style="background-image: url('Front/assets/images/banner-4.webp');">
            <div class="slider-content">
                <h2>It's time to uplift your career with best Education Consultant</h2>
                <p>Let us guide you to right educational path</p>
            </div>
        </div>
        <div class="slider-item" style="background-image: url('Front/assets/images/banner-2.webp');">
            <div class="slider-content">
                <h2>Give wings to your long-awaited dreams</h2>
                <p>Turn your aspirations into reality with our expert guidance</p>
            </div>
        </div>
        <div class="slider-item" style="background-image: url('Front/assets/images/banner-3.webp');">
            <div class="slider-content">
                <h2>Explore the Career path across the Globe</h2>
                <p>Discover opportunities in India, Russia, France, London, Germany, Canada and UK</p>
            </div>
        </div>
        <div class="slider-controls">
            <div class="slider-dot active" data-slide="0"></div>
            <div class="slider-dot" data-slide="1"></div>
            <div class="slider-dot" data-slide="2"></div>
            <div class="slider-dot" data-slide="3"></div>
        </div>
    </div>

    <!-- Statistics Section -->
    <section class="stats-section">
        <div class="container">
            <div class="row justify-content-between">

                <div class="col-md-2 col-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="stat-card text-center">
                        <div class="stat-icon"><i class="fas fa-briefcase"></i></div>
                        <div class="stat-number">15+</div>
                        <div class="stat-label">Years of Experience</div>
                    </div>
                </div>

                <div class="col-md-2 col-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="stat-card text-center">
                        <div class="stat-icon"><i class="fas fa-university"></i></div>
                        <div class="stat-number">20+</div>
                        <div class="stat-label">National Universities</div>
                    </div>
                </div>

                <div class="col-md-2 col-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="stat-card text-center">
                        <div class="stat-icon"><i class="fas fa-globe"></i></div>
                        <div class="stat-number">5+</div>
                        <div class="stat-label">International Universities</div>
                    </div>
                </div>

                <div class="col-md-2 col-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="stat-card text-center">
                        <div class="stat-icon"><i class="fas fa-flag"></i></div>
                        <div class="stat-number">5+</div>
                        <div class="stat-label">Countries</div>
                    </div>
                </div>

                <div class="col-md-2 col-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="stat-card text-center">
                        <div class="stat-icon"><i class="fas fa-user-graduate"></i></div>
                        <div class="stat-number">5000+</div>
                        <div class="stat-label">Students</div>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <!-- About Section -->
    <section class="about-section" id="about-us">
        <div class="container">
            <h2 class="section-title" data-aos="fade-up">We Help Turn Your Dream In to Reality</h2>
            <div class="row">
                <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
                    <p class="lead text-center fw-bold">Your aspiration to become a professional—be it a Doctor,
                        Engineer, Teacher, IT expert, or Business Manager and many more —is the foundation of your
                        future. At AFC-BHARAT (Admission Facility Center) and Education Consultancy, we transform that
                        dream into a tangible, successful reality.</p>
                </div>
                <div class="col-lg-7">

                    <!-- AFC-BHARAT Promise Content -->
                    <div class="mb-4">
                        <h3 class="fw-bold mb-3">The AFC-BHARAT Promise</h3>
                        <p>
                            For over two decades, we have been the trusted, indispensable partner for Indian students
                            seeking excellence in domestic and overseas education. Our comprehensive guidance ensures
                            you don’t just enroll in a course, but launch a career.
                        </p>

                        <h5 class="fw-semibold mt-4 mb-3">How We Realize Your Ambition:</h5>
                        <ul class="list-unstyled promise-list">
                            <li class="mb-2">
                                <i class="fas fa-check-circle text-cyan me-2"></i>
                                <strong class="text-cyan">Diverse Career Paths:</strong><br> Successfully mentoring
                                students for high-demand
                                careers including Doctors, Engineers, Lecturers & Teachers, Technicians, Reporters,
                                and Business Management professionals.
                            </li>
                            <li class="mb-2">
                                <i class="fas fa-check-circle text-cyan me-2"></i>
                                <strong class="text-cyan">Global University Access:</strong><br> Admissions to
                                prestigious institutions across
                                India, Russia, France, London, Germany, Canada, and the UK.
                            </li>
                            <li class="mb-2">
                                <i class="fas fa-check-circle text-cyan me-2"></i>
                                <strong class="text-cyan">Expert Guidance:</strong><br> Over 20 years of expertise
                                handling admissions, visas,
                                and university requirements—so you can focus on academic success.
                            </li>
                        </ul>

                        <p class="fw-semibold mt-3">
                            Don’t just dream of a successful future—partner with AFC-BHARAT and build it.
                        </p>
                    </div>



                    <button class="quote-btn mt-4" data-bs-toggle="modal" data-bs-target="#quoteModal">
                        Admission Enquiry Form
                    </button>

                </div>

                <div class="col-lg-5 about-img">
                    <img src="{{ asset('Front/assets/images/about-img.jpg') }}" alt="" class="img-fluid">

                </div>
            </div>
        </div>
    </section>

    <!-- Affiliation Section -->
    <section class="affiliation-section">
        <div class="container">
            <h2 class="section-title" data-aos="fade-up">AFC BHARAT AFFILIATION - CHANNEL PARTNER - AUTHORISED AFC</h2>
            <div class="logo-scroll">
                <div class="logo-container">
                    <div class="logo-item">
                        <img src="{{ asset('Front/assets/images/university-logo.jpg') }}" alt="University 1">
                    </div>
                    <div class="logo-item">
                        <img src="{{ asset('Front/assets/images/university-logo.jpg') }}" alt="University 2">
                    </div>
                    <div class="logo-item">
                        <img src="{{ asset('Front/assets/images/university-logo.jpg') }}" alt="University 3">
                    </div>
                    <div class="logo-item">
                        <img src="{{ asset('Front/assets/images/university-logo.jpg') }}" alt="University 4">
                    </div>
                    <div class="logo-item">
                        <img src="{{ asset('Front/assets/images/university-logo.jpg') }}" alt="University 5">
                    </div>
                    <div class="logo-item">
                        <img src="{{ asset('Front/assets/images/university-logo.jpg') }}" alt="University 6">
                    </div>
                </div>
                <!-- Duplicate for seamless scrolling -->
                <div class="logo-container">
                    <div class="logo-item">
                        <img src="{{ asset('Front/assets/images/university-logo.jpg') }}" alt="University 1">
                    </div>
                    <div class="logo-item">
                        <img src="{{ asset('Front/assets/images/university-logo.jpg') }}" alt="University 2">
                    </div>
                    <div class="logo-item">
                        <img src="{{ asset('Front/assets/images/university-logo.jpg') }}" alt="University 3">
                    </div>
                    <div class="logo-item">
                        <img src="{{ asset('Front/assets/images/university-logo.jpg') }}" alt="University 4">
                    </div>
                    <div class="logo-item">
                        <img src="{{ asset('Front/assets/images/university-logo.jpg') }}" alt="University 5">
                    </div>
                    <div class="logo-item">
                        <img src="{{ asset('Front/assets/images/university-logo.jpg') }}" alt="University 6">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Us Section -->
    <section class="why-choose-section">
        <div class="container">
            <h2 class="section-title" data-aos="fade-up">Why Choose AFC-BHARAT? Your Success Starts Here</h2>
            <p class="text-center lead mb-5" data-aos="fade-up" data-aos-delay="100">Choosing an education consultancy
                is choosing a partner for your future. At AFC-BHARAT (Admission Facility Center), we don't just process
                applications; we build careers. Our robust history and proven track record make us the definitive choice
                for ambitious students and parents.</p>

            <div class="row g-4">
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="choose-card">
                        <div class="choose-icon"><i class="fas fa-graduation-cap"></i></div>
                        <h3 class="choose-title">Guaranteed Admissions</h3>
                        <p>Yes! Our domestic and overseas affiliation enables us to proudly claim that we can secure
                            your admission in a reputed Indian and overseas University.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="choose-card">
                        <div class="choose-icon"><i class="fas fa-university"></i></div>
                        <h3 class="choose-title">Admission In The Top Ranked Universities</h3>
                        <p>We will help you get admission in the top most universities for studying all diploma and
                            degree courses in India, Europe and UK.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="choose-card">
                        <div class="choose-icon"><i class="fas fa-search"></i></div>
                        <h3 class="choose-title">Attention to Details</h3>
                        <p>We help you perfectly about your documents (loans, admissions, immigration forms and so on),
                            saving you time and money while processing your Admission applications.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="choose-card">
                        <div class="choose-icon"><i class="fas fa-clock"></i></div>
                        <h3 class="choose-title">Save Time</h3>
                        <p>We know that education is time expensive Endeavour. Our experts will provide detailed
                            guidance on how to manage time while studying.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="500">
                    <div class="choose-card">
                        <div class="choose-icon"><i class="fas fa-dollar-sign"></i></div>
                        <h3 class="choose-title">Save Money</h3>
                        <p>We know that education can be an expensive Endeavour. Our experts will provide detailed
                            guidance on how to manage finances while studying.</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="600">
                    <div class="choose-card">
                        <div class="choose-icon"><i class="fas fa-smile"></i></div>
                        <h3 class="choose-title">Stress Free Learning</h3>
                        <p>"Education without tension" refers to a learning environment and personal study approach that
                            minimizes chronic or excessive stress to promote better learning, mental health, and overall
                            well-being.</p>
                    </div>
                </div>
                <!-- Two Decades of Proven Expertise -->
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="choose-card">
                        <div class="choose-icon">
                            <i class="fas fa-history"></i>
                        </div>
                        <h3 class="choose-title">Two Decades of Proven Expertise</h3>
                        <p>
                            <strong>20+ Years of Trust:</strong> With over two decades of excellence, AFC-BHARAT has
                            become a deeply
                            trusted name in domestic and overseas education consultancy.
                        </p>
                        <p>
                            <strong>A History of Success:</strong> We have successfully guided students toward careers
                            as Doctors,
                            Engineers, Lecturer-Teachers, Technicians, Reporters, and Business Owners.
                        </p>
                    </div>
                </div>

                <!-- Unrivaled Global Access -->
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="choose-card">
                        <div class="choose-icon">
                            <i class="fas fa-globe"></i>
                        </div>
                        <h3 class="choose-title">Unrivaled Global Access</h3>
                        <p>
                            <strong>World-Class Network:</strong> We provide guaranteed placement access to leading,
                            respected
                            universities across the globe.
                        </p>
                        <p>
                            <strong>Global Footprint:</strong> AFC-BHARAT students are thriving in top academic
                            institutions worldwide,
                            connecting you to the best opportunities wherever they are.
                        </p>
                    </div>
                </div>

                <!-- Comprehensive Personalized Guidance -->
                <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="choose-card">
                        <div class="choose-icon">
                            <i class="fas fa-user-check"></i>
                        </div>
                        <h3 class="choose-title">Comprehensive, Personalized Guidance</h3>
                        <p>
                            <strong>End-to-End Mentorship:</strong> From counseling and course selection to admissions,
                            visa
                            processing, and pre-departure orientation—we handle everything.
                        </p>
                        <p>
                            <strong>Career-Focused Approach:</strong> We go beyond admission, ensuring your diploma or
                            degree aligns
                            with your long-term career aspirations.
                        </p>
                    </div>
                </div>
            </div>
            <h3 class="pt-3 text-center">AFC-BHARAT is more than a consultancy; we are your dedicated facility for admission and achievement.</h3>
        </div>
    </section>

  




@endsection

@section('scripts')


@endsection
