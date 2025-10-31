
@extends('layout.app')

@section('content')
<h1>Daftar List</h1>
    <a href="/users/tambah">Tambah User</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama_lengkap</th>
            <th>Email</th>
            <th>Password</th>
            <th>Tanggal_lahir</th>
            <th>Umur</th>
            <th>Jenis_kelamin</th>
            <th>Foto_profil</th>
            <th>Website</th>
            <th>Biografi</th>
        </tr>
        @foreach ($users as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->nama_lengkap }}</td>
            <td>{{ $item->email }}</td>
            <td>{{ $item->password }}</td>
            <td>{{ $item->tanggal_lahir }}</td>
            <td>{{ $item->umur }}</td>
            <td>{{ $item->jenis_kelamin }}</td>
            <td>{{ $item->foto_profil }}</td>
            <td>{{ $item->website }}</td>
            <td>{{ $item->biografi }}</td>
            <td>
            <a href="/users/{{ $item->id }}/edit">Edit</a>
            <form action="/hapus/{{ $item->id }}" method="POST" style="display-inline;">
        @csrf 
        @method('DELETE')
            <button type="submit">Hapus</button>
            </form>
        </td>
                </tr>
                @endforeach
    </table>
@endsection