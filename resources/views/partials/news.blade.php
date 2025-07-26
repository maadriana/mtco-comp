<!-- NEWS AND UPDATES Section -->
<section id="news" class="news-section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>NEWS AND UPDATES</h2>
    <p><span>Stay Informed with</span> <span class="description-title">Latest Developments</span></p>
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
                    Stay informed with the latest developments in tax, audit, and business regulations in the Philippines. Our News and Updates section brings you timely insights, regulatory issuances, and industry trends that matter to your business.
                  </p>
                  <p class="mb-0">
                    We provide concise updates on new BIR and SEC regulations, changes in financial reporting standards, government circulars, and other policy shifts that impact compliance and operations. Whether it's a tax deadline reminder or a recent legal ruling, our goal is to keep you ahead of the curve with credible, practical information.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- News Grid -->
        <div class="news-grid-container">
          <div class="news-grid">

            @php
              $cards = [
                [
                  'title' => 'BIR Digital Tax Receipts',
                  'desc' => 'Learn about the new Bureau of Internal Revenue digital tax receipt requirements and implementation guidelines for businesses operating in the Philippines.',
                  'route' => route('news.bir-article'),
                  'icon' => 'bi-receipt',
                  'category' => 'BIR'
                ],
                [
                  'title' => 'SEC Financial Reporting 2025',
                  'desc' => 'Discover the updated Securities and Exchange Commission financial reporting standards and compliance requirements for the year 2025.',
                  'route' => route('news.sec-article'),
                  'icon' => 'bi-file-earmark-text',
                  'category' => 'SEC'
                ],
                [
                  'title' => 'PSA Updates 2025',
                  'desc' => 'Stay updated with the latest Philippine Statistics Authority regulations and requirements that impact business registration and compliance.',
                  'route' => route('news.psa-article'),
                  'icon' => 'bi-graph-up-arrow',
                  'category' => 'PSA'
                ]
              ];
            @endphp

            @foreach ($cards as $index => $item)
            <div class="news-item" data-aos="fade-up" data-aos-delay="{{ 200 + ($index * 100) }}">
              <a href="{{ $item['route'] }}" class="news-card-link">
                <article class="news-card">
                  <div class="news-card-header">
                    <div class="category-badge">{{ $item['category'] }}</div>
                    <div class="news-icon">
                      <i class="bi {{ $item['icon'] }}"></i>
                    </div>
                  </div>
                  <div class="news-card-body">
                    <h3 class="news-title">{{ $item['title'] }}</h3>
                    <p class="news-excerpt">{{ $item['desc'] }}</p>
                  </div>
                  <div class="news-card-footer">
                    <div class="read-more-btn">
                      <span>Read Article</span>
                      <i class="bi bi-chevron-right"></i>
                    </div>
                  </div>
                </article>
              </a>
            </div>
            @endforeach

          </div>

          <!-- View More Section -->
          <div class="view-more-section" data-aos="fade-left" data-aos-delay="500">
            <a href="{{ route('news.updates') }}" class="view-more-card">
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
            </a>
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

/* News Grid Container */
.news-grid-container {
  display: flex;
  gap: 2rem;
  margin-top: 3rem;
  align-items: stretch;
}

/* News Grid */
.news-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 2rem;
  flex: 1;
}

/* View More Section */
.view-more-section {
  flex-shrink: 0;
  width: 280px;
}

.view-more-card {
  display: block;
  text-decoration: none;
  color: inherit;
  height: 100%;
}

.view-more-card .view-more-content {
  background: white;
  border: 1px solid #e9ecef;
  border-radius: 15px;
  padding: 2.5rem 2rem;
  height: 100%;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  text-align: center;
  color: #2c3e50;
  position: relative;
  overflow: hidden;
  transition: all 0.3s ease;
  box-shadow: 0 4px 15px rgba(0,0,0,0.08);
}

.view-more-card .view-more-content::before {
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

.view-more-card:hover .view-more-content {
  transform: translateY(-5px);
  box-shadow: 0 15px 35px rgba(50, 108, 121, 0.15);
  border-color: #326C79;
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
  font-size: 1.4rem;
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

/* News Cards */
.news-card-link {
  text-decoration: none;
  color: inherit;
  display: block;
}

.news-card {
  background: white;
  border: 1px solid #e9ecef;
  border-radius: 15px;
  overflow: hidden;
  transition: all 0.3s ease;
  height: 100%;
  display: flex;
  flex-direction: column;
  position: relative;
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

/* Card Body */
.news-card-body {
  padding: 1.5rem;
  flex-grow: 1;
}

.news-title {
  font-size: 1.4rem;
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
  font-size: 0.95rem;
  margin: 0;
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
}

.read-more-btn i {
  transition: transform 0.3s ease;
}

.news-card:hover .read-more-btn {
  background: #326C79;
  color: white;
  transform: translateX(5px);
}

.news-card:hover .read-more-btn i {
  transform: translateX(3px);
}

/* Responsive Design */
@media (max-width: 968px) {
  .news-grid-container {
    flex-direction: column;
  }

  .view-more-section {
    width: 100%;
  }

  .view-more-card .view-more-content {
    padding: 2rem;
    flex-direction: row;
    text-align: left;
    gap: 1.5rem;
  }

  .view-more-icon {
    margin-bottom: 0;
    flex-shrink: 0;
  }

  .view-more-arrow {
    margin-left: auto;
  }
}

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

  .news-title {
    font-size: 1.25rem;
  }

  .view-more-card .view-more-content {
    flex-direction: column;
    text-align: center;
    gap: 1rem;
  }

  .view-more-icon {
    margin-bottom: 1rem;
  }

  .view-more-arrow {
    margin-left: 0;
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
</style>
