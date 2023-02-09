<?php
session_start();
$id_mobil=$_GET["id"];
unset($_SESSION["booking"][$id_mobil]);

echo "<script>alert('Produk Dihapus Dari booking');</script>";
echo "<script>location='booking.php';</script>";
?>