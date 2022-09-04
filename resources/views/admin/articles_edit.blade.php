@extends('admin.app')

@section('content')

<h3>Edit Article</h3>

<form action="/admin/articles/update/{{ $article->id }}" method="post">
    @csrf
    <div class="form-group">
        <input type="text" class="form-control" name="title" value="{{ $article->title }}" placeholder="Masukkan Judul">
    </div>

    <div class="form-group">
        <textarea name="body" class="form-control" rows="10" placeholder="Masukkan Artikel">{{ $article->body }}</textarea>
    </div>

    <div class="form-group">
        <input type="date" name="date" value="{{ $article->date }}" class="form-control">
    </div>

    <div class="form-group">
        <button class="form-button">Update</button>
    </div>
</form>

@endsection