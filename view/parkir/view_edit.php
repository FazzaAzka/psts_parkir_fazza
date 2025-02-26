<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Tambah Parkir Baru</title>
</head>
<body>
    <div class="container">
        <h1>Tambah Parkir Baru</h1>
        <?php 
             include '../../config/koneksi.php';
             $id=$_GET['id'];
             $query=mysqli_query($conn, "SELECT * FROM siswa WHERE id='$id'");
             $result=mysqli_fetch_array($query);

        ?>
        
        <form action="proses_tambah.php" method="POST">
            <div class="mb-3">
                <label for="exampleInputEmaill" class="form-label">no_tempat_parkir</label>
                <input type="text" class="form-control" name="id" id="exampleInputEmaill">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">kapasitas</label>
                <input type="text" class="form-control" name="nis" id="exampleInputEPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">luas</label>
                <input type="text" class="form-control" name="nama" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">tarif_parkir</label>
                <input type="text" class="form-control" name="id_kelas" id="exampleInputPassword1">
            </div>
            <button type="sumbit" class="btn btn-primary">Sumbit</button>
        </form>
    </div>
</body>
</html>

ID Parkir</th>
      <th scope="col">Lokasi</th>
      <th scope="col">Kendaraan</th>
      <th scope="col">Harga</th>
      <th scope="col">Blok Parkir</th>