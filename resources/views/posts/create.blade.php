@extends('layouts.app')

@section('content')
    <h1>Create Post</h1>

    {{Form::open(['action'=>'PostsController@store','method'=>'POST','encrype'=>'multipart/form-data'])}}

    <div class="form-group">
        {{Form::label('title','Title')}}
        {{Form::text('title','',['class'=>'form-control','placeholder'=>'Title'])}}

    </div>
        {{Form::label('body','Body')}}
        {{Form::textarea('body','',['id'=>'article-ckeditor','class'=>'form-control','placeholder'=>'Body'])}}
    <div class="form-group">

    </div>
    
    <div class="form-group">
        {{Form::file('cover_image')}}
    </div>

    {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
    {{Form::close()}}
@endsection