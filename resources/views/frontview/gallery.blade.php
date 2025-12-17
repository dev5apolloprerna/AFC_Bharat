@extends('layouts.front')
@section('title', 'Gallery')
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
                    <h1 class="breadcrumb-title">Gallery</h1>

                    <!-- Breadcrumb Navigation -->
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item">
                                <a href="/">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Gallery
                            </li>
                        </ol>
                    </nav>

                </div>
            </div>
        </div>
    </section>

    <section id="gallery" class="gallery-section">
    <div class="container">
        <h2 class="section-title" data-aos="fade-up">Gallery</h2>

        {{-- Tabs --}}
        <div class="gallery-tabs" data-aos="fade-up" data-aos-delay="100">
            <button class="gallery-tab active" data-tab="photos">Photos</button>
            <button class="gallery-tab" data-tab="videos">Videos</button>
        </div>

        {{-- PHOTOS --}}
        <div class="gallery-content active" id="photos">
            <div class="photo-grid">
                @forelse ($galleryImages as $key => $img)
                    <div class="photo-item" data-aos="zoom-in" data-aos-delay="{{ ($key+1) * 100 }}">
                        <img src="{{ asset('/gallery_master/'.$img->image) }}"
                             alt="Gallery Image {{ $key + 1 }}">
                    </div>
                @empty
                    <p class="text-center">No photos available</p>
                @endforelse
            </div>
        </div>

        {{-- VIDEOS --}}
       
<div class="gallery-content" id="videos">
    <div class="video-grid">
        @forelse ($galleryVideos as $key => $video)

            @php
                $videoUrl = $video->video_link;

                if (str_contains($videoUrl, 'youtube.com/watch')) {
                    parse_str(parse_url($videoUrl, PHP_URL_QUERY), $params);
                    $videoUrl = 'https://www.youtube.com/embed/' . ($params['v'] ?? '');
                }

                if (str_contains($videoUrl, 'youtu.be')) {
                    $videoUrl = 'https://www.youtube.com/embed/' . basename($videoUrl);
                }
            @endphp

            <div class="video-item"
                data-aos="zoom-in"
                data-aos-delay="{{ ($key+1) * 100 }}"
                style="
                    position: relative;
                    overflow: hidden;
                    border-radius: 14px;
                    height: 260px;
                    box-shadow: 0 10px 30px rgba(0,0,0,0.15);
                    pointer-events: none;   /* 🔴 important */
                ">

                <iframe
                    src="{{ $videoUrl }}"
                    title="{{ $video->name }}"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen
                    style="
                        position: absolute;
                        top: 0;
                        left: 0;
                        width: 100%;
                        height: 100%;
                        border: 0;
                        z-index: 10;
                        pointer-events: auto; /* ✅ enable click ONLY on iframe */
                    ">
                </iframe>

            </div>



        @empty
            <p class="text-center">No videos available</p>
        @endforelse
    </div>
</div>


    </div>
</section>


    {{--  <section id="gallery" class="gallery-section">
        <div class="container">
            <h2 class="section-title" data-aos="fade-up">Gallery</h2>

            <div class="gallery-tabs" data-aos="fade-up" data-aos-delay="100">
                <button class="gallery-tab active" data-tab="photos">Photos</button>
                <button class="gallery-tab" data-tab="videos">Videos</button>
            </div>

            <div class="gallery-content active" id="photos">
                <div class="photo-grid">
                    <div class="photo-item" data-aos="zoom-in" data-aos-delay="100">
                        <img src="https://images.unsplash.com/photo-1581078426770-6d336e5de7bf?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1740&q=80"
                            alt="Gallery Image 1">
                    </div>
                    <div class="photo-item" data-aos="zoom-in" data-aos-delay="200">
                        <img src="https://images.unsplash.com/photo-1581078426770-6d336e5de7bf?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1740&q=80"
                            alt="Gallery Image 2">
                    </div>
                    <div class="photo-item" data-aos="zoom-in" data-aos-delay="300">
                        <img src="https://images.unsplash.com/photo-1576091160550-2173dba999ef?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1740&q=80"
                            alt="Gallery Image 3">
                    </div>
                    <div class="photo-item" data-aos="zoom-in" data-aos-delay="400">
                        <img src="https://images.unsplash.com/photo-1541339907198-e08756dedf3f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1740&q=80"
                            alt="Gallery Image 4">
                    </div>


                </div>
            </div>

            <div class="gallery-content" id="videos">
                <div class="video-grid">
                    <div class="video-item" data-aos="zoom-in" data-aos-delay="100">
                        <div class="video-wrapper">
                            <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ" title="YouTube video player"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="video-item" data-aos="zoom-in" data-aos-delay="200">
                        <div class="video-wrapper">
                            <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ" title="YouTube video player"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="video-item" data-aos="zoom-in" data-aos-delay="300">
                        <div class="video-wrapper">
                            <iframe src="https://www.youtube.com/embed/dQw4w9WgXcQ" title="YouTube video player"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>  --}}




@endsection

@section('scripts')


@endsection
