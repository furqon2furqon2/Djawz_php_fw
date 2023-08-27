
<ol class="alert alert-warning">
<div class="row">
    <div class="col-lg-12">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>
                        <center>
<a class='btn btn-block btn-success fa fa-pencil' href='<?php echo PATH; ?>?page=insertdatasiswa'> Register</a>
                        </center>
                    </th>
                </tr>
            </thead>
        </table>
    </div>
</div>
</ol>



<div class="alert alert-info">
 
<div class="row">
    <div class="col-lg-12">
        
        <ol class="alert alert-warning">

            <h1><i class="fa fa-users"></i> Data Siswa </h1>
            
        </ol>

    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        

        <div class="table-responsive">
            <table class="table table-hover data-table table-striped tablesorter">
                <thead>
                <tr>
                    <th class="header" style="width: 40px;"><center>No</center></th>
                    
                    <th><center>Fhoto Siswa</center></th>

                    <th><center>Nomor Induk Siswa</center></th>

                    <th><center>Nama Siswa</center></th>

                    <th><center>Telephone Siswa </center></th>
                    
                    <th><center>Kelas </center></th>
                    
                    <th><center>Username </center></th>
                    
                    <th><center>Action </center></th>
                    
                </tr>
                </thead>
                <tbody>
                <?php
                    $no = 1;
                    foreach($data["siswa"] as $siswa) {

                            ?>
                            <tr>
                                
                            <td><center><?php echo $no; ?></center></td>
                                
                            <td>
                                <center>
                                <?php
                                    if($siswa->fhoto_profil) {
                                ?>
                                    <img src="public/images/fhoto_profil/<?php echo $siswa->fhoto_profil; ?>" style="width: 100px;" alt="<?php echo $siswa->fhoto_profil; ?>">
                                <?php
                                }else{
                                ?>
                                    <img src="resources/images/no_user.jpg" style="width: 100px;" alt="<?php echo $siswa->fhoto_profil; ?>">
                                <?php
                                }
                                ?>
                                </center>
                            </td>


                                <td><center><?php echo $siswa->nis; ?></center></td>

                                <td><center><?php echo $siswa->nama_siswa; ?></center></td>
                                
                                <td><center><?php echo $siswa->telephone_siswa; ?></center></td>
                                
                                <td><center><?php echo $siswa->nama_kelas; ?></center></td>
                                
                                <td><center><?php echo $siswa->username; ?></center></td>
                                
                            <td>
                                <center>
                                    <a class="btn btn-block btn-warning fa fa-pencil" href="<?php echo SITE_URL; ?>?page=siswa&&action=update&&nis=<?php echo $siswa->nis; ?>"> Edit </a>
                                </center>
                                <br>
                                <center>
                                    <a class="btn btn-block btn-danger fa fa-trash" href="<?php echo SITE_URL; ?>?page=siswa&&action=delete&&nis=<?php echo $siswa->nis; ?>"> Hapus </a>
                                </center>
                            </td>
                                        
                                   
                              

                            </tr>
                            <?php
                            $no++;
                    }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>