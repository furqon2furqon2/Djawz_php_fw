<?php
require_once "Excel.class.php";

#koneksi ke mysql
$mysqli = new mysqli("localhost","root","admin","employee");
if ($mysqli->connect_error) {
    die('Connect Error (' . $mysqli->connect_error . ') ');
}
#akhir koneksi

#ambil data
$query = "SELECT nik, nama, tanggal_register, golongan_darah, jenis_kelamin, tanggal_lahir, alamat, tinggi_badan, berat_badan, agama FROM karyawan where nik IS NOT NULL";
$sql = $mysqli->query($query);
$arrmhs = array();
while ($row = $sql->fetch_assoc()) {
	array_push($arrmhs, $row);
}
#akhir data

$excel = new Excel();
#Send Header
$excel->setHeader('Laporan Data Karyawan.xls');
$excel->BOF();

#header tabel
// $excel->writeLabel(0, 0, "LAPORAN DATA KARYAWAN");
$excel->writeLabel(0, 0, "Nomor Induk KTP");
$excel->writeLabel(0, 1, "Nama Karyawan");
$excel->writeLabel(0, 2, "Terdaftar Sejak");
$excel->writeLabel(0, 3, "Golongan Darah");
$excel->writeLabel(0, 4, "Jenis Kelamin");
$excel->writeLabel(0, 5, "Tanggal Lahir");
$excel->writeLabel(0, 6, "Alamat");
$excel->writeLabel(0, 7, "Tinggi Badan");
$excel->writeLabel(0, 8, "Berat Badan");
$excel->writeLabel(0, 9, "Agama");








#isi data
$i = 1;
foreach ($arrmhs as $baris) {
	$j = 0;
	foreach ($baris as $value) {
		$excel->writeLabel($i, $j, $value);
		$j++;
	}
	$i++;
}

$excel->EOF();

exit();
?>


































