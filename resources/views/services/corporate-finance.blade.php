@extends('layouts.app')

@section('title', 'Corporate Finance and Advisory - Services')

@section('content')

<section id="corporate-finance" class="py-5" data-aos="fade-up">
  <div class="container">

    <!-- Back Button -->
<div class="back-button">
  <a href="{{ url('/#services') }}" class="btn btn-outline-secondary">
    ← Back
  </a>
</div>


    <!-- Title -->
    <div class="text-center" style="margin-bottom: 0.5rem;">
      <h2 style="color: #326D78; font-weight: bold; font-size: 2.2rem; margin-bottom: 0.5rem;">
        Corporate Finance and Advisory
      </h2>
    </div>

    <!-- Main Content -->
    <div style="max-width: 900px; margin: 0 auto; padding: 1rem 0; text-align: justify;">
      <p style="font-size: 1.25rem; line-height: 1.8; margin: 1rem 0 2rem; color: #444444; font-weight: normal;">
        Whatever ambitions you have for your business, Mendoza Tugano &amp; Co., CPAs' corporate finance specialists can help you to achieve them.
      </p>
      <p style="font-size: 1.25rem; line-height: 1.8; margin: 2rem 0; color: #444444; font-weight: normal;">
        We can provide specialist skills, practical experience, know-how and objectivity to assist you in your future plans, whether you are looking to expand, merge or sell your business.
      </p>
      <p style="font-size: 1.25rem; line-height: 1.8; margin: 2rem 0; color: #444444; font-weight: normal;">
        We provide a comprehensive range of partner-led advisory and transaction support services. Our clients range from mid-sized quoted companies and large private concerns to smaller owner-managed businesses across a wide variety of industry sectors both locally and overseas.
      </p>
      <p style="font-size: 1.25rem; line-height: 1.8; margin: 2rem 0; color: #444444; font-weight: normal;">
        Our team of professionals have the capability of identifying growth opportunities for businesses from the launch of start-up or public listing ventures or during the consolidation and development phases of an established enterprise.
      </p>

      <h4 style="font-size: 1.6rem; color: #222222; margin-top: 3rem;">Our Services</h4>
      <ul style="font-size: 1.2rem; color: #444444; line-height: 1.8; padding-left: 1.5rem;">
        <li>Financial due diligence</li>
        <li>Valuations</li>
        <li>Initial public offerings</li>
        <li>Mergers and acquisitions</li>
      </ul>
    </div>

  </div>
</section>

@endsection
