<?php
// Load file koneksi.php
include "koneksi.php";
if(isset($_POST) & !empty($_POST)){
    

// Ambil Data yang Dikirim dari Form
$id = $_POST['id_barang'];
$kd = $_POST['kode'];
$nm = $_POST['nama_barang'];
$hb = $_POST['harga_beli'];
$hj = $_POST['harga_jual'];
$tgl = $_POST['tanggal_masuk'];
$jb = $_POST['jumlah_barang'];

    $query = "INSERT INTO t_barang VALUES ('$id','$kd','$nm', '$hb','$hj','$jb','$tgl')";
  
    $sql = mysqli_query($koneksi, $query); 
  
  if($sql){ // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
   echo '<META HTTP-EQUIV="Refresh" Content="0; URL=tbarang.php">';
exit; // Redirect ke halaman index.php// Redirect ke halaman index.php
  }else{
    // Jika Gagal, Lakukan :
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database. ".mysqli_error($koneksi);
}
}
?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>
	<!-- BOOTSTRAP STYLES-->
    
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
            
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">GEON ADMIN</a> 
            </div>
  <div style="color: white; padding: 15px 50px 5px 50px; float: right; font-size: 16px;">Apotek Nugraha Farma &nbsp; 
      
  </div>
        </nav>   
           <!-- /. NAV TOP  -->
            <nav class="navbar-dark bg-primary navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				
                     <li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
					</li>
                     <li>
                        <a href="barang.php"><i class="fa fa-dashboard fa-3x"></i>Stok Barang</a>
                    </li>
                     
                    <li>
                        <a href="karyawan.php"><i class="fa fa-dashboard fa-3x"></i> Karyawan</a>
                    </li>
                   
                    
                
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="container" style="width:100%">
                    <h2>Data Barang</h2>
                    <hr>
                    <form role="form" method="POST">
                    <div class="row">
                        <div class="form-group">
                            <label for="id">NO:</label>
                            <input type="id_barang" class="form-control" name="id_barang" id="id_barang" placeholder="Enter No" style="width:50%" >
                        </div>
                        <div class="form-group">
                            <label for="nama_barang">Nama Barang:</label>
                            <input type="nama_barang" class="form-control" name="nama_barang" id="nama_barang" placeholder="Enter Nama Barang" style="width:50%">
                        </div>
                        <div class="form-group">
                            <label for="kode">Kode:</label>
                            <input type="kode" class="form-control" name="kode" id="kode" placeholder="Enter kode" style="width:50%">
                        </div>
                       
                        
                         <div class="form-group">
                            <label for="harga_beli">Harga beli:</label>
                            <input type="harga_beli" class="form-control" name="harga_beli" id="harga_beli" placeholder="Enter harga_beli" style="width:50%">
                        </div>
                        
                         <div class="form-group">
                            <label for="harga_jual">Harga Jual:</label>
                            <input type="harga_jual" class="form-control" name="harga_jual" id="harga_jual" placeholder="Enter Harga Jual" style="width:50%">
                        </div>
                        
                         <div class="form-group">
                            <label for="jumlah_barang">Jumlah Barang:</label>
                            <input type="jumlah_barang" class="form-control" name="jumlah_barang" id="jumlah_barang" placeholder="Enter Jumlah Barang" style="width:50%">
                        </div>

                        <div class="form-group">
                            <label for="tanggal_masuk">tanggal masuk:</label>
                            <input type="tanggal_masuk" class="form-control" name="tanggal_masuk" id="tanggal_masuk" placeholder="Enter tanggal masuk barang" style="width:50%">
                        </div>
                        
                        <br>
                        <button type="submit" class="btn btn-success">Tambah</button>
                        <a href="barang.php" class="btn btn-danger"> Batal</a>
                        </div>

                    </form>
                </div>

     <!-- /. ROW  -->           
            </div>
             <!-- /. PAGE INNER  -->
        </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
