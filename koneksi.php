<?php


$host = "localhost"; //hostnya
$user = "root"; //userhost
$pass = ""; //password untuk masuk
$db = "tenun_flores"; //database yang dituju


$koneksi =mysqli_connect("$host","$user","$pass","$db");
if(!$koneksi){echo"gagal";}
//untuk mengkoneksikan ke database sekaligus memberikan pesan jika database tidak terkoneksi..
?>