@extends('layouts.app')

@section('title', 'Accounting Services Associate - Careers')

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
                <li class="breadcrumb-item">
                    <a href="{{ route('careers.vacancies') }}" style="color: #326D78; text-decoration: none; font-weight: 500;">Current Vacancies</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page" style="color: #6c757d; font-weight: 500;">Accounting Services Associate</li>
            </ol>
        </nav>
    </div>

    <div class="container text-center text-white">
        <div style="max-width: 800px; margin: 0 auto; background: rgba(255, 255, 255, 0.1); padding: 2rem; border-radius: 15px; backdrop-filter: blur(10px);">
            <i class="fas fa-calculator" style="font-size: 3rem; margin-bottom: 1.5rem; opacity: 0.95;"></i>
            <h1 style="font-size: 2.7rem; font-weight: 580; margin-bottom: 1rem; color: #ffffff;">
                Accounting Services Associate
            </h1>
            <div class="row text-center mt-4">
                <div class="col-md-3">
                    <h6 style="margin: 0; opacity: 0.8;">Department</h6>
                    <p style="margin: 0; font-weight: 600; font-size: 1.1rem;">Accounting and Outsource Services</p>
                </div>
                <div class="col-md-3">
                    <h6 style="margin: 0; opacity: 0.8;">Job Type</h6>
                    <p style="margin: 0; font-weight: 600; font-size: 1.1rem;">Permanent</p>
                </div>
                <div class="col-md-3">
                    <h6 style="margin: 0; opacity: 0.8;">Location</h6>
                    <p style="margin: 0; font-weight: 600; font-size: 1.1rem;">Makati City</p>
                </div>
                <div class="col-md-3">
                    <h6 style="margin: 0; opacity: 0.8;">Status</h6>
                    <p style="margin: 0; font-weight: 600; font-size: 1.1rem;">Open</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Job Details Section -->
<section class="py-5" data-aos="fade-up" style="background: #f8f9fa;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">

                <!-- Job Details Cards -->
                <div class="row gy-4">

                    <!-- Responsibilities Card -->
                    <div class="col-12">
                        <div class="card border-0 shadow-lg" style="border-radius: 16px; overflow: hidden;">
                            <div class="card-header" style="background: linear-gradient(135deg, #3f8a98, #4a8a96); color: white; border: none; padding: 1.5rem;">
                                <h4 class="mb-0" style="font-weight: 600; color: #ffffff">
                                    <i class="fas fa-tasks me-2"></i>Responsibilities
                                </h4>
                            </div>
                            <div class="card-body p-4">
                                <ul style="font-size: 1.1rem; line-height: 1.8; color: #444; margin: 0;">
                                    <li>Administer all accounting, taxation process and ensure optimal quality of all processes</li>
                                    <li>Coordinate with all third-party application providers and shared services</li>
                                    <li>Prepare reports for ledgers, trial balance and reconcile all statements and ensure integrity of all data</li>
                                    <li>Perform research on various accounting processes, analyze variances and prepare appropriate reports</li>
                                    <li>Administer all reconcile statements for cash and income accounts</li>
                                    <li>Maintain portfolio activity, update entries in general ledger and evaluate it regularly to ensure accuracy in rate</li>
                                    <li>Prepare reports for respective accounts and clients</li>
                                    <li>Coordinate with internal auditors, answer all related queries, and prepare associated reports</li>
                                    <li>Monitor all accounting deliverables, process all vouchers and ensure work is completed on time</li>
                                    <li>Prepare reports to be submitted to management and recommend improvements if required</li>
                                    <li>Evaluate all cost receivables and payables on a regular basis to ensure accuracy</li>
                                    <li>Manage all information and update it on automated systems and generate accounting reports</li>
                                    <li>Forecast budget requirements, update journal entries, and prepare reports accordingly</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Qualifications Card -->
                    <div class="col-md-6">
                        <div class="card border-0 shadow-lg h-100" style="border-radius: 16px; overflow: hidden;">
                            <div class="card-header" style="background: linear-gradient(135deg, #3f8a98, #4a8a96); color: white; border: none; padding: 1.5rem;">
                                <h4 class="mb-0" style="font-weight: 600; color: #ffffff">
                                    <i class="fas fa-graduation-cap me-2"></i>Qualifications
                                </h4>
                            </div>
                            <div class="card-body p-4">
                                <ul style="font-size: 1.1rem; line-height: 1.8; color: #444; margin: 0;">
                                    <li>Holder of Bachelor of Science in Accountancy, or its equivalent</li>
                                    <li>CPA title is optional</li>
                                    <li>Minimum 1 year of experience. Fresh graduates are welcome to apply</li>
                                    <li>Knowledge of any accounting software is an advantage</li>
                                    <li>Excellent analytical skills</li>
                                    <li>Excellent verbal and written communication skills</li>
                                    <li>Able to work in a fast-paced changing environment</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <!-- Requirements Card -->
                    <div class="col-md-6">
                        <div class="card border-0 shadow-lg h-100" style="border-radius: 16px; overflow: hidden;">
                            <div class="card-header" style="background: linear-gradient(135deg, #3f8a98, #4a8a96); color: white; border: none; padding: 1.5rem;">
                                <h4 class="mb-0" style="font-weight: 600; color: #ffffff">
                                    <i class="fas fa-file-alt me-2"></i>Requirements
                                </h4>
                            </div>
                            <div class="card-body p-4">
                                <ul style="font-size: 1.1rem; line-height: 1.8; color: #444; margin: 0;">
                                    <li>Curriculum vitae / resume</li>
                                    <li>Transcript of records</li>
                                    <li>Latest National Bureau of Investigation (NBI) clearance</li>
                                    <li>Results of the Certified Public Accountant Licensure Examinations (CPALE), if CPA</li>
                                    <li>Latest medical certificate</li>
                                    <li>2" x 2" picture on white background, taken within the last six months from date of application</li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Action Buttons -->
                <div class="text-center mt-5">
                    <div class="card border-0 shadow-lg" style="background: linear-gradient(135deg, #326D78, #4a8a96); border-radius: 20px; padding: 3rem 2rem;">
                        <h3 style="color: white; font-weight: 700; margin-bottom: 1rem;">Ready to Join Our Team?</h3>
                        <p style="color: white; opacity: 0.9; margin-bottom: 2rem; font-size: 1.1rem;">
                            Take the next step in your career with Mendoza Tugano & Co., CPAs
                        </p>
                        <div class="d-flex flex-wrap gap-3 justify-content-center">
                            <a href="#" class="btn btn-light btn-lg apply-btn" style="border-radius: 25px; padding: 0.8rem 2rem; font-weight: 600; color: #326D78; transition: all 0.3s ease;">
                                <i class="fas fa-paper-plane me-2"></i>Apply Now
                            </a>
                            <a href="{{ route('careers.vacancies') }}" class="btn btn-outline-light btn-lg return-btn" style="border-radius: 25px; padding: 0.8rem 2rem; font-weight: 600; transition: all 0.3s ease;">
                                <i class="fas fa-arrow-left me-2"></i>View All Positions
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<style>
    .card {
        transition: all 0.3s ease;
    }

    .card:hover {
        transform: translateY(-3px);
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1) !important;
    }

    .apply-btn:hover {
        background: #2c5f69 !important;
        color: white !important;
    }

    .return-btn:hover {
        background: white !important;
        color: #326D78 !important;
        border-color: white !important;
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
