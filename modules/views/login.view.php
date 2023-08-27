<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<head>
    <meta charset="utf-8" />
    
    <link rel="icon" href="public/images/logo_.png" />
    <title>SMK IT Insan Mulia</title>

    <!-- CSS -->
    <link href="resources/css/bootstrap.min.css" rel="stylesheet" />
    <link href="resources/css/jquery.dataTables.min.css" rel="stylesheet" />
    <link href="resources/css/style.css" rel="stylesheet" />
    <link href="resources/css/sb-admin.css" rel="stylesheet" />
    <link href="resources/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    
    <style>img[alt="www.000webhost.com"]{display:none;}</style>


    <!-- Javascript for animation -->

    <script type="text/javascript" src="resources/js/jquery.min.js"></script>
    <script type="text/javascript" src="resources/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="resources/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="resources/js/expand.js"></script>
    <script type="text/javascript" src="resources/js/common.js"></script>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

</head>

<body>

<div class="row">
    <div class="col-lg-12">

   <form class="form-signin" method="post">

        

        <?php
        if(count($message)) {
            ?>

            <div class="alert <?php if($message["success"] == false) echo "alert-danger"; else echo "alert-success"; ?>"><?php echo $message["message"]; ?></div>

        <?php
        }
        ?>
      
        <div class="form-group">
            <center>
                <img src="public/images/logo_.png" style="width: 100px;">
            </center>
            
        </div>
        
        <div class="form-group">
            <input type="text" name="username" class="form-control" placeholder="Username" required autofocus>
        
        </div>

        <div class="form-group">
            <input type="password" name="password" class="form-control" placeholder="Password" required autofocus>
        
        </div>


        <button class="btn btn-success btn-block" type="submit">Sign In</button>
        </form>      
   </div>
</div>
</body>

</html>