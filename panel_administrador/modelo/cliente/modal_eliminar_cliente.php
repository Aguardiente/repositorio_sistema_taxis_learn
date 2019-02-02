<?php 
session_start();
error_reporting(0);
?>


<!-- _____________________________________________________________________________________ -->

<!----------- CLIENTES ------------>
<!----------- Modal de agregar cliente ------------>
<div class="modal fade" id="ModalAgregarCliente">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background: #eeb741; padding:10px; margin:0px; color:black;">
        <h5 class="modal-title" style="color:white; text-shadow:1px 1px 1px #585858;">Agregar cliente</h5>
      </div>
      <div class="modal-body" style='background:white; padding:50px; margin:0px; color:black;'>
        <label> Todos los campos con (*) son obligatorios </label> </br>
   <div class='row' style='margin:0px; padding:0px;'> 
  
    
    
    
               <div class='col-lg-6 col-xs-6'> 
               
               <label style='font-family:"Cooper Black"'>NIT/CI:</label></br>
               <input type='number' id='nit_ciCli' class='form-control' placeholder='(*)Escriba su NIT o CI' onkeyup="validador_campo('nit_ci','resp_nit_ci',2)" maxlength='10' min='0'  onkeypress='return valida_numeros(event);'>

               <div id='resp_nit_ciCli' ></div>
               </div> 
               
              <div class='col-lg-6 col-xs-6'> 
              
              <label style='font-family:"Cooper Black"'>Nombres:</label></br>
              <input type='text' id='nombreCli' class='form-control' placeholder='(*)Escriba su nombre' onkeyup="validador_campo('nombre','resp_nombre',4)" maxlength='200' onkeypress='return valida_letras(event);'>

               <div id='resp_nombreCli'></div>
               </div> 
               
              <div class='col-lg-6 col-xs-6'> 
              
              <label style='font-family:"Cooper Black"'>Apellidos:</label></br>
              <input type='text' id='apellidoCli' class='form-control' placeholder='(*)Escriba su apellido' onkeyup="validador_campo('apellido','resp_apellido',4)" maxlength='200' min='2' onkeypress='return valida_letras(event);'>

               <div id='resp_apellidoCli'></div>
               </div> 
               
              <div class='col-lg-6 col-xs-6'> 
              
              <label style='font-family:"Cooper Black"'>Razón Social:</label></br>
              <input type='text' id='razon_socialCli' class='form-control' placeholder='(*)Escriba su razón social' onkeyup="validador_campo('razon_social','resp_razon_social',4)" maxlength='10' min='2'  onkeypress='return valida_letras(event);'>

               <div id='resp_razon_socialCli'></div>
               </div> 
               
              <div class='col-lg-6 col-xs-6'> 
              
              <label style='font-family:"Cooper Black"'>Dirección:</label></br>
              <textarea rows="5" type='text' id='direccionCli' class='form-control' placeholder='(*)Escriba su direccion' onkeyup="validador_campo('direccion','resp_direccion',4)" maxlength='200' onkeypress='return valida_letras(event);'></textarea>

               <div id='resp_direccionCli'></div>
               </div> 
               
              <div class='col-lg-6 col-xs-6'> 
              
              <label style='font-family:"Cooper Black"'>Celular:</label></br>
              <input type='number' id='celularCli' class='form-control' placeholder='(*)Escriba su celular' onkeyup="validador_campo('celular','resp_celular',4)" maxlength='50' min='2'  onkeypress='return valida_numeros(event);'>

               <div id='resp_celularCli'></div>

               <label style='font-family:"Cooper Black"'>Teléfono</label></br>
              <input type='number' id='telefonoCli' class='form-control' placeholder='(*)Escriba su teléfono' onkeyup="validador_campo('telefono','resp_telefono',4)" maxlength='50' min='2'  onkeypress='return valida_numeros(event);'>
               <div id='resp_telefonoCli'></div>

               </div> 
               
               </br><hr>

   <div id='resultado_registro_cliente'></div> 
   
   </div>
      </div>
      <div class="modal-footer justify-content-center" style="background: ; padding:10px; margin:0px; color:black;">
        <a type="button" onclick="registrarCliente()" class="btn btn-default btn-md" style="border-radius: 20px;">Aceptar
          <i class="fa fa-paper-plane ml-1"></i>
        </a>
        <a type="button" class="btn btn-warning btn-md" style="border-radius: 10px; font-size: 12px; color: white;" data-dismiss="modal">Cerrar</a>
      </div>
    </div>
  </div>
</div>




<!----------- Modal de modificar cliente ------------>
<div class="modal fade" id="ModalModificarCliente" >
  <div class="modal-dialog modal-full-height modal-right modal-notify modal-info" role="document">
    <div class="modal-content">
      <!--Header-->
      <div class="modal-header" style="background: #eeb741; padding:10px; margin:0px; color:black;">
        <h5 class="modal-title" style="color:white; text-shadow:1px 1px 1px #585858;">Modificar cliente</h5>
      </div>

      <!--Body-->
      <div class="modal-body" style='background:white; padding:50px; margin:0px; color:black;'>

        <!-- Contenido -->
        <?php
include("../../conector/conectadorSQL.php");

 $ID_cliente = $_POST['idCliMod'];


 $query = mysqli_query($conectador, "SELECT * FROM cliente WHERE ID_cliente='$ID_cliente'");
 while($row = mysqli_fetch_array($query))
  {
      ?> 
      <div class='row'>

      <input type='hidden' id='ID_cliente_edicion' value='<?php echo $ID_cliente; ?>'>
      
       <div class='col-lg-6 col-sm-6 col-xs-12'>

       <label style='font-family:"Cooper Black"'> NIT/CI : </label>  
       <?php echo $nit_ci=$row['nit_ci']; ?> 
         <input type='number' class='form-control' id='nit_ciClEd' value='<?php echo $nit_ci;?>' placeholder='(*)Escriba su nit_ci' onkeyup="validador_campo('nit_ci','resp_nit_ci',4)" maxlength='10' min='0' onkeypress='return valida_numeros(event);'>

         <div id='resp_nit_ciClEd'> </div>
         </div>
       <div class='col-lg-6 col-sm-6 col-xs-12'>

       <label style='font-family:"Cooper Black"'> Nombres : </label>  
       <?php echo $nombre=$row['nombre']; ?> 
         
        <input type='text' class='form-control' id='nombreClEd' value='<?php echo $nombre;?>' placeholder='(*)Escriba su nombre' onkeyup="validador_campo('nombre','resp_nombre',4)" maxlength='100' onkeypress='return valida_letras(event);'>

        <div id='resp_nombreClEd'> </div>
        </div>
        
       <div class='col-lg-6 col-sm-6 col-xs-12'>

       <label style='font-family:"Cooper Black"'> Apellidos : </label>  
       <?php echo $apellido=$row['apellido']; ?> 
         
        <input type='text' class='form-control' id='apellidoClEd' value='<?php echo $apellido;?>' placeholder='(*)Escriba su apellido' onkeyup="validador_campo('apellido','resp_apellido',4)" maxlength='100' onkeypress='return valida_letras(event);'>

        <div id='resp_apellidoClEd'> </div>
        </div>
        
       <div class='col-lg-6 col-sm-6 col-xs-12'>

       <label style='font-family:"Cooper Black"'> Razon Social : </label>  
       <?php echo $razon_social=$row['razon_social']; ?> 
         
        <input type='text' class='form-control' id='razon_socialClEd' value='<?php echo $razon_social;?>' placeholder='(*)Escriba su razon_social' onkeyup="validador_campo('razon_social','resp_razon_social',4)" maxlength='100' onkeypress='return valida_numeros(event);'>

        <div id='resp_razon_socialClEd'> </div>
        </div>
        
       <div class='col-lg-6 col-sm-6 col-xs-12'>

       <label style='font-family:"Cooper Black"'> Dirección : </label>  
       <?php echo $direccion=$row['direccion']; ?> 
         
        <input type='text' class='form-control' id='direccionClEd' value='<?php echo $direccion;?>' placeholder='(*)Escriba su direccion' onkeyup="validador_campo('direccion','resp_direccion',4)" maxlength='100' onkeypress='return valida_letras(event);'>

        <div id='resp_direccionClEd'> </div>
        </div>
        
       <div class='col-lg-6 col-sm-6 col-xs-12'>

       <label style='font-family:"Cooper Black"'> Celular : </label>  
       <?php echo $celular=$row['celular']; ?> 
         
        <input type='text' class='form-control' id='celularClEd' value='<?php echo $celular;?>' placeholder='(*)Escriba su celular' onkeyup="validador_campo('celular','resp_celular',4)" maxlength='100' onkeypress='return valida_numeros(event);'>

        <div id='resp_celularClEd'> </div>
        </div>
        
       <div class='col-lg-6 col-sm-6 col-xs-12'>

       <label style='font-family:"Cooper Black"'> Teléfono : </label>  
       <?php echo $telefono=$row['telefono']; ?> 
         
        <input type='text' class='form-control' id='telefonoClEd' value='<?php echo $telefono;?>' placeholder='(*)Escriba su telefono' onkeyup="validador_campo('telefono','resp_telefono',4)" maxlength='100' onkeypress='return valida_numeros(event);'>

        <div id='resp_telefonoClEd'> </div>
        </div>     

      </div>
    <?php
  }

        echo '

      </div>

      <!--Footer-->
      <div class="modal-footer justify-content-center" tyle="background: ; padding:10px; margin:0px; color:black;">
        <a type="button" onclick="modificarCliente('.$_POST['idCliMod'].')" class="btn btn-default btn-md" style="border-radius: 20px;">Aceptar
          <i class="fa fa-paper-plane ml-1"></i>
        </a>
        <a type="button" class="btn btn-warning btn-md" style="border-radius: 10px; font-size: 12px; color: white;" data-dismiss="modal">Cerrar</a>
      </div>
    </div>
  </div>
</div>
';

         ?>




<!-- Modal eliminar cliente -->
        <?php 

        echo '
<div class="modal fade" id="ModalEliminarCliente" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-sm modal-notify modal-danger" role="document">
    <!--Content-->
    <div class="modal-content text-center">
      <!--Header-->
      <div class="modal-header d-flex justify-content-center" style="background: #eeb741; padding:10px; margin:0px; color:black;">
      <h5 class="modal-title" style="color:white; text-shadow:1px 1px 1px #585858;">Eliminarás al cliente '.$_POST['nombreCliElim'].$_POST['apellidoCliElim'].' ¿Estas seguro?</h5>
       </div>

      <!--Body-->
      <div class="modal-body" style="background:white; padding:50px; margin:0px; color:black;">

        <img src="../images/x_delete.png"> 

      </div>

      <!--Footer-->
      <div class="modal-footer justify-content-center" tyle="background: ; padding:10px; margin:0px; color:black;">
        <a type="button" onclick="eliminarCliente('.$_POST['idCliElim'].')" class="btn btn-default btn-md" style="border-radius: 20px;">Aceptar
          <i class="fa fa-paper-plane ml-1"></i>
        </a>
        <a type="button" class="btn btn-warning btn-md" style="border-radius: 10px; font-size: 12px; color: white;" data-dismiss="modal">Cerrar</a>
      </div>
    </div>
    <!--/.Content-->
  </div>
</div>
<!--Modal: modalConfirmDelete-->
';

         ?>         
