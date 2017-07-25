<div class="panel-body">
    <a href={{route('admin_post_show', ['id' => $post->id])}}>
        <h2>{{$post->title}}</h2>
    </a>
    {{$post->body}}
</div>