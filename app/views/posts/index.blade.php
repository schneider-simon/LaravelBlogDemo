@extends('layouts.main')

@section('title')
All the posts
@endsection

@section('content')

    <ul class="list-group posts">
    @foreach($posts as $post)
       <li class="list-group-item">
            <div>
                <b>{{ $post->title }}</b>
                <span class="badge">{{ $post->comments->count() }}</span>
                <span class="pull-right">{{ $post->created_at->format('d.m.Y h:i') }}</span>
            </div>
            {{ str_limit($post->content, 100, '...') }}

            <br/>
            <div class="clearfix">
            <a href="{{ route('posts.show', ['id' => $post->id]) }}" class="pull-right btn btn-sm btn-info">
                Read more
            </a>
            </div>

       </li>
    @endforeach

</ul>
@endsection