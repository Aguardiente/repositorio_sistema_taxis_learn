<?php 
session_start();
?>
			<div class="row">

				<div class="col-md-10 col-sm-12" style='color:yellow;'>
					Listado de todos los clientes quie hicieron un servicio registrados hasta la ultima fecha :<p>
                </div>

                <div class="col-md-4 col-sm-6" style='color:yellow;'>
					Filtrar :<p>
					<div class="input-daterange input-group fj-date">
				    	<input type="text" class="input-sm form-control" value="Fecha Inicial" id="fechaInicial" readonly  />
				    	<span class="input-group-addon">hasta</span><input type="text" class="input-sm form-control" value="Fecha Final" id="fechaFinal" readonly  />
				    	
					</div>
					
                </div>
                <div class="col-md-4 col-sm-6" style='color:yellow;'>
                	<br>
                	<a href="#" class="btn btn-info btn-sm" onclick="buscarServicioCliente()">Buscar</a>
                	<a href="#" class="btn btn-info btn-sm" onclick="reestablecerServicioCliente()">Reestablecer</a>
				</div>
	         </div><div id="contReporte"><p>

							<?php
								$infoTablasAdmin="";
								include_once("../../conector/conectadorSQL.php");

								$result = mysqli_query($conectador, "SELECT c.ID_cliente, c.nombre, c.apellido, c.nit_ci, c.razon_social, c.direccion, c.celular, c.telefono, c.fecha, c.hora FROM cliente c, servicio s where c.ID_cliente=s.cliente group by c.ID_cliente  order by c.ID_cliente desc;"); 
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
						                                        <th class="text-center" style="text-align:center; color:white; text-shadow:1px 1px 1px #585858;" class="text-center ">Nombre</th>
						                                        <th class="text-center" style="text-align:center; color:white; text-shadow:1px 1px 1px #585858;" class="text-center">Apellido</th>
						                                        <th class="text-center" style="text-align:center; color:white; text-shadow:1px 1px 1px #585858;" class="text-center">NIT/CI</th>
						                                        <th class="text-center" style="text-align:center; color:white; text-shadow:1px 1px 1px #585858;" class="text-center">Razón Social</th>
						                                        <th class="text-center" style="text-align:center; color:white; text-shadow:1px 1px 1px #585858;" class="text-center">Dirección</th>
						                                        <th class="text-center" style="text-align:center; color:white; text-shadow:1px 1px 1px #585858;" class="text-center">Celular</th>
						                                        <th class="text-center" style="text-align:center; color:white; text-shadow:1px 1px 1px #585858;" class="text-center">Teléfono</th>
						                                        <th class="text-center" style="text-align:center; color:white; text-shadow:1px 1px 1px #585858;" class="text-center">Fecha</th>
						                                        <th class="text-center" style="text-align:center; color:white; text-shadow:1px 1px 1px #585858;" class="text-center">Hora</th>
						                                        <th class="text-center" style="text-align:center; color:white; text-shadow:1px 1px 1px #585858;" class="text-center">Examinar</th>
						                                    </tr>
					                                </thead>
			                                <tbody style="background:#f9def9; padding:0px; margin:0px; color:black;">';

												$c=0;
												while($c<sizeof($infoTablasAdmin)){
													
														echo "<tr><td>".$infoTablasAdmin[$c][0]."</td><td>".$infoTablasAdmin[$c][1]."</td><td>".$infoTablasAdmin[$c][2]."</td><td>".$infoTablasAdmin[$c][3]."</td><td>".$infoTablasAdmin[$c][4]."</td><td>".$infoTablasAdmin[$c][5]."</td><td>".$infoTablasAdmin[$c][6]."</td><td>".$infoTablasAdmin[$c][7]."</td><td>".$infoTablasAdmin[$c][8]."</td><td>".$infoTablasAdmin[$c][9]."</td>";

														echo '<td><a onclick="abrirModalExaminarCliente('."'".$infoTablasAdmin[$c][0]."'".')" class="btn btn-danger btn-sm" style="border-radius: 5px; font-size: 12px; font-weight: bold; background: #28B463; border: 1px solid #28B463;">Examinar</a></td>';

													
													$c++;
												}
									echo'   </tr></tbody>
									     </table>
									     <!-- /.table-responsive -->';
								}else {echo '<h3 style='."'".'font-family:"Cooper Black"'."'".'>Vaya, parece que no hay ningún dato registrado!</h3>';}

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
    $calendario('.fj-date').datepicker({
		   format: "yy/mm/dd",
		   language: "es",
		   multidate: false,
		   maxViewMode: 1
	});
	</script>
   </div>