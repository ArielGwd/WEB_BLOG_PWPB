@extends('admin.app')

@section('content')

<h3>Add Article</h3>

<form action="/admin/articles/store" method="post">
    @csrf
    <div class="form-group">
        <input type="text" class="form-control" name="title" placeholder="Masukkan Judul">
    </div>

    <div class="form-group">
        <textarea name="body" class="form-control" rows="10" placeholder="Masukkan Artikel"></textarea>
    </div>

    <div class="form-group">
        <input type="date" name="date" class="form-control">
    </div>

    <div class="form-group">
        <button class="form-button">Submit</button>
    </div>
</form>

@endsection