@extends('layout.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="jumbotron">
        <h1 class="display-4 mx-4">Sign up</h1>
        <hr class="m-4">
        <p class="lead m-4">This is the registration page</p>        
            <form method="post" action="{{route('users.register')}}" class ="p-5 m-5">
            @if ($errors->any())
                @foreach($errors->all() as $error)
                    <li> {{$error}} </li>
                @endforeach
            @endif
            <div class="form-group">
                    <label for="exampleInputTextbox">Name</label>
                    <input class="form-control" type="text" placeholder="Your full Name" name="name" value="{{old('name')}}">
            </div>
                @include('layout.form')
                @csrf
            </form>
                </div>
            </div>
        </div>

@endsection
