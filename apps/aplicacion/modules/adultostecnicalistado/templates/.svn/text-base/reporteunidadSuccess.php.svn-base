 <?php
$arch = $ue.'_ESTUDIANTES_'.date('Ymdhis').'.pdf';
header('Content-type: application/pdf');
header('Content-Disposition: attachment; filename="'.$arch.'"');
readfile(sfConfig::get('app_reporte').'/lista_estudiante_tecnica.rptdesign&p_codUE='.$ue.'&p_gestion='.$gestion.'&p_subCea='.$subcea.'&p_periodo='.$periodo.'&&__format=pdf&');