<div class="container">
    <div class="row">
        <div class="col-md-9 {{ @$page->parent->settings->show_menu_location == 'left' ? 'order-md-9' : '' }}">
            @includeWhen($page, 'page::partials.video', ['page'=>$page])
            @includeWhen(!@$page->settings->list_page, 'page::partials.image', ['page'=>$page])
            @includeWhen($page && @$page->settings->list_page, 'page::page-list', ['page'=>$page])
        </div>
        <div class="col-md-3 {{ @$page->parent->settings->show_menu_location == 'left' ? 'order-md-3' : '' }} sidebar">
            @parentMenu(@$page)
            @pageTags(@$page)
        </div>
    </div>
</div>
