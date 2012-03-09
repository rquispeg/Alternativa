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
            <td class="caption">Sub Centro de Educaci&oacute;n</td>            
        </tr>
        <tr>
            <td><?php include_partial('ins_sin_rude/combosubcentros',array('subcentros'=>$subcentros)); ?></td>                     
        </tr>
    </table>
    <table align="center" style="width:740px;">
        <tr>            
            <td class="caption">Nivel</td>
            <td class="caption">Ciclo</td>
        </tr>
        <tr>			
            <td><div id="nivel"><select id="nivel_id" style="font-family: Arial;font-size: 12px;width: 350px;"><option value="-999">[Seleccionar]</option></select></div></td>
            <td><div id="ciclo"><select id="ciclo_id" style="font-family: Arial;font-size: 12px;width: 200px;"><option value="-999">[Seleccionar]</option></select></div></td>
        </tr>
    </table>
    <table align="center" style="width:740px;">
        <tr>            
            <td class="caption">Paralelo</td>
            <td class="caption">Turno</td>
            <td class="caption">Estado Matricula Inicio</td>
        </tr>
        <tr>            
            <td><div id="paralelo"><select id="paralelo_id" style="font-family: Arial;font-size: 12px;"><option value="-999">[Seleccionar]</option></select></div></td>
            <td><div id="turno"><select id="turno_id" style="font-family: Arial;font-size: 12px;"><option value="-999">[Seleccionar]</option></select></div></td>
            <td><select id="estado_id" style="font-family: Arial;font-size: 12px;">
                <option value="1">INSCRITO NUEVO</option>
                <option value="2">INSCRITO REPITENTE</option>
                <option value="7">EXTEMPORANEO NUEVO</option>
                <option value="8">EXTEMPORANEO REPITENTE</option>
             </select></td>
        </tr>
    </table>
    <?php echo ui_end_content()?>
<?php echo ui_end_content_panel()?>   



