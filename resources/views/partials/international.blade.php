@extends('layouts.app')

@section('title', 'International | Mendoza Tugano & Co., CPAs')

@section('content')

<!-- International Hero Section -->
<div style="position: relative; background: linear-gradient(135deg, #f8fafb 0%, #ffffff 100%); min-height: 75vh; display: flex; align-items: center; overflow: hidden; padding-top: 2rem;">

    <!-- Breadcrumb -->
    <div style="position: absolute; top: 20px; left: 70px; z-index: 10; pointer-events: auto; background: rgba(255, 255, 255, 0.95); padding: 10px 20px; border-radius: 6px; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0" style="font-size: 0.9rem;">
                <li class="breadcrumb-item">
                    <a href="{{ url('/') }}" style="color: #326D78; text-decoration: none; font-weight: 500; pointer-events: auto;">
                        <i class="fas fa-home me-1"></i>Home
                    </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page" style="color: #6c757d; font-weight: 500;">International</li>
            </ol>
        </nav>
    </div>

    <!-- Global Network Background Pattern -->
    <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; opacity: 0.03; z-index: 1;">
        <div style="position: absolute; top: 20%; left: 15%; width: 3px; height: 150px; background: #326D78; transform: rotate(25deg);"></div>
        <div style="position: absolute; top: 30%; right: 20%; width: 2px; height: 120px; background: #5ba3b0; transform: rotate(-15deg);"></div>
        <div style="position: absolute; bottom: 25%; left: 25%; width: 2px; height: 100px; background: #4a8a96; transform: rotate(45deg);"></div>
        <div style="position: absolute; top: 50%; right: 35%; width: 4px; height: 4px; background: #326D78; border-radius: 50%;"></div>
        <div style="position: absolute; top: 35%; left: 40%; width: 6px; height: 6px; background: #5ba3b0; border-radius: 50%;"></div>
        <div style="position: absolute; bottom: 40%; right: 15%; width: 5px; height: 5px; background: #4a8a96; border-radius: 50%;"></div>
    </div>

    <!-- Hero Content -->
    <div class="container" style="position: relative; z-index: 2;">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div style="opacity: 0; animation: fadeInUp 1s ease-out 0.3s forwards;">
                    <h1 style="font-family: 'Raleway', sans-serif; font-size: 3.7rem; font-weight: 600; color: #2a2a2a; line-height: 1.1; margin-bottom: 2rem;">
                        Bridging Markets,<br>
                        <span style="color: #326D78; position: relative;">
                            Creating Opportunities
                            <div style="position: absolute; bottom: -8px; left: 0; width: 100%; height: 3px; background: linear-gradient(90deg, #326D78, #5ba3b0); border-radius: 2px; opacity: 0.6;"></div>
                        </span>
                    </h1>
                    <p style="font-size: 1.2rem; color: #6c757d; line-height: 1.8; margin-bottom: 3rem; max-width: 520px;">
                        {{ getContent('international_hero_subtitle', 'Through strategic international partnerships and deep cross-border expertise, we empower Philippine businesses to thrive in global markets with confidence and precision.') }}
                    </p>
                    <div style="display: flex; gap: 1.5rem; flex-wrap: wrap; align-items: center;">
                        <a href="#contact" style="background: linear-gradient(135deg, #326D78, #5ba3b0); color: white; padding: 16px 32px; font-size: 16px; font-weight: 600; text-decoration: none; border-radius: 10px; transition: all 0.4s; display: inline-flex; align-items: center; gap: 10px; box-shadow: 0 6px 20px rgba(50,109,120,0.25);">
                            Start Global Expansion
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M5 12h14m-7-7l7 7-7 7"/>
                            </svg>
                        </a>
                        <div style="display: flex; align-items: center; gap: 15px; color: #6c757d; font-size: 14px;">
                            <div style="display: flex; align-items: center; gap: 8px;">
                                <div style="width: 12px; height: 12px; background: #326D78; border-radius: 50%;"></div>
                                <span>{{ getContent('international_trust_indicator1', '25+ Countries') }}</span>
                            </div>
                            <div style="display: flex; align-items: center; gap: 8px;">
                                <div style="width: 12px; height: 12px; background: #5ba3b0; border-radius: 50%;"></div>
                                <span>{{ getContent('international_trust_indicator2', '150+ Global Clients') }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <!-- International Network Visualization -->
                <div style="position: relative; opacity: 0; animation: fadeInRight 1s ease-out 0.6s forwards;">
                    <div style="background: linear-gradient(135deg, rgba(50,109,120,0.05), rgba(91,163,176,0.05)); padding: 3rem; border-radius: 25px; border: 1px solid rgba(50,109,120,0.1); position: relative;">
                        <!-- Central Hub -->
                        <div style="text-align: center; margin-bottom: 2rem;">
                            <div style="width: 80px; height: 80px; background: linear-gradient(135deg, #326D78, #5ba3b0); border-radius: 50%; margin: 0 auto 1rem; display: flex; align-items: center; justify-content: center; position: relative; box-shadow: 0 8px 25px rgba(50,109,120,0.2);">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="white" viewBox="0 0 24 24">
                                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                                </svg>
                                <!-- Pulse animation -->
                                <div style="position: absolute; width: 100%; height: 100%; border: 2px solid #326D78; border-radius: 50%; animation: pulse 2s infinite; opacity: 0.4;"></div>
                            </div>
                            <h4 style="font-family: 'Raleway', sans-serif; font-size: 1.2rem; font-weight: 600; color: #326D78; margin-bottom: 0.5rem;">{{ getContent('international_hub_title', 'Philippines Hub') }}</h4>
                            <p style="font-size: 0.9rem; color: #6c757d;">{{ getContent('international_hub_subtitle', 'Your Gateway to Global Markets') }}</p>
                        </div>

                        <!-- Connected Regions -->
                        <div class="row g-3">
                            <div class="col-6">
                                <div style="background: white; padding: 1.5rem; border-radius: 15px; text-align: center; border: 1px solid rgba(50,109,120,0.1); position: relative;">
                                    <div style="width: 50px; height: 50px; background: linear-gradient(135deg, #5ba3b0, #4a8a96); border-radius: 50%; margin: 0 auto 1rem; display: flex; align-items: center; justify-content: center;">
                                        <div style="width: 12px; height: 12px; background: white; border-radius: 50%;"></div>
                                    </div>
                                    <div style="font-size: 1rem; font-weight: 600; color: #2a2a2a; margin-bottom: 0.3rem;">{{ getContent('region1_name', 'Asia Pacific') }}</div>
                                    <div style="font-size: 0.8rem; color: #6c757d;">8 Markets</div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div style="background: white; padding: 1.5rem; border-radius: 15px; text-align: center; border: 1px solid rgba(50,109,120,0.1);">
                                    <div style="width: 50px; height: 50px; background: linear-gradient(135deg, #4a8a96, #326D78); border-radius: 50%; margin: 0 auto 1rem; display: flex; align-items: center; justify-content: center;">
                                        <div style="width: 12px; height: 12px; background: white; border-radius: 50%;"></div>
                                    </div>
                                    <div style="font-size: 1rem; font-weight: 600; color: #2a2a2a; margin-bottom: 0.3rem;">{{ getContent('region2_name', 'Americas') }}</div>
                                    <div style="font-size: 0.8rem; color: #6c757d;">3 Markets</div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div style="background: white; padding: 1.5rem; border-radius: 15px; text-align: center; border: 1px solid rgba(50,109,120,0.1);">
                                    <div style="width: 50px; height: 50px; background: linear-gradient(135deg, #326D78, #5ba3b0); border-radius: 50%; margin: 0 auto 1rem; display: flex; align-items: center; justify-content: center;">
                                        <div style="width: 12px; height: 12px; background: white; border-radius: 50%;"></div>
                                    </div>
                                    <div style="font-size: 1rem; font-weight: 600; color: #2a2a2a; margin-bottom: 0.3rem;">{{ getContent('region3_name', 'Europe') }}</div>
                                    <div style="font-size: 0.8rem; color: #6c757d;">6 Markets</div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div style="background: white; padding: 1.5rem; border-radius: 15px; text-align: center; border: 1px solid rgba(50,109,120,0.1);">
                                    <div style="width: 50px; height: 50px; background: linear-gradient(135deg, #5ba3b0, #326D78); border-radius: 50%; margin: 0 auto 1rem; display: flex; align-items: center; justify-content: center;">
                                        <div style="width: 12px; height: 12px; background: white; border-radius: 50%;"></div>
                                    </div>
                                    <div style="font-size: 1rem; font-weight: 600; color: #2a2a2a; margin-bottom: 0.3rem;">{{ getContent('region4_name', 'MENA') }}</div>
                                    <div style="font-size: 0.8rem; color: #6c757d;">5 Markets</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- International Expertise Section -->
<section style="padding: 6rem 0; background: white; position: relative;">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div style="position: sticky; top: 2rem;">
                    <div style="display: inline-flex; align-items: center; padding: 0.5rem 1rem; border-radius: 20px; font-size: 0.9rem; font-weight: 600; margin-bottom: 1.5rem; gap: 8px;">
                        <div style="width: 6px; height: 6px; border-radius: 50%;"></div>
                    </div>
                    <h2 style="font-family: 'Raleway', sans-serif; font-size: 2.4rem; font-weight: 700; color: #2a2a2a; margin-bottom: 2rem; line-height: 1.2;">
                        {{ getContent('expertise_title', 'Cross-Border Excellence in Every Transaction') }}
                    </h2>
                    <div style="width: 80px; height: 4px; background: linear-gradient(90deg, #326D78, #5ba3b0); border-radius: 2px; margin-bottom: 2rem;"></div>
                    <p style="font-size: 1.1rem; color: #6c757d; line-height: 1.8; margin-bottom: 2.5rem;">
                        {{ getContent('expertise_description', 'Our deep understanding of international markets, regulatory frameworks, and cultural nuances positions us as your trusted partner in global business expansion.') }}
                    </p>
                    <div style="display: flex; gap: 2rem; margin-bottom: 2rem;">
                        <div style="text-align: center;">
                            <div style="font-family: 'Raleway', sans-serif; font-size: 2.2rem; font-weight: 700; color: #326D78; margin-bottom: 0.3rem;">20+</div>
                            <div style="font-size: 0.9rem; color: #6c757d; line-height: 1.4;">Years Cross-Border Experience</div>
                        </div>
                        <div style="text-align: center;">
                            <div style="font-family: 'Raleway', sans-serif; font-size: 2.2rem; font-weight: 700; color: #5ba3b0; margin-bottom: 0.3rem;">100%</div>
                            <div style="font-size: 0.9rem; color: #6c757d; line-height: 1.4;">Client Success Rate</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="row g-4">
                    <!-- Expertise Card 1 -->
                    <div class="col-md-6">
                        <div style="background: linear-gradient(135deg, #f8fafb 0%, #ffffff 100%); padding: 2.5rem; border-radius: 20px; border: 1px solid rgba(50,109,120,0.1); height: 100%; position: relative; transition: all 0.4s ease;">
                            <div style="position: absolute; top: 0; right: 0; width: 60px; height: 60px; background: rgba(50,109,120,0.05); border-radius: 0 20px 0 60px;"></div>
                            <div style="width: 60px; height: 60px; background: linear-gradient(135deg, #326D78, #5ba3b0); border-radius: 15px; display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem; position: relative; z-index: 2;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="white" viewBox="0 0 24 24">
                                    <path d="M12 2l8 4v6c0 5.25-3.39 10.74-8 12-4.61-1.26-8-6.75-8-12V6l8-4z"/>
                                </svg>
                            </div>
                            <h4 style="font-family: 'Raleway', sans-serif; color: #2a2a2a; font-size: 1.3rem; font-weight: 600; margin-bottom: 1rem;">{{ getContent('expertise_card1_title', 'Regulatory Compliance') }}</h4>
                            <p style="color: #6c757d; line-height: 1.7; font-size: 15px;">{{ getContent('expertise_card1_description', 'Navigate complex international regulations with confidence through our comprehensive compliance frameworks and local market insights.') }}</p>
                        </div>
                    </div>

                    <!-- Expertise Card 2 -->
                    <div class="col-md-6">
                        <div style="background: linear-gradient(135deg, #f8fafb 0%, #ffffff 100%); padding: 2.5rem; border-radius: 20px; border: 1px solid rgba(50,109,120,0.1); height: 100%; position: relative; transition: all 0.4s ease;">
                            <div style="position: absolute; top: 0; right: 0; width: 60px; height: 60px; background: rgba(91,163,176,0.05); border-radius: 0 20px 0 60px;"></div>
                            <div style="width: 60px; height: 60px; background: linear-gradient(135deg, #5ba3b0, #4a8a96); border-radius: 15px; display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem; position: relative; z-index: 2;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="white" viewBox="0 0 24 24">
                                    <path d="M3 17h2v-7H3v7zm4 0h2v-4H7v4zm4 0h2V7h-2v10zm4 0h2v-2h-2v2zm4 0h2v-8h-2v8z"/>
                                </svg>
                            </div>
                            <h4 style="font-family: 'Raleway', sans-serif; color: #2a2a2a; font-size: 1.3rem; font-weight: 600; margin-bottom: 1rem;">{{ getContent('expertise_card2_title', 'Tax Optimization') }}</h4>
                            <p style="color: #6c757d; line-height: 1.7; font-size: 15px;">{{ getContent('expertise_card2_description', 'Maximize tax efficiency across multiple jurisdictions through strategic planning and advanced transfer pricing methodologies.') }}</p>
                        </div>
                    </div>

                    <!-- Expertise Card 3 -->
                    <div class="col-md-6">
                        <div style="background: linear-gradient(135deg, #f8fafb 0%, #ffffff 100%); padding: 2.5rem; border-radius: 20px; border: 1px solid rgba(50,109,120,0.1); height: 100%; position: relative; transition: all 0.4s ease;">
                            <div style="position: absolute; top: 0; right: 0; width: 60px; height: 60px; background: rgba(74,138,150,0.05); border-radius: 0 20px 0 60px;"></div>
                            <div style="width: 60px; height: 60px; background: linear-gradient(135deg, #4a8a96, #326D78); border-radius: 15px; display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem; position: relative; z-index: 2;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="white" viewBox="0 0 24 24">
                                    <path d="M12 1C5.93 1 1 5.93 1 12s4.93 11 11 11 11-4.93 11-11S18.07 1 12 1zm0 20c-4.96 0-9-4.04-9-9s4.04-9 9-9 9 4.04 9 9-4.04 9-9 9z"/>
                                </svg>
                            </div>
                            <h4 style="font-family: 'Raleway', sans-serif; color: #2a2a2a; font-size: 1.3rem; font-weight: 600; margin-bottom: 1rem;">{{ getContent('expertise_card3_title', 'Market Entry Strategy') }}</h4>
                            <p style="color: #6c757d; line-height: 1.7; font-size: 15px;">{{ getContent('expertise_card3_description', 'Strategic guidance for entering new markets with comprehensive feasibility studies and localization strategies.') }}</p>
                        </div>
                    </div>

                    <!-- Expertise Card 4 -->
                    <div class="col-md-6">
                        <div style="background: linear-gradient(135deg, #f8fafb 0%, #ffffff 100%); padding: 2.5rem; border-radius: 20px; border: 1px solid rgba(50,109,120,0.1); height: 100%; position: relative; transition: all 0.4s ease;">
                            <div style="position: absolute; top: 0; right: 0; width: 60px; height: 60px; background: rgba(50,109,120,0.05); border-radius: 0 20px 0 60px;"></div>
                            <div style="width: 60px; height: 60px; background: linear-gradient(135deg, #326D78, #4a8a96); border-radius: 15px; display: flex; align-items: center; justify-content: center; margin-bottom: 1.5rem; position: relative; z-index: 2;">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="white" viewBox="0 0 24 24">
                                    <path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5s-3 1.34-3 3 1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5s-3 1.34-3 3 1.34 3 3 3z"/>
                                </svg>
                            </div>
                            <h4 style="font-family: 'Raleway', sans-serif; color: #2a2a2a; font-size: 1.3rem; font-weight: 600; margin-bottom: 1rem;">{{ getContent('expertise_card4_title', 'Global Partnerships') }}</h4>
                            <p style="color: #6c757d; line-height: 1.7; font-size: 15px;">{{ getContent('expertise_card4_description', 'Access our extensive network of international partners for seamless service delivery across all major business jurisdictions.') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- International Services Showcase -->
<section style="background: linear-gradient(135deg, #f8fafb 0%, #ffffff 100%); padding: 6rem 0; position: relative;">
    <!-- Background Pattern -->
    <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; opacity: 0.02; z-index: 1;">
        <div style="width: 100%; height: 100%; background-image: radial-gradient(circle at 25% 25%, #326D78 2px, transparent 2px), radial-gradient(circle at 75% 75%, #5ba3b0 2px, transparent 2px); background-size: 50px 50px;"></div>
    </div>

    <div class="container" style="position: relative; z-index: 2;">
        <div style="text-align: center; margin-bottom: 5rem;">
            <div style="display: inline-flex; align-items: center;  padding: 0.5rem 1rem; border-radius: 20px; font-size: 0.9rem; font-weight: 600; margin-bottom: 1.5rem; gap: 8px;">
                <div style="width: 6px; height: 6px;"></div>
            </div>
            <h2 style="font-family: 'Raleway', sans-serif; font-size: 3rem; font-weight: 700; color: #2a2a2a; margin-bottom: 1.5rem;">
                {{ getContent('services_title', 'International Business Services') }}
            </h2>
            <p style="font-size: 1.2rem; color: #6c757d; max-width: 700px; margin: 0 auto; line-height: 1.8;">
                {{ getContent('services_description', 'From cross-border transactions to global compliance, we provide end-to-end solutions that enable your business to operate seamlessly across international markets.') }}
            </p>
        </div>

        <!-- Services Timeline -->
        <div style="position: relative; max-width: 800px; margin: 0 auto;">
            <!-- Timeline Line -->
            <div style="position: absolute; left: 50%; transform: translateX(-50%); top: 0; bottom: 0; width: 3px; background: linear-gradient(180deg, #326D78, #5ba3b0, #4a8a96); border-radius: 2px;"></div>

            <!-- Service Items -->
            <div style="display: flex; flex-direction: column; gap: 4rem;">
                <!-- Service 1 - Left -->
                <div style="display: flex; align-items: center; position: relative;">
                    <div style="flex: 1; text-align: right; padding-right: 3rem;">
                        <div style="background: white; padding: 2rem; border-radius: 15px; border: 1px solid rgba(50,109,120,0.1); box-shadow: 0 5px 20px rgba(0,0,0,0.05); position: relative;">
                            <h4 style="font-family: 'Raleway', sans-serif; color: #326D78; font-size: 1.2rem; font-weight: 600; margin-bottom: 0.8rem;">{{ getContent('timeline_service1_title', 'Cross-Border Tax Advisory') }}</h4>
                            <p style="color: #6c757d; font-size: 14px; line-height: 1.6;">{{ getContent('timeline_service1_description', 'Navigate international tax complexities with expert guidance on transfer pricing, treaty optimization, and multi-jurisdictional compliance strategies.') }}</p>
                        </div>
                    </div>
                    <div style="position: absolute; left: 50%; transform: translateX(-50%); width: 40px; height: 40px; background: linear-gradient(135deg, #326D78, #5ba3b0); border-radius: 50%; display: flex; align-items: center; justify-content: center; z-index: 3; box-shadow: 0 4px 15px rgba(50,109,120,0.3);">
                        <div style="width: 16px; height: 16px; background: white; border-radius: 50%;"></div>
                    </div>
                    <div style="flex: 1;"></div>
                </div>

                <!-- Service 2 - Right -->
                <div style="display: flex; align-items: center; position: relative;">
                    <div style="flex: 1;"></div>
                    <div style="position: absolute; left: 50%; transform: translateX(-50%); width: 40px; height: 40px; background: linear-gradient(135deg, #5ba3b0, #4a8a96); border-radius: 50%; display: flex; align-items: center; justify-content: center; z-index: 3; box-shadow: 0 4px 15px rgba(91,163,176,0.3);">
                        <div style="width: 16px; height: 16px; background: white; border-radius: 50%;"></div>
                    </div>
                    <div style="flex: 1; padding-left: 3rem;">
                        <div style="background: white; padding: 2rem; border-radius: 15px; border: 1px solid rgba(50,109,120,0.1); box-shadow: 0 5px 20px rgba(0,0,0,0.05);">
                            <h4 style="font-family: 'Raleway', sans-serif; color: #5ba3b0; font-size: 1.2rem; font-weight: 600; margin-bottom: 0.8rem;">{{ getContent('timeline_service2_title', 'Global Financial Reporting') }}</h4>
                            <p style="color: #6c757d; font-size: 14px; line-height: 1.6;">{{ getContent('timeline_service2_description', 'Ensure seamless compliance with IFRS and local GAAP requirements across multiple jurisdictions through our specialized reporting expertise.') }}</p>
                        </div>
                    </div>
                </div>

                <!-- Service 3 - Left -->
                <div style="display: flex; align-items: center; position: relative;">
                    <div style="flex: 1; text-align: right; padding-right: 3rem;">
                        <div style="background: white; padding: 2rem; border-radius: 15px; border: 1px solid rgba(50,109,120,0.1); box-shadow: 0 5px 20px rgba(0,0,0,0.05);">
                            <h4 style="font-family: 'Raleway', sans-serif; color: #4a8a96; font-size: 1.2rem; font-weight: 600; margin-bottom: 0.8rem;">{{ getContent('timeline_service3_title', 'International Business Setup') }}</h4>
                            <p style="color: #6c757d; font-size: 14px; line-height: 1.6;">{{ getContent('timeline_service3_description', 'Comprehensive support for international entity formation, licensing, and regulatory compliance to establish your global presence.') }}</p>
                        </div>
                    </div>
                    <div style="position: absolute; left: 50%; transform: translateX(-50%); width: 40px; height: 40px; background: linear-gradient(135deg, #4a8a96, #326D78); border-radius: 50%; display: flex; align-items: center; justify-content: center; z-index: 3; box-shadow: 0 4px 15px rgba(74,138,150,0.3);">
                        <div style="width: 16px; height: 16px; background: white; border-radius: 50%;"></div>
                    </div>
                    <div style="flex: 1;"></div>
                </div>

                <!-- Service 4 - Right -->
                <div style="display: flex; align-items: center; position: relative;">
                    <div style="flex: 1;"></div>
                    <div style="position: absolute; left: 50%; transform: translateX(-50%); width: 40px; height: 40px; background: linear-gradient(135deg, #326D78, #5ba3b0); border-radius: 50%; display: flex; align-items: center; justify-content: center; z-index: 3; box-shadow: 0 4px 15px rgba(50,109,120,0.3);">
                        <div style="width: 16px; height: 16px; background: white; border-radius: 50%;"></div>
                    </div>
                    <div style="flex: 1; padding-left: 3rem;">
                        <div style="background: white; padding: 2rem; border-radius: 15px; border: 1px solid rgba(50,109,120,0.1); box-shadow: 0 5px 20px rgba(0,0,0,0.05);">
                            <h4 style="font-family: 'Raleway', sans-serif; color: #326D78; font-size: 1.2rem; font-weight: 600; margin-bottom: 0.8rem;">{{ getContent('timeline_service4_title', 'M&A Advisory Services') }}</h4>
                            <p style="color: #6c757d; font-size: 14px; line-height: 1.6;">{{ getContent('timeline_service4_description', 'Expert guidance for cross-border mergers and acquisitions, including due diligence, valuation, and post-transaction integration support.') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Global Network & Partnerships -->
<section style="background: white; padding: 6rem 0;">
    <div class="container">
        <div class="row align-items-center g-5">
            <div class="col-lg-6">
                <div style="display: inline-flex; align-items: center; padding: 0.5rem 1rem; border-radius: 20px; font-size: 0.9rem; font-weight: 600; margin-bottom: 1.5rem; gap: 8px;">
                    <div style="width: 6px; height: 6px;"></div>
                </div>
                <h2 style="font-family: 'Raleway', sans-serif; font-size: 2.8rem; font-weight: 700; color: #2a2a2a; margin-bottom: 2rem; line-height: 1.2;">
                    {{ getContent('network_title', 'Trusted Partners Across Continents') }}
                </h2>
                <p style="font-size: 1.1rem; color: #6c757d; line-height: 1.8; margin-bottom: 2.5rem;">
                    {{ getContent('network_description', 'Our strategic partnerships with leading international firms create a seamless global network, ensuring consistent quality and local expertise wherever your business operates.') }}
                </p>

                <!-- Partnership Benefits -->
                <div style="display: flex; flex-direction: column; gap: 1.5rem; margin-bottom: 2.5rem;">
                    <div style="display: flex; align-items: center; gap: 1rem;">
                        <div style="width: 50px; height: 50px; background: linear-gradient(135deg, #326D78, #5ba3b0); border-radius: 12px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="white" viewBox="0 0 24 24">
                                <path d="M12 2l8 4v6c0 5.25-3.39 10.74-8 12-4.61-1.26-8-6.75-8-12V6l8-4z"/>
                            </svg>
                        </div>
                        <div>
                            <h5 style="font-family: 'Raleway', sans-serif; color: #2a2a2a; font-size: 1.1rem; font-weight: 600; margin-bottom: 0.3rem;">{{ getContent('benefit1_title', 'Consistent Global Standards') }}</h5>
                            <p style="color: #6c757d; font-size: 14px; margin: 0;">{{ getContent('benefit1_description', 'Unified quality protocols across all partner jurisdictions') }}</p>
                        </div>
                    </div>
                    <div style="display: flex; align-items: center; gap: 1rem;">
                        <div style="width: 50px; height: 50px; background: linear-gradient(135deg, #5ba3b0, #4a8a96); border-radius: 12px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="white" viewBox="0 0 24 24">
                                <path d="M3 17h2v-7H3v7zm4 0h2v-4H7v4zm4 0h2V7h-2v10zm4 0h2v-2h-2v2zm4 0h2v-8h-2v8z"/>
                            </svg>
                        </div>
                        <div>
                            <h5 style="font-family: 'Raleway', sans-serif; color: #2a2a2a; font-size: 1.1rem; font-weight: 600; margin-bottom: 0.3rem;">{{ getContent('benefit2_title', 'Local Market Intelligence') }}</h5>
                            <p style="color: #6c757d; font-size: 14px; margin: 0;">{{ getContent('benefit2_description', 'Deep regional insights from our local partner networks') }}</p>
                        </div>
                    </div>
                    <div style="display: flex; align-items: center; gap: 1rem;">
                        <div style="width: 50px; height: 50px; background: linear-gradient(135deg, #4a8a96, #326D78); border-radius: 12px; display: flex; align-items: center; justify-content: center; flex-shrink: 0;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="white" viewBox="0 0 24 24">
                                <path d="M12 1C5.93 1 1 5.93 1 12s4.93 11 11 11 11-4.93 11-11S18.07 1 12 1zm0 20c-4.96 0-9-4.04-9-9s4.04-9 9-9 9 4.04 9 9-4.04 9-9 9z"/>
                            </svg>
                        </div>
                        <div>
                            <h5 style="font-family: 'Raleway', sans-serif; color: #2a2a2a; font-size: 1.1rem; font-weight: 600; margin-bottom: 0.3rem;">{{ getContent('benefit3_title', 'Seamless Coordination') }}</h5>
                            <p style="color: #6c757d; font-size: 14px; margin: 0;">{{ getContent('benefit3_description', 'Synchronized project management across time zones') }}</p>
                        </div>
                    </div>
                </div>

                <a href="#contact" style="background: linear-gradient(135deg, #326D78, #5ba3b0); color: white; padding: 16px 30px; font-size: 16px; font-weight: 600; text-decoration: none; border-radius: 10px; transition: all 0.3s; display: inline-flex; align-items: center; gap: 10px;">
                    {{ getContent('network_cta', 'Connect with Our Network') }}
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M5 12h14m-7-7l7 7-7 7"/>
                    </svg>
                </a>
            </div>
            <div class="col-lg-6">
                <!-- Interactive Global Map -->
                <div style="background: linear-gradient(135deg, #f8fafb, #ffffff); padding: 3rem; border-radius: 25px; border: 1px solid rgba(50,109,120,0.1); position: relative;">
                    <div style="text-align: center; margin-bottom: 2.5rem;">
                        <h4 style="font-family: 'Raleway', sans-serif; font-size: 1.4rem; font-weight: 600; color: #2a2a2a; margin-bottom: 0.5rem;">{{ getContent('map_title', 'Global Coverage') }}</h4>
                        <p style="color: #6c757d; font-size: 14px;">{{ getContent('map_subtitle', 'Professional services across 25+ countries') }}</p>
                    </div>

                    <!-- Regions Grid -->
                    <div class="row g-3">
                        <div class="col-6">
                            <div style="background: white; padding: 1.8rem; border-radius: 15px; text-align: center; border: 1px solid rgba(50,109,120,0.1); transition: all 0.3s; position: relative; overflow: hidden;">
                                <div style="position: absolute; top: 0; left: 0; width: 100%; height: 4px; background: linear-gradient(90deg, #326D78, #5ba3b0);"></div>
                                <div style="font-family: 'Raleway', sans-serif; font-size: 1.1rem; font-weight: 600; color: #326D78; margin-bottom: 0.5rem;">{{ getContent('region1_name', 'Asia Pacific') }}</div>
                                <div style="font-size: 1.8rem; font-weight: 700; color: #2a2a2a; margin-bottom: 0.3rem;">8</div>
                                <div style="font-size: 0.8rem; color: #6c757d;">Countries</div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div style="background: white; padding: 1.8rem; border-radius: 15px; text-align: center; border: 1px solid rgba(50,109,120,0.1); transition: all 0.3s; position: relative; overflow: hidden;">
                                <div style="position: absolute; top: 0; left: 0; width: 100%; height: 4px; background: linear-gradient(90deg, #5ba3b0, #4a8a96);"></div>
                                <div style="font-family: 'Raleway', sans-serif; font-size: 1.1rem; font-weight: 600; color: #5ba3b0; margin-bottom: 0.5rem;">{{ getContent('region2_name', 'Americas') }}</div>
                                <div style="font-size: 1.8rem; font-weight: 700; color: #2a2a2a; margin-bottom: 0.3rem;">3</div>
                                <div style="font-size: 0.8rem; color: #6c757d;">Countries</div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div style="background: white; padding: 1.8rem; border-radius: 15px; text-align: center; border: 1px solid rgba(50,109,120,0.1); transition: all 0.3s; position: relative; overflow: hidden;">
                                <div style="position: absolute; top: 0; left: 0; width: 100%; height: 4px; background: linear-gradient(90deg, #4a8a96, #326D78);"></div>
                                <div style="font-family: 'Raleway', sans-serif; font-size: 1.1rem; font-weight: 600; color: #4a8a96; margin-bottom: 0.5rem;">{{ getContent('region3_name', 'Europe') }}</div>
                                <div style="font-size: 1.8rem; font-weight: 700; color: #2a2a2a; margin-bottom: 0.3rem;">6</div>
                                <div style="font-size: 0.8rem; color: #6c757d;">Countries</div>
                            </div>
                        </div>
                        <div class="col-6">
                            <div style="background: white; padding: 1.8rem; border-radius: 15px; text-align: center; border: 1px solid rgba(50,109,120,0.1); transition: all 0.3s; position: relative; overflow: hidden;">
                                <div style="position: absolute; top: 0; left: 0; width: 100%; height: 4px; background: linear-gradient(90deg, #326D78, #5ba3b0);"></div>
                                <div style="font-family: 'Raleway', sans-serif; font-size: 1.1rem; font-weight: 600; color: #326D78; margin-bottom: 0.5rem;">{{ getContent('region4_name', 'MENA') }}</div>
                                <div style="font-size: 1.8rem; font-weight: 700; color: #2a2a2a; margin-bottom: 0.3rem;">5</div>
                                <div style="font-size: 0.8rem; color: #6c757d;">Countries</div>
                            </div>
                        </div>
                    </div>

                    <!-- Connection Lines Overlay -->
                    <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 2px; height: 80px; background: linear-gradient(180deg, #326D78, transparent); opacity: 0.3;"></div>
                    <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%) rotate(45deg); width: 2px; height: 60px; background: linear-gradient(180deg, #5ba3b0, transparent); opacity: 0.3;"></div>
                    <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%) rotate(-45deg); width: 2px; height: 60px; background: linear-gradient(180deg, #4a8a96, transparent); opacity: 0.3;"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section style="background: linear-gradient(135deg, #326D78 0%, #5ba3b0 100%); color: white; padding: 6rem 0; position: relative; overflow: hidden;" id="contact">
    <!-- Background Pattern -->
    <div style="position: absolute; top: 0; left: 0; right: 0; bottom: 0; opacity: 0.1; z-index: 1;">
        <div style="position: absolute; top: 20%; left: 10%; width: 100px; height: 100px; border: 2px solid white; border-radius: 50%; opacity: 0.3;"></div>
        <div style="position: absolute; bottom: 30%; right: 15%; width: 80px; height: 80px; border: 2px solid white; border-radius: 50%; opacity: 0.2;"></div>
        <div style="position: absolute; top: 60%; left: 60%; width: 60px; height: 60px; border: 2px solid white; border-radius: 50%; opacity: 0.4;"></div>
    </div>

    <div class="container" style="position: relative; z-index: 2;">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <div style="margin-bottom: 2rem;">
                    <div style="display: inline-flex; align-items: center; padding: 0.5rem 1rem; border-radius: 20px; font-size: 0.9rem; font-weight: 600; margin-bottom: 1.5rem; gap: 8px;">
                        <div style="width: 6px; height: 6px;"></div>
                    </div>
                    <h2 style="font-family: 'Raleway', sans-serif; font-size:2.8rem; font-weight: 600; margin-bottom: 1.5rem; line-height: 1.2; color: white">
                        {{ getContent('cta_title', 'Take Your Business Global') }}
                    </h2>
                    <p style="font-size: 1.3rem; opacity: 0.9; line-height: 1.7; margin-bottom: 3rem; max-width: 600px;">
                        {{ getContent('cta_description', 'Partner with us to navigate international markets with confidence. Our global expertise and local insights will accelerate your expansion strategy.') }}
                    </p>
                </div>

                <!-- Action Items -->
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 1.5rem; margin-bottom: 3rem;">
                    <div style="display: flex; align-items: center; gap: 1rem;">
                        <div style="width: 50px; height: 50px; background: rgba(255,255,255,0.2); border-radius: 12px; display: flex; align-items: center; justify-content: center;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="white" viewBox="0 0 24 24">
                                <path d="M12 2l8 4v6c0 5.25-3.39 10.74-8 12-4.61-1.26-8-6.75-8-12V6l8-4z"/>
                            </svg>
                        </div>
                        <div>
                            <div style="font-weight: 600; margin-bottom: 0.2rem;">{{ getContent('action1_title', 'Free Consultation') }}</div>
                            <div style="font-size: 0.9rem; opacity: 0.8;">{{ getContent('action1_subtitle', 'Strategic planning session') }}</div>
                        </div>
                    </div>
                    <div style="display: flex; align-items: center; gap: 1rem;">
                        <div style="width: 50px; height: 50px; background: rgba(255,255,255,0.2); border-radius: 12px; display: flex; align-items: center; justify-content: center;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="white" viewBox="0 0 24 24">
                                <path d="M3 17h2v-7H3v7zm4 0h2v-4H7v4zm4 0h2V7h-2v10zm4 0h2v-2h-2v2zm4 0h2v-8h-2v8z"/>
                            </svg>
                        </div>
                        <div>
                            <div style="font-weight: 600; margin-bottom: 0.2rem;">{{ getContent('action2_title', 'Market Analysis') }}</div>
                            <div style="font-size: 0.9rem; opacity: 0.8;">{{ getContent('action2_subtitle', 'Comprehensive assessment') }}</div>
                        </div>
                    </div>
                </div>

                <div style="display: flex; gap: 1.5rem; flex-wrap: wrap;">
                    <a href="{{ url('/contact') }}" style="background: white; color: #326D78; padding: 18px 35px; font-size: 18px; font-weight: 600; text-decoration: none; border-radius: 12px; transition: all 0.4s; display: inline-flex; align-items: center; gap: 10px; box-shadow: 0 6px 20px rgba(0,0,0,0.15);">
                        {{ getContent('cta_primary_button', 'Start Your Global Journey') }}
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M5 12h14m-7-7l7 7-7 7"/>
                        </svg>
                    </a>
                    <a href="tel:+6328887 1888" style="background: transparent; color: white; border: 2px solid white; padding: 16px 33px; font-size: 18px; font-weight: 600; text-decoration: none; border-radius: 12px; transition: all 0.4s; display: inline-flex; align-items: center; gap: 10px;">
                        {{ getContent('cta_phone_button', 'Call +632 8887 1888') }}
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="col-lg-4">
                <div style="text-align: center; position: relative;">
                    <!-- Contact Card -->
                    <div style="background: rgba(255,255,255,0.15); backdrop-filter: blur(10px); padding: 3rem 2rem; border-radius: 20px; border: 1px solid rgba(255,255,255,0.2);">
                        <div style="display: flex; align-items: center; justify-content: center; margin: 0 auto 2rem;">
                        </div>
                        <h4 style="font-family: 'Raleway', sans-serif; font-size: 1.4rem; font-weight: 600; margin-bottom: 1rem; color:white">{{ getContent('contact_card_title', 'International Team') }}</h4>
                        <p style="opacity: 0.9; margin-bottom: 2rem; font-size: 15px;">{{ getContent('contact_card_description', 'Our global specialists are ready to discuss your expansion plans.') }}</p>
                        <div style="font-size: 1.1rem; font-weight: 600; margin-bottom: 0.5rem;">{{ getContent('contact_email', 'international@mtco.com.ph') }}</div>
                        <div style="opacity: 0.8; font-size: 14px;">{{ getContent('contact_hours', 'Available 24/7 across time zones') }}</div>
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

    /* Animations */
    @keyframes fadeInUp {
        from { opacity: 0; transform: translateY(30px); }
        to { opacity: 1; transform: translateY(0); }
    }

    @keyframes fadeInRight {
        from { opacity: 0; transform: translateX(30px); }
        to { opacity: 1; transform: translateX(0); }
    }

    @keyframes spin {
        from { transform: rotate(0deg); }
        to { transform: rotate(360deg); }
    }

    @keyframes pulse {
        0%, 100% { transform: scale(1); opacity: 0.4; }
        50% { transform: scale(1.2); opacity: 0.1; }
    }

    /* Hover Effects */
    .col-md-6 > div:hover,
    .col-6 > div:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 35px rgba(0,0,0,0.1);
    }

    /* Only target CTA buttons in sections, NOT header/navbar */
    section a[href*="contact"]:hover {
        transform: translateY(-3px);
        box-shadow: 0 12px 35px rgba(0,0,0,0.2) !important;
    }

    section a[href*="tel"]:hover {
        background: white !important;
        color: #326D78 !important;
        border-color: white !important;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        h1 { font-size: 2.8rem !important; }
        h2 { font-size: 2rem !important; }

        /* Timeline adjustments */
        .container > div[style*="max-width: 800px"] div[style*="position: absolute; left: 50%"] {
            display: none;
        }

        .container > div[style*="max-width: 800px"] div[style*="flex: 1; text-align: right"] {
            text-align: left !important;
            padding-right: 0 !important;
            padding-bottom: 2rem;
        }

        .container > div[style*="max-width: 800px"] div[style*="flex: 1; padding-left"] {
            padding-left: 0 !important;
        }

        /* Grid adjustments */
        div[style*="grid-template-columns: repeat(auto-fit, minmax(200px, 1fr))"] {
            display: block !important;
        }

        div[style*="grid-template-columns: repeat(auto-fit, minmax(200px, 1fr))"] > div {
            margin-bottom: 1rem;
        }
    }
</style>

@endsection
