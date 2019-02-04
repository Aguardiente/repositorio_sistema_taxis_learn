<?php 
session_start();
?>
			<div class="row">
                <div class="col-md-10 col-sm-12" style='color:yellow;'>
					<a href="#" class="btn btn-info" id="agregar_recibo"  onclick="abrirModalAgregarRecibo()">Agregar Recibo</a>Listado de todos los recibos registrados hasta la ultima fecha :<p>
                </div><!--/.col-md-3-->
	         </div>

							<?php
								$infoTablasAdmin="";
								include_once("../../conector/conectadorSQL.php");

								$result = mysqli_query($conectador, "select * from factura f, chofer ch, cliente c, tipo t where f.chofer=ch.ID_chofer and f.cliente=c.ID_cliente and f.tipo=t.ID_tipo order by id_factura desc;"); 
								//Cargando datos de la BD a una variable matriz
								$n=0;
								while($fila=mysqli_fetch_array($result))
								{
								$infoTablasAdmin[$n]=$fila;
									$n++;
								}

								if($infoTablasAdmin!=""){
								    echo'<table class="table table-bordered table-hover text-center" id="dataTables-example" style="background:white; border-radius: ; padding:0px; margin:0px; color:#6E6E6E; margin-bottom: 2%; text-center;">
					                                <thead>
						                                    <tr style="background: #D4AC0D; padding:0px; margin:0px; color:black;">
						                                        <th class="text-center" style="text-align:center; color:white; text-shadow:1px 1px 1px #585858;" class="text-center ">ID</th>
						                                        <th class="text-center" style="text-align:center; color:white; text-shadow:1px 1px 1px #585858;" class="text-center">Servicio</th>
						                                        <th class="text-center" style="text-align:center; color:white; text-shadow:1px 1px 1px #585858;" class="text-center">Chofer</th>
						                                        <th class="text-center" style="text-align:center; color:white; text-shadow:1px 1px 1px #585858;" class="text-center">Cliente</th>
						                                        <th class="text-center" style="text-align:center; color:white; text-shadow:1px 1px 1px #585858;" class="text-center">Descripción</th>
						                                        <th class="text-center" style="text-align:center; color:white; text-shadow:1px 1px 1px #585858;" class="text-center">Tipo</th>
						                                        
						                                        <th class="text-center" style="text-align:center; color:white; text-shadow:1px 1px 1px #585858;" class="text-center">Total</th>
						                                        <th class="text-center" style="text-align:center; color:white; text-shadow:1px 1px 1px #585858;" class="text-center">Pago</th>
						                                        <th class="text-center" style="text-align:center; color:white; text-shadow:1px 1px 1px #585858;" class="text-center">Saldo</th>
						                                        <th class="text-center" style="text-align:center; color:white; text-shadow:1px 1px 1px #585858;" class="text-center">NIT Cliente</th>
						                                        <th class="text-center" style="text-align:center; color:white; text-shadow:1px 1px 1px #585858;" class="text-center">Fecha de emisión</th>
						                                        
						                                        <th class="text-center" style="text-align:center; color:white; text-shadow:1px 1px 1px #585858;" class="text-center">Hora</th>
						                                        <th class="text-center" style="text-align:center; color:white; text-shadow:1px 1px 1px #585858;" class="text-center">Modificar</th>
						                                        <th class="text-center" style="text-align:center; color:white; text-shadow:1px 1px 1px #585858;" class="text-center">Eliminar</th>
						                                    </tr>
					                                </thead>
			                                <tbody style="background:#f9def9; padding:0px; margin:0px; color:black;">';

												$c=0;
												while($c<sizeof($infoTablasAdmin)){

														echo "<tr><td>".$infoTablasAdmin[$c][0]."</td><td>".$infoTablasAdmin[$c][1]."</td><td>".$infoTablasAdmin[$c][13]." ".$infoTablasAdmin[$c][14]."</td><td>".$infoTablasAdmin[$c][23]." ".$infoTablasAdmin[$c][24]."</td><td>".$infoTablasAdmin[$c][4]."</td><td>".$infoTablasAdmin[$c][32]."</td><td>".$infoTablasAdmin[$c][6]."</td><td>".$infoTablasAdmin[$c][7]."</td><td>".$infoTablasAdmin[$c][8]."</td><td>".$infoTablasAdmin[$c][9]."</td><td>".$infoTablasAdmin[$c][10]."</td><td>".$infoTablasAdmin[$c][11]."</td>";

														echo '<td><a onclick="abrirModalModRecibo('."'".$infoTablasAdmin[$c][0]."'".')" class="btn btn-danger btn-sm" style="border-radius: 5px; font-size: 12px; font-weight: bold; background: #28B463; border: 1px solid #28B463;">Modificar</a></td>';

												        echo '<td><a onclick="abrirModalElimRecibo('.$infoTablasAdmin[$c][0].')" class="btn btn-danger btn-sm" style="border-radius: 5px; font-size: 12px; font-weight: bold; background: #ee6641; border: 1px solid #ee6641;">Eliminar</a></td>';

													$c++;
												}
									echo'   </tbody>
									     </table>
									     <!-- /.table-responsive -->';
								}else {echo '<h3 style='."'".'font-family:"Cooper Black"'."'".'>Vaya, parece que no hay ningún recibo registrado!</h3>';}

							?>


    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $tablas(document).ready(function() {
        $tablas('#dataTables-example').DataTable({
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
   