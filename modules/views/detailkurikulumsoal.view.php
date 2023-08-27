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
    
    
    <style type="text/css">
        
    a.popup_detail-link {
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
    a.popup_detail-link:hover {
        background-color: #ff9900;
        box-shadow: 0 3px 0px 0px #eea900;
        -webkit-transition:all 1s;
        -moz-transition:all 1s;
        transition:all 1s;
    }
    /* end link popup*/

    /*style untuk popup */  
    #popup_detail {
        visibility: hidden;
        opacity: 0;
        margin-top: -200px;
    }
    #popup_detail:target {
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
        .popup_detail-container {
            width:600px;
        }
    }
    @media (max-width: 767px){
        .popup_detail-container {
            width:100%;
        }
    }
    .popup_detail-container {
        position: relative;
        margin:7% auto;
        padding:30px 50px;
        background-color: #fafafa;
        color:#333;
        border-radius: 3px;
    }

    a.popup_detail-close {
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


    .popup_detail-form {
        margin:10px auto;
    }
        .popup_detail-form h2 {
            margin-bottom: 5px;
            font-size: 37px;
            text-transform: uppercase;
        }
        .popup_detail-form .input-group {
            margin:10px auto;
        }
            .popup_detail-form .input-group input {
                padding:17px;
                text-align: center;
                margin-bottom: 10px;
                border-radius:3px;
                font-size: 16px; 
                display: block;
                width: 100%;
            }
            .popup_detail-form .input-group input:focus {
                outline-color:#FB8833; 
            }
            .popup_detail-form .input-group input[type="email"] {
                border:0px;
                position: relative;
            }
            .popup_detail-form .input-group input[type="submit"] {
                background-color: #FB8833;
                color: #fff;
                border: 0;
                cursor: pointer;
            }
            .popup_detail-form .input-group input[type="submit"]:focus {
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
<a class='btn btn-block btn-success ' href='<?php echo SITE_URL; ?>?page=detailkurikulumsoal&&id_pertemuan=<?php echo $data["id_pertemuan"]; ?>&&id_kurikulum=<?php echo $data["id_kurikulum"]; ?>&&nama_kelas=<?php echo $data["nama_kelas"]; ?>&&nama_matapelajaran=<?php echo $data["nama_matapelajaran"]; ?>&&nama_pertemuan=<?php echo $data["nama_pertemuan"]; ?>&&#popup'> Tambah Soal</a>
                        </center>
                    </th>
                </tr>
            </thead>
        </table>
    </div>
</div>
</ol>

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
            <meta http-equiv="refresh" content="1;url=<?php echo SITE_URL; ?>?page=detailkurikulumsoal&&id_kurikulum=<?php echo $id_kurikulum; ?>&&nama_kelas=<?php echo $nama_kelas; ?>&&nama_matapelajaran=<?php echo $nama_matapelajaran; ?>&&nama_pertemuan=<?php echo $nama_pertemuan; ?>&&id_pertemuan=<?php echo $id_pertemuan; ?>">

        <?php } ?>

<div class="alert alert-info">
 
<div class="row">
    <div class="col-lg-12">
        
        <ol class="alert alert-warning">

            <h1> Kurikulum</h1>
            <h1><i class="fa fa-tasks"></i> kelas          : <?php echo $data["nama_kelas"]; ?></h1>
            <h1><i class="fa fa-tasks"></i> Mata Pelajaran : <?php echo $data["nama_matapelajaran"]; ?></h1>
            <h1><i class="fa fa-tasks"></i> Nama Pertemuan : <?php echo $data["nama_pertemuan"]; ?></h1>
            
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
                    <th><center>Soal Urut</center></th>
                    <th><center>Soal</center></th>
                    <th><center>Pilihan A</center></th>
                    <th><center>Pilihan B</center></th>
                    <th><center>Pilihan C</center></th>
                    <th><center>Jawaban</center></th>
                   
                </tr>
                </thead>
                <tbody>
                <?php
                    $no = 1;
                    foreach($data["soal"] as $soal) {
                        ?>
                        <tr>
                            <td><center><?php echo $no; ?></center></td>
                            
                            <td><center><?php echo $soal->soal_urut; ?></center></td>
                            <td><center><?php echo $soal->soal; ?></center></td>
                            <td><center><?php echo $soal->pilihan_a; ?></center></td>
                            <td><center><?php echo $soal->pilihan_b; ?></center></td>
                            <td><center><?php echo $soal->pilihan_c; ?></center></td>
                            <td><center><?php echo $soal->jawaban; ?></center></td>
                            



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





















<div class="popup-wrapper" id="popup">
    <div class="popup-container">
<?php  
    $id_kurikulum = isset($_GET["id_kurikulum"]) ? $_GET["id_kurikulum"] : '0';
    $nama_matapelajaran = isset($_GET["nama_matapelajaran"]) ? $_GET["nama_matapelajaran"] : '0';
    $nama_kelas = isset($_GET["nama_kelas"]) ? $_GET["nama_kelas"] : '0';
    $nama_pertemuan = isset($_GET["nama_pertemuan"]) ? $_GET["nama_pertemuan"] : '0';
    $id_pertemuan = isset($_GET["id_pertemuan"]) ? $_GET["id_pertemuan"] : '0';
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
            <meta http-equiv="refresh" content="1;url=<?php echo SITE_URL; ?>?page=detailkurikulumsoal&&id_kurikulum=<?php echo $id_kurikulum; ?>&&nama_kelas=<?php echo $nama_kelas; ?>&&nama_matapelajaran=<?php echo $nama_matapelajaran; ?>&&nama_pertemuan=<?php echo $nama_pertemuan; ?>&&id_pertemuan=<?php echo $id_pertemuan; ?>">

        <?php } ?>


        <div class="alert alert-info">
            <h1> Tambah Soal</h1>
        </div>

        <form method="post" role="form" enctype="multipart/form-data" action="<?php echo SITE_URL; ?>?page=detailkurikulumsoal&&action=insert&&id_kurikulum=<?php echo $id_kurikulum; ?>&&nama_kelas=<?php echo $nama_kelas; ?>&&nama_matapelajaran=<?php echo $nama_matapelajaran; ?>&&nama_pertemuan=<?php echo $nama_pertemuan; ?>&&id_pertemuan=<?php echo $id_pertemuan; ?>">
            
            <table class="table-responsive table">

                <tbody>
                    
                    
                <tr>
                    <td style="width: 200px;"><label>Soal Urut</label></td>
                    <td style="width: 1px;">:</td>
                    <td>
                        <select class="form-control" name="soal_urut">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>
                    </td>
                </tr>
           
                
                <tr>
                    <td style="width: 200px;"><label>Soal</label></td>
                    <td style="width: 1px;">:</td>
                    <td>
                        <input type="text" name="soal" class="form-control">
                    </td>
                </tr>
                
                <tr>
                    <td style="width: 200px;"><label>Jawaban A</label></td>
                    <td style="width: 1px;">:</td>
                    <td>
                        <input type="text" name="pilihan_a" class="form-control">
                    </td>
                </tr>
                
                <tr>
                    <td style="width: 200px;"><label>Jawaban B</label></td>
                    <td style="width: 1px;">:</td>
                    <td>
                        <input type="text" name="pilihan_b" class="form-control">
                    </td>
                </tr>
                
                <tr>
                    <td style="width: 200px;"><label>Jawaban C</label></td>
                    <td style="width: 1px;">:</td>
                    <td>
                        <input type="text" name="pilihan_c" class="form-control">
                    </td>
                </tr>
                
                <tr>
                    <td style="width: 200px;"><label>Jawaban</label></td>
                    <td style="width: 1px;">:</td>
                    <td>
                        <select class="form-control" name="jawaban">
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                        </select>
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



            <a class="popup-close" href="#closed">X</a>
    </div>
</div>






</body>
</html>