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
    <div class="row justify-content-center gy-4" style="max-width: 900px; margin: 0 auto;">

      @php
        $jobs = [
          [
            'title' => 'External Audit Associate',
            'type' => 'Permanent',
            'department' => 'Audit and Assurance',
            'location' => 'Makati City',
            'closing' => 'Ongoing',
            'image' => 'assets/img/job-audit.jpg',
            'route' => route('careers.external-audit'),
          ],
          [
            'title' => 'Accounting Services Associate',
            'type' => 'Permanent',
            'department' => 'Accounting and Outsource Services',
            'location' => 'Makati City',
            'closing' => 'Ongoing',
            'image' => 'assets/img/job-accounting.jpg',
            'route' => route('careers.accounting-services'),
          ],
        ];
      @endphp

      @foreach ($jobs as $job)
      <div class="col-12">
        <div class="card border-0 shadow-sm overflow-hidden job-card h-100">
          <div class="row g-0 align-items-stretch">

            <!-- Image -->
            <div class="col-md-4 d-none d-md-block">
              <img src="{{ asset($job['image']) }}" alt="{{ $job['title'] }}" class="img-fluid h-100 w-100" style="object-fit: cover;">
            </div>

            <!-- Text Content -->
            <div class="col-md-8 p-4 d-flex flex-column justify-content-between">
              <div>
                <h5 style="font-weight: bold; color: #22646e;">{{ $job['title'] }}</h5>
                <ul class="list-unstyled mt-3 mb-4" style="font-size: 1rem; color: #444; line-height: 1.6;">
                  <li><strong>Job Type:</strong> {{ $job['type'] }}</li>
                  <li><strong>Department:</strong> {{ $job['department'] }}</li>
                  <li><strong>Location:</strong> {{ $job['location'] }}</li>
                  <li><strong>Closing Date:</strong> {{ $job['closing'] }}</li>
                </ul>
              </div>
              <div class="d-flex flex-wrap gap-2">
                <a href="{{ $job['route'] }}" class="btn btn-outline-primary px-4 rounded-pill shadow-sm">View</a>
                <a href="#" class="btn btn-outline-success px-4 rounded-pill shadow-sm">Apply</a>
              </div>
            </div>

          </div>
        </div>
      </div>
      @endforeach

    </div>

  </div>
</section>

<style>
  .job-card {
    transition: transform 0.2s ease-in-out, box-shadow 0.2s ease-in-out;
    border-radius: 8px;
  }

  .job-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
  }

  .btn-outline-primary,
  .btn-outline-success {
    transition: all 0.2s ease;
  }

  .btn-outline-primary:hover,
  .btn-outline-success:hover {
    transform: scale(1.02);
  }
</style>

@endsection
