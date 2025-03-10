<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Form Tambah Data User</h1>
<form action="{{ url('/user/tambah_simpan') }}" method="POST">
    @csrf
    <label>Username:</label>
    <input type="text" name="username" required>

    <label>Nama:</label>
    <input type="text" name="nama" required>

    <label>Password:</label>
    <input type="password" name="password" required>

    <label>Level ID:</label>
    <input type="number" name="level_id" required>

    <button type="submit">Submit</button>
</form>

</body>

</html>
