<h2><b><font color='purple'>Data Sewa</h2></b></clor></font>


<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama </th>
			<th>Tanggal Sewa</th>
			<th>Merk Motor</th>
			<th>email</th>
			<th>No Polisi</th>
			<th>No KTP</th>
			<th>No Telpon</th>
			<th>Harga</th>
			<th>Aksi</th>	
		</tr>
	</thead>
	<tbody>
		<?php $nomor=1; ?>
		<?php $ambil=$koneksi->query("SELECT * FROM pembelian JOIN pelanggan ON pembelian.id_member=pelanggan.id_member"); ?>
		<?php while($pecah = $ambil->fetch_assoc()){ ?>
		<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $pecah['nama_member']; ?></td>
			<td><?php echo $pecah['tanggal_sewa']; ?></td>
			<td><?php echo $pecah['merk_motor']; ?></td>
			<td><?php echo $pecah['email']; ?></td>
			<td><?php echo $pecah['No_polisi']; ?></td>
			<td><?php echo $pecah['No_ktp']; ?></td>
			<td><?php echo $pecah['No_telpon']; ?></td>
			<td><?php echo $pecah['harga']; ?></td>
			<td>
			
			<a href="index.php?halaman=detail&id=<?php echo $pecah['id_reservasi']; ?>" class="btn btn-info">Detail</a>
			
				
			</td>
		</tr>
		<?php $nomor++; ?>
		<?php } ?>
	</tbody>
</table>
<a href="index.php?halaman=tambahpembelian" class="btn btn-primary">Tambah Data</a>