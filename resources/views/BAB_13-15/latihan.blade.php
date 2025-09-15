<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tabel Mahasiswa</title>
    <style>
        body { background-color: #F8F8F8; }
        div.container {
            width: 960px;
            padding: 10px 50px 50px;
            background-color: white;
            margin: 20px auto;
            box-shadow: 1px 0px 10px, -1px 0px 10px;
        }
        h1 { text-align: center; font-family: Cambria, "Times New Roman", serif; }
        table { border-collapse: collapse; width: 100%; }
        th, td { padding: 8px 15px; border: 1px black solid; }
        tr:nth-child(2n+3) { background-color: #F2F2F2; }
    </style>
</head>
<body>
<div class="container">
    <h1>Data Mahasiswa</h1>
    <table>
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Fakultas</th>
            <th>Jurusan</th>
            <th>IPK</th>
        </tr>
        @foreach ($mahasiswa as $mhs)
            <tr>
                <td>{{ $mhs->nim }}</td>
                <td>{{ $mhs->nama }}</td>
                <td>{{ $mhs->tempat_lahir }}</td>
                <td>{{ \Carbon\Carbon::parse($mhs->tanggal_lahir)->format('d-m-Y') }}</td>
                <td>{{ $mhs->fakultas }}</td>
                <td>{{ $mhs->jurusan }}</td>
                <td>{{ $mhs->ipk }}</td>
            </tr>
        @endforeach
    </table>
</div>
</body>
</html>
