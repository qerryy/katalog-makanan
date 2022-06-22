<?php

    include("../koneksi.php");

    $nama = $_POST['nama'];
    $harga = $_POST['harga'];
    $deskripsi = $_POST['deskripsi'];

if (isset($_POST['simpan'])) {

    $foto = $_FILES['foto']['name'];

    if (empty($foto)) {
        $sql = "UPDATE minuman SET nama='$nama', harga='$harga', deskripsi='$deskripsi' WHERE id='$_POST[id]'";
        $query = mysqli_query($konek, $sql);
    }
    else {
        $hapus = "SELECT * FROM minuman WHERE id='$_POST[id]'";
        $query = mysqli_query($konek, $hapus);

        $namafoto = mysqli_fetch_array($query);

        $lokasi = $namafoto['foto'];

        $hapusfoto = "../foto-minuman/$lokasi";
        unlink($hapusfoto);
        move_uploaded_file($_FILES['foto']['tmp_name'], '../foto-minuman/'.$foto);
        $sql = "UPDATE minuman SET nama='$nama', harga='$harga', foto='$foto', deskripsi='$deskripsi' WHERE id='$_POST[id]'";
        $query = mysqli_query($konek, $sql);
    }
    header('location: ../admin-minuman.php');
}
else {
    echo "<script> alert('Gagal Qimack...!!!!!'); document.location.href='../admin-minuman.php'</script>";
}

?>