<div class="container">
    <div class="row">
        <div class="col-md-12">
            @includeWhen($page, 'page::partials.video', ['page'=>$page])
            @include('page::partials.image', ['page'=>$page])
        </div>
    </div>
</div>
