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
          <li><a href="{{ route('history') }}">{{ getContent('footer_link2_text', 'About us') }}</a></li>
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
          @if(getContent('footer_social_facebook'))
            <a href="{{ getContent('footer_social_facebook') }}" target="_blank"><i class="bi bi-facebook"></i></a>
          @else
            <a href="#" onclick="showComingSoonAlert('Facebook'); return false;" title="Facebook page coming soon!">
              <i class="bi bi-facebook"></i>
            </a>
          @endif

          @if(getContent('footer_social_linkedin'))
            <a href="{{ getContent('footer_social_linkedin') }}" target="_blank"><i class="bi bi-linkedin"></i></a>
          @else
            <a href="https://www.linkedin.com/company/mendoza-tugano-co-cpas/" target="_blank"><i class="bi bi-linkedin"></i></a>
          @endif
        </div>
      </div>
    </div>
  </div>

  <div class="container copyright text-center mt-4">
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

<style>
/* Coming Soon Alert Styles */
.coming-soon-alert {
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 9999;
    background: linear-gradient(135deg, #326C79 0%, #2a5a64 100%);
    color: white;
    padding: 25px 35px;
    border-radius: 15px;
    box-shadow: 0 15px 35px rgba(50, 108, 121, 0.4);
    max-width: 400px;
    width: 90%;
    text-align: center;
    animation: slideInScale 0.4s cubic-bezier(0.68, -0.55, 0.265, 1.55);
    backdrop-filter: blur(10px);
}

.coming-soon-alert h4 {
    margin: 0 0 15px 0;
    font-size: 20px;
    font-weight: 600;
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
}

.coming-soon-alert p {
    margin: 0 0 20px 0;
    font-size: 14px;
    opacity: 0.9;
    line-height: 1.5;
}

.coming-soon-alert button {
    background: rgba(255, 255, 255, 0.2);
    border: 1px solid rgba(255, 255, 255, 0.3);
    color: white;
    padding: 8px 20px;
    border-radius: 25px;
    cursor: pointer;
    font-size: 14px;
    font-weight: 500;
    transition: all 0.3s ease;
}

.coming-soon-alert button:hover {
    background: rgba(255, 255, 255, 0.3);
    transform: translateY(-1px);
}

.alert-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5);
    z-index: 9998;
    backdrop-filter: blur(3px);
    animation: fadeIn 0.3s ease;
}

@keyframes slideInScale {
    from {
        opacity: 0;
        transform: translate(-50%, -50%) scale(0.7) translateY(-30px);
    }
    to {
        opacity: 1;
        transform: translate(-50%, -50%) scale(1) translateY(0);
    }
}

@keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
}

@keyframes slideOutScale {
    from {
        opacity: 1;
        transform: translate(-50%, -50%) scale(1) translateY(0);
    }
    to {
        opacity: 0;
        transform: translate(-50%, -50%) scale(0.7) translateY(-30px);
    }
}

@keyframes fadeOut {
    from { opacity: 1; }
    to { opacity: 0; }
}
</style>

<script>
function showComingSoonAlert(platform) {
    // Create overlay
    const overlay = document.createElement('div');
    overlay.className = 'alert-overlay';
    document.body.appendChild(overlay);

    // Create alert
    const alert = document.createElement('div');
    alert.className = 'coming-soon-alert';
    alert.innerHTML = `
        <h4>
            <i class="bi bi-${platform.toLowerCase()}"></i>
            ${platform} Page
        </h4>
        <p>Our ${platform} page will be available soon! Stay tuned for updates and follow us on other platforms.</p>
        <button onclick="closeComingSoonAlert()">Got it!</button>
    `;

    document.body.appendChild(alert);
    document.body.style.overflow = 'hidden';

    // Auto close after 4 seconds
    setTimeout(() => {
        if (document.querySelector('.coming-soon-alert')) {
            closeComingSoonAlert();
        }
    }, 4000);

    // Close on overlay click
    overlay.addEventListener('click', closeComingSoonAlert);

    // Close on Escape key
    const escapeHandler = (e) => {
        if (e.key === 'Escape') {
            closeComingSoonAlert();
            document.removeEventListener('keydown', escapeHandler);
        }
    };
    document.addEventListener('keydown', escapeHandler);
}

function closeComingSoonAlert() {
    const alert = document.querySelector('.coming-soon-alert');
    const overlay = document.querySelector('.alert-overlay');

    if (alert && overlay) {
        // Animate out
        alert.style.animation = 'slideOutScale 0.3s cubic-bezier(0.68, -0.55, 0.265, 1.55) forwards';
        overlay.style.animation = 'fadeOut 0.3s ease forwards';

        setTimeout(() => {
            if (alert.parentNode) alert.parentNode.removeChild(alert);
            if (overlay.parentNode) overlay.parentNode.removeChild(overlay);
            document.body.style.overflow = 'auto';
        }, 300);
    }
}
</script>
