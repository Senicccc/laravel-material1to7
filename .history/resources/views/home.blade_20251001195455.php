<!DOCTYPE html>
<html>
<head>
    <title>Daftar Karyawan</title>
</head>
<body>
    <h1>Daftar Karyawan</h1>

    <!-- Link untuk tambah karyawan -->
    <a href="{{ route('karyawan.create') }}">+ Tambah Karyawan</a>
    <br><br>

    <!-- Tampilkan pesan sukses setelah create/update/delete -->
    @if(session('success'))
        <div style="color:green">{{ session('success') }}</div><br>
    @endif

    <!-- Tabel daftar karyawan -->
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Umur</th>
            <th>Aksi</th>
        </tr>

        <!-- Loop data karyawan -->
        @forelse ($karyawan as $index => $k)
            <tr>
                <td>{{ $index + 1 }}</td> <!-- nomor urut -->
                <td>{{ $k->nama }}</td>
                <td>{{ $k->jabatan }}</td>
                <td>{{ $k->umur }}</td>
                <td>
                    <!-- Link edit -->
                    <a href="{{ route('karyawan.edit', $k->id) }}">Edit</a> |

                    <!-- Form hapus -->
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
