<!-- Pricing Section -->
<section id="pricing" class="pricing section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Pricing</h2>
    <p><span>Check our</span> <span class="description-title">Pricing</span></p>
  </div><!-- End Section Title -->

  <div class="container">
    <div class="row gy-3">

      @php
        $plans = [
          [
            'title' => 'Free',
            'price' => 0,
            'features' => ['Aida dere', 'Nec feugiat nisl', 'Nulla at volutpat dola', 'Pharetra massa' => false, 'Massa ultricies mi' => false],
            'featured' => false
          ],
          [
            'title' => 'Business',
            'price' => 19,
            'features' => ['Aida dere', 'Nec feugiat nisl', 'Nulla at volutpat dola', 'Pharetra massa', 'Massa ultricies mi' => false],
            'featured' => true
          ],
          [
            'title' => 'Developer',
            'price' => 29,
            'features' => ['Aida dere', 'Nec feugiat nisl', 'Nulla at volutpat dola', 'Pharetra massa', 'Massa ultricies mi'],
            'featured' => false
          ],
          [
            'title' => 'Ultimate',
            'price' => 49,
            'features' => ['Aida dere', 'Nec feugiat nisl', 'Nulla at volutpat dola', 'Pharetra massa', 'Massa ultricies mi'],
            'featured' => false,
            'advanced' => true
          ]
        ];
      @endphp

      @foreach ($plans as $index => $plan)
      <div class="col-xl-3 col-lg-6" data-aos="fade-up" data-aos-delay="{{ ($index + 1) * 100 }}">
        <div class="pricing-item {{ $plan['featured'] ? 'featured' : '' }}">
          @if (!empty($plan['advanced']))
            <span class="advanced">Advanced</span>
          @endif
          <h3>{{ $plan['title'] }}</h3>
          <h4><sup>$</sup>{{ $plan['price'] }}<span> / month</span></h4>
          <ul>
            @foreach ($plan['features'] as $feature => $enabled)
              @if (is_int($feature)) @php $feature = $enabled; $enabled = true; @endphp @endif
              <li class="{{ !$enabled ? 'na' : '' }}">{{ $feature }}</li>
            @endforeach
          </ul>
          <div class="btn-wrap">
            <a href="#" class="btn-buy">Buy Now</a>
          </div>
        </div>
      </div><!-- End Pricing Item -->
      @endforeach

    </div>
  </div>

</section><!-- /Pricing Section -->
