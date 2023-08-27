
<div class="row">
    <div class="col-lg-12">

        <!--<form method="post" role="form" enctype="multipart/form-data" action="modules/views/RAPORT.php?nis=<?php echo $siswa->nis; ?>">-->
        
        <form method="POST" action="modules/views/LAPORAN_DATA_SISWA.php">
            <table class="table-responsive table">

                <tbody>
               
                
                
                 <tr>
                    <td>
                        <select class="form-control" name="id_kelas">
                            <?php
                                foreach($data["kelas"] as $kelas) {
                                    ?> 
                                    <option value="<?php echo $kelas->id_kelas; ?>"><?php echo $kelas->nama_kelas; ?></option>
                                <?php
                                }
                            ?>
                        </select>
                    </td>
                </tr>
                
                <tr>
                    <td>
                        <button type="submit" class="btn btn-primary btn-block">CETAK</button>
                        <!--<a class="btn btn-block btn-primary fa fa-print" href="modules/views/LAPORAN_DATA_SISWA.php?id_kelas=<?php echo $siswa->nis; ?>"> CETAK </a>-->
                    </td>
                </tr>
                </tbody>

                
            </table>
        </form>

    </div>
</div>
