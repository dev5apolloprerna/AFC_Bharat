@extends('layouts.front')
@section('title', 'Study Program')
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
                <h1 class="breadcrumb-title">Study Programs</h1>

                <!-- Breadcrumb Navigation -->
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item">
                            <a href="/">Home</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Study Programs
                        </li>
                    </ol>
                </nav>

            </div>
        </div>
    </div>
</section>
<!-- Search & Filter Section -->
<div class="container py-4">
    <div class="card shadow-sm border-0 rounded-4">
        <div class="card-body">
            <div class="row g-3 align-items-center">

                <!-- Search Input -->
                <div class="col-lg-5 col-md-6">
                    <div class="input-group">
                        <span class="input-group-text bg-white">
                            <i class="fa-solid fa-magnifying-glass text-success"></i>
                        </span>
                        <input type="text" class="form-control"
                               placeholder="Search programs (MBBS, Engineering, Nursing...)">
                    </div>
                </div>

                <!-- Category Dropdown (COURSES from DB) -->
    <div class="col-lg-3 col-md-6">
        <select name="course_id" id="course_id" class="form-select">
            <option value="">All Courses</option>
            @foreach($courses as $course)
                <option value="{{ $course->course_id }}"
                        data-duration="{{ $course->duration_id }}">
                    {{ $course->course_name }}
                </option>
            @endforeach
        </select>
    </div>

    <!-- Duration Dropdown (from duration_master) -->
    <div class="col-lg-2 col-md-6">
        <select name="duration_id" id="duration_id" class="form-select">
            <option value="">Duration</option>
            @foreach($durations as $duration)
                <option value="{{ $duration->id }}">
                    {{ $duration->duration }}
                </option>
            @endforeach
        </select>
    </div>


                <!-- Search Button -->
                <div class="col-lg-2 col-md-6">
                    <button class="btn btn-success w-100 fw-semibold">
                        Search
                    </button>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="container py-5">


   

    <div class="row g-4 mb-3">

        <!-- MBBS -->
        @foreach($courses as $course)

            <div class="col-lg-4 col-md-6 course-card"
                data-name="{{ strtolower($course->course_name) }}"
                data-course="{{ $course->course_id }}"
                data-duration="{{ $course->duration_id }}">
                <div class="card program-card">
                    <div class="position-relative">

                        <!-- Course Image -->
                        <img src="{{ $course->course_image 
                                ? asset('course_image/'.$course->course_image)
                                : asset('Front/assets/images/default-course.webp') }}"
                            class="card-img-top">

                        {{--  <span class="badge bg-success badge-top">Popular</span>  --}}

                        <!-- Duration Badge -->
                        {{--  @if($course->duration_name)
                            <span class="badge bg-light text-dark badge-year">
                                {{ $course->duration_name }}
                            </span>
                        @endif  --}}
                    </div>

                    <div class="card-body">

                        <!-- Course Name -->
                        <h5 class="fw-bold">
                            {{ $course->course_name }}
                        </h5>

                        <!-- Description -->
                        <p class="text-muted">
                            {!! Str::limit($course->description, 90) !!}
                        </p>

                        
                        @if($course->course_criteria)
                            <p>
                                <i class="fa-solid fa-check-circle text-success"></i>
                                Criteria:
                                {{ $course->course_criteria }}
                            </p>
                        @endif

                        <!-- Duration -->
                        @if($course->duration_name)
                            <p>
                                <i class="fa-solid fa-clock text-success"></i>
                                Duration: {{ $course->duration_name }}
                            </p>
                        @endif

                        <!-- Price -->
                        <p>
                            <i class="fa-solid fa-indian-rupee-sign text-success"></i>
                            {{ $course->course_price }}
                        </p>

                        <a href="{{ route('Frontadmission') }}"
                            class="btn btn-success w-100 apply-btn">
                                <i class="fa-solid fa-file-signature"></i> Apply Now
                        </a>

                    </div>
                </div>
            </div>

        @endforeach

        <!-- MD -->
        {{--  <div class="col-lg-4 col-md-6">
            <div class="card program-card">
                <div class="position-relative">
                    <img src="https://images.unsplash.com/photo-1530497610245-94d3c16cda28" class="card-img-top">
                    <span class="badge bg-light text-dark badge-year">3 Years</span>
                </div>
                <div class="card-body">
                    <h5 class="fw-bold">MD (Doctor of Medicine)</h5>
                    <p class="text-muted">Advanced medical specialization with research focus</p>

                    <p><i class="fa-solid fa-clock text-success"></i> Duration: 3 Years</p>
                    <p><i class="fa-solid fa-indian-rupee-sign text-success"></i> ₹20–35 Lakhs/Year</p>
                    

                    
                   

                    
                    <button class="btn btn-success w-100 apply-btn">Apply Now</button>
                </div>
            </div>
        </div>

        <!-- Nursing -->
        <div class="col-lg-4 col-md-6">
            <div class="card program-card">
                <div class="position-relative">
                    <img src="{{ asset('Front/assets/images/nursing.jpeg') }}" class="card-img-top">
                    <span class="badge bg-light text-dark badge-year">4 Years</span>
                </div>
                <div class="card-body">
                    <h5 class="fw-bold">B.Sc Nursing</h5>
                    <p class="text-muted">Professional nursing education with clinical exposure</p>

                    <p><i class="fa-solid fa-clock text-success"></i> Duration: 4 Years</p>
                    <p><i class="fa-solid fa-indian-rupee-sign text-success"></i> ₹8–15 Lakhs/Year</p>
                    

                    
                   

                   

                    <button class="btn btn-success w-100 apply-btn">Apply Now</button>
                </div>
            </div>
        </div>  --}}

    </div>

   

    {{--  <div class="row g-4">

        <!-- CSE -->
        <div class="col-lg-4 col-md-6">
            <div class="card program-card">
               

                <div class="position-relative">
                     <img src="https://images.unsplash.com/photo-1518770660439-4636190af475" class="card-img-top">
                    <span class="badge bg-light text-dark badge-year">4 Years</span>
                </div>
                <div class="card-body">
                    <h5 class="fw-bold">Computer Science Engineering</h5>
                    <p class="text-muted">Programming, AI & software development skills</p>

                    <p><i class="fa-solid fa-clock text-success"></i> Duration: 4 Years</p>
                    <p><i class="fa-solid fa-indian-rupee-sign text-success"></i> ₹8–15 Lakhs/Year</p>
                    

                    
                   

                   

                    <button class="btn btn-success w-100 apply-btn">Apply Now</button>
                </div>
            </div>
        </div>

        

        <!-- Civil -->
        <div class="col-lg-4 col-md-6">
            <div class="card program-card">
                

                <div class="position-relative">
                    <img src="https://images.unsplash.com/photo-1503387762-592deb58ef4e" class="card-img-top">
                    <span class="badge bg-light text-dark badge-year">4 Years</span>
                </div>
                <div class="card-body">
                    <h5 class="fw-bold">Civil Engineering</h5>
                    <p class="text-muted">Infrastructure development & construction</p>

                    <p><i class="fa-solid fa-clock text-success"></i> Duration: 4 Years</p>
                    <p><i class="fa-solid fa-indian-rupee-sign text-success"></i> ₹8–15 Lakhs/Year</p>
                    

                    
                   

                   

                    <button class="btn btn-success w-100 apply-btn">Apply Now</button>
                </div>
            </div>
        </div>

    </div>  --}}

</div>



@endsection

@section('scripts')
<script>
const searchInput  = document.querySelector('input[placeholder^="Search"]');
const courseSelect = document.getElementById('course_id');
const durationSelect = document.getElementById('duration_id');
const cards = document.querySelectorAll('.course-card');

function filterCards() {
    const keyword   = searchInput.value.toLowerCase();
    const courseId  = courseSelect.value;
    const durationId = durationSelect.value;

    cards.forEach(card => {
        let show = true;

        // Search filter
        if (keyword && !card.dataset.name.includes(keyword)) {
            show = false;
        }

        // Course filter
        if (courseId && card.dataset.course !== courseId) {
            show = false;
        }

        // Duration filter
        if (durationId && card.dataset.duration !== durationId) {
            show = false;
        }

        card.style.display = show ? 'block' : 'none';
    });
}

// Events
searchInput.addEventListener('keyup', filterCards);
courseSelect.addEventListener('change', filterCards);
durationSelect.addEventListener('change', filterCards);
</script>



@endsection
