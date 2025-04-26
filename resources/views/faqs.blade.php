@extends('layout.app')
@section('title'){{'FAQ'}}@endsection
@section('description'){{'FAQ'}}@endsection
@section('keywords'){{'FAQ'}}@endsection
@section('image'){{ 'your image link here..' }}@endsection
@section('content')
<section class="pt-3">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Faq</li>
            </ol>
        </nav>
    </div>
</section>
<section class="section bg-white">
    <div class="container-lg">
        <div class="row">
            <div class="col-12">
                <h2 class="section-title text-primary text-center">Frequently Asked Questions</h2>
                <!-- accordion -->
                <div id="accordion">

                    @foreach($faqs as $key => $faq)
                    <div class="card mb-4 rounded-0 shadow border-0">
                        <div class="card-header rounded-0 bg-white border p-0">
                            <a class="card-link h4 d-flex tex-dark mb-0 py-3 px-4 justify-content-between collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-accordion-{{$key}}" aria-expanded="false" aria-controls="faq-accordion-{{$key}}">
                                <span>{{ $faq->title }}</span> <i class="ti-plus text-primary text-right"></i>
                            </a>
                        </div>
                        <div id="faq-accordion-{{$key}}" class="collapse" aria-labelledby="headingOne" data-bs-parent="#accordion">
                            <div class="card-body font-secondary text-color">
                                {!! $faq->content !!}
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</section>
@endsection