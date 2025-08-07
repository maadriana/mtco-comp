@extends('layouts.app')

@section('title', 'History | Mendoza Tugano & Co., CPAs')

@section('content')

<!-- Clean Hero Section -->
<div style="position: relative; margin-top: -1.5rem; background: #f8fafb; min-height: 70vh; display: flex; align-items: center; overflow: hidden;">

    <!-- Breadcrumb -->
<div style="position: absolute; top: 20px; left: 70px; z-index: 1; pointer-events: auto; background: rgba(255, 255, 255, 0.95); padding: 10px 20px; border-radius: 6px; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb mb-0" style="font-size: 0.9rem;">
            <li class="breadcrumb-item">
                <a href="{{ url('/') }}" style="color: #326D78; text-decoration: none; font-weight: 500; pointer-events: auto;">
                    <i class="fas fa-home me-1"></i>Home
                </a>
            </li>
            <li class="breadcrumb-item active" aria-current="page" style="color: #6c757d; font-weight: 500;">History</li>
        </ol>
    </nav>
</div>

    <!-- Geometric Elements -->
    <div style="position: absolute; top: 15%; right: 8%; width: 120px; height: 120px; background: rgba(50, 109, 120, 0.1); border-radius: 50%; z-index: 1; animation: float1 6s ease-in-out infinite;"></div>
    <div style="position: absolute; top: 60%; left: 12%; width: 80px; height: 80px; background: rgba(91, 163, 176, 0.15); transform: rotate(45deg); border-radius: 20px; z-index: 1; animation: float2 8s ease-in-out infinite;"></div>
    <div style="position: absolute; bottom: 20%; right: 20%; width: 60px; height: 60px; background: rgba(74, 138, 150, 0.2); border-radius: 50%; z-index: 1; animation: float3 7s ease-in-out infinite;"></div>
    <div style="position: absolute; top: 30%; left: 25%; width: 40px; height: 40px; background: rgba(50, 109, 120, 0.25); transform: rotate(30deg); border-radius: 8px; z-index: 1; animation: rotate 20s linear infinite;"></div>

    <!-- Hero Content -->
    <div class="container" style="position: relative; z-index: 2;">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-10">
                <div style="text-align: center; padding: 2rem 0;">
                    <h1 style="font-size: 3.7rem; font-weight: 600; color: #2a2a2a; line-height: 1.1; margin-bottom: 1.5rem; opacity: 0; animation: fadeInUp 1s ease-out 0.3s forwards;">
                        {!! getContent('history_hero_title', 'Our<br><span style="font-weight: 600; color: #326D78;">Journey</span>') !!}
                    </h1>
                    <p style="font-size: 1.4rem; color: #6c757d; line-height: 1.6; margin-bottom: 2rem; max-width: 600px; margin-left: auto; margin-right: auto; opacity: 0; animation: fadeInUp 1s ease-out 0.6s forwards;">
                        {{ getContent('history_hero_subtitle', 'From humble beginnings to global recognition - building a legacy of trust and excellence since 2002.') }}
                    </p>
                    <div style="display: flex; gap: 1rem; flex-wrap: wrap; justify-content: center; opacity: 0; animation: fadeInUp 1s ease-out 0.9s forwards;">
                        <div style="background: white; padding: 1rem 1.5rem; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.06); border-left: 4px solid #326D78; transition: all 0.3s ease;">
                            <div style="font-size: 1.8rem; font-weight: 700; color: #326D78; margin-bottom: 0.2rem;">{{ getContent('history_established_year', '2002') }}</div>
                            <div style="font-size: 0.9rem; color: #6c757d;">Founded</div>
                        </div>
                        <div style="background: white; padding: 1rem 1.5rem; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.06); border-left: 4px solid #5ba3b0; transition: all 0.3s ease;">
                            <div style="font-size: 1.8rem; font-weight: 700; color: #5ba3b0; margin-bottom: 0.2rem;">{{ getContent('history_mtc_year', '2023') }}</div>
                            <div style="font-size: 0.9rem; color: #6c757d;">MTC Established</div>
                        </div>
                        <div style="background: white; padding: 1rem 1.5rem; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.06); border-left: 4px solid #4a8a96; transition: all 0.3s ease;">
                            <div style="font-size: 1.8rem; font-weight: 700; color: #4a8a96; margin-bottom: 0.2rem;">{{ getContent('history_agn_year', '2024') }}</div>
                            <div style="font-size: 0.9rem; color: #6c757d;">AGN Member</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Circular Quote Element -->
        <div style="position: absolute; top: 50%; right: 5%; transform: translateY(-50%); opacity: 0; animation: fadeInScale 1s ease-out 1.2s forwards;">
            <div style="width: 250px; height: 250px; background: linear-gradient(135deg, #326D78, #5ba3b0); border-radius: 50%; position: relative; box-shadow: 0 20px 60px rgba(50, 109, 120, 0.2); display: flex; align-items: center; justify-content: center;">
                <div style="color: white; text-align: center;">
                    <div style="font-size: 1.6rem; font-weight: 700; margin-bottom: 0.5rem;">{{ getContent('history_circular_quote', '"Passion for Excellence"') }}</div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Timeline Section -->
<section style="padding: 6rem 0; background: white;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div style="text-align: center; margin-bottom: 4rem;">
                    <div style="display: inline-block; background: rgba(50, 109, 120, 0.1); color: #326D78; padding: 0.5rem 1rem; border-radius: 20px; font-size: 0.9rem; font-weight: 600; margin-bottom: 1.5rem; opacity: 0; animation: fadeInUp 1s ease-out 0.3s forwards;">
                        {{ getContent('history_timeline_badge', 'Our Journey') }}
                    </div>
                    <h2 style="font-size: 2.6rem; font-weight: 600; color: #2a2a2a; margin-bottom: 2rem; opacity: 0; animation: fadeInUp 1s ease-out 0.6s forwards;">
                        {!! getContent('history_timeline_title', 'Building a <span style="font-weight: 600; color: #326D78;">Legacy</span>') !!}
                    </h2>
                    <div style="width: 80px; height: 4px; background: linear-gradient(90deg, #326D78, #5ba3b0); border-radius: 2px; margin: 0 auto; opacity: 0; animation: scaleX 1s ease-out 0.9s forwards; transform-origin: center;"></div>
                </div>

                <!-- Timeline -->
                <div style="position: relative; max-width: 1000px; margin: 0 auto;">
                    <!-- Central Line -->
                    <div style="position: absolute; left: 50%; top: 0; bottom: 0; width: 4px; background: linear-gradient(180deg, #326D78, #5ba3b0); transform: translateX(-50%); border-radius: 2px; opacity: 0; animation: fadeInUp 1s ease-out 1.2s forwards;"></div>

                    <!-- 2002 - Foundation -->
                    <div style="position: relative; margin-bottom: 4rem; opacity: 0; animation: fadeInLeft 1s ease-out 1.5s forwards;">
                        <div style="display: flex; align-items: center;">
                            <div style="flex: 1; padding-right: 3rem; text-align: right;">
                                <div style="background: white; padding: 2rem; border-radius: 16px; box-shadow: 0 8px 25px rgba(0,0,0,0.1); border-left: 6px solid #326D78;">
                                    <div style="color: #326D78; font-size: 1.5rem; font-weight: 700; margin-bottom: 1rem;">{{ getContent('history_year_2002', '2002') }}</div>
                                    <h4 style="color: #2a2a2a; font-weight: 600; margin-bottom: 1rem;">{{ getContent('history_2002_title', 'The Foundation') }}</h4>
                                    <p style="color: #6c757d; line-height: 1.6; margin: 0;">
                                        {{ getContent('history_2002_description', 'Emmanuel Y. Mendoza founded Mendoza Querido & Co. (MQC), establishing a reputation for unwavering dedication, precision, and integrity in audit and accounting services.') }}
                                    </p>
                                </div>
                            </div>
                            <div style="width: 20px; height: 20px; background: #326D78; border-radius: 50%; border: 4px solid white; box-shadow: 0 0 0 4px #326D78; z-index: 10; position: relative;"></div>
                            <div style="flex: 1; padding-left: 3rem;"></div>
                        </div>
                    </div>

                    <!-- 2023 - MTC Establishment -->
                    <div style="position: relative; margin-bottom: 4rem; opacity: 0; animation: fadeInRight 1s ease-out 1.8s forwards;">
                        <div style="display: flex; align-items: center;">
                            <div style="flex: 1; padding-right: 3rem;"></div>
                            <div style="width: 20px; height: 20px; background: #5ba3b0; border-radius: 50%; border: 4px solid white; box-shadow: 0 0 0 4px #5ba3b0; z-index: 10; position: relative;"></div>
                            <div style="flex: 1; padding-left: 3rem;">
                                <div style="background: white; padding: 2rem; border-radius: 16px; box-shadow: 0 8px 25px rgba(0,0,0,0.1); border-right: 6px solid #5ba3b0;">
                                    <div style="color: #5ba3b0; font-size: 1.5rem; font-weight: 700; margin-bottom: 1rem;">{{ getContent('history_year_2023', 'December 2023') }}</div>
                                    <h4 style="color: #2a2a2a; font-weight: 600; margin-bottom: 1rem;">{{ getContent('history_2023_title', 'MTC is Born') }}</h4>
                                    <p style="color: #6c757d; line-height: 1.6; margin: 0;">
                                        {{ getContent('history_2023_description', 'Mendoza Tugano & Co., CPAs (MTC) was established, carrying forward the proud legacy of MQC. Representing not only continuity but also the elevation of core values and commitment to excellence.') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 2024 - AGN International -->
                    <div style="position: relative; margin-bottom: 4rem; opacity: 0; animation: fadeInLeft 1s ease-out 2.1s forwards;">
                        <div style="display: flex; align-items: center;">
                            <div style="flex: 1; padding-right: 3rem; text-align: right;">
                                <div style="background: white; padding: 2rem; border-radius: 16px; box-shadow: 0 8px 25px rgba(0,0,0,0.1); border-left: 6px solid #4a8a96;">
                                    <div style="color: #4a8a96; font-size: 1.5rem; font-weight: 700; margin-bottom: 1rem;">{{ getContent('history_year_2024', '2024') }}</div>
                                    <h4 style="color: #2a2a2a; font-weight: 600; margin-bottom: 1rem;">{{ getContent('history_2024_title', 'Global Recognition') }}</h4>
                                    <p style="color: #6c757d; line-height: 1.6; margin: 0;">
                                        {{ getContent('history_2024_description_start', 'MTC was admitted as a member of') }}
                                        <a href="{{ route('international') }}" style="color: #4a8a96; text-decoration: none; font-weight: 600; border-bottom: 2px solid transparent; transition: all 0.3s ease;" onmouseover="this.style.borderBottomColor='#4a8a96'; this.style.color='#326D78';" onmouseout="this.style.borderBottomColor='transparent'; this.style.color='#4a8a96';">AGN International</a>{{ getContent('history_2024_description_end', ', a worldwide association of independent accounting and advisory businesses serving clients globally for over 40 years.') }}
                                    </p>
                                </div>
                            </div>
                            <div style="width: 20px; height: 20px; background: #4a8a96; border-radius: 50%; border: 4px solid white; box-shadow: 0 0 0 4px #4a8a96; z-index: 10; position: relative;"></div>
                            <div style="flex: 1; padding-left: 3rem;"></div>
                        </div>
                    </div>

                    <!-- Present Day -->
                    <div style="position: relative; opacity: 0; animation: fadeInRight 1s ease-out 2.4s forwards;">
                        <div style="display: flex; align-items: center;">
                            <div style="flex: 1; padding-right: 3rem;"></div>
                            <div style="width: 20px; height: 20px; background: linear-gradient(135deg, #326D78, #5ba3b0); border-radius: 50%; border: 4px solid white; box-shadow: 0 0 0 4px #326D78; z-index: 10; position: relative;"></div>
                            <div style="flex: 1; padding-left: 3rem;">
                                <div style="background: linear-gradient(135deg, #326D78, #5ba3b0); color: white; padding: 2rem; border-radius: 16px; box-shadow: 0 8px 25px rgba(50, 109, 120, 0.3);">
                                    <div style="color: rgba(255,255,255,0.9); font-size: 1.5rem; font-weight: 700; margin-bottom: 1rem;">{{ getContent('history_year_present', 'Present Day') }}</div>
                                    <h4 style="color: white; font-weight: 600; margin-bottom: 1rem;">{{ getContent('history_present_title', 'Continuing Excellence') }}</h4>
                                    <p style="color: rgba(255,255,255,0.9); line-height: 1.6; margin: 0;">
                                        {{ getContent('history_present_description', 'Today, MTC stands at the crossroads of tradition and innovation, leveraging advanced tools while staying true to timeless values that our clients have always relied on.') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Legacy Story Section -->
<section style="background: #f8fafb; padding: 6rem 0;">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <div style="position: sticky; top: 2rem;">
                    <div style="display: inline-block; background: rgba(50, 109, 120, 0.1); color: #326D78; padding: 0.5rem 1rem; border-radius: 20px; font-size: 0.9rem; font-weight: 600; margin-bottom: 1.5rem; opacity: 0; animation: fadeInLeft 1s ease-out 0.3s forwards;">
                        {{ getContent('history_legacy_badge', 'Our Legacy') }}
                    </div>
                    <h2 style="font-size: 2.4rem; font-weight: 600; color: #2a2a2a; margin-bottom: 2rem; opacity: 0; animation: fadeInLeft 1s ease-out 0.6s forwards;">
                        {!! getContent('history_legacy_title', 'Building on <span style="font-weight: 600; color: #326D78;">Strong Foundations</span>') !!}
                    </h2>
                    <div style="width: 60px; height: 4px; background: linear-gradient(90deg, #326D78, #5ba3b0); border-radius: 2px; margin-bottom: 2rem; opacity: 0; animation: scaleX 1s ease-out 0.9s forwards; transform-origin: left;"></div>

                    <p style="font-size: 1.1rem; color: #6c757d; line-height: 1.7; margin-bottom: 1.5rem; opacity: 0; animation: fadeInLeft 1s ease-out 1.2s forwards;">
                        {{ getContent('history_legacy_paragraph1', 'Mendoza Tugano & Co., CPAs (MTC) was established in December 2023, carrying forward the proud legacy of Mendoza Querido & Co. (MQC). Founded in 2002 by Emmanuel Y. Mendoza, a respected audit and accounting professional, MQC built a reputation for unwavering dedication, precision, and integrity—principles that continue to define MTC today.') }}
                    </p>

                    <p style="font-size: 1.1rem; color: #6c757d; line-height: 1.7; margin-bottom: 1.5rem; opacity: 0; animation: fadeInLeft 1s ease-out 1.5s forwards;">
                        {{ getContent('history_legacy_paragraph2', 'Building on this strong foundation, MTC represents not only continuity but also the elevation of these core values. We are driven by the same commitment to excellence and trusted client relationships that have distinguished our firm\'s heritage for nearly two decades.') }}
                    </p>

                    <p style="font-size: 1.1rem; color: #6c757d; line-height: 1.7; opacity: 0; animation: fadeInLeft 1s ease-out 1.8s forwards;">
                        {{ getContent('history_legacy_paragraph3', 'With a team of highly experienced professionals who share a passion for delivering precise, ethical, and personalized financial solutions, MTC stands at the crossroads of tradition and innovation. We leverage advanced tools and methodologies while staying true to the timeless values that our clients have always relied on.') }}
                    </p>
                </div>
            </div>

            <div class="col-lg-6">
                <div style="display: flex; flex-direction: column; gap: 2rem;">
                    <!-- AGN International Card -->
                    <div style="background: white; padding: 2.5rem; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.08); border-left: 6px solid #326D78; opacity: 0; animation: fadeInRight 1s ease-out 0.6s forwards; transition: all 0.3s ease;">
                        <div style="display: flex; align-items: center; margin-bottom: 1.5rem;">
                            <div style=" background: linear-gradient(135deg, #326D78, #5ba3b0); border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-right: 1rem;">
                                <i class="fas fa-globe" style="color: white; font-size: 1.5rem;"></i>
                            </div>
                            <h4 style="color: #326D78; font-weight: 600; margin: 0;">{{ getContent('history_agn_card_title', 'AGN International Member') }}</h4>
                        </div>
                        <p style="color: #6c757d; line-height: 1.6; margin: 0;">
                            {{ getContent('history_agn_card_description', 'In 2024, MTC was admitted as a member of AGN International, a worldwide association of separate and independent accounting and advisory businesses that has been providing services across the globe for over 40 years.') }}
                        </p>
                    </div>

                    <!-- Professional Memberships Card -->
                    <div style="background: white; padding: 2.5rem; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.08); border-left: 6px solid #5ba3b0; opacity: 0; animation: fadeInRight 1s ease-out 0.9s forwards; transition: all 0.3s ease;">
                        <div style="display: flex; align-items: center; margin-bottom: 1.5rem;">
                            <div style=" background: linear-gradient(135deg, #5ba3b0, #4a8a96); border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-right: 1rem;">
                                <i class="fas fa-certificate" style="color: white; font-size: 1.5rem;"></i>
                            </div>
                            <h4 style="color: #5ba3b0; font-weight: 600; margin: 0;">{{ getContent('history_memberships_card_title', 'Professional Memberships') }}</h4>
                        </div>
                        <p style="color: #6c757d; line-height: 1.6; margin: 0;">
                            {{ getContent('history_memberships_card_description', 'MTC and its partners are active members of PICPA, TMAP, and ACPAPP. MTC is also duly accredited by the Board of Accountancy, Bureau of Internal Revenue, and the Insurance Commission.') }}
                        </p>
                    </div>

                    <!-- Passion for Excellence Card -->
                    <div style="background: white; padding: 2.5rem; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.08); border-left: 6px solid #4a8a96; opacity: 0; animation: fadeInRight 1s ease-out 1.2s forwards; transition: all 0.3s ease;">
                        <div style="display: flex; align-items: center; margin-bottom: 1.5rem;">
                            <div style=" background: linear-gradient(135deg, #4a8a96, #326D78); border-radius: 12px; display: flex; align-items: center; justify-content: center; margin-right: 1rem;">
                                <i class="fas fa-heart" style="color: white; font-size: 1.5rem;"></i>
                            </div>
                            <h4 style="color: #4a8a96; font-weight: 600; margin: 0;">{{ getContent('history_passion_card_title', 'Our Promise') }}</h4>
                        </div>
                        <p style="color: #6c757d; line-height: 1.6; margin: 0;">
                            {{ getContent('history_passion_card_description', 'At MTC, "Passion for Excellence" is more than a motto—it is our unwavering promise to every client and partner. As we embrace the opportunities of the digital age, we remain firmly grounded in the values that define us.') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Future Vision Section -->
<section style="padding: 6rem 0; background: white;">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div style="text-align: center; margin-bottom: 3rem;">
                    <div style="display: inline-block; background: rgba(50, 109, 120, 0.1); color: #326D78; padding: 0.5rem 1rem; border-radius: 20px; font-size: 0.9rem; font-weight: 600; margin-bottom: 1.5rem; opacity: 0; animation: fadeInUp 1s ease-out 0.3s forwards;">
                        {{ getContent('history_future_badge', 'Looking Forward') }}
                    </div>
                    <h2 style="font-size: 2.6rem; font-weight: 600; color: #2a2a2a; margin-bottom: 2rem; opacity: 0; animation: fadeInUp 1s ease-out 0.6s forwards;">
                        {!! getContent('history_future_title', 'Building Tomorrow\'s <span style="font-weight: 600; color: #326D78;">Success</span>') !!}
                    </h2>
                </div>

                <div style="background: white; padding: 3rem; border-radius: 25px; border-left: 8px solid #326D78; box-shadow: 0 15px 40px rgba(0,0,0,0.08); opacity: 0; animation: fadeInUp 1s ease-out 0.9s forwards;">
                    <div style="display: flex; align-items: center; margin-bottom: 2rem;">
                        <i class="fas fa-rocket" style="color: #326D78; font-size: 2.5rem; margin-right: 1.5rem;"></i>
                        <h3 style="color: #326D78; font-weight: 600; margin: 0; font-size: 1.8rem;">{{ getContent('history_future_section_title', 'Your Trusted Partner') }}</h3>
                    </div>

                    <p style="font-size: 1.2rem; color: #6c757d; line-height: 1.7; margin-bottom: 1.5rem;">
                        {{ getContent('history_future_paragraph1', 'With MTC, you gain a trusted partner invested in your long-term progress and prosperity. Together, we look forward to building a future where your aspirations are realized, your potential is maximized, and our legacy of excellence continues to flourish for generations to come.') }}
                    </p>

                    <p style="font-size: 1.1rem; color: #6c757d; line-height: 1.7; margin: 0;">
                        {{ getContent('history_future_paragraph2', 'At MTC, we embrace the opportunities of the digital age with the same unwavering commitment to client success. With Mendoza Tugano & Co., CPAs, we look forward to creating a future where our clients\' financial aspirations are not only realized but exceeded, ensuring that our legacy of excellence continues to thrive for generations to come.') }}
                    </p>
                </div>

                <!-- CTA Section -->
                <div style="text-align: center; margin-top: 3rem; opacity: 0; animation: fadeInUp 1s ease-out 1.2s forwards;">
                    <a href="{{ url('/#contact') }}" style="display: inline-block; background: linear-gradient(135deg, #326D78, #5ba3b0); color: white; padding: 1.2rem 3rem; border-radius: 50px; text-decoration: none; font-weight: 600; font-size: 1.1rem; transition: all 0.3s ease; box-shadow: 0 8px 25px rgba(50, 109, 120, 0.3);">
                        {{ getContent('history_cta_text', 'Partner With Us Today') }}
                        <i class="fas fa-arrow-right ms-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Vision & Mission Section -->
<section style="padding: 6rem 0; background: white;">
    <div class="container">
        <!-- Section Header -->
        <div class="row">
            <div class="col-lg-12">
                <div style="text-align: center; margin-bottom: 5rem;">
                    <div style="display: inline-flex; align-items: center; background: rgba(50, 109, 120, 0.1); color: #326D78; padding: 0.8rem 2rem; border-radius: 30px; font-size: 0.9rem; font-weight: 600; margin-bottom: 2rem; opacity: 0; animation: fadeInUp 1s ease-out 0.3s forwards;">
                        <i class="fas fa-compass" style="margin-right: 0.8rem;"></i>
                        {{ getContent('history_vision_mission_badge', 'Vision & Mission') }}
                    </div>
                    <h2 style="font-size: 2.8rem; font-weight: 700; color: #2a2a2a; margin-bottom: 2rem; opacity: 0; animation: fadeInUp 1s ease-out 0.6s forwards;">
                        {!! getContent('history_vision_mission_title', 'Our <span style="font-weight: 700; color: #326D78;">Direction</span>') !!}
                    </h2>
                    <div style="width: 100px; height: 4px; background: linear-gradient(90deg, #326D78, #5ba3b0); border-radius: 2px; margin: 0 auto; opacity: 0; animation: scaleX 1s ease-out 0.9s forwards; transform-origin: center;"></div>
                </div>
            </div>
        </div>

        <!-- Vision & Mission Side by Side -->
        <div class="row g-5">
            <!-- Vision Content -->
            <div class="col-lg-6">
                <div style="background: white; padding: 3rem; border-radius: 30px; box-shadow: 0 20px 50px rgba(0,0,0,0.1); position: relative; border-top: 6px solid #326D78; opacity: 0; animation: fadeInLeft 1s ease-out 1.2s forwards; height: 100%;">
                    <!-- Corner Badge -->
                    <div style="position: absolute; top: -15px; left: 2rem; background: linear-gradient(135deg, #326D78, #4a8a96); padding: 0.5rem 1.5rem; border-radius: 20px; color: white; font-size: 0.8rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.5px;">
                        {{ getContent('history_vision_badge', 'Vision Statement') }}
                    </div>

                    <div style="margin-top: 1rem;">
                        <div style="display: flex; align-items: center; margin-bottom: 2rem;">
                            <i class="fas fa-eye" style="color: #326D78; font-size: 3rem; margin-right: 1.5rem;"></i>
                            <div>
                                <h3 style="color: #326D78; font-weight: 700; margin: 0; font-size: 2rem;">Our Vision</h3>
                                <div style="width: 60px; height: 3px; background: #326D78; border-radius: 2px; margin-top: 0.5rem;"></div>
                            </div>
                        </div>

                        <p style="font-size: 1.2rem; color: #6c757d; line-height: 1.8; margin: 0; text-align: justify; font-weight: 400;">
                            {{ getContent('history_vision_text', 'To stand as the forefront in audit and accounting services, renowned for our unwavering commitment to "Passion for Excellence". We envisage a future where our commitment to trust, precision, and innovation not only shapes today\'s financial landscape but ensures our relevance and resiliency for generations to come.') }}
                        </p>
                    </div>
                </div>
            </div>

            <!-- Mission Content -->
            <div class="col-lg-6">
                <div style="background: linear-gradient(135deg, white, #f8fafb); padding: 3rem; border-radius: 30px; box-shadow: 0 20px 50px rgba(91, 163, 176, 0.15); position: relative; border-top: 6px solid #5ba3b0; opacity: 0; animation: fadeInRight 1s ease-out 1.2s forwards; height: 100%;">
                    <!-- Corner Badge -->
                    <div style="position: absolute; top: -15px; right: 2rem; background: linear-gradient(135deg, #5ba3b0, #4a8a96); padding: 0.5rem 1.5rem; border-radius: 20px; color: white; font-size: 0.8rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.5px;">
                        {{ getContent('history_mission_badge', 'Mission Statement') }}
                    </div>

                    <div style="margin-top: 1rem;">
                        <div style="display: flex; align-items: center; margin-bottom: 2rem;">
                            <i class="fas fa-bullseye" style="color: #5ba3b0; font-size: 3rem; margin-right: 1.5rem;"></i>
                            <div>
                                <h3 style="color: #5ba3b0; font-weight: 700; margin: 0; font-size: 2rem;">Our Mission</h3>
                                <div style="width: 60px; height: 3px; background: #5ba3b0; border-radius: 2px; margin-top: 0.5rem;"></div>
                            </div>
                        </div>

                        <p style="font-size: 1.2rem; color: #6c757d; line-height: 1.8; margin: 0; text-align: justify; font-weight: 400;">
                            {{ getContent('history_mission_text', 'At Mendoza Tugano & Co., CPAs, our mission is to deliver unmatched audit and accounting services, grounded in our unwavering "Passion for Excellence". We aim to redefine industry standards by consistently providing precision and trust. Through personalized, client-centric solutions and a firm commitment to ethical practices, we empower our clients to navigate the ever-evolving business landscape with confidence. Our steadfast dedication to "Passion for Excellence" propels us to remain at the forefront of our field, ensuring our enduring relevance as we contribute positively to our clients and communities, regardless of the changes that may come our way.') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Values Section -->
<section style="background: linear-gradient(135deg, #f8fafb 0%, #e8f4f6 100%); padding: 6rem 0;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div style="text-align: center; margin-bottom: 4rem;">
                    <div style="display: inline-block; background: rgba(50, 109, 120, 0.1); color: #326D78; padding: 0.5rem 1rem; border-radius: 20px; font-size: 0.9rem; font-weight: 600; margin-bottom: 1.5rem; opacity: 0; animation: fadeInUp 1s ease-out 0.3s forwards;">
                        {{ getContent('history_values_badge', 'Our Values') }}
                    </div>
                    <h2 style="font-size: 2.6rem; font-weight: 600; color: #2a2a2a; margin-bottom: 2rem; opacity: 0; animation: fadeInUp 1s ease-out 0.6s forwards;">
                        {!! getContent('history_values_title', 'What We <span style="font-weight: 600; color: #326D78;">Stand For</span>') !!}
                    </h2>
                    <div style="width: 80px; height: 4px; background: linear-gradient(90deg, #326D78, #5ba3b0); border-radius: 2px; margin: 0 auto; opacity: 0; animation: scaleX 1s ease-out 0.9s forwards; transform-origin: center;"></div>
                </div>

                <!-- Values Grid -->
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 2rem; max-width: 1200px; margin: 0 auto;">

                    <!-- Excellence -->
                    <div style="background: white; padding: 2rem; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.08); border-left: 6px solid #326D78; opacity: 0; animation: fadeInUp 1s ease-out 1.2s forwards; transition: all 0.3s ease;">
                        <div style="display: flex; align-items: center; margin-bottom: 1.5rem;">
                            <i class="fas fa-medal" style="color: #326D78; font-size: 2.5rem; margin-right: 1.5rem;"></i>
                            <h4 style="color: #326D78; font-weight: 600; margin: 0; font-size: 1.4rem;">{{ getContent('history_value_excellence_title', 'Excellence') }}</h4>
                        </div>
                        <p style="color: #6c757d; line-height: 1.6; margin: 0;">
                            {{ getContent('history_value_excellence_desc', 'We are committed to achieving the highest standards of excellence in all our services and operations, reflecting our dedication to precision and professionalism.') }}
                        </p>
                    </div>

                    <!-- Integrity -->
                    <div style="background: white; padding: 2rem; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.08); border-left: 6px solid #5ba3b0; opacity: 0; animation: fadeInUp 1s ease-out 1.4s forwards; transition: all 0.3s ease;">
                        <div style="display: flex; align-items: center; margin-bottom: 1.5rem;">
                            <i class="fas fa-shield-alt" style="color: #5ba3b0; font-size: 2.5rem; margin-right: 1.5rem;"></i>
                            <h4 style="color: #5ba3b0; font-weight: 600; margin: 0; font-size: 1.4rem;">{{ getContent('history_value_integrity_title', 'Integrity') }}</h4>
                        </div>
                        <p style="color: #6c757d; line-height: 1.6; margin: 0;">
                            {{ getContent('history_value_integrity_desc', 'Integrity is the cornerstone of our practice. We uphold the highest ethical standards, ensuring transparency, honesty, and accountability in all our interactions.') }}
                        </p>
                    </div>

                    <!-- Innovation -->
                    <div style="background: white; padding: 2rem; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.08); border-left: 6px solid #4a8a96; opacity: 0; animation: fadeInUp 1s ease-out 1.6s forwards; transition: all 0.3s ease;">
                        <div style="display: flex; align-items: center; margin-bottom: 1.5rem;">
                            <i class="fas fa-lightbulb" style="color: #4a8a96; font-size: 2.5rem; margin-right: 1.5rem;"></i>
                            <h4 style="color: #4a8a96; font-weight: 600; margin: 0; font-size: 1.4rem;">{{ getContent('history_value_innovation_title', 'Innovation') }}</h4>
                        </div>
                        <p style="color: #6c757d; line-height: 1.6; margin: 0;">
                            {{ getContent('history_value_innovation_desc', 'We embrace innovation and continuous improvement, staying at the forefront of industry advancements to provide cutting-edge audit and accounting services.') }}
                        </p>
                    </div>

                    <!-- Professional Development -->
                    <div style="background: white; padding: 2rem; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.08); border-left: 6px solid #58a5b6; opacity: 0; animation: fadeInUp 1s ease-out 1.8s forwards; transition: all 0.3s ease;">
                        <div style="display: flex; align-items: center; margin-bottom: 1.5rem;">
                            <i class="fas fa-graduation-cap" style="color: #58a5b6; font-size: 2.5rem; margin-right: 1.5rem;"></i>
                            <h4 style="color: #58a5b6; font-weight: 600; margin: 0; font-size: 1.4rem;">{{ getContent('history_value_development_title', 'Professional Development') }}</h4>
                        </div>
                        <p style="color: #6c757d; line-height: 1.6; margin: 0;">
                            {{ getContent('history_value_development_desc', 'We invest in the growth and development of our team, fostering a culture of continuous learning and expertise.') }}
                        </p>
                    </div>

                    <!-- Teamwork -->
                    <div style="background: white; padding: 2rem; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.08); border-left: 6px solid #6bb6c7; opacity: 0; animation: fadeInUp 1s ease-out 2.0s forwards; transition: all 0.3s ease;">
                        <div style="display: flex; align-items: center; margin-bottom: 1.5rem;">
                            <i class="fas fa-users" style="color: #6bb6c7; font-size: 2.5rem; margin-right: 1.5rem;"></i>
                            <h4 style="color: #6bb6c7; font-weight: 600; margin: 0; font-size: 1.4rem;">{{ getContent('history_value_teamwork_title', 'Teamwork') }}</h4>
                        </div>
                        <p style="color: #6c757d; line-height: 1.6; margin: 0;">
                            {{ getContent('history_value_teamwork_desc', 'We believe in the power of collaboration and teamwork. We recognize that our collective efforts are greater than individual contributions, and we actively foster a collaborative spirit among our team members to achieve our shared goals.') }}
                        </p>
                    </div>

                    <!-- Care for Employees -->
                    <div style="background: white; padding: 2rem; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.08); border-left: 6px solid #7cc3d3; opacity: 0; animation: fadeInUp 1s ease-out 2.2s forwards; transition: all 0.3s ease;">
                        <div style="display: flex; align-items: center; margin-bottom: 1.5rem;">
                            <i class="fas fa-heart" style="color: #7cc3d3; font-size: 2.5rem; margin-right: 1.5rem;"></i>
                            <h4 style="color: #7cc3d3; font-weight: 600; margin: 0; font-size: 1.4rem;">{{ getContent('history_value_care_title', 'Care for Employees') }}</h4>
                        </div>
                        <p style="color: #6c757d; line-height: 1.6; margin: 0;">
                            {{ getContent('history_value_care_desc', 'We value the well-being of our employees and create a supportive, inclusive, and nurturing work environment that promotes their physical and emotional health, growth, and job satisfaction.') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<style>
    /* Breadcrumb styling */
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

    /* Hover Effects */

    /* CTA button hover effect */
    section a[href*="contact"]:hover {
        transform: translateY(-3px);
        box-shadow: 0 12px 40px rgba(50, 109, 120, 0.4) !important;
    }

    /* Value cards hover effects */
    section[style*="background: linear-gradient(135deg, #f8fafb 0%, #e8f4f6 100%)"] div[style*="background: white"]:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 35px rgba(0,0,0,0.15);
    }

    /* Vision and Mission hover effects */
    section[style*="padding: 6rem 0; background: white"] .col-lg-6:hover > div > div:last-child {
        transform: translateY(-3px);
        box-shadow: 0 20px 50px rgba(50, 109, 120, 0.15);
    }

    /* About section cards hover */
    section[style*="background: linear-gradient(135deg, #f8fafb 0%, #e8f4f6 100%)"]:first-of-type div[style*="background: white"]:hover {
        transform: translateY(-3px);
        box-shadow: 0 15px 35px rgba(0,0,0,0.15);
    }

    /* Legacy cards hover */
    .col-lg-6 > div > div:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 35px rgba(0,0,0,0.15);
    }

    /* Timeline hover effects */
    .container > .row > .col-lg-12 > div:last-child > div:hover .col-lg-6 > div {
        transform: translateY(-3px);
    }

    /* Mobile Responsiveness */
    @media (max-width: 768px) {
        h1 {
            font-size: 3rem !important;
        }

        h2 {
            font-size: 2rem !important;
        }

        .col-lg-6 {
            margin-top: 2rem;
        }

        /* Hide circular quote on mobile */
        div[style*="position: absolute"][style*="right: 5%"] {
            display: none;
        }

        /* Mobile timeline adjustments */
        div[style*="position: absolute"][style*="left: 50%"] {
            left: 20px !important;
            transform: none !important;
        }

        .container > .row > .col-lg-12 > div:last-child > div {
            margin-left: 40px;
        }

        .container > .row > .col-lg-12 > div:last-child > div > div {
            flex-direction: column !important;
        }

        .container > .row > .col-lg-12 > div:last-child > div > div > div:first-child,
        .container > .row > .col-lg-12 > div:last-child > div > div > div:last-child {
            flex: none !important;
            padding: 0 !important;
            margin-bottom: 1rem;
        }

        .container > .row > .col-lg-12 > div:last-child > div > div > div:nth-child(2) {
            margin: 1rem 0;
        }

        /* Mobile breadcrumb fix */
        div[style*="position: absolute"][style*="top: 20px"][style*="left: 70px"] {
            top: 10px !important;
            left: 20px !important;
        }

        /* Mobile grid adjustments */
        section[style*="background: linear-gradient(135deg, #f8fafb 0%, #e8f4f6 100%)"] div[style*="display: grid"] {
            grid-template-columns: 1fr !important;
        }

        section div[style*="display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr))"] {
            grid-template-columns: 1fr !important;
        }

        section div[style*="grid-column: 1 / -1"] {
            grid-column: 1 !important;
        }
    }

    @media (max-width: 576px) {
        section h2[style*="font-size: 2.6rem"] {
            font-size: 2rem !important;
        }

        section div[style*="padding: 2.5rem"] {
            padding: 1.5rem !important;
        }

        section div[style*="padding: 2rem"] {
            padding: 1.5rem !important;
        }

        /* Adjust icon sizes on mobile */
        i[style*="font-size: 2.5rem"] {
            font-size: 2rem !important;
        }
    }
</style>

@endsection
