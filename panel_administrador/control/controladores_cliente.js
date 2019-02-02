//ACCIONES PARA LOS MODALS DE CLIENTES (AGREGAR, MODIFICAR Y ELIMINAR)
//AGREGAR
function abrirModalAgregarCliente() {
   $.ajax({
         data: "",
         url: '../modelo/cliente/modal_agregar_cliente.php',
         type: 'post',
         beforeSend: function() {
            $("#modals").html("Procesando, espere por favor...");
         },
         success: function(response) {
            $("#modals").html(response);
            $tablas('#ModalAgregarCliente').modal();
         }
      });
}

function registrarCliente() {
   var nit_ciCli = document.getElementById("nit_ciCli").value;   
   var nombreCli = document.getElementById("nombreCli").value;
   var apellidoCli = document.getElementById("apellidoCli").value;
   var razon_socialCli = document.getElementById("razon_socialCli").value;
   var direccionCli = document.getElementById("direccionCli").value;   
   var celularCli = document.getElementById("celularCli").value;
   var telefonoCli = document.getElementById("telefonoCli").value;

   var parametros = {
      "nit_ci": nit_ciCli,
      "nombre": nombreCli,
      "apellido": apellidoCli,
      "razon_social": razon_socialCli,
      "direccion": direccionCli,
      "celular": celularCli,
      "telefono": telefonoCli
   };
   $.ajax({
      data: parametros,
      url: '../modelo/cliente/modelo_agregar_cliente.php',
      type: 'post',
      beforeSend: function() {
         $("#panel").html("Procesando, espere por favor...");
      },
      success: function(response) {
         $tablas('#ModalAgregarCliente').modal('hide');
         $("#panel").html(response);

      }
   });
}
//MODIFICAR
function abrirModalModCliente(idCliMod) {
var parametros = {
      "idCliMod": idCliMod
   };
   $.ajax({
      data: parametros,
      url: '../modelo/cliente/modal_modificar_cliente.php',
      type: 'post',
      beforeSend: function() {
         $("#modals").html("Procesando, espere por favor...");
      },
      success: function(response) {
         $("#modals").html(response);
         $tablas("#ModalModificarCliente").modal();
      }
   });
}
function modificarCliente(idCliMod) {
   var nit_ciClEd = document.getElementById("nit_ciClEd").value;   
   var nombreClEd = document.getElementById("nombreClEd").value;
   var apellidoClEd = document.getElementById("apellidoClEd").value;
   var razon_socialClEd = document.getElementById("razon_socialClEd").value;
   var direccionClEd = document.getElementById("direccionClEd").value;   
   var celularClEd = document.getElementById("celularClEd").value;
   var telefonoClEd = document.getElementById("telefonoClEd").value;


   var parametros = {
      "ID_cliente": idCliMod,
      "nit_ci": nit_ciClEd,
      "nombre": nombreClEd,
      "apellido": apellidoClEd,
      "razon_social": razon_socialClEd,
      "direccion": direccionClEd,
      "celular": celularClEd,
      "telefono": telefonoClEd
   };
   $.ajax({
      data: parametros,
      url: '../modelo/cliente/modelo_modificar_cliente.php',
      type: 'post',
      beforeSend: function() {
         $("#panel").html("Procesando, espere por favor...");
      },
      success: function(response) {
         $tablas('#ModalModificarCliente').modal('hide');
         $("#panel").html(response);

      }
   });
}

//ELIMINAR
function abrirModalElimCliente(idCliElim,nombreCliElim,apellidoCliElim) {

var parametros = {
      "idCliElim": idCliElim,
      "apellidoCliElim": apellidoCliElim,     
      "nombreCliElim": nombreCliElim     

   };
   $.ajax({
      data: parametros,
      url: '../modelo/cliente/modal_eliminar_cliente.php',
      type: 'post',
      beforeSend: function() {
         $("#modals").html("Procesando, espere por favor...");
      },
      success: function(response) {
         $("#modals").html(response);
         $tablas("#ModalEliminarCliente").modal();
      }
   });

   
}

function eliminarCliente(idCliElim) {
var parametros = {
      "idCliElim": idCliElim  
   };
   $.ajax({
      data: parametros,
      url: '../modelo/cliente/modelo_eliminar_cliente.php',
      type: 'post',
      beforeSend: function() {
         $("#panel").html("Procesando, espere por favor...");
      },
      success: function(response) {
         $tablas('#ModalEliminarCliente').modal('hide');
         $("#panel").html(response);

      }
   });

}
