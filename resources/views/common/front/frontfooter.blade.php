<!-- Footer -->
<footer class="footer py-5">
    <div class="container">
        <div class="row">

            <!-- About Section -->
            <div class="col-md-4">
                <div class="footer-widget">
                    <h4 class="footer-title">About AFC BHARAT</h4>
                    <p class="footer-text">
                        AFC-BHARAT (Admission Facility Center) and Education Consultancy is your trusted partner
                        in domestic and overseas education. With over two decades of experience, we have guided
                        and mentored thousands of students to achieve their academic dreams.
                    </p>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="col-md-4">
                <div class="footer-widget">
                    <h4 class="footer-title">Quick Links</h4>
                    <ul class="footer-links">
                        <li><a href="#home">Home</a></li>
                        <li><a href=" about.html">About Us</a></li>
                        <li><a href="#study-destination">Study Destination</a></li>
                        <li><a href="#study-program">Study Program</a></li>
                        <li><a href="#gallery">Gallery</a></li>
                        <li><a href=" contact.html">Contact Us</a></li>
                    </ul>
                </div>
            </div>

            <!-- Contact Section -->
            <div class="col-md-4">
                <div class="footer-widget">
                    <h4 class="footer-title">Contact Info</h4>
                    <ul class="footer-links">
                        <li><a href="#"><i class="fas fa-phone me-2"></i> +91-022-69710514</a></li>
                        <li><a href="#"><i class="fab fa-whatsapp me-2"></i> +91-022-69710514</a></li>
                        <li><a href="#"><i class="fas fa-envelope me-2"></i> mevadaassociate@gmail.com</a></li>
                        <li><a href="#"><i class="fas fa-envelope me-2"></i> letstalk@afc-bharat.com</a></li>
                    </ul>

                    <div class="social-links mt-3">
                        <a href="https://www.facebook.com/profile.php?id=61584562412150"><i
                                class="fab fa-facebook-f"></i></a>
                        <a href="https://www.instagram.com/mevadaassociateafc"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>

                </div>
            </div>

        </div>

        <!-- Bottom Bar -->
        <div class="footer-bottom text-center mt-4">
            <p>&copy; 2025 AFC BHARAT. All Rights Reserved.</p>
        </div>
    </div>
</footer>


<!-- Quote Modal -->
<div class="modal fade" id="quoteModal" tabindex="-1" aria-labelledby="quoteModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="quoteModalLabel">Request a Quote</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="quoteForm ">
                    <div class="row">
                        <div class="mb-3 col-lg-6">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" required>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <label for="mobile" class="form-label">Mobile</label>
                            <input type="tel" class="form-control" id="mobile" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-lg-6">
                            <label for="email" class="form-label">Email ID</label>
                            <input type="email" class="form-control" id="email" required>
                        </div>
                        <div class="mb-3 col-lg-6">
                            <label for="whatsapp" class="form-label">WhatsApp Number</label>
                            <input type="tel" class="form-control" id="whatsapp">
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-lg-6">
                            <label for="course" class="form-label">Desired Course</label>
                            <input type="text" class="form-control" id="course">
                        </div>
                        <div class="mb-3 col-lg-6">
                            <label class="form-label">Seeking Admission</label>
                            <div class="d-flex">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="admission" id="india"
                                        value="India" required>
                                    <label class="form-check-label" for="india">India</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="admission" id="abroad"
                                        value="Abroad">
                                    <label class="form-check-label" for="abroad">Abroad</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="submit-btn">SUBMIT</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Apply Modal -->
<div class="modal fade" id="applyModal" tabindex="-1" aria-labelledby="applyModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="applyModalLabel">Apply</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <ul class="nav nav-tabs mb-4" id="applyTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="admission-tab" data-bs-toggle="tab"
                            data-bs-target="#admission" type="button" role="tab" aria-controls="admission"
                            aria-selected="true">Apply for Admission</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="franchisee-tab" data-bs-toggle="tab"
                            data-bs-target="#franchisee" type="button" role="tab" aria-controls="franchisee"
                            aria-selected="false">Apply for Franchisee</button>
                    </li>
                </ul>
                <div class="tab-content" id="applyTabContent">
                    <div class="tab-pane fade show active" id="admission" role="tabpanel"
                        aria-labelledby="admission-tab">
                        <form id="admissionForm">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="admission-name" class="form-label">Name</label>
                                        <input type="text" class="form-control" id="admission-name" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="admission-mobile" class="form-label">Mobile Number</label>
                                        <input type="tel" class="form-control" id="admission-mobile" required>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="admission-email" class="form-label">Email ID</label>
                                <input type="email" class="form-control" id="admission-email" required>
                            </div>
                            <div class="mb-3">
                                <label for="admission-address" class="form-label">Address</label>
                                <textarea class="form-control" id="admission-address" rows="3" required></textarea>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="admission-course" class="form-label">Desired Course</label>
                                        <input type="text" class="form-control" id="admission-course" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="admission-exam" class="form-label">Last Passed Exam</label>
                                        <input type="text" class="form-control" id="admission-exam" required>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="submit-btn">Submit Application</button>
                        </form>
                    </div>
                    <div class="tab-pane fade" id="franchisee" role="tabpanel" aria-labelledby="franchisee-tab">
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
        </div>
    </div>
</div>

<!-- Login Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="loginModalLabel">Login</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="loginForm">
                    <div class="mb-3">
                        <label for="login-credential" class="form-label">Mobile Number / Email ID</label>
                        <input type="text" class="form-control" id="login-credential" required>
                    </div>
                    <div class="mb-3">
                        <label for="login-otp" class="form-label">Verification OTP</label>
                        <input type="text" class="form-control" id="login-otp" required>
                    </div>
                    <button type="submit" class="submit-btn">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
