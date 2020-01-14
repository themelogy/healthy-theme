<div class="testimonial3">
    <div class="container-fluid">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7 text-center">
                    <h2 class="title">{{ @trans('themes::video.meta.title') }}</h2>
                    <h6 class="subtitle">{{ @trans('themes::video.meta.desc') }}</h6>
                </div>
            </div>
        </div>
        <!-- Row  -->
        <div class="owl-carousel owl-theme testi3 m-t-40">
            @foreach($medias as $media)
            <!-- item -->
            @php
                $fade = '';
                if($loop->first) $fade = 'fade-left';
                if($loop->iteration == '1') $fade = 'fade-up';
                if($loop->iteration == '2') $fade = 'fade-right';
            @endphp
            <div class="item" data-aos="{{ $fade }}">
                <a href="{{ $media->url }}" class="img-ho">
                <div class="card card-shadow" data-aos="flip-left" data-aos-duration="1200">
                    <img class="card-img-top" src="{{ $media->present()->firstImage(525,325,'fit',80) }}" alt="{{ $media->title }}" />
                    <div class="card-body">
                        <h5 class="font-medium m-b-0">{{ $media->title }}</h5>
                        <p class="m-b-0 font-14">{{ $media->description }}</p>
                    </div>
                </div>
                </a>
            </div>
            <!-- item -->
            @endforeach
        </div>
    </div>
</div>
