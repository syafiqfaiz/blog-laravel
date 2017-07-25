@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">New post</div>
                
                <div class="panel-body">
                    @include(
                        'admin.posts.form',
                        array(
                            'action'=> route('admin_post_store'),
                            'method'=> 'POST',
                            'edit'=> false
                            )
                        )
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
