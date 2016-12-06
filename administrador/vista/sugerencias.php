<?php include 'controlador/listar_sugerencias.php';?>
<div class="contenido">
   <h3 id="titulo">Mantenimiento Sugerencias</h3>
<div class="body">
       
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
           <td><button class='btn btn-success'><span class='glyphicon glyphicon-ok'></span></button><button class='btn btn-danger'><span class='glyphicon glyphicon-remove'></span></button> </td>
           </tr>";
            }}
          else{
              echo "<tr><td colspan='9'>NO SE ENCONTRARON DATOS PARA LA BUSQUEDA</td></tr>";
          }
          //echo $msn;
          ?>
          
        
       
        </table>
        </div> 
       
       <H1>PENDIENTES</H1>
       
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
           <td><button class='btn btn-success'><span class='glyphicon glyphicon-ok'></span></button><button class='btn btn-danger'><span class='glyphicon glyphicon-remove'></span></button> </td>
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
    
    <!--MODAL ELIMINAR-->
<div class="modal fade " id="mod_eliminar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  	<div class="modal-dialog">
  		<div class="modal-content">
  			<button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times;</button>
            <center><h1 style="color:crimsom;">modal</h1></center>	
  		    <div class="modal-body" style="background:#F6CECE;">
  		        
  			</div>
  		</div>
  		
  	</div>
    </div>

