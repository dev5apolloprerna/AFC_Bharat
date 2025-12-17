@extends('layouts.front')
@section('title', 'About-Us')
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
                <h1 class="breadcrumb-title">Contact Us</h1>

                <!-- Breadcrumb Navigation -->
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item">
                            <a href="/">Home</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Contact Us
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
            <div class="col-lg-4">
                <div class="contact-card text-center p-4 mb-3">
                    <div class="icon-circle  mb-3 mx-auto">
                        <i class="fas fa-phone-alt  fs-3"></i>
                    </div>
                    <h5 class="fw-bold">Call Us</h5>
                   
                    <a href="tel:+919876543210" class="text-dark fw-bold  fs-5">+91-022-69710514</a>
                    
                </div>
                <div class="contact-card text-center p-4 mb-3" >
                    <div class="icon-circle  mx-auto mb-3">
                        <i class="fab fa-whatsapp  fs-3"></i>
                    </div>
                    <h5 class="fw-bold">WhatsApp</h5>
                   
                    <a href="https://wa.me/9102269710514" class="text-dark fw-semibold">
                        +91-022-69710514
                    </a>
                </div>
                 <div class="contact-card text-center p-4 mb-3">
                    <div class="icon-circle   mx-auto  mb-3">
                        <i class="fas fa-envelope  fs-3"></i>
                    </div>
                    <h5 class="fw-bold">Email Us</h5>
                    
                    <a href="mailto:mevadaassociate@gmail.com" class="text-dark fw-bold">mevadaassociate@gmail.com</a>
                    <a href="mailto:letstalk@afc-bharat.com" class="text-dark fw-bold">letstalk@afc-bharat.com</a>
                  
                </div>
            </div>
            <!-- Contact Form -->
            <div class="col-lg-7  card">

                <h2 class="fw-bold mb-2">Send Us a Message</h2>
                <p class="text-muted mb-4">Fill out the form below and our team will get back to you within 24 hours</p>

                <form class="contact-form">

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">First Name *</label>
                            <input type="text" class="form-control" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Last Name *</label>
                            <input type="text" class="form-control" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Email *</label>
                            <input type="email" class="form-control" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Phone *</label>
                            <input type="tel" class="form-control" required>
                        </div>
                    </div>
                    <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Inquiry Type *</label>
                        <select class="form-select" required>
                            <option>Select inquiry type</option>
                            <option>Admission Guidance</option>
                            <option>Visa Assistance</option>
                            <option>Scholarship Information</option>
                            <option>Program Details</option>
                            <option>Book Consultation</option>
                            <option>Other</option>
                        </select>
                    </div>

                    <div class=" col-md-6  mb-3">
                        <label class="form-label">Preferred Study Destination</label>
                        <select class="form-select">
                            <option>Select a country</option>
                            <option>India</option>
                            <option>Russia</option>
                            <option>France</option>
                            <option>United Kingdom</option>
                            <option>Germany</option>
                            <option>Canada</option>
                        </select>
                    </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Message *</label>
                        <textarea rows="5" class="form-control" required></textarea>
                        <small class="text-muted">Please provide as much detail as possible.</small>
                    </div>

                    

                   

                    <button class="submit-btn">
                        <i class="fas fa-paper-plane me-2"></i>Send Message
                    </button>

                </form>
            </div>

          

        </div>

    </div>
</section>



@endsection

@section('scripts')


@endsection