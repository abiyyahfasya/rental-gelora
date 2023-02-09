<?php
session_start();
//koneksi ke database
include 'koneksi.php';


// jika tidak ada session pelangan (belum login)
if (!isset($_SESSION["member"]) OR empty($_SESSION["member"]))
{
	echo "<script>alert('Silahkan Login');</script>";
	echo "<script>location='login.php';</script>";
	exit();
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Rental Agus Mobil</title>
	<link rel="stylesheet" href="admin/assets/css/bootstrap.css">
</head>
<body>


<?php include 'menu.php'; ?>


<!-- <pre><?php print_r($_SESSION) ?></pre> -->
<section class="riwayat">
	<div class="container">
		<h3>Riwayat Booking <?php echo $_SESSION["member"]["nama_member"] ?></h3>

		<table class="table table-bordered">
			<thead>
				<tr>
					<th>No</th>
					<th>Tanggal Sewa</th>
					<th>No Polisi</th>
					<th>Merk Mobil</th>
					<th>No Telpon</th>
				
					<th>Total</th>
					<th>Opsi</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$nomor=1;
				// mendapatkan id_pelanggan yang login dari session
				$id_member = $_SESSION["member"]['id_member'];

				$ambil = $koneksi->query("SELECT * FROM pembelian WHERE id_member='$id_member'");
				while($pecah = $ambil->fetch_assoc()){
				?>
				<tr>
					<td><?php echo $nomor; ?></td>
					<td><?php echo $pecah["tanggal_sewa"] ?></td>
					<td><?php echo $pecah["No_polisi"] ?></td>
					<td><?php echo $pecah["merk_mobil"] ?></td>
					<td><?php echo $pecah["No_telpon"] ?></td>
				
					<!--<td>
						<?php echo $pecah["status_pembelian"] ?>
						<br>
						<?php if (!empty($pecah['resi_pengiriman'])): ?>
						Resi: <?php echo $pecah['resi_pengiriman']; ?>
						<?php endif ?>
					</td>!-->
					<td>Rp. <?php echo number_format($pecah["harga"]) ?></td>
					<td>
						<a href="nota.php?id=<?php echo $pecah["id_reservasi"] ?>" class="btn btn-info">Nota</a>

						<!--<?php if ($pecah['status_pembelian']=="pending"): ?>
						<a href="pembayaran.php?id=<?php echo $pecah["id_pembelian"]; ?>" class="btn btn-success">
							Input Pembayaran
						</a>
						<?php else: ?>
						<a href="lihat_pembayaran.php?id=<?php echo $pecah["id_pembelian"]; ?>" class="btn btn-warning">
							Lihat Pembayaran
						</a>!-->
						<?php endif ?>

					</td>
				</tr>
				<?php $nomor++; ?>
				<?php } ?>
			</tbody>
		</table>
	</div>
</section>

</body>
</html>