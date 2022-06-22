<?php

session_start();

$id_makan = $_GET['id'];

if (isset($_SESSION['orderanmin'][$id_makan])) {
	$_SESSION['orderanmin'][$id_makan]+=1;
}
else {
	$_SESSION['orderanmin'][$id_makan] = 1;
}

echo "<script> alert('Berhasil'); document.location.href='menu-minuman.php'</script>";

?>