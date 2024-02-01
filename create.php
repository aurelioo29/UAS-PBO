<?php
// Nama : NICO SALIM
// NIM : 223303030422
// Kelas : 3 Malam A
include 'proses.php';

if (isset($_POST['simpan'])) {
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
    $proses->tambah_data($nama, $kelas, $nim, $kehadiran, $tugas, $uts, $uas, $nilai, $huruf);

    // Redirect to index.php after saving data
    header('location: index.php');
    exit(); // Ensure script stops execution after redirection
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Penambahan Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Add your Bootstrap CSS link here -->
    <script>
        function calculateGrade() {
            // Get the values of the input fields
            var kehadiran = parseFloat(document.getElementById("kehadiran").value);
            var tugas = parseFloat(document.getElementById("tugas").value);
            var uts = parseFloat(document.getElementById("uts").value);
            var uas = parseFloat(document.getElementById("uas").value);

            // Calculate the total score
            var totalScore = kehadiran * 0.1 + tugas * 0.3 + uts * 0.35 + uas * 0.25;

            // Set the value of the "nilai" field
            document.getElementById("nilai").value = totalScore.toFixed(2);

            // Calculate the letter grade based on the total score
            var letterGrade;
            if (totalScore >= 85) {
                letterGrade = "A";
            } else if (totalScore >= 70) {
                letterGrade = "B";
            } else if (totalScore >= 55) {
                letterGrade = "C";
            } else if (totalScore >= 40) {
                letterGrade = "D";
            } else {
                letterGrade = "E";
            }

            // Set the value of the "huruf" field
            document.getElementById("huruf").value = letterGrade;
        }

        // Call the calculateGrade function when the page loads
        window.onload = function() {
            calculateGrade();
        };

        // Call the calculateGrade function when any of the input fields change
        document.getElementById("kehadiran").onchange = calculateGrade;
        document.getElementById("tugas").onchange = calculateGrade;
        document.getElementById("uts").onchange = calculateGrade;
        document.getElementById("uas").onchange = calculateGrade;
    </script>
</head>
<body>
    <div class="container">
        <h1 class="mt-5 mb-4">Form Penambahan Mahasiswa</h1>
        <form action="create.php" method="post">
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="nama" class="form-label">Nama Mahasiswa</label>
                    <input name="nama" type="text" class="form-control" id="nama">
                </div>
                <div class="col-md-6">
                    <label for="kelas" class="form-label">Kelas Mahasiswa</label>
                    <input name="kelas" type="text" class="form-control" id="kelas">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="nim" class="form-label">NIM</label>
                    <input name="nim" type="text" class="form-control" id="nim">
                </div>
                <div class="col-md-6">
                    <label for="kehadiran" class="form-label">Kehadiran</label>
                    <input name="kehadiran" type="number" step="0.01" class="form-control" id="kehadiran" oninput="calculateGrade()">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="tugas" class="form-label">Tugas</label>
                    <input name="tugas" type="number" step="0.01" class="form-control" id="tugas" oninput="calculateGrade()">
                </div>
                <div class="col-md-6">
                    <label for="uts" class="form-label">UTS</label>
                    <input name="uts" type="number" step="0.01" class="form-control" id="uts" oninput="calculateGrade()">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="uas" class="form-label">UAS</label>
                    <input name="uas" type="number" step="0.01" class="form-control" id="uas" oninput="calculateGrade()">
                </div>
                <div class="col-md-6">
                    <label for="nilai" class="form-label">Nilai</label>
                    <input name="nilai" type="text" class="form-control" id="nilai" readonly>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="huruf" class="form-label">Huruf</label>
                    <input name="huruf" type="text" class="form-control" id="huruf" readonly>
                </div>
            </div>
            <button name="simpan" type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
    <!-- Add your Bootstrap JS and other scripts here -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>