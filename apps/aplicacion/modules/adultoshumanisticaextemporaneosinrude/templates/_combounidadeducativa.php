<?php use_helper('ysJQueryRevolutions')?>
<?php use_helper('ysJQueryAutocomplete')?>
<?php use_helper('ysJQueryUIDialog')?>
<?php use_helper('ysJQueryUICore'); ?>
<?php ui_add_effects_support('blind')?>
<select style="font-family: Arial;font-size: 12px;" id="unidad_educativa" name="dat_rde_estudiante[unidad_educativa]">
    <option value="-999">[Seleccionar]</option>
    <?php foreach($unidades as $unidad):?>
    <option value="<?php echo $unidad->getCodUe(); ?>"><?php echo $unidad->getCodUe().' - '.$unidad->getDescUe(); ?></option>
    <?php endforeach; ?>
</select>
<?php echo jquery_ajax(array(
            'listener' => array(
                'selector' => '#unidad_educativa',
                'event' => 'change'),
            'url' => url_for('adultoshumanisticaextemporaneosinrude/subcentro'),
            'success' =>  like_function("$('#subcentro').html(data)" , 'data'),
            'data' => "'ue_id=' + ". jquery_get('this','val')."+'&periodo_id='+document.getElementById('periodo_id').value",
            'type' => 'POST'));
?>

<?php
    echo jquery_ajax_event(
           '#unidad_educativa',
           'ajaxSuccess',
           like_function('$("#imagen").css("display","none")', 'event,request,settings'));
?>
<?php
    echo jquery_ajax_event(
           '#unidad_educativa',
           'ajaxStart',
           like_function('$("#imagen").css("display","block")', 'event,request,settings'));
?>