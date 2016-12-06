<?php

require_once('DBClass.php');
require_once('m_siswa.php');

$id = $_GET['id'];

if(!is_numeric($id)){
	exit('Access Forbiden');
}

$siswa = new Siswa();
$data = $siswa->deleteSiswa($id);

if(empty($data)){
	echo "Data Berhasil dihapus";
	
}
?>
<br />
<a href="../siswa.php">Kembali</a>