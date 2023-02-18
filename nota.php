<?php
session_start();
include 'koneksi.php'; ?>


<!DOCTYPE html>
<html>
<head>
	<title>nota pembelian</title>
	<link rel="stylesheet" href="admin/assets/css/bootstrap.css">
</head>
<body>

<?php include 'menu.php'; ?>

<section class="konten">
	<div class="container">

	


<h2>Detail Booking</h2>
<?php
$ambil = $koneksi->query("SELECT * FROM pembelian JOIN pelanggan
	ON pembelian.id_member=pelanggan.id_member
	WHERE pembelian.id_reservasi='$_GET[id]'");
$detail = $ambil->fetch_assoc();
?>

<!--<div class="row">
	<div class="col-md-4">
		<h3>Reservasi</h3>
		<p>
			Tanggal sewa: <?php echo $detail['tanggal_sewa']; ?> <br>
			No polisi: <?php echo $detail['No_polisi']; ?> <br>
			No ktp : <?php echo $detail['No_ktp']; ?> <br>
			No telpon : <?php echo $detail['No_telpon']; ?> <br>
			
			
		</p>
	</div>
	<div class="col-md-4">
		<h3>Member</h3>
		<strong><?php echo $detail['nama_member']; ?></strong> <br>
		<p>
			<?php echo $detail['telepon_member']; ?> <br>
			<?php echo $detail['email_member']; ?>
		</p>
	</div>
	
</div>!-->


<table class="table table-bordered">
	<thead>
  		<tr>	
			<th>No</th>
			<th>Merk Motor</th>
			
			<th>harga</th>
		</tr>
	</thead>
	<tbody>
		<?php $nomor=1; ?>
		<?php $ambil=$koneksi->query("SELECT * FROM pembelian_produk WHERE id_reservasi='$_GET[id]'"); ?>
		<?php while($pecah=$ambil->fetch_assoc()){ ?>
		<tr>
			<td><?php echo $nomor; ?></td>

			<td><?php echo $pecah['nama']; ?></td>
			
			<td>Rp. <?php echo number_format($pecah['harga']); ?></td>
			
		</tr>
		<?php $nomor++; ?>
		<?php } ?>
	</tbody>
</table>

<div class="row">
	
</div>
<div class="col-md-7">
		<div class="alert alert-info">
			<p>
				Silahkan Melakukan Pembayaran Melalui COD "MOHON UNTUK DI SCREENSHOT" Sebagai bukti Bookingan <br>
				<strong>DAN Datang ke RENTAL GLORA JAYA Sesuai Pembayaran  </strong>
			</p>
		</div>
	</div>

	</div>
</section>

</body>
</html>
