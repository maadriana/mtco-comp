@extends('layouts.app')

@section('title', 'Corporate Finance and Advisory')

@section('content')

<section id="corporate-finance" class="py-5">
  <div class="container">
    <div class="mb-3">
      <a href="{{ url('/#services') }}" class="btn btn-outline-secondary">
        ← Back
      </a>
    </div>

    <div class="section-title text-center">
      <h2>Corporate Finance and Advisory</h2>
      <p>Expert guidance in managing financial strategies and capital structures.</p>
    </div>

    <div class="content mt-4">
      <p>
        Our Corporate Finance and Advisory services focus on helping businesses make informed financial decisions. We assist with mergers and acquisitions, valuations, due diligence, and strategic financial planning tailored to each client’s goals.
      </p>
      <!-- Add more details as needed -->
    </div>
  </div>
</section>

@endsection
