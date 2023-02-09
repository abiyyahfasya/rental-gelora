<?php 
session_start();

// Menghancurkan $_SESSION["member"]
session_destroy();

echo "<script>alert('Anda Telah Logout');</script>";
echo "<script>location='index.php';</script>";

?>