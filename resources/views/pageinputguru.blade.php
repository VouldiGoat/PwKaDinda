<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Guru</title>
    <style>
        :root {
            --primary: #2563eb;
            --primary-dark: #1d4ed8;
            --text: #172033;
            --muted: #667085;
            --border: #d0d5dd;
            --background: #f4f7fb;
            --surface: #ffffff;
            --danger: #b42318;
            --danger-background: #fef3f2;
        }

        * {
            box-sizing: border-box;
        }

        body {
            background: var(--background);
            color: var(--text);
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 32px 20px;
        }

        .container {
            margin: 0 auto;
            max-width: 640px;
        }

        .page-header {
            margin-bottom: 22px;
        }

        h1 {
            font-size: 30px;
            margin: 0 0 8px;
        }

        .subtitle {
            color: var(--muted);
            margin: 0;
        }

        form {
            background: var(--surface);
            border: 1px solid #e4e7ec;
            border-radius: 12px;
            padding: 28px;
        }

        .errors {
            background: var(--danger-background);
            border: 1px solid #fecdca;
            border-radius: 8px;
            color: var(--danger);
            margin-bottom: 22px;
            padding: 12px 16px;
        }

        .errors ul {
            margin: 0;
            padding-left: 20px;
        }

        .field {
            margin-bottom: 18px;
        }

        label {
            display: block;
            font-size: 14px;
            font-weight: bold;
            margin-bottom: 7px;
        }

        input {
            border: 1px solid var(--border);
            border-radius: 7px;
            color: var(--text);
            font: inherit;
            padding: 11px 12px;
            width: 100%;
        }

        input:focus {
            border-color: var(--primary);
            outline: 3px solid #dbeafe;
        }

        .actions {
            align-items: center;
            border-top: 1px solid #eaecf0;
            display: flex;
            gap: 12px;
            justify-content: flex-end;
            margin-top: 26px;
            padding-top: 22px;
        }

        .button {
            border: 0;
            border-radius: 7px;
            cursor: pointer;
            display: inline-block;
            font: inherit;
            font-weight: bold;
            padding: 11px 18px;
            text-decoration: none;
        }

        .button-primary {
            background: var(--primary);
            color: #ffffff;
        }

        .button-primary:hover {
            background: var(--primary-dark);
        }

        .button-secondary {
            background: #f2f4f7;
            color: var(--text);
        }

        .button-secondary:hover {
            background: #e4e7ec;
        }

        @media (max-width: 600px) {
            body {
                padding: 24px 14px;
            }

            form {
                padding: 20px;
            }

            .actions {
                align-items: stretch;
                flex-direction: column-reverse;
            }

            .button {
                text-align: center;
                width: 100%;
            }
        }
    </style>
</head>
<body>
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