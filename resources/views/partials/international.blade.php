@extends('layouts.app')

@section('title', 'AGN International | Mendoza Tugano & Co., CPAs')

@section('content')

<!-- Header Section -->
<div style="position: relative; margin-top: -1.5rem; background: linear-gradient(135deg, #f8fafb 0%, #e8f4f8 100%); padding: 5rem 0; overflow: hidden;">

    <!-- Subtle Background Elements -->
    <div style="position: absolute; top: 15%; right: 10%; width: 80px; height: 80px; background: rgba(50, 109, 120, 0.08); border-radius: 50%; animation: float 6s ease-in-out infinite;"></div>
    <div style="position: absolute; bottom: 20%; left: 8%; width: 60px; height: 60px; background: rgba(91, 163, 176, 0.1); transform: rotate(45deg); border-radius: 8px; animation: float 8s ease-in-out infinite reverse;"></div>

    <!-- Breadcrumb -->
    <div style="position: absolute; top: 20px; left: 70px; z-index: 10; background: rgba(255, 255, 255, 0.95); padding: 10px 18px; border-radius: 8px; box-shadow: 0 4px 15px rgba(0,0,0,0.1); backdrop-filter: blur(10px); opacity: 0; animation: fadeInUp 0.8s ease-out 0.2s forwards;">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0" style="font-size: 0.9rem;">
                <li class="breadcrumb-item">
                    <a href="{{ url('/') }}" style="color: #326D78; text-decoration: none; font-weight: 500;">
                        <i class="fas fa-home me-1"></i>Home
                    </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page" style="color: #6c757d; font-weight: 500;">International</li>
            </ol>
        </nav>
    </div>

    <div class="container" style="position: relative; z-index: 2;">
        <div class="row align-items-center justify-content-center">
            <!-- Left Side: AGN Logo -->
            <div class="col-lg-4" style="text-align: center; opacity: 0; animation: fadeInUp 1s ease-out 0.3s forwards;">
                <img src="{{ asset('assets/img/agn.png') }}" alt="AGN International Logo" style="max-height: 140px; width: auto;">
            </div>

            <!-- Right Side: Title and Content -->
            <div class="col-lg-8" style="opacity: 0; animation: fadeInUp 1s ease-out 0.5s forwards;">
                <h1 style="font-size: 3.5rem; font-weight: 700; color: #2a2a2a; margin-bottom: 1.2rem; line-height: 1.1;">
                    {{ \App\Models\Content::where('key', 'agn_hero_title')->value('value') ?? 'AGN' }} <span style="color: #326D78;">International</span>
                </h1>
                <p style="font-size: 1.3rem; color: #6c757d; margin-bottom: 2rem; line-height: 1.5;">
                    {{ \App\Models\Content::where('key', 'agn_hero_subtitle')->value('value') ?? 'Global accounting and advisory network' }}
                </p>
                <div style="width: 80px; height: 3px; background: linear-gradient(90deg, #326D78, #5ba3b0); border-radius: 2px; margin-bottom: 2rem;"></div>

                <!-- Network Stats -->
                <div style="display: flex; gap: 2.5rem; flex-wrap: wrap;">
                    <div style="text-align: left;">
                        <div style="font-size: 2.2rem; font-weight: 700; color: #326D78; margin-bottom: 0.3rem;">
                            {{ \App\Models\Content::where('key', 'agn_member_firms_count')->value('value') ?? '200+' }}
                        </div>
                        <div style="font-size: 0.95rem; color: #6c757d; font-weight: 500;">
                            {{ \App\Models\Content::where('key', 'agn_member_firms_label')->value('value') ?? 'Member Firms' }}
                        </div>
                    </div>
                    <div style="text-align: left;">
                        <div style="font-size: 2.2rem; font-weight: 700; color: #5ba3b0; margin-bottom: 0.3rem;">
                            {{ \App\Models\Content::where('key', 'agn_countries_count')->value('value') ?? '80+' }}
                        </div>
                        <div style="font-size: 0.95rem; color: #6c757d; font-weight: 500;">
                            {{ \App\Models\Content::where('key', 'agn_countries_label')->value('value') ?? 'Countries' }}
                        </div>
                    </div>
                    <div style="text-align: left;">
                        <div style="font-size: 2.2rem; font-weight: 700; color: #4a8a96; margin-bottom: 0.3rem;">
                            {{ \App\Models\Content::where('key', 'agn_reach_count')->value('value') ?? 'Global' }}
                        </div>
                        <div style="font-size: 0.95rem; color: #6c757d; font-weight: 500;">
                            {{ \App\Models\Content::where('key', 'agn_reach_label')->value('value') ?? 'Reach' }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Main Content -->
<section style="padding: 5rem 0; background: white;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-9">

                <!-- MTC and AGN International -->
                <div style="margin-bottom: 5rem; opacity: 0; animation: fadeInUp 1s ease-out 0.3s forwards;">
                    <div style="display: flex; align-items: center; margin-bottom: 2rem;">
                        <div style="background: #326D78; width: 6px; height: 40px; border-radius: 3px; margin-right: 1rem;"></div>
                        <h2 style="font-size: 2.2rem; font-weight: 600; color: #326D78; margin: 0;">
                            {{ \App\Models\Content::where('key', 'mtc_agn_title')->value('value') ?? 'MTC and AGN International' }}
                        </h2>
                    </div>
                    <p style="font-size: 1.15rem; color: #495057; line-height: 1.8; margin: 0;">
                        {{ \App\Models\Content::where('key', 'mtc_agn_description')->value('value') ?? 'MTC is a proud member of AGN International, one of the world\'s leading associations of separate and independent accounting and advisory firms. As part of this global network, we are connected to over 200 member firms in more than 80 countries, enabling us to deliver local expertise backed by global insight.' }}
                    </p>
                </div>

                <!-- Network Information -->
                <div style="background: linear-gradient(135deg, #f8fafb 0%, #e8f4f8 100%); padding: 3rem; border-radius: 15px; margin-bottom: 5rem; box-shadow: 0 6px 20px rgba(0,0,0,0.06); opacity: 0; animation: fadeInUp 1s ease-out 0.5s forwards;">
                    <div class="row text-center">
                        <div class="col-md-4">
                            <div style="background: white; padding: 2rem; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.06); margin-bottom: 1rem;">
                                <div style="font-size: 2.5rem; font-weight: 700; color: #326D78; margin-bottom: 0.5rem;">
                                    {{ \App\Models\Content::where('key', 'network_stats_firms_count')->value('value') ?? '200+' }}
                                </div>
                                <div style="font-size: 1rem; color: #6c757d; font-weight: 500;">
                                    {{ \App\Models\Content::where('key', 'network_stats_firms_label')->value('value') ?? 'Member Firms' }}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div style="background: white; padding: 2rem; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.06); margin-bottom: 1rem;">
                                <div style="font-size: 2.5rem; font-weight: 700; color: #5ba3b0; margin-bottom: 0.5rem;">
                                    {{ \App\Models\Content::where('key', 'network_stats_countries_count')->value('value') ?? '80+' }}
                                </div>
                                <div style="font-size: 1rem; color: #6c757d; font-weight: 500;">
                                    {{ \App\Models\Content::where('key', 'network_stats_countries_label')->value('value') ?? 'Countries' }}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div style="background: white; padding: 2rem; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.06); margin-bottom: 1rem;">
                                <div style="font-size: 2.5rem; font-weight: 700; color: #4a8a96; margin-bottom: 0.5rem;">
                                    {{ \App\Models\Content::where('key', 'network_stats_global_count')->value('value') ?? 'Global' }}
                                </div>
                                <div style="font-size: 1rem; color: #6c757d; font-weight: 500;">
                                    {{ \App\Models\Content::where('key', 'network_stats_global_label')->value('value') ?? 'Network' }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- A Network of Trusted Experts -->
                <div style="margin-bottom: 5rem; opacity: 0; animation: fadeInUp 1s ease-out 0.7s forwards;">
                    <div style="display: flex; align-items: center; margin-bottom: 2rem;">
                        <div style="background: #326D78; width: 6px; height: 40px; border-radius: 3px; margin-right: 1rem;"></div>
                        <h2 style="font-size: 2.2rem; font-weight: 600; color: #326D78; margin: 0;">
                            {{ \App\Models\Content::where('key', 'trusted_experts_title')->value('value') ?? 'A Network of Trusted Experts' }}
                        </h2>
                    </div>

                    <p style="font-size: 1.15rem; color: #495057; line-height: 1.8; margin-bottom: 1.5rem;">
                        {{ \App\Models\Content::where('key', 'trusted_experts_description_1')->value('value') ?? 'Our affiliation with AGN enhances our ability to support clients with cross-border needs, access international technical resources, and benchmark best practices in accounting, audit, and tax. Whether you\'re a Philippine-based company expanding globally, or a multinational doing business in the Philippines, we leverage our AGN network to bring solutions that are both locally relevant and internationally informed.' }}
                    </p>
                    <p style="font-size: 1.15rem; color: #495057; line-height: 1.8; margin: 0;">
                        {{ \App\Models\Content::where('key', 'trusted_experts_description_2')->value('value') ?? 'As an AGN member firm, we remain fully independent and responsible for the services we provide to our clients. Our membership simply gives us access to a trusted network of professionals across the globe who share our commitment to service excellence, ethical standards, and technical competence.' }}
                    </p>

                    <!-- Client Benefits -->
                    <div style="margin: 4rem 0;">
                        <h3 style="font-size: 1.5rem; font-weight: 600; color: #2a2a2a; margin-bottom: 3rem; text-align: center;">
                            {{ \App\Models\Content::where('key', 'client_benefits_title')->value('value') ?? 'Our clients benefit from:' }}
                        </h3>
                    </div>

                    <div class="row g-4">
                        <div class="col-lg-4">
                            <div style="background: white; padding: 2rem; border-radius: 12px; box-shadow: 0 6px 20px rgba(0,0,0,0.08); height: 100%; border-top: 4px solid #326D78; transition: all 0.3s ease;">
                                <div style="background: linear-gradient(135deg, #326D78, #5ba3b0); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem; width: 60px; height: 60px;">
                                    <i class="fas fa-globe" style="color: white; font-size: 1.2rem;"></i>
                                </div>
                                <h4 style="font-size: 1.25rem; font-weight: 600; color: #326D78; margin-bottom: 1rem;">
                                    {{ \App\Models\Content::where('key', 'benefit1_title')->value('value') ?? 'Local knowledge, global support' }}
                                </h4>
                                <p style="color: #6c757d; line-height: 1.7; margin: 0;">
                                    {{ \App\Models\Content::where('key', 'benefit1_description')->value('value') ?? 'Direct access to local expertise in major markets around the world through a trusted global community.' }}
                                </p>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div style="background: white; padding: 2rem; border-radius: 12px; box-shadow: 0 6px 20px rgba(0,0,0,0.08); height: 100%; border-top: 4px solid #5ba3b0; transition: all 0.3s ease;">
                                <div style="background: linear-gradient(135deg, #5ba3b0, #4a8a96); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem; width: 60px; height: 60px;">
                                    <i class="fas fa-handshake" style="color: white; font-size: 1.2rem;"></i>
                                </div>
                                <h4 style="font-size: 1.25rem; font-weight: 600; color: #5ba3b0; margin-bottom: 1rem;">
                                    {{ \App\Models\Content::where('key', 'benefit2_title')->value('value') ?? 'International business support' }}
                                </h4>
                                <p style="color: #6c757d; line-height: 1.7; margin: 0;">
                                    {{ \App\Models\Content::where('key', 'benefit2_description')->value('value') ?? 'Seamless coordination with fellow AGN members for cross-border transactions, market entry, or overseas expansion.' }}
                                </p>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div style="background: white; padding: 2rem; border-radius: 12px; box-shadow: 0 6px 20px rgba(0,0,0,0.08); height: 100%; border-top: 4px solid #4a8a96; transition: all 0.3s ease;">
                                <div style="background: linear-gradient(135deg, #4a8a96, #326D78); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem; width: 60px; height: 60px;">
                                    <i class="fas fa-award" style="color: white; font-size: 1.2rem;"></i>
                                </div>
                                <h4 style="font-size: 1.25rem; font-weight: 600; color: #4a8a96; margin-bottom: 1rem;">
                                    {{ \App\Models\Content::where('key', 'benefit3_title')->value('value') ?? 'Shared standards, global best practices' }}
                                </h4>
                                <p style="color: #6c757d; line-height: 1.7; margin: 0;">
                                    {{ \App\Models\Content::where('key', 'benefit3_description')->value('value') ?? 'Our AGN membership ensures access to global technical updates, benchmarking tools, and regulatory resources.' }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- About AGN International -->
                <div style="margin-bottom: 5rem; opacity: 0; animation: fadeInUp 1s ease-out 0.9s forwards;">
                    <div style="display: flex; align-items: center; margin-bottom: 2rem;">
                        <div style="background: #326D78; width: 6px; height: 40px; border-radius: 3px; margin-right: 1rem;"></div>
                        <h2 style="font-size: 2.2rem; font-weight: 600; color: #326D78; margin: 0;">
                            {{ \App\Models\Content::where('key', 'about_agn_title')->value('value') ?? 'About AGN International' }}
                        </h2>
                    </div>

                    <p style="font-size: 1.15rem; color: #495057; line-height: 1.8; margin-bottom: 1.5rem;">
                        {{ \App\Models\Content::where('key', 'about_agn_description_1')->value('value') ?? 'AGN International Ltd is a not-for-profit worldwide membership association of separate and independent accounting and advisory businesses.' }}
                    </p>
                    <p style="font-size: 1.15rem; color: #495057; line-height: 1.8; margin: 0;">
                        {{ \App\Models\Content::where('key', 'about_agn_description_2')->value('value') ?? 'To learn more about AGN and its member firms, please visit the AGN International website at' }}
                        <a href="{{ \App\Models\Content::where('key', 'agn_website_url')->value('value') ?? 'https://agn.org/' }}" target="_blank" style="color: #326D78; text-decoration: none; font-weight: 600; border-bottom: 2px solid #326D78; transition: all 0.3s ease;">{{ \App\Models\Content::where('key', 'agn_website_url')->value('value') ?? 'https://agn.org/' }}</a>.
                    </p>
                </div>

                <!-- Disclaimer -->
                <div style="background: linear-gradient(135deg, #fff3cd 0%, #ffeaa7 100%); border: 1px solid #ffd93d; padding: 2.5rem; border-radius: 12px; margin-bottom: 3rem; box-shadow: 0 4px 15px rgba(255, 193, 7, 0.2); opacity: 0; animation: fadeInUp 1s ease-out 1.1s forwards;">
                    <div style="display: flex; align-items: center; margin-bottom: 1.5rem;">
                        <div style="background: #ffc107; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-right: 1rem; width: 40px; height: 40px;">
                            <i class="fas fa-info-circle" style="color: white; font-size: 1.2rem;"></i>
                        </div>
                        <h3 style="font-size: 1.4rem; font-weight: 600; color: #856404; margin: 0;">
                            {{ \App\Models\Content::where('key', 'disclaimer_title')->value('value') ?? 'Disclaimer' }}
                        </h3>
                    </div>
                    <p style="font-size: 1rem; color: #856404; line-height: 1.7; margin: 0;">
                        {{ \App\Models\Content::where('key', 'disclaimer_content')->value('value') ?? 'AGN International Ltd is a company limited by guarantee registered in England & Wales, number 3132548, registered office 24 Greville Street, London EC1N 8SS, United Kingdom. AGN International Ltd (and its regional affiliates; together "AGN") is a not-for-profit worldwide membership association of separate and independent accounting and advisory businesses. AGN does not provide and is not responsible for services to the clients of its members. Members provide services to their clients under their own local agreements with those clients. Members are not in partnership together, they are neither agents of nor obligate one another and are not responsible for the services of other members.' }}
                    </p>
                </div>

                <!-- Contact CTA -->
                <div style="text-align: center; padding: 3rem; background: linear-gradient(135deg, #f8fafb 0%, #e8f4f8 100%); border-radius: 15px; box-shadow: 0 6px 20px rgba(0,0,0,0.06); opacity: 0; animation: fadeInUp 1s ease-out 1.3s forwards;">
                    <h3 style="font-size: 1.5rem; font-weight: 600; color: #2a2a2a; margin-bottom: 1rem;">
                        {{ \App\Models\Content::where('key', 'contact_cta_title')->value('value') ?? 'Ready to leverage our global network?' }}
                    </h3>
                    <p style="font-size: 1.1rem; color: #6c757d; margin-bottom: 2rem;">
                        {{ \App\Models\Content::where('key', 'contact_cta_description')->value('value') ?? 'Connect with our team to learn how AGN International can support your business growth.' }}
                    </p>
                    <a href="{{ url('/#contact') }}" style="display: inline-block; background: linear-gradient(135deg, #326D78, #5ba3b0); color: white; padding: 15px 35px; border-radius: 50px; text-decoration: none; font-weight: 600; font-size: 1.1rem; transition: all 0.3s ease; box-shadow: 0 6px 20px rgba(50, 109, 120, 0.3);">
                        {{ \App\Models\Content::where('key', 'contact_cta_button')->value('value') ?? 'Contact Us Today' }}
                        <i class="fas fa-arrow-right ms-2"></i>
                    </a>
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

    /* Fade Up Animation */
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Floating Animation */
    @keyframes float {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-15px); }
    }

    /* Hover Effects */
    .col-lg-4 > div:hover {
        transform: translateY(-8px);
        box-shadow: 0 12px 35px rgba(0,0,0,0.15);
    }

    a[href*="contact"]:hover {
        transform: translateY(-3px);
        box-shadow: 0 10px 30px rgba(50, 109, 120, 0.4);
    }

    a[href*="agn.org"]:hover {
        border-bottom-color: #2a5a63;
        color: #2a5a63;
    }

    /* Staggered Animation for Cards */
    .col-lg-4:nth-child(1) > div {
        opacity: 0;
        animation: fadeInUp 1s ease-out 0.9s forwards;
    }

    .col-lg-4:nth-child(2) > div {
        opacity: 0;
        animation: fadeInUp 1s ease-out 1.1s forwards;
    }

    .col-lg-4:nth-child(3) > div {
        opacity: 0;
        animation: fadeInUp 1s ease-out 1.3s forwards;
    }

    /* Stats Cards Animation */
    .col-md-4:nth-child(1) > div {
        opacity: 0;
        animation: fadeInUp 1s ease-out 0.7s forwards;
    }

    .col-md-4:nth-child(2) > div {
        opacity: 0;
        animation: fadeInUp 1s ease-out 0.9s forwards;
    }

    .col-md-4:nth-child(3) > div {
        opacity: 0;
        animation: fadeInUp 1s ease-out 1.1s forwards;
    }

    /* Mobile Responsiveness */
    @media (max-width: 768px) {
        h1 {
            font-size: 2.5rem !important;
        }

        h2 {
            font-size: 1.8rem !important;
        }

        .container {
            padding: 0 1rem;
        }

        div[style*="padding: 2.5rem"] {
            padding: 2rem !important;
        }

        div[style*="padding: 3rem"] {
            padding: 2rem !important;
        }

        .breadcrumb {
            position: relative !important;
            top: 10px !important;
            left: 20px !important;
        }

        section {
            padding: 3rem 0 !important;
        }

        /* Hide floating elements on mobile */
        div[style*="position: absolute"][style*="animation: float"] {
            display: none;
        }
    }

    @media (max-width: 576px) {
        .col-md-4, .col-lg-4 {
            margin-bottom: 1.5rem;
        }

        div[style*="display: flex; align-items: center"] h2 {
            font-size: 1.6rem !important;
        }
    }
</style>

@endsection
