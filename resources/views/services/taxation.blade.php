@extends('layouts.app')

@section('title', 'Taxation - Services')

@section('content')

<section id="taxation" class="py-5">
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
        Taxation
      </h2>
    </div>

    <!-- Main Content -->
    <div style="max-width: 900px; margin: 0 auto; padding: 1rem 0; text-align: justify;">
      <p style="font-size: 1.25rem; line-height: 1.8; margin: 1rem 0 2rem; color: #444444; font-weight: normal;">
        The tax issues confronting every individual and every public, private and multinational company are unique.
      </p>
      <p style="font-size: 1.25rem; line-height: 1.8; margin: 2rem 0; color: #444444; font-weight: normal;">
        That is why at Mendoza Tugano &amp; Co. we specialise in providing precisely tailored tax solutions. Our priority is to provide you with an outcome that best meets your individual business needs. While it is important to deliver practical business solutions, we also understand that the most meaningful advice must be completely appropriate to the environment in which you operate.
      </p>
      <p style="font-size: 1.25rem; line-height: 1.8; margin: 2rem 0; color: #444444; font-weight: normal;">
        We provide a comprehensive range of tax advisory and tax compliance services. With our unique experience in the Philippines, we offer practical solutions to assist clients who face an ever changing environment in this economy. We regularly advise our clients on their investment strategies and tax-efficient structures, cross-border merger and acquisition issues, corporate restructurings, pre-IPO tax planning, field-audit investigations and international assignment tax planning.
      </p>

      <h4 style="font-size: 1.6rem; color: #222222; margin-top: 3rem;">Our Services</h4>
      <ul style="font-size: 1.2rem; color: #444444; line-height: 1.8; padding-left: 1.5rem;">
        <li>Tax planning and advisory</li>
        <li>Tax compliance</li>
        <li>Tax assessments and claims assistance</li>
        <li>Estate tax advisory</li>
      </ul>
    </div>

  </div>
</section>

@endsection
