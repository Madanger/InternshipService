@extends('layouts.app')
@INCLUDE('inc.navbar')

@section('content')
        <div class="jumbotron text-center">
                <h1>{{$title}}</h1>
                <P>This is the national intenship program platform.</P>
                <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a>
                        <a class="btn btn-success btn-lg" href="/login" role="button">Register</a>
        </div>
        
@endsection
