//ACCIONES PARA LOS MODALS DE TAXI (AGREGAR, MODIFICAR Y ELIMINAR)
//AGREGAR
function abrirModalAgregarTaxi(){
   $.ajax({
         data: "",
         url: '../modelo/taxi/modal_agregar_taxi.php',
         type: 'post',
         beforeSend: function() {
            $("#modals").html("Procesando, espere por favor...");
         },
         success: function(response) {
            $("#modals").html(response);
            $tablas("#ModalAgregarTaxi").modal();
         }
      });
}

function registrarTaxi() {
   var nro_movil = document.getElementById("nro_movil").value;   
   var placa = document.getElementById("placa").value;
   var modelo = document.getElementById("modelo").value;
   var marca = document.getElementById("marca").value;
   var descripcion = document.getElementById("descripcion").value;

   var parametros = {
      "nro_movil": nro_movil,
      "placa": placa,
      "modelo": modelo,
      "marca": marca,
      "descripcion": descripcion
   };
   $.ajax({
      data: parametros,
      url: '../modelo/taxi/modelo_agregar_taxi.php',
      type: 'post',
      beforeSend: function() {
         $("#panel").html("Procesando, espere por favor...");
      },
      success: function(response) {
         $tablas('#ModalAgregarTaxi').modal('hide');
         $("#panel").html(response);

      }
   });
}
//MODIFICAR
function abrirModalModTaxi(idTaxMod) {
var parametros = {
      "idTaxMod": idTaxMod
   };
   $.ajax({
      data: parametros,
      url: '../modelo/taxi/modal_modificar_taxi.php',
      type: 'post',
      beforeSend: function() {
         $("#modals").html("Procesando, espere por favor...");
      },
      success: function(response) {
         $("#modals").html(response);
         $tablas("#ModalModificarTaxi").modal();
      }
   });

   
}
function modificarTaxi(idTaxMod) {
   var nro_movil = document.getElementById("nro_movil").value;   
   var placa = document.getElementById("placa").value;
   var modelo = document.getElementById("modelo").value;
   var marca = document.getElementById("marca").value;
   var descripcion = document.getElementById("descripcion").value;

   var parametros = {
      "idTaxMod": idTaxMod,
      "nro_movil": nro_movil,
      "placa": placa,
      "modelo": modelo,
      "marca": marca,
      "descripcion": descripcion
   };
   $.ajax({
      data: parametros,
      url: '../modelo/taxi/modelo_modificar_taxi.php',
      type: 'post',
      beforeSend: function() {
         $("#panel").html("Procesando, espere por favor...");
      },
      success: function(response) {
         $tablas('#ModalModificarTaxi').modal('hide');
         $("#panel").html(response);

      }
   });
}

//ELIMINAR
function abrirModalElimTaxi(idTaxElim) {

var parametros = {
      "idTaxElim": idTaxElim    

   };
   $.ajax({
      data: parametros,
      url: '../modelo/taxi/modal_eliminar_taxi.php',
      type: 'post',
      beforeSend: function() {
         $("#modals").html("Procesando, espere por favor...");
      },
      success: function(response) {
         $("#modals").html(response);
         $tablas("#ModalEliminarTaxi").modal();
      }
   });

   
}
function eliminarTaxi(idTaxElim) {
var parametros = {
      "idTaxElim": idTaxElim  
   };
   $.ajax({
      data: parametros,
      url: '../modelo/modelo_eliminar_taxi.php',
      type: 'post',
      beforeSend: function() {
         $("#panel").html("Procesando, espere por favor...");
      },
      success: function(response) {
         $tablas('#ModalEliminarTaxi').modal('hide');
         $("#panel").html(response);

      }
   });

}
