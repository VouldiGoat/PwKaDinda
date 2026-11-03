<!DOCTYPE html>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Guru</title>
    @viteReactRefresh
    @vite('resources/js/listguru.jsx')
</head>
<body>
    
<div id="listguru"></div>

<main class="container">
    <header class="page-header">
        <div>
            <h1>Daftar Guru</h1>
            <p class="subtitle">Kelola data guru yang tersimpan di sekolah.</p>
        </div>
        <a class="button" href="{{ route('guru.create') }}">+ Tambah Guru</a>
        <a href="{{ route('guru.pdf') }}" class="button" style="background-color: #16a34a;">Cetak PDF</a>
        <a class="button" href="{{ route('guru.excel') }}" style="background-color: #16a34a;">Unduh Excel</a>
    </header>


    @if (session('success'))
        <div class="success">{{ session('success') }}</div>
    @endif

    <div class="summary">
        <span class="summary-label">Total data guru</span>
        <span class="summary-total">{{ $guru->count() }}</span>
    </div>

    <section class="table-card">
        @if ($guru->isEmpty())
            <div class="empty">Belum ada data guru. Silakan tambahkan data pertama.</div>
        @else
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>NIP</th>
                        <th>Mata Pelajaran</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($guru as $listguru)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $listguru->nama }}</td>
                            <td>{{ $listguru->nip }}</td>
                            <td>{{ $listguru->mapel }}</td>
                            <td>{{ $listguru->alamat }}</td>
                            <td>
                                <a href="{{ route('guru.show', $listguru->id) }}" class="button" style="background-color: #2563eb;">Detail</a>
                                <a href="{{ route('guru.edit', $listguru->id) }}" class="button" style="background-color: #f59e0b;">Edit</a>
                                <form action="{{ route('guru.destroy', $listguru->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="button" style="background-color: #dc2626;">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </section>
</main>

</body>
</html>