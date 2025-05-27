@extends('layouts.app')

@section('title', 'Pamela Grace S. Tangso - Partner')

@section('content')

<section class="team-member-detail py-5">
  <div class="container">
    <div class="mb-3">
  <a href="{{ url('/#team') }}" class="btn btn-outline-secondary">
    ← Back
  </a>
</div>

    </div>
    <div class="text-center mb-4">>
    <img src="{{ asset('assets/img/team/pamela-grace-s-tangso.jpg') }}" class="img-fluid mb-4" style="max-width: 300px;" alt="Pamela Grace S. Tangso">
    <h2>Pamela Grace S. Tangso</h2>
    <h4 class="text-muted">Partner</h4>
    <p class="email"><a href="mailto:pamelagrace.tangso@mtco.com.ph">pamelagrace.tangso@mtco.com.ph</a></p>
    </div>

     <div class="text-start mt-4 description">
      <p>Pam embarked on her professional journey, dedicating seven formative years to Mendoza Querido & Co. During her tenure, she expertly conducted audits and handled tax services for a diverse array of companies spanning multiple industries. Her clientele encompassed manufacturing, manning agencies, merchandising, stock brokerage firms, banking institutions, online gaming enterprises, trusts, non-profit organizations, cooperatives, power generation companies, property management firms, and Business Process Outsourcing (BPO) entities.</p>

      <p>Transitioning to the private sector for ten years, Pam assumed various pivotal tax-related roles. Her most recent position was with Global Business Power Corporation, a wholly-owned subsidiary of Meralco PowerGen Corporation (MGen), where she served as the Tax Head – Officer-in-Charge. In this capacity, she adeptly oversaw tax compliance and planning functions, offering comprehensive taxation services across the organization. Pam played a pivotal role in initiating a range of tax strategies aimed at mitigating the company's tax risks. Subsequently, in 2022, she rejoined Mendoza Querido & Co.</p>

      <p>Pam is a proud graduate of the University of Santo Tomas, having earned her Bachelor of Science in Accountancy. She is a certified public accountant (CPA) and an esteemed member of the Philippine Institute of Certified Public Accountants (PICPA).</p>

    </div>
  </div>
</section>
@endsection
