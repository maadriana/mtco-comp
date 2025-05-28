@extends('layouts.app')

@section('title', 'Governance, Risk and Internal Audit - Services')

@section('content')

<section id="governance-risk" class="py-5">
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
        Governance, Risk and Internal Audit
      </h2>
    </div>

    <!-- Main Content -->
    <div style="max-width: 900px; margin: 0 auto; padding: 1rem 0; text-align: justify;">
      <p style="font-size: 1.25rem; line-height: 1.8; margin: 1rem 0 2rem; color: #444444; font-weight: normal;">
        Robust governance and effective risk management are no longer matters of pure regulatory compliance. Businesses increasingly recognise the potential to maximise performance by applying best practice and building in additional operational assurances.
      </p>
      <p style="font-size: 1.25rem; line-height: 1.8; margin: 2rem 0; color: #444444; font-weight: normal;">
        The management of risk and the implementation of robust corporate governance has become an increasingly important aspect of global business. Many companies are required by law, regulation or stakeholder concerns to adopt governance processes and procedures, and many more choose to do so voluntarily as part of a successful business strategy. Our Governance, Risk and Internal Audit practice offers a range of services that make it easier for board directors to maintain robust governance and assurance frameworks and to manage risks effectively.
      </p>
      <p style="font-size: 1.25rem; line-height: 1.8; margin: 2rem 0; color: #444444; font-weight: normal;">
        At Mendoza Querido &amp; Co., we work with businesses in all sectors, advising on their governance structures, providing comfort on their control environments and helping to embed transparency and accountability.
      </p>

      <h4 style="font-size: 1.6rem; color: #222222; margin-top: 3rem;">Our governance, risk, and internal audit services cover three areas:</h4>
      <ul style="font-size: 1.2rem; color: #444444; line-height: 1.8; padding-left: 1.5rem;">
        <li>Corporate governance</li>
        <li>Controls assurance</li>
        <li>Internal audit</li>
      </ul>
    </div>

  </div>
</section>

@endsection
