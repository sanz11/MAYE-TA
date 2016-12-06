<?php
 class oferta{
     
     public function get_oferta(){
         $oferta=null;
         $modelo = new Conexion();
         $conexion = $modelo->get_conexion_cliente();
         
        
         //ELIMINAMOS DE LA BASE DE DATOS A LOS QUE NO ESTAN ACEPTADOS
         $eliminar = $conexion->prepare("delete from trabajo where estado = 3;");
         $eliminar->execute();
         
         //SELECCIONAMOS A LOS QUE FALTAN VALIDAR
         $sql ="select * from trabajo where estado = 0;";
         $variable =$conexion->prepare($sql);
         $variable->execute();
         
         while($filas=$variable->fetch(PDO::FETCH_ASSOC)){
             $oferta[]=$filas;
         }
         return $oferta;
         
     }
     public function search_oferta($rubro,$defecha,$hastafecha){
         $oferta=null;
         $modelo = new Conexion();
         $conexion =$modelo->get_conexion_cliente();
         
         //ELIMINAMOS DE LA BASE DE DATOS A LOS QUE NO ESTAN ACEPTADOS
          $eliminar = $conexion->prepare("delete from trabajo where estado = 3;");
         $eliminar->execute(); 
         
         //SELECCIONAMOS A LOS QUE FALTAN VALIDAR
         $sql ="select * from trabajo where estado = 0 and (rubro=:rubro or (fecha >=:defecha AND
        fecha<=:hastafecha))";
         $variable =$conexion->prepare($sql);
         $variable->bindParam(':rubro',$rubro);
          $variable->bindParam(':defecha',$defecha);
           $variable->bindParam(':hastafecha',$hastafecha);
         $variable->execute();
         
         while($filas=$variable->fetch(PDO::FETCH_ASSOC)){
             $oferta[]=$filas;
         }
         return $oferta;
     }
     
      public function publicar($id){
         $oferta=null;
         $modelo = new Conexion();
         $conexion = $modelo->get_conexion_cliente();
         
        
         $sql ="update trabajo set estado=1 where id=:id;";
         $variable =$conexion->prepare($sql);
         $variable->bindParam(':id',$id); 
         $variable->execute();
         
     }
     public function observar($id){
         $oferta=null;
         $modelo = new Conexion();
         $conexion = $modelo->get_conexion_cliente();
          
         $sql ="delete from trabajo where id =:id;";
         $variable =$conexion->prepare($sql);
          $variable->bindParam(':id',$id); 
         $variable->execute();
         
     }
     
 }

class usuario{
    public function get_usuario(){
        $usuario=null;
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion_cliente();
        $sql ="select * from trabajador";
        $stm=$conexion->prepare($sql);
        $stm->execute();
        
        while($filas=$stm->fetch(PDO::FETCH_ASSOC)){
             $usuario[]=$filas;
         }
         return $usuario;
         
    }
    public function search_usuario($dato,$fecha){
        $usuario=null;
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion_cliente();
        $sql ="select * from trabajador where ciudad=:dato or dni=:dato or nacimiento=:fecha";
        $stm=$conexion->prepare($sql);
        $stm->bindParam(":dato",$dato);
        $stm->bindParam(":fecha",$fecha);
        $stm->execute();
        
        while($filas=$stm->fetch(PDO::FETCH_ASSOC)){
             $usuario[]=$filas;
         }
         return $usuario;
         
    }
    public function delete_usuario($dni){
        $usuario=null;
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion_cliente();
        $sql ="delete from trabajador where dni=:dni";
        $stm=$conexion->prepare($sql);
        $stm->bindParam(":dni",$dni);
        $stm->execute();
        
       
    }
    
}

class sugerencias{
    public function get_sugerencias(){
        $sugerencias=null;
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion_cliente();
        $sql ="select * from sugerencias";
        $stm=$conexion->prepare($sql);
        $stm->execute();
        
        while($filas=$stm->fetch(PDO::FETCH_ASSOC)){
             $sugerencias[]=$filas;
         }
         return $sugerencias;
         
    }
}

