<h2>Detail Reservasi</h2>
<?php
$ambil = $koneksi->query("SELECT * FROM pembelian JOIN pelanggan
	ON pembelian.id_member=pelanggan.id_member
	WHERE pembelian.id_reservasi='$_GET[id]'");
$detail = $ambil->fetch_assoc();
?>
<!--<pre><?php print_r($detail); ?></pre>!-->





<div class="row">
	<div class="col-md-10 col-md-offset-1">
				<div class="panel panel-default">
					<div class="panel-heading">
		<font color='Purple'><b><h3>Member</h3></b></h2></center></color></font>
		<strong>Nama : <?php echo $detail['nama_member']; ?></strong> <br>
		<p>
			
			Email : <?php echo $detail['email_member']; ?> <br>
			Alamat : <?php echo $detail['alamat_member']; ?>
		</p>

		<font color='Purple'><b><i><h3>Reservasi :</h3></b></h2></center></color></font>
		
			Merk Motor : <?php echo $detail['merk_motor']; ?> <br>
			No polisi : <?php echo $detail['No_polisi']; ?> <br>
			Tanggal Sewa : <?php echo $detail['tanggal_sewa']; ?> <br>
			No ktp : <?php echo $detail['No_ktp']; ?> <br>
			No telpon : <?php echo $detail['No_telpon']; ?> <br>

		</p>
	</div>
	
</div>


<!--<table class="table table-bordered">
	<thead>
		<tr>	
			<th>No</th>
			<th>Merk Mobil</th>
			<th>Tanggal_sewa</th>
			<th>harga</th>
		</tr>
	</thead>
	<tbody>
	<?php $nomor=1; ?>
		<?php $ambil=$koneksi->query("SELECT * FROM pembelian_produk JOIN pembelian ON pembelian_produk.id_member=pembelian.id_member
		WHERE pembelian_produk.id_reservasi='$_GET[id]'"); ?>
		<?php while($pecah=$ambil->fetch_assoc()){ ?>
		<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $pecah['merk_mobil']; ?></td>
			<td><?php echo $pecah['tanggal_sewa']; ?></td>
			<td>Rp. <?php echo number_format($pecah['harga']); ?></td>
			
		</tr>
		<?php $nomor++; ?>
		<?php } ?>
	</tbody>
</table>