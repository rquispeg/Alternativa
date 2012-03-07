<?php use_helper('ysJQueryRevolutions')?>
<?php use_helper('ysJQueryUIDialog')?>

<select id="paralelo_id" style="font-family: Arial;font-size: 12px;" name="dat_rde_estudiante[paralelo]">
    <option value="-999">[Seleccionar]</option>
    <?php foreach($paralelos as $paralelo): ?>
        <option value="<?php echo $paralelo->getParalelo(); ?>"><?php echo $paralelo->getParalelo(); ?></option>
    <?php endforeach; ?>
</select>

<?php echo jquery_ajax(array(
            'listener' => array(
                'selector' => '#paralelo_id',
                'event' => 'change'),
            'url' => url_for('especialextemporanea/turno'),
            'success' =>  like_function("$('#turno').html(data)" , 'data'),
            'data' => "'paralelo='+". jquery_get('this','val')."+'&ue_id='+document.getElementById('unidad_educativa').value+'&nivel_id='+document.getElementById('nivel_id').value+'&grado_id=' + document.getElementById('grado_id').value+'&discapacidad_id=' + document.getElementById('discapacidad_id').value",
            'type' => 'POST'));
?>

<?php
    echo jquery_ajax_event(
           '#paralelo_id',
           'ajaxSuccess',
           like_function('$("#imagen").css("display","none")', 'event,request,settings'));
?>
<?php
    echo jquery_ajax_event(
           '#paralelo_id',
           'ajaxStart',
           like_function('$("#imagen").css("display","block")', 'event,request,settings'));