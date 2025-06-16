<section id="services" class="services section">

  <div class="container section-title" data-aos="fade-up">
    <h2>{{ getContent('services_main_title', 'Services') }}</h2>
    <p>{!! getContent('services_subtitle', '<span>Check Our</span> <span class="description-title" style="font-weight: bold;">Services</span>') !!}</p>

    <div style="max-width: 900px; margin: 0 auto; padding: 1rem 0; text-align: justify;">
      <p style="font-size: 1.25rem; line-height: 1.8; margin: 2rem 0; color: #444444; font-weight: normal;">
       {{ getContent('services_description_paragraph1', 'Mendoza Tugano & Co., CPAs (MTC) operates as a comprehensive firm, offering an array of services that encompass accounting services, assurance, tax services, financial advisory, and consulting. We extend our expertise to both privately held enterprises and publicly listed companies. Our commitment to excellence and leadership is exemplified by the unwavering dedication of our highly skilled and passionate experts.') }}
      </p>
      <p style="font-size: 1.25rem; line-height: 1.8; margin: 2rem 0; color: #444444; font-weight: normal;">
       {{ getContent('services_description_paragraph2', 'Each of our client enjoys the benefits of collaborative teamwork, bringing together diverse skills and proficiencies. This collaborative synergy is expertly guided by our partners, all of whom are committed to addressing your unique requirements. The solutions provided by MTC consistently adhere to the highest standards of quality, ensuring they are delivered with precision, timeliness, responsiveness, and thoroughness.') }}
      </p>
    </div>
  </div>

  <!-- Enhanced Carousel -->
  <div class="carousel-wrapper" data-aos="fade-up">
    <div class="container">
      <button class="carousel-arrow left" onclick="scrollCarousel(-1)" id="leftArrow">
        <span>&lt;</span>
      </button>
      <div class="carousel-container" id="serviceCarousel">
        <div class="carousel-track" id="carouselTrack">

        <!-- Service 1: Audit and Assurance -->
        <div class="service-slide">
          <div class="service-image-container">
            @if(hasImageContent('service1_image'))
              <img src="{{ getContent('service1_image') }}" alt="{{ getContent('service1_title', 'Audit and Assurance') }}" />
            @else
              <img src="{{ asset('assets/img/audit-assurance.jpg') }}" alt="{{ getContent('service1_title', 'Audit and Assurance') }}" />
            @endif
            <div class="service-overlay">
              <div class="service-overlay-content">
                <i class="fas fa-search-dollar service-icon"></i>
                <p>{{ getContent('service1_description', 'Professional audit services ensuring compliance and accuracy') }}</p>
              </div>
            </div>
          </div>
          <a href="{{ route('services.audit') }}"><h3>{{ getContent('service1_title', 'Audit and Assurance') }}</h3></a>
        </div>

        <!-- Service 2: Business Advisory -->
        <div class="service-slide">
          <div class="service-image-container">
            @if(hasImageContent('service2_image'))
              <img src="{{ getContent('service2_image') }}" alt="{{ getContent('service2_title', 'Business Advisory') }}" />
            @else
              <img src="{{ asset('assets/img/business-advisory.jpg') }}" alt="{{ getContent('service2_title', 'Business Advisory') }}" />
            @endif
            <div class="service-overlay">
              <div class="service-overlay-content">
                <i class="fas fa-lightbulb service-icon"></i>
                <p>{{ getContent('service2_description', 'Strategic guidance to drive business growth and success') }}</p>
              </div>
            </div>
          </div>
          <a href="{{ route('services.advisory') }}"><h3>{{ getContent('service2_title', 'Business Advisory') }}</h3></a>
        </div>

        <!-- Service 3: Outsourcing -->
        <div class="service-slide">
          <div class="service-image-container">
            @if(hasImageContent('service3_image'))
              <img src="{{ getContent('service3_image') }}" alt="{{ getContent('service3_title', 'Outsourcing') }}" />
            @else
              <img src="{{ asset('assets/img/outsourcing.jpg') }}" alt="{{ getContent('service3_title', 'Outsourcing') }}" />
            @endif
            <div class="service-overlay">
              <div class="service-overlay-content">
                <i class="fas fa-users service-icon"></i>
                <p>{{ getContent('service3_description', 'Comprehensive outsourcing solutions for operational efficiency') }}</p>
              </div>
            </div>
          </div>
          <a href="{{ route('services.outsourcing') }}"><h3>{{ getContent('service3_title', 'Outsourcing') }}</h3></a>
        </div>

        <!-- Service 4: Business Restructuring -->
        <div class="service-slide">
          <div class="service-image-container">
            @if(hasImageContent('service4_image'))
              <img src="{{ getContent('service4_image') }}" alt="{{ getContent('service4_title', 'Business Restructuring and Insolvency') }}" />
            @else
              <img src="{{ asset('assets/img/business-restructuring-and-insolvency.jpg') }}" alt="{{ getContent('service4_title', 'Business Restructuring and Insolvency') }}" />
            @endif
            <div class="service-overlay">
              <div class="service-overlay-content">
                <i class="fas fa-project-diagram service-icon"></i>
                <p>{{ getContent('service4_description', 'Expert restructuring and insolvency advisory services') }}</p>
              </div>
            </div>
          </div>
          <a href="{{ route('services.restructuring') }}"><h3>{{ getContent('service4_title', 'Business Restructuring and Insolvency') }}</h3></a>
        </div>

        <!-- Service 5: Corporate Finance -->
        <div class="service-slide">
          <div class="service-image-container">
            @if(hasImageContent('service5_image'))
              <img src="{{ getContent('service5_image') }}" alt="{{ getContent('service5_title', 'Corporate Finance and Advisory') }}" />
            @else
              <img src="{{ asset('assets/img/corporate-finance.jpg') }}" alt="{{ getContent('service5_title', 'Corporate Finance and Advisory') }}" />
            @endif
            <div class="service-overlay">
              <div class="service-overlay-content">
                <i class="fas fa-chart-pie service-icon"></i>
                <p>{{ getContent('service5_description', 'Strategic financial advisory and investment solutions') }}</p>
              </div>
            </div>
          </div>
          <a href="{{ route('services.finance') }}"><h3>{{ getContent('service5_title', 'Corporate Finance and Advisory') }}</h3></a>
        </div>

        <!-- Service 6: Forensic -->
        <div class="service-slide">
          <div class="service-image-container">
            @if(hasImageContent('service6_image'))
              <img src="{{ getContent('service6_image') }}" alt="{{ getContent('service6_title', 'Forensic and Litigation Support') }}" />
            @else
              <img src="{{ asset('assets/img/forensic.jpg') }}" alt="{{ getContent('service6_title', 'Forensic and Litigation Support') }}" />
            @endif
            <div class="service-overlay">
              <div class="service-overlay-content">
                <i class="fas fa-search service-icon"></i>
                <p>{{ getContent('service6_description', 'Forensic accounting and litigation support expertise') }}</p>
              </div>
            </div>
          </div>
          <a href="{{ route('services.forensic') }}"><h3>{{ getContent('service6_title', 'Forensic and Litigation Support') }}</h3></a>
        </div>

        <!-- Service 7: Governance -->
        <div class="service-slide">
          <div class="service-image-container">
            @if(hasImageContent('service7_image'))
              <img src="{{ getContent('service7_image') }}" alt="{{ getContent('service7_title', 'Governance, Risk and Internal Audit') }}" />
            @else
              <img src="{{ asset('assets/img/risk-and-internal.jpg') }}" alt="{{ getContent('service7_title', 'Governance, Risk and Internal Audit') }}" />
            @endif
            <div class="service-overlay">
              <div class="service-overlay-content">
                <i class="fas fa-shield-check service-icon"></i>
                <p>{{ getContent('service7_description', 'Comprehensive governance and risk management solutions') }}</p>
              </div>
            </div>
          </div>
          <a href="{{ route('services.governance') }}"><h3>{{ getContent('service7_title', 'Governance, Risk and Internal Audit') }}</h3></a>
        </div>

        <!-- Service 8: Taxation -->
        <div class="service-slide">
          <div class="service-image-container">
            @if(hasImageContent('service8_image'))
              <img src="{{ getContent('service8_image') }}" alt="{{ getContent('service8_title', 'Taxation') }}" />
            @else
              <img src="{{ asset('assets/img/taxation.jpg') }}" alt="{{ getContent('service8_title', 'Taxation') }}" />
            @endif
            <div class="service-overlay">
              <div class="service-overlay-content">
                <i class="fas fa-calculator service-icon"></i>
                <p>{{ getContent('service8_description', 'Expert tax planning and compliance services') }}</p>
              </div>
            </div>
          </div>
          <a href="{{ route('services.taxation') }}"><h3>{{ getContent('service8_title', 'Taxation') }}</h3></a>
        </div>

      </div>
    </div>
    <button class="carousel-arrow right" onclick="scrollCarousel(1)" id="rightArrow">
      <span>&gt;</span>
    </button>
    </div>

    <!-- Carousel Indicators -->
    <div class="carousel-indicators" id="carouselIndicators"></div>
  </div>

  <style>
    .carousel-wrapper {
      position: relative;
      margin: 3rem 0;
      width: 100%;
    }

    .carousel-container {
      overflow: hidden;
      border-radius: 12px;
      position: relative;
      max-width: 1200px;
      margin: 0 auto 3rem auto;
      padding: 0 80px;
    }

    .carousel-track {
      display: flex;
      transition: transform 0.6s cubic-bezier(0.25, 0.8, 0.25, 1);
      will-change: transform;
    }

    .service-slide {
      flex: 0 0 350px;
      margin: 0 20px;
      border-radius: 12px;
      overflow: hidden;
      background: white;
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
      transition: all 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);
      position: relative;
      border: none;
    }

    .service-slide:hover {
      transform: translateY(-8px) scale(1.02);
      box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
    }

    .service-image-container {
      position: relative;
      overflow: hidden;
      height: 240px;
    }

    .service-slide img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform 0.6s ease;
    }

    .service-slide:hover img {
      transform: scale(1.1);
    }

    .service-overlay {
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: linear-gradient(135deg, rgba(50, 109, 120, 0.9), rgba(74, 154, 186, 0.9));
      opacity: 0;
      transition: all 0.4s ease;
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
    }

    .service-slide:hover .service-overlay {
      opacity: 1;
    }

    .service-overlay-content {
      color: white;
      padding: 1rem;
      transform: translateY(20px);
      transition: transform 0.4s ease;
    }

    .service-slide:hover .service-overlay-content {
      transform: translateY(0);
    }

    .service-icon {
      font-size: 2.5rem;
      margin-bottom: 1rem;
      display: block;
    }

    .service-overlay p {
      font-size: 0.9rem;
      line-height: 1.4;
      margin: 0;
      opacity: 0.9;
      font-weight: normal;
    }

    .service-slide:hover .service-overlay p {
      font-weight: bold;
    }

    .service-slide h3 {
      padding: 1.5rem;
      margin: 0;
      font-size: 1.2rem;
      font-weight: 600;
      color: #326C79;
      text-align: center;
      background: white;
      transition: color 0.3s ease;
      min-height: 80px;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .service-slide a {
      text-decoration: none;
      display: block;
    }

    .service-slide:hover h3 {
      color: #326D78;
    }

    .carousel-arrow {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      background: rgba(50, 109, 120, 0.9);
      border: none;
      width: 60px;
      height: 60px;
      border-radius: 50%;
      color: white;
      font-size: 1.8rem;
      font-weight: bold;
      cursor: pointer;
      z-index: 10;
      transition: all 0.3s ease;
      display: flex;
      align-items: center;
      justify-content: center;
      backdrop-filter: blur(10px);
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    }

    .carousel-arrow:hover {
      background: #326D78;
      transform: translateY(-50%) scale(1.1);
      box-shadow: 0 6px 20px rgba(0, 0, 0, 0.3);
    }

    .carousel-arrow:active {
      transform: translateY(-50%) scale(0.95);
    }

    .carousel-arrow.left {
      left: 10px;
    }

    .carousel-arrow.right {
      right: 10px;
    }

    .carousel-indicators {
      display: flex;
      justify-content: center;
      gap: 8px;
      margin-top: 2rem;
    }

    .indicator {
      width: 12px;
      height: 12px;
      border-radius: 50%;
      background: rgba(50, 109, 120, 0.3);
      cursor: pointer;
      transition: all 0.3s ease;
    }

    .indicator.active {
      background: #326D78;
      transform: scale(1.2);
    }

    .indicator:hover {
      background: rgba(50, 109, 120, 0.6);
    }

    /* Auto-scroll animation */
    @keyframes slideIn {
      from {
        opacity: 0;
        transform: translateX(30px);
      }
      to {
        opacity: 1;
        transform: translateX(0);
      }
    }

    .service-slide {
      animation: slideIn 0.6s ease-out;
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
      .carousel-container {
        padding: 0 60px;
        margin: 0 auto 2rem auto;
      }

      .service-slide {
        flex: 0 0 280px;
        margin: 0 15px;
      }

      .carousel-arrow {
        width: 50px;
        height: 50px;
        font-size: 1.5rem;
      }

      .carousel-arrow.left {
        left: 5px;
      }

      .carousel-arrow.right {
        right: 5px;
      }
    }

    @media (max-width: 480px) {
      .carousel-container {
        padding: 0 20px;
        margin: 0 auto 1.5rem auto;
      }

      .service-slide {
        flex: 0 0 250px;
        margin: 0 10px;
      }

      .carousel-arrow {
        width: 45px;
        height: 45px;
        font-size: 1.3rem;
      }
    }
  </style>

  <script>
    class EnhancedCarousel {
      constructor() {
        this.track = document.querySelector('.carousel-track');
        this.slides = document.querySelectorAll('.service-slide');
        this.leftArrow = document.getElementById('leftArrow');
        this.rightArrow = document.getElementById('rightArrow');
        this.indicatorsContainer = document.getElementById('carouselIndicators');

        this.currentIndex = 0;
        this.scrollAmount = 0;
        this.isAnimating = false;
        this.autoScrollInterval = null;

        this.init();
      }

      init() {
        this.createIndicators();
        this.updateArrowVisibility();
        this.startAutoScroll();
        this.bindEvents();
      }

      createIndicators() {
        const totalSlides = this.slides.length;
        const containerWidth = this.track.parentElement.offsetWidth - 160; // Account for padding
        const visibleSlides = Math.floor(containerWidth / (350 + 40));
        const totalPages = Math.max(1, totalSlides - visibleSlides + 1);

        for (let i = 0; i < totalPages; i++) {
          const indicator = document.createElement('div');
          indicator.className = `indicator ${i === 0 ? 'active' : ''}`;
          indicator.addEventListener('click', () => this.goToSlide(i));
          this.indicatorsContainer.appendChild(indicator);
        }
      }

      updateArrowVisibility() {
        const maxScroll = this.track.scrollWidth - this.track.offsetWidth;
        this.leftArrow.style.opacity = this.scrollAmount <= 0 ? '0.5' : '1';
        this.rightArrow.style.opacity = this.scrollAmount >= maxScroll ? '0.5' : '1';
      }

      updateIndicators() {
        const indicators = this.indicatorsContainer.querySelectorAll('.indicator');
        const cardWidth = 350 + 40;
        const currentPage = Math.round(this.scrollAmount / cardWidth);

        indicators.forEach((indicator, index) => {
          indicator.classList.toggle('active', index === currentPage);
        });
      }

      scrollCarousel(direction) {
        if (this.isAnimating) return;

        this.isAnimating = true;
        this.stopAutoScroll();

        const cardWidth = 350 + 40; // Updated to match new slide width + margin
        this.scrollAmount += direction * cardWidth;

        const maxScroll = this.track.scrollWidth - this.track.offsetWidth;
        this.scrollAmount = Math.max(0, Math.min(this.scrollAmount, maxScroll));

        this.track.style.transform = `translateX(-${this.scrollAmount}px)`;

        this.updateArrowVisibility();
        this.updateIndicators();

        // Add bounce effect to visible slides
        this.animateVisibleSlides();

        setTimeout(() => {
          this.isAnimating = false;
          this.startAutoScroll();
        }, 600);
      }

      goToSlide(index) {
        if (this.isAnimating) return;

        this.stopAutoScroll();
        const cardWidth = 350 + 40;
        this.scrollAmount = index * cardWidth;

        const maxScroll = this.track.scrollWidth - this.track.offsetWidth;
        this.scrollAmount = Math.min(this.scrollAmount, maxScroll);

        this.track.style.transform = `translateX(-${this.scrollAmount}px)`;
        this.updateArrowVisibility();
        this.updateIndicators();
        this.animateVisibleSlides();

        setTimeout(() => this.startAutoScroll(), 600);
      }

      animateVisibleSlides() {
        this.slides.forEach((slide, index) => {
          slide.style.animation = 'none';
          slide.offsetHeight; // Trigger reflow
          slide.style.animation = `slideIn 0.6s ease-out ${index * 0.1}s both`;
        });
      }

      startAutoScroll() {
        this.autoScrollInterval = setInterval(() => {
          const maxScroll = this.track.scrollWidth - this.track.offsetWidth;
          if (this.scrollAmount >= maxScroll) {
            this.scrollAmount = 0;
          } else {
            this.scrollAmount += 350 + 40;
          }

          this.track.style.transform = `translateX(-${this.scrollAmount}px)`;
          this.updateArrowVisibility();
          this.updateIndicators();
        }, 4000);
      }

      stopAutoScroll() {
        if (this.autoScrollInterval) {
          clearInterval(this.autoScrollInterval);
          this.autoScrollInterval = null;
        }
      }

      bindEvents() {
        // Pause auto-scroll on hover
        this.track.addEventListener('mouseenter', () => this.stopAutoScroll());
        this.track.addEventListener('mouseleave', () => this.startAutoScroll());

        // Touch events for mobile
        let startX = 0;
        let startY = 0;
        let isDragging = false;

        this.track.addEventListener('touchstart', (e) => {
          startX = e.touches[0].clientX;
          startY = e.touches[0].clientY;
          isDragging = true;
          this.stopAutoScroll();
        });

        this.track.addEventListener('touchmove', (e) => {
          if (!isDragging) return;

          const currentX = e.touches[0].clientX;
          const currentY = e.touches[0].clientY;
          const diffX = startX - currentX;
          const diffY = startY - currentY;

          // Prevent vertical scrolling if horizontal swipe is detected
          if (Math.abs(diffX) > Math.abs(diffY)) {
            e.preventDefault();
          }
        });

        this.track.addEventListener('touchend', (e) => {
          if (!isDragging) return;

          const endX = e.changedTouches[0].clientX;
          const diffX = startX - endX;

          if (Math.abs(diffX) > 50) {
            this.scrollCarousel(diffX > 0 ? 1 : -1);
          } else {
            this.startAutoScroll();
          }

          isDragging = false;
        });

        // Keyboard navigation
        document.addEventListener('keydown', (e) => {
          if (e.key === 'ArrowLeft') {
            e.preventDefault();
            this.scrollCarousel(-1);
          } else if (e.key === 'ArrowRight') {
            e.preventDefault();
            this.scrollCarousel(1);
          }
        });
      }
    }

    // Global function for backward compatibility
    function scrollCarousel(direction) {
      if (window.carouselInstance) {
        window.carouselInstance.scrollCarousel(direction);
      }
    }

    // Initialize carousel when DOM is loaded
    document.addEventListener('DOMContentLoaded', () => {
      window.carouselInstance = new EnhancedCarousel();
    });
  </script>
</section>
