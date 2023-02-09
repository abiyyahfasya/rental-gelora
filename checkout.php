<?php
session_start();
include 'koneksi.php';


// Jika ada session member(belum login) maka dilarikan ke login.php
if (!isset($_SESSION["member"]))
{
	echo "<script>alert('Silahkan Login');</script>";
	echo "<script>location='login.php';</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>checkout</title>
	<link rel="stylesheet" href="admin/assets/css/bootstrap.css">
</head>
<body>

<?php include 'menu.php'; ?>


<section class="konten">
	<div class="container">
		<h1>Data Reservasi</h1>
		<hr>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>No</th>
					<th>Merk motor</th>
					<th>Harga</th>
					<th>Jumlah</th>
					<th>Subharga</th>
				</tr>
			</thead>
			<tbody>
				<?php $nomor=1; ?>
				<?php $totalbelanja = 0; ?>
				<?php foreach ($_SESSION["booking"] as $id_motor => $jumlah): ?>
				<!-- menampilkan produk yang sedang diperulangkan berdasarkan id_produk -->
				<?php
				$ambil = $koneksi->query("SELECT * FROM produk
					WHERE id_motor='$id_motor'");
				$pecah = $ambil->fetch_assoc();
				$subharga = $pecah["harga"]*$jumlah;
				
				?>
				<tr>
					<td><?php echo $nomor; ?></td>
					<td><?php echo $pecah["merk_motor"]; ?></td>
					<td>Rp. <?php echo number_format($pecah["harga"]); ?></td>
					<td><?php echo $jumlah; ?></td>
					<td>Rp. <?php echo number_format($subharga); ?></td>
					
				</tr>
				<?php $nomor++; ?>
				<?php $totalbelanja+=$subharga; ?>
				<?php endforeach ?>
			</tbody>
			<tfoot>
				<tr>
					<th colspan="4">Total </th>
					<th>Rp. <?php echo number_format($totalbelanja) ?></th>
				</tr>
			</tfoot>
		</table>


		<form method="post">
			
			<!-- <div class="row"> -->
				<div class="col-md-5">
					<div class="form-group">
						Email :<input type="text" readonly value="<?php echo $_SESSION["member"]['email_member']  ?>" class="form-control">
						Nama :<input type="text" readonly value="<?php echo $_SESSION["member"]['nama_member']  ?>" class="form-control">
						Telpon :<input type="text" readonly value="<?php echo $_SESSION["member"]['telepon_member']  ?>" class="form-control">
						Alamat :<input type="text" readonly value="<?php echo $_SESSION["member"]['alamat_member']  ?>" class="form-control">
						id member :<input type="text" readonly value="<?php echo $_SESSION["member"]['id_member']  ?>" class="form-control">

					</div>
				</div>
				
				
			<button class="btn btn-primary" name="checkout">Checkout</button>
		</form>


		<?php
		if (isset($_POST["checkout"]))
		{

			$id_member = $_SESSION["member"]["id_member"];
			$tanggal_sewa = date("Y-m-d");

			

			

			// 1. menyimpan data ke tabel reservasi
			$koneksi->query("INSERT INTO pembelian (id_member,Nama,tanggal_sewa,)
				VALUES ('$id_member','$tanggal_sewa')");

			// mendapatkan id_pembelian barusan terjadi
			$id_pembelian_barusan = $koneksi->insert_id;

			foreach ($_SESSION["booking"] as $id_mobil => $jumlah)
			{

				// mendapatkan data produk berdasarkan id_mobil
				$ambil=$koneksi->query("SELECT * FROM produk WHERE id_motor='$id_motor'");
				$perproduk = $ambil->fetch_assoc();

				$nama = $perproduk['merk_motor'];
				$harga = $perproduk['harga'];




				$subharga = $perproduk['harga']*$jumlah;
				$koneksi->query("INSERT INTO pembelian_produk (id_reservasi,id_motor,id_member,nama,harga)
					VALUES ('$id_pembelian_barusan','$id_motor','$id_member','$nama','$harga')");


				// script update stok
				$koneksi->query("UPDATE produk SET stok_mobil=stok_mobil -$jumlah WHERE id_motor='$id_motor'");
			}

			// mengkosongkan  data bookingan

			unset($_SESSION["checkout"]);


			// tampilan dialihkan ke halaman checkout, nota pembelian barusan
			echo "<script>alert('pemesanan sukses data telah diinput & SEGERA DATANG KE RENTAL KAMI. TERIMAKASIH');</script>";

			echo "<script>location='index.php?id=$id_pembelian_barusan';</script>";
		}

		?>
		<div class="row">
	<div class="col-md-7">
		<div class="alert alert-info">
			<p>
			 "MOHON UNTUK DI SCREENSHOT" Sebagai bukti Bookingan anda.</br>
				Silahkan Melakukan Pembayaran Ditempat <br>
				<strong>DAN Datang ke GELORA RENTAL MOTOR Sesuai Pembayaran  </strong>
			</p>
		</div>
	</div>
</div>

	</div>
</section>

<!-- <pre><?php print_r($_SESSION['member']) ?></pre>
 --><!--<pre><?php print_r($_SESSION['booking']) ?></pre>!-->



</body>
</html>