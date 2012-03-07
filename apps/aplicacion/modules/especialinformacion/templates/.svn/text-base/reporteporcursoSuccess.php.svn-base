 <?php

if($sf_params->get('tipo')== 1)
{    
    $arch = $sf_params->get('cod_ue_id').'_LISTA_ESTUDIANTES_POR_CURSO_ESPECIAL_'.date('Ymd').'.pdf';
    header('Content-type: application/pdf');
    $url = sfConfig::get('app_reporte').'/estudiante_por_curso_especial.rptdesign&cod_ue_id='.$sf_params->get('cod_ue_id').'&gestion_id='.$sf_params->get('gestion_id').
        '&nivel_id='.$sf_params->get('nivel_id').'&grado_id='.$sf_params->get('grado_id').
        '&paralelo='.$sf_params->get('paralelo').'&turno_id='.$sf_params->get('turno_id').
        '&ciclo_id='.$sf_params->get('ciclo_id').'&discapacidad_id='.$sf_params->get('discapacidad_id').'&&__format=pdf&';
    header('Content-Disposition: attachment; filename="'.$arch.'"');
    readfile($url);
}
if($sf_params->get('tipo')== 2)
{
    $arch = $sf_params->get('cod_ue_id').'_LISTA_ESTUDIANTES_POR_CURSO_ESPECIAL_'.date('Ymd').'.doc';
    header("Content-type: application/vnd.ms-word");
    $url = sfConfig::get('app_reporte').'/estudiante_por_curso_especial.rptdesign&cod_ue_id='.$sf_params->get('cod_ue_id').'&gestion_id='.$sf_params->get('gestion_id').
        '&nivel_id='.$sf_params->get('nivel_id').'&grado_id='.$sf_params->get('grado_id').
        '&paralelo='.$sf_params->get('paralelo').'&turno_id='.$sf_params->get('turno_id').'&ciclo_id='.$sf_params->get('ciclo_id').'&&__format=doc&';
    header('Content-Disposition: attachment; filename="'.$arch.'"');
    header("Pragma: no-cache");
    header("Expires: 0");
    readfile($url);
}
if($sf_params->get('tipo')== 3)
{
    $arch = $sf_params->get('cod_ue_id').'_LISTA_ESTUDIANTES_POR_CURSO_ESPECIAL_'.date('Ymd').'.xls';
    header("Content-type: application/vnd.ms-excel");
    $url = sfConfig::get('app_reporte').'/estudiante_por_curso_especial.rptdesign&cod_ue_id='.$sf_params->get('cod_ue_id').'&gestion_id='.$sf_params->get('gestion_id').
        '&nivel_id='.$sf_params->get('nivel_id').'&grado_id='.$sf_params->get('grado_id').
        '&paralelo='.$sf_params->get('paralelo').'&turno_id='.$sf_params->get('turno_id').'&&__format=xls&';
    header('Content-Disposition: attachment; filename="'.$arch.'"');
    header("Pragma: no-cache");
    header("Expires: 0");
    readfile($url);
}