<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Siswa</title>
    @viteReactRefresh
    @vite('resources/js/pdfguru.jsx')
</head>
<body>

    <div id="pdfguru"></div>

    <h2>Daftar Data Guru</h2>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NIP</th>
                <th>Mata Pelajaran</th>
                <th>Alamat</th> 
            </tr>
        </thead>

        <tbody>
            @forelse ($guru as $listguru)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $listguru->nama }}</td>
                    <td>{{ $listguru->nip }}</td>
                    <td>{{ $listguru->mapel }}</td>
                    <td>{{ $listguru->alamat }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="3">
                        Belum ada data guru.
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html>