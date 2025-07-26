@extends('layouts.app')

@section('title', 'Taxation - Services')

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
                <li class="breadcrumb-item active" aria-current="page" style="color: #6c757d; font-weight: 500;">Taxation</li>
            </ol>
        </nav>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h1 style="color: white; font-size: 3rem; font-weight: 600; margin-bottom: 1rem;">
                    {{ getContent('taxation_page_title', 'Taxation') }}
                </h1>
                <p style="color: rgba(255,255,255,0.9); font-size: 1.2rem; line-height: 1.6; margin: 0;">
                    {{ getContent('taxation_page_subtitle', 'Providing businesses with clarity, compliance, and strategic guidance in an evolving tax landscape.') }}
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
                    @if(hasImageContent('taxation_service_image'))
                        <img src="{{ getContent('taxation_service_image') }}" alt="Tax Advisory and Compliance"
                             style="width: 100%; height: 300px; object-fit: cover; border-radius: 10px; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
                    @else
                        <img src="{{ asset('assets/img/taxation.jpg') }}" alt="Tax Advisory and Compliance"
                             style="width: 100%; height: 300px; object-fit: cover; border-radius: 10px; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
                    @endif
                </div>

                <!-- Service Overview -->
                <div style="margin-bottom: 3rem;" data-aos="fade-up" data-aos-delay="100">
                    <h2 style="color: #333; font-weight: 600; margin-bottom: 1.5rem; font-size: 2rem;">
                        {{ getContent('taxation_overview_title', 'Strategic Tax Guidance') }}
                    </h2>
                    <p style="color: #666; font-size: 1.1rem; line-height: 1.7; margin-bottom: 1.5rem;">
                        {{ getContent('taxation_overview_paragraph1', 'Our Taxation services provide businesses with clarity, compliance, and strategic guidance in an evolving tax landscape. We advise clients on Philippine tax laws including compliance with BIR regulations, tax planning, and audit support.') }}
                    </p>
                    <p style="color: #666; font-size: 1.1rem; line-height: 1.7; margin-bottom: 1.5rem;">
                        {{ getContent('taxation_overview_paragraph2', 'Our services include preparation and filing of tax returns, representation in BIR assessments and tax court cases, and guidance on tax-efficient structures under Philippine laws.') }}
                    </p>
                </div>

                <!-- Key Service Areas -->
                <div style="margin-bottom: 3rem;" data-aos="fade-up" data-aos-delay="100">
                    <h3 style="color: #333; font-weight: 600; margin-bottom: 2rem; font-size: 1.5rem;">
                        {{ getContent('taxation_services_title', 'Our Core Services') }}
                    </h3>

                    <div style="margin-bottom: 2rem; padding: 1.5rem; background: #f8f9fa; border-left: 4px solid #326D78; border-radius: 8px;">
                        <h4 style="color: #326D78; font-weight: 600; margin-bottom: 1rem; font-size: 1.2rem;">
                            {{ getContent('taxation_service_item1_title', 'Tax Compliance & Preparation') }}
                        </h4>
                        <p style="color: #666; margin: 0; line-height: 1.6;">
                            {{ getContent('taxation_service_item1_description', 'Comprehensive preparation and filing of tax returns ensuring full compliance with BIR regulations and Philippine tax laws.') }}
                        </p>
                    </div>

                    <div style="margin-bottom: 2rem; padding: 1.5rem; background: #f8f9fa; border-left: 4px solid #326D78; border-radius: 8px;">
                        <h4 style="color: #326D78; font-weight: 600; margin-bottom: 1rem; font-size: 1.2rem;">
                            {{ getContent('taxation_service_item2_title', 'BIR Assessments & Tax Court Representation') }}
                        </h4>
                        <p style="color: #666; margin: 0; line-height: 1.6;">
                            {{ getContent('taxation_service_item2_description', 'Expert representation in BIR assessments and tax court cases, providing strategic defense and resolution of tax disputes.') }}
                        </p>
                    </div>

                    <div style="padding: 1.5rem; background: #f8f9fa; border-left: 4px solid #326D78; border-radius: 8px;">
                        <h4 style="color: #326D78; font-weight: 600; margin-bottom: 1rem; font-size: 1.2rem;">
                            {{ getContent('taxation_service_item3_title', 'Tax-Efficient Structures & Planning') }}
                        </h4>
                        <p style="color: #666; margin: 0; line-height: 1.6;">
                            {{ getContent('taxation_service_item3_description', 'Guidance on tax-efficient structures under Philippine laws, helping clients optimize their tax position while maintaining compliance.') }}
                        </p>
                    </div>
                </div>

                <!-- Value Proposition -->
                <div style="background: #326D78; padding: 2rem; border-radius: 15px; color: white; margin-bottom: 3rem;" data-aos="fade-up" data-aos-delay="100">
                    <h4 style="color: white; font-weight: 600; margin-bottom: 1.5rem;">
                        {{ getContent('taxation_value_title', 'Our Commitment') }}
                    </h4>
                    <p style="color: rgba(255,255,255,0.9); margin: 0; line-height: 1.7; font-size: 1.1rem;">
                        {{ getContent('taxation_value_description', 'We help clients manage tax risk while identifying opportunities for savings and compliance efficiency. Our approach ensures you stay compliant with evolving Philippine tax regulations while maximizing your tax benefits.') }}
                    </p>
                </div>

                <!-- CTA -->
                <div style="text-align: left;" data-aos="fade-up" data-aos-delay="100">
                    <a href="{{ url('/#contact') }}" style="display: inline-block; background: #326D78; color: white; padding: 1rem 2.5rem; border-radius: 50px; text-decoration: none; font-weight: 600; transition: all 0.3s ease; box-shadow: 0 4px 15px rgba(50, 109, 120, 0.3);">
                        {{ getContent('taxation_cta_text', 'Optimize Your Tax Strategy') }}
                        <i class="fas fa-arrow-right ms-2"></i>
                    </a>
                </div>

            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <div style="position: sticky; top: 2rem;">

                    <!-- Contact Card -->
                    <div style="background: #326D78; color: white; padding: 2rem; border-radius: 10px; margin-bottom: 2rem;" data-aos="fade-up" data-aos-delay="100">
                        <h4 style="color: white; font-weight: 600; margin-bottom: 1rem;">
                            {{ getContent('taxation_sidebar_cta_title', 'Ready to Optimize?') }}
                        </h4>
                        <p style="color: rgba(255,255,255,0.9); margin-bottom: 1.5rem; line-height: 1.6;">
                            {{ getContent('taxation_sidebar_cta_description', 'Contact our experienced tax team to discuss your compliance needs and strategic tax planning opportunities.') }}
                        </p>
                        <a href="{{ url('/#contact') }}" style="display: inline-block; background: white; color: #326D78; padding: 0.75rem 1.5rem; border-radius: 8px; text-decoration: none; font-weight: 600; transition: all 0.3s ease; width: 100%; text-align: center;">
                            {{ getContent('taxation_sidebar_cta_button_text', 'Contact Our Team') }}
                        </a>
                    </div>

                    <!-- Quick Facts -->
                    <div style="background: #f8f9fa; padding: 2rem; border-radius: 10px;" data-aos="fade-up" data-aos-delay="100">
                        <h5 style="color: #333; font-weight: 600; margin-bottom: 1.5rem;">
                            {{ getContent('taxation_related_title', 'Quick Facts') }}
                        </h5>

                        <div style="text-align: center; padding: 1.5rem;">
                            <div style="display: flex; justify-content: space-between; align-items: center;">
                                <span style="color: #666; font-size: 1rem; font-weight: 500;">
                                    {{ getContent('taxation_fact_label', 'Tax Cases Handled') }}
                                </span>
                                <strong style="color: #326D78; font-size: 1.5rem; font-weight: 00;">
                                    {{ getContent('taxation_fact_value', '500+') }}
                                </strong>
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
