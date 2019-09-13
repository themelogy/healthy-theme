@inject("menuService", "Modules\Menu\Services\MenuService")

<footer class="footer1 font-14">
    <!-- Row  -->
    <div class="f1-middle">
        <div class="container">
            <div class="row">
                <!-- Column -->
                <div class="col-lg-3 col-md-12">
                    <a href="#" class="footer-logo align-center"><img src="{{ Theme::url('images/logo/logo.svg') }}" alt="{{ setting('theme::company-name') }}" /></a>
                    <p class="m-t-20" style="text-align: justify; font-size: .95em;">
                        @location('dr-bugra-buyrukcu', 'footer')
                    </p>
                </div>
                <div class="col-lg-9 col-md-12">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-12 m-t-5">
                            <h6 class="font-medium c-t-txt">{{ $menuService->title('footer-1') }}</h6>
                            {!! Menu::render('footer-1', \Themes\Healthy\Presenter\FooterMenuLinksPresenter::class) !!}
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12 m-t-5">
                            <h6 class="font-medium c-t-txt">{{ $menuService->title('footer-2') }}</h6>
                            {!! Menu::render('footer-2', \Themes\Healthy\Presenter\FooterMenuLinksPresenter::class) !!}
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12 m-t-5">
                            <h6 class="font-medium c-t-txt">{{ $menuService->title('footer-3') }}</h6>
                            {!! Menu::render('footer-3', \Themes\Healthy\Presenter\FooterMenuLinksPresenter::class) !!}
                        </div>
                        <div class="col-lg-3 col-md-3 col-sm-12 m-t-5">
                            <h6 class="font-medium c-t-txt">{{ $menuService->title('footer-4') }}</h6>
                            {!! Menu::render('footer-4', \Themes\Healthy\Presenter\FooterMenuLinksPresenter::class) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="f1-topbar">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-expand-lg f1-nav"> <a class="navbar-brand hidden-md-up" href="#">Menü</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ft1" aria-controls="ft1" aria-expanded="false" aria-label="Toggle navigation"> <span class="ti-menu"></span> </button>
                        <div class="collapse navbar-collapse" id="ft1">
                            {!! Menu::render('footer', \Themes\Healthy\Presenter\FooterMenuPresenter::class) !!}
                            <ul class="navbar-nav ml-auto theme-btn">
                                <li class="nav-item"><a class="btn btn-outline-secondary btn-rounded btn-sm feedback" href="#"><i class="icon-Speach-Bubble m-r-10 font-bold"></i> YORUM BIRAKIN</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- Row  -->
    <div class="f1-bottom-bar">
        <div class="container">
            <div class="d-flex">
                <div class="m-t-10 m-b-10 font-13">
                    {!! trans('themes::theme.footer.copyrights', ['date'=>\Carbon\Carbon::now()->format('Y'), 'company'=>setting('theme::company-name')]) !!}<br/>
                    {!! Menu::render('bottom', \Themes\Healthy\Presenter\BottomMenuLinksPresenter::class) !!}
                </div>
                @component('partials.components.socials') @endcomponent
            </div>
        </div>
    </div>
</footer>
