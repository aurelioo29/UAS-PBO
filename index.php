<?php
// Nama : AURELIO LUCIO LIE
// NIM : 223303030427
// Kelas : 3 Malam A
include 'proses.php';
$proses = new Proses();
$no = 1;
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Crud dengan PHP PBO</title>
  </head>
  <body>
    <div class="container">
      <h1>Daftar Mahasiswa</h1>
      <br>
      <a href="create.php" type="button" class="btn btn-primary">Tambah Mahasiswa</a>
      <table class="table">
  <thead>
    <tr>
      <th scope="col">No#</th>
      <th scope="col">Nama</th>
      <th scope="col">Kelas</th>
      <th scope="col">NIM</th>
      <th scope="col">Kehadiran</th>
      <th scope="col">Tugas</th>
      <th scope="col">UTS</th>
      <th scope="col">UAS</th>
      <th scope="col">Nilai</th>
      <th scope="col">Huruf</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <?php
      $hasil = $proses->tampil_data();
      if(!empty($hasil)){
        foreach($hasil as $data):
    ?>
    <tr>
      <th scope="row"><?=$no++ ?></th>
      <td><?=$data->nama ?></td>
      <td><?=$data->kelas  ?></td>
      <td><?=$data->nim  ?></td>
      <td><?=$data->kehadiran  ?></td>
      <td><?=$data->tugas  ?></td>
      <td><?=$data->uts  ?></td>
      <td><?=$data->uas  ?></td>
      <td><?=$data->nilai  ?></td>
      <td><?=$data->huruf  ?></td>
      <td>
        <a href="update.php?id=<?=$data->id ?>" type="button" class="btn btn-primary">Ubah</a>
        <a href="hapus.php?id=<?=$data->id ?>" type="button" class="btn btn-danger">Hapus</a>
      </td>
    </tr>
      <?php endforeach;
        } else {
        ?>
          <tr>
             <td>Belum ada data yang dimasukkan!</td>
          </tr>
            <?php
              }
                ?>
  </tbody>
</table>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>