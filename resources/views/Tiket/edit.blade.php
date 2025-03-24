<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ubah Data tiket</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body class="container py-5">
    <div class="card p-4 mx-auto" style="max-width: 600px;">
        <h2 class="text-center mb-4">Ubah Data tiket</h2>

        <form action="{{ route('tiket.update', $tiket->id) }}" method="POST">
            @csrf
            @method('PATCH')

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="mb-3">
                <label for="name" class="form-label">Nama:</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $tiket->name }}" placeholder="Masukkan nama tiket" required>
            </div>

            <div class="mb-3">
                <label for="harga" class="form-label">harga:</label>
                <input type="text" name="harga" id="harga" class="form-control" value="{{ $tiket->harga }}" placeholder="Masukkan harga" required>
            </div>

            <div class="mb-3">
                <label for="stasiun_id" class="form-label">stasiun:</label>
                <select name="stasiun_id" id="stasiun_id" class="form-control" required>
                    <option value="" disabled>Pilih stasiun</option>
                    @foreach ($stasiuns as $stasiun)
                        <option value="{{ $stasiun->id }}" {{ $tiket->stasiun_id == $stasiun->id ? 'selected' : '' }}>
                            {{ $stasiun->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="tanggal" class="form-label">tanggal:</label>
                <input type="text" name="tanggal" id="tanggal" class="form-control" value="{{ $tiket->tanggal }}" placeholder="Masukkan tanggal" required>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary w-100">Ubah Data</button>
            </div>
        </form>
    </div>
</body>
</html>
