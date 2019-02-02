<?php 
session_start();
error_reporting(0);
?>


<!----------- Modal de modificar taxi ------------>
<div class="modal fade" id="ModalModificarTaxi" >
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

 $ID_taxi = $_POST['idTaxMod'];

 $query = mysqli_query($conectador, "SELECT * FROM taxi WHERE ID_taxi='$ID_taxi'");
 while($row = mysqli_fetch_array($query))
  {
      ?> 
      <div class='row'>

      <input type='hidden' id='ID_taxi_edicion' value='<?php echo $ID_taxi; ?>'>
      
       <div class='col-lg-6 col-xs-6'> 
               
               <label style='font-family:"Cooper Black"'>Nro. móvil:<?php echo $$row['numero_movil']; ?></label></br>
<?php echo "
               <input type='number' id='nro_movil' value='".$row['numero_movil']."' class='form-control' placeholder='(*)Escriba su numero_movil' maxlength='10' min='0'  onkeypress='return valida_numeros(event);'>
";?>
               <div id='resp_numero_movil' ></div>
               </div> 
               
              <div class='col-lg-6 col-xs-6'> 
              
              <label style='font-family:"Cooper Black"'>Placa:<?php echo $$row['placa']; ?></label></br>
<?php echo "
              <input type='text' id='placa' value='".$row['placa']."' class='form-control' placeholder='(*)Escriba su placa' maxlength='200'>
";?>
               <div id='resp_placa'></div>
               </div> 


              <div class='col-lg-6 col-xs-6'> 
               
               <label style='font-family:"Cooper Black"'>Modelo:<?php echo $$row['modelo']; ?></label></br>
<?php echo "
               <input type='text' id='modelo' value='".$row['modelo']."' class='form-control' placeholder='(*)Escriba su modelo' maxlength='200'>
";?>
               <div id='resp_modelo' ></div>
               </div> 
               
              <div class='col-lg-6 col-xs-6'> 
              
              <label style='font-family:"Cooper Black"'>Marca:<?php echo $$row['marca']; ?></label></br>
<?php echo "
              <input type='text' id='marca' value='".$row['marca']."' class='form-control' placeholder='(*)Escriba su marca' maxlength='200'>
";?>
               <div id='resp_marca'></div>
               </div> 
               
              <div class='col-lg-6 col-xs-6'> 
              
              <label style='font-family:"Cooper Black"'>Descripción:<?php echo $$row['descripcion']; ?></label></br>
<?php echo "
              <textarea rows='8' type='text' id='descripcion' class='form-control' placeholder='(*)Escriba su descripcion' maxlength='200' onkeypress='return valida_letras(event);'>".$row['descripcion']."</textarea>
";?>
               <div id='resp_descripcion'></div>
               </div> 
    <?php
  }

        echo '

               </br><hr>

   <div id="resultado_modificacion_taxi"></div> 
   
   </div>
      </div>

      <!--Footer-->
      <div class="modal-footer justify-content-center" tyle="background: ; padding:10px; margin:0px; color:black;">
        <a type="button" onclick="modificarTaxi('.$_POST['idTaxMod'].')" class="btn btn-default btn-md" style="border-radius: 20px;">Aceptar
          <i class="fa fa-paper-plane ml-1"></i>
        </a>
        <a type="button" class="btn btn-warning btn-md" style="border-radius: 10px; font-size: 12px; color: white;" data-dismiss="modal">Cerrar</a>
      </div>
    </div>
  </div>
</div>
';

         ?>
