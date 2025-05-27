@extends('layouts.app')

@section('title', 'Ephraim T. Tugano - Partner')

@section('content')

<section class="team-member-detail py-5">
  <div class="container">
    <div class="mb-3">
  <a href="{{ url('/#team') }}" class="btn btn-outline-secondary">
    ← Back
  </a>
</div>

    </div>
    <div class="text-center mb-4">
    <img src="{{ asset('assets/img/team/ephraim-t-tugano.jpg') }}" class="img-fluid mb-4" style="max-width: 300px;" alt="Ephraim T. Tugano">
    <h2>Ephraim T. Tugano</h2>
    <h4 class="text-muted">Partner</h4>
    <p class="email"><a href="mailto:ephraim.tugano@mtco.com.ph">ephraim.tugano@mtco.com.ph</a></p>
    </div>

<div class="text-start mt-4 description">
      <p>Ephraim is a seasoned Certified Public Accountant (CPA) with an impressive career spanning over twelve years in public accounting, encompassing both assurance and non-assurance services. His tenure includes a prominent role as a former Assurance Partner and Ethics Director at Mendoza Querido & Co. His extensive industry expertise covers a diverse spectrum, including manufacturing, retail, pharmaceuticals, services, mining, hospitality, real estate, regional operating headquarters, foundations, and non-profit organizations.</p>

      <p>Ephraim has held managerial positions overseeing various audit engagements for private entities, including projects funded by the European Union (EU). He has excelled in conducting due diligence exercises and actively contributed to purchase price allocations, goodwill valuation, and impairment testing for a wide array of entities.</p>

      <p>A key contributor to his former firm, Ephraim played a pivotal role in implementing cutting-edge audit software and spearheading the revision of the audit and quality assurance manual. Additionally, he served as the Chief Financial Officer for a non-audit client, showcasing his multifaceted financial acumen.</p>

      <p>Ephraim's professional journey also includes hands-on experience in accounting and consulting assignments, where he played a crucial role in migrating accounting records to facilitate the implementation of a computerized accounting system. </p>

      <p>His educational foundation comprises a bachelor’s degree in accountancy earned from Far Eastern University. As a dedicated Certified Public Accountant, Ephraim is an active member of the esteemed Philippine Institute of Certified Public Accountants (PICPA).</p>
    </div>
  </div>
</section>
@endsection
