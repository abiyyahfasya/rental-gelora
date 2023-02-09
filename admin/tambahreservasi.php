<h2> Tambah Data Reservasi </h2>

<form method="post" enctype="multipart/form-data">
	<div class="form-group">
		<label>id_member</label>
		<input type="text" class="form-control" name="id_member">
	</div>
	<div class="form-group">
		<label>Nama</label>
		<input type="text" class="form-control" name="Nama">
	</div>
	<div class="form-group">
		<label>Tanggal Sewa</label>
		<input type="date" class="form-control" name="tanggal_sewa">
	</div>
	<div class="form-group">
		<label>Merk Motor</label>
		<input type="text" class="form-control" name="merk_motor">
	</div>
	<div class="form-group">
		<label>email</label>
		<input type="text" class="form-control" name="email">
	</div>
	<div class="form-group">
		<label>No Polisi</label>
		<input type="text" class="form-control" name="No_polisi">
	</div>
	<div class="form-group">
		<label>No KTP</label>
		<input type="text" class="form-control" name="No_ktp">
	</div>
	<div class="form-group">
		<label>No telpon</label>
		<input type="text" class="form-control" name="No_telpon">
	</div>
	<div class="form-group">
		<label>Harga (Rp)</label>
		<input type="number" class="form-control" name="harga">
	</div>
	<button class="btn btn-primary" name="save">Simpan</button>
</form>
<?php 
if (isset($_POST['save']))
{
	$koneksi->query("INSERT INTO pembelian
		(id_member,Nama,tanggal_sewa,email,merk_motor,No_polisi,No_ktp,No_telpon,harga)
		VALUES ('$_POST[id_member]','$_POST[Nama]','$_POST[tanggal_sewa]','$_POST[email]','$_POST[merk_motor]','$_POST[No_polisi]','$_POST[No_ktp]','$_POST[No_telpon]','$_POST[harga]')");

	echo "<div class='alert alert-info'>Data Tersimpan</div>";
	echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=pembelian'>";

}
?>


