<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //TAMPILKAN SEMUA USER
    public function index()
    {
        $users = User::orderBy('id', 'DESC')->get();
        return view('admin.users', compact('users'));
    }

    //MENAMPILKAN HALAMAN TAMBAH USER
    public function addUser()
    {
        return view('admin.users_add');
    }

    //MENAMBAHKAN USER KE DALAM DATABASE
    public function storeUser(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->role = $request->role;
        $user->save();

        return redirect('/admin/users');
    }

    //MENAMPILKAN HALAMAN EDIT
    public function editUser($id)
    {
        $user = User::find($id);
        return view('admin.users_edit', compact('user'));
    }

    //MELAKUKAN UPDATE DATA DI DATABASE
    public function updateUser(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = $request->role;

        if ($request->password) {
            $user->password = bcrypt($request->password);
        }

        $user->update();
        return redirect()->back();
    }

    //MENGHAPUS DATA DARI DATABASE
    public function deleteUser($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->back();
    }
}
