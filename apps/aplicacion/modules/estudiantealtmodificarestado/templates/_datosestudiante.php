<?php echo ui_init_content_panel(array('class' => 'ui-dialog ui-widget ui-widget-content ui-corner-all ui-draggable ui-resizable'))?>
    <?php echo ui_init_title(array(
        'icon' => 'newwin',
        'class' => 'ui-widget-header ui-corner-all',
        'style' => 'top: 3px; left: 20px; height:50px') ) ?>
      DATOS DEL ESTUDIANTE
    <?php echo ui_end_title() ?>
    <?php echo ui_init_content()?>
    <table align="center" style="width:740px;">
        <tr>
            <td class="caption">RUDE</td>
            <td class="caption">Paterno</td>
            <td class="caption">Materno</td>
            <td class="caption">Nombre</td>
            <td class="caption">Fecha Nac.</td>
        </tr>
        <tr>
            <td class="dato"><?php echo $estudiante->getCodigoRude(); ?><input type="hidden" value="<?php echo $estudiante->getCodigoRude(); ?>" id="rude" />
            </td>
            <td class="dato"><?php echo $estudiante->getPaterno(); ?></td>
            <td class="dato"><?php echo $estudiante->getMaterno(); ?></td>
            <td class="dato"><?php echo $estudiante->getNombre(); ?></td>
            <td class="dato"><?php echo implode('/',array_reverse(explode('-',$estudiante->getFechaNacimiento()))); ?></td>
        </tr>
        
        <tr>
            <td class="caption">UE</td>
            <td class="caption">Nivel</td>
            <td class="caption">Grado</td>
            <td class="caption">Paralelo</td>
            <td class="caption">Turno</td>
        </tr>
        <tr>
            <?php $inscripcion = Doctrine::getTable('DatRdeInscripcion')->findOneByIdInscripcionAndGestionId($sf_user->getFlash('id_inscripcion'), $sf_user->getFlash('gestion_id')); ?> 
            <td class="dato"><?php echo $inscripcion->getCodUeId(); ?></td>
            <td class="dato"><?php echo Doctrine::getTable('ClaNivel')->find($inscripcion->getNivelId())->getDescNivel(); ?></td>
            <td class="dato"><?php echo $inscripcion->getGradoId()."&deg;"; ?></td>
            <td class="dato"><?php echo $inscripcion->getParalelo(); ?></td>
            <td class="dato"><?php echo Doctrine::getTable('ClaTurno')->find($inscripcion->getTurnoId())->getDescTurno(); ?></td>
        </tr>
    </table>
    <?php echo ui_end_content()?>
<?php echo ui_end_content_panel()?>

