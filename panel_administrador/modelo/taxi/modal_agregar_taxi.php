<?php 
session_start();
error_reporting(0);
?>


<!-- _________________________________________________________________________ -->

<!----------- TAXIS ------------>
<!----------- Modal de agregar taxis ------------>
<div class="modal" id="ModalAgregarTaxi">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background: #eeb741; padding:10px; margin:0px; color:black;">
        <h5 class="modal-title" style="color:white; text-shadow:1px 1px 1px #585858;">Agregar taxi</h5>
      </div>
      <div class="modal-body" style='background:white; padding:50px; margin:0px; color:black;'>
      <label> Todos los campos con (*) son obligatorios </label> </br>
   
   <div class='row' style='margin:0px; padding:0px;'> 
  
    
             
               
               <div class='col-lg-6 col-xs-6'> 
               
               <label style='font-family:"Cooper Black"'>Nro. móvil:</label></br>
               <input type='number' id='nro_movil' class='form-control' placeholder='(*)Escriba su numero_movil' onkeyup="validador_campo('numero_movil','resp_numero_movil',2)" maxlength='10' min='0'  onkeypress='return valida_numeros(event);'>

               <div id='resp_numero_movil' ></div>
               </div> 
               
              <div class='col-lg-6 col-xs-6'> 
              
              <label style='font-family:"Cooper Black"'>Placa:</label></br>
              <input type='text' id='placa' class='form-control' placeholder='(*)Escriba su placa' maxlength='200'>

               <div id='resp_placa'></div>
               </div> 


              <div class='col-lg-6 col-xs-6'> 
               
               <label style='font-family:"Cooper Black"'>Modelo:</label></br>
               <input type='text' id='modelo' class='form-control' placeholder='(*)Escriba su placa' maxlength='200'>

               <div id='resp_modelo' ></div>
               </div> 
               
              <div class='col-lg-6 col-xs-6'> 
              
              <label style='font-family:"Cooper Black"'>Marca:</label></br>
              <input type='text' id='marca' class='form-control' placeholder='(*)Escriba su placa' maxlength='200'>

               <div id='resp_marca'></div>
               </div> 
               
              <div class='col-lg-6 col-xs-6'> 
              
              <label style='font-family:"Cooper Black"'>Descripción:</label></br>
              <textarea rows="8" type='text' id='descripcion' class='form-control' placeholder='(*)Escriba su descripcion' onkeyup="validador_campo('descripcion','resp_descripcion',4)" maxlength='200' onkeypress='return valida_letras(event);'></textarea>

               <div id='resp_descripcion'></div>
               </div> 
               

               </br><hr>

   <div id='resultado_registro_taxi'></div> 
   
   </div>
      </div>
      <div class="modal-footer justify-content-center" style="background: ; padding:10px; margin:0px; color:black;">
        <a type="button" onclick="registrarTaxi()" class="btn btn-default btn-md" style="border-radius: 20px;">Aceptar
          <i class="fa fa-paper-plane ml-1"></i>
        </a>
        <a type="button" class="btn btn-warning btn-md" style="border-radius: 10px; font-size: 12px; color: white;" data-dismiss="modal">Cerrar</a>
      </div>
    </div>
  </div>
</div>

