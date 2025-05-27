@extends('layouts.app')

@section('title', 'Business Advisory')

@section('content')

<section id="business-advisory" class="py-5">
  <div class="container">
    <div class="mb-3">
      <a href="{{ url('/#services') }}" class="btn btn-outline-secondary">
        ← Back
      </a>
    </div>

    <div class="section-title text-center">
      <h2>Business Advisory</h2>
      <p>Helping you grow through strategic financial and operational advice.</p>
    </div>

    <div class="content mt-4">
      <p>
        Our business advisory services are focused on enhancing your organization’s effectiveness through strategic planning, financial management, and operational improvements.
        Whether you're expanding, restructuring, or optimizing, our experts offer guidance tailored to your goals.
      </p>
      <!-- Add more specific service content here if needed -->
    </div>
  </div>
</section>

@endsection
