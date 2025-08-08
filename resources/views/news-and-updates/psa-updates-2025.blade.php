@extends('layouts.app')

@section('title', 'Philippine Standards on Auditing (PSA) Updates for 2025 | Mendoza Tugano & Co., CPAs')

@section('content')

<!-- Clean Header Section -->
<div style="position: relative; margin-top: -1.5rem; background: #4a8a96; padding: 100px 0 80px 0;">

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
                    <a href="{{ route('news.updates') }}" style="color: #326D78; text-decoration: none; font-weight: 500;">News & Updates</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page" style="color: #6c757d; font-weight: 500;">PSA Updates 2025</li>
            </ol>
        </nav>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <!-- Category Badge -->
                <div style="margin-bottom: 1rem;">
                    <span style="background: rgba(255,255,255,0.2); color: white; padding: 0.5rem 1rem; border-radius: 20px; font-size: 0.9rem; font-weight: 600; backdrop-filter: blur(10px);">
                        {{ getContent('psa_article_category', 'Audit Standards') }}
                    </span>
                </div>

                <h1 style="color: white; font-size: 3rem; font-weight: 600; margin-bottom: 1.5rem; line-height: 1.2;">
                    {{ getContent('psa_article_title', 'Philippine Standards on Auditing (PSA) Updates for 2025') }}
                </h1>

                <!-- Article Meta -->
                <div style="display: flex; align-items: center; gap: 1.5rem; margin-bottom: 1rem; color: rgba(255,255,255,0.9); font-size: 0.95rem;">
                    <div style="display: flex; align-items: center;">
                        <i class="fas fa-calendar-alt me-2"></i>
                        <span>{{ getContent('psa_article_date', 'January 8, 2025') }}</span>
                    </div>
                    <div style="display: flex; align-items: center;">
                        <i class="fas fa-clock me-2"></i>
                        <span>{{ getContent('psa_article_read_time', '7 min read') }}</span>
                    </div>
                    <div style="display: flex; align-items: center;">
                        <i class="fas fa-user me-2"></i>
                        <span>{{ getContent('psa_article_author', 'MTC Editorial Team') }}</span>
                    </div>
                </div>

                <p style="color: rgba(255,255,255,0.9); font-size: 1.2rem; line-height: 1.6; margin: 0;">
                    {{ getContent('psa_article_subtitle', 'Enhanced fraud risk assessment procedures and updated auditor independence requirements for financial statement audits beginning April 15, 2025.') }}
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

                <!-- Featured Image -->
                <div style="margin-bottom: 3rem;" data-aos="fade-up">
                    @if(hasImageContent('psa_article_featured_image'))
                        <img src="{{ getContent('psa_article_featured_image') }}" alt="PSA Updates 2025" style="width: 100%; height: 350px; object-fit: cover; border-radius: 10px; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
                    @else
                        <img src="{{ asset('assets/img/news3.jpg') }}" alt="PSA Updates 2025" style="width: 100%; height: 350px; object-fit: cover; border-radius: 10px; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
                    @endif
                </div>

                <!-- Article Content -->
                <div class="article-content" style="line-height: 1.8; font-size: 1.1rem; color: #444;">

                    <!-- Introduction -->
                    <div style="margin-bottom: 2.5rem;" data-aos="fade-up" data-aos-delay="100">
                        <p style="margin-bottom: 1.5rem;">
                            {{ getContent('psa_article_intro', 'The Auditing and Assurance Standards Council (AASC) has issued significant revisions to several Philippine Standards on Auditing (PSA), introducing enhanced procedures for fraud risk assessment and updated requirements for auditor independence. These changes, effective for audits of financial statements for periods beginning on or after April 15, 2025, represent the most comprehensive update to PSA standards in recent years and will impact all certified public accountants conducting statutory audits.') }}
                        </p>
                    </div>

                    <!-- Enhanced Fraud Risk Assessment -->
                    <div style="margin-bottom: 2.5rem;" data-aos="fade-up" data-aos-delay="200">
                        <h2 style="color: #4a8a96; font-weight: 600; margin-bottom: 1.5rem; font-size: 1.8rem;">
                            {{ getContent('psa_article_fraud_title', 'Enhanced Fraud Risk Assessment Procedures') }}
                        </h2>

                        <p style="margin-bottom: 1.5rem;">
                            {{ getContent('psa_article_fraud_intro', 'The updated PSA 240 (The Auditor\'s Responsibilities Relating to Fraud) introduces more rigorous requirements for identifying, assessing, and responding to fraud risks:') }}
                        </p>

                        <div style="background: #f8f9fa; padding: 2rem; border-radius: 10px; border-left: 4px solid #4a8a96; margin-bottom: 2rem;">
                            <h4 style="color: #4a8a96; font-weight: 600; margin-bottom: 1rem;">
                                {{ getContent('psa_article_risk_factors_title', 'Expanded Risk Factor Analysis') }}
                            </h4>
                            <p style="margin-bottom: 1rem; color: #666;">
                                {{ getContent('psa_article_risk_factors_content', 'Auditors must now evaluate a broader range of fraud risk factors including digital transaction patterns, remote work environments, and automated control systems. Special attention is required for revenue recognition schemes, management override of controls, and misappropriation of assets in technology-driven business processes.') }}
                            </p>
                        </div>

                        <p style="margin-bottom: 1.5rem;">
                            {{ getContent('psa_article_fraud_details', 'The revised standard requires auditors to perform substantive analytical procedures specifically designed to identify unusual revenue patterns, expense anomalies, and balance sheet manipulations. Documentation requirements have been strengthened to include detailed fraud risk matrices and response strategies for each identified risk factor.') }}
                        </p>
                    </div>

                    <!-- Auditor Independence Requirements -->
                    <div style="margin-bottom: 2.5rem;" data-aos="fade-up" data-aos-delay="300">
                        <h2 style="color: #4a8a96; font-weight: 600; margin-bottom: 1.5rem; font-size: 1.8rem;">
                            {{ getContent('psa_article_independence_title', 'Strengthened Auditor Independence Standards') }}
                        </h2>

                        <div style="margin-bottom: 2rem;">
                            <div style="display: flex; align-items: flex-start; margin-bottom: 1.5rem;">
                                <div style="background: #4a8a96; color: white; padding: 0.5rem 1rem; border-radius: 15px; font-weight: 600; margin-right: 1rem; min-width: 130px; text-align: center; font-size: 0.9rem;">
                                    {{ getContent('psa_article_financial_sector', 'Financial Interest') }}
                                </div>
                                <div>
                                    <h4 style="color: #333; margin-bottom: 0.5rem;">{{ getContent('psa_article_financial_title', 'Prohibited Investments') }}</h4>
                                    <p style="color: #666; margin: 0;">{{ getContent('psa_article_financial_desc', 'Expanded restrictions on direct and indirect financial interests in audit clients, including cryptocurrency holdings and investment fund participations.') }}</p>
                                </div>
                            </div>

                            <div style="display: flex; align-items: flex-start; margin-bottom: 1.5rem;">
                                <div style="background: #326D78; color: white; padding: 0.5rem 1rem; border-radius: 15px; font-weight: 600; margin-right: 1rem; min-width: 130px; text-align: center; font-size: 0.9rem;">
                                    {{ getContent('psa_article_services_sector', 'Non-Audit Services') }}
                                </div>
                                <div>
                                    <h4 style="color: #333; margin-bottom: 0.5rem;">{{ getContent('psa_article_services_title', 'Service Limitations') }}</h4>
                                    <p style="color: #666; margin: 0;">{{ getContent('psa_article_services_desc', 'Enhanced restrictions on providing bookkeeping, valuation, and IT consulting services to publicly listed audit clients and their subsidiaries.') }}</p>
                                </div>
                            </div>

                            <div style="display: flex; align-items: flex-start;">
                                <div style="background: #5ba3b0; color: white; padding: 0.5rem 1rem; border-radius: 15px; font-weight: 600; margin-right: 1rem; min-width: 130px; text-align: center; font-size: 0.9rem;">
                                    {{ getContent('psa_article_rotation_sector', 'Partner Rotation') }}
                                </div>
                                <div>
                                    <h4 style="color: #333; margin-bottom: 0.5rem;">{{ getContent('psa_article_rotation_title', 'Cooling-off Periods') }}</h4>
                                    <p style="color: #666; margin: 0;">{{ getContent('psa_article_rotation_desc', 'Extended cooling-off periods for engagement partners and quality review partners, with specific provisions for smaller audit firms.') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Quality Control Enhancements -->
                    <div style="margin-bottom: 2.5rem;" data-aos="fade-up" data-aos-delay="400">
                        <h2 style="color: #4a8a96; font-weight: 600; margin-bottom: 1.5rem; font-size: 1.8rem;">
                            {{ getContent('psa_article_quality_title', 'Quality Control and Documentation Standards') }}
                        </h2>

                        <p style="margin-bottom: 1.5rem;">
                            {{ getContent('psa_article_quality_intro', 'The updated PSA 220 (Quality Control for an Audit of Financial Statements) introduces comprehensive changes to quality control procedures and documentation requirements:') }}
                        </p>

                        <div style="background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%); padding: 2rem; border-radius: 15px; margin-bottom: 2rem;">
                            <h4 style="color: #4a8a96; font-weight: 600; margin-bottom: 1.5rem;">
                                {{ getContent('psa_article_documentation_title', 'Enhanced Documentation Requirements') }}
                            </h4>
                            <ul style="margin-bottom: 0; padding-left: 1.5rem;">
                                <li style="margin-bottom: 0.75rem; color: #666;">{{ getContent('psa_article_documentation1', 'Detailed risk assessment matrices with quantitative scoring methodologies') }}</li>
                                <li style="margin-bottom: 0.75rem; color: #666;">{{ getContent('psa_article_documentation2', 'Real-time documentation of significant audit decisions and judgments') }}</li>
                                <li style="margin-bottom: 0.75rem; color: #666;">{{ getContent('psa_article_documentation3', 'Enhanced file review procedures with multilevel quality checkpoints') }}</li>
                                <li style="margin-bottom: 0; color: #666;">{{ getContent('psa_article_documentation4', 'Digital audit trail requirements for electronic working paper systems') }}</li>
                            </ul>
                        </div>

                        <p style="margin-bottom: 1.5rem;">
                            {{ getContent('psa_article_quality_systems', 'Audit firms must implement comprehensive quality management systems that include automated monitoring tools, regular internal inspections, and continuous professional development programs. The standards require annual quality assessments and external peer reviews for firms conducting audits of public interest entities.') }}
                        </p>
                    </div>

                    <!-- Technology and Data Analytics -->
                    <div style="margin-bottom: 2.5rem;" data-aos="fade-up" data-aos-delay="500">
                        <h2 style="color: #4a8a96; font-weight: 600; margin-bottom: 1.5rem; font-size: 1.8rem;">
                            {{ getContent('psa_article_technology_title', 'Technology Integration and Data Analytics') }}
                        </h2>

                        <div style="background: #4a8a96; color: white; padding: 2rem; border-radius: 15px; margin-bottom: 2rem;">
                            <h4 style="color: white; font-weight: 600; margin-bottom: 1rem;">
                                {{ getContent('psa_article_tech_requirements_title', 'Technology Audit Requirements') }}
                            </h4>
                            <p style="color: rgba(255,255,255,0.9); margin-bottom: 1rem;">
                                {{ getContent('psa_article_tech_requirements_intro', 'The updated standards recognize the increasing role of technology in audit procedures:') }}
                            </p>
                            <ol style="margin: 0; padding-left: 1.5rem; color: rgba(255,255,255,0.9);">
                                <li style="margin-bottom: 0.75rem;">{{ getContent('psa_article_tech_requirement1', 'Computer-assisted audit techniques (CAATs) for large dataset analysis') }}</li>
                                <li style="margin-bottom: 0.75rem;">{{ getContent('psa_article_tech_requirement2', 'Automated testing procedures for repetitive and high-volume transactions') }}</li>
                                <li style="margin-bottom: 0.75rem;">{{ getContent('psa_article_tech_requirement3', 'Data analytics for identifying unusual patterns and anomalies') }}</li>
                                <li style="margin-bottom: 0.75rem;">{{ getContent('psa_article_tech_requirement4', 'Electronic confirmation procedures and digital audit evidence validation') }}</li>
                                <li style="margin-bottom: 0;">{{ getContent('psa_article_tech_requirement5', 'Continuous monitoring capabilities for ongoing risk assessment') }}</li>
                            </ol>
                        </div>

                        <p style="margin-bottom: 1.5rem;">
                            {{ getContent('psa_article_technology_implementation', 'These technological enhancements are designed to improve audit efficiency while strengthening the detection of material misstatements. Auditors must ensure they have adequate technical competence and access to appropriate technology tools to meet these new requirements.') }}
                        </p>
                    </div>

                    <!-- Implementation and Training -->
                    <div style="margin-bottom: 2.5rem;" data-aos="fade-up" data-aos-delay="600">
                        <h2 style="color: #4a8a96; font-weight: 600; margin-bottom: 1.5rem; font-size: 1.8rem;">
                            {{ getContent('psa_article_implementation_title', 'Implementation Guidelines and Training Requirements') }}
                        </h2>

                        <p style="margin-bottom: 1.5rem;">
                            {{ getContent('psa_article_implementation_intro', 'To ensure successful adoption of the revised PSA standards, the AASC has established comprehensive implementation guidelines and mandatory training requirements:') }}
                        </p>

                        <div style="background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%); padding: 2rem; border-radius: 15px; margin-bottom: 2rem;">
                            <h4 style="color: #4a8a96; font-weight: 600; margin-bottom: 1rem;">
                                {{ getContent('psa_article_training_title', 'Mandatory Training Program') }}
                            </h4>
                            <p style="color: #666; margin-bottom: 1rem;">
                                {{ getContent('psa_article_training_content', 'All practicing CPAs involved in audit engagements must complete a minimum of 16 hours of continuing professional education specifically focused on the updated PSA standards. Training modules cover fraud detection techniques, independence assessment, quality control procedures, and technology integration.') }}
                            </p>
                        </div>

                        <p style="margin-bottom: 0;">
                            {{ getContent('psa_article_conclusion', 'At Mendoza Tugano & Co., CPAs, our audit team has already begun preparation for these new standards through comprehensive training programs and system upgrades. We are committed to maintaining the highest quality audit standards while embracing these enhancements that strengthen the audit profession and better serve our clients\' needs.') }}
                        </p>
                    </div>

                </div>

                <!-- Back to News -->
                <div style="margin-top: 3rem;" data-aos="fade-up" data-aos-delay="800">
                    <a href="{{ route('news.updates') }}" style="display: inline-flex; align-items: center; background: #f8f9fa; color: #4a8a96; padding: 1rem 2rem; border-radius: 8px; text-decoration: none; font-weight: 600; transition: all 0.3s ease; border: 2px solid #e9ecef;">
                        <i class="fas fa-arrow-left me-2"></i>
                        {{ getContent('psa_article_back_button', 'Back to News & Updates') }}
                    </a>
                </div>

            </div>

            <!-- Sidebar - REMOVED STICKY BEHAVIOR -->
            <div class="col-lg-4">
                <!-- CHANGED: Removed position: sticky; top: 2rem; -->
                <div>

                    <!-- Related Articles -->
                    <div style="background: white; border: 1px solid #e9ecef; padding: 2rem; border-radius: 10px; margin-bottom: 2rem;" data-aos="fade-up" data-aos-delay="100">
                        <h5 style="color: #333; font-weight: 600; margin-bottom: 1.5rem;">Related Articles</h5>

                        <div style="margin-bottom: 1.5rem; padding-bottom: 1.5rem; border-bottom: 1px solid #f1f1f1;">
                            <a href="{{ route('news.bir-article') }}" style="color: #4a8a96; text-decoration: none; font-weight: 500; display: block; margin-bottom: 0.5rem; line-height: 1.4;">
                                {{ getContent('psa_related_article1_title', 'New BIR Revenue Regulation on Digital Tax Receipts') }}
                            </a>
                            <small style="color: #999;">{{ getContent('psa_related_article1_date', 'January 15, 2025') }}</small>
                        </div>

                        <div style="margin-bottom: 1.5rem; padding-bottom: 1.5rem; border-bottom: 1px solid #f1f1f1;">
                            <a href="{{ route('news.sec-article') }}" style="color: #4a8a96; text-decoration: none; font-weight: 500; display: block; margin-bottom: 0.5rem; line-height: 1.4;">
                                {{ getContent('psa_related_article2_title', 'SEC Announces Updated Financial Reporting Standards for 2025') }}
                            </a>
                            <small style="color: #999;">{{ getContent('psa_related_article2_date', 'January 10, 2025') }}</small>
                        </div>

                        <div>
                            <a href="{{ route('news.updates') }}" style="color: #4a8a96; text-decoration: none; font-weight: 500; font-size: 0.9rem;">
                                {{ getContent('psa_view_all_news', 'View All News') }}
                                <i class="fas fa-arrow-right ms-1"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Contact CTA -->
                    <div style="background: #4a8a96; color: white; padding: 2rem; border-radius: 10px;" data-aos="fade-up" data-aos-delay="200">
                        <h5 style="color: white; font-weight: 600; margin-bottom: 1rem;">
                            {{ getContent('psa_cta_title', 'Need Audit Guidance?') }}
                        </h5>
                        <p style="color: rgba(255,255,255,0.9); margin-bottom: 1.5rem; line-height: 1.6;">
                            {{ getContent('psa_cta_description', 'Our experienced audit team can help you understand and implement the new PSA requirements.') }}
                        </p>
                        <a href="{{ url('/#contact') }}" style="display: inline-block; background: white; color: #4a8a96; padding: 0.75rem 1.5rem; border-radius: 8px; text-decoration: none; font-weight: 600; transition: all 0.3s ease; width: 100%; text-align: center;">
                            {{ getContent('psa_cta_button', 'Get Expert Advice') }}
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

    /* Social sharing hover effects */
    div a[style*="width: 45px"]:hover {
        background: #326D78 !important;
        transform: translateY(-2px);
        box-shadow: 0 4px 15px rgba(74, 138, 150, 0.3);
    }

    /* Back button hover */
    section a[href*="news.updates"]:hover {
        background: #4a8a96 !important;
        color: white !important;
        transform: translateY(-2px);
        box-shadow: 0 4px 15px rgba(74, 138, 150, 0.2);
    }

    /* CTA button hover */
    div a[href*="contact"]:hover {
        background: #f8f9fa !important;
        color: #4a8a96 !important;
        transform: translateY(-2px);
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    }

    /* Related articles hover */
    .col-lg-4 a[style*="color: #4a8a96"]:hover {
        text-decoration: underline !important;
    }

    @media (max-width: 768px) {
        .container h1 {
            font-size: 2.2rem !important;
        }

        .col-lg-4 {
            margin-top: 3rem;
        }

        /* REMOVED: div[style*="position: sticky"] rule since we removed sticky */

        div[style*="display: flex; justify-content: space-between"] {
            flex-direction: column;
            gap: 1rem;
        }

        div[style*="display: flex; align-items: flex-start"] {
            flex-direction: column;
            gap: 0.5rem;
        }

        div[style*="min-width: 130px"] {
            min-width: auto !important;
            margin-right: 0 !important;
            margin-bottom: 0.5rem;
        }
    }
</style>

@endsection
