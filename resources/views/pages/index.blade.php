@extends('layouts.app')

@section('content')

<div class="jumbotron text-center">
<h1>{{ $title }}</h1>
<a class="btn btn-lg btn-primary" href="/login" role="button">LOGIN</a>
<a class="btn btn-lg btn-success" href="/register" role="button">REGISTER</a>
      </div>
@endsection