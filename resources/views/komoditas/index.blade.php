<!DOCTYPE html>
<html>

<head>
    <title>Data Komoditas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="p-4">

    <div class="container">
        <h2>Data Komoditas</h2>

        <a href="{{ route('komoditas.create') }}" class="btn btn-primary mb-3">Tambah Data</a>

        <a href="{{ route('reports.index') }}" class="btn btn-primary mb-3">Reports</a>


        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>ID Produksi</th>
                    <th>Tanggal</th>
                    <th>Kode</th>
                    <th>Produksi</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $d)
                    <tr>
                        <td>{{ $d->id }}</td>
                        <td>{{ $d->id_produksi }}</td>
                        <td>{{ $d->tanggal_type }}</td>
                        <td>{{ $d->t_komoditas_kode }}</td>
                        <td>{{ number_format($d->produksi) }}</td>
                        <td>
                            <a class="btn btn-warning btn-sm" href="{{ route('komoditas.edit', $d->id) }}">Edit</a>
                            <form action="{{ route('komoditas.destroy', $d->id) }}" method="POST" class="d-inline">
                                @csrf @method('DELETE')
                                <button onclick="return confirm('Yakin hapus?')"
                                    class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>

</html>
