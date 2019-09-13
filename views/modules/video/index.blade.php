@extends('layouts.master')

@section('content')
    <div id="main-wrapper">
        <div class="page-wrapper">
            @component('partials.components.title', ['breadcrumb' => 'media.index'])
                <h1 class="title">{{ trans('themes::media.meta.title') }}</h1>
            @endcomponent
            <div class="content-wrapper">
                <div class="container">
                    <div class="row">
                    @foreach($medias as $media)
                        <div class="col-lg-4 col-md-6 col-xs-12 wow bounceInLeft" data-wow-delay=".{{ $loop->iteration }}s">
                            <div class="card d-flex align-items-stretch">
                                <div class="card-img-top link_on-youtube" style="margin-bottom: 0;">
                                    <a class="inline" href="#data{{ $media->id }}"><span class="btn"><i class="icon-Play-Music"></i></span></a>
                                    <div style="display:none; padding: 0;">
                                        <div class="embed-responsive" id="data{{ $media->id }}" style="padding: 0;">{!! $media->embed['code'] !!}</div>
                                    </div>
                                    <img class="img-responsive" src="{{ $media->present()->embedImage(600,325,'fit',80) }}" alt="{{ $media->title }}"/>
                                </div>
                                <div class="card-body p-3">
                                    <h3 class="video-title"><a href="{{ $media->url }}">{{ $media->title }}</a></h3>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    </div>
                    {!! $medias->links() !!}
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js-inline')
    <link rel="stylesheet" href="{!! Module::asset('video:js/fancybox/jquery.fancybox.min.css') !!}">
    <script src="{!! Module::asset('video:js/fancybox/jquery.fancybox.min.js') !!}"></script>
    <script>
        $("a.inline").fancybox({
            width: 600,
            height: 350
        });
    </script>
@endpush
