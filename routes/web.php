<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SearchController;
use Illuminate\Http\Request;

// Language routes (no locale prefix)
Route::get('lang/{locale}', function ($locale, Request $request) {
    if (in_array($locale, ['en', 'de', 'es'])) {
        session(['locale' => $locale]);
    }
    
    // Get the current URL
    $url = url()->previous();
    $parsedUrl = parse_url($url);
    $path = $parsedUrl['path'] ?? '/';
    
    // Get the application base path
    $basePath = parse_url(url('/'))['path'] ?? '';
    
    // Remove base path if it exists in the current path
    if (!empty($basePath) && strpos($path, $basePath) === 0) {
        $path = substr($path, strlen($basePath));
    }
    
    // Strip out any existing locale prefixes from the path to avoid stacking
    $cleanPath = preg_replace('~^/?(?:en|de|es)(/.*)?$~', '$1', $path);
    if (empty($cleanPath)) {
        $cleanPath = '/';
    }
    
    // Redirect to the clean path with the new locale
    return redirect(url($locale . $cleanPath));
});

// Testing routes (no locale prefix)
Route::get('/test-locale', function (Request $request) {
    $clientIp = $request->ip();
    $country = null;
    
    // German IP ranges
    $germanIpRanges = [
        '46.28.', '46.29.', '78.94.', '91.0.', '178.203.',
        '91.', '134.', '139.', '149.', '152.', '188.', '217.', '85.'
    ];
    
    // Spanish IP ranges
    $spanishIpRanges = [
        // Spain
        '2.136.', '2.137.', '2.138.', '2.139.', '2.140.', '2.141.', '2.142.', '2.143.',
        '5.224.', '5.225.', '5.226.', '5.227.',
        '37.10.', '37.11.', '37.12.', '37.13.',
        '80.24.', '80.25.', '80.26.', '80.27.',
        '81.32.', '81.33.', '81.34.', '81.35.',
        '84.76.', '84.77.', '84.78.', '84.79.',
        '88.0.', '88.1.', '88.2.', '88.3.',
        // Latin America
        '138.94.', '138.99.', // Mexico
        '190.12.', '190.13.', // Argentina
        '181.48.', '181.49.', // Colombia
        '190.234.', '190.235.' // Peru
    ];
    
    // Check German IP ranges
    foreach ($germanIpRanges as $range) {
        if (strpos($clientIp, $range) === 0) {
            $country = 'Germany (DE)';
            break;
        }
    }
    
    // Check Spanish IP ranges
    if (!$country) {
        foreach ($spanishIpRanges as $range) {
            if (strpos($clientIp, $range) === 0) {
                $country = 'Spain (ES)';
                break;
            }
        }
    }
    
    // Headers that might contain the real client IP
    $headers = [
        'HTTP_CLIENT_IP',
        'HTTP_X_FORWARDED_FOR',
        'HTTP_X_FORWARDED', 
        'HTTP_FORWARDED_FOR',
        'HTTP_FORWARDED',
        'REMOTE_ADDR'
    ];
    
    $alternativeIps = [];
    foreach ($headers as $header) {
        if (isset($_SERVER[$header])) {
            $alternativeIps[$header] = $_SERVER[$header];
        }
    }
    
    // Add message display for redirects
    $message = session('message') ?? null;
    
    return response()->json([
        'application_locale' => app()->getLocale(),
        'client_ip' => $clientIp,
        'detected_country' => $country,
        'browser_language' => substr($request->server('HTTP_ACCEPT_LANGUAGE') ?? 'not-set', 0, 5),
        'session_locale' => session('locale') ?? 'not-set',
        'alternative_ips' => $alternativeIps,
        'test_tools' => [
            'force_german' => url('/test-locale?vpn=de'),
            'force_spanish' => url('/test-locale?vpn=es'),
            'simulate_country' => [
                'germany' => url('/test-locale?test_country=DE'),
                'spain' => url('/test-locale?test_country=ES'),
                'mexico' => url('/test-locale?test_country=MX'),
                'argentina' => url('/test-locale?test_country=AR')
            ],
            'language_urls' => [
                'english' => url('/lang/en'),
                'german' => url('/lang/de'),
                'spanish' => url('/lang/es')
            ],
            'clear_session' => url('/clear-locale-session'),
        ],
        'message' => $message,
        'note' => 'Check Laravel log for detailed logs about locale detection',
    ]);
});

// Helper route to clear locale session for testing (no locale prefix)
Route::get('/clear-locale-session', function () {
    session()->forget('locale');
    return redirect('/test-locale')->with('message', 'Locale session cleared');
});

// Localized routes group
Route::prefix('{locale?}')
    ->where(['locale' => 'en|de|es'])
    ->group(function () {
        // Main routes
        Route::get('/', [HomeController::class, 'index'])->name('home');
        Route::get('faqs', [HomeController::class, 'faqs'])->name('faqs');
        Route::get('blogs', [HomeController::class, 'blogs'])->name('blogs');
        
        // Photo routes
        Route::redirect('instagram-photo-downloader', 'instagram-photo-download', 301);
        Route::get('instagram-photo-download', [HomeController::class, 'photo'])->name('photo');
        
        // Reel routes
        Route::redirect('instagram-reel-downloader', 'instagram-reel-download', 301);
        Route::get('instagram-reel-download', [HomeController::class, 'reel'])->name('reel');
        
        // Story routes
        Route::redirect('instagram-story-downloader', 'instagram-story-download', 301);
        Route::get('instagram-story-download', [HomeController::class, 'story'])->name('story');
        
        // Other Instagram routes
        Route::get('instagram-igtv-downloader', [HomeController::class, 'igtv'])->name('igtv');
        Route::redirect('instagram-highlight-downloader', 'instagram-highlights-download', 301);
        Route::get('instagram-highlights-download', [HomeController::class, 'highlight'])->name('highlight');
        
        // Other routes
        Route::post('search', [SearchController::class, 'search'])->name('search');
        Route::get('contact', [HomeController::class, 'contact'])->name('contact');
        Route::post('contact', [HomeController::class, 'contactpost'])->name('contactpost');
        Route::get('page/{slug}', [HomeController::class, 'page'])->name('page');
        Route::get('login', [HomeController::class, 'login'])->name('login');
        Route::get('about-us', [HomeController::class, 'about-us'])->name('about-us');
        Route::get('terms', [HomeController::class, 'terms'])->name('terms');
        Route::get('my-new-tool', [HomeController::class, 'tool'])->name('tool');
        
        // This needs to be the last route as it's a catch-all
        Route::get('{slug}', [HomeController::class, 'singleblog'])->name('singleblog');
    });
