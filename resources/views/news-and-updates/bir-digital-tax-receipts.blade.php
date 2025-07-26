@extends('layouts.app')

@section('title', 'New BIR Revenue Regulation on Digital Tax Receipts | Mendoza Tugano & Co., CPAs')

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
                    <a href="{{ route('news.updates') }}" style="color: #326D78; text-decoration: none; font-weight: 500;">News & Updates</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page" style="color: #6c757d; font-weight: 500;">BIR Digital Tax Receipts</li>
            </ol>
        </nav>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <!-- Category Badge -->
                <div style="margin-bottom: 1rem;">
                    <span style="background: rgba(255,255,255,0.2); color: white; padding: 0.5rem 1rem; border-radius: 20px; font-size: 0.9rem; font-weight: 600; backdrop-filter: blur(10px);">
                        {{ getContent('bir_article_category', 'Tax Updates') }}
                    </span>
                </div>

                <h1 style="color: white; font-size: 3rem; font-weight: 600; margin-bottom: 1.5rem; line-height: 1.2;">
                    {{ getContent('bir_article_title', 'New BIR Revenue Regulation on Digital Tax Receipts') }}
                </h1>

                <!-- Article Meta -->
                <div style="display: flex; align-items: center; gap: 1.5rem; margin-bottom: 1rem; color: rgba(255,255,255,0.9); font-size: 0.95rem;">
                    <div style="display: flex; align-items: center;">
                        <i class="fas fa-calendar-alt me-2"></i>
                        <span>{{ getContent('bir_article_date', 'January 15, 2025') }}</span>
                    </div>
                    <div style="display: flex; align-items: center;">
                        <i class="fas fa-clock me-2"></i>
                        <span>{{ getContent('bir_article_read_time', '8 min read') }}</span>
                    </div>
                    <div style="display: flex; align-items: center;">
                        <i class="fas fa-user me-2"></i>
                        <span>{{ getContent('bir_article_author', 'MTC Editorial Team') }}</span>
                    </div>
                </div>

                <p style="color: rgba(255,255,255,0.9); font-size: 1.2rem; line-height: 1.6; margin: 0;">
                    {{ getContent('bir_article_subtitle', 'Understanding the new requirements and implementation timeline for digital tax receipt systems in the Philippines.') }}
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
                    @if(hasImageContent('bir_article_featured_image'))
                        <img src="{{ getContent('bir_article_featured_image') }}" alt="BIR Digital Tax Receipts" style="width: 100%; height: 350px; object-fit: cover; border-radius: 10px; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
                    @else
                        <img src="{{ asset('assets/img/services.jpg') }}" alt="BIR Digital Tax Receipts" style="width: 100%; height: 350px; object-fit: cover; border-radius: 10px; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
                    @endif
                </div>

                <!-- Article Content -->
                <div class="article-content" style="line-height: 1.8; font-size: 1.1rem; color: #444;">

                    <!-- Introduction -->
                    <div style="margin-bottom: 2.5rem;" data-aos="fade-up" data-aos-delay="100">
                        <p style="margin-bottom: 1.5rem;">
                            {{ getContent('bir_article_intro', 'The Bureau of Internal Revenue (BIR) has issued Revenue Regulation No. 25-2024, introducing mandatory digital tax receipt requirements that will fundamentally change how businesses handle invoicing and receipt systems in the Philippines. This comprehensive regulation affects all registered taxpayers with annual gross receipts exceeding PHP 3 million, marking a significant step toward the country\'s digital transformation in tax administration.') }}
                        </p>
                    </div>

                    <!-- Key Requirements Section -->
                    <div style="margin-bottom: 2.5rem;" data-aos="fade-up" data-aos-delay="200">
                        <h2 style="color: #326D78; font-weight: 600; margin-bottom: 1.5rem; font-size: 1.8rem;">
                            {{ getContent('bir_article_requirements_title', 'Key Requirements and Compliance Standards') }}
                        </h2>

                        <p style="margin-bottom: 1.5rem;">
                            {{ getContent('bir_article_requirements_intro', 'Under the new regulation, affected businesses must implement digital receipt systems that comply with specific technical and security standards:') }}
                        </p>

                        <div style="background: #f8f9fa; padding: 2rem; border-radius: 10px; border-left: 4px solid #326D78; margin-bottom: 2rem;">
                            <h4 style="color: #326D78; font-weight: 600; margin-bottom: 1rem;">
                                {{ getContent('bir_article_technical_title', 'Technical Specifications') }}
                            </h4>
                            <p style="margin-bottom: 1rem; color: #666;">
                                {{ getContent('bir_article_technical_content', 'Digital receipts must include encrypted QR codes, sequential numbering systems, and real-time data transmission capabilities to BIR servers. The system must also maintain offline backup functionality to ensure continuous operation during network interruptions.') }}
                            </p>
                        </div>

                        <p style="margin-bottom: 1.5rem;">
                            {{ getContent('bir_article_requirements_details', 'The regulation specifically requires that all sales transactions, regardless of amount, must be recorded through the digital system. This includes cash sales, credit transactions, and any form of revenue generation. Businesses operating multiple locations must ensure all branches are connected to a centralized digital receipt system.') }}
                        </p>
                    </div>

                    <!-- Implementation Timeline -->
                    <div style="margin-bottom: 2.5rem;" data-aos="fade-up" data-aos-delay="300">
                        <h2 style="color: #326D78; font-weight: 600; margin-bottom: 1.5rem; font-size: 1.8rem;">
                            {{ getContent('bir_article_timeline_title', 'Implementation Timeline and Phases') }}
                        </h2>

                        <div style="margin-bottom: 2rem;">
                            <div style="display: flex; align-items: flex-start; margin-bottom: 1.5rem;">
                                <div style="background: #326D78; color: white; padding: 0.5rem 1rem; border-radius: 20px; font-weight: 600; margin-right: 1rem; min-width: 120px; text-align: center;">
                                    {{ getContent('bir_article_phase1_date', 'March 2025') }}
                                </div>
                                <div>
                                    <h4 style="color: #333; margin-bottom: 0.5rem;">{{ getContent('bir_article_phase1_title', 'Phase 1: Large Corporations') }}</h4>
                                    <p style="color: #666; margin: 0;">{{ getContent('bir_article_phase1_desc', 'Companies with annual gross receipts exceeding PHP 50 million must implement digital receipt systems.') }}</p>
                                </div>
                            </div>

                            <div style="display: flex; align-items: flex-start; margin-bottom: 1.5rem;">
                                <div style="background: #5ba3b0; color: white; padding: 0.5rem 1rem; border-radius: 20px; font-weight: 600; margin-right: 1rem; min-width: 120px; text-align: center;">
                                    {{ getContent('bir_article_phase2_date', 'June 2025') }}
                                </div>
                                <div>
                                    <h4 style="color: #333; margin-bottom: 0.5rem;">{{ getContent('bir_article_phase2_title', 'Phase 2: Medium Enterprises') }}</h4>
                                    <p style="color: #666; margin: 0;">{{ getContent('bir_article_phase2_desc', 'Businesses with annual gross receipts between PHP 10-50 million must comply.') }}</p>
                                </div>
                            </div>

                            <div style="display: flex; align-items: flex-start;">
                                <div style="background: #4a8a96; color: white; padding: 0.5rem 1rem; border-radius: 20px; font-weight: 600; margin-right: 1rem; min-width: 120px; text-align: center;">
                                    {{ getContent('bir_article_phase3_date', 'Sept 2025') }}
                                </div>
                                <div>
                                    <h4 style="color: #333; margin-bottom: 0.5rem;">{{ getContent('bir_article_phase3_title', 'Phase 3: Small Businesses') }}</h4>
                                    <p style="color: #666; margin: 0;">{{ getContent('bir_article_phase3_desc', 'All remaining businesses with annual gross receipts exceeding PHP 3 million.') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Compliance Impact -->
                    <div style="margin-bottom: 2.5rem;" data-aos="fade-up" data-aos-delay="400">
                        <h2 style="color: #326D78; font-weight: 600; margin-bottom: 1.5rem; font-size: 1.8rem;">
                            {{ getContent('bir_article_impact_title', 'Impact on Business Operations') }}
                        </h2>

                        <p style="margin-bottom: 1.5rem;">
                            {{ getContent('bir_article_impact_intro', 'The transition to digital tax receipts will require significant changes to current business processes and systems. Organizations must prepare for both technological and operational adjustments:') }}
                        </p>

                        <div style="background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%); padding: 2rem; border-radius: 15px; margin-bottom: 2rem;">
                            <h4 style="color: #326D78; font-weight: 600; margin-bottom: 1.5rem;">
                                {{ getContent('bir_article_challenges_title', 'Key Implementation Challenges') }}
                            </h4>
                            <ul style="margin-bottom: 0; padding-left: 1.5rem;">
                                <li style="margin-bottom: 0.75rem; color: #666;">{{ getContent('bir_article_challenge1', 'System integration with existing point-of-sale and accounting software') }}</li>
                                <li style="margin-bottom: 0.75rem; color: #666;">{{ getContent('bir_article_challenge2', 'Staff training on new digital processes and troubleshooting procedures') }}</li>
                                <li style="margin-bottom: 0.75rem; color: #666;">{{ getContent('bir_article_challenge3', 'Network connectivity requirements and backup system establishment') }}</li>
                                <li style="margin-bottom: 0; color: #666;">{{ getContent('bir_article_challenge4', 'Compliance monitoring and audit trail maintenance') }}</li>
                            </ul>
                        </div>

                        <p style="margin-bottom: 1.5rem;">
                            {{ getContent('bir_article_impact_benefits', 'Despite the implementation challenges, the digital receipt system offers substantial benefits including reduced paper costs, improved transaction tracking, enhanced audit capabilities, and better customer experience through digital receipt delivery options.') }}
                        </p>
                    </div>

                    <!-- Recommendations -->
                    <div style="margin-bottom: 2.5rem;" data-aos="fade-up" data-aos-delay="500">
                        <h2 style="color: #326D78; font-weight: 600; margin-bottom: 1.5rem; font-size: 1.8rem;">
                            {{ getContent('bir_article_recommendations_title', 'MTC Recommendations for Compliance') }}
                        </h2>

                        <div style="background: #326D78; color: white; padding: 2rem; border-radius: 15px; margin-bottom: 2rem;">
                            <h4 style="color: white; font-weight: 600; margin-bottom: 1rem;">
                                {{ getContent('bir_article_action_title', 'Immediate Action Items') }}
                            </h4>
                            <p style="color: rgba(255,255,255,0.9); margin-bottom: 1rem;">
                                {{ getContent('bir_article_action_intro', 'To ensure smooth compliance with the new regulations, we recommend the following steps:') }}
                            </p>
                            <ol style="margin: 0; padding-left: 1.5rem; color: rgba(255,255,255,0.9);">
                                <li style="margin-bottom: 0.75rem;">{{ getContent('bir_article_action1', 'Conduct a comprehensive assessment of current invoicing systems') }}</li>
                                <li style="margin-bottom: 0.75rem;">{{ getContent('bir_article_action2', 'Research and select BIR-accredited digital receipt solution providers') }}</li>
                                <li style="margin-bottom: 0.75rem;">{{ getContent('bir_article_action3', 'Develop an implementation timeline based on your compliance phase') }}</li>
                                <li style="margin-bottom: 0.75rem;">{{ getContent('bir_article_action4', 'Establish staff training programs for the new digital systems') }}</li>
                                <li style="margin-bottom: 0;">{{ getContent('bir_article_action5', 'Create backup procedures and contingency plans for system failures') }}</li>
                            </ol>
                        </div>

                        <p style="margin-bottom: 0;">
                            {{ getContent('bir_article_conclusion', 'The successful implementation of digital tax receipts requires careful planning and professional guidance. Our team at Mendoza Tugano & Co., CPAs is ready to assist your organization through this transition, ensuring full compliance while minimizing operational disruption.') }}
                        </p>
                    </div>

                </div>

                <!-- Social Sharing -->
                <div style="border-top: 1px solid #e9ecef; padding-top: 2rem; margin-top: 3rem;" data-aos="fade-up" data-aos-delay="600">
                    <div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 1rem;">
                        <div>
                            <h5 style="color: #333; margin-bottom: 0.5rem;">Share this article:</h5>
                        </div>
                        <div style="display: flex; gap: 0.75rem;">
                            <a href="#" style="width: 45px; height: 45px; background: #326D78; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; text-decoration: none; transition: all 0.3s ease;">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a href="#" style="width: 45px; height: 45px; background: #326D78; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; text-decoration: none; transition: all 0.3s ease;">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a href="#" style="width: 45px; height: 45px; background: #326D78; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; text-decoration: none; transition: all 0.3s ease;">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a href="#" style="width: 45px; height: 45px; background: #326D78; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: white; text-decoration: none; transition: all 0.3s ease;">
                                <i class="fas fa-envelope"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Back to News -->
                <div style="margin-top: 3rem;" data-aos="fade-up" data-aos-delay="700">
                    <a href="{{ route('news.updates') }}" style="display: inline-flex; align-items: center; background: #f8f9fa; color: #326D78; padding: 1rem 2rem; border-radius: 8px; text-decoration: none; font-weight: 600; transition: all 0.3s ease; border: 2px solid #e9ecef;">
                        <i class="fas fa-arrow-left me-2"></i>
                        {{ getContent('bir_article_back_button', 'Back to News & Updates') }}
                    </a>
                </div>

            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <div style="position: sticky; top: 2rem;">

                    <!-- Related Articles -->
                    <div style="background: white; border: 1px solid #e9ecef; padding: 2rem; border-radius: 10px; margin-bottom: 2rem;" data-aos="fade-up" data-aos-delay="100">
                        <h5 style="color: #333; font-weight: 600; margin-bottom: 1.5rem;">Related Articles</h5>

                        <div style="margin-bottom: 1.5rem; padding-bottom: 1.5rem; border-bottom: 1px solid #f1f1f1;">
                            <a href="{{ route('news.sec-article') }}" style="color: #326D78; text-decoration: none; font-weight: 500; display: block; margin-bottom: 0.5rem; line-height: 1.4;">
                                {{ getContent('bir_related_article1_title', 'SEC Announces Updated Financial Reporting Standards for 2025') }}
                            </a>
                            <small style="color: #999;">{{ getContent('bir_related_article1_date', 'January 10, 2025') }}</small>
                        </div>

                        <div style="margin-bottom: 1.5rem; padding-bottom: 1.5rem; border-bottom: 1px solid #f1f1f1;">
                            <a href="{{ route('news.psa-article') }}" style="color: #326D78; text-decoration: none; font-weight: 500; display: block; margin-bottom: 0.5rem; line-height: 1.4;">
                                {{ getContent('bir_related_article2_title', 'Philippine Standards on Auditing (PSA) Updates for 2025') }}
                            </a>
                            <small style="color: #999;">{{ getContent('bir_related_article2_date', 'January 8, 2025') }}</small>
                        </div>

                        <div>
                            <a href="{{ route('news.updates') }}" style="color: #326D78; text-decoration: none; font-weight: 500; font-size: 0.9rem;">
                                {{ getContent('bir_view_all_news', 'View All News') }}
                                <i class="fas fa-arrow-right ms-1"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Contact CTA -->
                    <div style="background: #326D78; color: white; padding: 2rem; border-radius: 10px;" data-aos="fade-up" data-aos-delay="200">
                        <h5 style="color: white; font-weight: 600; margin-bottom: 1rem;">
                            {{ getContent('bir_cta_title', 'Need Compliance Assistance?') }}
                        </h5>
                        <p style="color: rgba(255,255,255,0.9); margin-bottom: 1.5rem; line-height: 1.6;">
                            {{ getContent('bir_cta_description', 'Our team can help you navigate the new BIR digital receipt requirements and ensure full compliance.') }}
                        </p>
                        <a href="{{ url('/#contact') }}" style="display: inline-block; background: white; color: #326D78; padding: 0.75rem 1.5rem; border-radius: 8px; text-decoration: none; font-weight: 600; transition: all 0.3s ease; width: 100%; text-align: center;">
                            {{ getContent('bir_cta_button', 'Contact Us Today') }}
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
        background: #2a5f6a !important;
        transform: translateY(-2px);
        box-shadow: 0 4px 15px rgba(50, 109, 120, 0.3);
    }

    /* Back button hover */
    section a[href*="news.updates"]:hover {
        background: #326D78 !important;
        color: white !important;
        transform: translateY(-2px);
        box-shadow: 0 4px 15px rgba(50, 109, 120, 0.2);
    }

    /* CTA button hover */
    div a[href*="contact"]:hover {
        background: #f8f9fa !important;
        color: #326D78 !important;
        transform: translateY(-2px);
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    }

    /* Related articles hover */
    .col-lg-4 a[style*="color: #326D78"]:hover {
        text-decoration: underline !important;
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

        div[style*="display: flex; justify-content: space-between"] {
            flex-direction: column;
            gap: 1rem;
        }

        div[style*="display: flex; align-items: flex-start"] {
            flex-direction: column;
            gap: 0.5rem;
        }

        div[style*="min-width: 120px"] {
            min-width: auto !important;
            margin-right: 0 !important;
            margin-bottom: 0.5rem;
        }
    }
</style>

@endsection
