<?php
session_start();
//mendapatkan id_produk dari url
$id_motor = $_GET['id'];


// jika sudah ada produk itu dibooking, maka produk itu jumlahnya di +1
if(isset($_SESSION['booking'][$id_motor]))
{
	$_SESSION['booking'][$id_motor]+=1;
}
// selain itu (belum ada di booking), maka produk itu dianggap sudah dibeli 1
else
{
	$_SESSION['booking'][$id_motor] = 1;
}



// echo "<pre>";
// print_r($_SESSION);
// echo "</pre>";

// Larikan ke halaman booking
echo "<script>alert('Data telah dimasukkan ke data booking');</script>";
echo "<script>location='booking.php';</script>";
?>