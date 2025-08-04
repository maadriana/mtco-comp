<!-- NEWS AND UPDATES Section -->
<section id="news" class="news-section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>{{ getContent('news_section_title', 'NEWS AND UPDATES') }}</h2>
    <p>{!! getContent('news_section_subtitle', '<span>Stay Informed with</span> <span class="description-title">Latest Developments</span>') !!}</p>
  </div><!-- End Section Title -->

  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-10" data-aos="fade-up" data-aos-delay="100">

        <!-- Description Section -->
        <div class="row mb-5">
          <div class="col-12">
            <div class="news-intro-banner">
              <div class="intro-content">
                <div class="intro-icon">
                  <i class="bi bi-info-circle"></i>
                </div>
                <div class="intro-text">
                  <p class="lead mb-3">
                    {{ getContent('news_intro_description', 'Stay informed with the latest developments in tax, audit, and business regulations in the Philippines. Our News and Updates section brings you timely insights, regulatory issuances, and industry trends that matter to your business.') }}
                  </p>
                  <p class="mb-0">
                    We provide concise updates on new BIR and SEC regulations, changes in financial reporting standards, government circulars, and other policy shifts that impact compliance and operations. Whether it's a tax deadline reminder or a recent legal ruling, our goal is to keep you ahead of the curve with credible, practical information.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- News Grid - Updated to include View More as part of the grid -->
        <div class="news-grid-container">
          <div class="news-grid">

            @php
              $cards = [
                [
                  'title' => getContent('news_article1_title', 'BIR Digital Tax Receipts'),
                  'desc' => getContent('news_article1_excerpt', 'Learn about the new Bureau of Internal Revenue digital tax receipt requirements and implementation guidelines for businesses operating in the Philippines.'),
                  'route' => !empty(getContent('news_article1_external_link')) ? getContent('news_article1_external_link') : route('news.bir-article'),
                  'external' => !empty(getContent('news_article1_external_link')),
                  'icon' => 'bi-receipt',
                  'category' => getContent('news_article1_category', 'BIR'),
                  'date' => getContent('news_article1_date', 'January 15, 2025'),
                  'read_time' => getContent('news_article1_read_time', '8 min read'),
                  'read_more_text' => getContent('news_article1_read_more_text', 'Read More'),
                  'image' => hasImageContent('news_article1_image') ? getContent('news_article1_image') : asset('assets/img/news1.jpg'),
                  'image_alt' => getContent('news_article1_image_alt', 'BIR Digital Tax Receipts'),
                ],
                [
                  'title' => getContent('news_article2_title', 'SEC Financial Reporting 2025'),
                  'desc' => getContent('news_article2_excerpt', 'Discover the updated Securities and Exchange Commission financial reporting standards and compliance requirements for the year 2025.'),
                  'route' => !empty(getContent('news_article2_external_link')) ? getContent('news_article2_external_link') : route('news.sec-article'),
                  'external' => !empty(getContent('news_article2_external_link')),
                  'icon' => 'bi-file-earmark-text',
                  'category' => getContent('news_article2_category', 'SEC'),
                  'date' => getContent('news_article2_date', 'January 10, 2025'),
                  'read_time' => getContent('news_article2_read_time', '5 min read'),
                  'read_more_text' => getContent('news_article2_read_more_text', 'Read More'),
                  'image' => hasImageContent('news_article2_image') ? getContent('news_article2_image') : asset('assets/img/news2.jpg'),
                  'image_alt' => getContent('news_article2_image_alt', 'SEC Financial Reporting Standards'),
                ],
                [
                  'title' => getContent('news_article3_title', 'PSA Updates 2025'),
                  'desc' => getContent('news_article3_excerpt', 'Stay updated with the latest Philippine Statistics Authority regulations and requirements that impact business registration and compliance.'),
                  'route' => !empty(getContent('news_article3_external_link')) ? getContent('news_article3_external_link') : route('news.psa-article'),
                  'external' => !empty(getContent('news_article3_external_link')),
                  'icon' => 'bi-graph-up-arrow',
                  'category' => getContent('news_article3_category', 'PSA'),
                  'date' => getContent('news_article3_date', 'January 8, 2025'),
                  'read_time' => getContent('news_article3_read_time', '4 min read'),
                  'read_more_text' => getContent('news_article3_read_more_text', 'Read More'),
                  'image' => hasImageContent('news_article3_image') ? getContent('news_article3_image') : asset('assets/img/news3.jpg'),
                  'image_alt' => getContent('news_article3_image_alt', 'PSA Updates and Regulations'),
                ]
              ];
            @endphp

            @foreach ($cards as $index => $item)
            <div class="news-item" data-aos="fade-up" data-aos-delay="{{ 200 + ($index * 100) }}">
              <a href="{{ $item['route'] }}" class="news-card-link" {{ $item['external'] ? 'target="_blank" rel="noopener noreferrer"' : '' }}>
                <article class="news-card">
                  <div class="news-card-header">
                    <div class="category-badge">
                      {{ $item['category'] }}
                      @if($item['external'])
                        <i class="bi bi-box-arrow-up-right ms-1" style="font-size: 0.8em;"></i>
                      @endif
                    </div>
                    <div class="news-icon">
                      <i class="bi {{ $item['icon'] }}"></i>
                    </div>
                  </div>

                  <!-- Enhanced Image Section -->
                  <div class="news-card-image">
                    @if(hasImageContent('news_article' . ($index + 1) . '_image'))
                      <img src="data:image/jpeg;base64,{{ base64_encode(getContent('news_article' . ($index + 1) . '_image')) }}"
                           alt="{{ $item['image_alt'] }}"
                           loading="lazy">
                    @else
                      <img src="{{ $item['image'] }}"
                           alt="{{ $item['image_alt'] }}"
                           loading="lazy">
                    @endif
                    <div class="image-overlay">
                      <div class="overlay-icon">
                        <i class="bi {{ $item['icon'] }}"></i>
                      </div>
                    </div>
                  </div>

                  <div class="news-card-body">
                    <div class="news-meta">
                      <span class="news-date">
                        <i class="bi bi-calendar3"></i>
                        {{ $item['date'] }}
                      </span>
                      <span class="news-read-time">
                        <i class="bi bi-clock"></i>
                        {{ $item['read_time'] }}
                      </span>
                    </div>
                    <h3 class="news-title">{{ $item['title'] }}</h3>
                    <p class="news-excerpt">{{ $item['desc'] }}</p>
                  </div>
                  <div class="news-card-footer">
                    <div class="read-more-btn">
                      <span>{{ $item['read_more_text'] }}</span>
                      <i class="bi {{ $item['external'] ? 'bi-box-arrow-up-right' : 'bi-chevron-right' }}"></i>
                    </div>
                  </div>
                </article>
              </a>
            </div>
            @endforeach

            <!-- View More Section - Now part of the grid -->
            <div class="news-item view-more-item" data-aos="fade-up" data-aos-delay="500">
              <a href="{{ route('news.updates') }}" class="news-card-link">
                <article class="news-card view-more-card">
                  <div class="view-more-content">
                    <div class="view-more-icon">
                      <i class="bi bi-plus-circle"></i>
                    </div>
                    <h4 class="view-more-title">View More Articles</h4>
                    <p class="view-more-text">Explore all news and updates</p>
                    <div class="view-more-arrow">
                      <i class="bi bi-arrow-right"></i>
                    </div>
                  </div>
                </article>
              </a>
            </div>

          </div>
        </div>
      </div><!-- End Column -->
    </div>
  </div>

</section><!-- /NEWS AND UPDATES Section -->

<style>
/* News Section Base */
.news-section {
  padding: 80px 0;
}

/* News Intro Banner - Updated to Light Blue */
.news-intro-banner {
  background: linear-gradient(135deg, #e3f2f7 0%, #d6ecf2 100%);
  border: 1px solid #b8dae6;
  border-radius: 20px;
  padding: 3rem;
  color: #2c3e50;
  position: relative;
  overflow: hidden;
  box-shadow: 0 4px 15px rgba(50, 108, 121, 0.1);
}

.news-intro-banner::before {
  content: '';
  position: absolute;
  top: -50%;
  right: -50%;
  width: 100%;
  height: 100%;
  background: radial-gradient(circle, rgba(50, 108, 121, 0.08) 0%, transparent 70%);
  pointer-events: none;
}

.intro-content {
  display: flex;
  align-items: flex-start;
  gap: 2rem;
  position: relative;
  z-index: 2;
}

.intro-icon {
  flex-shrink: 0;
  width: 60px;
  height: 60px;
  background: linear-gradient(135deg, #326C79, #4A9BAE);
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  box-shadow: 0 4px 15px rgba(50, 108, 121, 0.2);
}

.intro-icon i {
  font-size: 1.8rem;
  color: white;
}

.intro-text .lead {
  font-size: 1.1rem;
  font-weight: 600;
  line-height: 1.7;
  margin-bottom: 1rem;
  color: #2c3e50;
}

.intro-text p:last-child {
  font-size: 1rem;
  line-height: 1.6;
  color: #455a64;
}

/* News Grid Container - Simplified */
.news-grid-container {
  margin-top: 3rem;
}

/* News Grid - Updated to handle 4 items in 2 rows */
.news-grid {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 2rem;
}

/* Ensure all cards have the same height */
.news-card {
  background: white;
  border: 1px solid #e9ecef;
  border-radius: 15px;
  overflow: hidden;
  transition: all 0.3s ease;
  height: 550px; /* Increased height to accommodate images */
  display: flex;
  flex-direction: column;
  position: relative;
  box-shadow: 0 4px 15px rgba(0,0,0,0.08);
}

.news-card::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  height: 3px;
  background: linear-gradient(90deg, #326C79, #4A9BAE);
  transform: scaleX(0);
  transform-origin: left;
  transition: transform 0.3s ease;
}

.news-card:hover::before {
  transform: scaleX(1);
}

.news-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 15px 35px rgba(50, 108, 121, 0.15);
  border-color: #326C79;
}

/* News Card Link */
.news-card-link {
  text-decoration: none;
  color: inherit;
  display: block;
  height: 100%;
}

/* Card Header */
.news-card-header {
  padding: 1.5rem 1.5rem 0;
  display: flex;
  justify-content: space-between;
  align-items: flex-start;
}

.category-badge {
  background: linear-gradient(135deg, #326C79, #4A9BAE);
  color: white;
  padding: 0.3rem 0.8rem;
  border-radius: 20px;
  font-size: 0.75rem;
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: 0.5px;
  display: flex;
  align-items: center;
  gap: 0.25rem;
}

.news-icon {
  width: 50px;
  height: 50px;
  background: rgba(50, 108, 121, 0.1);
  border-radius: 12px;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: all 0.3s ease;
}

.news-icon i {
  font-size: 1.5rem;
  color: #326C79;
  transition: all 0.3s ease;
}

.news-card:hover .news-icon {
  background: #326C79;
  transform: rotate(5deg) scale(1.05);
}

.news-card:hover .news-icon i {
  color: white;
}

/* Enhanced Card Image with Overlay */
.news-card-image {
  margin: 1rem 1.5rem 0;
  border-radius: 12px;
  overflow: hidden;
  height: 180px;
  position: relative;
  box-shadow: 0 4px 15px rgba(0,0,0,0.1);
}

.news-card-image img {
  transition: transform 0.4s ease;
  width: 100%;
  height: 100%;
  object-fit: cover;
  border-radius: 12px;
}

.image-overlay {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: linear-gradient(135deg, rgba(50, 108, 121, 0.8), rgba(74, 155, 174, 0.6));
  display: flex;
  align-items: center;
  justify-content: center;
  opacity: 0;
  transition: all 0.4s ease;
  border-radius: 12px;
}

.overlay-icon {
  width: 60px;
  height: 60px;
  background: rgba(255, 255, 255, 0.2);
  border: 2px solid rgba(255, 255, 255, 0.8);
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  transform: scale(0.8);
  transition: all 0.3s ease;
  backdrop-filter: blur(10px);
}

.overlay-icon i {
  font-size: 1.8rem;
  color: white;
}

.news-card:hover .news-card-image img {
  transform: scale(1.1);
}

.news-card:hover .image-overlay {
  opacity: 1;
}

.news-card:hover .overlay-icon {
  transform: scale(1) rotate(5deg);
}

/* Card Body */
.news-card-body {
  padding: 1.5rem;
  flex-grow: 1;
  display: flex;
  flex-direction: column;
}

.news-meta {
  display: flex;
  gap: 1rem;
  margin-bottom: 1rem;
  font-size: 0.85rem;
  color: #6c757d;
}

.news-meta span {
  display: flex;
  align-items: center;
  gap: 0.25rem;
}

.news-meta i {
  font-size: 0.8rem;
}

.news-title {
  font-size: 1.2rem;
  font-weight: 700;
  color: #212529;
  margin-bottom: 1rem;
  line-height: 1.3;
  transition: color 0.3s ease;
}

.news-card:hover .news-title {
  color: #326C79;
}

.news-excerpt {
  color: #6c757d;
  line-height: 1.6;
  font-size: 0.9rem;
  margin: 0;
  flex-grow: 1;
  display: -webkit-box;
  -webkit-line-clamp: 3;
  -webkit-box-orient: vertical;
  overflow: hidden;
}

/* Card Footer */
.news-card-footer {
  padding: 0 1.5rem 1.5rem;
  margin-top: auto;
}

.read-more-btn {
  display: inline-flex;
  align-items: center;
  gap: 0.5rem;
  color: #326C79;
  font-weight: 600;
  font-size: 0.9rem;
  padding: 0.8rem 1.2rem;
  border: 2px solid #326C79;
  border-radius: 25px;
  transition: all 0.3s ease;
  background: transparent;
  width: 100%;
  justify-content: center;
}

.read-more-btn i {
  transition: transform 0.3s ease;
  font-size: 0.9rem;
}

.news-card:hover .read-more-btn {
  background: #326C79;
  color: white;
  transform: translateY(-2px);
  box-shadow: 0 4px 15px rgba(50, 108, 121, 0.3);
}

.news-card:hover .read-more-btn i {
  transform: translateX(3px);
}

/* View More Card Styling - Updated for consistency */
.view-more-card {
  background: white;
  border: 1px solid #e9ecef;
  position: relative;
  overflow: hidden;
  height: 550px; /* Same height as other cards */
}

.view-more-card::before {
  background: linear-gradient(90deg, #326C79, #4A9BAE);
}

.view-more-content {
  padding: 2rem;
  height: 100%;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  text-align: center;
  position: relative;
  z-index: 2;
}

.view-more-content::before {
  content: '';
  position: absolute;
  top: -50%;
  right: -50%;
  width: 100%;
  height: 100%;
  background: radial-gradient(circle, rgba(50, 108, 121, 0.05) 0%, transparent 70%);
  pointer-events: none;
  transition: all 0.3s ease;
}

.view-more-card:hover .view-more-content::before {
  transform: scale(1.2);
  background: radial-gradient(circle, rgba(50, 108, 121, 0.08) 0%, transparent 70%);
}

.view-more-icon {
  width: 70px;
  height: 70px;
  background: linear-gradient(135deg, #326C79, #4A9BAE);
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  margin-bottom: 1.5rem;
  transition: all 0.3s ease;
  box-shadow: 0 4px 15px rgba(50, 108, 121, 0.2);
}

.view-more-icon i {
  font-size: 2rem;
  color: white;
  transition: all 0.3s ease;
}

.view-more-card:hover .view-more-icon {
  transform: scale(1.1) rotate(90deg);
  box-shadow: 0 6px 20px rgba(50, 108, 121, 0.3);
}

.view-more-title {
  font-size: 1.3rem;
  font-weight: 700;
  margin-bottom: 0.5rem;
  line-height: 1.3;
  color: #2c3e50 !important;
}

.view-more-text {
  font-size: 0.95rem;
  margin-bottom: 1.5rem;
  line-height: 1.4;
  color: #6c757d !important;
}

.view-more-arrow {
  width: 40px;
  height: 40px;
  background: #326C79;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: all 0.3s ease;
  margin-top: auto;
}

.view-more-arrow i {
  font-size: 1.2rem;
  color: white;
  transition: all 0.3s ease;
}

.view-more-card:hover .view-more-arrow {
  transform: translateX(5px) scale(1.1);
  background: #255A65;
}

.view-more-card:hover .view-more-arrow i {
  transform: translateX(3px);
}

/* External link styling */
.news-card-link[target="_blank"] .category-badge {
  background: linear-gradient(135deg, #17a2b8, #138496);
}

.news-card-link[target="_blank"]:hover .news-card {
  border-color: #17a2b8;
}

.news-card-link[target="_blank"]:hover .read-more-btn {
  background: #17a2b8;
  border-color: #17a2b8;
}

.news-card-link[target="_blank"] .news-icon {
  background: rgba(23, 162, 184, 0.1);
}

.news-card-link[target="_blank"] .news-icon i {
  color: #17a2b8;
}

.news-card-link[target="_blank"]:hover .news-icon {
  background: #17a2b8;
}

/* Image loading states */
.news-card-image img {
  background: linear-gradient(90deg, #f0f0f0 25%, #e0e0e0 50%, #f0f0f0 75%);
  background-size: 200% 100%;
  animation: loading 1.5s infinite;
}

@keyframes loading {
  0% {
    background-position: 200% 0;
  }
  100% {
    background-position: -200% 0;
  }
}

.news-card-image img[src] {
  background: none;
  animation: none;
}

/* Responsive Design */
@media (max-width: 768px) {
  .news-section {
    padding: 60px 0;
  }

  .news-intro-banner {
    padding: 2rem;
  }

  .intro-content {
    flex-direction: column;
    text-align: center;
    gap: 1.5rem;
  }

  .intro-text .lead {
    font-size: 1rem;
  }

  .news-grid-container {
    margin-top: 2rem;
  }

  .news-grid {
    grid-template-columns: 1fr;
    gap: 1.5rem;
  }

  .news-card {
    height: auto;
    min-height: 450px;
  }

  .news-card-image {
    height: 160px;
  }

  .news-title {
    font-size: 1.1rem;
  }

  .view-more-card {
    height: auto;
    min-height: 350px;
  }
}

@media (max-width: 576px) {
  .news-intro-banner {
    padding: 1.5rem;
  }

  .intro-text .lead {
    font-size: 0.95rem;
  }

  .news-card-header,
  .news-card-body,
  .news-card-footer {
    padding-left: 1rem;
    padding-right: 1rem;
  }

  .news-card-image {
    margin-left: 1rem;
    margin-right: 1rem;
    height: 140px;
  }

  .news-meta {
    flex-direction: column;
    gap: 0.5rem;
  }

  .news-card {
    height: auto;
    min-height: 400px;
  }

  .view-more-card {
    height: auto;
    min-height: 300px;
  }
}

/* Animation for grid items */
.news-item {
  opacity: 0;
  transform: translateY(30px);
  animation: slideInUp 0.6s ease-out forwards;
}

@keyframes slideInUp {
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

/* Accessibility improvements */
.news-card-link:focus {
  outline: 2px solid #326C79;
  outline-offset: 2px;
  border-radius: 15px;
}

.news-card-link:focus .news-card {
  box-shadow: 0 0 0 2px rgba(50, 108, 121, 0.2);
}

/* Image fade-in effect */
.news-card-image img {
  opacity: 0;
  transition: opacity 0.3s ease;
}

.news-card-image img.loaded {
  opacity: 1;
}
</style>

<script>
// Image loading optimization
document.addEventListener('DOMContentLoaded', function() {
  const images = document.querySelectorAll('.news-card-image img');

  images.forEach(img => {
    if (img.complete) {
      img.classList.add('loaded');
    } else {
      img.addEventListener('load', function() {
        this.classList.add('loaded');
      });
    }
  });
});
</script>
