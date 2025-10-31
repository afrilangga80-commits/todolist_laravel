<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;

class UserController extends Controller
{
    // Menampilkan semua data user
    public function index()
    {
        $users = Users::all();
        return view('users.index', [
            'users' => $users
        ]);
    }

    // Menampilkan form tambah user
    public function tambah()
    {
        return view('users.form_tambah');
    }

    // Simpan data user baru
    public function simpan(Request $request)
    {
        $request->validate([
            'nama_lengkap' => 'required',
            'email' => 'required',
            'password' => 'required',
            'tanggal_lahir' => 'required|date',
            'umur' => 'required',
            'jenis_kelamin' => 'required',
            'foto_profil' => 'required',
            'website' => 'required',
            'biografi' => 'required',
        ]);

        Users::create([
            'nama_lengkap' => $request->nama_lengkap,
            'email' => $request->email,
            'password' => $request->password,
            'tanggal_lahir' => $request->tanggal_lahir,
            'umur' => $request->umur,
            'jenis_kelamin' => $request->jenis_kelamin,
            'foto_profil' => $request->foto_profil,
            'website' => $request->website,
            'biografi' => $request->biografi,
        ]);

        return redirect('/users')->with('success', 'Data user berhasil disimpan!');
    }
    public function edit($id)
    {
        $user = Users::findOrFail($id);
        return view('users.form_edit', compact('user'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_lengkap' => 'required',
            'email' => 'required',
            'tanggal_lahir' => 'required|date',
            'umur' => 'required',
            'jenis_kelamin' => 'required',
            'website' => 'required',
            'biografi' => 'required',
        ]);

        $user = Users::findOrFail($id);

        $user->update([
            'nama_lengkap' => $request->nama_lengkap,
            'email' => $request->email,
            'password' => $request->password,
            'tanggal_lahir' => $request->tanggal_lahir,
            'umur' => $request->umur,
            'jenis_kelamin' => $request->jenis_kelamin,
            'foto_profil' => $request->foto_profil,
            'website' => $request->website,
            'biografi' => $request->biografi,
        ]);

        return redirect('/users')->with('success', 'Data user berhasil diperbarui!');
    }
}
