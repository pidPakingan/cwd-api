
@extends('home')

@section('content')
@parent
<div class="col-lg-6 n">
        <h2>NOTES</h2>
        <form action="/create" method="post">
            @csrf
            <div class="form-group">
                <label for="notesTitle">Title:</label>
                <input type="text" class="form-control" id="notesTitle" name="notesTitle" placeholder="Place Title Here" required>
            </div>
            <div class="form-group">
                <label for="notesDesc">Description:</label>
                <textarea class="form-control" id="notesDesc" name="notesDesc" placeholder="Place Description Here" required></textarea>
            </div>
            <button type="submit" class="btn btn-default">Add Note</button>
        </form>
    </div>

    <div class="container">
            <div class="col-lg-6 contents">
                    <?php $notes= App\Notes::all(); ?>
                    <ul>
                        @foreach ($notes->reverse() as $note)
                            <li><strong>Title: </strong>{{$note->notesTitle}}</li>
                            <li><strong>Description: </strong>{{$note->notesDesc}}</li> </br>
                            <form action="/edit/{{$note->id}}" method="GET">
                                @csrf
                                <button type="submit" class="btn btn-default">Edit</button>
                            </form>    
                                <form action="/delete/{{$note->id}}" method="POST">
                                    @csrf
                                    {{method_field('DELETE')}}
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                                <hr>
                        @endforeach
                    </ul>
            </div>
            <hr class="col-sm-12">
@stop
@section('todoForm')
<div class="col-lg-6 t">
    <h2>TODO LISTS</h2>
    <form action="/createTodo" method="POST">
        @csrf
        <div class="form-group">
            <label for="todosTitle">Title:</label>
            <input type="text" class="form-control" id="todosTitle" name="todosTitle" placeholder="Place Title Here" required>
        </div>
        <div class="form-group">
            <label for="todosDesc">Description:</label>
            <textarea class="form-control" id="todosDesc" name="todosDesc" placeholder="Place Description Here" required></textarea>
        </div>
        <button type="submit" class="btn btn-default">Add Todo List</button>
    </form>
</div>

<div class="container">
        <div class="col-lg-6 contents">
                <?php $todos = App\Todos :: all() ?>
                <ul>
                    @foreach ($todos->reverse() as $todo)
                        <li><input type="checkbox"><strong>Title: </strong>{{$todo->todosTitle}}</li>
                        <li><strong>Description: </strong>{{$todo->todosDesc}}</li></br>
                        <div class="btn-group">
                            <form action="/editTodo/{{$todo->id}}" method="GET">
                                @csrf
                                <button type="submit" class="btn btn-default">Edit</button>
                            </form>   
                            <form action="/deleteTodo/{{$todo->id}}" method="POST">
                                @csrf
                                {{method_field('DELETE')}}
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                            <hr>
                        </div>
                    @endforeach
                </ul>
        </div>
        <hr class="col-sm-12">
    </div>

</div>
@stop