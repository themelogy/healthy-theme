@extends('layouts.master')

@section('content')
    <div id="main-wrapper">
        <div class="page-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        @themeSlide('anasayfa')
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                {!! Menu::render('home', \Themes\Healthy\Presenter\HomeMenuLinksPresenter::class) !!}
                @blogLatestPosts(6, 'home-latest')
            </div>
        </div>
    </div>
@stop
