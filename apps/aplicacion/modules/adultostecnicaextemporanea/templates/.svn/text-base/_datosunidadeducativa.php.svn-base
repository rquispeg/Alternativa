<?php echo ui_init_content_panel(array('class' => 'ui-dialog ui-widget ui-widget-content ui-corner-all ui-draggable ui-resizable'))?>
    <?php echo ui_init_title(array(
        'icon' => 'newwin',
        'class' => 'ui-widget-header ui-corner-all',
        'style' => 'top: 3px; left: 20px; height:20px') ) ?>
DATOS DEL CENTRO DE EDUCACI&Oacute;N ALTERNATIVA
    <?php echo ui_end_title() ?>
    <?php echo ui_init_content()?>
    <table align="center" style="width:740px;">
        <tr>
            <td class="caption">Centro de Educaci&oacute;n </td>
            <td class="caption">Sub Centro de Educaci&oacute;n</td>
            
        </tr>
        <tr>
            <td><?php include_partial('adultostecnicaextemporanea/combounidadeducativa',array('unidades'=>$unidades)); ?></td>
            <td><div id="subcentro"><select id="subcea_id" style="font-family: Arial;font-size: 12px;width:300px;"><option value="-999">[Seleccionar]</option></select></div></td>
            
        </tr>
    </table>
    <table align="center" style="width:740px;">
        <tr>
            <td class="caption">Modalidad</td>
            <td class="caption" >Nivel</td>
            <td class="caption">Ciclo</td>
        </tr>
        <tr>
            <td><input type="hidden" value="<?php echo $periodo; ?>" id="periodo_id" />
                <div id="modalidad">
                <select id="modalidad_id" style="font-family: Arial;font-size: 12px;width: 300px;">
                    <option value="-999">[Seleccionar]</option>
                </select>
                </div>
            </td>
            <td><div id="nivel"><select id="nivel_id" style="font-family: Arial;font-size: 12px;width: 180px;"><option value="-999">[Seleccionar]</option></select></div></td>
            <td><div id="ciclo"><select id="ciclo_id" style="font-family: Arial;font-size: 12px;width: 180px;"><option value="-999">[Seleccionar]</option></select></div></td>
        </tr>
    </table>
    <table align="center" style="width:740px;">
        <tr>
            <td class="caption">Especialidad</td>
            <td class="caption">Paralelo</td>
            <td class="caption">Turno</td>
            <td class="caption">Estado Matricula Inicio</td>
        </tr>
        <tr>
            <td><div id="especialidad"><select id="curso_oferta_id" style="font-family: Arial;font-size: 12px;width: 200px;"><option value="-999">[Seleccionar]</option></select></div></td>
            <td><div id="paralelo"><select id="paralelo_id" style="font-family: Arial;font-size: 12px;"><option value="-999">[Seleccionar]</option></select></div></td>
            <td><div id="turno"><select id="turno_id" style="font-family: Arial;font-size: 12px;"><option value="-999">[Seleccionar]</option></select></div></td>
            <td><select id="estado_id" style="font-family: Arial;font-size: 12px;"><option value="7">EXTEMPORANEO NUEVO</option><option value="8">EXTEMPORANEO REPITENTE</option></select></td>
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
  if(($('#unidad_educativa').val() == -999)||($('#subcea_id').val() == -999)||($('#modalidad_id').val() == -999)||($('#nivel_id').val() == -999)||($('#ciclo_id').val() == -999)||($('#paralelo_id').val() == -999)||($('#turno_id').val() == -999)||($('#estado_id').val() == -999)){
    alert('Seleccionar todos los parametros para la inscripcion');
  }
  else{
    window.location = '<?php echo url_for('adultostecnicaextemporanea/registrarinscripcion'); ?>'+'?ue_id='+$('#unidad_educativa').val()+'&subcea_id='+$('#subcea_id').val()+'&periodo_id='+$('#periodo_id').val()+'&modalidad_id='+$('#modalidad_id').val()+'&nivel_id='+$('#nivel_id').val()+'&grado_id='+$('#grado_id').val()+'&paralelo_id='+$('#paralelo_id').val()+'&turno_id='+$('#turno_id').val()+'&curso_oferta_id='+$('#curso_oferta_id').val()+'&rude='+$('#rude').val()+'&estado_id='+$('#estado_id').val();
  }
}
/* ]]> */
</script>

