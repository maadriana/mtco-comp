@extends('layouts.app')

@section('title', 'Internship Opportunities - Careers')

@section('content')

<!-- Floating Cards Hero Section -->
<div style="position: relative; margin-top: -1.5rem; background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 50%, #dee2e6 100%); min-height: 500px; overflow: hidden;">

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
                <li class="breadcrumb-item active" aria-current="page" style="color: #6c757d; font-weight: 500;">Internship Opportunities</li>
            </ol>
        </nav>
    </div>

    <!-- Floating Background Elements -->
    <div style="position: absolute; top: 100px; right: 100px; width: 120px; height: 120px; background: linear-gradient(135deg, #326D78, #4a8a96); border-radius: 30px; opacity: 0.1; transform: rotate(15deg);"></div>
    <div style="position: absolute; bottom: 150px; left: 80px; width: 80px; height: 80px; background: linear-gradient(135deg, #28a745, #20c997); border-radius: 50%; opacity: 0.15;"></div>
    <div style="position: absolute; top: 200px; left: 200px; width: 60px; height: 60px; background: linear-gradient(135deg, #3af5ec, #4c88bb); border-radius: 20px; opacity: 0.2; transform: rotate(-20deg);"></div>

    <div class="container" style="position: relative; z-index: 2;">
        <div class="row align-items-center justify-content-center" style="min-height: 500px;">
            <div class="col-lg-8 text-center">

                <!-- Main Hero Card -->
                <div style="background: white; padding: 3rem 2rem; border-radius: 25px; box-shadow: 0 20px 60px rgba(0,0,0,0.1); position: relative; overflow: hidden;" data-aos="fade-up">

                    <!-- Card Background Pattern -->
                    <div style="position: absolute; top: -30px; right: -30px; width: 100px; height: 100px; background: linear-gradient(135deg, #326D78, #4a8a96); border-radius: 50%; opacity: 0.05;"></div>

                    <div style="position: relative; z-index: 2;">
                        <!-- Icon with Animation -->
                        <div style="background: linear-gradient(135deg, #326D78, #4a8a96); width: 100px; height: 100px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 2rem; box-shadow: 0 10px 30px rgba(50, 109, 120, 0.3);">
                            <i class="fas fa-user-graduate" style="font-size: 2.5rem; color: white;"></i>
                        </div>

                        <h1 style="font-size: 2.8rem; font-weight: 750; margin-bottom: 1.5rem; color: #333; line-height: 1.2;">
                            Internship<br>Opportunities
                        </h1>

                        <p style="font-size: 1.3rem; color: #666; margin-bottom: 2rem; line-height: 1.6;">
                            Are you passionate, creative, and enthusiastic?<br>
                            Do you want to learn more about business?
                        </p>

                        <!-- Quick Stats -->
                        <div class="row text-center mt-4">
                            <div class="col-4">
                                <div style="background: #f8f9fa; padding: 1rem; border-radius: 15px;">
                                    <h4 style="color: #326D78; font-weight: 700; margin-bottom: 0.5rem;">3-6</h4>
                                    <small style="color: #666;">Months Duration</small>
                                </div>
                            </div>
                            <div class="col-4">
                                <div style="background: #f8f9fa; padding: 1rem; border-radius: 15px;">
                                    <h4 style="color: #326D78; font-weight: 700; margin-bottom: 0.5rem;">Real</h4>
                                    <small style="color: #666;">Work Experience</small>
                                </div>
                            </div>
                            <div class="col-4">
                                <div style="background: #f8f9fa; padding: 1rem; border-radius: 15px;">
                                    <h4 style="color: #326D78; font-weight: 700; margin-bottom: 0.5rem;">Pro</h4>
                                    <small style="color: #666;">Mentorship</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Experience Timeline Section -->
<section class="py-5" style="background: white;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">

                <!-- Section Header -->
                <div class="text-center mb-5" data-aos="fade-up">
                    <h2 style="color: #333; font-weight: 700; font-size: 2.5rem; margin-bottom: 1rem;">
                        Your Internship Journey
                    </h2>
                    <div style="width: 100px; height: 4px; background: linear-gradient(135deg, #326D78, #4a8a96); margin: 0 auto; border-radius: 2px;"></div>
                </div>

                <!-- Timeline Steps -->
                <div class="row gy-4">

                    <!-- Step 1: Experience -->
                    <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
                        <div style="background: linear-gradient(135deg, #326D78, #74d3e3); color: white; padding: 2.5rem; border-radius: 25px; height: 100%; position: relative; overflow: hidden;">
                            <!-- Background Pattern -->
                            <div style="position: absolute; top: -40px; right: -40px; width: 120px; height: 120px; border: 2px solid rgba(255,255,255,0.1); border-radius: 50%;"></div>

                            <div style="position: relative; z-index: 2;">
                                <div style="background: rgba(255,255,255,0.2); width: 60px; height: 60px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem;">
                                    <span style="font-size: 1.5rem; font-weight: 700; color: white;">1</span>
                                </div>
                                <h4 style="font-weight: 700; margin-bottom: 1rem; color: white;">Gain Real Experience</h4>
                                <p style="margin: 0; line-height: 1.6; opacity: 0.95;">
                                    We provide you the opportunity to experience actual work life and gain insights into the accounting profession and the chance to work with our outstanding professionals.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Step 2: Learning -->
                    <div class="col-lg-6" data-aos="fade-left" data-aos-delay="200">
                        <div style="background: linear-gradient(135deg, #326D78, #74d3e3); color: white; padding: 2.5rem; border-radius: 25px; height: 100%; position: relative; overflow: hidden;">
                            <!-- Background Pattern -->
                            <div style="position: absolute; top: -40px; right: -40px; width: 120px; height: 120px; border: 2px solid rgba(255,255,255,0.1); border-radius: 50%;"></div>

                            <div style="position: relative; z-index: 2;">
                                <div style="background: rgba(255,255,255,0.2); width: 60px; height: 60px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem;">
                                    <span style="font-size: 1.5rem; font-weight: 700; color: white;">2</span>
                                </div>
                                <h4 style="font-weight: 700; margin-bottom: 1rem; color: white;">Learn & Develop</h4>
                                <p style="margin: 0; line-height: 1.6; opacity: 0.95;">
                                    As part of our internship programs, you will attend regular internal learning and development courses, as well as social events throughout the year.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Application Process Section -->
                <div class="text-center mt-5" data-aos="fade-up" data-aos-delay="300">
                    <div style="background: #f8f9fa; padding: 3rem 2rem; border-radius: 25px; border: 3px dashed #326D78; position: relative;">

                        <!-- Decorative Elements -->
                        <div style="position: absolute; top: 20px; left: 20px; width: 40px; height: 40px; background: #326D78; border-radius: 50%; opacity: 0.1;"></div>
                        <div style="position: absolute; bottom: 20px; right: 20px; width: 60px; height: 60px; background: #28a745; border-radius: 30px; opacity: 0.1; transform: rotate(15deg);"></div>

                        <div style="position: relative; z-index: 2;">
                            <div style="background: linear-gradient(135deg, #ffc107, #fd7e14); width: 80px; height: 80px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 2rem;">
                                <i class="fas fa-paper-plane" style="font-size: 2rem; color: white;"></i>
                            </div>

                            <h3 style="color: #333; font-weight: 700; margin-bottom: 1rem; font-size: 2rem;">Ready to Apply?</h3>
                            <p style="color: #666; margin-bottom: 2rem; font-size: 1.1rem; max-width: 600px; margin-left: auto; margin-right: auto;">
                                During the selection process, we evaluate not only based on academic results, but also consider a combination of other competencies.
                            </p>

                            <!-- Contact Box -->
                            <div style="background: white; padding: 2rem; border-radius: 20px; margin-bottom: 2rem; box-shadow: 0 5px 20px rgba(0,0,0,0.1);">
                                <h5 style="color: #326D78; font-weight: 600; margin-bottom: 1rem;">Send Your Application</h5>
                                <p style="margin-bottom: 1rem; color: #666;">
                                    Please send a copy of your curriculum vitae to<br>
                                    <strong>Admin and Human Resources</strong>
                                </p>
                                <a href="mailto:hr@mtco.com.ph" style="color: #326D78; text-decoration: none; font-weight: 600; font-size: 1.2rem;">
                                    <i class="fas fa-envelope me-2"></i>hr@mtco.com.ph
                                </a>
                            </div>

                            <!-- Action Buttons -->
                            <div class="d-flex flex-wrap gap-3 justify-content-center">
                                <a href="mailto:hr@mtco.com.ph" class="btn btn-lg" style="background: linear-gradient(135deg, #326D78, #4a8a96); color: white; border: none; border-radius: 25px; padding: 1rem 2.5rem; font-weight: 600; transition: all 0.3s ease;">
                                    <i class="fas fa-send me-2"></i>Apply Now
                                </a>
                                <a href="{{ route('careers.vacancies') }}" class="btn btn-outline-success btn-lg" style="border-radius: 25px; padding: 1rem 2.5rem; font-weight: 600; transition: all 0.3s ease;">
                                    <i class="fas fa-briefcase me-2"></i>View All Opportunities
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

    .breadcrumb-item + .breadcrumb-item::before {
        content: "›";
        color: #6c757d;
        font-weight: bold;
    }

    section[data-aos] {
        z-index: 1 !important;
        position: relative;
    }

    /* Floating animation for background elements */
    @keyframes float {
        0%, 100% { transform: translateY(0px) rotate(15deg); }
        50% { transform: translateY(-10px) rotate(15deg); }
    }

    /* Add subtle animations to decorative elements */
    div[style*="transform: rotate(15deg)"]:first-of-type {
        animation: float 6s ease-in-out infinite;
    }

    div[style*="transform: rotate(-20deg)"] {
        animation: float 8s ease-in-out infinite reverse;
    }
</style>

@endsection
