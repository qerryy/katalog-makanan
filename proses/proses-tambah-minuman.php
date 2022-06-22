<?php
    include("../koneksi.php");

    $nama = $_POST['nama'];
	$harga = $_POST['harga'];
	$deskripsi = $_POST['deskripsi'];

    if(isset($_POST['simpan'])) {

        $foto = $_FILES['foto']['name'];
        $lokasi = $_FILES['foto']['tmp_name'];

        move_uploaded_file($lokasi, '../foto-minuman/'.$foto);

       $sql = mysqli_query($konek,"INSERT INTO minuman (nama, harga, foto, deskripsi) VALUES ('$nama','$harga','$foto','$deskripsi')");

        if ($sql) {
            echo "<script> alert('Tambah menu Berhasil'); document.location.href='../admin-minuman.php'</script>";
        }
        else {
			echo "<script> alert('Tambah menu gagal'); document.location.href='../admin-minuman.php'</script>";
		}

    }
?>