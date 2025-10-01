<!DOCTYPE html>
<html>
<head>
    <title>Edit Karyawan</title>
</head>
<body>
    <h1>Edit Karyawan</h1>

    <!-- Form edit karyawan -->
    <form action="{{ route('karyawan.update', $karyawan->id) }}" method="POST">
        @csrf
        @method('PUT') <!-- method PUT untuk update -->

        <label>Nama:</label><br>
        <input type="text" name="nama" value="{{ $karyawan->nama }}" required><br><br>

        <label>Jabatan:</label><br>
        <input type="text" name="jabatan" value="{{ $karyawan->jabatan }}" required><br><br>

        <label>Umur:</label><br>
        <input type="number" name="umur" value="{{ $karyawan->umur }}" required><br><br>

        <button type="submit">Update</button>
    </form>

    <br>
    <a href="{{ route('karyawan.index') }}">Kembali</a>
</body>
</html>
