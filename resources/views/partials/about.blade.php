@extends('layouts.app')

@section('title', 'About | Mendoza Tugano & Co., CPAs')

@section('content')

<section id="about" class="py-5" data-aos="fade-up">
  <div class="container">

    <!-- Back Button -->
    <div class="back-button">
      <a href="{{ url('/#careers') }}" class="btn btn-outline-secondary">
        ← Back
      </a>
    </div>

    <!-- Title -->
    <div class="text-center mb-4">
      <h2 style="color: #000; font-style: italic; font-size: 2rem;">
        Preserving a Legacy of Excellence
      </h2>
    </div>

    <!-- Main Content -->
    <div style="max-width: 900px; margin: 0 auto; padding: 1rem 0; text-align: justify;">
      <p style="font-size: 1.25rem; line-height: 1.8; margin: 1rem 0 2rem; color: #444444;">
        Emmanuel Y. Mendoza, a seasoned audit and accounting practitioner, redefined the landscape of audit and accounting services. With Mendoza Querido &amp; Co., he founded an institution that upheld unwavering dedication, precision, and integrity, earning a reputation as an industry luminary. Building on the legacy of Mendoza Querido &amp; Co., Mendoza Tugano &amp; Co., CPAs, emerged — a firm that seamlessly carries forward the same principles of excellence.
      </p>
      <p style="font-size: 1.25rem; line-height: 1.8; margin: 2rem 0; color: #444444;">
        Mendoza Tugano &amp; Co., CPAs, represents not just continuity but an elevation of the principles that have defined the legacy of Mendoza Querido &amp; Co. Our commitment to delivering precise, ethical, and personalized financial solutions mirrors the trust and reliability that clients have come to expect from our lineage. With a seasoned team of professionals who share the same vision, we stand at the intersection of tradition and innovation, ready to provide cutting-edge audit and accounting services.
      </p>
      <p style="font-size: 1.25rem; line-height: 1.8; margin: 2rem 0; color: #444444;">
        At Mendoza Tugano &amp; Co., CPAs, "Passion for Excellence" is not merely a motto — it's a pledge rooted in a heritage of trust and dedication. As we embrace the opportunities of the digital age, we do so with the same unwavering commitment to client success. With Mendoza Tugano &amp; Co., CPAs, we look forward to creating a future where our clients' financial aspirations are not only realized but exceeded, ensuring that our legacy of excellence continues to thrive for generations to come.
      </p>

    <!-- Vision -->
    <div class="row gy-3 mt-4" data-aos="fade-up" data-aos-delay="200">
      <div class="col-lg-12">
        <div style="background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%); padding: 2rem; border-radius: 1rem; box-shadow: 0 4px 12px rgba(0,0,0,0.1); border-left: 4px solid #007bff;">
          <h3 style="text-align: center; font-weight: bold; font-size: 1.5rem; color: #333; margin-bottom: 1rem;">Vision Statement</h3>
          <p style="font-size: 1.2rem; line-height: 1.8; text-align: justify; color: #555;">
            "To stand as the forefront in audit and accounting services, renowned for our unwavering commitment to 'Passion for Excellence'. We envisage a future where our commitment to trust, precision, and innovation not only shapes today's financial landscape but ensures our relevance and resiliency for generations to come."
          </p>
        </div>
      </div>
    </div>

    <!-- Mission -->
    <div class="row gy-3 mt-4" data-aos="fade-up" data-aos-delay="200">
      <div class="col-lg-12">
        <div style="background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%); padding: 2rem; border-radius: 1rem; box-shadow: 0 4px 12px rgba(0,0,0,0.1); border-left: 4px solid #28a745;">
          <h3 style="text-align: center; font-weight: bold; font-size: 1.5rem; color: #333; margin-bottom: 1rem;">Mission Statement</h3>
          <p style="font-size: 1.2rem; line-height: 1.8; text-align: justify; color: #555;">
            "At Mendoza Tugano &amp; Co., CPAs, our mission is to deliver unmatched audit and accounting services, grounded in our unwavering 'Passion for Excellence'. We aim to redefine industry standards by consistently providing precision and trust. Through personalized, client-centric solutions and a firm commitment to ethical practices, we empower our clients to navigate the ever-evolving business landscape with confidence. Our steadfast dedication to 'Passion for Excellence' propels us to remain at the forefront of our field, ensuring our enduring relevance as we contribute positively to our clients and communities, regardless of the changes that may come our way."
          </p>
        </div>
      </div>
    </div>

    <!-- Values -->
<div class="row gy-3 mt-4" data-aos="fade-up" data-aos-delay="200">
  <div class="col-lg-12">
    <div style="background: linear-gradient(135deg, #ffffff 0%, #f8f9fa 100%); padding: 2rem; border-radius: 1rem; box-shadow: 0 4px 12px rgba(0,0,0,0.1); border-left: 4px solid #ffc107;">
      <h3 style="text-align: center; font-weight: bold; font-size: 1.5rem; color: #333; margin-bottom: 1.5rem;">Our Core Values</h3>

      <div class="row" style="font-size: 1.2rem; line-height: 1.8;">
        <div class="col-12 mb-3">
          <div style="background-color: rgba(0, 123, 255, 0.026); padding: 1rem; border-radius: 0.5rem;">
            <strong style="color: #326D78; font-size: 1.1em;">Excellence:</strong>
            <span style="color: #555;">We are committed to achieving the highest standards in all our services and operations, reflecting precision and professionalism.</span>
          </div>
        </div>
        <div class="col-12 mb-3">
          <div style="background-color: rgba(0,123,255,0.026); padding: 1rem; border-radius: 0.5rem;">
            <strong style="color: #326D78; font-size: 1.1em;">Integrity:</strong>
            <span style="color: #555;">The cornerstone of our practice. We uphold transparency, honesty, and accountability in all interactions.</span>
          </div>
        </div>
        <div class="col-12 mb-3">
          <div style="background-color: rgba(0,123,255,0.026); padding: 1rem; border-radius: 0.5rem;">
            <strong style="color: #326D78; font-size: 1.1em;">Innovation:</strong>
            <span style="color: #555;">We embrace innovation and stay ahead of industry advancements to provide cutting-edge services.</span>
          </div>
        </div>
        <div class="col-12 mb-3">
          <div style="background-color: rgba(0,123,255,0.026); padding: 1rem; border-radius: 0.5rem;">
            <strong style="color: #326D78; font-size: 1.1em;">Professional Development:</strong>
            <span style="color: #555;">We foster a culture of continuous learning and invest in the growth of our team.</span>
          </div>
        </div>
        <div class="col-12 mb-3">
          <div style="background-color: rgba(0,123,255,0.026); padding: 1rem; border-radius: 0.5rem;">
            <strong style="color: #326D78; font-size: 1.1em;">Teamwork:</strong>
            <span style="color: #555;">We promote collaboration, recognizing that our collective efforts exceed individual contributions.</span>
          </div>
        </div>
        <div class="col-12 mb-3">
          <div style="background-color: rgba(0,123,255,0.026); padding: 1rem; border-radius: 0.5rem;">
            <strong style="color: #326D78; font-size: 1.1em;">Care for Employees:</strong>
            <span style="color: #555;">We nurture a supportive, inclusive work environment for our employees' health, growth, and satisfaction.</span>
          </div>
        </div>
        <div class="col-12 mb-3">
          <div style="background-color: rgba(0,123,255,0.026); padding: 1rem; border-radius: 0.5rem;">
            <strong style="color: #326D78; font-size: 1.1em;">Community Engagement:</strong>
            <span style="color: #555;">We actively contribute to our communities, recognizing our responsibility beyond business.</span>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>


  </div>

</section><!-- /About Section -->
@endsection
