@extends('layouts.front')
@section('title', 'Study Destination')
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


    <!-- Breadcrumb Section -->
    <section class="breadcrumb-section d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col">

                    <!-- Page Title -->
                    <h1 class="breadcrumb-title">Study Destination</h1>

                    <!-- Breadcrumb Navigation -->
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item">
                                <a href="/">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Study Destination
                            </li>
                        </ol>
                    </nav>

                </div>
            </div>
        </div>
    </section>
    <!-- Global Study Destinations Content -->
<!--    <section id="study-destination" class="study-destination-section">-->
<!--        <div class="container">-->
<!--            <h2 class="section-title" data-aos="fade-up">Study Destination</h2>-->
<!--            <div class="row">-->
<!--                <div class="col-lg-10 mx-auto" data-aos="fade-up">-->
<!--                    <div class="destination-map mb-5" id="destinationMap">-->

<!--                        <img src="{{ asset('Front/assets/images/StudyDestinationsMap.png') }}" alt="Study Destinations Map">-->

<!--                    </div>-->
<!--                </div>-->

<!--            </div>-->
<!--            <div class="row mb-5">-->
<!--                <div class="col-lg-12 mx-auto" data-aos="fade-up">-->

<!--                    <h2 class="mb-3 text-center">-->
<!--                        Our Global Study Destinations: Your Passport to a World-Class Career-->
<!--                    </h2>-->

<!--                    <p class="lead text-center">-->
<!--                        At <strong>AFC-BHARAT (Admission Facility Center)</strong>, we believe your ambition should have-->
<!--                        no boundaries.-->
<!--                        Leveraging our robust history and proven track record of career building, we offer definitive-->
<!--                        pathways to-->
<!--                        world-class education in a diverse range of high-value study destinations.-->
<!--                    </p>-->

<!--                    <p>-->
<!--                        At AFC-BHARAT (Admission Facility Center) and Education Consultancy, we believe a world-class-->
<!--                        career requires-->
<!--                        a world-class education. That’s why we have meticulously curated a network of premier-->
<!--                        universities across-->
<!--                        the globe, ensuring your diploma or degree is recognized and valued anywhere you choose to work.-->
<!--                    </p>-->

<!--                    <p>-->
<!--                        We don’t just process applications; we strategically match your ambition to the ideal global-->
<!--                        learning-->
<!--                        environment.-->
<!--                    </p>-->

<!--                    <hr class="my-4">-->

<!--                    <h3 class="mb-3">Top International Study Destinations: A Global Roadmap</h3>-->

<!--                    <p>-->
<!--                        Choosing where to study abroad is a decision that shapes your entire career. At AFC-BHARAT, we-->
<!--                        leverage our-->
<!--                        proven track record to guide you toward the global hubs that offer the best academic quality,-->
<!--                        career-->
<!--                        prospects, and post-study opportunities.-->
<!--                    </p>-->

<!--                    <p>-->
<!--                        Based on student enrollment trends, academic prestige, and post-study work pathways, here are-->
<!--                        the top-->
<!--                        international study destinations for Indian students:-->
<!--                    </p>-->

<!--                </div>-->
<!--            </div>-->
<!--        </div>-->
        <!-- Top Countries Table -->
<!--        <div class="container">-->
<!--            <div class="row">-->
<!--                <div class="table-responsive mb-5" data-aos="fade-up">-->
<!--                    <table class="table table-bordered align-middle ">-->
<!--                        <thead class="table-primary">-->
<!--                            <tr>-->
<!--                                <th>Rank</th>-->
<!--                                <th>Country</th>-->
<!--                                <th>Key Feature & Career Advantage</th>-->
<!--                                <th>Popular Programs</th>-->
<!--                            </tr>-->
<!--                        </thead>-->
<!--                        <tbody>-->
<!--                            <tr>-->
<!--                                <td>1</td>-->
<!--                                <td>Canada</td>-->
<!--                                <td>Clear Pathway to Permanent Residency (PR), high quality of life, affordable tuition compared to the US/UK. 3-year Post-Graduation Work Permit (PGWP).</td>-->
<!--                                <td>Data Science, Engineering, Business Analytics, Healthcare.</td>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                <td>2</td>-->
<!--                                <td>United States (USA)</td>-->
<!--                                <td>World-Class Universities (Ivy League, MIT, Stanford), unparalleled research opportunities, and academic flexibility. Excellent for STEM fields with 3-year Optional Practical Training (OPT).</td>-->
<!--                                <td>Engineering, AI/ML, Data Science, MBA, Computer Science.</td>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                <td>3</td>-->
<!--                                <td>United Kingdom (UK)</td>-->
<!--                                <td>Academic Prestige (Oxford, Cambridge), 1-Year Master's programs saving time and cost. 2-Year Graduate Route (Post-Study Work Visa).</td>-->
<!--                                <td>Law, Finance, Business, Design, Public Policy.</td>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                <td>4</td>-->
<!--                                <td>Australia</td>-->
<!--                                <td>High Graduate Employability, vibrant lifestyle, and excellent post-study work rights (PSWVs up to 4 years). Strong focus on practical skills.</td>-->
<!--                                <td>IT, Nursing, Environmental Science, Engineering, Business.</td>-->
<!--                            </tr>-->
<!--                            <tr>-->
<!--                                <td>5</td>-->
<!--                                <td>Germany</td>-->
<!--                                <td>Affordable/Tuition-Free Education at many public universities, especially for international students. Robust Economy and strong job market in STEM.</td>-->
<!--                                <td>Engineering (Automotive, Mechanical), IT, Robotics, MBA.</td>-->
<!--                            </tr>-->
<!--                        </tbody>-->
<!--                    </table>-->
<!--                </div>-->
<!--            </div>-->
<!--        </div>-->

<!--        <div class="container">-->
            <!-- Rising Destinations -->
<!--            <div class="row mb-5">-->
<!--                <div class="col-lg-12 mx-auto" data-aos="fade-up">-->
<!--                    <h3 class="mb-3">Rising Stars & Specialized Destinations</h3>-->

<!--                    <div class="table-responsive">-->
<!--                        <table class="table table-striped table-bordered">-->
<!--                            <thead class="table-primary">-->
<!--                                <tr>-->
<!--                                    <th>Country</th>-->
<!--                                    <th>Unique Value Proposition</th>-->
<!--                                    <th>Ideal for Students Interested in...</th>-->
<!--                                </tr>-->
<!--                            </thead>-->
<!--                            <tbody>-->
<!--                                <tr>-->
<!--                                    <td>France</td>-->
<!--                                    <td>Low Tuition Fees in public universities, strong in Luxury, Fashion, and Hospitality management. Access to the Schengen Area.</td>-->
<!--                                    <td>Fashion, Art, MBA, International Business</td>-->
<!--                                </tr>-->
<!--                                <tr>-->
<!--                                    <td>Ireland</td>-->
<!--                                    <td>Europe's Tech Hub (Google, Facebook, Apple headquarters), strong in IT and Pharmaceuticals. Favorable 2-year post-study work visa.</td>-->
<!--                                    <td>Computer Science, Pharmaceutical Sciences, Finance, Data Analytics.</td>-->
<!--                                </tr>-->
<!--                                <tr>-->
<!--                                    <td>Russia</td>-->
<!--                                    <td>Highly Affordable Medical Education (MBBS) and strong foundational programs in Engineering and Aviation.</td>-->
<!--                                    <td>Medicine (MBBS), Aeronautics, Engineering.</td>-->
<!--                                </tr>-->
<!--                                <tr>-->
<!--                                    <td>New Zealand</td>-->
<!--                                    <td>Peaceful, Safe Environment, strong focus on Research, Sustainability, and Agriculture. Good PR pathways.</td>-->
<!--                                    <td>Environmental Science, Agriculture, IT, Nursing.</td>-->
<!--                                </tr>-->
<!--                                <tr>-->
<!--                                    <td>Singapore</td>-->
<!--                                    <td>Top Asian Financial & Tech Hub, world-ranked universities (NUS, NTU), and proximity to India.</td>-->
<!--                                    <td>Business, Finance, Technology, Engineering.</td>-->
<!--                                </tr>-->
<!--                            </tbody>-->
<!--                        </table>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->

            <!-- Career Hubs -->
<!--            <div class="row">-->
<!--                <div class="col-lg-12 mx-auto" data-aos="fade-up">-->
<!--                    <h3 class="mb-3">Top Domestic & International Hubs for Career Building</h3>-->

<!--                    <p>-->
<!--                        Leveraging our two decades of expertise, we offer unparalleled access to leading institutions in the following key academic and professional centers:-->
<!--                    </p>-->

<!--                    <div class="table-responsive">-->
<!--                        <table class="table table-striped table-bordered">-->
<!--                            <thead class="table-primary">-->
<!--        <tr>-->
<!--            <th>Country</th>-->
<!--            <th>Key Features for Students</th>-->
<!--            <th>Popular Programs</th>-->
<!--        </tr>-->
<!--    </thead>-->
<!--    <tbody>-->
<!--        <tr>-->
<!--            <td>India</td>-->
<!--            <td>-->
<!--                Premier domestic institutions, diverse curriculum, and cost-effective education options.-->
<!--            </td>-->
<!--            <td>-->
<!--                Certificate Courses, Skill Development, Vocational Programs, Engineering, Technology, Management (MBA),-->
<!--                Law, Education, Paramedical, Nursing, Doctorate-->
<!--            </td>-->
<!--        </tr>-->

<!--        <tr>-->
<!--            <td>Russia</td>-->
<!--            <td>-->
<!--                World-renowned for Medical Education (MBBS) and technical sciences.-->

<!--            </td>-->
<!--            <td>-->
<!--               Medicine, Aeronautics, Oil & Gas Engineering.-->
<!--            </td>-->
<!--        </tr>-->

<!--        <tr>-->
<!--            <td>France</td>-->
<!--            <td>-->
<!--                Global leader in Business, Arts, Culinary Sciences, and Fashion.-->
<!--            </td>-->
<!--            <td>-->
<!--               Luxury Management, Design, Engineering.-->
<!--            </td>-->
<!--        </tr>-->

<!--        <tr>-->
<!--            <td>Germany</td>-->
<!--            <td>-->
<!--                Known for high-quality, practical Engineering and Technology courses.-->
<!--            </td>-->
<!--            <td>-->
<!--               Automotive Engineering, IT, Sciences.-->
<!--            </td>-->
<!--        </tr>-->

<!--        <tr>-->
<!--            <td>Canada</td>-->
<!--            <td>-->
<!--                Excellent immigration pathways and high standard of living; strong in research.-->
<!--            </td>-->
<!--            <td>-->
<!--                STEM fields, Computer Science, Hospitality.-->
<!--            </td>-->
<!--        </tr>-->

<!--        <tr>-->
<!--            <td>United Kingdom (UK)</td>-->
<!--            <td>-->
<!--                Home to prestigious, historic universities and one-year Master's programs.-->
<!--            </td>-->
<!--            <td>-->
<!--                Business, Finance, Humanities, Law.-->
<!--            </td>-->
<!--        </tr>-->

<!--        <tr>-->
<!--            <td>London (UK)</td>-->
<!--            <td>-->
<!--                Global financial and cultural capital; concentration of elite universities.-->
<!--            </td>-->
<!--            <td>-->
<!--                Finance, Creative Arts, International Relations.-->
<!--            </td>-->
<!--        </tr>-->
<!--    </tbody>-->
<!--</table></div>-->



                    

<!--                    <div class="mt-4 text-center">-->
<!--                        <h4>Your Career Starts Here</h4>-->
<!--                        <p>-->
<!--                            Our two decades of expertise ensure seamless admission and mentorship — from application to-->
<!--                            orientation-->
<!--                            in your new global classroom.-->
<!--                            <br><strong>Choose AFC-BHARAT to unlock your future.</strong>-->
<!--                        </p>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->

<!--        </div>-->
<!--    </section>-->


<section id="study-destination" class="study-destination-section py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5" data-aos="fade-up">
            <h2 class="section-title fw-bold ">Study Destinations</h2>
            <p class="lead text-muted mt-3">Your Passport to a World-Class Education and Career</p>
        </div>

        <!-- Hero Map -->
        <div class="row mb-5">
            <div class="col-lg-10 mx-auto" data-aos="fade-up" data-aos-delay="100">
                <div class="destination-map rounded shadow overflow-hidden">
                    <img src="{{ asset('Front/assets/images/StudyDestinationsMap.png') }}" alt="Global Study Destinations Map" class="img-fluid w-100">
                    
                    
                </div>
            </div>
        </div>

        <!-- Introduction Text -->
        <div class="row mb-5">
            <div class="col-lg-12 mx-auto text-center" data-aos="fade-up">
                <h3 class="mb-4 fw-semibold">Our Global Study Destinations: Your Passport to a World-Class Career</h3>
                <p class="lead text-muted">
                    At <strong>AFC-BHARAT (Admission Facility Center)</strong>, we believe your ambition should have no boundaries. Leveraging our robust history and proven track record of career building, we offer definitive pathways to world-class education in a diverse range of high-value study destinations.
                </p>
                <p class="text-muted">
                   At AFC-BHARAT (Admission Facility Center) and Education Consultancy, we believe a world-class career requires a world-class education. That’s why we have meticulously curated a network of premier universities across the globe, ensuring your diploma or degree is recognized and valued anywhere you choose to work.
                </p>
                <p>
                    We don’t just process applications; we strategically match your ambition to the ideal global learning environment.
                </p>
            </div>
        </div>

        <hr class="my-5 border-secondary opacity-25">

        <!-- Top Destinations Cards -->
        <div class="row mb-5">
            <div class="col-12" data-aos="fade-up">
                <h3 class="text-center mb-5 fw-semibold">Top International Study Destinations: A Global Roadmap</h3>
                <p>Choosing where to study abroad is a decision that shapes your entire career. At AFC-BHARAT, we leverage our proven track record to guide you toward the global hubs that offer the best academic quality, career prospects, and post-study opportunities.
</p><p>
Based on student enrollment trends, academic prestige, and post-study work pathways, here are the top international study destinations for Indian students:</p>
            </div>

            <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card h-100 border-0 shadow-sm hover-shadow">
                    <div class="card-header bg-cyan text-white text-center py-3">
                        <h5 class="mb-0">1. Canada</h5>
                    </div>
                    <div class="card-body">
                        <p><strong>Key Advantages:</strong> Clear pathway to Permanent Residency, high quality of life, affordable tuition, 3-year PGWP.</p>
                        <p><strong>Popular Programs:</strong> Data Science, Engineering, Business Analytics, Healthcare.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card h-100 border-0 shadow-sm hover-shadow">
                    <div class="card-header bg-cyan text-white text-center py-3">
                        <h5 class="mb-0">2. United States (USA)</h5>
                    </div>
                    <div class="card-body">
                        <p><strong>Key Advantages:</strong> Ivy League & top-tier universities, cutting-edge research, STEM OPT up to 3 years.</p>
                        <p><strong>Popular Programs:</strong> Engineering, AI/ML, Data Science, MBA, Computer Science.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="card h-100 border-0 shadow-sm hover-shadow">
                    <div class="card-header bg-cyan text-white text-center py-3">
                        <h5 class="mb-0">3. United Kingdom (UK)</h5>
                    </div>
                    <div class="card-body">
                        <p><strong>Key Advantages:</strong> Prestigious universities, 1-year Master's, 2-year Graduate Route visa.</p>
                        <p><strong>Popular Programs:</strong> Law, Finance, Business, Design, Public Policy.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="400">
                <div class="card h-100 border-0 shadow-sm hover-shadow">
                    <div class="card-header bg-cyan text-white text-center py-3">
                        <h5 class="mb-0">4. Australia</h5>
                    </div>
                    <div class="card-body">
                        <p><strong>Key Advantages:</strong> High employability, vibrant lifestyle, PSW visas up to 4 years.</p>
                        <p><strong>Popular Programs:</strong> IT, Nursing, Environmental Science, Engineering, Business.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="500">
                <div class="card h-100 border-0 shadow-sm hover-shadow">
                    <div class="card-header bg-cyan text-white text-center py-3">
                        <h5 class="mb-0">5. Germany</h5>
                    </div>
                    <div class="card-body">
                        <p><strong>Key Advantages:</strong> Tuition-free public universities, strong STEM job market.</p>
                        <p><strong>Popular Programs:</strong> Engineering (Automotive, Mechanical), IT, Robotics, MBA.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Rising Destinations Grid -->
        <div class="row mb-5">
            <div class="col-12" data-aos="fade-up">
                <h3 class="text-center mb-5 fw-semibold">Rising Stars & Specialized Destinations</h3>
            </div>

            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                <div class="col" data-aos="fade-up">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body text-center">
                            <h5 class="card-title">France</h5>
                            <p class="card-text">Low tuition, excellence in luxury, fashion & hospitality. Schengen access.</p>
                            <small class="text-muted">Ideal for: Fashion, Art, MBA, International Business</small>
                        </div>
                    </div>
                </div>

                <div class="col" data-aos="fade-up" data-aos-delay="100">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body text-center">
                            <h5 class="card-title">Ireland</h5>
                            <p class="card-text">Europe's tech hub (Google, Apple), strong pharma sector, 2-year PSW.</p>
                            <small class="text-muted">Ideal for: CS, Pharma, Finance, Data Analytics</small>
                        </div>
                    </div>
                </div>

                <div class="col" data-aos="fade-up" data-aos-delay="200">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body text-center">
                            <h5 class="card-title">Russia</h5>
                            <p class="card-text">Affordable MBBS & strong engineering/aviation programs.</p>
                            <small class="text-muted">Ideal for: Medicine, Aeronautics, Engineering</small>
                        </div>
                    </div>
                </div>

                <div class="col" data-aos="fade-up" data-aos-delay="300">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body text-center">
                            <h5 class="card-title">New Zealand</h5>
                            <p class="card-text">Safe, research-focused, strong sustainability & PR pathways.</p>
                            <small class="text-muted">Ideal for: Environmental Science, Agriculture, IT, Nursing</small>
                        </div>
                    </div>
                </div>

                <div class="col" data-aos="fade-up" data-aos-delay="400">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body text-center">
                            <h5 class="card-title">Singapore</h5>
                            <p class="card-text">Asia's top financial/tech hub, world-ranked universities.</p>
                            <small class="text-muted">Ideal for: Business, Finance, Technology, Engineering</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Career Hubs Table (Kept as table for clarity, but styled elegantly) -->
        <div class="row">
            <div class="col-12" data-aos="fade-up">
                <h3 class="text-center mb-5 fw-semibold">Key Academic & Career Hubs Worldwide</h3>
                <p class="text-center text-muted mb-4">With two decades of expertise, we connect you to premier institutions in these global centers.</p>

                <div class="table-responsive">
                    <table class="table table-hover align-middle text-center">
                        <thead class="bg-primary text-white">
                            <tr>
                                <th>Country / Hub</th>
                                <th>Key Features</th>
                                <th>Popular Programs</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>India</strong></td>
                                <td>Premier domestic institutions, diverse & cost-effective options</td>
                                <td>Engineering, Management, Law, Nursing, Vocational Programs</td>
                            </tr>
                            <tr>
                                <td><strong>Russia</strong></td>
                                <td>Renowned for medical & technical sciences</td>
                                <td>Medicine (MBBS), Aeronautics, Oil & Gas Engineering</td>
                            </tr>
                            <tr>
                                <td><strong>France</strong></td>
                                <td>Leader in arts, business & culinary sciences</td>
                                <td>Luxury Management, Design, Engineering</td>
                            </tr>
                            <tr>
                                <td><strong>Germany</strong></td>
                                <td>Practical, high-quality engineering & technology</td>
                                <td>Automotive Engineering, IT, Sciences</td>
                            </tr>
                            <tr>
                                <td><strong>Canada</strong></td>
                                <td>Strong research, immigration pathways & quality of life</td>
                                <td>STEM, Computer Science, Hospitality</td>
                            </tr>
                            <tr>
                                <td><strong>United Kingdom</strong></td>
                                <td>Historic prestige, accelerated Master's programs</td>
                                <td>Business, Finance, Humanities, Law</td>
                            </tr>
                            <tr>
                                <td><strong>London (UK)</strong></td>
                                <td>Global financial & cultural capital</td>
                                <td>Finance, Creative Arts, International Relations</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- Closing CTA -->
        <div class="row mt-5">
            <div class="col-lg-8 mx-auto text-center bg-primary text-white py-5 rounded shadow" data-aos="fade-up">
                <h4 class="fw-bold">Your Global Career Starts Here</h4>
                <p class="lead mb-4">
                    With 20 years of expertise, AFC-BHARAT ensures seamless admissions and dedicated mentorship — from application to your first day abroad.
                </p>
                <p class="fw-bold">Choose AFC-BHARAT. Unlock Your Future.</p>
            </div>
        </div>
    </div>
</section>


@endsection

@section('scripts')


@endsection