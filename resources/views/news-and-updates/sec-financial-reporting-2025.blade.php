@extends('layouts.app')

@section('title', 'SEC Announces Updated Financial Reporting Standards for 2025 | Mendoza Tugano & Co., CPAs')

@section('content')

<!-- Clean Header Section -->
<div style="position: relative; margin-top: -1.5rem; background: #5ba3b0; padding: 100px 0 80px 0;">

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
                <li class="breadcrumb-item active" aria-current="page" style="color: #6c757d; font-weight: 500;">SEC Financial Reporting</li>
            </ol>
        </nav>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <!-- Category Badge -->
                <div style="margin-bottom: 1rem;">
                    <span style="background: rgba(255,255,255,0.2); color: white; padding: 0.5rem 1rem; border-radius: 20px; font-size: 0.9rem; font-weight: 600; backdrop-filter: blur(10px);">
                        {{ getContent('sec_article_category', 'SEC Regulations') }}
                    </span>
                </div>

                <h1 style="color: white; font-size: 3rem; font-weight: 600; margin-bottom: 1.5rem; line-height: 1.2;">
                    {{ getContent('sec_article_title', 'SEC Announces Updated Financial Reporting Standards for 2025') }}
                </h1>

                <!-- Article Meta -->
                <div style="display: flex; align-items: center; gap: 1.5rem; margin-bottom: 1rem; color: rgba(255,255,255,0.9); font-size: 0.95rem;">
                    <div style="display: flex; align-items: center;">
                        <i class="fas fa-calendar-alt me-2"></i>
                        <span>{{ getContent('sec_article_date', 'January 10, 2025') }}</span>
                    </div>
                    <div style="display: flex; align-items: center;">
                        <i class="fas fa-clock me-2"></i>
                        <span>{{ getContent('sec_article_read_time', '6 min read') }}</span>
                    </div>
                    <div style="display: flex; align-items: center;">
                        <i class="fas fa-user me-2"></i>
                        <span>{{ getContent('sec_article_author', 'MTC Editorial Team') }}</span>
                    </div>
                </div>

                <p style="color: rgba(255,255,255,0.9); font-size: 1.2rem; line-height: 1.6; margin: 0;">
                    {{ getContent('sec_article_subtitle', 'Comprehensive updates to disclosure requirements and revenue recognition guidelines affecting publicly listed companies and large corporations.') }}
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
                    @if(hasImageContent('sec_article_featured_image'))
                        <img src="{{ getContent('sec_article_featured_image') }}" alt="SEC Financial Reporting Standards" style="width: 100%; height: 350px; object-fit: cover; border-radius: 10px; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
                    @else
                        <img src="{{ asset('assets/img/news2.jpg') }}" alt="SEC Financial Reporting Standards" style="width: 100%; height: 350px; object-fit: cover; border-radius: 10px; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
                    @endif
                </div>

                <!-- Article Content -->
                <div class="article-content" style="line-height: 1.8; font-size: 1.1rem; color: #444;">

                    <!-- Introduction -->
                    <div style="margin-bottom: 2.5rem;" data-aos="fade-up" data-aos-delay="100">
                        <p style="margin-bottom: 1.5rem;">
                            {{ getContent('sec_article_intro', 'The Securities and Exchange Commission (SEC) has released Memorandum Circular No. 2-2025, introducing comprehensive updates to financial reporting standards that will take effect for financial statements covering periods beginning June 15, 2025. These changes represent the most significant overhaul of reporting requirements in the past five years, directly impacting publicly listed companies, large corporations, and entities under SEC oversight.') }}
                        </p>
                    </div>

                    <!-- Enhanced Disclosure Requirements -->
                    <div style="margin-bottom: 2.5rem;" data-aos="fade-up" data-aos-delay="200">
                        <h2 style="color: #5ba3b0; font-weight: 600; margin-bottom: 1.5rem; font-size: 1.8rem;">
                            {{ getContent('sec_article_disclosure_title', 'Enhanced Disclosure Requirements') }}
                        </h2>

                        <p style="margin-bottom: 1.5rem;">
                            {{ getContent('sec_article_disclosure_intro', 'The updated standards introduce expanded disclosure obligations designed to provide investors and stakeholders with more comprehensive and transparent financial information:') }}
                        </p>

                        <div style="background: #f8f9fa; padding: 2rem; border-radius: 10px; border-left: 4px solid #5ba3b0; margin-bottom: 2rem;">
                            <h4 style="color: #5ba3b0; font-weight: 600; margin-bottom: 1rem;">
                                {{ getContent('sec_article_related_party_title', 'Related Party Transactions') }}
                            </h4>
                            <p style="margin-bottom: 1rem; color: #666;">
                                {{ getContent('sec_article_related_party_content', 'Companies must now provide detailed explanations of the business rationale behind related party transactions, including independent valuations for significant transactions and quarterly monitoring reports for ongoing arrangements exceeding PHP 50 million annually.') }}
                            </p>
                        </div>

                        <p style="margin-bottom: 1.5rem;">
                            {{ getContent('sec_article_disclosure_details', 'The new requirements also mandate enhanced disclosure of environmental, social, and governance (ESG) metrics, with specific reporting templates for sustainability initiatives, carbon footprint assessments, and social impact programs. Companies must demonstrate how these factors integrate with their overall business strategy and risk management framework.') }}
                        </p>
                    </div>

                    <!-- Revenue Recognition Changes -->
                    <div style="margin-bottom: 2.5rem;" data-aos="fade-up" data-aos-delay="300">
                        <h2 style="color: #5ba3b0; font-weight: 600; margin-bottom: 1.5rem; font-size: 1.8rem;">
                            {{ getContent('sec_article_revenue_title', 'Revised Revenue Recognition Guidelines') }}
                        </h2>

                        <div style="margin-bottom: 2rem;">
                            <div style="display: flex; align-items: flex-start; margin-bottom: 1.5rem;">
                                <div style="background: #5ba3b0; color: white; padding: 0.5rem 1rem; border-radius: 15px; font-weight: 600; margin-right: 1rem; min-width: 140px; text-align: center; font-size: 0.9rem;">
                                    {{ getContent('sec_article_service_sector', 'Service Industries') }}
                                </div>
                                <div>
                                    <h4 style="color: #333; margin-bottom: 0.5rem;">{{ getContent('sec_article_service_title', 'Performance Obligation Clarity') }}</h4>
                                    <p style="color: #666; margin: 0;">{{ getContent('sec_article_service_desc', 'Detailed guidance on identifying and measuring performance obligations for consulting, IT services, and professional service contracts.') }}</p>
                                </div>
                            </div>

                            <div style="display: flex; align-items: flex-start; margin-bottom: 1.5rem;">
                                <div style="background: #4a8a96; color: white; padding: 0.5rem 1rem; border-radius: 15px; font-weight: 600; margin-right: 1rem; min-width: 140px; text-align: center; font-size: 0.9rem;">
                                    {{ getContent('sec_article_subscription_sector', 'Subscription Models') }}
                                </div>
                                <div>
                                    <h4 style="color: #333; margin-bottom: 0.5rem;">{{ getContent('sec_article_subscription_title', 'Contract Modifications') }}</h4>
                                    <p style="color: #666; margin: 0;">{{ getContent('sec_article_subscription_desc', 'New accounting treatment for subscription-based revenue models, including SaaS platforms and recurring service agreements.') }}</p>
                                </div>
                            </div>

                            <div style="display: flex; align-items: flex-start;">
                                <div style="background: #326D78; color: white; padding: 0.5rem 1rem; border-radius: 15px; font-weight: 600; margin-right: 1rem; min-width: 140px; text-align: center; font-size: 0.9rem;">
                                    {{ getContent('sec_article_construction_sector', 'Construction') }}
                                </div>
                                <div>
                                    <h4 style="color: #333; margin-bottom: 0.5rem;">{{ getContent('sec_article_construction_title', 'Progress Measurement') }}</h4>
                                    <p style="color: #666; margin: 0;">{{ getContent('sec_article_construction_desc', 'Enhanced requirements for measuring progress toward completion and recognizing revenue over time for long-term construction contracts.') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Implementation Guidance -->
                    <div style="margin-bottom: 2.5rem;" data-aos="fade-up" data-aos-delay="400">
                        <h2 style="color: #5ba3b0; font-weight: 600; margin-bottom: 1.5rem; font-size: 1.8rem;">
                            {{ getContent('sec_article_implementation_title', 'Implementation and Transition Requirements') }}
                        </h2>

                        <p style="margin-bottom: 1.5rem;">
                            {{ getContent('sec_article_implementation_intro', 'The SEC has outlined specific transition requirements to ensure smooth adoption of the new standards while maintaining comparability of financial information:') }}
                        </p>

                        <div style="background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%); padding: 2rem; border-radius: 15px; margin-bottom: 2rem;">
                            <h4 style="color: #5ba3b0; font-weight: 600; margin-bottom: 1.5rem;">
                                {{ getContent('sec_article_transition_title', 'Transition Timeline and Requirements') }}
                            </h4>
                            <ul style="margin-bottom: 0; padding-left: 1.5rem;">
                                <li style="margin-bottom: 0.75rem; color: #666;">{{ getContent('sec_article_transition1', 'Comparative financial statements must be restated using the new standards') }}</li>
                                <li style="margin-bottom: 0.75rem; color: #666;">{{ getContent('sec_article_transition2', 'Detailed reconciliation of changes from previous reporting methods required') }}</li>
                                <li style="margin-bottom: 0.75rem; color: #666;">{{ getContent('sec_article_transition3', 'Early adoption permitted for companies with sufficient preparation and systems') }}</li>
                                <li style="margin-bottom: 0; color: #666;">{{ getContent('sec_article_transition4', 'Mandatory training for key accounting personnel and external auditors') }}</li>
                            </ul>
                        </div>

                        <p style="margin-bottom: 1.5rem;">
                            {{ getContent('sec_article_implementation_systems', 'Companies are strongly encouraged to assess their current financial reporting systems and processes to identify necessary upgrades or modifications. The SEC will provide additional technical guidance through a series of webinars and consultation sessions scheduled between February and May 2025.') }}
                        </p>
                    </div>

                    <!-- Industry Impact Analysis -->
                    <div style="margin-bottom: 2.5rem;" data-aos="fade-up" data-aos-delay="500">
                        <h2 style="color: #5ba3b0; font-weight: 600; margin-bottom: 1.5rem; font-size: 1.8rem;">
                            {{ getContent('sec_article_impact_title', 'Industry-Specific Considerations') }}
                        </h2>

                        <div style="background: #5ba3b0; color: white; padding: 2rem; border-radius: 15px; margin-bottom: 2rem;">
                            <h4 style="color: white; font-weight: 600; margin-bottom: 1rem;">
                                {{ getContent('sec_article_sectors_title', 'Most Affected Sectors') }}
                            </h4>
                            <p style="color: rgba(255,255,255,0.9); margin-bottom: 1rem;">
                                {{ getContent('sec_article_sectors_intro', 'The following industries will experience the most significant impact from the new reporting standards:') }}
                            </p>
                            <ol style="margin: 0; padding-left: 1.5rem; color: rgba(255,255,255,0.9);">
                                <li style="margin-bottom: 0.75rem;">{{ getContent('sec_article_sector1', 'Financial services and banking institutions due to enhanced risk disclosure requirements') }}</li>
                                <li style="margin-bottom: 0.75rem;">{{ getContent('sec_article_sector2', 'Real estate and construction companies with long-term contract revenue recognition changes') }}</li>
                                <li style="margin-bottom: 0.75rem;">{{ getContent('sec_article_sector3', 'Technology and telecommunications firms with subscription-based revenue models') }}</li>
                                <li style="margin-bottom: 0.75rem;">{{ getContent('sec_article_sector4', 'Conglomerates with complex related party transaction structures') }}</li>
                                <li style="margin-bottom: 0;">{{ getContent('sec_article_sector5', 'Public utilities and infrastructure companies with ESG reporting obligations') }}</li>
                            </ol>
                        </div>

                        <p style="margin-bottom: 0;">
                            {{ getContent('sec_article_conclusion', 'Our team at Mendoza Tugano & Co., CPAs recommends early engagement with these new requirements to ensure seamless implementation. We offer comprehensive support services including gap analysis, system assessment, staff training, and ongoing compliance monitoring to help your organization navigate these significant changes successfully.') }}
                        </p>
                    </div>

                </div>

                <!-- Back to News -->
                <div style="margin-top: 3rem;" data-aos="fade-up" data-aos-delay="700">
                    <a href="{{ route('news.updates') }}" style="display: inline-flex; align-items: center; background: #f8f9fa; color: #5ba3b0; padding: 1rem 2rem; border-radius: 8px; text-decoration: none; font-weight: 600; transition: all 0.3s ease; border: 2px solid #e9ecef;">
                        <i class="fas fa-arrow-left me-2"></i>
                        {{ getContent('sec_article_back_button', 'Back to News & Updates') }}
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
                            <a href="{{ route('news.bir-article') }}" style="color: #5ba3b0; text-decoration: none; font-weight: 500; display: block; margin-bottom: 0.5rem; line-height: 1.4;">
                                {{ getContent('sec_related_article1_title', 'New BIR Revenue Regulation on Digital Tax Receipts') }}
                            </a>
                            <small style="color: #999;">{{ getContent('sec_related_article1_date', 'January 15, 2025') }}</small>
                        </div>

                        <div style="margin-bottom: 1.5rem; padding-bottom: 1.5rem; border-bottom: 1px solid #f1f1f1;">
                            <a href="{{ route('news.psa-article') }}" style="color: #5ba3b0; text-decoration: none; font-weight: 500; display: block; margin-bottom: 0.5rem; line-height: 1.4;">
                                {{ getContent('sec_related_article2_title', 'Philippine Standards on Auditing (PSA) Updates for 2025') }}
                            </a>
                            <small style="color: #999;">{{ getContent('sec_related_article2_date', 'January 8, 2025') }}</small>
                        </div>

                        <div>
                            <a href="{{ route('news.updates') }}" style="color: #5ba3b0; text-decoration: none; font-weight: 500; font-size: 0.9rem;">
                                {{ getContent('sec_view_all_news', 'View All News') }}
                                <i class="fas fa-arrow-right ms-1"></i>
                            </a>
                        </div>
                    </div>

                    <!-- Contact CTA -->
                    <div style="background: #5ba3b0; color: white; padding: 2rem; border-radius: 10px;" data-aos="fade-up" data-aos-delay="200">
                        <h5 style="color: white; font-weight: 600; margin-bottom: 1rem;">
                            {{ getContent('sec_cta_title', 'Need SEC Compliance Support?') }}
                        </h5>
                        <p style="color: rgba(255,255,255,0.9); margin-bottom: 1.5rem; line-height: 1.6;">
                            {{ getContent('sec_cta_description', 'Our experts can help you implement the new SEC financial reporting standards and ensure full compliance.') }}
                        </p>
                        <a href="{{ url('/#contact') }}" style="display: inline-block; background: white; color: #5ba3b0; padding: 0.75rem 1.5rem; border-radius: 8px; text-decoration: none; font-weight: 600; transition: all 0.3s ease; width: 100%; text-align: center;">
                            {{ getContent('sec_cta_button', 'Contact Our Team') }}
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
        background: #4a8a96 !important;
        transform: translateY(-2px);
        box-shadow: 0 4px 15px rgba(91, 163, 176, 0.3);
    }

    /* Back button hover */
    section a[href*="news.updates"]:hover {
        background: #5ba3b0 !important;
        color: white !important;
        transform: translateY(-2px);
        box-shadow: 0 4px 15px rgba(91, 163, 176, 0.2);
    }

    /* CTA button hover */
    div a[href*="contact"]:hover {
        background: #f8f9fa !important;
        color: #5ba3b0 !important;
        transform: translateY(-2px);
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    }

    /* Related articles hover */
    .col-lg-4 a[style*="color: #5ba3b0"]:hover {
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

        div[style*="min-width: 140px"] {
            min-width: auto !important;
            margin-right: 0 !important;
            margin-bottom: 0.5rem;
        }
    }
</style>

@endsection
