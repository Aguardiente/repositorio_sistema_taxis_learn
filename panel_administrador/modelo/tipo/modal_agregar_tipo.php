<?php 
session_start();
error_reporting(0);
?>

<!-- ________________________________________________________________________ -->

<!----------- TIPO ------------>
<!----------- Modal de agregar tipos  ------------>
<div class="modal" id="ModalAgregarTipo">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background: #eeb741; padding:10px; margin:0px; color:black;">
        <h5 class="modal-title" style="color:white; text-shadow:1px 1px 1px #585858;">Agregar tipo</h5>
      </div>
      <div class="modal-body" style='background:white; padding:50px; margin:0px; color:black;'>
   <label> Todos los campos con (*) son obligatorios </label> </br>
   
   <div class='row' style='margin:0px; padding:0px;'> 
  

    
              <div class='col-lg-6 col-xs-6'> 
              
              <label style='font-family:"Cooper Black"'>Tipo de taxi:</label></br>
              <input type='text' id='tipo_taxi' class='form-control' placeholder='(*)Escriba su tipo de taxi' onkeyup="validador_campo('tipo_taxi','resp_tipo_taxi',4)" maxlength='200' onkeypress='return valida_letras(event);'>

               <div id='resp_tipo_taxi'></div>
               </div> 
          
               </br><hr>

   <div id='resultado_registro_tipo'></div> 
   
   </div>
      </div>
      <div class="modal-footer justify-content-center" style="background: ; padding:10px; margin:0px; color:black;">
        <a type="button" onclick="registrarTipo()" class="btn btn-default btn-md" style="border-radius: 20px;">Aceptar
          <i class="fa fa-paper-plane ml-1"></i>
        </a>
        <a type="button" class="btn btn-warning btn-md" style="border-radius: 10px; font-size: 12px; color: white;" data-dismiss="modal">Cerrar</a>
      </div>
    </div>
  </div>
</div>


