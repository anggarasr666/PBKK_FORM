<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Pengisian Formulir</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>


<div class="alert alert-primary" role="alert" id="myAlert">
  A simple primary alert—check it out!
</div>
    <h1>Hasil Pengisian Formulir Pinjaman Online</h1>
    
    <h2>Data yang Diisi:</h2>
    <ul>

        @foreach ($datas as $data)
            <p>Data Peminjam {{ $data->id }}</p>
            <li><strong>Nama:</strong> {{$data['nama']}}</li>
            <li><strong>Nomor Telepon:</strong> {{ $data['phone'] }}</li>
            <li><strong>Alamat:</strong> {{ $data['alamat'] }}</li>
            <li><strong>Tenor:</strong> {{ $data['tenor'] }} bulan</li>
            <li><strong>Nominal Uang:</strong> ${{ $data['nominal'] }}</li>
            <li><strong>Gambar</strong><img src="storage/images/{{$data['gambar']}}" /></li>
        @endforeach

    </ul>
    <!-- <a href="/db-form">Kembali ke Formulir</a> -->
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="/js/timerFlash.js"></script>
</html>
