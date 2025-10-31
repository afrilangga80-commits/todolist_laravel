@extends('layout.app')

@section('content')
<body>
    <h2>Edit Data User</h2>

    <form action="{{ url('/users/' . $user->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <table>
            <tr>
                <td>Nama Lengkap</td>
                <td>
                    <input type="text" name="nama_lengkap" 
                        value="{{ old('nama_lengkap', $user->nama_lengkap) }}" required>
                </td>
            </tr>

            <tr>
                <td>Email</td>
                <td>
                    <input type="email" name="email" 
                        value="{{ old('email', $user->email) }}" required>
                </td>
            </tr>

            <tr>
                <td>Password</td>
                <td>
                    <input type="password" name="password" placeholder="Kosongkan jika tidak diubah">
                </td>
            </tr>

            <tr>
                <td>Tanggal Lahir</td>
                <td>
                    <input type="date" name="tanggal_lahir" 
                        value="{{ old('tanggal_lahir', $user->tanggal_lahir) }}" required>
                </td>
            </tr>

            <tr>
                <td>Umur</td>
                <td>
                    <input type="number" name="umur" 
                        value="{{ old('umur', $user->umur) }}" required>
                </td>
            </tr>

            <tr>
                <td>Jenis Kelamin</td>
                <td>
                    <select name="jenis_kelamin" required>
                        <option value="">-- Pilih --</option>
                        <option value="Laki-laki" {{ old('jenis_kelamin', $user->jenis_kelamin) == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                        <option value="Perempuan" {{ old('jenis_kelamin', $user->jenis_kelamin) == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>Foto Profil</td>
                <td>
                    <input type="file" name="foto_profil"><br>
                    @if($user->foto_profil)
                        <img src="{{ asset('storage/' . $user->foto_profil) }}" width="100" alt="Foto Profil">
                    @endif
                </td>
            </tr>

            <tr>
                <td>Website</td>
                <td>
                    <input type="url" name="website" 
                        value="{{ old('website', $user->website) }}" required>
                </td>
            </tr>

            <tr>
                <td>Biografi</td>
                <td>
                    <textarea name="biografi" rows="3" cols="25" required>{{ old('biografi', $user->biografi) }}</textarea>
                </td>
            </tr>

            <tr>
                <td></td>
                <td>
                    <button type="submit">Simpan Perubahan</button>
                </td>
            </tr>
        </table>
    </form>
</body>
@endsection