<?php

 class admin{
	 
	public function insertarAdmin($dni,$nombre,$apellidos,$nick,$correo,$tipo,$pass,$fecha){
		 
		 $modelo = new Conexion();
		 $conexion=$modelo->get_conexion();
        $foto="im/avatar.png";
		 
		 $sql="insert into administrador(dni,nombre,apellidos,telefono,correo,tipo_admin,contra,foto,fecha_ingreso) values(:dni, :nombre, :apellidos, :nick, :correo, :tipo, :pass, :foto,:fecha) ";
		 $statement=$conexion->prepare($sql);
		 $statement->bindParam(':dni',$dni);
           $statement->bindParam(':nombre',$nombre);
           $statement->bindParam(':apellidos',$apellidos);
           $statement->bindParam(':nick',$nick);
           $statement->bindParam(':correo',$correo);
           $statement->bindParam(':tipo',$tipo);
           $statement->bindParam(':pass',$pass);
           $statement->bindParam(':foto',$foto);
           $statement->bindParam(':fecha',$fecha);
		  
		  if(!$statement){
			  return "error registrar";
		  }
		  else{
			 $statement->execute();
			  return "el usuario se registro correctamente";
              
		  }
		  
	 	}
	  

	 public function listarAdmin(){
		 
		 $admin = null;
		 $modelo = new Conexion();
		 $conexion=$modelo->get_conexion();
		 
		  $sql=("select * from administrador");
		 $statement=$conexion->prepare($sql);
		 $statement->execute();
		 
		 while($filas=$statement->fetch(PDO::FETCH_ASSOC)){
			 $admin[]=$filas;
		 
		 }
		 return $admin; 
	 	}
     public function buscarAdmin($dato,$defecha,$hastafecha){
		 
		 $admin = null;
		 $modelo = new Conexion();
		 $conexion=$modelo->get_conexion();
		 
		  $sql=("select * from administrador where dni=:dni or apellidos=:apellidos or tipo_admin=:tipo or (fecha_ingreso >=:defecha AND
        fecha_ingreso <=:hastafecha)");
		 $statement=$conexion->prepare($sql);
         $statement->bindParam(':dni',$dato);
           $statement->bindParam(':apellidos',$dato);
           $statement->bindParam(':tipo',$dato);
           $statement->bindParam(':defecha',$defecha);
           $statement->bindParam(':hastafecha',$hastafecha);
		 $statement->execute();
		 
		 while($filas=$statement->fetch(PDO::FETCH_ASSOC)){
			 $admin[]=$filas;
		 
		 }
		 return $admin; 
	 	}
	 
     
	  public function Update_admin($dni,$email,$telefono,$foto){
		 
		 $modelo = new Conexion();
		 $conexion=$modelo->get_conexion();
		  
			    $consulta=(" update  administrador set correo=:email,telefono=:telefono,foto=:foto where dni=:dni ");
			  	$statement=$conexion->prepare($consulta);
		 		$statement->bindParam(':email',$email);
                $statement->bindParam(':telefono',$telefono);
                $statement->bindParam(':foto',$foto);
                $statement->bindParam(':dni',$dni);     
		  
		  		if(!$statement){
			  		return "error al actualizar";
					
		  		}else{
			   		$statement->execute();
			  		return "tus datos se actualizaron <strong>correctamente.<br>Vuelva a iniciar sessión</strong> para ver los cambios";
				}
		  
	 	}
	 public function existeAdmin($dni,$correo){
		 $admin = null;
		  $modelo = new Conexion();
		 $conexion=$modelo->get_conexion();
		  
		 
		 $consulta1=(" select * from  administrador where dni=:dni or correo=:correo ");
		 $statement1=$conexion->prepare($consulta1);
		 $statement1->bindParam(':dni',$dni);
         $statement1->bindParam(':correo',$correo);
		 $statement1->execute();
		  
		  while($filas=$statement1->fetch(PDO::FETCH_ASSOC)){
			 $admin[]=$filas;
			  
		 
		 }
		 return $admin; 
	 }
	 
 


     
     public function login($user,$pass){
		 
		 $admin = null;
		 $modelo = new Conexion();
		 $conexion=$modelo->get_conexion();
		 
		  $sql=("select * from administrador where dni=:dni and password=:pass ");
		 $statement=$conexion->prepare($sql);
         $statement->bindParam(':dni',$user);
         $statement->bindParam(':pass',$pass);
		 $statement->execute();
		 
		 while($filas=$statement->fetch(PDO::FETCH_ASSOC)){
			 $admin[]=$filas;
		 
		 }
		 return $admin; 
	 	}
     
}
?>