<header id="header" class="header sticky-top">
  <!-- Top Bar -->
  <div class="topbar d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center">
          <a href="mailto:contact@mtco.com.ph">contact@mtco.com.ph</a>
        </i>
        <i class="bi bi-phone d-flex align-items-center ms-4">
          <span>+632 8887 1888</span>
        </i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
      </div>
    </div>
  </div><!-- End Top Bar -->

  <!-- Branding + Nav -->
  <div class="branding d-flex align-items-center">
    <div class="container position-relative d-flex align-items-center justify-content-between">

      <!-- Logo -->
      <a href="{{ url('/') }}" class="logo d-flex align-items-center">
        <img src="{{ asset('assets/img/mtco-logo.png') }}" alt="MTCO Logo" height="40">
      </a>

      <!-- Navigation -->
      <nav id="navmenu" class="navmenu">
        <ul>
          <li>
            <a href="{{ url('/#hero') }}" class="{{ request()->is('/') ? 'active' : '' }}">Home</a>
          </li>

          <li class="dropdown {{ request()->is('services/*') ? 'active' : '' }}">
            <a href="{{ url('/#services') }}">
              <span>Services</span> <i class="bi bi-chevron-down toggle-dropdown"></i>
            </a>
            <ul>
              <li><a href="{{ route('services.audit') }}" class="{{ request()->routeIs('services.audit') ? 'active' : '' }}">Audit and Assurance</a></li>
              <li><a href="{{ route('services.advisory') }}" class="{{ request()->routeIs('services.advisory') ? 'active' : '' }}">Business Advisory</a></li>
              <li><a href="{{ route('services.outsourcing') }}" class="{{ request()->routeIs('services.outsourcing') ? 'active' : '' }}">Outsourcing</a></li>
              <li><a href="{{ route('services.restructuring') }}" class="{{ request()->routeIs('services.restructuring') ? 'active' : '' }}">Business Restructuring and Insolvency</a></li>
              <li><a href="{{ route('services.finance') }}" class="{{ request()->routeIs('services.finance') ? 'active' : '' }}">Corporate Finance and Advisory</a></li>
              <li><a href="{{ route('services.forensic') }}" class="{{ request()->routeIs('services.forensic') ? 'active' : '' }}">Forensic and Litigation Support</a></li>
              <li><a href="{{ route('services.governance') }}" class="{{ request()->routeIs('services.governance') ? 'active' : '' }}">Governance, Risk and Internal Audit</a></li>
              <li><a href="{{ route('services.taxation') }}" class="{{ request()->routeIs('services.taxation') ? 'active' : '' }}">Taxation</a></li>
            </ul>
          </li>

          <li>
            <a href="{{ url('/#team') }}" class="{{ request()->is('#team') ? 'active' : '' }}">People</a>
          </li>

          <li class="dropdown {{ request()->is('careers/*') ? 'active' : '' }}">
            <a href="{{ url('/#careers') }}">
              <span>Careers</span> <i class="bi bi-chevron-down toggle-dropdown"></i>
            </a>
            <ul>
              <li><a href="{{ route('careers.vacancies') }}" class="{{ request()->routeIs('careers.vacancies') ? 'active' : '' }}">Current Vacancies</a></li>
              <li><a href="{{ route('careers.professionals') }}" class="{{ request()->routeIs('careers.professionals') ? 'active' : '' }}">Experienced Professionals</a></li>
              <li><a href="{{ route('careers.graduate') }}" class="{{ request()->routeIs('careers.graduate') ? 'active' : '' }}">Graduate</a></li>
              <li><a href="{{ route('careers.internship') }}" class="{{ request()->routeIs('careers.internship') ? 'active' : '' }}">Internship Opportunities</a></li>
            </ul>
          </li>

          <li>
            <a href="{{ url('/') }}">International</a>
          </li>

          <li>
            <a href="{{ url('/#contact') }}" class="{{ request()->is('#contact') ? 'active' : '' }}">Contact</a>
          </li>

          <li>
            <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About</a>
          </li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav><!-- .navmenu -->

    </div>
  </div>
</header>
