<h2><b><font color='purple'>Data Motor</h2></b></clor></font>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Kategori</th>
			<th>Merk Motor</th>
			<th>Harga</th>
			<th>Foto</th>
			<th>Deskripsi</th>
			<th>Stok</th>
			<th>Aksi</th>


	
		</tr>
	</thead>
	<tbody>
			<?php $nomor=1; ?>
			<?php $ambil=$koneksi->query("SELECT * FROM produk LEFT JOIN kategori ON produk.id_kategori=kategori.id_kategori"); ?>
			<?php while($pecah = $ambil->fetch_assoc()){ ?>
		<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $pecah["nama_kategori"]; ?></td>
			<td><?php echo $pecah['merk_motor']; ?></td>
			<td>Rp. <?php echo number_format($pecah['harga']) ?></td>
			<td>
				<img src="../foto_produk/<?php echo $pecah['foto']; ?>" width="100">
			</td>
			<td><?php echo $pecah['deskripsi_motor']; ?></td>
			<td><?php echo $pecah['stok_motor']; ?></td>

			<td>
				<a href="index.php?halaman=hapusproduk&id=<?php echo $pecah['id_motor']; ?>"
					class="btn-danger btn">Hapus</a>
				<a href="index.php?halaman=ubahproduk&id=<?php echo $pecah['id_motor']; ?>"
				class="btn btn-warning">Ubah</a>
		</td>
	</tr>
	<?php $nomor++; ?>	
	<?php } ?>

	</tbody>
</table>
<a href="index.php?halaman=tambahproduk" class="btn btn-primary">Tambah Data</a>