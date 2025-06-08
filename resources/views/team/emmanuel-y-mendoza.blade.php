@extends('layouts.app')

@section('title', 'Emmanuel Y. Mendoza - Managing Partner')

@section('content')

<section class="team-member-detail py-5" data-aos="fade-up">
  <div class="container">

    <!-- Back Button -->
<div class="back-button">
  <a href="{{ url('/#team') }}" class="btn btn-outline-secondary">
    ← Back
  </a>
</div>


    <!-- Profile Section -->
    <div class="text-center mb-4">
      <img src="{{ asset('assets/img/team/emmanuel-y-mendoza.jpeg') }}" class="img-fluid mb-4" style="max-width: 300px;" alt="Emmanuel Y. Mendoza">
      <h2 class="fw-bold mb-1" style="color: #2f5d62;">Emmanuel Y. Mendoza</h2>
        <h5 class="text-muted">Managing Partner</h5>
        <p class="mt-2">
          <a href="mailto:eymendoza@mtco.com.ph" class="text-decoration-none" style="color: #007bff;">
            eymendoza@mtco.com.ph
          </a>
        </p>
      </div>

    <!-- Bio Content -->
    <div class="text-start mt-4 description">
      <p>Mr. Emmanuel Y. Mendoza, a distinguished professional, formerly served as the Managing Partner and co-founder of Mendoza Querido & Co. With a career that spans over a decade, he commenced his journey by dedicating ten years to the Financial Services Group of the Philippines' premier accounting firm, SyCip, Gorres, Velayo & Co (SGV & Co.). His expertise encompasses a wide array of fields, from auditing to conducting meticulous due diligence reviews for mergers and acquisitions, bond offerings, initial public offerings, and investment valuation.</p>

      <p>Beyond his public practice experience, Mr. Mendoza ventured into the intricate landscape of banking operations. Serving as the First Vice President and Financial Controller of Global Business Bank (GLOBALBANK), an esteemed affiliate of Metrobank and the Tokai Bank of Japan, he played pivotal roles. His responsibilities extended to Deputy Compliance Officer, Liaison Officer with the Bangko Sentral ng Pilipinas, and active membership in the Bank's Asset Liability Committee (ALCO) and the Operations and Compliance Committee. Notably, he contributed significantly to the successful three-way merger and acquisition between GLOBALBANK, Philippine Banking Corporation, and Asianbank Corporation. His expertise was instrumental in navigating regulatory requirements, tax planning, computer system integration, and the harmonization of policies and procedures. As Controller, he also provided oversight to the Bank's Risk Management Unit and played a key role in crafting its risk management manual.</p>

      <p>Mr. Mendoza's influence extends to corporate governance as an Independent Director of a publicly listed universal bank since 2015. In this capacity, he presides as the Chairman of the Audit Committee and actively participates in the bank's IT Steering Committee, where he led the evaluation team that selected the core banking system. Furthermore, he served as an Independent Director of Medicard Philippines, one of the largest Health Maintenance Organizations (HMOs), where he holds the position of Chairman of the Audit and Risk Committee.</p>

      <p>Adding to his diverse roles, Mr. Mendoza contributes his expertise as an Independent Director of the Makati Sports Club, where he takes on the role of Chairman of the Planning and Development Committee.</p>

      <p>Mr. Mendoza's academic journey is marked by distinction, having graduated with a Bachelor in Business Administration (BBA) in Accountancy from the University of the Philippines. His pursuit of knowledge led him to attain a Master's in Management from the Asian Institute of Management. He is a Certified Public Accountant and maintains active memberships in esteemed professional organizations, including the Philippine Institute of Certified Public Accountants (PICPA), the Association of Certified Public Accountants in Public Practice (ACPAPP), and the Bank Institute of the Philippines. Notably, he is a valued member of the Committee on Auditing Standards and Practices within ACPAPP.</p>
    </div>

  </div>
</section>

@endsection
