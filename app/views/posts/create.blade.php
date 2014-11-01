@extends('layouts.main')

@section('title')
Create a new post
@endsection

@section('content')
    {{ Form::open(array('route'=> 'posts.store' )) }}
        <div class="form-group">
            {{ Form::label('title', 'Title: ') }}
            {{ Form::text('title', '', array('class' => 'form-control')) }}
        </div>
        <div class="form-group">
            {{ Form::label('content', 'Content: ') }}
            {{ Form::textarea('content', '', array('class' => 'form-control')) }}
        </div>
        {{ Form::submit('Publish', array('class' => 'btn btn-primary')) }}
    {{ Form::close() }}
@endsection