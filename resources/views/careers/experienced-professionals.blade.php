@extends('layouts.app')

@section('title', 'Experienced Professionals - Careers')

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
                <li class="breadcrumb-item active" aria-current="page" style="color: #6c757d; font-weight: 500;">Experienced Professionals</li>
            </ol>
        </nav>
    </div>

    <!-- Content Container -->
    <div class="container h-100">
        <div class="row h-100 align-items-center">
            <!-- Left Content on Diagonal -->
            <div class="col-lg-7" style="position: relative; z-index: 10;">
                <div style="color: white; padding-right: 2rem;">


                   <h1 style="font-size: 3.2rem; font-weight: 600; margin-bottom: 1.5rem; line-height: 1.2; color: white;">
                 Experienced <span style="font-weight: 500;">Professionals</span>
                    </h1>


                    <p style="font-size: 1.1rem; opacity: 0.9; line-height: 1.6; margin-bottom: 2rem; font-weight: 300; max-width: 500px;">
                        Take your career to the next level with MTC. We value experienced professionals who bring strong expertise, integrity, and a drive to lead.
                    </p>
                </div>
            </div>

            <!-- Right Side - Minimalist -->
            <div class="col-lg-5" style="position: relative; z-index: 5;">
                <div style="text-align: center; color: #64748b; padding: 2rem;">
                    <div style="display: inline-block; width: 120px; height: 120px; background: #326D78; border-radius: 30px; display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem; box-shadow: 0 10px 40px rgba(50, 109, 120, 0.3); transform: rotate(-5deg);">
                        <i class="fas fa-user-tie" style="font-size: 3rem; color: white; transform: rotate(5deg);"></i>
                    </div>
                    <h3 style="font-size: 1.5rem; font-weight: 600; color: #326D78; margin-bottom: 0.5rem;">Experience Excellence</h3>
                    <p style="font-size: 1rem; color: #64748b; margin: 0;">Professional growth awaits</p>
                </div>
            </div>
        </div>
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
<div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
    <div class="feature-card" style="background: white; padding: 2.5rem; border-radius: 20px; height: 100%; box-shadow: 0 10px 30px rgba(0,0,0,0.1); border-left: 5px solid #326D78;">
        <div style="background: linear-gradient(135deg, #44c7de, #4a8a96);  border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem; box-shadow: 0 6px 20px rgba(0,0,0,0.15);">
            <i class="fas fa-handshake" style="font-size: 1.8rem; color: white;"></i>
        </div>
        <h4 style="color: #326D78; font-weight: 600; margin-bottom: 1rem;">Professionalism</h4>
        <p style="color: #666; line-height: 1.7; margin: 0;">
            We uphold the highest standards of conduct in every engagement. At MTC, you’ll work with a team that values ethics, client trust, and professional excellence.
        </p>
    </div>
</div>

<!-- Career Growth Card -->
<div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
    <div class="feature-card" style="background: white; padding: 2.5rem; border-radius: 20px; height: 100%; box-shadow: 0 10px 30px rgba(0,0,0,0.1); border-left: 5px solid #326D78;">
        <div style="background: linear-gradient(135deg, #44c7de, #4a8a96); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem; box-shadow: 0 6px 20px rgba(0,0,0,0.15);">
            <i class="fas fa-chart-line" style="font-size: 1.8rem; color: white;"></i>
        </div>
        <h4 style="color: #326D78; font-weight: 600; margin-bottom: 1rem;">Career Growth</h4>
        <p style="color: #666; line-height: 1.7; margin: 0;">
            We invest in your success. From technical training and mentoring to leadership development and exposure to complex client engagements, MTC offers a platform where you can thrive and advance.
        </p>
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
