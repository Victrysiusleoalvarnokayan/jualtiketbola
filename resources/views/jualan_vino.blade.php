<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Barang</title>
 <script src="{{ asset('styles/tailwindcss3.4.1.js') }}"></script>
   

  

</head>
<body>
    <h2 class="text-2xl font-bold text-center">Daftar Barang</h2>

    <table class="table-auto w-full border-collapse border border-gray-300">
        <thead>
            <tr class="bg-gray-100">
                <th class="px-4 py-2 border">ID</th>
                <th class="px-4 py-2 border">Nama Barang</th>
                <th class="px-4 py-2 border">Harga</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $dataku)
                <tr>
                <td class="px-4 py-2 border">{{ $dataku['id'] }}</td>
                <td class="px-4 py-2 border">{{ $dataku['nama'] }}</td>
                <td class="px-4 py-2 border">Rp {{ number_format($dataku['harga'], 0, ',', '.') }}</td>

                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Menambahkan JavaScript Tailwind (lokal) -->
    <script src="{{ asset('styles/tailwindcss3.4.1.js') }}"></script>
</body>
</html>
