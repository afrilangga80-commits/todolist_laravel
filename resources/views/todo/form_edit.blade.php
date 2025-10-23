<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todo Tugas</title>
</head>
<body>
     <h2>Edit Todo</h2>
     <form action="{{url('/todo/update/' .
     $todo->id) }}" method="post">
    @csrf
    @method('PUT')
    Nama: <input type="text" name="nama" value="{{$todo->nama}}"><br><br>
    Tugas: <input type="text" name="tugas" value="{{$todo->tugas}}"><br><br>
    Deadline: <input type="date" name="deadline" value="{{$todo->deadline}}"><br><br>
    Status: <input type="text" name="status" value="{{$todo->status}}"><br><br>
    <button type="submit">Simpan Perubahan</button>
</form>
</body>
</html>