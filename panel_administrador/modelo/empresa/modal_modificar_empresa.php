<?php 
session_start();
error_reporting(0);
?>



<!----------- Modal de modificar empresa ------------>
<div class="modal fade" id="ModalModificarEmpresa" >
  <div class="modal-dialog modal-full-height modal-right modal-notify modal-info" role="document">
    <div class="modal-content">
      <!--Header-->
      <div class="modal-header" style="background: #eeb741; padding:10px; margin:0px; color:black;">
        <h5 class="modal-title" style="color:white; text-shadow:1px 1px 1px #585858;">Modificar empresa</h5>
      </div>

      <!--Body-->
      <div class="modal-body" style='background:white; padding:50px; margin:0px; color:black;'>

        <!-- Contenido -->
        <?php
include("../../conector/conectadorSQL.php");

 $ID_empresa = $_POST['idEmpMod'];


 $query = mysqli_query($conectador, "SELECT * FROM empresa WHERE ID_empresa='$ID_empresa'");
 while($row = mysqli_fetch_array($query))
  {
      ?> 
<div class='row'>

      <input type='hidden' id='ID_empresa_edicion' value='<?php echo $ID_empresa; ?>'>
      
       <div class='col-lg-6 col-sm-6 col-xs-12'>

       <label style='font-family:"Cooper Black"'> Razón Social : </label> 
       <?php echo $razon_social=$row['razon_social']; ?> 
         
        <input type='text' class='form-control' id='razon_social' value='<?php echo $razon_social;?>' placeholder='(*)Escriba su razon_social' onkeyup="validador_campo('razon_social','resp_razon_social',4)" maxlength='100' onkeypress='return valida_numeros(event);'>

        <div id='resp_razon_social'> </div>
        </div>
        
       <div class='col-lg-6 col-sm-6 col-xs-12'>

       <label style='font-family:"Cooper Black"'> Encargado : </label>  
       <?php echo $encargado=$row['encargado']; ?> 
         
        <input type='text' class='form-control' id='encargado' value='<?php echo $encargado;?>' placeholder='(*)Escriba su encargado' onkeyup="validador_campo('encargado','resp_encargado',4)" maxlength='100' onkeypress='return valida_numeros(event);'>

        <div id='resp_encargado'> </div>
        </div>
        
       <div class='col-lg-6 col-sm-6 col-xs-12'>

       <label style='font-family:"Cooper Black"'> NIT : </label> 
       <?php echo $nit=$row['nit']; ?> 
         
        <input type='number' class='form-control' id='nit' value='<?php echo $nit;?>' placeholder='(*)Escriba su nit' onkeyup="validador_campo('nit','resp_nit',4)" maxlength='100' onkeypress='return valida_numeros(event);'>

        <div id='resp_nit'> </div>
        </div>
        
       <div class='col-lg-6 col-sm-6 col-xs-12'>

       <label style='font-family:"Cooper Black"'> Nro. Autorización : </label>  
       <?php echo $num_autorizacion=$row['num_autorizacion']; ?> 
         <input type='number' class='form-control' id='num_autorizacion' value='<?php echo $num_autorizacion;?>' placeholder='(*)Escriba su num_autorizacion' onkeyup="validador_campo('num_autorizacion','resp_num_autorizacion',4)" maxlength='10' min='0' onkeypress='return valida_numeros(event);'>

         <div id='resp_num_autorizacion'> </div>
         </div>
       <div class='col-lg-6 col-sm-6 col-xs-12'>

       <label style='font-family:"Cooper Black"'> Fecha Limite de facturación: </label> 
       <?php echo $fecha_limite=$row['fecha_limite']; ?>
        <input type="text" class="datepicker" id="fecha_limite" value="<?php echo $fecha_limite;?>" placeholder="(*)Escriba su fecha_limite" >
        <div id="resp_fecha_limite"></div>
        </div>
        </br><hr>

        <div id='resultado_registro_empresa'></div> 
</div>

    <?php
  }

?>
      
      </div>

      <!--Footer-->
      <div class="modal-footer justify-content-center" tyle="background: ; padding:10px; margin:0px; color:black;">
  <?php   echo  '<a type="button" onclick="modificarEmpresa('.$_POST['idEmpMod'].')" class="btn btn-default btn-md" style="border-radius: 20px;">Aceptar
          <i class="fa fa-paper-plane ml-1"></i>
        </a>';
  ?>
        <a type="button" class="btn btn-warning btn-md" style="border-radius: 10px; font-size: 12px; color: white;" data-dismiss="modal">Cerrar</a>
      </div>
    </div>
  </div>
</div>



    <script>
    $calendario('.datepicker').datepicker({
         format: "yy/mm/dd",
         language: "es",
         multidate: false,
         maxViewMode: 1
    });
    </script>
