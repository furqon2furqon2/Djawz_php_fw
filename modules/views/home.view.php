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








<ol class="alert alert-warning">
<div class="row">
    <div class="col-lg-12">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>
                        <center>
<a class='btn btn-block btn-success fa fa-pencil' href='<?php echo PATH; ?>?page=insertdatakaryawan'> Register</a>
                        </center>
                    </th>
                </tr>
            </thead>
        </table>
    </div>
</div>
</ol>

<ol class="alert alert-success">

<div class="row">
    <div class="col-lg-12">
        
        <ol class="alert alert-warning">

            <h1><i class="fa fa-users"></i> Data Guru</h1>
            
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
                    <th><center>Nama Guru</center></th>
                    <th><center>Nomor Induk KTP</center></th>

                    <th><center>Fhoto Profil</center></th>
                    <th><center>Curiculum Vitae</center></th>
                    <th><center>Ijazah</center></th>
                    <th>
                        <center>
                        <h4>Fhoto ID Card</h4>
                        <h6>KTP/Passport</h6>
                        </center>
                    </th>
                    
                    <th class="header" style="width:150px;">Action</th>
                </tr>
                </thead>
                <tbody>
                <?php
                    $no = 1;
                    foreach($data["useradmin"] as $useradmin) {
                        ?>
                        <tr>
                            <td><center><?php echo $no; ?></center></td>
                            
                            <td><center><?php echo $useradmin->tanggal_register; ?></center></td>
                            <td><center><?php echo $useradmin->nama; ?></center></td>
                            <td><center><?php echo $useradmin->nik; ?></center></td>

                            <td>
                                <center>
                                <?php
                                    if($useradmin->fhoto_profil) {
                                ?>
                                    <img src="public/images/fhoto_profil/<?php echo $useradmin->fhoto_profil; ?>" style="width: 100px;" alt="<?php echo $useradmin->fhoto_profil; ?>">
                                <?php
                                }else{
                                ?>
                                    <img src="resources/images/no_user.jpg" style="width: 100px;" alt="<?php echo $useradmin->fhoto_profil; ?>">
                                <?php
                                }
                                ?>
                                </center>
                            </td>

                            <td>
                                <center>
                                <?php
                                    if($useradmin->fhoto_dokumen_cv) {
                                ?>
                                    <img src="public/images/fhoto_dokumen_cv/<?php echo $useradmin->fhoto_dokumen_cv; ?>" style="width: 100px;" alt="<?php echo $useradmin->fhoto_dokumen_cv; ?>">
                                <?php
                                }else{
                                ?>
                                    <img src="resources/images/x_document.jpg" style="width: 100px;" alt="<?php echo $useradmin->fhoto_dokumen_cv; ?>">
                                <?php
                                }
                                ?>
                                </center>
                            </td>

                            <td>
                                <center>
                                <?php
                                    if($useradmin->fhoto_dokumen_ijazah) {
                                ?>
                                    <img src="public/images/fhoto_dokumen_ijazah/<?php echo $useradmin->fhoto_dokumen_ijazah; ?>" style="width: 100px;" alt="<?php echo $useradmin->fhoto_dokumen_ijazah; ?>">
                                <?php
                                }else{
                                ?>
                                    <img src="resources/images/x_document.jpg" style="width: 100px;" alt="<?php echo $useradmin->fhoto_dokumen_ijazah; ?>">
                                <?php
                                }
                                ?>
                                </center>
                            </td>
                           


                           <td>
                                <center>
                                <?php
                                    if($useradmin->fhoto_id_card) {
                                ?>
                                    <img src="public/images/fhoto_id_card/<?php echo $useradmin->fhoto_id_card; ?>" style="width: 100px;" alt="<?php echo $useradmin->fhoto_id_card; ?>">
                                <?php
                                }else{
                                ?>
                                    <img src="resources/images/x_document.jpg" style="width: 100px;" alt="<?php echo $useradmin->fhoto_id_card; ?>">
                                <?php
                                }
                                ?>
                                </center>
                            </td>



                            <td>
                                <center>
                                    <a class="btn btn-block btn-success fa fa-eye" href="<?php echo SITE_URL; ?>?page=home&&nik=<?php echo $useradmin->nik; ?>&&fhoto_profil=<?php echo $useradmin->fhoto_profil; ?>&&fhoto_dokumen_cv=<?php echo $useradmin->fhoto_dokumen_cv; ?>&&fhoto_dokumen_ijazah=<?php echo $useradmin->fhoto_dokumen_ijazah; ?>&&fhoto_id_card=<?php echo $useradmin->fhoto_id_card; ?>&&golongan_darah=<?php echo $useradmin->golongan_darah; ?>&&nama=<?php echo $useradmin->nama; ?>&&jenis_kelamin=<?php echo $useradmin->jenis_kelamin; ?>&&tanggal_lahir=<?php echo $useradmin->tanggal_lahir; ?>&&tinggi_badan=<?php echo $useradmin->tinggi_badan; ?>&&berat_badan=<?php echo $useradmin->berat_badan; ?>&&agama=<?php echo $useradmin->agama; ?>&&tanggal_register=<?php echo $useradmin->tanggal_register; ?>&&alamat=<?php echo $useradmin->alamat; ?>&&#popup"> Detail </a>
                                
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
</ol>







<div class="popup-wrapper" id="popup">
    <div class="popup-container">
        <?php  
            $nik = isset($_GET["nik"]) ? $_GET["nik"] : '0';

            $fhoto_profil = isset($_GET["fhoto_profil"]) ? $_GET["fhoto_profil"] : '0';
            $fhoto_dokumen_cv = isset($_GET["fhoto_dokumen_cv"]) ? $_GET["fhoto_dokumen_cv"] : '0';
            $fhoto_dokumen_ijazah = isset($_GET["fhoto_dokumen_ijazah"]) ? $_GET["fhoto_dokumen_ijazah"] : '0';
            $fhoto_id_card = isset($_GET["fhoto_id_card"]) ? $_GET["fhoto_id_card"] : '0';
            $golongan_darah = isset($_GET["golongan_darah"]) ? $_GET["golongan_darah"] : '0';
            $nama = isset($_GET["nama"]) ? $_GET["nama"] : '0';
            $jenis_kelamin = isset($_GET["jenis_kelamin"]) ? $_GET["jenis_kelamin"] : '0';
            $tanggal_lahir = isset($_GET["tanggal_lahir"]) ? $_GET["tanggal_lahir"] : '0';
            $tinggi_badan = isset($_GET["tinggi_badan"]) ? $_GET["tinggi_badan"] : '0';
            $berat_badan = isset($_GET["berat_badan"]) ? $_GET["berat_badan"] : '0';
            $agama = isset($_GET["agama"]) ? $_GET["agama"] : '0';
            $tanggal_register = isset($_GET["tanggal_register"]) ? $_GET["tanggal_register"] : '0';
            $alamat = isset($_GET["alamat"]) ? $_GET["alamat"] : '0';
        ?>
            




            <div>
                <div>
                        <table class="table-responsive table">

                            <tbody>
                            
                            <tr>
                                

                           <tr>
                                <td>
                                    <h6><i class="fa fa-book"></i> <?php echo $nama;?> <h7>[ <?php echo $nik;?> ]</h7></h6>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h6><i class="fa fa-plus"></i> Golongan Darah <h7><?php echo $golongan_darah;?></h7></h6>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h6><i class="fa fa-user"></i> Jenis Kelamin <h7><?php echo $jenis_kelamin;?></h7></h6>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h6><i class="fa fa-calendar"></i> Tanggal Lahir <h7><?php echo $tanggal_lahir;?></h7></h6>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h6><i class="fa fa-user"></i> Tinggi Badan <h7><?php echo $tinggi_badan;?></h7></h6>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h6><i class="fa fa-user"></i> Berat Badan <h7><?php echo $berat_badan;?></h7></h6>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h6><i class="fa fa-star"></i> Agama <h7><?php echo $agama;?></h7></h6>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h6><i class="fa fa-calendar"></i> Terdaftar Sejak <h7><?php echo $tanggal_register;?></h7></h6>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <h6><i class="fa fa-home"></i> Alamat <h7><?php echo $alamat;?></h7></h6>
                                </td>
                            </tr>

                            </tbody>

                        </table>

                </div>
            </div>






            <a class="popup-close" href="#closed">X</a>
    </div>
</div>

</div>

</body>
</html>
