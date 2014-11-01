@extends('layouts.main')

@section('title')
Edit post {{ $post->title }}
@endsection

@section('content')
    {{ Form::model($post, ['method'=>'PATCH', 'route' => ['posts.update', $post->id]]) }}
        <div class="form-group">
            {{ Form::label('title', 'Title: ') }}
            {{ Form::text('title', null, ['class' => 'form-control']) }}
        </div>
        <div class="form-group">
            {{ Form::label('content', 'Content: ') }}
            {{ Form::textarea('content', null, array('class' => 'form-control')) }}
        </div>
        {{ Form::submit('Update', ['class' => 'btn btn-primary'] ) }}
    {{ Form::close() }}
@endsection