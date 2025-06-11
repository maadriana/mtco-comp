<footer id="footer" class="footer">

  <div class="container footer-top">
    <div class="row gy-4">
      <div class="col-lg-3 col-md-6 footer-about">
        <a href="{{ url('/') }}" class="logo d-flex align-items-center">
      <img src="{{ asset('assets/img/mtco-logo.png') }}" alt="MTCO Logo" height="40">
      </a>
        <div class="footer-contact pt-3">
          <p>16F The Salcedo Towers</p>
          <p>169 H.V. de la Costa St.</p>
          <p>Salcedo Village</p>
          <p>Makati City 1227</p>
          <p>Philippines</p>
          <p class="mt-3"><strong>Phone:</strong> <span>+632 8887 1888</span></p>
          <p><strong>Email:</strong> <span>contact@mtco.com.ph</span></p>
        </div>
      </div>

      <div class="col-lg-3 col-md-3 footer-links">
        <h4>Useful Links</h4>
        <ul>
          <li><a href="{{ url('/#hero') }}">Home</a></li>
          <li><a href="{{ route('about') }}">About us</a></li>
          <li><a href="{{ url('/#careers') }}">Careers</a></li>
          <li><a href="{{ url('/#team') }}">People</a></li>
        </ul>
      </div>

      <div class="col-lg-3 col-md-3 footer-links">
        <h4>Our Services</h4>
        <ul>
    <li><a href="{{ route('services.audit') }}">Audit and Assurance</a></li>
    <li><a href="{{ route('services.advisory') }}">Business Advisory</a></li>
    <li><a href="{{ route('services.outsourcing') }}">Outsourcing</a></li>
    <li><a href="{{ route('services.restructuring') }}">Business Restructuring and Insolvency</a></li>
    <li><a href="{{ route('services.finance') }}">Corporate Finance and Advisory</a></li>
    <li><a href="{{ route('services.forensic') }}">Forensic and Litigation Support</a></li>
    <li><a href="{{ route('services.governance') }}">Governance, Risk and Internal Audit</a></li>
    <li><a href="{{ route('services.taxation') }}">Taxation</a></li>
  </ul>
      </div>

      <div class="col-lg-3 col-md-12">
        <h4>Get In Touch</h4>
        <p>For inquiries, you may call us through our hotline at (02) 8887-1888 or send an email to contact@mtco.com.ph</p>
        <div class="social-links d-flex">
          <a href="#"><i class="bi bi-twitter-x"></i></a>
          <a href="#"><i class="bi bi-facebook"></i></a>
          <a href="#"><i class="bi bi-instagram"></i></a>
          <a href="#"><i class="bi bi-linkedin"></i></a>
        </div>
      </div>
    </div>
  </div>

  <div class="container copyright text-center mt-4">
    <p>© <span>Copyright</span> <strong class="px-1 sitename">BizLand</strong> <span>All Rights Reserved</span></p>
    <div class="credits">
      Designed by <a href="https://github.com/maadriana/">Col</a>
    </div>
  </div>
</footer>
