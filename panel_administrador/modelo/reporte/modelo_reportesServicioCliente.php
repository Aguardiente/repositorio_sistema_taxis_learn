<?php 
session_start();
?>
			<div class="row">

				<div class="col-md-10 col-sm-12" style='color:yellow;'>
					<a href="#" class="btn btn-info" onclick="exportarServicioCliente()">Descargar pdf</a>Listado de todos los clientes quie hicieron un servicio registrados hasta la ultima fecha :<p>
                </div>

                <div class="col-md-4 col-sm-6" style='color:yellow;'>
					Filtrar :<p>
					<div class="input-daterange input-group fj-date">
				    	<input type="text" class="input-sm form-control" value="Fecha Inicial" id="fechaInicial" readonly  />
				    	<span class="input-group-addon">hasta</span><input type="text" class="input-sm form-control" value="Fecha Final" id="fechaFinal" readonly  />
				    	
					</div>
					
                </div>
                <div class="col-md-4 col-sm-6" style='color:yellow;'>
                	<br><br><a href="#" class="btn btn-info btn-sm" onclick="buscarServicioCliente()">Buscar</a>
				</div>
	         </div><p>

							<?php
								$infoTablasAdmin="";
								include_once("../../conector/conectadorSQL.php");

								$result = mysqli_query($conectador, "select cliente from servicio order by id_servicio desc;"); 
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
						                                        <th class="text-center" style="text-align:center; color:white; text-shadow:1px 1px 1px #585858;" class="text-center ">Cliente</th>
						                                        <th class="text-center" style="text-align:center; color:white; text-shadow:1px 1px 1px #585858;" class="text-center">Examinar</th>
						                                    </tr>
					                                </thead>
			                                <tbody style="background:#f9def9; padding:0px; margin:0px; color:black;">';

												$c=0;
												while($c<sizeof($infoTablasAdmin)){
													
														echo "<tr><td>".$infoTablasAdmin[$c][0]."</td>";

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
            responsive: true
        });
    });
    $calendario('.fj-date').datepicker({
		   format: "dd/mm/yy",
		   language: "es",
		   multidate: false,
		   maxViewMode: 1
	});
	</script>
   