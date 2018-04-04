@extends('layouts.app')

@section('content')

<h1>Admin Home Page</h1>

Auth: {{auth()->user()->name}}<br>
Session: {{ session('key') }}
@endsection