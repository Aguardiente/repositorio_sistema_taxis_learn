<?php 
session_start();
error_reporting(0);
?>


<!----------- Modal de modificar reporte ------------>
<div class="modal fade" id="ModalMostrarServiciosCliente" >
  <div class="modal-dialog modal-lg modal-right modal-notify modal-info" role="document">
    <div class="modal-content">
      <!--Header-->
      <div class="modal-header" style="background: #eeb741; padding:10px; margin:0px; color:black;">
        <h5 class="modal-title" style="color:white; text-shadow:1px 1px 1px #585858;">Servicios realizados por el cliente:</h5>
      </div>

      <!--Body-->
      <div class="modal-body" style='background:white; padding:50px; margin:0px; color:black;'>

        <!-- Contenido -->

               <?php
               $ID_cliente = $_POST['idCliSerEx'];
                $infoTablasAdmin="";
                include_once("../../conector/conectadorSQL.php");

                $result = mysqli_query($conectador, "select * from servicio s, chofer ch, cliente c, tipo t where s.chofer=ch.ID_chofer and s.cliente=c.ID_cliente and s.tipo=t.ID_tipo and s.cliente=".$ID_cliente." order by id_servicio desc;"); 
                //Cargando datos de la BD a una variable matriz
                $n=0;
                while($fila=mysqli_fetch_array($result))
                {
                $infoTablasAdmin[$n]=$fila;
                  $n++;
                }

                if($infoTablasAdmin!=""){
                    echo'<table class="table table-bordered table-hover text-center" id="servicios_cliente" style="background:white; border-radius: ; padding:0px; margin:0px; color:#6E6E6E; margin-bottom: 2%; text-center;">
                                          <thead>
                                                <tr style="background: #D4AC0D; padding:0px; margin:0px; color:black;">
                                                    <th class="text-center" style="text-align:center; color:white; text-shadow:1px 1px 1px #585858;" class="text-center ">ID</th>
                                                    <th class="text-center" style="text-align:center; color:white; text-shadow:1px 1px 1px #585858;" class="text-center">Servicio</th>
                                                    <th class="text-center" style="text-align:center; color:white; text-shadow:1px 1px 1px #585858;" class="text-center">Chofer</th>
                                                    <th class="text-center" style="text-align:center; color:white; text-shadow:1px 1px 1px #585858;" class="text-center">Descripción</th>
                                                    <th class="text-center" style="text-align:center; color:white; text-shadow:1px 1px 1px #585858;" class="text-center">Tipo de taxi</th>
                                                    <th class="text-center" style="text-align:center; color:white; text-shadow:1px 1px 1px #585858;" class="text-center">Total</th>
                                                    <th class="text-center" style="text-align:center; color:white; text-shadow:1px 1px 1px #585858;" class="text-center">Pago</th>
                                                    <th class="text-center" style="text-align:center; color:white; text-shadow:1px 1px 1px #585858;" class="text-center">Saldo</th>
                                                    <th class="text-center" style="text-align:center; color:white; text-shadow:1px 1px 1px #585858;" class="text-center">Fecha</th>
                                                    <th class="text-center" style="text-align:center; color:white; text-shadow:1px 1px 1px #585858;" class="text-center">Hora</th>
                                                </tr>
                                          </thead>
                                      <tbody style="background:#f9def9; padding:0px; margin:0px; color:black;">';

                        $c=0;
                        while($c<sizeof($infoTablasAdmin)){

                            echo "<tr><td>".$infoTablasAdmin[$c][0]."</td><td>".$infoTablasAdmin[$c][1]."</td><td>".$infoTablasAdmin[$c][12]." ".$infoTablasAdmin[$c][13]."</td><td>".$infoTablasAdmin[$c][4]."</td><td>".$infoTablasAdmin[$c][31]."</td><td>".$infoTablasAdmin[$c][6]."</td><td>".$infoTablasAdmin[$c][7]."</td><td>".$infoTablasAdmin[$c][8]."</td><td>".$infoTablasAdmin[$c][9]."</td><td>".$infoTablasAdmin[$c][10]."</td>";

                          $c++;
                        }
                  echo'   </tbody>
                       </table>
                       <!-- /.table-responsive -->';
                }else {echo '<h3 style='."'".'font-family:"Cooper Black"'."'".'>Vaya, parece que no hay ningún servicio registrado!</h3>';}

              ?>
   
      </div>

      <!--Footer-->
      <div class="modal-footer justify-content-center" tyle="background: ; padding:10px; margin:0px; color:black;">
        <a type="button" class="btn btn-warning btn-md" style="border-radius: 10px; font-size: 12px; color: white;" data-dismiss="modal">Cerrar</a>
      </div>
    </div>
  </div>
</div>



    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $tablas(document).ready(function() {
        $tablas('#servicios_cliente').DataTable({
            "aaSorting": [[ 0, "desc" ]],
            responsive: true,
            dom: 'Bfrtip',
          buttons: [
            { "extend": 'copy', "text":'Copiar',"className": 'btn btn-warning btn-sm' },
        { "extend": 'csv', "text":'CSV',"className": 'btn btn-warning btn-sm' },    
        { "extend": 'excel', "text":'Excel',"className": 'btn btn-warning btn-sm' },
        { "extend": 'pdf', "text":'PDF',"className": 'btn btn-warning btn-sm' },
        { "extend": 'print', "text":'Imprimir',"className": 'btn btn-warning btn-sm' }
          ]
        });
    });
    </script>
   