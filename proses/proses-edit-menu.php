<?php

    include("../koneksi.php");

    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $jenis = $_POST['jenis'];
    $deskripsi = $_POST['deskripsi'];

if (isset($_POST['simpan'])) {

    $foto = $_FILES['foto']['name'];

    if (empty($foto)) {
        $sql = "UPDATE menu SET nama='$nama', harga='$harga', jenis='$jenis', deskripsi='$deskripsi' WHERE id='$_POST[id]'";
        $query = mysqli_query($konek, $sql);
    }
    else {
        $hapus = "SELECT * FROM menu WHERE id='$_POST[id]'";
        $query = mysqli_query($konek, $hapus);

        $namafoto = mysqli_fetch_array($query);

        $lokasi = $namafoto['foto'];

        $hapusfoto = "../foto-menu/$lokasi";
        unlink($hapusfoto);
        move_uploaded_file($_FILES['foto']['tmp_name'], '../foto-menu/'.$foto);
        $sql = "UPDATE menu SET nama='$nama', harga='$harga', foto='$foto', jenis='$jenis', deskripsi='$deskripsi' WHERE id='$_POST[id]'";
        $query = mysqli_query($konek, $sql);
    }
    header('location: ../admin-menu.php');
}
else {
    echo "<script> alert('Gagal Qimack...!!!'); document.location.href='../admin-menu.php'</script>";
}

?>