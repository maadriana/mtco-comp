<footer id="footer" class="footer">
  <div class="footer-newsletter">
    <div class="container">
      <div class="row justify-content-center text-center">
        <div class="col-lg-6">
          <h4>Join Our Newsletter</h4>
          <p>Subscribe to our newsletter and receive the latest news about our products and services!</p>
          <form action="#" method="post" class="php-email-form">
            <div class="newsletter-form">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </div>
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your subscription request has been sent. Thank you!</div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <div class="container footer-top">
    <div class="row gy-4">
      <div class="col-lg-4 col-md-6 footer-about">
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

      <div class="col-lg-2 col-md-3 footer-links">
        <h4>Useful Links</h4>
        <ul>
          <li><a href="{{ url('/#hero') }}"><i class="bi bi-chevron-right"></i>Home</a></li>
          <li><a href="{{ url('/#about') }}"><i class="bi bi-chevron-right"></i>About us</a></li>
          <li><a href="{{ url('/#services') }}"><i class="bi bi-chevron-right"></i>Services</a></li>
          <li><a href="{{ url('/#hero') }}"><i class="bi bi-chevron-right"></i>Term of service</a></li>
        </ul>
      </div>

      <div class="col-lg-2 col-md-3 footer-links">
        <h4>Our Services</h4>
        <ul>
    <li><a href="{{ route('services.audit') }}"><i class="bi bi-chevron-right"></i>Audit and Assurance</a></li>
    <li><a href="{{ route('services.advisory') }}"><i class="bi bi-chevron-right"></i>Business Advisory</a></li>
    <li><a href="{{ route('services.outsourcing') }}"><i class="bi bi-chevron-right"></i>Outsourcing</a></li>
    <li><a href="{{ route('services.restructuring') }}"><i class="bi bi-chevron-right"></i>Business Restructuring and Insolvency</a></li>
    <li><a href="{{ route('services.finance') }}"><i class="bi bi-chevron-right"></i>Corporate Finance and Advisory</a></li>
    <li><a href="{{ route('services.forensic') }}"><i class="bi bi-chevron-right"></i>Forensic and Litigation Support</a></li>
    <li><a href="{{ route('services.governance') }}"><i class="bi bi-chevron-right"></i>Governance, Risk and Internal Audit</a></li>
    <li><a href="{{ route('services.taxation') }}"><i class="bi bi-chevron-right"></i>Taxation</a></li>
  </ul>
      </div>

      <div class="col-lg-4 col-md-12">
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
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </div>
</footer>
