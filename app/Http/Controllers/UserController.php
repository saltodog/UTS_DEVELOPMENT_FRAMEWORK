<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {

        $users = User::all();
        $active = 'user';
        return view('user.show', compact('users', 'active'));
    }

    public function tambah()
    {
        $active = 'user';
        return view('user.tambah', compact('active'));
    }

    public function tambahAksi(Request $request)
    {
        $input = $request->all();
        $input['password'] = Hash::make($input['password']);

        $insert = User::create($input);

        if ($insert) {
            return redirect('user');
        }
    }

    public function edit($id)
    {
        $user = User::where('id', $id)->first();
        $active = 'user';

        return view('user.edit', compact('user', 'active'));
    }

    public function editAksi($id, Request $request)
    {
        $input = $request->all();

        if ($input['password']) {
            $input['password'] = Hash::make($input['password']);
        } else {
            unset($input['password']);
        }

        $user = User::where('id', $id)->first();
        $user->update($input);

        return redirect('user');
    }

    public function delete($id)
    {
        $user = User::where('id', $id);
        $user->delete();

        return redirect('user');
    }
}
