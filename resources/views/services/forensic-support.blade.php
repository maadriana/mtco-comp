@extends('layouts.app')

@section('title', 'Forensic and Litigation Support - Services')

@section('content')

<section id="forensic-litigation" class="py-5">
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
        Forensic and Litigation Support
      </h2>
    </div>

    <!-- Main Content -->
    <div style="max-width: 900px; margin: 0 auto; padding: 1rem 0; text-align: justify;">
      <p style="font-size: 1.25rem; line-height: 1.8; margin: 1rem 0 2rem; color: #444444; font-weight: normal;">
        Legal challenges come in many forms. When these challenges need to be resolved through litigation, you require effective support that will protect your interests.
      </p>
      <p style="font-size: 1.25rem; line-height: 1.8; margin: 2rem 0; color: #444444; font-weight: normal;">
        We provide a range of investigation services for contractual and commercial disputes, forensic investigations, valuations, and individual and family disputes.
      </p>
      <p style="font-size: 1.25rem; line-height: 1.8; margin: 2rem 0; color: #444444; font-weight: normal;">
        We offer experts with skills in a variety of areas and experience in all types of dispute, globally.
      </p>

      <h4 style="font-size: 1.6rem; color: #222222; margin-top: 3rem;">We regularly advise clients on:</h4>
      <ul style="font-size: 1.2rem; color: #444444; line-height: 1.8; padding-left: 1.5rem;">
        <li>Commercial and contractual disputes and mediation involving business or share valuations</li>
        <li>Expert witness and quantification of loss</li>
        <li>Forensic investigations, particularly in relation to fraud claims, tax investigations and asset tracing</li>
      </ul>
    </div>

  </div>
</section>

@endsection
