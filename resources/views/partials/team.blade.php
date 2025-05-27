<!-- Team Section -->
<section id="team" class="team section light-background">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Team</h2>
    <p><span>Our Hardworking</span> <span class="description-title">Team</span></p>
  </div><!-- End Section Title -->

  <div class="container">
    <div class="row gy-4">

      @foreach ([
        ['name' => 'Walter White', 'role' => 'Chief Executive Officer', 'image' => 'team-1.jpg'],
        ['name' => 'Sarah Jhonson', 'role' => 'Product Manager', 'image' => 'team-2.jpg'],
        ['name' => 'William Anderson', 'role' => 'CTO', 'image' => 'team-3.jpg'],
        ['name' => 'Amanda Jepson', 'role' => 'Accountant', 'image' => 'team-4.jpg'],
      ] as $index => $member)
      <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="{{ ($index + 1) * 100 }}">
        <div class="team-member">
          <div class="member-img">
            <img src="assets/img/team/{{ $member['image'] }}" class="img-fluid" alt="">
            <div class="social">
              <a href=""><i class="bi bi-twitter-x"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
          <div class="member-info">
            <h4>{{ $member['name'] }}</h4>
            <span>{{ $member['role'] }}</span>
          </div>
        </div>
      </div><!-- End Team Member -->
      @endforeach

    </div>
  </div>

</section><!-- /Team Section -->
