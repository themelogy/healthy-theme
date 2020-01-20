@if($media = $page->videos->first())
    <div class="card card-shadow position-relative" data-aos="flip-up" data-aos-duration="1200">
        <img class="card-img-top video-img" src="{!! $media->present()->embedImage(300,200,'fit',80) !!}" alt="wrappixel kit">
        <div class="embed-responsive hide embed-responsive-16by9" data-animation="animated fadeIn">
            <iframe width="100%" height="315" src="{!! $media->video_link !!}" frameborder="0" allowfullscreen></iframe>
        </div>
        <button type="button" class="btn btn-themecolor btn-circle btn-lg video-btn align-middle position-absolute" style="left:50%; top:50%; margin-left: -35px; margin-top:-35px;"><i class="fa fa-play"></i> </button>
    </div>
@endif
@push('js-inline')
    <script>
        $(document).ready(function(){
            $('.video-btn').on('click', function() {
                $(this).addClass('hide');
                $('.video-img').addClass('hide');
                $('.embed-responsive').show().removeClass('hide');
                $("video").each(function () { this.play() });
            });
        });
    </script>
@endpush
