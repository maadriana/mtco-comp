@extends('layouts.app')

@section('title', 'Business Advisory - Services')

@section('content')

<!-- Clean Header Section -->
<div style="position: relative; margin-top: -1.5rem; background: #326D78; padding: 100px 0 80px 0;">

    <!-- Breadcrumb -->
    <div style="position: absolute; top: 20px; left: 70px; background: rgba(255, 255, 255, 0.95); padding: 10px 20px; border-radius: 6px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); z-index: 100;">
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
                    {{ getContent('advisory_page_title', 'Business Advisory Services') }}
                </h1>
                <p style="color: rgba(255,255,255,0.9); font-size: 1.2rem; line-height: 1.6; margin: 0;">
                    {{ getContent('advisory_page_subtitle', 'Strategic consulting to drive business growth and long-term success.') }}
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
                <div style="margin-bottom: 3rem;" data-aos="fade-up">
                    <img src="{{ asset('assets/img/business-advisory.jpg') }}" alt="Governance, Risk and Internal Audit Services"
                         style="width: 100%; height: 300px; object-fit: cover; border-radius: 10px; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
                </div>

                <!-- Service Overview -->
                <div style="margin-bottom: 3rem;" data-aos="fade-up" data-aos-delay="100">
                    <h2 style="color: #333; font-weight: 600; margin-bottom: 1.5rem; font-size: 2rem;">
                        {{ getContent('advisory_overview_title', 'Targeted Consulting Advice') }}
                    </h2>
                    <p style="color: #666; font-size: 1.1rem; line-height: 1.7; margin-bottom: 1.5rem;">
                        {{ getContent('advisory_overview_paragraph', 'Our breadth of experience allows you to benefit from specific and targeted consulting advice to support your long-term growth plans.') }}
                    </p>
                </div>

                <!-- Key Approaches -->
                <div style="margin-bottom: 3rem;" data-aos="fade-up" data-aos-delay="100">
                    <h3 style="color: #333; font-weight: 600; margin-bottom: 2rem; font-size: 1.5rem;">
                        {{ getContent('advisory_approach_title', 'Our Approach') }}
                    </h3>

                    <div style="margin-bottom: 2rem; padding: 1.5rem; background: #f8f9fa; border-left: 4px solid #326D78; border-radius: 8px;">
                        <h4 style="color: #326D78; font-weight: 600; margin-bottom: 1rem; font-size: 1.2rem;">
                            {{ getContent('advisory_approach_item1_title', 'Deep Understanding') }}
                        </h4>
                        <p style="color: #666; margin: 0; line-height: 1.6;">
                            {{ getContent('advisory_approach_item1_description', 'By developing a real understanding of your business and the issues and challenges you face, our advisory teams use local and global knowledge to help you achieve your goals.') }}
                        </p>
                    </div>

                    <div style="margin-bottom: 2rem; padding: 1.5rem; background: #f8f9fa; border-left: 4px solid #326D78; border-radius: 8px;">
                        <h4 style="color: #326D78; font-weight: 600; margin-bottom: 1rem; font-size: 1.2rem;">
                            {{ getContent('advisory_approach_item2_title', 'Risk Mitigation & Success') }}
                        </h4>
                        <p style="color: #666; margin: 0; line-height: 1.6;">
                            {{ getContent('advisory_approach_item2_description', 'Not only do we help you understand and plan to mitigate your vulnerabilities, we also help you to establish a clear pathway to success.') }}
                        </p>
                    </div>

                    <div style="padding: 1.5rem; background: #f8f9fa; border-left: 4px solid #326D78; border-radius: 8px;">
                        <h4 style="color: #326D78; font-weight: 600; margin-bottom: 1rem; font-size: 1.2rem;">
                            {{ getContent('advisory_approach_item3_title', 'Proven Track Record') }}
                        </h4>
                        <p style="color: #666; margin: 0; line-height: 1.6;">
                            {{ getContent('advisory_approach_item3_description', 'We have experience working with a range of clients — from family-owned businesses to public companies and from entrepreneurial start-ups to established global entities.') }}
                        </p>
                    </div>
                </div>

                <!-- Services List -->
                <div style="background: #326D78; padding: 2rem; border-radius: 15px; color: white; margin-bottom: 3rem;" data-aos="fade-up" data-aos-delay="100">
                    <h4 style="color: white; font-weight: 600; margin-bottom: 1.5rem;">{{ getContent('advisory_services_title', 'Our Services Include:') }}</h4>
                    <div style="display: flex; flex-direction: column; gap: 1rem;">
                        <div style="display: flex; align-items: center;">
                            <i class="fas fa-check-circle" style="margin-right: 1rem; color: rgba(255,255,255,0.8);"></i>
                            <span>{{ getContent('advisory_service1', 'Business consulting') }}</span>
                        </div>
                        <div style="display: flex; align-items: center;">
                            <i class="fas fa-check-circle" style="margin-right: 1rem; color: rgba(255,255,255,0.8);"></i>
                            <span>{{ getContent('advisory_service2', 'Strategic planning') }}</span>
                        </div>
                    </div>
                </div>

                <!-- Benefits Section -->
                <div data-aos="fade-up" data-aos-delay="100">
                    <h3 style="color: #333; font-weight: 600; margin-bottom: 2rem; font-size: 1.5rem;">
                        {{ getContent('advisory_benefits_title', 'Why Choose Us') }}
                    </h3>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div style="padding: 1rem; background: #f8f9fa; border-radius: 8px; height: 100%;">
                                <h6 style="color: #326D78; font-weight: 600; margin-bottom: 0.75rem;">{{ getContent('advisory_benefit1_title', 'Growth-Focused Planning') }}</h6>
                                <p style="color: #666; margin: 0; font-size: 0.95rem; line-height: 1.5;">
                                    {{ getContent('advisory_benefit1_description', 'We provide actionable strategies designed to help your business grow and thrive.') }}
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div style="padding: 1rem; background: #f8f9fa; border-radius: 8px; height: 100%;">
                                <h6 style="color: #326D78; font-weight: 600; margin-bottom: 0.75rem;">{{ getContent('advisory_benefit2_title', 'Strategic Partnerships') }}</h6>
                                <p style="color: #666; margin: 0; font-size: 0.95rem; line-height: 1.5;">
                                    {{ getContent('advisory_benefit2_description', 'We build long-term relationships to provide consistent and effective advisory services.') }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <div style="position: sticky; top: 2rem;">

                    <!-- Contact Card -->
                    <div style="background: #326D78; color: white; padding: 2rem; border-radius: 10px; margin-bottom: 2rem;" data-aos="fade-up" data-aos-delay="100">
                        <h4 style="color: white; font-weight: 600; margin-bottom: 1rem;">{{ getContent('advisory_cta_title', 'Get Started Today') }}</h4>
                        <p style="color: rgba(255,255,255,0.9); margin-bottom: 1.5rem; line-height: 1.6;">
                            {{ getContent('advisory_cta_description', 'Contact us to explore how our advisory services can support your growth journey.') }}
                        </p>
                        <a href="{{ url('/#contact') }}" style="display: inline-block; background: white; color: #326D78; padding: 0.75rem 1.5rem; border-radius: 8px; text-decoration: none; font-weight: 600; transition: all 0.3s ease; width: 100%; text-align: center;">
                            {{ getContent('advisory_cta_button_text', 'Contact Us Now') }}
                        </a>
                    </div>

                    <!-- Quick Facts -->
                    <div style="background: #f8f9fa; padding: 2rem; border-radius: 10px; margin-bottom: 2rem;" data-aos="fade-up" data-aos-delay="100">
                        <h5 style="color: #333; font-weight: 600; margin-bottom: 1.5rem;">Quick Facts</h5>

                        <div style="margin-bottom: 1rem; padding-bottom: 1rem; border-bottom: 1px solid #e9ecef;">
                            <div style="display: flex; justify-content: space-between; align-items: center;">
                                <span style="color: #666; font-size: 0.9rem;">{{ getContent('advisory_fact1_label', 'Clients Served') }}</span>
                                <strong style="color: #326D78; font-size: 1.1rem;">{{ getContent('advisory_fact1_value', '200+') }}</strong>
                            </div>
                        </div>

                        <div style="margin-bottom: 1rem; padding-bottom: 1rem; border-bottom: 1px solid #e9ecef;">
                            <div style="display: flex; justify-content: space-between; align-items: center;">
                                <span style="color: #666; font-size: 0.9rem;">{{ getContent('advisory_fact2_label', 'Industries Covered') }}</span>
                                <strong style="color: #326D78; font-size: 1.1rem;">{{ getContent('advisory_fact2_value', '20+') }}</strong>
                            </div>
                        </div>

                        <div>
                            <div style="display: flex; justify-content: space-between; align-items: center;">
                                <span style="color: #666; font-size: 0.9rem;">{{ getContent('advisory_fact3_label', 'Advisory Accuracy') }}</span>
                                <strong style="color: #326D78; font-size: 1.1rem;">{{ getContent('advisory_fact3_value', '98%') }}</strong>
                            </div>
                        </div>
                    </div>

                    <!-- Related Services -->
                    <div style="background: white; border: 1px solid #e9ecef; padding: 2rem; border-radius: 10px;" data-aos="fade-up" data-aos-delay="100">
                        <h5 style="color: #333; font-weight: 600; margin-bottom: 1.5rem;">Related Services</h5>

                        <div style="margin-bottom: 1rem;">
                            <a href="#" style="color: #326D78; text-decoration: none; font-weight: 500; display: block; padding: 0.5rem 0; border-bottom: 1px solid #f1f1f1;">
                                <i class="fas fa-arrow-right me-2" style="font-size: 0.8rem;"></i>
                                {{ getContent('advisory_related_service1', 'Taxation Services') }}
                            </a>
                        </div>

                        <div style="margin-bottom: 1rem;">
                            <a href="#" style="color: #326D78; text-decoration: none; font-weight: 500; display: block; padding: 0.5rem 0; border-bottom: 1px solid #f1f1f1;">
                                <i class="fas fa-arrow-right me-2" style="font-size: 0.8rem;"></i>
                                {{ getContent('advisory_related_service2', 'Audit & Assurance') }}
                            </a>
                        </div>

                        <div>
                            <a href="#" style="color: #326D78; text-decoration: none; font-weight: 500; display: block; padding: 0.5rem 0;">
                                <i class="fas fa-arrow-right me-2" style="font-size: 0.8rem;"></i>
                                {{ getContent('advisory_related_service3', 'Accounting Services') }}
                            </a>
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
    }
</style>

@endsection
