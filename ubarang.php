<?php
include 'koneksi.php';
// menyimpan data kedalam variabel
$id_barang       = $_POST['id_barang'];
$kode            = $_POST['kode'];
$nama_barang     = $_POST['nama_barang'];
$harga_beli      = $_POST['harga_beli'];
$harga_jual      = $_POST['harga_jual'];
$jumlah_barang   = $_POST['jumlah_barang'];

// query SQL untuk insert data  id_barang='$id_barang'
$query=mysqli_query($koneksi,"UPDATE t_barang SET nama_barang='$nama_barang', kode='$kode',harga_beli='$harga_beli',harga_jual='$harga_jual',jumlah_barang='$jumlah_barang' where id_barang='$id_barang'");

if ($query) 
{
 // mengalihkan ke halaman index.php
    header("location:barang.php");   
}
else
{
    echo "elek ".mysqli_error($koneksi);
}
?>