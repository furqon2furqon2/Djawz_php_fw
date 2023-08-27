<html>
<head>
    <title>Popup CSS3 - Manual Popup Versi Terang</title>
    <link rel="stylesheet" type="text/css" href="css/demo.css">
    
    <style type="text/css">
/* untuk pemakaian di blog/website anda, yang di copy hanya css di bawah ini*/

    /* style untuk link popup */
    a.popup_profil-link {
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
    a.popup_profil-link:hover {
        background-color: #ff9900;
        box-shadow: 0 3px 0px 0px #eea900;
        -webkit-transition:all 1s;
        -moz-transition:all 1s;
        transition:all 1s;
    }
    /* end link popup*/

    /*style untuk popup */  
    #popup_profil {
        visibility: hidden;
        opacity: 0;
        margin-top: -200px;
    }
    #popup_profil:target {
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
        .popup_profil-container {
            width:600px;
        }
    }
    @media (max-width: 767px){
        .popup_profil-container {
            width:100%;
        }
    }
    .popup_profil-container {
        position: relative;
        margin:7% auto;
        padding:30px 50px;
        background-color: #fafafa;
        color:#333;
        border-radius: 3px;
    }

    a.popup_profil-close {
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


    .popup_profil-form {
        margin:10px auto;
    }
        .popup_profil-form h2 {
            margin-bottom: 5px;
            font-size: 37px;
            text-transform: uppercase;
        }
        .popup_profil-form .input-group {
            margin:10px auto;
        }
            .popup_profil-form .input-group input {
                padding:17px;
                text-align: center;
                margin-bottom: 10px;
                border-radius:3px;
                font-size: 16px; 
                display: block;
                width: 100%;
            }
            .popup_profil-form .input-group input:focus {
                outline-color:#FB8833; 
            }
            .popup_profil-form .input-group input[type="email"] {
                border:0px;
                position: relative;
            }
            .popup_profil-form .input-group input[type="submit"] {
                background-color: #FB8833;
                color: #fff;
                border: 0;
                cursor: pointer;
            }
            .popup_profil-form .input-group input[type="submit"]:focus {
                box-shadow: inset 0 3px 7px 3px #ea7722;
            }

    </style>
    
    
    
    
    
    
    
    
    <style type="text/css">
/* untuk pemakaian di blog/website anda, yang di copy hanya css di bawah ini*/

    /* style untuk link popup */
    a.popup_cv-link {
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
    a.popup_cv-link:hover {
        background-color: #ff9900;
        box-shadow: 0 3px 0px 0px #eea900;
        -webkit-transition:all 1s;
        -moz-transition:all 1s;
        transition:all 1s;
    }
    /* end link popup*/

    /*style untuk popup */  
    #popup_cv {
        visibility: hidden;
        opacity: 0;
        margin-top: -200px;
    }
    #popup_cv:target {
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
        .popup_cv-container {
            width:600px;
        }
    }
    @media (max-width: 767px){
        .popup_cv-container {
            width:100%;
        }
    }
    .popup_cv-container {
        position: relative;
        margin:7% auto;
        padding:30px 50px;
        background-color: #fafafa;
        color:#333;
        border-radius: 3px;
    }

    a.popup_cv-close {
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


    .popup_cv-form {
        margin:10px auto;
    }
        .popup_cv-form h2 {
            margin-bottom: 5px;
            font-size: 37px;
            text-transform: uppercase;
        }
        .popup_cv-form .input-group {
            margin:10px auto;
        }
            .popup_cv-form .input-group input {
                padding:17px;
                text-align: center;
                margin-bottom: 10px;
                border-radius:3px;
                font-size: 16px; 
                display: block;
                width: 100%;
            }
            .popup_cv-form .input-group input:focus {
                outline-color:#FB8833; 
            }
            .popup_cv-form .input-group input[type="email"] {
                border:0px;
                position: relative;
            }
            .popup_cv-form .input-group input[type="submit"] {
                background-color: #FB8833;
                color: #fff;
                border: 0;
                cursor: pointer;
            }
            .popup_cv-form .input-group input[type="submit"]:focus {
                box-shadow: inset 0 3px 7px 3px #ea7722;
            }

    </style>
    
    
    
    
    
    <style type="text/css">
/* untuk pemakaian di blog/website anda, yang di copy hanya css di bawah ini*/

    /* style untuk link popup */
    a.popup_ijazah-link {
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
    a.popup_ijazah-link:hover {
        background-color: #ff9900;
        box-shadow: 0 3px 0px 0px #eea900;
        -webkit-transition:all 1s;
        -moz-transition:all 1s;
        transition:all 1s;
    }
    /* end link popup*/

    /*style untuk popup */  
    #popup_ijazah {
        visibility: hidden;
        opacity: 0;
        margin-top: -200px;
    }
    #popup_ijazah:target {
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
        .popup_ijazah-container {
            width:600px;
        }
    }
    @media (max-width: 767px){
        .popup_ijazah-container {
            width:100%;
        }
    }
    .popup_ijazah-container {
        position: relative;
        margin:7% auto;
        padding:30px 50px;
        background-color: #fafafa;
        color:#333;
        border-radius: 3px;
    }

    a.popup_ijazah-close {
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


    .popup_ijazah-form {
        margin:10px auto;
    }
        .popup_ijazah-form h2 {
            margin-bottom: 5px;
            font-size: 37px;
            text-transform: uppercase;
        }
        .popup_ijazah-form .input-group {
            margin:10px auto;
        }
            .popup_ijazah-form .input-group input {
                padding:17px;
                text-align: center;
                margin-bottom: 10px;
                border-radius:3px;
                font-size: 16px; 
                display: block;
                width: 100%;
            }
            .popup_ijazah-form .input-group input:focus {
                outline-color:#FB8833; 
            }
            .popup_ijazah-form .input-group input[type="email"] {
                border:0px;
                position: relative;
            }
            .popup_ijazah-form .input-group input[type="submit"] {
                background-color: #FB8833;
                color: #fff;
                border: 0;
                cursor: pointer;
            }
            .popup_ijazah-form .input-group input[type="submit"]:focus {
                box-shadow: inset 0 3px 7px 3px #ea7722;
            }

    </style>
    
    
    
    
    
    
    
    
    
    
     <style type="text/css">
/* untuk pemakaian di blog/website anda, yang di copy hanya css di bawah ini*/

    /* style untuk link popup */
    a.popup_id_card-link {
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
    a.popup_id_card-link:hover {
        background-color: #ff9900;
        box-shadow: 0 3px 0px 0px #eea900;
        -webkit-transition:all 1s;
        -moz-transition:all 1s;
        transition:all 1s;
    }
    /* end link popup*/

    /*style untuk popup */  
    #popup_id_card {
        visibility: hidden;
        opacity: 0;
        margin-top: -200px;
    }
    #popup_id_card:target {
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
        .popup_id_card-container {
            width:600px;
        }
    }
    @media (max-width: 767px){
        .popup_id_card-container {
            width:100%;
        }
    }
    .popup_id_card-container {
        position: relative;
        margin:7% auto;
        padding:30px 50px;
        background-color: #fafafa;
        color:#333;
        border-radius: 3px;
    }

    a.popup_id_card-close {
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


    .popup_id_card-form {
        margin:10px auto;
    }
        .popup_id_card-form h2 {
            margin-bottom: 5px;
            font-size: 37px;
            text-transform: uppercase;
        }
        .popup_id_card-form .input-group {
            margin:10px auto;
        }
            .popup_id_card-form .input-group input {
                padding:17px;
                text-align: center;
                margin-bottom: 10px;
                border-radius:3px;
                font-size: 16px; 
                display: block;
                width: 100%;
            }
            .popup_id_card-form .input-group input:focus {
                outline-color:#FB8833; 
            }
            .popup_id_card-form .input-group input[type="email"] {
                border:0px;
                position: relative;
            }
            .popup_id_card-form .input-group input[type="submit"] {
                background-color: #FB8833;
                color: #fff;
                border: 0;
                cursor: pointer;
            }
            .popup_id_card-form .input-group input[type="submit"]:focus {
                box-shadow: inset 0 3px 7px 3px #ea7722;
            }

    </style>
    
    
    
    
    
    
    
    <style type="text/css">
/* untuk pemakaian di blog/website anda, yang di copy hanya css di bawah ini*/

    /* style untuk link popup */
    a.popup_data-link {
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
    a.popup_data-link:hover {
        background-color: #ff9900;
        box-shadow: 0 3px 0px 0px #eea900;
        -webkit-transition:all 1s;
        -moz-transition:all 1s;
        transition:all 1s;
    }
    /* end link popup*/

    /*style untuk popup */  
    #popup_data {
        visibility: hidden;
        opacity: 0;
        margin-top: -200px;
    }
    #popup_data:target {
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
        .popup_data-container {
            width:600px;
        }
    }
    @media (max-width: 767px){
        .popup_data-container {
            width:100%;
        }
    }
    .popup_data-container {
        position: relative;
        margin:7% auto;
        padding:30px 50px;
        background-color: #fafafa;
        color:#333;
        border-radius: 3px;
    }

    a.popup_data-close {
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


    .popup_data-form {
        margin:10px auto;
    }
        .popup_data-form h2 {
            margin-bottom: 5px;
            font-size: 37px;
            text-transform: uppercase;
        }
        .popup_data-form .input-group {
            margin:10px auto;
        }
            .popup_data-form .input-group input {
                padding:17px;
                text-align: center;
                margin-bottom: 10px;
                border-radius:3px;
                font-size: 16px; 
                display: block;
                width: 100%;
            }
            .popup_data-form .input-group input:focus {
                outline-color:#FB8833; 
            }
            .popup_data-form .input-group input[type="email"] {
                border:0px;
                position: relative;
            }
            .popup_data-form .input-group input[type="submit"] {
                background-color: #FB8833;
                color: #fff;
                border: 0;
                cursor: pointer;
            }
            .popup_data-form .input-group input[type="submit"]:focus {
                box-shadow: inset 0 3px 7px 3px #ea7722;
            }

    </style>
    
</head>

<body>

               
<?php
    foreach($data["useradmin"] as $useradmin) {
        ?>
        
        
        
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
            <meta http-equiv="refresh" content="1;url=<?php echo PATH; ?>?page=profile&action=detail&nik=<?php echo $useradmin->nik; ?>">

        <?php } ?>

        <table class="table-responsive table">
            <tbody>
                
                
            <tr>
           
            
                <tr>
                    <td style="width: 1px;">
                        <a class="btn btn-block btn-warning fa fa-photo" href="<?php echo SITE_URL; ?>?page=profile&action=detail&nik=<?php echo $useradmin->nik; ?>&&id_karyawan=<?php echo $useradmin->id_karyawan; ?>&&#popup_profil"> Update Photo Profil </a>
                        <?php
                            if($useradmin->fhoto_profil) {
                        ?>
                        <center><img src="public/images/fhoto_profil/<?php echo $useradmin->fhoto_profil; ?>" style="width: 200px;" alt="<?php echo $useradmin->fhoto_profil; ?>"></center>
                        <?php
                            }else{
                        ?>
                            <center><img src="resources/images/no_user.jpg" style="width: 200px;" alt="<?php echo $useradmin->fhoto_profil; ?>"></center>
                        <?php
                            }
                        ?>
                    </td>
                    <td style="width: 1px;">
                        <a class="btn btn-block btn-warning fa fa-photo" href="<?php echo SITE_URL; ?>?page=profile&action=detail&nik=<?php echo $useradmin->nik; ?>&&id_karyawan=<?php echo $useradmin->id_karyawan; ?>&&#popup_cv"> Update Dokumen CV </a>
                        <?php
                            if($useradmin->fhoto_dokumen_cv) {
                        ?>
                        <center><img src="public/images/fhoto_dokumen_cv/<?php echo $useradmin->fhoto_dokumen_cv; ?>" style="width: 200px;" alt="<?php echo $useradmin->fhoto_dokumen_cv; ?>"></center>
                        <?php
                            }else{
                        ?>
                            <center><img src="resources/images/no_user.jpg" style="width: 200px;" alt="<?php echo $useradmin->fhoto_dokumen_cv; ?>"></center>
                        <?php
                            }
                        ?>
                    </td>
                    <td>
                        <a class="btn btn-block btn-warning fa fa-photo" href="<?php echo SITE_URL; ?>?page=profile&action=detail&nik=<?php echo $useradmin->nik; ?>&&id_karyawan=<?php echo $useradmin->id_karyawan; ?>&&#popup_ijazah">Update Dokumen Ijazah </a>
                        <?php
                            if($useradmin->fhoto_dokumen_ijazah) {
                        ?>
                        <center><img src="public/images/fhoto_dokumen_ijazah/<?php echo $useradmin->fhoto_dokumen_ijazah; ?>" style="width: 200px;" alt="<?php echo $useradmin->fhoto_dokumen_ijazah; ?>"></center>
                        <?php
                            }else{
                        ?>
                            <center><img src="resources/images/no_user.jpg" style="width: 200px;" alt="<?php echo $useradmin->fhoto_dokumen_ijazah; ?>"></center>
                        <?php
                            }
                        ?>
                    </td>
                    <td>
                        <a class="btn btn-block btn-warning fa fa-photo" href="<?php echo SITE_URL; ?>?page=profile&action=detail&nik=<?php echo $useradmin->nik; ?>&&id_karyawan=<?php echo $useradmin->id_karyawan; ?>&&#popup_id_card"> Update ID Card  </a>
                        <?php
                            if($useradmin->fhoto_id_card) {
                        ?>
                        <center><img src="public/images/fhoto_id_card/<?php echo $useradmin->fhoto_id_card; ?>" style="width: 200px;" alt="<?php echo $useradmin->fhoto_id_card; ?>"></center>
                        <?php
                            }else{
                        ?>
                            <center><img src="resources/images/no_user.jpg" style="width: 200px;" alt="<?php echo $useradmin->fhoto_id_card; ?>"></center>
                        <?php
                            }
                        ?>
                    </td>
                </tr>
                
            </tbody>  
        </table>
        <table class="table-responsive table">
            <a class="btn btn-block btn-warning fa fa-pencil" href="<?php echo SITE_URL; ?>?page=profile&action=detail&nik=<?php echo $useradmin->nik; ?>&&id_karyawan=<?php echo $useradmin->id_karyawan; ?>&&username=<?php echo $useradmin->username; ?>&&password=<?php echo $useradmin->password; ?>&&alamat=<?php echo $useradmin->alamat; ?>&&nik=<?php echo $useradmin->nik; ?>&&#popup_data"> Update Data  </a>
            
            <tbody>
                
                <tr>
                    <td style="width: 200px;"><label>Nama</label></td>
                    <td style="width: 1px;">:</td>
                    <td style="width: 1px;"></td>
                    <td>
                        <?php echo $useradmin->nama; ?>
                    </td>
                </tr>
                
                <tr>
                    <td style="width: 200px;"><label>Username</label></td>
                    <td style="width: 1px;">:</td>
                    <td style="width: 1px;"></td>
                    <td>
                        <?php echo $useradmin->username; ?>
                    </td>
                </tr>
                
                <tr>
                    <td style="width: 200px;"><label>Golongan Darah</label></td>
                    <td style="width: 1px;">:</td>
                    <td style="width: 1px;"></td>
                    <td>
                        <?php echo $useradmin->golongan_darah; ?>
                    </td>
                </tr>
                
                <tr>
                    <td style="width: 200px;"><label>Jenis Kelamin</label></td>
                    <td style="width: 1px;">:</td>
                    <td style="width: 1px;"></td>
                    <td>
                        <?php echo $useradmin->jenis_kelamin; ?>
                    </td>
                </tr>
                
                <tr>
                    <td style="width: 200px;"><label>Tanggal Lahir</label></td>
                    <td style="width: 1px;">:</td>
                    <td style="width: 1px;"></td>
                    <td>
                        <?php echo $useradmin->tanggal_lahir; ?>
                    </td>
                </tr>
                
                <tr>
                    <td style="width: 200px;"><label>Alamat</label></td>
                    <td style="width: 1px;">:</td>
                    <td style="width: 1px;"></td>
                    <td>
                        <?php echo $useradmin->alamat; ?>
                    </td>
                </tr>
                
                <tr>
                    <td style="width: 200px;"><label>Tinggi Badan</label></td>
                    <td style="width: 1px;">:</td>
                    <td style="width: 1px;"></td>
                    <td>
                        <?php echo $useradmin->tinggi_badan; ?>
                    </td>
                </tr>
                
                <tr>
                    <td style="width: 200px;"><label>Berat Badan</label></td>
                    <td style="width: 1px;">:</td>
                    <td style="width: 1px;"></td>
                    <td>
                        <?php echo $useradmin->berat_badan; ?>
                    </td>
                </tr>
                
                <tr>
                    <td style="width: 200px;"><label>Agama</label></td>
                    <td style="width: 1px;">:</td>
                    <td style="width: 1px;"></td>
                    <td>
                        <?php echo $useradmin->agama; ?>
                    </td>
                </tr>
                
                <tr>
                    <td style="width: 200px;"><label>NIK</label></td>
                    <td style="width: 1px;">:</td>
                    <td style="width: 1px;"></td>
                    <td>
                        <?php echo $useradmin->nik; ?>
                    </td>
                </tr>
                
           
            
            </tr>
                
           
            
                
            </tbody>  
        </table>
             
                
                
        <?php
    }
?>
                </tbody>

                
            </table>

    </div>
</div>
































<div class="popup_profil-wrapper" id="popup_profil">
    <div class="popup_profil-container">
<?php  
    $id_karyawan = isset($_GET["id_karyawan"]) ? $_GET["id_karyawan"] : '0';
    $nik = isset($_GET["nik"]) ? $_GET["nik"] : '0';
?>

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
            <meta http-equiv="refresh" content="1;url=<?php echo PATH; ?>?page=profile&action=detail&nik=<?php echo $useradmin->nik; ?>">

        <?php } ?>


        <div class="alert alert-info">
            <h1> Update photo profile </h1>
        </div>

        <form method="post" role="form" enctype="multipart/form-data" action="<?php echo SITE_URL; ?>?page=profile&&action=update_profile&&id_karyawan=<?php echo $id_karyawan; ?>&&nik=<?php echo $nik; ?>">
            <table class="table-responsive table">

                <tbody>
           
                
                <tr>
                    <td style="width: 200px;"><label>Fhoto Profile</label></td>
                    <td style="width: 1px;">:</td>
                    <td>
                        <input type="file" name="fhoto_profil" class="form-control"> 
                    </td>
                </tr>

                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        <button type="submit" class="btn btn-primary btn-block">Konfirmasi</button>
                </tr>
                </tbody>

            </table>
        </form>

    </div>
</div>

            <a class="popup_profil-close" href="#closed">X</a>
    </div>
</div>






















<div class="popup_cv-wrapper" id="popup_cv">
    <div class="popup_cv-container">
<?php  
    $id_karyawan = isset($_GET["id_karyawan"]) ? $_GET["id_karyawan"] : '0';
    $nik = isset($_GET["nik"]) ? $_GET["nik"] : '0';
?>

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
            <meta http-equiv="refresh" content="1;url=<?php echo PATH; ?>?page=profile&action=detail&nik=<?php echo $useradmin->nik; ?>">

        <?php } ?>


        <div class="alert alert-info">
            <h1> Update CV </h1>
        </div>

        <form method="post" role="form" enctype="multipart/form-data" action="<?php echo SITE_URL; ?>?page=profile&&action=update_cv&&id_karyawan=<?php echo $id_karyawan; ?>&&nik=<?php echo $nik; ?>">
            <table class="table-responsive table">

                <tbody>
           
                
                <tr>
                    <td style="width: 200px;"><label>Dokumen CV (format gambar)</label></td>
                    <td style="width: 1px;">:</td>
                    <td>
                        <input type="file" name="fhoto_dokumen_cv" class="form-control"> 
                    </td>
                </tr>

                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        <button type="submit" class="btn btn-primary btn-block">Konfirmasi</button>
                </tr>
                </tbody>

            </table>
        </form>

    </div>
</div>

            <a class="popup_cv-close" href="#closed">X</a>
    </div>
</div>

























<div class="popup_ijazah-wrapper" id="popup_ijazah">
    <div class="popup_ijazah-container">
<?php  
    $id_karyawan = isset($_GET["id_karyawan"]) ? $_GET["id_karyawan"] : '0';
    $nik = isset($_GET["nik"]) ? $_GET["nik"] : '0';
?>

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
            <meta http-equiv="refresh" content="1;url=<?php echo PATH; ?>?page=profile&action=detail&nik=<?php echo $useradmin->nik; ?>">

        <?php } ?>


        <div class="alert alert-info">
            <h1> Update Ijazah </h1>
        </div>

        <form method="post" role="form" enctype="multipart/form-data" action="<?php echo SITE_URL; ?>?page=profile&&action=update_ijazah&&id_karyawan=<?php echo $id_karyawan; ?>&&nik=<?php echo $nik; ?>">
            <table class="table-responsive table">

                <tbody>
           
                
                <tr>
                    <td style="width: 200px;"><label>Dokumen Ijazah (format gambar)</label></td>
                    <td style="width: 1px;">:</td>
                    <td>
                        <input type="file" name="fhoto_dokumen_ijazah" class="form-control"> 
                    </td>
                </tr>

                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        <button type="submit" class="btn btn-primary btn-block">Konfirmasi</button>
                </tr>
                </tbody>

            </table>
        </form>

    </div>
</div>

            <a class="popup_ijazah-close" href="#closed">X</a>
    </div>
</div>






































<div class="popup_id_card-wrapper" id="popup_id_card">
    <div class="popup_id_card-container">
<?php  
    $id_karyawan = isset($_GET["id_karyawan"]) ? $_GET["id_karyawan"] : '0';
    $nik = isset($_GET["nik"]) ? $_GET["nik"] : '0';
?>

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
            <meta http-equiv="refresh" content="1;url=<?php echo PATH; ?>?page=profile&action=detail&nik=<?php echo $useradmin->nik; ?>">

        <?php } ?>


        <div class="alert alert-info">
            <h1> Update ID Card </h1>
        </div>

        <form method="post" role="form" enctype="multipart/form-data" action="<?php echo SITE_URL; ?>?page=profile&&action=update_idcard&&id_karyawan=<?php echo $id_karyawan; ?>&&nik=<?php echo $nik; ?>">
            <table class="table-responsive table">

                <tbody>
           
                
                <tr>
                    <td style="width: 200px;"><label>Dokumen ID Card (format gambar)</label></td>
                    <td style="width: 1px;">:</td>
                    <td>
                        <input type="file" name="fhoto_id_card" class="form-control"> 
                    </td>
                </tr>

                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        <button type="submit" class="btn btn-primary btn-block">Konfirmasi</button>
                </tr>
                </tbody>

            </table>
        </form>

    </div>
</div>

            <a class="popup_id_card-close" href="#closed">X</a>
    </div>
</div>













<div class="popup_data-wrapper" id="popup_data">
    <div class="popup_data-container">
<?php  
    $id_karyawan = isset($_GET["id_karyawan"]) ? $_GET["id_karyawan"] : '0';
    $nik = isset($_GET["nik"]) ? $_GET["nik"] : '0';
    
    $username = isset($_GET["username"]) ? $_GET["username"] : '0';
    $password = isset($_GET["password"]) ? $_GET["password"] : '0';
    $alamat = isset($_GET["alamat"]) ? $_GET["alamat"] : '0';
    $nik = isset($_GET["nik"]) ? $_GET["nik"] : '0';
?>

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
            <meta http-equiv="refresh" content="1;url=<?php echo PATH; ?>?page=profile&action=detail&nik=<?php echo $useradmin->nik; ?>">

        <?php } ?>


        <div class="alert alert-info">
            <h1> Update Data </h1>
        </div>

        <form method="post" role="form" enctype="multipart/form-data" action="<?php echo SITE_URL; ?>?page=profile&&action=update_data&&id_karyawan=<?php echo $id_karyawan; ?>&&nik=<?php echo $nik; ?>">
            <table class="table-responsive table">

                <tbody>
           
                
                <tr>
                    <td style="width: 200px;"><label>Username</label></td>
                    <td style="width: 1px;">:</td>
                    <td>
                        <input type="text" name="username" class="form-control" value="<?php echo $username; ?>">
                    </td>
                </tr>
                
                <tr>
                    <td style="width: 200px;"><label>password Baru</label></td>
                    <td style="width: 1px;">:</td>
                    <td>
        <input type="text" name="password" class="form-control" placeholder="kosongkan saja apabila tidak merubah">
                    </td>
                </tr>
                
                <tr>
                    <td style="width: 200px;"><label>Alamat</label></td>
                    <td style="width: 1px;">:</td>
                    <td>
                        <input type="text" name="alamat" class="form-control" value="<?php echo $alamat; ?>">
                    </td>
                </tr>
                
                <tr>
                    <td style="width: 200px;"><label>NIK</label></td>
                    <td style="width: 1px;">:</td>
                    <td>
                        <input type="text" name="nik" class="form-control" value="<?php echo $nik; ?>">
                    </td>
                </tr>

                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        <button type="submit" class="btn btn-primary btn-block">Konfirmasi</button>
                </tr>
                </tbody>

            </table>
        </form>

    </div>
</div>

            <a class="popup_data-close" href="#closed">X</a>
    </div>
</div>




</body>
</html>