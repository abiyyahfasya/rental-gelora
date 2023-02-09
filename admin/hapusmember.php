<?php  

$ambil = $koneksi->query("SELECT * FROM pelanggan WHERE id_member='$_GET[id]'");
$pecah = $ambil->fetch_assoc();

$koneksi->query("DELETE FROM pelanggan WHERE id_member='$_GET[id]'");

echo "<script>alert('Member Terhapus');</script>";
echo "<script>location='index.php?halaman=pelanggan';</script>";

?>
