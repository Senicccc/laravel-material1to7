<!DOCTYPE html>
<html>
<head>
    <title>Tambah Karyawan</title>
</head>
<body>
    <h1>Tambah Karyawan</h1>

    <!-- Form tambah karyawan -->
    <form action="{{ route('karyawan.store') }}" method="POST">
        @csrf <!-- wajib untuk proteksi CSRF -->
        <label>Nama:</label><br>
        <input type="text" name="nama" required><br><br>

        <label>Jabatan:</label><br>
        <input type="text" name="jabatan" required><br><br>

        <label>Umur:</label><br>
        <input type="number" name="umur" required><br><br>

        <button type="submit">Simpan</button>
    </form>

    <br>
    <a href="{{ route('karyawan.index') }}">Kembali</a> <!-- link ke halaman daftar -->
</body>
</html>
