<?php
include 'koneksi.php';
$id         = $_GET['id_barang'];
$barang  = mysqli_query($koneksi, "SELECT * FROM t_barang WHERE id_barang='$id'");
$row        = mysqli_fetch_array($barang);
// membuat data jurusan menjadi dinamis dalam bentuk array
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
  <div style="color: white; padding: 15px 50px 5px 50px; float: right; font-size: 16px;">Apotek Nugraha Farma  &nbsp; 
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
                        <a href="sales.php"><i class="fa fa-dashboard fa-3x"></i> Karyawan</a>
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
                  
                    <form method="post" action="ubarang.php">
                    <input type="hidden" value="<?php echo $row['id_barang'];?>" name="id_barang">
                    <div class="row">
                        <div class="form-group">
                            <label for="id">ID Barang:</label>
                            <input type="text" value="<?php echo $row['id_barang'];?>" class="form-control" name="id_barang" id="ID" placeholder="Enter ID" style="width:50%">
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama Barang:</label>
                            <input type="text" value="<?php echo $row['nama_barang'];?>" class="form-control" name="nama_barang" id="Nama_Barang" placeholder="Enter Nama Barang" style="width:50%">
                        </div>

                        <div class="form-group">
                            <label for="kode">Kode:</label>
                            <input type="text" value="<?php echo $row['kode'];?>" class="form-control" name="kode" id="Kode" placeholder="Kode" style="width:50%">
                        </div>                 
                        <div class="form-group">
                            <label for="harga">Harga Beli:</label>
                            <input type="text" value="<?php echo $row['harga_beli'];?>" class="form-control" name="harga_beli" id="Harga_Beli" placeholder="Enter Harga Beli" style="width:50%">
                        </div>
                        
                        <div class="form-group">
                            <label for="harga">Harga Jual:</label>
                            <input type="text" value="<?php echo $row['harga_jual'];?>" class="form-control" name="harga_jual" id="Harga_Jual" placeholder="Harga Jual" style="width:50%">
                        </div>
                        
                        <div class="form-group">
                            <label for="jumlah">Jumlah Barang:</label>
                            <input type="text" value="<?php echo $row['jumlah_barang'];?>" class="form-control" name="jumlah_barang" id="Jumlah_barang" placeholder="Jumlah Barang" style="width:50%">
                        </div>

                        <div class="form-group">
                            <label for="jumlah">Tanggal Masuk:</label>
                            <input type="text" value="<?php echo $row['tanggal_masuk'];?>" class="form-control" name="tanggal_masuk" id="tanggal_masuk" placeholder="Tanggal Masuk Barang" style="width:50%">
                        </div>

                        <br>
                        <button type="submit" class="btn btn-success" value="simpan">Simpan</button>
                        <a href="barang.php" class="btn btn-danger"> Kembali</a>
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