<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\URL;

class SetLocale
{
    /**
     * The available language codes.
     *
     * @var array
     */
    protected $languages = ['en', 'de', 'es'];
    protected $defaultLanguage = 'en';

    /**
     * Country to language mapping (simplified).
     */
    protected $countryLanguageMap = [
        // European countries
        'DE' => 'de', // Germany
        'AT' => 'de', // Austria
        'CH' => 'de', // Switzerland (German-speaking regions)
        'ES' => 'es', // Spain
        // Latin American countries
        'MX' => 'es', // Mexico
        'AR' => 'es', // Argentina
        'CO' => 'es', // Colombia
        'PE' => 'es', // Peru
        'CL' => 'es', // Chile
        'VE' => 'es', // Venezuela
        'EC' => 'es', // Ecuador
        'GT' => 'es', // Guatemala
        'CU' => 'es', // Cuba
        'BO' => 'es', // Bolivia
        'DO' => 'es', // Dominican Republic
        'HN' => 'es', // Honduras
        'PY' => 'es', // Paraguay
        'SV' => 'es', // El Salvador
        'NI' => 'es', // Nicaragua
        'CR' => 'es', // Costa Rica
        'PA' => 'es', // Panama
        'UY' => 'es', // Uruguay
    ];

    /**
     * German IP ranges (simplified examples)
     */
    protected $germanIpRanges = [
        '46.28.', '46.29.', '78.94.', '91.0.', '178.203.',
        '91.', '134.', '139.', '149.', '152.', '188.', '217.', '85.'
    ];

    /**
     * Spanish IP ranges (simplified examples)
     */
    protected $spanishIpRanges = [
        // Spain IP ranges
        '2.136.', '2.137.', '2.138.', '2.139.', '2.140.', '2.141.', '2.142.', '2.143.',
        '5.224.', '5.225.', '5.226.', '5.227.',
        '37.10.', '37.11.', '37.12.', '37.13.',
        '80.24.', '80.25.', '80.26.', '80.27.',
        '81.32.', '81.33.', '81.34.', '81.35.',
        '84.76.', '84.77.', '84.78.', '84.79.',
        '88.0.', '88.1.', '88.2.', '88.3.',
        // Latin American ranges
        '138.94.', '138.99.', // Mexico
        '190.12.', '190.13.', // Argentina
        '181.48.', '181.49.', // Colombia
        '190.234.', '190.235.' // Peru
    ];

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // Check if we have a locale in the URL
        $urlLocale = $request->segment(1);
        
        // If the URL has a valid locale code, use it and set the URL locale
        if (in_array($urlLocale, $this->languages)) {
            $locale = $urlLocale;
            session(['locale' => $locale]);
            Log::info("Setting locale from URL: " . $locale);
            app()->setLocale($locale);
            
            // Generate URLs with the locale prefix
            URL::defaults(['locale' => $locale]);
            
            return $next($request);
        }
        
        $clientIp = $request->ip();
        Log::info("Client IP: " . $clientIp);
        
        // Test parameters - only for development environments
        if ($request->has('vpn')) {
            $vpnCountry = $request->get('vpn');
            if ($vpnCountry === 'de') {
                session(['locale' => 'de']);
                Log::info("Setting locale to German via test parameter");
            } elseif ($vpnCountry === 'es') {
                session(['locale' => 'es']);
                Log::info("Setting locale to Spanish via test parameter");
            }
        }
        
        if ($request->has('test_country')) {
            $testCountry = $request->get('test_country');
            if (isset($this->countryLanguageMap[$testCountry])) {
                $locale = $this->countryLanguageMap[$testCountry];
                session(['locale' => $locale]);
                Log::info("Setting locale to {$locale} via test country parameter");
            }
        }
        
        // Priority 1: Check if URL has a locale parameter
        if ($request->route('locale') && in_array($request->route('locale'), $this->languages)) {
            $locale = $request->route('locale');
            session(['locale' => $locale]);
            Log::info("Setting locale via URL parameter: " . $locale);
        } 
        // Priority 2: Check session
        elseif (session('locale') && in_array(session('locale'), $this->languages)) {
            $locale = session('locale');
            Log::info("Using session locale: " . $locale);
        } 
        // Priority 3: Detect from IP
        else {
            $country = $this->getCountryFromIP($clientIp);
            Log::info("Detected country from IP: " . ($country ?: 'none'));
            
            if ($country && isset($this->countryLanguageMap[$country])) {
                $locale = $this->countryLanguageMap[$country];
                session(['locale' => $locale]);
                Log::info("Setting locale based on IP country: " . $locale);
            } 
            // Priority 4: Browser language
            else {
                $browserLang = substr($request->server('HTTP_ACCEPT_LANGUAGE') ?? '', 0, 2);
                Log::info("Browser language: " . $browserLang);
                
                if (in_array($browserLang, $this->languages)) {
                    $locale = $browserLang;
                    session(['locale' => $locale]);
                    Log::info("Setting locale based on browser language: " . $locale);
                } else {
                    $locale = $this->defaultLanguage;
                    Log::info("Using default locale: " . $locale);
                }
            }
        }
        
        // Set application locale
        $locale = $locale ?? $this->defaultLanguage;
        app()->setLocale($locale);
        
        // If we don't have a locale in the URL, redirect to the URL with locale
        if (!in_array($request->segment(1), $this->languages) && 
            !$request->is('lang/*') && 
            !$request->is('test-locale') && 
            !$request->is('clear-locale-session') &&
            !$request->ajax()) {
            $path = $request->path();
            if ($path == '/') $path = '';
            return redirect($locale . '/' . $path);
        }
        
        // Generate URLs with the locale prefix
        URL::defaults(['locale' => $locale]);
        
        return $next($request);
    }

    /**
     * Get country code from IP address
     * Note: This is a simplified version for testing. Use a proper geolocation service in production.
     */
    private function getCountryFromIP($ip)
    {
        // German IP detection
        foreach ($this->germanIpRanges as $range) {
            if (strpos($ip, $range) === 0) {
                Log::info("IP {$ip} matched German range {$range}");
                return 'DE';
            }
        }
        
        // Spanish IP detection
        foreach ($this->spanishIpRanges as $range) {
            if (strpos($ip, $range) === 0) {
                Log::info("IP {$ip} matched Spanish range {$range}");
                return 'ES';
            }
        }
        
        Log::info("IP {$ip} did not match any known country ranges");
        return null;
    }
} 