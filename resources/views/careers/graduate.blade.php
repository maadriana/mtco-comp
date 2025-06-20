@extends('layouts.app')

@section('title', 'Graduate - Careers')

@section('content')

<!-- Unique Diagonal Header Design -->
<div style="position: relative; margin-top: -1.5rem; background: white; padding: 0; overflow: hidden; height: 400px;">

    <!-- Diagonal Background Sections -->
    <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0;">
        <!-- Main diagonal section -->
        <div style="position: absolute; top: 0; left: 0; width: 70%; height: 100%; background: linear-gradient(135deg, #326D78 0%, #4a9aba 100%); clip-path: polygon(0 0, 100% 0, 85% 100%, 0 100%); z-index: 2;"></div>

        <!-- Secondary diagonal accent -->
        <div style="position: absolute; top: 0; right: 0; width: 40%; height: 100%; background: linear-gradient(135deg, #e2e8f0 0%, #f8fafc 100%); clip-path: polygon(20% 0, 100% 0, 100% 100%, 0 100%); z-index: 1;"></div>

        <!-- Floating geometric elements -->
        <div style="position: absolute; top: 15%; right: 15%; width: 80px; height: 80px; background: #4a9aba; transform: rotate(45deg); opacity: 0.7; z-index: 3;"></div>
        <div style="position: absolute; bottom: 20%; right: 25%; width: 60px; height: 60px; background: #326D78; border-radius: 50%; opacity: 0.5; z-index: 3;"></div>
        <div style="position: absolute; top: 50%; right: 8%; width: 40px; height: 40px; background: #4a9aba; transform: rotate(45deg); opacity: 0.6; z-index: 3;"></div>
    </div>

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
                <li class="breadcrumb-item active" aria-current="page" style="color: #6c757d; font-weight: 500;">Graduate</li>
            </ol>
        </nav>
    </div>

    <!-- Content Container -->
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <!-- Left Content on Diagonal -->
            <div class="col-lg-7" style="position: relative; z-index: 10;">
                <div style="color: white; padding-right: 2rem;">
                    <div style="display: inline-block; background: rgba(255,255,255,0.15); padding: 0.5rem 1.5rem; border-radius: 25px; margin-bottom: 1.5rem; backdrop-filter: blur(10px);">
                        <small style="font-weight: 600; text-transform: uppercase; letter-spacing: 1px;">Start Your Journey</small>
                    </div>

                    <h1 style="font-size: 3.2rem; font-weight: 600; margin-bottom: 1.5rem; line-height: 1.2;  color: white">
                        Graduate<br>
                        <span style="font-weight: 300; color: white;">Program</span>
                    </h1>

                    <p style="font-size: 1.1rem; opacity: 0.9; line-height: 1.6; margin-bottom: 2rem; font-weight: 300; max-width: 500px;">
                        Are you ready to explore a world of opportunities and kick-start your professional career?
                    </p>

                    <!-- Inline Stats -->
                    <div class="d-flex align-items-center gap-4 flex-wrap">
                        <div class="d-flex align-items-center">
                            <div style="width: 50px; height: 50px; background: rgba(255,255,255,0.2); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 0.75rem;">
                                <i class="fas fa-graduation-cap" style="color: white; font-size: 1.2rem;"></i>
                            </div>
                            <div>
                                <h4 style="font-size: 1.5rem; font-weight: 700; margin: 0;  color: white">Fresh</h4>
                                <small style="opacity: 0.8;">Graduates</small>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div style="width: 50px; height: 50px; background: rgba(255,255,255,0.2); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 0.75rem;">
                                <i class="fas fa-rocket" style="color: white; font-size: 1.2rem;"></i>
                            </div>
                            <div>
                                <h4 style="font-size: 1.5rem; font-weight: 700; margin: 0; color: white">Fast</h4>
                                <small style="opacity: 0.8;">Track Learning</small>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div style="width: 50px; height: 50px; background: rgba(255,255,255,0.2); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 0.75rem;">
                                <i class="fas fa-globe" style="color: white; font-size: 1.2rem;"></i>
                            </div>
                            <div>
                                <h4 style="font-size: 1.5rem; font-weight: 700; margin: 0; color: white">Global</h4>
                                <small style="opacity: 0.8;">Opportunities</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Side - Minimalist -->
            <div class="col-lg-5" style="position: relative; z-index: 5;">
                <div style="text-align: center; color: #64748b; padding: 2rem;">
                    <div style="display: inline-block; width: 120px; height: 120px; background: #326D78; border-radius: 30px; display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem; box-shadow: 0 10px 40px rgba(50, 109, 120, 0.3); transform: rotate(-5deg);">
                        <i class="fas fa-graduation-cap" style="font-size: 3rem; color: white; transform: rotate(5deg);"></i>
                    </div>
                    <h3 style="font-size: 1.5rem; font-weight: 600; color: #326D78; margin-bottom: 0.5rem;">Begin Your Future</h3>
                    <p style="font-size: 1rem; color: #64748b; margin: 0;">Excellence starts here</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Value Propositions Section -->
<section class="py-5" style="background: #f8f9fa;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">

                <!-- Intro Text -->
                <div class="text-center mb-5" data-aos="fade-up">
                    <h2 style="color: #333; font-weight: 700; font-size: 2.5rem; margin-bottom: 1rem;">
                        Why Choose Our Graduate Program?
                    </h2>
                    <div style="width: 80px; height: 4px; background: #326D78; margin: 0 auto; border-radius: 2px;"></div>
                </div>

                <!-- Value Props Grid -->
                <div class="row gy-4 mb-5">

                    <!-- Learning & Development -->
                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="value-card" style="background: linear-gradient(135deg, #2183d3, #7ebbec); color: white; padding: 2.5rem; border-radius: 25px; height: 100%; position: relative; overflow: hidden;">
                            <!-- Background Pattern -->
                            <div style="position: absolute; top: -20px; right: -20px; width: 100px; height: 100px; background: rgba(255,255,255,0.1); border-radius: 50%; opacity: 0.3;"></div>
                            <div style="position: absolute; bottom: -30px; left: -30px; width: 80px; height: 80px; background: rgba(255,255,255,0.05); border-radius: 50%;"></div>

                            <div style="position: relative; z-index: 2;">
                                <i class="fas fa-book-open" style="font-size: 2.5rem; margin-bottom: 1.5rem;"></i>
                                <h4 style="font-weight: 700; margin-bottom: 1rem; color: white;">You Value Learning</h4>
                                <p style="margin: 0; line-height: 1.6; opacity: 0.95;">
                                    Mendoza Tugano & Co. offers you a tailor-made program focused on maximizing your learning and development so you get to where you want to be faster and more effectively.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Global Opportunities -->
                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="value-card" style="background: linear-gradient(135deg, #2183d3, #7ebbec); color: white; padding: 2.5rem; border-radius: 25px; height: 100%; position: relative; overflow: hidden;">
                            <!-- Background Pattern -->
                            <div style="position: absolute; top: -20px; right: -20px; width: 100px; height: 100px; background: rgba(255,255,255,0.1); border-radius: 50%; opacity: 0.3;"></div>
                            <div style="position: absolute; bottom: -30px; left: -30px; width: 80px; height: 80px; background: rgba(255,255,255,0.05); border-radius: 50%;"></div>

                            <div style="position: relative; z-index: 2;">
                                <i class="fas fa-globe-americas" style="font-size: 2.5rem; margin-bottom: 1.5rem;"></i>
                                <h4 style="font-weight: 700; margin-bottom: 1rem; color: white;">Work Abroad</h4>
                                <p style="margin: 0; line-height: 1.6; opacity: 0.95;">
                                    Mendoza Tugano & Co. not only aims to deliver value to our clients, but also to enrich your experience with us, both professionally and personally.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Renowned Clients -->
                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="value-card" style="background: linear-gradient(135deg, #2183d3, #7ebbec); color: white; padding: 2.5rem; border-radius: 25px; height: 100%; position: relative; overflow: hidden;">
                            <!-- Background Pattern -->
                            <div style="position: absolute; top: -20px; right: -20px; width: 100px; height: 100px; background: rgba(255,255,255,0.1); border-radius: 50%; opacity: 0.3;"></div>
                            <div style="position: absolute; bottom: -30px; left: -30px; width: 80px; height: 80px; background: rgba(255,255,255,0.05); border-radius: 50%;"></div>

                            <div style="position: relative; z-index: 2;">
                                <i class="fas fa-building" style="font-size: 2.5rem; margin-bottom: 1.5rem;"></i>
                                <h4 style="font-weight: 700; margin-bottom: 1rem; color: white;">Renowned Clients</h4>
                                <p style="margin: 0; line-height: 1.6; opacity: 0.95;">
                                    Mendoza Tugano & Co. seeks out the latest and best solutions for our top tier clients who are renowned and successful organisations.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Work Culture -->
                    <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="value-card" style="background: linear-gradient(135deg, #2183d3, #7ebbec); color: white; padding: 2.5rem; border-radius: 25px; height: 100%; position: relative; overflow: hidden;">
                            <!-- Background Pattern -->
                            <div style="position: absolute; top: -20px; right: -20px; width: 100px; height: 100px; background: rgba(255,255,255,0.1); border-radius: 50%; opacity: 0.3;"></div>
                            <div style="position: absolute; bottom: -30px; left: -30px; width: 80px; height: 80px; background: rgba(255,255,255,0.05); border-radius: 50%;"></div>

                            <div style="position: relative; z-index: 2;">
                                <i class="fas fa-smile" style="font-size: 2.5rem; margin-bottom: 1.5rem;"></i>
                                <h4 style="font-weight: 700; margin-bottom: 1rem; color: white;">Have Fun!</h4>
                                <p style="margin: 0; line-height: 1.6; opacity: 0.95;">
                                    Work hard, play hard. Mendoza Tugano & Co. will expect a lot from you, but you will get a lot back. Experience our open and friendly culture.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Contact Section -->
                <div class="text-center" data-aos="fade-up" data-aos-delay="300">
                    <div style="background: white; padding: 4rem 3rem; border-radius: 30px; box-shadow: 0 20px 60px rgba(0,0,0,0.1); border: 3px solid #326D78; position: relative; overflow: hidden;">

                        <!-- Background Decoration -->
                        <div style="position: absolute; top: -50px; right: -50px; width: 150px; height: 150px; background: linear-gradient(135deg, #326D78, #4a8a96); border-radius: 50%; opacity: 0.1;"></div>
                        <div style="position: absolute; bottom: -30px; left: -30px; width: 100px; height: 100px; background: linear-gradient(135deg, #326D78, #4a8a96); border-radius: 50%; opacity: 0.05;"></div>

                        <div style="position: relative; z-index: 2;">
                            <div style="background: linear-gradient(135deg, #326D78, #4a8a96); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 2rem;">
                                <i class="fas fa-paper-plane" style="font-size: 2rem; color: white;"></i>
                            </div>

                            <h3 style="color: #333; font-weight: 700; margin-bottom: 1rem; font-size: 2rem;">Ready to Start Your Journey?</h3>
                            <p style="color: #666; margin-bottom: 2.5rem; font-size: 1.2rem; max-width: 500px; margin-left: auto; margin-right: auto; line-height: 1.6;">
                                Join our graduate program and kick-start your career with one of the leading accounting firms in the Philippines.
                            </p>

                            <!-- Contact Information -->
                            <div style="background: #f8f9fa; padding: 2rem; border-radius: 20px; margin-bottom: 2rem;">
                                <h5 style="color: #326D78; font-weight: 600; margin-bottom: 1rem;">Send Your CV</h5>
                                <p style="margin: 0; color: #666;">
                                    Please send a copy of your curriculum vitae to<br>
                                    <a href="mailto:hr@mtco.com.ph" style="color: #326D78; text-decoration: none; font-weight: 600; font-size: 1.1rem;">
                                        <i class="fas fa-envelope me-2"></i>hr@mtco.com.ph
                                    </a>
                                </p>
                            </div>

                            <div class="d-flex flex-wrap gap-3 justify-content-center">
                                <a href="mailto:hr@mtco.com.ph" class="btn btn-lg" style="background: #326D78; color: white; border: none; border-radius: 25px; padding: 1rem 2.5rem; font-weight: 600; transition: all 0.3s ease;">
                                    <i class="fas fa-envelope me-2"></i>Send Resume
                                </a>
                                <a href="{{ route('careers.vacancies') }}" class="btn btn-outline-primary btn-lg" style="border-radius: 25px; padding: 1rem 2.5rem; font-weight: 600; transition: all 0.3s ease; border-color: #326D78; color: #326D78;">
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
    .value-card {
        transition: all 0.4s ease;
    }

    .value-card:hover {
        transform: translateY(-15px) scale(1.02);
        box-shadow: 0 25px 60px rgba(0, 0, 0, 0.2);
    }

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

    /* Responsive adjustments */
    @media (max-width: 768px) {
        .container h1 {
            font-size: 2.5rem !important;
        }

        .container p {
            font-size: 1rem !important;
        }

        .col-lg-5:first-child {
            margin-bottom: 2rem;
        }
    }
</style>

@endsection
