<!-- navbar -->
<nav class="navbar navbar-default">
	<div class="container">
		

		<ul class="nav navbar-nav">
			<li><a href="index.php">Beranda</a></li>
			<!--<li><a href="booking.php">Booking</a></li>!-->
			<!-- code here -->
			<li><a href="">Riwayat Booking</a></li>
			<!-- jika sudah login(ada session member) -->
			<?php if (isset($_SESSION["member"])): ?>
				<!--<li><a href="riwayat.php">Riwayat Booking</a></li>!-->
				<li><a href="logout.php">Logout</a><li>
			<!-- selain itu (belum login/belum ada session member) -->
			<?php else: ?>
				<li><a href="syarat.php">Syarat & Ketentuan</a><li>
				<!-- code here -->
				<li><a href="">Login</a></li>
				<li><a href="">Daftar Member</a></li>
				
			<?php endif ?>

			
			<!--<li><a href="checkout.php">Checkout</a></li>!-->
		</ul>

		<form action="pencarian.php" method="get" class="navbar-form navbar-right">
			<input type="text" class="form-control" name="keyword">
			<button class="btn btn-primary">Cari</button>
		</form>
	</div>
</nav>