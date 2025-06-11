@extends('layouts.app')

@section('title', 'Forensic and Litigation Support - Services')

@section('content')

<!-- Hero Image with Breadcrumb Overlay -->
<div style="position: relative; margin-top: -1.5rem;">
    <img src="{{ asset('assets/img/job-accounting.jpg') }}" alt="Forensic and Litigation Support"
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
                <li class="breadcrumb-item active" aria-current="page" style="color: #6c757d; font-weight: 500;">Forensic and Litigation Support</li>
            </ol>
        </nav>
    </div>
</div>

<section id="forensic-litigation" class="py-5" data-aos="fade-up">
    <div class="container">

        <!-- Title - More spaced from image -->
        <div class="text-center mb-6" style="margin-top: 1rem; padding-bottom: 2rem;">
        <h2 style="color: #333; font-family: 'Raleway', sans-serif; font-size: 2.1rem; margin-bottom: 1rem; font-weight: 580;">
          Forensic and Litigation Support
        </h2>
    </div>

        <!-- Main Content -->
        <div style="max-width: 900px; margin: 0 auto; text-align: justify; padding-bottom: 4rem;">
            <p class="fs-5 text-muted mb-4" style="line-height: 1.7;">
                Legal challenges come in many forms. When these challenges need to be resolved through litigation, you require effective support that will protect your interests.
            </p>
            <p class="fs-5 text-muted mb-4" style="line-height: 1.7;">
                We provide a range of investigation services for contractual and commercial disputes, forensic investigations, valuations, and individual and family disputes.
            </p>
            <p class="fs-5 text-muted mb-5" style="line-height: 1.7;">
                We offer experts with skills in a variety of areas and experience in all types of dispute, globally.
            </p>

            <h4 style="font-size: 1.6rem; color: #222222; margin-top: 3rem;">We regularly advise clients on:</h4>
            <ul style="font-size: 1.2rem; color: #444444; line-height: 1.8; padding-left: 1.5rem;">
                <li>Commercial and contractual disputes and mediation involving business or share valuations</li>
                <li>Expert witness and quantification of loss</li>
                <li>Forensic investigations, particularly in relation to fraud claims, tax investigations and asset tracing</li>
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
