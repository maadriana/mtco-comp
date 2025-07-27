@extends('layouts.app')

@section('title', 'Audit and Assurance - Services')

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
                <li class="breadcrumb-item active" aria-current="page" style="color: #6c757d; font-weight: 500;">Audit and Assurance</li>
            </ol>
        </nav>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h1 style="color: white; font-size: 3rem; font-weight: 600; margin-bottom: 1rem;">
                    {{ getContent('audit_page_title', 'Audit and Assurance') }}
                </h1>
                <p style="color: rgba(255,255,255,0.9); font-size: 1.2rem; line-height: 1.6; margin: 0;">
                    {{ getContent('audit_page_subtitle', 'Building public trust through independent and risk-based audits that enhance transparency, accountability, and reliability of financial information.') }}
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
                    @if(hasImageContent('audit_service_image'))
                        <img src="{{ getContent('audit_service_image') }}" alt="Audit and Assurance Services"
                             style="width: 100%; height: 300px; object-fit: cover; border-radius: 10px; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
                    @else
                        <img src="{{ asset('assets/img/audit-assurance.jpg') }}" alt="Audit and Assurance Services"
                             style="width: 100%; height: 300px; object-fit: cover; border-radius: 10px; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
                    @endif
                </div>

                <!-- Service Overview -->
                <div style="margin-bottom: 3rem;" data-aos="fade-up" data-aos-delay="100">
                    <h2 style="color: #333; font-weight: 600; margin-bottom: 1.5rem; font-size: 2rem;">
                        {{ getContent('audit_overview_title', 'Building Public Trust') }}
                    </h2>
                    <p style="color: #666; font-size: 1.1rem; line-height: 1.7; margin-bottom: 1.5rem;">
                        {{ getContent('audit_overview_paragraph1', 'Audit and assurance services build public trust by enhancing transparency, accountability, and the reliability of financial information. Our audit teams provide independent and risk-based audits that support stakeholder confidence and compliance with Philippine Financial Reporting Standards.') }}
                    </p>
                    <p style="color: #666; font-size: 1.1rem; line-height: 1.7; margin-bottom: 1.5rem;">
                        {{ getContent('audit_overview_paragraph2', 'Our services include statutory audits, internal control evaluations, and regulatory compliance checks, all tailored to Philippine SEC and BIR requirements. We focus on delivering insights that strengthen governance and support sound business decisions.') }}
                    </p>
                </div>

                <!-- Key Service Areas (Dynamic) -->
                <div style="margin-bottom: 3rem;" data-aos="fade-up" data-aos-delay="100">
                    <h3 style="color: #333; font-weight: 600; margin-bottom: 2rem; font-size: 1.5rem;">
                        {{ getContent('audit_services_title', 'Our Core Services') }}
                    </h3>

                    @php
                        // Get all dynamic service items from database
                        $serviceItems = [];
                        $i = 1;
                        while(true) {
                            $titleKey = "audit_service_item{$i}_title";
                            $descKey = "audit_service_item{$i}_description";
                            $title = \App\Models\Content::where('key', $titleKey)->value('value');
                            $description = \App\Models\Content::where('key', $descKey)->value('value');

                            if ($title || $description) {
                                $serviceItems[] = [
                                    'title' => $title,
                                    'description' => $description,
                                    'index' => $i
                                ];
                                $i++;
                            } else {
                                break;
                            }
                        }

                        // If no service items found, use defaults
                        if (empty($serviceItems)) {
                            $serviceItems = [
                                [
                                    'title' => 'Statutory Audits',
                                    'description' => 'Independent financial statement audits ensuring compliance with Philippine Financial Reporting Standards and regulatory requirements for SEC and BIR submissions.',
                                    'index' => 1
                                ],
                                [
                                    'title' => 'Internal Control Evaluations',
                                    'description' => 'Comprehensive assessment of internal controls to identify weaknesses, enhance operational efficiency, and strengthen governance frameworks.',
                                    'index' => 2
                                ],
                                [
                                    'title' => 'Regulatory Compliance Checks',
                                    'description' => 'Specialized compliance audits tailored to Philippine SEC and BIR requirements, ensuring adherence to local regulations and standards.',
                                    'index' => 3
                                ]
                            ];
                        }
                    @endphp

                    @foreach($serviceItems as $index => $serviceItem)
                        <div style="margin-bottom: {{ $loop->last ? '0' : '2rem' }}; padding: 1.5rem; background: #f8f9fa; border-left: 4px solid #326D78; border-radius: 8px;">
                            <h4 style="color: #326D78; font-weight: 600; margin-bottom: 1rem; font-size: 1.2rem;">
                                {{ $serviceItem['title'] ?: 'Service Title' }}
                            </h4>
                            <p style="color: #666; margin: 0; line-height: 1.6;">
                                {{ $serviceItem['description'] ?: 'Service description will appear here.' }}
                            </p>
                        </div>
                    @endforeach
                </div>

                <!-- Value Proposition -->
                <div style="background: #326D78; padding: 2rem; border-radius: 15px; color: white; margin-bottom: 3rem;" data-aos="fade-up" data-aos-delay="100">
                    <h4 style="color: white; font-weight: 600; margin-bottom: 1.5rem;">
                        {{ getContent('audit_value_title', 'Our Commitment') }}
                    </h4>
                    <p style="color: rgba(255,255,255,0.9); margin: 0; line-height: 1.7; font-size: 1.1rem;">
                        {{ getContent('audit_value_description', 'Together, our audit and assurance services promote sustainable financial practices and protect the interests of investors, regulators, and the public. We deliver insights that strengthen governance and support sound business decisions while ensuring full compliance with Philippine standards.') }}
                    </p>
                </div>

                <!-- CTA -->
                <div style="text-align: left;" data-aos="fade-up" data-aos-delay="100">
                    <a href="{{ url('/#contact') }}" style="display: inline-block; background: #326D78; color: white; padding: 1rem 2.5rem; border-radius: 50px; text-decoration: none; font-weight: 600; transition: all 0.3s ease; box-shadow: 0 4px 15px rgba(50, 109, 120, 0.3);">
                        {{ getContent('audit_cta_text', 'Schedule Your Audit Consultation') }}
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
                            {{ getContent('audit_sidebar_cta_title', 'Ready to Get Started?') }}
                        </h4>
                        <p style="color: rgba(255,255,255,0.9); margin-bottom: 1.5rem; line-height: 1.6;">
                            {{ getContent('audit_sidebar_cta_description', 'Contact our experienced audit team to discuss your assurance needs and ensure compliance with Philippine standards.') }}
                        </p>
                        <a href="{{ url('/#contact') }}" style="display: inline-block; background: white; color: #326D78; padding: 0.75rem 1.5rem; border-radius: 8px; text-decoration: none; font-weight: 600; transition: all 0.3s ease; width: 100%; text-align: center;">
                            {{ getContent('audit_sidebar_cta_button_text', 'Contact Our Team') }}
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
