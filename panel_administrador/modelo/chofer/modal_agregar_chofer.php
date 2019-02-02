<?php 
session_start();
error_reporting(0);
?>

<!-- __________________________________________________________________________________ -->

<!----------- CHOFER ------------>
<!----------- Modal de agregar chofer ------------>
<div class="modal fade" id="ModalAgregarChofer">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background: #eeb741; padding:10px; margin:0px; color:black;">
        <h5 class="modal-title" style="color:white; text-shadow:1px 1px 1px #585858;">Agregar chofer</h5>
      </div>
      <div class="modal-body" style='background:white; padding:50px; margin:0px; color:black;'>
          <label> Todos los campos con (*) son obligatorios </label> </br>
   
   <div class='row' style='margin:0px; padding:0px;'> 
  
 

    
              <div class='col-lg-6 col-xs-6'> 
              
              <label style='font-family:"Cooper Black"'>Nombres:</label></br>
              <input type='text' id='nombre' class='form-control' placeholder='(*)Escriba su nombre' onkeyup="validador_campo('nombre','resp_nombre',4)" maxlength='200' onkeypress='return valida_letras(event);'>

               <div id='resp_nombre'></div>
               </div> 
               
              <div class='col-lg-6 col-xs-6'> 
              
              <label style='font-family:"Cooper Black"'>Apellidos:</label></br>
              <input type='text' id='apellido' class='form-control' placeholder='(*)Escriba su apellido' onkeyup="validador_campo('apellido','resp_apellido',4)" maxlength='200' onkeypress='return valida_letras(event);'>

               <div id='resp_apellido'></div>
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
                  <select id='tipo_taxi' class='md-form mdb-select colorful-select dropdown-primary'>
                    <option value='' disabled selected>Selecciona tu opción</option>";
                   
                          $c=0;
                        while($c<sizeof($infoTablasAdmin)){

                          echo "<option value='".$infoTablasAdmin[$c][1]."' >".$infoTablasAdmin[$c][1]."</option>";

                          $c++;
                        }
                        $infoTablasAdmin="";
                        echo '</select>';

                    ?>

              <div id='resp_tipo_taxi'></div>
               </div>

                            
              <div class='col-lg-6 col-xs-6'> 
              
              <label style='font-family:"Cooper Black"'>Dirección:</label></br>
              <input type='text' id='direccion' class='form-control' placeholder='(*)Escriba su direccion' onkeyup="validador_campo('direccion','resp_direccion',4)" maxlength='200' onkeypress='return valida_letras(event);'>

               <div id='resp_direccion'></div>
               </div> 
               
              <div class='col-lg-6 col-xs-6'> 
              
              <label style='font-family:"Cooper Black"'>Celular:</label></br>
              <input type='number' id='celular' class='form-control' placeholder='(*)Escriba su celular' onkeyup="validador_campo('celular','resp_celular',4)" maxlength='10' onkeypress='return valida_numeros(event);'>

               <div id='resp_celular'></div>
               </div> 
               
              <div class='col-lg-6 col-xs-6'> 
              
              <label style='font-family:"Cooper Black"'>Teléfono:</label></br>
              <input type='number' id='telefono' class='form-control' placeholder='(*)Escriba su telefono' onkeyup="validador_campo('telefono','resp_telefono',4)" maxlength='10' onkeypress='return valida_numeros(event);'>

               <div id='resp_telefono'></div>
               </div> 
               

               </br><hr>

   <div id='resultado_registro_chofer'></div> 
   
   </div>
      <div class="modal-footer justify-content-center" style="background: ; padding:10px; margin:0px; color:black;">
        <a type="button" onclick="registrarChofer()" class="btn btn-default btn-md" style="border-radius: 20px;">Aceptar
          <i class="fa fa-paper-plane ml-1"></i>
        </a>
        <a type="button" class="btn btn-warning btn-md" style="border-radius: 10px; font-size: 12px; color: white;" data-dismiss="modal">Cerrar</a>
      </div>
    </div>
  </div>
</div>
