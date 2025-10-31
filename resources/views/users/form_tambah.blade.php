@extends('layout.app')

@section('content')
<body>
    <h1>Tambah Data User</h1>

    <a href="/users">← Kembali ke Daftar User</a>

    {{-- Tampilkan pesan error validasi --}}
    @if ($errors->any())
        <div style="color:red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="/users" method="POST" enctype="multipart/form-data">
        @csrf

        <table>
            <tr>
                <td>Nama Lengkap</td>
                <td><input type="text" name="nama_lengkap" value="{{ old('nama_lengkap') }}" required></td>
            </tr>

            <tr>
                <td>Email</td>
                <td><input type="email" name="email" value="{{ old('email') }}" required></td>
            </tr>

            <tr>
                <td>Password</td>
                <td><input type="password" name="password" required></td>
            </tr>

            <tr>
                <td>Tanggal Lahir</td>
                <td><input type="date" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}" required></td>
            </tr>

            <tr>
                <td>Umur</td>
                <td><input type="number" name="umur" value="{{ old('umur') }}" required></td>
            </tr>

            <tr>
                <td>Jenis Kelamin</td>
                <td>
                    <select name="jenis_kelamin" required>
                        <option value="">-- Pilih --</option>
                        <option value="Laki-laki" {{ old('jenis_kelamin') == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                        <option value="Perempuan" {{ old('jenis_kelamin') == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>Foto Profil</td>
                <td><input type="file" name="foto_profil"></td>
            </tr>

            <tr>
                <td>Website</td>
                <td><input type="url" name="website" value="{{ old('website') }}"></td>
            </tr>

            <tr>
                <td>Biografi</td>
                <td>
                    <textarea name="biografi" rows="3" cols="25">{{ old('biografi') }}</textarea>
                </td>
            </tr>

            <tr>
                <td></td>
                <td><button type="submit">Simpan</button></td>
            </tr>
        </table>
    </form>
</body>
@endsection