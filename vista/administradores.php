<?php include 'controlador/insert_admin.php';?>
<?php include 'controlador/listar_admin.php';?>
<div class="contenido">
   <h3 id="titulo">Mantenimiento Administradores</h3>
<div class="body">
    
       <button data-toggle="modal" data-target="#miventanaR" class="btn btn-info" style="margin-left:40%;">Nuevo Registro</button>
       <span class="alert-warning"><?php echo @$mensaje;?></span>
       <br>
       <br>
       
       <!--registro-->
       <form  method="post" action="" class="row">
         <legend style="margin-left:25px;"> Buscar por: </legend>
          
          
          <div class="row clearfix col-sm-12">
                <div class="col-sm-4">
                    <div class="form-group">
                        <div class="form-line">
                           <label for="dni">DNI/ Apellidos / Tipo/</label>
                            <input type="text" class="form-control" name="dato" placeholder="Dato">
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <div class="form-line">
                            <label for="password">De esta Fecha:</label>
                            <input type="date" class="form-control" name="defecha" >
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <div class="form-line">
                            <label for="password">Hasta esta Fecha:</label>
                            <input type="date" class="form-control" name="hastafecha">
                        </div>
                    </div>
                </div>
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
           <th>DNI</th>
           <th>Teléfono</th>
           <th>Nombre y Apellidos</th>
           <th>Correo</th> 
           <th>Tipo</th>
           <th>Fecha Ingreso</th>
           <th>Foto</th>
           <th>Opciones</th>
        </tr>
        <?php
          if($msmlista=="valido"){
          $numero=0;
          foreach($matrizAdmin as $registro){
              $numero=$numero+1;
	       echo "<tr>
           <td>".$numero."</td>
           <td>".$registro["dni"]."</td>
           <td>".$registro["telefono"]."</td>
           <td>".$registro["nombre"]." ".$registro["apellidos"]."</td>
           <td>".$registro["correo"]."</td>
           <td>".$registro["tipo_admin"]."</td>
           <td>".$registro["fecha_ingreso"]."</td>
           <td><img src='".$registro["foto"]."' class='fototable'></td>
           <td>";
              ?>
    <a href="javascript:del_admin('<?php echo $registro['dni'];?>','<?php echo $registro['nombre'];?>','<?php echo $registro['foto'];?>');" class=" clik-eli glyphicon glyphicon-trash btn-danger btn" ></a>
          
    <a href="javascript:edit_admin('<?php echo $registro['dni'];?>','<?php echo $registro['nombre'];?>');" class=" clik-edi glyphicon glyphicon-pencil btn-success btn" ></a>
          
            <?php echo "  </td>     </tr>";
           
            }}
          else{
              echo "<tr><td colspan='9'>NO SE ENCONTRARON DATOS PARA LA BÚSQUEDA</td></tr>";
          }
          //echo $msn;
          ?>
          
        
       
        </table>
        </div> 
       
</div>
</div>
<!--MODAL REGISTRO-->
<div class="modal fade " id="miventanaR" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  	<div class="modal-dialog">
  		<div class="modal-content">
  			<button type="button" class="close" data-dismiss="modal" aria-hidden="true"> &times;</button>
            <center><h1 style="color:#2E9AFE;">REGISTRO</h1></center>	
  		    <div class="modal-body" style="background:#F6CECE;">
  		        <form  method="post" action="">
                      <div class="form-group col-sm-6">
                        <label for="dni">DNI:</label>
                        <input type="number" class="form-control" name="dni" required>
                      </div>
                      <div class="form-group col-sm-6">
                        <label for="nombre">Nombre:</label>
                        <input type="text" class="form-control" name="nombre" required>
                      </div>
                      <div class="form-group col-sm-6">
                        <label for="apellidos">Apellidos:</label>
                        <input type="text" class="form-control" name="apellidos" required>
                      </div>
                       <div class="form-group col-sm-6">
                        <label for="nick">Telefono:</label>
                        <input type="text" class="form-control" name="nick" required>
                      </div>
                      <div class="form-group col-sm-6">
                        <label for="correo">Email:</label>
                        <input type="email" class="form-control" name="correo" required>
                      </div>
                      <div class="form-group col-sm-6">
                        <label for="tipo">Tipo:</label>
                        <select name="tipo" class="form-control">
                            <option value="admin">admin</option>
                             <option value="superadmin">superadmin</option>
                        </select>
                      </div>
                    <div class="form-group col-sm-6">
                          <label for="password">Password:</label>
                         <input type="password" class="form-control" name="password" minlength="6" required>
                    </div>
                       <div class="form-group col-sm-6">
                            <label for="password">Fecha de Ingreso:</label>
                            <input class="form-control" type="date"  name="fecha" required>
                     </div>
<center>
<input type="submit" class="btn btn-primary" name="registrar" value="Registrar"/>
 <input type="button" class="btn btn-danger" class="close" value="Cancelar" data-dismiss="modal" aria-hidden="true"/></center>
            </form>
  			</div>
  		</div>
  		
  	</div>
    </div>
    
  
    <!--MODAL ELIMINAR-->
<div class="modal fade " id="mod_eli" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  	<div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <center><h4 class="modal-title" id="myModalLabel"><b>¿SEGURO QUE DESEA ELIMINAR?</b></h4></center>
            </div>
			  <div class="modal-body">
			  	<center>
			  	<form action="controlador/eliminar_admin.php" method="post">
                     <img id="ima" src="im/admin/avatar.png"height="200px" ><br>
                    <h4>Usted esta a punto de eliminar a: </h4> <h2 id="nom"></h2>
                    <h4>con DNI N°:</h4> 
			  	     <input type="text" readonly name="dni" id="dni"/><br><br>
			  	    <input type="submit" value="Eliminar" name="eliminar" class="btn-danger btn">
			  	     <input type="button" value="Cancelar" class="btn-success btn" class="close" data-dismiss="modal" aria-hidden="true">
			  	</form>
			  	</center>
			  </div>
            
          </div>
        </div>
    </div>
    
    
  <!--MODAL EDI-->
<div class="modal fade " id="mod_edi" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  	<div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <center><h4 class="modal-title" id="myModalLabel"><b>EDITAR</b></h4></center>
            </div>
			  <div class="modal-body">
			  	<center>
			  	<form action="controlador/edit_admin.php" method="post">
    
                <h4>Actualizar a </h4> <h2 id="nombr"></h2>
                    <h4>con DNI N°:</h4> 
			  	     <input type="text" readonly name="dniad" id="dniad"/><br><br>
			  	    <select name="tipo" class="form-control col-sm-3">
                            <option value="admin">admin</option>
                             <option value="superadmin">superadmin</option>
                             <option value="inhabilitado">inhabilitado</option>
                        </select><br><br>
			  	    <input type="submit" value="Actualizar" name="actualizar" class="btn-danger btn">
			  	     <input type="button" value="Cancelar" class="btn-success btn" class="close" data-dismiss="modal" aria-hidden="true">
			  	</form>
			  	</center>
			  </div>
            
          </div>
        </div>
    </div>


