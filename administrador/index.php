<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title></title>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/login.css">
	<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>
<body> 
  
<?php include 'controlador/login.php';?>

<div class="container">
    <div class="row">
       <br>
                    <br>
                    <br>
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <div class="account-wall">
                <img class="profile-img" src="im/avatar.png"
                    alt="">
                     <!--MENSAJE DE ERROR-->
                  
                  <div class="<?php echo $clase;?>">
                    <button type="button" class="close" data-dismiss="alert"><?php echo @$cerrar;?></button>
                    <h1 class="vd_alert-icon <?php echo $icono;?>">
                   </h1><strong><?php echo $mensaje;?> </strong> <?php echo @$error[3];?> </div>
                  
                    
                                       <!--MENSAJE DE ERROR--> 
                    
                <form class="form-signin" action="?" method="post">
                <input type="text" class="form-control" placeholder="DNI" name="user">
                    <h4 class="alert-danger"><?php echo @$error[1];?></h4>
                <input type="password" class="form-control" name="pass" placeholder="Password">
                   <h4 class="alert-danger"><?php echo @$error[2];?></h4>
                    <input class="btn btn-lg btn-primary btn-block" type="submit" name="ingresar" value="Ingresar">
                 
                <a href="#" class="pull-right need-help">Olvide mi contraseña </a>
                </form>
            </div>
            
        </div>
    </div>
</div>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>