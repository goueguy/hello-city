@extends('app')
@section('content')
    <img src="{{asset('images/1200px-Flag_of_Quebec.png')}}" alt="Québec flag" style="width:200px" class="my-12 rounded shadow-md">
    <h1 class="mt-5 text:3l sm:text-5xl  font-semibold text-indigo-600">Hello from Quebec!</h1>
    <p class="mb-12 text-lg text-gray-800">It's currently {{ date("H:i")}}.</p>
@endsection
