@extends('layouts.design');

@section('content')
    <h1>Edit Students</h1>
    {!! Form::open(['action' => ['StudentsController@update', $student->id], 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('name', 'Name')}}
            {{Form::text('name', $student->name, ['class' => 'form-control', 'placeholder' => 'Enter Name'])}}
        </div>
        <div class="form-group">
            {{Form::label('address', 'Address')}}
            {{Form::text('address', $student->address, ['class' => 'form-control', 'placeholder' => 'Enter Address'])}}
        </div>
        {{Form::hidden('_method', 'PUT')}}
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection