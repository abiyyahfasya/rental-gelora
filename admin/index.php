<?php
session_start();
//koneksi ke database
$koneksi = new mysqli("localhost","root","","rental gelora motor");


if (!isset($_SESSION['admin']))
{
    echo "<script>alert('Anda Harus Login');</script>";
    echo "<script>location='Login.php';</script>";
    header('location:login.php');
    exit();
}


?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Binary Admin</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
                <a class="navbar-brand" href="index.html">Gelora Motor</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;">Gelora Rental Motor &nbsp; <a href ="" class= "btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
					</li>
				
					
                    <li><a href="index.php"><i class="fa fa-home"></i> Admin</a></li>
                    <li><a href="index.php?halaman=kategori"><i class="fa fa-cube"></i> Kategori</a></li>
                    <li><a href="index.php?halaman=produk"><i class="fa fa-motorcycle"></i> Motor</a></li>
                    <li><a href="index.php?halaman=pembelian"><i class="fa fa-file"></i> Reservasi</a></li>
                    <li><a href="index.php?halaman=laporan_pembelian"><i class="fa fa-file"></i> Laporan</a></li>
                    <li><a href="index.php?halaman=pelanggan"><i class="fa fa-user"></i> Member</a></li>
                    <li><a href="index.php?halaman=logout"><i class="fa fa-sign-out"></i> Logout</a></li>

                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <?php
                if (isset($_GET['halaman']))
                {
                    if($_GET['halaman']=="produk")
                    {
                        include 'mobil.php';
                    }
                    elseif ($_GET['halaman']=="pembelian")
                    {
                        include 'reservasi.php';
                    }
                    elseif ($_GET['halaman']=="tambahpembelian")
                    {
                        include 'tambahreservasi.php';
                    }
                    elseif ($_GET['halaman']=="pelanggan")
                    {
                        include 'member.php';
                    }
                    elseif ($_GET['halaman']=="detail")
                    {
                        include 'detail.php';
                    }
                    elseif ($_GET['halaman']=="tambahproduk")
                    {
                        include 'tambahmobil.php';
                    }
                    elseif ($_GET['halaman']=="hapusproduk")
                    {
                        include 'hapusmobil.php';
                    }
                    elseif ($_GET["halaman"]=="hapusmember")
                    {
                        include 'hapusmember.php';
                    }
                    elseif ($_GET['halaman']=="ubahproduk")
                    {
                        include 'ubahmobil.php';
                    }
                    elseif ($_GET['halaman']=="logout")
                    {
                        include 'logout.php';
                    }
                    elseif ($_GET["halaman"]=="pembayaran")
                    {
                        include 'pembayaran.php';
                    }
                    elseif ($_GET["halaman"]=="laporan_pembelian")
                    {
                        include 'laporan_pembelian.php';
                    }
                    elseif ($_GET["halaman"]=="kategori")
                    {
                        include 'kategori.php';
                    }
                    elseif ($_GET["halaman"]=="tambahkategori") 
                    {
                        include 'tambahkategori.php';
                    }
                    elseif ($_GET["halaman"]=="hapuskategori") 
                    {
                        include 'hapuskategori.php';
                    }
                    
                }
                else
                {
                    include 'home.php';
                }
                ?>
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
