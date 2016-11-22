<?php include 'controlador/listar_usuario.php';?>
<div class="contenido">
   <h3 id="titulo">Mantenimiento Usuarios</h3>
<div class="body">
    
    
       
       <!--registro-->
       <form  method="post" action="" class="row">
         <legend style="margin-left:25px;"> Buscar por </legend>
          <div class="form-group col-sm-4">
            <label for="dato">Ciudad / Dni:</label>
            <input type="text" class="form-control" name="dato" />
          </div>
 
          <div class="form-group col-sm-4">
            <label for="password">Fecha N:</label>
            <input class="form-control" type="date"  name="defecha">
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
           <th>Nro</th>
           <th>Foto</th>
           <th>DNI</th>
           <th>Nombre</th>
           <th>Email</th>
           <th>Ciudad</th> 
           <th>Fecha N.</th>
           <th>Opciones</th>
        </tr>
        <?php
          if($msmlista=="valido"){
          $numero=0;
          foreach($matrizUsuario as $registro){
              $numero=$numero+1;
	       echo "<tr>
           <td>".$numero."</td>
           <td><img src='".$registro["foto"]."' class='fototable'></td>
           <td>".$registro["dni"]."</td>
           <td>".$registro["nombre"]." ".$registro["apellidos"]."</td>
           <td>".$registro["email"]."</td>
           <td>".$registro["ciudad"]."</td>
           <td>".$registro["nacimiento"]."</td>
           <td><button class='btn btn-danger btn-xs'><span data-toggle='modal'data-target='#mod_eliminar' class='glyphicon glyphicon-trash'></span></button></td>
           </tr>";
            }}
          else{
              echo "<tr><td colspan='8'>NO SE ENCONTRARON DATOS PARA LA BUSQUEDA</td></tr>";
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

