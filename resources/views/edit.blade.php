<form action="{{route('edit',$todo->id)}}" method="post">
    @csrf
    <input type="text" name="todo" value="{{$todo->todo}}">
    <input type="submit" value="Edit">
</form>