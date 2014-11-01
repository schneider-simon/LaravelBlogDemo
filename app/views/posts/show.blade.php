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

    <hr/>
    <h3>Comments <span class="badge">{{ $post->comments->count() }}</span></h3>

    <!-- include posts addcomment here -->
    @include('posts.addcomment')

    <hr/>
    <ul class="list-group comments">
    @foreach($post->comments as $comment)
        <li class="list-group-item">
            <h4>{{ $comment->title }}</h4>
            <b>{{ $comment->email }}: </b> {{ $comment->content }}
        </li>
    @endforeach
    </ul>

@endsection