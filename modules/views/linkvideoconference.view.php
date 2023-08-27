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
<a class='btn btn-block btn-success fa fa-pencil' href='<?php echo PATH; ?>?page=linkvideoconference&&id_karyawan=<?php echo $data["login"]->id_karyawan; ?>&&#popup'> Update kode autentikasi</a>
                        </center>
                    </th>
                </tr>
            </thead>
        </table>
    </div>
</div>
</ol>



<div class="alert alert-info">
 



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
            <meta http-equiv="refresh" content="1;url=<?php echo PATH; ?>?page=linkvideoconference">

        <?php } ?>
        
        

<div class="row">
    <div class="col-lg-12">
        

        <div class="table-responsive">
            <table class="table table-hover data-table table-striped tablesorter">
                <thead>
                <tr>
                    <th class="header" style="width: 40px;"><center>No</center></th>
                    
                    

                    <th><center>Di update terakhir oleh</center></th>
                    <th><center>Kode Autentikasi</center></th>

                    
                </tr>
                </thead>
                <tbody>
                <?php
                    $no = 1;
                    foreach($data["linkvideoconference"] as $linkvideoconference) {

                            ?>
                            <tr>
                                
                            <td><center><?php echo $no; ?></center></td>
                                
                            


                                <td><center><?php echo $linkvideoconference->nama; ?></center></td>
                                <td><center><?php echo $linkvideoconference->link; ?></center></td>

                              

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







































<div class="popup-wrapper" id="popup">
    <div class="popup-container">
        
        <?php  
            $id_karyawan = isset($_GET["id_karyawan"]) ? $_GET["id_karyawan"] : '0';
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
            <meta http-equiv="refresh" content="1;url=<?php echo PATH; ?>?page=linkvideoconference">

        <?php } ?>



        <form method="post" role="form" enctype="multipart/form-data" action="<?php echo SITE_URL; ?>?page=linkvideoconference&&action=update&&id_karyawan=<?php echo $id_karyawan; ?>">
            <table class="table-responsive table">

                <tbody>
           
                
                <tr>
                    <td>
                        <input type="text" name="link" class="form-control" placeholder="kode autentikasi baru">
                    </td>
                </tr>

                <tr>
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