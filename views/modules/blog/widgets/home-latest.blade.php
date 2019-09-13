@if($posts->count()>0)
<div class="blog-home1 bg-light">
    <div class="container">
        <!-- Row  -->
        <div class="row justify-content-center">
            <!-- Column -->
            <div class="col-md-8 text-center">
                {{--<h2 class="title p-b-0 m-b-0 text-themecolor">{{ trans('themes::news.title') }}</h2>--}}
            </div>
        </div>
        <div class="row m-t-20">
            <div class="col-md-12">
                <div class="owl-carousel">
                    @foreach($posts as $post)
                        <div class="card card-shadow">
                            <a href="{{ $post->url }}"><img class="card-img-top" src="{{ $post->present()->firstImage(350,200,'fit',70) }}" alt="{{ $post->title }}"></a>
                            <div class="p-30">
                                <div class="d-flex no-block font-14">
                                    <a href="{{ $post->category->url }}">{{ $post->category->title }}</a>
                                </div>
                                <h5 class="font-medium"><a href="{{ $post->url }}" class="link">{{ $post->title }}</a></h5>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endif


@push('js-stack')
    {!! Theme::script('vendor/owl.carousel/assets/owl.carousel.min.js') !!}
@endpush

@push('js-inline')
    <script>
        $('.owl-carousel').owlCarousel({
            loop:true,
            margin:30,
            nav: false,
            dots: false,
            responsiveClass:true,
            autoplay:true,
            autoplayTimeout:5000,
            autoplayHoverPause:false,
            responsive:{
                0:{
                    items:1,
                    nav:false
                },
                600:{
                    items:2,
                    nav:false
                },
                1000:{
                    items:3,
                    nav:false,
                    loop:false
                }
            }
        });
    </script>
@endpush
