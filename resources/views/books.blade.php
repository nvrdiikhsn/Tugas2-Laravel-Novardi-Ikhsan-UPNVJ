<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang</title>
</head>
<body>

    <h1>Selamat Datang di Halaman Buku</h1>
    <p>Ini adalah halaman yang menampilkan daftar buku yang tersedia.</p>

    @foreach ($books as $book)
    <ul>
        <li>{{ $book['title'] }}</li>
        <li>{{ $book['description'] }}</li>
        <li>Rp {{ number_format($book['price'], 0, ',', '.') }}</li>
        <li>Stok: {{ $book['stock'] }}</li>
    </ul>
        
    @endforeach
    
</body>
</html>