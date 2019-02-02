//ACCIONES PARA LOS MODALS DE SERVICIO (AGREGAR, MODIFICAR Y ELIMINAR)
//AGREGAR
function abrirModalAgregarServicio() {
   $.ajax({
         data: "",
         url: '../modelo/servicio/modal_agregar_servicio.php',
         type: 'post',
         beforeSend: function() {
            $("#modals").html("Procesando, espere por favor...");
         },
         success: function(response) {
            $("#modals").html(response);
            $tablas("#ModalAgregarServicio").modal();
         }
      });
}

function registrarServicio() {
   var servicio = document.getElementById("servicio").value;   
   var chofer = document.getElementById("chofer").value;
   var cliente = document.getElementById("cliente").value;
   var descripcion = document.getElementById("descripcion").value;
   var tipo = document.getElementById("tipo").value;   
   var total = document.getElementById("total").value;
   var pago = document.getElementById("pago").value;
   var saldo = document.getElementById("saldo").value;

   var parametros = {
      "servicio": servicio,
      "chofer": chofer,
      "cliente": cliente,
      "descripcion": descripcion,
      "tipo": tipo,
      "total": total,
      "pago": pago,
      "saldo": saldo

   };
   $.ajax({
      data: parametros,
      url: '../modelo/servicio/modelo_agregar_servicio.php',
      type: 'post',
      beforeSend: function() {
         $("#panel").html("Procesando, espere por favor...");
      },
      success: function(response) {
         $tablas('#ModalAgregarServicio').modal('hide');
         $("#panel").html(response);

      }
   });
}

//MODIFICAR
function abrirModalModServicio(idSerMod) {
var parametros = {
      "idSerMod": idSerMod
   };
   $.ajax({
      data: parametros,
      url: '../modelo/servicio/modal_modificar_servicio.php',
      type: 'post',
      beforeSend: function() {
         $("#modals").html("Procesando, espere por favor...");
      },
      success: function(response) {
         $("#modals").html(response);
         $tablas("#ModalModificarServicio").modal();
      }
   });
}

function modificarServicio(idSerMod) {
   var servicio = document.getElementById("servicio").value;   
   var chofer = document.getElementById("chofer").value;
   var cliente = document.getElementById("cliente").value;
   var descripcion = document.getElementById("descripcion").value;
   var tipo = document.getElementById("tipo").value;   
   var total = document.getElementById("total").value;
   var pago = document.getElementById("pago").value;
   var saldo = document.getElementById("saldo").value;

   var parametros = {
      "idSerMod": idSerMod,
      "servicio": servicio,
      "chofer": chofer,
      "cliente": cliente,
      "descripcion": descripcion,
      "tipo": tipo,
      "total": total,
      "pago": pago,
      "saldo": saldo
   };
   $.ajax({
      data: parametros,
      url: '../modelo/servicio/modelo_modificar_servicio.php',
      type: 'post',
      beforeSend: function() {
         $("#panel").html("Procesando, espere por favor...");
      },
      success: function(response) {
         $tablas('#ModalModificarServicio').modal('hide');
         $("#panel").html(response);

      }
   });
}

//ELIMINAR

function abrirModalElimServicio(idSerElim) {

var parametros = {
      "idSerElim": idSerElim 

   };
   $.ajax({
      data: parametros,
      url: '../modelo/servicio/modal_eliminar_servicio.php',
      type: 'post',
      beforeSend: function() {
         $("#modals").html("Procesando, espere por favor...");
      },
      success: function(response) {
         $("#modals").html(response);
         $tablas("#ModalEliminarServicio").modal();
      }
   });
  
}

function eliminarServicio(idSerElim) {
var parametros = {
      "idSerElim": idSerElim  
   };
   $.ajax({
      data: parametros,
      url: '../modelo/servicio/modelo_eliminar_servicio.php',
      type: 'post',
      beforeSend: function() {
         $("#panel").html("Procesando, espere por favor...");
      },
      success: function(response) {
         $tablas('#ModalEliminarServicio').modal('hide');
         $("#panel").html(response);

      }
   });

}
