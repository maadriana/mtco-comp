@extends('layouts.app')

@section('title', 'News & Updates | Mendoza Tugano & Co., CPAs')

@section('content')

<!-- Clean Header Section -->
<div style="position: relative; margin-top: -1.5rem; background: #326D78; padding: 100px 0 80px 0;">

    <!-- Breadcrumb -->
    <div style="position: absolute; top: 20px; left: 70px; background: rgba(255, 255, 255, 0.95); padding: 10px 20px; border-radius: 6px; box-shadow: 0 2px 10px rgba(0,0,0,0.1); z-index: 100;">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0" style="font-size: 0.9rem;">
                <li class="breadcrumb-item">
                    <a href="{{ url('/') }}" style="color: #326D78; text-decoration: none; font-weight: 500;">
                        <i class="fas fa-home me-1"></i>Home
                    </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page" style="color: #6c757d; font-weight: 500;">News & Updates</li>
            </ol>
        </nav>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h1 style="color: white; font-size: 3rem; font-weight: 600; margin-bottom: 1rem;">
                    {{ getContent('news_page_title', 'News & Updates') }}
                </h1>
                <p style="color: rgba(255,255,255,0.9); font-size: 1.2rem; line-height: 1.6; margin: 0;">
                    {{ getContent('news_page_subtitle', 'Stay informed with the latest developments in tax, audit, and business regulations in the Philippines.') }}
                </p>
            </div>
        </div>
    </div>
</div>

<!-- Main Content Section -->
<section class="py-5" style="background: #f8f9fa;">
    <div class="container">

        <!-- Section Description -->
        <div class="row justify-content-center mb-5">
            <div class="col-lg-10">
                <div style="padding: 2rem 0;" data-aos="fade-up">
                    <p style="color: #666; font-size: 1.2rem; line-height: 1.7; margin-bottom: 1.5rem; max-width: 900px; margin-left: auto; margin-right: auto; text-align: justify;">
                        {{ getContent('news_description_paragraph1', 'Our News and Updates section brings you timely insights, regulatory issuances, and industry trends that matter to your business.') }}
                    </p>
                    <p style="color: #666; font-size: 1.2rem; line-height: 1.7; margin: 0; max-width: 900px; margin-left: auto; margin-right: auto; text-align: justify;">
                        {{ getContent('news_description_paragraph2', 'We provide concise updates on new BIR and SEC regulations, changes in financial reporting standards, government circulars, and other policy shifts that impact compliance and operations. Whether it\'s a tax deadline reminder or a recent legal ruling, our goal is to keep you ahead of the curve with credible, practical information.') }}
                    </p>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- Main Content -->
            <div class="col-lg-8">

                <!-- News Article 1 -->
                <article class="news-article" data-date="2025-01-15" data-month="2025-01" data-year="2025" style="background: white; border-radius: 15px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.1); margin-bottom: 2rem;" data-aos="fade-up" data-aos-delay="100">
                    <div style="position: relative; height: 250px; overflow: hidden;">
                        @if(hasImageContent('news_article1_image'))
                            <img src="{{ getContent('news_article1_image') }}" alt="BIR Updates" style="width: 100%; height: 100%; object-fit: cover;">
                        @else
                            <img src="{{ asset('assets/img/services.jpg') }}" alt="BIR Updates" style="width: 100%; height: 100%; object-fit: cover;">
                        @endif
                        <div style="position: absolute; top: 20px; left: 20px;">
                            <span style="background: rgba(255,255,255,0.2); color: white; padding: 0.5rem 1rem; border-radius: 20px; font-size: 0.8rem; font-weight: 600; backdrop-filter: blur(10px);">
                                {{ getContent('news_article1_category', 'Tax Updates') }}
                            </span>
                        </div>
                    </div>

                    <div style="padding: 2rem;">
                        <div style="display: flex; align-items: center; margin-bottom: 1rem; color: #666; font-size: 0.9rem;">
                            <i class="fas fa-calendar-alt me-2"></i>
                            <span>{{ getContent('news_article1_date', 'January 15, 2025') }}</span>
                            <span style="margin: 0 1rem;">•</span>
                            <i class="fas fa-clock me-2"></i>
                            <span>{{ getContent('news_article1_read_time', '3 min read') }}</span>
                        </div>

                        <h3 style="color: #333; font-weight: 600; margin-bottom: 1rem; font-size: 1.5rem;">
                            {{ getContent('news_article1_title', 'New BIR Revenue Regulation on Digital Tax Receipts') }}
                        </h3>

                        <p style="color: #666; line-height: 1.6; margin-bottom: 1.5rem;">
                            {{ getContent('news_article1_excerpt', 'The Bureau of Internal Revenue has issued new guidelines requiring businesses to implement digital tax receipts by March 2025. This regulation affects all registered taxpayers with annual gross receipts exceeding PHP 3 million and introduces significant changes to existing invoicing systems.') }}
                        </p>

                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <a href="{{ route('news.bir-article') }}" style="display: inline-flex; align-items: center; background: #326D78; color: white; padding: 0.75rem 1.5rem; border-radius: 8px; text-decoration: none; font-weight: 600; transition: all 0.3s ease;">
                                {{ getContent('news_article1_read_more_text', 'Read More') }}
                                <i class="fas fa-arrow-right ms-2"></i>
                            </a>

                            <div style="display: flex; gap: 0.5rem;">
                                <a href="#" style="width: 35px; height: 35px; background: #f8f9fa; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #666; text-decoration: none; transition: all 0.3s ease;">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#" style="width: 35px; height: 35px; background: #f8f9fa; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #666; text-decoration: none; transition: all 0.3s ease;">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#" style="width: 35px; height: 35px; background: #f8f9fa; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #666; text-decoration: none; transition: all 0.3s ease;">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- News Article 2 -->
                <article class="news-article" data-date="2025-01-10" data-month="2025-01" data-year="2025" style="background: white; border-radius: 15px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.1); margin-bottom: 2rem;" data-aos="fade-up" data-aos-delay="200">
                    <div style="position: relative; height: 250px; overflow: hidden;">
                        @if(hasImageContent('news_article2_image'))
                            <img src="{{ getContent('news_article2_image') }}" alt="SEC Regulations" style="width: 100%; height: 100%; object-fit: cover;">
                        @else
                            <img src="{{ asset('assets/img/services.jpg') }}" alt="SEC Regulations" style="width: 100%; height: 100%; object-fit: cover;">
                        @endif
                        <div style="position: absolute; top: 20px; left: 20px;">
                            <span style="background: rgba(255,255,255,0.2); color: white; padding: 0.5rem 1rem; border-radius: 20px; font-size: 0.8rem; font-weight: 600; backdrop-filter: blur(10px);">
                                {{ getContent('news_article2_category', 'SEC Regulations') }}
                            </span>
                        </div>
                    </div>

                    <div style="padding: 2rem;">
                        <div style="display: flex; align-items: center; margin-bottom: 1rem; color: #666; font-size: 0.9rem;">
                            <i class="fas fa-calendar-alt me-2"></i>
                            <span>{{ getContent('news_article2_date', 'January 10, 2025') }}</span>
                            <span style="margin: 0 1rem;">•</span>
                            <i class="fas fa-clock me-2"></i>
                            <span>{{ getContent('news_article2_read_time', '5 min read') }}</span>
                        </div>

                        <h3 style="color: #333; font-weight: 600; margin-bottom: 1rem; font-size: 1.5rem;">
                            {{ getContent('news_article2_title', 'SEC Announces Updated Financial Reporting Standards for 2025') }}
                        </h3>

                        <p style="color: #666; line-height: 1.6; margin-bottom: 1.5rem;">
                            {{ getContent('news_article2_excerpt', 'The Securities and Exchange Commission has released comprehensive updates to financial reporting standards effective June 2025. These changes include enhanced disclosure requirements for related party transactions and revised guidelines for revenue recognition in service industries.') }}
                        </p>

                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <a href="{{ route('news.sec-article') }}" style="display: inline-flex; align-items: center; background: #5ba3b0; color: white; padding: 0.75rem 1.5rem; border-radius: 8px; text-decoration: none; font-weight: 600; transition: all 0.3s ease;">
                                {{ getContent('news_article2_read_more_text', 'Read More') }}
                                <i class="fas fa-arrow-right ms-2"></i>
                            </a>

                            <div style="display: flex; gap: 0.5rem;">
                                <a href="#" style="width: 35px; height: 35px; background: #f8f9fa; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #666; text-decoration: none; transition: all 0.3s ease;">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#" style="width: 35px; height: 35px; background: #f8f9fa; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #666; text-decoration: none; transition: all 0.3s ease;">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#" style="width: 35px; height: 35px; background: #f8f9fa; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #666; text-decoration: none; transition: all 0.3s ease;">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- News Article 3 -->
                <article class="news-article" data-date="2025-01-08" data-month="2025-01" data-year="2025" style="background: white; border-radius: 15px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.1); margin-bottom: 2rem;" data-aos="fade-up" data-aos-delay="300">
                    <div style="position: relative; height: 250px; overflow: hidden;">
                        @if(hasImageContent('news_article3_image'))
                            <img src="{{ getContent('news_article3_image') }}" alt="Audit Standards" style="width: 100%; height: 100%; object-fit: cover;">
                        @else
                            <img src="{{ asset('assets/img/services.jpg') }}" alt="Audit Standards" style="width: 100%; height: 100%; object-fit: cover;">
                        @endif
                        <div style="position: absolute; top: 20px; left: 20px;">
                            <span style="background: rgba(255,255,255,0.2); color: white; padding: 0.5rem 1rem; border-radius: 20px; font-size: 0.8rem; font-weight: 600; backdrop-filter: blur(10px);">
                                {{ getContent('news_article3_category', 'Audit Standards') }}
                            </span>
                        </div>
                    </div>

                    <div style="padding: 2rem;">
                        <div style="display: flex; align-items: center; margin-bottom: 1rem; color: #666; font-size: 0.9rem;">
                            <i class="fas fa-calendar-alt me-2"></i>
                            <span>{{ getContent('news_article3_date', 'January 8, 2025') }}</span>
                            <span style="margin: 0 1rem;">•</span>
                            <i class="fas fa-clock me-2"></i>
                            <span>{{ getContent('news_article3_read_time', '4 min read') }}</span>
                        </div>

                        <h3 style="color: #333; font-weight: 600; margin-bottom: 1rem; font-size: 1.5rem;">
                            {{ getContent('news_article3_title', 'Philippine Standards on Auditing (PSA) Updates for 2025') }}
                        </h3>

                        <p style="color: #666; line-height: 1.6; margin-bottom: 1.5rem;">
                            {{ getContent('news_article3_excerpt', 'The Auditing and Assurance Standards Council has issued revisions to several Philippine Standards on Auditing, including enhanced procedures for assessing fraud risks and updated requirements for auditor independence. These changes take effect for audits of financial statements for periods beginning on or after April 15, 2025.') }}
                        </p>

                        <div style="display: flex; justify-content: space-between; align-items: center;">
                            <a href="{{ route('news.psa-article') }}" style="display: inline-flex; align-items: center; background: #4a8a96; color: white; padding: 0.75rem 1.5rem; border-radius: 8px; text-decoration: none; font-weight: 600; transition: all 0.3s ease;">
                                {{ getContent('news_article3_read_more_text', 'Read More') }}
                                <i class="fas fa-arrow-right ms-2"></i>
                            </a>

                            <div style="display: flex; gap: 0.5rem;">
                                <a href="#" style="width: 35px; height: 35px; background: #f8f9fa; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #666; text-decoration: none; transition: all 0.3s ease;">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#" style="width: 35px; height: 35px; background: #f8f9fa; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #666; text-decoration: none; transition: all 0.3s ease;">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="#" style="width: 35px; height: 35px; background: #f8f9fa; border-radius: 50%; display: flex; align-items: center; justify-content: center; color: #666; text-decoration: none; transition: all 0.3s ease;">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </article>

                <!-- Load More Button -->
                <div style="text-align: center; margin-top: 2rem;" data-aos="fade-up" data-aos-delay="400">
                    <button style="background: #326D78; color: white; border: none; padding: 1rem 2rem; border-radius: 8px; font-weight: 600; cursor: pointer; transition: all 0.3s ease;">
                        {{ getContent('news_load_more_text', 'Load More Articles') }}
                        <i class="fas fa-chevron-down ms-2"></i>
                    </button>
                </div>

            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <div style="position: sticky; top: 2rem;">

                    <!-- Search -->
                    <div style="background: white; padding: 2rem; border-radius: 10px; margin-bottom: 2rem; box-shadow: 0 4px 15px rgba(0,0,0,0.05);" data-aos="fade-up" data-aos-delay="100">
                        <h5 style="color: #333; font-weight: 600; margin-bottom: 1.5rem;">
                            {{ getContent('news_search_title', 'Search News') }}
                        </h5>
                        <div style="position: relative;">
                            <input type="text" id="newsSearch" placeholder="{{ getContent('news_search_placeholder', 'Search articles...') }}" style="width: 100%; padding: 0.75rem 1rem 0.75rem 2.5rem; border: 2px solid #e2e8f0; border-radius: 8px; outline: none; transition: border-color 0.3s ease;">
                            <i class="fas fa-search" style="position: absolute; left: 1rem; top: 50%; transform: translateY(-50%); color: #999;"></i>
                        </div>
                    </div>

                    <!-- View by Year -->
                    <div style="background: white; padding: 2rem; border-radius: 10px; margin-bottom: 2rem; box-shadow: 0 4px 15px rgba(0,0,0,0.05);" data-aos="fade-up" data-aos-delay="200">
                        <h5 style="color: #333; font-weight: 600; margin-bottom: 1.5rem;">
                            {{ getContent('news_filter_year_title', 'View by Year') }}
                        </h5>

                        <div style="margin-bottom: 1rem;">
                            <a href="#" onclick="filterByYear('all')" class="year-filter" data-year="all" style="display: flex; justify-content: space-between; align-items: center; color: #326D78; text-decoration: none; padding: 0.5rem 0; border-bottom: 1px solid #f1f1f1; font-weight: 500;">
                                <span>{{ getContent('news_filter_all_news', 'View All News') }}</span>
                                <span style="background: #326D78; color: white; padding: 0.2rem 0.5rem; border-radius: 12px; font-size: 0.8rem;">{{ getContent('news_count_all', '3') }}</span>
                            </a>
                        </div>

                        <div style="margin-bottom: 1rem;">
                            <a href="#" onclick="filterByYear('2025')" class="year-filter" data-year="2025" style="display: flex; justify-content: space-between; align-items: center; color: #666; text-decoration: none; padding: 0.5rem 0; border-bottom: 1px solid #f1f1f1;">
                                <span>{{ getContent('news_year_2025', '2025') }}</span>
                                <span style="color: #999; font-size: 0.9rem;">{{ getContent('news_count_2025', '3') }}</span>
                            </a>
                        </div>

                        <div style="margin-bottom: 1rem;">
                            <a href="#" onclick="filterByYear('2024')" class="year-filter" data-year="2024" style="display: flex; justify-content: space-between; align-items: center; color: #666; text-decoration: none; padding: 0.5rem 0; border-bottom: 1px solid #f1f1f1;">
                                <span>{{ getContent('news_year_2024', '2024') }}</span>
                                <span style="color: #999; font-size: 0.9rem;">{{ getContent('news_count_2024', '0') }}</span>
                            </a>
                        </div>
                    </div>

                    <!-- View by Month -->
                    <div style="background: white; padding: 2rem; border-radius: 10px; margin-bottom: 2rem; box-shadow: 0 4px 15px rgba(0,0,0,0.05);" data-aos="fade-up" data-aos-delay="300">
                        <h5 style="color: #333; font-weight: 600; margin-bottom: 1.5rem;">
                            {{ getContent('news_filter_month_title', 'View by Month') }}
                        </h5>

                        <div style="margin-bottom: 1rem;">
                            <a href="#" onclick="filterByMonth('2025-01')" class="month-filter" data-month="2025-01" style="display: flex; justify-content: space-between; align-items: center; color: #666; text-decoration: none; padding: 0.5rem 0; border-bottom: 1px solid #f1f1f1;">
                                <span>{{ getContent('news_month_january', 'January 2025') }}</span>
                                <span style="color: #999; font-size: 0.9rem;">{{ getContent('news_count_january', '3') }}</span>
                            </a>
                        </div>

                        <div style="margin-bottom: 1rem;">
                            <a href="#" onclick="filterByMonth('2024-12')" class="month-filter" data-month="2024-12" style="display: flex; justify-content: space-between; align-items: center; color: #666; text-decoration: none; padding: 0.5rem 0; border-bottom: 1px solid #f1f1f1;">
                                <span>{{ getContent('news_month_december', 'December 2024') }}</span>
                                <span style="color: #999; font-size: 0.9rem;">{{ getContent('news_count_december', '0') }}</span>
                            </a>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</section>

<script>
// Search functionality
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('newsSearch');
    const articles = document.querySelectorAll('.news-article');
    const yearFilters = document.querySelectorAll('.year-filter');
    const monthFilters = document.querySelectorAll('.month-filter');

    let currentYearFilter = 'all';
    let currentMonthFilter = 'all';

    // Search function
    function searchArticles() {
        const searchTerm = searchInput.value.toLowerCase();

        articles.forEach(article => {
            const title = article.querySelector('h3').textContent.toLowerCase();
            const excerpt = article.querySelector('p').textContent.toLowerCase();
            const category = article.querySelector('span').textContent.toLowerCase();

            const matchesSearch = title.includes(searchTerm) ||
                                excerpt.includes(searchTerm) ||
                                category.includes(searchTerm);

            const matchesYear = currentYearFilter === 'all' ||
                              article.dataset.year === currentYearFilter;

            const matchesMonth = currentMonthFilter === 'all' ||
                                article.dataset.month === currentMonthFilter;

            if (matchesSearch && matchesYear && matchesMonth) {
                article.style.display = 'block';
            } else {
                article.style.display = 'none';
            }
        });

        updateNoResultsMessage();
    }

    // Filter by year
    function filterByYear(year) {
        currentYearFilter = year;
        currentMonthFilter = 'all'; // Reset month filter when year changes

        // Update active states
        yearFilters.forEach(filter => {
            if (filter.dataset.year === year) {
                filter.style.color = '#326D78';
                filter.style.fontWeight = '600';
            } else {
                filter.style.color = '#666';
                filter.style.fontWeight = 'normal';
            }
        });

        // Reset month filter styles
        monthFilters.forEach(filter => {
            filter.style.color = '#666';
            filter.style.fontWeight = 'normal';
        });

        searchArticles();
    }

    // Filter by month
    function filterByMonth(month) {
        currentMonthFilter = month;

        // Update active states
        monthFilters.forEach(filter => {
            if (filter.dataset.month === month) {
                filter.style.color = '#326D78';
                filter.style.fontWeight = '600';
            } else {
                filter.style.color = '#666';
                filter.style.fontWeight = 'normal';
            }
        });

        searchArticles();
    }

    // Show/hide no results message
    function updateNoResultsMessage() {
        const visibleArticles = Array.from(articles).filter(article =>
            article.style.display !== 'none'
        );

        let noResultsMsg = document.getElementById('noResultsMessage');

        if (visibleArticles.length === 0) {
            if (!noResultsMsg) {
                noResultsMsg = document.createElement('div');
                noResultsMsg.id = 'noResultsMessage';
                noResultsMsg.style.cssText = 'text-align: center; padding: 3rem; color: #666; font-size: 1.1rem;';
                noResultsMsg.innerHTML = '<i class="fas fa-search" style="font-size: 2rem; margin-bottom: 1rem; display: block; opacity: 0.5;"></i>No articles found matching your criteria.';
                articles[0].parentNode.appendChild(noResultsMsg);
            }
            noResultsMsg.style.display = 'block';
        } else {
            if (noResultsMsg) {
                noResultsMsg.style.display = 'none';
            }
        }
    }

    // Event listeners
    searchInput.addEventListener('input', searchArticles);

    // Make functions global for onclick handlers
    window.filterByYear = filterByYear;
    window.filterByMonth = filterByMonth;
});
</script>

<style>
    .breadcrumb-item + .breadcrumb-item::before {
        content: "›";
        color: #6c757d;
        font-weight: bold;
    }

    /* Hover effects for articles */
    article:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 25px rgba(0,0,0,0.15) !important;
    }

    /* Hover effects for read more buttons */
    article a[style*="background: #326D78"]:hover,
    article a[style*="background: #5ba3b0"]:hover,
    article a[style*="background: #4a8a96"]:hover {
        transform: translateY(-2px);
        box-shadow: 0 4px 15px rgba(0,0,0,0.2);
    }

    /* Social button hover effects */
    article a[style*="width: 35px"]:hover {
        background: #326D78 !important;
        color: white !important;
        transform: translateY(-2px);
    }

    /* Tag hover effects */
    div a[style*="background: #f8f9fa"]:hover {
        background: #326D78 !important;
        color: white !important;
    }

    /* Search input focus */
    input[type="text"]:focus {
        border-color: #326D78 !important;
        box-shadow: 0 0 0 3px rgba(50, 109, 120, 0.1);
    }

    /* Load more button hover */
    button:hover {
        background: #2a5f6a !important;
        transform: translateY(-2px);
        box-shadow: 0 4px 15px rgba(50, 109, 120, 0.3);
    }

    /* Sidebar links hover */
    .col-lg-4 a:hover {
        color: #326D78 !important;
    }

    @media (max-width: 768px) {
        .container h1 {
            font-size: 2.2rem !important;
        }

        .col-lg-4 {
            margin-top: 3rem;
        }

        div[style*="position: sticky"] {
            position: static !important;
        }

        article div[style*="display: flex; justify-content: space-between"] {
            flex-direction: column;
            gap: 1rem;
        }

        article div[style*="display: flex; gap: 0.5rem"] {
            justify-content: center;
        }
    }
</style>

@endsection
