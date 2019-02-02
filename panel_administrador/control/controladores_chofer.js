//ACCIONES PARA LOS MODALS DE CHOFER (AGREGAR, MODIFICAR Y ELIMINAR)
//AGREGAR
function abrirModalAgregarChofer() {

   $.ajax({
      data: "",
      url: '../modelo/chofer/modal_agregar_chofer.php',
      type: 'post',
      beforeSend: function() {
         $("#modals").html("Procesando, espere por favor...");
      },
      success: function(response) {
         $("#modals").html(response);
         $tablas("#ModalAgregarChofer").modal();
      }
   });

}

function registrarChofer() {
   var nombre = document.getElementById("nombre").value;   
   var apellido = document.getElementById("apellido").value;
   var tipo_taxi = document.getElementById("tipo_taxi").value;
   var direccion = document.getElementById("direccion").value;
   var celular = document.getElementById("celular").value;   
   var telefono = document.getElementById("telefono").value;

   var parametros = {
      "nombre": nombre,
      "apellido": apellido,
      "tipo_taxi": tipo_taxi,
      "direccion": direccion,
      "celular": celular,
      "telefono": telefono

   };
   $.ajax({
      data: parametros,
      url: '../modelo/chofer/modelo_agregar_chofer.php',
      type: 'post',
      beforeSend: function() {
         $("#panel").html("Procesando, espere por favor...");
      },
      success: function(response) {
         $tablas('#ModalAgregarChofer').modal('hide');
         $("#panel").html(response);

      }
   });
}
//MODIFICAR

function abrirModalModChofer(idChfMod) {
var parametros = {
      "idChfMod": idChfMod
   };
   $.ajax({
      data: parametros,
      url: '../modelo/chofer/modal_modificar_chofer.php',
      type: 'post',
      beforeSend: function() {
         $("#modals").html("Procesando, espere por favor...");
      },
      success: function(response) {
         $("#modals").html(response);
         $tablas("#ModalModificarChofer").modal();
      }
   });

}

function modificarChofer(idChfMod) {
   var nombre = document.getElementById("nombre").value;   
   var apellido = document.getElementById("apellido").value;
   var tipo_taxi = document.getElementById("tipo_taxi").value;
   var direccion = document.getElementById("direccion").value;
   var celular = document.getElementById("celular").value;   
   var telefono = document.getElementById("telefono").value;

   var parametros = {
      "idChfMod": idChfMod,
      "nombre": nombre,
      "apellido": apellido,
      "tipo_taxi": tipo_taxi,
      "direccion": direccion,
      "celular": celular,
      "telefono": telefono
   };
   $.ajax({
      data: parametros,
      url: '../modelo/chofer/modelo_modificar_chofer.php',
      type: 'post',
      beforeSend: function() {
         $("#panel").html("Procesando, espere por favor...");
      },
      success: function(response) {
         $tablas('#ModalModificarChofer').modal('hide');
         $("#panel").html(response);

      }
   });
}

//ELIMINAR

function abrirModalElimChofer(idChfElim) {

var parametros = {
      "idChfElim": idChfElim    

   };
   $.ajax({
      data: parametros,
      url: '../modelo/chofer/modal_eliminar_chofer.php',
      type: 'post',
      beforeSend: function() {
         $("#modals").html("Procesando, espere por favor...");
      },
      success: function(response) {
         $("#modals").html(response);
         $tablas("#ModalEliminarChofer").modal();
      }
   });

   
}

function eliminarChofer(idChfElim) {
var parametros = {
      "idChfElim": idChfElim  
   };
   $.ajax({
      data: parametros,
      url: '../modelo/chofer/modelo_eliminar_chofer.php',
      type: 'post',
      beforeSend: function() {
         $("#panel").html("Procesando, espere por favor...");
      },
      success: function(response) {
         $tablas('#ModalEliminarChofer').modal('hide');
         $("#panel").html(response);

      }
   });

}
