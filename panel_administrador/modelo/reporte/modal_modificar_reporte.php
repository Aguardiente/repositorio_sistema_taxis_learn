<?php 
session_start();
error_reporting(0);
?>


<!----------- Modal de modificar reporte ------------>
<div class="modal fade" id="ModalModificarReporte" >
  <div class="modal-dialog modal-full-height modal-right modal-notify modal-info" role="document">
    <div class="modal-content">
      <!--Header-->
      <div class="modal-header" style="background: #eeb741; padding:10px; margin:0px; color:black;">
        <h5 class="modal-title" style="color:white; text-shadow:1px 1px 1px #585858;">Modificar reporte</h5>
      </div>

      <!--Body-->
      <div class="modal-body" style='background:white; padding:50px; margin:0px; color:black;'>

        <!-- Contenido -->
        <?php
include("../../conector/conectadorSQL.php");

 $ID_reporte = $_POST['idRepMod'];


 $query = mysqli_query($conectador, "SELECT * FROM reporte WHERE ID_reporte='$ID_reporte'");
 while($row = mysqli_fetch_array($query))
  {
      ?> 
      <div class='row'>

      <input type='hidden' id='ID_reporte_edicion' value='<?php echo $ID_reporte; ?>'>
      
       <div class='col-lg-6 col-sm-6 col-xs-12'>

       <label style='font-family:"Cooper Black"'> ID Cliente : </label>  
       <?php echo $id_cliente=$row['id_cliente']; ?> 
         <input type='number' class='form-control' id='id_cliente' value='<?php echo $id_cliente;?>' placeholder='(*)Escriba su id_cliente' onkeyup="validador_campo('id_cliente','resp_id_cliente',4)" maxlength='10' min='0' onkeypress='return valida_numeros(event);'>

         <div id='resp_id_cliente'> </div>
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
        
       <div class='col-lg-6 col-sm-6 col-xs-12'>

       <label style='font-family:"Cooper Black"'> Fecha de inicio : </label>  
       <?php echo $fecha_inicio=$row['fecha_inicio']; ?> 
        <input type="date" class="form-control" id="fecha_inicio" value="<?php echo $fecha_inicio;?>" placeholder="(*)Escriba su fecha_inicio" onkeyup="validador_campo('fecha_inicio','resp_fecha_inicio',4)"" maxlength="20"><div id="resp_fecha_inicio"></div>
        </div>
       <div class='col-lg-6 col-sm-6 col-xs-12'>

       <label style='font-family:"Cooper Black"'> Fecha Fin : </label>  
       <?php echo $fecha_fin=$row['fecha_fin']; ?> 
        <input type="date" class="form-control" id="fecha_fin" value="<?php echo $fecha_fin;?>" placeholder="(*)Escriba su fecha_fin" onkeyup="validador_campo('fecha_fin','resp_fecha_fin',4)"" maxlength="20"><div id="resp_fecha_fin"></div>
        </div>
       <div class='col-lg-6 col-sm-6 col-xs-12'>

       <label style='font-family:"Cooper Black"'> Hora : </label>  
       <?php echo $hora=$row['hora']; ?> 
        <input type="time" class="form-control" id="hora" value="<?php echo $hora;?>" placeholder="(*)Escriba su hora" onkeyup="validador_campo('hora','resp_hora',4)"" maxlength="20"><div id="resp_hora"></div>
        </div>
      </div>
    <?php
  }

        echo '

      </div>

      <!--Footer-->
      <div class="modal-footer justify-content-center" tyle="background: ; padding:10px; margin:0px; color:black;">
        <a type="button" onclick="modificarReporte('.$_POST['idRepMod'].')" class="btn btn-default btn-md" style="border-radius: 20px;">Aceptar
          <i class="fa fa-paper-plane ml-1"></i>
        </a>
        <a type="button" class="btn btn-warning btn-md" style="border-radius: 10px; font-size: 12px; color: white;" data-dismiss="modal">Cerrar</a>
      </div>
    </div>
  </div>
</div>
';

         ?>
