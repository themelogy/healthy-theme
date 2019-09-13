@extends('layouts.master')

@section('content')
    <div id="main-wrapper">
        <div class="page-wrapper">
            @component('partials.components.title', ['breadcrumb' => 'mediapress.index'])
                <h1 class="title">{{ trans('mediapress::mediapress.title.mediapress') }}</h1>
            @endcomponent
            <div class="content-wrapper">
                <div class="container">
                    <div class="row">
                        @foreach($medias as $media)
                            <div class="col-lg-3">
                                <div class="card m-r-10">
                                    <div class="card-img link_on-youtube">
                                    <a class="example-image-link" href="{{ $media->present()->firstImage(null,780,'resize',80) }}" data-lightbox="example-set" data-title="{{ $media->title }}"> <span class="btn"><i class="icon-Magnifi-Glass2"></i></span></a>
                                        <img class="img-responsive" src="{{ $media->present()->firstImage(400,400,'fit',80) }}" alt="{{ $media->title }}"/>
                                    </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <div class="col-md-12">
                            <div class="text-center">
                                {!! $medias->render('vendor.pagination.default') !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script-stack')
    {!! Asset::add(Theme::url('js/lightbox.min.js')) !!}
@endpush

@push('css-stack')
    {!! Theme::style('css/lightbox.min.css') !!}
@endpush
