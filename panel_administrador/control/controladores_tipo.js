//ACCIONES PARA LOS MODALS DE TIPO (AGREGAR, MODIFICAR Y ELIMINAR)
//AGREGAR

function abrirModalAgregarTipo(){
   $.ajax({
         data: "",
         url: '../modelo/tipo/modal_agregar_tipo.php',
         type: 'post',
         beforeSend: function() {
            $("#modals").html("Procesando, espere por favor...");
         },
         success: function(response) {
            $("#modals").html(response);
            $tablas("#ModalAgregarTipo").modal();
         }
      });
}

function registrarTipo() {
   var tipo_taxi = document.getElementById("tipo_taxi").value;   

   var parametros = {
      "tipo_taxi": tipo_taxi
   };
   $.ajax({
      data: parametros,
      url: '../modelo/tipo/modelo_agregar_tipo.php',
      type: 'post',
      beforeSend: function() {
         $("#panel").html("Procesando, espere por favor...");
      },
      success: function(response) {
         $tablas('#ModalAgregarTipo').modal('hide');
         $("#panel").html(response);

      }
   });
}
//MODIFICAR

function abrirModalModTipo(idTpMod) {
var parametros = {
      "idTpMod": idTpMod
   };
   $.ajax({
      data: parametros,
      url: '../modelo/tipo/modal_modificar_tipo.php',
      type: 'post',
      beforeSend: function() {
         $("#modals").html("Procesando, espere por favor...");
      },
      success: function(response) {
         $("#modals").html(response);
         $tablas("#ModalModificarTipo").modal();
      }
   });

   
}

function modificarTipo(idTpMod) {
   var tipo_taxi = document.getElementById("tipo_taxi").value;   

   var parametros = {
      "idTpMod": idTpMod,
      "tipo_taxi": tipo_taxi
   };
   $.ajax({
      data: parametros,
      url: '../modelo/tipo/modelo_modificar_tipo.php',
      type: 'post',
      beforeSend: function() {
         $("#panel").html("Procesando, espere por favor...");
      },
      success: function(response) {
         $tablas('#ModalModificarTipo').modal('hide');
         $("#panel").html(response);

      }
   });
}

//ELIMINAR

function abrirModalElimTipo(idTpElim) {

var parametros = {
      "idTpElim": idTpElim     

   };
   $.ajax({
      data: parametros,
      url: '../modelo/tipo/modal_eliminar_tipo.php',
      type: 'post',
      beforeSend: function() {
         $("#modals").html("Procesando, espere por favor...");
      },
      success: function(response) {
         $("#modals").html(response);
         $tablas("#ModalEliminarTipo").modal();
      }
   });
 
}

function eliminarTipo(idTpElim) {
var parametros = {
      "idTpElim": idTpElim  
   };
   $.ajax({
      data: parametros,
      url: '../modelo/tipo/modelo_eliminar_tipo.php',
      type: 'post',
      beforeSend: function() {
         $("#panel").html("Procesando, espere por favor...");
      },
      success: function(response) {
         $tablas('#ModalEliminarTipo').modal('hide');
         $("#panel").html(response);

      }
   });

}
