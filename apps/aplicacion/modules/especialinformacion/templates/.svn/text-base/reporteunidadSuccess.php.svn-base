 <?php 
$arch = $sf_user->getFlash('ue').'_ESTUDIANTES_'.date('Ymd').'.pdf';
header('Content-type: application/pdf');
header('Content-Disposition: attachment; filename="'.$arch.'"');
readfile(sfConfig::get('app_reporte').'/inscritosespecial.rptdesign&gestion='.$sf_user->getFlash('gestion').'&codCEA='.$sf_user->getFlash('ue').'&&__format=pdf&');