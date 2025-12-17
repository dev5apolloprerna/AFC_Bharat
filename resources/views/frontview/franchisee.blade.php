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
                <h1 class="breadcrumb-title">Apply for Franchisee</h1>

                <!-- Breadcrumb Navigation -->
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item">
                            <a href="/">Home</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Apply for Franchisee
                        </li>
                    </ol>
                </nav>

            </div>
        </div>
    </div>
</section>


<!-- Main Contact Form Section -->
<section class="py-5 bg-white">
    <div class="container">

        <div class="row g-5">
          
            <div class="col-lg-7 mx-auto card">

                <h2 class="fw-bold mb-2">Apply for Franchisee </h2>
                <p class="text-muted mb-4">Fill out the form below and our team will get back to you within 24 hours</p>

               <form id="franchiseeForm">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="franchisee-name" class="form-label">Name</label>
                                            <input type="text" class="form-control" id="franchisee-name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="franchisee-mobile" class="form-label">Mobile Number</label>
                                            <input type="tel" class="form-control" id="franchisee-mobile" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="franchisee-email" class="form-label">Email ID</label>
                                    <input type="email" class="form-control" id="franchisee-email" required>
                                </div>
                                <div class="mb-3">
                                    <label for="franchisee-address" class="form-label">Address</label>
                                    <textarea class="form-control" id="franchisee-address" rows="3" required></textarea>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="franchisee-location" class="form-label">Desired Location</label>
                                            <input type="text" class="form-control" id="franchisee-location" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="franchisee-city" class="form-label">Name of City</label>
                                            <input type="text" class="form-control" id="franchisee-city" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="franchisee-state" class="form-label">Name of State</label>
                                    <input type="text" class="form-control" id="franchisee-state" required>
                                </div>
                                <button type="submit" class="submit-btn">Submit Application</button>
                            </form>
            </div>

          

        </div>

    </div>
</section>




@endsection

@section('scripts')


@endsection