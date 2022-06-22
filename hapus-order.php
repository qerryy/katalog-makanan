<?php

session_start();
$id = $_GET['id'];
unset($_SESSION['orderan'][$id]);

echo "<script> alert('Berhasil dihapus'); document.location.href='beli.php'</script>";

?>