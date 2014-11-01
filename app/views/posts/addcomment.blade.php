{{ Form::open(array('route'=> 'comments.store' )) }}
    {{ Form::hidden('post_id', $post->id) }}
    <div class="form-group">
        {{ Form::label('email', 'Email: ') }}
        {{ Form::email('email', '', array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('title', 'Title: ') }}
        {{ Form::text('title', '', array('class' => 'form-control')) }}
    </div>
    <div class="form-group">
        {{ Form::label('content', 'Content: ') }}
        {{ Form::textarea('content', null, array('size' => '50x2', 'class' => 'form-control')) }}
    </div>
    {{ Form::submit('Add comment', array('class' => 'btn btn-info')) }}
{{ Form::close() }}