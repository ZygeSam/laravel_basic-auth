@extends('layout.app')
@section('content')
Hello
<p>
    <button>
        <span><a href='{{route('register')}}'> Register here</a></span>
        <span><a href='{{route('login')}}'> Login here</a></span>
    </button>
</p>
@endsection

