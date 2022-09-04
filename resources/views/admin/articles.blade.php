@extends('admin.app')

@section('content')

<h3>Data Articles</h3>
<a href="/admin/articles/add">+ Add Articles</a>

<table class="table-data">
    <tr>
        <td>No</td>
        <td>Author</td>
        <td>Title</td>
        <td>Date</td>
        <td>Body</td>
        <td>Action</td>
    </tr>

    @foreach ($articles as $i=>$data)
    <tr>
        <td>{{ $i+1 }}</td>
        <td>{{ $data->user->name }}</td>
        <td>{{ $data->title }}</td>
        <td>{{ $data->date }}</td>
        <td>{{ $data->body }}</td>
        <td>
            @if (Auth::user()->id == $data->user_id)
            <a href="/admin/articles/edit/{{ $data->id }}">Edit</a>
            <a href="/admin/articles/delete/{{ $data->id }}">Delete</a>
            @endif
        </td>
    </tr>
    @endforeach
</table>

@endsection