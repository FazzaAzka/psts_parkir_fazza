<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Parkir</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Kendaraan</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container">
    <h1>Data Parkir Raisya</h1>
    <a href="view_tambah.php" class="btn btn-primary">Tambah Data Parkir Baru</a>
    <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">no_tempat_parkir</th>
      <th scope="col">kapasitas</th>
      <th scope="col">luas</th>
      <th scope="col">tarif_parkir</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">22</th>
      <td>luas</td>
      <td>100m</td>
      <td>3000</td>
      <td>
        <a href="" class="btn btn-warning">Edit</a>
        <a href="" class="btn btn-danger">Hapus</a>
      </td>
    </tr>
  </tbody>
</table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"></script>


</body>
</html>