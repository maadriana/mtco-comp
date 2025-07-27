@extends('layouts.app')

@section('title', \App\Models\Content::where('key', 'pamela_full_name')->value('value') . ' - ' . \App\Models\Content::where('key', 'pamela_position')->value('value'))

@section('content')

@php
    // Load all content dynamically from database
    $pamela_full_name = \App\Models\Content::where('key', 'pamela_full_name')->value('value') ?? 'Pamela Grace S. Tangso';
    $pamela_position = \App\Models\Content::where('key', 'pamela_position')->value('value') ?? 'Partner';
    $pamela_email = \App\Models\Content::where('key', 'pamela_email')->value('value') ?? 'pamelagrace.tangso@mtco.com.ph';
    $pamela_company = \App\Models\Content::where('key', 'pamela_company')->value('value') ?? 'Mendoza Tugano & Co., CPAs';
    $pamela_profile_image = \App\Models\Content::where('key', 'pamela_profile_image')->first();

    // Hero Stats
    $pamela_stat1_value = \App\Models\Content::where('key', 'pamela_stat1_value')->value('value') ?? '17+';
    $pamela_stat1_label = \App\Models\Content::where('key', 'pamela_stat1_label')->value('value') ?? 'Years Total Experience';
    $pamela_stat2_value = \App\Models\Content::where('key', 'pamela_stat2_value')->value('value') ?? '10+';
    $pamela_stat2_label = \App\Models\Content::where('key', 'pamela_stat2_label')->value('value') ?? 'Industries Served';
    $pamela_stat3_value = \App\Models\Content::where('key', 'pamela_stat3_value')->value('value') ?? 'Tax';
    $pamela_stat3_label = \App\Models\Content::where('key', 'pamela_stat3_label')->value('value') ?? 'Head - OIC';

    // Professional Badge
    $pamela_badge_title = \App\Models\Content::where('key', 'pamela_badge_title')->value('value') ?? 'CPA';
    $pamela_badge_subtitle = \App\Models\Content::where('key', 'pamela_badge_subtitle')->value('value') ?? 'Tax Specialist';

    // Biography Sections
    $pamela_bio_section1_title = \App\Models\Content::where('key', 'pamela_bio_section1_title')->value('value') ?? 'Foundation Years at Mendoza Querido & Co.';
    $pamela_bio_section1_content = \App\Models\Content::where('key', 'pamela_bio_section1_content')->value('value') ?? 'Default bio content...';
    $pamela_bio_section2_title = \App\Models\Content::where('key', 'pamela_bio_section2_title')->value('value') ?? 'Corporate Tax Leadership Excellence';
    $pamela_bio_section2_content = \App\Models\Content::where('key', 'pamela_bio_section2_content')->value('value') ?? 'Default bio content...';
    $pamela_bio_section3_title = \App\Models\Content::where('key', 'pamela_bio_section3_title')->value('value') ?? 'Partnership & Strategic Return';
    $pamela_bio_section3_content = \App\Models\Content::where('key', 'pamela_bio_section3_content')->value('value') ?? 'Default bio content...';

    // Education
    $pamela_education1_degree = \App\Models\Content::where('key', 'pamela_education1_degree')->value('value') ?? 'Bachelor of Science in Accountancy';
    $pamela_education1_institution = \App\Models\Content::where('key', 'pamela_education1_institution')->value('value') ?? 'University of Santo Tomas';
    $pamela_education2_degree = \App\Models\Content::where('key', 'pamela_education2_degree')->value('value');
    $pamela_education2_institution = \App\Models\Content::where('key', 'pamela_education2_institution')->value('value');

    // Professional Quote
    $pamela_quote = \App\Models\Content::where('key', 'pamela_quote')->value('value') ?? 'Strategic tax planning combined with comprehensive industry knowledge creates sustainable value and minimizes risk across diverse business environments.';
@endphp

<!-- Modern Magazine-Style Layout -->
<div style="position: relative; margin-top: -1.5rem; background: #f8f9fa;">

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
                    <a href="{{ url('/#team') }}" style="color: #326D78; text-decoration: none; font-weight: 500;">People</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page" style="color: #6c757d; font-weight: 500;">{{ $pamela_full_name }}</li>
            </ol>
        </nav>
    </div>

    <!-- Hero Profile Section -->
    <div style="background: white; position: relative; overflow: hidden;">
        <div class="container">
            <div class="row min-vh-75 align-items-center" style="padding: 80px 0;">

                <!-- Large Profile Image Section -->
                <div class="col-lg-5">
                    <div style="position: relative;">
                        <!-- Main Profile Image -->
                        <div style="position: relative; z-index: 2;">
                            @if($pamela_profile_image && $pamela_profile_image->image)
                                <img src="data:image/jpeg;base64,{{ base64_encode($pamela_profile_image->image) }}"
                                     alt="{{ $pamela_full_name }}"
                                     style="width: 100%; max-width: 400px; height: 500px; object-fit: cover; object-position: center top; border-radius: 0; box-shadow: 0 20px 60px rgba(0,0,0,0.15);">
                            @else
                                <img src="{{ asset('assets/img/team/pamela-grace-s-tangso.jpg') }}"
                                     alt="{{ $pamela_full_name }}"
                                     style="width: 100%; max-width: 400px; height: 500px; object-fit: cover; object-position: center top; border-radius: 0; box-shadow: 0 20px 60px rgba(0,0,0,0.15);">
                            @endif
                        </div>

                        <!-- Decorative Background Elements -->
                        <div style="position: absolute; top: -20px; right: -20px; width: 100px; height: 100px; background: #326D78; z-index: 1;"></div>
                        <div style="position: absolute; bottom: -30px; left: -30px; width: 80px; height: 80px; background: #4a9aba; z-index: 1;"></div>

                        <!-- Professional Badge -->
                        <div style="position: absolute; bottom: 20px; right: 20px; background: #326D78; color: white; padding: 1rem 1.5rem; z-index: 3;">
                            <h4 style="color: white; font-weight: 700; margin: 0; font-size: 1.2rem;">{{ $pamela_badge_title }}</h4>
                            <small style="color: rgba(255,255,255,0.8);">{{ $pamela_badge_subtitle }}</small>
                        </div>
                    </div>
                </div>

                <!-- Profile Information -->
                <div class="col-lg-7 ps-lg-5">
                    <div style="max-width: 600px;">

                        <!-- Name and Title -->
                        <div style="margin-bottom: 2rem;">
                            @php
                                $nameParts = explode(' ', $pamela_full_name);
                                $firstName = $nameParts[0]; // Pamela
                                $secondName = $nameParts[1]; // Grace
                                $middleAndLast = array_slice($nameParts, 2); // S. Tangso
                            @endphp
                            <h1 style="font-size: 2.9rem; font-weight: 700; color: #333; line-height: 0.9; margin-bottom: 0.5rem; letter-spacing: -2px;">
                                {{ $firstName }} {{ $secondName }}<br>
                                <span style="color: #326D78;">{{ implode(' ', $middleAndLast) }}</span>
                            </h1>
                            <h2 style="font-size: 1.3rem; font-weight: 300; color: #666; margin-bottom: 2rem; text-transform: uppercase; letter-spacing: 2px;">
                                {{ $pamela_position }}
                            </h2>
                        </div>

                        <!-- Contact Information -->
                        <div style="background: #326D78; color: white; padding: 2rem; margin-bottom: 2rem; position: relative;">
                            <div style="position: absolute; top: 0; right: 0; width: 0; height: 0; border-left: 50px solid transparent; border-top: 50px solid #4a9aba;"></div>

                            <div style="display: flex; align-items: center; margin-bottom: 1rem;">
                                <i class="fas fa-envelope" style="font-size: 1.5rem; margin-right: 1rem; width: 30px;"></i>
                                <a href="mailto:{{ $pamela_email }}" style="color: white; text-decoration: none; font-size: 1.1rem; font-weight: 500;">
                                    {{ $pamela_email }}
                                </a>
                            </div>

                            <div style="display: flex; align-items: center;">
                                <i class="fas fa-building" style="font-size: 1.5rem; margin-right: 1rem; width: 30px;"></i>
                                <span style="font-size: 1.1rem;">{{ $pamela_company }}</span>
                            </div>
                        </div>

                        <!-- Key Achievements -->
                        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 1rem;">
                            <div style="text-align: center; padding: 1.5rem; background: #f8f9fa; border-top: 4px solid #326D78;">
                                <h3 style="font-size: 2.3rem; font-weight: 700; color: #326D78; margin-bottom: 0.5rem;">{{ $pamela_stat1_value }}</h3>
                                <p style="color: #666; margin: 0; font-weight: 500;">{{ $pamela_stat1_label }}</p>
                            </div>
                            <div style="text-align: center; padding: 1.5rem; background: #f8f9fa; border-top: 4px solid #4a9aba;">
                                <h3 style="font-size: 2.3rem; font-weight: 700; color: #4a9aba; margin-bottom: 0.5rem;">{{ $pamela_stat2_value }}</h3>
                                <p style="color: #666; margin: 0; font-weight: 500;">{{ $pamela_stat2_label }}</p>
                            </div>
                            <div style="text-align: center; padding: 1.5rem; background: #f8f9fa; border-top: 4px solid #74d3e3;">
                                <h3 style="font-size: 2.3rem; font-weight: 700; color: #74d3e3; margin-bottom: 0.5rem;">{{ $pamela_stat3_value }}</h3>
                                <p style="color: #666; margin: 0; font-weight: 500;">{{ $pamela_stat3_label }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Biography Content -->
    <div class="container" style="padding: 60px 0;">
        <div class="row">

            <!-- Main Biography -->
            <div class="col-lg-8">

                <!-- Professional Journey -->
                <div style="margin-bottom: 4rem;" data-aos="fade-up">
                    <h2 style="font-size: 3rem; font-weight: 700; color: #333; margin-bottom: 3rem; position: relative;">
                        Professional Journey
                        <div style="position: absolute; bottom: -10px; left: 0; width: 100px; height: 4px; background: linear-gradient(45deg, #326D78, #4a9aba);"></div>
                    </h2>

                    <!-- Timeline Style Biography -->
                    <div style="position: relative; padding-left: 2rem;">
                        <!-- Timeline Line -->
                        <div style="position: absolute; left: 0; top: 0; bottom: 0; width: 4px; background: linear-gradient(to bottom, #326D78, #4a9aba, #74d3e3);"></div>

                        <!-- Biography Section 1 -->
                        <div style="position: relative; margin-bottom: 3rem;">
                            <div style="position: absolute; left: -10px; top: 0; width: 20px; height: 20px; background: #326D78; border-radius: 50%; border: 4px solid white; box-shadow: 0 0 0 4px #326D78;"></div>

                            <div style="background: white; padding: 2rem; border-radius: 8px; box-shadow: 0 4px 20px rgba(0,0,0,0.1); margin-left: 1rem;">
                                <h3 style="color: #326D78; font-weight: 600; margin-bottom: 1rem; font-size: 1.3rem;">{{ $pamela_bio_section1_title }}</h3>
                                <p style="color: #666; line-height: 1.7; margin: 0;">{{ $pamela_bio_section1_content }}</p>
                            </div>
                        </div>

                        <!-- Biography Section 2 -->
                        <div style="position: relative; margin-bottom: 3rem;">
                            <div style="position: absolute; left: -10px; top: 0; width: 20px; height: 20px; background: #4a9aba; border-radius: 50%; border: 4px solid white; box-shadow: 0 0 0 4px #4a9aba;"></div>

                            <div style="background: white; padding: 2rem; border-radius: 8px; box-shadow: 0 4px 20px rgba(0,0,0,0.1); margin-left: 1rem;">
                                <h3 style="color: #4a9aba; font-weight: 600; margin-bottom: 1rem; font-size: 1.3rem;">{{ $pamela_bio_section2_title }}</h3>
                                <p style="color: #666; line-height: 1.7; margin: 0;">{{ $pamela_bio_section2_content }}</p>
                            </div>
                        </div>

                        <!-- Biography Section 3 -->
                        <div style="position: relative;">
                            <div style="position: absolute; left: -10px; top: 0; width: 20px; height: 20px; background: #74d3e3; border-radius: 50%; border: 4px solid white; box-shadow: 0 0 0 4px #74d3e3;"></div>

                            <div style="background: white; padding: 2rem; border-radius: 8px; box-shadow: 0 4px 20px rgba(0,0,0,0.1); margin-left: 1rem;">
                                <h3 style="color: #74d3e3; font-weight: 600; margin-bottom: 1rem; font-size: 1.3rem;">{{ $pamela_bio_section3_title }}</h3>
                                <p style="color: #666; line-height: 1.7; margin: 0;">{{ $pamela_bio_section3_content }}</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Sidebar Information -->
            <div class="col-lg-4">
                <div style="position: sticky; top: 2rem;">

                    <!-- Education Block -->
                    <div style="background: #326D78; color: white; padding: 2rem; margin-bottom: 2rem; position: relative;" data-aos="fade-up" data-aos-delay="300">
                        <div style="position: absolute; top: -15px; right: -15px; width: 60px; height: 60px; border: 3px solid #4a9aba; transform: rotate(45deg);"></div>

                        <h3 style="color: white; font-weight: 600; margin-bottom: 1.5rem; font-size: 1.5rem;">Education</h3>

                        <div style="margin-bottom: 1.5rem;">
                            <h4 style="color: rgba(255,255,255,0.9); font-weight: 600; margin-bottom: 0.5rem; font-size: 1.1rem;">{{ $pamela_education1_degree }}</h4>
                            <p style="color: rgba(255,255,255,0.7); margin: 0;">{{ $pamela_education1_institution }}</p>
                        </div>

                        @if($pamela_education2_degree && $pamela_education2_institution)
                        <div>
                            <h4 style="color: rgba(255,255,255,0.9); font-weight: 600; margin-bottom: 0.5rem; font-size: 1.1rem;">{{ $pamela_education2_degree }}</h4>
                            <p style="color: rgba(255,255,255,0.7); margin: 0;">{{ $pamela_education2_institution }}</p>
                        </div>
                        @endif
                    </div>

                    <!-- Professional Affiliations -->
                    <div style="background: white; padding: 2rem; border: 1px solid #e9ecef; margin-bottom: 2rem;" data-aos="fade-up" data-aos-delay="100">
                        <h3 style="color: #333; font-weight: 600; margin-bottom: 1.5rem; font-size: 1.5rem;">Professional Affiliations</h3>

                        <div style="space-y: 1rem;">
                            <div style="margin-bottom: 1rem;">
                                <strong style="color: #333;">{{ \App\Models\Content::where('key', 'pamela_affiliation1_name')->value('value') ?: 'Board of Accountancy' }}</strong><br>
                                <small style="color: #666;">{{ \App\Models\Content::where('key', 'pamela_affiliation1_description')->value('value') ?: 'Professional Regulatory Board' }}</small>
                            </div>

                            <div style="margin-bottom: 1.5rem;">
                                <strong style="color: #333;">{{ \App\Models\Content::where('key', 'pamela_affiliation2_name')->value('value') ?: 'Bureau of Internal Revenue' }}</strong><br>
                                <small style="color: #666;">{{ \App\Models\Content::where('key', 'pamela_affiliation2_description')->value('value') ?: 'Tax Administration Authority' }}</small>
                            </div>
                        </div>
                    </div>

                    <!-- Accreditation -->
                    <div style="background: white; padding: 2rem; border: 1px solid #e9ecef; margin-bottom: 2rem;" data-aos="fade-up" data-aos-delay="150">
                        <h3 style="color: #333; font-weight: 600; margin-bottom: 1.5rem; font-size: 1.5rem;">Accreditation</h3>

                        <div style="margin-bottom: 1rem;">
                            <strong style="color: #333;">{{ \App\Models\Content::where('key', 'pamela_accreditation1_name')->value('value') ?: 'PICPA' }}</strong><br>
                            <small style="color: #666;">{{ \App\Models\Content::where('key', 'pamela_accreditation1_description')->value('value') ?: 'Philippine Institute of Certified Public Accountants' }}</small>
                        </div>

                        <div>
                            <strong style="color: #333;">{{ \App\Models\Content::where('key', 'pamela_accreditation2_name')->value('value') ?: 'TMAP' }}</strong><br>
                            <small style="color: #666;">{{ \App\Models\Content::where('key', 'pamela_accreditation2_description')->value('value') ?: 'Tax Management Association of the Philippines' }}</small>
                        </div>
                    </div>

                    <!-- Quote/Philosophy -->
                    <div style="background: #f8f9fa; padding: 2rem; border-left: 5px solid #326D78; font-style: italic;" data-aos="fade-up" data-aos-delay="200">
                        <p style="color: #666; font-size: 1.1rem; line-height: 1.6; margin: 0;">
                            "{{ $pamela_quote }}"
                        </p>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>

<style>
    .breadcrumb-item + .breadcrumb-item::before {
        content: "›";
        color: #6c757d;
        font-weight: bold;
    }
    /* Responsive adjustments */
    @media (max-width: 768px) {
        .container h1 {
            font-size: 2.5rem !important;
            line-height: 1.1 !important;
        }

        .col-lg-4, .col-lg-7, .col-lg-8 {
            margin-bottom: 3rem;
        }

        div[style*="position: sticky"] {
            position: static !important;
        }

        div[style*="padding-left: 2rem"] {
            padding-left: 1rem !important;
        }

        div[style*="margin-left: 1rem"] {
            margin-left: 0.5rem !important;
        }

        img {
            height: 400px !important;
        }

        .ps-lg-5 {
            padding-left: 0 !important;
            margin-top: 2rem;
        }

        div[style*="grid-template-columns: repeat(2, 1fr)"] {
            grid-template-columns: 1fr !important;
        }
    }
</style>

@endsection
