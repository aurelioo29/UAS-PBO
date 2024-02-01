<?php
// Nama : NICO SALIM
// NIM : 223303030422
// Kelas : 3 Malam A

$id = isset($_GET['id']) ? $_GET['id'] : die('Error: Record ID not found.');

include 'proses.php';
$proses = new Proses();
$data = $proses->ubah($id);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $nim = $_POST['nim'];
    $kehadiran = $_POST['kehadiran'];
    $tugas = $_POST['tugas'];
    $uts = $_POST['uts'];
    $uas = $_POST['uas'];
    $nilai = $_POST['nilai'];
    $huruf = $_POST['huruf'];

    $proses->ubah_data($id, $nama, $kelas, $nim, $kehadiran, $tugas, $uts, $uas, $nilai, $huruf);
    header('location:index.php');
}
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
        <h1>Form Pengubahan Data Mahasiswa</h1>
        <form action="update.php?id=<?php echo $data->id; ?>" method="post">
            <input name="id" type="hidden" class="form-control" value="<?php echo $data->id ?>">
            <div class="mb-3">
                <label for="exampleInputText1" class="form-label">Nama Mahasiswa</label>
                <input name="nama" type="text" class="form-control" id="exampleInputText1" value="<?php echo $data->nama ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputText1" class="form-label">Kelas Mahasiswa</label>
                <input name="kelas" type="text" class="form-control" id="exampleInputText1" value="<?php echo $data->kelas ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputText1" class="form-label">NIM</label>
                <input name="nim" type="text" class="form-control" id="exampleInputText1" value="<?php echo $data->nim ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputText1" class="form-label">Kehadiran</label>
                <input name="kehadiran" type="text" class="form-control" id="exampleInputText1" value="<?php echo $data->kehadiran ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputText1" class="form-label">Tugas</label>
                <input name="tugas" type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $data->tugas ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputText1" class="form-label">UTS</label>
                <input name="uts" type="text" class="form-control" id="exampleInputText1" value="<?php echo $data->uts ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputText1" class="form-label">UAS</label>
                <input name="uas" type="text" class="form-control" id="exampleInputText1" value="<?php echo $data->uas ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputText1" class="form-label">Nilai</label>
                <input name="nilai" type="text" class="form-control" id="exampleInputText1" value="<?php echo $data->nilai ?>">
            </div>
            <div class="mb-3">
                <label for="exampleInputText1" class="form-label">Huruf</label>
                <input name="huruf" type="text" class="form-control" id="exampleInputText1" value="<?php echo $data->huruf ?>">
            </div>
            <button name="simpan" type="submit" class="btn btn-primary">Simpan</button>
        </form>
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