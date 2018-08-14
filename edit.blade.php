@extends('home')

@section('edit')
<div class="container">
    <h2>Edit Note</h2>
    <?php $notes = App\Notes::where('id', $id)->get(); ?>
   
    @foreach ($notes as $note)
    <form action="/updated/{{$note->id}}" method="post">
        @csrf
        {{method_field('PATCH')}}
            <div class="form-group">
                <label for="notesTitle">Title:</label>
            <input type="text" class="form-control" id="notesTitle" name="notesTitle" value="{{$note->notesTitle}}">
            </div>
            <div class="form-group">
                <label for="notesDesc">Description:</label>
            <textarea class="form-control" id="notesDesc" name="notesDesc" >{{$note->notesDesc}}</textarea>
            </div>
                <button type="submit" class="btn btn-default">Save Note</button>         
    </form>
            <a href="/">Cancel</a>
    @endforeach
</div>
   
@stop