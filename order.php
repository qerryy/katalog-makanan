<?php

session_start();

$id_makan = $_GET['id'];

if (isset($_SESSION['orderan'][$id_makan])) {
	$_SESSION['orderan'][$id_makan]+=1;
}
else {
	$_SESSION['orderan'][$id_makan] = 1;
}

echo "<script> alert('Berhasil'); document.location.href='menu-makanan.php'</script>";

?>