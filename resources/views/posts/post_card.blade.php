<div class="panel-body">
    <a href={{route('post_show', ['id' => $post->id])}}>
        <h2>{{$post->title}}</h2>
    </a>
    {{$post->body}}
</div>