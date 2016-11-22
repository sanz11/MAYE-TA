<?php include 'controlador/listar_ofertas.php';?>
<div class="contenido">
   <h3 id="titulo">Mantenimiento Ofertas</h3>
<div class="body">
    
    
       
       <!--registro-->
       <form  method="post" action="" class="row">
         <legend style="margin-left:25px;"> Buscar por </legend>
          <div class="form-group col-sm-4">
            <label for="dni">DNI/ apellidos / tipo/</label>
            <input type="text" class="form-control" name="dato" />
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
           <th>Nro</th>
           <th>DNI</th>
           <th>Telefono</th>
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
           <td><button class='btn btn-danger btn-xs'><span data-toggle='modal'data-target='#mod_eliminar' class='glyphicon glyphicon-trash'></span></button><button class='btn btn-success btn-xs'><span class='glyphicon glyphicon-pencil'></span></button> </td>
           </tr>";
            }}
          else{
              echo "<tr><td colspan='9'>NO SE ENCONTRARON DATOS PARA LA BUSQUEDA</td></tr>";
          }
          //echo $msn;
          ?>
          
        
       
        </table>
        </div> 
       
       
       <div class=" t table-responsive" > 
      <table class="table table-striped table-bordered table-condensed">
       <tr class="info">
           <th>N°</th>
           <th>Usuario</th>
           <th>Rubro</th>
           <th style="max-width:320px;">Contenido</th>
            <th>Opción</th>
           </tr>
        <tr>
           <td>1</td>
           <td>70241454</td>
           <td>Mecanico</td>
           <td style="max-width:320px;">Necesito un mecanico full-time</td>
           <td><button class="btn btn-success"><span class="glyphicon glyphicon-ok"></span><button class="btn btn-danger"><span class="glyphicon glyphicon-eye-open"></span></button> </td>
        </tr>
        <tr>
           <td>2</td>
           <td>702414</td>
           <td>Gasfitero</td>
           <td style="max-width:320px;">Se busca Gasfiter para 10 dias de trabajo en Lima hsda</td>
           <td><button class="btn btn-success"><span class="glyphicon glyphicon-ok"></span><button class="btn btn-danger"><span class="glyphicon glyphicon-eye-open"></span></button> </td>
        </tr>
        <tr>
           <td>3</td>
           <td>7024144</td>
           <td>Mecanico</td>
           <td style="max-width:320px;">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Hic similique blanditiis eveniet tempore modi optio sint velit eaque enim fugiat, dicta veritatis, facilis numquam sit voluptatem minus aliquam! Ullam, veritatis.</td>
           <td><button class="btn btn-success"><span class="glyphicon glyphicon-ok"></span><button class="btn btn-danger"><span class="glyphicon glyphicon-eye-open"></span></button> </td>
        </tr>
       
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

