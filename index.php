<?php
session_start();
//koneksi ke database
include 'koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial0scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="admin/assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="index.css">

	<title>Gelora Rental Motor</title>
</head>
<body>

<!-- Jumbotron -->
<!-- <div class="jumbotron jumbotron-fluid text-center"> -->
	<div class="container">
		
		<hr>
		<hr><i><b><h1 class="display-7"><span class="font-weight-bold"><font color='teal'>Gelora Rental Motor</span></b></h1></color></font></i>

		<hr>
		<hr>

	</div>
</div>
</div>
</b>
</div>
<!-- Akhir Jumbotron -->

<!-- navbar -->
<!-- <nav class="navbar navbar-expand-lg bg-dark">
	<div class="container"> -->
		<!--<a class="navbar-brand text-white" href="index.php"><strong>Rental Agus Mobil</strong> </a> -->
<!-- 		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle Navigation">
		<span class="navbar-toggler-icon"></span>
		</button> -->

		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav ml-auto">
				<!-- <li class="nav-item">
					<a class="nav-link mr-4" href="index.php">Home</a>
				</li>
					
				</li> -->
			</ul>
		</div>
	</div>
</nav>
<!-- Akhir Navbar -->

<?php include 'menu.php'; ?>

<?php
 $ambil=$koneksi->query("SELECT * FROM produk WHERE stok_motor < 1");
 while($pecah= $ambil->fetch_assoc()){
    $barang = $pecah['merk_motor'];
?>
<div class ="alert alert-danger alert-dismissible">
    <!-- <button type="button" class="close" data-dismiss="alert">&times;</button> -->
    <strong><center>PERHATIAN!</strong> STOK <strong><?php echo $pecah['merk_motor'];?> <!-- <?php echo $pecah['jenis_buku'];?> --></strong>TELAH HABIS</center>
</div>

<?php
}
?>
<!-- konten -->
<section class="konten">
	<div class="container">
		<div class="col-md-10 col-md-offset-1">
				<div class="panel panel-default">
					<div class="panel-heading">
		
		<h2><a class="elementor-heading-title elementor-size-default"><font color='Auburn'><b>Motor Yang Tersedia :</a></b></h2></color></font></br>

		<div class="row">
			
			<?php $ambil = $koneksi->query ("SELECT * FROM produk "); ?>
			<?php while($perproduk = $ambil->fetch_assoc()){ ?>
			
			<div class="col-md-4">
				<div class="thumbnail">
					<img src="foto_produk/<?php echo $perproduk['foto']; ?>" alt="">
					<div class="caption">
						<h3><?php echo $perproduk['merk_motor']; ?></h3>
					
						<h5>Rp. <?php echo number_format($perproduk['harga']); ?></h5>
						<h6><?php echo $perproduk['deskripsi_motor']; ?></h6>
						<h5>Stok : <?php echo $perproduk['stok_motor'] ?></h5>
						<!-- code here -->
						<a href="" class="btn btn-primary">Pesan</a>
						<!--<a href="detail.php?id=<?php echo $perproduk["id_produk"]; ?>" class="btn btn-default">Detail</a>!-->

					</div>
				</div>
			</div>


			<?php } ?>
		</div>
	</div>
	</br>
	
	<h8><font color='teal'>* Jika anda minat dengan penyewaan di Rental kami maka ikuti langkah tersebut :</h8></font></color>
	<h5>1. Daftar diri anda dahulu sebagai member (Daftar Member).</h5>
	<h5>2. Jika sudah maka lanjut untuk masuk ke login, dan bisa langsung untuk melakukan proses penyewaan di Gelora Rental Motor. </h5>


</section>
<div class="container">
		<div class="row">
			
<center><h1><a class="elementor-heading-title elementor-size-default"><font color='Auburn'><b>TENTANG KAMI</a></b></h1></center></color></font>
<center><b><i><h4>Kami merupakan Jasa Layanan Sewa Motor Surabya yang profesional dengan menyediakan fasilitas terbaik juga terlengkap,<br>dan kami menawarkan rental motor Surabaya dengan harga sewa motor yang terjangkau.Layanan kami yang favorit adalah sewa motor Vario.</i></h4></center></b>
<center><b><i><h4>Kami siap memberikan pelayanan yang terbaik dalam hal rental motor dan layanan perjalanan Anda. Kami telah berpengalaman dalam melakukan pelayanan baik untuk pelanggan asing ataupun pelanggan lokal. Semuanya didukung dengan mobil yang nyaman untuk menjamin keistimewaan perjalanan wisata Anda.</i></h4></h4></br>
	<h4 class="display-4"><span class="font-weight-bold"><font color='teal'>Jika mengalami kesulitan dalam proses penyewaan, bisa Hubungi Customer Service kami</span></h4></color></font>
	<h4 class="display-4"><span class="font-weight-bold"><font color='teal'>Tlp-WA-SMS 0895-3645-72169</span></h4></color></font>

  <p>&nbsp;</p>
</center>
</center>

<hr>

</body>
<center><b><h1><font color='Auburn'>Hubungi Kami :</h1></b></center></clor></font>

	</div>
	<div class="clearfix"> </div>
</div>
</div>
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-0">

			<a href="https://api.whatsapp.com/send?phone=62895364572169" target="_blank"><img src="foto_produk/whatsapp.jpeg" width="65" height="65" border="0"></a></br>
			<a href="https://www.instagram.com/rentalagus20/"><img src="foto_produk/instagram.jpeg" width="70" height="70" border="5"></br>
			</a>
</div>
<div class="container">
		<div class="row">
			<div class="col-md-31 col-md-offset-0">
				<div class="panel panel-default">
					<div class="panel-heading">
					<h4><b><font color='teal'>Alamat </h4></b></color></font>
					<h4><b><font color='black'>Mahkota Indah GB2 (Kampung.Siluman RT005/RW01)</h3></color></font><h4><b><font color='black'>Desa Mangunjaya.Tambun Selatan.Kab.Bekasi</h3></color></font>		
	<h4><b><font color='teal'>Persyaratan :</h4></color></font>
				
	1. KTP</br>
	2. SIM </br>
	3. Kartu Mahasiswa <br>
	4. Wajib Titip Motor, dan </br>
	5. Mobil diambil & kembalikan sendiri ditempat kami di Mahkota Indah (Kp. Siluman RT005/RW01), Desa Mangunjaya 
	</div>

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.1206997854433!2d107.05489441476927!3d-6.247821795477569!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNsKwMTQnNTIuMiJTIDEwN8KwMDMnMjUuNSJF!5e0!3m2!1sid!2sid!4v1625387837176!5m2!1sid!2sid" width="1190" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe></br></a></center>

	
</h6></div>


<br></br>
<br></br>
<center><div id="copyright-container">
    <div class="inner hybrid">
				Copyright &copy; 2023 <a href="" rel="home">Gelora Rental Motor : Sewa Motor Surabaya</a>
		            <p class="credit"><a href=""></a> by Mirrah Abiyyah Fasya</p>
			
    </div>

</div></center>

</body>
</html>
