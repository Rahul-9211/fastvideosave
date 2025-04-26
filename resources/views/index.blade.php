@extends('layout.app')

@section('title'){{'Download Instagram Reels, Videos, Stories & Highlights Free | FastVideoSave.com'}}@endsection
@section('description'){{'FastVideoSave.com: Download Instagram reels, videos, stories, photos, IGTV, and highlights online for free. Download MP4 Videos in HD (720p, 1080p) or 4K without Watermarks.'}}@endsection
@section('keywords'){{'Instagram Video Downloader','Instagram Reel Downloader','Instagram Story Downloader','Instagram Highlight downloader','Instagram Photo Downloader'}}@endsection
{{-- @section('image'){{ 'your image link here..' }}@endsection --}}
<script type="application/ld+json">
   <link rel="stylesheet" href="/resources/css/app.css">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
{
  "@context": "http://schema.org",
  "@type": "WebPage",
  "@id": "https://fastvideosave.com/#website",
  "url": "https://fastvideosave.com/",
  "name": "Download Instagram Reels, Videos, Stories & Highlights Free | FastVideoSave.com",
  "description": "FastVideoSave.com: Download Instagram reels, videos, stories, photos, IGTV, and highlights online for free. Download MP4 Videos in HD (720p, 1080p) or 4K without Watermarks.",
  "image": "https://fastvideosave.com/images/fastVideoSaveLogo.png",
  "mainEntity": {
    "@type": "WebApplication",
    "@id": "https://fastvideosave.com/#app",
    "name": "FastVideoSave - Instagram Downloader",
    "description": "FastVideoSave is your all-in-one solution for downloading Instagram content with ease and in high quality. From photos to IGTV videos, Stories, Highlights, and Reels, our platform lets you save the moments that matter. Enjoy unlimited, hassle-free downloads on any device.",
    "alternateName": [
      "Instagram Video Downloader",
      "Instagram Reels Downloader",
      "Instagram Story Downloader",
      "Instagram Photo Downloader",
      "IGTV Downloader"
    ],
    "image": "https://fastvideosave.com/images/fastVideoSaveLogo.png",
    "operatingSystem": "Windows, Linux, iOS, Android, OSX, macOS",
    "applicationCategory": "UtilitiesApplication",
    "featureList": [
      "Download High Quality Content",
      "No Watermarks",
      "Free to Use",
      "Fast and Reliable"
    ],
    "offers": {
      "@type": "Offer",
      "price": "0",
      "priceCurrency": "USD"
    }
  },
  "mainEntityOfPage": {
    "@type": "FAQPage",
    "mainEntity": [
      {
        "@type": "Question",
        "name": "Is FastVideoSave free to use?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes! FastVideoSave allows you to download Instagram content without any charges or subscriptions."
        }
      },
      {
        "@type": "Question",
        "name": "Can I download content in high quality?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Absolutely! FastVideoSave supports full HD and 4K resolution for photos and videos where available."
        }
      },
      {
        "@type": "Question",
        "name": "Is there a watermark on downloaded content?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "No, all content downloaded from FastVideoSave is free of watermarks, giving you a clean, high-quality download."
        }
      },
      {
        "@type": "Question",
        "name": "Can I save content from private accounts?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Yes, as long as you have access to view private content, you can save it using our tools."
        }
      }
    ]
  }
}
</script>

<style>
    @media (min-width: 769px) {
    .form-header button.submit {
       
        right: 4px !important;
       
    }
}
</style>
@section('content')
 <section class="bg-white top-banner" id="top">
        <!-- banner -->
        <div class="container-lg form-section">
            <div class="header-form-wrapper overlay section px-3">
                <div class="row">
                    <div class="col-lg-8 text-center mx-auto z-index-2">
                        <nav class="navbar-tabs">
                            <div class="nav nav-tabs home-form-tabs bg-white rounded-md justify-content-between border-none mb-3 p-1"
                                id="nav-tab" role="tablist">
                                <button class="nav-link nav-tabs-btns active" id="nav-video-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-video" type="button" role="tab" aria-controls="nav-video"
                                    aria-selected="true">Video</button>
                                <button class="nav-link nav-tabs-btns" id="nav-photo-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-photo" type="button" role="tab" aria-controls="nav-photo"
                                    aria-selected="false">Photo</button>
                                <button class="nav-link nav-tabs-btns" id="nav-reel-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-reel" type="button" role="tab" aria-controls="nav-reel"
                                    aria-selected="false">Reel</button>
                                <button class="nav-link nav-tabs-btns" id="nav-story-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-story" type="button" role="tab" aria-controls="nav-story"
                                    aria-selected="false">Story</button>
                                <!--<button class="nav-link nav-tabs-btns" id="nav-igtv-tab" data-bs-toggle="tab"-->
                                <!--data-bs-target="#nav-igtv" type="button" role="tab" aria-controls="nav-igtv"-->
                                <!--aria-selected="false">IGTV</button>-->
                                <button class="nav-link nav-tabs-btns" id="nav-highlight-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-highlight" type="button" role="tab" aria-controls="nav-highlight"
                                    aria-selected="false">Highlight</button>
                            </div>
                        </nav>
                        <div class="tab-content p-3" id="nav-tabContent">
                            <div class="tab-pane fade active show" id="nav-video" role="tabpanel"
                                aria-labelledby="nav-video-tab">
                                 <h1 class="mb-3 heading-title-main" style="margin-bottom:2rem!important;">Download Instagram Reels, Videos, Stories & Highlights Free</h1>
                                <p class="text-black mb-4">Fast, free instagram video download online in HD.</p>
                                <div class="position-relative form-header">
                                    <form class="header-form-main" method="post">
                                        @csrf
                                        <input id="search" class="form-control" name="url"
                                            placeholder="Enter video url here..." required>
                                        <button type="button" id="paste" class="btn btn-secondary me-3">
                                    <svg width="22" height="22" viewBox="0 0 15 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10.5951 2.00008H11.9284C12.282 2.00008 12.6211 2.14056 12.8712 2.39061C13.1212 2.64065 13.2617 2.97979 13.2617 3.33341V14.0001C13.2617 14.3537 13.1212 14.6928 12.8712 14.9429C12.6211 15.1929 12.282 15.3334 11.9284 15.3334H2.59505C2.24143 15.3334 1.90229 15.1929 1.65224 14.9429C1.40219 14.6928 1.26172 14.3537 1.26172 14.0001V3.33341C1.26172 2.97979 1.40219 2.64065 1.65224 2.39061C1.90229 2.14056 2.24143 2.00008 2.59505 2.00008H3.92839M10.5951 2.00008C10.5951 2.73646 9.9981 3.33341 9.26172 3.33341H5.26172C4.52534 3.33341 3.92839 2.73646 3.92839 2.00008M10.5951 2.00008C10.5951 1.2637 9.9981 0.666748 9.26172 0.666748H5.26172C4.52534 0.666748 3.92839 1.2637 3.92839 2.00008M4.59505 7.33341H9.92839M4.59505 10.6667H9.92839"
                                            stroke="#fff" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round">
                                        </path>
                                    </svg>
                                </button>
                                <button class="btn btn-primary submit" type="submit">Download</button>
                                    </form>
                                </div>
                                <div class="row g-4 justify-content-between mt-4"> <div class="col-6 col-md-auto"> <div class="d-flex flex-column align-items-center text-center"> <div style="background: #e6f2ff; border-radius: 50%; padding: 12px; width: 50px; height: 50px; display: flex; align-items: center; justify-content: center;">
                <i class="fas fa-bolt text-primary" style="font-size: 20px;"></i>
            </div>
            <div class="mt-2 text-dark fw-medium" style=" font-weight: 100 !important;">Instant Downloads</div>
        </div>
    </div>

    <div class="col-6 col-md-auto"> <div class="d-flex flex-column align-items-center text-center"> <div style="background: #f6eaff; border-radius: 50%; padding: 12px; width: 50px; height: 50px; display: flex; align-items: center; justify-content: center;">
                <i class="fas fa-shield-alt text-purple" style="font-size: 20px;"></i>
            </div>
            <div class="mt-2 text-dark fw-medium"  style=" font-weight: 100 !important;">No Login Required</div>
        </div>
    </div>

    <div class="col-6 col-md-auto"> <div class="d-flex flex-column align-items-center text-center"> <div style="background: #ffeaf5; border-radius: 50%; padding: 12px; width: 50px; height: 50px; display: flex; align-items: center; justify-content: center;">
                <i class="fas fa-cloud-download-alt text-pink" style="font-size: 20px;"></i>
            </div>
            <div class="mt-2 text-dark fw-medium"  style=" font-weight: 100 !important;">Highest Quality</div>
        </div>
    </div>

    <div class="col-6 col-md-auto"> <div class="d-flex flex-column align-items-center text-center"> <div style="background: #eafaf1; border-radius: 50%; padding: 12px; width: 50px; height: 50px; display: flex; align-items: center; justify-content: center;">
                <i class="fas fa-user-secret text-success" style="font-size: 20px;"></i>
            </div>
            <div class="mt-2 text-dark fw-medium"  style=" font-weight: 100 !important;">Anonymous</div>
        </div>
    </div>

</div>
                            </div>
                            <div class="tab-pane fade" id="nav-photo" role="tabpanel" aria-labelledby="nav-photo-tab">
                                 <h1 class="mb-3 heading-title-main" style="margin-bottom:2rem!important;">Download Instagram Reels, Videos, Stories & Highlights Free</h1>
                                <p class="text-black mb-4">Easily download instagram photos free in HD quality.</p>
                                <div class="position-relative form-header">
                                    <form class="header-form-main" method="post">
                                        @csrf
                                        <input id="search" class="form-control" name="url"
                                            placeholder="Enter photo url here...">
                                        <button type="button" id="paste" class="btn btn-secondary me-3">
                                    <svg width="22" height="22" viewBox="0 0 15 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10.5951 2.00008H11.9284C12.282 2.00008 12.6211 2.14056 12.8712 2.39061C13.1212 2.64065 13.2617 2.97979 13.2617 3.33341V14.0001C13.2617 14.3537 13.1212 14.6928 12.8712 14.9429C12.6211 15.1929 12.282 15.3334 11.9284 15.3334H2.59505C2.24143 15.3334 1.90229 15.1929 1.65224 14.9429C1.40219 14.6928 1.26172 14.3537 1.26172 14.0001V3.33341C1.26172 2.97979 1.40219 2.64065 1.65224 2.39061C1.90229 2.14056 2.24143 2.00008 2.59505 2.00008H3.92839M10.5951 2.00008C10.5951 2.73646 9.9981 3.33341 9.26172 3.33341H5.26172C4.52534 3.33341 3.92839 2.73646 3.92839 2.00008M10.5951 2.00008C10.5951 1.2637 9.9981 0.666748 9.26172 0.666748H5.26172C4.52534 0.666748 3.92839 1.2637 3.92839 2.00008M4.59505 7.33341H9.92839M4.59505 10.6667H9.92839"
                                            stroke="#fff" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round">
                                        </path>
                                    </svg>
                                </button>
                                <button class="btn btn-primary submit" type="submit">Download</button>
                                    </form>
                                </div>
                                <div class="row g-4 justify-content-between mt-4"> <div class="col-6 col-md-auto"> <div class="d-flex flex-column align-items-center text-center"> <div style="background: #e6f2ff; border-radius: 50%; padding: 12px; width: 50px; height: 50px; display: flex; align-items: center; justify-content: center;">
                <i class="fas fa-bolt text-primary" style="font-size: 20px;"></i>
            </div>
            <div class="mt-2 text-dark fw-medium" style=" font-weight: 100 !important;">Instant Downloads</div>
        </div>
    </div>

    <div class="col-6 col-md-auto"> <div class="d-flex flex-column align-items-center text-center"> <div style="background: #f6eaff; border-radius: 50%; padding: 12px; width: 50px; height: 50px; display: flex; align-items: center; justify-content: center;">
                <i class="fas fa-shield-alt text-purple" style="font-size: 20px;"></i>
            </div>
            <div class="mt-2 text-dark fw-medium"  style=" font-weight: 100 !important;">No Login Required</div>
        </div>
    </div>

    <div class="col-6 col-md-auto"> <div class="d-flex flex-column align-items-center text-center"> <div style="background: #ffeaf5; border-radius: 50%; padding: 12px; width: 50px; height: 50px; display: flex; align-items: center; justify-content: center;">
                <i class="fas fa-cloud-download-alt text-pink" style="font-size: 20px;"></i>
            </div>
            <div class="mt-2 text-dark fw-medium"  style=" font-weight: 100 !important;">Highest Quality</div>
        </div>
    </div>

    <div class="col-6 col-md-auto"> <div class="d-flex flex-column align-items-center text-center"> <div style="background: #eafaf1; border-radius: 50%; padding: 12px; width: 50px; height: 50px; display: flex; align-items: center; justify-content: center;">
                <i class="fas fa-user-secret text-success" style="font-size: 20px;"></i>
            </div>
            <div class="mt-2 text-dark fw-medium"  style=" font-weight: 100 !important;">Anonymous</div>
        </div>
    </div>

</div>
                            </div>
                            <div class="tab-pane fade" id="nav-reel" role="tabpanel" aria-labelledby="nav-reel-tab">
                                <h1 class="mb-3 heading-title-main" style="margin-bottom:2rem!important;">Download Instagram Reels, Videos, Stories & Highlights Free</h1>
                                <p class="text-black mb-4">Get fast, free instagram reels download online in high quality.</p>
                                <div class="position-relative form-header">
                                    <form class="header-form-main" method="post">
                                        @csrf
                                        <input id="search" class="form-control" name="url"
                                            placeholder="Enter reel url here...">
                                        <button type="button" id="paste" class="btn btn-secondary me-3">
                                    <svg width="22" height="22" viewBox="0 0 15 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10.5951 2.00008H11.9284C12.282 2.00008 12.6211 2.14056 12.8712 2.39061C13.1212 2.64065 13.2617 2.97979 13.2617 3.33341V14.0001C13.2617 14.3537 13.1212 14.6928 12.8712 14.9429C12.6211 15.1929 12.282 15.3334 11.9284 15.3334H2.59505C2.24143 15.3334 1.90229 15.1929 1.65224 14.9429C1.40219 14.6928 1.26172 14.3537 1.26172 14.0001V3.33341C1.26172 2.97979 1.40219 2.64065 1.65224 2.39061C1.90229 2.14056 2.24143 2.00008 2.59505 2.00008H3.92839M10.5951 2.00008C10.5951 2.73646 9.9981 3.33341 9.26172 3.33341H5.26172C4.52534 3.33341 3.92839 2.73646 3.92839 2.00008M10.5951 2.00008C10.5951 1.2637 9.9981 0.666748 9.26172 0.666748H5.26172C4.52534 0.666748 3.92839 1.2637 3.92839 2.00008M4.59505 7.33341H9.92839M4.59505 10.6667H9.92839"
                                            stroke="#fff" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round">
                                        </path>
                                    </svg>
                                </button>
                                <button class="btn btn-primary submit" type="submit">Download</button>
                                    </form>
                                </div>
                                <div class="row g-4 justify-content-between mt-4"> <div class="col-6 col-md-auto"> <div class="d-flex flex-column align-items-center text-center"> <div style="background: #e6f2ff; border-radius: 50%; padding: 12px; width: 50px; height: 50px; display: flex; align-items: center; justify-content: center;">
                <i class="fas fa-bolt text-primary" style="font-size: 20px;"></i>
            </div>
            <div class="mt-2 text-dark fw-medium" style=" font-weight: 100 !important;">Instant Downloads</div>
        </div>
    </div>

    <div class="col-6 col-md-auto"> <div class="d-flex flex-column align-items-center text-center"> <div style="background: #f6eaff; border-radius: 50%; padding: 12px; width: 50px; height: 50px; display: flex; align-items: center; justify-content: center;">
                <i class="fas fa-shield-alt text-purple" style="font-size: 20px;"></i>
            </div>
            <div class="mt-2 text-dark fw-medium"  style=" font-weight: 100 !important;">No Login Required</div>
        </div>
    </div>

    <div class="col-6 col-md-auto"> <div class="d-flex flex-column align-items-center text-center"> <div style="background: #ffeaf5; border-radius: 50%; padding: 12px; width: 50px; height: 50px; display: flex; align-items: center; justify-content: center;">
                <i class="fas fa-cloud-download-alt text-pink" style="font-size: 20px;"></i>
            </div>
            <div class="mt-2 text-dark fw-medium"  style=" font-weight: 100 !important;">Highest Quality</div>
        </div>
    </div>

    <div class="col-6 col-md-auto"> <div class="d-flex flex-column align-items-center text-center"> <div style="background: #eafaf1; border-radius: 50%; padding: 12px; width: 50px; height: 50px; display: flex; align-items: center; justify-content: center;">
                <i class="fas fa-user-secret text-success" style="font-size: 20px;"></i>
            </div>
            <div class="mt-2 text-dark fw-medium"  style=" font-weight: 100 !important;">Anonymous</div>
        </div>
    </div>

</div>
                            </div>
                            <div class="tab-pane fade" id="nav-story" role="tabpanel" aria-labelledby="nav-story-tab">
                                <h1 class="mb-3 heading-title-main" style="margin-bottom:2rem!important;">Download Instagram Reels, Videos, Stories & Highlights Free</h1>
                                <p class="text-black mb-4">Get fast, free instagram story download online easily.</p>
                                <div class="position-relative form-header">
                                    <form class="header-form-main" method="post">
                                        @csrf
                                        <input id="search" class="form-control" name="url"
                                            placeholder="Enter story url here...">
                                       <button type="button" id="paste" class="btn btn-secondary me-3">
                                    <svg width="22" height="22" viewBox="0 0 15 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10.5951 2.00008H11.9284C12.282 2.00008 12.6211 2.14056 12.8712 2.39061C13.1212 2.64065 13.2617 2.97979 13.2617 3.33341V14.0001C13.2617 14.3537 13.1212 14.6928 12.8712 14.9429C12.6211 15.1929 12.282 15.3334 11.9284 15.3334H2.59505C2.24143 15.3334 1.90229 15.1929 1.65224 14.9429C1.40219 14.6928 1.26172 14.3537 1.26172 14.0001V3.33341C1.26172 2.97979 1.40219 2.64065 1.65224 2.39061C1.90229 2.14056 2.24143 2.00008 2.59505 2.00008H3.92839M10.5951 2.00008C10.5951 2.73646 9.9981 3.33341 9.26172 3.33341H5.26172C4.52534 3.33341 3.92839 2.73646 3.92839 2.00008M10.5951 2.00008C10.5951 1.2637 9.9981 0.666748 9.26172 0.666748H5.26172C4.52534 0.666748 3.92839 1.2637 3.92839 2.00008M4.59505 7.33341H9.92839M4.59505 10.6667H9.92839"
                                            stroke="#fff" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round">
                                        </path>
                                    </svg>
                                </button>
                                <button class="btn btn-primary submit" type="submit">Download</button>
                                    </form>
                                </div>
                                <div class="row g-4 justify-content-between mt-4"> <div class="col-6 col-md-auto"> <div class="d-flex flex-column align-items-center text-center"> <div style="background: #e6f2ff; border-radius: 50%; padding: 12px; width: 50px; height: 50px; display: flex; align-items: center; justify-content: center;">
                <i class="fas fa-bolt text-primary" style="font-size: 20px;"></i>
            </div>
            <div class="mt-2 text-dark fw-medium" style=" font-weight: 100 !important;">Instant Downloads</div>
        </div>
    </div>

    <div class="col-6 col-md-auto"> <div class="d-flex flex-column align-items-center text-center"> <div style="background: #f6eaff; border-radius: 50%; padding: 12px; width: 50px; height: 50px; display: flex; align-items: center; justify-content: center;">
                <i class="fas fa-shield-alt text-purple" style="font-size: 20px;"></i>
            </div>
            <div class="mt-2 text-dark fw-medium"  style=" font-weight: 100 !important;">No Login Required</div>
        </div>
    </div>

    <div class="col-6 col-md-auto"> <div class="d-flex flex-column align-items-center text-center"> <div style="background: #ffeaf5; border-radius: 50%; padding: 12px; width: 50px; height: 50px; display: flex; align-items: center; justify-content: center;">
                <i class="fas fa-cloud-download-alt text-pink" style="font-size: 20px;"></i>
            </div>
            <div class="mt-2 text-dark fw-medium"  style=" font-weight: 100 !important;">Highest Quality</div>
        </div>
    </div>

    <div class="col-6 col-md-auto"> <div class="d-flex flex-column align-items-center text-center"> <div style="background: #eafaf1; border-radius: 50%; padding: 12px; width: 50px; height: 50px; display: flex; align-items: center; justify-content: center;">
                <i class="fas fa-user-secret text-success" style="font-size: 20px;"></i>
            </div>
            <div class="mt-2 text-dark fw-medium"  style=" font-weight: 100 !important;">Anonymous</div>
        </div>
    </div>

</div>
                            </div>
                            <div class="tab-pane fade" id="nav-igtv" role="tabpanel" aria-labelledby="nav-igtv-tab">
                                 <h1 class="mb-3 heading-title-main" style="margin-bottom:2rem!important;">Instagram IGTV Downloader</h1>
                                <p class="text-black mb-4">Effortlessly download and save your favorite IGTV videos for offline viewing.</p>
                                <div class="position-relative form-header">
                                    <form class="header-form-main" method="post">
                                        @csrf
                                        <input id="search" class="form-control" name="url"
                                            placeholder="Enter igtv url here...">
                                        <button type="button" id="paste" class="btn btn-secondary me-3">
                                    <svg width="22" height="22" viewBox="0 0 15 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10.5951 2.00008H11.9284C12.282 2.00008 12.6211 2.14056 12.8712 2.39061C13.1212 2.64065 13.2617 2.97979 13.2617 3.33341V14.0001C13.2617 14.3537 13.1212 14.6928 12.8712 14.9429C12.6211 15.1929 12.282 15.3334 11.9284 15.3334H2.59505C2.24143 15.3334 1.90229 15.1929 1.65224 14.9429C1.40219 14.6928 1.26172 14.3537 1.26172 14.0001V3.33341C1.26172 2.97979 1.40219 2.64065 1.65224 2.39061C1.90229 2.14056 2.24143 2.00008 2.59505 2.00008H3.92839M10.5951 2.00008C10.5951 2.73646 9.9981 3.33341 9.26172 3.33341H5.26172C4.52534 3.33341 3.92839 2.73646 3.92839 2.00008M10.5951 2.00008C10.5951 1.2637 9.9981 0.666748 9.26172 0.666748H5.26172C4.52534 0.666748 3.92839 1.2637 3.92839 2.00008M4.59505 7.33341H9.92839M4.59505 10.6667H9.92839"
                                            stroke="#fff" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round">
                                        </path>
                                    </svg>
                                </button>
                                <button class="btn btn-primary submit" type="submit">Download</button>
                                    </form>
                                </div>
                                <div class="row g-4 justify-content-between mt-4"> <div class="col-6 col-md-auto"> <div class="d-flex flex-column align-items-center text-center"> <div style="background: #e6f2ff; border-radius: 50%; padding: 12px; width: 50px; height: 50px; display: flex; align-items: center; justify-content: center;">
                <i class="fas fa-bolt text-primary" style="font-size: 20px;"></i>
            </div>
            <div class="mt-2 text-dark fw-medium" style=" font-weight: 100 !important;">Instant Downloads</div>
        </div>
    </div>

    <div class="col-6 col-md-auto"> <div class="d-flex flex-column align-items-center text-center"> <div style="background: #f6eaff; border-radius: 50%; padding: 12px; width: 50px; height: 50px; display: flex; align-items: center; justify-content: center;">
                <i class="fas fa-shield-alt text-purple" style="font-size: 20px;"></i>
            </div>
            <div class="mt-2 text-dark fw-medium"  style=" font-weight: 100 !important;">No Login Required</div>
        </div>
    </div>

    <div class="col-6 col-md-auto"> <div class="d-flex flex-column align-items-center text-center"> <div style="background: #ffeaf5; border-radius: 50%; padding: 12px; width: 50px; height: 50px; display: flex; align-items: center; justify-content: center;">
                <i class="fas fa-cloud-download-alt text-pink" style="font-size: 20px;"></i>
            </div>
            <div class="mt-2 text-dark fw-medium"  style=" font-weight: 100 !important;">Highest Quality</div>
        </div>
    </div>

    <div class="col-6 col-md-auto"> <div class="d-flex flex-column align-items-center text-center"> <div style="background: #eafaf1; border-radius: 50%; padding: 12px; width: 50px; height: 50px; display: flex; align-items: center; justify-content: center;">
                <i class="fas fa-user-secret text-success" style="font-size: 20px;"></i>
            </div>
            <div class="mt-2 text-dark fw-medium"  style=" font-weight: 100 !important;">Anonymous</div>
        </div>
    </div>

</div>
                            </div>
                            <div class="tab-pane fade" id="nav-highlight" role="tabpanel" aria-labelledby="nav-highlight-tab">
                                <h1 class="mb-3 heading-title-main" style="margin-bottom:2rem!important;">Download Instagram Reels, Videos, Stories & Highlights Free</h1>
                                <p class="text-black mb-4">Fast, free instagram highlights download online..</p>
                                <div class="position-relative form-header">
                                    <form class="header-form-main" method="post">
                                        @csrf
                                        <input id="search" class="form-control" name="url"
                                            placeholder="Enter highlight url here...">
                                        <button type="button" id="paste" class="btn btn-secondary me-3">
                                    <svg width="22" height="22" viewBox="0 0 15 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M10.5951 2.00008H11.9284C12.282 2.00008 12.6211 2.14056 12.8712 2.39061C13.1212 2.64065 13.2617 2.97979 13.2617 3.33341V14.0001C13.2617 14.3537 13.1212 14.6928 12.8712 14.9429C12.6211 15.1929 12.282 15.3334 11.9284 15.3334H2.59505C2.24143 15.3334 1.90229 15.1929 1.65224 14.9429C1.40219 14.6928 1.26172 14.3537 1.26172 14.0001V3.33341C1.26172 2.97979 1.40219 2.64065 1.65224 2.39061C1.90229 2.14056 2.24143 2.00008 2.59505 2.00008H3.92839M10.5951 2.00008C10.5951 2.73646 9.9981 3.33341 9.26172 3.33341H5.26172C4.52534 3.33341 3.92839 2.73646 3.92839 2.00008M10.5951 2.00008C10.5951 1.2637 9.9981 0.666748 9.26172 0.666748H5.26172C4.52534 0.666748 3.92839 1.2637 3.92839 2.00008M4.59505 7.33341H9.92839M4.59505 10.6667H9.92839"
                                            stroke="#fff" stroke-width="1.5" stroke-linecap="round"
                                            stroke-linejoin="round">
                                        </path>
                                    </svg>
                                </button>
                                <button class="btn btn-primary submit" type="submit">Download</button>
                                    </form>
                                </div>
                                <div class="row g-4 justify-content-between mt-4"> <div class="col-6 col-md-auto"> <div class="d-flex flex-column align-items-center text-center"> <div style="background: #e6f2ff; border-radius: 50%; padding: 12px; width: 50px; height: 50px; display: flex; align-items: center; justify-content: center;">
                <i class="fas fa-bolt text-primary" style="font-size: 20px;"></i>
            </div>
            <div class="mt-2 text-dark fw-medium" style=" font-weight: 100 !important;">Instant Downloads</div>
        </div>
    </div>

    <div class="col-6 col-md-auto"> <div class="d-flex flex-column align-items-center text-center"> <div style="background: #f6eaff; border-radius: 50%; padding: 12px; width: 50px; height: 50px; display: flex; align-items: center; justify-content: center;">
                <i class="fas fa-shield-alt text-purple" style="font-size: 20px;"></i>
            </div>
            <div class="mt-2 text-dark fw-medium"  style=" font-weight: 100 !important;">No Login Required</div>
        </div>
    </div>

    <div class="col-6 col-md-auto"> <div class="d-flex flex-column align-items-center text-center"> <div style="background: #ffeaf5; border-radius: 50%; padding: 12px; width: 50px; height: 50px; display: flex; align-items: center; justify-content: center;">
                <i class="fas fa-cloud-download-alt text-pink" style="font-size: 20px;"></i>
            </div>
            <div class="mt-2 text-dark fw-medium"  style=" font-weight: 100 !important;">Highest Quality</div>
        </div>
    </div>

    <div class="col-6 col-md-auto"> <div class="d-flex flex-column align-items-center text-center"> <div style="background: #eafaf1; border-radius: 50%; padding: 12px; width: 50px; height: 50px; display: flex; align-items: center; justify-content: center;">
                <i class="fas fa-user-secret text-success" style="font-size: 20px;"></i>
            </div>
            <div class="mt-2 text-dark fw-medium"  style=" font-weight: 100 !important;">Anonymous</div>
        </div>
    </div>

</div>
                            </div>
                        </div>
                        <span class="show-errors" style="display:none"></span>
                </div>
            </div>
        </div>
        <!-- /banner -->
    </section>
  <style>
.text-purple {
    color: #b85fd9;
}
.text-pink {
    color: #f159d3;
}
</style>  
      <section class="result-data">



    </section>
    
    
 <!-- Features Section -->
  <section id="fsv-features" class="fsv-features">
    <div class="container">
      <div class="fsv-section-header text-center">
        <h2>Why Choose Fast Video Save?</h2>
        <div class="fsv-section-divider"></div>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
          <div class="fsv-feature-box text-center">
            <div class="fsv-feature-icon">
              <i class="bi bi-lightning-charge"></i>
            </div>
            <h3>Instant Downloads</h3>
            <p>Quickly download any Instagram content within seconds—no waiting, buffering, or complicated steps.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
          <div class="fsv-feature-box text-center">
            <div class="fsv-feature-icon">
              <i class="bi bi-shield-lock"></i>
            </div>
            <h3>No Login Required</h3>
            <p>We respect your privacy. Download your favorite Instagram content anonymously and securely.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
          <div class="fsv-feature-box text-center">
            <div class="fsv-feature-icon">
              <i class="bi bi-star"></i>
            </div>
            <h3>Highest Quality</h3>
            <p>Maintain the original resolution and clarity with every download.</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="fsv-feature-box text-center">
            <div class="fsv-feature-icon">
              <i class="bi bi-infinity"></i>
            </div>
            <h3>Unlimited & Free</h3>
            <p>Download unlimited Instagram content anytime, anywhere, at absolutely no cost.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Services Section -->
  <section id="fsv-services" class="fsv-services">
    <div class="container">
      <div class="fsv-section-header text-center">
        <h2>Instagram Download Services</h2>
        <div class="fsv-section-divider"></div>
      </div>
      <div class="row g-4">
        <!-- Reel Downloader -->
        <div class="col-lg-6 fsv-service-item-wrap position-relative">
          <div class="fsv-service-item">
            <div class="fsv-service-icon">
              <i class="bi bi-film"></i>
            </div>
            <div class="fsv-service-content">
              <h3>Instagram Reel Downloader</h3>
              <p>Save Instagram Reels instantly. Copy the reel link, paste it into our tool, and download your favorite videos effortlessly.</p>
            </div>
          </div>
<a href="/instagram-reel-download" class="stretched-link" aria-label="Instagram Reel Downloader"></a>
</div>        
        <!-- Story Downloader -->
        <div class="col-lg-6 fsv-service-item-wrap position-relative">
          <div class="fsv-service-item">
            <div class="fsv-service-icon">
              <i class="bi bi-camera"></i>
            </div>
            <div class="fsv-service-content">
              <h3>Instagram Story Downloader</h3>
              <p>Never miss out! Quickly download Instagram Stories from any public profile before they disappear.</p>
            </div>
          </div>
          <a href="/instagram-story-download" class="stretched-link" aria-label="Instagram Story Downloader"></a>
        </div>
        
        <!-- Photo Downloader -->
        <div class="col-lg-6 fsv-service-item-wrap position-relative">
          <div class="fsv-service-item">
            <div class="fsv-service-icon">
              <i class="bi bi-image"></i>
            </div>
            <div class="fsv-service-content">
              <h3>Instagram Photo Downloader</h3>
              <p>Easily download high-quality Instagram photos with just a single click.</p>
            </div>
          </div>
                    <a href="/instagram-photo-download" class="stretched-link" aria-label="Instagram Photo Downloader"></a>
        </div>
        
        <!-- Highlights Downloader -->
        <div class="col-lg-6 fsv-service-item-wrap position-relative">
          <div class="fsv-service-item">
            <div class="fsv-service-icon">
              <i class="bi bi-bookmark-star"></i>
            </div>
            <div class="fsv-service-content">
              <h3>Instagram Highlights Downloader</h3>
              <p>Conveniently download and archive your favorite Instagram Highlights for offline viewing whenever you wish.</p>
            </div>
          </div>
                    <a href="/instagram-highlights-download" class="stretched-link" aria-label="Instagram Highlights Downloader"></a>
        </div>
      </div>
    </div>
  </section>

  <!-- How to Use Section -->
  <section id="fsv-how-to-use" class="fsv-how-to-use">
    <div class="container">
      <div class="fsv-section-header text-center">
        <h2>How to Use Fast Video Save</h2>
        <div class="fsv-section-divider"></div>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-10">
          <div class="fsv-steps">
            <div class="fsv-step-item">
              <div class="fsv-step-number">1</div>
              <div class="fsv-step-content">
                <h3>Copy Instagram URL</h3>
                <p>Find the Reel, Story, Photo, or Highlight you want to save and copy its link.</p>
              </div>
            </div>
            <div class="fsv-step-item">
              <div class="fsv-step-number">2</div>
              <div class="fsv-step-content">
                <h3>Paste into Fast Video Save</h3>
                <p>Paste the copied link into our user-friendly downloader.</p>
              </div>
            </div>
            <div class="fsv-step-item">
              <div class="fsv-step-number">3</div>
              <div class="fsv-step-content">
                <h3>Download Instantly</h3>
                <p>Click 'Download' and instantly save your content directly to your device.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA Section -->
  <section id="fsv-cta" class="fsv-cta">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <h2>Experience a Fast, Secure, and Reliable Downloading Service</h2>
          <p>Fast Video Save prioritizes your user experience by combining speed, ease-of-use, and privacy. Our tool is fully optimized for mobile and desktop, ensuring seamless performance. Bookmark us now and start saving Instagram content effortlessly today!</p>
          <p class="fsv-cta-highlight">Enhance your social media experience—choose Fast Video Save, your trusted partner for hassle-free Instagram downloads.</p>
          <div class="mt-4">
            <button class="btn btn-outline-light btn-lg ms-3" type="button" onclick="saveBookmark()">Bookmark This Page</button>
          </div>
        </div>
      </div>
    </div>
  </section>
    
    <script>
        function saveBookmark() {
  // Check if the browser is Internet Explorer (older method, less relevant now)
  if (window.sidebar && window.sidebar.addPanel) {
    // Deprecated method for Firefox < 23 and Netscape
    window.sidebar.addPanel(document.title, window.location.href, '');
  } else if ((navigator.userAgent.toLowerCase().indexOf('chrome') > -1) || (navigator.userAgent.toLowerCase().indexOf('mozilla') > -1) || (navigator.userAgent.toLowerCase().indexOf('firefox') > -1)) {
    // For Chrome, Firefox, and most modern browsers, instruct the user
    alert('To bookmark this page, press Ctrl+D (Windows/Linux) or Cmd+D (macOS).');
  } else {
    // Fallback for other browsers
    alert('To bookmark this page, please use your browser\'s bookmarking features.');
  }
}
    </script>
    



<section class="bg-white section ">
         <div class="container-lg">
               <div class="text-center my-5">
      <h2 style="color: #5C6BFF;">Important Note</h2>
      <p style="color: #555; font-size: 1rem;">
       It's important to note that downloading content from Instagram without the permission of the owner may violate the platform's terms of service. You should only download content that you have permission to use or that is available under a Creative Commons licence.
      </p>
    </div>
    
    <div class="text-center my-5">
      <h2 style="color: #5C6BFF;">DMCA Compliance</h2>
      <p style="color: #555; font-size: 1rem;">
       FastVideoSave.com complies with 17 U.S.C. * 512 and the Digital Millennium Copyright Act (DMCA). It is our policy to respond to any infringement notices and take appropriate actions. If your copyrighted material has been posted on the site and you want this material removed, please contact us
      </p>
    </div>
         </div>
    </section>
   <style>
       /* General Styles */
:root {
  --primary-color: #6366F1;
  --primary-dark: #4F46E5;
  --secondary-color: #8B5CF6;
  --accent-color: #EC4899;
  --accent-secondary: #F472B6;
  --tertiary-color: #3B82F6;
  --success-color: #10B981;
  --warning-color: #F59E0B;
  --error-color: #EF4444;
  --gray-100: #F3F4F6;
  --gray-200: #E5E7EB;
  --gray-300: #D1D5DB;
  --gray-400: #9CA3AF;
  --gray-800: #1F2937;
  --box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  --transition: all 0.3s ease;
}

h1, h2, h3, h4, h5, h6 {
  font-weight: 400;
  line-height: 1.2;
}

section {
  padding: 10px 0;
  position: relative;
}

.fsv-section-header {
  margin-bottom: 60px;
}

.fsv-section-header h2 {
  font-size: 2.5rem;
  margin-bottom: 1rem;
}

.fsv-section-divider {
  width: 80px;
  height: 4px;
  background: linear-gradient(to right, var(--primary-color), var(--secondary-color));
  margin: 0 auto;
  border-radius: 2px;
}

.btn {
  border-radius: 5px;
  padding: 10px 24px;
  font-weight: 600;
  transition: var(--transition);
}
button#nav-highlight-tab {
    width: 24%;
}
.btn-primary {
  background: linear-gradient(to right, var(--primary-color), var(--secondary-color));
  border: none;
}

.btn-primary:hover {
  background: linear-gradient(to right, var(--primary-dark), var(--primary-color));
  transform: translateY(-2px);
  box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
}

.btn-outline-light {
  border: 2px solid #fff;
  color: #fff;
}

.btn-outline-light:hover {
  background-color: rgba(255, 255, 255, 0.1);
  transform: translateY(-2px);
}


/* Hero Section */
.fsv-hero {
  background: radial-gradient(circle at top left, var(--primary-color), var(--secondary-color), var(--accent-color));
  color: #fff;
  min-height: 100vh;
  padding-top: 180px;
  padding-bottom: 80px;
  position: relative;
  overflow: hidden;
}

.fsv-hero::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: linear-gradient(135deg, rgba(236, 72, 153, 0.3), rgba(99, 102, 241, 0.3));
  mix-blend-mode: overlay;
}

.fsv-hero h1 {
  font-size: 2.8rem;
  margin-bottom: 1.5rem;
  text-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  background: linear-gradient(to right, #fff, rgba(255, 255, 255, 0.8));
  -webkit-background-clip: text;
  background-clip: text;
  color: transparent;
}

.fsv-hero .lead {
  font-size: 1.2rem;
  margin-bottom: 2rem;
  opacity: 0.9;
}

.fsv-download-box {
  background: rgba(255, 255, 255, 0.1);
  border-radius: 10px;
  padding: 25px;
  margin-top: 2rem;
  backdrop-filter: blur(5px);
  box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15),
              inset 0 1px 2px rgba(255, 255, 255, 0.2);
  border: 1px solid rgba(255, 255, 255, 0.1);
}

.fsv-download-box .form-control {
  height: 50px;
  font-size: 1rem;
  padding-left: 20px;
  border: none;
  background: rgba(255, 255, 255, 0.95);
}

.fsv-download-box .form-control:focus {
  box-shadow: 0 0 0 3px rgba(236, 72, 153, 0.3);
  border-color: var(--accent-color);
}

.fsv-download-box .btn {
  height: 50px;
  padding-left: 24px;
  padding-right: 24px;
  background: linear-gradient(135deg, var(--accent-color), var(--accent-secondary));
}

.fsv-download-box .btn:hover {
  background: linear-gradient(135deg, var(--accent-secondary), var(--accent-color));
  transform: translateY(-2px);
}

/* Features Section */
.fsv-features {
  background-color: #fff;
}

.fsv-feature-box {
  padding: 30px 20px;
  border-radius: 10px;
  transition: var(--transition);
  height: 100%;
  background-color: #fff;
  box-shadow: var(--box-shadow);
}

.fsv-feature-box:hover {
  transform: translateY(-10px);
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
}

.fsv-feature-icon {
  width: 80px;
  height: 80px;
  border-radius: 50%;
  background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 0 auto 20px;
  color: #fff;
  font-size: 2rem;
}

.fsv-feature-box h3 {
  font-size: 1.4rem;
  margin-bottom: 15px;
}

/* Services Section */
.fsv-services {
  background: linear-gradient(135deg, var(--gray-100), #fff);
  position: relative;
  overflow: hidden;
}

.fsv-service-item {
  display: flex;
  align-items: center;
  background: rgba(255, 255, 255, 0.9);
  border-radius: 10px;
  padding: 30px;
  transition: var(--transition);
  box-shadow: var(--box-shadow);
  height: 100%;
  border: 1px solid rgba(99, 102, 241, 0.1);
}

.fsv-service-item:hover {
  transform: translateY(-5px);
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
}

.fsv-service-icon {
  width: 60px;
  height: 60px;
  border-radius: 50%;
  background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
  display: flex;
  align-items: center;
  justify-content: center;
  margin-right: 20px;
  color: #fff;
  font-size: 1.5rem;
  position: relative;
}

.fsv-service-icon::after {
  content: '';
  position: absolute;
  top: -5px;
  left: -5px;
  right: -5px;
  bottom: -5px;
  border-radius: 50%;
  background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
  opacity: 0.2;
  z-index: -1;
}

.fsv-service-content {
  flex: 1;
}

.fsv-service-content h3 {
  font-size: 1.3rem;
  margin-bottom: 10px;
}

/* How to Use Section */
.fsv-how-to-use {
  background-color: #fff;
}
section#fsv-features{
    padding-top: 70px;
    padding-bottom: 35px;
}
section#fsv-services , section#fsv-how-to-use, section#fsv-cta{
    padding-top: 70px;
    padding-bottom: 35px;
}

.fsv-steps {
  position: relative;
  padding-left: 30px;
}

.fsv-steps::before {
    content: '';
    position: absolute;
    top: 0;
    left: 28px;
    width: 2px;
    height: 79%;
    background: linear-gradient(to bottom, var(--primary-color), var(--secondary-color));
}

.fsv-step-item {
  position: relative;
  margin-bottom: 40px;
  padding-left: 30px;
}

.fsv-step-item:last-child {
  margin-bottom: 0;
}

.fsv-step-number {
  position: absolute;
  left: -15px;
  top: 0;
  width: 30px;
  height: 30px;
  border-radius: 50%;
  background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
  color: #fff;
  display: flex;
  align-items: center;
  justify-content: center;
  font-weight: 600;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.fsv-step-content {
  background: var(--gray-100);
  padding: 20px;
  border-radius: 10px;
  box-shadow: var(--box-shadow);
}

.fsv-step-content h3 {
  font-size: 1.3rem;
  margin-bottom: 10px;
}

/* CTA Section */
.fsv-cta {
  background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
  color: #fff;
  position: relative;
  overflow: hidden;
}

.fsv-cta::before {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: linear-gradient(135deg, rgba(236, 72, 153, 0.3), rgba(99, 102, 241, 0.3));
  mix-blend-mode: overlay;
}
.fsv-cta p{
    color:white;
}
.fsv-cta h2 {
  font-size: 2.2rem;
  margin-bottom: 1.5rem;
  color: white;
}

.fsv-cta-highlight {
  font-size: 1.1rem;
  font-weight: 500;
  margin: 2rem 0;
  padding: 15px;
  background: rgba(255, 255, 255, 0.1);
  border-radius: 10px;
  border-left: 4px solid var(--accent-color);
}




/* Responsive Styles */
@media (max-width: 1199.98px) {
  .fsv-hero h1 {
    font-size: 2.4rem;
  }
  
  .fsv-section-header h2 {
    font-size: 2.2rem;
  }
}

@media (max-width: 991.98px) {
  section {
    padding: 20px 0;
  }
  
  .fsv-hero {
    padding-top: 150px;
    min-height: auto;
  }
  
  .fsv-hero h1 {
    font-size: 2.2rem;
  }
  
  .fsv-section-header h2 {
    font-size: 2rem;
  }
  
  .fsv-service-item {
    flex-direction: column;
    text-align: center;
  }
  
  .fsv-service-icon {
    margin: 0 auto 20px;
  }
}

@media (max-width: 767.98px) {
  .fsv-hero h1 {
    font-size: 2rem;
  }
  
  .fsv-hero .lead {
    font-size: 1.1rem;
  }
  
  .fsv-section-header {
    margin-bottom: 40px;
  }
  
  .fsv-section-header h2 {
    font-size: 1.8rem;
  }
  
  .fsv-steps::before {
    left: 10px;
  }
  
  .fsv-step-item {
    padding-left: 25px;
  }
  
  .fsv-step-number {
    left: -10px;
  }
  
  .fsv-cta h2 {
    font-size: 1.8rem;
  }
}

@media (max-width: 575.98px) {
  .fsv-hero {
    padding-top: 120px;
  }
  
  .fsv-hero h1 {
    font-size: 1.8rem;
  }
  
  .fsv-download-box {
    padding: 20px;
  }
  
  .fsv-feature-icon {
    width: 60px;
    height: 60px;
    font-size: 1.5rem;
  }
}

/* Animation Classes */
.fade-in {
  animation: fadeIn 0.5s ease-in-out;
}

@keyframes fadeIn {
  from {
    opacity: 0;
    transform: translateY(20px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}
   </style>
   
@endsection
