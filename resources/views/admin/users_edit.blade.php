@extends('admin.app')

@section('content')

<h3>Edit User</h3>

<form action="/admin/users/update/{{ $user->id }}" method="post">
    @csrf
    <div class="form-group">
        <input type="text" class="form-control" name="name" value="{{ $user->name }}" placeholder="Enter Username">
    </div>

    <div class="form-group">
        <input type="email" class="form-control" name="email" value="{{ $user->email }}" placeholder="Enter Email">
    </div>

    <div class="form-group">
        <input type="password" class="form-control" name="password" placeholder="Enter Password">
    </div>

    <div class="form-group">
        <select name="role" class="form-control">
            <option value="admin" {{ $user->role != "admin" ?: "selected" }}>Admin</option>
            <option value="editor" {{ $user->role != "editor" ?: "selected" }}>Editor</option>
        </select>
    </div>

    <div class="form-group">
        <button class="form-button">Update User</button>
    </div>
</form>

@endsection