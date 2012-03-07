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
            <td class="caption">Periodo</td>
            <td class="caption">Centro de Educaci&oacute;n </td>
            <td class="caption">Sub Centro de Educaci&oacute;n</td>
            
        </tr>
        <tr>
            <td><select name="dat_rde_estudiante[periodo_id]" id="periodo_id" style="font-family: Arial;font-size: 12px;width:100px;"><option value="-999">[Seleccionar]</option>
                    <?php foreach (Doctrine::getTable('ClaPeriodo')->findAll() as $value): ?>
                            <option value="<?php echo $value->getIdPeriodo() ?>"><?php echo $value->getPeriodo() ?></option>
                    <?php endforeach; ?>
                    </select>
                    <?php echo jquery_ajax(array(
                                'listener' => array(
                                    'selector' => '#periodo_id',
                                    'event' => 'change'),
                                'url' => url_for('adultostecnicainscripcionsinrude/periodo'),
                                'success' =>  like_function("$('#unidad').html(data)" , 'data'),
                                'data' => "'periodo_id=' + ". jquery_get('this','val'),
                                'type' => 'POST'));
                    ?>
                    <?php
                        echo jquery_ajax_event(
                               '#periodo_id',
                               'ajaxSuccess',
                               like_function('$("#imagen").css("display","none")', 'event,request,settings'));
                    ?>
                    <?php
                        echo jquery_ajax_event(
                               '#periodo_id',
                               'ajaxStart',
                               like_function('$("#imagen").css("display","block")', 'event,request,settings'));
                    ?>
            </td>
            <td>
                <div id="unidad">
                <select style="font-family: Arial; font-size: 12px;" id="unidad_educativa">
                    <option value="-999">[Seleccionar]</option>
                </select>
                </div>
            </td>
            <td><div id="subcentro"><select id="subcea_id" style="font-family: Arial;font-size: 12px;width:100px;"><option value="-999">[Seleccionar]</option></select></div></td>
            
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
            <td><select id="estado_id" name="dat_rde_estudiante[estado_id]" style="font-family: Arial;font-size: 12px;"><option value="7">EXTEMPORANEO NUEVO</option><option value="8">EXTEMPORANEO REPITENTE</option></select></td>
        </tr>
    </table>
    <?php echo ui_end_content()?>
<?php echo ui_end_content_panel()?>


