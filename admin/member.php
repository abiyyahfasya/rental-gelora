<h2>Data Member</h2>
<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Email</th>
			<th>Password</th>
			<th>Telepon</th>
			<th>Alamat</th>
			<th>Aksi</th>
		</tr>
	</thead>
	</tbody>
		<?php $nomor=1; ?>
		<?php $ambil=$koneksi->query("SELECT * FROM pelanggan"); ?>
		<?php while($pecah = $ambil->fetch_assoc()){ ?>
		<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $pecah ['nama_member']; ?></td>
			<td><?php echo $pecah ['email_member']; ?></td>
			<td><?php echo $pecah ['password_member']; ?></td>
			<td><?php echo $pecah ['telepon_member']; ?></td>
			<td><?php echo $pecah ['alamat_member']; ?></td>
			<td>
				<a href="index.php?halaman=hapusmember&id=<?php echo $pecah['id_member']; ?>" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		<?php $nomor++; ?>
		<?php } ?>
	</tbody>
</table>
