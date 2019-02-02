<?php 
session_start();
error_reporting(0);
?>


<!----------- Modal de modificar chofer ------------>
<div class="modal fade" id="ModalModificarChofer" >
  <div class="modal-dialog modal-full-height modal-right modal-notify modal-info" role="document">
    <div class="modal-content">
      <!--Header-->
      <div class="modal-header" style="background: #eeb741; padding:10px; margin:0px; color:black;">
        <h5 class="modal-title" style="color:white; text-shadow:1px 1px 1px #585858;">Modificar chofer</h5>
      </div>

      <!--Body-->
      <div class="modal-body" style='background:white; padding:50px; margin:0px; color:black;'>

        <!-- Contenido -->
        <?php
include("../../conector/conectadorSQL.php");

 $ID_chofer = $_POST['idChfMod'];


 $query = mysqli_query($conectador, "SELECT * FROM chofer WHERE ID_chofer='$ID_chofer'");
 while($row = mysqli_fetch_array($query))
  {
      ?> 
      <div class='row'>

      <input type='hidden' id='ID_chofer_edicion' value='<?php echo $ID_chofer; ?>'>
      
       <div class='col-lg-6 col-sm-6 col-xs-12'>

       <label style='font-family:"Cooper Black"'> Nombres : </label>  
       <?php echo $nombre=$row['nombre']; ?> 
         
        <input type='text' class='form-control' id='nombre' value='<?php echo $nombre;?>' placeholder='(*)Escriba su nombre' onkeyup="validador_campo('nombre','resp_nombre',4)" maxlength='100' onkeypress='return valida_letras(event);'>

        <div id='resp_nombre'> </div>
        </div>
        
       <div class='col-lg-6 col-sm-6 col-xs-12'>

       <label style='font-family:"Cooper Black"'> Apellidos : </label>  
       <?php echo $apellido=$row['apellido']; ?> 
         
        <input type='text' class='form-control' id='apellido' value='<?php echo $apellido;?>' placeholder='(*)Escriba su apellido' onkeyup="validador_campo('apellido','resp_apellido',4)" maxlength='100' onkeypress='return valida_letras(event);'>

        <div id='resp_apellido'> </div>
        </div>
        
       <div class='col-lg-6 col-sm-6 col-xs-12'>

       <label style='font-family:"Cooper Black"'> Tipo de taxi : </label>   
       <?php echo $tipo_taxi=$row['tipo_taxi']; ?> 
         
        <input type='text' class='form-control' id='tipo_taxi' value='<?php echo $tipo_taxi;?>' placeholder='(*)Escriba su tipo_taxi' onkeyup="validador_campo('tipo_taxi','resp_tipo_taxi',4)" maxlength='100' onkeypress='return valida_letras(event);'>

        <div id='resp_tipo_taxi'> </div>
        </div>
        
       <div class='col-lg-6 col-sm-6 col-xs-12'>

       <label style='font-family:"Cooper Black"'> Dirección : </label>  
       <?php echo $direccion=$row['direccion']; ?> 
         
        <input type='text' class='form-control' id='direccion' value='<?php echo $direccion;?>' placeholder='(*)Escriba su direccion' onkeyup="validador_campo('direccion','resp_direccion',4)" maxlength='100' onkeypress='return valida_letras(event);'>

        <div id='resp_direccion'> </div>
        </div>
        
       <div class='col-lg-6 col-sm-6 col-xs-12'>

       <label style='font-family:"Cooper Black"'> Celular : </label>  
       <?php echo $celular=$row['celular']; ?> 
         
        <input type='text' class='form-control' id='celular' value='<?php echo $celular;?>' placeholder='(*)Escriba su celular' onkeyup="validador_campo('celular','resp_celular',4)" maxlength='100' onkeypress='return valida_letras(event);'>

        <div id='resp_celular'> </div>
        </div>
        
       <div class='col-lg-6 col-sm-6 col-xs-12'>

       <label style='font-family:"Cooper Black"'> Teléfono : </label>  
       <?php echo $telefono=$row['telefono']; ?> 
         
        <input type='text' class='form-control' id='telefono' value='<?php echo $telefono;?>' placeholder='(*)Escriba su telefono' onkeyup="validador_campo('telefono','resp_telefono',4)" maxlength='100' onkeypress='return valida_letras(event);'>

        <div id='resp_telefono'> </div>
        </div>
        
      </div>
    <?php
  }

        echo '

      </div>

      <!--Footer-->
      <div class="modal-footer justify-content-center" tyle="background: ; padding:10px; margin:0px; color:black;">
        <a type="button" onclick="modificarChofer('.$_POST['idChfMod'].')" class="btn btn-default btn-md" style="border-radius: 20px;">Aceptar
          <i class="fa fa-paper-plane ml-1"></i>
        </a>
        <a type="button" class="btn btn-warning btn-md" style="border-radius: 10px; font-size: 12px; color: white;" data-dismiss="modal">Cerrar</a>
      </div>
    </div>
  </div>
</div>
';

         ?>

