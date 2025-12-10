<div class="container">

    <h3 class="mb-4">Report Produksi Komoditas</h3>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>Tahun</th>
                <th>Komoditas</th>
                <th>January</th>
                <th>February</th>
                <th>March</th>
                <th>April</th>
                <th>May</th>
                <th>June</th>
                <th>July</th>
                <th>August</th>
                <th>September</th>
                <th>October</th>
                <th>November</th>
                <th>December</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($report as $row)
                <tr>
                    <td>{{ $row['tahun'] }}</td>
                    <td>{{ $row['komoditas'] }}</td>

                    @for ($i = 1; $i <= 12; $i++)
                        <td>{{ number_format($row["bulan_$i"], 0, ',', ',') }}</td>
                    @endfor
                </tr>
            @endforeach
        </tbody>
    </table>

</div>
