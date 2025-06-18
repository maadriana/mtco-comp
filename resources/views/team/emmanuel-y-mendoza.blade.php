@extends('layouts.app')

@section('title', \App\Models\Content::where('key', 'emmanuel_full_name')->value('value') . ' - ' . \App\Models\Content::where('key', 'emmanuel_position')->value('value'))

@section('content')

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
                <li class="breadcrumb-item active" aria-current="page" style="color: #6c757d; font-weight: 500;">{{ \App\Models\Content::where('key', 'emmanuel_full_name')->value('value') ?: 'Emmanuel Y. Mendoza' }}</li>
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
                            @php
                                $emmanuelProfileImage = \App\Models\Content::where('key', 'emmanuel_profile_image')->first();
                            @endphp
                            @if($emmanuelProfileImage && $emmanuelProfileImage->image)
                                <img src="data:image/jpeg;base64,{{ base64_encode($emmanuelProfileImage->image) }}"
                                     alt="{{ \App\Models\Content::where('key', 'emmanuel_full_name')->value('value') ?: 'Emmanuel Y. Mendoza' }}"
                                     style="width: 100%; max-width: 400px; height: 500px; object-fit: cover; object-position: center top; border-radius: 0; box-shadow: 0 20px 60px rgba(0,0,0,0.15);">
                            @else
                                <img src="{{ asset('assets/img/team/emmanuel-y-mendoza.jpeg') }}"
                                     alt="{{ \App\Models\Content::where('key', 'emmanuel_full_name')->value('value') ?: 'Emmanuel Y. Mendoza' }}"
                                     style="width: 100%; max-width: 400px; height: 500px; object-fit: cover; object-position: center top; border-radius: 0; box-shadow: 0 20px 60px rgba(0,0,0,0.15);">
                            @endif
                        </div>

                        <!-- Decorative Background Elements -->
                        <div style="position: absolute; top: -20px; right: -20px; width: 100px; height: 100px; background: #326D78; z-index: 1;"></div>
                        <div style="position: absolute; bottom: -30px; left: -30px; width: 80px; height: 80px; background: #4a9aba; z-index: 1;"></div>

                        <!-- Professional Badge -->
                        <div style="position: absolute; bottom: 20px; right: 20px; background: #326D78; color: white; padding: 1rem 1.5rem; z-index: 3;">
                            <h4 style="color: white; font-weight: 700; margin: 0; font-size: 1.2rem;">CPA</h4>
                            <small style="color: rgba(255,255,255,0.8);">Licensed Professional</small>
                        </div>
                    </div>
                </div>

                <!-- Profile Information -->
                <div class="col-lg-7 ps-lg-5">
                    <div style="max-width: 600px;">

                        <!-- Name and Title -->
                        <div style="margin-bottom: 2rem;">
                            @php
                                $fullName = \App\Models\Content::where('key', 'emmanuel_full_name')->value('value') ?: 'Emmanuel Y. Mendoza';
                                $nameParts = explode(' ', $fullName);
                                $firstName = array_slice($nameParts, 0, -1);
                                $lastName = end($nameParts);
                            @endphp
                            <h1 style="font-size: 2.9rem; font-weight: 700; color: #333; line-height: 0.9; margin-bottom: 0.5rem; letter-spacing: -2px;">
                                {{ implode(' ', $firstName) }}<br>
                                <span style="color: #326D78;">{{ $lastName }}</span>
                            </h1>
                            <h2 style="font-size: 1.3rem; font-weight: 300; color: #666; margin-bottom: 2rem; text-transform: uppercase; letter-spacing: 2px;">
                                {{ \App\Models\Content::where('key', 'emmanuel_position')->value('value') ?: 'Managing Partner' }}
                            </h2>
                        </div>

                        <!-- Contact Information -->
                        <div style="background: #326D78; color: white; padding: 2rem; margin-bottom: 2rem; position: relative;">
                            <div style="position: absolute; top: 0; right: 0; width: 0; height: 0; border-left: 50px solid transparent; border-top: 50px solid #4a9aba;"></div>

                            <div style="display: flex; align-items: center; margin-bottom: 1rem;">
                                <i class="fas fa-envelope" style="font-size: 1.5rem; margin-right: 1rem; width: 30px;"></i>
                                <a href="mailto:{{ \App\Models\Content::where('key', 'emmanuel_email')->value('value') ?: 'eymendoza@mtco.com.ph' }}" style="color: white; text-decoration: none; font-size: 1.1rem; font-weight: 500;">
                                    {{ \App\Models\Content::where('key', 'emmanuel_email')->value('value') ?: 'eymendoza@mtco.com.ph' }}
                                </a>
                            </div>

                            <div style="display: flex; align-items: center;">
                                <i class="fas fa-building" style="font-size: 1.5rem; margin-right: 1rem; width: 30px;"></i>
                                <span style="font-size: 1.1rem;">{{ \App\Models\Content::where('key', 'emmanuel_company')->value('value') ?: 'Mendoza Tugano & Co., CPAs' }}</span>
                            </div>
                        </div>

                        <!-- Key Achievements -->
                        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 1rem;">
                            <div style="text-align: center; padding: 1.5rem; background: #f8f9fa; border-top: 4px solid #326D78;">
                                <h3 style="font-size: 2.3rem; font-weight: 700; color: #326D78; margin-bottom: 0.5rem;">{{ \App\Models\Content::where('key', 'emmanuel_stat1_value')->value('value') ?: '10+' }}</h3>
                                <p style="color: #666; margin: 0; font-weight: 500;">{{ \App\Models\Content::where('key', 'emmanuel_stat1_label')->value('value') ?: 'Years at SGV & Co.' }}</p>
                            </div>
                            <div style="text-align: center; padding: 1.5rem; background: #f8f9fa; border-top: 4px solid #4a9aba;">
                                <h3 style="font-size: 2.3rem; font-weight: 700; color: #4a9aba; margin-bottom: 0.5rem;">{{ \App\Models\Content::where('key', 'emmanuel_stat2_value')->value('value') ?: '3' }}</h3>
                                <p style="color: #666; margin: 0; font-weight: 500;">{{ \App\Models\Content::where('key', 'emmanuel_stat2_label')->value('value') ?: 'Board Positions' }}</p>
                            </div>
                            <div style="text-align: center; padding: 1.5rem; background: #f8f9fa; border-top: 4px solid #74d3e3;">
                                <h3 style="font-size: 2.3rem; font-weight: 700; color: #74d3e3; margin-bottom: 0.5rem;">{{ \App\Models\Content::where('key', 'emmanuel_stat3_value')->value('value') ?: '2015' }}</h3>
                                <p style="color: #666; margin: 0; font-weight: 500;">{{ \App\Models\Content::where('key', 'emmanuel_stat3_label')->value('value') ?: 'Independent Director Since' }}</p>
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
                                <h3 style="color: #326D78; font-weight: 600; margin-bottom: 1rem; font-size: 1.3rem;">{{ \App\Models\Content::where('key', 'emmanuel_bio_section1_title')->value('value') ?: 'Foundation Years at SGV & Co.' }}</h3>
                                <p style="color: #666; line-height: 1.7; margin: 0;">
                                    {{ \App\Models\Content::where('key', 'emmanuel_bio_section1_content')->value('value') ?: 'Mr. Emmanuel Y. Mendoza commenced his distinguished career with a decade of service at SyCip, Gorres, Velayo & Co (SGV & Co.), the Philippines\' premier accounting firm. During this foundational period, he developed expertise across a comprehensive range of financial services including auditing, due diligence reviews for mergers and acquisitions, bond offerings, initial public offerings, and sophisticated investment valuation methodologies.' }}
                                </p>
                            </div>
                        </div>

                        <!-- Biography Section 2 -->
                        <div style="position: relative; margin-bottom: 3rem;">
                            <div style="position: absolute; left: -10px; top: 0; width: 20px; height: 20px; background: #4a9aba; border-radius: 50%; border: 4px solid white; box-shadow: 0 0 0 4px #4a9aba;"></div>

                            <div style="background: white; padding: 2rem; border-radius: 8px; box-shadow: 0 4px 20px rgba(0,0,0,0.1); margin-left: 1rem;">
                                <h3 style="color: #4a9aba; font-weight: 600; margin-bottom: 1rem; font-size: 1.3rem;">{{ \App\Models\Content::where('key', 'emmanuel_bio_section2_title')->value('value') ?: 'Executive Banking Leadership' }}</h3>
                                @php
                                    $bioSection2 = \App\Models\Content::where('key', 'emmanuel_bio_section2_content')->value('value') ?: 'Transitioning into the complex world of banking operations, Mr. Mendoza served as First Vice President and Financial Controller of Global Business Bank (GLOBALBANK), a prestigious affiliate of Metrobank and Tokai Bank of Japan. His multifaceted role encompassed Deputy Compliance Officer responsibilities, serving as Liaison Officer with the Bangko Sentral ng Pilipinas, and maintaining active membership in critical committees including the Bank\'s Asset Liability Committee (ALCO) and Operations and Compliance Committee.';
                                    $bioSection2Additional = 'His strategic leadership proved instrumental during the successful three-way merger between GLOBALBANK, Philippine Banking Corporation, and Asianbank Corporation, where he expertly navigated complex regulatory requirements, sophisticated tax planning initiatives, comprehensive computer system integration, and the harmonization of organizational policies and procedures.';
                                @endphp
                                <p style="color: #666; line-height: 1.7; margin-bottom: 1rem;">
                                    {{ $bioSection2 }}
                                </p>
                                <p style="color: #666; line-height: 1.7; margin: 0;">
                                    {{ $bioSection2Additional }}
                                </p>
                            </div>
                        </div>

                        <!-- Biography Section 3 -->
                        <div style="position: relative;">
                            <div style="position: absolute; left: -10px; top: 0; width: 20px; height: 20px; background: #74d3e3; border-radius: 50%; border: 4px solid white; box-shadow: 0 0 0 4px #74d3e3;"></div>

                            <div style="background: white; padding: 2rem; border-radius: 8px; box-shadow: 0 4px 20px rgba(0,0,0,0.1); margin-left: 1rem;">
                                <h3 style="color: #74d3e3; font-weight: 600; margin-bottom: 1rem; font-size: 1.3rem;">{{ \App\Models\Content::where('key', 'emmanuel_bio_section3_title')->value('value') ?: 'Current Leadership & Governance' }}</h3>
                                @php
                                    $bioSection3 = \App\Models\Content::where('key', 'emmanuel_bio_section3_content')->value('value') ?: 'Mr. Mendoza\'s influence extends significantly into corporate governance as an Independent Director of a publicly listed universal bank since 2015, where he presides as Chairman of the Audit Committee and actively participates in the institution\'s IT Steering Committee. His technical expertise proved crucial in leading the evaluation team that selected the bank\'s core banking system.';
                                    $bioSection3Additional = 'His governance expertise extends to his role as Independent Director of Medicard Philippines, one of the nation\'s largest Health Maintenance Organizations, where he serves as Chairman of the Audit and Risk Committee. Additionally, he contributes his strategic insights as Independent Director of the Makati Sports Club, taking on the leadership role of Chairman of the Planning and Development Committee.';
                                @endphp
                                <p style="color: #666; line-height: 1.7; margin-bottom: 1rem;">
                                    {{ $bioSection3 }}
                                </p>
                                <p style="color: #666; line-height: 1.7; margin: 0;">
                                    {{ $bioSection3Additional }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Sidebar Information -->
            <div class="col-lg-4">
                <div style="position: sticky; top: 2rem;">

                    <!-- Education Block -->
                    <div style="background: #326D78; color: white; padding: 2rem; margin-bottom: 2rem; position: relative;" data-aos="fade-up" data-aos-delay="100">
                        <div style="position: absolute; top: -15px; right: -15px; width: 60px; height: 60px; border: 3px solid #4a9aba; transform: rotate(45deg);"></div>

                        <h3 style="color: white; font-weight: 600; margin-bottom: 1.5rem; font-size: 1.5rem;">Education</h3>

                        <div style="margin-bottom: 1.5rem; padding-bottom: 1.5rem; border-bottom: 1px solid rgba(255,255,255,0.2);">
                            <h4 style="color: rgba(255,255,255,0.9); font-weight: 600; margin-bottom: 0.5rem; font-size: 1.1rem;">{{ \App\Models\Content::where('key', 'emmanuel_education1_degree')->value('value') ?: 'Master\'s in Management' }}</h4>
                            <p style="color: rgba(255,255,255,0.7); margin: 0;">{{ \App\Models\Content::where('key', 'emmanuel_education1_institution')->value('value') ?: 'Asian Institute of Management' }}</p>
                        </div>

                        <div>
                            <h4 style="color: rgba(255,255,255,0.9); font-weight: 600; margin-bottom: 0.5rem; font-size: 1.1rem;">{{ \App\Models\Content::where('key', 'emmanuel_education2_degree')->value('value') ?: 'Bachelor in Business Administration' }}</h4>
                            <p style="color: rgba(255,255,255,0.7); margin: 0;">{{ \App\Models\Content::where('key', 'emmanuel_education2_institution')->value('value') ?: 'Accountancy • University of the Philippines' }}</p>
                        </div>
                    </div>

                    <!-- Professional Affiliations -->
                    <div style="background: white; padding: 2rem; border: 1px solid #e9ecef; margin-bottom: 2rem;" data-aos="fade-up" data-aos-delay="100">
                        <h3 style="color: #333; font-weight: 600; margin-bottom: 1.5rem; font-size: 1.5rem;">Professional Affiliations</h3>

                        <div style="space-y: 1rem;">
                            <div style="display: flex; align-items: start; margin-bottom: 1rem;">
                                <div style="width: 8px; height: 8px; background: #326D78; border-radius: 50%; margin-top: 8px; margin-right: 12px; flex-shrink: 0;"></div>
                                <div>
                                    <strong style="color: #333;">{{ \App\Models\Content::where('key', 'emmanuel_affiliation1_name')->value('value') ?: 'PICPA' }}</strong><br>
                                    <small style="color: #666;">{{ \App\Models\Content::where('key', 'emmanuel_affiliation1_description')->value('value') ?: 'Philippine Institute of Certified Public Accountants' }}</small>
                                </div>
                            </div>

                            <div style="display: flex; align-items: start; margin-bottom: 1rem;">
                                <div style="width: 8px; height: 8px; background: #4a9aba; border-radius: 50%; margin-top: 8px; margin-right: 12px; flex-shrink: 0;"></div>
                                <div>
                                    <strong style="color: #333;">{{ \App\Models\Content::where('key', 'emmanuel_affiliation2_name')->value('value') ?: 'ACPAPP' }}</strong><br>
                                    <small style="color: #666;">{{ \App\Models\Content::where('key', 'emmanuel_affiliation2_description')->value('value') ?: 'Association of CPAs in Public Practice' }}</small>
                                </div>
                            </div>

                            <div style="display: flex; align-items: start; margin-bottom: 1rem;">
                                <div style="width: 8px; height: 8px; background: #74d3e3; border-radius: 50%; margin-top: 8px; margin-right: 12px; flex-shrink: 0;"></div>
                                <div>
                                    <strong style="color: #333;">{{ \App\Models\Content::where('key', 'emmanuel_affiliation3_name')->value('value') ?: 'Bank Institute of the Philippines' }}</strong><br>
                                    <small style="color: #666;">{{ \App\Models\Content::where('key', 'emmanuel_affiliation3_description')->value('value') ?: 'Professional Banking Association' }}</small>
                                </div>
                            </div>

                            <div style="display: flex; align-items: start;">
                                <div style="width: 8px; height: 8px; background: #5bb3c7; border-radius: 50%; margin-top: 8px; margin-right: 12px; flex-shrink: 0;"></div>
                                <div>
                                    <strong style="color: #333;">{{ \App\Models\Content::where('key', 'emmanuel_affiliation4_name')->value('value') ?: 'ACPAPP Committee' }}</strong><br>
                                    <small style="color: #666;">{{ \App\Models\Content::where('key', 'emmanuel_affiliation4_description')->value('value') ?: 'Auditing Standards and Practices' }}</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Quote/Philosophy -->
                    <div style="background: #f8f9fa; padding: 2rem; border-left: 5px solid #326D78; font-style: italic;" data-aos="fade-up" data-aos-delay="100">
                        <p style="color: #666; font-size: 1.1rem; line-height: 1.6; margin: 0;">
                            "{{ \App\Models\Content::where('key', 'emmanuel_quote')->value('value') ?: 'Excellence in professional practice comes from the intersection of technical expertise, ethical leadership, and unwavering commitment to client success.' }}"
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
    }
</style>

@endsection
