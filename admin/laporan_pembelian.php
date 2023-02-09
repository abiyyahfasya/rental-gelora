<?php
$semuadata=array();
$tgl_mulai="-";
$tgl_selesai="-";
if (isset($_POST["kirim"]))
{
	$tgl_mulai = $_POST["tglm"];
	$tgl_selesai = $_POST['tgls'];
	$ambil = $koneksi->query("SELECT * FROM pembelian pm LEFT JOIN pelanggan pl ON
		pm.id_member=pl.id_member WHERE tanggal_sewa BETWEEN '$tgl_mulai' AND '$tgl_selesai' ");
	while($pecah = $ambil->fetch_assoc())
	{
		$semuadata[]=$pecah;
	}

	// echo "<pre>";
	// print_r ($semuadata);
	// echo "</pre>";
}

?>



<h2>Laporan Bookingan dari <?php echo $tgl_mulai ?> hingga <?php echo $tgl_selesai ?></h2>
<hr>

<form method="post">
	<div class="row">
		<div class="col-md-5">
			<div class="form-group">
				<label>Tanggal Mulai</label>
				<input type="date" class="form-control" name="tglm" value="<?php echo $tgl_mulai ?>">
			</div>
		</div>
		<div class="col-md-5">
			<div class="form-group">
				<label>Tanggal Selesai</label>
				<input type="date" class="form-control" name="tgls" value="<?php echo $tgl_selesai ?>">
			</div>
		</div>
		<div class="col-md-2">
			<label>&nbsp;</label><br>
			<button class="btn btn-primary" name="kirim">Lihat</button>
		</div>
	</div>
</form>


<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Pelanggan</th>
			<th>Tanggal</th>
			<th>Merk Motor</th>
			<th>harga</th>
			
		</tr>
	</thead>
	<tbody>
		<?php $total=0; ?>
		<?php foreach ($semuadata as $key => $value): ?>
		<?php $total+=$value['harga'] ?>	
		<tr>
			<td><?php echo $key+1; ?></td>
			<td><?php echo $value["Nama"] ?></td>
			<td><?php echo $value["tanggal_sewa"] ?></td>
			<td><?php echo $value["merk_motor"] ?></td>
			<td>Rp. <?php echo number_format($value["harga"]) ?></td>
			
		</tr>
		<?php endforeach ?>
	</tbody>
	<tfoot>
		<tr>
			<th colspan="4">Total</th>
			<th>Rp. <?php echo number_format($total) ?></th>
			<th></th>
		</tr>
	</tfoot>
</table>