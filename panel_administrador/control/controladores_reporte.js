function abrirModalExaminarCliente(idCliSerEx) {
var parametros = {
      "idCliSerEx": idCliSerEx
   };
   $.ajax({
      data: parametros,
         url: '../modelo/reporte/modal_mostrar_servicios_cliente.php',
         type: 'post',
         beforeSend: function() {
            $("#modals").html("Procesando, espere por favor...");
         },
         success: function(response) {
            $("#modals").html(response);
            $tablas("#ModalMostrarServiciosCliente").modal();
         }
      });
}
function buscarServicioCliente() {
   var fechaInicial = document.getElementById("fechaInicial").value;   
   var fechaFinal = document.getElementById("fechaFinal").value;
var parametros = {
      "fechaInicial": fechaInicial,
      "fechaFinal": fechaFinal
   };
   $.ajax({
      data: parametros,
         url: '../modelo/reporte/modelo_mostrar_servicios_cliente_filtrado.php',
         type: 'post',
         beforeSend: function() {
            $("#contReporte").html("Procesando, espere por favor...");
         },
         success: function(response) {
            $("#contReporte").html(response);
         }
      });
}
function reestablecerServicioCliente() {

   $.ajax({
      data: "",
         url: '../modelo/reporte/modelo_mostrar_servicios_cliente.php',
         type: 'post',
         beforeSend: function() {
            $("#contReporte").html("Procesando, espere por favor...");
         },
         success: function(response) {
            $("#contReporte").html(response);
         }
      });
}
function exportarPDFServicioCliente() {

var pdf = new jsPDF('p', 'pt', 'letter');
        source = $('#contReporte')[0];

        specialElementHandlers = {
            '#bypassme': function (element, renderer) {
                return true
            }
        };
        margins = {
            top: 80,
            bottom: 60,
            left: 40,
            width: 522
        };

        pdf.fromHTML(
            source, 
            margins.left, // x coord
            margins.top, { // y coord
                'width': margins.width, 
                'elementHandlers': specialElementHandlers
            },

            function (dispose) {
                pdf.save('Prueba.pdf');
            }, margins
        );

}

/*
//ACCIONES PARA LOS MODALS DE REPORTES (AGREGAR, MODIFICAR Y ELIMINAR)
//AGREGAR
function abrirModalAgregarReporte() {
   $.ajax({
         data: "",
         url: '../modelo/reporte/modal_agregar_reporte.php',
         type: 'post',
         beforeSend: function() {
            $("#modals").html("Procesando, espere por favor...");
         },
         success: function(response) {
            $("#modals").html(response);
            $tablas("#ModalAgregarReporte").modal();
         }
      });
}

function registrarReporte() {
   var cliente = document.getElementById("cliente").value;   
   var celular = document.getElementById("celular").value;
   var telefono = document.getElementById("telefono").value;
   var fecha_inicio = document.getElementById("fecha_inicio").value;

   var parametros = {
      "cliente": cliente,
      "celular": celular,
      "telefono": telefono,
      "razon_social": razon_socialRep,
      "fecha_inicio": fecha_inicio
   };
   $.ajax({
      data: parametros,
      url: '../modelo/reporte/modelo_agregar_reporte.php',
      type: 'post',
      beforeSend: function() {
         $("#panel").html("Procesando, espere por favor...");
      },
      success: function(response) {
         $tablas('#ModalAgregarReporte').modal('hide');
         $("#panel").html(response);

      }
   });
}

//MODIFICAR

function abrirModalModReporte(idRepMod) {
var parametros = {
      "idRepMod": idRepMod
   };
   $.ajax({
      data: parametros,
      url: '../modelo/reporte/modal_modificar_reporte.php',
      type: 'post',
      beforeSend: function() {
         $("#modals").html("Procesando, espere por favor...");
      },
      success: function(response) {
         $("#modals").html(response);
         $tablas("#ModalModificarReporte").modal();
      }
   });  
}

function modificarReporte(idRepMod) {
   var cliente = document.getElementById("cliente").value;   
   var celular = document.getElementById("celular").value;
   var telefono = document.getElementById("telefono").value;
   var fecha_inicio = document.getElementById("fecha_inicio").value;

   var parametros = {
      "idRepMod": idRepMod,
      "cliente": cliente,
      "celular": celular,
      "telefono": telefono,
      "razon_social": razon_socialRep,
      "fecha_inicio": fecha_inicio
   };
   $.ajax({
      data: parametros,
      url: '../modelo/reporte/modelo_modificar_reporte.php',
      type: 'post',
      beforeSend: function() {
         $("#panel").html("Procesando, espere por favor...");
      },
      success: function(response) {
         $tablas('#ModalModificarReporte').modal('hide');
         $("#panel").html(response);

      }
   });
}

//ELIMINAR

function abrirModalElimReporte(idRepElim) {

var parametros = {
      "idRepElim": idRepElim    

   };
   $.ajax({
      data: parametros,
      url: '../modelo/reporte/modal_eliminar_reporte.php',
      type: 'post',
      beforeSend: function() {
         $("#modals").html("Procesando, espere por favor...");
      },
      success: function(response) {
         $("#modals").html(response);
         $tablas("#ModalEliminarReporte").modal();
      }
   });
   
}

function eliminarReporte(idRepElim) {
var parametros = {
      "idRepElim": idRepElim  
   };
   $.ajax({
      data: parametros,
      url: '../modelo/reporte/modelo_eliminar_reporte.php',
      type: 'post',
      beforeSend: function() {
         $("#panel").html("Procesando, espere por favor...");
      },
      success: function(response) {
         $tablas('#ModalEliminarReporte').modal('hide');
         $("#panel").html(response);

      }
   });

}

*/