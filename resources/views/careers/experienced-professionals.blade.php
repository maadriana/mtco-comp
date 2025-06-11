@extends('layouts.app')

@section('title', 'Experienced Professionals - Careers')

@section('content')

<!-- Split Screen Hero Section -->
<div style="position: relative; margin-top: -1.5rem; min-height: 500px; display: flex; align-items: center;">

    <!-- Left Side - Content -->
    <div style="flex: 1; background: #326D78; padding: 80px 60px; color: white; position: relative; overflow: hidden;">
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
                    <li class="breadcrumb-item active" aria-current="page" style="color: #6c757d; font-weight: 500;">Experienced Professionals</li>
                </ol>
            </nav>
        </div>

  <!-- Decorative Elements -->
        <div style="position: absolute; top: -100px; right: -100px; width: 200px; height: 200px; border: 3px solid rgba(255,255,255,0.1); border-radius: 50%; transform: rotate(45deg);"></div>
        <div style="position: absolute; bottom: -50px; left: -50px; width: 150px; height: 150px; background: rgba(255,255,255,0.05); border-radius: 50%;"></div>

        <div style="max-width: 400px; position: relative; z-index: 2;">
            <div style="background: rgba(255,255,255,0.1); padding: 1rem; border-radius: 50px; display: inline-block; margin-bottom: 2rem;">
                <i class="fas fa-user-tie" style="font-size: 2rem;"></i>
            </div>
            <h1 style="font-size: 3.0rem; font-weight: 700; margin-bottom: 1.5rem; line-height: 1.2; color: white;">
                Experienced<br>Professionals
            </h1>
            <p style="font-size: 1.2rem; opacity: 0.9; line-height: 1.6; margin-bottom: 2rem; color: white;">
                A career with Mendoza Tugano & Co. is more than just a job; it opens doors to a wealth of opportunities.
            </p>
            <div style="display: flex; gap: 1rem;">
                <div style="text-align: center;">
                    <h3 style="font-size: 1.8rem; font-weight: 700; margin-bottom: 0.5rem; color: white;">10+</h3>
                    <small style="opacity: 0.8; color: white;">Years Experience</small>
                </div>
                <div style="text-align: center;">
                    <h3 style="font-size: 1.8rem; font-weight: 700; margin-bottom: 0.5rem; color: white;">50+</h3>
                    <small style="opacity: 0.8; color: white;">Team Members</small>
                </div>
                <div style="text-align: center;">
                    <h3 style="font-size: 1.8rem; font-weight: 700; margin-bottom: 0.5rem; color: white;">∞</h3>
                    <small style="opacity: 0.8; color: white;">Growth Potential</small>
                </div>
            </div>
        </div>
    </div>

    <!-- Right Side - Image -->
    <div style="flex: 1; background: url('{{ asset('assets/img/job-accounting.jpg') }}') center/cover; min-height: 560px; position: relative;">
        <div style="position: absolute; inset: 0; background: rgba(0,0,0,0.2);"></div>
    </div>
</div>

<!-- Content Section with Cards -->
<section class="py-5" style="background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">

                <!-- Why Choose Us Section -->
                <div class="text-center mb-5" data-aos="fade-up">
                    <h2 style="color: #333; font-weight: 600; font-size: 2.5rem; margin-bottom: 3rem;">
                        Why Choose Mendoza Tugano & Co.?
                    </h2>
                </div>

                <!-- Feature Cards -->
                <div class="row gy-4 mb-5">

                    <!-- Professionalism Card -->
                    <div class="col-md-6" data-aos="fade-right" data-aos-delay="100">
                        <div class="feature-card" style="background: white; padding: 2.5rem; border-radius: 20px; height: 100%; box-shadow: 0 10px 30px rgba(0,0,0,0.1); border-left: 5px solid #326D78;">
                            <div style="background: linear-gradient(135deg, #44c7de, #4a8a96); width: 70px; height: 70px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem;">
                                <i class="fas fa-handshake" style="font-size: 1.8rem; color: white;"></i>
                            </div>
                            <h4 style="color: #326D78; font-weight: 600; margin-bottom: 1rem;">Professionalism</h4>
                            <p style="color: #666; line-height: 1.7; margin: 0;">
                                Professionalism and positive people relationships are characteristics we look for in the individuals to be part of our service team.
                            </p>
                        </div>
                    </div>

                    <!-- Growth Opportunities Card -->
                    <div class="col-md-6" data-aos="fade-left" data-aos-delay="200">
                        <div class="feature-card" style="background: white; padding: 2.5rem; border-radius: 20px; height: 100%; box-shadow: 0 10px 30px rgba(0,0,0,0.1); border-left: 5px solid #326D78;">
                            <div style="background: linear-gradient(135deg, #44c7de, #4a8a96); width: 70px; height: 70px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem;">
                                <i class="fas fa-chart-line" style="font-size: 1.8rem; color: white;"></i>
                            </div>
                            <h4 style="color: #326D78; font-weight: 600; margin-bottom: 1rem;">Career Growth</h4>
                            <p style="color: #666; line-height: 1.7; margin: 0;">
                                If you possess the characteristics we value, Mendoza Tugano & Co. might be your opportunity to make a rewarding career change.
                            </p>
                        </div>
                    </div>

                </div>

                <!-- Services Preview Section -->
                <div class="text-center mb-4" data-aos="fade-up" data-aos-delay="300">
                    <h3 style="color: #333; font-weight: 600; margin-bottom: 2rem;">Experience the Difference</h3>
                    <p style="font-size: 1.2rem; color: #666; max-width: 600px; margin: 0 auto 3rem; line-height: 1.6;">
                        Experience the difference with Mendoza Tugano & Co. Take a look at our services and discover the opportunities that await you.
                    </p>
                </div>

                <!-- Services Grid -->
                <div class="row gy-3 mb-5" data-aos="fade-up" data-aos-delay="400">
                    <div class="col-md-4">
                        <div class="service-pill" style="background: rgba(50, 109, 120, 0.1); padding: 1rem 1.5rem; border-radius: 25px; text-align: center; transition: all 0.3s ease;">
                            <a href="{{ route('services.audit') }}" style="text-decoration: none; color: #326D78; font-weight: 600;">
                                <i class="fas fa-search-dollar me-2"></i>Audit and Assurance
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service-pill" style="background: rgba(50, 109, 120, 0.1); padding: 1rem 1.5rem; border-radius: 25px; text-align: center; transition: all 0.3s ease;">
                            <a href="{{ route('services.advisory') }}" style="text-decoration: none; color: #326D78; font-weight: 600;">
                                <i class="fas fa-lightbulb me-2"></i>Business Advisory
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service-pill" style="background: rgba(50, 109, 120, 0.1); padding: 1rem 1.5rem; border-radius: 25px; text-align: center; transition: all 0.3s ease;">
                            <a href="{{ route('services.outsourcing') }}" style="text-decoration: none; color: #326D78; font-weight: 600;">
                                <i class="fas fa-users me-2"></i>Outsourcing
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service-pill" style="background: rgba(50, 109, 120, 0.1); padding: 1rem 1.5rem; border-radius: 25px; text-align: center; transition: all 0.3s ease;">
                            <a href="{{ route('services.restructuring') }}" style="text-decoration: none; color: #326D78; font-weight: 600;">
                                <i class="fas fa-project-diagram me-2"></i>Business Restructuring
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service-pill" style="background: rgba(50, 109, 120, 0.1); padding: 1rem 1.5rem; border-radius: 25px; text-align: center; transition: all 0.3s ease;">
                            <a href="{{ route('services.finance') }}" style="text-decoration: none; color: #326D78; font-weight: 600;">
                                <i class="fas fa-chart-pie me-2"></i>Corporate Finance
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="service-pill" style="background: rgba(50, 109, 120, 0.1); padding: 1rem 1.5rem; border-radius: 25px; text-align: center; transition: all 0.3s ease;">
                            <a href="{{ route('services.taxation') }}" style="text-decoration: none; color: #326D78; font-weight: 600;">
                                <i class="fas fa-calculator me-2"></i>Taxation
                            </a>
                        </div>
                    </div>
                </div>

                <!-- CTA Section -->
                <div class="text-center" data-aos="fade-up" data-aos-delay="500">
                    <div style="background: white; padding: 3rem 2rem; border-radius: 20px; box-shadow: 0 15px 40px rgba(0,0,0,0.1); border: 2px solid #326D78;">
                        <i class="fas fa-envelope" style="font-size: 3rem; color: #326D78; margin-bottom: 1.5rem;"></i>
                        <h3 style="color: #333; font-weight: 700; margin-bottom: 1rem;">Ready to Make the Change?</h3>
                        <p style="color: #666; margin-bottom: 2rem; font-size: 1.1rem;">
                            Join our team of experienced professionals and take your career to the next level.
                        </p>
                        <div class="d-flex flex-wrap gap-3 justify-content-center">
                            <a href="#" class="btn btn-lg" style="background: #326D78; color: white; border: none; border-radius: 25px; padding: 0.8rem 2rem; font-weight: 600; transition: all 0.3s ease;">
                                <i class="fas fa-paper-plane me-2"></i>Send Your Resume
                            </a>
                            <a href="{{ route('careers.vacancies') }}" class="btn btn-outline-success btn-lg" style="border-radius: 25px; padding: 0.8rem 2rem; font-weight: 600; transition: all 0.3s ease;">
                                <i class="fas fa-briefcase me-2"></i>View Open Positions
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<style>
    .feature-card {
        transition: all 0.3s ease;
    }

    .feature-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 50px rgba(0, 0, 0, 0.15) !important;
    }

    .service-pill:hover {
        background: #326D78 !important;
        transform: translateY(-3px);
        box-shadow: 0 8px 20px rgba(50, 109, 120, 0.3);
    }

    .service-pill:hover a {
        color: white !important;
    }

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

    @media (max-width: 768px) {
        .split-hero {
            flex-direction: column;
        }
    }
</style>

@endsection
