<?php use_helper('ysJQueryRevolutions')?>
<?php use_helper('ysJQueryAutocomplete')?>
<?php use_helper('ysJQueryUIDialog')?>
<?php use_helper('ysJQueryUICore'); ?>
<?php ui_add_effects_support('blind')?>
<div style="width: 620px;margin-left: auto; margin-right: auto;">
<?php echo ui_init_content_panel(array('class' => 'ui-dialog ui-widget ui-widget-content ui-corner-all ui-draggable ui-resizable'))?>
    <?php echo ui_init_title(array(
        'icon' => 'newwin',
        'class' => 'ui-widget-header ui-corner-all',
        'style' => 'top: 3px; left: 20px; height:20px;font-family: arial') ) ?>
    Registre los datos para la busqueda
    <?php echo ui_end_title() ?>
    <?php echo ui_init_content()?>
    <form id="myForm" action="#">
        <table align="center" style="width: 100%;padding:10px;">
            <tr>
                <td>Centro de Educaci&oacute;n Alternativa : </td>
                <td>
                    <?php echo $ceas['cod_ue_id']->render(); ?>
		<td>
                    <input type="submit" value="Buscar" id ="btnBuscar" />
                </td>
            </tr>
        </table>        
    </form>
    <?php echo ui_end_content()?>
<?php echo ui_end_content_panel()?>
</div>
<?php
echo jquery_ajax_form(
      '#myForm',
      array(
        'url' => url_for($ue),
        'success' =>  like_function("$('#divResults').html(data)" , 'data'),                
        'type' => 'POST'));?>

