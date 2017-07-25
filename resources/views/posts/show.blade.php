@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Blog</div>
                
                <div class="panel-body">
                    <h1>{{$post->title}}</h1>
                    {{$post->body}}
                    @include('posts.delete')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
