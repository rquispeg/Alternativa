<?php use_helper('ysJQueryRevolutions')?>
<?php use_helper('ysJQueryUIDialog')?>

<select id="paralelo_id" style="font-family: Arial;font-size: 12px;"  name="dat_rde_estudiante[paralelo]">
    <option value="-999">[Seleccionar]</option>
    <?php foreach($paralelos as $paralelo): ?>
        <option value="<?php echo $paralelo->getParalelo(); ?>"><?php echo $paralelo->getParalelo(); ?></option>
    <?php endforeach; ?>
</select>


<?php if($acreditacion == '21'):
			echo jquery_ajax(array(
            'listener' => array(
                'selector' => '#paralelo_id',
                'event' => 'change'),
            'url' => url_for('ins_con_rude/turno'),
            'success' =>  like_function("$('#turno').html(data)" , 'data'),
            'data' => "'paralelo='+". jquery_get('this','val')."+'&subsistema_id='+document.getElementById('subsistema_id').value+'&ue_id='+document.getElementById('unidad_educativa').value+'&nivel_id='+document.getElementById('nivel_id').value+'&periodo_id='+document.getElementById('periodo_id').value+'&subcea_id='+document.getElementById('subcea_id').value+'&grado_id='+document.getElementById('grado_id').value",
            'type' => 'POST'));
	  elseif($acreditacion == '22'):
			echo jquery_ajax(array(
            'listener' => array(
                'selector' => '#paralelo_id',
                'event' => 'change'),
            'url' => url_for('ins_con_rude/turno'),
            'success' =>  like_function("$('#turno').html(data)" , 'data'),
            'data' => "'paralelo='+". jquery_get('this','val')."+'&subsistema_id='+document.getElementById('subsistema_id').value+'&ue_id='+document.getElementById('unidad_educativa').value+'&nivel_id='+document.getElementById('nivel_id').value+'&periodo_id='+document.getElementById('periodo_id').value+'&subcea_id='+document.getElementById('subcea_id').value+'&curso_oferta_id='+document.getElementById('curso_oferta_id').value+'&grado_id='+document.getElementById('grado_id').value+'&modalidad_id='+document.getElementById('modalidad_id').value",
            'type' => 'POST'));
	 elseif($acreditacion == '23'):
			echo jquery_ajax(array(
            'listener' => array(
                'selector' => '#paralelo_id',
                'event' => 'change'),
            'url' => url_for('ins_con_rude/turno'),
            'success' =>  like_function("$('#turno').html(data)" , 'data'),
            'data' => "'paralelo='+". jquery_get('this','val')."+'&subsistema_id='+document.getElementById('subsistema_id').value+'&ue_id='+document.getElementById('unidad_educativa').value+'&nivel_id='+document.getElementById('nivel_id').value+'&periodo_id='+document.getElementById('periodo_id').value+'&subcea_id='+document.getElementById('subcea_id').value+'&curso_oferta_id='+document.getElementById('curso_oferta_id').value+'&grado_id='+document.getElementById('grado_id').value+'&modalidad_id='+document.getElementById('modalidad_id').value",
            'type' => 'POST'));			
	  endif;
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