<?php echo ui_init_content_panel(array('class' => 'ui-dialog ui-widget ui-widget-content ui-corner-all ui-draggable ui-resizable'))?>
    <?php echo ui_init_title(array(
        'icon' => 'newwin',
        'class' => 'ui-widget-header ui-corner-all',
        'style' => 'top: 3px; left: 20px; height:20px') ) ?>
DATOS DEL CENTRO DE EDUCACI&Oacute;N ALTERNATIVA
    <?php echo ui_end_title() ?>
    <?php echo ui_init_content()?>
    <table align="center" style="width:100%;padding: 10px 10px 0px 10px;">
        <tr>
            <td class="caption">Unidad Educativa </td>
            <td class="caption" >Nivel</td>
        </tr>
        <tr>
            <td><?php include_partial('especialcrear/combounidadeducativa',array('unidades'=>$unidades)); ?></td>
            <td><?php include_partial('especialcrear/nivel',array('niveles'=>$niveles)); ?></td>
        </tr>
    </table>
    <table align="center" style="width:100%;padding: 10px;">
        <tr>
            <td class="caption">Grado</td>
            <td class="caption">Discapacidad</td>
            <td class="caption">Paralelo</td>
            <td class="caption">Turno</td>
        </tr>
        <tr>
            <td><div id="grado">
                    <select id="grado_id" style="font-family: Arial;font-size: 12px;"><option value="-999">[Seleccionar]</option></select>
                </div>
            </td>
            <td><select id="discapacidad_id" style="font-family: Arial;font-size: 12px;">
                    <option value="-999">[Seleccionar]</option>
                    <?php foreach (Doctrine::getTable('DatEspDiscapacidad')->findAll() as $v):  ?>
                    <option value="<?php echo $v->getDiscapacidadId(); ?>"><?php echo $v->getDiscapacidad(); ?></option>
                    <?php endforeach; ?>
                </select></td>
            <td><select id="paralelo_id" style="font-family: Arial;font-size: 12px;"><option value="-999">[Seleccionar]</option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
                <option value="E">E</option>
                <option value="F">F</option>
                <option value="G">G</option>
                <option value="H">H</option>
                <option value="I">I</option>
                <option value="J">J</option>
                <option value="K">K</option>
                <option value="L">L</option>
                <option value="M">M</option>
                <option value="N">N</option>
                <option value="O">O</option>
                <option value="P">P</option>
                    </select></td>
            <td><select id="turno_id" style="font-family: Arial;font-size: 12px;"><option value="-999">[Seleccionar]</option>
                    <?php foreach (Doctrine::getTable('ClaTurno')->findAll() as $v):  ?>
                    <option value="<?php echo $v->getIdTurno(); ?>"><?php echo $v->getDescTurno(); ?></option>
                    <?php endforeach; ?>
                    </select></td>
        </tr>
    </table>
    <?php echo ui_end_content()?>
<?php echo ui_end_content_panel()?>
      <div style="margin-left: auto;margin-right: auto; text-align: center;padding-top: 15px;padding-bottom: 15px;">
          <input type="button" value="Crear Curso" id ="btnGrabar" onclick="enviar();" />
      </div>

<script type="text/javascript">
/* <![CDATA[ */
function enviar()
{
  if(($('#unidad_educativa').val() == -999)||($('#discapacidad_id').val() == -999)||($('#nivel_id').val() == -999)||($('#paralelo_id').val() == -999)||($('#turno_id').val() == -999)){
    alert('Seleccionar todos los parametros para la inscripcion');
  }
  else{
    window.location = '<?php echo url_for('especialcrear/guardarcurso'); ?>'+'?ue_id='+$('#unidad_educativa').val()+'&discapacidad_id='+$('#discapacidad_id').val()+'&nivel_id='+$('#nivel_id').val()+'&grado_id='+$('#grado_id').val()+'&paralelo_id='+$('#paralelo_id').val()+'&turno_id='+$('#turno_id').val();
  }
}
/* ]]> */
</script>

