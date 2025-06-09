<section id="services" class="services section">

  <div class="container section-title" data-aos="fade-up">
    <h2>Services</h2>
    <p><span>Check Our</span> <span class="description-title" style="font-weight: bold;">Services</span></p>

    <div style="max-width: 900px; margin: 0 auto; padding: 1rem 0; text-align: justify;">
      <p style="font-size: 1.25rem; line-height: 1.8; margin: 2rem 0; color: #444444; font-weight: normal;">
       Mendoza Tugano & Co., CPAs (MTC) operates as a comprehensive firm, offering an array of services that encompass accounting services, assurance, tax services, financial advisory, and consulting. We extend our expertise to both privately held enterprises and publicly listed companies. Our commitment to excellence and leadership is exemplified by the unwavering dedication of our highly skilled and passionate experts.
      </p>
      <p style="font-size: 1.25rem; line-height: 1.8; margin: 2rem 0; color: #444444; font-weight: normal;">
       Each of our client enjoys the benefits of collaborative teamwork, bringing together diverse skills and proficiencies. This collaborative synergy is expertly guided by our partners, all of whom are committed to addressing your unique requirements. The solutions provided by MTC consistently adhere to the highest standards of quality, ensuring they are delivered with precision, timeliness, responsiveness, and thoroughness.
      </p>
    </div>
  </div>

  <!-- Carousel -->
  <div class="container carousel-wrapper" data-aos="fade-up">
    <button class="carousel-arrow left" onclick="scrollCarousel(-1)">&lt;</button>
    <div class="carousel-container" id="serviceCarousel">
      <div class="carousel-track">

        <div class="service-slide">
          <img src="{{ asset('assets/img/audit-assurance.jpg') }}" alt="Audit and Assurance" />
          <a href="{{ route('services.audit') }}"><h3>Audit and Assurance</h3></a>
        </div>

        <div class="service-slide">
          <img src="{{ asset('assets/img/business-advisory.jpg') }}" alt="Business Advisory" />
          <a href="{{ route('services.advisory') }}"><h3>Business Advisory</h3></a>
        </div>

        <div class="service-slide">
          <img src="{{ asset('assets/img/outsourcing.jpg') }}" alt="Outsourcing" />
          <a href="{{ route('services.outsourcing') }}"><h3>Outsourcing</h3></a>
        </div>

        <div class="service-slide">
          <img src="{{ asset('assets/img/business-restructuring-and-insolvency.jpg') }}" alt="Restructuring" />
          <a href="{{ route('services.restructuring') }}"><h3>Business Restructuring and Insolvency</h3></a>
        </div>

        <div class="service-slide">
          <img src="{{ asset('assets/img/corporate-finance.jpg') }}" alt="Corporate Finance" />
          <a href="{{ route('services.finance') }}"><h3>Corporate Finance and Advisory</h3></a>
        </div>

        <div class="service-slide">
          <img src="{{ asset('assets/img/forensic.jpg') }}" alt="Forensic" />
          <a href="{{ route('services.forensic') }}"><h3>Forensic and Ligitation Support</h3></a>
        </div>

        <div class="service-slide">
          <img src="{{ asset('assets/img/risk-and-internal.jpg') }}" alt="Governance" />
          <a href="{{ route('services.governance') }}"><h3>Governance, Risk and & Internal Audit</h3></a>
        </div>

        <div class="service-slide">
          <img src="{{ asset('assets/img/taxation.jpg') }}" alt="Taxation" />
          <a href="{{ route('services.taxation') }}"><h3>Taxation</h3></a>
        </div>

      </div>
    </div>
    <button class="carousel-arrow right" onclick="scrollCarousel(1)">&gt;</button>
  </div>

  <script>
    const track = document.querySelector('.carousel-track');
    let scrollAmount = 0;

    function scrollCarousel(direction) {
      const cardWidth = document.querySelector('.service-slide').offsetWidth + 32;
      scrollAmount += direction * cardWidth;
      const maxScroll = track.scrollWidth - track.offsetWidth;
      scrollAmount = Math.max(0, Math.min(scrollAmount, maxScroll));
      track.style.transform = `translateX(-${scrollAmount}px)`;
    }
  </script>
</section>
