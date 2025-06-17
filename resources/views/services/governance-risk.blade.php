@extends('layouts.app')

@section('title', \App\Models\Content::where('key', 'governance_page_title')->value('value') ?: 'Governance & Risk Management - Services')

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
                <li class="breadcrumb-item active" aria-current="page" style="color: #6c757d; font-weight: 500;">{{ \App\Models\Content::where('key', 'governance_page_title')->value('value') ?: 'Governance & Risk Management' }}</li>
            </ol>
        </nav>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h1 style="color: white; font-size: 3rem; font-weight: 600; margin-bottom: 1rem;">
                    {{ \App\Models\Content::where('key', 'governance_page_title')->value('value') ?: 'Governance & Risk Management' }}
                </h1>
                <p style="color: rgba(255,255,255,0.9); font-size: 1.2rem; line-height: 1.6; margin: 0;">
                    {{ \App\Models\Content::where('key', 'governance_page_subtitle')->value('value') ?: 'Comprehensive governance frameworks and risk management solutions to strengthen your organization\'s foundation and ensure sustainable growth.' }}
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
                @php
                    $governanceServiceImage = \App\Models\Content::where('key', 'governance_service_image')->first();
                @endphp
                @if($governanceServiceImage && $governanceServiceImage->image)
                <div style="margin-bottom: 3rem;" data-aos="fade-up">
                    <img src="data:image/jpeg;base64,{{ base64_encode($governanceServiceImage->image) }}" alt="Governance Service"
                         style="width: 100%; height: 300px; object-fit: cover; border-radius: 10px; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
                </div>
                @endif

                <!-- Service Overview -->
                <div style="margin-bottom: 3rem;" data-aos="fade-up" data-aos-delay="100">
                    <h2 style="color: #333; font-weight: 600; margin-bottom: 1.5rem; font-size: 2rem;">
                        {{ \App\Models\Content::where('key', 'governance_overview_title')->value('value') ?: 'Building Strong Foundations' }}
                    </h2>
                    <p style="color: #666; font-size: 1.1rem; line-height: 1.7; margin-bottom: 1.5rem;">
                        {{ \App\Models\Content::where('key', 'governance_overview_paragraph1')->value('value') ?: 'At Mendoza Tugano & Co., CPAs (MTC), we help organizations establish robust governance structures and effective risk management frameworks that promote transparency, accountability, and long-term sustainability.' }}
                    </p>
                    <p style="color: #666; font-size: 1.1rem; line-height: 1.7; margin: 0;">
                        {{ \App\Models\Content::where('key', 'governance_overview_paragraph2')->value('value') ?: 'Our comprehensive approach combines industry best practices with tailored solutions to address your organization\'s unique governance challenges and risk profile, ensuring compliance while driving strategic objectives.' }}
                    </p>
                </div>

                <!-- Key Approaches -->
                <div style="margin-bottom: 3rem;" data-aos="fade-up" data-aos-delay="100">
                    <h3 style="color: #333; font-weight: 600; margin-bottom: 2rem; font-size: 1.5rem;">
                        {{ \App\Models\Content::where('key', 'governance_approach_title')->value('value') ?: 'Our Approach' }}
                    </h3>

                    <div style="margin-bottom: 2rem; padding: 1.5rem; background: #f8f9fa; border-left: 4px solid #326D78; border-radius: 8px;">
                        <h4 style="color: #326D78; font-weight: 600; margin-bottom: 1rem; font-size: 1.2rem;">
                            {{ \App\Models\Content::where('key', 'governance_approach_item1_title')->value('value') ?: 'Strategic Framework Development' }}
                        </h4>
                        <p style="color: #666; margin: 0; line-height: 1.6;">
                            {{ \App\Models\Content::where('key', 'governance_approach_item1_description')->value('value') ?: 'Design and implement governance structures that align with your business objectives, regulatory requirements, and stakeholder expectations while promoting effective decision-making.' }}
                        </p>
                    </div>

                    <div style="margin-bottom: 2rem; padding: 1.5rem; background: #f8f9fa; border-left: 4px solid #326D78; border-radius: 8px;">
                        <h4 style="color: #326D78; font-weight: 600; margin-bottom: 1rem; font-size: 1.2rem;">
                            {{ \App\Models\Content::where('key', 'governance_approach_item2_title')->value('value') ?: 'Risk Assessment & Mitigation' }}
                        </h4>
                        <p style="color: #666; margin: 0; line-height: 1.6;">
                            {{ \App\Models\Content::where('key', 'governance_approach_item2_description')->value('value') ?: 'Identify, assess, and develop strategies to manage operational, financial, and strategic risks that could impact your organization\'s performance and reputation.' }}
                        </p>
                    </div>

                    <div style="padding: 1.5rem; background: #f8f9fa; border-left: 4px solid #326D78; border-radius: 8px;">
                        <h4 style="color: #326D78; font-weight: 600; margin-bottom: 1rem; font-size: 1.2rem;">
                            {{ \App\Models\Content::where('key', 'governance_approach_item3_title')->value('value') ?: 'Continuous Monitoring' }}
                        </h4>
                        <p style="color: #666; margin: 0; line-height: 1.6;">
                            {{ \App\Models\Content::where('key', 'governance_approach_item3_description')->value('value') ?: 'Establish ongoing monitoring and evaluation processes to ensure governance effectiveness and risk management protocols remain current with evolving business environments.' }}
                        </p>
                    </div>
                </div>

                <!-- Services List -->
                <div style="margin-bottom: 3rem;" data-aos="fade-up" data-aos-delay="200">
                    <h3 style="color: #333; font-weight: 600; margin-bottom: 2rem; font-size: 1.5rem;">
                        {{ \App\Models\Content::where('key', 'governance_services_title')->value('value') ?: 'Our Services Include' }}
                    </h3>

                    <div style="background: white; border: 1px solid #e9ecef; border-radius: 10px; overflow: hidden;">
                        <div style="padding: 1.5rem; border-bottom: 1px solid #e9ecef;">
                            <div style="display: flex; align-items: start;">
                                <div style="background: #326D78; color: white; width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 1rem; margin-top: 0.25rem; flex-shrink: 0;">
                                    <i class="fas fa-shield-alt" style="font-size: 1rem;"></i>
                                </div>
                                <div>
                                    <h5 style="color: #333; font-weight: 600; margin-bottom: 0.5rem;">{{ \App\Models\Content::where('key', 'governance_service1_title')->value('value') ?: 'Corporate Governance Advisory' }}</h5>
                                    <p style="color: #666; margin: 0; line-height: 1.6;">
                                        {{ \App\Models\Content::where('key', 'governance_service1_description')->value('value') ?: 'Board effectiveness reviews, governance policy development, and compliance frameworks. We help establish clear roles, responsibilities, and accountability structures across your organization.' }}
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div style="padding: 1.5rem;">
                            <div style="display: flex; align-items: start;">
                                <div style="background: #326D78; color: white; width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 1rem; margin-top: 0.25rem; flex-shrink: 0;">
                                    <i class="fas fa-search" style="font-size: 1rem;"></i>
                                </div>
                                <div>
                                    <h5 style="color: #333; font-weight: 600; margin-bottom: 0.5rem;">{{ \App\Models\Content::where('key', 'governance_service2_title')->value('value') ?: 'Risk Management Solutions' }}</h5>
                                    <p style="color: #666; margin: 0; line-height: 1.6;">
                                        {{ \App\Models\Content::where('key', 'governance_service2_description')->value('value') ?: 'Enterprise risk management, internal control systems, and crisis management planning. Our solutions help you anticipate, prepare for, and respond to potential business disruptions.' }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Benefits Section -->
                <div data-aos="fade-up" data-aos-delay="300">
                    <h3 style="color: #333; font-weight: 600; margin-bottom: 2rem; font-size: 1.5rem;">
                        {{ \App\Models\Content::where('key', 'governance_benefits_title')->value('value') ?: 'Benefits of Our Governance Services' }}
                    </h3>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div style="padding: 1rem; background: #f8f9fa; border-radius: 8px; height: 100%;">
                                <h6 style="color: #326D78; font-weight: 600; margin-bottom: 0.75rem;">{{ \App\Models\Content::where('key', 'governance_benefit1_title')->value('value') ?: 'Enhanced Compliance' }}</h6>
                                <p style="color: #666; margin: 0; font-size: 0.95rem; line-height: 1.5;">
                                    {{ \App\Models\Content::where('key', 'governance_benefit1_description')->value('value') ?: 'Strengthen compliance with regulatory requirements and industry standards while reducing legal and operational risks.' }}
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div style="padding: 1rem; background: #f8f9fa; border-radius: 8px; height: 100%;">
                                <h6 style="color: #326D78; font-weight: 600; margin-bottom: 0.75rem;">{{ \App\Models\Content::where('key', 'governance_benefit2_title')->value('value') ?: 'Improved Decision-Making' }}</h6>
                                <p style="color: #666; margin: 0; font-size: 0.95rem; line-height: 1.5;">
                                    {{ \App\Models\Content::where('key', 'governance_benefit2_description')->value('value') ?: 'Establish clear governance structures that facilitate informed, timely, and strategic decision-making processes.' }}
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div style="padding: 1rem; background: #f8f9fa; border-radius: 8px; height: 100%;">
                                <h6 style="color: #326D78; font-weight: 600; margin-bottom: 0.75rem;">{{ \App\Models\Content::where('key', 'governance_benefit3_title')->value('value') ?: 'Stakeholder Confidence' }}</h6>
                                <p style="color: #666; margin: 0; font-size: 0.95rem; line-height: 1.5;">
                                    {{ \App\Models\Content::where('key', 'governance_benefit3_description')->value('value') ?: 'Build trust with investors, regulators, and other stakeholders through transparent and accountable governance practices.' }}
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div style="padding: 1rem; background: #f8f9fa; border-radius: 8px; height: 100%;">
                                <h6 style="color: #326D78; font-weight: 600; margin-bottom: 0.75rem;">{{ \App\Models\Content::where('key', 'governance_benefit4_title')->value('value') ?: 'Business Resilience' }}</h6>
                                <p style="color: #666; margin: 0; font-size: 0.95rem; line-height: 1.5;">
                                    {{ \App\Models\Content::where('key', 'governance_benefit4_description')->value('value') ?: 'Develop organizational resilience through effective risk management and crisis preparedness strategies.' }}
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
                        <h4 style="color: white; font-weight: 600; margin-bottom: 1rem;">{{ \App\Models\Content::where('key', 'governance_cta_title')->value('value') ?: 'Strengthen Your Governance' }}</h4>
                        <p style="color: rgba(255,255,255,0.9); margin-bottom: 1.5rem; line-height: 1.6;">
                            {{ \App\Models\Content::where('key', 'governance_cta_description')->value('value') ?: 'Ready to build a stronger governance framework? Let\'s discuss how we can help secure your organization\'s future.' }}
                        </p>
                        <a href="{{ url('/#contact') }}" style="display: inline-block; background: white; color: #326D78; padding: 0.75rem 1.5rem; border-radius: 8px; text-decoration: none; font-weight: 600; transition: all 0.3s ease; width: 100%; text-align: center;">
                            {{ \App\Models\Content::where('key', 'governance_cta_button_text')->value('value') ?: 'Get Started' }}
                        </a>
                    </div>

                    <!-- Quick Facts -->
                    <div style="background: #f8f9fa; padding: 2rem; border-radius: 10px; margin-bottom: 2rem;" data-aos="fade-up" data-aos-delay="100">
                        <h5 style="color: #333; font-weight: 600; margin-bottom: 1.5rem;">Quick Facts</h5>

                        <div style="margin-bottom: 1rem; padding-bottom: 1rem; border-bottom: 1px solid #e9ecef;">
                            <div style="display: flex; justify-content: space-between; align-items: center;">
                                <span style="color: #666; font-size: 0.9rem;">{{ \App\Models\Content::where('key', 'governance_fact1_label')->value('value') ?: 'Governance Frameworks' }}</span>
                                <strong style="color: #326D78; font-size: 1.1rem;">{{ \App\Models\Content::where('key', 'governance_fact1_value')->value('value') ?: '25+' }}</strong>
                            </div>
                        </div>

                        <div style="margin-bottom: 1rem; padding-bottom: 1rem; border-bottom: 1px solid #e9ecef;">
                            <div style="display: flex; justify-content: space-between; align-items: center;">
                                <span style="color: #666; font-size: 0.9rem;">{{ \App\Models\Content::where('key', 'governance_fact2_label')->value('value') ?: 'Risk Assessments' }}</span>
                                <strong style="color: #326D78; font-size: 1.1rem;">{{ \App\Models\Content::where('key', 'governance_fact2_value')->value('value') ?: '100+' }}</strong>
                            </div>
                        </div>

                        <div>
                            <div style="display: flex; justify-content: space-between; align-items: center;">
                                <span style="color: #666; font-size: 0.9rem;">{{ \App\Models\Content::where('key', 'governance_fact3_label')->value('value') ?: 'Client Satisfaction' }}</span>
                                <strong style="color: #326D78; font-size: 1.1rem;">{{ \App\Models\Content::where('key', 'governance_fact3_value')->value('value') ?: '98%' }}</strong>
                            </div>
                        </div>
                    </div>

                    <!-- Related Services -->
                    <div style="background: white; border: 1px solid #e9ecef; padding: 2rem; border-radius: 10px;" data-aos="fade-up" data-aos-delay="100">
                        <h5 style="color: #333; font-weight: 600; margin-bottom: 1.5rem;">Related Services</h5>

                        <div style="margin-bottom: 1rem;">
                            <a href="#" style="color: #326D78; text-decoration: none; font-weight: 500; display: block; padding: 0.5rem 0; border-bottom: 1px solid #f1f1f1;">
                                <i class="fas fa-arrow-right me-2" style="font-size: 0.8rem;"></i>
                                {{ \App\Models\Content::where('key', 'governance_related_service1')->value('value') ?: 'Audit & Assurance' }}
                            </a>
                        </div>

                        <div style="margin-bottom: 1rem;">
                            <a href="#" style="color: #326D78; text-decoration: none; font-weight: 500; display: block; padding: 0.5rem 0; border-bottom: 1px solid #f1f1f1;">
                                <i class="fas fa-arrow-right me-2" style="font-size: 0.8rem;"></i>
                                {{ \App\Models\Content::where('key', 'governance_related_service2')->value('value') ?: 'Business Advisory' }}
                            </a>
                        </div>

                        <div>
                            <a href="#" style="color: #326D78; text-decoration: none; font-weight: 500; display: block; padding: 0.5rem 0;">
                                <i class="fas fa-arrow-right me-2" style="font-size: 0.8rem;"></i>
                                {{ \App\Models\Content::where('key', 'governance_related_service3')->value('value') ?: 'Forensic & Litigation' }}
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

    /* Responsive adjustments */
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
