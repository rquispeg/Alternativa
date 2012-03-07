<?php use_helper('ysJQueryRevolutions')?>
<?php use_helper('ysJQueryAutocomplete')?>
<?php use_helper('ysJQueryUIDialog')?>
<?php use_helper('ysJQueryUICore'); ?>
<?php ui_add_effects_support('blind')?>
<div style="width:760px;margin-left: auto;margin-right: auto;">
<?php echo ui_init_content_panel(array('class' => 'ui-dialog ui-widget ui-widget-content ui-corner-all ui-draggable ui-resizable'))?>
    <?php echo ui_init_title(array(
        'icon' => 'newwin',
        'class' => 'ui-widget-header ui-corner-all',
        'style' => 'top: 3px; left: 20px; height:50px') ) ?>
        MODIFICAR MIS DATOS
    <?php echo ui_end_title() ?>
    <?php echo ui_init_content()?>
    <table align="center" style="width:740px;padding:10px;">
        <tr>
            <td class="caption">Paterno</td>
            <td class="caption">Materno</td>
            <td class="caption">Nombre</td>
            <td class="caption">Direcci&oacute;n</td>
            
        </tr>
        <tr>
            <td class="caption"><?php echo $form['paterno']->render(); ?></td>
            <td class="caption"><?php echo $form['materno']->render(); ?></td>
            <td class="caption"><?php echo $form['nombre']->render(); ?></td>
            <td class="caption"><?php echo $form['direccion']->render(); ?></td>
            
        </tr>
        <tr>
            <td class="caption"><?php echo $form['paterno']->renderError(); ?></td>
            <td class="caption"><?php echo $form['materno']->renderError(); ?></td>
            <td class="caption"><?php echo $form['nombre']->renderError(); ?></td>
            <td class="caption"><?php echo $form['direccion']->renderError(); ?></td>
        </tr>
        <tr>
            <td class="caption">Telefono</td>
            <td class="caption">Celular</td>
            <td class="caption">Email</td>
            <td class="caption" colspan="2">Cargo</td>
        </tr>
        <tr>
            <td class="caption"><?php echo $form['telefono']->render(); ?></td>
            <td class="caption"><?php echo $form['celular']->render(); ?></td>
            <td class="caption"><?php echo $form['email']->render(); ?></td>
            <td class="caption"><?php echo $form['cargo_id']->render(); ?></td>
        </tr>
        <tr>
            <td class="caption"><?php echo $form['telefono']->renderError(); ?></td>
            <td class="caption"><?php echo $form['celular']->renderError(); ?></td>
            <td class="caption"><?php echo $form['email']->renderError(); ?></td>
            <td class="caption"><?php echo $form['cargo_id']->renderError(); ?></td>
        </tr>
        <tr>
            <td class="caption" colspan="4" align="center">
                <?php echo $form['foto']->render(); ?><br/>
                <?php echo $form['foto']->renderError(); ?>
                Cargar tu foto.....
            </td>
        </tr>
      </table>
    <?php echo ui_end_content()?>
<?php echo ui_end_content_panel()?>
</div>