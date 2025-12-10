<!DOCTYPE html>
<html>

<head>
    <title>Edit Komoditas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="p-4">

    <div class="container">
        <h2>Edit Komoditas</h2>

        <form action="{{ route('komoditas.update', $item->id) }}" method="POST">
            @csrf @method('PUT')

            <div class="mb-2">
                <label>ID Produksi</label>
                <input type="number" name="id_produksi" value="{{ $item->id_produksi }}" class="form-control">
            </div>

            <div class="mb-2">
                <label>Tanggal</label>
                <input type="date" name="tanggal_type" value="{{ $item->tanggal_type }}" class="form-control">
            </div>

            <div class="mb-2">
                <label>Kode Komoditas</label>
                <input type="text" name="t_komoditas_kode" value="{{ $item->t_komoditas_kode }}"
                    class="form-control">
            </div>

            <div class="mb-2">
                <label>Nominal Produksi</label>
                <input type="number" name="produksi" value="{{ $item->produksi }}" class="form-control">
            </div>

            <button class="btn btn-success mt-3">Update</button>
            <a href="{{ route('komoditas.index') }}" class="btn btn-secondary mt-3">Kembali</a>
        </form>
    </div>

</body>

</html>
