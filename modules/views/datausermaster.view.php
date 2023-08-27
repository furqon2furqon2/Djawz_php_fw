

<div class="row">
    <div class="col-lg-12">
        <?php
        if(isset($data["error"]) && count($data["error"]) > 0) {
            ?>
            <div class="alert alert-danger" role="alert">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <ul class="list-square">
                    <?php
                    foreach($data["error"] as $error) {
                        ?>
                        <li>
                            <?php echo $error; ?>
                        </li>
                    <?php } ?>

                </ul>
            </div>
        <?php

        }else if(isset($data["success"])) {
            ?>

            <div class="alert alert-success">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <?php echo $data["success"]; ?>
            </div>
            <meta http-equiv="refresh" content="1;url=<?php echo PATH; ?>?page=datausermaster">

        <?php } ?>


        <div class="alert alert-info">
            <h1><i class="fa fa-pencil"></i> Registrasi User Master</h1>
        </div>

        <form method="post" role="form" enctype="multipart/form-data">
            <table class="table-responsive table">

                <tbody>
				<tr>
                    <td style="width: 200px;"><label>Nama Karyawan</label></td>
                    <td style="width: 1px;">:</td>
                    <td>
                        <select class="form-control" name="nik">
                            <?php
                                foreach($data["useradmin"] as $useradmin) {
                                    ?> 
                                    <option value="<?php echo $useradmin->nik; ?>"><?php echo $useradmin->nama; ?> [ NIK : <?php echo $useradmin->nik; ?> ]</option>
                                <?php
                                }
                            ?>
                        </select>
                    </td>
                </tr>
                
                <tr>
                    <td style="width: 200px;"><label>Username</label></td>
                    <td style="width: 1px;">:</td>
                    <td>
                        <input type="text" name="username" class="form-control">
                    </td>
                </tr>
                <tr>
                    <td style="width: 200px;"><label>Password</label></td>
                    <td style="width: 1px;">:</td>
                    <td>
                        <input type="text" name="password" class="form-control">
                    </td>
                </tr>
                
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        <button type="submit" class="btn btn-primary btn-block">Submit Registrasi User Master</button>
                </tr>
                </tbody>

            </table>
        </form>

    </div>
</div>






















































<div class="alert alert-info">
 
<div class="row">
    <div class="col-lg-12">
        
        <ol class="alert alert-warning">

            <h1><i class="fa fa-star"></i> Data User Master</h1>
            
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
                    <th><center>Tanggal Register</center></th>
                    <th><center>Nama Karyawan</center></th>
                    <th><center>Nomor Induk KTP</center></th>
                    <th><center>Username</center></th>

                    <th><center>Fhoto Profil</center></th>
                    
                    
                </tr>
                </thead>
                <tbody>
                <?php
                    $no = 1;
                    foreach($data["usermaster"] as $usermaster) {
                        $result_filter = array();
                        if ($usermaster->username != "") {

                            ?>
                            <tr>
                                <td><center><?php echo $no; ?></center></td>
                                

                                <td><center><?php echo $usermaster->tanggal_register; ?></center></td>
                                <td><center><?php echo $usermaster->nama; ?></center></td>
                                <td><center><?php echo $usermaster->nik; ?></center></td>
                                <td><center><?php echo $usermaster->username; ?></center></td>

                                <td>
                                    <center>
                                    <?php
                                        if($usermaster->fhoto_profil) {
                                    ?>
                                        <img src="public/images/fhoto_profil/<?php echo $usermaster->fhoto_profil; ?>" style="width: 50px;" alt="<?php echo $usermaster->fhoto_profil; ?>">
                                    <?php
                                    }else{
                                    ?>
                                        <img src="resources/images/no_user.jpg" style="width: 50px;" alt="<?php echo $usermaster->fhoto_profil; ?>">
                                    <?php
                                    }
                                    ?>
                                    </center>
                                </td>

                               
                                
                            </tr>
                            <?php
                            $no++;
                        }
                    }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>