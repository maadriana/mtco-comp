<!-- Team Section -->
<section id="team" class="team section light-background">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>People</h2>
    <p><span>Our Hardworking</span> <span class="description-title">People</span></p>
  </div><!-- End Section Title -->

  <div class="container">
    <div class="row gy-4">

      @foreach ([
        ['slug' => 'emmanuel-y-mendoza', 'name' => 'Emmanuel Y. Mendoza', 'role' => 'Managing Partner', 'image' => 'emmanuel-y-mendoza.jpeg'],
        ['slug' => 'ephraim-t-tugano', 'name' => 'Ephraim T. Tugano', 'role' => 'Partner', 'image' => 'ephraim-t-tugano.jpg'],
        ['slug' => 'pamela-grace-s-tangso', 'name' => 'Pamela Grace S. Tangso', 'role' => 'Partner', 'image' => 'pamela-grace-s-tangso.jpg'],
        ['slug' => 'jekell-g-salosagcol', 'name' => 'Jekell G. Salosagcol', 'role' => 'External Quality Assurance Consultant', 'image' => 'jekell-g-salosagcol.jpg'],
      ] as $index => $member)
      <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="{{ ($index + 1) * 100 }}">
        <div class="team-member">
          <div class="member-img">
            <img src="assets/img/team/{{ $member['image'] }}" class="img-fluid" alt="{{ $member['name'] }}">
            <div class="social">
              <a href="#"><i class="bi bi-twitter-x"></i></a>
              <a href="#"><i class="bi bi-facebook"></i></a>
              <a href="#"><i class="bi bi-instagram"></i></a>
              <a href="#"><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
          <div class="member-info text-center">
            <h4>
              <a href="{{ url('team/' . $member['slug']) }}">
                {{ $member['name'] }}
              </a>
            </h4>
            <span>{{ $member['role'] }}</span>
          </div>
        </div>
      </div><!-- End Team Member -->
      @endforeach

    </div>
  </div>

</section><!-- /Team Section -->
