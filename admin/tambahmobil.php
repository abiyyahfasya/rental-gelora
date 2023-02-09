<?php
$datakategori = array();

$ambil = $koneksi->query("SELECT * FROM kategori");
while($tiap = $ambil->fetch_assoc())
{
	$datakategori[] = $tiap;
}

//echo "<pre>";
//print_r ($datakategori);
//echo "</pre>";
?>

<h2>Tambah Motor</h2>
<form method="post" enctype="multipart/form-data">
	
	<div class="form-group">
		<label>Kategori</label>
		<select class="form-control" name="id_kategori">
			<option value="">Pilih Kategori</option>
			<?php foreach ($datakategori as $key => $value): ?>
				
			<option value="<?php echo $value["id_kategori"] ?>"><?php echo $value["nama_kategori"] ?></option>
			<?php endforeach ?>
		</select>
	</div>
	<div class="form-group">
		<label>Merk Motor</label>
		<input type="text" class="form-control" name="merk_motor">
	</div>
	<div class="form-group">
		<label>Harga (Rp.)</label>
		<input type="number" class="form-control" name="harga">
	</div>
	<div class="form-group">
		<label>Deskripsi motor</label>
		<textarea class="form-control" name="deskripsi_motor" rows="2"></textarea>
	</div>
	<div class="form-group">
		<label>Stok</label>
		<input type="number" class="form-control" name="stok">
	</div>


	<div class="form-group">
		<label>Foto</label>
		<input type="file" class="form-control" name="foto">
	</div>
	<button class="btn btn-primary" name="save"?>Simpan</button>
</form>
<?php
if (isset($_POST['save']))
{
	$nama = $_FILES['foto']['name'];
	$lokasi =$_FILES['foto']['tmp_name'];
	move_uploaded_file($lokasi, "../foto_produk/".$namafoto);
	$koneksi->query("INSERT INTO produk
		(merk_motor,harga,foto,deskripsi_motor,stok_motor,id_kategori)
		VALUES('$_POST[merk_motor]','$_POST[harga]','$nama','$_POST[deskripsi]','$_POST[stok]',$_POST[id_kategori])");

	echo "<div class='alert alert-info'>Data Tersimpan</div>";
	echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=mobil'>";
}
?>
