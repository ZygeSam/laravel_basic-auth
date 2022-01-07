@extends('layout.app')
@section('content')
<div class="container">
    <div class="row">
    
        <h1 class="display-4 mx-4">Login</h1>
        <hr class="m-4">
        <p class="lead m-4">This is the login page</p>        
            <form method="post" action="{{route('users.login')}}" class =" py-5 my-5 mx-4">
            <div class="jumbotron">
                @include('layout.form')
                </div>
            </form>
                
            </div>
        </div>

@endsection
