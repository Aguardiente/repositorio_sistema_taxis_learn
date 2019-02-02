<?php 
session_start();
error_reporting(0);
?>

<!-- _________________________________________________________________________ -->

<!----------- REPORTES ------------>
<!----------- Modal de agregar reportes ------------>
<div class="modal fade" id="ModalAgregarReporte">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background: #eeb741; padding:10px; margin:0px; color:black;">
        <h5 class="modal-title" style="color:white; text-shadow:1px 1px 1px #585858;">Agregar reporte</h5>
      </div>
      <div class="modal-body" style='background:white; padding:50px; margin:0px; color:black;'>
    <label> Todos los campos con (*) son obligatorios </label> </br>
   
   <div class='row' style='margin:0px; padding:0px;'> 
  
     
               <div class='col-lg-6 col-xs-6'> 
               <?php 

                require('../conector/conectadorSQL.php');

                $infoTablasAdmin="";
                $result = mysqli_query($conectador,"select * from cliente"); 
                //Cargando datos de la BD a una variable matriz
                $n=0;
                while($fila=mysqli_fetch_array($result))
                {
                $infoTablasAdmin[$n]=$fila;
                  $n++;
                }
       

                 echo "<label style='font-family:Cooper Black'>ID Cliente:</label></br>
                  <select name='id_clienteRegRep' id='id_cliente' class='md-form mdb-select colorful-select dropdown-primary'>
                    <option value='' disabled selected>Selecciona tu opción</option>";
                   
                          $c=0;
                        while($c<sizeof($infoTablasAdmin)){

                          echo "<option value='".$infoTablasAdmin[$c][0]."' >".$infoTablasAdmin[$c][2]." ".$infoTablasAdmin[$c][3]."</option>";

                          $c++;
                        }
                        $infoTablasAdmin="";
                        echo '</select>';

                    ?>

               <div id='resp_id_cliente' ></div>
               </div> 
               
              <div class='col-lg-6 col-xs-6'> 
              
             <label style='font-family:"Cooper Black"'>Celular:</label></br>
              <input type='number' id='celularRegRep' class='form-control' placeholder='(*)Escriba su celular' onkeyup="validador_campo('celular','resp_celular',2)" maxlength='10' min='0'  onkeypress='return valida_numeros(event);'>
               <div id='resp_celular'></div>
               </div> 
               
              <div class='col-lg-6 col-xs-6'> 
              
              <label style='font-family:"Cooper Black"'>Teléfono:</label></br>
              <input type='number' id='telefonoRegRep' class='form-control' placeholder='(*)Escriba su telefono' onkeyup="validador_campo('telefono','resp_telefono',2)" maxlength='10' min='0'  onkeypress='return valida_numeros(event);'>
               <div id='resp_telefono'></div>
               </div> 
               
               <div class='col-lg-6 col-xs-6'> 
               
               <label style='font-family:"Cooper Black"'>Fecha inicio:</label></br>
               <input type='date' id='fecha_inicioRegRep' class='form-control' placeholder='(*)Escriba su fecha_inicio' onkeyup="validador_campo('fecha_inicio','resp_fecha_inicio',2)" maxlength='20' min='0'>

               <div id='resp_fecha_inicio' ></div>
               </div> 
               
               <div class='col-lg-6 col-xs-6'> 
               
               <label style='font-family:"Cooper Black"'>Fecha final:</label></br>
               <input type='date' id='fecha_finRegRep' class='form-control' placeholder='(*)Escriba su fecha_fin' onkeyup="validador_campo('fecha_fin','resp_fecha_fin',2)" maxlength='20' min='0'>

               <div id='resp_fecha_fin' ></div>
               </div> 
               
    
               </br><hr>

   <div id='resultado_registro_reporte'></div> 
   
   </div>
      </div>
      <div class="modal-footer justify-content-center" style="background: ; padding:10px; margin:0px; color:black;">
        <a type="button" onclick="registrarReporte()" class="btn btn-default btn-md" style="border-radius: 20px;">Aceptar
          <i class="fa fa-paper-plane ml-1"></i>
        </a>
        <a type="button" class="btn btn-warning btn-md" style="border-radius: 10px; font-size: 12px; color: white;" data-dismiss="modal">Cerrar</a>
      </div>
    </div>
  </div>
</div>



