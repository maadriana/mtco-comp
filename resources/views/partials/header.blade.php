<header id="header" class="header sticky-top">
  <!-- Top Bar -->
  <div class="topbar d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center">
          <a href="mailto:{{ getContent('header_contact_email', 'contact@mtco.com.ph') }}">{{ getContent('header_contact_email', 'contact@mtco.com.ph') }}</a>
        </i>
        <i class="bi bi-phone d-flex align-items-center ms-4">
          <span>{{ getContent('header_contact_phone', '+632 8887 1888') }}</span>
        </i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        @if(getContent('header_social_twitter'))
          <a href="{{ getContent('header_social_twitter') }}" class="twitter" target="_blank"><i class="bi bi-twitter-x"></i></a>
        @else
          <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
        @endif

        @if(getContent('header_social_facebook'))
          <a href="{{ getContent('header_social_facebook') }}" class="facebook" target="_blank"><i class="bi bi-facebook"></i></a>
        @else
          <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        @endif

        @if(getContent('header_social_instagram'))
          <a href="{{ getContent('header_social_instagram') }}" class="instagram" target="_blank"><i class="bi bi-instagram"></i></a>
        @else
          <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        @endif

        @if(getContent('header_social_linkedin'))
          <a href="{{ getContent('header_social_linkedin') }}" class="linkedin" target="_blank"><i class="bi bi-linkedin"></i></a>
        @else
          <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
        @endif
      </div>
    </div>
  </div><!-- End Top Bar -->

  <!-- Branding + Nav -->
  <div class="branding d-flex align-items-center">
    <div class="container position-relative d-flex align-items-center justify-content-between">

      <!-- Logo -->
      <a href="{{ url('/') }}" class="logo d-flex align-items-center">
        @if(hasImageContent('header_logo'))
          <img src="{{ getContent('header_logo') }}" alt="MTCO Logo" height="40">
        @else
          <img src="{{ asset('assets/img/mtco-logo.png') }}" alt="MTCO Logo" height="40">
        @endif
      </a>

      <!-- Navigation -->
      <nav id="navmenu" class="navmenu">
        <ul>
          <li>
            <a href="{{ url('/#hero') }}" class="{{ request()->is('/') ? 'active' : '' }}">{{ getContent('nav_home_text', 'Home') }}</a>
          </li>

          <li class="dropdown {{ request()->is('services/*') ? 'active' : '' }}">
            <a href="{{ url('/#services') }}">
              <span>{{ getContent('nav_services_text', 'Services') }}</span> <i class="bi bi-chevron-down toggle-dropdown"></i>
            </a>
            <ul>
              <li><a href="{{ route('services.audit') }}" class="{{ request()->routeIs('services.audit') ? 'active' : '' }}">{{ getContent('nav_service_audit', 'Audit and Assurance') }}</a></li>
              <li><a href="{{ route('services.advisory') }}" class="{{ request()->routeIs('services.advisory') ? 'active' : '' }}">{{ getContent('nav_service_advisory', 'Business Advisory') }}</a></li>
              <li><a href="{{ route('services.outsourcing') }}" class="{{ request()->routeIs('services.outsourcing') ? 'active' : '' }}">{{ getContent('nav_service_outsourcing', 'Outsourcing') }}</a></li>
              <li><a href="{{ route('services.restructuring') }}" class="{{ request()->routeIs('services.restructuring') ? 'active' : '' }}">{{ getContent('nav_service_restructuring', 'Business Restructuring and Insolvency') }}</a></li>
              <li><a href="{{ route('services.finance') }}" class="{{ request()->routeIs('services.finance') ? 'active' : '' }}">{{ getContent('nav_service_finance', 'Corporate Finance and Advisory') }}</a></li>
              <li><a href="{{ route('services.forensic') }}" class="{{ request()->routeIs('services.forensic') ? 'active' : '' }}">{{ getContent('nav_service_forensic', 'Forensic and Litigation Support') }}</a></li>
              <li><a href="{{ route('services.governance') }}" class="{{ request()->routeIs('services.governance') ? 'active' : '' }}">{{ getContent('nav_service_governance', 'Governance, Risk and Internal Audit') }}</a></li>
              <li><a href="{{ route('services.taxation') }}" class="{{ request()->routeIs('services.taxation') ? 'active' : '' }}">{{ getContent('nav_service_taxation', 'Taxation') }}</a></li>
            </ul>
          </li>

          <li>
            <a href="{{ url('/#team') }}" class="{{ request()->is('#team') ? 'active' : '' }}">{{ getContent('nav_people_text', 'People') }}</a>
          </li>

          <li class="dropdown {{ request()->is('careers/*') ? 'active' : '' }}">
            <a href="{{ url('/#careers') }}">
              <span>{{ getContent('nav_careers_text', 'Careers') }}</span> <i class="bi bi-chevron-down toggle-dropdown"></i>
            </a>
            <ul>
              <li><a href="{{ route('careers.vacancies') }}" class="{{ request()->routeIs('careers.vacancies') ? 'active' : '' }}">{{ getContent('nav_career_vacancies', 'Current Vacancies') }}</a></li>
              <li><a href="{{ route('careers.professionals') }}" class="{{ request()->routeIs('careers.professionals') ? 'active' : '' }}">{{ getContent('nav_career_professionals', 'Experienced Professionals') }}</a></li>
              <li><a href="{{ route('careers.graduate') }}" class="{{ request()->routeIs('careers.graduate') ? 'active' : '' }}">{{ getContent('nav_career_graduate', 'Graduate') }}</a></li>
              <li><a href="{{ route('careers.internship') }}" class="{{ request()->routeIs('careers.internship') ? 'active' : '' }}">{{ getContent('nav_career_internship', 'Internship Opportunities') }}</a></li>
            </ul>
          </li>

          <li>
         <a href="{{ route('international') }}" class="{{ request()->routeIs('international') ? 'active' : '' }}">{{ getContent('nav_international_text', 'International') }}</a>
          </li>


          <li>
            <a href="{{ url('/#contact') }}" class="{{ request()->is('#contact') ? 'active' : '' }}">{{ getContent('nav_contact_text', 'Contact') }}</a>
          </li>

          <li>
            <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">{{ getContent('nav_about_text', 'About') }}</a>
          </li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav><!-- .navmenu -->

    </div>
  </div>
</header>
