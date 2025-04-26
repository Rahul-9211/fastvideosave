@php
    $setting = \App\Models\Setting::find(1);
    $pages = \App\Models\Page::orderBy('title')->get();
@endphp
@extends('layout.app')
@section('title'){{'Page not found'}}@endsection
@section('content')
<section class="section bg-white">
    <div class="container">
      <div class="row">
        <div class="col-md-12 pb-4">
            <div class="not-found">
                <img src="{{ asset('images/404.png') }}" width="200" alt="404">
                <h1 class="pb-3">404</h1>
                <p>Page Not Found!</p>
                <a class="btn btn-primary" href="/">Go Back to Homepage</a>
            </div>
        </div>
      </div>
    </div>
</section>
@endsection