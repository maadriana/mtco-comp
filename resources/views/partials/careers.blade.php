<!-- Careers Section -->
<section id="careers" class="careers section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>{{ getContent('careers_main_title', 'Careers') }}</h2>
    <p>{!! getContent('careers_subtitle', '<span>Explore</span> <span class="description-title">Opportunities</span>') !!}</p>

    <!-- Descriptive Text -->
    <div style="max-width: 900px; margin: 0 auto; padding: 1rem 0 0 0; text-align: justify;">
      <p style="font-size: 1.25rem; line-height: 1.8; margin: 2rem 0; color: #444444; font-weight: normal;">
        {{ getContent('careers_description_paragraph1', 'At Mendoza Tugano & Co., we encourage people within the firm to be their best and our culture empowers individuality.') }}
      </p>
      <p style="font-size: 1.25rem; line-height: 1.8; margin: 2rem 0; color: #444444; font-weight: normal;">
        {{ getContent('careers_description_paragraph2', 'The firm\'s goal is to promote a working environment where individual differences are respected and valued, and everyone has the opportunity to excel. With this insight, we are able to offer better commercial solutions.') }}
      </p>
      <p style="font-size: 1.25rem; line-height: 1.8; margin: 2rem 0; color: #444444; font-weight: normal;">
        {{ getContent('careers_description_paragraph3', 'Join Mendoza Tugano & Co. and you will discover an ambitious firm with strong leadership and a shared direction. We provide exceptional service to our clients, stimulating work and excellent development for our people. Our working culture is inclusive, collaborative and supportive. We want to allow our employees to reach their full potential.') }}
      </p>
      <p style="font-size: 1.25rem; line-height: 1.8; margin: 2rem 0 1rem 0; color: #444444; font-weight: normal;">
        {{ getContent('careers_description_paragraph4', 'We believe in rewarding outstanding performance as we want to retain our talent.') }}
      </p>
    </div>
  </div>

<!-- Featured Services Section -->
  <section id="featured-services" class="featured-services section" style="padding-top: 0;">
    <div class="container">
      <div class="row gy-4">

        @php
          $careerRoutes = [
            1 => 'careers.vacancies',
            2 => 'careers.professionals',
            3 => 'careers.graduate',
            4 => 'careers.internship'
          ];
        @endphp

        @for($i = 1; $i <= 4; $i++)
        <div class="col-xl-3 col-md-6 d-flex" data-aos="fade-up" data-aos-delay="{{ $i * 100 }}">
          <div class="service-item position-relative">
            <div class="icon">
              <i class="{{ getContent('career_card' . $i . '_icon', 'bi bi-question-circle') }} icon"></i>
            </div>
            <h4 style="font-size: 1.5rem;">
              <a href="{{ route($careerRoutes[$i]) }}" class="stretched-link">
                {{ getContent('career_card' . $i . '_title', 'Career Opportunity') }}
              </a>
            </h4>
            <p style="font-size: 1.1rem;">
              {{ getContent('career_card' . $i . '_description', 'Explore opportunities and grow your career with us.') }}
            </p>
          </div>
        </div>
        @endfor

      </div>
    </div>
  </section>
</section>
