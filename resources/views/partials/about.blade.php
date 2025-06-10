@extends('layouts.app')

@section('title', 'About | Mendoza Tugano & Co., CPAs')

@section('content')

<!-- Hero Image with Breadcrumb Overlay -->
<div style="position: relative; margin-top: -1.5rem;">
  <img src="{{ asset('assets/img/job-accounting.jpg') }}" alt="Accounting Team" style="width: 100%; height: 400px; object-fit: cover;">

<!-- Breadcrumb Overlay -->
<div style="position: absolute; top: 20px; left: 20px; background: rgba(255, 255, 255, 0.95); padding: 10px 20px; border-radius: 6px; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
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

<section id="about" class="py-5" data-aos="fade-up">
  <div class="container">

    <!-- Title - More spaced from image -->
    <div class="text-center mb-6" style="margin-top: 1rem; padding-bottom: 2rem;">
      <h2 style="color: #333; font-style: italic; font-size: 2rem; margin-bottom: 1rem; font-weight: 400;">
        Preserving a Legacy of Excellence
      </h2>
    </div>

    <!-- Main Content -->
    <div style="max-width: 900px; margin: 0 auto; text-align: justify; padding-bottom: 4rem;">
      <p class="fs-5 text-muted mb-4" style="line-height: 1.7;">
        Emmanuel Y. Mendoza, a seasoned audit and accounting practitioner, redefined the landscape of audit and accounting services. With Mendoza Querido &amp; Co., he founded an institution that upheld unwavering dedication, precision, and integrity, earning a reputation as an industry luminary. Building on the legacy of Mendoza Querido &amp; Co., Mendoza Tugano &amp; Co., CPAs, emerged — a firm that seamlessly carries forward the same principles of excellence.
      </p>
      <p class="fs-5 text-muted mb-4" style="line-height: 1.7;">
        Mendoza Tugano &amp; Co., CPAs, represents not just continuity but an elevation of the principles that have defined the legacy of Mendoza Querido &amp; Co. Our commitment to delivering precise, ethical, and personalized financial solutions mirrors the trust and reliability that clients have come to expect from our lineage.
      </p>
      <p class="fs-5 text-muted mb-5" style="line-height: 1.7;">
        At Mendoza Tugano &amp; Co., CPAs, "Passion for Excellence" is not merely a motto — it's a pledge rooted in a heritage of trust and dedication. As we embrace the opportunities of the digital age, we do so with the same unwavering commitment to client success.
      </p>
    </div>

    <!-- Vision and Mission Section -->
    <div class="mb-6" style="padding-bottom: 5rem;">
      <div class="row align-items-center g-5">
        <div class="col-lg-6">
          <div class="position-relative">
            <img src="{{ asset('assets/img/job-accounting.jpg') }}" alt="Vision and Mission"
                 class="img-fluid rounded shadow-sm" style="width: 100%; height: 350px; object-fit: cover;">
            <div class="position-absolute top-0 start-0 w-100 h-100 rounded"
                 style="background: linear-gradient(135deg, rgba(50, 109, 120, 0.1), rgba(50, 109, 120, 0.05));"></div>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="ps-lg-4">
            <div class="mb-4">
              <div class="d-flex align-items-center mb-3">
                <div class="me-3" style="width: 4px; height: 40px; background: #326D78; border-radius: 2px;"></div>
                <h4 class="fw-bold mb-0" style="color: #326D78;">Our Vision</h4>
              </div>
              <p class="text-muted mb-0" style="font-size: 1.1rem; line-height: 1.7;">
                To lead the audit and accounting industry through our unwavering "Passion for Excellence", becoming a trusted standard for ethical innovation and generational impact.
              </p>
            </div>

            <div>
              <div class="d-flex align-items-center mb-3">
                <div class="me-3" style="width: 4px; height: 40px; background: #326D78; border-radius: 2px;"></div>
                <h4 class="fw-bold mb-0" style="color: #326D78;">Our Mission</h4>
              </div>
              <p class="text-muted mb-0" style="font-size: 1.1rem; line-height: 1.7;">
                To deliver outstanding, ethical, and client-focused financial services that empower businesses to grow confidently in a dynamic world — all anchored in our legacy of trust and excellence.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Core Values Section -->
    <div class="text-center mb-5" style="padding-top: 4rem; padding-bottom: 2rem;">
      <h3 class="fw-bold mb-2" style="color: #333; font-size: 2rem;">Our Core Values</h3>
      <p class="text-muted" style="font-size: 1.1rem;">The foundation of everything we do</p>
    </div>

    <!-- Values in a more dynamic layout -->
    <div class="row g-4 mb-5" style="padding-bottom: 3rem;">
      <!-- Left Column - 3 Values -->
      <div class="col-lg-4">
        <div class="mb-4">
          <div class="d-flex align-items-start">
            <div class="flex-shrink-0 me-3">
              <div class="rounded-circle d-flex align-items-center justify-content-center"
                   style="width: 50px; height: 50px; background: rgba(50, 109, 120, 0.1);">
                <i class="fas fa-star" style="color: #326D78; font-size: 1.2rem;"></i>
              </div>
            </div>
            <div>
              <h5 class="fw-bold mb-2" style="color: #326D78;">Excellence</h5>
              <p class="text-muted mb-0" style="font-size: 0.95rem; line-height: 1.6;">
                We set high standards in everything we do, delivering with precision and pride.
              </p>
            </div>
          </div>
        </div>

        <div class="mb-4">
          <div class="d-flex align-items-start">
            <div class="flex-shrink-0 me-3">
              <div class="rounded-circle d-flex align-items-center justify-content-center"
                   style="width: 50px; height: 50px; background: rgba(50, 109, 120, 0.1);">
                <i class="fas fa-shield-alt" style="color: #326D78; font-size: 1.2rem;"></i>
              </div>
            </div>
            <div>
              <h5 class="fw-bold mb-2" style="color: #326D78;">Integrity</h5>
              <p class="text-muted mb-0" style="font-size: 0.95rem; line-height: 1.6;">
                We are honest, ethical, and transparent in our commitments.
              </p>
            </div>
          </div>
        </div>

        <div>
          <div class="d-flex align-items-start">
            <div class="flex-shrink-0 me-3">
              <div class="rounded-circle d-flex align-items-center justify-content-center"
                   style="width: 50px; height: 50px; background: rgba(50, 109, 120, 0.1);">
                <i class="fas fa-lightbulb" style="color: #326D78; font-size: 1.2rem;"></i>
              </div>
            </div>
            <div>
              <h5 class="fw-bold mb-2" style="color: #326D78;">Innovation</h5>
              <p class="text-muted mb-0" style="font-size: 0.95rem; line-height: 1.6;">
                We embrace change and lead with forward-thinking solutions.
              </p>
            </div>
          </div>
        </div>
      </div>

      <!-- Center Column - Featured Core Values Header -->
      <div class="col-lg-4 d-flex align-items-center justify-content-center">
        <div class="text-center">
          <div class="position-relative d-inline-block">
            <div class="rounded-circle d-flex align-items-center justify-content-center mx-auto mb-3"
                 style="width: 120px; height: 120px; background: linear-gradient(135deg, #326D78, #4a9ead); box-shadow: 0 10px 30px rgba(50, 109, 120, 0.3);">
              <i class="fas fa-gem" style="color: white; font-size: 3rem;"></i>
            </div>
            <!-- Decorative dots -->
            <div style="position: absolute; top: -10px; right: -10px; width: 20px; height: 20px; background: rgba(50, 109, 120, 0.2); border-radius: 50%;"></div>
            <div style="position: absolute; bottom: -5px; left: -5px; width: 15px; height: 15px; background: rgba(50, 109, 120, 0.15); border-radius: 50%;"></div>
          </div>
          <h5 class="fw-bold mb-2" style="color: #326D78;">Core Values</h5>
          <p class="text-muted mb-0" style="font-size: 0.9rem;">Our guiding principles</p>
        </div>
      </div>

      <!-- Right Column - 4 Values -->
      <div class="col-lg-4">
        <div class="mb-4">
          <div class="d-flex align-items-start">
            <div class="flex-shrink-0 me-3">
              <div class="rounded-circle d-flex align-items-center justify-content-center"
                   style="width: 50px; height: 50px; background: rgba(50, 109, 120, 0.1);">
                <i class="fas fa-chart-line" style="color: #326D78; font-size: 1.2rem;"></i>
              </div>
            </div>
            <div>
              <h5 class="fw-bold mb-2" style="color: #326D78;">Professional Growth</h5>
              <p class="text-muted mb-0" style="font-size: 0.95rem; line-height: 1.6;">
                We encourage lifelong learning and support our people's development.
              </p>
            </div>
          </div>
        </div>

        <div class="mb-4">
          <div class="d-flex align-items-start">
            <div class="flex-shrink-0 me-3">
              <div class="rounded-circle d-flex align-items-center justify-content-center"
                   style="width: 50px; height: 50px; background: rgba(50, 109, 120, 0.1);">
                <i class="fas fa-users" style="color: #326D78; font-size: 1.2rem;"></i>
              </div>
            </div>
            <div>
              <h5 class="fw-bold mb-2" style="color: #326D78;">Teamwork</h5>
              <p class="text-muted mb-0" style="font-size: 0.95rem; line-height: 1.6;">
                We thrive in collaboration, valuing the strength of collective effort.
              </p>
            </div>
          </div>
        </div>

        <div class="mb-4">
          <div class="d-flex align-items-start">
            <div class="flex-shrink-0 me-3">
              <div class="rounded-circle d-flex align-items-center justify-content-center"
                   style="width: 50px; height: 50px; background: rgba(50, 109, 120, 0.1);">
                <i class="fas fa-heart" style="color: #326D78; font-size: 1.2rem;"></i>
              </div>
            </div>
            <div>
              <h5 class="fw-bold mb-2" style="color: #326D78;">Employee Care</h5>
              <p class="text-muted mb-0" style="font-size: 0.95rem; line-height: 1.6;">
                We prioritize wellbeing and inclusion within our firm.
              </p>
            </div>
          </div>
        </div>

        <div>
          <div class="d-flex align-items-start">
            <div class="flex-shrink-0 me-3">
              <div class="rounded-circle d-flex align-items-center justify-content-center"
                   style="width: 50px; height: 50px; background: rgba(50, 109, 120, 0.1);">
                <i class="fas fa-hands-helping" style="color: #326D78; font-size: 1.2rem;"></i>
              </div>
            </div>
            <div>
              <h5 class="fw-bold mb-2" style="color: #326D78;">Community Engagement</h5>
              <p class="text-muted mb-0" style="font-size: 0.95rem; line-height: 1.6;">
                We give back to society and act as responsible corporate citizens.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Call to Action Section -->
    <div class="text-center" style="margin-top: 4rem; padding-top: 3rem;">
      <div class="card border-0 shadow-sm" style="background: #326D78; border-radius: 8px;">
        <div class="card-body p-5">
          <h4 class="text-white fw-bold mb-3">Ready to Experience Excellence?</h4>
          <p class="text-white mb-4" style="opacity: 0.9; font-size: 1.1rem;">Join us in building a legacy of trust and professional excellence.</p>
          <a href="{{ url('/#contact') }}" class="btn btn-light btn-lg px-4 py-2" style="border-radius: 6px; font-weight: 600; color: #326D78;">
            Get in Touch <i class="fas fa-arrow-right ms-2"></i>
          </a>
        </div>
      </div>
    </div>

  </div>
</section>

<style>
.value-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 8px 25px rgba(0,0,0,0.15) !important;
}

.breadcrumb-item + .breadcrumb-item::before {
  content: "›";
  color: #6c757d;
  font-weight: bold;
}
</style>

@endsection
