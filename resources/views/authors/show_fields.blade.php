<!-- Name Field -->
<div class="col-sm-12">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $author->name }}</p>
</div>

<!-- Alamat Field -->
<div class="col-sm-12">
    {!! Form::label('alamat', 'Alamat:') !!}
    <p>{{ $author->alamat }}</p>
</div>

{{-- <!-- Judul Buku Field -->
<div class="col-sm-12">
    {!! Form::label('judul_buku', 'Judul Buku:') !!}
    <p>{{ $author->judul_buku }}</p>
</div> --}}