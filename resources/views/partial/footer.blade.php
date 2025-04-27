<!-- footer -->
<footer class="section pb-4">
    <div class="container-lg">
        <div class=" align-items-center ">
            <div class="col text-md-center  text-center align-middle">
                <p class="mb-md-0 mb-4">Fastvideosave.com is not affiliated with Instagram or Meta. All Instagram™ logos and trademarks displayed on this website are the property of Instagram. <a
                        href="https://fastvideosave.com/" target="_blank">FastVideoSave</a></p>
            </div>
            <div class="col text-md-center  text-center align-middle">
               <p> <b class="mb-md-0 mb-4">We are not affiliated with Instagram or Meta.</b></p>
            </div>
          <ul class="d-flex justify-content-center pb-4 flex-wrap">
                            <li><a class="dropdown-item" href="{{ route('contact') }}">Contact Us</a></li>
                            <!--<li><a class="dropdown-item" href="{{ route('page', ['slug' => 'privacy-policy']) }}">Privacy</a></li>-->
                            <!--<li><a class="dropdown-item" href="{{ route('terms') }}">Terms & Condition</a></li>-->
                            <!--<li><a class="dropdown-item" href="{{ route('about-us') }}">About Us</a></li>-->
                             @foreach($pages as $page)
                            <li><a class="dropdown-item" href="{{ route('page', ['slug' => $page->slug]) }}">{{ $page->title }}</a></li>
                            @endforeach
                            <!--<li><a class="dropdown-item" href="{{ route('blogs') }}">Blogs</a></li>-->
          </ul>
            <div class="col text-md-center text-center">
                <ul class="list-inline">
                    <li class="list-inline-item"><a class="text-color d-inline-block p-2" href="#"><i
                                class="ti-facebook"></i></a></li>
                    <li class="list-inline-item"><a class="text-color d-inline-block p-2" href="#"><i
                                class="ti-twitter-alt"></i></a></li>
                    <li class="list-inline-item"><a class="text-color d-inline-block p-2" href="#"><i class="ti-github"></i></a>
                    </li>
                    <li class="list-inline-item"><a class="text-color d-inline-block p-2" href="#"><i
                                class="ti-linkedin"></i></a></li>
                </ul>
            </div>
             
        </div>
    </div>
    <div class="progress-bar-bottom" style="display:none">
        <div class="container position-relative d-flex justify-content-center align-items-center">
            <progress id="progressBar" class="progress" value="0" max="100"></progress>
            <span id="progressLabel" class="position-absolute">0%</span>
        </div>
    </div>
</footer>
<!-- /footer -->