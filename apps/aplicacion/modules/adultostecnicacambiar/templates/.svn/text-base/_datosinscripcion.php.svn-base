    <?php echo ui_init_content_panel(array('class' => 'ui-dialog ui-widget ui-widget-content ui-corner-all ui-draggable ui-resizable'))?>
        <?php echo ui_init_title(array(
            'icon' => 'newwin',
            'class' => 'ui-widget-header ui-corner-all',
            'style' => 'top: 3px; left: 20px; height:50px') ) ?>
          DATOS DE LA INSCRIPCION ACTUAL
        <?php echo ui_end_title() ?>
        <?php echo ui_init_content()?>
        <table align="center" style="width:740px;">
            <tr>
                <td class="caption">C&oacute;digo Unidad</td>
                <td class="caption">Unidad Educativa</td>
            </tr>
            <tr>
                <td class="dato"><?php echo $inscripcion->getCodUeId(); ?></td>
                <td class="dato">
                <?php echo Doctrine::getTable('DatRueUnidadEducativa')->find($inscripcion->getCodUeId())->getDescUe(); ?>
                    <input type="hidden" id="unidad_educativa" value="<?php echo $inscripcion->getCodUeId(); ?>" />
                    <input type="hidden" id="id" value="<?php echo $inscripcion->getIdInscripcion(); ?>" />
                    <input type="hidden" id="periodo_id" value="<?php echo $inscripcion->getPeriodoId(); ?>" />
                    <input type="hidden" id="subcea_id" value="<?php echo $inscripcion->getSubCeaId(); ?>" />
                </td>
            </tr>
        </table>
        <table align="center" style="width:740px;">
            <tr>
                <td class="caption">Modalidad</td>
                <td class="caption">Nivel</td>
                <td class="caption">Ciclo</td>
                <td class="caption">Especialidad</td>
                <td class="caption">Paralelo</td>
                <td class="caption">Turno</td>
            </tr>
            <tr>
                <td class="dato"><?php echo Doctrine::getTable('ClaNivel')->find($inscripcion->getNivelId())->getDescNivel(); ?></td>
                <td class="dato"><?php echo Doctrine::getTable('ClaCiclo')->find(array($inscripcion->getNivelId(),$inscripcion->getCicloId()))->getDescCiclo(); ?></td>
                <td class="dato"><?php echo Doctrine::getTable('ClaGrado')->find(array($inscripcion->getNivelId(),$inscripcion->getCicloId(),$inscripcion->getGradoId()))->getDescGrado(); ?></td>
                <td class="dato"><?php echo Doctrine::getTable('ClaCursoOferta')->find($inscripcion->getCursoOfertaId())->getDescCursoOferta(); ?></td>
                <td class="dato"><?php echo $inscripcion->getParalelo(); ?></td>
                <td class="dato"><?php echo Doctrine::getTable('ClaTurno')->find($inscripcion->getTurnoId())->getDescTurno(); ?></td>
            </tr>
        </table>
       <?php echo ui_end_content()?>
    <?php echo ui_end_content_panel()?>
