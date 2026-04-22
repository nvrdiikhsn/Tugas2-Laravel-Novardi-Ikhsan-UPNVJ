<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Authors</title>
</head>
<body>
    
    <h1>Selamat Datang di Halaman Penulis</h1>
    <p>Ini adalah halaman yang menampilkan daftar penulis yang tersedia.</p>

    @foreach ($authors as $author)
    <ul>
        <li>{{ $author['id'] }}</li>
        <li>{{ $author['name'] }}</li>
        <li>{{ $author['bio'] }}</li>
    </ul>
    @endforeach

</body>
</html>