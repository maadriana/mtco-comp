@extends('layouts.app')

@section('title', 'Taxation')

@section('content')

<section id="taxation" class="py-5">
  <div class="container">
    <div class="mb-3">
      <a href="{{ url('/#services') }}" class="btn btn-outline-secondary">
        ← Back
      </a>
    </div>

    <div class="section-title text-center">
      <h2>Taxation</h2>
      <p>Expert guidance and compliance support for all your tax needs.</p>
    </div>

    <div class="content mt-4">
      <p>
        We provide comprehensive tax services including tax planning, compliance, and advisory. Our team ensures that your business meets all local and international tax obligations efficiently while identifying opportunities for tax savings and risk mitigation.
      </p>
    </div>
  </div>
</section>

@endsection
