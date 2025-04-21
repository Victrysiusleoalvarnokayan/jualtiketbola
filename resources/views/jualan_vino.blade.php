<!DOCTYPE html>
<html>
<head>
    <title>Daftar Barang</title>
</head>
<body>
    <h2>Daftar Barang</h2>

    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama Barang</th>
                <th>Harga</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $dataku)
                <tr>
                    <td>{{ $dataku['id'] }}</td>
                    <td>{{ $dataku['nama'] }}</td>
                    <td>Rp {{ number_format($dataku['harga'], 0, ',', '.') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
