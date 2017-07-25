<form action={{route('admin_post_destroy', ['id'=>$post->id])}} method='POST'>
    {{ method_field('DELETE') }}
    {{csrf_field()}}
    <input type="hidden" name="id" value={{$post->id}}>
    <button type="submit" class="btn btn-danger">Delete</button>
</form>