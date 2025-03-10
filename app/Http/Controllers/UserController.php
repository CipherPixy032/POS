<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $user = UserModel::with('level')->get();
        return view('user', ['data' => $user]);
    }

    public function tambah()
    {
        return view('user_tambah');
    }

    public function tambah_simpan(Request $request)
    {
        // Tampilkan error jika terjadi kesalahan input
        $validatedData = $request->validate([
            'username' => 'required|string|max:50|unique:m_user,username',
            'nama' => 'required|string|max:100',
            'password' => 'required|string|min:6',
            'level_id' => 'required|integer'
        ]);

        try {
            // Simpan data ke database
            $user = new UserModel();
            $user->username = $validatedData['username'];
            $user->nama = $validatedData['nama'];
            $user->password = Hash::make($validatedData['password']);
            $user->level_id = $validatedData['level_id'];
            $user->save(); // Simpan ke database

            return redirect('/user')->with('success', 'User berhasil ditambahkan!');
        } catch (\Exception $e) {
            return redirect('/user/tambah')->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
    public function ubah($id)
    {
        $user = UserModel::find($id);
        return view('user_ubah', ['data' => $user]);
    }
    public function ubah_simpan($id, Request $request)
    {
        $user = UserModel::find($id);

        $user->username = $request->username;
        $user->nama = $request->nama;
        $user->password = Hash::make($request->password);
        $user->level_id = $request->level_id;

        $user->save();

        return redirect('/user')->with('success', 'User berhasil diubah!');
    }
    public function hapus($id)
    {
        $user = UserModel::find($id);
        $user->delete();

        return redirect('/user');
    }
}
