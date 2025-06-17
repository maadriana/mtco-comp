@extends('layouts.app')

@section('title', 'Governance, Risk and Internal Audit - Services')

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
                <li class="breadcrumb-item active" aria-current="page" style="color: #6c757d; font-weight: 500;">Governance, Risk and Internal Audit</li>
            </ol>
        </nav>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h1 style="color: white; font-size: 3rem; font-weight: 600; margin-bottom: 1rem;">
                    Governance, Risk and Internal Audit
                </h1>
                <p style="color: rgba(255,255,255,0.9); font-size: 1.2rem; line-height: 1.6; margin: 0;">
                    Helping businesses embed best practice governance, risk controls and assurance frameworks.
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
                    <img src="{{ asset('assets/img/risk-and-internal.jpg') }}" alt="Governance, Risk and Internal Audit Services"
                         style="width: 100%; height: 300px; object-fit: cover; border-radius: 10px; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
                </div>

                <!-- Service Overview -->
                <div style="margin-bottom: 3rem;" data-aos="fade-up" data-aos-delay="100">
                    <h2 style="color: #333; font-weight: 600; margin-bottom: 1.5rem; font-size: 2rem;">
                        Beyond Pure Compliance
                    </h2>
                    <p style="color: #666; font-size: 1.1rem; line-height: 1.7; margin-bottom: 1.5rem;">
                        Robust governance and effective risk management are no longer matters of pure regulatory compliance. Businesses increasingly recognise the potential to maximise performance by applying best practice.
                    </p>
                    <p style="color: #666; font-size: 1.1rem; line-height: 1.7; margin: 0;">
                        Our approach focuses on building strong relationships with our clients to understand their unique business needs and provide strategic insights that drive growth and success.
                    </p>
                </div>

                <!-- Key Approaches -->
                <div style="margin-bottom: 3rem;" data-aos="fade-up" data-aos-delay="100">
                    <h3 style="color: #333; font-weight: 600; margin-bottom: 2rem; font-size: 1.5rem;">
                        Our Approach
                    </h3>

                    <div style="margin-bottom: 2rem; padding: 1.5rem; background: #f8f9fa; border-left: 4px solid #326D78; border-radius: 8px;">
                        <h4 style="color: #326D78; font-weight: 600; margin-bottom: 1rem; font-size: 1.2rem;">
                            Strategic Implementation
                        </h4>
                        <p style="color: #666; margin: 0; line-height: 1.6;">
                            The management of risk and implementation of robust corporate governance has become an increasingly important aspect of global business strategy.
                        </p>
                    </div>

                    <div style="margin-bottom: 2rem; padding: 1.5rem; background: #f8f9fa; border-left: 4px solid #326D78; border-radius: 8px;">
                        <h4 style="color: #326D78; font-weight: 600; margin-bottom: 1rem; font-size: 1.2rem;">
                            Comprehensive Support
                        </h4>
                        <p style="color: #666; margin: 0; line-height: 1.6;">
                            Our practice offers a range of services that make it easier for board directors to maintain robust governance and assurance frameworks and manage risks effectively.
                        </p>
                    </div>

                    <div style="padding: 1.5rem; background: #f8f9fa; border-left: 4px solid #326D78; border-radius: 8px;">
                        <h4 style="color: #326D78; font-weight: 600; margin-bottom: 1rem; font-size: 1.2rem;">
                            Cross-Sector Expertise
                        </h4>
                        <p style="color: #666; margin: 0; line-height: 1.6;">
                            We work with businesses in all sectors, advising on their governance structures, providing comfort on their control environments and helping to embed transparency and accountability.
                        </p>
                    </div>
                </div>

                <!-- Services List -->
                <div style="margin-bottom: 3rem;" data-aos="fade-up" data-aos-delay="200">
                    <h3 style="color: #333; font-weight: 600; margin-bottom: 2rem; font-size: 1.5rem;">
                        Our Services Include
                    </h3>

                    <div style="background: white; border: 1px solid #e9ecef; border-radius: 10px; overflow: hidden;">
                        <div style="padding: 1.5rem; border-bottom: 1px solid #e9ecef;">
                            <div style="display: flex; align-items: start;">
                                <div style="background: #326D78; color: white; width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 1rem; margin-top: 0.25rem; flex-shrink: 0;">
                                    <i class="fas fa-shield-alt" style="font-size: 1rem;"></i>
                                </div>
                                <div>
                                    <h5 style="color: #333; font-weight: 600; margin-bottom: 0.5rem;">Corporate Governance</h5>
                                    <p style="color: #666; margin: 0; line-height: 1.6;">
                                        Comprehensive governance frameworks to ensure transparency, accountability, and effective board oversight for your organization.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div style="padding: 1.5rem; border-bottom: 1px solid #e9ecef;">
                            <div style="display: flex; align-items: start;">
                                <div style="background: #326D78; color: white; width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 1rem; margin-top: 0.25rem; flex-shrink: 0;">
                                    <i class="fas fa-check-circle" style="font-size: 1rem;"></i>
                                </div>
                                <div>
                                    <h5 style="color: #333; font-weight: 600; margin-bottom: 0.5rem;">Controls Assurance</h5>
                                    <p style="color: #666; margin: 0; line-height: 1.6;">
                                        Risk assessment and control environment reviews to strengthen your internal controls and operational effectiveness.
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
                                    <h5 style="color: #333; font-weight: 600; margin-bottom: 0.5rem;">Internal Audit</h5>
                                    <p style="color: #666; margin: 0; line-height: 1.6;">
                                        Independent internal audit services to evaluate and improve the effectiveness of risk management, control, and governance processes.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Benefits Section -->
                <div data-aos="fade-up" data-aos-delay="300">
                    <h3 style="color: #333; font-weight: 600; margin-bottom: 2rem; font-size: 1.5rem;">
                        Benefits of Our Governance Services
                    </h3>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div style="padding: 1rem; background: #f8f9fa; border-radius: 8px; height: 100%;">
                                <h6 style="color: #326D78; font-weight: 600; margin-bottom: 0.75rem;">Enhanced Oversight</h6>
                                <p style="color: #666; margin: 0; font-size: 0.95rem; line-height: 1.5;">
                                    Strengthen board oversight and improve decision-making processes across your organization.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div style="padding: 1rem; background: #f8f9fa; border-radius: 8px; height: 100%;">
                                <h6 style="color: #326D78; font-weight: 600; margin-bottom: 0.75rem;">Risk Mitigation</h6>
                                <p style="color: #666; margin: 0; font-size: 0.95rem; line-height: 1.5;">
                                    Identify and mitigate operational and strategic risks through comprehensive risk frameworks.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div style="padding: 1rem; background: #f8f9fa; border-radius: 8px; height: 100%;">
                                <h6 style="color: #326D78; font-weight: 600; margin-bottom: 0.75rem;">Regulatory Compliance</h6>
                                <p style="color: #666; margin: 0; font-size: 0.95rem; line-height: 1.5;">
                                    Ensure compliance with governance standards and regulatory requirements across all jurisdictions.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div style="padding: 1rem; background: #f8f9fa; border-radius: 8px; height: 100%;">
                                <h6 style="color: #326D78; font-weight: 600; margin-bottom: 0.75rem;">Performance Optimization</h6>
                                <p style="color: #666; margin: 0; font-size: 0.95rem; line-height: 1.5;">
                                    Maximize organizational performance through best practice governance and risk management.
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
                        <h4 style="color: white; font-weight: 600; margin-bottom: 1rem;">Need Advisory Support?</h4>
                        <p style="color: rgba(255,255,255,0.9); margin-bottom: 1.5rem; line-height: 1.6;">
                            Connect with our governance and risk specialists to build a resilient internal audit strategy.
                        </p>
                        <a href="{{ url('/#contact') }}" style="display: inline-block; background: white; color: #326D78; padding: 0.75rem 1.5rem; border-radius: 8px; text-decoration: none; font-weight: 600; transition: all 0.3s ease; width: 100%; text-align: center;">
                            Contact Us Now
                        </a>
                    </div>

                    <!-- Quick Facts -->
<div style="background: #f8f9fa; padding: 2rem; border-radius: 10px; margin-bottom: 2rem;" data-aos="fade-up" data-aos-delay="100">
    <h5 style="color: #333; font-weight: 600; margin-bottom: 1.5rem;">Quick Facts</h5>

    <div style="margin-bottom: 1rem; padding-bottom: 1rem; border-bottom: 1px solid #e9ecef;">
        <div style="display: flex; justify-content: space-between; align-items: center;">
            <span style="color: #666; font-size: 0.9rem;">Years of Experience</span>
            <strong style="color: #326D78; font-size: 1.1rem;">12+</strong>
        </div>
    </div>

    <div style="margin-bottom: 1rem; padding-bottom: 1rem; border-bottom: 1px solid #e9ecef;">
        <div style="display: flex; justify-content: space-between; align-items: center;">
            <span style="color: #666; font-size: 0.9rem;">Clients Served</span>
            <strong style="color: #326D78; font-size: 1.1rem;">150+</strong>
        </div>
    </div>

    <div>
        <div style="display: flex; justify-content: space-between; align-items: center;">
            <span style="color: #666; font-size: 0.9rem;">Risk Projects Completed</span>
            <strong style="color: #326D78; font-size: 1.1rem;">300+</strong>
        </div>
    </div>
</div>


                    <!-- Related Services -->
                    <div style="background: white; border: 1px solid #e9ecef; padding: 2rem; border-radius: 10px;" data-aos="fade-up" data-aos-delay="100">
                        <h5 style="color: #333; font-weight: 600; margin-bottom: 1.5rem;">Related Services</h5>

                        <div style="margin-bottom: 1rem;">
                            <a href="#" style="color: #326D78; text-decoration: none; font-weight: 500; display: block; padding: 0.5rem 0; border-bottom: 1px solid #f1f1f1;">
                                <i class="fas fa-arrow-right me-2" style="font-size: 0.8rem;"></i>
                                Forensic & Litigation Support
                            </a>
                        </div>

                        <div style="margin-bottom: 1rem;">
                            <a href="#" style="color: #326D78; text-decoration: none; font-weight: 500; display: block; padding: 0.5rem 0; border-bottom: 1px solid #f1f1f1;">
                                <i class="fas fa-arrow-right me-2" style="font-size: 0.8rem;"></i>
                                Internal Audit Solutions
                            </a>
                        </div>

                        <div>
                            <a href="#" style="color: #326D78; text-decoration: none; font-weight: 500; display: block; padding: 0.5rem 0;">
                                <i class="fas fa-arrow-right me-2" style="font-size: 0.8rem;"></i>
                                Compliance Advisory
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
