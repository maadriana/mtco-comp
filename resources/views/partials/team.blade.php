<!-- Team Section -->
<section id="team" class="team section light-background">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>{{ getContent('team_main_title', 'People') }}</h2>
    <p>{!! getContent('team_subtitle', '<span>Our Hardworking</span> <span class="description-title">People</span>') !!}</p>
  </div><!-- End Section Title -->

  <div class="container">
    <div class="row gy-4">

      @for($i = 1; $i <= 4; $i++)
        @php
          $memberName = getContent("team_member{$i}_name", '');
          $memberRole = getContent("team_member{$i}_role", '');
          $memberSlug = getContent("team_member{$i}_slug", '');
          $memberImage = getContent("team_member{$i}_image");
          $memberTwitter = getContent("team_member{$i}_twitter", '');
          $memberFacebook = getContent("team_member{$i}_facebook", '');
          $memberInstagram = getContent("team_member{$i}_instagram", '');
          $memberLinkedin = getContent("team_member{$i}_linkedin", '');

          // Default images for fallback
          $defaultImages = [
            1 => 'emmanuel-y-mendoza.jpeg',
            2 => 'ephraim-t-tugano.jpg',
            3 => 'pamela-grace-s-tangso.jpg',
            4 => 'jekell-g-salosagcol.jpg'
          ];
        @endphp

        @if($memberName) <!-- Only show if member name exists -->
        <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="{{ $i * 100 }}">
          <div class="team-member">
            <div class="member-img">
              @if(hasImageContent("team_member{$i}_image"))
                <img src="{{ $memberImage }}" class="img-fluid" alt="{{ $memberName }}">
              @else
                <img src="{{ asset('assets/img/team/' . $defaultImages[$i]) }}" class="img-fluid" alt="{{ $memberName }}">
              @endif
              <div class="social">
                @if($memberTwitter)
                  <a href="{{ $memberTwitter }}" target="_blank"><i class="bi bi-twitter-x"></i></a>
                @else
                  <a href="#"><i class="bi bi-twitter-x"></i></a>
                @endif

                @if($memberFacebook)
                  <a href="{{ $memberFacebook }}" target="_blank"><i class="bi bi-facebook"></i></a>
                @else
                  <a href="#"><i class="bi bi-facebook"></i></a>
                @endif

                @if($memberInstagram)
                  <a href="{{ $memberInstagram }}" target="_blank"><i class="bi bi-instagram"></i></a>
                @else
                  <a href="#"><i class="bi bi-instagram"></i></a>
                @endif

                @if($memberLinkedin)
                  <a href="{{ $memberLinkedin }}" target="_blank"><i class="bi bi-linkedin"></i></a>
                @else
                  <a href="#"><i class="bi bi-linkedin"></i></a>
                @endif
              </div>
            </div>
            <div class="member-info text-center">
              <h4>
                @if($memberSlug)
                  <a href="{{ url('team/' . $memberSlug) }}">
                    {{ $memberName }}
                  </a>
                @else
                  {{ $memberName }}
                @endif
              </h4>
              <span>{{ $memberRole }}</span>
            </div>
          </div>
        </div><!-- End Team Member -->
        @endif
      @endfor

    </div>
  </div>

</section><!-- /Team Section -->
