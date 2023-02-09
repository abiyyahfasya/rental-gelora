<h2>Ubah Motor</h2>
<?php
$ambil = $koneksi->query("SELECT * FROM produk WHERE id_mobil='$_GET[id]'");
$pecah = $ambil->fetch_assoc();

// echo "<pre>";
// print_r($pecah);
// echo "</pre>";
?>

<?php
$datakategori = array();

$ambil = $koneksi->query("SELECT * FROM kategori");
while($tiap = $ambil->fetch_assoc())
{
	$datakategori[] = $tiap;
}

// echo "<pre>";
// print_r ($datakategori);
// echo "</pre>";
?>

<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>Kategori</label>
		<select class="form-control" name="id_kategori">
			<option value="">Pilih Kategori</option>
			<?php foreach ($datakategori as $key => $value): ?>
				
			<option value="<?php echo $value["id_kategori"] ?>" <?php if ($pecah["id_kategori"]==$value["id_kategori"]) { echo "selected"; } ?> >
				<?php echo $value["nama_kategori"] ?>
					
			</option>
			<?php endforeach ?>
		</select>
	</div>
	<div class="form-group">
		<label>Nama Motor</label>
		<input type="text" name="nama" class="form-control" value="<?php echo $pecah ['merk_motor']; ?>">
	</div>
	<div class="form-group">
		<label>Harga Rp</label>
		<input type="number" class="form-control" name="harga" value="<?php echo $pecah['harga']; ?>">
	
	</div>
	<!--<div class="form-group">
		<img src="../foto_produk/<?php echo $pecah['foto'] ?>" width="200">
	</div>
	<div class="form_group">
		<label>Ganti Foto</label>
		<input type="file" name="foto" class="form-control">
	</div>-->

	<div class="form-group">
		<label>Deskripsi</label>
		<input type="text" name="deskripsi" class="form-control" value="<?php echo $pecah ['deskripsi_motor']; ?>">
	</div>
		<div class="form-group">
		<label>Stok</label>
		<input type="text" name="stok" class="form-control" value="<?php echo $pecah ['stok_motor']; ?>">
	</div>


	<button class="btn btn-primary" name="ubah">Ubah</button>
</form>

<?php  
if (isset($_POST['ubah']))
{
	$namafoto = $_FILES['foto']['name'];
	$lokasi = $_FILES['foto']['tmp_name'];
	// jika foto dirubah		
	if (!empty($lokasi))
	{
		move_uploaded_file($lokasi, "../foto_produk/$namafoto");

		$koneksi->query("UPDATE produk SET Merk_motor='$_POST[nama]',
			harga='$_POST[harga]',foto='$namafoto',deskripsi='$_POST[deskripsi]',stok='$_POST[stok]',id_kategori='$_POST[id_kategori]'
			WHERE id_mobil='$_GET[id]'");
	}
	else
	{
		$koneksi->query("UPDATE produk SET Merk_motor='$_POST[nama]',
			harga='$_POST[harga]',deskripsi_motor='$_POST[deskripsi]',stok_motor='$_POST[stok]',id_kategori='$_POST[id_kategori]'
			WHERE id_mobil='$_GET[id]'");

	}
	echo "<script>alert('Data Motor Telah Diubah');</script>";
	echo "<script>location='index.php?halaman=produk';</script>";
}
?>