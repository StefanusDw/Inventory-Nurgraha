<?php
include 'koneksi.php';
// menyimpan data kedalam variabel
$id_karyawan       = $_POST['id_karyawan'];
$niK            = $_POST['nik_karyawan'];
$nama           = $_POST['nama_karyawan'];
$alamat         = $_POST['alamat_karyawan'];
$jenis_kelamin  = $_POST['jenis_kelamin'];

// query SQL untuk insert data  id_sales='$id_sales'
$query=mysqli_query($koneksi,"UPDATE t_karyawan SET nama_karyawan='$nama', nik_karyawan='$niK',alamat_karyawan='$alamat',jenis_kelamin='$jenis_kelamin' where id_karyawan='$id_karyawan'");

if ($query) 
{
 // mengalihkan ke halaman index.php
    header("location:karyawan.php");   
}
else
{
    echo "elek ".mysqli_error($koneksi);
}
?>