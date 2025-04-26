@extends('layout.app')

@section('title'){{ __('story.title') }}@endsection
@section('description'){{ __('story.description') }}@endsection
@section('keywords'){{ __('story.keywords') }}@endsection
{{-- @section('image'){{ 'your image link here..' }}@endsection --}}
<link rel="canonical" href="https://fastvideosave.com/instagram-story-download">
<link rel="stylesheet" href="/resources/css/app.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "WebPage",
  "@id": "https://fastvideosave.com/instagram-story-download",
  "url": "https://fastvideosave.com/instagram-story-download",
  "name": "Download Instagram Stories - Story Saver in HD & 4K Free",
  "description": "Download Instagram Stories by link for free with our online Instagram Story Downloader. Save stories in MP4 format, HD, or 4K quality without watermarks.",
  "image": "https://fastvideosave.com/images/fastVideoSaveLogo.png",
  "mainEntity": {
    "@type": "WebApplication",
    "@id": "https://fastvideosave.com/instagram-story-download/#app",
    "name": "Instagram Story Downloader",
    "description": "FastVideoSave's Story Downloader makes it easy to save Instagram Stories in high quality. Save moments, personal favorites, or entertaining clips in HD or 4K without watermarks.",
    "alternateName": [
      "Instagram Story Download 1080p",
      "Instagram Story Download",
      "Story Download Instagram",
      "Instagram Story Download Link",
      "Instagram Story Download Link Copy",
      "Instagram Story Download Online",
      "Instagram Story Saver Download",
      "Instagram Story Video Download",
      "Instagram Private Story Download"
    ],
    "image": "https://fastvideosave.com/images/fastVideoSaveLogo.png",
    "operatingSystem": "Windows, Linux, iOS, Android, OSX, macOS",
    "applicationCategory": "UtilitiesApplication",
    "featureList": [
      "Download Instagram Stories in HD or 4K Quality",
      "Save Stories from Private Accounts",
      "Free, Fast, and Reliable Downloads",
      "No Watermarks"
    ],
    "offers": {
      "@type": "Offer",
      "price": "0",
      "priceCurrency": "USD"
    },
    "aggregateRating": {
      "@type": "AggregateRating",
      "ratingValue": "4.6",
      "ratingCount": "132548"
    }
  },
  "mainEntityOfPage": {
    "@type": "FAQPage",
    "mainEntity": [
      {
        "@type": "Question",
        "name": "Can I download Instagram Stories for free?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes! FastVideoSave allows you to download Instagram Stories online for free."
        }
      },
      {
        "@type": "Question",
        "name": "Can I save stories from private accounts?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes, as long as you have access to view the story, you can save it with FastVideoSave."
        }
      },
      {
        "@type": "Question",
        "name": "Is the video quality high?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Absolutely! You can download Instagram Stories in full HD quality for the best viewing experience."
        }
      }
    ]
  }
}
</script>

@section('content')
    <section class="bg-white top-banner" id="top">
        <!-- banner -->
        <div class="container-lg form-section">
            <div class="header-form-wrapper overlay section px-3">
                <div class="row">
                    <div class="col-lg-8 text-center mx-auto z-index-2">
                       <h1 class="mb-3 heading-title-main" style="margin-bottom:2rem!important;">{{ __('story.heading_main') }}</h1>
                        <div class="position-relative form-header">
                            <form class="header-form-main mx-3" method="post">
                                @csrf
                                <input id="search" class="form-control" name="url"
                                    placeholder="{{ __('story.placeholder_url') }}">
                                <button class="btn btn-primary search-btn" id="searchButton">{{ __('story.btn_download') }}</button>
                            </form>
                        </div>

<div class="row g-4 justify-content-between mt-4"> <div class="col-6 col-md-auto"> <div class="d-flex flex-column align-items-center text-center"> <div style="background: #e6f2ff; border-radius: 50%; padding: 12px; width: 50px; height: 50px; display: flex; align-items: center; justify-content: center;">
                <i class="fas fa-bolt text-primary" style="font-size: 20px;"></i>
            </div>
            <div class="mt-2 text-dark fw-medium" style=" font-weight: 100 !important;">{{ __('story.feature_instant') }}</div>
        </div>
    </div>

    <div class="col-6 col-md-auto"> <div class="d-flex flex-column align-items-center text-center"> <div style="background: #f6eaff; border-radius: 50%; padding: 12px; width: 50px; height: 50px; display: flex; align-items: center; justify-content: center;">
                <i class="fas fa-shield-alt text-purple" style="font-size: 20px;"></i>
            </div>
            <div class="mt-2 text-dark fw-medium"  style=" font-weight: 100 !important;">{{ __('story.feature_nologin') }}</div>
        </div>
    </div>

    <div class="col-6 col-md-auto"> <div class="d-flex flex-column align-items-center text-center"> <div style="background: #ffeaf5; border-radius: 50%; padding: 12px; width: 50px; height: 50px; display: flex; align-items: center; justify-content: center;">
                <i class="fas fa-cloud-download-alt text-pink" style="font-size: 20px;"></i>
            </div>
            <div class="mt-2 text-dark fw-medium"  style=" font-weight: 100 !important;">{{ __('story.feature_quality') }}</div>
        </div>
    </div>

    <div class="col-6 col-md-auto"> <div class="d-flex flex-column align-items-center text-center"> <div style="background: #eafaf1; border-radius: 50%; padding: 12px; width: 50px; height: 50px; display: flex; align-items: center; justify-content: center;">
                <i class="fas fa-user-secret text-success" style="font-size: 20px;"></i>
            </div>
            <div class="mt-2 text-dark fw-medium"  style=" font-weight: 100 !important;">{{ __('story.feature_anonymous') }}</div>
        </div>
    </div>

</div>


<style>
.text-purple {
    color: #b85fd9;
}
.text-pink {
    color: #f159d3;
}
.feature-card {
    text-align: center;
}
</style>

                    </div>
                </div>
            </div>
        </div>
        <!-- /banner -->
    </section>
    <section class="result-data">

    </section>

    <!-- topics -->
    
    <section class="highlights-info-section pt-5 bg-white">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-10">
              <div class="text-center mb-5">
        <h2 class="text-center mb-5 bg-white section-title" style="font-family: 'Inter', 'SF Pro Display', 'Segoe UI', 'Roboto', sans-serif; font-weight: 600; font-size: 1.6rem; margin-bottom: 2rem !important;">{{ __('story.section_title_main') }}</h2>
                <p class="lead mb-0" style="font-family: 'Inter', 'SF Pro Display', 'Segoe UI', 'Roboto', sans-serif;">{{ __('story.section_intro') }}</p>
              </div>
            </div>
          </div>
        </div>
      </section>
  <section class="features-section py-5 bg-light">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-10">
              <h2 class="section-title text-center mb-5">{{ __('story.why_choose_title') }}</h2>
              <p class="text-center mb-5">{{ __('story.why_choose_intro') }}</p>
              <div class="row g-4">
                <div class="col-md-6">
                  <div class="feature-card">
                    <div class="icon-container">
                      <i class="bi bi-lightning-charge-fill"></i>
                    </div>
                    <h3>{{ __('story.fast') }}</h3>
                    <p>{{ __('story.fast_desc') }}</p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="feature-card">
                    <div class="icon-container">
                      <i class="bi bi-shield-check"></i>
                    </div>
                    <h3>{{ __('story.private') }}</h3>
                    <p>{{ __('story.private_desc') }}</p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="feature-card">
                    <div class="icon-container">
                      <i class="bi bi-film"></i>
                    </div>
                    <h3>{{ __('story.best_quality') }}</h3>
                    <p>{{ __('story.best_quality_desc') }}</p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="feature-card">
                    <div class="icon-container">
                      <i class="bi bi-phone"></i>
                    </div>
                    <h3>{{ __('story.online_access') }}</h3>
                    <p>{{ __('story.online_access_desc') }}</p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="feature-card">
                    <div class="icon-container">
                      <i class="bi bi-cash"></i>
                    </div>
                    <h3>{{ __('story.free') }}</h3>
                    <p>{{ __('story.free_desc') }}</p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="feature-card">
                    <div class="icon-container">
                      <i class="bi bi-images"></i>
                    </div>
                    <h3>{{ __('story.media') }}</h3>
                    <p>{{ __('story.media_desc') }}</p>
                  </div>
                </div>
                <div class="col-12">
                  <div class="feature-card">
                    <div class="icon-container">
                      <i class="bi bi-mouse"></i>
                    </div>
                    <h3>{{ __('story.easy_use') }}</h3>
                    <p>{{ __('story.easy_use_desc') }}</p>
                  </div>
                </div>
              </div>
              </div>
            </div>
          </div>
        <div class="text-center mt-4">
          <p class="lead">{{ __('story.guide_note') }}</p>
        </div>
        </div>
      </section>

      <!-- Step by Step Guide Section -->
      <section class="steps-section py-5">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-10">
              <h2 class="section-title text-center mb-5">{{ __('story.guide_title') }}</h2>
              <p class="text-center mb-5">{{ __('story.guide_intro') }}</p>
              <div class="steps-container">
                <div class="step-card">
                  <div class="step-number">1</div>
                  <div class="step-content">
                    <h3>{{ __('story.step_1_title') }}</h3>
                    <p>{{ __('story.step_1_desc') }}</p>
                  </div>
                </div>
                <div class="step-card">
                  <div class="step-number">2</div>
                  <div class="step-content">
                    <h3>{{ __('story.step_2_title') }}</h3>
                    <p>{{ __('story.step_2_desc') }}</p>
                  </div>
                </div>
                <div class="step-card">
                  <div class="step-number">3</div>
                  <div class="step-content">
                    <h3>{{ __('story.step_3_title') }}</h3>
                    <p>{{ __('story.step_3_desc') }}</p>
                  </div>
                </div>
              </div>
              <div class="text-center mt-4">
                <p class="lead">{{ __('story.guide_note') }}</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Benefits Section -->
      <section class="py-5">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-10">
               <h2 class="section-title text-center mb-5">{{ __('story.what_are_stories') }}</h2>
              <p class="mb-4 lead text-center">
                {{ __('story.what_are_stories_desc_1') }}
              </p>
              <p class="lead text-center">
                {{ __('story.what_are_stories_desc_2') }}
              </p>
            </div>
          </div>
        </div>
      </section>


 <section id="services" class="services" style="padding-top:30px; padding-bottom:30px;">
    <div class="container">
      <div class="section-header text-center" style="padding-bottom:2rem;">
        <h2 class="section-title">{{ __('story.section_services_title') }}</h2>
        <div class="section-divider"></div>
      </div>
      <div class="row g-4">
        <!-- Reel Downloader -->
        <div class="col-lg-6 service-item-wrap position-relative">
          <div class="service-item">
            <div class="service-icon">
              <i class="bi bi-film"></i>
            </div>
            <div class="service-content">
              <h3>{{ __('story.reel_downloader_title') }}</h3>
              <p>{{ __('story.reel_downloader_desc') }}</p>
            </div>
          </div>
          <a href="/instagram-reel-download" class="stretched-link" aria-label="Instagram Reel Downloader"></a>
        </div>
        
        <!-- Story Downloader -->
        <div class="col-lg-6 service-item-wrap position-relative">
          <div class="service-item">
            <div class="service-icon">
              <i class="bi bi-camera"></i>
            </div>
            <div class="service-content">
              <h3>{{ __('story.story_downloader_title') }}</h3>
              <p>{{ __('story.story_downloader_desc') }}</p>
            </div>
          </div>
          <a href="/instagram-story-download" class="stretched-link" aria-label="Instagram Story Downloader"></a>
        </div>
        
        <!-- Photo Downloader -->
        <div class="col-lg-6 service-item-wrap position-relative">
          <div class="service-item">
            <div class="service-icon">
              <i class="bi bi-image"></i>
            </div>
            <div class="service-content">
              <h3>{{ __('story.photo_downloader_title') }}</h3>
              <p>{{ __('story.photo_downloader_desc') }}</p>
            </div>
          </div>
          <a href="/instagram-photo-download" class="stretched-link" aria-label="Instagram Photo Downloader"></a>
        </div>
        
        <!-- Highlights Downloader -->
        <div class="col-lg-6 service-item-wrap position-relative">
          <div class="service-item">
            <div class="service-icon">
              <i class="bi bi-bookmark-star"></i>
            </div>
            <div class="service-content">
              <h3>{{ __('story.highlights_downloader_title') }}</h3>
              <p>{{ __('story.highlights_downloader_desc') }}</p>
            </div>
          </div>
          <a href="/instagram-highlights-download" class="stretched-link" aria-label="Instagram Highlights Downloader"></a>
        </div>
      </div>
    </div>
  </section>
      <!-- FAQ Section -->
      <section class="faq-section py-5 bg-light">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-10">
              <h2 class="section-title text-center mb-5">{{ __('story.faq_title') }}</h2>
              <div class="accordion" id="faqAccordion">
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                      {{ __('story.faq_1_q') }}
                    </button>
                  </h2>
                  <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                      {{ __('story.faq_1_a') }}
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                      {{ __('story.faq_2_q') }}
                    </button>
                  </h2>
                  <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                      {{ __('story.faq_2_a') }}
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                      {{ __('story.faq_3_q') }}
                    </button>
                  </h2>
                  <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                      {{ __('story.faq_3_a') }}
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                      {{ __('story.faq_4_q') }}
                    </button>
                  </h2>
                  <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                      {{ __('story.faq_4_a') }}
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5">
                      {{ __('story.faq_5_q') }}
                    </button>
                  </h2>
                  <div id="faq5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                      {{ __('story.faq_5_a') }}
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq6">
                      {{ __('story.faq_6_q') }}
                    </button>
                  </h2>
                  <div id="faq6" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                      {{ __('story.faq_6_a') }}
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq7">
                      {{ __('story.faq_7_q') }}
                    </button>
                  </h2>
                  <div id="faq7" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                      {{ __('story.faq_7_a') }}
                    </div>
                  </div>
                </div>
              </div>
            </div>
          <div class="text-center mt-4">
            <p class="lead">{{ __('story.cta_text') }}</p>
          </div>
          </div>
        </div>
      </section>


<section class="cta-section py-5 bg-light">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-10">
              <div class="cta-container text-center">
                <h2 class="mb-4">{{ __('story.cta_title') }}</h2>
                <p class="mb-4">{{ __('story.cta_text') }}</p>
                <a href="#top"
   class="btn btn-primary btn-lg px-5 py-3 fw-bold"
   style="background:linear-gradient(90deg, #4d8df7, #f159d3); border-color: #5C6BFF; color: #FFFFFF;">
   {{ __('story.btn_try') }}
</a>
              </div>
            </div>
          </div>
        </div>
      </section>

<section class="bg-white section ">
         <div class="container-lg">
               <div class="text-center my-5">
      <h2 style="color: #5C6BFF;">{{ __('story.note_title') }}</h2>
      <p style="color: #555; font-size: 1rem;">
       {{ __('story.note_text') }}
      </p>
    </div>
    
    <div class="text-center my-5">
      <h2 style="color: #5C6BFF;">{{ __('story.dmca_title') }}</h2>
      <p style="color: #555; font-size: 1rem;">
       {{ __('story.dmca_text') }}
      </p>
    </div>
         </div>
    </section>
   
  



    </div>
  </div>
</section>
@endsection
