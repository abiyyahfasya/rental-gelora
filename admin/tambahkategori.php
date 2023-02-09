<h2> Tambah kategori </h2>

<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>kategori</label>
		<input type="text" class="form-control" name="nama_kategori">
	</div>

	<button class="btn btn-primary" name="save">Simpan</button>
</form>
<?php 
if (isset($_POST['save']))
{
	$koneksi->query("INSERT INTO kategori
		(nama_kategori)
		VALUES ('$_POST[nama_kategori]')");

	echo "<div class='alert alert-info'>Data Tersimpan</div>";
	echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=kategori'>";

}
?>
