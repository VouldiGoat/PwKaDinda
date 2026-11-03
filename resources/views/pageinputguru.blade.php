<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Guru</title>
    @viteReactRefresh
    @vite('resources/js/pageinputguru.jsx')
</head>
<body>
    <div id="pageinputguru"></div>
<main class="container">
    <header class="page-header">
        <h1>Tambah Data Guru</h1>
        <p class="subtitle">Isi data guru dengan lengkap untuk menambahkannya ke daftar.</p>
    </header>

    <form action="{{ route('guru.store') }}" method="POST">
        @csrf

        @if ($errors->any())
            <div class="errors">
                <strong>Data belum dapat disimpan:</strong>
                <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
                </ul>
            </div>
        @endif

        <div class="field">
            <label>Nama</label>
            <input type="text" name="nama" value="{{ old('nama') }}" placeholder="Masukkan nama lengkap" required>
        </div>

        <div class="field">
            <label>NIP</label>
            <input type="text" name="nip" value="{{ old('nip') }}" placeholder="Masukkan NIP" required>
        </div>

        <div class="field">
            <label>Mata Pelajaran</label>
            <input type="text" name="mapel" value="{{ old('mapel') }}" placeholder="Contoh: Matematika" required>
        </div>

        <div class="field">
            <label>Alamat</label>
            <input type="text" name="alamat" value="{{ old('alamat') }}" placeholder="Masukkan alamat" required>
        </div>

        <div class="actions">
            <a class="button button-secondary" href="{{ route('guru.index') }}">Kembali</a>
            <button class="button button-primary" type="submit">Simpan Data</button>
        </div>
    </form>
</main>
</body>
</html>