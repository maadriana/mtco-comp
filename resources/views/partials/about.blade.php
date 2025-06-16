@extends('layouts.app')

@section('title', 'About | Mendoza Tugano & Co., CPAs')

@section('content')

<!-- Clean Hero Section -->
<div style="position: relative; margin-top: -1.5rem; background: #f8fafb; min-height: 70vh; display: flex; align-items: center; overflow: hidden;">

    <!-- Breadcrumb -->
<div style="position: absolute; top: 20px; left: 70px; z-index: 9999; pointer-events: auto; background: rgba(255, 255, 255, 0.95); padding: 10px 20px; border-radius: 6px; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0" style="font-size: 0.9rem;">
            <li class="breadcrumb-item">
                <a href="{{ url('/') }}" style="color: #326D78; text-decoration: none; font-weight: 500; pointer-events: auto;">
                    <i class="fas fa-home me-1"></i>Home
                </a>
            </li>
            <li class="breadcrumb-item active" aria-current="page" style="color: #6c757d; font-weight: 500;">About</li>
        </ol>
    </nav>
</div>

    <!-- Geometric Elements -->
    <div style="position: absolute; top: 15%; right: 8%; width: 120px; height: 120px; background: rgba(50, 109, 120, 0.1); border-radius: 50%; z-index: 1; animation:"></div>
    <div style="position: absolute; top: 60%; left: 12%; width: 80px; height: 80px; background: rgba(91, 163, 176, 0.15); transform: rotate(45deg); border-radius: 20px; z-index: 1;"></div>
    <div style="position: absolute; bottom: 20%; right: 20%; width: 60px; height: 60px; background: rgba(74, 138, 150, 0.2); border-radius: 50%; z-index: 1; animation: float3 7s ease-in-out infinite;"></div>
    <div style="position: absolute; top: 30%; left: 25%; width: 40px; height: 40px; background: rgba(50, 109, 120, 0.25); transform: rotate(30deg); border-radius: 8px; z-index: 1;"></div>

    <!-- Hero Content -->
    <div class="container" style="position: relative; z-index: 2;">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-10">
                <div style="text-align: center; padding: 2rem 0;">
                    <h1 style="font-size: 3.7rem; font-weight: 600; color: #2a2a2a; line-height: 1.1; margin-bottom: 1.5rem; opacity: 0; animation: fadeInUp 1s ease-out 0.3s forwards;">
                        {!! getContent('about_hero_title', 'Preserving<br><span style="font-weight: 600; color: #326D78;">Excellence</span>') !!}
                    </h1>
                    <p style="font-size: 1.4rem; color: #6c757d; line-height: 1.6; margin-bottom: 2rem; max-width: 600px; margin-left: auto; margin-right: auto; opacity: 0; animation: fadeInUp 1s ease-out 0.6s forwards;">
                        {{ getContent('about_hero_subtitle', 'A legacy of trust, precision, and unwavering dedication to client success since our founding.') }}
                    </p>
                    <div style="display: flex; gap: 1rem; flex-wrap: wrap; justify-content: center; opacity: 0; animation: fadeInUp 1s ease-out 0.9s forwards;">
                        <div style="background: white; padding: 1rem 1.5rem; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.06); border-left: 4px solid #326D78; transition: all 0.3s ease;">
                            <div style="font-size: 1.8rem; font-weight: 700; color: #326D78; margin-bottom: 0.2rem;">{{ getContent('about_years_legacy', '20+') }}</div>
                            <div style="font-size: 0.9rem; color: #6c757d;">Years Legacy</div>
                        </div>
                        <div style="background: white; padding: 1rem 1.5rem; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.06); border-left: 4px solid #5ba3b0; transition: all 0.3s ease;">
                            <div style="font-size: 1.8rem; font-weight: 700; color: #5ba3b0; margin-bottom: 0.2rem;">{{ getContent('about_clients_served', '100+') }}</div>
                            <div style="font-size: 0.9rem; color: #6c757d;">Clients Served</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Circular Quote Element - Positioned Better -->
        <div style="position: absolute; top: 50%; right: 5%; transform: translateY(-50%); opacity: 0; animation: fadeInScale 1s ease-out 1.2s forwards;">
            <div style="width: 250px; height: 250px; background: linear-gradient(135deg, #326D78, #5ba3b0); border-radius: 50%; position: relative; box-shadow: 0 20px 60px rgba(50, 109, 120, 0.2); display: flex; align-items: center; justify-content: center;">
                <div style="color: white; text-align: center;">
                    <div style="font-size: 1.6rem; font-weight: 700; margin-bottom: 0.5rem;">{{ getContent('about_circular_quote', '"Passion for Excellence"') }}</div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Story Section with Clean Cards -->
<section style="padding: 6rem 0; background: white;">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-6">
                <div style="position: sticky; top: 2rem;">
                    <div style="display: inline-block; background: rgba(50, 109, 120, 0.1); color: #326D78; padding: 0.5rem 1rem; border-radius: 20px; font-size: 0.9rem; font-weight: 600; margin-bottom: 1.5rem; opacity: 0; animation: fadeInLeft 1s ease-out 0.3s forwards;">
                        {{ getContent('about_story_badge', 'Our Foundation') }}
                    </div>
                    <h2 style="font-size: 2.1rem; font-weight: 600; color: #2a2a2a; margin-bottom: 2rem; opacity: 0; animation: fadeInLeft 1s ease-out 0.6s forwards;">
                        {!! getContent('about_story_title', 'Built on <span style="font-weight: 600; color: #326D78;">Legacy</span>') !!}
                    </h2>
                    <div style="width: 60px; height: 4px; background: linear-gradient(90deg, #326D78, #5ba3b0); border-radius: 2px; margin-bottom: 2rem; opacity: 0; animation: scaleX 1s ease-out 0.9s forwards; transform-origin: left;"></div>
                    <p style="font-size: 1.1rem; color: #6c757d; line-height: 1.7; margin-bottom: 2rem; opacity: 0; animation: fadeInLeft 1s ease-out 1.2s forwards;">
                        {{ getContent('about_story_paragraph1', 'Emmanuel Y. Mendoza redefined the audit and accounting landscape, founding an institution built on unwavering dedication, precision, and integrity.') }}
                    </p>
                    <p style="font-size: 1.1rem; color: #6c757d; line-height: 1.7; opacity: 0; animation: fadeInLeft 1s ease-out 1.5s forwards;">
                        {{ getContent('about_story_paragraph2', 'Today, Mendoza Tugano & Co., CPAs continues this legacy, representing not just continuity but an elevation of the principles that have earned client trust for decades.') }}
                    </p>
                </div>
            </div>
            <div class="col-lg-6">
                <div style="display: flex; flex-direction: column; gap: 1.5rem;">
                    <!-- Excellence Card -->
                    <div style="background: linear-gradient(135deg, #f8fafb 0%, #e9ecef 100%); padding: 2rem; border-radius: 16px; border-left: 6px solid #326D78; opacity: 0; animation: fadeInRight 1s ease-out 0.6s forwards; transition: all 0.3s ease;">
                        <h4 style="color: #326D78; font-weight: 600; margin-bottom: 1rem;">{{ getContent('about_card1_title', 'Continuous Excellence') }}</h4>
                        <p style="color: #6c757d; line-height: 1.6; margin: 0;">
                            {{ getContent('about_card1_description', 'Our commitment to delivering precise, ethical, and personalized financial solutions mirrors the trust and reliability clients expect from our lineage.') }}
                        </p>
                    </div>

                    <!-- Innovation Card -->
                    <div style="background: linear-gradient(135deg, #f8fafb 0%, #e9ecef 100%); padding: 2rem; border-radius: 16px; border-left: 6px solid #326D78; opacity: 0; animation: fadeInRight 1s ease-out 0.6s forwards; transition: all 0.3s ease;">
                        <h4 style="color: #326D78; font-weight: 600; margin-bottom: 1rem;">{{ getContent('about_card2_title', 'Digital Innovation') }}</h4>
                        <p style="color: #6c757d; line-height: 1.6; margin: 0;">
                            {{ getContent('about_card2_description', 'As we embrace the opportunities of the digital age, we do so with the same unwavering commitment to client success that has defined our heritage.') }}
                        </p>
                    </div>

                    <!-- Promise Card -->
                    <div style="background: linear-gradient(135deg, #f8fafb 0%, #e9ecef 100%); padding: 2rem; border-radius: 16px; border-left: 6px solid #326D78; opacity: 0; animation: fadeInRight 1s ease-out 0.6s forwards; transition: all 0.3s ease;">
                        <h4 style="color: #326D78; font-weight: 600; margin-bottom: 1rem;">{{ getContent('about_card3_title', 'Heritage Promise') }}</h4>
                        <p style="color: #6c757d; line-height: 1.6; margin: 0;">
                            {{ getContent('about_card3_description', '"Passion for Excellence" isn\'t merely our motto — it\'s a pledge rooted in a heritage of trust and dedication to your success.') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Vision & Mission - Split Design with SVG Icons -->
<section style="background: #f8fafb; padding: 6rem 0;">
  <style>
    .circle-icon {
      width: 80px;
      height: 80px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 2rem;
      transition: all 0.3s ease;
    }
  </style>

  <div class="container">
    <div style="text-align: center; margin-bottom: 4rem;">
      <div style="display: inline-block; background: rgba(50, 109, 120, 0.1); color: #326D78; padding: 0.5rem 1rem; border-radius: 20px; font-size: 0.9rem; font-weight: 600; margin-bottom: 1rem; opacity: 0; animation: fadeInUp 1s ease-out 0.3s forwards;">
        Our Direction
      </div>
      <h2 style="font-size: 2.6rem; font-weight: 600; color: #2a2a2a; opacity: 0; animation: fadeInUp 1s ease-out 0.6s forwards;">
        Vision & <span style="font-weight: 600; color: #326D78;">Mission</span>
      </h2>
    </div>

    <div class="row g-0" style="border-radius: 20px; overflow: hidden; box-shadow: 0 20px 60px rgba(0,0,0,0.1); opacity: 0; animation: fadeInUp 1s ease-out 0.9s forwards;">

      <!-- Vision -->
      <div class="col-lg-6" style="background: white; padding: 4rem 3rem; position: relative; transition: all 0.3s ease;">
        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 6px; background: linear-gradient(90deg, #326D78, #4a8a96);"></div>
        <div class="circle-icon" style="background: rgba(50, 109, 120, 0.1);">
          <!-- Eye Icon -->
          <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="#326D78" viewBox="0 0 24 24">
            <path d="M12 5c-7.633 0-11 6.5-11 6.5S4.367 18 12 18s11-6.5 11-6.5S19.633 5 12 5zm0 11a4.5 4.5 0 1 1 0-9 4.5 4.5 0 0 1 0 9zm0-7a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5z"/>
          </svg>
        </div>
        <h3 style="color: #2a2a2a; font-size: 1.8rem; font-weight: 600; margin-bottom: 1.5rem;">Our Vision</h3>
        <p style="color: #6c757d; line-height: 1.7; font-size: 1.1rem; margin: 0;">
          {{ getContent('about_vision_text', 'To lead the audit and accounting industry through our unwavering "Passion for Excellence", becoming a trusted standard for ethical innovation and generational impact.') }}
        </p>
      </div>

      <!-- Mission -->
      <div class="col-lg-6" style="background: #326D78; padding: 4rem 3rem; color: white; position: relative; transition: all 0.3s ease;">
        <div style="position: absolute; top: 0; left: 0; width: 100%; height: 6px; background: linear-gradient(90deg, #5ba3b0, #4a8a96);"></div>
        <div class="circle-icon" style="background: rgba(255, 255, 255, 0.15);">
          <!-- Target/Bullseye Icon -->
          <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="white" viewBox="0 0 24 24">
            <path d="M12 1C5.93 1 1 5.93 1 12s4.93 11 11 11 11-4.93 11-11S18.07 1 12 1zm0 20c-4.96 0-9-4.04-9-9s4.04-9 9-9 9 4.04 9 9-4.04 9-9 9zm0-16a7 7 0 1 0 0 14 7 7 0 0 0 0-14zm0 12a5 5 0 1 1 0-10 5 5 0 0 1 0 10zm0-8a3 3 0 1 0 .001 6.001A3 3 0 0 0 12 9z"/>
          </svg>
        </div>
        <h3 style="color: white; font-size: 1.8rem; font-weight: 600; margin-bottom: 1.5rem;">Our Mission</h3>
        <p style="color: rgba(255,255,255,0.9); line-height: 1.7; font-size: 1.1rem; margin: 0;">
          {{ getContent('about_mission_text', 'To deliver outstanding, ethical, and client-focused financial services that empower businesses to grow confidently in a dynamic world — anchored in our legacy of trust and excellence.') }}
        </p>
      </div>
    </div>
  </div>
</section>

<!-- Core Values - Minimal Grid with Hover Effects -->
<section style="padding: 6rem 0; background: white;">

  <div class="container">
    <div style="text-align: center; margin-bottom: 4rem;">
      <div style="display: inline-block; background: rgba(50, 109, 120, 0.1); color: #326D78; padding: 0.5rem 1rem; border-radius: 20px; font-size: 0.9rem; font-weight: 600; margin-bottom: 1rem;">
  What Drives Us
</div>
<h2 style="font-size: 2.6rem; font-weight: 600; color: #2a2a2a;">
  Core <span style="font-weight: 600; color: #326D78;">Values</span>
</h2>
      <p style="color: #6c757d; font-size: 1.2rem; max-width: 600px; margin: 0 auto;">
        The principles that guide every decision and define our character
      </p>
    </div>

    <div class="row g-4">
      <!-- Each card below now uses value-card and value-icon classes -->

      <!-- Excellence -->
      <div class="col-lg-4 col-md-6" style="text-align: center;">
        <div class="value-card">
          <div class="value-icon" style="background: linear-gradient(135deg, #326D78, #5ba3b0);">
            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="white" viewBox="0 0 24 24">
              <path d="M12 .587l3.668 7.429 8.2 1.192-5.934 5.782 1.4 8.166L12 18.896l-7.334 3.86 1.4-8.166L.132 9.208l8.2-1.192z"/>
            </svg>
          </div>
          <h4 style="color: #2a2a2a; font-size: 1.3rem; font-weight: 600;">{{ getContent('about_value1_title', 'Excellence') }}</h4>
          <p style="color: #6c757d; font-size: 0.95rem;">{{ getContent('about_value1_description', 'We set high standards in everything we do, delivering with precision and pride.') }}</p>
        </div>
      </div>

      <!-- Integrity -->
      <div class="col-lg-4 col-md-6" style="text-align: center;">
        <div class="value-card">
          <div class="value-icon" style="background: linear-gradient(135deg, #5ba3b0, #4a8a96);">
            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="white" viewBox="0 0 24 24">
              <path d="M12 2l8 4v6c0 5.25-3.39 10.74-8 12-4.61-1.26-8-6.75-8-12V6l8-4z"/>
            </svg>
          </div>
          <h4 style="color: #2a2a2a; font-size: 1.3rem; font-weight: 600;">{{ getContent('about_value2_title', 'Integrity') }}</h4>
          <p style="color: #6c757d; font-size: 0.95rem;">{{ getContent('about_value2_description', 'We are honest, ethical, and transparent in our commitments.') }}</p>
        </div>
      </div>

      <!-- Innovation -->
      <div class="col-lg-4 col-md-6" style="text-align: center;">
        <div class="value-card">
          <div class="value-icon" style="background: linear-gradient(135deg, #4a8a96, #326D78);">
            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="white" viewBox="0 0 24 24">
              <path d="M9 21h6v-1H9v1zm3-20C7.48 1 4 4.48 4 9c0 3.25 2.5 6.26 4 7v3h8v-3c1.5-.74 4-3.75 4-7 0-4.52-3.48-8-8-8z"/>
            </svg>
          </div>
          <h4 style="color: #2a2a2a; font-size: 1.3rem; font-weight: 600;">{{ getContent('about_value3_title', 'Innovation') }}</h4>
          <p style="color: #6c757d; font-size: 0.95rem;">{{ getContent('about_value3_description', 'We embrace change and lead with forward-thinking solutions.') }}</p>
        </div>
      </div>

      <!-- Professional Growth -->
      <div class="col-lg-4 col-md-6" style="text-align: center;">
        <div class="value-card">
          <div class="value-icon" style="background: linear-gradient(135deg, #326D78, #4a8a96);">
            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="white" viewBox="0 0 24 24">
              <path d="M3 17h2v-7H3v7zm4 0h2v-4H7v4zm4 0h2V7h-2v10zm4 0h2v-2h-2v2zm4 0h2v-8h-2v8z"/>
            </svg>
          </div>
          <h4 style="color: #2a2a2a; font-size: 1.3rem; font-weight: 600;">{{ getContent('about_value4_title', 'Professional Growth') }}</h4>
          <p style="color: #6c757d; font-size: 0.95rem;">{{ getContent('about_value4_description', 'We encourage lifelong learning and support our people\'s development.') }}</p>
        </div>
      </div>

      <!-- Teamwork -->
      <div class="col-lg-4 col-md-6" style="text-align: center;">
        <div class="value-card">
          <div class="value-icon" style="background: linear-gradient(135deg, #5ba3b0, #326D78);">
            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="white" viewBox="0 0 24 24">
              <path d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5s-3 1.34-3 3 1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5s-3 1.34-3 3 1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V20h14v-3.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 2.07 1.97 3.45V20h6v-3.5c0-2.33-4.67-3.5-7-3.5z"/>
            </svg>
          </div>
          <h4 style="color: #2a2a2a; font-size: 1.3rem; font-weight: 600;">{{ getContent('about_value5_title', 'Teamwork') }}</h4>
          <p style="color: #6c757d; font-size: 0.95rem;">{{ getContent('about_value5_description', 'We thrive in collaboration, valuing the strength of collective effort.') }}</p>
        </div>
      </div>

      <!-- Employee Care -->
      <div class="col-lg-4 col-md-6" style="text-align: center;">
        <div class="value-card">
          <div class="value-icon" style="background: linear-gradient(135deg, #4a8a96, #5ba3b0);">
            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="white" viewBox="0 0 24 24">
              <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42
              4.42 3 7.5 3c1.74 0 3.41 1.01
              4.5 2.09C13.09 4.01 14.76 3 16.5
              3 19.58 3 22 5.42 22 8.5c0 3.78-3.4
              6.86-8.55 11.54L12 21.35z"/>
            </svg>
          </div>
          <h4 style="color: #2a2a2a; font-size: 1.3rem; font-weight: 600;">{{ getContent('about_value6_title', 'Employee Care') }}</h4>
          <p style="color: #6c757d; font-size: 0.95rem;">{{ getContent('about_value6_description', 'We prioritize wellbeing and inclusion within our firm.') }}</p>
        </div>
      </div>

      <!-- Community Engagement -->
      <div class="col-lg-4 col-md-6 mx-auto" style="text-align: center;">
        <div class="value-card">
          <div class="value-icon" style="background: linear-gradient(135deg, #326D78, #5ba3b0);">
            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="white" viewBox="0 0 24 24">
              <path d="M12.1 18.55l-.1.1-.11-.1C7.14
              14.24 4 11.39 4 8.5 4 6.5 5.5
              5 7.5 5c1.54 0 3.04 1.04
              3.57 2.36h1.87C13.46 6.04
              14.96 5 16.5 5 18.5 5 20
              6.5 20 8.5c0 2.89-3.14
              5.74-7.9 10.05z"/>
            </svg>
          </div>
          <h4 style="color: #2a2a2a; font-size: 1.3rem; font-weight: 600;">{{ getContent('about_value7_title', 'Community Engagement') }}</h4>
          <p style="color: #6c757d; font-size: 0.95rem;">{{ getContent('about_value7_description', 'We give back to society and act as responsible corporate citizens.') }}</p>
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

    /* Smooth Animations */
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

    @keyframes fadeInLeft {
        from {
            opacity: 0;
            transform: translateX(-30px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    @keyframes fadeInRight {
        from {
            opacity: 0;
            transform: translateX(30px);
        }
        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    @keyframes fadeInScale {
        from {
            opacity: 0;
            transform: translateY(-50%) scale(0.8);
        }
        to {
            opacity: 1;
            transform: translateY(-50%) scale(1);
        }
    }

    @keyframes scaleX {
        from {
            transform: scaleX(0);
        }
        to {
            transform: scaleX(1);
        }
    }

    @keyframes float1 {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-20px); }
    }

    @keyframes float2 {
        0%, 100% { transform: rotate(45deg) translateY(0px); }
        50% { transform: rotate(45deg) translateY(-15px); }
    }

    @keyframes float3 {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-10px); }
    }

    @keyframes rotate {
        from { transform: rotate(30deg); }
        to { transform: rotate(390deg); }
    }

    /* CTA button hover effect - Fixed selector to avoid affecting navigation */
    section a[href*="contact"]:hover {
        transform: translateY(-3px);
        box-shadow: 0 12px 40px rgba(50, 109, 120, 0.3) !important;
    }

    /* Hover effects for cards */
    .row .col-lg-6 > div:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 35px rgba(0,0,0,0.1);
    }

    /* Vision Mission hover effects */
    .row.g-0 .col-lg-6:hover {
        transform: translateY(-3px);
    }

    @media (max-width: 768px) {
        h1 {
            font-size: 3rem !important;
        }

        h2 {
            font-size: 2rem !important;
        }

        .col-lg-5 {
            margin-top: 3rem;
        }

        /* Hide circular quote on mobile and adjust hero */
        div[style*="position: absolute"][style*="right: 5%"] {
            display: none;
        }
    }
        .value-card {
      padding: 2rem;
      border-radius: 16px;
      transition: all 0.3s ease;
      cursor: pointer;
    }

    .value-card:hover {
      transform: translateY(-8px);
      box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
    }

    .value-icon {
      width: 100px;
      height: 100px;
      margin: 0 auto 1.5rem;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      transition: transform 0.3s ease;
    }

    .value-card:hover .value-icon {
      transform: scale(1.08);
    }
</style>

@endsection
