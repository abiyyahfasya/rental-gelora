<?php
session_start();
include 'koneksi.php';

if(empty($_SESSION["booking"]) OR !isset($_SESSION["booking"]))
{
	echo "<script>alert('data booking Kosong, Silahkan Berbelanja');</script>";
	echo "<script>location='index.php';</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Booking data</title>
	<link rel="stylesheet" href="admin/assets/css/bootstrap.css">
</head>
<body>


<?php include 'menu.php'; ?>

<section class="konten">
	<div class="container">
		<h1>Booking data</h1>
		<hr>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>No</th>
					<th>Merk Motor</th>
					<th>Harga</th>
					<th>Deskripsi</th>
					<th>Jumlah</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php $nomor=1; ?>
				<?php foreach ($_SESSION["booking"] as $id_motor => $jumlah): ?>
				<!-- menampilkan produk yang sedang diperulangkan berdasarkan id_mobil -->
				<?php
				$ambil = $koneksi->query("SELECT * FROM produk
					WHERE id_motor='$id_motor'");
				$pecah = $ambil->fetch_assoc();
				
				?>
				<tr>
					<td><?php echo $nomor; ?></td>
					<td><?php echo $pecah["merk_motor"]; ?></td>
					
					<td>Rp. <?php echo number_format($pecah["harga"]); ?></td>
					<td><?php echo $pecah["deskripsi_motor"]; ?></td>
					
					<td><?php echo $jumlah; ?></td>
					
					<td>
						<a href="hapusbooking.php?id=<?php echo $id_motor ?>" class="btn btn-danger btn-xs">Hapus</a>
					</td>
				</tr>
				<?php $nomor++; ?>
				<?php endforeach ?>
			</tbody>
		</table>

		<!--<a href="index.php" class="btn btn-default">Lanjutkan Belanja</a>!-->
		<a href="checkout.php" class="btn btn-primary">Booking</a>
	</div>
</section>



</body>
</html>>