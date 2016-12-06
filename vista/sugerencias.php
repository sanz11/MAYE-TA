<?php include 'controlador/listar_sugerencias.php';?>
<div class="contenido">
   <h3 id="titulo">Mantenimiento Sugerencias</h3>
<div class="body">
       <H1>LISTA PARA VALIDAR</H1>
      <!-- TABLA DE LISTA-->
      <div class=" t table-responsive" class="row"> 
      <table class="table table-striped table-bordered table-condensed">
       <tr class="info">
           <th>Nro</th>
           <th>Usuario</th>
           <th>Quéjas oSugerencias</th>
           <th>Opciones</th>
        </tr>
        <?php
          if($valido=="1"){
          $numero=0;
          foreach($matrizSugerencias as $registro){
              $numero=$numero+1;
	       echo "<tr>
           <td>".$numero."</td>
           <td>".$registro["usuario"]."</td>
           <td>".$registro["sugerencias"]."</td>
           <td>";?>
            <a href="javascript:vali_sugere('<?php echo $registro['id'];?>','<?php echo $registro['usuario'];?>');" class=" clik-vali glyphicon glyphicon-ok btn btn-success" ></a>
            <a href="javascript:elimi_sugere('<?php echo $registro['id'];?>','<?php echo $registro['usuario'];?>');" class=" clik-elimi glyphicon glyphicon-remove btn btn-danger" ></a>
           
           
           <?php echo" </td>
           </tr>";
            }}
          else{
              echo "<tr><td colspan='9'>NO SE ENCONTRARON DATOS PARA LA BUSQUEDA</td></tr>";
          }
          //echo $msn;
          ?>
          
        
       
        </table>
        </div> 
       
       <H1>LISTA DE PENDIENTES</H1>
       
       <div class=" t table-responsive" class="row"> 
      <table class="table table-striped table-bordered table-condensed">
       <tr class="info">
           <th>Nro</th>
           <th>Usuario</th>
           <th>Quéjas oSugerencias</th>
           <th>Opciones</th>
        </tr>
        <?php
          if($validoval=="1"){
          $numero=0;
          foreach($matrizSugerenciasval as $registroval){
              $numero=$numero+1;
	       echo "<tr>
           <td>".$numero."</td>
           <td>".$registroval["usuario"]."</td>
           <td>".$registroval["sugerencias"]."</td>
           <td>";?>
          
            <a href="javascript:val_sugere('<?php echo $registroval['id'];?>','<?php echo $registroval['usuario'];?>');" class=" clik-validar glyphicon glyphicon-ok-circle btn btn-success" ></a>
           <?php echo "</td>
           </tr>";
            }}
          else{
              echo "<tr><td colspan='9'>NO SE ENCONTRARON DATOS PARA LA BUSQUEDA</td></tr>";
          }
          //echo $msn;
          ?>
          
        
       
        </table>
        </div> 
       
</div>
</div>
    
    <style type="text/css">
        .negrita1{color:forestgreen;}
       .negrita2{color:firebrick;}
    </style>
     <!--MODAL Suegrencia vali-->
<div class="modal fade " id="mod_valisuge" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  	<div class="modal-dialog">
  		<div class="modal-content">
  			<button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times;</button>
            <center><h1 style="color:crimsom;">VALIDAR SUGERENCIA</h1></center>	
  		    <div class="modal-body">
  		        <center>
                    <form action="controlador/validarsugerencia.php">
                        <h4>Usted está apunto de <span class="negrita1">enviar</span> la sugerencia de <h2 id="names" style="color:darkcyan"></h2> a la listra de trabajos pendientes</h4>
                        <input type="text" id="idsu" style="display:none"><br>
                        <input type="submit" name="vali" value="Validar" class="btn btn-primary">
                        
                         <input type="button" value="Cancelar" class="btn-success btn" class="close" data-dismiss="modal" aria-hidden="true">
                    </form>
                </center>
  			</div>
  		</div>
  		
  	</div>
    </div>


    
      <!--MODAL Suegrencia eli-->
<div class="modal fade " id="mod_elimisuge" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  	<div class="modal-dialog">
  		<div class="modal-content">
  			<button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times;</button>
            <center><h1 style="color:crimsom;">DESCARTAR SUGERENCIA</h1></center>	
  		    <div class="modal-body" >
                <center>
                    <form action="controlador/validarsugerencia.php">
                       <h4>Usted está apunto de <span class="negrita2">descartar</span> la sugerencia de <h2 id="namer" style="color:darkcyan"></h2> </h4>
                        <input type="text" id="idsue" style="display:none"><br>
                        <input type="submit" name="descartar" value="Descartar" class="btn btn-warning">
                        
                         <input type="button" value="Cancelar" class="btn-success btn" class="close" data-dismiss="modal" aria-hidden="true"> 
                    </form>
                </center>
  			</div>
  		</div>
  		
  	</div>
    </div>
    <!--MODAL Suegrencia terminado-->
<div class="modal fade " id="mod_validarsuge" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  	<div class="modal-dialog">
  		<div class="modal-content">
  			<button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times;</button>
            <center><h1 style="color:crimsom;">MARCAR COMO TERMINADO</h1></center>	
  		    <div class="modal-body" >
  		        <center>
                    <form action="controlador/validarsugerencia.php">
                        <h4>Usted está apunto de marcar como <span class="negrita1">terminado</span> la sugerencia de <h2 id="de" style="color:darkcyan"></h2> </h4>
                        <input type="text" id="idval" style="display:none"><br>
                        <input type="submit" name="terminado" value="Validar" class="btn btn-primary">
                        
                         <input type="button" value="Cancelar" class="btn-success btn" class="close" data-dismiss="modal" aria-hidden="true">
                    </form>
                    </form>
                </center>
  			</div>
  		</div>
  		
  	</div>
    </div>
    
   