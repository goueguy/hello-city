@extends('app')
@section("title","About US | ".config("app.name"))
@section('content')
    <img src="{{asset('images/tdn-logo.png')}}" alt="TDN Logo">
    <p>Built with &hearts; by JlGoueguy.</p>
    <p><a href="{{route('home')}}">Revenir à la page d'accueil</a></p>
@endsection