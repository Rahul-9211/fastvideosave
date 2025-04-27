@extends('layout.app')

@section('content')
<section class="pt-3">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Blogs</li>
            </ol>
        </nav>
    </div>
</section>
<section class="section bg-white">
    <div class="container">
      <div class="row">
        <div class="col-md-12 pb-4">
            <h1>Our Blogs</h1>
        </div>
        @foreach($blogs as $blog)
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('singleblog', ['slug' => $blog->slug]) }}"><img src="{{ $blog->getFirstMediaUrl('blogimage') }}" class="w-100" alt="{{ $blog->title }}"></a>
                </div>
                <div class="card-body">
                    <h4><a href="{{ route('singleblog', ['slug' => $blog->slug]) }}">{{ $blog->title }}</a></h4>
                    <a href="{{ route('singleblog', ['slug' => $blog->slug]) }}">Read More</a>
                </div>
            </div>
        </div>
        @endforeach
      </div>
    </div>
</section>
@endsection