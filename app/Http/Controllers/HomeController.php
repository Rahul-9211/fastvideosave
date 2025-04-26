<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Blog;
use App\Models\Page;
use App\Models\Enquiry;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index() {
        $data['faqs'] = Faq::orderBy('order')->get();
        $data['setting'] = Setting::find(1);
        $data['pages'] = Page::orderBy('title')->get();
        return view('index', $data);
    }

    public function faqs(){
        $data['faqs'] = Faq::orderBy('order')->get();
        $data['setting'] = Setting::find(1);
        $data['pages'] = Page::orderBy('title')->get();
        return view('faqs', $data);
    }

    public function photo()
    {
        $data['faqs'] = Faq::orderBy('order')->get();
        $data['setting'] = Setting::find(1);
        $data['pages'] = Page::orderBy('title')->get();
        return view('photo', $data);
    }

    public function reel()
    {
        $data['faqs'] = Faq::orderBy('order')->get();
        $data['setting'] = Setting::find(1);
        $data['pages'] = Page::orderBy('title')->get();
        return view('reel', $data);
    }

    public function story()
    {
        $data['faqs'] = Faq::orderBy('order')->get();
        $data['setting'] = Setting::find(1);
        $data['pages'] = Page::orderBy('title')->get();
        return view('story', $data);
    }

    public function igtv()
    {
        $data['faqs'] = Faq::orderBy('order')->get();
        $data['setting'] = Setting::find(1);
        $data['pages'] = Page::orderBy('title')->get();
        return view('igtv', $data);
    }

    public function highlight()
    {
        $data['faqs'] = Faq::orderBy('order')->get();
        $data['setting'] = Setting::find(1);
        $data['pages'] = Page::orderBy('title')->get();
        return view('highlight', $data);
    }
 

    public function contact()
    {
        $data['faqs'] = Faq::orderBy('order')->get();
        $data['setting'] = Setting::find(1);
        $data['pages'] = Page::orderBy('title')->get();
        return view('contact', $data);
    }

    public function contactpost(Request $request)
    {
        $data['setting'] = Setting::find(1);

        $input = $request->all();

        $enquiry = Enquiry::create($input);
        
        if($enquiry){
            return redirect()->back()->with('success', 'Your message has been received.');
        }
    }

    public function blogs()
    {
        $data['blogs'] = Blog::orderBy('created_at', 'desc')->get();
        $data['setting'] = Setting::find(1);
        $data['pages'] = Page::orderBy('title')->get();
        return view('blogs', $data);
    }

    public function singleblog($slug)
    {
        $data['blog'] = Blog::whereSlug($slug)->firstorfail();
        $data['setting'] = Setting::find(1);
        $data['pages'] = Page::orderBy('title')->get();
        $data['latestblogs'] = Blog::orderBy('created_at', 'asc')->take(5)->get();
        return view('singleblog', $data);
    }

    public function page($slug)
    {
        $data['page'] = Page::whereSlug($slug)->firstorfail();
        $data['setting'] = Setting::find(1);
        $data['pages'] = Page::orderBy('title')->get();
        return view('page', $data);
    }

    public function login()
    {
        return redirect('/admin/login');
    }
    public function highlightnew()
    {
        $data['faqs'] = Faq::orderBy('order')->get();
        $data['setting'] = Setting::find(1);
        $data['pages'] = Page::orderBy('title')->get();
        return view('highlight-new', $data); // This will use resources/views/highlight-v2.blade.php
    }
    
    public function tool()
    {
        return view('tool', $data);
    }

    
}
