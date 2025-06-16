<footer id="footer" class="footer">

  <div class="container footer-top">
    <div class="row gy-4">
      <div class="col-lg-3 col-md-6 footer-about">
        <a href="{{ url('/') }}" class="logo d-flex align-items-center">
          @if(hasImageContent('footer_logo'))
            <img src="{{ getContent('footer_logo') }}" alt="MTCO Logo" height="40">
          @else
            <img src="{{ asset('assets/img/mtco-logo.png') }}" alt="MTCO Logo" height="40">
          @endif
        </a>
        <div class="footer-contact pt-3">
          @if(getContent('footer_address_line1'))
            <p>{{ getContent('footer_address_line1') }}</p>
          @endif
          @if(getContent('footer_address_line2'))
            <p>{{ getContent('footer_address_line2') }}</p>
          @endif
          @if(getContent('footer_address_line3'))
            <p>{{ getContent('footer_address_line3') }}</p>
          @endif
          @if(getContent('footer_address_line4'))
            <p>{{ getContent('footer_address_line4') }}</p>
          @endif
          @if(getContent('footer_address_line5'))
            <p>{{ getContent('footer_address_line5') }}</p>
          @endif
          <p class="mt-3"><strong>Phone:</strong> <span>{{ getContent('footer_phone', '+632 8887 1888') }}</span></p>
          <p><strong>Email:</strong> <span>{{ getContent('footer_email', 'contact@mtco.com.ph') }}</span></p>
        </div>
      </div>

      <div class="col-lg-3 col-md-3 footer-links">
        <h4>{{ getContent('footer_useful_links_title', 'Useful Links') }}</h4>
        <ul>
          <li><a href="{{ url('/#hero') }}">{{ getContent('footer_link1_text', 'Home') }}</a></li>
          <li><a href="{{ route('about') }}">{{ getContent('footer_link2_text', 'About us') }}</a></li>
          <li><a href="{{ url('/#careers') }}">{{ getContent('footer_link3_text', 'Careers') }}</a></li>
          <li><a href="{{ url('/#team') }}">{{ getContent('footer_link4_text', 'People') }}</a></li>
        </ul>
      </div>

      <div class="col-lg-3 col-md-3 footer-links">
        <h4>{{ getContent('footer_services_title', 'Our Services') }}</h4>
        <ul>
          <li><a href="{{ route('services.audit') }}">{{ getContent('footer_service1_text', 'Audit and Assurance') }}</a></li>
          <li><a href="{{ route('services.advisory') }}">{{ getContent('footer_service2_text', 'Business Advisory') }}</a></li>
          <li><a href="{{ route('services.outsourcing') }}">{{ getContent('footer_service3_text', 'Outsourcing') }}</a></li>
          <li><a href="{{ route('services.restructuring') }}">{{ getContent('footer_service4_text', 'Business Restructuring and Insolvency') }}</a></li>
          <li><a href="{{ route('services.finance') }}">{{ getContent('footer_service5_text', 'Corporate Finance and Advisory') }}</a></li>
          <li><a href="{{ route('services.forensic') }}">{{ getContent('footer_service6_text', 'Forensic and Litigation Support') }}</a></li>
          <li><a href="{{ route('services.governance') }}">{{ getContent('footer_service7_text', 'Governance, Risk and Internal Audit') }}</a></li>
          <li><a href="{{ route('services.taxation') }}">{{ getContent('footer_service8_text', 'Taxation') }}</a></li>
        </ul>
      </div>

      <div class="col-lg-3 col-md-12">
        <h4>{{ getContent('footer_contact_title', 'Get In Touch') }}</h4>
        <p>{{ getContent('footer_contact_description', 'For inquiries, you may call us through our hotline at (02) 8887-1888 or send an email to contact@mtco.com.ph') }}</p>
        <div class="social-links d-flex">
          @if(getContent('footer_social_twitter'))
            <a href="{{ getContent('footer_social_twitter') }}" target="_blank"><i class="bi bi-twitter-x"></i></a>
          @else
            <a href="#"><i class="bi bi-twitter-x"></i></a>
          @endif

          @if(getContent('footer_social_facebook'))
            <a href="{{ getContent('footer_social_facebook') }}" target="_blank"><i class="bi bi-facebook"></i></a>
          @else
            <a href="#"><i class="bi bi-facebook"></i></a>
          @endif

          @if(getContent('footer_social_instagram'))
            <a href="{{ getContent('footer_social_instagram') }}" target="_blank"><i class="bi bi-instagram"></i></a>
          @else
            <a href="#"><i class="bi bi-instagram"></i></a>
          @endif

          @if(getContent('footer_social_linkedin'))
            <a href="{{ getContent('footer_social_linkedin') }}" target="_blank"><i class="bi bi-linkedin"></i></a>
          @else
            <a href="#"><i class="bi bi-linkedin"></i></a>
          @endif
        </div>
      </div>
    </div>
  </div>

  <div class="container copyright text-center mt-4">
    <p>{{ getContent('footer_copyright_text', '©') }} <span>{{ getContent('footer_copyright_text', 'Copyright') }}</span> <strong class="px-1 sitename">{{ getContent('footer_company_name', 'BizLand') }}</strong> <span>{{ getContent('footer_rights_text', 'All Rights Reserved') }}</span></p>
    <div class="credits">
      {{ getContent('footer_credits_text', 'Designed by') }}
      @if(getContent('footer_credits_link'))
        <a href="{{ getContent('footer_credits_link') }}" target="_blank">{{ getContent('footer_credits_name', 'Col') }}</a>
      @else
        {{ getContent('footer_credits_name', 'Col') }}
      @endif
    </div>
  </div>
</footer>
