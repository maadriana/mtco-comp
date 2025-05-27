@extends('layouts.app')

@section('title', 'Governance, Risk and Internal Audit')

@section('content')

<section id="governance-risk" class="py-5">
  <div class="container">
    <div class="mb-3">
      <a href="{{ url('/#services') }}" class="btn btn-outline-secondary">
        ← Back
      </a>
    </div>

    <div class="section-title text-center">
      <h2>Governance, Risk and Internal Audit</h2>
      <p>Ensuring compliance, managing risk, and enhancing governance frameworks.</p>
    </div>

    <div class="content mt-4">
      <p>
        We help organizations improve their internal control environments, evaluate risks, and align their operations with best governance practices. Our services include internal audit, enterprise risk management, and compliance advisory.
      </p>
      <!-- You can expand this section with more details as needed -->
    </div>
  </div>
</section>

@endsection
