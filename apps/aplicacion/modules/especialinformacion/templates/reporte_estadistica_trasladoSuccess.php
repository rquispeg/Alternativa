 <?php
$arch = $sf_user->getFlash('ue').'_'.$sf_user->getFlash('gestion').'_'.date('Ymd').'.pdf';
header('Content-type: application/pdf');
header('Content-Disposition: attachment; filename="'.$arch.'"');
readfile(sfConfig::get('app_reporte').'/sie_inicio_2.rptdesign&gestion_id='.$sf_user->getFlash('gestion').'&cod_ue_id='.$sf_user->getFlash('ue').'&idUnidadEducativa='.$sf_user->getFlash('ue').'&idUnidadEducativa_='.$sf_user->getFlash('ue').'&&__format=pdf&');