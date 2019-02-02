<?php 
session_start();
error_reporting(0);
?>

<!----------- ADMINISTRADORES ------------>
<!----------- Modal de modificar administrador ------------>
<div class="modal fade" id="ModalModificarAdmin">
  <div class="modal-dialog modal-full-height modal-right modal-notify modal-info" role="document">
    <div class="modal-content">
      <!--Header-->
      <div class="modal-header" style="background: #eeb741; padding:10px; margin:0px; color:black;">
        <p class="heading lead" style="color:white; text-shadow:1px 1px 1px #585858;">Modificar administrador
        </p>
      </div>

      <!--Body-->
      <div class="modal-body" style='background: ; padding:10px; margin:0px; color:black;'>
        <div class="text-center">
          <i class="far fa-file-alt fa-4x mb-3 animated rotateIn"></i>
          <p>Edita los campos para el administrador
            <strong><?php echo $_POST['correo']; ?></strong>
          </p>
        </div>

        <hr>

        <!-- Contenido -->
        <?php 

        echo '


        <div class="form-check mb-4">
          <input type="password" placeholder="Contraseña" id="passAdminMod" class="form-control" required="required" >
        </div>
        <div class="form-check mb-4">
          <input type="text" value="'.$_POST['cargo'].'" placeholder="Cargo" id="cargoAdminMod" class="form-control" required="required" >
        </div>
        <div class="form-check mb-4">
          <input type="text" value="'.$_POST['alias'].'" placeholder="Alias" id="aliasAdminMod" class="form-control" required="required" >
        </div>

      </div>

      <!--Footer-->
      <div class="modal-footer justify-content-center" style="background: ; padding:10px; margin:0px; color:black;">
        <a type="button" onclick="modificarAdministrador('.$_POST['id'].')" class="btn btn-default btn-md" style="border-radius: 20px;">Aceptar
          <i class="fa fa-paper-plane ml-1"></i>
        </a>
        <a type="button" class="btn btn-warning btn-md" style="border-radius: 10px; font-size: 12px; color: white;" data-dismiss="modal">Cerrar</a>
      </div>
    </div>
  </div>
</div>
';

         ?>

