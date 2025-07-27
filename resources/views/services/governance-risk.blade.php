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

                <!-- Key Approaches (Dynamic) -->
                <div style="margin-bottom: 3rem;" data-aos="fade-up" data-aos-delay="100">
                    <h3 style="color: #333; font-weight: 600; margin-bottom: 2rem; font-size: 1.5rem;">
                        {{ getContent('governance_approach_title', 'Our Approach') }}
                    </h3>

                    @php
                        // Get all dynamic approach items from database
                        $approachItems = [];
                        $i = 1;
                        while(true) {
                            $titleKey = "governance_approach_item{$i}_title";
                            $descKey = "governance_approach_item{$i}_description";
                            $title = \App\Models\Content::where('key', $titleKey)->value('value');
                            $description = \App\Models\Content::where('key', $descKey)->value('value');

                            if ($title || $description) {
                                $approachItems[] = [
                                    'title' => $title,
                                    'description' => $description,
                                    'index' => $i
                                ];
                                $i++;
                            } else {
                                break;
                            }
                        }

                        // If no approach items found, use defaults
                        if (empty($approachItems)) {
                            $approachItems = [
                                [
                                    'title' => 'Comprehensive Framework Design',
                                    'description' => 'We develop tailored governance structures that align with your organization\'s objectives while ensuring compliance with regulatory requirements and industry best practices.',
                                    'index' => 1
                                ],
                                [
                                    'title' => 'Risk Assessment & Management',
                                    'description' => 'Our systematic approach to risk identification, assessment, and mitigation helps protect your organization from potential threats while enabling strategic decision-making.',
                                    'index' => 2
                                ],
                                [
                                    'title' => 'Continuous Monitoring & Improvement',
                                    'description' => 'We implement monitoring systems and regular reviews to ensure your governance and risk management frameworks remain effective and adapt to changing business environments.',
                                    'index' => 3
                                ]
                            ];
                        }
                    @endphp

                    @foreach($approachItems as $index => $approachItem)
                        <div style="margin-bottom: {{ $loop->last ? '0' : '2rem' }}; padding: 1.5rem; background: #f8f9fa; border-left: 4px solid #326D78; border-radius: 8px;">
                            <h4 style="color: #326D78; font-weight: 600; margin-bottom: 1rem; font-size: 1.2rem;">
                                {{ $approachItem['title'] ?: 'Approach Title' }}
                            </h4>
                            <p style="color: #666; margin: 0; line-height: 1.6;">
                                {{ $approachItem['description'] ?: 'Approach description will appear here.' }}
                            </p>
                        </div>
                    @endforeach
                </div>

                <!-- Value Proposition -->
                <div style="background: #326D78; padding: 2rem; border-radius: 15px; color: white; margin-bottom: 3rem;" data-aos="fade-up" data-aos-delay="100">
                    <h4 style="color: white; font-weight: 600; margin-bottom: 1.5rem;">
                        {{ getContent('governance_value_title', 'Strategic Risk Management Excellence') }}
                    </h4>
                    <p style="color: rgba(255,255,255,0.9); margin: 0; line-height: 1.7; font-size: 1.1rem;">
                        {{ getContent('governance_value_description', 'Our governance and risk management solutions integrate seamlessly with your business operations, providing strategic insights that drive informed decision-making. We combine industry expertise with proven methodologies to deliver frameworks that not only protect your organization but also enable growth and innovation in an increasingly complex business environment.') }}
                    </p>
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
