@if(!empty($posts))
@foreach ($posts as $post)
<div class="card card-body mt-2">
    <h2> {{ $post->title }} </h2>
    <div>
        {!! $post->description !!}
    </div>
    <a href="{{ route('index.show', $post->id) }}">
        View
    </a>
</div>
@endforeach
@endif
