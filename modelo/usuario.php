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
     
 }