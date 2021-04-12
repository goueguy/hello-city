@extends('app')
@section("title",config("app.name"))
@section('content')
        
    <h1>HELLO FROM QUEBEC!</h1>
    <p>It's currently {{ date("H:i")}}.</p>

@endsection