@extends('layouts.app')

@section('title', 'Current Vacancies - Careers')

@section('content')

<!-- Unique Diagonal Header Design -->
<div style="position: relative; margin-top: -1.5rem; background: white; padding: 0; overflow: hidden; height: 400px;">

    <!-- Diagonal Background Sections -->
    <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0;">
        <!-- Main diagonal section -->
        <div style="position: absolute; top: 0; left: 0; width: 70%; height: 180%; background: linear-gradient(135deg, #326D78 0%, #4a9aba 100%); clip-path: polygon(0 0, 100% 0, 85% 100%, 0 100%); z-index: 2;"></div>

        <!-- Secondary diagonal accent -->
        <div style="position: absolute; top: 0; right: 0; width: 40%; height: 150%; background: linear-gradient(135deg, #e2e8f0 0%, #f8fafc 100%); clip-path: polygon(20% 0, 100% 0, 100% 100%, 0 100%); z-index: 1;"></div>

        <!-- Floating geometric elements -->
        <div style="position: absolute; top: 15%; right: 15%; width: 80px; height: 80px; background: #4a9aba; transform: rotate(45deg); opacity: 0.7; z-index: 3;"></div>
        <div style="position: absolute; bottom: 20%; right: 25%; width: 60px; height: 60px; background: #326D78; border-radius: 50%; opacity: 0.5; z-index: 3;"></div>
        <div style="position: absolute; top: 50%; right: 8%; width: 40px; height: 40px; background: #4a9aba; transform: rotate(45deg); opacity: 0.6; z-index: 3;"></div>
    </div>

    <!-- Breadcrumb Overlay -->
    <div class="breadcrumb-container" style="position: absolute; top: 50px; left: 20px; background: rgba(255, 255, 255, 0.95); padding: 10px 20px; border-radius: 6px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); display: inline-block; width: auto; z-index: 100;">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0" style="font-size: 0.9rem;">
                <li class="breadcrumb-item">
                    <a href="{{ url('/') }}" style="color: #326D78; text-decoration: none; font-weight: 500;">
                        <i class="fas fa-home me-1"></i>Home
                    </a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{ url('/#careers') }}" style="color: #326D78; text-decoration: none; font-weight: 500;">Careers</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page" style="color: #6c757d; font-weight: 500;">Current Vacancies</li>
            </ol>
        </nav>
    </div>

    <!-- Content Container -->
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <!-- Left Content on Diagonal -->
            <div class="col-lg-7 col-md-8 col-12" style="position: relative; z-index: 10;">
                <div class="header-content" style="color: white; padding-right: 2rem; padding-top: 1rem;">

                    <h1 class="header-title" style="font-size: 3.2rem; font-weight: 600; margin-bottom: 1.5rem; line-height: 1.2; color: white;">
                        {{ getContent('current_vacancies_main_title', 'Current Vacancies') }}
                    </h1>

                    <p class="header-description" style="font-size: 1.1rem; opacity: 0.9; line-height: 1.6; margin-bottom: 2rem; font-weight: 300; max-width: 500px; color: white">
                        {{ getContent('current_vacancies_description', 'We are looking for passionate individuals who value professionalism, continuous learning, and client service. Join our dynamic and growing team.') }}
                    </p>
                </div>
            </div>

            <!-- Right Side - Minimalist -->
            <div class="col-lg-5 col-md-4 col-12" style="position: relative; z-index: 5;">
                <div class="header-icon-section" style="text-align: center; color: #64748b; padding: 2rem;">
                    <div style="display: inline-block; background: #326D78; border-radius: 30px; display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem; box-shadow: 0 10px 40px rgba(50, 109, 120, 0.3); transform: rotate(-5deg);">
                        <i class="fas fa-rocket" style="font-size: 3rem; color: white; transform: rotate(5deg);"></i>
                    </div>
                    <h3 style="font-size: 1.5rem; font-weight: 600; color: #326D78; margin-bottom: 0.5rem;">{{ getContent('current_vacancies_subtitle', 'Start Your Journey') }}</h3>
                    <p style="font-size: 1rem; color: #64748b; margin: 0;">Excellence begins here</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Job Listings Section -->
<section class="py-5" style="background: #f8f9fa;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">

                <!-- Section Header -->
                <div class="text-center mb-5" data-aos="fade-up">
                    <h2 style="color: #326D78; font-weight: 400; font-size: 2.1rem; margin-bottom: 1rem;">
                        {{ getContent('available_positions_title', 'Available Positions') }}
                    </h2>
                    <div style="width: 60px; height: 4px; background: #326D78; margin: 0 auto; border-radius: 2px;"></div>
                </div>

                @php
                    $jobs = [
                        [
                            'title' => getContent('job1_title', 'External Audit Associate'),
                            'type' => getContent('job1_type', 'Permanent'),
                            'department' => getContent('job1_department', 'Audit and Assurance'),
                            'location' => getContent('job1_location', 'Makati City'),
                            'closing' => getContent('job1_closing', 'Ongoing'),
                            'route' => route('careers.external-audit'),
                            'image' => 'assets/img/job-audit.jpg',
                            'description' => getContent('job1_description', 'Assist in the performance of financial audits in compliance with Philippine Standards on Auditing (PSA) and relevant regulatory requirements. Work closely with senior auditors, managers, and partners to deliver quality assurance services to clients across diverse industries.')
                        ],
                        [
                            'title' => getContent('job2_title', 'Accounting Services Associate'),
                            'type' => getContent('job2_type', 'Permanent'),
                            'department' => getContent('job2_department', 'Accounting and Outsource Services'),
                            'location' => getContent('job2_location', 'Makati City'),
                            'closing' => getContent('job2_closing', 'Ongoing'),
                            'route' => route('careers.accounting-services'),
                            'image' => 'assets/img/job-accounting.jpg',
                            'description' => getContent('job2_description', 'Provide end-to-end accounting support including bookkeeping, financial reporting, and BIR compliance. Help clients maintain accurate records and stay compliant with Philippine tax laws.')
                        ],
                    ];
                @endphp

                <!-- Job Cards - Modern Design -->
                <div class="row gy-5">
                    @foreach ($jobs as $index => $job)
                    <div class="col-12" data-aos="fade-up" data-aos-delay="{{ 100 + ($index * 100) }}">
                        <div class="modern-job-card" style="background: white; border-radius: 24px; padding: 2rem; box-shadow: 0 20px 60px rgba(0,0,0,0.08); border: 1px solid #f0f0f0; overflow: hidden; position: relative;">

                            <!-- Background Pattern -->
                            <div style="position: absolute; top: -50px; right: -50px; width: 200px; height: 200px; background: linear-gradient(135deg, #326D78, #4a9aba); border-radius: 50%; opacity: 0.05; z-index: 1;"></div>
                            <div style="position: absolute; bottom: -30px; left: -30px; width: 120px; height: 120px; background: #326D78; border-radius: 50%; opacity: 0.03; z-index: 1;"></div>

                            <div class="row align-items-center" style="position: relative; z-index: 2;">
                                <!-- Image Section (Always Left) -->
                                <div class="col-md-4 col-12 mb-4 mb-md-0">
                                    <div style="position: relative; border-radius: 20px; overflow: hidden; box-shadow: 0 15px 35px rgba(50, 109, 120, 0.15);">
                                        <img src="{{ asset($job['image']) }}" alt="{{ $job['title'] }}"
                                             style="width: 100%; height: 280px; object-fit: cover; display: block;">
                                    </div>
                                </div>

                                <!-- Content Section (Always Right) -->
                                <div class="col-md-8 col-12">
                                    <div class="job-content" style="padding-left: 2rem;">
                                        <div style="display: flex; align-items: center; margin-bottom: 1rem;">
                                            <div style=" background: linear-gradient(135deg, #326D78, #4a9aba); border-radius: 16px; display: flex; align-items: center; justify-content: center; margin-right: 1rem;">
                                                @if($index == 0)
                                                    <i class="fas fa-briefcase" style="color: white; font-size: 1.5rem;"></i>
                                                @else
                                                    <i class="fas fa-calculator" style="color: white; font-size: 1.5rem;"></i>
                                                @endif
                                            </div>
                                            <div>
                                                <h3 style="font-size: 2rem; font-weight: 700; color: #2c3e50; margin: 0;">
                                                    {{ $job['title'] }}
                                                </h3>
                                                <span style="color: #326D78; font-weight: 500; font-size: 1rem;">{{ $job['department'] }}</span>
                                            </div>
                                        </div>

                                        <p style="color: #5a6c7d; font-size: 1.05rem; line-height: 1.7; margin-bottom: 2rem;">
                                            {{ $job['description'] }}
                                        </p>

                                        <!-- Job Details & Actions -->
                                        <div class="row align-items-center">
                                            <div class="col-md-8 col-12 mb-3 mb-md-0">
                                                <div class="row g-2">
                                                    <div class="col-6">
                                                        <div style="display: flex; align-items: center; color: #6c757d; font-size: 0.9rem;">
                                                            <i class="fas fa-clock me-2" style="color: #326D78;"></i>{{ $job['type'] }}
                                                        </div>
                                                    </div>
                                                    <div class="col-6">
                                                        <div style="display: flex; align-items: center; color: #6c757d; font-size: 0.9rem;">
                                                            <i class="fas fa-map-marker-alt me-2" style="color: #326D78;"></i>{{ $job['location'] }}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 col-12">
                                                <div class="d-flex gap-2">
                                                    <a href="{{ $job['route'] }}" class="btn" style="flex: 1; background: #326D78; color: white; border-radius: 25px; padding: 0.75rem; font-weight: 500; transition: all 0.3s ease;">
                                                        View Details
                                                    </a>
                                                    <a href="{{ route('careers.apply') }}" class="btn" style="flex: 1; background: transparent; color: #28a745; border: 2px solid #28a745; border-radius: 25px; padding: 0.75rem; font-weight: 500; transition: all 0.3s ease;">
                                                        Apply Now
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

                <!-- Call to Action Section -->
                <div class="text-center mt-5" data-aos="fade-up" data-aos-delay="400">
                    <div style="background: white; border-radius: 20px; padding: 3rem; box-shadow: 0 4px 25px rgba(0,0,0,0.08); border: 1px solid #e2e8f0;">
                        <i class="fas fa-handshake" style="font-size: 3rem; color: #326D78; margin-bottom: 1.5rem;"></i>
                        <h3 style="color: #1e293b; font-weight: 700; margin-bottom: 1rem;">{{ getContent('cta_title', 'Don\'t See the Right Fit?') }}</h3>
                        <p style="color: #64748b; margin-bottom: 2rem; font-size: 1.1rem;">
                            {{ getContent('cta_description', 'We\'re always interested in connecting with talented professionals. Send us your resume and we\'ll keep you in mind for future opportunities.') }}
                        </p>
                        <a href="{{ route('careers.apply') }}" class="btn send-resume-btn" style="background: #326D78; color: white; border-radius: 25px; padding: 1rem 2.5rem; font-weight: 600; border: none; font-size: 1.1rem;">
                            <i class="fas fa-envelope me-2"></i>{{ getContent('cta_button_text', 'Send Your Resume') }}
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<style>
    .send-resume-btn:hover {
        background: #2c5f69 !important;
        transform: translateY(-3px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        transition: all 0.3s ease;
    }

    .modern-job-card {
        transition: all 0.4s ease;
        border-radius: 24px;
    }

    .modern-job-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 30px 80px rgba(0, 0, 0, 0.12) !important;
    }

    .modern-job-card img {
        transition: transform 0.4s ease;
    }

    .modern-job-card:hover img {
        transform: scale(1.05);
    }

    .modern-job-card .btn:hover {
        transform: translateY(-2px);
    }

    .modern-job-card .btn[style*="background: #326D78"]:hover {
        background: #2c5f69 !important;
    }

    .modern-job-card .btn[style*="color: #28a745"]:hover {
        background: #28a745 !important;
        color: white !important;
    }

    .breadcrumb-item+.breadcrumb-item::before {
        content: "›";
        color: #6c757d;
        font-weight: bold;
    }

    section[data-aos] {
        z-index: 1 !important;
        position: relative;
    }

    /* Mobile Responsive Styles */
    @media (max-width: 768px) {
        /* Header adjustments */
        .header-title {
            font-size: 2.2rem !important;
            margin-bottom: 1rem !important;
        }

        .header-description {
            font-size: 1rem !important;
            margin-bottom: 1.5rem !important;
        }

        .header-content {
            padding-right: 1rem !important;
            padding-top: 2rem !important;
        }

        /* Breadcrumb mobile positioning */
        .breadcrumb-container {
            left: 15px !important;
            top: 22px !important;
            padding: 8px 15px !important;
            max-width: calc(100% - 30px);
        }

        .breadcrumb {
            font-size: 0.8rem !important;
        }

        /* Hide right side content on very small screens */
        .header-icon-section {
            display: none !important;
        }

        /* Header height adjustment */
        div[style*="height: 400px"] {
            height: 300px !important;
        }

        /* Job cards mobile layout */
        .modern-job-card .row {
            flex-direction: column !important;
        }

        .modern-job-card .job-content {
            padding-left: 1rem !important;
            padding-right: 1rem !important;
            margin-top: 1.5rem;
        }

        .modern-job-card img {
            height: 220px !important;
        }

        .modern-job-card .d-flex.gap-2 {
            flex-direction: column !important;
            gap: 0.75rem !important;
        }

        /* CTA section mobile */
        div[style*="padding: 3rem"] {
            padding: 2rem 1.5rem !important;
        }
    }

    @media (max-width: 480px) {
        /* Extra small screens */
        .header-title {
            font-size: 1.8rem !important;
        }

        .breadcrumb-container {
            left: 10px !important;
            top: 22px !important;
            padding: 6px 12px !important;
        }

        .container {
            padding-left: 15px !important;
            padding-right: 15px !important;
        }

        .header-content {
            padding-right: 0.5rem !important;
        }
    }

    /* Tablet adjustments */
    @media (min-width: 768px) and (max-width: 991px) {
        .header-icon-section {
            padding: 1rem !important;
        }

        .header-icon-section div[style*="width: 120px"] {
            width: 80px !important;
            height: 80px !important;
        }

        .header-icon-section i {
            font-size: 2rem !important;
        }

        .header-icon-section h3 {
            font-size: 1.2rem !important;
        }

        .header-icon-section p {
            font-size: 0.9rem !important;
        }
    }

    /* Tablet to Desktop adjustments */
    @media (min-width: 800px) and (max-width: 1300px) {
        .breadcrumb-container {
            top: 22px !important;
            left: 20px !important;
        }

        .header-icon-section {
            padding: 1rem !important;
        }

        .header-icon-section div[style*="width: 120px"] {
            width: 100px !important;
            height: 100px !important;
        }

        .header-icon-section i {
            font-size: 2.5rem !important;
        }

        .header-icon-section h3 {
            font-size: 1.3rem !important;
        }

        .header-icon-section p {
            font-size: 0.95rem !important;
        }
    }

    @media (min-width: 1301px) {
        .breadcrumb-container {
            top: 22px !important;
            left: 30px !important;
        }
    }
</style>

@endsection
