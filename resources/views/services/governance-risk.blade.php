@extends('layouts.app')

@section('title', 'Governance & Risk Management - Services')

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
                <li class="breadcrumb-item active" aria-current="page" style="color: #6c757d; font-weight: 500;">Governance & Risk Management</li>
            </ol>
        </nav>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h1 style="color: white; font-size: 3rem; font-weight: 600; margin-bottom: 1rem;">
                    {{ getContent('governance_page_title', 'Governance & Risk Management') }}
                </h1>
                <p style="color: rgba(255,255,255,0.9); font-size: 1.2rem; line-height: 1.6; margin: 0;">
                    {{ getContent('governance_page_subtitle', 'Comprehensive governance frameworks and risk management solutions to strengthen your organization\'s foundation and ensure sustainable growth.') }}
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
                    @if(hasImageContent('governance_service_image'))
                        <img src="{{ getContent('governance_service_image') }}" alt="Governance & Risk Management"
                             style="width: 100%; height: 300px; object-fit: cover; border-radius: 10px; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
                    @else
                        <img src="{{ asset('assets/img/risk-and-internal.jpg') }}" alt="Governance & Risk Management"
                             style="width: 100%; height: 300px; object-fit: cover; border-radius: 10px; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
                    @endif
                </div>

                <!-- Service Overview -->
                <div style="margin-bottom: 3rem;" data-aos="fade-up" data-aos-delay="100">
                    <h2 style="color: #333; font-weight: 600; margin-bottom: 1.5rem; font-size: 2rem;">
                        {{ getContent('governance_overview_title', 'Building Strong Foundations') }}
                    </h2>
                    <p style="color: #666; font-size: 1.1rem; line-height: 1.7; margin-bottom: 1.5rem;">
                        {{ getContent('governance_overview_paragraph1', 'At Mendoza Tugano & Co., CPAs (MTC), we help organizations establish robust governance structures and effective risk management frameworks that promote transparency, accountability, and long-term sustainability.') }}
                    </p>
                </div>

                <!-- Key Approaches -->
                <div style="margin-bottom: 3rem;" data-aos="fade-up" data-aos-delay="100">
                    <h3 style="color: #333; font-weight: 600; margin-bottom: 2rem; font-size: 1.5rem;">
                        {{ getContent('governance_approach_title', 'Our Approach') }}
                    </h3>

                    <div style="margin-bottom: 2rem; padding: 1.5rem; background: #f8f9fa; border-left: 4px solid #326D78; border-radius: 8px;">
                        <h4 style="color: #326D78; font-weight: 600; margin-bottom: 1rem; font-size: 1.2rem;">
                            {{ getContent('governance_approach_item1_title', 'Comprehensive Framework Design') }}
                        </h4>
                        <p style="color: #666; margin: 0; line-height: 1.6;">
                            {{ getContent('governance_approach_item1_description', 'We develop tailored governance structures that align with your organization\'s objectives while ensuring compliance with regulatory requirements and industry best practices.') }}
                        </p>
                    </div>

                    <div style="margin-bottom: 2rem; padding: 1.5rem; background: #f8f9fa; border-left: 4px solid #326D78; border-radius: 8px;">
                        <h4 style="color: #326D78; font-weight: 600; margin-bottom: 1rem; font-size: 1.2rem;">
                            {{ getContent('governance_approach_item2_title', 'Risk Assessment & Management') }}
                        </h4>
                        <p style="color: #666; margin: 0; line-height: 1.6;">
                            {{ getContent('governance_approach_item2_description', 'Our systematic approach to risk identification, assessment, and mitigation helps protect your organization from potential threats while enabling strategic decision-making.') }}
                        </p>
                    </div>

                    <div style="padding: 1.5rem; background: #f8f9fa; border-left: 4px solid #326D78; border-radius: 8px;">
                        <h4 style="color: #326D78; font-weight: 600; margin-bottom: 1rem; font-size: 1.2rem;">
                            {{ getContent('governance_approach_item3_title', 'Continuous Monitoring & Improvement') }}
                        </h4>
                        <p style="color: #666; margin: 0; line-height: 1.6;">
                            {{ getContent('governance_approach_item3_description', 'We implement monitoring systems and regular reviews to ensure your governance and risk management frameworks remain effective and adapt to changing business environments.') }}
                        </p>
                    </div>
                </div>

                <!-- Services List -->
                <div style="background: #326D78; padding: 2rem; border-radius: 15px; color: white; margin-bottom: 3rem;" data-aos="fade-up" data-aos-delay="100">
                    <h4 style="color: white; font-weight: 600; margin-bottom: 1.5rem;">
                        {{ getContent('governance_services_title', 'Our Services Include:') }}
                    </h4>
                    <div style="display: flex; flex-direction: column; gap: 1rem;">
                        <div style="display: flex; align-items: center;">
                            <i class="fas fa-check-circle" style="margin-right: 1rem; color: rgba(255,255,255,0.8);"></i>
                            <span>{{ getContent('governance_service1', 'Corporate governance advisory') }}</span>
                        </div>
                        <div style="display: flex; align-items: center;">
                            <i class="fas fa-check-circle" style="margin-right: 1rem; color: rgba(255,255,255,0.8);"></i>
                            <span>{{ getContent('governance_service2', 'Risk management frameworks') }}</span>
                        </div>
                        <div style="display: flex; align-items: center;">
                            <i class="fas fa-check-circle" style="margin-right: 1rem; color: rgba(255,255,255,0.8);"></i>
                            <span>{{ getContent('governance_service3', 'Internal audit services') }}</span>
                        </div>
                        <div style="display: flex; align-items: center;">
                            <i class="fas fa-check-circle" style="margin-right: 1rem; color: rgba(255,255,255,0.8);"></i>
                            <span>{{ getContent('governance_service4', 'Compliance monitoring') }}</span>
                        </div>
                    </div>
                </div>

                <!-- CTA -->
                <div style="text-align: left;" data-aos="fade-up" data-aos-delay="100">
                    <a href="{{ url('/#contact') }}" style="display: inline-block; background: #326D78; color: white; padding: 1rem 2.5rem; border-radius: 50px; text-decoration: none; font-weight: 600; transition: all 0.3s ease; box-shadow: 0 4px 15px rgba(50, 109, 120, 0.3);">
                        {{ getContent('governance_cta_text', 'Strengthen Your Governance') }}
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
                            {{ getContent('governance_sidebar_cta_title', 'Strengthen Your Governance') }}
                        </h4>
                        <p style="color: rgba(255,255,255,0.9); margin-bottom: 1.5rem; line-height: 1.6;">
                            {{ getContent('governance_sidebar_cta_description', 'Ready to build a stronger governance framework? Let\'s discuss how we can help secure your organization\'s future.') }}
                        </p>
                        <a href="{{ url('/#contact') }}" style="display: inline-block; background: white; color: #326D78; padding: 0.75rem 1.5rem; border-radius: 8px; text-decoration: none; font-weight: 600; transition: all 0.3s ease; width: 100%; text-align: center;">
                            {{ getContent('governance_sidebar_cta_button_text', 'Contact Us Now') }}
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
