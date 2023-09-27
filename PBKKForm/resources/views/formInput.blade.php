<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<div class="alert alert-light" role="alert">
  Form Peminjaman Online Sepuluh Nopember
</div>
<form action="/db-form" method="POST" enctype="multipart/form-data">
    @csrf
  <div class="mb-3">
    <label for="exampleInputname1" class="form-label">name</label>
    <input name="nama" type="text" class="form-control" id="exampleInputname1" aria-describedby="nameHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputphone1" class="form-label">phone</label>
    <input name='phone' type="text" class="form-control" id="exampleInputphone1">
  </div>
  <div class="mb-3">
    <label for="exampleInputalamat1" class="form-label">alamat</label>
    <input name='alamat' type="text" class="form-control" id="exampleInputalamat1">
  </div>
  <div class="mb-3">
    <label for="exampleInputtenor1" class="form-label">tenor</label>
    <div class="input-group">
    <input name='tenor' type="number" class="form-control" id="exampleInputnominal1" step="1.00" min="1" max="24">
    </div>
    <span class="form-text text-muted">Dalam kurun per bulan</span>
  </div>
  <div class="mb-3">
    <label for="exampleInputnominal1" class="form-label">Nominal Uang</label>
    <input name='nominal' type="number" class="form-control" id="exampleInputnominal1" step="0.01" min="2.50" max="99.99">
  </div>
  <div class="mb-3">
    <label for="exampleInputgambar1" class="form-label">gambar</label>
    <input name='gambar' type="file" class="form-control" id="exampleInputgambar1">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>