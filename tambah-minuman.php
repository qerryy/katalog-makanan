<!DOCTYPE html>
<html>
<head>
    <title>Tambah Menu</title>
    <link rel="stylesheet" type="text/css" href="css/tambah-menu.css">
</head>
<body>

<div class="box">
	<div class="right"></div>
	<div class="left">
		<div class="formbox">

        <form method="post" action="proses/proses-tambah-minuman.php" enctype="multipart/form-data">
            <label>Nama</label>
            <input type="text" name="nama" placeholder="Nama" required="">

            <label>Harga (Rp)</label>
            <input type="number" name="harga" placeholder="Harga" required="">

            <label for="deskripsi">Deskripsi</label>
            <textarea name="deskripsi" placeholder="Deskripsi" required=""></textarea>

            <label>Foto</label>
            <input type="file" name="foto">

            <input type="submit" name="simpan" value="Simpan">
        </form>

        </div>
	</div>
</div>

</body>
</html>