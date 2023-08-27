<!DOCTYPE html>
<html>
<head>
    <title>Popup CSS3 - Manual Popup Versi Terang</title>
    <link rel="stylesheet" type="text/css" href="css/demo.css">
    <style type="text/css">
/* untuk pemakaian di blog/website anda, yang di copy hanya css di bawah ini*/

    /* style untuk link popup */
    a.popup-link {
        padding:17px 0;
        text-align: center;
        margin:7% auto;
        position: relative;
        width: 300px;
        color: #fff;
        text-decoration: none;
        background-color: #FFBA00;
        border-radius: 3px;
        box-shadow: 0 5px 0px 0px #eea900;
        display: block;
    }
    a.popup-link:hover {
        background-color: #ff9900;
        box-shadow: 0 3px 0px 0px #eea900;
        -webkit-transition:all 1s;
        -moz-transition:all 1s;
        transition:all 1s;
    }
    /* end link popup*/

    /*style untuk popup */  
    #popup {
        visibility: hidden;
        opacity: 0;
        margin-top: -200px;
    }
    #popup:target {
        visibility:visible;
        opacity: 1;
        background-color: rgba(0,0,0,0.8);
        position: fixed;
        top:0;
        left:0;
        right:0;
        bottom:0;
        margin:0;
        z-index: 99999999999;
        -webkit-transition:all 1s;
        -moz-transition:all 1s;
        transition:all 1s;
    }

    @media (min-width: 768px){
        .popup-container {
            width:600px;
        }
    }
    @media (max-width: 767px){
        .popup-container {
            width:100%;
        }
    }
    .popup-container {
        position: relative;
        margin:7% auto;
        padding:30px 50px;
        background-color: #fafafa;
        color:#333;
        border-radius: 3px;
    }

    a.popup-close {
        position: absolute;
        top:3px;
        right:3px;
        background-color: #333;
        padding:7px 10px;
        font-size: 20px;
        text-decoration: none;
        line-height: 1;
        color:#fff;
    }

    /* style untuk isi popup */


    .popup-form {
        margin:10px auto;
    }
        .popup-form h2 {
            margin-bottom: 5px;
            font-size: 37px;
            text-transform: uppercase;
        }
        .popup-form .input-group {
            margin:10px auto;
        }
            .popup-form .input-group input {
                padding:17px;
                text-align: center;
                margin-bottom: 10px;
                border-radius:3px;
                font-size: 16px; 
                display: block;
                width: 100%;
            }
            .popup-form .input-group input:focus {
                outline-color:#FB8833; 
            }
            .popup-form .input-group input[type="email"] {
                border:0px;
                position: relative;
            }
            .popup-form .input-group input[type="submit"] {
                background-color: #FB8833;
                color: #fff;
                border: 0;
                cursor: pointer;
            }
            .popup-form .input-group input[type="submit"]:focus {
                box-shadow: inset 0 3px 7px 3px #ea7722;
            }

    </style>
</head>
<body>












<div class="popup-wrapper">
<div class="popup-container">

<ol class="alert alert-success">

<div class="row">
    <div class="col-lg-12">
        
        <ol class="alert alert-warning">

            <h1><i class="fa fa-users"></i> Detail Data Karyawan : <?php if(isset($data["useradmin"])) echo $data["useradmin"]->nama; ?></h1>
            
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
            <table class="table-responsive table">

                <tbody>
				
                <tr>
                    <td>
                        <br>
                        <br>
                        <center><label>Foto Profil</label></center>
                        <?php
                            if(isset($data["useradmin"])) {
                                if($data["useradmin"]->fhoto_profil){
                                ?>
                                <center><img src="public/images/fhoto_profil/<?php echo $data["useradmin"]->fhoto_profil; ?>" alt="fhoto_profile" style="width:300%; max-width: 210px;"></center>
                        <?php
                                }
                                else
                                {
                        ?>

                                <center><img src="resources/images/no_user.jpg" style="width:300%; max-width: 210px;" alt="fhoto_profile"></center>
                        <?php
                                }
                            }
                        ?>
                    </td>
                    <td>
                        <br>
                        <br>
                        <center><label>Dokumen CV</label></center>
                        <?php
                            if(isset($data["useradmin"])) {
                                if($data["useradmin"]->fhoto_dokumen_cv){
                                ?>
                                <center><img src="public/images/fhoto_dokumen_cv/<?php echo $data["useradmin"]->fhoto_dokumen_cv; ?>" alt="fhoto_dokumen_cv" style="width:300%; max-width: 210px;"></center>
                        <?php
                                }
                                else
                                {
                        ?>

                                <center><img src="resources/images/x_document.jpg" style="width:300%; max-width: 210px;" alt="fhoto_dokumen_cv"></center>
                        <?php
                                }
                            }
                        ?>
                    </td>
                    <td>
                        <br>
                        <br>
                        <center><label>Dokumen Ijazah</label></center>
                        <?php
                            if(isset($data["useradmin"])) {
                                if($data["useradmin"]->fhoto_dokumen_ijazah){
                                ?>
                                <center><img src="public/images/fhoto_dokumen_ijazah/<?php echo $data["useradmin"]->fhoto_dokumen_ijazah; ?>" alt="fhoto_dokumen_ijazah" style="width:300%; max-width: 210px;"></center>
                        <?php
                                }
                                else
                                {
                        ?>

                                <center><img src="resources/images/x_document.jpg" style="width:300%; max-width: 210px;" alt="fhoto_dokumen_ijazah"></center>
                        <?php
                                }
                            }
                        ?>
                    </td>
                    <td>
                        <br>
                        <br>
                        <center><label>Dokumen ID Card ( KTP / Passport )</label></center>
                        <?php
                            if(isset($data["useradmin"])) {
                                if($data["useradmin"]->fhoto_id_card){
                                ?>
                                <center><img src="public/images/fhoto_id_card/<?php echo $data["useradmin"]->fhoto_id_card; ?>" alt="fhoto_id_card" style="width:300%; max-width: 210px;"></center>
                        <?php
                                }
                                else
                                {
                        ?>

                                <center><img src="resources/images/x_document.jpg" style="width:300%; max-width: 210px;" alt="fhoto_id_card"></center>
                        <?php
                                }
                            }
                        ?>
                    </td>
                </tr>

                <tr>
                    <td>
                        <h3><i class="fa fa-star"></i> NIK KTP <h4><?php if(isset($data["useradmin"])) echo $data["useradmin"]->nik; ?></h4></h3>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3><i class="fa fa-plus"></i> Golongan Darah <h4><?php if(isset($data["useradmin"])) echo $data["useradmin"]->golongan_darah; ?></h4></h3>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3><i class="fa fa-user"></i> Jenis Kelamin <h4><?php if(isset($data["useradmin"])) echo $data["useradmin"]->jenis_kelamin; ?></h4></h3>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3><i class="fa fa-calendar"></i> Tanggal Lahir <h4><?php if(isset($data["useradmin"])) echo $data["useradmin"]->tanggal_lahir; ?></h4></h3>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3><i class="fa fa-user"></i> Tinggi Badan <h4><?php if(isset($data["useradmin"])) echo $data["useradmin"]->tinggi_badan; ?></h4></h3>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3><i class="fa fa-user"></i> Berat Badan <h4><?php if(isset($data["useradmin"])) echo $data["useradmin"]->berat_badan; ?></h4></h3>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3><i class="fa fa-star"></i> Agama <h4><?php if(isset($data["useradmin"])) echo $data["useradmin"]->agama; ?></h4></h3>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3><i class="fa fa-calendar"></i> Terdaftar Sejak <h4><?php if(isset($data["useradmin"])) echo $data["useradmin"]->tanggal_register; ?></h4></h3>
                    </td>
                </tr>
                <tr>
                    <td>
                        <h3><i class="fa fa-home"></i> Alamat <h4><?php if(isset($data["useradmin"])) echo $data["useradmin"]->alamat; ?></h4></h3>
                    </td>
                </tr>

                </tbody>

            </table>

            <a class="btn btn-danger btn-block" href="<?php echo PATH; ?>?page=home">Back</a> 

    </div>
</div>



</div>
</div>





</body>
</html>