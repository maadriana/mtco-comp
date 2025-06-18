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
                <li class="breadcrumb-item active" aria-current="page" style="color: #6c757d; font-weight: 500;">
                    {{ \App\Models\Content::where('key', 'governance_page_title')->value('value') ?: 'Governance & Risk Management' }}
                </li>
            </ol>
        </nav>
    </div>

    <!-- Header Content with Transition -->
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
                <div style="margin-bottom: 3rem;" data-aos="fade-up" data-aos-delay="100">
                    @php
                        $governanceServiceImage = \App\Models\Content::where('key', 'governance_service_image')->first();
                    @endphp
                    @if($governanceServiceImage && $governanceServiceImage->image)
                        <img src="data:image/jpeg;base64,{{ base64_encode($governanceServiceImage->image) }}" alt="Governance & Risk Management"
                             style="width: 100%; height: 300px; object-fit: cover; border-radius: 10px; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
                    @else
                        <img src="{{ asset('assets/img/risk-and-internal.jpg') }}" alt="Governance & Risk Management"
                             style="width: 100%; height: 300px; object-fit: cover; border-radius: 10px; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
                    @endif
                </div>

                <!-- Service Overview -->
                <div style="margin-bottom: 3rem;" data-aos="fade-up" data-aos-delay="100">
                    <h2 style="color: #333; font-weight: 600; margin-bottom: 1.5rem; font-size: 2rem;">
                        {{ \App\Models\Content::where('key', 'governance_overview_title')->value('value') ?: 'Building Strong Foundations' }}
                    </h2>
                    <p style="color: #666; font-size: 1.1rem; line-height: 1.7; margin-bottom: 1.5rem;">
                        {{ \App\Models\Content::where('key', 'governance_overview_paragraph1')->value('value') ?: 'At Mendoza Tugano & Co., CPAs (MTC), we help organizations establish robust governance structures and effective risk management frameworks that promote transparency, accountability, and long-term sustainability.' }}
                    </p>
                </div>

                <!-- Key Approaches -->
                <div style="margin-bottom: 3rem;" data-aos="fade-up" data-aos-delay="100">
                    <h3 style="color: #333; font-weight: 600; margin-bottom: 2rem; font-size: 1.5rem;">
                        {{ \App\Models\Content::where('key', 'governance_approach_title')->value('value') ?: 'Our Approach' }}
                    </h3>

                    @foreach(range(1, 3) as $i)
                    <div style="margin-bottom: {{ $i < 3 ? '2rem' : '0' }}; padding: 1.5rem; background: #f8f9fa; border-left: 4px solid #326D78; border-radius: 8px;">
                        <h4 style="color: #326D78; font-weight: 600; margin-bottom: 1rem; font-size: 1.2rem;">
                            {{ \App\Models\Content::where('key', "governance_approach_item{$i}_title")->value('value') ?? 'Approach Item ' . $i }}
                        </h4>
                        <p style="color: #666; margin: 0; line-height: 1.6;">
                            {{ \App\Models\Content::where('key', "governance_approach_item{$i}_description")->value('value') ?? 'Approach item description for item ' . $i }}
                        </p>
                    </div>
                    @endforeach
                </div>

                <!-- Services List -->
                <div style="background: #326D78; padding: 2rem; border-radius: 15px; color: white; margin-bottom: 3rem;" data-aos="fade-up" data-aos-delay="100">
                    <h4 style="color: white; font-weight: 600; margin-bottom: 1.5rem;">
                        {{ \App\Models\Content::where('key', 'governance_services_title')->value('value') ?: 'Our Services Include:' }}
                    </h4>
                    <div style="display: flex; flex-direction: column; gap: 1rem;">
                        @foreach(range(1, 4) as $i)
                        <div style="display: flex; align-items: center;">
                            <i class="fas fa-check-circle" style="margin-right: 1rem; color: rgba(255,255,255,0.8);"></i>
                            <span>{{ \App\Models\Content::where('key', "governance_service{$i}_title")->value('value') ?? "Service {$i}" }}</span>
                        </div>
                        @endforeach
                    </div>
                </div>

                <!-- CTA -->
                <div style="text-align: left;">
                    <a href="{{ url('/#contact') }}" style="display: inline-block; background: #326D78; color: white; padding: 1rem 2.5rem; border-radius: 50px; text-decoration: none; font-weight: 600; transition: all 0.3s ease; box-shadow: 0 4px 15px rgba(50, 109, 120, 0.3);">
                        {{ \App\Models\Content::where('key', 'governance_cta_button_text')->value('value') ?: 'Start Your Journey Today' }}
                        <i class="fas fa-arrow-right ms-2"></i>
                    </a>
                </div>

            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <div style="position: sticky; top: 2rem;">

                    <!-- Contact Card -->
                    <div style="background: #326D78; color: white; padding: 2rem; border-radius: 10px; margin-bottom: 2rem;" data-aos="fade-up" data-aos-delay="100">
                        <h4 style="color: white; font-weight: 600; margin-bottom: 1rem;">
                            {{ \App\Models\Content::where('key', 'governance_cta_title')->value('value') ?: 'Strengthen Your Governance' }}
                        </h4>
                        <p style="color: rgba(255,255,255,0.9); margin-bottom: 1.5rem; line-height: 1.6;">
                            {{ \App\Models\Content::where('key', 'governance_cta_description')->value('value') ?: 'Ready to build a stronger governance framework? Let\'s discuss how we can help secure your organization\'s future.' }}
                        </p>
                        <a href="{{ url('/#contact') }}" style="display: inline-block; background: white; color: #326D78; padding: 0.75rem 1.5rem; border-radius: 8px; text-decoration: none; font-weight: 600; transition: all 0.3s ease; width: 100%; text-align: center;">
                            {{ \App\Models\Content::where('key', 'governance_cta_button_text')->value('value') ?: 'Contact Us Now' }}
                        </a>
                    </div>

                    <!-- Quick Facts -->
                    <div style="background: #f8f9fa; padding: 2rem; border-radius: 10px; margin-bottom: 2rem;" data-aos="fade-up" data-aos-delay="100">
                        <h5 style="color: #333; font-weight: 600; margin-bottom: 1.5rem;">Quick Facts</h5>
                        @foreach(range(1, 3) as $i)
                        <div style="margin-bottom: {{ $i < 3 ? '1rem' : '0' }}; padding-bottom: {{ $i < 3 ? '1rem' : '0' }}; border-bottom: {{ $i < 3 ? '1px solid #e9ecef' : 'none' }};">
                            <div style="display: flex; justify-content: space-between; align-items: center;">
                                <span style="color: #666; font-size: 0.9rem;">{{ \App\Models\Content::where("key", "governance_fact{$i}_label")->value('value') ?? "Fact {$i}" }}</span>
                                <strong style="color: #326D78; font-size: 1.1rem;">{{ \App\Models\Content::where("key", "governance_fact{$i}_value")->value('value') ?? 'N/A' }}</strong>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <!-- Related Services -->
                    <div style="background: white; border: 1px solid #e9ecef; padding: 2rem; border-radius: 10px;" data-aos="fade-up" data-aos-delay="100">
                        <h5 style="color: #333; font-weight: 600; margin-bottom: 1.5rem;">Related Services</h5>
                        @foreach(range(1, 3) as $i)
                        <div style="margin-bottom: {{ $i < 3 ? '1rem' : '0' }};">
                            <a href="#" style="color: #326D78; text-decoration: none; font-weight: 500; display: block; padding: 0.5rem 0; {{ $i < 3 ? 'border-bottom: 1px solid #f1f1f1;' : '' }}">
                                <i class="fas fa-arrow-right me-2" style="font-size: 0.8rem;"></i>
                                {{ \App\Models\Content::where("key", "governance_related_service{$i}")->value('value') ?? "Related Service {$i}" }}
                            </a>
                        </div>
                        @endforeach
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

<!-- AOS Library (make sure it's globally available) -->
@push('scripts')
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
@endpush

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
    }
</style>

@endsection
