<html>
<head>
    <title>Popup CSS3 - Manual Popup Versi Terang</title>
    <link rel="stylesheet" type="text/css" href="css/demo.css">
    <style type="text/css">
/* untuk pemakaian di blog/website anda, yang di copy hanya css di bawah ini*/

    /* style untuk link popup */
    a.popup_edit-link {
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
    a.popup_edit-link:hover {
        background-color: #ff9900;
        box-shadow: 0 3px 0px 0px #eea900;
        -webkit-transition:all 1s;
        -moz-transition:all 1s;
        transition:all 1s;
    }
    /* end link popup*/

    /*style untuk popup */  
    #popup_edit {
        visibility: hidden;
        opacity: 0;
        margin-top: -200px;
    }
    #popup_edit:target {
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
        .popup_edit-container {
            width:600px;
        }
    }
    @media (max-width: 767px){
        .popup_edit-container {
            width:100%;
        }
    }
    .popup_edit-container {
        position: relative;
        margin:7% auto;
        padding:30px 50px;
        background-color: #fafafa;
        color:#333;
        border-radius: 3px;
    }

    a.popup_edit-close {
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


    .popup_edit-form {
        margin:10px auto;
    }
        .popup_edit-form h2 {
            margin-bottom: 5px;
            font-size: 37px;
            text-transform: uppercase;
        }
        .popup_edit-form .input-group {
            margin:10px auto;
        }
            .popup_edit-form .input-group input {
                padding:17px;
                text-align: center;
                margin-bottom: 10px;
                border-radius:3px;
                font-size: 16px; 
                display: block;
                width: 100%;
            }
            .popup_edit-form .input-group input:focus {
                outline-color:#FB8833; 
            }
            .popup_edit-form .input-group input[type="email"] {
                border:0px;
                position: relative;
            }
            .popup_edit-form .input-group input[type="submit"] {
                background-color: #FB8833;
                color: #fff;
                border: 0;
                cursor: pointer;
            }
            .popup_edit-form .input-group input[type="submit"]:focus {
                box-shadow: inset 0 3px 7px 3px #ea7722;
            }

    </style>
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
<a class='btn btn-block btn-success fa fa-pencil' href='<?php echo PATH; ?>?page=matapelajaran&&#popup'> Tambah Mata Pelajaran</a>
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

            <h1><i class="fa fa-book"></i> Data Mata Pelajaran </h1>
            
        </ol>

    </div>
</div>


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
            <meta http-equiv="refresh" content="1;url=<?php echo PATH; ?>?page=matapelajaran">

        <?php } ?>



<div class="row">
    <div class="col-lg-12">
        

        <div class="table-responsive">
            <table class="table table-hover data-table table-striped tablesorter">
                <thead>
                <tr>
                    <th class="header" style="width: 40px;"><center>No</center></th>
                    
                    

                    <th><center>Nama Mata Pelajaran</center></th>
                    <th><center>Action</center></th>
                    
                    
                </tr>
                </thead>
                <tbody>
                <?php
                    $no = 1;
                    foreach($data["matapelajaran"] as $matapelajaran) {

                            ?>
                            <tr>
                                
                            <td><center><?php echo $no; ?></center></td>
                                
                            


                                <td><center><?php echo $matapelajaran->nama_matapelajaran; ?></center></td>

                             <td>
                                <center>
                                    <a class="btn btn-block btn-warning fa fa-pencil" href="<?php echo SITE_URL; ?>?page=matapelajaran&&id_matapelajaran=<?php echo $matapelajaran->id_matapelajaran; ?>&&nama_matapelajaran=<?php echo $matapelajaran->nama_matapelajaran; ?>&&#popup_edit"> Edit </a>
                                
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


















<div class="popup_edit-wrapper" id="popup_edit">
    <div class="popup_edit-container">
<?php  
    $id_matapelajaran = isset($_GET["id_matapelajaran"]) ? $_GET["id_matapelajaran"] : '0';
    $nama_matapelajaran_sebelumnya = isset($_GET["nama_matapelajaran"]) ? $_GET["nama_matapelajaran"] : '0';
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
            <meta http-equiv="refresh" content="1;url=<?php echo PATH; ?>?page=matapelajaran">

        <?php } ?>


        <div class="alert alert-info">
            <h1> Edit Mata Pelajaran <?php echo $nama_matapelajaran_sebelumnya; ?></h1>
        </div>

            
        <form method="post" role="form" enctype="multipart/form-data" action="<?php echo SITE_URL; ?>?page=matapelajaran&&action=edit&&id_matapelajaran=<?php echo $id_matapelajaran; ?>">
            
            <table class="table-responsive table">

                <tbody>
           
                
                <tr>
                    <td style="width: 200px;"><label>Nama Mata Pelajaran Baru</label></td>
                    <td style="width: 1px;">:</td>
                    <td>
                        <input type="text" name="nama_matapelajaran" class="form-control">
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

            <a class="popup_edit-close" href="#closed">X</a>
    </div>
</div>










<div class="popup-wrapper" id="popup">
    <div class="popup-container">


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
            <meta http-equiv="refresh" content="1;url=<?php echo PATH; ?>?page=matapelajaran">

        <?php } ?>


        <div class="alert alert-info">
            <h1> Tambah Mata Pelajaran</h1>
        </div>

        <form method="post" role="form" enctype="multipart/form-data" action="<?php echo SITE_URL; ?>?page=matapelajaran&&action=insert">
            <table class="table-responsive table">

                <tbody>
           
                
                <tr>
                    <td style="width: 200px;"><label>Nama Mata Pelajaran</label></td>
                    <td style="width: 1px;">:</td>
                    <td>
                        <input type="text" name="nama_matapelajaran" class="form-control">
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