<?php use_helper('ysJQueryRevolutions')?>
<?php use_helper('ysJQueryAutocomplete')?>
<?php use_helper('ysJQueryUIDialog')?>
<?php use_helper('ysJQueryUICore'); ?>
<?php ui_add_effects_support('blind')?>
<div style="width: 920px;margin-left: auto; margin-right: auto;">
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
                <td>CODIGO : </td>
                <td>
                    <input type="text" id="dat_sie_operativos_ue" name="dat_sie_operativos[ue]" size="10" maxlength="8" onkeydown="return validarNumero(event);" />
		<td>SUB CEA: 
		</td>
		<td>
		    <input type="text" id="dat_sie_operativos_subcea" name="dat_sie_operativos[subcea]" size="2" maxlength="2" />
		</td>
		<td>
                    GESTION:
		</td>
		<td>
		   <?php echo $operativo['gestion_id']->render(); ?>		
		</td>
		<td>
		    PERIODO:
		</td>
		<td>
		   <?php echo $operativo['periodo_id']->render(); ?>
		</td>		
		<td>
                    OPERATIVO: 
		</td>
		<td>
	   	<?php echo $operativo['operativo_id']->render(); ?>
		</td>
		<td>
                    <input type="submit" value="Buscar" id ="btnBuscar" />
                </td>
            </tr>
        </table>
        <?php echo jquery_autocomplete_support_to(
             '#dat_sie_operativos_ue',
             array(
               'url' => url_for('adultoshumanisticainformacion/autocompleteData'),
               'max' => 20,
               'width' => 300,
               //'loadingClass' => 300,
               'highlight' => false,
               'formatItem' => like_function('return row[0] + " - <strong> " + row[1] + "</strong>"', 'row'),
               'formatResult' => like_function('return row[0].replace(/(<.+?>)/gi, "")', 'row')))  ?>
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
        'condition' => '$("#dat_sie_operativos_ue").attr("value") != ""',
        'onFailureCondition' => 'alert("Debe registrar el SIE de la unidad educativa")',
        'type' => 'POST'))?>
<?php
    echo jquery_ajax_event(
           '#dat_sie_operativos_ue',
           'ajaxSuccess',
           like_function('$("#imagen").css("display","none")', 'event,request,settings'));
?>
<?php
    echo jquery_ajax_event(
           '#dat_sie_operativos_ue',
           'ajaxStart',
           like_function('$("#imagen").css("display","block")', 'event,request,settings'));
?>

