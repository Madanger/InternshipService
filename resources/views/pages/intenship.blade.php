
@extends('layouts.app')

@section('content')
    <h1>Apply</h1>
    {!! Form::open(['action'=>'App\Http\Controllers\PagesController@apply','method'=>'POST']) !!}
        <div class="form-group">
            {{Form::label('type','Type')}}
            {{Form::select('size', array('internship' => 'Internship', 'Graduate Volunteer Scheme' => 'Graduate Volunteer Scheme','Botswana National Service Program' => 'Botswana National Service Program'), 'intenship')}}
        </div>
        <div class = "form-group">
            {{Form::label('body', 'Body')}}
            <br></br>
            {{Form::textarea('body','',['class'=>'formcontrol','placeholder'=>'body'])}}
        </div> 
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection