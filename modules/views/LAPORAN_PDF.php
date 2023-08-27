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
    <h2 align='center'>
       LAPORAN PENDAPATAN PENYEWAAN
    </h2>
<table border="1" width=1000 height=150 align="center" border="0" cellpadding="0">

<tr>

    <th align="center">No</th>
    <th align="center">tanggal</th>
    <th align="center">Jumlah Pendapatan</th>
    
</tr>
<?php
// Load file koneksi.php
include "koneksi_CETAK.php";
$no=0;
$query = "SELECT jadwal.tanggal as tanggal, jadwal.harga as harga FROM pemesanan INNER JOIN jadwal ON pemesanan.id_jadwal=jadwal.id_jadwal where pemesanan.status='Confirm'"; // Tampilkan semua data gambar

$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
$row = mysqli_num_rows($sql); // Ambil jumlah data dari hasil eksekusi $sql
 
if($row > 0){ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
    while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
    $no++;

        echo "<tr>";
        echo "<td align=center>".$no."</td>";
        
       
        
        
        echo "<td align=center>".$data['tanggal']."</td>";
        echo "<td align=center>Rp.".number_format($data['harga'], 0, ",", ".").",-</td>";
        
        echo "</tr>";
    }
}else{ // Jika data tidak ada
    echo "<tr><td colspan='4'>Data tidak ada</td></tr>";
}
?>









<?php
// Load file koneksi.php
include "koneksi_CETAK.php";
$no=0;
$status="FINISHED";
$query = "SELECT SUM(jadwal.harga) AS total FROM pemesanan INNER JOIN jadwal ON pemesanan.id_jadwal=jadwal.id_jadwal where pemesanan.status='Confirm'"; // Tampilkan semua data gambar

$sql = mysqli_query($connect, $query); // Eksekusi/Jalankan query dari variabel $query
$row = mysqli_num_rows($sql); // Ambil jumlah data dari hasil eksekusi $sql
 
if($row > 0){ // Jika jumlah data lebih dari 0 (Berarti jika data ada)
    while($data = mysqli_fetch_array($sql)){ // Ambil semua data dari hasil eksekusi $sql
    $no++;

        echo "<tr>";
        echo "<td align=center border=1>Sub Total</td>";
        echo "<td align=center border=1></td>";
        echo "<td align=center border=1>Rp.".number_format($data['total'], 0, ",", ".").",-</td>";
        
        echo "</tr>";
    }
}else{ // Jika data tidak ada
    echo "<tr>
    <td colspan='4'>Data tidak ada</td>
    <td colspan='4'>Data tidak ada</td>
    <td colspan='4'>Data tidak ada</td>
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
$pdf->Output('LAPORAN_PENDAPATAN_PENYEWAAN.pdf', 'D');
?>

