@extends('layouts.design')

@section('content')
    <h1>Students</h1>
    @if(count($Students) > 0)
        @foreach($Students as $student)
            <div class='well'>
                <h3><a href="/students/{{$student->id}}">{{$student->name}}</a></h3>
                <small>Written on {{$student->created_at}}</small>
            </div>
        @endforeach
        {{$Students->links()}}
    @else
        <h3>No post found</h3>
    @endif

@endsection