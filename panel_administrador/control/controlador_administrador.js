//ACCIONES PARA LOS MODALS DE ADMINISTRADORES (AGREGAR, MODIFICAR Y ELIMINAR)
//MODIFICAR
function abrirModalModAdministrador(id,correo,contrasena,cargo,alias) {

var parametros = {
      "id": id,
      "correo": correo,
      "contrasena": contrasena,
      "cargo": cargo,
      "alias": alias
      };
   $.ajax({
      data: parametros,
      url: '../modelo/administrador/modal_modificar_administrador.php',
      type: 'post',
      beforeSend: function() {
         $("#modals").html("Procesando, espere por favor...");
      },
      success: function(response) {
         $("#modals").html(response);
         $tablas("#ModalModificarAdmin").modal();
      }
   });


}

function modificarAdministrador(id) {
   var passAdminMod = document.getElementById("passAdminMod").value;   
   var cargoAdminMod = document.getElementById("cargoAdminMod").value;
   var aliasAdminMod = document.getElementById("aliasAdminMod").value;   

   var parametros = {
      "id": id,
      "passAdminMod": passAdminMod,
      "cargoAdminMod": cargoAdminMod,
      "aliasAdminMod": aliasAdminMod
   };
   $.ajax({
      data: parametros,
      url: '../modelo/administrador/modelo_modificar_administrador.php',
      type: 'post',
      beforeSend: function() {
         $("#panel").html("Procesando, espere por favor...");
      },
      success: function(response) {
         $tablas('#ModalModificarAdmin').modal('hide');
         $("#panel").html(response);

      }
   });
}
