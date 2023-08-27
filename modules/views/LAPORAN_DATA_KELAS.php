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




<table border="1" width=1000 height=150 align="center" border="0" cellpadding="0">

<tr>

    <th align="center">No</th>
    <th align="center">Nama Kelas</th>
    <th align="center">Jumlah Siswa</th>
    
</tr>
<?php
// Load file koneksi.php


include "koneksi_CETAK.php";
$no=0;

$query = "SELECT kelas.nama_kelas,Count(*) as qty_siswa FROM siswa INNER Join kelas ON siswa.id_kelas=kelas.id_kelas GROUP BY kelas.nama_kelas"; // Tampilkan semua data gambar


$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
$row = mysqli_num_rows($sql); // Ambil jumlah data dari hasil eksekusi $sql
 
if($row > 0){ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
    while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
    $no++;

        echo "<tr>";
        echo "<td align=center>".$no."</td>";
        
       
        
        
        echo "<td align=center>".$data['nama_kelas']."</td>";
        echo "<td align=center>".$data['qty_siswa']."</td>";
        
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
$pdf->Output('LAPORAN_DATA_KELAS.pdf', 'D');
?>

