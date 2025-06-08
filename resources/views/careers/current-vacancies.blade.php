@extends('layouts.app')

@section('title', 'Current Vacancies - Careers')

@section('content')

<section id="current-vacancies" class="py-5" data-aos="fade-up">
  <div class="container">

    <!-- Back Button -->
    <div class="back-button">
      <a href="{{ url('/#careers') }}" class="btn btn-outline-secondary">
        ← Back
      </a>
    </div>

<!-- Title -->
<div class="text-center mb-4">
  <h2 style="color: #326D78; font-weight: bold; font-size: 2.2rem; margin-bottom: 0.5rem;">
    Current Vacancies
  </h2>
</div>

<!-- Main Content -->
<div style="max-width: 900px; margin: 0 auto; padding: 1rem 0; text-align: justify;">
  <p style="font-size: 1.25rem; line-height: 1.8; margin-bottom: 2rem; color: #444;">
    We are always interested in receiving applications from high-caliber individuals to further strengthen our team. To learn more about the positions we are recruiting for, please have a look at the openings available.
  </p>
</div>

<!-- Job Listings -->
<div class="row justify-content-center mt-4" style="max-width: 900px; margin: 0 auto;">

  <!-- Job 1 -->
  <div class="col-12 mb-4">
    <div class="row g-0 border rounded shadow-sm bg-white overflow-hidden flex-md-row align-items-center">

      <!-- Text Content -->
      <div class="col-md-8 p-4">
        <h5 style="font-weight: bold; color: #22646e;">External Audit Associate</h5>
        <ul class="list-unstyled mt-3 mb-4" style="font-size: 1rem; color: #444; line-height: 1.6;">
          <li><strong>Job Type:</strong> Permanent</li>
          <li><strong>Department:</strong> Audit and Assurance</li>
          <li><strong>Location:</strong> Makati City</li>
          <li><strong>Closing Date:</strong> Ongoing</li>
        </ul>
        <div class="d-flex justify-content-start gap-2">
          <a href="{{ route('careers.external-audit') }}" class="btn btn-outline-primary">View</a>
          <a href="#" class="btn btn-outline-success">Apply</a>
        </div>
      </div>

      <!-- Image -->
      <div class="col-md-4 d-none d-md-block">
        <img src="{{ asset('assets/img/job-audit.jpg') }}" alt="Audit Job" class="img-fluid h-100" style="object-fit: cover;">
      </div>
    </div>
  </div>

  <!-- Job 2 -->
  <div class="col-12 mb-4">
    <div class="row g-0 border rounded shadow-sm bg-white overflow-hidden flex-md-row align-items-center">

      <!-- Text Content -->
      <div class="col-md-8 p-4">
        <h5 style="font-weight: bold; color: #22646e;">Accounting Services Associate</h5>
        <ul class="list-unstyled mt-3 mb-4" style="font-size: 1rem; color: #444; line-height: 1.6;">
          <li><strong>Job Type:</strong> Permanent</li>
          <li><strong>Department:</strong> Accounting and Outsource Services</li>
          <li><strong>Location:</strong> Makati City</li>
          <li><strong>Closing Date:</strong> Ongoing</li>
        </ul>
        <div class="d-flex justify-content-start gap-2">
          <a href="{{ route('careers.accounting-services') }}" class="btn btn-outline-primary">View</a>
          <a href="#" class="btn btn-outline-success">Apply</a>
        </div>
      </div>

      <!-- Image -->
      <div class="col-md-4 d-none d-md-block">
        <img src="{{ asset('assets/img/job-accounting.jpg') }}" alt="Accounting Job" class="img-fluid h-100" style="object-fit: cover;">
      </div>
    </div>
  </div>

</div>

</div>

</section>

@endsection
