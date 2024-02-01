<?php
// Nama : AURELIO LUCIO LIE
// NIM : 223303030427
// Kelas : 3 Malam A

include 'proses.php';
if (isset($_POST['simpan'])) {
    $id = isset($_POST['id']) ? $_POST['id'] : null;
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $nim = $_POST['nim'];
    $kehadiran = $_POST['kehadiran'];
    $tugas = $_POST['tugas'];
    $uts = $_POST['uts'];
    $uas = $_POST['uas'];
    $nilai = $_POST['nilai'];
    $huruf = $_POST['huruf'];

    $proses = new Proses();
    $proses->ubah_data($id, $nama, $kelas, $nim, $kehadiran, $tugas, $uts, $uas, $nilai, $huruf);
    header('location:index.php');
}
?>