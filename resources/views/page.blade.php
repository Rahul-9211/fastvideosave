@extends('layout.app')
@section('title'){{ $page->meta_title ?? $page->title }}@endsection
@section('description'){{ $page->meta_description ?? Str::limit(strip_tags($page->description), 60, '') }}@endsection
@section('keywords'){{ $page->meta_keywords }}@endsection
@section('image'){{ $page->getFirstMediaUrl('pageimage') }}@endsection
@section('content')
<section class="pt-3">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">{{ $page->title }}</li>
            </ol>
        </nav>
    </div>
</section>
<section class="section bg-white">
    <div class="container">
      <div class="row">
        <div class="col-md-12 pb-4">
            <h1 class="pb-3">{{ $page->title }}</h1>
            <div class="content pt-3">
                {!! $page->description !!}
            </div>
        </div>
      </div>
    </div>
</section>
@endsection