    <!DOCTYPE html>
    <html xmlns="http://www.w3.org/1999/xhtml">
        <!-- TABLE STYLES-->
        <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
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
          <a href="login.php" class="btn btn-danger square-btn-adjust">Logout</a> 
                <a class="nav-link" href="login.php"></a>
                </li>
                               

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
                            <a href="karyawan.php"><i class="fa fa-dashboard fa-3x"></i>Karyawan</a>
                        </li>
                        
                        
                    </ul>

                </div>

            </nav>  
            <!-- /. NAV SIDE  -->
            <div id="page-wrapper" >
                <div id="page-inner">
                <h2>Data Identitas Karyawan</h2>
                    <hr>
            <div class="container">
                <div class="row">
                    <div class="col-md-2"><a href="tkaryawan.php" class="btn btn-primary"> Tambah Karyawan</a></div>

                    <div class="col-md-6"></div>

                    <div class="col-md-4">
                        Jenis Kelamin: 
                        <select name="suplier" aria-controls="dataTables-example" class=""  onchange="location = this.value;">
                            <option value="10">Chose one</option>
                            <?php
                            include"koneksi.php";
                            $q=mysqli_query($koneksi,"SELECT * FROM t_karyawan");
                            while($data=mysqli_fetch_array($q)){ ?>
                            <option value="karyawan.php?gender=<?php echo $data['jenis_kelamin']; ?>">
                            <a href="karyawan.php?gender=<?php echo $data['jenis_kelamin']; ?>"><?php echo $data['jenis_kelamin']; ?></a>
                            </option>
                            <?php }?>
                        </select> 
                    </div>
                </div>
            </div>
            <br>
                  <div class="row">
                    <div class="col-md-12">
                        <!-- Advanced Tables -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                 Table Karyawan
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>NIK</th>
                                                <th>Nama Karyawan</th>
                                                <th>Alamat</th>
                                                <th>Jenis Kelamin</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>

                                        <tbody>
    <?php
                include"koneksi.php";



                    if(empty($_GET['gender'])) {     $qq=mysqli_query($koneksi,"SELECT * FROM t_karyawan"); }  
                                            else{ 
                                                 $jk=$_GET['gender'];
                                                $qq=mysqli_query($koneksi,"SELECT * FROM t_karyawan WHERE jenis_kelamin='$jk'");};







                while($dataa=mysqli_fetch_array($qq))  {?>

                                            <tr>
                                                <td><?php echo $dataa['id_karyawan']; ?></td>                                         
                                                <td><?php echo $dataa['nik_karyawan']; ?></td>
                                                <td><?php echo $dataa['nama_karyawan']; ?></td>
                                                <td><?php echo $dataa['alamat_karyawan']; ?></td>
                                                <td><?php echo $dataa['jenis_kelamin']; ?></td>
                                                <td>
                                                    <a href="ekaryawan.php?id_karyawan=<?=$dataa['id_karyawan']?>" class="btn btn-success"> Edit</a> 
                                                    <a href='hkaryawan.php?id_karyawan=<?=$dataa['id_karyawan']?>' class="btn btn-danger"> Delete</a>

                                                </td>
                                            </tr>

               <?php }?> 

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!--End Advanced Tables -->
                    </div>
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
         <!-- DATA TABLE SCRIPTS -->
        <script src="assets/js/dataTables/jquery.dataTables.js"></script>
        <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
            <script>
                $(document).ready(function () {
                    $('#dataTables-example').dataTable();
                });
        </script>
          <!-- CUSTOM SCRIPTS -->
        <script src="assets/js/custom.js"></script>


    </body>
    </html>
