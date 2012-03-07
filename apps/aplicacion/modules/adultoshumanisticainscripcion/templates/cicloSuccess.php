<?php use_helper('ysJQueryRevolutions')?>
<?php use_helper('ysJQueryUIDialog')?>
<select id="ciclo_id" style="font-family: Arial;font-size: 12px;">
    <option value="-999">[-----]</option>
    <?php foreach($grados as $grado): ?>
        <option value="<?php echo $grado->getGradoId(); ?>"><?php echo $grado->getGradoId().' - '.Doctrine::getTable('ClaGrado')->find(array($nivel,$grado->getCicloId(),$grado->getGradoId()))->getDescGrado(); ?></option>
    <?php endforeach; ?>
</select>
<?php echo jquery_ajax(array(
            'listener' => array(
                'selector' => '#ciclo_id',
                'event' => 'change'),
            'url' => url_for('adultoshumanisticainscripcion/paralelo'),
            'success' =>  like_function("$('#paralelo').html(data)" , 'data'),
            'data' => "'ciclo_id='+". jquery_get('this','val')."+'&ue_id='+document.getElementById('unidad_educativa').value+'&modalidad_id='+document.getElementById('modalidad_id').value+'&nivel_id='+document.getElementById('nivel_id').value+'&subcea_id='+document.getElementById('subcea_id').value",
            'type' => 'POST'));
?>

<?php
    echo jquery_ajax_event(
           '#grado_id',
           'ajaxSuccess',
           like_function('$("#imagen").css("display","none")', 'event,request,settings'));
?>
<?php
    echo jquery_ajax_event(
           '#grado_id',
           'ajaxStart',
           like_function('$("#imagen").css("display","block")', 'event,request,settings'));
