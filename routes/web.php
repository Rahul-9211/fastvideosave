<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SearchController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('faqs', [HomeController::class, 'faqs'])->name('faqs');
Route::get('blogs', [HomeController::class, 'blogs'])->name('blogs');
// Redirect old photo URL to new one (permanent 301)
Route::redirect('instagram-photo-downloader', 'instagram-photo-download', 301);

// Route for the new correct photo URL
Route::get('instagram-photo-download', [HomeController::class, 'photo'])->name('photo');
// Redirect old reel URL to new one (permanent 301)
Route::redirect('instagram-reel-downloader', 'instagram-reel-download', 301);

// Route for the new correct reel URL
Route::get('instagram-reel-download', [HomeController::class, 'reel'])->name('reel');
// Redirect old story URL to new one (permanent 301)
Route::redirect('instagram-story-downloader', 'instagram-story-download', 301);

// Route for the new correct story URL
Route::get('instagram-story-download', [HomeController::class, 'story'])->name('story');
Route::get('instagram-igtv-downloader', [HomeController::class, 'igtv'])->name('igtv');
// Redirect old URL to new one (permanent 301)
Route::redirect('instagram-highlight-downloader', 'instagram-highlights-download', 301);

// Route for the new correct URL
Route::get('instagram-highlights-download', [HomeController::class, 'highlight'])->name('highlight');
Route::post('search', [SearchController::class, 'search'])->name('search');
Route::get('contact', [HomeController::class, 'contact'])->name('contact');
Route::post('contact', [HomeController::class, 'contactpost'])->name('contactpost');
Route::get('page/{slug}', [HomeController::class, 'page'])->name('page');
Route::get('login', [HomeController::class, 'login'])->name('login');
Route::get('{slug}', [HomeController::class, 'singleblog'])->name('singleblog');
Route::get('about-us', [HomeController::class, 'about-us'])->name('about-us');
Route::get('terms', [HomeController::class, 'terms'])->name('terms');
Route::get('my-new-tool', [HomeController::class, 'tool'])->name('tool');

// Redirect typo URL
// Route::get('instagram-highlight-downloader', function () {
//     return Redirect::to('instagram-highlights-download');
// });

// // Actual correct route
// Route::get('instagram-highlights-download', [HomeController::class, 'highlightnew'])->name('highlightnew');
