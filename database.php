<?php
// Nama : NICO SALIM
// NIM : 223303030422
// Kelas : 3 Malam A
	class Database {
		public function koneksi() {
			$host = "localhost";
			$database = "uas_pbo";
			$username = "root";
			$password = "";

			$connect = new mysqli($host, $username, $password, $database);
			return $connect;
		}
	}
?>