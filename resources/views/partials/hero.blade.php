<!-- Hero Section -->
<section id="hero" class="hero section light-background">
  <div class="container">
    <div class="row gy-4">
      <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="zoom-out">
        <h1>{!! getContent('hero_title', 'Welcome to <span>Mendoza Tugano & Co., CPAs</span>') !!}</h1>
        <p>{{ getContent('hero_subtitle', 'Preserving a legacy of excellence') }}</p>
        <div class="d-flex">
          <a href="{{ url('/#contact') }}" class="btn-get-started">{{ getContent('hero_button', 'Connect with us') }}</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- About Section -->
<section id="about" class="about section light-background">
  <div class="container section-title" data-aos="fade-up">
    <p><span>Find Out More</span> <span class="description-title">About Us</span></p>
  </div>

  <div class="container">
    <div class="row gy-3">

      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
        <img src="{{ asset('assets/img/' . getContent('about_image', 'about.jpg')) }}" alt="About Image" style="max-width: 100%; height: auto;">
      </div>

      <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
        <div class="about-content ps-0 ps-lg-3">
          <p style="font-size: 1.25rem; line-height: 1.8; margin: 2rem 0; padding: 1rem 0; text-align: justify;">
            {!! getContent('about_text', 'Default about paragraph...') !!}
          </p>

          <div class="mt-3">
            <a href="{{ route('about') }}" class="btn btn-primary custom-btn">Learn More</a>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>


<style>
  .custom-btn {
    background-color: #2f5d62;
    border: none;
    font-family: 'Open Sans', sans-serif;
    transition: background-color 0.3s ease;
  }

  .custom-btn:hover {
    background-color: #3e7a6e;
  }
</style>
