@extends('layouts.app')

@section('title', 'How to Apply - Careers')

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
                <li class="breadcrumb-item active" aria-current="page" style="color: #6c757d; font-weight: 500;">How to Apply</li>
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
                        How to <span style="font-weight: 500;">Apply</span>
                   </h1>

                    <p class="header-description" style="font-size: 1.1rem; opacity: 0.9; line-height: 1.6; margin-bottom: 2rem; font-weight: 300; max-width: 500px; color: white">
                        Ready to join our team? Applying is easy.
                    </p>
                </div>
            </div>

            <!-- Right Side - Minimalist -->
            <div class="col-lg-5 col-md-4 col-12" style="position: relative; z-index: 5;">
                <div class="header-icon-section" style="text-align: center; color: #64748b; padding: 2rem;">
                    <div style="display: inline-block; width: 120px; height: 120px; background: #326D78; border-radius: 30px; display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem; box-shadow: 0 10px 40px rgba(50, 109, 120, 0.3); transform: rotate(-5deg);">
                        <i class="fas fa-clipboard-list" style="font-size: 3rem; color: white; transform: rotate(5deg);"></i>
                    </div>
                    <h3 style="font-size: 1.5rem; font-weight: 600; color: #326D78; margin-bottom: 0.5rem;">Start Your Journey</h3>
                    <p style="font-size: 1rem; color: #64748b; margin: 0;">Three simple steps</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Main Content Section -->
<section class="py-5" style="background: #f8f9fa;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">

                <!-- Step 1 -->
                <div class="mb-5" data-aos="fade-up">
                    <div style="background: white; padding: 2.5rem; border-radius: 15px; box-shadow: 0 5px 25px rgba(0,0,0,0.08);">
                        <div class="d-flex align-items-center mb-3">
                            <div style="background: #326D78; color: white; width: 45px; height: 45px; border-radius: 8px; display: flex; align-items: center; justify-content: center; margin-right: 1rem;">
                                <span style="font-size: 1.3rem; font-weight: 700;">1</span>
                            </div>
                            <h3 style="color: #333; font-weight: 700; margin: 0; font-size: 1.5rem;">Prepare your application documents:</h3>
                        </div>

                        <div class="ms-4">
                            <ul style="color: #555; font-size: 1rem; line-height: 1.8; margin: 0; padding-left: 1.2rem;">
                                <li style="margin-bottom: 0.5rem;">Updated resume</li>
                                <li style="margin-bottom: 0.5rem;">Cover letter (optional but recommended)</li>
                                <li style="margin-bottom: 0.5rem;">Transcript of records (for fresh grads or students)</li>
                                <li style="margin-bottom: 0.5rem;">Government-issued numbers: TIN, SSS, Pag-IBIG (HDMF), and PhilHealth (PHIC)</li>
                                <li style="margin-bottom: 0;">Valid NBI Clearance</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Step 2 -->
                <div class="mb-5" data-aos="fade-up" data-aos-delay="100">
                    <div style="background: white; padding: 2.5rem; border-radius: 15px; box-shadow: 0 5px 25px rgba(0,0,0,0.08);">
                        <div class="d-flex align-items-center mb-3">
                            <div style="background: #326D78; color: white; width: 45px; height: 45px; border-radius: 8px; display: flex; align-items: center; justify-content: center; margin-right: 1rem;">
                                <span style="font-size: 1.3rem; font-weight: 700;">2</span>
                            </div>
                            <h3 style="color: #333; font-weight: 700; margin: 0; font-size: 1.5rem;">Submit your application through either of the following:</h3>
                        </div>

                        <div class="ms-4">
                            <div style="background: #f8f9fa; padding: 1.5rem; border-radius: 10px; border-left: 4px solid #326D78;">
                                <p style="margin-bottom: 0.5rem; color: #555; font-size: 1rem;">
                                    <strong>Email:</strong> <a href="mailto:career@mtco.com.ph" style="color: #326D78; text-decoration: none; font-weight: 600; font-style: italic;">career@mtco.com.ph</a>
                                </p>
                                <p style="margin: 0; color: #666; font-size: 0.9rem;">
                                    Use the subject line: <em>[Your Name] – Application for [Position]</em><br>
                                    <small>(e.g., Juan Dela Cruz – Application for External Audit Associate)</small>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Step 3 -->
                <div class="mb-5" data-aos="fade-up" data-aos-delay="200">
                    <div style="background: white; padding: 2.5rem; border-radius: 15px; box-shadow: 0 5px 25px rgba(0,0,0,0.08);">
                        <div class="d-flex align-items-center mb-3">
                            <div style="background: #326D78; color: white; width: 45px; height: 45px; border-radius: 8px; display: flex; align-items: center; justify-content: center; margin-right: 1rem;">
                                <span style="font-size: 1.3rem; font-weight: 700;">3</span>
                            </div>
                            <h3 style="color: #333; font-weight: 700; margin: 0; font-size: 1.5rem;">Wait for a response from our recruitment team.</h3>
                        </div>

                        <div class="ms-4">
                            <p style="color: #555; font-size: 1rem; margin: 0; line-height: 1.6;">
                                Shortlisted candidates will be contacted for an interview.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Call to Action -->
                <div class="text-center" data-aos="fade-up" data-aos-delay="300">
                    <div style="background: linear-gradient(135deg, #6dadb9, #6b9bae); color: white; padding: 3rem 2rem; border-radius: 20px; position: relative; overflow: hidden;">

                        <!-- Background decoration -->
                        <div style="position: absolute; top: -20px; right: -20px; width: 100px; height: 100px; background: rgba(255,255,255,0.1); border-radius: 50%; opacity: 0.5;"></div>
                        <div style="position: absolute; bottom: -30px; left: -30px; width: 80px; height: 80px; background: rgba(255,255,255,0.05); border-radius: 50%;"></div>

                        <div style="position: relative; z-index: 2;">
                            <i class="fas fa-paper-plane" style="font-size: 2.5rem; margin-bottom: 1.5rem; opacity: 0.9;"></i>
                            <h3 style="font-weight: 700; margin-bottom: 1rem; font-size: 1.8rem; color: white;">Ready to Get Started?</h3>
                            <p style="margin-bottom: 2rem; font-size: 1.1rem; opacity: 0.9; max-width: 500px; margin-left: auto; margin-right: auto;">
                                Take the first step towards joining our team. We're excited to hear from you!
                            </p>

                            <div class="d-flex flex-wrap gap-3 justify-content-center">
                                <a href="mailto:career@mtco.com.ph" class="btn btn-lg" style="background: white; color: #326D78; border: none; border-radius: 25px; padding: 1rem 2rem; font-weight: 600; transition: all 0.3s ease;">
                                    <i class="fas fa-envelope me-2"></i>Send Your Application
                                </a>
                                <a href="{{ route('careers.vacancies') }}" class="btn btn-outline-light btn-lg" style="border-radius: 25px; padding: 1rem 2rem; font-weight: 600; transition: all 0.3s ease; border-color: white; color: white;">
                                    <i class="fas fa-briefcase me-2"></i>View Open Positions
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
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
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
    @media (min-width: 1301px) {
    .breadcrumb-container {
        top: 22px !important;
        left: 30px !important;
    }
}
</style>

@endsection
