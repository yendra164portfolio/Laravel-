<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hasil Pendaftaran</title>
  <link href="/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container pt-4 bg-white">
    <h1>Hasil Pendaftaran</h1>
    <hr>
    <ul>
      <li><strong>NIM:</strong> {{ $nim }}</li>
      <li><strong>Nama:</strong> {{ $nama }}</li>
      <li><strong>Email:</strong> {{ $email }}</li>
      <li><strong>Jenis Kelamin:</strong> {{ $jenis_kelamin }}</li>
      <li><strong>Jurusan:</strong> {{ $jurusan }}</li>
      <li><strong>Alamat:</strong> {{ $alamat }}</li>
    </ul>
    <a href="{{ url('/') }}" class="btn btn-primary">Kembali ke Form</a>
  </div>
</body>
</html>
