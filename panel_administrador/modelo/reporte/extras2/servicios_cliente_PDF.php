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
								    echo'<table>
					                                <thead>
						                                    <tr>
						                                        <th >ID</th>
						                                        <th >Nombre</th>
						                                        <th >Apellido</th>
						                                        <th >NIT/CI</th>
						                                        <th >Razón Social</th>
						                                        <th >Dirección</th>
						                                        <th >Celular</th>
						                                        <th >Teléfono</th>
						                                        <th >Fecha</th>
						                                        <th >Hora</th>
						                                    </tr>
					                                </thead>
			                                <tbody>';

												$c=0;
												while($c<sizeof($infoTablasAdmin)){
													
														echo "<tr><td>".$infoTablasAdmin[$c][0]."</td><td>".$infoTablasAdmin[$c][1]."</td><td>".$infoTablasAdmin[$c][2]."</td><td>".$infoTablasAdmin[$c][3]."</td><td>".$infoTablasAdmin[$c][4]."</td><td>".$infoTablasAdmin[$c][5]."</td><td>".$infoTablasAdmin[$c][6]."</td><td>".$infoTablasAdmin[$c][7]."</td><td>".$infoTablasAdmin[$c][8]."</td><td>".$infoTablasAdmin[$c][9]."</td>";
													
													$c++;
												}
									echo'   </tr></tbody>
									     </table>
									     <!-- /.table-responsive -->';
								}else {echo '<h3>Vaya, parece que no hay ningún dato registrado!</h3>';}

							?>

