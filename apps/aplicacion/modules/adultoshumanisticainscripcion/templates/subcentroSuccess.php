<?php use_helper('ysJQueryRevolutions')?>
<?php use_helper('ysJQueryAutocomplete')?>
<?php use_helper('ysJQueryUIDialog')?>
<?php use_helper('ysJQueryUICore'); ?>

<select id="subcea_id" style="font-family: Arial;font-size: 12px;">
    <option value="-999">[-----]</option>
    <?php foreach($subcentros as $subcentro): ?>
        <option value="<?php echo $subcentro->getSubCeaId(); ?>"><?php echo $subcentro->getSubCeaId()." - ".Doctrine::getTable('DatSieUnidadEducativa')->findOneByCodUeIdAndGestionIdAndSubCea($ue,$gestion,$subcentro->getSubCeaId())->getNombreSubcea() ?></option>
    <?php endforeach; ?>
</select>
<?php echo jquery_ajax(array(
                'listener' => array(
                'selector' => '#subcea_id',
                'event' => 'change'),
            'url' => url_for('adultoshumanisticainscripcion/modalidad'),
            'success' =>  like_function("$('#modalidad').html(data)" , 'data'),
            'data' => "'subcea_id='+". jquery_get('this','val')."+'&ue_id='+document.getElementById('unidad_educativa').value",
            'type' => 'POST'));
?>

<?php
    echo jquery_ajax_event(
           '#subcea_id',
           'ajaxSuccess',
           like_function('$("#imagen").css("display","none")', 'event,request,settings'));
?>
<?php
    echo jquery_ajax_event(
           '#subcea_id',
           'ajaxStart',
           like_function('$("#imagen").css("display","block")', 'event,request,settings'));
?>
