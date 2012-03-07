<?php use_helper('ysJQueryRevolutions')?>
<?php use_helper('ysJQueryUIDialog')?>

<?php echo ui_init_content_panel(array('class' => 'ui-dialog ui-widget ui-widget-content ui-corner-all ui-draggable ui-resizable'))?>
    <?php echo ui_init_title(array(
        'icon' => 'newwin',
        'class' => 'ui-widget-header ui-corner-all',
        'style' => 'top: 3px; left: 20px; height:50px;font-family: arial') ) ?>
    Registre los datos para la busqueda
    <?php echo ui_end_title() ?>
    <?php echo ui_init_content()?>
    <table align="center" style="width:740px;">
        <tr><td><br/></td></tr>
        <tr>
            <td class="caption" colspan="4">Centro de Educaci&oacute;n Alternativa</td>
            <td class="caption" colspan="4">Sub Centro de Educaci&oacute;n Alternativa</td>
        </tr>
        <tr>
            <td colspan="4"><?php include_partial('adultoshumanisticainscripcion/combounidadeducativa',array('unidades'=>$unidades)); ?></td>
            <td colspan="4"><div id="subcentro"><select id="subcea_id" style="font-family: Arial;font-size: 12px;"><option value="-999">[----]</option></select></div></td>
        </tr>
        <tr>
            <td class="caption" colspan="5">Modalidad</td>
        </tr>
        <tr>
            <td colspan="5">                
                <div id="modalidad"><select id="modalidad_id" style="font-family: Arial;font-size: 12px;"><option value="-999">[----]</option></select></div>                
            </td>
        </tr>
        <tr>
            <td class="caption" colspan="5">Nivel</td>
        </tr>
        <tr>
            <td colspan="5"><div id="nivel"><select id="nivel_id" style="font-family: Arial;font-size: 12px;"><option value="-999">[----]</option></select></div></td>
        </tr>
        <tr>
            <td class="caption">Ciclo</td>
            <td class="caption">Paralelo</td>
            <td class="caption">Turno</td>            
        </tr>
        <tr>            
            <td><div id="ciclo"><select id="ciclo_id" style="font-family: Arial;font-size: 12px;"><option value="-999">[---------]</option></select></div></td>
            <td><div id="paralelo"><select id="paralelo_id" style="font-family: Arial;font-size: 12px;"><option value="-999">[----]</option></select></div></td>
            <td><div id="turno"><select id="turno_id" style="font-family: Arial;font-size: 12px;"><option value="-999">[---------]</option></select></div></td>            
        </tr>
    </table>
    <?php echo ui_end_content()?>
<?php echo ui_end_content_panel()?>
      <div style="margin-left: auto;margin-right: auto; text-align: center;padding-top: 15px;padding-bottom: 15px;">
          <input type="button" value="Buscar" id ="btnGrabar" onclick="enviar();" />
      </div>

<script type="text/javascript">
/* <![CDATA[ */
function enviar()
{
  if(($('#unidad_educativa').val() == -999)||($('#subcea_id').val() == -999)||($('#modalidad_id').val() == -999)||($('#nivel_id').val() == -999)||($('#ciclo_id').val() == -999)||($('#paralelo_id').val() == -999)||($('#turno_id').val() == -999)||($('#estado_id').val() == -999)){
    alert('Seleccionar todos los parametros para la inscripcion');
  }
  else{
    window.location = '<?php echo url_for('adultoshumanisticainscripcion/listaestudiantes'); ?>'+'?ue_id='+$('#unidad_educativa').val()+'&subcea_id='+$('#subcea_id').val()+'&modalidad_id='+$('#modalidad_id').val()+'&nivel_id='+$('#nivel_id').val()+'&ciclo_id='+$('#ciclo_id').val()+'&paralelo_id='+$('#paralelo_id').val()+'&turno_id='+$('#turno_id').val();
  }
}
/* ]]> */
</script>

