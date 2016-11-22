<?php
 class oferta(){
     
     public function get_oferta(){
         $modelo = new Conexion();
         $conexion = $modelo->get_conexion();
         $sql ="select * from oferta"
         
     }
     public function search_oferta($rubro){
         $modelo = new Conexion();
         $conexion =$modelo->get_conexion();
         $sql ="select * from oferta"
         
     }
     
 }