<?php
// Load file koneksi.php
include "koneksi.php";
if(isset($_POST) & !empty($_POST)){
    

// Ambil Data yang Dikirim dari Form
$id = $_POST['id'];
$nm = $_POST['nama'];
$al = $_POST['almt'];
$jk = $_POST['kelamin'];

    $query = "INSERT INTO t_karyawan VALUES ('','$id', '$nm','$al','$jk')";
  
    $sql = mysqli_query($koneksi, $query); 
  
  if($sql){ // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
   echo '<META HTTP-EQUIV="Refresh" Content="0; URL=tkaryawan.php">';
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
                <a class="navbar-brand" href="index.html"></a> 
            </div>
  <div style="color: white; padding: 15px 50px 5px 50px; float: right; font-size: 16px;">Apotek Nugraha Farma   &nbsp; 

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
                        <a href="barang.php"><i class="fa fa-dashboard fa-3x"></i> Barang</a>
                    </li>
                     <li>
                        <a href="konsumen.php"><i class="fa fa-dashboard fa-3x"></i> Konsumen</a>
                    </li>
                    <li>
                        <a href="karyawan.php"><i class="fa fa-dashboard fa-3x"></i> Karyawan</a>
                    </li>
                    
                    <li>
                        <a href="pembelian.php"><i class="fa fa-dashboard fa-3x"></i> Pembelian</a>
                    </li>
                    <li>
                        <a href="penjualan.php"><i class="fa fa-dashboard fa-3x"></i> Penjualan</a>
                    </li>
                    
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="container" style="width:100%">
                    <h2>Data Karyawan</h2>
                    <hr>
                    <form role="form" method="POST">
                    <div class="row">
                        <div class="form-group">
                            <label for="id">NO:</label>
                            <input type="id" class="form-control" name="id" id="id" placeholder="Enter No" style="width:50%" >
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama Karyawan:</label>
                            <input type="nama" class="form-control" name="nama" id="nama" placeholder="Enter Nama" style="width:50%">
                        </div>
                        <div class="form-group">
                            <label for="nama">Alamat:</label>
                            <input type="almt" class="form-control" name="almt" id="almt" placeholder="Enter Alamat" style="width:50%">
                        </div>
                        <div class="form-group">
                            <label for="kelamin">Jenis Kelamin:</label>
                            <input type="kelamin" class="form-control" name="kelamin" id="kelamin" placeholder="Enter Jenis Kelamin" style="width:50%">
                        </div>
                        
                        <br>
                        <button type="submit" class="btn btn-success">Tambah</button>
                        <a href="karyawan.php" class="btn btn-danger"> Batal</a>
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
