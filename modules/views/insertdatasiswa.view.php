
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
            <meta http-equiv="refresh" content="1;url=<?php echo PATH; ?>?page=siswa">

        <?php } ?>


        <div class="alert alert-success">
            <h1><i class="fa fa-pencil"></i> Registrasi Siswa</h1>
        </div>

        <form method="post" role="form" enctype="multipart/form-data">
            <table class="table-responsive table">

                <tbody>
               
         


                <tr>
                    <td style="width: 200px;"><label>Nama Siswa</label></td>
                    <td style="width: 1px;">:</td>
                    <td>
                        <input type="text" name="nama_siswa" class="form-control">
                    </td>
                </tr>


                <tr>
                    <td style="width: 200px;"><label>Telephone Siswa</label></td>
                    <td style="width: 1px;">:</td>
                    <td>
                        <input type="text" name="telephone_siswa" class="form-control">
                    </td>
                </tr>


                <tr>
                    <td><label>Foto Profil</label></td>
                    <td style="width: 1px;">:</td>
                    <td>
                        <input type="file" name="fhoto_profil" class="form-control"> 
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
                    <td style="width: 200px;"><label>Kelas</label></td>
                    <td style="width: 1px;">:</td>
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
                    <td></td>
                    <td></td>
                    <td>
                        <button type="submit" class="btn btn-primary btn-block">Konfimasi Registrasi</button>
                    </td>
                </tr>
                </tbody>

                
            </table>
        </form>

    </div>
</div>
