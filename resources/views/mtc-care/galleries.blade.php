@extends('layouts.app')

@section('title', 'Galleries | Mendoza Tugano & Co., CPAs')

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
            <li class="breadcrumb-item">
                <a href="{{ url('/#faq') }}" style="color: #326D78; text-decoration: none; font-weight: 500; pointer-events: auto;">MTC Care</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page" style="color: #6c757d; font-weight: 500;">Galleries</li>
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
                        {{ getContent('galleries_hero_title', 'Galleries') }}
                    </h1>
                    <p style="font-size: 1.4rem; color: #6c757d; line-height: 1.6; margin-bottom: 2rem; max-width: 600px; margin-left: auto; margin-right: auto; opacity: 0; animation: fadeInUp 1s ease-out 0.6s forwards;">
                        {{ getContent('galleries_hero_subtitle', 'Moments that matter deserve to be shared. Discover our visual showcase of CSR activities, team events, and community engagements.') }}
                    </p>
                    <div style="display: flex; gap: 1rem; flex-wrap: wrap; justify-content: center; opacity: 0; animation: fadeInUp 1s ease-out 0.9s forwards;">
                        <a href="#csr-gallery" style="background: white; padding: 1rem 1.5rem; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.06); border-left: 4px solid #326D78; transition: all 0.3s ease; text-decoration: none; color: #326D78; font-weight: 600;">
                            <i class="fas fa-heart me-2"></i>{{ getContent('galleries_cta_csr', 'CSR Activities') }}
                        </a>
                        <a href="#team-gallery" style="background: white; padding: 1rem 1.5rem; border-radius: 12px; box-shadow: 0 4px 20px rgba(0,0,0,0.06); border-left: 4px solid #5ba3b0; transition: all 0.3s ease; text-decoration: none; color: #5ba3b0; font-weight: 600;">
                            <i class="fas fa-users me-2"></i>{{ getContent('galleries_cta_team', 'Team Events') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Gallery Overview Section -->
<section style="padding: 6rem 0; background: white;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div style="text-align: center; margin-bottom: 4rem;">
                    <div style="display: inline-block; background: rgba(50, 109, 120, 0.1); color: #326D78; padding: 0.5rem 1rem; border-radius: 20px; font-size: 0.9rem; font-weight: 600; margin-bottom: 1.5rem; opacity: 0; animation: fadeInUp 1s ease-out 0.3s forwards;">
                        {{ getContent('galleries_overview_badge', 'Visual Showcase') }}
                    </div>
                    <h2 style="font-size: 2.6rem; font-weight: 600; color: #2a2a2a; margin-bottom: 2rem; opacity: 0; animation: fadeInUp 1s ease-out 0.6s forwards;">
                        {{ getContent('galleries_overview_title', 'Capturing Our Journey') }}
                    </h2>
                    <div style="width: 80px; height: 4px; background: linear-gradient(90deg, #326D78, #5ba3b0); border-radius: 2px; margin: 0 auto; opacity: 0; animation: scaleX 1s ease-out 0.9s forwards; transform-origin: center;"></div>
                </div>

                <div style="max-width: 900px; margin: 0 auto; text-align: center;">
                    <p style="color: #666; font-size: 1.2rem; line-height: 1.7; margin-bottom: 1.5rem; opacity: 0; animation: fadeInUp 1s ease-out 1.2s forwards;">
                        {{ getContent('galleries_overview_paragraph1', 'In this section, you\'ll find a visual showcase of our CSR activities, team-building events, firm milestones, and community engagements.') }}
                    </p>

                    <p style="color: #666; font-size: 1.2rem; line-height: 1.7; opacity: 0; animation: fadeInUp 1s ease-out 1.5s forwards;">
                        {{ getContent('galleries_overview_paragraph2', 'From outreach missions and volunteer efforts to company celebrations and employee-led initiatives, our gallery highlights the heart of MTC, our people and their passion for making a difference.') }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CSR Activities Gallery -->
<section id="csr-gallery" style="background: #f8fafb; padding: 6rem 0;">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <div style="position: sticky; top: 2rem;">
                    <div style="display: inline-block; background: rgba(50, 109, 120, 0.1); color: #326D78; padding: 0.5rem 1rem; border-radius: 20px; font-size: 0.9rem; font-weight: 600; margin-bottom: 1.5rem; opacity: 0; animation: fadeInLeft 1s ease-out 0.3s forwards;">
                        {{ getContent('csr_gallery_badge', 'CSR Activities') }}
                    </div>
                    <h2 style="font-size: 2.4rem; font-weight: 600; color: #2a2a2a; margin-bottom: 2rem; opacity: 0; animation: fadeInLeft 1s ease-out 0.6s forwards;">
                        {{ getContent('csr_gallery_title', 'CSR Activities & Community Outreach') }}
                    </h2>
                    <div style="width: 60px; height: 4px; background: linear-gradient(90deg, #326D78, #5ba3b0); border-radius: 2px; margin-bottom: 2rem; opacity: 0; animation: scaleX 1s ease-out 0.9s forwards; transform-origin: left;"></div>

                    <p style="font-size: 1.1rem; color: #6c757d; line-height: 1.7; opacity: 0; animation: fadeInLeft 1s ease-out 1.2s forwards;">
                        {{ getContent('csr_gallery_description', 'Our commitment to social responsibility through various community programs and environmental initiatives.') }}
                    </p>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="row g-4">
                    <!-- CSR Image 1 -->
                    <div class="col-lg-6" style="opacity: 0; animation: fadeInRight 1s ease-out 0.6s forwards;">
                        <div class="gallery-item" style="position: relative; border-radius: 15px; overflow: hidden; cursor: pointer; transition: all 0.3s ease; background: white; padding: 15px; box-shadow: 0 8px 25px rgba(0,0,0,0.1); transform: rotate(-2deg);" onclick="openImageModal(this)">
                            @if(hasImageContent('csr_gallery_image1'))
                                <img src="{{ getContent('csr_gallery_image1') }}" alt="Community Outreach" style="width: 100%; height: 200px; object-fit: cover; border-radius: 10px;">
                            @else
                                <img src="{{ asset('assets/img/BA5.jpg') }}" alt="Community Outreach" style="width: 100%; height: 200px; object-fit: cover; border-radius: 10px;">
                            @endif
                            <div class="gallery-overlay" style="position: absolute; top: 15px; left: 15px; right: 15px; bottom: 15px; background: linear-gradient(135deg, rgba(50, 109, 120, 0.8), rgba(91, 163, 176, 0.8)); opacity: 0; transition: opacity 0.3s ease; display: flex; align-items: center; justify-content: center; border-radius: 10px;">
                                <div style="text-align: center; color: white;">
                                    <i class="fas fa-search-plus" style="font-size: 1.5rem; margin-bottom: 0.5rem;"></i>
                                    <h6 style="color: white; margin: 0;">{{ getContent('csr_gallery_item1_title', 'Medical Mission') }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- CSR Image 2 -->
                    <div class="col-lg-6" style="opacity: 0; animation: fadeInRight 1s ease-out 0.9s forwards;">
                        <div class="gallery-item" style="position: relative; border-radius: 15px; overflow: hidden; cursor: pointer; transition: all 0.3s ease; background: white; padding: 15px; box-shadow: 0 8px 25px rgba(0,0,0,0.1); transform: rotate(1deg);" onclick="openImageModal(this)">
                            @if(hasImageContent('csr_gallery_image2'))
                                <img src="{{ getContent('csr_gallery_image2') }}" alt="Tree Planting" style="width: 100%; height: 200px; object-fit: cover; border-radius: 10px;">
                            @else
                                <img src="{{ asset('assets/img/BA4.jpg') }}" alt="Tree Planting" style="width: 100%; height: 200px; object-fit: cover; border-radius: 10px;">
                            @endif
                            <div class="gallery-overlay" style="position: absolute; top: 15px; left: 15px; right: 15px; bottom: 15px; background: linear-gradient(135deg, rgba(50, 109, 120, 0.8), rgba(91, 163, 176, 0.8)); opacity: 0; transition: opacity 0.3s ease; display: flex; align-items: center; justify-content: center; border-radius: 10px;">
                                <div style="text-align: center; color: white;">
                                    <i class="fas fa-search-plus" style="font-size: 1.5rem; margin-bottom: 0.5rem;"></i>
                                    <h6 style="color: white; margin: 0;">{{ getContent('csr_gallery_item2_title', 'Tree Planting Activity') }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- CSR Image 3 -->
                    <div class="col-lg-6" style="opacity: 0; animation: fadeInRight 1s ease-out 1.2s forwards;">
                        <div class="gallery-item" style="position: relative; border-radius: 15px; overflow: hidden; cursor: pointer; transition: all 0.3s ease; background: white; padding: 15px; box-shadow: 0 8px 25px rgba(0,0,0,0.1); transform: rotate(-1deg);" onclick="openImageModal(this)">
                            @if(hasImageContent('csr_gallery_image3'))
                                <img src="{{ getContent('csr_gallery_image3') }}" alt="Scholarship Program" style="width: 100%; height: 200px; object-fit: cover; border-radius: 10px;">
                            @else
                                <img src="{{ asset('assets/img/BA2.jpg') }}" alt="Scholarship Program" style="width: 100%; height: 200px; object-fit: cover; border-radius: 10px;">
                            @endif
                            <div class="gallery-overlay" style="position: absolute; top: 15px; left: 15px; right: 15px; bottom: 15px; background: linear-gradient(135deg, rgba(50, 109, 120, 0.8), rgba(91, 163, 176, 0.8)); opacity: 0; transition: opacity 0.3s ease; display: flex; align-items: center; justify-content: center; border-radius: 10px;">
                                <div style="text-align: center; color: white;">
                                    <i class="fas fa-search-plus" style="font-size: 1.5rem; margin-bottom: 0.5rem;"></i>
                                    <h6 style="color: white; margin: 0;">{{ getContent('csr_gallery_item3_title', 'Scholarship Program') }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- CSR Image 4 -->
                    <div class="col-lg-6" style="opacity: 0; animation: fadeInRight 1s ease-out 1.5s forwards;">
                        <div class="gallery-item" style="position: relative; border-radius: 15px; overflow: hidden; cursor: pointer; transition: all 0.3s ease; background: white; padding: 15px; box-shadow: 0 8px 25px rgba(0,0,0,0.1); transform: rotate(2deg);" onclick="openGalleryModal('csr')">
                            @if(hasImageContent('csr_gallery_image4'))
                                <img src="{{ getContent('csr_gallery_image4') }}" alt="Food Drive" style="width: 100%; height: 200px; object-fit: cover; border-radius: 10px;">
                            @else
                                <img src="{{ asset('assets/img/BA1.jpg') }}" alt="Food Drive" style="width: 100%; height: 200px; object-fit: cover; border-radius: 10px;">
                            @endif

                            <!-- Always visible blur overlay with + -->
                            <div style="position: absolute; top: 15px; left: 15px; right: 15px; bottom: 15px; background: rgba(0,0,0,0.4); backdrop-filter: blur(3px); display: flex; align-items: center; justify-content: center; border-radius: 10px;">
                                <div style="text-align: center; color: white;">
                                    <div style="font-size: 3rem; font-weight: 700; margin-bottom: 0.5rem; text-shadow: 0 2px 4px rgba(0,0,0,0.5);">+</div>
                                    <h6 style="color: white; margin: 0; font-size: 1rem; font-weight: 600; text-shadow: 0 1px 2px rgba(0,0,0,0.5);">More Photos</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Team Events Gallery -->
<section id="team-gallery" style="padding: 6rem 0; background: white;">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <div class="row g-4">
                    <!-- Team Image 1 -->
                    <div class="col-lg-12" style="opacity: 0; animation: fadeInLeft 1s ease-out 0.6s forwards;">
                        <div class="gallery-item" style="position: relative; border-radius: 15px; overflow: hidden; cursor: pointer; transition: all 0.3s ease; background: white; padding: 15px; box-shadow: 0 8px 25px rgba(0,0,0,0.1); transform: rotate(-1deg);" onclick="openImageModal(this)">
                            @if(hasImageContent('team_gallery_image1'))
                                <img src="{{ getContent('team_gallery_image1') }}" alt="Annual Party" style="width: 100%; height: 250px; object-fit: cover; border-radius: 10px;">
                            @else
                                <img src="{{ asset('assets/img/CO1.jpg') }}" alt="Annual Party" style="width: 100%; height: 250px; object-fit: cover; border-radius: 10px;">
                            @endif
                            <div class="gallery-overlay" style="position: absolute; top: 15px; left: 15px; right: 15px; bottom: 15px; background: linear-gradient(135deg, rgba(74, 138, 150, 0.8), rgba(50, 109, 120, 0.8)); opacity: 0; transition: opacity 0.3s ease; display: flex; align-items: center; justify-content: center; border-radius: 10px;">
                                <div style="text-align: center; color: white;">
                                    <i class="fas fa-search-plus" style="font-size: 2rem; margin-bottom: 1rem;"></i>
                                    <h5 style="color: white; margin: 0;">{{ getContent('team_gallery_item1_title', 'Annual Company Celebration') }}</h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Team Image 2 -->
                    <div class="col-lg-6" style="opacity: 0; animation: fadeInLeft 1s ease-out 0.9s forwards;">
                        <div class="gallery-item" style="position: relative; border-radius: 15px; overflow: hidden; cursor: pointer; transition: all 0.3s ease; background: white; padding: 15px; box-shadow: 0 8px 25px rgba(0,0,0,0.1); transform: rotate(1deg);" onclick="openImageModal(this)">
                            @if(hasImageContent('team_gallery_image2'))
                                <img src="{{ getContent('team_gallery_image2') }}" alt="Team Building" style="width: 100%; height: 200px; object-fit: cover; border-radius: 10px;">
                            @else
                                <img src="{{ asset('assets/img/CO3.jpeg') }}" alt="Team Building" style="width: 100%; height: 200px; object-fit: cover; border-radius: 10px;">
                            @endif
                            <div class="gallery-overlay" style="position: absolute; top: 15px; left: 15px; right: 15px; bottom: 15px; background: linear-gradient(135deg, rgba(74, 138, 150, 0.8), rgba(50, 109, 120, 0.8)); opacity: 0; transition: opacity 0.3s ease; display: flex; align-items: center; justify-content: center; border-radius: 10px;">
                                <div style="text-align: center; color: white;">
                                    <i class="fas fa-search-plus" style="font-size: 1.5rem; margin-bottom: 0.5rem;"></i>
                                    <h6 style="color: white; margin: 0;">{{ getContent('team_gallery_item2_title', 'Team Building Activities') }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Team Image 3 -->
                    <div class="col-lg-6" style="opacity: 0; animation: fadeInLeft 1s ease-out 1.2s forwards;">
                        <div class="gallery-item" style="position: relative; border-radius: 15px; overflow: hidden; cursor: pointer; transition: all 0.3s ease; background: white; padding: 15px; box-shadow: 0 8px 25px rgba(0,0,0,0.1); transform: rotate(-2deg);" onclick="openGalleryModal('team')">
                            @if(hasImageContent('team_gallery_image3'))
                                <img src="{{ getContent('team_gallery_image3') }}" alt="Award Ceremony" style="width: 100%; height: 200px; object-fit: cover; border-radius: 10px;">
                            @else
                                <img src="{{ asset('assets/img/CO4.jpg') }}" alt="Award Ceremony" style="width: 100%; height: 200px; object-fit: cover; border-radius: 10px;">
                            @endif

                            <!-- Always visible blur overlay with + -->
                            <div style="position: absolute; top: 15px; left: 15px; right: 15px; bottom: 15px; background: rgba(0,0,0,0.4); backdrop-filter: blur(3px); display: flex; align-items: center; justify-content: center; border-radius: 10px;">
                                <div style="text-align: center; color: white;">
                                    <div style="font-size: 3rem; font-weight: 700; margin-bottom: 0.5rem; text-shadow: 0 2px 4px rgba(0,0,0,0.5);">+</div>
                                    <h6 style="color: white; margin: 0; font-size: 1rem; font-weight: 600; text-shadow: 0 1px 2px rgba(0,0,0,0.5);">More Photos</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div style="position: sticky; top: 2rem;">
                    <div style="display: inline-block; background: rgba(91, 163, 176, 0.1); color: #5ba3b0; padding: 0.5rem 1rem; border-radius: 20px; font-size: 0.9rem; font-weight: 600; margin-bottom: 1.5rem; opacity: 0; animation: fadeInRight 1s ease-out 0.3s forwards;">
                        {{ getContent('team_gallery_badge', 'Team Events') }}
                    </div>
                    <h2 style="font-size: 2.4rem; font-weight: 600; color: #2a2a2a; margin-bottom: 2rem; opacity: 0; animation: fadeInRight 1s ease-out 0.6s forwards;">
                        {{ getContent('team_gallery_title', 'Team Building & Company Events') }}
                    </h2>
                    <div style="width: 60px; height: 4px; background: linear-gradient(90deg, #5ba3b0, #4a8a96); border-radius: 2px; margin-bottom: 2rem; opacity: 0; animation: scaleX 1s ease-out 0.9s forwards; transform-origin: left;"></div>

                    <p style="font-size: 1.1rem; color: #6c757d; line-height: 1.7; opacity: 0; animation: fadeInRight 1s ease-out 1.2s forwards;">
                        {{ getContent('team_gallery_description', 'Celebrating milestones, building relationships, and fostering the MTC family spirit through memorable events and activities.') }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modal for Single Image View -->
<div id="imageModal" style="display: none; position: fixed; z-index: 10000; left: 0; top: 0; width: 100%; height: 100%; background-color: rgba(0,0,0,0.9); opacity: 0; transition: opacity 0.3s ease;">
    <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); max-width: 90%; max-height: 90%; text-align: center;">
        <!-- Back Button for Single Image -->
        <button id="imageBackButton" onclick="backToGallery()" style="position: absolute; top: -60px; left: 0; background: rgba(255,255,255,0.1); border: 2px solid rgba(255,255,255,0.3); color: white; padding: 8px 16px; border-radius: 20px; cursor: pointer; font-size: 0.9rem; font-weight: 600; transition: all 0.3s ease; display: none; align-items: center; gap: 6px;">
            <i class="fas fa-arrow-left"></i>
            <span>Back to Gallery</span>
        </button>

        <img id="modalImage" style="max-width: 100%; max-height: 80vh; border-radius: 10px; box-shadow: 0 20px 60px rgba(0,0,0,0.5);">
        <div id="modalTitle" style="color: white; font-size: 1.5rem; margin-top: 1rem; font-weight: 600;"></div>
        <button onclick="closeImageModal()" style="position: absolute; top: -60px; right: 0; background: rgba(255,255,255,0.1); border: none; color: white; font-size: 1.5rem; cursor: pointer; width: 40px; height: 40px; display: flex; align-items: center; justify-content: center; border-radius: 50%; transition: background 0.3s ease;">
            <i class="fas fa-times"></i>
        </button>
    </div>
</div>

<!-- Modal for Gallery View -->
<div id="galleryModal" style="display: none; position: fixed; z-index: 10000; left: 0; top: 0; width: 100%; height: 100%; background-color: rgba(0,0,0,0.95); opacity: 0; transition: opacity 0.3s ease;">
    <div style="position: relative; width: 100%; height: 100%; padding: 2rem;">
        <!-- Header with title and controls -->
        <div style="position: absolute; top: 20px; left: 0; right: 0; display: flex; align-items: center; justify-content: space-between; padding: 0 2rem; z-index: 10;">
            <!-- Back Button -->
            <button onclick="closeGalleryModal()" style="background: rgba(255,255,255,0.1); border: 2px solid rgba(255,255,255,0.3); color: white; padding: 10px 20px; border-radius: 25px; cursor: pointer; font-size: 1rem; font-weight: 600; transition: all 0.3s ease; display: flex; align-items: center; gap: 8px;">
                <i class="fas fa-arrow-left"></i>
                <span>Back</span>
            </button>

            <!-- Title -->
            <h2 id="galleryModalTitle" style="color: white; font-size: 2rem; margin: 0; font-weight: 600; text-align: center; flex: 1;"></h2>

            <!-- Close Button -->
            <button onclick="closeGalleryModal()" style="background: rgba(255,255,255,0.1); border: none; color: white; font-size: 1.5rem; cursor: pointer; width: 45px; height: 45px; display: flex; align-items: center; justify-content: center; border-radius: 50%; transition: background 0.3s ease;">
                <i class="fas fa-times"></i>
            </button>
        </div>

        <div id="galleryGrid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 1.5rem; margin-top: 80px; max-height: calc(100vh - 120px); overflow-y: auto; padding: 1rem;">
            <!-- Gallery images will be dynamically inserted here -->
        </div>
    </div>
</div>

<script>
// Sample gallery data - in real implementation, this would come from your backend
const galleryData = {
    csr: [
        {
            src: '{{ asset("assets/img/BA5.jpg") }}',
            title: 'Bahay Aruga',
            description: 'Support initiative and outreach activities for pediatric cancer patients and their families'
        },
        {
            src: '{{ asset("assets/img/BA4.jpg") }}',
            title: 'Bahay Aruga',
            description: 'Support initiative and outreach activities for pediatric cancer patients and their families'
        },
        {
            src: '{{ asset("assets/img/BA2.jpg") }}',
            title: 'Bahay Aruga',
            description: 'Support initiative and outreach activities for pediatric cancer patients and their families'
        },
        {
            src: '{{ asset("assets/img/BA1.jpg") }}',
            title: 'Bahay Aruga',
            description: 'Support initiative and outreach activities for pediatric cancer patients and their families'
        },
        {
            src: '{{ asset("assets/img/BA3.jpg") }}',
            title: 'Bahay Aruga',
            description: 'Support initiative and outreach activities for pediatric cancer patients and their families'
        },
        {
            src: '{{ asset("assets/img/BA6.jpg") }}',
            title: 'Bahay Aruga',
            description: 'Support initiative and outreach activities for pediatric cancer patients and their families'
        }
    ],
    team: [
        {
            src: '{{ asset("assets/img/CO1.jpg") }}',
            title: 'Company Outing 2024',
            description: 'A team-building getaway to strengthen camaraderie and celebrate milestones'
        },
        {
            src: '{{ asset("assets/img/CO3.jpeg") }}',
            title: 'Company Outing 2024',
            description: 'A team-building getaway to strengthen camaraderie and celebrate milestones'
        },
        {
            src: '{{ asset("assets/img/CO4.jpg") }}',
            title: 'Company Outing 2024',
            description: 'A team-building getaway to strengthen camaraderie and celebrate milestones'
        },
        {
            src: '{{ asset("assets/img/CO5.jpg") }}',
            title: 'Company Outing 2024',
            description: 'A team-building getaway to strengthen camaraderie and celebrate milestones'
        },
        {
            src: '{{ asset("assets/img/CO2.jpg") }}',
            title: 'Company Outing 2024',
            description: 'A team-building getaway to strengthen camaraderie and celebrate milestones'
        }
    ]
};

let currentGalleryType = null;

function openImageModal(element) {
    const img = element.querySelector('img');
    const title = element.querySelector('h6') ? element.querySelector('h6').textContent : element.querySelector('h5').textContent;

    document.getElementById('modalImage').src = img.src;
    document.getElementById('modalTitle').textContent = title;

    // Show/hide back button based on whether we came from gallery
    const backButton = document.getElementById('imageBackButton');
    if (currentGalleryType) {
        backButton.style.display = 'flex';
    } else {
        backButton.style.display = 'none';
    }

    const modal = document.getElementById('imageModal');
    // Prevent horizontal scroll
    document.body.style.overflow = 'hidden';
    document.documentElement.style.overflow = 'hidden';

    modal.style.display = 'block';
    setTimeout(() => {
        modal.style.opacity = '1';
    }, 10);
}

function closeImageModal() {
    const modal = document.getElementById('imageModal');
    modal.style.opacity = '0';
    setTimeout(() => {
        modal.style.display = 'none';
        // Restore scroll properly
        document.body.style.overflow = 'auto';
        document.documentElement.style.overflow = 'auto';
    }, 300);
}

function backToGallery() {
    closeImageModal();
    setTimeout(() => {
        if (currentGalleryType) {
            openGalleryModal(currentGalleryType);
        }
    }, 350);
}

function openGalleryModal(type) {
    currentGalleryType = type;
    const modal = document.getElementById('galleryModal');
    const title = type === 'csr' ? 'CSR Activities & Community Outreach' : 'Team Building & Company Events';
    const data = galleryData[type];

    document.getElementById('galleryModalTitle').textContent = title;

    const grid = document.getElementById('galleryGrid');
    grid.innerHTML = '';

    data.forEach((item, index) => {
        const imageElement = document.createElement('div');
        imageElement.style.cssText = 'position: relative; cursor: pointer; transition: transform 0.3s ease; border-radius: 10px; overflow: hidden; background: white; padding: 10px;';
        imageElement.innerHTML = `
            <img src="${item.src}" alt="${item.title}" style="width: 100%; height: 250px; object-fit: cover; border-radius: 8px;">
            <div style="position: absolute; top: 10px; left: 10px; right: 10px; bottom: 10px; background: linear-gradient(135deg, rgba(50, 109, 120, 0.8), rgba(91, 163, 176, 0.8)); opacity: 0; transition: opacity 0.3s ease; display: flex; align-items: center; justify-content: center; border-radius: 8px; flex-direction: column;">
                <h6 style="color: white; margin: 0; font-size: 1.1rem; font-weight: 600; text-align: center;">${item.title}</h6>
                <p style="color: rgba(255,255,255,0.9); margin: 0.5rem 0 0 0; font-size: 0.9rem; text-align: center;">${item.description}</p>
            </div>
        `;

        imageElement.onmouseover = () => {
            imageElement.style.transform = 'scale(1.05)';
            imageElement.querySelector('div').style.opacity = '1';
        };

        imageElement.onmouseout = () => {
            imageElement.style.transform = 'scale(1)';
            imageElement.querySelector('div').style.opacity = '0';
        };

        imageElement.onclick = () => {
            document.getElementById('modalImage').src = item.src;
            document.getElementById('modalTitle').textContent = item.title;
            closeGalleryModal();
            setTimeout(() => {
                const modal = document.getElementById('imageModal');
                const backButton = document.getElementById('imageBackButton');
                backButton.style.display = 'flex';

                // Prevent horizontal scroll
                document.body.style.overflow = 'hidden';
                document.documentElement.style.overflow = 'hidden';

                modal.style.display = 'block';
                setTimeout(() => {
                    modal.style.opacity = '1';
                }, 10);
            }, 100);
        };

        grid.appendChild(imageElement);
    });

    // Prevent horizontal scroll
    document.body.style.overflow = 'hidden';
    document.documentElement.style.overflow = 'hidden';

    modal.style.display = 'block';
    setTimeout(() => {
        modal.style.opacity = '1';
    }, 10);
}

function closeGalleryModal() {
    currentGalleryType = null;
    const modal = document.getElementById('galleryModal');
    modal.style.opacity = '0';
    setTimeout(() => {
        modal.style.display = 'none';
        // Restore scroll properly
        document.body.style.overflow = 'auto';
        document.documentElement.style.overflow = 'auto';
    }, 300);
}

// Close modals when clicking outside
document.getElementById('imageModal').onclick = function(event) {
    if (event.target === this) {
        closeImageModal();
    }
};

document.getElementById('galleryModal').onclick = function(event) {
    if (event.target === this) {
        closeGalleryModal();
    }
};

// Close modals with Escape key
document.addEventListener('keydown', function(event) {
    if (event.key === 'Escape') {
        if (document.getElementById('imageModal').style.display === 'block') {
            closeImageModal();
        }
        if (document.getElementById('galleryModal').style.display === 'block') {
            closeGalleryModal();
        }
    }
});

// Prevent body from scrolling when page loads
document.addEventListener('DOMContentLoaded', function() {
    // Ensure body scroll is restored on page load
    document.body.style.overflow = 'auto';
    document.documentElement.style.overflow = 'auto';
});
</script>

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

    /* Gallery hover effects */
    .gallery-item:hover {
        transform: rotate(0deg) translateY(-5px) !important;
        box-shadow: 0 15px 35px rgba(0,0,0,0.2) !important;
    }

    .gallery-item:hover .gallery-overlay {
        opacity: 1;
    }

    /* CTA button hover effect */
    section a[href*="contact"]:hover {
        transform: translateY(-3px);
        box-shadow: 0 12px 40px rgba(50, 109, 120, 0.4) !important;
    }

    /* Hero button hover effects */
    div a[href*="#csr-gallery"]:hover,
    div a[href*="#team-gallery"]:hover {
        transform: translateY(-3px);
        box-shadow: 0 8px 25px rgba(50, 109, 120, 0.2);
    }

    /* Modal button hover effects */
    button:hover {
        background: rgba(255,255,255,0.3) !important;
    }

    button[onclick*="closeGalleryModal"]:hover {
        background: rgba(255,255,255,0.2) !important;
        border-color: rgba(255,255,255,0.5) !important;
    }

    #imageBackButton:hover {
        background: rgba(255,255,255,0.2) !important;
        border-color: rgba(255,255,255,0.5) !important;
    }

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

        /* Reset gallery transforms on mobile */
        .gallery-item {
            transform: none !important;
        }

        .gallery-item img {
            height: 150px !important;
        }

        /* Mobile breadcrumb fix */
        div[style*="position: absolute"][style*="top: 20px"][style*="left: 70px"] {
            top: 10px !important;
            left: 20px !important;
        }

        /* Mobile modal adjustments */
        #galleryGrid {
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)) !important;
            gap: 1rem !important;
        }

        #modalImage {
            max-height: 70vh !important;
        }

        button[onclick*="close"] {
            top: -30px !important;
            right: -30px !important;
            width: 35px !important;
            height: 35px !important;
            font-size: 1.5rem !important;
        }
    }

    @media (max-width: 576px) {
        #galleryGrid {
            grid-template-columns: 1fr !important;
            margin-top: 60px !important;
        }

        #galleryModalTitle {
            font-size: 1.5rem !important;
        }

        .gallery-item img {
            height: 120px !important;
        }
    }
</style>

@endsection
