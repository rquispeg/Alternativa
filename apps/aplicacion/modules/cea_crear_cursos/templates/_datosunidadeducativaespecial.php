<?php echo ui_init_content_panel(array('class' => 'ui-dialog ui-widget ui-widget-content ui-corner-all ui-draggable ui-resizable'))?>
<?php echo ui_init_title(array(
        'icon' => 'newwin',
        'class' => 'ui-widget-header ui-corner-all',
        'style' => 'top: 3px; left: 20px; height:20px') ) ?>
DATOS DEL CENTRO DE EDUCACI&Oacute;N ALTERNATIVA<?php echo ui_end_title() ?><?php echo ui_init_content()?>
<table style="padding: 10px 10px 0px; width: 60%;" align="center">

  <tbody>
    <tr>
      <td class="caption" colspan="2">Sub Centro de Educaci&oacute;n</td>
    </tr>
    <tr>
      <td colspan="2"><?php include_partial('cea_crear_cursos/combosubcentros',array('subcentros'=>$subcentros)); ?><br>
      </td>
    </tr>
    <tr>
      <td class="caption">Nivel</td>
      <td class="caption">Ciclo</td>
    </tr>
    <tr>
      <td><?php include_partial('cea_crear_cursos/comboniveles',array('niveles'=>$niveles)); ?><br></td>
      <td><div id="ciclo">
      <select id="ciclo_id" style="font-family: Arial; font-size: 12px; width: 200px;">
      <option value="-999">[Seleccionar]</option>
      </select>
      </div>
      </td>
    </tr>
    <tr>      
      <td class="caption">Paralelo</td>
      <td class="caption">Turno</td>
    </tr>
    <tr>      
      <td>
      <select id="paralelo_id" style="font-family: Arial; font-size: 12px;">
      <option value="-999">[Seleccionar]</option>
      <option value="A">A</option>
      <option value="B">B</option>
      <option value="C">C</option>
      <option value="D">D</option>
      <option value="E">E</option>
      <option value="F">F</option>
      <option value="G">G</option>
      <option value="H">H</option>
      <option value="I">I</option>
      </select>
      </td>
      <td>
      <select id="turno_id" style="font-family: Arial; font-size: 12px;">
		<option value="-999">[Seleccionar]</option>
		<?php foreach (Doctrine::getTable('ClaTurno')->findAll() as $v):  ?>
		<option value="<?php echo $v->getIdTurno(); ?>"><?php echo $v->getDescTurno(); ?></option>
		<?php endforeach; ?>
      </select>
      </td>
    </tr>
	<tr>
		<td class="caption" colspan="2">Area de Discapacidad</td>
	<tr>
	</tr>
	<tr>
		<td colspan="2"><div id="discapacidad"><?php include_partial('cea_crear_cursos/combodiscapacidades',array('discapacidades'=>$discapacidades)); ?></div><br></td>
	</tr>
  </tbody>
</table>

<?php echo ui_end_content()?><?php echo ui_end_content_panel()?>
<div style="margin-left: auto; margin-right: auto; text-align: center; padding-top: 15px; padding-bottom: 15px;"><input value="Crear Curso" id="btnGrabar" onclick="enviar();" type="button"> </div>

<script type="text/javascript">
/* <![CDATA[ */
function enviar()
{
  if(($('#unidad_educativa').val() == -999)||($('#subcea_id').val() == -999)||($('#modalidad_id').val() == -999)||($('#nivel_id').val() == -999)||($('#ciclo_id').val() == -999)||($('#paralelo_id').val() == -999)||($('#turno_id').val() == -999)){
    alert('Seleccionar todos los parametros para la inscripcion');
  }
  else{
    window.location = '<?php echo url_for('cea_crear_cursos/guardarcursoespecial'); ?>'+'?subsistema_id='+$('#subsistema_id').val()+'&ue_id='+$('#unidad_educativa').val()+'&subcea_id='+$('#subcea_id').val()+'&periodo_id='+$('#periodo_id').val()+'&modalidad_id='+$('#modalidad_id').val()+'&nivel_id='+$('#nivel_id').val()+'&grado_id='+$('#grado_id').val()+'&paralelo_id='+$('#paralelo_id').val()+'&turno_id='+$('#turno_id').val()+'&discapacidad_id='+$('#discapacidad_id').val();
  }
}
/* ]]> */
</script>
