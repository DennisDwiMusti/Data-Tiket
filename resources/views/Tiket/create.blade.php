<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data Tiket</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body class="container py-5">
    <div class="card p-4 mx-auto" style="max-width: 600px;">
        <h2 class="text-center mb-4">Tambah Data Tiket</h2>

        <form action="{{ route('tiket.store') }}" method="POST">
            @csrf

            @if (Session::get('failed'))
                <div class="alert alert-danger my-2">{{ Session::get('failed') }}</div>
            @endif

            <div class="mb-3">
                <label for="stasiun_id" class="form-label">Stasiun:</label>
                <select name="stasiun_id" id="stasiun_id" class="form-control" required>
                    <option value="" disabled selected hidden>Pilih stasiun</option>
                    @foreach ($stasiuns as $stasiun)
                        <option value="{{ $stasiun->id }}">{{ $stasiun->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="Tujuan" class="form-label">Tujuan:</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" placeholder="Masukkan nama Tujuan" required>
            </div>

            <div class="mb-3">
                <label for="harga" class="form-label">harga:</label>
                <input type="number" class="form-control @error('harga') is-invalid @enderror" name="harga" id="harga" value="{{ old('harga') }}" min="0" placeholder="Masukkan harga" required>
                @error('harga')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="tanggal" class="form-label">Tanggal:</label>
                <input type="text" name="tanggal" id="tanggal" class="form-control" value="{{ old('tanggal') }}" placeholder="Masukkan tanggal" required>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary w-100">Tambah Data</button>
            </div>
        </form>
    </div>
</body>
</html>
