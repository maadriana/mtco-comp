@extends('layouts.app')

@section('title', 'Business Advisory - Services')

@section('content')

<!-- Clean Header Section -->
<div style="position: relative; margin-top: -1.5rem; background: #326D78; padding: 100px 0 80px 0;">

    <!-- Breadcrumb -->
    <div style="position: absolute; top: 20px; left: 70px; background: rgba(255, 255, 255, 0.95); padding: 10px 20px; border-radius: 6px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); z-index: 1;">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0" style="font-size: 0.9rem;">
                <li class="breadcrumb-item">
                    <a href="{{ url('/') }}" style="color: #326D78; text-decoration: none; font-weight: 500;">
                        <i class="fas fa-home me-1"></i>Home
                    </a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{ url('/#services') }}" style="color: #326D78; text-decoration: none; font-weight: 500;">Services</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page" style="color: #6c757d; font-weight: 500;">Business Advisory</li>
            </ol>
        </nav>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h1 style="color: white; font-size: 3rem; font-weight: 600; margin-bottom: 1rem;">
                    {{ getContent('advisory_page_title', 'Business Advisory') }}
                </h1>
                <p style="color: rgba(255,255,255,0.9); font-size: 1.2rem; line-height: 1.6; margin: 0;">
                    {{ getContent('advisory_page_subtitle', 'Empowering companies to navigate change, seize opportunities, and resolve operational challenges through deep industry knowledge and practical insights.') }}
                </p>
            </div>
        </div>
    </div>
</div>

<!-- Main Content Section -->
<section class="py-5" style="background: white;">
    <div class="container">
        <div class="row">

            <!-- Main Content -->
            <div class="col-lg-8">

                <!-- Service Image -->
                <div style="margin-bottom: 3rem;" data-aos="fade-up" data-aos-delay="100">
                    @if(hasImageContent('advisory_service_image'))
                        <img src="{{ getContent('advisory_service_image') }}" alt="Business Advisory Services"
                             style="width: 100%; height: 300px; object-fit: cover; border-radius: 10px; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
                    @else
                        <img src="{{ asset('assets/img/business-advisory.jpg') }}" alt="Business Advisory Services"
                             style="width: 100%; height: 300px; object-fit: cover; border-radius: 10px; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
                    @endif
                </div>

                <!-- Service Overview -->
                <div style="margin-bottom: 3rem;" data-aos="fade-up" data-aos-delay="100">
                    <h2 style="color: #333; font-weight: 600; margin-bottom: 1.5rem; font-size: 2rem;">
                        {{ getContent('advisory_overview_title', 'Driving Performance and Long-Term Value') }}
                    </h2>
                    <p style="color: #666; font-size: 1.1rem; line-height: 1.7; margin-bottom: 1.5rem;">
                        {{ getContent('advisory_overview_paragraph1', 'Our Business Advisory services empower companies to navigate change, seize opportunities, and resolve operational challenges. We combine deep industry knowledge with practical insights to help clients drive performance and long-term value.') }}
                    </p>
                    <p style="color: #666; font-size: 1.1rem; line-height: 1.7; margin-bottom: 1.5rem;">
                        {{ getContent('advisory_overview_paragraph2', 'We assist with business planning, internal control enhancement, process improvement, financial modeling, and performance management. Whether you are launching a new venture or improving an existing one, we provide hands-on support that will help transform your goals into measurable results.') }}
                    </p>
                </div>

                <!-- Key Service Areas -->
                <div style="margin-bottom: 3rem;" data-aos="fade-up" data-aos-delay="100">
                    <h3 style="color: #333; font-weight: 600; margin-bottom: 2rem; font-size: 1.5rem;">
                        {{ getContent('advisory_services_title', 'Our Core Advisory Services') }}
                    </h3>

                    <div style="margin-bottom: 2rem; padding: 1.5rem; background: #f8f9fa; border-left: 4px solid #326D78; border-radius: 8px;">
                        <h4 style="color: #326D78; font-weight: 600; margin-bottom: 1rem; font-size: 1.2rem;">
                            {{ getContent('advisory_service_item1_title', 'Business Planning & Strategy') }}
                        </h4>
                        <p style="color: #666; margin: 0; line-height: 1.6;">
                            {{ getContent('advisory_service_item1_description', 'Comprehensive business planning and strategic guidance to help you define clear objectives, identify growth opportunities, and develop actionable roadmaps for success.') }}
                        </p>
                    </div>

                    <div style="margin-bottom: 2rem; padding: 1.5rem; background: #f8f9fa; border-left: 4px solid #326D78; border-radius: 8px;">
                        <h4 style="color: #326D78; font-weight: 600; margin-bottom: 1rem; font-size: 1.2rem;">
                            {{ getContent('advisory_service_item2_title', 'Process Improvement & Internal Controls') }}
                        </h4>
                        <p style="color: #666; margin: 0; line-height: 1.6;">
                            {{ getContent('advisory_service_item2_description', 'Enhancement of internal controls and operational processes to improve efficiency, reduce risks, and strengthen organizational governance frameworks.') }}
                        </p>
                    </div>

                    <div style="margin-bottom: 2rem; padding: 1.5rem; background: #f8f9fa; border-left: 4px solid #326D78; border-radius: 8px;">
                        <h4 style="color: #326D78; font-weight: 600; margin-bottom: 1rem; font-size: 1.2rem;">
                            {{ getContent('advisory_service_item3_title', 'Financial Modeling & Performance Management') }}
                        </h4>
                        <p style="color: #666; margin: 0; line-height: 1.6;">
                            {{ getContent('advisory_service_item3_description', 'Advanced financial modeling and performance management systems to support data-driven decision making and monitor key business metrics.') }}
                        </p>
                    </div>

                    <div style="padding: 1.5rem; background: #f8f9fa; border-left: 4px solid #326D78; border-radius: 8px;">
                        <h4 style="color: #326D78; font-weight: 600; margin-bottom: 1rem; font-size: 1.2rem;">
                            {{ getContent('advisory_service_item4_title', 'New Venture & Operational Support') }}
                        </h4>
                        <p style="color: #666; margin: 0; line-height: 1.6;">
                            {{ getContent('advisory_service_item4_description', 'Hands-on support for new ventures and operational improvements, providing practical guidance to transform business goals into measurable results.') }}
                        </p>
                    </div>
                </div>

                <!-- Value Proposition -->
                <div style="background: #326D78; padding: 2rem; border-radius: 15px; color: white; margin-bottom: 3rem;" data-aos="fade-up" data-aos-delay="100">
                    <h4 style="color: white; font-weight: 600; margin-bottom: 1.5rem;">
                        {{ getContent('advisory_value_title', 'Transforming Goals into Results') }}
                    </h4>
                    <p style="color: rgba(255,255,255,0.9); margin: 0; line-height: 1.7; font-size: 1.1rem;">
                        {{ getContent('advisory_value_description', 'Our approach combines strategic thinking with practical implementation. We work closely with your team to understand your unique challenges and opportunities, delivering customized solutions that drive sustainable growth and operational excellence.') }}
                    </p>
                </div>

                <!-- CTA -->
                <div style="text-align: left;" data-aos="fade-up" data-aos-delay="100">
                    <a href="{{ url('/#contact') }}" style="display: inline-block; background: #326D78; color: white; padding: 1rem 2.5rem; border-radius: 50px; text-decoration: none; font-weight: 600; transition: all 0.3s ease; box-shadow: 0 4px 15px rgba(50, 109, 120, 0.3);">
                        {{ getContent('advisory_cta_text', 'Schedule Your Advisory Consultation') }}
                        <i class="fas fa-arrow-right ms-2"></i>
                    </a>
                </div>

            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <div style="position: sticky; top: 2rem;">

                    <!-- Contact Card -->
                    <div style="background: #326D78; color: white; padding: 2rem; border-radius: 10px;" data-aos="fade-up" data-aos-delay="100">
                        <h4 style="color: white; font-weight: 600; margin-bottom: 1rem;">
                            {{ getContent('advisory_sidebar_cta_title', 'Ready to Transform Your Business?') }}
                        </h4>
                        <p style="color: rgba(255,255,255,0.9); margin-bottom: 1.5rem; line-height: 1.6;">
                            {{ getContent('advisory_sidebar_cta_description', 'Contact our advisory team to explore how we can help you navigate challenges and drive performance improvements.') }}
                        </p>
                        <a href="{{ url('/#contact') }}" style="display: inline-block; background: white; color: #326D78; padding: 0.75rem 1.5rem; border-radius: 8px; text-decoration: none; font-weight: 600; transition: all 0.3s ease; width: 100%; text-align: center;">
                            {{ getContent('advisory_sidebar_cta_button_text', 'Contact Our Team') }}
                        </a>
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

    a[href*="contact"]:hover {
        background: #f8f9fa !important;
        color: #326D78 !important;
        transform: translateY(-2px);
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    }

    @media (max-width: 768px) {
        .container h1 {
            font-size: 2.2rem !important;
        }

        .col-lg-4 {
            margin-top: 3rem;
        }

        div[style*="position: sticky"] {
            position: static !important;
        }

        /* Mobile breadcrumb fix */
        div[style*="position: absolute"][style*="top: 20px"][style*="left: 70px"] {
            top: 10px !important;
            left: 20px !important;
        }
    }
</style>

@endsection
