@extends('admin.app')

@section('content')

<h3>Data Users</h3>
<a href="/admin/users/add">+ Add User</a>

<table class="table-data">
    <tr>
        <td>No</td>
        <td>Nama</td>
        <td>Email</td>
        <td>Role</td>
        <td>Action</td>
    </tr>

    @foreach ($users as $i=>$data)
    <tr>
        <td>{{ $i+1 }}</td>
        <td>{{ $data->name }}</td>
        <td>{{ $data->email }}</td>
        <td>{{ $data->role }}</td>
        <td>
            <a href="/admin/users/edit/{{ $data->id }}">Edit</a>
            @if (Auth::user()->id != $data->id)
            <a href="/admin/users/delete/{{ $data->id }}">Delete</a>
            @endif
        </td>
    </tr>
    @endforeach
</table>

@endsection