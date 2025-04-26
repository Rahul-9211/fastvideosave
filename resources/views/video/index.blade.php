@php
$setting = \App\Models\Setting::find(1);
@endphp
<div class="container-lg">
    <div class="video-wrapper-data">
        <div class="row">
        @foreach($data as $main)
            <div class="col-md-4 mb-4">
                <div class="position-relative h-100">
                    <div class="thumbnail h-100">
                        @php
                            if (strpos($main['thumbnail'], 'snapinsta.app') !== false) {
                                $prefix = 'https://snapinsta.app/photo.php?photo=';
                                $encodedUrl = str_replace($prefix, '', $main['thumbnail']);
                                $thumbnail = urldecode($encodedUrl);
                            } else {
                                $thumbnail = $main['thumbnail'];
                            }
                        @endphp
                        @if(strpos($main['url'], '.jpg') !== false)
                        <img src="{{ $thumbnail }}" class="w-100 rounded" alt="">
                        @else
                        <video src="{{ $main['url'] }}" controls class="w-100 h-100 rounded aspect-square object-cover"></video>
                        @endif
                    </div>
                    <span class="icon icon-downlabel @if(strpos($main['url'], '.jpg') !== false)@else{{'icon-downvid'}}@endif"></span>
                    <div class="down-content">
                        <div class="row">
                            @if(strpos($main['url'], '.jpg') !== false)
                            <div class="col-12">
                                <button class="btn btn-primary download-btns" data-url="{{ $thumbnail }}" data-name="{{ $setting->sitename }}" data-text="download photo" data-ext="jpg">Download Photo</button>
                            </div>
                            @else
                            <div class="col-12">
                                <button class="btn btn-primary download-btns" data-url="{{ $main['url'] }}" data-name="{{ $setting->sitename }}" data-text="download video" data-ext="mp4">Download Video</button>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        
        @endforeach
            <div class="col-12">
                <div class="button-reload text-center">
                    <button class="btn reload-more">Download more?</button>
                </div>
            </div>
        </div>
    </div>
</div>