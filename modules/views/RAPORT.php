<?php ob_start(); ?>
<html>
<head>
    <title>Cetak PDF</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    
    


</head>
<body>





 
<img src="logo_raport.png" style="width: 750;" align="center" />

<br>
<h2 align="center">Sertifikat Learn From Home Selama Penerapan PSBB </h2>
<br>



<table border="1" width=1000 height=150 border="0" cellpadding="0" align="center">

<?php
// Load file koneksi.php
$nis=$_GET['nis'];
include "koneksi_CETAK.php";
$no=0;
$query = "SELECT siswa.nis,siswa.nama_siswa,kelas.nama_kelas FROM siswa INNER JOIN kelas ON siswa.id_kelas=kelas.id_kelas where siswa.nis='$nis'"; // Tampilkan semua data gambar

$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
$row = mysqli_num_rows($sql); // Ambil jumlah data dari hasil eksekusi $sql
 
if($row > 0){ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
    while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
    $no++;

        echo "<br>";
        echo "<br>";
        
        echo "<tr align=center>";
        echo "<td align=center>Nama Siswa</td>";
        echo "<td align=center>".$data['nama_siswa']." [ ".$data['nis']." ] </td>";
        echo "</tr>";
        echo "<tr align=center>";
        echo "<td align=center>Kelas</td>";
        echo "<td align=center>".$data['nama_kelas']."</td>";
        echo "</tr>";
    }
}else{ // Jika data tidak ada
    echo "<tr><td colspan='4'>Data tidak ada</td></tr>";
}
?>

</table>


    

<br>
<br>












<table border="1" width=1000 height=150 border="0" cellpadding="0" align="center">
    


<?php
// Load file koneksi.php
include "koneksi_CETAK.php";
$no=0;
$nis=$_GET['nis'];
$query = "SELECT COUNT(*) AS jumlah_soal,SUM(js.score) as TOTAL_BENAR,(SUM(js.score)/COUNT(*)*100) as TOTAL_NILAI,mp.nama_matapelajaran,js.nis,pt.nama_pertemuan FROM jawaban_soal js INNER JOIN siswa sw ON js.nis=sw.nis INNER JOIN kelas ON sw.id_kelas=kelas.id_kelas INNER JOIN pertemuan pt ON js.id_pertemuan=pt.id_pertemuan INNER JOIN kurikulum kr ON pt.id_kurikulum=kr.id_kurikulum INNER JOIN matapelajaran mp ON kr.id_matapelajaran=mp.id_matapelajaran where js.nis='$nis' GROUP BY mp.nama_matapelajaran"; // Tampilkan semua data gambar
$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
$row = mysqli_num_rows($sql); // Ambil jumlah data dari hasil eksekusi $sql
 
if($row > 0){ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
    while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
    $no++;

        echo "<tr align=center>";
        echo "<th align=center>".$data['nama_matapelajaran']."</th>";
        echo "<td align=center>".substr($data['TOTAL_NILAI'],0,5)."</td>";
        echo "</tr>";
?>








        
<?php

    //   echo "</tr>";
    }
}else{ // Jika data tidak ada
    echo "<tr><td>Belum ada data nilai</td></tr>";
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






</body>
</html>
<?php
$html = ob_get_contents();
ob_end_clean();
        
require_once('html2pdf/html2pdf.class.php');
$pdf = new HTML2PDF('P','A4','en');
$pdf->WriteHTML($html);
$pdf->Output('RAPORT.pdf', 'D');
?>

