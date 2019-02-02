function verHome() {
   $.ajax({
      data: "",
      url: '../modelo/modelo_home_administrador.php',
      type: 'post',
      beforeSend: function() {
         $("#panel").html("Procesando, espere por favor...");
      },
      success: function(response) {
         $("#panel").html(response);
      }
   });

}
function verUsuarios() {

   $.ajax({
      data: "",
      url: '../modelo/administrador/modelo_usuarios.php',
      type: 'post',
      beforeSend: function() {
         $("#panel").html("Procesando, espere por favor...");
      },
      success: function(response) {
         $("#panel").html(response);
      }
   });

}

function verClientes() {
 
   $.ajax({
      data: "",
      url: '../modelo/cliente/modelo_clientes.php',
      type: 'post',
      beforeSend: function() {
         $("#panel").html("Procesando, espere por favor...");
      },
      success: function(response) {
         $("#panel").html(response);
      }
   });

}

function verEmpresas() {
 
   $.ajax({
      data: "",
      url: '../modelo/empresa/modelo_empresas.php',
      type: 'post',
      beforeSend: function() {
         $("#panel").html("Procesando, espere por favor...");
      },
      success: function(response) {
         $("#panel").html(response);
      }
   });

}
function verRecibos() {
 
   $.ajax({
      data: "",
      url: '../modelo/recibo/modelo_recibos.php',
      type: 'post',
      beforeSend: function() {
         $("#panel").html("Procesando, espere por favor...");
      },
      success: function(response) {
         $("#panel").html(response);
      }
   });

}
function verServicios() {
 
   $.ajax({
      data: "",
      url: '../modelo/servicio/modelo_servicios.php',
      type: 'post',
      beforeSend: function() {
         $("#panel").html("Procesando, espere por favor...");
      },
      success: function(response) {
         $("#panel").html(response);
      }
   });

}
function verReportes() {
 
   $.ajax({
      data: "",
      url: '../modelo/reporte/modelo_reportesServicioCliente.php',
      type: 'post',
      beforeSend: function() {
         $("#panel").html("Procesando, espere por favor...");
      },
      success: function(response) {
         $("#panel").html(response);
      }
   });

}
function verChoferes() {
 
   $.ajax({
      data: "",
      url: '../modelo/chofer/modelo_choferes.php',
      type: 'post',
      beforeSend: function() {
         $("#panel").html("Procesando, espere por favor...");
      },
      success: function(response) {
         $("#panel").html(response);
      }
   });

}
function verTaxis() {
 
   $.ajax({
      data: "",
      url: '../modelo/taxi/modelo_taxis.php',
      type: 'post',
      beforeSend: function() {
         $("#panel").html("Procesando, espere por favor...");
      },
      success: function(response) {
         $("#panel").html(response);
      }
   });

}
function verTipos() {
 
   $.ajax({
      data: "",
      url: '../modelo/tipo/modelo_tipos.php',
      type: 'post',
      beforeSend: function() {
         $("#panel").html("Procesando, espere por favor...");
      },
      success: function(response) {
         $("#panel").html(response);
      }
   });

}

//SALIDA DEL SISTEMA
function salirSistema() {
window.location="../../index.php";
}
