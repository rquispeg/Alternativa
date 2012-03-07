 <?php
$arch = $sf_user->getFlash('ue').'_ESTUDIANTES_ESTADO_'.date('Ymd').'.pdf';
header('Content-type: application/pdf');
header('Content-Disposition: attachment; filename="'.$arch.'"');
readfile(sfConfig::get('app_reporte').'/inscritosUEEstado.rptdesign&gestion='.$sf_user->getFlash('gestion').'&codUE='.$sf_user->getFlash('ue').'&&__format=pdf&');