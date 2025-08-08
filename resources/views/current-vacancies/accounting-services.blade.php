@extends('layouts.app')

@section('title', 'Accounting Services Associate - Careers')

@section('content')

<!-- Layered Wave Header Design -->
<div style="position: relative; margin-top: -1.5rem; background: linear-gradient(135deg, #326D78  0%, #6dc6d5 100%); padding: 0; overflow: hidden; min-height: 450px;">

    <!-- Wave Background Layers -->
    <div style="position: absolute; bottom: 0; left: 0; width: 100%; overflow: hidden; line-height: 0; transform: rotate(180deg);">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none" style="position: relative; display: block; width: calc(100% + 1.3px); height: 60px;">
            <path d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z" style="fill: #f8f9fa;"></path>
        </svg>
    </div>

    <!-- Secondary wave -->
    <div style="position: absolute; bottom: 0; left: 0; width: 100%; overflow: hidden; line-height: 0; transform: rotate(180deg);">
        <svg data-name="Layer 2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none" style="position: relative; display: block; width: calc(100% + 1.3px); height: 80px; opacity: 0.5;">
            <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" style="fill: rgba(248,249,250,0.3);"></path>
        </svg>
    </div>

    <!-- Floating decorative elements -->
    <div style="position: absolute; top: 10%; left: 5%; width: 100px; height: 100px; background: rgba(255,255,255,0.1); border-radius: 50%; opacity: 0.3;"></div>
    <div style="position: absolute; top: 20%; right: 10%; width: 60px; height: 60px; background: rgba(255,255,255,0.08); transform: rotate(45deg); opacity: 0.4;"></div>
    <div style="position: absolute; bottom: 30%; left: 15%; width: 80px; height: 80px; background: rgba(255,255,255,0.05); border-radius: 30px; transform: rotate(-15deg);"></div>

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

    <!-- Content Container -->
    <div class="container" style="position: relative; z-index: 10; padding-top: 80px; padding-bottom: 100px;">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-8 text-center text-white">

                <!-- Job Badge -->
                <div style="display: flex; align-items: center; justify-content: center; margin-bottom: 2rem;">
                    <div style="background: rgba(255,255,255,0.2); padding: 0.5rem 1.5rem; border-radius: 25px; backdrop-filter: blur(10px);">
                        <small style="font-weight: 600; text-transform: uppercase; letter-spacing: 1px;">Open Position</small>
                    </div>
                </div>

                <h1 style="font-size: 3rem; font-weight: 700; margin-bottom: 1rem; line-height: 1.2; color: white">
                    Accounting Services<br>
                    <span style="font-weight: 700; opacity: 0.9; color: white">Associate</span>
                </h1>

                <p style="font-size: 1.2rem; opacity: 0.9; margin-bottom: 3rem; max-width: 600px; margin-left: auto; margin-right: auto;">
                    Join our dynamic accounting team and help deliver exceptional financial services to our clients.
                </p>

                <!-- Job Info Grid -->
                <div class="row text-center">
                    <div class="col-sm-6 col-lg-3 mb-3">
                        <div style="background: rgba(255,255,255,0.1); padding: 1.5rem 1rem; border-radius: 15px; backdrop-filter: blur(5px); height: 100%;">
                            <i class="fas fa-building mb-2" style="font-size: 1.5rem;"></i>
                            <h6 style="margin-bottom: 0.5rem; opacity: 0.8; font-size: 0.9rem;">Department</h6>
                            <p style="margin: 0; font-weight: 600;">Accounting & Outsource Services</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 mb-3">
                        <div style="background: rgba(255,255,255,0.1); padding: 1.5rem 1rem; border-radius: 15px; backdrop-filter: blur(5px); height: 100%;">
                            <i class="fas fa-briefcase mb-2" style="font-size: 1.5rem;"></i>
                            <h6 style="margin-bottom: 0.5rem; opacity: 0.8; font-size: 0.9rem;">Job Type</h6>
                            <p style="margin: 0; font-weight: 600;">Permanent</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 mb-3">
                        <div style="background: rgba(255,255,255,0.1); padding: 1.5rem 1rem; border-radius: 15px; backdrop-filter: blur(5px); height: 100%;">
                            <i class="fas fa-map-marker-alt mb-2" style="font-size: 1.5rem;"></i>
                            <h6 style="margin-bottom: 0.5rem; opacity: 0.8; font-size: 0.9rem;">Location</h6>
                            <p style="margin: 0; font-weight: 600;">Makati City</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 mb-3">
                        <div style="background: rgba(255,255,255,0.1); padding: 1.5rem 1rem; border-radius: 15px; backdrop-filter: blur(5px); height: 100%;">
                            <i class="fas fa-check-circle mb-2" style="font-size: 1.5rem;"></i>
                            <h6 style="margin-bottom: 0.5rem; opacity: 0.8; font-size: 0.9rem;">Status</h6>
                            <p style="margin: 0; font-weight: 600;">Open</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Job Details Section -->
<section class="py-5" style="background: #f8f9fa;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">

                <!-- Section Header -->
                <div class="text-center mb-5" data-aos="fade-up">
                    <h2 style="color: #333; font-weight: 600; font-size: 2.5rem; margin-bottom: 1rem;">
                        Position Details
                    </h2>
                    <div style="width: 80px; height: 4px; background: #326D78; margin: 0 auto; border-radius: 2px;"></div>
                </div>

                <!-- Job Details Cards -->
                <div class="row gy-4">

                    <!-- Responsibilities Card -->
                    <div class="col-12" data-aos="fade-up" data-aos-delay="100">
                        <div style="background: white; border-radius: 20px; overflow: hidden; box-shadow: 0 8px 30px rgba(0,0,0,0.08); border-left: 5px solid #326D78;">
                            <div style="background: linear-gradient(135deg, #326D78 0%, #4a9aba 100%); color: white; padding: 2rem;">
                                <div class="d-flex align-items-center">
                                    <div border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 1rem;">
                                        <i class="fas fa-tasks" style="font-size: 1.5rem;"></i>
                                    </div>
                                    <h4 style="margin: 0; font-weight: 600; color: white">Key Responsibilities</h4>
                                </div>
                            </div>
                            <div style="padding: 2.5rem;">
                                <div style="columns: 1; column-gap: 2rem;">
                                    <ul style="font-size: 1rem; line-height: 1.7; color: #444; margin: 0; list-style: none; padding: 0;">
                                        <li style="margin-bottom: 1rem; padding-left: 1.5rem; position: relative;">
                                            <i class="fas fa-check-circle" style="position: absolute; left: 0; top: 0.25rem; color: #326D78; font-size: 0.9rem;"></i>
                                            Administer all accounting, taxation process and ensure optimal quality of all processes
                                        </li>
                                        <li style="margin-bottom: 1rem; padding-left: 1.5rem; position: relative;">
                                            <i class="fas fa-check-circle" style="position: absolute; left: 0; top: 0.25rem; color: #326D78; font-size: 0.9rem;"></i>
                                            Coordinate with all third-party application providers and shared services
                                        </li>
                                        <li style="margin-bottom: 1rem; padding-left: 1.5rem; position: relative;">
                                            <i class="fas fa-check-circle" style="position: absolute; left: 0; top: 0.25rem; color: #326D78; font-size: 0.9rem;"></i>
                                            Prepare reports for ledgers, trial balance and reconcile all statements and ensure integrity of all data
                                        </li>
                                        <li style="margin-bottom: 1rem; padding-left: 1.5rem; position: relative;">
                                            <i class="fas fa-check-circle" style="position: absolute; left: 0; top: 0.25rem; color: #326D78; font-size: 0.9rem;"></i>
                                            Perform research on various accounting processes, analyze variances and prepare appropriate reports
                                        </li>
                                        <li style="margin-bottom: 1rem; padding-left: 1.5rem; position: relative;">
                                            <i class="fas fa-check-circle" style="position: absolute; left: 0; top: 0.25rem; color: #326D78; font-size: 0.9rem;"></i>
                                            Administer all reconcile statements for cash and income accounts
                                        </li>
                                        <li style="margin-bottom: 1rem; padding-left: 1.5rem; position: relative;">
                                            <i class="fas fa-check-circle" style="position: absolute; left: 0; top: 0.25rem; color: #326D78; font-size: 0.9rem;"></i>
                                            Maintain portfolio activity, update entries in general ledger and evaluate it regularly to ensure accuracy in rate
                                        </li>
                                        <li style="margin-bottom: 1rem; padding-left: 1.5rem; position: relative;">
                                            <i class="fas fa-check-circle" style="position: absolute; left: 0; top: 0.25rem; color: #326D78; font-size: 0.9rem;"></i>
                                            Prepare reports for respective accounts and clients
                                        </li>
                                        <li style="margin-bottom: 1rem; padding-left: 1.5rem; position: relative;">
                                            <i class="fas fa-check-circle" style="position: absolute; left: 0; top: 0.25rem; color: #326D78; font-size: 0.9rem;"></i>
                                            Coordinate with internal auditors, answer all related queries, and prepare associated reports
                                        </li>
                                        <li style="margin-bottom: 1rem; padding-left: 1.5rem; position: relative;">
                                            <i class="fas fa-check-circle" style="position: absolute; left: 0; top: 0.25rem; color: #326D78; font-size: 0.9rem;"></i>
                                            Monitor all accounting deliverables, process all vouchers and ensure work is completed on time
                                        </li>
                                        <li style="margin-bottom: 1rem; padding-left: 1.5rem; position: relative;">
                                            <i class="fas fa-check-circle" style="position: absolute; left: 0; top: 0.25rem; color: #326D78; font-size: 0.9rem;"></i>
                                            Prepare reports to be submitted to management and recommend improvements if required
                                        </li>
                                        <li style="margin-bottom: 1rem; padding-left: 1.5rem; position: relative;">
                                            <i class="fas fa-check-circle" style="position: absolute; left: 0; top: 0.25rem; color: #326D78; font-size: 0.9rem;"></i>
                                            Evaluate all cost receivables and payables on a regular basis to ensure accuracy
                                        </li>
                                        <li style="margin-bottom: 1rem; padding-left: 1.5rem; position: relative;">
                                            <i class="fas fa-check-circle" style="position: absolute; left: 0; top: 0.25rem; color: #326D78; font-size: 0.9rem;"></i>
                                            Manage all information and update it on automated systems and generate accounting reports
                                        </li>
                                        <li style="margin-bottom: 0; padding-left: 1.5rem; position: relative;">
                                            <i class="fas fa-check-circle" style="position: absolute; left: 0; top: 0.25rem; color: #326D78; font-size: 0.9rem;"></i>
                                            Forecast budget requirements, update journal entries, and prepare reports accordingly
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <!-- Qualifications Card -->
                        <div style="background: white; border-radius: 20px; overflow: hidden; box-shadow: 0 8px 30px rgba(0,0,0,0.08); border-left: 5px solid #4a9aba; height: 100%;">
                            <div style="background: linear-gradient(135deg, #4a9aba 0%, #74d3e3 100%); color: white; padding: 2rem;">
                                <div class="d-flex align-items-center">
                                    <div style="background: rgba(255,255,255,0.2); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 1rem;">
                                        <i class="fas fa-graduation-cap" style="font-size: 1.5rem;"></i>
                                    </div>
                                    <h4 style="margin: 0; font-weight: 600; color: white">Qualifications</h4>
                                </div>
                            </div>
                            <div style="padding: 2rem;">
                                <ul style="font-size: 1rem; line-height: 1.7; color: #444; margin: 0; list-style: none; padding: 0;">
                                    <li style="margin-bottom: 1rem; padding-left: 1.5rem; position: relative;">
                                        <i class="fas fa-star" style="position: absolute; left: 0; top: 0.25rem; color: #4a9aba; font-size: 0.9rem;"></i>
                                        Holder of Bachelor of Science in Accountancy, or its equivalent
                                    </li>
                                    <li style="margin-bottom: 1rem; padding-left: 1.5rem; position: relative;">
                                        <i class="fas fa-star" style="position: absolute; left: 0; top: 0.25rem; color: #4a9aba; font-size: 0.9rem;"></i>
                                        CPA title is optional
                                    </li>
                                    <li style="margin-bottom: 1rem; padding-left: 1.5rem; position: relative;">
                                        <i class="fas fa-star" style="position: absolute; left: 0; top: 0.25rem; color: #4a9aba; font-size: 0.9rem;"></i>
                                        Minimum 1 year of experience. Fresh graduates are welcome to apply
                                    </li>
                                    <li style="margin-bottom: 1rem; padding-left: 1.5rem; position: relative;">
                                        <i class="fas fa-star" style="position: absolute; left: 0; top: 0.25rem; color: #4a9aba; font-size: 0.9rem;"></i>
                                        Knowledge of any accounting software is an advantage
                                    </li>
                                    <li style="margin-bottom: 1rem; padding-left: 1.5rem; position: relative;">
                                        <i class="fas fa-star" style="position: absolute; left: 0; top: 0.25rem; color: #4a9aba; font-size: 0.9rem;"></i>
                                        Excellent analytical skills
                                    </li>
                                    <li style="margin-bottom: 1rem; padding-left: 1.5rem; position: relative;">
                                        <i class="fas fa-star" style="position: absolute; left: 0; top: 0.25rem; color: #4a9aba; font-size: 0.9rem;"></i>
                                        Excellent verbal and written communication skills
                                    </li>
                                    <li style="margin-bottom: 0; padding-left: 1.5rem; position: relative;">
                                        <i class="fas fa-star" style="position: absolute; left: 0; top: 0.25rem; color: #4a9aba; font-size: 0.9rem;"></i>
                                        Able to work in a fast-paced changing environment
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
                        <!-- Requirements Card -->
                        <div style="background: white; border-radius: 20px; overflow: hidden; box-shadow: 0 8px 30px rgba(0,0,0,0.08); border-left: 5px solid #74d3e3; height: 100%;">
                            <div style="background: linear-gradient(135deg, #74d3e3 0%, #5bb3c7 100%); color: white; padding: 2rem;">
                                <div class="d-flex align-items-center">
                                    <div style="background: rgba(255,255,255,0.2); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 1rem;">
                                        <i class="fas fa-file-alt" style="font-size: 1.5rem;"></i>
                                    </div>
                                    <h4 style="margin: 0; font-weight: 600; color: white">Requirements</h4>
                                </div>
                            </div>
                            <div style="padding: 2rem;">
                                <ul style="font-size: 1rem; line-height: 1.7; color: #444; margin: 0; list-style: none; padding: 0;">
                                    <li style="margin-bottom: 1rem; padding-left: 1.5rem; position: relative;">
                                        <i class="fas fa-file" style="position: absolute; left: 0; top: 0.25rem; color: #74d3e3; font-size: 0.9rem;"></i>
                                        Curriculum vitae / resume
                                    </li>
                                    <li style="margin-bottom: 1rem; padding-left: 1.5rem; position: relative;">
                                        <i class="fas fa-file" style="position: absolute; left: 0; top: 0.25rem; color: #74d3e3; font-size: 0.9rem;"></i>
                                        Transcript of records
                                    </li>
                                    <li style="margin-bottom: 1rem; padding-left: 1.5rem; position: relative;">
                                        <i class="fas fa-file" style="position: absolute; left: 0; top: 0.25rem; color: #74d3e3; font-size: 0.9rem;"></i>
                                        Latest National Bureau of Investigation (NBI) clearance
                                    </li>
                                    <li style="margin-bottom: 1rem; padding-left: 1.5rem; position: relative;">
                                        <i class="fas fa-file" style="position: absolute; left: 0; top: 0.25rem; color: #74d3e3; font-size: 0.9rem;"></i>
                                        Results of the Certified Public Accountant Licensure Examinations (CPALE), if CPA
                                    </li>
                                    <li style="margin-bottom: 1rem; padding-left: 1.5rem; position: relative;">
                                        <i class="fas fa-file" style="position: absolute; left: 0; top: 0.25rem; color: #74d3e3; font-size: 0.9rem;"></i>
                                        Latest medical certificate
                                    </li>
                                    <li style="margin-bottom: 0; padding-left: 1.5rem; position: relative;">
                                        <i class="fas fa-file" style="position: absolute; left: 0; top: 0.25rem; color: #74d3e3; font-size: 0.9rem;"></i>
                                        2" x 2" picture on white background, taken within the last six months from date of application
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Action Buttons -->
                <div class="text-center mt-5" data-aos="fade-up" data-aos-delay="400">
                    <div style="background: white; border-radius: 25px; padding: 3rem 2rem; box-shadow: 0 15px 40px rgba(0,0,0,0.1); border: 3px solid #326D78; position: relative; overflow: hidden;">

                       <!-- Background decoration -->
<div style="position: absolute; top: -30px; right: -30px; width: 120px; height: 120px; background: linear-gradient(135deg, #326D78, #4a9aba); border-radius: 50%; opacity: 0.05;"></div>
<div style="position: absolute; bottom: -20px; left: -20px; width: 80px; height: 80px; background: linear-gradient(135deg, #4a9aba, #74d3e3); border-radius: 50%; opacity: 0.08;"></div>

<div style="position: relative; z-index: 2;">
    <div style="background: linear-gradient(135deg, #326D78, #4a9aba); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 2rem;">
        <i class="fas fa-rocket" style="font-size: 2rem; color: white;"></i>
    </div>

    <h3 style="color: #333; font-weight: 700; margin-bottom: 1rem;">Ready to Join Our Team?</h3>
    <p style="color: #666; margin-bottom: 2rem; font-size: 1.1rem;">
        Take the next step in your career with Mendoza Tugano & Co., CPAs
    </p>

    <div class="d-flex flex-wrap gap-3 justify-content-center">
        <a href="{{ route('careers.apply') }}" class="btn btn-lg" style="background: linear-gradient(135deg, #326D78, #4a9aba); color: white; border: none; border-radius: 25px; padding: 1rem 2.5rem; font-weight: 600; transition: all 0.3s ease;">
            Apply Now
        </a>
        <a href="{{ route('careers.vacancies') }}" class="btn btn-outline-primary btn-lg" style="border-radius: 25px; padding: 1rem 2.5rem; font-weight: 600; transition: all 0.3s ease; border-color: #326D78; color: #326D78;">
            <i class="fas fa-arrow-left me-2"></i>View All Positions
        </a>
    </div>
</div>

                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<style>
    .btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
    }

    .btn-outline-primary:hover {
        background: #326D78 !important;
        color: white !important;
        border-color: #326D78 !important;
    }

    .breadcrumb-item + .breadcrumb-item::before {
        content: "›";
        color: #6c757d;
        font-weight: bold;
    }

    section[data-aos] {
        z-index: 1 !important;
        position: relative;
    }

    /* Card hover effects */
    div[style*="border-radius: 20px"]:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 45px rgba(0,0,0,0.12) !important;
        transition: all 0.3s ease;
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        .container h1 {
            font-size: 2.2rem !important;
        }

        .col-sm-6 {
            margin-bottom: 1rem;
        }

        .btn {
            width: 100%;
            margin-bottom: 0.5rem;
        }
    }
</style>

@endsection
