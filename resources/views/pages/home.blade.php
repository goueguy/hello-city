@extends('app')
@section("title",config("app.name"))
@section('content')
    <img src="/images/1200px-Flag_of_Quebec.png" alt="Québec flag" style="width:200px">
    <h1>HELLO FROM QUEBEC!</h1>
    <p>It's currently {{ date("H:i")}}.</p>

@endsection