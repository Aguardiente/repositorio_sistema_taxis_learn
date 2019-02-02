//ACCIONES PARA LOS MODALS DE EMPRESAS (AGREGAR, MODIFICAR Y ELIMINAR)
//AGREGAR
function abrirModalAgregarEmpresa() {
   $.ajax({
         data: "",
         url: '../modelo/empresa/modal_agregar_empresa.php',
         type: 'post',
         beforeSend: function() {
            $("#modals").html("Procesando, espere por favor...");
         },
         success: function(response) {
            $("#modals").html(response);
            $tablas('#ModalAgregarEmpresa').modal();
         }
      });
}

function registrarEmpresa() {
   var razon_social = document.getElementById("razon_social").value;   
   var encargado = document.getElementById("encargado").value;
   var nit = document.getElementById("nit").value;
   var num_autorizacion = document.getElementById("num_autorizacion").value;
   var fecha_limite = document.getElementById("fecha_limite").value;

   var parametros = {
      "razon_social": razon_social,
      "encargado": encargado,
      "nit": nit,
      "num_autorizacion": num_autorizacion,
      "fecha_limite": fecha_limite
   };
   $.ajax({
      data: parametros,
      url: '../modelo/empresa/modelo_agregar_empresa.php',
      type: 'post',
      beforeSend: function() {
         $("#panel").html("Procesando, espere por favor...");
      },
      success: function(response) {
         $tablas('#ModalAgregarEmpresa').modal('hide');
         $("#panel").html(response);

      }
   });
}


//MODIFICAR
function abrirModalModEmpresa(idEmpMod) {
var parametros = {
      "idEmpMod": idEmpMod
   };
   $.ajax({
      data: parametros,
      url: '../modelo/empresa/modal_modificar_empresa.php',
      type: 'post',
      beforeSend: function() {
         $("#modals").html("Procesando, espere por favor...");
      },
      success: function(response) {
         $("#modals").html(response);
         $tablas("#ModalModificarEmpresa").modal();
      }
   });
   
}


function modificarEmpresa(ID_empresa) {
   var razon_social = document.getElementById("razon_social").value;   
   var encargado = document.getElementById("encargado").value;
   var nit = document.getElementById("nit").value;
   var num_autorizacion = document.getElementById("num_autorizacion").value;
   var fecha_limite = document.getElementById("fecha_limite").value;

   var parametros = {
      "ID_empresa": ID_empresa,
      "razon_social": razon_social,
      "encargado": encargado,
      "nit": nit,
      "num_autorizacion": num_autorizacion,
      "fecha_limite": fecha_limite
   };
   $.ajax({
      data: parametros,
      url: '../modelo/empresa/modelo_modificar_empresa.php',
      type: 'post',
      beforeSend: function() {
         $("#panel").html("Procesando, espere por favor...");
      },
      success: function(response) {
         $tablas('#ModalModificarEmpresa').modal('hide');
         $("#panel").html(response);

      }
   });
}

//ELIMINAR
function abrirModalElimEmpresa(idEmpElim) {

var parametros = {
      "idEmpElim": idEmpElim    

   };
   $.ajax({
      data: parametros,
      url: '../modelo/empresa/modal_eliminar_empresa.php',
      type: 'post',
      beforeSend: function() {
         $("#modals").html("Procesando, espere por favor...");
      },
      success: function(response) {
         $("#modals").html(response);
         $tablas("#ModalEliminarEmpresa").modal();
      }
   });
   
}

function eliminarEmpresa(idEmpElim) {
var parametros = {
      "idEmpElim": idEmpElim  
   };
   $.ajax({
      data: parametros,
      url: '../modelo/empresa/modelo_eliminar_empresa.php',
      type: 'post',
      beforeSend: function() {
         $("#panel").html("Procesando, espere por favor...");
      },
      success: function(response) {
         $tablas('#ModalEliminarEmpresa').modal('hide');
         $("#panel").html(response);

      }
   });

}
