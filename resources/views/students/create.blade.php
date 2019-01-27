@extends('layouts.design')

@section('content')

    <h1>Add Student</h1>

    {!! Form::open(['action' => 'StudentsController@store', 'method' => 'POST']) !!}
        <div class="form-group">
            {{Form::label('name', 'Name')}}
            {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Enter Name'])}}
            @if ($errors->has('name'))
                <b class="form-text text-danger" id="nameError">{{$errors->first('name')}}</b>
            @endif
        </div>
        <div class="form-group">
            {{Form::label('address', 'Address')}}
            {{Form::text('address', '', ['class' => 'form-control', 'placeholder' => 'Enter Address'])}}
            @if ($errors->has('address'))
                <b class="form-text text-danger" id="nameError">{{$errors->first('address')}}</b>
            @endif
        </div>
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}

@endsection
