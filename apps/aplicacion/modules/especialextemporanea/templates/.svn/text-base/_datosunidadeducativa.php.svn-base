<?php echo ui_init_content_panel(array('class' => 'ui-dialog ui-widget ui-widget-content ui-corner-all ui-draggable ui-resizable'))?>
    <?php echo ui_init_title(array(
        'icon' => 'newwin',
        'class' => 'ui-widget-header ui-corner-all',
        'style' => 'top: 3px; left: 20px; height:20px') ) ?>
      DATOS DE LA UNIDAD EDUCATIVA DESTINO
    <?php echo ui_end_title() ?>
    <?php echo ui_init_content()?>
    <table align="center" style="padding: 10px 10px 0px 10px;width:740px;">
        <tr>
            <td class="caption">Unidad Educativa</td>
            <td class="caption">Nivel</td>
        </tr>
        <tr>
            <td><?php include_partial('especialextemporanea/combounidadeducativa',array('unidades'=>$unidades)); ?></td>
            <td><div id="nivel"><select id="nivel_id" style="font-family: Arial;font-size: 12px;width: 300px;"><option value="-999">[Seleccionar]</option></select></div></td>
        </tr>
    </table>
    <table align="center" style="padding: 0px 10px 10px 10px;width:740px;">
        <tr>
            <td class="caption">Grado</td>
            <td class="caption">Discapacidad</td>
            <td class="caption">Paralelo</td>
            <td class="caption">Turno</td>
            <td class="caption">Estado Matricula Inicio</td>
        </tr>
        <tr>
            <td><div id="grado"><select id="grado_id" style="font-family: Arial;font-size: 12px;"><option value="-999">[Seleccionar]</option></select></div></td>
            <td><div id="discapacidad"><select id="grado_id" style="font-family: Arial;font-size: 12px;"><option value="-999">[Seleccionar]</option></select></div></td>
            <td><div id="paralelo"><select id="paralelo_id" style="font-family: Arial;font-size: 12px;"><option value="-999">[Seleccionar]</option></select></div></td>
            <td><div id="turno"><select id="turno_id" style="font-family: Arial;font-size: 12px;"><option value="-999">[Seleccionar]</option></select></div></td>
            <td><select id="estado_id" style="font-family: Arial;font-size: 12px;"><option value="7">EXTEMPORANEO NUEVO</option></select></td>
        </tr>
    </table>
    <?php echo ui_end_content()?>
<?php echo ui_end_content_panel()?>
      <div style="margin-left: auto;margin-right: auto; text-align: center;padding-top: 15px;padding-bottom: 15px;">
          <input type="button" value="Inscribir" id ="btnGrabar" onclick="enviar();" />
      </div>

<script type="text/javascript">
/* <![CDATA[ */
function enviar()
{
  if(($('#unidad_educativa').val() == -999)||($('#nivel_id').val() == -999)||($('#grado_id').val() == -999)||($('#paralelo_id').val() == -999)||($('#turno_id').val() == -999)||($('#estado_id').val() == -999)||($('#discapacidad_id').val() == -999)){
    alert('Seleccionar todos los parametros para la inscripcion');
  }
  else{
    window.location = '<?php echo url_for('especialextemporanea/registrarinscripcion'); ?>'+'?ue_id='+$('#unidad_educativa').val()+'&nivel_id='+$('#nivel_id').val()+'&grado_id='+$('#grado_id').val()+'&paralelo_id='+$('#paralelo_id').val()+'&turno_id='+$('#turno_id').val()+'&rude='+$('#rude').val()+'&estado_id='+$('#estado_id').val()+'&discapacidad_id='+$('#discapacidad_id').val();
  }
}
/* ]]> */
</script>

