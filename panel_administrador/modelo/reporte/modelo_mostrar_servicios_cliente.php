<p>

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
