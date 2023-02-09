<?php  

$ambil = $koneksi->query("SELECT * FROM produk WHERE id_motor='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
$fotoproduk = $pecah['foto'];
if (file_exists("../foto/$foto"))
{
	unlink("../foto/$foto");
}


$koneksi->query("DELETE FROM produk WHERE id_motor='$_GET[id]'");

echo "<script>alert('Produk Terhapus');</script>";
echo "<script>location='index.php?halaman=mobil';</script>";

?>