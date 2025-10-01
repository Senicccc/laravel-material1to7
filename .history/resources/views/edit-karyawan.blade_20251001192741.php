<!DOCTYPE html>
<html>
<head>
    <title>Edit Karyawan</title>
</head>
<body>
    <h1>Edit Karyawan</h1>

    <form action="{{ route('karyawan.update', $karyawan->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Nama:</label><br>
        <input type="text" name="nama" value="{{ $karyawan->nama }}" required><br><br>

        <label>Email:</label><br>
        <input type="email" name="email" value="{{ $karyawan->email }}" required><br><br>

        <label>Alamat:</label><br>
        <textarea name="alamat" required>{{ $karyawan->alamat }}</textarea><br><br>

        <button type="submit">Update</button>
    </form>

    <br>
    <a href="{{ route('home.index') }}">Kembali</a>
</body>
</html>
