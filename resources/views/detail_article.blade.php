@extends('layout')

@section('content')

<h2>{{ $article->title }}</h2>
<p>Date : {{ $article->date }}, Author : {{ $article->user->name }}</p>

<p>{{ $article->body }}</p>

@endsection