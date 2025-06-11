@extends('layouts.app')

@section('title', 'Governance, Risk and Internal Audit - Services')

@section('content')

<!-- Hero Image with Breadcrumb Overlay -->
<div style="position: relative; margin-top: -1.5rem;">
    <img src="{{ asset('assets/img/job-accounting.jpg') }}" alt="Governance, Risk and Internal Audit"
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
                <li class="breadcrumb-item active" aria-current="page" style="color: #6c757d; font-weight: 500;">Governance, Risk and Internal Audit</li>
            </ol>
        </nav>
    </div>
</div>

<section id="governance-risk" class="py-5" data-aos="fade-up">
    <div class="container">

        <!-- Title - More spaced from image -->
        <div class="text-center mb-6" style="margin-top: 1rem; padding-bottom: 2rem;">
        <h2 style="color: #333; font-family: 'Raleway', sans-serif; font-size: 2.1rem; margin-bottom: 1rem; font-weight: 580;">
          Governance, Risk and Internal Audit
        </h2>
    </div>

        <!-- Main Content -->
        <div style="max-width: 900px; margin: 0 auto; text-align: justify; padding-bottom: 4rem;">
            <p class="fs-5 text-muted mb-4" style="line-height: 1.7;">
                Robust governance and effective risk management are no longer matters of pure regulatory compliance. Businesses increasingly recognise the potential to maximise performance by applying best practice and building in additional operational assurances.
            </p>
            <p class="fs-5 text-muted mb-4" style="line-height: 1.7;">
                The management of risk and the implementation of robust corporate governance has become an increasingly important aspect of global business. Many companies are required by law, regulation or stakeholder concerns to adopt governance processes and procedures, and many more choose to do so voluntarily as part of a successful business strategy. Our Governance, Risk and Internal Audit practice offers a range of services that make it easier for board directors to maintain robust governance and assurance frameworks and to manage risks effectively.
            </p>
            <p class="fs-5 text-muted mb-5" style="line-height: 1.7;">
                At Mendoza Tugano &amp; Co., CPAs, we work with businesses in all sectors, advising on their governance structures, providing comfort on their control environments and helping to embed transparency and accountability.
            </p>

            <h4 style="font-size: 1.6rem; color: #222222; margin-top: 3rem;">Our governance, risk, and internal audit services cover three areas:</h4>
            <ul style="font-size: 1.2rem; color: #444444; line-height: 1.8; padding-left: 1.5rem;">
                <li>Corporate governance</li>
                <li>Controls assurance</li>
                <li>Internal audit</li>
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
