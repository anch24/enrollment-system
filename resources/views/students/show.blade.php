@extends('layouts.design')

@section('content')
    <a href='/students' class='btn btn-default'>Go Back</a>
    <h1>{{$Student->name}}</h1>
    <div>
        {{$Student->address}}
    </div>
    <hr>
    <small>Written on {{$Student->created_at}}</small>
    <hr>
    <a href="/students/{{$Student->id}}/edit" class="btn btn-default">Edit</a>

    {!!Form::open(['action' => ['StudentsController@destroy', $Student->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
        {!!Form::hidden('_method', 'DELETE')!!}
        {!!Form::submit('Delete', ['class' => 'btn btn-danger'])!!}
    {!!Form::close()!!}
@endsection