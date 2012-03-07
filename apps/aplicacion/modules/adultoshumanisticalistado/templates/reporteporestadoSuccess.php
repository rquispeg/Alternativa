 <?php
$arch = $sf_user->getFlash('ue').'_ESTUDIANTES_CEA_ESTADO_'.date('Ymdhis').'.pdf';
header('Content-type: application/pdf');
header('Content-Disposition: attachment; filename="'.$arch.'"');
readfile(sfConfig::get('app_reporte').'/inscritosAlternaticaEstado.rptdesign&gestion='.$sf_user->getFlash('gestion').'&codUE='.$sf_user->getFlash('ue').'&nivel='.$sf_user->getFlash('nivel').'&periodo='.$sf_user->getFlash('periodo').'&subcea='.$sf_user->getFlash('subcea').'&&__format=pdf&');