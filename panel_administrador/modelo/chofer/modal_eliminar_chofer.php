<?php 
session_start();
error_reporting(0);
?>

<?php echo '
<div class="modal fade" id="ModalEliminarChofer" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-sm modal-notify modal-danger" role="document">
    <!--Content-->
    <div class="modal-content text-center">
      <!--Header-->
      <div class="modal-header d-flex justify-content-center" style="background: #eeb741; padding:10px; margin:0px; color:black;">
      <h5 class="modal-title" style="color:white; text-shadow:1px 1px 1px #585858;">Eliminarás al chofer ¿Estas seguro?</h5>
       </div>

      <!--Body-->
      <div class="modal-body" style="background:white; padding:50px; margin:0px; color:black;">

        <img src="../images/x_delete.png"> 

      </div>

      <!--Footer-->
      <div class="modal-footer justify-content-center" tyle="background: ; padding:10px; margin:0px; color:black;">

        <a type="button" onclick="eliminarChofer('.$_POST['idChfElim'].')" class="btn btn-default btn-md" style="border-radius: 20px;">Aceptar
                  <i class="fa fa-paper-plane ml-1"></i>
                </a>
        '; ?>        
        <a type="button" class="btn btn-warning btn-md" style="border-radius: 10px; font-size: 12px; color: white;" data-dismiss="modal">Cerrar</a>
      </div>
    </div>
    <!--/.Content-->
  </div>
</div>
