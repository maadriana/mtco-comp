@extends('layouts.app')

@section('title', 'Outsourcing - Services')

@section('content')

<section id="outsourcing" class="py-5">
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
        Outsourcing
      </h2>
    </div>

    <!-- Main Content -->
    <div style="max-width: 900px; margin: 0 auto; padding: 1rem 0; text-align: justify;">
      <p style="font-size: 1.25rem; line-height: 1.8; margin: 1rem 0 2rem; color: #444444; font-weight: normal;">
        At Mendoza Tugano &amp; Co., CPAs (MTC), we have an outsourcing division to provide our clients with a tailored solution for all our clients' bookkeeping requirements.
      </p>
      <p style="font-size: 1.25rem; line-height: 1.8; margin: 2rem 0; color: #444444; font-weight: normal;">
        Running a business today is challenging. There are more distractions to cope with, more relationships to manage and less time to devote to key actions. The solution? Outsource some or all of your business' financial and administrative functions in order to free up valuable resource and reduce costs.
      </p>
      <p style="font-size: 1.25rem; line-height: 1.8; margin: 2rem 0; color: #444444; font-weight: normal;">
        Our dedicated outsourcing team provides a full range of services, from basic bookkeeping and the preparation of annual or management accounts, payroll processing, software support and financial benchmarking.
      </p>

      <h4 style="font-size: 1.6rem; color: #222222; margin-top: 3rem;">Our Services</h4>
      <ul style="font-size: 1.2rem; color: #444444; line-height: 1.8; padding-left: 1.5rem;">
        <li>Accounting and bookkeeping services</li>
        <li>Compilation of financial statements</li>
        <li>Financial forecasting and modelling</li>
        <li>Management reporting</li>
        <li>Payroll processing</li>
      </ul>
    </div>

  </div>
</section>

@endsection
