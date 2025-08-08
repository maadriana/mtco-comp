@extends('layouts.app')

@section('title', 'Galleries | Mendoza Tugano & Co., CPAs')

@section('content')

<!-- Clean Hero Section -->
<div class="hero-section">
    <!-- Breadcrumb -->
    <div class="breadcrumb-container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item">
                    <a href="{{ url('/') }}" class="breadcrumb-link">
                        <i class="fas fa-home me-1"></i>Home
                    </a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{ url('/#faq') }}" class="breadcrumb-link">MTC Care</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Galleries</li>
            </ol>
        </nav>
    </div>

    <!-- Geometric Elements -->
    <div class="geometric-element geo-1"></div>
    <div class="geometric-element geo-2"></div>
    <div class="geometric-element geo-3"></div>
    <div class="geometric-element geo-4"></div>

    <!-- Hero Content -->
    <div class="container hero-content">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-10">
                <div class="hero-text">
                    <h1 class="hero-title">
                        {{ getContent('galleries_hero_title', 'Galleries') }}
                    </h1>
                    <p class="hero-subtitle">
                        {{ getContent('galleries_hero_subtitle', 'Moments that matter deserve to be shared. Discover our visual showcase of CSR activities, team events, and community engagements.') }}
                    </p>
                    <div class="hero-buttons">
                        <a href="#csr-gallery" class="btn-hero btn-csr">
                            <i class="fas fa-heart me-2"></i>{{ getContent('galleries_cta_csr', 'CSR Activities') }}
                        </a>
                        <a href="#team-gallery" class="btn-hero btn-team">
                            <i class="fas fa-users me-2"></i>{{ getContent('galleries_cta_team', 'Team Events') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Gallery Overview Section -->
<section class="overview-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="overview-header">
                    <div class="section-badge">
                        {{ getContent('galleries_overview_badge', 'Visual Showcase') }}
                    </div>
                    <h2 class="section-title">
                        {{ getContent('galleries_overview_title', 'Capturing Our Journey') }}
                    </h2>
                    <div class="title-underline"></div>
                </div>

                <div class="overview-content">
                    <p class="overview-text">
                        {{ getContent('galleries_overview_paragraph1', 'In this section, you\'ll find a visual showcase of our CSR activities, team-building events, firm milestones, and community engagements.') }}
                    </p>

                    <p class="overview-text">
                        {{ getContent('galleries_overview_paragraph2', 'From outreach missions and volunteer efforts to company celebrations and employee-led initiatives, our gallery highlights the heart of MTC, our people and their passion for making a difference.') }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CSR Activities Gallery -->
<section id="csr-gallery" class="gallery-section csr-section">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <div class="gallery-info">
                    <div class="section-badge csr-badge">
                        {{ getContent('csr_gallery_badge', 'CSR Activities') }}
                    </div>
                    <h2 class="gallery-title">
                        {{ getContent('csr_gallery_title', 'CSR Activities & Community Outreach') }}
                    </h2>
                    <div class="title-underline left-align"></div>

                    <p class="gallery-description">
                        {{ getContent('csr_gallery_description', 'Our commitment to social responsibility through various community programs and environmental initiatives.') }}
                    </p>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="row g-4">
                    <!-- CSR Image 1 -->
                    <div class="col-lg-6 gallery-item-wrapper">
                        <div class="gallery-item"
                             data-action="single"
                             data-src="{{ hasImageContent('csr_gallery_image1') ? getContent('csr_gallery_image1') : asset('assets/img/BA5.jpg') }}"
                             data-title="{{ getContent('csr_gallery_item1_title', 'Medical Mission') }}">
                            <div class="gallery-image-container">
                                <img src="{{ hasImageContent('csr_gallery_image1') ? getContent('csr_gallery_image1') : asset('assets/img/BA5.jpg') }}"
                                     alt="Community Outreach"
                                     class="gallery-image">
                            </div>
                            <div class="gallery-overlay">
                                <div class="overlay-content">
                                    <i class="fas fa-search-plus"></i>
                                    <h6>{{ getContent('csr_gallery_item1_title', 'Medical Mission') }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- CSR Image 2 -->
                    <div class="col-lg-6 gallery-item-wrapper">
                        <div class="gallery-item"
                             data-action="single"
                             data-src="{{ hasImageContent('csr_gallery_image2') ? getContent('csr_gallery_image2') : asset('assets/img/BA4.jpg') }}"
                             data-title="{{ getContent('csr_gallery_item2_title', 'Tree Planting Activity') }}">
                            <div class="gallery-image-container">
                                <img src="{{ hasImageContent('csr_gallery_image2') ? getContent('csr_gallery_image2') : asset('assets/img/BA4.jpg') }}"
                                     alt="Tree Planting"
                                     class="gallery-image">
                            </div>
                            <div class="gallery-overlay">
                                <div class="overlay-content">
                                    <i class="fas fa-search-plus"></i>
                                    <h6>{{ getContent('csr_gallery_item2_title', 'Tree Planting Activity') }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- CSR Image 3 -->
                    <div class="col-lg-6 gallery-item-wrapper">
                        <div class="gallery-item"
                             data-action="single"
                             data-src="{{ hasImageContent('csr_gallery_image3') ? getContent('csr_gallery_image3') : asset('assets/img/BA2.jpg') }}"
                             data-title="{{ getContent('csr_gallery_item3_title', 'Scholarship Program') }}">
                            <div class="gallery-image-container">
                                <img src="{{ hasImageContent('csr_gallery_image3') ? getContent('csr_gallery_image3') : asset('assets/img/BA2.jpg') }}"
                                     alt="Scholarship Program"
                                     class="gallery-image">
                            </div>
                            <div class="gallery-overlay">
                                <div class="overlay-content">
                                    <i class="fas fa-search-plus"></i>
                                    <h6>{{ getContent('csr_gallery_item3_title', 'Scholarship Program') }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- CSR Image 4 - More Photos -->
                    <div class="col-lg-6 gallery-item-wrapper">
                        <div class="gallery-item more-photos" data-action="gallery" data-gallery="csr">
                            <div class="gallery-image-container">
                                <img src="{{ hasImageContent('csr_gallery_image4') ? getContent('csr_gallery_image4') : asset('assets/img/BA1.jpg') }}"
                                     alt="Food Drive"
                                     class="gallery-image">
                            </div>
                            <div class="more-photos-overlay">
                                <div class="more-photos-content">
                                    <div class="plus-icon">+</div>
                                    <h6>More Photos</h6>
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
<section id="team-gallery" class="gallery-section team-section">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <div class="row g-4">
                    <!-- Team Image 1 -->
                    <div class="col-lg-12 gallery-item-wrapper">
                        <div class="gallery-item large-item"
                             data-action="single"
                             data-src="{{ hasImageContent('team_gallery_image1') ? getContent('team_gallery_image1') : asset('assets/img/CO1.jpg') }}"
                             data-title="{{ getContent('team_gallery_item1_title', 'Annual Company Celebration') }}">
                            <div class="gallery-image-container large">
                                <img src="{{ hasImageContent('team_gallery_image1') ? getContent('team_gallery_image1') : asset('assets/img/CO1.jpg') }}"
                                     alt="Annual Party"
                                     class="gallery-image">
                            </div>
                            <div class="gallery-overlay team-overlay">
                                <div class="overlay-content large">
                                    <i class="fas fa-search-plus"></i>
                                    <h5>{{ getContent('team_gallery_item1_title', 'Annual Company Celebration') }}</h5>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Team Image 2 -->
                    <div class="col-lg-6 gallery-item-wrapper">
                        <div class="gallery-item"
                             data-action="single"
                             data-src="{{ hasImageContent('team_gallery_image2') ? getContent('team_gallery_image2') : asset('assets/img/CO3.jpeg') }}"
                             data-title="{{ getContent('team_gallery_item2_title', 'Team Building Activities') }}">
                            <div class="gallery-image-container">
                                <img src="{{ hasImageContent('team_gallery_image2') ? getContent('team_gallery_image2') : asset('assets/img/CO3.jpeg') }}"
                                     alt="Team Building"
                                     class="gallery-image">
                            </div>
                            <div class="gallery-overlay team-overlay">
                                <div class="overlay-content">
                                    <i class="fas fa-search-plus"></i>
                                    <h6>{{ getContent('team_gallery_item2_title', 'Team Building Activities') }}</h6>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Team Image 3 - More Photos -->
                    <div class="col-lg-6 gallery-item-wrapper">
                        <div class="gallery-item more-photos" data-action="gallery" data-gallery="team">
                            <div class="gallery-image-container">
                                <img src="{{ hasImageContent('team_gallery_image3') ? getContent('team_gallery_image3') : asset('assets/img/CO4.jpg') }}"
                                     alt="Award Ceremony"
                                     class="gallery-image">
                            </div>
                            <div class="more-photos-overlay">
                                <div class="more-photos-content">
                                    <div class="plus-icon">+</div>
                                    <h6>More Photos</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="gallery-info">
                    <div class="section-badge team-badge">
                        {{ getContent('team_gallery_badge', 'Team Events') }}
                    </div>
                    <h2 class="gallery-title">
                        {{ getContent('team_gallery_title', 'Team Building & Company Events') }}
                    </h2>
                    <div class="title-underline left-align team-underline"></div>

                    <p class="gallery-description">
                        {{ getContent('team_gallery_description', 'Celebrating milestones, building relationships, and fostering the MTC family spirit through memorable events and activities.') }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Single Image Modal -->
<div id="singleImageModal" class="modal-overlay">
    <div class="modal-container">
        <div class="modal-header">
            <button id="backToGalleryBtn" class="modal-btn back-btn" style="display: none;">
                <i class="fas fa-arrow-left"></i>
                <span>Back to Gallery</span>
            </button>
            <button id="closeSingleBtn" class="modal-btn back-btn">
                <i class="fas fa-arrow-left"></i>
                <span>Back</span>
            </button>
            <!-- No close button circle in single image view -->
        </div>
        <div class="modal-content">
            <div class="modal-image-wrapper">
                <img id="singleModalImage" src="" alt="" class="modal-image">
            </div>
            <div id="singleModalTitle" class="modal-title"></div>
        </div>
    </div>
</div>

<!-- Gallery Modal -->
<div id="galleryModal" class="modal-overlay">
    <div class="modal-container full">
        <div class="modal-header">
            <button id="closeGalleryBtn" class="modal-btn back-btn">
                <i class="fas fa-arrow-left"></i>
                <span>Back</span>
            </button>
            <h2 id="galleryModalTitle" class="modal-main-title"></h2>
            <!-- No close button circle in gallery view -->
        </div>
        <div class="gallery-grid-container">
            <div id="galleryGrid" class="gallery-grid"></div>
        </div>
    </div>
</div>

<script>
// Gallery data
const galleryData = {
    csr: [
        { src: '{{ asset("assets/img/BA5.jpg") }}', title: 'Bahay Aruga', description: 'Support initiative and outreach activities for pediatric cancer patients and their families' },
        { src: '{{ asset("assets/img/BA4.jpg") }}', title: 'Bahay Aruga', description: 'Support initiative and outreach activities for pediatric cancer patients and their families' },
        { src: '{{ asset("assets/img/BA2.jpg") }}', title: 'Bahay Aruga', description: 'Support initiative and outreach activities for pediatric cancer patients and their families' },
        { src: '{{ asset("assets/img/BA1.jpg") }}', title: 'Bahay Aruga', description: 'Support initiative and outreach activities for pediatric cancer patients and their families' },
        { src: '{{ asset("assets/img/BA3.jpg") }}', title: 'Bahay Aruga', description: 'Support initiative and outreach activities for pediatric cancer patients and their families' },
        { src: '{{ asset("assets/img/BA6.jpg") }}', title: 'Bahay Aruga', description: 'Support initiative and outreach activities for pediatric cancer patients and their families' }
    ],
    team: [
        { src: '{{ asset("assets/img/CO1.jpg") }}', title: 'Company Outing 2024', description: 'A team-building getaway to strengthen camaraderie and celebrate milestones' },
        { src: '{{ asset("assets/img/CO3.jpeg") }}', title: 'Company Outing 2024', description: 'A team-building getaway to strengthen camaraderie and celebrate milestones' },
        { src: '{{ asset("assets/img/CO4.jpg") }}', title: 'Company Outing 2024', description: 'A team-building getaway to strengthen camaraderie and celebrate milestones' },
        { src: '{{ asset("assets/img/CO5.jpg") }}', title: 'Company Outing 2024', description: 'A team-building getaway to strengthen camaraderie and celebrate milestones' },
        { src: '{{ asset("assets/img/CO2.jpg") }}', title: 'Company Outing 2024', description: 'A team-building getaway to strengthen camaraderie and celebrate milestones' }
    ]
};

class GallerySystem {
    constructor() {
        this.currentGalleryType = null;
        this.modalOpen = false; // Track if any modal is open
        this.scrollbarWidth = 0; // Cache scrollbar width
        this.init();
    }

    init() {
        this.calculateScrollbarWidth();
        this.bindEvents();
        this.setupScrolling();
    }

    calculateScrollbarWidth() {
        // Calculate once and cache
        this.scrollbarWidth = window.innerWidth - document.documentElement.clientWidth;
    }

    bindEvents() {
        // Gallery item clicks
        document.addEventListener('click', (e) => {
            const galleryItem = e.target.closest('.gallery-item');
            if (galleryItem) {
                e.preventDefault();
                e.stopPropagation();
                this.handleGalleryClick(galleryItem);
            }
        });

        // Modal button events - updated for new button structure
        document.getElementById('closeSingleBtn').addEventListener('click', () => this.closeSingleModal());
        document.getElementById('closeGalleryBtn').addEventListener('click', () => this.closeGalleryModal());
        document.getElementById('backToGalleryBtn').addEventListener('click', () => this.backToGallery());

        // Modal overlay clicks
        document.getElementById('singleImageModal').addEventListener('click', (e) => {
            if (e.target === e.currentTarget) this.closeSingleModal();
        });
        document.getElementById('galleryModal').addEventListener('click', (e) => {
            if (e.target === e.currentTarget) this.closeGalleryModal();
        });

        // Keyboard events
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Escape') {
                this.closeSingleModal();
                this.closeGalleryModal();
            }
        });
    }

    setupScrolling() {
        // Smooth scroll for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(link => {
            link.addEventListener('click', (e) => {
                const href = link.getAttribute('href');
                if (href !== '#') {
                    e.preventDefault();
                    const target = document.querySelector(href);
                    if (target) {
                        target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                    }
                }
            });
        });
    }

    // Manage body lock state
    lockBody() {
        if (!this.modalOpen) {
            document.body.style.paddingRight = `${this.scrollbarWidth}px`;
            document.body.style.overflow = 'hidden';
            this.modalOpen = true;
        }
    }

    unlockBody() {
        if (this.modalOpen) {
            document.body.style.overflow = 'auto';
            document.body.style.paddingRight = '';
            this.modalOpen = false;
        }
    }

    handleGalleryClick(item) {
        const action = item.dataset.action;

        if (action === 'single') {
            this.openSingleImage(item.dataset.src, item.dataset.title);
        } else if (action === 'gallery') {
            this.openGalleryModal(item.dataset.gallery);
        }
    }

    openSingleImage(src, title) {
        const modal = document.getElementById('singleImageModal');
        const img = document.getElementById('singleModalImage');
        const titleEl = document.getElementById('singleModalTitle');
        const backToGalleryBtn = document.getElementById('backToGalleryBtn');
        const closeSingleBtn = document.getElementById('closeSingleBtn');

        img.src = src;
        img.alt = title;
        titleEl.textContent = title;

        // Show appropriate back button based on context
        if (this.currentGalleryType) {
            // Coming from gallery - show "Back to Gallery" button
            backToGalleryBtn.style.display = 'flex';
            closeSingleBtn.style.display = 'none';
        } else {
            // Direct access - show "Back" button
            backToGalleryBtn.style.display = 'none';
            closeSingleBtn.style.display = 'flex';
        }

        this.showModal(modal);
    }

    openGalleryModal(type) {
        this.currentGalleryType = type;
        const modal = document.getElementById('galleryModal');
        const title = type === 'csr' ? 'CSR Activities & Community Outreach' : 'Team Building & Company Events';

        document.getElementById('galleryModalTitle').textContent = title;
        this.populateGallery(type);
        this.showModal(modal);
    }

    populateGallery(type) {
        const grid = document.getElementById('galleryGrid');
        const data = galleryData[type];

        grid.innerHTML = '';

        data.forEach(item => {
            const gridItem = document.createElement('div');
            gridItem.className = 'grid-item';
            gridItem.innerHTML = `
                <div class="grid-image-wrapper">
                    <img src="${item.src}" alt="${item.title}" class="grid-image">
                    <div class="grid-overlay">
                        <h6>${item.title}</h6>
                        <p>${item.description}</p>
                    </div>
                </div>
            `;

            gridItem.addEventListener('click', () => {
                // Hide gallery modal first, then show single image
                this.hideModalElement(document.getElementById('galleryModal'));
                setTimeout(() => this.showSingleFromGallery(item.src, item.title), 50);
            });

            grid.appendChild(gridItem);
        });
    }

    showSingleFromGallery(src, title) {
        const singleModal = document.getElementById('singleImageModal');
        const img = document.getElementById('singleModalImage');
        const titleEl = document.getElementById('singleModalTitle');
        const backToGalleryBtn = document.getElementById('backToGalleryBtn');
        const closeSingleBtn = document.getElementById('closeSingleBtn');

        img.src = src;
        img.alt = title;
        titleEl.textContent = title;

        // Always show "Back to Gallery" when coming from gallery
        backToGalleryBtn.style.display = 'flex';
        closeSingleBtn.style.display = 'none';

        // Show modal without affecting body (already locked)
        singleModal.style.display = 'flex';
        requestAnimationFrame(() => {
            singleModal.classList.add('active');
        });
    }

    backToGallery() {
        const singleModal = document.getElementById('singleImageModal');
        const galleryModal = document.getElementById('galleryModal');

        // Hide single modal first
        this.hideModalElement(singleModal);

        // Show gallery modal after short delay
        setTimeout(() => {
            galleryModal.style.display = 'flex';
            requestAnimationFrame(() => {
                galleryModal.classList.add('active');
            });
        }, 50);
    }

    showModal(modal) {
        this.lockBody();
        modal.style.display = 'flex';
        requestAnimationFrame(() => {
            modal.classList.add('active');
        });
    }

    hideModalElement(modal) {
        modal.classList.remove('active');
        setTimeout(() => {
            modal.style.display = 'none';
        }, 300);
    }

    closeSingleModal() {
        const modal = document.getElementById('singleImageModal');
        this.hideModalElement(modal);
        setTimeout(() => {
            this.unlockBody();
        }, 300);
    }

    closeGalleryModal() {
        const modal = document.getElementById('galleryModal');
        this.currentGalleryType = null;
        this.hideModalElement(modal);
        setTimeout(() => {
            this.unlockBody();
        }, 300);
    }
}

// Initialize when DOM is ready
document.addEventListener('DOMContentLoaded', () => {
    new GallerySystem();
});
</script>

<style>
/* Reset and Base Styles */
* {
    box-sizing: border-box;
}

.hero-section {
    position: relative;
    margin-top: -1.5rem;
    background: #f8fafb;
    min-height: 70vh;
    display: flex;
    align-items: center;
    overflow: hidden;
}

.breadcrumb-container {
    position: absolute;
    top: 20px;
    left: 70px;
    z-index: 10;
    background: rgba(255, 255, 255, 0.95);
    padding: 10px 20px;
    border-radius: 6px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
}

.breadcrumb {
    font-size: 0.9rem;
}

.breadcrumb-link {
    color: #326D78;
    text-decoration: none;
    font-weight: 500;
}

.breadcrumb-item + .breadcrumb-item::before {
    content: "›";
    color: #6c757d;
    font-weight: bold;
}

.breadcrumb-item.active {
    color: #6c757d;
    font-weight: 500;
}

/* Geometric Elements */
.geometric-element {
    position: absolute;
    z-index: 1;
}

.geo-1 {
    top: 15%;
    right: 8%;
    width: 120px;
    height: 120px;
    background: rgba(50, 109, 120, 0.1);
    border-radius: 50%;
    animation: float1 6s ease-in-out infinite;
}

.geo-2 {
    top: 60%;
    left: 12%;
    width: 80px;
    height: 80px;
    background: rgba(91, 163, 176, 0.15);
    transform: rotate(45deg);
    border-radius: 20px;
    animation: float2 8s ease-in-out infinite;
}

.geo-3 {
    bottom: 20%;
    right: 20%;
    width: 60px;
    height: 60px;
    background: rgba(74, 138, 150, 0.2);
    border-radius: 50%;
    animation: float3 7s ease-in-out infinite;
}

.geo-4 {
    top: 30%;
    left: 25%;
    width: 40px;
    height: 40px;
    background: rgba(50, 109, 120, 0.25);
    transform: rotate(30deg);
    border-radius: 8px;
    animation: rotate 20s linear infinite;
}

/* Hero Content */
.hero-content {
    position: relative;
    z-index: 2;
}

.hero-text {
    text-align: center;
    padding: 2rem 0;
}

.hero-title {
    font-size: 3.7rem;
    font-weight: 600;
    color: #2a2a2a;
    line-height: 1.1;
    margin-bottom: 1.5rem;
    opacity: 0;
    animation: fadeInUp 1s ease-out 0.3s forwards;
}

.hero-subtitle {
    font-size: 1.4rem;
    color: #6c757d;
    line-height: 1.6;
    margin-bottom: 2rem;
    max-width: 600px;
    margin-left: auto;
    margin-right: auto;
    opacity: 0;
    animation: fadeInUp 1s ease-out 0.6s forwards;
}

.hero-buttons {
    display: flex;
    gap: 1rem;
    flex-wrap: wrap;
    justify-content: center;
    opacity: 0;
    animation: fadeInUp 1s ease-out 0.9s forwards;
}

.btn-hero {
    background: white;
    padding: 1rem 1.5rem;
    border-radius: 12px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.06);
    transition: all 0.3s ease;
    text-decoration: none;
    font-weight: 600;
    display: inline-flex;
    align-items: center;
}

.btn-csr {
    border-left: 4px solid #326D78;
    color: #326D78;
}

.btn-team {
    border-left: 4px solid #5ba3b0;
    color: #5ba3b0;
}

.btn-hero:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 25px rgba(50, 109, 120, 0.2);
    text-decoration: none;
}

/* Section Styles */
.overview-section {
    padding: 6rem 0;
    background: white;
}

.gallery-section {
    padding: 6rem 0;
}

.csr-section {
    background: #f8fafb;
}

.team-section {
    background: white;
}

.overview-header,
.gallery-info {
    text-align: center;
    margin-bottom: 4rem;
}

.gallery-info {
    position: sticky;
    top: 2rem;
    text-align: left;
}

.section-badge {
    display: inline-block;
    padding: 0.5rem 1rem;
    border-radius: 20px;
    font-size: 0.9rem;
    font-weight: 600;
    margin-bottom: 1.5rem;
    opacity: 0;
    animation: fadeInUp 1s ease-out 0.3s forwards;
}

.section-badge:not(.csr-badge):not(.team-badge) {
    background: rgba(50, 109, 120, 0.1);
    color: #326D78;
}

.csr-badge {
    background: rgba(50, 109, 120, 0.1);
    color: #326D78;
    animation: fadeInLeft 1s ease-out 0.3s forwards;
}

.team-badge {
    background: rgba(91, 163, 176, 0.1);
    color: #5ba3b0;
    animation: fadeInRight 1s ease-out 0.3s forwards;
}

.section-title,
.gallery-title {
    font-size: 2.6rem;
    font-weight: 600;
    color: #2a2a2a;
    margin-bottom: 2rem;
    opacity: 0;
}

.section-title {
    animation: fadeInUp 1s ease-out 0.6s forwards;
}

.gallery-title {
    font-size: 2.4rem;
}

.csr-section .gallery-title {
    animation: fadeInLeft 1s ease-out 0.6s forwards;
}

.team-section .gallery-title {
    animation: fadeInRight 1s ease-out 0.6s forwards;
}

.title-underline {
    width: 80px;
    height: 4px;
    background: linear-gradient(90deg, #326D78, #5ba3b0);
    border-radius: 2px;
    margin: 0 auto;
    opacity: 0;
    animation: scaleX 1s ease-out 0.9s forwards;
    transform-origin: center;
}

.left-align {
    margin: 0;
    transform-origin: left;
}

.team-underline {
    background: linear-gradient(90deg, #5ba3b0, #4a8a96);
}

.overview-content {
    max-width: 900px;
    margin: 0 auto;
    text-align: center;
}

.overview-text {
    color: #666;
    font-size: 1.2rem;
    line-height: 1.7;
    margin-bottom: 1.5rem;
    opacity: 0;
}

.overview-text:first-of-type {
    animation: fadeInUp 1s ease-out 1.2s forwards;
}

.overview-text:last-of-type {
    animation: fadeInUp 1s ease-out 1.5s forwards;
    margin-bottom: 0;
}

.gallery-description {
    font-size: 1.1rem;
    color: #6c757d;
    line-height: 1.7;
    opacity: 0;
}

.csr-section .gallery-description {
    animation: fadeInLeft 1s ease-out 1.2s forwards;
}

.team-section .gallery-description {
    animation: fadeInRight 1s ease-out 1.2s forwards;
}

/* Gallery Items */
.gallery-item-wrapper {
    opacity: 0;
}

.csr-section .gallery-item-wrapper:nth-child(1) {
    animation: fadeInRight 1s ease-out 0.6s forwards;
}

.csr-section .gallery-item-wrapper:nth-child(2) {
    animation: fadeInRight 1s ease-out 0.9s forwards;
}

.csr-section .gallery-item-wrapper:nth-child(3) {
    animation: fadeInRight 1s ease-out 1.2s forwards;
}

.csr-section .gallery-item-wrapper:nth-child(4) {
    animation: fadeInRight 1s ease-out 1.5s forwards;
}

.team-section .gallery-item-wrapper:nth-child(1) {
    animation: fadeInLeft 1s ease-out 0.6s forwards;
}

.team-section .gallery-item-wrapper:nth-child(2) {
    animation: fadeInLeft 1s ease-out 0.9s forwards;
}

.team-section .gallery-item-wrapper:nth-child(3) {
    animation: fadeInLeft 1s ease-out 1.2s forwards;
}

.gallery-item {
    position: relative;
    border-radius: 15px;
    overflow: hidden;
    cursor: pointer;
    transition: all 0.3s ease;
    background: white;
    padding: 15px;
    box-shadow: 0 8px 25px rgba(0,0,0,0.1);
    transform: rotate(-2deg);
}

.gallery-item:nth-child(even) {
    transform: rotate(1deg);
}

.gallery-item:nth-child(4n) {
    transform: rotate(2deg);
}

.gallery-item:hover {
    transform: rotate(0deg) translateY(-5px);
    box-shadow: 0 15px 35px rgba(0,0,0,0.2);
}

/* Fixed Image Container to prevent stretching */
.gallery-image-container {
    width: 100%;
    height: 200px;
    border-radius: 10px;
    overflow: hidden;
    position: relative;
}

.gallery-image-container.large {
    height: 250px;
}

.gallery-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center;
    display: block;
}

.gallery-overlay {
    position: absolute;
    top: 15px;
    left: 15px;
    right: 15px;
    bottom: 15px;
    background: linear-gradient(135deg, rgba(50, 109, 120, 0.8), rgba(91, 163, 176, 0.8));
    opacity: 0;
    transition: opacity 0.3s ease;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 10px;
    z-index: 2;
}

.team-overlay {
    background: linear-gradient(135deg, rgba(74, 138, 150, 0.8), rgba(50, 109, 120, 0.8));
}

.overlay-content {
    text-align: center;
    color: white;
}

.overlay-content i {
    font-size: 1.5rem;
    margin-bottom: 0.5rem;
    display: block;
}

.overlay-content.large i {
    font-size: 2rem;
    margin-bottom: 1rem;
}

.overlay-content h5,
.overlay-content h6 {
    color: white;
    margin: 0;
}

.gallery-item:hover .gallery-overlay {
    opacity: 1;
}

/* More Photos Items */
.more-photos {
    position: relative;
}

.more-photos-overlay {
    position: absolute;
    top: 15px;
    left: 15px;
    right: 15px;
    bottom: 15px;
    background: rgba(0,0,0,0.4);
    backdrop-filter: blur(3px);
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 10px;
    z-index: 3;
}

.more-photos-content {
    text-align: center;
    color: white;
}

.plus-icon {
    font-size: 3rem;
    font-weight: 700;
    margin-bottom: 0.5rem;
    text-shadow: 0 2px 4px rgba(0,0,0,0.5);
}

.more-photos-content h6 {
    color: white;
    margin: 0;
    font-size: 1rem;
    font-weight: 600;
    text-shadow: 0 1px 2px rgba(0,0,0,0.5);
}

/* Modal System - Fixed to prevent page shift */
.modal-overlay {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.9);
    z-index: 10000;
    opacity: 0;
    transition: opacity 0.3s ease;
    /* Prevent scrolling within modal */
    overflow: hidden;
}

.modal-overlay.active {
    opacity: 1;
}

/* Prevent body shift when modal opens */
body.modal-open {
    overflow: hidden;
}

.modal-container {
    position: relative;
    width: 100%;
    height: 100vh;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 2rem;
    /* Ensure modal content doesn't cause overflow */
    overflow: hidden;
}

.modal-container.full {
    padding: 1rem;
    overflow: hidden;
}

.modal-header {
    position: absolute;
    top: 20px;
    left: 20px;
    right: 20px;
    display: flex;
    justify-content: flex-start;
    align-items: center;
    z-index: 10001;
}

/* Gallery modal header with title centered */
.modal-container.full .modal-header {
    justify-content: space-between;
}

.modal-main-title {
    color: white;
    font-size: 2rem;
    font-weight: 600;
    margin: 0;
    text-align: center;
    flex: 1;
    margin-left: 2rem; /* Offset for the back button */
}

.modal-btn {
    background: rgba(255, 255, 255, 0.1);
    border: 2px solid rgba(255, 255, 255, 0.3);
    color: white;
    padding: 10px 16px;
    border-radius: 25px;
    cursor: pointer;
    font-size: 1rem;
    font-weight: 600;
    transition: all 0.3s ease;
    display: flex;
    align-items: center;
    gap: 8px;
    backdrop-filter: blur(10px);
}

.modal-btn:hover {
    background: rgba(255, 255, 255, 0.2);
    border-color: rgba(255, 255, 255, 0.5);
}

.close-btn {
    width: 45px;
    height: 45px;
    border-radius: 50%;
    padding: 0;
    justify-content: center;
}

.modal-content {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    max-width: 90%;
    max-height: 80%;
}

.modal-image-wrapper {
    max-width: 100%;
    max-height: 100%;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 20px 60px rgba(0,0,0,0.5);
}

.modal-image {
    max-width: 100%;
    max-height: 80vh;
    width: auto;
    height: auto;
    object-fit: contain;
    display: block;
}

.modal-title {
    color: white;
    font-size: 1.5rem;
    font-weight: 600;
    margin-top: 1.5rem;
    text-align: center;
}

/* Gallery Grid - Fixed scrolling */
.gallery-grid-container {
    margin-top: 80px;
    width: 100%;
    height: calc(100vh - 120px);
    overflow-y: auto;
    overflow-x: hidden;
    padding: 1rem;
    /* Smooth scrolling */
    -webkit-overflow-scrolling: touch;
    scrollbar-width: thin;
    scrollbar-color: rgba(255, 255, 255, 0.3) transparent;
}

/* Custom scrollbar for webkit browsers */
.gallery-grid-container::-webkit-scrollbar {
    width: 8px;
}

.gallery-grid-container::-webkit-scrollbar-track {
    background: transparent;
}

.gallery-grid-container::-webkit-scrollbar-thumb {
    background: rgba(255, 255, 255, 0.3);
    border-radius: 4px;
}

.gallery-grid-container::-webkit-scrollbar-thumb:hover {
    background: rgba(255, 255, 255, 0.5);
}

.gallery-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 1.5rem;
    max-width: 1400px;
    margin: 0 auto;
}

.grid-item {
    cursor: pointer;
    border-radius: 15px;
    overflow: hidden;
    background: white;
    padding: 10px;
    transition: transform 0.3s ease;
}

.grid-item:hover {
    transform: scale(1.03);
}

.grid-image-wrapper {
    position: relative;
    width: 100%;
    height: 250px;
    border-radius: 10px;
    overflow: hidden;
}

.grid-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center;
}

.grid-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(135deg, rgba(50, 109, 120, 0.8), rgba(91, 163, 176, 0.8));
    opacity: 0;
    transition: opacity 0.3s ease;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    padding: 1rem;
}

.grid-item:hover .grid-overlay {
    opacity: 1;
}

.grid-overlay h6 {
    color: white;
    margin: 0 0 0.5rem 0;
    font-size: 1.1rem;
    font-weight: 600;
    text-align: center;
}

.grid-overlay p {
    color: rgba(255,255,255,0.9);
    margin: 0;
    font-size: 0.9rem;
    text-align: center;
    line-height: 1.4;
}

/* Animations */
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

/* Responsive Design */
@media (max-width: 1200px) {
    .hero-title {
        font-size: 3.2rem;
    }

    .section-title,
    .gallery-title {
        font-size: 2.2rem;
    }

    .gallery-grid {
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 1.2rem;
    }
}

@media (max-width: 992px) {
    .hero-title {
        font-size: 2.8rem;
    }

    .section-title,
    .gallery-title {
        font-size: 2rem;
    }

    .gallery-info {
        position: static;
        text-align: center;
        margin-bottom: 3rem;
        margin-top: 3rem;
    }

    .left-align {
        margin: 0 auto;
        transform-origin: center;
    }

    .gallery-section {
        padding: 4rem 0;
    }

    .gallery-grid {
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    }
}

@media (max-width: 768px) {
    .hero-section {
        min-height: 60vh;
    }

    .hero-title {
        font-size: 2.5rem;
    }

    .hero-subtitle {
        font-size: 1.2rem;
    }

    .section-title,
    .gallery-title {
        font-size: 1.8rem;
    }

    .breadcrumb-container {
        top: 10px;
        left: 20px;
        padding: 8px 16px;
    }

    .breadcrumb {
        font-size: 0.8rem;
    }

    .hero-buttons {
        flex-direction: column;
        align-items: center;
    }

    .btn-hero {
        width: 100%;
        max-width: 280px;
        justify-content: center;
    }

    .gallery-item {
        transform: none !important;
    }

    .gallery-image-container {
        height: 180px;
    }

    .gallery-image-container.large {
        height: 200px;
    }

    .overview-section,
    .gallery-section {
        padding: 3rem 0;
    }

    .modal-container {
        padding: 1rem;
    }

    .modal-header {
        top: 10px;
        left: 10px;
        right: 10px;
    }

    .modal-main-title {
        font-size: 1.5rem;
    }

    .modal-btn {
        font-size: 0.9rem;
        padding: 8px 12px;
    }

    .close-btn {
        width: 40px;
        height: 40px;
    }

    .gallery-grid {
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 1rem;
    }

    .grid-image-wrapper {
        height: 200px;
    }

    .gallery-grid-container {
        margin-top: 60px;
        height: calc(100vh - 80px);
    }

    .geo-1, .geo-2, .geo-3, .geo-4 {
        width: 60px;
        height: 60px;
    }
}

@media (max-width: 576px) {
    .hero-title {
        font-size: 2.2rem;
    }

    .hero-subtitle {
        font-size: 1.1rem;
    }

    .section-title,
    .gallery-title {
        font-size: 1.6rem;
    }

    .breadcrumb-container {
        left: 10px;
        right: 10px;
        width: auto;
    }

    .gallery-grid {
        grid-template-columns: 1fr;
        gap: 0.8rem;
    }

    .modal-header {
        flex-direction: column;
        gap: 1rem;
        align-items: stretch;
        top: 5px;
    }

    .modal-main-title {
        order: 1;
        font-size: 1.3rem;
        margin-bottom: 0.5rem;
    }

    .modal-btn.back-btn {
        order: 0;
        align-self: flex-start;
    }

    .close-btn {
        position: absolute;
        top: 0;
        right: 0;
        order: 2;
        width: 35px;
        height: 35px;
    }

    .gallery-image-container {
        height: 150px;
    }

    .gallery-image-container.large {
        height: 170px;
    }

    .grid-image-wrapper {
        height: 180px;
    }

    .overview-text {
        font-size: 1.1rem;
    }

    .gallery-description {
        font-size: 1rem;
    }

    .gallery-grid-container {
        margin-top: 80px;
        padding: 0.5rem;
    }
}

/* Touch optimizations */
@media (hover: none) and (pointer: coarse) {
    .gallery-item:hover {
        transform: none;
        box-shadow: 0 8px 25px rgba(0,0,0,0.1);
    }

    .gallery-overlay {
        opacity: 0.8;
    }

    .grid-overlay {
        opacity: 0.8;
    }

    .btn-hero:hover {
        transform: none;
        box-shadow: 0 4px 20px rgba(0,0,0,0.06);
    }
}

/* Accessibility */
@media (prefers-reduced-motion: reduce) {
    * {
        animation-duration: 0.01ms !important;
        animation-iteration-count: 1 !important;
        transition-duration: 0.01ms !important;
    }

    .geometric-element {
        animation: none !important;
    }
}

/* Focus styles */
.gallery-item:focus,
.btn-hero:focus,
.modal-btn:focus {
    outline: 2px solid #326D78;
    outline-offset: 2px;
}

/* High DPI displays */
@media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
    .gallery-image,
    .modal-image,
    .grid-image {
        image-rendering: -webkit-optimize-contrast;
        image-rendering: crisp-edges;
    }
}

/* Print styles */
@media print {
    .modal-overlay,
    .geometric-element {
        display: none !important;
    }

    .gallery-overlay,
    .more-photos-overlay {
        display: none !important;
    }

    .gallery-item {
        break-inside: avoid;
        page-break-inside: avoid;
    }
}
</style>

@endsection
