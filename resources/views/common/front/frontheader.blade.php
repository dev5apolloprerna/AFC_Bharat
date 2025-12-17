<!-- Top Header -->
<div class="top-header">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="social-links">
                    <a href="https://www.facebook.com/profile.php?id=61584562412150"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/mevadaassociateafc"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
            <div class="col-md-8">
                <div class="justify-content-end d-flex">
                    <a href="" class="text-white px-1"><i class="fas fa-envelope me-2"></i>
                        letstalk@afc-bharat.com </a> |
                    <a href="" class="text-white px-1"><i class="fas fa-phone me-2"></i> +91-022-69710514</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Main Header -->
<header class="main-header">
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="{{ route ('Frontindex') }}">
                <img src="{{ asset('Front/assets/images/logo.png') }}" alt="AFC BHARAT Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ route ('Frontindex') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route ('Frontabout') }}">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route ('Frontdestination') }}">Study Destination</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route ('Frontprogram') }}">Study Program</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route ('Frontgallery') }}">Gallery</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route ('Frontcontact') }}">Contact Us</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="applyDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Apply
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route ('Frontadmission') }}">
                                    Apply for admission
                                </a></li>
                            <li><a class="dropdown-item" href="{{ route ('Frontfranchisee') }}">
                                    Apply for Franchisee
                                </a></li>

                        </ul>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="login.html">LOGIN</a></li>

                </ul>
            </div>
        </div>
    </nav>
</header>
