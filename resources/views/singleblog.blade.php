@extends('layout.app')

@section('content')
<section class="pt-3">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
              <li class="breadcrumb-item"><a href="{{ route('blogs') }}">Blogs</a></li>
              <li class="breadcrumb-item active" aria-current="page">{{ $blog->title }}</li>
            </ol>
        </nav>
    </div>
</section>
<section class="section bg-white">
    <div class="container">
      <div class="row">
        <div class="col-md-9 pb-4">
            <h1 class="pb-3">{{ $blog->title }}</h1>
            <div class="image">
                <img src="{{ $blog->getFirstMediaUrl('blogimage') }}" class="w-100" alt="{{ $blog->title }}">
            </div>
            <div class="content pt-3">
                {!! $blog->description !!}
            </div>
        </div>
        <div class="col-md-3">
            <div class="sidebar">
                <h3>Latest Blogs</h3>
                @foreach($latestblogs as $latest)
                <div class="blog">
                    <h5 class="title"><a href="{{ route('singleblog', ['slug' => $latest->slug]) }}">{{ $latest->title }}</a></h5>
                </div>
                @endforeach
            </div>
        </div>
      </div>
    </div>
</section>
@endsection