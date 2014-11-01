@extends('layouts.main')

@section('title')
{{ $post->title }}
@endsection

@section('content')
    <!-- output the content and replace \n with HTML <br/> tags -->
    <div class="post-content">
        {{ nl2br($post->content) }}
    </div>

    <hr/>
    <a href="{{ route('posts.edit', array('id' => $post->id)) }}" class="btn btn-default">
        Edit this post
    </a>

@endsection