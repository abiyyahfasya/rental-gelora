<?php include 'koneksi.php'; ?>
<?php
$keyword = $_GET["keyword"];

$semuadata=array();
$ambil = $koneksi->query("SELECT * FROM produk WHERE merk_mobil LIKE '%$keyword%'
	OR deskripsi_mobil LIKE '%$keyword'");
while($pecah = $ambil->fetch_assoc())
{
	$semuadata[]=$pecah;
}

// echo "<pre>";
// print_r ($semuadata);
// echo "</pre>";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Pencarian</title>
	<link rel="stylesheet" href="admin/assets/css/bootstrap.css">
</head>
<body>
<?php include 'menu.php'; ?>
 	<div class="container">
 		<h3>Hasil Pencarian : <?php echo $keyword ?></h3>

 		<?php if (empty($semuadata)): ?>
 			<div class="alert alert-danger">Mobil <strong><?php echo $keyword ?></strong> Tidak Ditemukan</div>
 		<?php endif ?>

 		<div class="row">

 			<?php foreach ($semuadata as $key => $value): ?>

 			
 			<div class="col-md-3">
 				<div class="thumbnail">
 					<img src="foto_produk/<?php echo $value["foto"] ?>" alt="" class="img-responsive">
 					<div class="caption">
 						<h3><?php echo $value["merk_mobil"] ?></h3>
 						<h5>Rp. <?php echo number_format($value['harga']) ?></h5>
 						<h5>Stok : <?php echo $value['stok_mobil'] ?></h5>
 						<a href="beli.php?id=<?php echo $value["id_mobil"]; ?>" class="btn btn-primary">Beli</a>
 						<!-- <a href="detail.php?id=<?php echo $value["id_produk"]; ?>" class="btn btn-default">Detail</a> -->
 					</div>
 				</div>
 			</div>
			<?php endforeach ?>

 		</div>
 	</div>

</body>
</html>