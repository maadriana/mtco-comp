@extends('layouts.app')

@section('title', 'Accounting Services Associate - Careers')

@section('content')

<section id="accounting-services-associate" class="pt-4 pb-5" data-aos="fade-up">
  <div class="container">

    <!-- Back Button (original version) -->
    <div class="back-button mb-3">
      <a href="{{ url('/careers/current-vacancies') }}" class="btn btn-outline-secondary">
        ← Back
      </a>
    </div>

    <!-- Title & Meta Info -->
    <div class="text-center mb-3" style="max-width: 900px; margin: 0 auto;">
      <h2 style="color: #22646e; font-weight: bold; font-size: 2rem; margin-bottom: 1rem;">
        Accounting Services Associate
      </h2>
      <p style="font-size: 1.15rem; color: #444;"><strong>Department:</strong> Audit and Assurance</p>
      <p style="font-size: 1.15rem; color: #444;"><strong>Job Type:</strong> Permanent</p>
    </div>

    <!-- Main Content -->
    <div style="max-width: 900px; margin: 0 auto; font-size: 1.15rem; line-height: 1.8; color: #444444; text-align: justify;">

      <!-- Responsibilities -->
      <h4 style="font-weight: bold; margin-top: 2rem;">Responsibilities:</h4>
      <ul style="padding-left: 1.2rem; margin-top: 0.5rem;">
        <li>Administer all accounting, taxation process and ensure optimal quality of all processes</li>
        <li>Coordinate with all third-party application providers and shared services</li>
        <li>Prepare reports for ledgers, trial balance and reconcile all statements and ensure integrity of all data</li>
        <li>Perform research on various accounting processes, analyze variances and prepare appropriate reports</li>
        <li>Administer all reconcile statements for cash and income accounts</li>
        <li>Maintain portfolio activity, update entries in general ledger and evaluate it regularly to ensure accuracy in rate</li>
        <li>Prepare reports for respective accounts and clients</li>
        <li>Coordinate with internal auditors, answer all related queries, and prepare associated reports</li>
        <li>Monitor all accounting deliverables, process all vouchers and ensure work is completed on time</li>
        <li>Prepare reports to be submitted to management and recommend improvements if required</li>
        <li>Evaluate all cost receivables and payables on a regular basis to ensure accuracy</li>
        <li>Manage all information and update it on automated systems and generate accounting reports</li>
        <li>Forecast budget requirements, update journal entries, and prepare reports accordingly</li>
      </ul>

      <!-- Qualifications -->
      <h4 style="font-weight: bold; margin-top: 2rem;">Qualifications:</h4>
      <ul style="padding-left: 1.2rem; margin-top: 0.5rem;">
        <li>Holder of Bachelor of Science in Accountancy, or its equivalent</li>
        <li>CPA title is optional</li>
        <li>Minimum 1 year of experience. Fresh graduates are welcome to apply</li>
        <li>Knowledge of any accounting software is an advantage</li>
        <li>Excellent analytical skills</li>
        <li>Excellent verbal and written communication skills</li>
        <li>Able to work in a fast-paced changing environment</li>
      </ul>

      <!-- Requirements -->
      <h4 style="font-weight: bold; margin-top: 2rem;">Requirements:</h4>
      <ul style="padding-left: 1.2rem; margin-top: 0.5rem;">
        <li>Curriculum vitae / resume</li>
        <li>Transcript of records</li>
        <li>Latest National Bureau of Investigation (NBI) clearance</li>
        <li>Results of the Certified Public Accountant Licensure Examinations (CPALE), if CPA</li>
        <li>Latest medical certificate</li>
        <li>2" x 2" picture on white background, taken within the last six months from date of application</li>
      </ul>

      <!-- Action Buttons -->
      <div class="mt-4 d-flex flex-wrap gap-2 justify-content-center">
        <a href="#" class="btn btn-outline-primary px-4 rounded-pill shadow-sm">APPLY</a>
        <a href="{{ url('/careers/current-vacancies') }}" class="btn btn-outline-danger px-4 rounded-pill shadow-sm">RETURN</a>
      </div>

    </div>

  </div>
</section>

@endsection
