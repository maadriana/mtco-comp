@extends('layouts.app')

@section('title', 'External Audit Associate - Careers')

@section('content')

<section id="external-audit-associate" class="py-5" data-aos="fade-up">
  <div class="container">

    <!-- Back Button -->
    <div class="back-button">
      <a href="{{ url('/careers/current-vacancies') }}" class="btn btn-outline-secondary">
        ← Back
      </a>
    </div>

    <!-- Title -->
    <div class="text-left mb-4" style="max-width: 900px; margin: 0 auto;">
  <h2 style="color: #22646e; font-weight: bold; font-size: 2rem; text-align: center; margin-bottom: 1.5rem;">
    External Audit Associate
  </h2>
  <p style="font-size: 1.15rem; color: #444;"><strong>Department:</strong> Audit and Assurance</p>
  <p style="font-size: 1.15rem; color: #444;"><strong>Job Type:</strong> Permanent</p>
</div>

    <!-- Main Content -->
    <div style="max-width: 900px; margin: 0 auto; font-size: 1.15rem; line-height: 1.8; color: #444444; text-align: justify;">

      <h4 style="font-weight: bold; margin-top: 1.5rem;">Responsibilities:</h4>
      <ul style="padding-left: 1.2rem; margin-top: 0.5rem;">
        <li>Assists in planning work on assigned segments of an audit</li>
        <li>Recommends the means of obtaining, analyzing and evaluating evidence</li>
        <li>Reviews transactions, documents, records, reports and methods for accuracy and effectiveness</li>
        <li>Prepares acceptable working papers that record and summarize data on the assigned audit segment</li>
        <li>Holds preliminary discussions of apparent deficiencies with operating personnel to verify and obtain explanations and responses</li>
        <li>Reports audit findings and makes recommendations for corrections and improvements</li>
        <li>Assists in the performance of special reviews at the request of management</li>
        <li>Performs other duties as may be assigned</li>
      </ul>

      <h4 style="font-weight: bold; margin-top: 2rem;">Qualifications:</h4>
      <ul style="padding-left: 1.2rem; margin-top: 0.5rem;">
        <li>Holder of Bachelor of Science in Accountancy, or its equivalent</li>
        <li>Must be professionally qualified certified public accountant</li>
        <li>Minimum 1 year of experience. Fresh graduates are welcome to apply</li>
        <li>Excellent analytical skills</li>
        <li>Excellent verbal and written communication skills</li>
        <li>Able to work in a fast-paced changing environment</li>
      </ul>

      <h4 style="font-weight: bold; margin-top: 2rem;">Requirements:</h4>
      <ul style="padding-left: 1.2rem; margin-top: 0.5rem;">
        <li>Curriculum vitae / resume</li>
        <li>Transcript of records</li>
        <li>Latest National Bureau of Investigation (NBI) clearance</li>
        <li>Results of the Certified Public Accountant Licensure Examinations (CPALE)</li>
        <li>Latest medical certificate</li>
        <li>2" x 2" picture on white background, taken within the last six months from date of application</li>
      </ul>

      <!-- Action Buttons -->
      <div class="mt-4 d-flex gap-2">
        <a href="#" class="btn btn-outline-primary">APPLY</a>
        <a href="{{ url('/careers/current-vacancies') }}" class="btn btn-outline-danger">RETURN</a>
      </div>

    </div>

  </div>
</section>

@endsection
