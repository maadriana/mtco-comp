@extends('layouts.app')

@section('title', 'Business Restructuring and Insolvency - Services')

@section('content')

<!-- Vertical Split Layout -->
<div style="position: relative; margin-top: -1.5rem; min-height: 100vh; display: flex;">

    <!-- Left Side - Content Panel -->
    <div style="flex: 1; background: #fff; padding: 4rem 3rem; position: relative; overflow-y: auto;">

        <!-- Breadcrumb -->
        <div style="position: absolute; top: 20px; left: 70px; background: rgba(255, 255, 255, 0.95); padding: 10px 20px; border-radius: 6px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); display: inline-block; width: auto; z-index: 100;">
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
                    <li class="breadcrumb-item active" aria-current="page" style="color: #6c757d; font-weight: 500;">Business Restructuring and Insolvency</li>
                </ol>
            </nav>
        </div>

        <!-- Content starts after breadcrumb space -->
        <div style="margin-top: 80px;">

            <!-- Service Header -->
            <div style="border-left: 6px solid #326D78; padding-left: 2rem; margin-bottom: 3rem;">
                <span style="color: #326D78; font-size: 0.9rem; font-weight: 600; text-transform: uppercase; letter-spacing: 1px;">Professional Services</span>
                <h1 style="font-size: 3.5rem; font-weight: 700; color: #333; margin: 0.5rem 0; line-height: 1.1;">
                    Business Restructuring<br><span style="font-weight: 700;">and Insolvency</span>
                </h1>
            </div>

            <!-- Main Content Blocks -->
            <div style="max-width: 500px;">

                <!-- Intro Block -->
                <div style="margin-bottom: 3rem; padding: 2rem; background: #f8f9fa; border-radius: 0 25px 25px 0; border-left: 4px solid #326D78;">
                    <h3 style="color: #326D78; font-weight: 600; margin-bottom: 1rem; font-size: 1.5rem;">Expert Financial Recovery</h3>
                    <p style="color: #666; line-height: 1.7; margin: 0; font-size: 1.3rem;">
                        We help and advise business owners with financial problems every day. We have an acute awareness of how stressful it can be when your business runs into difficulty.
                    </p>
                </div>

                <!-- Key Points -->
                <div style="margin-bottom: 3rem;">
                    <div style="display: flex; align-items: flex-start; margin-bottom: 2rem;">
                        <div style="background: #326D78; width: 12px; height: 12px; border-radius: 50%; margin-top: 6px; margin-right: 1.5rem; flex-shrink: 0;"></div>
                        <p style="color: #666; line-height: 1.7; margin: 0; font-size: 1.2rem;">
                            <strong style="color: #333;">Specialist Expertise:</strong> Financial and operational problems require specialist skills and our extensive experience helps us plan the best path for you and your business.
                        </p>
                    </div>
                    <div style="display: flex; align-items: flex-start; margin-bottom: 2rem;">
                        <div style="background: #326D78; width: 12px; height: 12px; border-radius: 50%; margin-top: 6px; margin-right: 1.5rem; flex-shrink: 0;"></div>
                        <p style="color: #666; line-height: 1.7; margin: 0; font-size: 1.2rem">
                            <strong style="color: #333;">Collaborative Approach:</strong> We work closely with bankers, venture capital funds and lawyers to restructure and refinance struggling organisations across multiple sectors.
                        </p>
                    </div>
                    <div style="display: flex; align-items: flex-start;">
                        <div style="background: #326D78; width: 12px; height: 12px; border-radius: 50%; margin-top: 6px; margin-right: 1.5rem; flex-shrink: 0;"></div>
                        <p style="color: #666; line-height: 1.7; margin: 0; font-size: 1.2rem">
                            <strong style="color: #333;">Recovery Focused:</strong> The priority is to focus on recovery — both the business and its corporate structure. Many businesses can avoid administration or liquidation.
                        </p>
                    </div>
                </div>

                <!-- Services List -->
                <div style="background: #326D78; padding: 2rem; border-radius: 15px; color: white;">
                    <h4 style="color: white; font-weight: 600; margin-bottom: 1.5rem;">Our Approach Includes:</h4>
                    <div style="display: flex; flex-direction: column; gap: 1rem;">
                        <div style="display: flex; align-items: center;">
                            <i class="fas fa-check-circle" style="margin-right: 1rem; color: rgba(255,255,255,0.8);"></i>
                            <span>Business restructuring and refinancing</span>
                        </div>
                        <div style="display: flex; align-items: center;">
                            <i class="fas fa-check-circle" style="margin-right: 1rem; color: rgba(255,255,255,0.8);"></i>
                            <span>Insolvency and administration guidance</span>
                        </div>
                        <div style="display: flex; align-items: center;">
                            <i class="fas fa-check-circle" style="margin-right: 1rem; color: rgba(255,255,255,0.8);"></i>
                            <span>Cross-border and multi-jurisdictional solutions</span>
                        </div>
                        <div style="display: flex; align-items: center;">
                            <i class="fas fa-check-circle" style="margin-right: 1rem; color: rgba(255,255,255,0.8);"></i>
                            <span>Early intervention and recovery planning</span>
                        </div>
                    </div>
                </div>

                <!-- Contact CTA -->
                <div style="margin-top: 3rem; text-align: left;">
                    <a href="{{ url('/#contact') }}" style="display: inline-block; background: #326D78; color: white; padding: 1rem 2.5rem; border-radius: 50px; text-decoration: none; font-weight: 600; transition: all 0.3s ease; box-shadow: 0 4px 15px rgba(50, 109, 120, 0.3);">
                        Get Expert Help Today
                        <i class="fas fa-arrow-right ms-2"></i>
                    </a>
                </div>

            </div>
        </div>
    </div>

    <!-- Right Side - Visual Panel -->
    <div style="flex: 1; background: linear-gradient(45deg, #82d4e2 0%, #47bdd2 30%, #6be9ff 70%, #5ba3b0 100%); position: relative; display: flex; align-items: center; justify-content: center; overflow: hidden;">

        <!-- Background Pattern -->
        <div style="position: absolute; inset: 0; opacity: 0.1;">
            <div style="position: absolute; top: 10%; left: 10%; width: 200px; height: 200px; border: 2px solid white; border-radius: 50%; transform: rotate(15deg);"></div>
            <div style="position: absolute; top: 40%; right: 15%; width: 150px; height: 150px; border: 2px solid white; border-radius: 50%; transform: rotate(-20deg);"></div>
            <div style="position: absolute; bottom: 20%; left: 20%; width: 100px; height: 100px; border: 2px solid white; border-radius: 50%; transform: rotate(45deg);"></div>
            <div style="position: absolute; top: 20%; right: 40%; width: 80px; height: 80px; background: white; border-radius: 50%; opacity: 0.5;"></div>
            <div style="position: absolute; bottom: 40%; right: 20%; width: 60px; height: 60px; background: white; border-radius: 50%; opacity: 0.3;"></div>
        </div>

        <!-- Central Content -->
        <div style="text-align: center; color: white; position: relative; z-index: 2;">

            <!-- Large Icon -->
            <div style="background: rgba(255,255,255,0.2); width: 140px; height: 140px; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin: 0 auto 2rem; backdrop-filter: blur(10px); border: 2px solid rgba(255,255,255,0.3);">
                <i class="fas fa-chart-line-down" style="font-size: 4rem; color: white;"></i>
            </div>

            <!-- Statistics -->
            <div style="background: rgba(255,255,255,0.15); padding: 2rem; border-radius: 20px; backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.2);">
                <h3 style="font-size: 2.5rem; font-weight: 700; margin-bottom: 0.5rem; color: white;">Expert</h3>
                <p style="margin-bottom: 2rem; opacity: 0.9; font-size: 1.1rem;">Business Recovery Solutions</p>

                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1.5rem; margin-top: 2rem;">
                    <div>
                        <h4 style="font-size: 2rem; font-weight: 700; margin-bottom: 0.5rem; color: white;">15+</h4>
                        <small style="opacity: 0.8; font-size: 0.9rem;">Years Experience</small>
                    </div>
                    <div>
                        <h4 style="font-size: 2rem; font-weight: 700; margin-bottom: 0.5rem; color: white;">Global</h4>
                        <small style="opacity: 0.8; font-size: 0.9rem;">Reach & Solutions</small>
                    </div>
                    <div>
                        <h4 style="font-size: 2rem; font-weight: 700; margin-bottom: 0.5rem; color: white;">24/7</h4>
                        <small style="opacity: 0.8; font-size: 0.9rem;">Crisis Support</small>
                    </div>
                    <div>
                        <h4 style="font-size: 2rem; font-weight: 700; margin-bottom: 0.5rem; color: white;">Recovery</h4>
                        <small style="opacity: 0.8; font-size: 0.9rem;">Focused Approach</small>
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

    a[href*="contact"]:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 25px rgba(50, 109, 120, 0.4);
        background: #2c5f69;
    }

    @media (max-width: 768px) {
        div[style*="display: flex"]:first-of-type {
            flex-direction: column;
            min-height: auto;
        }

        div[style*="flex: 1"]:first-of-type {
            order: 2;
            padding: 2rem 1.5rem;
        }

        div[style*="flex: 1"]:last-of-type {
            order: 1;
            min-height: 300px;
        }
    }
</style>

@endsection
