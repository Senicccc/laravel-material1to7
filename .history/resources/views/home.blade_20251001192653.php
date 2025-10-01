<!DOCTYPE html>
<html>
<head>
    <title>Daftar Karyawan</title>
</head>
<body>
    <h1>Daftar Karyawan</h1>

    <a href="{{ route('karyawan.create') }}">+ Tambah Karyawan</a>
    <br><br>

    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
        @forelse ($karyawan as $index => $k)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $k->nama }}</td>
                <td>{{ $k->email }}</td>
                <td>{{ $k->alamat }}</td>
                <td>
                    <a href="{{ route('karyawan.edit', $k->id) }}">Edit</a> |
                    <form action="{{ route('karyawan.destroy', $k->id) }}" method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Yakin mau hapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="5">Belum ada data karyawan</td>
            </tr>
        @endforelse
    </table>
</body>
</html>
