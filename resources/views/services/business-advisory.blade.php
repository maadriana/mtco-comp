@extends('layouts.app')

@section('title', 'Business Advisory - Services')

@section('content')

<section id="business-advisory" class="py-5">
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
        Business Advisory
      </h2>
    </div>

    <!-- Main Content -->
    <div style="max-width: 900px; margin: 0 auto; padding: 1rem 0; text-align: justify;">
      <p style="font-size: 1.25rem; line-height: 1.8; margin: 1rem 0 2rem; color: #444444; font-weight: normal;">
        Our breadth of experience allows you to benefit from specific and targeted consulting advice to support your long-term growth plans.
      </p>
      <p style="font-size: 1.25rem; line-height: 1.8; margin: 2rem 0; color: #444444; font-weight: normal;">
        By developing a real understanding of your business and the issues and challenges you face, our advisory teams use local and global knowledge to help you achieve your goals.
      </p>
      <p style="font-size: 1.25rem; line-height: 1.8; margin: 2rem 0; color: #444444; font-weight: normal;">
        Not only do we help you understand and plan to mitigate your vulnerabilities, we also help you to establish a clear pathway to success.
      </p>
      <p style="font-size: 1.25rem; line-height: 1.8; margin: 2rem 0; color: #444444; font-weight: normal;">
        We have a proven track record of working with a range of clients — from family-owned businesses to public companies and from entrepreneurial start-ups to established global entities — helping them develop and refine their business strategies.
      </p>

      <h4 style="font-size: 1.6rem; color: #222222; margin-top: 3rem;">Our Services</h4>
      <ul style="font-size: 1.2rem; color: #444444; line-height: 1.8; padding-left: 1.5rem;">
        <li>Business consulting</li>
        <li>Strategic planning</li>
      </ul>
    </div>

  </div>
</section>

@endsection
