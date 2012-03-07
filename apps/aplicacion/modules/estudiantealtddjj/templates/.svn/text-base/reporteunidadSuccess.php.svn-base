 <?php
$arch = $gestion.'_'.$ue.'_DJ_'.date('Ymdhis').'.pdf';
header('Content-type: application/pdf');
header('Content-Disposition: attachment; filename="'.$arch.'"');
readfile(sfConfig::get('app_reporte').'/FormularioDJ4Alt.rptdesign&gestion='.$gestion.'&codUE='.$ue.'&&__format=pdf&');