@extends('layouts.app')

@section('title', 'About | Mendoza Tugano & Co., CPAs')

@section('content')

<!-- Clean Hero Section -->
<div style="position: relative; margin-top: -1.5rem; background: #f8fafb; min-height: 70vh; display: flex; align-items: center; overflow: hidden;">

    <!-- Breadcrumb - Keep original -->
    <div style="position: absolute; top: 20px; left: 70px; background: rgba(255, 255, 255, 0.95); padding: 10px 20px; border-radius: 6px; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0" style="font-size: 0.9rem;">
                <li class="breadcrumb-item">
                    <a href="{{ url('/') }}" style="color: #326D78; text-decoration: none; font-weight: 500;">
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
                    <h1 style="font-size: 4.5rem; font-weight: 300; color: #2a2a2a; line-height: 1.1; margin-bottom: 1.5rem; opacity: 0; animation: fadeInUp 1s ease-out 0.3s forwards;">
                        Preserving<br>
                        <span style="font-weight: 700; color: #326D78;">Excellence</span>
                    </h1>
                    <p style="font-size: 1.4rem; color: #6c757d; line-height: 1.6; margin-bottom: 2rem; max-width: 600px; margin-left: auto; margin-right: auto; opacity: 0; animation: fadeInUp 1s ease-out 0.6s forwards;">
                        A legacy of trust, precision, and unwavering dedication to client success since our founding.
                    </p>
                    <div style="display: flex; gap: 1rem; flex-wrap: wrap; justify-content: center; opacity: 0; animation: fadeInUp 1s ease-out 0.9s forwards;">
                        <div style="background: white; padding: 1rem 1.5rem; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.06); border-left: 4px solid #326D78; transition: all 0.3s ease;">
                            <div style="font-size: 1.8rem; font-weight: 700; color: #326D78; margin-bottom: 0.2rem;">20+</div>
                            <div style="font-size: 0.9rem; color: #6c757d;">Years Legacy</div>
                        </div>
                        <div style="background: white; padding: 1rem 1.5rem; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.06); border-left: 4px solid #5ba3b0; transition: all 0.3s ease;">
                            <div style="font-size: 1.8rem; font-weight: 700; color: #5ba3b0; margin-bottom: 0.2rem;">100+</div>
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
                    <div style="font-size: 2rem; font-weight: 700; margin-bottom: 0.5rem;">"Passion</div>
                    <div style="font-size: 1rem; opacity: 0.9;">for</div>
                    <div style="font-size: 2rem; font-weight: 700; margin-top: 0.5rem;">Excellence"</div>
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
                        Our Foundation
                    </div>
                    <h2 style="font-size: 3rem; font-weight: 300; color: #2a2a2a; margin-bottom: 2rem; opacity: 0; animation: fadeInLeft 1s ease-out 0.6s forwards;">
                        Built on <span style="font-weight: 700; color: #326D78;">Legacy</span>
                    </h2>
                    <div style="width: 60px; height: 4px; background: linear-gradient(90deg, #326D78, #5ba3b0); border-radius: 2px; margin-bottom: 2rem; opacity: 0; animation: scaleX 1s ease-out 0.9s forwards; transform-origin: left;"></div>
                    <p style="font-size: 1.1rem; color: #6c757d; line-height: 1.7; margin-bottom: 2rem; opacity: 0; animation: fadeInLeft 1s ease-out 1.2s forwards;">
                        Emmanuel Y. Mendoza redefined the audit and accounting landscape, founding an institution built on unwavering dedication, precision, and integrity.
                    </p>
                    <p style="font-size: 1.1rem; color: #6c757d; line-height: 1.7; opacity: 0; animation: fadeInLeft 1s ease-out 1.5s forwards;">
                        Today, Mendoza Tugano & Co., CPAs continues this legacy, representing not just continuity but an elevation of the principles that have earned client trust for decades.
                    </p>
                </div>
            </div>
            <div class="col-lg-6">
                <div style="display: flex; flex-direction: column; gap: 1.5rem;">
                    <!-- Excellence Card -->
                    <div style="background: linear-gradient(135deg, #f8fafb 0%, #e9ecef 100%); padding: 2rem; border-radius: 16px; border-left: 6px solid #326D78; opacity: 0; animation: fadeInRight 1s ease-out 0.6s forwards; transition: all 0.3s ease;">
                        <h4 style="color: #326D78; font-weight: 600; margin-bottom: 1rem;">Continuous Excellence</h4>
                        <p style="color: #6c757d; line-height: 1.6; margin: 0;">
                            Our commitment to delivering precise, ethical, and personalized financial solutions mirrors the trust and reliability clients expect from our lineage.
                        </p>
                    </div>

                    <!-- Innovation Card -->
                    <div style="background: linear-gradient(135deg, #f8fafb 0%, #e9ecef 100%); padding: 2rem; border-radius: 16px; border-left: 6px solid #326D78; opacity: 0; animation: fadeInRight 1s ease-out 0.6s forwards; transition: all 0.3s ease;">
                        <h4 style="color: #326D78; font-weight: 600; margin-bottom: 1rem;">Continuous Excellence</h4>
                        <p style="color: #6c757d; line-height: 1.6; margin: 0;">
                            As we embrace the opportunities of the digital age, we do so with the same unwavering commitment to client success that has defined our heritage.
                        </p>
                    </div>

                    <!-- Promise Card -->
                    <div style="background: linear-gradient(135deg, #f8fafb 0%, #e9ecef 100%); padding: 2rem; border-radius: 16px; border-left: 6px solid #326D78; opacity: 0; animation: fadeInRight 1s ease-out 0.6s forwards; transition: all 0.3s ease;">
                        <h4 style="color: #326D78; font-weight: 600; margin-bottom: 1rem;">Continuous Excellence</h4>
                        <p style="color: #6c757d; line-height: 1.6; margin: 0;">
                            "Passion for Excellence" isn't merely our motto — it's a pledge rooted in a heritage of trust and dedication to your success.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Vision & Mission - Split Design -->
<section style="background: #f8fafb; padding: 6rem 0;">
    <div class="container">
        <div style="text-align: center; margin-bottom: 4rem;">
            <div style="display: inline-block; background: rgba(50, 109, 120, 0.1); color: #326D78; padding: 0.5rem 1rem; border-radius: 20px; font-size: 0.9rem; font-weight: 600; margin-bottom: 1rem; opacity: 0; animation: fadeInUp 1s ease-out 0.3s forwards;">
                Our Direction
            </div>
            <h2 style="font-size: 3rem; font-weight: 300; color: #2a2a2a; opacity: 0; animation: fadeInUp 1s ease-out 0.6s forwards;">
                Vision & <span style="font-weight: 700; color: #326D78;">Mission</span>
            </h2>
        </div>

        <div class="row g-0" style="border-radius: 20px; overflow: hidden; box-shadow: 0 20px 60px rgba(0,0,0,0.1); opacity: 0; animation: fadeInUp 1s ease-out 0.9s forwards;">
            <!-- Vision -->
            <div class="col-lg-6" style="background: white; padding: 4rem 3rem; position: relative; transition: all 0.3s ease;">
                <div style="position: absolute; top: 0; left: 0; width: 100%; height: 6px; background: linear-gradient(90deg, #326D78, #4a8a96);"></div>
                <div style="width: 80px; height: 80px; background: rgba(50, 109, 120, 0.1); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-bottom: 2rem; transition: all 0.3s ease;">
                    <i class="fas fa-eye" style="color: #326D78; font-size: 2rem;"></i>
                </div>
                <h3 style="color: #2a2a2a; font-size: 1.8rem; font-weight: 600; margin-bottom: 1.5rem;">Our Vision</h3>
                <p style="color: #6c757d; line-height: 1.7; font-size: 1.1rem; margin: 0;">
                    To lead the audit and accounting industry through our unwavering "Passion for Excellence", becoming a trusted standard for ethical innovation and generational impact.
                </p>
            </div>

            <!-- Mission -->
            <div class="col-lg-6" style="background: #326D78; padding: 4rem 3rem; color: white; position: relative; transition: all 0.3s ease;">
                <div style="position: absolute; top: 0; left: 0; width: 100%; height: 6px; background: linear-gradient(90deg, #5ba3b0, #4a8a96);"></div>
                <div style="width: 80px; height: 80px; background: rgba(255, 255, 255, 0.15); border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-bottom: 2rem; transition: all 0.3s ease;">
                    <i class="fas fa-bullseye" style="color: white; font-size: 2rem;"></i>
                </div>
                <h3 style="color: white; font-size: 1.8rem; font-weight: 600; margin-bottom: 1.5rem;">Our Mission</h3>
                <p style="color: rgba(255,255,255,0.9); line-height: 1.7; font-size: 1.1rem; margin: 0;">
                    To deliver outstanding, ethical, and client-focused financial services that empower businesses to grow confidently in a dynamic world — anchored in our legacy of trust and excellence.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Core Values - Minimal Grid -->
<section style="padding: 6rem 0; background: white;">
    <div class="container">
        <div style="text-align: center; margin-bottom: 4rem;">
            <div style="display: inline-block; background: rgba(50, 109, 120, 0.1); color: #326D78; padding: 0.5rem 1rem; border-radius: 20px; font-size: 0.9rem; font-weight: 600; margin-bottom: 1rem; opacity: 0; animation: fadeInUp 1s ease-out 0.3s forwards;">
                What Drives Us
            </div>
            <h2 style="font-size: 3rem; font-weight: 300; color: #2a2a2a; margin-bottom: 1rem; opacity: 0; animation: fadeInUp 1s ease-out 0.6s forwards;">
                Core <span style="font-weight: 700; color: #326D78;">Values</span>
            </h2>
            <p style="color: #6c757d; font-size: 1.2rem; max-width: 600px; margin: 0 auto; opacity: 0; animation: fadeInUp 1s ease-out 0.9s forwards;">
                The principles that guide every decision and define our character
            </p>
        </div>

        <div class="row g-4">
            <!-- Excellence -->
            <div class="col-lg-4 col-md-6">
                <div style="text-align: center; padding: 2rem; border-radius: 16px; transition: all 0.3s ease; cursor: pointer; opacity: 0; animation: fadeInUp 1s ease-out 1.2s forwards;" onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 20px 40px rgba(0,0,0,0.1)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'">
                    <div style="width: 100px; height: 100px; background: linear-gradient(135deg, #326D78, #5ba3b0); border-radius: 50%; margin: 0 auto 1.5rem; display: flex; align-items: center; justify-content: center; position: relative; transition: all 0.3s ease;">
                        <i class="fas fa-star" style="color: white; font-size: 2rem;"></i>
                        <div style="position: absolute; top: -10px; right: -10px; width: 30px; height: 30px; background: rgba(255,255,255,0.2); border-radius: 50%;"></div>
                    </div>
                    <h4 style="color: #2a2a2a; font-size: 1.3rem; font-weight: 600; margin-bottom: 1rem;">Excellence</h4>
                    <p style="color: #6c757d; line-height: 1.6; font-size: 0.95rem; margin: 0;">We set high standards in everything we do, delivering with precision and pride.</p>
                </div>
            </div>

            <!-- Integrity -->
            <div class="col-lg-4 col-md-6">
                <div style="text-align: center; padding: 2rem; border-radius: 16px; transition: all 0.3s ease; cursor: pointer; opacity: 0; animation: fadeInUp 1s ease-out 1.4s forwards;" onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 20px 40px rgba(0,0,0,0.1)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'">
                    <div style="width: 100px; height: 100px; background: linear-gradient(135deg, #5ba3b0, #4a8a96); border-radius: 50%; margin: 0 auto 1.5rem; display: flex; align-items: center; justify-content: center; position: relative; transition: all 0.3s ease;">
                        <i class="fas fa-shield-alt" style="color: white; font-size: 2rem;"></i>
                        <div style="position: absolute; top: -10px; right: -10px; width: 30px; height: 30px; background: rgba(255,255,255,0.2); border-radius: 50%;"></div>
                    </div>
                    <h4 style="color: #2a2a2a; font-size: 1.3rem; font-weight: 600; margin-bottom: 1rem;">Integrity</h4>
                    <p style="color: #6c757d; line-height: 1.6; font-size: 0.95rem; margin: 0;">We are honest, ethical, and transparent in our commitments.</p>
                </div>
            </div>

            <!-- Innovation -->
            <div class="col-lg-4 col-md-6">
                <div style="text-align: center; padding: 2rem; border-radius: 16px; transition: all 0.3s ease; cursor: pointer; opacity: 0; animation: fadeInUp 1s ease-out 1.6s forwards;" onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 20px 40px rgba(0,0,0,0.1)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'">
                    <div style="width: 100px; height: 100px; background: linear-gradient(135deg, #4a8a96, #326D78); border-radius: 50%; margin: 0 auto 1.5rem; display: flex; align-items: center; justify-content: center; position: relative; transition: all 0.3s ease;">
                        <i class="fas fa-lightbulb" style="color: white; font-size: 2rem;"></i>
                        <div style="position: absolute; top: -10px; right: -10px; width: 30px; height: 30px; background: rgba(255,255,255,0.2); border-radius: 50%;"></div>
                    </div>
                    <h4 style="color: #2a2a2a; font-size: 1.3rem; font-weight: 600; margin-bottom: 1rem;">Innovation</h4>
                    <p style="color: #6c757d; line-height: 1.6; font-size: 0.95rem; margin: 0;">We embrace change and lead with forward-thinking solutions.</p>
                </div>
            </div>

            <!-- Professional Growth -->
            <div class="col-lg-4 col-md-6">
                <div style="text-align: center; padding: 2rem; border-radius: 16px; transition: all 0.3s ease; cursor: pointer; opacity: 0; animation: fadeInUp 1s ease-out 1.8s forwards;" onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 20px 40px rgba(0,0,0,0.1)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'">
                    <div style="width: 100px; height: 100px; background: linear-gradient(135deg, #326D78, #4a8a96); border-radius: 50%; margin: 0 auto 1.5rem; display: flex; align-items: center; justify-content: center; position: relative; transition: all 0.3s ease;">
                        <i class="fas fa-chart-line" style="color: white; font-size: 2rem;"></i>
                        <div style="position: absolute; top: -10px; right: -10px; width: 30px; height: 30px; background: rgba(255,255,255,0.2); border-radius: 50%;"></div>
                    </div>
                    <h4 style="color: #2a2a2a; font-size: 1.3rem; font-weight: 600; margin-bottom: 1rem;">Professional Growth</h4>
                    <p style="color: #6c757d; line-height: 1.6; font-size: 0.95rem; margin: 0;">We encourage lifelong learning and support our people's development.</p>
                </div>
            </div>

            <!-- Teamwork -->
            <div class="col-lg-4 col-md-6">
                <div style="text-align: center; padding: 2rem; border-radius: 16px; transition: all 0.3s ease; cursor: pointer; opacity: 0; animation: fadeInUp 1s ease-out 2s forwards;" onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 20px 40px rgba(0,0,0,0.1)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'">
                    <div style="width: 100px; height: 100px; background: linear-gradient(135deg, #5ba3b0, #326D78); border-radius: 50%; margin: 0 auto 1.5rem; display: flex; align-items: center; justify-content: center; position: relative; transition: all 0.3s ease;">
                        <i class="fas fa-users" style="color: white; font-size: 2rem;"></i>
                        <div style="position: absolute; top: -10px; right: -10px; width: 30px; height: 30px; background: rgba(255,255,255,0.2); border-radius: 50%;"></div>
                    </div>
                    <h4 style="color: #2a2a2a; font-size: 1.3rem; font-weight: 600; margin-bottom: 1rem;">Teamwork</h4>
                    <p style="color: #6c757d; line-height: 1.6; font-size: 0.95rem; margin: 0;">We thrive in collaboration, valuing the strength of collective effort.</p>
                </div>
            </div>

            <!-- Employee Care -->
            <div class="col-lg-4 col-md-6">
                <div style="text-align: center; padding: 2rem; border-radius: 16px; transition: all 0.3s ease; cursor: pointer; opacity: 0; animation: fadeInUp 1s ease-out 2.2s forwards;" onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 20px 40px rgba(0,0,0,0.1)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'">
                    <div style="width: 100px; height: 100px; background: linear-gradient(135deg, #4a8a96, #5ba3b0); border-radius: 50%; margin: 0 auto 1.5rem; display: flex; align-items: center; justify-content: center; position: relative; transition: all 0.3s ease;">
                        <i class="fas fa-heart" style="color: white; font-size: 2rem;"></i>
                        <div style="position: absolute; top: -10px; right: -10px; width: 30px; height: 30px; background: rgba(255,255,255,0.2); border-radius: 50%;"></div>
                    </div>
                    <h4 style="color: #2a2a2a; font-size: 1.3rem; font-weight: 600; margin-bottom: 1rem;">Employee Care</h4>
                    <p style="color: #6c757d; line-height: 1.6; font-size: 0.95rem; margin: 0;">We prioritize wellbeing and inclusion within our firm.</p>
                </div>
            </div>

            <!-- Community Engagement - Centered -->
            <div class="col-lg-4 col-md-6 mx-auto">
                <div style="text-align: center; padding: 2rem; border-radius: 16px; transition: all 0.3s ease; cursor: pointer; opacity: 0; animation: fadeInUp 1s ease-out 2.4s forwards;" onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 20px 40px rgba(0,0,0,0.1)'" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'">
                    <div style="width: 100px; height: 100px; background: linear-gradient(135deg, #326D78, #5ba3b0); border-radius: 50%; margin: 0 auto 1.5rem; display: flex; align-items: center; justify-content: center; position: relative; transition: all 0.3s ease;">
                        <i class="fas fa-hands-helping" style="color: white; font-size: 2rem;"></i>
                        <div style="position: absolute; top: -10px; right: -10px; width: 30px; height: 30px; background: rgba(255,255,255,0.2); border-radius: 50%;"></div>
                    </div>
                    <h4 style="color: #2a2a2a; font-size: 1.3rem; font-weight: 600; margin-bottom: 1rem;">Community Engagement</h4>
                    <p style="color: #6c757d; line-height: 1.6; font-size: 0.95rem; margin: 0;">We give back to society and act as responsible corporate citizens.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Clean CTA Section -->
<section style="background: #f8fafb; padding: 4rem 0;">
    <div class="container">
        <div style="background: white; border-radius: 24px; padding: 4rem 2rem; text-align: center; box-shadow: 0 20px 60px rgba(0,0,0,0.06); position: relative; overflow: hidden; opacity: 0; animation: fadeInUp 1s ease-out 0.3s forwards;">
            <div style="position: absolute; top: -50px; left: -50px; width: 150px; height: 150px; background: rgba(50, 109, 120, 0.05); border-radius: 50%;"></div>
            <div style="position: absolute; bottom: -30px; right: -30px; width: 100px; height: 100px; background: rgba(91, 163, 176, 0.08); border-radius: 50%;"></div>

            <div style="position: relative; z-index: 2;">
                <h2 style="font-size: 2.5rem; font-weight: 300; color: #2a2a2a; margin-bottom: 1rem;">
                    Ready to Experience <span style="font-weight: 700; color: #326D78;">Excellence?</span>
                </h2>
                <p style="color: #6c757d; font-size: 1.2rem; margin-bottom: 2rem; max-width: 500px; margin-left: auto; margin-right: auto;">
                    Join us in building a legacy of trust and professional excellence.
                </p>
                <a href="{{ url('/#contact') }}" style="display: inline-block; background: linear-gradient(135deg, #326D78, #5ba3b0); color: white; padding: 1rem 2.5rem; border-radius: 50px; text-decoration: none; font-weight: 600; font-size: 1.1rem; transition: all 0.3s ease; box-shadow: 0 8px 30px rgba(50, 109, 120, 0.2);">
                    Get in Touch <i class="fas fa-arrow-right ms-2"></i>
                </a>
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
</style>

@endsection
