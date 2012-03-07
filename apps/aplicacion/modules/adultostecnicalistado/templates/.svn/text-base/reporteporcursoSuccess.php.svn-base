 <?php
if($sf_params->get('tipo')== 1)
{
    $arch = $sf_params->get('cod_ue_id').'_LISTA_ESTUDIANTES_POR_CURSO_'.date('Ymdhis').'.pdf';
    header('Content-type: application/pdf');
    $url = sfConfig::get('app_reporte').'/estudiante_por_curso.rptdesign&cod_ue_id='.$sf_params->get('cod_ue_id').'&gestion_id='.$sf_params->get('gestion_id').
        '&nivel_id='.$sf_params->get('nivel_id').'&grado_id='.$sf_params->get('grado_id').
        '&paralelo='.$sf_params->get('paralelo').'&turno_id='.$sf_params->get('turno_id').'&ciclo_id='.$sf_params->get('ciclo_id').'&&__format=pdf&';
    header('Content-Disposition: attachment; filename="'.$arch.'"');
    readfile($url);
}
