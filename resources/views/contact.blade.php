@extends('layout.app')
@section('title'){{'Contact'}}@endsection
@section('description'){{'Contact'}}@endsection
@section('keywords'){{'Contact'}}@endsection
@section('image'){{ 'your image link here..' }}@endsection
@section('content')
<link rel="canonical" href="https://fastvideosave.com/contact">
<section class="pt-3">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Contact</li>
            </ol>
        </nav>
    </div>
</section>
<section class="section bg-white">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h2 class="section-title text-primary">Got Any Questions</h2>
          <p>Submit the form and confirm your email address at <a href="https://formspree.io/">Formspree</a>.</p>
            @if(Session::has('success'))
                <div class="alert alert-success py-4" role="alert">
                    {{ Session::get('success') }}
                </div>
            @endif
          <form action="{{ route('contactpost') }}" method="post">
            @csrf
            <input type="text" id="name" name="name" placeholder="Name" class="form-control mb-4 shadow rounded-0">
            <input type="email" id="mail" name="mail" placeholder="Email" class="form-control mb-4 shadow rounded-0">
            <input type="text" id="subject" name="subject" placeholder="subject"
              class="form-control mb-4 shadow rounded-0">
            <textarea name="message" id="message" placeholder="Message"
              class="form-control mb-4 shadow rounded-0"></textarea>
            <button type="submit" value="send" class="btn btn-primary">Send</button>
          </form>
        </div>
      </div>
    </div>
  </section>
@endsection