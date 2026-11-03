
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Guru</title>
    @viteReactRefresh
    @vite('resources/js/editguru.jsx')
</head>

<body>
    
    <div id="editguru"></div>

<main class="container">
    <section class="card">
        <h1>Edit Data Guru</h1>
        <p class="subtitle">
            Ubah informasi guru, lalu simpan perubahan.
        </p>

        <form action="{{ route('guru.update', $guru->id) }}"
              method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="nama">Nama Guru</label>
                <input
                    type="text"
                    id="nama"
                    name="nama"
                    value="{{ old('nama', $guru->nama) }}"
                    required
                >

                @error('nama')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="nip">NIP</label>
                <input
                    type="text"
                    id="nip"
                    name="nip"
                    value="{{ old('nip', $guru->nip) }}"
                    required
                >

                @error('nip')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="mapel">Mata Pelajaran</label>
                <input
                    type="text"
                    id="mapel"
                    name="mapel"
                    value="{{ old('mapel', $guru->mapel) }}"
                    required
                >

                @error('mapel')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea
                    id="alamat"
                    name="alamat"
                    required
                >{{ old('alamat', $guru->alamat) }}</textarea>

                @error('alamat')
                    <div class="error">{{ $message }}</div>
                @enderror
            </div>

            <div class="actions">
                <button type="submit" class="button">
                    Simpan Perubahan
                </button>

                <a href="{{ route('guru.index') }}"
                   class="button cancel">
                    Batal
                </a>
            </div>
        </form>
    </section>
</main>
</body>
</html>
