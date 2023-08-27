
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


        <div class="alert alert-success">
            <h1><i class="fa fa-pencil"></i> Registrasi Administrator</h1>
        </div>

        <form method="post" role="form" enctype="multipart/form-data">
            <table class="table-responsive table">

                <tbody>
                
                
                
                
                <tr>
                    <td style="width: 200px;"><label>Nama Karyawan</label></td>
                    <td style="width: 1px;">:</td>
                    <td>
                        <input type="text" name="nama" class="form-control">
                    </td>
                </tr>


                <tr>
                    <td style="width: 200px;"><label>Nomor Induk KTP</label></td>
                    <td style="width: 1px;">:</td>
                    <td>
                        <input type="text" name="nik" class="form-control">
                    </td>
                </tr>
                
                
                <tr>
                    <td style="width: 200px;"><label>Jenis Kelamin</label></td>
                    <td style="width: 1px;">:</td>
                    <td>
                        <select class="form-control" name="jenis_kelamin">
                            <option value="Pria">Pria</option>
                            <option value="Wanita">Wanita</option>
                        </select>
                    </td>
                </tr>


                <tr>
                    <td style="width: 200px;"><label>Tanggal Lahir</label></td>
                    <td style="width: 1px;">:</td>
                    <td>
                        <input type="date" name="tanggal_lahir" class="form-control">
                    </td>
                </tr>


                <tr>
                    <td style="width: 200px;"><label>Golongan Darah</label></td>
                    <td style="width: 1px;">:</td>
                    <td>
                        <select class="form-control" name="golongan_darah">
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="AB">AB</option>
                            <option value="O">O</option>
                        </select>
                    </td>
                </tr>


                <tr>
                    <td style="width: 200px;"><label>Alamat</label></td>
                    <td style="width: 1px;">:</td>
                    <td>
                        <input type="text" name="alamat" class="form-control">
                    </td>
                </tr>


                <tr>
                    <td style="width: 200px;"><label>Tinggi Badan</label></td>
                    <td style="width: 1px;">:</td>
                    <td>
                        <input type="text" name="tinggi_badan" class="form-control">
                    </td>
                </tr>


                <tr>
                    <td style="width: 200px;"><label>Berat Badan</label></td>
                    <td style="width: 1px;">:</td>
                    <td>
                        <input type="text" name="berat_badan" class="form-control">
                    </td>
                </tr>


                <tr>
                    <td style="width: 200px;"><label>Agama</label></td>
                    <td style="width: 1px;">:</td>
                    <td>
                        <select class="form-control" name="agama">
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Budha">Budha</option>
                            <option value="Konghuchu">Konghuchu</option>
                        </select>
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
                    <td><label>Foto Dokumen CV</label></td>
                    <td style="width: 1px;">:</td>
                    <td>
                        <input type="file" name="fhoto_dokumen_cv" class="form-control"> 
                    </td>
                </tr>

                <tr>
                    <td><label>Foto Dokumen Ijazah</label></td>
                    <td style="width: 1px;">:</td>
                    <td>
                        <input type="file" name="fhoto_dokumen_ijazah" class="form-control"> 
                    </td>
                </tr>

                <tr>
                    <td><label><h5>Foto ID Card</h5><h6>( KTP / Passport )</h6></label></td>
                    <td style="width: 1px;">:</td>
                    <td>
                        <input type="file" name="fhoto_id_card" class="form-control"> 
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
                        <button type="submit" class="btn btn-primary btn-block">Konfimasi Registrasi</button>
                    </td>
                </tr>
                </tbody>

                
            </table>
        </form>

    </div>
</div>
