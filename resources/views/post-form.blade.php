<form method="post" action="{{Route('post.store')}}">
    {{--  csrf   protext form cross sites--}}
    @csrf

    Name: <input type="text" name="name" value="">

    <input type="submit" name="submit" value="Submit">
</form>

