@extends('layouts.app')

@section('title', 'Audit and Assurance - Services')

@section('content')

<section id="audit-and-assurance" class="py-5">
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
    Audit and Assurance
  </h2>
</div>

<!-- Main Content -->
<div style="max-width: 900px; margin: 0 auto; padding: 1rem 0; text-align: justify;">
  <p style="font-size: 1.25rem; line-height: 1.8; margin: 1rem 0 2rem; color: #444444; font-weight: normal;">
    We recognise the commercial importance of providing assurance on your business controls and ultimately, satisfying regulatory requirements.
    We offer much more than just a basic compliance service. We understand the need to provide advice to help you develop your business and achieve your commercial objectives.
  </p>
      <p style="font-size: 1.25rem; line-height: 1.8; margin: 2rem 0; color: #444444; font-weight: normal;">
        The key to a valuable compliance service is the strength of the relationship between the client and service team. This enables our work to be thoroughly and accurately planned and tailored to each client's specific needs.
      </p>
      <p style="font-size: 1.25rem; line-height: 1.8; margin: 2rem 0; color: #444444; font-weight: normal;">
        By involving the most experienced members of our team right from the start, we will focus on the specific strategic needs of our clients. Moreover, we will be available throughout the year to discuss any development or any other matters that our clients choose to raise.
      </p>

      <h4 style="font-size: 1.6rem; color: #222222; margin-top: 3rem;">Our Services</h4>
      <ul style="font-size: 1.2rem; color: #444444; line-height: 1.8; padding-left: 1.5rem;">
        <li>External audit of financial statements</li>
        <li>Other assurance and attestation services</li>
      </ul>
    </div>

  </div>
</section>

@endsection
