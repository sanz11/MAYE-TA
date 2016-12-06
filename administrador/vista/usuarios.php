<?php include 'controlador/listar_usuario.php';?>
<div class="contenido">
   <h3 id="titulo">Mantenimiento Usuarios</h3>
<div class="body">
    
    
       
       <!--registro-->
       <form  method="post" action="" class="row">
         <legend style="margin-left:25px;"> Buscar por </legend>
          <div class="row clearfix col-sm-12">
               <div class="col-sm-2"></div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <div class="form-line">
                           <label for="dni">Ciudad / Dni:</label>
                            <input type="text" class="form-control" name="dato" placeholder="dato">
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <div class="form-line">
                            <label for="password">Fecha N:</label>
                            <input type="date" class="form-control" name="fecha" >
                        </div>
                    </div>
                </div>
         </div>
     <input type="submit" class="btn btn-primary col-sm-2 " name="buscar" value="Buscar" style="margin-left:25px; margin-bottom:10px;"/>
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
          if($valido=="1"){
          $numero=0;
          foreach($matrizUsuario as $registro){
              $numero=$numero+1;
	     echo " <tr>
           <td>".$numero."</td>";?>
           
           <td><img src="../fotosadmin/<?php echo $registro['foto']?>" class="fototable"></td>
           <td><?php echo $registro['dni']?></td>
           <td><?php echo $registro['nombre']?> <?php echo " ".$registro['apellidos']?></td>
           <td><?php echo $registro['email']?></td>
           <td><?php echo $registro['ciudad']?></td>
           <td><?php echo $registro['nacimiento']?></td>
          	
				<th><a href="javascript:del_usuario('<?php echo $registro['dni'];?>','<?php echo $registro['nombre'];?>','<?php echo $registro['foto'];?>');" class=" clik-ver glyphicon glyphicon-trash btn-danger btn" ></a>
				</th>
					</tr>
           <?php
            }
          }
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
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <center><h4 class="modal-title" id="myModalLabel"><b>¿SEGURO QUE DESEA ELIMINAR?</b></h4></center>
            </div>
			  <div class="modal-body">
			  	<center>
			  	<form action="controlador/eliminar_usuario.php" method="post">
                     <img id="ima" src="im/admin/avatar.png"height="200px" ><br>
                    <h4>Usted esta a punto de eliminar a: </h4> <h2 id="nom"></h2>
                    <h4>con dni N°:</h4> 
			  	     <input type="text" readonly name="dni" id="dni"/><br><br>
			  	    <input type="submit" value="Eliminar" name="eliminar" class="btn-danger btn">
			  	     <input type="button" value="Cancelar" class="btn-success btn" class="close" data-dismiss="modal" aria-hidden="true">
			  	</form>
			  	</center>
			  </div>
            
          </div>
        </div>
    </div>