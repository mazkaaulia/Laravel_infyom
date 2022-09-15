<!-- Author Id Field -->
<div class="col-sm-12">
    {!! Form::label('author_id', 'Author Id:') !!}
    <p>{{ $post->author_id }}</p>
</div>

<!-- Name Field -->
<div class="col-sm-12">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $post->name }}</p>
</div>

<!-- Body Field -->
<div class="col-sm-12">
    {!! Form::label('body', 'Body:') !!}
    <p>{{ $post->body }}</p>
</div>

<!-- Author name -->
<div class="col-sm-12">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $post->listpost->name }}</p>
</div>

