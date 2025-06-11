@extends('layouts.app')

@section('title', 'Business Advisory - Services')

@section('content')

<!-- Hero Image with Breadcrumb Overlay -->
<div style="position: relative; margin-top: -1.5rem;">
    <img src="{{ asset('assets/img/job-accounting.jpg') }}" alt="Business Advisory"
        style="width: 100%; height: 350px; object-fit: cover;">

    <!-- Breadcrumb Overlay -->
    <div style="position: absolute; top: 20px; left: 70px; background: rgba(255, 255, 255, 0.95); padding: 10px 20px; border-radius: 6px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); display: inline-block; width: auto; z-index: 100;">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0" style="font-size: 0.9rem;">
                <li class="breadcrumb-item">
                    <a href="{{ url('/') }}" style="color: #326D78; text-decoration: none; font-weight: 500;">
                        <i class="fas fa-home me-1"></i>Home
                    </a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{ url('/#services') }}" style="color: #326D78; text-decoration: none; font-weight: 500;">Services</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page" style="color: #6c757d; font-weight: 500;">Business Advisory</li>
            </ol>
        </nav>
    </div>
</div>

<section id="business-advisory" class="py-5" data-aos="fade-up">
    <div class="container">

        <!-- Title - More spaced from image -->
        <div class="text-center mb-6" style="margin-top: 1rem; padding-bottom: 2rem;">
        <h2 style="color: #333; font-family: 'Raleway', sans-serif; font-size: 2.1rem; margin-bottom: 1rem; font-weight: 580;">
          Business Advisory
        </h2>
    </div>

        <!-- Main Content -->
        <div style="max-width: 900px; margin: 0 auto; text-align: justify; padding-bottom: 4rem;">
            <p class="fs-5 text-muted mb-4" style="line-height: 1.7;">
                Our breadth of experience allows you to benefit from specific and targeted consulting advice to support your long-term growth plans.
            </p>
            <p class="fs-5 text-muted mb-4" style="line-height: 1.7;">
                By developing a real understanding of your business and the issues and challenges you face, our advisory teams use local and global knowledge to help you achieve your goals.
            </p>
            <p class="fs-5 text-muted mb-4" style="line-height: 1.7;">
                Not only do we help you understand and plan to mitigate your vulnerabilities, we also help you to establish a clear pathway to success.
            </p>
            <p class="fs-5 text-muted mb-5" style="line-height: 1.7;">
                We have a proven track record of working with a range of clients — from family-owned businesses to public companies and from entrepreneurial start-ups to established global entities — helping them develop and refine their business strategies.
            </p>

            <h4 style="font-size: 1.6rem; color: #222222; margin-top: 3rem;">Our Services</h4>
            <ul style="font-size: 1.2rem; color: #444444; line-height: 1.8; padding-left: 1.5rem;">
                <li>Business consulting</li>
                <li>Strategic planning</li>
            </ul>
        </div>

    </div>
</section>

<style>
.card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15) !important;
    transition: all 0.3s ease;
}

.breadcrumb-item+.breadcrumb-item::before {
    content: "›";
    color: #6c757d;
    font-weight: bold;
}

/* Fix z-index issue with AOS animations */
section[data-aos] {
    z-index: 1 !important;
    position: relative;
}
</style>

@endsection
