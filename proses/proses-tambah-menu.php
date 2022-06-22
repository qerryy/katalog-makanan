<?php
    include("../koneksi.php");

    $nama = $_POST['nama'];
	$harga = $_POST['harga'];
	$deskripsi = $_POST['deskripsi'];
	$jenis = $_POST['jenis'];

    if(isset($_POST['simpan'])) {

        $foto = $_FILES['foto']['name'];
        $lokasi = $_FILES['foto']['tmp_name'];

        move_uploaded_file($lokasi, '../foto-menu/'.$foto);

       $sql = mysqli_query($konek,"INSERT INTO menu (nama, harga, foto, deskripsi, jenis) VALUES ('$nama','$harga','$foto','$deskripsi', '$jenis')");

        if ($sql) {
            echo "<script> alert('Tambah menu Berhasil'); document.location.href='../admin-menu.php'</script>";
        }
        else {
			echo "<script> alert('Tambah menu gagal'); document.location.href='../admin-menu.php'</script>";
		}

    }
?>