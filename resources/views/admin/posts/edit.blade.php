@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit post</div>
                
                <div class="panel-body">
                    @include(
                        'admin.posts.form',
                        array(
                            'action'=> route('admin_post_update', ['id'=> $post->id]),
                            'method'=> 'POST',
                            'edit'=> true
                            )
                        )
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
