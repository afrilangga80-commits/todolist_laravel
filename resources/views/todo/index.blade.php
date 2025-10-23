<!DOCTYPE html>
<html>
    <head>
        <title>Todo List</title>
    </head>
<body>
    <h1>Daftar Todo List</h1>
    <a href="/todo/tambah">Tambah Todo</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Tugas</th>
            <th>Deadline</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
        @foreach ($todo_lists as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->nama }}</td>
            <td>{{ $item->tugas }}</td>
            <td>{{ $item->deadline }}</td>
            <td>{{ $item->status }}</td>
            <td>
            <a href="/form_edit/{{ $item->id }}">Edit</a>
            <form action="/hapus/{{ $item->id }}" method="POST" style="display-inline;">
        @csrf 
        @method('DELETE')
            <button type="submit">Hapus</button>
            </form>
        </td>
                </tr>
                @endforeach