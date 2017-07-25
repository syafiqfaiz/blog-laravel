@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Blog</div>
                
                @foreach($posts as $post)
                    @include('posts.post_card')
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
