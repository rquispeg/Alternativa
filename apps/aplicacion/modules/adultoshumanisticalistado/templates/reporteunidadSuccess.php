 <?php
$arch = $sf_user->getFlash('ue').'_ESTUDIANTES_CEA_'.date('Ymdhis').'.pdf';
header('Content-type: application/pdf');
header('Content-Disposition: attachment; filename="'.$arch.'"');
readfile(sfConfig::get('app_reporte').'/lista_estudiante_alternativa.rptdesign&p_gestion='.$sf_user->getFlash('gestion').'&p_codUE='.$sf_user->getFlash('ue').'&p_nivel='.$sf_user->getFlash('nivel').'&p_periodo='.$sf_user->getFlash('periodo').'&p_subcea='.$sf_user->getFlash('subcea').'&&__format=pdf&');