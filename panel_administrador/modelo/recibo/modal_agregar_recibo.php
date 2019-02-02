<?php 
session_start();
error_reporting(0);
?>

<!-- ______________________________________________________________ -->

<!----------- RECIBO ------------>
<!----------- Modal de agregar recibo ------------>
<div class="modal fade" id="ModalAgregarRecibo">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background: #eeb741; padding:10px; margin:0px; color:black;">
        <h5 class="modal-title" style="color:white; text-shadow:1px 1px 1px #585858;">Agregar recibo</h5>
      </div>
      <div class="modal-body" style='background:white; padding:50px; margin:0px; color:black;'>
   <label> Todos los campos con (*) son obligatorios </label> </br>
   
   <div class='row' style='margin:0px; padding:0px;'> 
  
    
              <div class='col-lg-6 col-xs-6'> 
                             <?php 

                require('../../conector/conectadorSQL.php');

                $infoTablasAdmin="";
                $result = mysqli_query($conectador,"select * from cliente"); 
                //Cargando datos de la BD a una variable matriz
                $n=0;
                while($fila=mysqli_fetch_array($result))
                {
                $infoTablasAdmin[$n]=$fila;
                  $n++;
                }
       

                 echo "<label style='font-family:Cooper Black'>Cliente:</label></br>
                  <select name='cliente' id='cliente' class='md-form mdb-select colorful-select dropdown-primary'>
                    <option value='' disabled selected>Selecciona tu opción</option>";
                   
                          $c=0;
                        while($c<sizeof($infoTablasAdmin)){

                          echo "<option value='".$infoTablasAdmin[$c][2]." ".$infoTablasAdmin[$c][3]."' >".$infoTablasAdmin[$c][2]." ".$infoTablasAdmin[$c][3]."</option>";

                          $c++;
                        }
                        $infoTablasAdmin="";
                        echo '</select>';

                    ?>

               <div id='resp_id_cliente' ></div>
              
               </div> 
               
               <div class='col-lg-6 col-xs-6'> 
        
              <label style='font-family:"Cooper Black"'>NIT/CI Cliente:</label></br>
              <input type='number' id='nit_cliente' class='form-control' placeholder='(*)Escriba su nit o ci de cliente' maxlength='200' onkeypress='return valida_numeros(event);'>

               <div id='resp_nit_cliente'></div>

               </div> 

               
               <div class='col-lg-6 col-xs-6'> 
               <?php 

                require('../../conector/conectadorSQL.php');

                $infoTablasAdmin="";
                $result = mysqli_query($conectador,"select * from tipo"); 
                //Cargando datos de la BD a una variable matriz
                $n=0;
                while($fila=mysqli_fetch_array($result))
                {
                $infoTablasAdmin[$n]=$fila;
                  $n++;
                }
       

                 echo "<label style='font-family:Cooper Black'>Tipo de taxi</label></br>
                  <select name='tipo' id='tipo' class='md-form mdb-select colorful-select dropdown-primary'>
                    <option value='' disabled selected>Selecciona tu opción</option>";
                   
                          $c=0;
                        while($c<sizeof($infoTablasAdmin)){

                          echo "<option value='".$infoTablasAdmin[$c][1]."' >".$infoTablasAdmin[$c][1]."</option>";

                          $c++;
                        }
                        $infoTablasAdmin="";
                        echo '</select>';

                    ?>

               <div id='resp_tipo' ></div>
               </div> 
               
               <div class='col-lg-6 col-xs-6'> 
                              <?php 

                require('../../conector/conectadorSQL.php');

                $infoTablasAdmin="";
                $result = mysqli_query($conectador,"select * from chofer"); 
                //Cargando datos de la BD a una variable matriz
                $n=0;
                while($fila=mysqli_fetch_array($result))
                {
                $infoTablasAdmin[$n]=$fila;
                  $n++;
                }
       

                 echo "<label style='font-family:Cooper Black'>Chofer:</label></br>
                  <select name='chofer' id='chofer' class='md-form mdb-select colorful-select dropdown-primary'>
                    <option value='' disabled selected>Selecciona tu opción</option>";
                   
                          $c=0;
                        while($c<sizeof($infoTablasAdmin)){

                          echo "<option value='".$infoTablasAdmin[$c][1]."' >".$infoTablasAdmin[$c][1]."</option>";

                          $c++;
                        }
                        $infoTablasAdmin="";
                        echo '</select>';

                    ?>

               <div id='resp_id_recibo' ></div>
               </div> 
               
               
               <div class='col-lg-6 col-xs-6'> 
               <label style='font-family:"Cooper Black"'>Servicio:</label></br>
              <select id='servicio' name='servicio' class='md-form mdb-select colorful-select dropdown-primary'>
                    <option value='' disabled selected>Selecciona tu opción</option>";
                    <option value='carrera' >Carrera</option>
                    <option value='transporte' >Transporte</option>
              </select>
               <div id='resp_servicio'></div>

               <label style='font-family:"Cooper Black"'>Pago:</label></br>
               <input type='number' id='pago' class='form-control' placeholder='(*)Escriba su pago' onkeyup="validador_campo('pago','resp_pago',2)" maxlength='10' min='0'  onkeypress='return valida_numeros(event);'>

               <div id='resp_pago' ></div>
  
               <label style='font-family:"Cooper Black"'>Total:</label></br>
               <input type='number' id='total' class='form-control' placeholder='(*)Escriba su total' onkeyup="validador_campo('total','resp_total',2)" maxlength='10' min='0'  onkeypress='return valida_numeros(event);'>

               <div id='resp_total' ></div>

                <label style='font-family:"Cooper Black"'>Saldo:</label></br>
               <input type='number' id='saldo' class='form-control' placeholder='(*)Escriba su saldo' onkeyup="validador_campo('saldo','resp_saldo',2)" maxlength='10' min='0'  onkeypress='return valida_numeros(event);'>

               <div id='resp_saldo' ></div>
               </div> 
               
              <div class='col-lg-6 col-xs-6'> 
              
              <label style='font-family:"Cooper Black"'>Descripción:</label></br>
              <textarea rows="8" type='text' id='descripcion' class='form-control' placeholder='(*)Escriba su descripcion' onkeyup="validador_campo('descripcion','resp_descripcion',4)" maxlength='200' onkeypress='return valida_letras(event);'></textarea>

               <div id='resp_descripcion'></div>
               </div> 
    
               </br><hr>

   <div id='resultado_registro_Factura'></div> 
   
   </div>
      </div>
      <div class="modal-footer justify-content-center" style="background: ; padding:10px; margin:0px; color:black;">
        <a type="button" onclick="registrarRecibo()" class="btn btn-default btn-md" style="border-radius: 20px;">Aceptar
          <i class="fa fa-paper-plane ml-1"></i>
        </a>
        <a type="button" class="btn btn-warning btn-md" style="border-radius: 10px; font-size: 12px; color: white;" data-dismiss="modal">Cerrar</a>
      </div>
    </div>
  </div>
</div>

