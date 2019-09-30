<?php
include 'koneksi.php';
$id         = $_GET['id_karyawan'];
$sales  = mysqli_query($koneksi, "select * from t_karyawan where id_karyawan='$id'");
$row        = mysqli_fetch_array($sales);
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
                <a class="navbar-brand" href="index.html"> </a>
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
                    <h2>Data Karyawan</h2>
                    <hr>        
                    
                    <form method="post" action="ukaryawan.php">
                    <input type="hidden" value="<?php echo $row['id_karyawan'];?>" name="id_karyawan">
                    <div class="row">
                         <div class="form-group">
                            <label for="nama">NIK Karyawan:</label>
                            <input type="text" value="<?php echo $row['nik_karyawan'];?>" class="form-control" name="nik_karyawan" id="nama" placeholder="Enter NIK" style="width:50%">
                        </div>
                        <div class="form-group">
                            <label for="nama">Nama Karyawan:</label>
                            <input type="text" value="<?php echo $row['nama_karyawan'];?>" class="form-control" name="nama_karyawan" id="nama" placeholder="Enter Nama" style="width:50%">
                        </div>
                        <div class="form-group">
                            <label for="nama">Alamat:</label>
                            <input type="text" value="<?php echo $row['alamat_karyawan'];?>" class="form-control" name="alamat_karyawan" id="almt" placeholder="Enter Alamat" style="width:50%">
                        </div>
                        <div class="form-group">
                            <label for="kelamin">Jenis Kelamin:</label>
                            <input type="text" value="<?php echo $row['jenis_kelamin'];?>" class="form-control" name="jenis_kelamin" id="kelamin" placeholder="Enter Jenis Kelamin" style="width:50%">
                        </div>
                        
                        <br>
                        <button type="submit" class="btn btn-success" value="simpan">Simpan</button>
                        <a href="karyawan.php" class="btn btn-danger"> Kembali</a>
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