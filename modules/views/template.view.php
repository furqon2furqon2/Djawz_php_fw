<?php

$page = (isset($_GET['page']) && $_GET['page']) ? $_GET['page'] : '';
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="icon" href="public/images/logo_.png">
    <title>SMK IT Insan Mulia</title>
    
    
    <style>img[alt="www.000webhost.com"]{display:none;}</style>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo PATH; ?>resources/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo PATH; ?>resources/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="<?php echo PATH; ?>resources/css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo PATH; ?>resources/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    
    <style type="text/css">
/* untuk pemakaian di blog/website anda, yang di copy hanya css di bawah ini*/

    /* style untuk link popup */
    a.popup_cetak-link {
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
    a.popup_cetak-link:hover {
        background-color: #ff9900;
        box-shadow: 0 3px 0px 0px #eea900;
        -webkit-transition:all 1s;
        -moz-transition:all 1s;
        transition:all 1s;
    }
    /* end link popup_cetak*/

    /*style untuk popup_cetak */  
    #popup_cetak {
        visibility: hidden;
        opacity: 0;
        margin-top: -200px;
    }
    #popup_cetak:target {
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
        .popup_cetak-container {
            width:600px;
        }
    }
    @media (max-width: 767px){
        .popup_cetak-container {
            width:100%;
        }
    }
    .popup_cetak-container {
        position: relative;
        margin:7% auto;
        padding:30px 50px;
        background-color: #fafafa;
        color:#333;
        border-radius: 3px;
    }

    a.popup_cetak-close {
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

    /* style untuk isi popup_cetak */


    .popup_cetak-form {
        margin:10px auto;
    }
        .popup_cetak-form h2 {
            margin-bottom: 5px;
            font-size: 37px;
            text-transform: uppercase;
        }
        .popup_cetak-form .input-group {
            margin:10px auto;
        }
            .popup_cetak-form .input-group input {
                padding:17px;
                text-align: center;
                margin-bottom: 10px;
                border-radius:3px;
                font-size: 16px; 
                display: block;
                width: 100%;
            }
            .popup_cetak-form .input-group input:focus {
                outline-color:#FB8833; 
            }
            .popup_cetak-form .input-group input[type="email"] {
                border:0px;
                position: relative;
            }
            .popup_cetak-form .input-group input[type="submit"] {
                background-color: #FB8833;
                color: #fff;
                border: 0;
                cursor: pointer;
            }
            .popup_cetak-form .input-group input[type="submit"]:focus {
                box-shadow: inset 0 3px 7px 3px #ea7722;
            }

    </style>
</head>

<body>

<div id="wrapper">

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    
        
    <div class="collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-right top-nav">
            
            <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-tasks"></i> Laporan <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li <?php if($page=="laporan_data_siswa") echo 'class="active"'; ?>>
                            <a href="<?php echo PATH; ?>?page=laporan_data_siswa"><i class="fa fa-fw fa-tasks"></i> Laporan Data Siswa</a>
                        </li>
                        
                        <li class="divider"></li>
                        
                        <li>
                            <a href="modules/views/LAPORAN_DATA_KELAS.php"><i class="fa fa-fw fa-tasks"></i> Laporan Data Kelas</a>
                        </li>
                        
                        <li class="divider"></li>
                        
                      
                        
                    </ul>
            </li>
            
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-tasks"></i> Pengelolaan Belajar Mengajar<b class="caret"></b></a>
                <ul class="dropdown-menu">
                    
                    <li <?php if($page=="kurikulum" || $page=="detailkurikulum" || $page=="detailkurikulumsoal") echo 'class="active"'; ?>>
                    <a href="<?php echo PATH; ?>?page=kurikulum"><i class="fa fa-fw fa-tasks"></i> Kurikulum</a>
                    </li>
                    <li <?php if($page=="raport") echo 'class="active"'; ?>>
                            <a href="<?php echo PATH; ?>?page=raport"><i class="fa fa-fw fa-book"></i> Sertifikat Kelas Online</a>
                    </li>
                    
                </ul>
            </li>
                
            <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-phone"></i> Teleconference <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="modules/views/VIDEOCONFERENCE/index.html" target="_blank"><i class="fa fa-fw fa-photo"></i> Open Video Converence</a>
                        </li>
                        
                        <li class="divider"></li>
                        <li <?php if($page=="linkvideoconference") echo 'class="active"'; ?>>
                            <a href="<?php echo PATH; ?>?page=linkvideoconference"><i class="fa fa-fw fa-tasks"></i> Input Kode Server</a>
                        </li>
                        
                    </ul>
            </li>
                
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-tasks"></i> Data Master<b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li <?php if($page=="" || $page=="home" || $page=="insertdatakaryawan") echo 'class="active"'; ?>>
                        <a href="<?php echo PATH; ?>"><i class="fa fa-fw fa-star"></i> Data Guru</a>
                    </li>
                    
                    <li class="divider"></li>
                    <li <?php if($page=="siswa") echo 'class="active"'; ?>>
                        <a href="<?php echo PATH; ?>?page=siswa"><i class="fa fa-fw fa-users"></i> Data Siswa</a>
                    </li>
                    
                    <li class="divider"></li>
                    <li <?php if($page=="kelas") echo 'class="active"'; ?>>
                        <a href="<?php echo PATH; ?>?page=kelas"><i class="fa fa-fw fa-tasks"></i> Data Kelas</a>
                    </li>
                    
                    <li class="divider"></li>
                    <li <?php if($page=="matapelajaran") echo 'class="active"'; ?>>
                        <a href="<?php echo PATH; ?>?page=matapelajaran"><i class="fa fa-fw fa-book"></i> Mata Pelajaran</a>
                    </li>
                    
                </ul>
            </li>
            
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $data["login"]->nama; ?> <b class="caret"></b></a>
                <ul class="dropdown-menu">
                    <li <?php if($page=="profile") echo 'class="active"'; ?>>
                        <a href="<?php echo SITE_URL; ?>?page=profile&action=detail&nik=<?php echo $data["login"]->nik; ?>"><i class="fa fa-fw fa-user"></i> Profile</a>
                    </li>
                    
                    <li class="divider"></li>
                    <li>
                        <a href="<?php echo PATH; ?>index.php?page=login&&action=logout"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                    </li>
                    
                </ul>
            </li>
            
            
        </ul>
   
    
    </div>
    
         
        
    

        
    </nav>
    
    <!-- /#page-wrapper -->
    
<div class="popup_cetak-wrapper" id="popup_cetak">
    <div class="popup_cetak-container">
         <div class="alert-success">
    <br>
    <center>LAPORAN PENDAPATAN PENYEWAAN LAPANGAN FUTSAL</center>
    <br>
  </div>
            <a class="popup_cetak-close" href="#closed">X</a>
    </div>
</div>
</div>

</div>
<!-- /#wrapper -->
<div id="page-wrapper">
    <div class="container-fluid">
                <?php
                    $view = new View($viewName);
                    $view->bind('data', $data);
                    $view->forceRender();
                ?>
    </div>
</div>
<!-- jQuery -->
<script src="<?php echo PATH; ?>resources/js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?php echo PATH; ?>resources/js/bootstrap.min.js"></script>

<!-- Data Tables JavaScript -->
<script src="<?php echo PATH; ?>resources/js/jquery.dataTables.min.js"></script>

<!-- TinyMCE JavaScript -->
<script src="<?php echo PATH; ?>resources/tinymce/tinymce.min.js"></script>

<script type="text/javascript">
    tinymce.init({
        selector: ".editor"
    });
</script>

<script type="text/javascript">
    $(document).ready(function() {

        $(".data-table").DataTable({

            "language": {
                "emptyTable": "Tidak ada data"
            }
        });
    });
</script>

</body>

</html>
