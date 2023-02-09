<?php
session_start();
include 'koneksi.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>login member</title>
	<link rel="stylesheet" href="admin/assets/css/bootstrap.css">
</head>
<body>


<?php include 'menu.php'; ?>

<div class="container">
	<div class="row">
		<div class="col-md-4">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Login member</h3>
				</div>
				<div class="panel-body">
					<form method="post">
						<div class="form-group">
							<label>Email</label>
							<input type="email" class="form-control" name="email">
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" class="form-control" name="password">
						</div>
						<button class="btn btn-primary" name="login">Login</button>
					</form>

				</div>
			</div>
		</div>
	</div>
</div>

<?php 
// jika ada tombol login(tombol login ditekan)
if (isset($_POST["login"]))
{

	$email = $_POST["email"];
	$password = $_POST["password"];
	// lakukan query cek akun dari tabel pelanggan di database
	$ambil = $koneksi->query("SELECT * FROM pelanggan
		WHERE email_member='$email' AND password_member='$password'"); 

	// Menghitung Akun yang Terambil
	$akunyangcocok = $ambil->num_rows;

	// jika ada 1 akun yang cocok maka bisa login
	if ($akunyangcocok==1)
	{
		// Anda Sukses Login
		// Mendapatkan Akun dalam Bentuk Array
		$akun = $ambil->fetch_assoc();
		// Simpan di session member
		$_SESSION["member"] = $akun;
		echo "<script>alert('Anda Sukses Login');</script>";

		// jika sudah belanja
		if (isset($_SESSION["booking"]) OR !empty($_SESSION["booking"]))
		{
			echo "<script>location='checkout.php';</script>";
		}
		else
		{
			echo "<script>location='riwayat.php';</script>";
		}

	}
	else
	{
		// Anda Gagal Login
		echo "<script>alert('Anda Gagal Login, Periksa Kembali Akun Anda');</script>";
		echo "<script>location='login.php';</script>";
	}
}

?>





</body>
</html>