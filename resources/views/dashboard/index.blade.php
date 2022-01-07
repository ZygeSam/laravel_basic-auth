@extends('layout.app')
@section('content')
<h1>Welcome to Dashboard</h1>
@if(session()->has('message'))
   <p> {{session()->get('message')}} </p>
@endif
@endsection 