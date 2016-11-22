<?php include 'controlador/listar_ofertas.php';?>
<div class="contenido">
   <h3 id="titulo">Mantenimiento Ofertas</h3>
<div class="body">
    
       <form  method="post" action="" class="row">
         <legend style="margin-left:25px;"> Buscar por </legend>
          <div class="form-group col-sm-4">
            <label for="rubro">Rubro</label>
            <input type="text" class="form-control" name="rubro" />
          </div>
 
          <div class="form-group col-sm-4">
            <label for="password">de esta Fecha:</label>
            <input class="form-control" type="date"  name="defecha">
          </div>
          
          <div class="form-group col-sm-4">
            <label for="password">hasta esta Fecha:</label>
            <input class="form-control" type="date"  name="hastafecha">
          </div>
     <input type="submit" class="btn btn-primary col-sm-2 " name="buscar" value="Buscar" style="margin-left:50px;"/>
            <input type="submit" class="btn btn-warning col-sm-2"name="todo" value="Listar Todo" style="margin-left:25px;"/>
            </form>
    <br>
         <?php
              echo @$msbusqueda;
          //echo $msn;
          ?>
          
          
          <!-- TABLA DE LISTA-->
      <div class=" t table-responsive" class="row"> 
      <table class="table table-striped table-bordered table-condensed">
       <tr class="info">
           <th>N°</th>
           <th>Usuario</th>
           <th>Rubro</th>
           <th >Contenido</th>
           <th>Fecha</th>
            <th>Opción</th>
        </tr>
        <?php
          if($valido=="1"){
          $numero=0;
          foreach($matrizOferta as $registro){
              $numero=$numero+1;
	       echo "<tr>
           <td>".$numero."</td>
           <td>".$registro["nombre"]."</td>
           <td>".$registro["rubro"]."</td>
           <td style='max-width:410px;'>".$registro["descripcion"]."</td>
           <td>".$registro["fecha"]."</td>
           <td><button class='btn btn-success'><span class='glyphicon glyphicon-ok'></span><button class='btn btn-danger'><span class='glyphicon glyphicon-eye-open'></span></button> </td>
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

