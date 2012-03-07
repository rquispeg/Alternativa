 <?php
    $arch = $sf_params->get('cod_ue_id').'_BOLETIN_'.date('Ymdhis').'.pdf';
    header('Content-type: application/pdf');
    $url = sfConfig::get('app_reporte').'/Boletin_Alternativa.rptdesign&codUE='.$sf_params->get('cod_ue_id').'&Gestion='.$sf_params->get('gestion_id').
        '&nivel='.$sf_params->get('nivel_id').'&grado='.$sf_params->get('grado_id').'&subcea='.$sf_params->get('sub_cea_id').'&Periodo='.$sf_params->get('periodo_id').
        '&paralelo='.$sf_params->get('paralelo').'&turno='.$sf_params->get('turno_id').'&ciclo='.$sf_params->get('ciclo_id').'&&__format=pdf&';
    header('Content-Disposition: attachment; filename="'.$arch.'"');
    readfile($url);
