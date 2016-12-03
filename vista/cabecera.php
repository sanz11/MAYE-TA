
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title></title>
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

<link rel="stylesheet" href="css/grafico.css">

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/perfil-admin.css">
<link rel="stylesheet" href="css/fontello.css">
<link rel="stylesheet" href="css/style.min.css">

<!--fonts-->
<link href="https://fonts.googleapis.com/css?family=Baloo+Bhaina" rel="stylesheet">
<script src="js/mod.js"></script><script src="js/jquery.js"></script>
</head>
<body style="background: #FBEFF2;  background-size:cover;">

<?php include 'controlador/actualizar_admin.php';?>
  <?php
	  session_start();
	  if(isset($_SESSION['nombre'])){
	  ?>


<header>
		<div class="contenedor">
			<img src="im/logo.png"  id="logo"/>
			<input type="checkbox" id="menu-bar"/>
			<label class="icon-menu1" for="menu-bar">[]</label>
				<nav class="menu">
				<div class="perfil">
				    <div class="datos">
				        <?php echo '<img src="'.$_SESSION['foto'].'">';?>
				        <div class="gmail">
				        <div class="section">
				        <br>
				        <h1><?php echo $_SESSION['nombre']." ".$_SESSION['apellidos'];?></h1>
				        <h3><?php echo $_SESSION['correo'];?></h3>
				       
				        </div>
				        <div class="section">
                        <span id="control" class="glyphicon glyphicon-cog" data-toggle="modal" data-target="#miventana"></span>
                           
				        </div>
				        </div>
				        <div class="titulo">
				            <h1>MI MENÚ</h1>
				        </div>
				    </div>
				    <div class="menu-ad">
				        <a href="?pagina=administradores.php"><span class="glyphicon glyphicon-pawn"></span>Administradores</a>
				        <a href="?pagina=ofertas.php"><span class="glyphicon glyphicon-check"></span>Validar Ofertas</a>
				        <a href="?pagina=usuarios.php"><span class="glyphicon glyphicon-user"></span>Usuarios</a>
				        <a href="?pagina=sugerencias.php"><span class="glyphicon glyphicon-question-sign"></span>Sugerencias</a>
				        <a href="?pagina=oficios.php"><span class="glyphicon glyphicon-credit-card"></span>Oficios</a>
				        
				    </div>
				    <div class="alert alert-warning"><?php echo @$mmsactualizar;?></div>
				</div>
				</nav>		
		</div>
</header>
<div class="modal fade veterinaria" id="miventana" tabindex="-1"role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  	<div class="modal-dialog">
  		<div class="modal-content">
  			
  			<button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times;</button>
  			<center><h1 >¿QUÉ DESEA HACER?</h1> </center>
  			  			
  		<div class="modal-body" >
          <center> <label for="check"><span class="edit glyphicon glyphicon-cog" >Editar_datos </span></label>
            

            <a href="index.php?cerrar=session"  title="Editar Perfil">
                <span class="glyphicon glyphicon-log-out"title="Cerrar Session">CerrarSessión</span>
            </a> 
            </center> 
    <input type="checkbox" id="check" >       
                     
  <form action="" method="post" role="form" class="formedit"  enctype="multipart/form-data">

  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" value="<?php echo $_SESSION['correo'];?>" name="email" >
  </div>
  <div class="form-group">
    <label for="telefono">Teléfono:</label>
    <input type="text" class="form-control" value="<?php echo $_SESSION["telefono"];?>" name="telefono">
  </div>
  <div class="form-group">
    <label for="ejemplo_archivo_1" >Editar foto de perfil</label>
    <input type="file" name="fotosub">
    <p class="help-block">28MG</p>
  </div>
  <input style="display:none;"type="text" value="<?php echo $_SESSION['dni'];?>" name="dniactu">
  <input style="display:none;"type="text" value="<?php echo $_SESSION['foto'];?>" name="fotoactu">
  <center>
  <input type="submit" class="btn btn-primary" name="actualizar" value="Actualizar"/>
  <button type="button" class="btn btn-info" class="close" data-dismiss="modal" aria-hidden="true" >Cancelar</button></center>
</form>
     <center id="cancelar"><button type="button" class="btn btn-info" class="close" data-dismiss="modal" aria-hidden="true">Cancelar</button></center>
  					<br>
  					<br>
  			</div>
  		</div>
  		
  	</div>
  </div>
  

<?php		  
	  }else{
		  echo "Acceso denegado";
          header('location:index.php');
	  }
	  ?>