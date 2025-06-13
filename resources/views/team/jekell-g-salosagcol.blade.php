@extends('layouts.app')

@section('title', 'Jekell G. Salosagcol - External Quality Assurance Consultant')

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
                <li class="breadcrumb-item active" aria-current="page" style="color: #6c757d; font-weight: 500;">Jekell G. Salosagcol</li>
            </ol>
        </nav>

    <!-- Hero Profile Section -->
    <div style="background: white; position: relative; overflow: hidden;">
        <div class="container">
            <div class="row min-vh-75 align-items-center" style="padding: 80px 0;">

                <!-- Large Profile Image Section -->
                <div class="col-lg-5">
                    <div style="position: relative;">
                        <!-- Main Profile Image -->
                        <div style="position: relative; z-index: 2;">
                            <img src="{{ asset('assets/img/team/jekell-g-salosagcol.jpg') }}"
                                 alt="Jekell G. Salosagcol"
                                 style="width: 100%; max-width: 400px; height: 500px; object-fit: cover; object-position: center top; border-radius: 0; box-shadow: 0 20px 60px rgba(0,0,0,0.15);">
                        </div>

                        <!-- Decorative Background Elements -->
                        <div style="position: absolute; top: -20px; right: -20px; width: 100px; height: 100px; background: #326D78; z-index: 1;"></div>
                        <div style="position: absolute; bottom: -30px; left: -30px; width: 80px; height: 80px; background: #4a9aba; z-index: 1;"></div>

                        <!-- Professional Badge -->
                        <div style="position: absolute; bottom: 20px; right: 20px; background: #326D78; color: white; padding: 1rem 1.5rem; z-index: 3;">
                            <h4 style="color: white; font-weight: 700; margin: 0; font-size: 1.2rem;">Prof.</h4>
                            <small style="color: rgba(255,255,255,0.8);">CPA, Academic</small>
                        </div>
                    </div>
                </div>

                <!-- Profile Information -->
                <div class="col-lg-7 ps-lg-5">
                    <div style="max-width: 600px;">

                        <!-- Name and Title -->
                        <div style="margin-bottom: 2rem;">
                            <h1 style="font-size: 2.9rem; font-weight: 700; color: #333; line-height: 0.9; margin-bottom: 0.5rem; letter-spacing: -2px;">
                                Jekell G.<br>
                                <span style="color: #326D78;">Salosagcol</span>
                            </h1>
                            <h2 style="font-size: 1.8rem; font-weight: 300; color: #666; margin-bottom: 2rem; text-transform: uppercase; letter-spacing: 2px;">
                                External Quality Assurance Consultant
                            </h2>
                        </div>

                        <!-- Contact Information -->
                        <div style="background: #326D78; color: white; padding: 2rem; margin-bottom: 2rem; position: relative;">
                            <div style="position: absolute; top: 0; right: 0; width: 0; height: 0; border-left: 50px solid transparent; border-top: 50px solid #4a9aba;"></div>

                            <div style="display: flex; align-items: center; margin-bottom: 1rem;">
                                <i class="fas fa-envelope" style="font-size: 1.5rem; margin-right: 1rem; width: 30px;"></i>
                                <a href="mailto:ekell.salosagcol@mtco.com.ph" style="color: white; text-decoration: none; font-size: 1.1rem; font-weight: 500;">
                                    ekell.salosagcol@mtco.com.ph
                                </a>
                            </div>

                            <div style="display: flex; align-items: center;">
                                <i class="fas fa-building" style="font-size: 1.5rem; margin-right: 1rem; width: 30px;"></i>
                                <span style="font-size: 1.1rem;">Mendoza Tugano & Co., CPAs</span>
                            </div>
                        </div>

                        <!-- Key Achievements -->
                        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 1rem;">
                            <div style="text-align: center; padding: 1.5rem; background: #f8f9fa; border-top: 4px solid #326D78;">
                                <h3 style="font-size: 2.3rem; font-weight: 700; color: #326D78; margin-bottom: 0.5rem;">26+</h3>
                                <p style="color: #666; margin: 0; font-weight: 500;">Years Experience</p>
                            </div>
                            <div style="text-align: center; padding: 1.5rem; background: #f8f9fa; border-top: 4px solid #4a9aba;">
                                <h3 style="font-size: 2.3rem; font-weight: 700; color: #4a9aba; margin-bottom: 0.5rem;">2nd</h3>
                                <p style="color: #666; margin: 0; font-weight: 500;">CPA Board Placer</p>
                            </div>
                            <div style="text-align: center; padding: 1.5rem; background: #f8f9fa; border-top: 4px solid #74d3e3;">
                                <h3 style="font-size: 2.3rem; font-weight: 700; color: #74d3e3; margin-bottom: 0.5rem;">2</h3>
                                <p style="color: #666; margin: 0; font-weight: 500;">Published Books</p>
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

                        <!-- Academic Excellence & Early Career -->
                        <div style="position: relative; margin-bottom: 3rem;">
                            <div style="position: absolute; left: -10px; top: 0; width: 20px; height: 20px; background: #326D78; border-radius: 50%; border: 4px solid white; box-shadow: 0 0 0 4px #326D78;"></div>

                            <div style="background: white; padding: 2rem; border-radius: 8px; box-shadow: 0 4px 20px rgba(0,0,0,0.1); margin-left: 1rem;">
                                <h3 style="color: #326D78; font-weight: 600; margin-bottom: 1rem; font-size: 1.3rem;">Academic Excellence & SGV Foundation</h3>
                                <p style="color: #666; line-height: 1.7; margin-bottom: 1rem;">
                                    Prof. Salosagcol graduated with a Bachelor of Science in Accountancy from the Technological Institute of the Philippines in 1994, achieving exceptional academic distinction by placing second in the Philippine CPA Licensure Examination in May 1995.
                                </p>
                                <p style="color: #666; line-height: 1.7; margin: 0;">
                                    He began his professional career as an Auditor at SyCip, Gorres, Velayo & Company from 1995 to 1997, establishing a solid foundation in public accounting practice at the Philippines' premier accounting firm.
                                </p>
                            </div>
                        </div>

                        <!-- Academic Leadership & Publications -->
                        <div style="position: relative; margin-bottom: 3rem;">
                            <div style="position: absolute; left: -10px; top: 0; width: 20px; height: 20px; background: #4a9aba; border-radius: 50%; border: 4px solid white; box-shadow: 0 0 0 4px #4a9aba;"></div>

                            <div style="background: white; padding: 2rem; border-radius: 8px; box-shadow: 0 4px 20px rgba(0,0,0,0.1); margin-left: 1rem;">
                                <h3 style="color: #4a9aba; font-weight: 600; margin-bottom: 1rem; font-size: 1.3rem;">Academic Leadership & Scholarly Contributions</h3>
                                <p style="color: #666; line-height: 1.7; margin-bottom: 1rem;">
                                    From 1997 to 2002, Prof. Salosagcol served as a distinguished professor at De La Salle University and St. Scholastica's College, sharing his expertise with the next generation of accounting professionals. Currently, he continues his academic leadership as a CPA reviewer and major shareholder at CRC-ACE Review School.
                                </p>
                                <p style="color: #666; line-height: 1.7; margin: 0;">
                                    His scholarly contributions include authoring and publishing two significant works: <em>"Basic Accounting Theory and Concepts"</em> and <em>"A Guide in Understanding the Philippine Standards on Auditing"</em>, establishing him as both an educator and thought leader in the accounting profession.
                                </p>
                            </div>
                        </div>

                        <!-- Government & Industry Consulting -->
                        <div style="position: relative;">
                            <div style="position: absolute; left: -10px; top: 0; width: 20px; height: 20px; background: #74d3e3; border-radius: 50%; border: 4px solid white; box-shadow: 0 0 0 4px #74d3e3;"></div>

                            <div style="background: white; padding: 2rem; border-radius: 8px; box-shadow: 0 4px 20px rgba(0,0,0,0.1); margin-left: 1rem;">
                                <h3 style="color: #74d3e3; font-weight: 600; margin-bottom: 1rem; font-size: 1.3rem;">Government & Corporate Advisory Excellence</h3>
                                <p style="color: #666; line-height: 1.7; margin-bottom: 1rem;">
                                    Prof. Salosagcol has provided critical assistance to major government institutions including the Commission on Audit (COA) in adopting Public Sector Accounting Standards, the Cooperative Development Authority (CDA) in developing the Financial Reporting Framework for Cooperatives, and the Bureau of Internal Revenue (BIR) in reconciling PFRS rules with BIR regulations.
                                </p>
                                <p style="color: #666; line-height: 1.7; margin: 0;">
                                    His consulting expertise extends to prestigious listed companies and government agencies including San Miguel, Meralco, Innodata, Petron, Ayala Land, Social Security System, Philippine Health Insurance, Energy Regulatory Board, Regulatory Toll Board, and Civil Aviation Authority of the Philippines, among others.
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
                    <div style="background: #326D78; color: white; padding: 2rem; margin-bottom: 2rem; position: relative;" data-aos="fade-up" data-aos-delay="300">
                        <div style="position: absolute; top: -15px; right: -15px; width: 60px; height: 60px; border: 3px solid #4a9aba; transform: rotate(45deg);"></div>

                        <h3 style="color: white; font-weight: 600; margin-bottom: 1.5rem; font-size: 1.5rem;">Education & Achievement</h3>

                        <div style="margin-bottom: 1.5rem; padding-bottom: 1.5rem; border-bottom: 1px solid rgba(255,255,255,0.2);">
                            <h4 style="color: rgba(255,255,255,0.9); font-weight: 600; margin-bottom: 0.5rem; font-size: 1.1rem;">Bachelor of Science in Accountancy</h4>
                            <p style="color: rgba(255,255,255,0.7); margin-bottom: 0.5rem;">Technological Institute of the Philippines (1994)</p>
                            <small style="color: #ffd700; font-weight: 600;">🏆 2nd Place - CPA Licensure Exam (May 1995)</small>
                        </div>

                        <div>
                            <h4 style="color: rgba(255,255,255,0.9); font-weight: 600; margin-bottom: 0.5rem; font-size: 1.1rem;">Current Role</h4>
                            <p style="color: rgba(255,255,255,0.7); margin: 0;">CPA Reviewer & Major Shareholder<br>CRC-ACE Review School</p>
                        </div>
                    </div>

                    <!-- Publications -->
                    <div style="background: white; padding: 2rem; border: 1px solid #e9ecef; margin-bottom: 2rem;" data-aos="fade-up" data-aos-delay="400">
                        <h3 style="color: #333; font-weight: 600; margin-bottom: 1.5rem; font-size: 1.5rem;">Published Works</h3>

                        <div style="margin-bottom: 1.5rem; padding: 1rem; background: #f8f9fa; border-left: 4px solid #326D78;">
                            <h5 style="color: #326D78; font-weight: 600; margin-bottom: 0.5rem; font-style: italic;">"Basic Accounting Theory and Concepts"</h5>
                            <p style="color: #666; margin: 0; font-size: 0.9rem;">Comprehensive guide to fundamental accounting principles</p>
                        </div>

                        <div style="padding: 1rem; background: #f8f9fa; border-left: 4px solid #4a9aba;">
                            <h5 style="color: #4a9aba; font-weight: 600; margin-bottom: 0.5rem; font-style: italic;">"A Guide in Understanding the Philippine Standards on Auditing"</h5>
                            <p style="color: #666; margin: 0; font-size: 0.9rem;">Essential reference for auditing standards and practices</p>
                        </div>
                    </div>

                    <!-- Professional Committee Involvement -->
                    <div style="background: white; padding: 2rem; border: 1px solid #e9ecef; margin-bottom: 2rem;" data-aos="fade-up" data-aos-delay="500">
                        <h3 style="color: #333; font-weight: 600; margin-bottom: 1.5rem; font-size: 1.5rem;">Committee Memberships</h3>

                        <div style="space-y: 1rem;">
                            <div style="display: flex; align-items: start; margin-bottom: 1rem;">
                                <div style="width: 8px; height: 8px; background: #326D78; border-radius: 50%; margin-top: 8px; margin-right: 12px; flex-shrink: 0;"></div>
                                <div>
                                    <small style="color: #666; font-size: 0.85rem;">CPA Board Examination Syllabus Revision Committee (Board of Accountancy)</small>
                                </div>
                            </div>

                            <div style="display: flex; align-items: start; margin-bottom: 1rem;">
                                <div style="width: 8px; height: 8px; background: #4a9aba; border-radius: 50%; margin-top: 8px; margin-right: 12px; flex-shrink: 0;"></div>
                                <div>
                                    <small style="color: #666; font-size: 0.85rem;">Committee for Code of Ethics for Professional Accountants Adoption</small>
                                </div>
                            </div>

                            <div style="display: flex; align-items: start; margin-bottom: 1rem;">
                                <div style="width: 8px; height: 8px; background: #74d3e3; border-radius: 50%; margin-top: 8px; margin-right: 12px; flex-shrink: 0;"></div>
                                <div>
                                    <small style="color: #666; font-size: 0.85rem;">Technical Working Group - Philippine Interpretations Committee</small>
                                </div>
                            </div>

                            <div style="display: flex; align-items: start; margin-bottom: 1rem;">
                                <div style="width: 8px; height: 8px; background: #5bb3c7; border-radius: 50%; margin-top: 8px; margin-right: 12px; flex-shrink: 0;"></div>
                                <div>
                                    <small style="color: #666; font-size: 0.85rem;">Ethics & Quality Assurance Review Committee (PICPA)</small>
                                </div>
                            </div>

                            <div style="display: flex; align-items: start;">
                                <div style="width: 8px; height: 8px; background: #326D78; border-radius: 50%; margin-top: 8px; margin-right: 12px; flex-shrink: 0;"></div>
                                <div>
                                    <small style="color: #666; font-size: 0.85rem;">Auditing Standards & Practices Committee (ACPAPP)</small>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Major Clients -->
                    <div style="background: #f8f9fa; padding: 2rem; border-left: 5px solid #326D78;" data-aos="fade-up" data-aos-delay="600">
                        <h3 style="color: #333; font-weight: 600; margin-bottom: 1.5rem; font-size: 1.5rem;">Notable Clients</h3>

                        <div style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 0.5rem;">
                            <span style="background: white; padding: 0.5rem 0.75rem; border-radius: 6px; font-size: 0.8rem; color: #666; text-align: center; box-shadow: 0 1px 3px rgba(0,0,0,0.1);">San Miguel</span>
                            <span style="background: white; padding: 0.5rem 0.75rem; border-radius: 6px; font-size: 0.8rem; color: #666; text-align: center; box-shadow: 0 1px 3px rgba(0,0,0,0.1);">Meralco</span>
                            <span style="background: white; padding: 0.5rem 0.75rem; border-radius: 6px; font-size: 0.8rem; color: #666; text-align: center; box-shadow: 0 1px 3px rgba(0,0,0,0.1);">Petron</span>
                            <span style="background: white; padding: 0.5rem 0.75rem; border-radius: 6px; font-size: 0.8rem; color: #666; text-align: center; box-shadow: 0 1px 3px rgba(0,0,0,0.1);">Ayala Land</span>
                            <span style="background: white; padding: 0.5rem 0.75rem; border-radius: 6px; font-size: 0.8rem; color: #666; text-align: center; box-shadow: 0 1px 3px rgba(0,0,0,0.1);">SSS</span>
                            <span style="background: white; padding: 0.5rem 0.75rem; border-radius: 6px; font-size: 0.8rem; color: #666; text-align: center; box-shadow: 0 1px 3px rgba(0,0,0,0.1);">PhilHealth</span>
                            <span style="background: white; padding: 0.5rem 0.75rem; border-radius: 6px; font-size: 0.8rem; color: #666; text-align: center; box-shadow: 0 1px 3px rgba(0,0,0,0.1);">ERC</span>
                            <span style="background: white; padding: 0.5rem 0.75rem; border-radius: 6px; font-size: 0.8rem; color: #666; text-align: center; box-shadow: 0 1px 3px rgba(0,0,0,0.1);">CAAP</span>
                        </div>
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
