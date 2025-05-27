@extends('layouts.app')

@section('title', 'Outsourcing')

@section('content')

<section id="outsourcing" class="py-5">
  <div class="container">
    <div class="mb-3">
      <a href="{{ url('/#services') }}" class="btn btn-outline-secondary">
        ← Back
      </a>
    </div>

    <div class="section-title text-center">
      <h2>Outsourcing</h2>
      <p>Reliable business process outsourcing solutions tailored to your needs.</p>
    </div>

    <div class="content mt-4">
      <p>
        Our outsourcing services provide clients with cost-effective and scalable solutions for handling non-core business functions. We help streamline operations through accounting services, payroll processing, and financial reporting support, allowing your business to focus on its core competencies.
      </p>
    </div>
  </div>
</section>

@endsection
