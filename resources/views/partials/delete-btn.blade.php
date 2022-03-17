<form action="{{ route('admin.posts.destroy', $post->id) }}" method="POST">
    @csrf
    @method("delete")

    <button class="{{$classBtn}}" type="submit"><i class="fa fa-trash"></i></button>
</form>