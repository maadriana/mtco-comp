@extends('layouts.app')

@section('content')
<!-- About Section -->
<section id="about" class="about section light-background">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>About</h2>
    <p><span>Find Out More</span> <span class="description-title">About Us</span></p>
  </div>

  <div class="container">
    <div class="row gy-3">

      <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
        <img src="{{ asset('assets/img/about.jpg') }}" alt="About" class="img-fluid">
      </div>

      <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
        <div class="about-content ps-0 ps-lg-3">
          <p style="font-size: 1.25rem; line-height: 1.8; margin: 2rem 0; padding: 1rem 0; text-align: justify;">
            At Mendoza Tugano &amp; Co., CPAs, "Passion for Excellence" is not merely a motto — it's a pledge rooted in a heritage of trust and dedication. As we embrace the opportunities of the digital age, we do so with the same unwavering commitment to client success. With Mendoza Tugano &amp; Co., CPAs, we look forward to creating a future where our clients' financial aspirations are not only realized but exceeded, ensuring that our legacy of excellence continues to thrive for generations to come.
          </p>
        </div>
      </div>

    </div>
  </div>

</section><!-- /About Section -->
@endsection
