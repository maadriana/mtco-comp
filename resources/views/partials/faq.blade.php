<!-- MTC CARE Section -->
<section id="faq" class="faq section light-background">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>MTC CARE</h2>
    <p><span>Corporate Social</span> <span class="description-title">Responsibility & Galleries</span></p>
  </div><!-- End Section Title -->

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-10" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4">

          @php
            $cards = [
              [
                'title' => 'Corporate Social Responsibility',
                'desc' => 'Our CSR programs reflect our values of service, compassion, and shared growth. We support causes that promote education, environmental sustainability, financial literacy, and community welfare. Whether it\'s organizing donation drives, tree-planting, or community outreach, we take pride in giving back.',
                'route' => route('mtc.csr'),
                'icon' => 'bi-globe-americas'
              ],
              [
                'title' => 'Galleries',
                'desc' => 'Explore our visual showcase of CSR events, milestones, and team stories. From outreach missions to firm-wide celebrations, these moments capture the heart and passion of MTC.',
                'route' => route('mtc.galleries'),
                'icon' => 'bi-images'
              ]
            ];
          @endphp

          @foreach ($cards as $item)
          <div class="col-md-6">
            <a href="{{ $item['route'] }}" class="card-link text-decoration-none text-reset">
              <div class="enhanced-care-card h-100 p-4">
                <div class="card-header mb-4">
                  <div class="icon-circle mb-3">
                    <i class="bi {{ $item['icon'] }} fs-2 text-white"></i>
                  </div>
                  <h4 class="fw-bold mb-3 card-title">{{ $item['title'] }}</h4>
                </div>

                <div class="card-body mb-4">
                  <p class="mb-0 card-description">{{ $item['desc'] }}</p>
                </div>

                <div class="card-footer mt-auto">
                  <div class="arrow-link">
                    <span class="link-text me-2">Learn More</span>
                    <i class="bi bi-arrow-right-circle-fill"></i>
                  </div>
                </div>
              </div>
            </a>
          </div>
          @endforeach

        </div>
      </div><!-- End Column -->
    </div>
  </div>

</section><!-- /MTC CARE Section -->

<style>
/* Enhanced Care Card Styles */
.enhanced-care-card {
  background: white;
  border-radius: 16px;
  border: 1px solid #e9ecef;
  transition: all 0.3s ease;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
  overflow: hidden;
  position: relative;
  display: flex;
  flex-direction: column;
  min-height: 420px;
}

.enhanced-care-card::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  height: 4px;
  background: linear-gradient(90deg, #326C79, #4A9BAE, #5FB3C4);
  opacity: 0;
  transition: opacity 0.3s ease;
}

.enhanced-care-card:hover::before {
  opacity: 1;
}

.enhanced-care-card:hover {
  transform: translateY(-8px);
  box-shadow: 0 12px 28px rgba(0, 0, 0, 0.15);
  border-color: #dee2e6;
}

.card-header {
  text-align: center;
}

.icon-circle {
  width: 80px;
  height: 80px;
  background: linear-gradient(135deg, #326C79, #4A9BAE);
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 0 auto;
  transition: all 0.3s ease;
  position: relative;
  overflow: hidden;
}

.icon-circle::before {
  content: '';
  position: absolute;
  top: -2px;
  left: -2px;
  right: -2px;
  bottom: -2px;
  background: linear-gradient(45deg, #326C79, #4A9BAE, #5FB3C4, #326C79);
  border-radius: 50%;
  z-index: -1;
  opacity: 0;
  transition: opacity 0.3s ease;
}

.enhanced-care-card:hover .icon-circle::before {
  opacity: 1;
}

.enhanced-care-card:hover .icon-circle {
  transform: scale(1.05);
}

.card-title {
  color: #212529;
  font-size: 1.4rem;
  line-height: 1.3;
  transition: color 0.3s ease;
}

.enhanced-care-card:hover .card-title {
  color: #326C79;
}

.card-body {
  flex-grow: 1;
}

.card-description {
  color: #212529;
  line-height: 1.6;
  font-size: 1.1rem;
  text-align: justify;
  text-justify: inter-word;
}

.card-footer {
  margin-top: auto;
  padding-top: 1rem;
  border-top: 1px solid #f8f9fa;
  transition: all 0.3s ease;
}

.arrow-link {
  display: flex;
  align-items: center;
  justify-content: center;
  font-weight: 600;
  transition: all 0.3s ease;
}

.link-text {
  font-size: 1rem;
  color: #326D78;
  font-weight: 600;
  opacity: 1;
  transform: translateX(0);
  transition: all 0.3s ease;
}

.enhanced-care-card:hover .link-text {
  color: #255A65;
  transform: translateX(-3px);
}

.arrow-link i {
  font-size: 1.5rem;
  color: #326D78;
  transition: all 0.3s ease;
}

.enhanced-care-card:hover .arrow-link i {
  transform: translateX(8px);
  color: #255A65;
}

.enhanced-care-card:hover .card-footer {
  background-color: #f8f9fa;
  margin: 0 -1.5rem -1.5rem -1.5rem;
  padding: 1rem 1.5rem;
}

/* Responsive adjustments */
@media (max-width: 768px) {
  .enhanced-care-card {
    min-height: 380px;
  }

  .card-title {
    font-size: 1.25rem;
  }

  .icon-circle {
    width: 70px;
    height: 70px;
  }

  .icon-circle i {
    font-size: 1.8rem !important;
  }

  .card-description {
    text-align: left;
  }
}
</style>
