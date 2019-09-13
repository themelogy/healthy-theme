@extends('layouts.master')

@section('content')
    <div id="main-wrapper">
        <div class="page-wrapper">
            @component('partials.components.title', ['breadcrumbs'=>'page.tag'])
                <h1 class="title">{{ ucfirst($tag->name) }}</h1>
            @endcomponent
            <div class="content-wrapper">
                <div class="container">
                    <div class="row">
                    @foreach($pages as $page)
                        <div class="col-lg-4">
                            <div class="card border page-card mb-lg-2 mb-lg-4">
                                @if($image = $page->present()->firstImage(480,200,'fit',50))
                                    {!! Html::image($image, $tag->name.' '.$loop->iteration, ['class'=>'card-img-top']) !!}
                                @endif
                                <div class="card-body" style="min-height: 180px;">
                                    <h4 class="card-title">
                                        <a href="{{ $page->url }}">{{ $page->title }}</a>
                                    </h4>
                                    {!! str_sentence(strip_tags($page->body), 1) !!}
                                </div>
                                <div class="overlay"></div>
                            </div>
                        </div>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
