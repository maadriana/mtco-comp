@extends('layouts.app')

@section('title', 'Tax Tools and Information | Mendoza Tugano & Co., CPAs')

@section('content')

<!-- Hero Section -->
<div style="position: relative; margin-top: -1.5rem; background: linear-gradient(135deg, #f8fafb 0%, #e9ecef 100%); padding: 120px 0 100px 0;">

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
                <li class="breadcrumb-item active" aria-current="page" style="color: #6c757d; font-weight: 500;">Tax Tools & Information</li>
            </ol>
        </nav>
    </div>

    <!-- Decorative Elements -->
    <div style="position: absolute; top: 20%; right: 10%; width: 100px; height: 100px; background: rgba(50, 109, 120, 0.08); border-radius: 50%; z-index: 1;"></div>
    <div style="position: absolute; bottom: 20%; left: 8%; width: 60px; height: 60px; background: rgba(91, 163, 176, 0.1); transform: rotate(45deg); border-radius: 15px; z-index: 1;"></div>

    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <div style="display: inline-block; background: rgba(50, 109, 120, 0.1); color: #326D78; padding: 0.5rem 1rem; border-radius: 20px; font-size: 0.9rem; font-weight: 600; margin-bottom: 1.5rem;">
                    {{ getContent('tax_tools_badge', 'PUBLICATIONS') }}
                </div>

                <h1 style="font-size: 3.5rem; font-weight: 600; color: #2a2a2a; line-height: 1.2; margin-bottom: 1.5rem;">
                    {{ getContent('tax_tools_title', 'Tax Tools and Information') }}
                </h1>

                <p style="font-size: 1.3rem; color: #6c757d; line-height: 1.6; margin-bottom: 2rem; max-width: 600px;">
                    {{ getContent('tax_tools_subtitle', 'Access comprehensive tax resources, calculators, and compliance tools designed to simplify your tax planning and filing requirements.') }}
                </p>

                <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
                    <a href="#calculators" style="display: inline-flex; align-items: center; background: #326D78; color: white; padding: 1rem 2rem; border-radius: 8px; text-decoration: none; font-weight: 600; transition: all 0.3s ease;">
                        <i class="fas fa-calculator me-2"></i>
                        {{ getContent('tax_tools_cta_calculators', 'Tax Calculators') }}
                    </a>
                    <a href="#resources" style="display: inline-flex; align-items: center; background: transparent; color: #326D78; padding: 1rem 2rem; border-radius: 8px; text-decoration: none; font-weight: 600; transition: all 0.3s ease; border: 2px solid #326D78;">
                        <i class="fas fa-download me-2"></i>
                        {{ getContent('tax_tools_cta_resources', 'BIR Resources') }}
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Quick Tax Calculators Section -->
<section id="calculators" class="py-5" style="background: white;">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-8 text-center">
                <h2 style="font-size: 2.5rem; font-weight: 600; color: #2a2a2a; margin-bottom: 1rem;">
                    {{ getContent('tax_calculators_title', 'Tax Calculators') }}
                </h2>
                <p style="color: #666; font-size: 1.2rem; line-height: 1.6;">
                    {{ getContent('tax_calculators_description', 'Quick and accurate tax calculations for individuals and businesses. All calculators are updated with the latest BIR rates and regulations.') }}
                </p>
            </div>
        </div>

        <div class="row g-4">
            <!-- Income Tax Calculator -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div style="background: white; border: 2px solid #e9ecef; border-radius: 15px; padding: 2rem; text-align: center; transition: all 0.3s ease; height: 100%;">
                    <div style="width: 80px; height: 80px; background: linear-gradient(135deg, #326D78, #5ba3b0); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem;">
                        <i class="fas fa-user-tie" style="color: white; font-size: 2rem;"></i>
                    </div>
                    <h4 style="color: #326D78; font-weight: 600; margin-bottom: 1rem;">
                        {{ getContent('tax_calc_income_title', 'Income Tax Calculator') }}
                    </h4>
                    <p style="color: #666; margin-bottom: 1.5rem; line-height: 1.6;">
                        {{ getContent('tax_calc_income_desc', 'Calculate individual income tax based on the latest TRAIN law provisions and updated tax brackets.') }}
                    </p>
                    <button onclick="openCalculator('income')" style="background: #326D78; color: white; border: none; padding: 0.75rem 2rem; border-radius: 8px; font-weight: 600; cursor: pointer; transition: all 0.3s ease; width: 100%;">
                        {{ getContent('tax_calc_income_button', 'Calculate Now') }}
                    </button>
                </div>
            </div>

            <!-- VAT Calculator -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div style="background: white; border: 2px solid #e9ecef; border-radius: 15px; padding: 2rem; text-align: center; transition: all 0.3s ease; height: 100%;">
                    <div style="width: 80px; height: 80px; background: linear-gradient(135deg, #5ba3b0, #4a8a96); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem;">
                        <i class="fas fa-percentage" style="color: white; font-size: 2rem;"></i>
                    </div>
                    <h4 style="color: #5ba3b0; font-weight: 600; margin-bottom: 1rem;">
                        {{ getContent('tax_calc_vat_title', 'VAT Calculator') }}
                    </h4>
                    <p style="color: #666; margin-bottom: 1.5rem; line-height: 1.6;">
                        {{ getContent('tax_calc_vat_desc', 'Calculate Value Added Tax (VAT) for goods and services with automatic 12% computation.') }}
                    </p>
                    <button onclick="openCalculator('vat')" style="background: #5ba3b0; color: white; border: none; padding: 0.75rem 2rem; border-radius: 8px; font-weight: 600; cursor: pointer; transition: all 0.3s ease; width: 100%;">
                        {{ getContent('tax_calc_vat_button', 'Calculate VAT') }}
                    </button>
                </div>
            </div>

            <!-- Withholding Tax Calculator -->
            <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                <div style="background: white; border: 2px solid #e9ecef; border-radius: 15px; padding: 2rem; text-align: center; transition: all 0.3s ease; height: 100%;">
                    <div style="width: 80px; height: 80px; background: linear-gradient(135deg, #4a8a96, #326D78); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem;">
                        <i class="fas fa-hand-holding-usd" style="color: white; font-size: 2rem;"></i>
                    </div>
                    <h4 style="color: #4a8a96; font-weight: 600; margin-bottom: 1rem;">
                        {{ getContent('tax_calc_withholding_title', 'Withholding Tax Calculator') }}
                    </h4>
                    <p style="color: #666; margin-bottom: 1.5rem; line-height: 1.6;">
                        {{ getContent('tax_calc_withholding_desc', 'Compute withholding tax for various income types including professional fees and rental income.') }}
                    </p>
                    <button onclick="openCalculator('withholding')" style="background: #4a8a96; color: white; border: none; padding: 0.75rem 2rem; border-radius: 8px; font-weight: 600; cursor: pointer; transition: all 0.3s ease; width: 100%;">
                        {{ getContent('tax_calc_withholding_button', 'Calculate Withholding') }}
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- BIR Resources Section -->
<section id="resources" class="py-5" style="background: #f8f9fa;">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-8 text-center">
                <h2 style="font-size: 2.5rem; font-weight: 600; color: #2a2a2a; margin-bottom: 1rem;">
                    {{ getContent('bir_resources_title', 'BIR Resources & Forms') }}
                </h2>
                <p style="color: #666; font-size: 1.2rem; line-height: 1.6;">
                    {{ getContent('bir_resources_description', 'Access the latest BIR forms, revenue regulations, and tax circulars. Stay updated with current tax requirements and deadlines.') }}
                </p>
            </div>
        </div>

        <div class="row g-4">
            <!-- Tax Forms -->
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                <div style="background: white; border-radius: 15px; padding: 2.5rem; height: 100%; box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
                    <div style="display: flex; align-items: center; margin-bottom: 2rem;">
                        <div style="width: 60px; height: 60px; background: #326D78; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-right: 1rem;">
                            <i class="fas fa-file-alt" style="color: white; font-size: 1.5rem;"></i>
                        </div>
                        <h4 style="color: #326D78; font-weight: 600; margin: 0;">
                            {{ getContent('bir_forms_title', 'Tax Forms & Templates') }}
                        </h4>
                    </div>
                    <p style="color: #666; margin-bottom: 2rem; line-height: 1.6;">
                        {{ getContent('bir_forms_description', 'Download commonly used BIR forms including income tax returns, VAT returns, and various registration forms.') }}
                    </p>
                    <div style="margin-bottom: 1rem;">
                        <a href="#" style="color: #326D78; text-decoration: none; display: block; padding: 0.5rem 0; font-weight: 500; border-bottom: 1px solid #f1f1f1;">
                            <i class="fas fa-download me-2"></i>{{ getContent('bir_form1', 'BIR Form 1701 - Annual Income Tax Return') }}
                        </a>
                        <a href="#" style="color: #326D78; text-decoration: none; display: block; padding: 0.5rem 0; font-weight: 500; border-bottom: 1px solid #f1f1f1;">
                            <i class="fas fa-download me-2"></i>{{ getContent('bir_form2', 'BIR Form 2551M - Monthly VAT Return') }}
                        </a>
                        <a href="#" style="color: #326D78; text-decoration: none; display: block; padding: 0.5rem 0; font-weight: 500; border-bottom: 1px solid #f1f1f1;">
                            <i class="fas fa-download me-2"></i>{{ getContent('bir_form3', 'BIR Form 1601C - Monthly Withholding Tax') }}
                        </a>
                        <a href="#" style="color: #326D78; text-decoration: none; display: block; padding: 0.5rem 0; font-weight: 500;">
                            <i class="fas fa-download me-2"></i>{{ getContent('bir_form4', 'BIR Form 0605 - Business Registration') }}
                        </a>
                    </div>
                </div>
            </div>

            <!-- Revenue Regulations -->
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                <div style="background: white; border-radius: 15px; padding: 2.5rem; height: 100%; box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
                    <div style="display: flex; align-items: center; margin-bottom: 2rem;">
                        <div style="width: 60px; height: 60px; background: #5ba3b0; border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-right: 1rem;">
                            <i class="fas fa-gavel" style="color: white; font-size: 1.5rem;"></i>
                        </div>
                        <h4 style="color: #5ba3b0; font-weight: 600; margin: 0;">
                            {{ getContent('bir_regulations_title', 'Revenue Regulations') }}
                        </h4>
                    </div>
                    <p style="color: #666; margin-bottom: 2rem; line-height: 1.6;">
                        {{ getContent('bir_regulations_description', 'Latest revenue regulations, memorandum circulars, and tax advisories from the Bureau of Internal Revenue.') }}
                    </p>
                    <div style="margin-bottom: 1rem;">
                        <a href="#" style="color: #5ba3b0; text-decoration: none; display: block; padding: 0.5rem 0; font-weight: 500; border-bottom: 1px solid #f1f1f1;">
                            <i class="fas fa-file-pdf me-2"></i>{{ getContent('bir_regulation1', 'RR No. 25-2024 - Digital Tax Receipts') }}
                        </a>
                        <a href="#" style="color: #5ba3b0; text-decoration: none; display: block; padding: 0.5rem 0; font-weight: 500; border-bottom: 1px solid #f1f1f1;">
                            <i class="fas fa-file-pdf me-2"></i>{{ getContent('bir_regulation2', 'RMC No. 168-2024 - Tax Amnesty Guidelines') }}
                        </a>
                        <a href="#" style="color: #5ba3b0; text-decoration: none; display: block; padding: 0.5rem 0; font-weight: 500; border-bottom: 1px solid #f1f1f1;">
                            <i class="fas fa-file-pdf me-2"></i>{{ getContent('bir_regulation3', 'RMO No. 46-2024 - Online Filing Updates') }}
                        </a>
                        <a href="#" style="color: #5ba3b0; text-decoration: none; display: block; padding: 0.5rem 0; font-weight: 500;">
                            <i class="fas fa-file-pdf me-2"></i>{{ getContent('bir_regulation4', 'View All Regulations →') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Tax Calendar & Deadlines -->
<section class="py-5" style="background: #f8f9fa;">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-8 text-center">
                <h2 style="font-size: 2.5rem; font-weight: 600; color: #2a2a2a; margin-bottom: 1rem;">
                    {{ getContent('tax_calendar_title', 'Tax Calendar & Deadlines') }}
                </h2>
                <p style="color: #666; font-size: 1.2rem; line-height: 1.6;">
                    {{ getContent('tax_calendar_description', 'Never miss important tax deadlines with our comprehensive tax calendar. Get timely reminders for BIR filing requirements and compliance deadlines.') }}
                </p>
            </div>
        </div>

        <div class="row g-4">
            <!-- Tax Calendar Feature -->
            <div class="col-lg-8" data-aos="fade-up" data-aos-delay="100">
                <div style="background: white; border-radius: 15px; padding: 2.5rem; height: 100%; box-shadow: 0 4px 15px rgba(0,0,0,0.05); border-left: 6px solid #326D78;">
                    <div style="display: flex; align-items: center; margin-bottom: 2rem;">
                        <div style="width: 60px; height: 60px; background: linear-gradient(135deg, #326D78, #5ba3b0); border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-right: 1rem;">
                            <i class="fas fa-calendar-alt" style="color: white; font-size: 1.5rem;"></i>
                        </div>
                        <h4 style="color: #326D78; font-weight: 600; margin: 0; font-size: 1.5rem;">
                            {{ getContent('tax_calendar_feature_title', 'Interactive Tax Calendar') }}
                        </h4>
                    </div>

                    <p style="color: #666; margin-bottom: 2rem; line-height: 1.6; font-size: 1.1rem;">
                        {{ getContent('tax_calendar_feature_description', 'Access our comprehensive tax calendar with all important BIR deadlines, filing requirements, and payment due dates. Get automated reminders and stay compliant with Philippine tax regulations.') }}
                    </p>

                    <div style="background: #f8f9fa; padding: 2rem; border-radius: 10px; margin-bottom: 2rem;">
                        <h5 style="color: #326D78; font-weight: 600; margin-bottom: 1.5rem;">Calendar Features:</h5>
                        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem;">
                            <div style="display: flex; align-items: center;">
                                <i class="fas fa-check-circle" style="color: #326D78; margin-right: 0.75rem;"></i>
                                <span style="color: #666;">{{ getContent('tax_calendar_feature1', 'Monthly Filing Deadlines') }}</span>
                            </div>
                            <div style="display: flex; align-items: center;">
                                <i class="fas fa-check-circle" style="color: #326D78; margin-right: 0.75rem;"></i>
                                <span style="color: #666;">{{ getContent('tax_calendar_feature2', 'Quarterly Requirements') }}</span>
                            </div>
                            <div style="display: flex; align-items: center;">
                                <i class="fas fa-check-circle" style="color: #326D78; margin-right: 0.75rem;"></i>
                                <span style="color: #666;">{{ getContent('tax_calendar_feature3', 'Annual Tax Returns') }}</span>
                            </div>
                            <div style="display: flex; align-items: center;">
                                <i class="fas fa-check-circle" style="color: #326D78; margin-right: 0.75rem;"></i>
                                <span style="color: #666;">{{ getContent('tax_calendar_feature4', 'Email Reminders') }}</span>
                            </div>
                        </div>
                    </div>

                    <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
                        <a href="#" style="display: inline-flex; align-items: center; background: #326D78; color: white; padding: 0.75rem 1.5rem; border-radius: 8px; text-decoration: none; font-weight: 600; transition: all 0.3s ease;">
                            <i class="fas fa-calendar-alt me-2"></i>
                            {{ getContent('tax_calendar_view_button', 'View Tax Calendar') }}
                        </a>
                        <a href="#" style="display: inline-flex; align-items: center; background: transparent; color: #326D78; padding: 0.75rem 1.5rem; border-radius: 8px; text-decoration: none; font-weight: 600; transition: all 0.3s ease; border: 2px solid #326D78;">
                            <i class="fas fa-bell me-2"></i>
                            {{ getContent('tax_calendar_subscribe_button', 'Subscribe to Reminders') }}
                        </a>
                    </div>
                </div>
            </div>

            <!-- Upcoming Deadlines Sidebar -->
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div style="background: white; border-radius: 15px; padding: 2rem; height: 100%; box-shadow: 0 4px 15px rgba(0,0,0,0.05); border-left: 6px solid #5ba3b0;">
                    <h4 style="color: #5ba3b0; font-weight: 600; margin-bottom: 1.5rem; text-align: center;">
                        {{ getContent('tax_upcoming_title', 'Upcoming Deadlines') }}
                    </h4>

                    <div style="margin-bottom: 1.5rem; padding: 1.5rem; background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%); border-radius: 10px; border-left: 4px solid #326D78;">
                        <div style="font-weight: 600; color: #326D78; margin-bottom: 0.5rem; font-size: 1.1rem;">
                            {{ getContent('tax_deadline1_date', 'January 31, 2025') }}
                        </div>
                        <div style="color: #666; font-size: 0.95rem; line-height: 1.4;">
                            {{ getContent('tax_deadline1_desc', 'Annual Income Tax Return Filing for individuals and corporations') }}
                        </div>
                    </div>

                    <div style="margin-bottom: 1.5rem; padding: 1.5rem; background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%); border-radius: 10px; border-left: 4px solid #5ba3b0;">
                        <div style="font-weight: 600; color: #5ba3b0; margin-bottom: 0.5rem; font-size: 1.1rem;">
                            {{ getContent('tax_deadline2_date', 'February 28, 2025') }}
                        </div>
                        <div style="color: #666; font-size: 0.95rem; line-height: 1.4;">
                            {{ getContent('tax_deadline2_desc', 'Q4 VAT Return Submission and final quarterly payments') }}
                        </div>
                    </div>

                    <div style="margin-bottom: 1.5rem; padding: 1.5rem; background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%); border-radius: 10px; border-left: 4px solid #4a8a96;">
                        <div style="font-weight: 600; color: #4a8a96; margin-bottom: 0.5rem; font-size: 1.1rem;">
                            {{ getContent('tax_deadline3_date', 'March 15, 2025') }}
                        </div>
                        <div style="color: #666; font-size: 0.95rem; line-height: 1.4;">
                            {{ getContent('tax_deadline3_desc', 'Corporate Income Tax Payment due for calendar year filers') }}
                        </div>
                    </div>

                    <div style="text-align: center; margin-top: 1.5rem;">
                        <a href="#" style="color: #5ba3b0; text-decoration: none; font-weight: 600; border-bottom: 2px solid rgba(91, 163, 176, 0.3); padding-bottom: 2px;">
                            {{ getContent('tax_view_all_deadlines', 'View All Deadlines') }} →
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Tax Planning Guides -->
<section class="py-5" style="background: white;">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-8 text-center">
                <h2 style="font-size: 2.5rem; font-weight: 600; color: #2a2a2a; margin-bottom: 1rem;">
                    {{ getContent('tax_guides_title', 'Tax Planning Guides') }}
                </h2>
                <p style="color: #666; font-size: 1.2rem; line-height: 1.6;">
                    {{ getContent('tax_guides_description', 'Comprehensive guides to help you navigate complex tax scenarios and optimize your tax planning strategies.') }}
                </p>
            </div>
        </div>

        <div class="row g-4">
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div style="background: linear-gradient(135deg, #326D78, #5ba3b0); color: white; border-radius: 15px; padding: 2rem; height: 100%; text-align: center;">
                    <i class="fas fa-chart-line" style="font-size: 3rem; margin-bottom: 1rem; opacity: 0.9;"></i>
                    <h4 style="color: white; font-weight: 600; margin-bottom: 1rem;">
                        {{ getContent('tax_guide1_title', 'Business Tax Planning') }}
                    </h4>
                    <p style="color: rgba(255,255,255,0.9); margin-bottom: 1.5rem;">
                        {{ getContent('tax_guide1_desc', 'Strategic tax planning for businesses including incorporation options, deduction optimization, and compliance strategies.') }}
                    </p>
                    <a href="#" style="color: white; text-decoration: none; font-weight: 600; border-bottom: 2px solid rgba(255,255,255,0.5); padding-bottom: 2px;">
                        {{ getContent('tax_guide1_link', 'Download Guide') }} →
                    </a>
                </div>
            </div>

            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div style="background: white; border: 2px solid #e9ecef; border-radius: 15px; padding: 2rem; height: 100%; text-align: center;">
                    <i class="fas fa-user-graduate" style="font-size: 3rem; margin-bottom: 1rem; color: #5ba3b0;"></i>
                    <h4 style="color: #5ba3b0; font-weight: 600; margin-bottom: 1rem;">
                        {{ getContent('tax_guide2_title', 'Individual Tax Guide') }}
                    </h4>
                    <p style="color: #666; margin-bottom: 1.5rem;">
                        {{ getContent('tax_guide2_desc', 'Personal income tax planning including allowable deductions, exemptions, and filing requirements for employees and self-employed.') }}
                    </p>
                    <a href="#" style="color: #5ba3b0; text-decoration: none; font-weight: 600; border-bottom: 2px solid rgba(91, 163, 176, 0.5); padding-bottom: 2px;">
                        {{ getContent('tax_guide2_link', 'Download Guide') }} →
                    </a>
                </div>
            </div>

            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                <div style="background: white; border: 2px solid #e9ecef; border-radius: 15px; padding: 2rem; height: 100%; text-align: center;">
                    <i class="fas fa-calendar-check" style="font-size: 3rem; margin-bottom: 1rem; color: #4a8a96;"></i>
                    <h4 style="color: #4a8a96; font-weight: 600; margin-bottom: 1rem;">
                        {{ getContent('tax_guide3_title', 'Year-End Tax Planning') }}
                    </h4>
                    <p style="color: #666; margin-bottom: 1.5rem;">
                        {{ getContent('tax_guide3_desc', 'Essential year-end tax strategies including timing of income and expenses, retirement contributions, and tax loss harvesting.') }}
                    </p>
                    <a href="#" style="color: #4a8a96; text-decoration: none; font-weight: 600; border-bottom: 2px solid rgba(74, 138, 150, 0.5); padding-bottom: 2px;">
                        {{ getContent('tax_guide3_link', 'Download Guide') }} →
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact CTA -->
<section class="py-5" style="background: #f8f9fa;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <div style="background: white; padding: 3rem; border-radius: 20px; box-shadow: 0 8px 25px rgba(0,0,0,0.1);">
                    <div style="width: 80px; height: 80px; background: linear-gradient(135deg, #326D78, #5ba3b0); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 2rem;">
                        <i class="fas fa-handshake" style="color: white; font-size: 2rem;"></i>
                    </div>

                    <h3 style="color: #326D78; font-weight: 600; margin-bottom: 1rem; font-size: 2rem;">
                        {{ getContent('tax_cta_title', 'Need Professional Tax Assistance?') }}
                    </h3>

                    <p style="color: #666; font-size: 1.1rem; line-height: 1.6; margin-bottom: 2rem;">
                        {{ getContent('tax_cta_description', 'Our experienced tax professionals are ready to help you with complex tax matters, planning strategies, and compliance requirements. Contact us for personalized tax advice and solutions.') }}
                    </p>

                    <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
                        <a href="{{ url('/#contact') }}" style="display: inline-flex; align-items: center; background: #326D78; color: white; padding: 1rem 2rem; border-radius: 8px; text-decoration: none; font-weight: 600; transition: all 0.3s ease;">
                            <i class="fas fa-phone me-2"></i>
                            {{ getContent('tax_cta_contact', 'Contact Our Tax Team') }}
                        </a>
                        <a href="{{ route('news.updates') }}" style="display: inline-flex; align-items: center; background: transparent; color: #326D78; padding: 1rem 2rem; border-radius: 8px; text-decoration: none; font-weight: 600; transition: all 0.3s ease; border: 2px solid #326D78;">
                            <i class="fas fa-newspaper me-2"></i>
                            {{ getContent('tax_cta_news', 'Latest Tax Updates') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Calculator Modal -->
<div id="calculatorModal" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.8); z-index: 10000; justify-content: center; align-items: center;">
    <div style="background: white; border-radius: 15px; padding: 2rem; max-width: 500px; width: 90%; max-height: 80vh; overflow-y: auto;">
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 2rem;">
            <h4 id="calculatorTitle" style="color: #326D78; font-weight: 600; margin: 0;">Tax Calculator</h4>
            <button onclick="closeCalculator()" style="background: none; border: none; font-size: 1.5rem; color: #999; cursor: pointer;">×</button>
        </div>

        <div id="calculatorContent">
            <!-- Calculator forms will be loaded here -->
        </div>
    </div>
</div>

<script>
function openCalculator(type) {
    const modal = document.getElementById('calculatorModal');
    const title = document.getElementById('calculatorTitle');
    const content = document.getElementById('calculatorContent');

    // Set title and content based on calculator type
    switch(type) {
        case 'income':
            title.textContent = 'Income Tax Calculator';
            content.innerHTML = `
                <div style="margin-bottom: 1.5rem;">
                    <label style="display: block; margin-bottom: 0.5rem; font-weight: 600; color: #333;">Annual Income (PHP)</label>
                    <input type="number" id="annualIncome" placeholder="Enter your annual income" style="width: 100%; padding: 0.75rem; border: 2px solid #e9ecef; border-radius: 8px;">
                </div>
                <div style="margin-bottom: 1.5rem;">
                    <label style="display: block; margin-bottom: 0.5rem; font-weight: 600; color: #333;">Filing Status</label>
                    <select id="filingStatus" style="width: 100%; padding: 0.75rem; border: 2px solid #e9ecef; border-radius: 8px;">
                        <option value="single">Single</option>
                        <option value="married">Married Filing Jointly</option>
                        <option value="head">Head of Family</option>
                    </select>
                </div>
                <button onclick="calculateIncomeTax()" style="background: #326D78; color: white; border: none; padding: 1rem 2rem; border-radius: 8px; width: 100%; font-weight: 600; cursor: pointer;">Calculate Tax</button>
                <div id="incomeResult" style="margin-top: 1.5rem; padding: 1rem; background: #f8f9fa; border-radius: 8px; display: none;"></div>
            `;
            break;

        case 'vat':
            title.textContent = 'VAT Calculator';
            content.innerHTML = `
                <div style="margin-bottom: 1.5rem;">
                    <label style="display: block; margin-bottom: 0.5rem; font-weight: 600; color: #333;">Amount (PHP)</label>
                    <input type="number" id="vatAmount" placeholder="Enter amount" style="width: 100%; padding: 0.75rem; border: 2px solid #e9ecef; border-radius: 8px;">
                </div>
                <div style="margin-bottom: 1.5rem;">
                    <label style="display: block; margin-bottom: 0.5rem; font-weight: 600; color: #333;">Calculation Type</label>
                    <select id="vatType" style="width: 100%; padding: 0.75rem; border: 2px solid #e9ecef; border-radius: 8px;">
                        <option value="add">Add VAT (12%)</option>
                        <option value="extract">Extract VAT from total</option>
                    </select>
                </div>
                <button onclick="calculateVAT()" style="background: #5ba3b0; color: white; border: none; padding: 1rem 2rem; border-radius: 8px; width: 100%; font-weight: 600; cursor: pointer;">Calculate VAT</button>
                <div id="vatResult" style="margin-top: 1.5rem; padding: 1rem; background: #f8f9fa; border-radius: 8px; display: none;"></div>
            `;
            break;

        case 'withholding':
            title.textContent = 'Withholding Tax Calculator';
            content.innerHTML = `
                <div style="margin-bottom: 1.5rem;">
                    <label style="display: block; margin-bottom: 0.5rem; font-weight: 600; color: #333;">Income Amount (PHP)</label>
                    <input type="number" id="withholdingAmount" placeholder="Enter income amount" style="width: 100%; padding: 0.75rem; border: 2px solid #e9ecef; border-radius: 8px;">
                </div>
                <div style="margin-bottom: 1.5rem;">
                    <label style="display: block; margin-bottom: 0.5rem; font-weight: 600; color: #333;">Income Type</label>
                    <select id="withholdingType" style="width: 100%; padding: 0.75rem; border: 2px solid #e9ecef; border-radius: 8px;">
                        <option value="professional">Professional Fees (10%)</option>
                        <option value="rental">Rental Income (5%)</option>
                        <option value="commission">Commission (10%)</option>
                        <option value="talent">Talent Fee (10%)</option>
                    </select>
                </div>
                <button onclick="calculateWithholding()" style="background: #4a8a96; color: white; border: none; padding: 1rem 2rem; border-radius: 8px; width: 100%; font-weight: 600; cursor: pointer;">Calculate Withholding Tax</button>
                <div id="withholdingResult" style="margin-top: 1.5rem; padding: 1rem; background: #f8f9fa; border-radius: 8px; display: none;"></div>
            `;
            break;
    }

    modal.style.display = 'flex';
}

function closeCalculator() {
    document.getElementById('calculatorModal').style.display = 'none';
}

function calculateIncomeTax() {
    const income = parseFloat(document.getElementById('annualIncome').value);
    const status = document.getElementById('filingStatus').value;

    if (!income || income <= 0) {
        alert('Please enter a valid income amount');
        return;
    }

    let tax = 0;
    let exemption = status === 'single' ? 250000 : 500000; // Basic exemption

    if (income <= exemption) {
        tax = 0;
    } else {
        const taxableIncome = income - exemption;

        // Progressive tax calculation (simplified TRAIN law brackets)
        if (taxableIncome <= 250000) {
            tax = 0;
        } else if (taxableIncome <= 400000) {
            tax = (taxableIncome - 250000) * 0.20;
        } else if (taxableIncome <= 800000) {
            tax = 30000 + (taxableIncome - 400000) * 0.25;
        } else if (taxableIncome <= 2000000) {
            tax = 130000 + (taxableIncome - 800000) * 0.30;
        } else {
            tax = 490000 + (taxableIncome - 2000000) * 0.35;
        }
    }

    const netIncome = income - tax;

    document.getElementById('incomeResult').innerHTML = `
        <h5 style="color: #326D78; margin-bottom: 1rem;">Tax Calculation Result</h5>
        <div style="margin-bottom: 0.5rem;"><strong>Gross Income:</strong> ₱${income.toLocaleString()}</div>
        <div style="margin-bottom: 0.5rem;"><strong>Tax Due:</strong> ₱${tax.toLocaleString()}</div>
        <div style="margin-bottom: 0.5rem;"><strong>Net Income:</strong> ₱${netIncome.toLocaleString()}</div>
        <div style="font-size: 0.9rem; color: #666; margin-top: 1rem;">*This is an estimate. Consult with our tax professionals for detailed calculations.</div>
    `;
    document.getElementById('incomeResult').style.display = 'block';
}

function calculateVAT() {
    const amount = parseFloat(document.getElementById('vatAmount').value);
    const type = document.getElementById('vatType').value;

    if (!amount || amount <= 0) {
        alert('Please enter a valid amount');
        return;
    }

    let vatAmount, netAmount, grossAmount;

    if (type === 'add') {
        netAmount = amount;
        vatAmount = amount * 0.12;
        grossAmount = amount + vatAmount;
    } else {
        grossAmount = amount;
        vatAmount = amount / 1.12 * 0.12;
        netAmount = amount - vatAmount;
    }

    document.getElementById('vatResult').innerHTML = `
        <h5 style="color: #5ba3b0; margin-bottom: 1rem;">VAT Calculation Result</h5>
        <div style="margin-bottom: 0.5rem;"><strong>Net Amount:</strong> ₱${netAmount.toFixed(2)}</div>
        <div style="margin-bottom: 0.5rem;"><strong>VAT (12%):</strong> ₱${vatAmount.toFixed(2)}</div>
        <div style="margin-bottom: 0.5rem;"><strong>Gross Amount:</strong> ₱${grossAmount.toFixed(2)}</div>
    `;
    document.getElementById('vatResult').style.display = 'block';
}

function calculateWithholding() {
    const amount = parseFloat(document.getElementById('withholdingAmount').value);
    const type = document.getElementById('withholdingType').value;

    if (!amount || amount <= 0) {
        alert('Please enter a valid amount');
        return;
    }

    let rate;
    switch(type) {
        case 'professional':
        case 'commission':
        case 'talent':
            rate = 0.10;
            break;
        case 'rental':
            rate = 0.05;
            break;
        default:
            rate = 0.10;
    }

    const withholdingTax = amount * rate;
    const netAmount = amount - withholdingTax;

    document.getElementById('withholdingResult').innerHTML = `
        <h5 style="color: #4a8a96; margin-bottom: 1rem;">Withholding Tax Result</h5>
        <div style="margin-bottom: 0.5rem;"><strong>Gross Income:</strong> ₱${amount.toLocaleString()}</div>
        <div style="margin-bottom: 0.5rem;"><strong>Withholding Tax (${(rate * 100)}%):</strong> ₱${withholdingTax.toFixed(2)}</div>
        <div style="margin-bottom: 0.5rem;"><strong>Net Amount:</strong> ₱${netAmount.toFixed(2)}</div>
    `;
    document.getElementById('withholdingResult').style.display = 'block';
}

// Close modal when clicking outside
document.getElementById('calculatorModal').addEventListener('click', function(e) {
    if (e.target === this) {
        closeCalculator();
    }
});
</script>

<style>
    .breadcrumb-item + .breadcrumb-item::before {
        content: "›";
        color: #6c757d;
        font-weight: bold;
    }

    /* Calculator card hover effects */
    .col-lg-4 > div:hover, .col-lg-6 > div:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 35px rgba(0,0,0,0.1);
        border-color: #326D78;
    }

    /* Button hover effects */
    button:hover, a[style*="background: #326D78"]:hover {
        background: #2a5f6a !important;
        transform: translateY(-2px);
        box-shadow: 0 4px 15px rgba(50, 109, 120, 0.3);
    }

    a[style*="background: #5ba3b0"]:hover {
        background: #4a8a96 !important;
    }

    a[style*="background: #4a8a96"]:hover {
        background: #326D78 !important;
    }

    /* CTA section hover */
    section a[href*="contact"]:hover {
        background: #2a5f6a !important;
        transform: translateY(-2px);
    }

    /* Link hover effects */
    div a[style*="color: #326D78"]:hover,
    div a[style*="color: #5ba3b0"]:hover,
    div a[style*="color: #4a8a96"]:hover {
        text-decoration: underline !important;
        opacity: 0.8;
    }

    /* Smooth scrolling for anchor links */
    html {
        scroll-behavior: smooth;
    }

    @media (max-width: 768px) {
        .container h1 {
            font-size: 2.5rem !important;
        }

        .container h2 {
            font-size: 2rem !important;
        }

        div[style*="display: flex; gap: 1rem"] {
            flex-direction: column;
        }

        div[style*="display: flex; gap: 1rem"] a {
            text-align: center;
        }

        /* Calculator modal responsive */
        #calculatorModal > div {
            width: 95% !important;
            margin: 1rem;
            max-height: 90vh !important;
        }
    }
</style>

@endsection
