<h2><b><i><font color='purple'>Welcome To Admin</h2></b></i></clor></font>

<!-- <pre><?php
print_r ($_SESSION); ?>
</pre> -->

<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Email</th>
			<th>Password</th>
			<th>Nama Lengkap</th>
		</tr>
	</thead>
	</tbody>
		<?php $nomor=1; ?>
		<?php $ambil=$koneksi->query("SELECT * FROM admin"); ?>
		<?php while($pecah = $ambil->fetch_assoc()){ ?>
		<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $pecah ['username']; ?></td>
			<td><?php echo $pecah ['password']; ?></td>
			<td><?php echo $pecah ['nama_lengkap']; ?></td>
			</td>
		</tr>
		<?php $nomor++; ?>
		<?php } ?>
	</tbody>
</table>