<section id="contact" class="contact section">

  <div class="container section-title" data-aos="fade-up">
    <h2>Contact</h2>
    <p><span>Need Help?</span> <span class="description-title">Contact Us</span></p>
  </div>

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    @if(session('success'))
      <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if ($errors->any())
      <div class="alert alert-danger">
        <ul class="mb-0">
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <div class="row gy-4">

      <div class="col-lg-5">
        <div class="info-wrap">
          <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
            <i class="bi bi-geo-alt flex-shrink-0"></i>
            <div>
              <h3>Address</h3>
              <p>A108 Adam Street, New York, NY 535022</p>
            </div>
          </div>
          <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
            <i class="bi bi-telephone flex-shrink-0"></i>
            <div>
              <h3>Call Us</h3>
              <p>+1 5589 55488 55</p>
            </div>
          </div>
          <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
            <i class="bi bi-envelope flex-shrink-0"></i>
            <div>
              <h3>Email Us</h3>
              <p>info@example.com</p>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-7">
        <form action="{{ route('contact.submit') }}" method="POST" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
          @csrf
          <div class="row gy-4">
            <div class="col-md-6">
              <label for="name" class="pb-2">Your Name</label>
              <input type="text" name="name" id="name" class="form-control" required>
            </div>

            <div class="col-md-6">
              <label for="email" class="pb-2">Your Email</label>
              <input type="email" name="email" id="email" class="form-control" required>
            </div>

            <div class="col-md-12">
              <label for="subject" class="pb-2">Subject</label>
              <input type="text" name="subject" id="subject" class="form-control" required>
            </div>

            <div class="col-md-12">
              <label for="message" class="pb-2">Message</label>
              <textarea name="message" id="message" class="form-control" rows="10" required></textarea>
            </div>

            <div class="col-md-12 text-center">
              <button type="submit">Send Message</button>
            </div>
          </div>
        </form>
      </div>

    </div>

  </div>
</section>
