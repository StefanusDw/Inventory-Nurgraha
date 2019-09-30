<?php
include "koneksi.php";

// Ambil data NIS yang dikirim oleh index.php melalui URL
$b = $_GET['id_barang'];

// Query untuk menampilkan data siswa berdasarkan NIS yang dikirim
$query = "SELECT * FROM t_barang WHERE ='".$b."'";
$sql = mysqli_query($koneksi, $query); // Eksekusi/Jalankan query dari variabel $query
$data = mysqli_fetch_array($sql); // Ambil data dari hasil eksekusi $sql

// Query untuk menghapus data siswa berdasarkan NIS yang dikirim
$query2 = "DELETE FROM t_barang WHERE id_barang='".$b."'";
$sql2 = mysqli_query($koneksi, $query2); // Eksekusi/Jalankan query dari variabel $query

if($sql2){ // Cek jika proses simpan ke database sukses atau tidak
	// Jika Sukses, Lakukan :
	header("location: barang.php"); // Redirect ke halaman index.php
}else{
	// Jika Gagal, Lakukan :
	echo "Data gagal dihapus. <a href='barang.php'>Kembali</a>";
}
?>