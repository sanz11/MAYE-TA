<?php 
	@include"modelo/Conectar.php";
	$clase=" ";
	$icono="";
	$mensaje="";
	session_start();
	if(@$_GET["cerrar"]){
		session_unset('nombre');
		session_destroy();
	}
	
	if(@$_POST["ingresar"]){
		@$cuenta=$_POST['user'];
	@$password=$_POST['pass'];
		if(!empty($cuenta)){
			if(!empty($password)){
				$consulta=$mysqli->query("select * from administrador where dni='$cuenta' and contra='$password'");
				if(mysqli_num_rows($consulta)){
					$arreglo=mysqli_fetch_array($consulta);
					$_SESSION["nombre"]=$arreglo["nombre"];
                    $_SESSION["dni"]=$arreglo["dni"];
                    $_SESSION["nick"]=$arreglo["nick"];
                    $_SESSION["apellidos"]=$arreglo["apellidos"];
					$_SESSION["correo"]=$arreglo["correo"];
					$_SESSION["foto"]=$arreglo["foto"];
                    
                    $tipo=$arreglo["tipo_admin"];
        
	                   if($tipo=="superadmin"){
                           header('location:superadmin.php');
                           session_start();
	                   }else{
	                   	header('location:admin.php');
                           session_start();
	                   }
                    
					
				}else{
					$error[3]="Usuario o Contraseña incorrecta";
					$clase="alert alert-danger";
                    $cerrar="&times;";
					$icono="fa fa-exclamation-circle vd_red";
					$mensaje="¡Oh no!";
				}
			}else{
				$error[2]="Ingrese la contraseña";
			}
		}else{
			$error[1]="Ingrese el su DNI";
		}
	}
	
	
?> 