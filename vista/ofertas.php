<?php include 'controlador/listar_ofertas.php';?>
<div class="contenido">
   <h3 id="titulo">Mantenimiento Ofertas</h3>
<div class="body">
    
       <form  method="post" action="" class="row">
         <legend style="margin-left:25px;"> Buscar por </legend>
          <div class="row clearfix col-sm-12">
                <div class="col-sm-4">
                    <div class="form-group">
                        <div class="form-line">
                           <label for="dni">Rubro:</label>
                            <input type="text" class="form-control" name="rubro" placeholder="dato">
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <div class="form-line">
                            <label for="password">de esta Fecha:</label>
                            <input type="date" class="form-control" name="defecha" >
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="form-group">
                        <div class="form-line">
                            <label for="password">hasta esta Fecha:</label>
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
           <td>";
           ?>            
           <a href="javascript:val_oferta('<?php echo $registro['id'];?>','<?php echo $registro['nombre'];?>','<?php echo $registro['rubro'];?>','<?php echo $registro['email'];?>');" class=" clik-val glyphicon glyphicon-ok btn btn-success" ></a>
          
    <a href="javascript:obs_oferta('<?php echo $registro['id'];?>','<?php echo $registro['email'];?>','<?php echo $registro['rubro'];?>');" class=" clik-obs glyphicon glyphicon-eye-open btn-danger btn" ></a>
           <?php echo "
           </td>
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
    
    <!--MODAL validar-->
<div class="modal fade " id="mod_val" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  	<div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <center><h2 class="modal-title" id="myModalLabel"><b>¿PUBLICAR ESTA OFERTA?</b></h2></center>
            </div>
			  <div class="modal-body">
			  	<center>
			  	<form action="controlador/validaroferta.php" method="post">
                    <h4>Usted esta a punto de <span class="negrita1">validar</span> la oferta de: </h4> <h2 class="oferta"id="rubro"></h2>
                    <h4>que fue publicada por:</h4>
                    <h2 class="name"id="nom"></h2>
                    <input type="text" name="rubro" id="rub" class="disnone"/>
			  	     <input type="text" name="email" id="email" class="disnone"/>
			  	     <input type="text"  name="id" id="id" class="disnone"/><br><br>
			  	    <input type="submit" value="Publicar" name="publicar" class="btn-primary btn">
			  	     <input type="button" value="Cancelar" class="btn-success btn" class="close" data-dismiss="modal" aria-hidden="true">
			  	</form>
			  	</center>
			  </div>
            
          </div>
        </div>
    </div>

   <style type="text/css">
       .disnone {display: none;}
       .oferta{color: crimson;}
       .name{color:darkcyan;}
        .negrita1{color:forestgreen;}
       .negrita2{color:firebrick;}
   </style>
    
  <!--MODAL obserbar-->
<div class="modal fade " id="mod_obs" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  	<div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <center><h2 class="modal-title" id="myModalLabel" ><b>MARCAR COMO OBSERVADO</b></h2></center>
            </div>
			  <div class="modal-body">
			  	<center>
			  	<form action="controlador/validaroferta.php" method="post">
                    <h4>Usted esta a punto de marcar como <span class="negrita2">observado</span> esta oferta de: </h4> <h2 class="oferta" id="rubrobs"></h2>
			  	     <input type="text" name="emailobs" id="emailobs" class="disnone"/>
			  	     <input type="text" name="rubro" id="rubobs" class="disnone"/>
			  	     <input type="text"  name="idobs" id="idobs" class="disnone"/><br><br>
			  	    <input type="submit" value="Observar" name="observar" class="btn-primary btn">
			  	     <input type="button" value="Cancelar" class="btn-success btn" class="close" data-dismiss="modal" aria-hidden="true">
			  	</form>
			  	</center>
			  </div>
            
          </div>
        </div>
    </div>


