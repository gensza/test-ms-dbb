<!DOCTYPE html>
<html>

<head>
    <title>Tambah Komoditas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="p-4">

    <div class="container">
        <h2>Tambah Komoditas</h2>

        <form action="{{ route('komoditas.store') }}" method="POST">
            @csrf

            <div class="mb-2">
                <label>ID Produksi</label>
                <input type="number" name="id_produksi" class="form-control">
            </div>

            <div class="mb-2">
                <label>Tanggal</label>
                <input type="date" name="tanggal_type" class="form-control">
            </div>

            <div class="mb-2">
                <label>Kode Komoditas</label>
                <input type="text" name="t_komoditas_kode" class="form-control">
            </div>

            <div class="mb-2">
                <label>Nominal Produksi</label>
                <input type="number" name="produksi" class="form-control">
            </div>

            <button class="btn btn-success mt-3">Simpan</button>
            <a href="{{ route('komoditas.index') }}" class="btn btn-secondary mt-3">Kembali</a>
        </form>
    </div>

</body>

</html>
