<?php
// Nama : AURELIO LUCIO LIE
// NIM : 223303030427
// Kelas : 3 Malam A
include 'database.php';

class Proses extends Database {
    public $conn;

    public function __construct(){
        $this->conn = $this->koneksi();
    }

    public function tampil_data(){
        $sql = "SELECT * FROM mahasiswa";
        $result = $this->conn->query($sql);

        while($obj = $result->fetch_object()) {
            $baris[] = $obj;
        }

        if (!empty($baris)) {
            return $baris;
        }
    }

    public function tambah_data($nama, $kelas, $nim, $kehadiran, $tugas, $uts, $uas, $nilai, $huruf){
        $sql = "INSERT INTO mahasiswa (nama, kelas, nim, kehadiran, tugas, uts, uas, nilai, huruf) VALUES ('$nama', '$kelas', '$nim', '$kehadiran', '$tugas', '$uts', '$uas', '$nilai', '$huruf')";
        $this->conn->query($sql);
    }

    public function ubah($id) {
        $sql = "SELECT * FROM mahasiswa WHERE id='$id'";
        $result = $this->conn->query($sql);

        while ($obj = $result->fetch_object()) {
            $baris = $obj;
        }

        return $baris;
    }

	public function ubah_data($id, $nama, $kelas, $nim, $kehadiran, $tugas, $uts, $uas, $nilai, $huruf) {
		$sql = "UPDATE mahasiswa SET nama='$nama', kelas='$kelas', nim='$nim', kehadiran='$kehadiran', tugas='$tugas', uts='$uts', uas='$uas', nilai='$nilai', huruf='$huruf' WHERE id='$id'";
		$this->conn->query($sql);
	}


    public function hapus($id) {
        $sql = "DELETE FROM mahasiswa WHERE id='$id'";
        $this->conn->query($sql);
    }
}
?>