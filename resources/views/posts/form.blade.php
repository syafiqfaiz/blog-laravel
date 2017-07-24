<form action={{$action}} method={{$method}}>
    {{csrf_field()}}
    <div class="form-group">
        <label for="title">Title</label>
        <input class="form-control" type="text" name="title" value={{$post->title}}>
    </div>

    <div class="form-group">
        <label for="title">Body</label>
        <textarea class="form-control" name="body" rows="3">{{$post->body}}</textarea>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>