<!DOCTYPE html>
<html>
<head>
    <title>Daftar Mahasiswa</title>
    <style>
        table { border-collapse: collapse; width: 80%; margin: 20px auto; }
        th, td { border: 1px solid #333; padding: 8px; text-align: center; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <h2 style="text-align:center;">Daftar Mahasiswa</h2>
    <table>
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Departemen</th>
            <th>Program Studi</th>
            <th>Nilai Akhir</th>
        </tr>
        @foreach($mahasiswas as $m)
        <tr>
            <td>{{ $m->nim }}</td>
            <td>{{ $m->nama }}</td>
            <td>{{ $m->tempat_lahir }}</td>
            <td>{{ $m->tanggal_lahir }}</td>
            <td>{{ $m->departemen }}</td>
            <td>{{ $m->program_studi }}</td>
            <td>{{ $m->nilai_akhir }}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
