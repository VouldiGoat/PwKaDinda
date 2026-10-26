<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Guru</title>
</head>
<body>
    <h1>Detail Guru</h1>
    <p><strong>Nama:</strong> {{ $guru->nama }}</p>
    <p><strong>NIP:</strong> {{ $guru->nip }}</p>
    <p><strong>Mata Pelajaran:</strong> {{ $guru->mapel }}</p>
    <p><strong>Alamat:</strong> {{ $guru->alamat }}</p>
</body>
</html>