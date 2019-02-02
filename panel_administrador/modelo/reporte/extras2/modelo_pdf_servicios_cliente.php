<?php
    require_once 'lib/dompdf/dompdf_config.inc.php';
    
    $dompdf = new DOMPDF();
    $dompdf->load_html( file_get_contents( 'servicios_cliente_PDF.php' ) );
    $dompdf->render();
    $dompdf->stream("mi_archivo.pdf");
?>