@extends('home')

@section('editTodo')
    <div class="container col-sm-6">
        <h2>Edit Todo List</h2>
    <?php $todos = App\Todos::where('id', $id)->get(); ?>
   
    @foreach ($todos as $todo)
    <form action="/updatedTodo/{{$todo->id}}" method="post">
        @csrf
        {{method_field('PATCH')}}
            <div class="form-group">
                <label for="todosTitle">Title:</label>
            <input type="text" class="form-control" id="todosTitle" name="todosTitle" value="{{$todo->todosTitle}}">
            </div>
            <div class="form-group">
                <label for="todosDesc">Description:</label>
            <textarea class="form-control" id="todosDesc" name="todosDesc" >{{$todo->todosDesc}}</textarea>
            </div>
                <button type="submit" class="btn btn-default">Save ToDo List</button>         
    </form>
    <a href="/">Cancel</a>
    @endforeach
</div>
   
@stop