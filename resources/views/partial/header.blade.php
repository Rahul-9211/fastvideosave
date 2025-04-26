<!-- header -->
<header class="banner bg-white">
    <nav class="navbar navbar-expand-md navbar-light">
        <div class="container-lg">
            <a class="navbar-brand px-2" href="{{ route('home') }}">
                <img src={{ asset('images/1000051391.png') }} width="200" alt="" class="logo">
            </a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navigation"
                aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse text-center" id="navigation">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link text-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            Downloaders
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('photo') }}">Instagram Photo Downloader</a></li>
                            <li><a class="dropdown-item" href="{{ route('reel') }}">Instagram Reel Downloader</a></li>
                            <li><a class="dropdown-item" href="{{ route('story') }}">Instagram Story Downloader</a></li>
                            <!--<li><a class="dropdown-item" href="{{ route('igtv') }}">Instagram IGTV Downloader</a></li>-->
                            <li><a class="dropdown-item" href="{{ route('highlight') }}">Instagram Highlight Downloader</a></li>
                        </ul>
                    </li>
                    <!--<li class="nav-item">-->
                    <!--    <a class="nav-link text-dark" href="{{ route('faqs') }}">Faq</a>-->
                    <!--</li>-->
                    <!--<li class="nav-item">-->
                    <!--    <a class="nav-link text-dark" href="{{ route('blogs') }}">Blogs</a>-->
                    <!--</li>-->
                    <!--<li class="nav-item dropdown">-->
                    <!--    <a class="nav-link text-dark dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">-->
                    <!--        Pages-->
                    <!--    </a>-->
                    <!--    <ul class="dropdown-menu">-->
                    <!--        @foreach($pages as $page)-->
                    <!--        <li><a class="dropdown-item" href="{{ route('page', $page->slug) }}">{{ $page->title }}</a></li>-->
                    <!--        @endforeach-->
                    <!--    </ul>-->
                    <!--</li>-->
                    <!--<li class="nav-item">-->
                    <!--    <a class="nav-link text-dark" href="{{ route('contact') }}">contact</a>-->
                    <!--</li>-->
                </ul>
            </div>
        </div>
    </nav>
</header>
<!-- /header -->
