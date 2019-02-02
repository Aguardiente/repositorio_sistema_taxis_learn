<?php 
session_start();
error_reporting(0);
?>

<!----------- Modal de modificar recibo ------------>
<div class="modal fade" id="ModalModificarRecibo" >
  <div class="modal-dialog modal-full-height modal-right modal-notify modal-info" role="document">
    <div class="modal-content">
      <!--Header-->
      <div class="modal-header" style="background: #eeb741; padding:10px; margin:0px; color:black;">
        <h5 class="modal-title" style="color:white; text-shadow:1px 1px 1px #585858;">Modificar recibo</h5>
      </div>

      <!--Body-->
      <div class="modal-body" style='background:white; padding:50px; margin:0px; color:black;'>

        <!-- Contenido -->
        <?php
include("../../conector/conectadorSQL.php");

 $ID_Factura = $_POST['idRecMod'];


 $query = mysqli_query($conectador, "select * from factura f, servicio s, chofer ch, cliente c, tipo t where f.ID_factura='$ID_Factura' and f.chofer=ch.ID_chofer and f.cliente=c.ID_cliente and f.tipo=t.ID_tipo order by id_factura desc; ");
 while($row = mysqli_fetch_array($query))
  {
      ?> 
      <div class='row'>

      <input type='hidden' id='ID_Factura_edicion' value='<?php echo $ID_Factura; ?>'>
      
             <div class='col-lg-6 col-xs-6'> 
                             <?php 

                require('../../conector/conectadorSQL.php');

                $infoTablasAdmin="";
                $result = mysqli_query($conectador,"select * from cliente"); 
                //Cargando datos de la BD a una variable matriz
                $n=0;
                while($fila=mysqli_fetch_array($result))
                {
                $infoTablasAdmin[$n]=$fila;
                  $n++;
                }

                 echo "<label style='font-family:Cooper Black'>Cliente:".$row[34]." ".$row[35]."</label></br>
                  <select name='cliente' id='cliente' class='md-form mdb-select colorful-select dropdown-primary'>
                    <option value='".$row[3]."' disabled selected>".$row[34]." ".$row[35]."</option>";
                   
                          $c=0;
                        while($c<sizeof($infoTablasAdmin)){

                          echo "<option value='".$infoTablasAdmin[$c][0]."' >".$infoTablasAdmin[$c][2]." ".$infoTablasAdmin[$c][3]."</option>";

                          $c++;
                        }
                        $infoTablasAdmin="";
                        echo '</select>';

                    ?>

               <div id='resp_id_cliente' ></div>
              
               </div> 
               
               <div class='col-lg-6 col-xs-6'> 

              <label style='font-family:"Cooper Black"'>NIT/CI Cliente:</label></br>
        <?php 
              echo "
              <input type='number' value='".$row[9]."' id='nit_cliente' class='form-control' placeholder='(*)Escriba su nit_cliente' maxlength='200' onkeypress='return valida_numeros(event);'>
              ";

         ?>
 
               <div id='resp_nit_cliente'></div>

               </div> 

               
               <div class='col-lg-6 col-xs-6'> 
               <?php 

                require('../../conector/conectadorSQL.php');

                $infoTablasAdmin="";
                $result = mysqli_query($conectador,"select * from tipo"); 
                //Cargando datos de la BD a una variable matriz
                $n=0;
                while($fila=mysqli_fetch_array($result))
                {
                $infoTablasAdmin[$n]=$fila;
                  $n++;
                }      

                 echo "<label style='font-family:Cooper Black'>Tipo de taxi</label></br>
                  <select name='tipoRegRec' id='tipo' class='md-form mdb-select colorful-select dropdown-primary'>
                    <option value='".$row[5]."' disabled selected>".$row[43]."</option>";
                   
                          $c=0;
                        while($c<sizeof($infoTablasAdmin)){

                          echo "<option value='".$infoTablasAdmin[$c][0]."' >".$infoTablasAdmin[$c][1]."</option>";

                          $c++;
                        }
                        $infoTablasAdmin="";
                        echo '</select>';

                    ?>

               <div id='resp_tipo' ></div>
               </div> 
               
               <div class='col-lg-6 col-xs-6'> 
                              <?php 

                require('../../conector/conectadorSQL.php');

                $infoTablasAdmin="";
                $result = mysqli_query($conectador,"select * from chofer"); 
                //Cargando datos de la BD a una variable matriz
                $n=0;
                while($fila=mysqli_fetch_array($result))
                {
                $infoTablasAdmin[$n]=$fila;
                  $n++;
                }
       

                 echo "<label style='font-family:Cooper Black'>Chofer: ".$row[24]." ".$row[25]."</label></br>
                  <select name='chofer' id='chofer' class='md-form mdb-select colorful-select dropdown-primary'>
                    <option value='".$row[2]."' disabled selected>".$row[24]." ".$row[25]."</option>";
                   
                          $c=0;
                        while($c<sizeof($infoTablasAdmin)){

                          echo "<option value='".$infoTablasAdmin[$c][0]."' >".$infoTablasAdmin[$c][1]." ".$infoTablasAdmin[$c][2]."</option>";

                          $c++;
                        }
                        $infoTablasAdmin="";
                        echo '</select>';

                    ?>

               <div id='resp_id_chofer' ></div>
               </div> 
               
               
               <div class='col-lg-6 col-xs-6'> 
               <label style='font-family:"Cooper Black"'>Servicio:</label></br>
              <select id='servicio' class='md-form mdb-select colorful-select dropdown-primary'>
              <?php 
              echo "<option value='".$row[1]."' disabled selected>".$row[1]."</option>    
                    <option value='carrera' >Carrera</option>
                    <option value='transporte' >Transporte</option>
              </select>
               <div id='resp_servicio'></div>

               <label style='font-family:'Cooper Black''>Pago:</label></br>
               <input type='number' value='".$row[8]."' id='pago' class='form-control' placeholder='(*)Escriba su pago'  maxlength='10' min='0'  onkeypress='return valida_numeros(event);'>

               <div id='resp_pago' ></div>
  
               <label style='font-family:'Cooper Black''>Total:</label></br>
               <input type='number' value='".$row[6]."'  id='total' class='form-control' placeholder='(*)Escriba su total' maxlength='10' min='0'  onkeypress='return valida_numeros(event);'>

               <div id='resp_total' ></div>

                <label style='font-family:'Cooper Black''>Saldo:</label></br>
               <input type='number' value='".$row[7]."'  id='saldo' class='form-control' placeholder='(*)Escriba su saldo' maxlength='10' min='0'  onkeypress='return valida_numeros(event);'>

               <div id='resp_saldo' ></div>
               </div> 
               
              <div class='col-lg-6 col-xs-6'> 
              
              <label style='font-family:'Cooper Black''>Descripción:</label></br>
              <textarea rows='8' type='text' id='descripcion' class='form-control' placeholder='(*)Escriba su descripcion' maxlength='1000'>".$row[4]."</textarea>
              ";
              ?>          
               <div id='resp_descripcion'></div>
               </div> 
    
               </br><hr>

   <div id='resultado_modificacion_recibo'></div> 
      </div>
    <?php
  }

        echo '

      </div>

      <!--Footer-->
      <div class="modal-footer justify-content-center" tyle="background: ; padding:10px; margin:0px; color:black;">
        <a type="button" onclick="modificarRecibo('.$_POST['idRecMod'].')" class="btn btn-default btn-md" style="border-radius: 20px;">Aceptar
          <i class="fa fa-paper-plane ml-1"></i>
        </a>
        <a type="button" class="btn btn-warning btn-md" style="border-radius: 10px; font-size: 12px; color: white;" data-dismiss="modal">Cerrar</a>
      </div>
    </div>
  </div>
</div>
';

         ?>

