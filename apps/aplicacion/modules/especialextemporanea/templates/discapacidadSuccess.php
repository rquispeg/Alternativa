<?php use_helper('ysJQueryRevolutions')?>
<?php use_helper('ysJQueryUIDialog')?>
<select id="discapacidad_id" style="font-family: Arial;font-size: 12px;" name="dat_rde_estudiante[discapacidad_id]">
    <option value="-999">[Seleccionar]</option>
    <?php foreach($discapacidades as $discapacidad): ?>
        <option value="<?php echo $discapacidad->getDiscapacidadId(); ?>"><?php echo $discapacidad->getDiscapacidadId().' - '.Doctrine::getTable('DatEspDiscapacidad')->find($discapacidad->getDiscapacidadId())->getDiscapacidad(); ?></option>
    <?php endforeach; ?>
</select>
<?php echo jquery_ajax(array(
            'listener' => array(
                'selector' => '#discapacidad_id',
                'event' => 'change'),
            'url' => url_for('especialextemporanea/paralelo'),
            'success' =>  like_function("$('#paralelo').html(data)" , 'data'),
            'data' => "'discapacidad_id='+". jquery_get('this','val')."+'&ue_id='+document.getElementById('unidad_educativa').value+'&nivel_id='+document.getElementById('nivel_id').value+'&grado_id='+document.getElementById('grado_id').value",
            'type' => 'POST'));
?>

<?php
    echo jquery_ajax_event(
           '#discapacidad_id',
           'ajaxSuccess',
           like_function('$("#imagen").css("display","none")', 'event,request,settings'));
?>
<?php
    echo jquery_ajax_event(
           '#discapacidad_id',
           'ajaxStart',
           like_function('$("#imagen").css("display","block")', 'event,request,settings'));
