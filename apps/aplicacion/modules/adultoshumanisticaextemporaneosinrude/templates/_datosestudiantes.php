<?php echo ui_init_content_panel(array('class' => 'ui-dialog ui-widget ui-widget-content ui-corner-all ui-draggable ui-resizable'))?>
    <?php echo ui_init_title(array(
        'icon' => 'newwin',
        'class' => 'ui-widget-header ui-corner-all',
        'style' => 'top: 3px; left: 20px; height:50px') ) ?>
      POSIBLES COINCIDENCIAS DE DATOS
    <?php echo ui_end_title() ?>
    <?php echo ui_init_content()?>
    <table align="center" width="100%">
        <tr>
            <th>SELEC.</th>
            <th>PATERNO</th>
            <th>MATERNO</th>
            <th>NOMBRE</th>
            <th>FECHA NACIMIENTO</th>
            
        </tr>
        <tr>
            <td><input type="radio" name="rudes" value ="-999" checked /></td>
            <td colspan="4">NINGUNO DE LOS ANTERIORES</td>
        </tr>
        <?php foreach($estudiantes as $estudiante): ?>
        <tr>
            <td><input type="radio" name="rudes" value ="<?php echo $estudiante->getCodigoRude(); ?>"/></td>
            <td><?php echo $estudiante->getPaterno(); ?></td>
            <td><?php echo $estudiante->getMaterno(); ?></td>
            <td><?php echo $estudiante->getNombre(); ?></td>
            <td><?php echo $estudiante->getFechaNacimiento(); ?></td>
            
        </tr>
        <?php endforeach; ?>
    </table>
    <?php echo ui_end_content()?>
<?php echo ui_end_content_panel()?>