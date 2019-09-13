@isset($tags)
    @if($tags->count()>0)
    <div class="widget widget-tags mb-md-2 mt-md-3">
        <h3>{{ trans('tag::tags.tag') }}</h3>
        @foreach($tags as $tag)
            <a class="btn btn-light btn-xs border" href="{{ route('page.tag', $tag->slug) }}">{{ $tag->name }}</a>
        @endforeach
    </div>
    @endif
@endisset
