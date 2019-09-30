<?php
  session_start();
   include"koneksi.php";

if(isset($_POST) & !empty($_POST)){
    $u=$_POST['username'];
    $p=$_POST['password'];
       
    $res=mysqli_query($koneksi,"SELECT * FROM t_admin WHERE username='$u' AND password='$p'");
//$data=mysqli_fetch_array($result);
//echo $data['nama_admin']; 
    $count = mysqli_num_rows($res);

    if($count == 1){
        $_SESSION['username'] = $u;
        header('location: karyawan.php');
    }else{
        $fmsg = "User does not exist";
        echo $fmsg;
    }
    
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LOGIN |Apotek Nugraha Farma </title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body>
    <div class="container">
        <div class="row text-center ">
            <div class="col-md-12">
                <br /><br />
                <h2> Apotek Nugraha Farma </h2>
               
                <h3> Selamat Datang</h3>
                 <br />
            </div>
        </div>
         <div class="row ">
               
                  <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                        <strong>   Masukan Username dan Password </strong>  
                            </div>
                            <div class="panel-body">
                                <form role="form" method="POST" >
                                       <br />
                                    
                                    <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                            <input type="text" name="username" id="username" class="form-control" placeholder="Username " />
                                    </div>
                                    <div class="form-group input-group">
                                            <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                            <input type="password" name="password" id="password" class="form-control"  placeholder="Password" />
                                    </div>
                                    <center><button class="btn btn-primary" type="submit">Login</button></center>
                                </form>
                                <div class="collapse navbar-collapse" id="navbarResponsive">

            
                                <hr/>
                                <center>Jl.Apartemen Stikom Yos Sudarso No 99 Purwokerto selatan</center>
                            </div>
                        </div>
                   </div>
           </div>
    </div>




     <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
   
</body>
</html>
