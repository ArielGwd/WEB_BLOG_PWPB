@extends('layout')

@section('content')

@foreach ($articles as $data)
<div class="article-data">
    <a href="/article/{{ $data->id }}">
        <h3 class="article-title">{{ $data->title }}</h3>
    </a>
    <small>{{ $data->date }}, Author: <a href="/author/{{ $data->user->id }}">{{ $data->user->name }}</a></small>
    <p class="article-body">{{ $data->body }}</p>
</div>
@endforeach

@endsection