<?php use_helper('ysJQueryRevolutions')?>
<?php use_helper('ysJQueryUIDialog')?>
<?php echo ui_init_content_panel(array('class' => 'ui-dialog ui-widget ui-widget-content ui-corner-all ui-draggable ui-resizable'))?>
    <?php echo ui_init_title(array(
        'icon' => 'newwin',
        'class' => 'ui-widget-header ui-corner-all',
        'style' => 'top: 3px; left: 20px; height:20px') ) ?>
      DATOS DE LA UNIDAD EDUCATIVA DESTINO
    <?php echo ui_end_title() ?>
    <?php echo ui_init_content()?>
    <table align="center" style="padding: 10px;width:740px;">
        <tr>
            <td class="caption">Nivel</td>
            <td class="caption">Grado</td>
            <td class="caption">Discapacidad</td>
            <td class="caption">Paralelo</td>
            <td class="caption">Turno</td>
        </tr>
        <tr>
            <td>
                <select id="nivel_id" style="font-family: Arial;font-size: 12px;width: 200px;">
                    <option value="-999">[Seleccionar]</option>
                    <?php foreach($niveles as $nivel): ?>
                    <option value="<?php echo $nivel->getCicloId(); ?>"><?php echo $nivel->getCicloId().' - '.Doctrine::getTable('ClaCiclo')->findOneByIdCicloAndNivelId($nivel->getCicloId(),'16')->getDescCiclo(); ?></option>
                    <?php endforeach; ?>
                </select>
           </td>
            <td><div id="grado"><select id="grado_id" style="font-family: Arial;font-size: 12px;"><option value="-999">[Seleccionar]</option></select></div></td>
            <td><div id="discapacidad"><select id="grado_id" style="font-family: Arial;font-size: 12px;"><option value="-999">[Seleccionar]</option></select></div></td>
            <td><div id="paralelo"><select id="paralelo_id" style="font-family: Arial;font-size: 12px;"><option value="-999">[Seleccionar]</option></select></div></td>
            <td><div id="turno"><select id="turno_id" style="font-family: Arial;font-size: 12px;"><option value="-999">[Seleccionar]</option></select></div></td>
        </tr>
    </table>
    <?php echo ui_end_content()?>
<?php echo ui_end_content_panel()?>
      <div style="margin-left: auto;margin-right: auto; text-align: center;padding-top: 15px;padding-bottom: 15px;">
          <input type="button" value="Inscribir" id ="btnGrabar" onclick="enviar();" />
      </div>
<?php echo jquery_ajax(array(
            'listener' => array(
                'selector' => '#nivel_id',
                'event' => 'change'),
            'url' => url_for('especialextemporanea/grado'),
            'success' =>  like_function("$('#grado').html(data)" , 'data'),
            'data' => "'nivel_id='+". jquery_get('this','val')."+'&ue_id='+document.getElementById('unidad_educativa').value",
            'type' => 'POST'));
?>

<?php
    echo jquery_ajax_event(
           '#nivel_id',
           'ajaxSuccess',
           like_function('$("#imagen").css("display","none")', 'event,request,settings'));
?>
<?php
    echo jquery_ajax_event(
           '#nivel_id',
           'ajaxStart',
           like_function('$("#imagen").css("display","block")', 'event,request,settings'));
?>
<script type="text/javascript">
/* <![CDATA[ */
function enviar()
{
  if(($('#unidad_educativa').val() == -999)||($('#nivel_id').val() == -999)||($('#grado_id').val() == -999)||($('#paralelo_id').val() == -999)||($('#turno_id').val() == -999)||($('#estado_id').val() == -999)||($('#discapacidad_id').val() == -999)){
    alert('Seleccionar todos los parametros para la inscripcion');
  }
  else{
    window.location = '<?php echo url_for('especialcambiar/guardarmodificarcurso'); ?>'+'?ue_id='+$('#unidad_educativa').val()+'&nivel_id='+$('#nivel_id').val()+'&grado_id='+$('#grado_id').val()+'&paralelo_id='+$('#paralelo_id').val()+'&turno_id='+$('#turno_id').val()+'&id='+$('#id').val()+'&discapacidad_id='+$('#discapacidad_id').val();
  }
}
/* ]]> */
</script>



