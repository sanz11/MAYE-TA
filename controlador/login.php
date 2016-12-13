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
		@$cuenta=addslashes($_POST['user']);
	@$pass=addslashes($_POST['pass']);
        $password=md5($pass);
		if(!empty($cuenta)){
			if(!empty($password)){
				$consulta=$mysqli->query("select * from administrador where dni='$cuenta' and contra='$password'");
				if(mysqli_num_rows($consulta)){
					$arreglo=mysqli_fetch_array($consulta);
					$_SESSION["nombreadmin"]=$arreglo["nombre"];
                    $_SESSION["dniadmin"]=$arreglo["dni"];
                    $_SESSION["telefonoadmin"]=$arreglo["telefono"];
                    $_SESSION["apellidosadmin"]=$arreglo["apellidos"];
                    $_SESSION["tipoadmin"]=$arreglo["tipo_admin"];
					$_SESSION["correoadmin"]=$arreglo["correo"];
					$_SESSION["fotoadmin"]=$arreglo["foto"];
                    
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