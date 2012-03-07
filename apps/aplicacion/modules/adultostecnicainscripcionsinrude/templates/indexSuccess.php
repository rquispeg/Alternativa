<?php use_helper('ysJQueryRevolutions')?>
<?php use_helper('ysJQueryUIDialog')?>
<?php use_helper('ysJQueryUICore'); ?>
<?php use_helper('ysUtil'); ?>
<?php ui_add_effects_support('blind')?>
<div id="divResults" style="width:770px;margin-left: auto; margin-right: auto;">
    <form id="myForm" action="#">
        <?php include_partial('adultoshumanisticaextemporaneosinrude/formularioestudiante',array('estudiante'=>$estudiante)); ?>
        <div style="margin-left: auto;margin-right: auto; text-align: center;padding-top: 15px;padding-bottom: 15px;">
                <input type="submit" value="Continuar" id ="btnGrabar" />
        </div>
    </form>
<?php
echo jquery_ajax_form(
      '#myForm',
      array(
        'url' => url_for('adultostecnicainscripcionsinrude/unidadeducativa'),
        'success' =>  like_function("$('#divResults').html(data)" , 'data'),
        'condition' => 'verificar() == false ',
        'onFailureCondition' => 'alert("Debe registrar los campos marcados con (*)")',
        'type' => 'POST'))?>
<?php
    echo jquery_ajax_event(
           '#divResults',
           'ajaxSuccess',
           like_function('$("#imagen").css("display","none")', 'event,request,settings'));
?>
<?php
    echo jquery_ajax_event(
           '#divResults',
           'ajaxStart',
           like_function('$("#imagen").css("display","block")', 'event,request,settings'));
?>
</div>

<script type="text/javascript">
/* <![CDATA[ */
function verificar()
{
    if((document.getElementById('dat_rde_estudiante_nombre').value!='')&&(document.getElementById('dat_rde_estudiante_pais_nac_id').value!=0)) {if((document.getElementById('dat_rde_estudiante_pais_nac_id').value==1)){if((document.getElementById('dat_rde_estudiante_departamento_nac_id').value!=-999)&&(document.getElementById('dat_rde_estudiante_provincia_nac_id').value!=-999)){return false;}else{return true;}}else return false;} else return true;
}
/* ]]> */
</script>