<?php ob_start(); ?>
<html>
<head>
    <title>Cetak PDF</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    
    


</head>
<body>

<br>
<br>
<br>

<?php
// Load file koneksi.php

$id_kelas=$_POST['id_kelas'];
include "koneksi_CETAK.php";

$query = "SELECT kelas.nama_kelas FROM kelas where kelas.id_kelas='$id_kelas'"; // Tampilkan semua data gambar
$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
$row = mysqli_num_rows($sql); // Ambil jumlah data dari hasil eksekusi $sql
while($data = mysqli_fetch_array($sql)){
    $nama_kelas = $data['nama_kelas'];
    echo "<h2 align='center'>";
    echo "LAPORAN DATA SISWA KELAS ".$data['nama_kelas'];
    echo "</h2>";
}

?>


<table border="1" width=1000 height=150 align="center" border="0" cellpadding="0">

<tr>

    <th align="center">No</th>
    <th align="center">Nama Siswa</th>
    <th align="center">Kelas</th>
    <th align="center">Nilai Akhir</th>
    
</tr>
<?php
// Load file koneksi.php


include "koneksi_CETAK.php";
$no=0;

$query = "SELECT siswa.nis,siswa.nama_siswa,kelas.nama_kelas FROM siswa INNER Join kelas ON siswa.id_kelas=kelas.id_kelas where siswa.id_kelas='$id_kelas'"; // Tampilkan semua data gambar


$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
$row = mysqli_num_rows($sql); // Ambil jumlah data dari hasil eksekusi $sql
 
if($row > 0){ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
    while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
    $no++;

        echo "<tr>";
        echo "<td align=center>".$no."</td>";
        
        echo "<td align=center>".$data['nama_siswa']."</td>";
        echo "<td align=center>".$data['nama_kelas']."</td>";
        
?>

<?php
// echo "<td align=center>".$data['nis']."</td>";
$nis = $data['nis'];

// Load file koneksi.php
include "koneksi_CETAK.php";
$query = "SELECT COUNT(*) AS jumlah_soal,SUM(js.score) as TOTAL_BENAR,(SUM(js.score)/COUNT(*)*100) as TOTAL_NILAI,mp.nama_matapelajaran,js.nis,pt.nama_pertemuan FROM jawaban_soal js INNER JOIN siswa sw ON js.nis=sw.nis INNER JOIN kelas ON sw.id_kelas=kelas.id_kelas INNER JOIN pertemuan pt ON js.id_pertemuan=pt.id_pertemuan INNER JOIN kurikulum kr ON pt.id_kurikulum=kr.id_kurikulum INNER JOIN matapelajaran mp ON kr.id_matapelajaran=mp.id_matapelajaran where js.nis='$nis' GROUP BY mp.nama_matapelajaran"; // Tampilkan semua data gambar
$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
$row = mysqli_num_rows($sql); // Ambil jumlah data dari hasil eksekusi $sql

if($row > 0){ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
    while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql

        echo "<td align=center>".substr($data['TOTAL_NILAI'],0,5)."</td>";
    }
}
else
{
    echo "<td align=center>Nilai Belum Keluar</td>";
}

?>

<?php
    
        echo "</tr>";
    }
}else{ // Jika data tidak ada
    echo "<tr>
        <td colspan='3'>Data tidak ada</td>
    </tr>";
}
?>


</table>


    

<br>
<br>
<br>
<br>
<br>























<br>
<br>
<br>
<br>






</body>
</html>
<?php
$html = ob_get_contents();
ob_end_clean();
        
require_once('html2pdf/html2pdf.class.php');
$pdf = new HTML2PDF('P','A4','en');
$pdf->WriteHTML($html);
$pdf->Output('LAPORAN_DATA_SISWA.pdf', 'D');
?>

