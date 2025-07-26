@extends('layouts.app')

@section('title', 'Corporate Social Responsibility | Mendoza Tugano & Co., CPAs')

@section('content')

<!-- Clean Hero Section -->
<div style="position: relative; margin-top: -1.5rem; background: #f8fafb; min-height: 70vh; display: flex; align-items: center; overflow: hidden;">

<!-- Breadcrumb -->
<div style="position: absolute; top: 20px; left: 70px; z-index: 1; pointer-events: auto; background: rgba(255, 255, 255, 0.95); padding: 10px 20px; border-radius: 6px; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0" style="font-size: 0.9rem;">
            <li class="breadcrumb-item">
                <a href="{{ url('/') }}" style="color: #326D78; text-decoration: none; font-weight: 500; pointer-events: auto;">
                    <i class="fas fa-home me-1"></i>Home
                </a>
            </li>
            <li class="breadcrumb-item">
                <a href="{{ url('/#faq') }}" style="color: #326D78; text-decoration: none; font-weight: 500; pointer-events: auto;">MTC Care</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page" style="color: #6c757d; font-weight: 500;">CSR</li>
        </ol>
    </nav>
</div>

    <!-- Geometric Elements -->
    <div style="position: absolute; top: 15%; right: 8%; width: 120px; height: 120px; background: rgba(50, 109, 120, 0.1); border-radius: 50%; z-index: 1; animation: float1 6s ease-in-out infinite;"></div>
    <div style="position: absolute; top: 60%; left: 12%; width: 80px; height: 80px; background: rgba(91, 163, 176, 0.15); transform: rotate(45deg); border-radius: 20px; z-index: 1; animation: float2 8s ease-in-out infinite;"></div>
    <div style="position: absolute; bottom: 20%; right: 20%; width: 60px; height: 60px; background: rgba(74, 138, 150, 0.2); border-radius: 50%; z-index: 1; animation: float3 7s ease-in-out infinite;"></div>
    <div style="position: absolute; top: 30%; left: 25%; width: 40px; height: 40px; background: rgba(50, 109, 120, 0.25); transform: rotate(30deg); border-radius: 8px; z-index: 1; animation: rotate 20s linear infinite;"></div>

    <!-- Hero Content -->
    <div class="container" style="position: relative; z-index: 2;">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-10">
                <div style="text-align: center; padding: 2rem 0;">
                    <h1 style="font-size: 3.7rem; font-weight: 600; color: #2a2a2a; line-height: 1.1; margin-bottom: 1.5rem; opacity: 0; animation: fadeInUp 1s ease-out 0.3s forwards;">
                        {!! getContent('csr_hero_title', 'Corporate<br><span style="font-weight: 600; color: #326D78;">Social Responsibility</span>') !!}
                    </h1>
                    <p style="font-size: 1.4rem; color: #6c757d; line-height: 1.6; margin-bottom: 2rem; max-width: 600px; margin-left: auto; margin-right: auto; opacity: 0; animation: fadeInUp 1s ease-out 0.6s forwards;">
                        {{ getContent('csr_hero_subtitle', 'At MTC, we believe that true success goes beyond financial results. Through MTC CARE, we are committed to making a positive and lasting impact.') }}
                    </p>
                    <div style="display: flex; gap: 1rem; flex-wrap: wrap; justify-content: center; opacity: 0; animation: fadeInUp 1s ease-out 0.9s forwards;">
                        <a href="#overview" style="background: white; padding: 1rem 1.5rem; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.06); border-left: 4px solid #326D78; transition: all 0.3s ease; text-decoration: none; color: #326D78; font-weight: 600;">
                            <i class="fas fa-lightbulb me-2"></i>{{ getContent('csr_cta_overview', 'Our Philosophy') }}
                        </a>
                        <a href="#programs" style="background: white; padding: 1rem 1.5rem; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.06); border-left: 4px solid #5ba3b0; transition: all 0.3s ease; text-decoration: none; color: #5ba3b0; font-weight: 600;">
                            <i class="fas fa-hands-helping me-2"></i>{{ getContent('csr_cta_programs', 'Our Programs') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- MTC Care Overview -->
<section id="overview" class="py-5" style="background: white; position: relative;">
    <div style="position: absolute; top: 5%; right: 5%; color: rgba(50, 109, 120, 0.05); font-size: 8rem; z-index: 1;">
        <i class="fas fa-quote-right"></i>
    </div>

    <div class="container" style="position: relative; z-index: 2;">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div style="text-align: center; margin-bottom: 4rem;" data-aos="fade-up">
                    <div style="display: inline-flex; align-items: center; background: rgba(50, 109, 120, 0.1); color: #326D78; padding: 0.6rem 1.5rem; border-radius: 25px; font-size: 0.95rem; font-weight: 600; margin-bottom: 2rem;">
                        <i class="fas fa-lightbulb me-2"></i>{{ getContent('csr_overview_badge', 'Our Philosophy') }}
                    </div>
                    <h2 style="font-size: 2.7rem; font-weight: 700; color: #2a2a2a; margin-bottom: 2rem; line-height: 1.2;">
                        {{ getContent('csr_overview_title', 'Beyond Financial Success') }}
                    </h2>
                </div>

                <div style="background: linear-gradient(135deg, #f8fafb 0%, #e9ecef 100%); padding: 4rem 3rem; border-radius: 25px; position: relative; overflow: hidden;" data-aos="fade-up" data-aos-delay="200">
                    <div style="position: absolute; top: -20px; left: -20px; background: #326D78; width: 60px; height: 60px; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                        <i class="fas fa-heart" style="color: white; font-size: 1.5rem;"></i>
                    </div>

                    <div style="max-width: 900px; margin: 0 auto; text-align: center;">
                        <p style="color: #555; font-size: 1.3rem; line-height: 1.8; margin-bottom: 2rem; font-weight: 350;">
                            {{ getContent('csr_overview_paragraph1', 'At MTC, we believe that true success goes beyond financial results. Through MTC CARE, our Corporate Social Responsibility (CSR) initiative, we are committed to making a positive and lasting impact on our communities, our people, and the environment.') }}
                        </p>

                        <div style="background: white; padding: 2rem; border-radius: 15px; border-left: 5px solid #326D78; text-align: left; box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
                            <p style="color: #326D78; font-size: 1.2rem; line-height: 1.7; margin: 0; font-weight: 600; font-style: italic;">
                                {{ getContent('csr_overview_paragraph2', '"MTC CARE is more than a program. It\'s our way of expressing gratitude and giving purpose to our profession."') }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CSR Programs Section -->
<section id="programs" class="py-5" style="background: #f8f9fa; position: relative;">
    <div style="position: absolute; top: 10%; left: 3%; color: rgba(91, 163, 176, 0.08); font-size: 6rem; z-index: 1; transform: rotate(-15deg);">
        <i class="fas fa-seedling"></i>
    </div>

    <div class="container" style="position: relative; z-index: 2;">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-8 text-center">
                <div style="display: inline-flex; align-items: center; background: rgba(50, 109, 120, 0.1); color: #326D78; padding: 0.6rem 1.5rem; border-radius: 25px; font-size: 0.95rem; font-weight: 600; margin-bottom: 2rem;">
                    <i class="fas fa-hands-helping me-2"></i>{{ getContent('csr_programs_badge', 'Our Impact Areas') }}
                </div>
                <h2 style="font-size: 2.7rem; font-weight: 700; color: #2a2a2a; margin-bottom: 1.5rem;">
                    {{ getContent('csr_programs_title', 'How We Make a Difference') }}
                </h2>
                <p style="color: #666; font-size: 1.2rem; line-height: 1.6; max-width: 600px; margin: 0 auto;">
                    {{ getContent('csr_programs_description', 'Our CSR programs reflect our values of service, compassion, and shared growth. We support causes that promote education, environmental sustainability, financial literacy, and community welfare.') }}
                </p>
            </div>
        </div>

        <div class="row g-4">
            <!-- Education Program -->
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <div style="background: white; border-radius: 20px; padding: 3rem; height: 100%; box-shadow: 0 8px 30px rgba(0,0,0,0.08); position: relative; overflow: hidden; transition: all 0.4s ease;">
                    <div style="position: absolute; top: -15px; right: -15px; background: linear-gradient(135deg, #326D78, #5ba3b0); width: 80px; height: 80px; border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 0 4px 15px rgba(50, 109, 120, 0.3);">
                        <i class="fas fa-graduation-cap" style="color: white; font-size: 1.8rem;"></i>
                    </div>

                    <h3 style="color: #326D78; font-weight: 700; margin-bottom: 1.5rem; font-size: 1.8rem;">
                        {{ getContent('csr_education_title', 'Education') }}
                    </h3>

                    <p style="color: #666; margin-bottom: 2rem; line-height: 1.7; font-size: 1.1rem;">
                        {{ getContent('csr_education_description', 'We support causes that promote education and financial literacy through meaningful community partnerships and educational initiatives.') }}
                    </p>

                    <div style="background: linear-gradient(135deg, #f8fafb, #e9ecef); padding: 2rem; border-radius: 15px; border: 2px solid rgba(50, 109, 120, 0.1);">
                        <div style="display: flex; align-items: center; margin-bottom: 1rem;">
                            <i class="fas fa-book" style="color: #326D78; font-size: 1.2rem; margin-right: 0.75rem;"></i>
                            <span style="color: #555; font-weight: 500;">{{ getContent('csr_education_focus', 'Educational outreach and literacy programs') }}</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Environmental Program -->
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                <div style="background: white; border-radius: 20px; padding: 3rem; height: 100%; box-shadow: 0 8px 30px rgba(0,0,0,0.08); position: relative; overflow: hidden; transition: all 0.4s ease;">
                    <div style="position: absolute; top: -15px; right: -15px; background: linear-gradient(135deg, #5ba3b0, #4a8a96); width: 80px; height: 80px; border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 0 4px 15px rgba(91, 163, 176, 0.3);">
                        <i class="fas fa-leaf" style="color: white; font-size: 1.8rem;"></i>
                    </div>

                    <h3 style="color: #5ba3b0; font-weight: 700; margin-bottom: 1.5rem; font-size: 1.8rem;">
                        {{ getContent('csr_environment_title', 'Environmental Sustainability') }}
                    </h3>

                    <p style="color: #666; margin-bottom: 2rem; line-height: 1.7; font-size: 1.1rem;">
                        {{ getContent('csr_environment_description', 'We participate in tree-planting activities and environmental conservation efforts to contribute to a more sustainable future.') }}
                    </p>

                    <div style="background: linear-gradient(135deg, #f8fafb, #e9ecef); padding: 2rem; border-radius: 15px; border: 2px solid rgba(91, 163, 176, 0.1);">
                        <div style="display: flex; align-items: center; margin-bottom: 1rem;">
                            <i class="fas fa-tree" style="color: #5ba3b0; font-size: 1.2rem; margin-right: 0.75rem;"></i>
                            <span style="color: #555; font-weight: 500;">{{ getContent('csr_environment_focus', 'Tree planting and conservation activities') }}</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Community Welfare Program -->
            <div class="col-lg-12" data-aos="fade-up" data-aos-delay="300">
                <div style="background: linear-gradient(135deg, #326D78, #5ba3b0); color: white; border-radius: 20px; padding: 4rem 3rem; position: relative; overflow: hidden;">
                    <div style="position: absolute; top: 50%; right: 5%; transform: translateY(-50%); color: rgba(255,255,255,0.1); font-size: 8rem; z-index: 1;">
                        <i class="fas fa-hands-helping"></i>
                    </div>

                    <div style="position: relative; z-index: 2; max-width: 800px;">
                        <div style="display: flex; align-items: center; margin-bottom: 2rem;">
                            <div style=" background: rgba(255,255,255,0.2); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 2rem;">
                                <i class="fas fa-heart" style="color: white; font-size: 2rem;"></i>
                            </div>
                            <h3 style="color: white; font-weight: 700; margin: 0; font-size: 2.1rem;">
                                {{ getContent('csr_community_title', 'Community Welfare') }}
                            </h3>
                        </div>

                        <p style="color: rgba(255,255,255,0.95); margin-bottom: 2rem; line-height: 1.7; font-size: 1.2rem;">
                            {{ getContent('csr_community_description', 'Whether it\'s organizing donation drives, participating in tree-planting activities, or supporting local and non-profit communities, we take pride in being a firm that gives back. Through these initiatives, we aim to uplift lives and contribute to a more sustainable and inclusive future.') }}
                        </p>

                        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 1.5rem; margin-top: 2rem;">
                            <div style="background: rgba(255,255,255,0.1); padding: 1.5rem; border-radius: 15px; backdrop-filter: blur(10px);">
                                <i class="fas fa-gift" style="color: white; font-size: 1.5rem; margin-bottom: 1rem;"></i>
                                <div style="color: white; font-weight: 600;">{{ getContent('csr_community_donation', 'Donation Drives') }}</div>
                            </div>
                            <div style="background: rgba(255,255,255,0.1); padding: 1.5rem; border-radius: 15px; backdrop-filter: blur(10px);">
                                <i class="fas fa-users" style="color: white; font-size: 1.5rem; margin-bottom: 1rem;"></i>
                                <div style="color: white; font-weight: 600;">{{ getContent('csr_community_support', 'Non-profit Support') }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .breadcrumb-item + .breadcrumb-item::before {
        content: "›";
        color: #6c757d;
        font-weight: bold;
    }

    /* Smooth Animations */
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes fadeInScale {
        from {
            opacity: 0;
            transform: translateY(-50%) scale(0.8);
        }
        to {
            opacity: 1;
            transform: translateY(-50%) scale(1);
        }
    }

    @keyframes float1 {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-20px); }
    }

    @keyframes float2 {
        0%, 100% { transform: rotate(45deg) translateY(0px); }
        50% { transform: rotate(45deg) translateY(-15px); }
    }

    @keyframes float3 {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-10px); }
    }

    @keyframes rotate {
        from { transform: rotate(30deg); }
        to { transform: rotate(390deg); }
    }

    /* Hero button hover effects */
    div a[href*="#overview"]:hover,
    div a[href*="#programs"]:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 25px rgba(50, 109, 120, 0.2);
    }

    /* Card hover effects */
    .col-lg-6 > div:hover, .col-lg-12 > div:hover {
        transform: translateY(-8px);
        box-shadow: 0 15px 40px rgba(0,0,0,0.15) !important;
    }

    /* Button hover effects */
    section a[href*="contact"]:hover {
        background: #2a5f6a !important;
        transform: translateY(-3px);
        box-shadow: 0 8px 25px rgba(50, 109, 120, 0.4) !important;
    }

    /* Smooth scrolling */
    html {
        scroll-behavior: smooth;
    }

    @media (max-width: 768px) {
        h1 {
            font-size: 3rem !important;
        }

        h2 {
            font-size: 2rem !important;
        }

        /* Hide circular quote on mobile */
        div[style*="position: absolute"][style*="right: 5%"] {
            display: none;
        }

        /* Mobile hero cards adjustments */
        div[style*="display: flex; gap: 1rem; flex-wrap: wrap"] {
            flex-direction: column;
            gap: 1rem !important;
        }

        div[style*="display: flex; gap: 1.5rem"] {
            flex-direction: column;
        }

        div[style*="grid-template-columns"] {
            grid-template-columns: 1fr !important;
        }

        /* Hide background icons on mobile */
        div[style*="position: absolute"][style*="font-size: 6rem"],
        div[style*="position: absolute"][style*="font-size: 8rem"] {
            display: none;
        }

        /* Mobile breadcrumb fix */
        div[style*="position: absolute"][style*="top: 20px"][style*="left: 70px"] {
            top: 10px !important;
            left: 20px !important;
        }
    }
</style>

@endsection
