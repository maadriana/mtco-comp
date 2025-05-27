@extends('layouts.app')

@section('title', 'Home - BizLand')

@section('content')
    {{-- Hero Section --}}
    <section id="hero" class="hero section light-background">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="zoom-out">
                    <h1>Welcome to <span>BizLand</span></h1>
                    <p>We are team of talented designers making websites with Bootstrap</p>
                    <div class="d-flex">
                        <a href="#about" class="btn-get-started">Get Started</a>
                        <a href="https://www.youtube.com/watch?v=Y7f98aduVJ8" class="glightbox btn-watch-video d-flex align-items-center">
                            <i class="bi bi-play-circle"></i><span>Watch Video</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- About Section --}}
    @include('partials.about')

    {{-- Services Section --}}
    @include('partials.services')

    {{-- Portfolio Section --}}
    @include('partials.portfolio')

    {{-- Team Section --}}
    @include('partials.team')

    {{-- Contact Section --}}
    @include('partials.contact')
@endsection
