@extends('layouts.app')

@section('title', 'Graduate - Careers')

@section('content')

<section id="graduate" class="py-5" data-aos="fade-up">
  <div class="container">

    <!-- Back Button -->
<div class="back-button">
  <a href="{{ url('/#careers') }}" class="btn btn-outline-secondary">
    ← Back
  </a>
</div>

    <!-- Title -->
    <div class="text-center" style="margin-bottom: 0.5rem;">
      <h2 style="color: #326D78; font-weight: bold; font-size: 2.2rem; margin-bottom: 0.5rem;">
        Graduate
      </h2>
    </div>

<!-- Main Content -->
<div style="max-width: 900px; margin: 0 auto; padding: 1rem 0; text-align: justify;">
  <p style="font-size: 1.25rem; line-height: 1.8; margin: 1rem 0 2rem; color: #444444;">
    Are you ready to explore a world of opportunities?
  </p>

  <p style="font-size: 1.25rem; line-height: 1.8; margin-bottom: 1.5rem; color: #444444;">
    <strong>You value learning and you are ambitious.</strong> Mendoza Tugano &amp; Co. offers you a tailor-made program focused on maximizing your learning and development so you get to where you want to be faster and more effectively.
  </p>

  <p style="font-size: 1.25rem; line-height: 1.8; margin-bottom: 1.5rem; color: #444444;">
    <strong>You want the chance to work abroad.</strong> Mendoza Tugano &amp; Co. not only aims to deliver value to our clients, but also to enrich your experience with us, both professionally and personally.
  </p>

  <p style="font-size: 1.25rem; line-height: 1.8; margin-bottom: 1.5rem; color: #444444;">
    <strong>You want to work with renowned clients.</strong> Mendoza Tugano &amp; Co. seeks out the latest and best solutions for our top tier clients who are renowned and successful organisations.
  </p>

  <p style="font-size: 1.25rem; line-height: 1.8; margin-bottom: 1.5rem; color: #444444;">
    <strong>You want to have fun!</strong> Work hard, play hard. Mendoza Tugano &amp; Co. will expect a lot from you, but you will get a lot back. You will get a chance to experience the open and friendly culture and gain many personal friendships.
  </p>

  <p style="font-size: 1.25rem; line-height: 1.8; margin-top: 2rem; color: #444444;">
    Please send a copy of your curriculum vitae to <a href="mailto:hr@mtco.com.ph" style="color: #007bff; text-decoration: underline;">Admin and Human Resources</a>.
  </p>
</div>


@endsection
