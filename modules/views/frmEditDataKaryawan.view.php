<ol class="alert alert-success">
<div class="row">
    <div class="col-lg-12">
        <ol class="alert alert-warning">
            <h1><i class="fa fa-users"></i> Edit Data Karyawan : <?php if(isset($data["karyawan"])) echo $data["karyawan"]->nama; ?></h1>
        </ol>
    </div>
</div>
</ol>

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
            <meta http-equiv="refresh" content="1;url=<?php echo PATH; ?>?page=home">

        <?php } ?>
    </div>
</div>
<div>
    <div>

        <form method="post" role="form" enctype="multipart/form-data">
            <table class="table-responsive table">

                <tbody>
				
                <tr>
                    <td>
                        <label>Foto Profil</label>
                        <input type="file" name="fhoto_profil" class="form-control">
                        <?php
                            if(isset($data["karyawan"])) {
                                if($data["karyawan"]->fhoto_profil){
                                ?>
                                <img src="public/images/fhoto_profil/<?php echo $data["karyawan"]->fhoto_profil; ?>" alt="fhoto_profile" style="width:100%; max-width: 200px;">
                        <?php
                                }
                                else
                                {
                        ?>

                                <img src="resources/images/no_user.jpg" style="width:100%; max-width: 200px;" alt="fhoto_profile">
                        <?php
                                }
                            }
                        ?>
                    </td>
                </tr>

                <tr>
                    <td>
                        <br>
                        <br>
                        <label>Foto Dokumen CV</label>
                        <input type="file" name="fhoto_dokumen_cv" class="form-control">
                        <?php
                            if(isset($data["karyawan"])) {
                                if($data["karyawan"]->fhoto_dokumen_cv){
                                ?>
                                <img src="public/images/fhoto_dokumen_cv/<?php echo $data["karyawan"]->fhoto_dokumen_cv; ?>" alt="fhoto_dokumen_cv" style="width:100%; max-width: 200px;">
                        <?php
                                }
                                else
                                {
                        ?>

                                <img src="resources/images/x_document.jpg" style="width:100%; max-width: 200px;" alt="fhoto_dokumen_cv">
                        <?php
                                }
                            }
                        ?>
                    </td>
                </tr>

                <tr>
                    <td>
                        <br>
                        <br>
                        <label>Foto Dokumen Ijazah</label>
                        <input type="file" name="fhoto_dokumen_ijazah" class="form-control">
                        <?php
                            if(isset($data["karyawan"])) {
                                if($data["karyawan"]->fhoto_dokumen_ijazah){
                                ?>
                                <img src="public/images/fhoto_dokumen_ijazah/<?php echo $data["karyawan"]->fhoto_dokumen_ijazah; ?>" alt="fhoto_dokumen_ijazah" style="width:100%; max-width: 200px;">
                        <?php
                                }
                                else
                                {
                        ?>

                                <img src="resources/images/x_document.jpg" style="width:100%; max-width: 200px;" alt="fhoto_dokumen_ijazah">
                        <?php
                                }
                            }
                        ?>
                    </td>
                </tr>

                <tr>
                    <td>
                        <br>
                        <br>
                        <label>Foto Dokumen ID Card ( KTP / Passport )</label>
                        <input type="file" name="fhoto_id_card" class="form-control">
                        <?php
                            if(isset($data["karyawan"])) {
                                if($data["karyawan"]->fhoto_id_card){
                                ?>
                                <img src="public/images/fhoto_id_card/<?php echo $data["karyawan"]->fhoto_id_card; ?>" alt="fhoto_id_card" style="width:100%; max-width: 200px;">
                        <?php
                                }
                                else
                                {
                        ?>

                                <img src="resources/images/x_document.jpg" style="width:100%; max-width: 200px;" alt="fhoto_id_card">
                        <?php
                                }
                            }
                        ?>
                    </td>
                </tr>
                
                <tr>
                    <td>
                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                        <a class="btn btn-danger btn-block" href="<?php echo PATH; ?>?page=home">Cancel</a> 
                    </td>
                </tr>
                </tbody>

            </table>
        </form>

    </div>
</div>