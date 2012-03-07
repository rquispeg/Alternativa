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
            <td class="caption">RUDEALT</td>
            <td class="caption">C.I.</td>
            <td class="caption">Paterno</td>
            <td class="caption">Materno</td>
            <td class="caption">Nombre</td>
            <td class="caption">Genero</td>
        </tr>
        <tr>
            <td class="dato"><?php echo $estudiante->getCodigoRude(); ?>
                <input type="hidden" value="<?php echo $estudiante->getCodigoRude(); ?>" id="rude" />
            </td>
            <td class="dato"><?php echo $estudiante->getCarnetIdentidad(); ?></td>
            <td class="dato"><?php echo $estudiante->getPaterno(); ?></td>
            <td class="dato"><?php echo $estudiante->getMaterno(); ?></td>
            <td class="dato"><?php echo $estudiante->getNombre(); ?></td>
            <td class="dato"><?php echo $estudiante->getGenero()=='M'?'MASCULINO':'FEMENINO'; ?></td>
        </tr>
        <tr>
            <td class="caption" rowspan="2" valign="bottom">Fecha Nacimiento</td>
            <td class="caption" colspan="5">LUGAR DE NACIMIENTO</td>
        </tr>
        <tr>
            <td class="caption">Pa&iacute;s</td>
            <td class="caption">Departamento</td>
            <td class="caption">Provincia</td>
            <td class="caption" colspan="2">Localidad</td>
        </tr>
        <tr>
            <td class="dato"><?php echo implode('/',array_reverse(explode('-',$estudiante->getFechaNacimiento()))); ?></td>
            <td class="dato"><?php echo Doctrine::getTable('ClaPais')->find($estudiante->getPaisNacId())->getDescPais(); ?></td>
            <td class="dato"><?php echo Doctrine::getTable('ClaDepartamento')->find($estudiante->getDepartamentoNacId())->getDescDepartamento(); ?></td>
            <td class="dato"><?php echo Doctrine::getTable('ClaProvincia')->find(array($estudiante->getDepartamentoNacId(),$estudiante->getProvinciaNacId()))->getDescProvincia(); ?></td>
            <td class="dato" colspan="2"><?php echo $estudiante->getLocalidadNac(); ?></td>
        </tr>
    </table>
    <?php echo ui_end_content()?>
<?php echo ui_end_content_panel()?>

