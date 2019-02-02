<?php 
session_start();
error_reporting(0);
?>


<!----------- Modal de modificar tipo ------------>
<div class="modal fade" id="ModalModificarTipo" >
  <div class="modal-dialog modal-full-height modal-right modal-notify modal-info" role="document">
    <div class="modal-content">
      <!--Header-->
      <div class="modal-header" style="background: #eeb741; padding:10px; margin:0px; color:black;">
        <h5 class="modal-title" style="color:white; text-shadow:1px 1px 1px #585858;">Modificar taxi</h5>
      </div>

      <!--Body-->
      <div class="modal-body" style='background:white; padding:50px; margin:0px; color:black;'>

        <!-- Contenido -->
        <?php
include("../../conector/conectadorSQL.php");

 $ID_tipo = $_POST['idTpMod'];


 $query = mysqli_query($conectador, "SELECT * FROM tipo WHERE ID_tipo='$ID_tipo'");
 while($row = mysqli_fetch_array($query))
  {
      ?> 
      <div class='row'>

      <input type='hidden' id='ID_tipo_edicion' value='<?php echo $ID_tipo; ?>'>
      
       <div class='col-lg-6 col-sm-6 col-xs-12'>

       <label style='font-family:"Cooper Black"'> Tipo de taxi : </label>  
       <?php echo $tipo_taxi=$row['tipo_taxi']; ?> 
         
        <input type='text' class='form-control' id='tipo_taxi' value='<?php echo $tipo_taxi;?>' placeholder='(*)Escriba su tipo de taxi' onkeyup="validador_campo('tipo_taxi','resp_tipo_taxi',4)" maxlength='100' onkeypress='return valida_letras(event);'>

        <div id='resp_tipo_taxi'> </div>
        </div>
        
      </div>
    <?php
  }

        echo '

      </div>

      <!--Footer-->
      <div class="modal-footer justify-content-center" tyle="background: ; padding:10px; margin:0px; color:black;">
        <a type="button" onclick="modificarTipo('.$_POST['idTpMod'].')" class="btn btn-default btn-md" style="border-radius: 20px;">Aceptar
          <i class="fa fa-paper-plane ml-1"></i>
        </a>
        <a type="button" class="btn btn-warning btn-md" style="border-radius: 10px; font-size: 12px; color: white;" data-dismiss="modal">Cerrar</a>
      </div>
    </div>
  </div>
</div>
';

         ?>

