<?php
$arch = $sf_user->getFlash('ue').'_'.$sf_user->getFlash('gestion').'_'.date('Ymd').'.pdf';
header('Content-type: application/pdf');
header('Content-Disposition: attachment; filename="'.$arch.'"');
readfile(sfConfig::get('app_reporte').'/sie100_A_hoja1_alternativa.rptdesign&gestion_id='.$sf_user->getFlash('gestion').'&cod_ue='.$sf_user->getFlash('ue').'&&__format=pdf&');

