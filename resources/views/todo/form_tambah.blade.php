<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
     <h2>Tambah Tugas</h2>
<form method="post" action="/todo/simpan">
    @csrf
    Nama: <input type="text" name="nama"><br><br>
    Tugas: <input type="text" name="tugas"><br><br>
    Deadline: <input type="date" name="deadline"><br><br>
    Status: <input type="text" name="status"><br><br>
    <button type="submit">Simpan</button>
</form>
</body>
</html>