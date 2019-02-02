//ACCIONES PARA LOS MODALS DE RECIBOS (AGREGAR, MODIFICAR Y ELIMINAR)
//AGREGAR
function abrirModalAgregarRecibo() {
   $.ajax({
         data: "",
         url: '../modelo/recibo/modal_agregar_recibo.php',
         type: 'post',
         beforeSend: function() {
            $("#modals").html("Procesando, espere por favor...");
         },
         success: function(response) {
            $("#modals").html(response);
            $tablas("#ModalAgregarRecibo").modal();
         }
      });
}

function registrarRecibo() {

   var servicio = document.getElementById("servicio").value; 
   var chofer = document.getElementById("chofer").value;
   var cliente = document.getElementById("cliente").value;
   var descripcion = document.getElementById("descripcion").value;
   var tipo = document.getElementById("tipo").value; 
   var total = document.getElementById("total").value;
   var pago = document.getElementById("pago").value;
   var saldo = document.getElementById("saldo").value;   
   var nit_cliente = document.getElementById("nit_cliente").value;

   var parametros = {
      "servicio": servicio,
      "chofer": chofer,
      "cliente": cliente,
      "descripcion": descripcion,
      "tipo": tipo,
      "total": total,
      "pago": pago,
      "saldo": saldo,
      "nit_cliente": nit_cliente
   }; 
   $.ajax({
      data: parametros,
      url: '../modelo/recibo/modelo_agregar_recibo.php',
      type: 'post',
      beforeSend: function() {
         $("#panel").html("Procesando, espere por favor...");
      },
      success: function(response) {
         $tablas('#ModalAgregarRecibo').modal('hide');
         $("#panel").html(response);

      }
   });

}

//MODIFICAR
function abrirModalModRecibo(idRecMod) {
var parametros = {
      "idRecMod": idRecMod
   };
   $.ajax({
      data: parametros,
      url: '../modelo/recibo/modal_modificar_recibo.php',
      type: 'post',
      beforeSend: function() {
         $("#modals").html("Procesando, espere por favor...");
      },
      success: function(response) {
         $("#modals").html(response);
         $tablas("#ModalModificarRecibo").modal();
      }
   });  
}

function modificarRecibo(idRecMod) {

   var servicio = document.getElementById("servicio").value;   
   var chofer = document.getElementById("chofer").value;

//alert(chofer);

   var cliente = document.getElementById("cliente").value;
   var descripcion = document.getElementById("descripcion").value;
   var tipo = document.getElementById("tipo").value;   
   var total = document.getElementById("total").value;
   var pago = document.getElementById("pago").value;
   var saldo = document.getElementById("saldo").value;   
   var nit_cliente = document.getElementById("nit_cliente").value;
//alert(servicio+chofer+cliente);

//alert(servicio+chofer+cliente+descripcion+tipo+total+pago+saldo+nit_cliente);

   var parametros = {
      "idRecMod": idRecMod,
      "servicio": servicio,
      "chofer": chofer,
      "cliente": cliente,
      "descripcion": descripcion,
      "tipo": tipo,
      "total": total,
      "pago": pago,
      "saldo": saldo,
      "nit_cliente": nit_cliente
   };
   $.ajax({
      data: parametros,
      url: '../modelo/recibo/modelo_modificar_recibo.php',
      type: 'post',
      beforeSend: function() {
         $("#panel").html("Procesando, espere por favor...");
      },
      success: function(response) {
         $tablas('#ModalModificarRecibo').modal('hide');
         $("#panel").html(response);

      }
   });

}

//ELIMINAR

function abrirModalElimRecibo(idRecElim) {

var parametros = {
      "idRecElim": idRecElim    
   };
   $.ajax({
      data: parametros,
      url: '../modelo/recibo/modal_eliminar_recibo.php',
      type: 'post',
      beforeSend: function() {
         $("#modals").html("Procesando, espere por favor...");
      },
      success: function(response) {
         $("#modals").html(response);
         $tablas("#ModalEliminarRecibo").modal();
      }
   });

   
}

function eliminarRecibo(idRecElim) {
var parametros = {
      "idRecElim": idRecElim  
   };
   $.ajax({
      data: parametros,
      url: '../modelo/recibo/modelo_eliminar_recibo.php',
      type: 'post',
      beforeSend: function() {
         $("#panel").html("Procesando, espere por favor...");
      },
      success: function(response) {
         $tablas('#ModalEliminarRecibo').modal('hide');
         $("#panel").html(response);

      }
   });

}
