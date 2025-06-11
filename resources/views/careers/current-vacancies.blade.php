@extends('layouts.app')

@section('title', 'Current Vacancies - Careers')

@section('content')

<!-- Modern Header Section -->
<div style="position: relative; margin-top: -1.5rem; background: linear-gradient(135deg, rgba(50, 109, 120, 0.85) 0%, rgba(74, 138, 150, 0.85) 100%), url('{{ asset('assets/img/job-accounting.jpg') }}'); background-size: cover; background-position: center; padding: 80px 0 60px 0;">

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
                    <a href="{{ url('/#careers') }}" style="color: #326D78; text-decoration: none; font-weight: 500;">Careers</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page" style="color: #6c757d; font-weight: 500;">Current Vacancies</li>
            </ol>
        </nav>
    </div>

    <div class="container text-center text-white">
        <div style="max-width: 800px; margin: 0 auto; background: rgba(255, 255, 255, 0.1); padding: 2rem; border-radius: 15px; backdrop-filter: blur(10px);">
            <i class="fas fa-briefcase" style="font-size: 3rem; margin-bottom: 1.5rem; opacity: 0.95;"></i>
            <h1 style="font-size: 3rem; font-weight: 700; margin-bottom: 1rem; color: #ffffff;">
                Join Our Team
            </h1>
            <p style="font-size: 1.3rem; opacity: 0.95; line-height: 1.6; text-shadow: 0 1px 2px rgba(0,0,0,0.2);">
                We are always interested in receiving applications from high-caliber individuals to further strengthen our team.
            </p>
        </div>
    </div>
</div>

<!-- Job Listings Section -->
<section class="py-5" data-aos="fade-up" style="background: #f8f9fa;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">

                <!-- Section Header -->
                <div class="text-center mb-5">
                    <h2 style="color: #326D78; font-weight: 400; font-size: 2.1rem; margin-bottom: 1rem;">
                        Available Positions
                    </h2>
                    <div style="width: 60px; height: 4px; background: #326D78; margin: 0 auto; border-radius: 2px;"></div>
                </div>

                @php
                    $jobs = [
                        [
                            'title' => 'External Audit Associate',
                            'type' => 'Permanent',
                            'department' => 'Audit and Assurance',
                            'location' => 'Makati City',
                            'closing' => 'Ongoing',
                            'route' => route('careers.external-audit'),
                            'image' => 'assets/img/job-audit.jpg'
                        ],
                        [
                            'title' => 'Accounting Services Associate',
                            'type' => 'Permanent',
                            'department' => 'Accounting and Outsource Services',
                            'location' => 'Makati City',
                            'closing' => 'Ongoing',
                            'route' => route('careers.accounting-services'),
                            'image' => 'assets/img/job-accounting.jpg'
                        ],
                    ];
                @endphp

                <div class="row gy-4">
                    @foreach ($jobs as $job)
                    <div class="col-12">
                        <div class="card border-0 shadow-lg job-card h-100" style="border-radius: 16px; overflow: hidden;">
                            <div class="row g-0 align-items-stretch">

                                <!-- Image Section -->
                                <div class="col-md-3">
                                    <img src="{{ asset($job['image']) }}" alt="{{ $job['title'] }}" class="img-fluid h-100 w-100" style="object-fit: cover;">
                                </div>

                                <!-- Content Section -->
                                <div class="col-md-6 p-4">
                                    <h4 style="font-weight: 700; color: #326D78; margin-bottom: 0.5rem;">
                                        {{ $job['title'] }}
                                    </h4>
                                    <span class="badge" style="background: #326D78; color: white; font-size: 0.8rem; padding: 0.4rem 0.8rem; border-radius: 20px;">
                                        {{ $job['department'] }}
                                    </span>

                                    <div class="row g-2 mt-3">
                                        <div class="col-6">
                                            <small style="color: #6c757d;">
                                                <i class="fas fa-clock me-1"></i>{{ $job['type'] }}
                                            </small>
                                        </div>
                                        <div class="col-6">
                                            <small style="color: #6c757d;">
                                                <i class="fas fa-map-marker-alt me-1"></i>{{ $job['location'] }}
                                            </small>
                                        </div>
                                        <div class="col-6">
                                            <small style="color: #6c757d;">
                                                <i class="fas fa-calendar me-1"></i>{{ $job['closing'] }}
                                            </small>
                                        </div>
                                    </div>
                                </div>

                                <!-- Action Section -->
                                <div class="col-md-3 p-4 d-flex flex-column justify-content-center" style="background: #f8f9fa;">
                                    <a href="{{ $job['route'] }}" class="btn btn-view w-100 mb-2" style="background: #326D78; color: white; border: none; border-radius: 25px; padding: 0.7rem; transition: background-color 0.3s ease;">
                                        View Details
                                    </a>
                                    <a href="#" class="btn btn-apply btn-outline-success w-100" style="border-radius: 25px; padding: 0.7rem; transition: all 0.3s ease;">
                                        Apply Now
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>

            </div>
        </div>
    </div>
</section>

<style>
    .job-card {
        transition: all 0.3s ease;
        border-radius: 16px;
    }

    .job-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1) !important;
    }

    .btn-view:hover {
        background: #2c5f69 !important;
        color: white !important;
    }

    .btn-apply:hover {
        background: #28a745 !important;
        color: white !important;
        border-color: #28a745 !important;
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
</style>

@endsection
