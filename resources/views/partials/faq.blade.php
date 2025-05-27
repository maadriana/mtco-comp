<!-- Faq Section -->
<section id="faq" class="faq section light-background">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>F.A.Q</h2>
    <p><span>Frequently Asked</span> <span class="description-title">Questions</span></p>
  </div><!-- End Section Title -->

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-10" data-aos="fade-up" data-aos-delay="100">
        <div class="faq-container">

          @php
            $faqs = [
              'Non consectetur a erat nam at lectus urna duis?' => 'Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.',
              'Feugiat scelerisque varius morbi enim nunc faucibus?' => 'Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium.',
              'Dolor sit amet consectetur adipiscing elit pellentesque?' => 'Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim.',
              'Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?' => 'Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices.',
              'Tempus quam pellentesque nec nam aliquam sem et tortor?' => 'Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in.',
              'Perspiciatis quod quo quos nulla quo illum ullam?' => 'Enim ea facilis quaerat voluptas quidem et dolorem. Quis et consequatur non sed in suscipit sequi. Distinctio ipsam dolore et.'
            ];
          @endphp

          @foreach ($faqs as $question => $answer)
          <div class="faq-item{{ $loop->first ? ' faq-active' : '' }}">
            <h3>{{ $question }}</h3>
            <div class="faq-content">
              <p>{{ $answer }}</p>
            </div>
            <i class="faq-toggle bi bi-chevron-right"></i>
          </div><!-- End Faq item-->
          @endforeach

        </div>
      </div><!-- End Faq Column-->
    </div>
  </div>

</section><!-- /Faq Section -->
