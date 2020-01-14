@extends('layouts.master')

@section('content')
    @component('partials.components.title', [
    'breadcrumbs' => 'video.show'
    ])
        <h1 class="title">{{ $media->title }}</h1>
    @endcomponent
    <div class="container">
        <div class="row">
            <div class="col-md-12 wow bounceInLeft m-t-20 m-b-20" data-wow-delay=".2s">
                <div class="embed-responsive embed-responsive-16by9">
                    {!! $media->embed['code'] ?? null !!}
                </div>
                <h3 class="ui-title-block ui-title-block_small" style="font-size:14px;">{{ $media->title }}</h3>
                <div class="description">
                    {!! $media->description !!}
                </div>
            </div>
        </div>
    </div>
@endsection
