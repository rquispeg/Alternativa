<?php use_helper('ysJQueryRevolutions')?>
<?php use_helper('ysJQueryUIDialog')?>
<?php if($acreditacion == '22'): ?>
	<select id="curso_oferta_id" style="font-family: Arial;font-size: 12px;width: 400px;" name="dat_rde_estudiante[curso_oferta_id]">
		<option value="-999">[Seleccionar]</option>
		<?php foreach($especialidades as $especialidad): ?>		
			<option value="<?php echo $especialidad->getCursoOfertaId(); ?>"><?php echo $especialidad->getCursoOfertaId().' - '.Doctrine::getTable('ClaCursoOferta')->find($especialidad->getCursoOfertaId())->getDescCursoOferta(); ?></option>
		<?php endforeach; ?>
	</select>
<?php elseif($acreditacion == '23'):?>
	<select id="curso_oferta_id" style="font-family: Arial;font-size: 12px;width: 400px;" name="dat_rde_estudiante[curso_oferta_id]">
		<option value="-999">[Seleccionar]</option>
		<?php foreach($especialidades as $especialidad): ?>		
			<option value="<?php echo $especialidad->getDiscapacidadId(); ?>"><?php echo $especialidad->getDiscapacidadId().' - '.Doctrine::getTable('DatEspDiscapacidad')->find($especialidad->getDiscapacidadId())->getDiscapacidad(); ?></option>
		<?php endforeach; ?>
	</select>
<?php endif; ?>
<?php echo jquery_ajax(array(
    'listener' => array(
        'selector' => '#curso_oferta_id',
        'event' => 'change'),
    'url' => url_for('ins_con_rude/paralelo'),
    'success' =>  like_function("$('#paralelo').html(data)" , 'data'),
    'data' => "'curso_oferta_id='+". jquery_get('this','val')."+'&subsistema_id='+document.getElementById('subsistema_id').value+'&ue_id='+document.getElementById('unidad_educativa').value+'&nivel_id='+document.getElementById('nivel_id').value+'&periodo_id='+document.getElementById('periodo_id').value+'&subcea_id='+document.getElementById('subcea_id').value+'&modalidad_id='+document.getElementById('modalidad_id').value+'&grado_id='+document.getElementById('grado_id').value",
    'type' => 'POST'));
?>

<?php
    echo jquery_ajax_event(
           '#curso_oferta_id',
           'ajaxSuccess',
           like_function('$("#imagen").css("display","none")', 'event,request,settings'));
?>
<?php
    echo jquery_ajax_event(
           '#curso_oferta_id',
           'ajaxStart',
           like_function('$("#imagen").css("display","block")', 'event,request,settings'));
