
  <?php 

  include("../../conector/conectadorSQL.php");
 
    $nombre = $_POST['nombre'];
    
    $apellido = $_POST['apellido'];
    
    $tipo_taxi = $_POST['tipo_taxi'];
    
    $direccion = $_POST['direccion'];
    
    $celular = $_POST['celular'];
    
    $telefono = $_POST['telefono'];
    
    $ID_chofer = $_POST['idChfMod'];
  
  $cadena= '';
       if($nombre!='')
       {
       $query = mysqli_query($conectador,"UPDATE `chofer` SET `nombre` = '$nombre' WHERE `ID_chofer` = $ID_chofer");$cadena.=' Se edito nombre , ';
       } 
       if($apellido!='')
       {
       $query = mysqli_query($conectador,"UPDATE `chofer` SET `apellido` = '$apellido' WHERE `ID_chofer` = $ID_chofer");$cadena.=' Se edito apellido , ';
       } 
       if($tipo_taxi!='')
       {
       $query = mysqli_query($conectador,"UPDATE `chofer` SET `tipo_taxi` = '$tipo_taxi' WHERE `ID_chofer` = $ID_chofer");$cadena.=' Se edito tipo_taxi , ';
       } 
       if($direccion!='')
       {
       $query = mysqli_query($conectador,"UPDATE `chofer` SET `direccion` = '$direccion' WHERE `ID_chofer` = $ID_chofer");$cadena.=' Se edito direccion , ';
       } 
       if($celular!='')
       {
       $query = mysqli_query($conectador,"UPDATE `chofer` SET `celular` = '$celular' WHERE `ID_chofer` = $ID_chofer");$cadena.=' Se edito celular , ';
       } 
       if($telefono!='')
       {
       $query = mysqli_query($conectador,"UPDATE `chofer` SET `telefono` = '$telefono' WHERE `ID_chofer` = $ID_chofer");$cadena.=' Se edito telefono , ';
       } 
       $query = mysqli_query($conectador,"UPDATE `chofer` SET `fecha` = '".date('d/m/y')."' WHERE `ID_chofer` = $ID_chofer");$cadena.=' Se edito fecha , ';
       $query = mysqli_query($conectador,"UPDATE `chofer` SET `hora` = '".date('g:ia')."' WHERE `ID_chofer` = $ID_chofer");$cadena.=' Se edito hora , ';
  
  echo "<script>verChoferes();</script>";
  ?>