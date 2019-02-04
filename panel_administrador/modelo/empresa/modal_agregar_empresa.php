<?php 
session_start();
error_reporting(0);
?>


<!-- __________________________________________________________________________________ -->

<!----------- EMPRESAS ------------>
<!----------- Modal de agregar empresa ------------>
<div class="modal fade" id="ModalAgregarEmpresa">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background: #eeb741; padding:10px; margin:0px; color:black;">
        <h5 class="modal-title" style="color:white; text-shadow:1px 1px 1px #585858;">Agregar empresa</h5>
      </div>
      <div class="modal-body" style='background:white; padding:50px; margin:0px; color:black;'>
        <label> Todos los campos con (*) son obligatorios </label> </br>
   
   <div class='row' style='margin:0px; padding:0px;'> 
  

    
    
              <div class='col-lg-6 col-xs-6'> 
              
              <label style='font-family:"Cooper Black"'>Razón Social:</label></br>
              <input type='text' id='razon_social' class='form-control' placeholder='(*)Escriba su razon_social' onkeyup="validador_campo('razon_social','resp_razon_social',4)" maxlength='200' onkeypress='return valida_numeros(event);'>

               <div id='resp_razon_social'></div>
               </div> 
               
              <div class='col-lg-6 col-xs-6'> 
              
              <label style='font-family:"Cooper Black"'>Encargado:</label></br>
              <input type='text' id='encargado' class='form-control' placeholder='(*)Escriba su encargado' onkeyup="validador_campo('encargado','resp_encargado',4)" maxlength='200' onkeypress='return valida_letras(event);'>

               <div id='resp_encargado'></div>
               </div> 
               
              <div class='col-lg-6 col-xs-6'> 
              
              <label style='font-family:"Cooper Black"'>NIT:</label></br>
              <input type='number' id='nit' class='form-control' placeholder='(*)Escriba su nit' onkeyup="validador_campo('nit','resp_nit',4)" maxlength='200' onkeypress='return valida_numeros(event);'>

               <div id='resp_nit'></div>
               </div> 
               
               <div class='col-lg-6 col-xs-6'> 
               
               <label style='font-family:"Cooper Black"'>Nro. Autorización:</label></br>
               <input type='number' id='num_autorizacion' class='form-control' placeholder='(*)Escriba su num_autorizacion' onkeyup="validador_campo('num_autorizacion','resp_num_autorizacion',2)" maxlength='10' min='0'  onkeypress='return valida_numeros(event);'>

               <div id='resp_num_autorizacion' ></div>
               </div> 
               
               <div class='col-lg-6 col-xs-6'> 
               
               <label style='font-family:"Cooper Black"'>Fecha Límite de facturación:</label></br>
              <input type="text" class="datepicker" value="Coloque la fecha" id='fecha_limite'>

               <div id='resp_fecha_limite' ></div>
               </div> 

               </br><hr>

   <div id='resultado_registro_empresa'></div> 
   
   </div>
      </div>
      <div class="modal-footer justify-content-center" style="background: ; padding:10px; margin:0px; color:black;">
        <a type="button" onclick="registrarEmpresa()" class="btn btn-default btn-md" style="border-radius: 20px;">Aceptar
          <i class="fa fa-paper-plane ml-1"></i>
        </a>
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

