<article class="row m-b-20">
    <div class="col-lg-4 col-xs-12">
        <a href="{{ $post->url }}"><img class="img-thumbnail img-responsive" src="{{ $post->present()->firstImage(250,175,'fit',80) }}" alt="{{ $post->title }}"/></a>
    </div>
    <div class="col-lg-8 col-xs-12 m-t-10 mt-sm-0">
        <h3><a href="{{ $post->url }}">{{ $post->title }}</a></h3>
        <div class="meta">
            <ul class="list-inline">
                <li class="date"><i class="far fa-calendar-alt"></i> {{ $post->created_at->formatLocalized('%d %B %Y') }}</li>
                <li class="category"><a href="{{ route('blog.category', $post->category->slug) }}"><i class="far fa-newspaper m-r-5"></i> {{ $post->category->name }}</a></li>
            </ul>
        </div>
        <div class="content">
            @if($post->intro)
                {{ strip_tags($post->intro) }}
            @else
                {{ str_sentence(str_limit(strip_tags($post->content), 200), 1) }}
            @endif
        </div>
    </div>
</article>
