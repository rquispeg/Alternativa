 <?php
$arch = $gestion.'_'.$ue.'_LBachilleres_'.date('Ymdhis').'.pdf';
header('Content-type: application/pdf');
header('Content-Disposition: attachment; filename="'.$arch.'"');
readfile(sfConfig::get('app_reporte').'/Listado_BachilleresAlt.rptdesign&gestion='.$gestion.'&codUE='.$ue.'&&__format=pdf&');