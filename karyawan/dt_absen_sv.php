<?php
include '../koneksi.php';
if (isset($_POST['simpan'])) {
	$id_pegawai = $_POST['id_pegawai'];
	$nama = $_POST['nama'];
	$waktu = $_POST['waktu'];


}

$save = "INSERT INTO tb_absen SET id_pegawai='$id_pegawai', nama='$nama', waktu='$waktu'";
mysqli_query($koneksi, $save);

if ($save) {
	echo "<script>alert('Anda sudah absen untuk hari ini') </script>";
	 echo "<script>window.location.href = \"index.php?m=awal\" </script>";	
}else{
	echo "kryptosssss";
}

 ?>