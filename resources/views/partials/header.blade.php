<header id="header" class="header sticky-top">
  <div class="topbar d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">contact@mtco.com.ph</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+632 8887 1888</span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
      </div>
    </div>
  </div><!-- End Top Bar -->

  <div class="branding d-flex align-items-center">
    <div class="container position-relative d-flex align-items-center justify-content-between">
      <a href="{{ url('/') }}" class="logo d-flex align-items-center">
    <img src="{{ asset('assets/img/mtco-logo.png') }}" alt="MTCO Logo" height="40">
</a>


      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Home</a></li>
          <li><a href="#about">About</a></li>
          <li class="dropdown">
          <a href="#services"><span>Services</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
          <ul>
         <li><a href="#Audit and Assurance">Audit and Assurance</a></li>
         <li><a href="#Business Advisory">Business Advisory</a></li>
         <li><a href="#Outsourcing">Outsourcing</a></li>
         <li><a href="#Business Restructuring and Insolvency">Business Restructuring and Insolvency</a></li>
         <li><a href="#Corporate Finance and Advisory">Corporate Finance and Advisory</a></li>
         <li><a href="#Forensic and Litigation Support">Forensic and Litigation Support</a></li>
         <li><a href="#Governance, Risk and Internal Audit">Governance, Risk and Internal Audit</a></li>
         <li><a href="#Taxation">Taxation</a></li>
        </ul>
       </li>
          <li><a href="#team">People</a></li>
          <li class="dropdown"><a href="#"><span>Careers</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
              <li><a href="#">Dropdown 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="#">Deep Dropdown 1</a></li>
                  <li><a href="#">Deep Dropdown 2</a></li>
                  <li><a href="#">Deep Dropdown 3</a></li>
                  <li><a href="#">Deep Dropdown 4</a></li>
                  <li><a href="#">Deep Dropdown 5</a></li>
                </ul>
              </li>
              <li><a href="#">Dropdown 2</a></li>
              <li><a href="#">Dropdown 3</a></li>
              <li><a href="#">Dropdown 4</a></li>
            </ul>
          </li>
          <li><a href="#contact">Contact</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
    </div>
  </div>
</header>
