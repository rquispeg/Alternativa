<?php use_helper('ysJQueryRevolutions')?>
<?php use_helper('ysJQueryAutocomplete')?>
<?php use_helper('ysJQueryUIDialog')?>
<?php use_helper('ysJQueryUICore'); ?>
<?php ui_add_effects_support('blind')?>

<div style="width: 770px; margin-left: auto; margin-right: auto;font-family: arial;">
<?php echo ui_init_content_panel(array('class' => 'ui-dialog ui-widget ui-widget-content ui-corner-all ui-draggable ui-resizable'))?>
    <?php echo ui_init_title(array(
        'icon' => 'newwin',
        'class' => 'ui-widget-header ui-corner-all',
        'style' => 'top: 3px; left: 20px; width:100%; height:20px;font-family: arial') ) ?>
      <?php  echo $message; ?>
    <?php echo ui_end_title() ?>
    <?php echo ui_init_content(array('style'=>'font-family: arial'))?>
    <form id="myForm" action="#">
        <table align="center">
            <tr>
                <td>RUDEALT </td>
                <td>
                    <input name="dat_rde_estudiante[codigo_rude]" id="dat_rde_estudiante_codigo_rude" type="text" size="28" maxlength="18" style="font-family: arial;" />                    
                </td>
                <td>Cod. RUE (SIE) </td>
                <td>
                    <input name="dat_sie_operativos[ue]" id="dat_sie_operativos_ue" type="text" size="10" maxlength="8" onkeydown="return validarNumero(event);" />
                </td>                
                
                <td>GESTION </td>
                <td>
                <?php echo $operativo['gestion_id']->render() ?>
                </td>
                <td>
                	<input type="submit" value="<?php echo $but_message ?>" id ="btnBuscar" />
                </td>
            </tr>
        </table>
      <?php echo jquery_autocomplete_support_to(
             '#dat_sie_operativos_ue',
             array(
               'url' => url_for('unidadeducativainformacion/autocompleteData'),
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
        'url' => url_for($url_action),
        'success' =>  like_function("$('#divResults').html(data)" , 'data'),
        'condition' => '$("#dat_rde_estudiante_codigo_rude").attr("value") != "" && $("#dat_sie_operativos_ue").attr("value") != ""',
        'onFailureCondition' => 'alert("Dege ingresar el codigo Rude del estudiante y codigo de la Unidad Educativa.")',
        'type' => 'POST'))?>
<?php
    echo jquery_ajax_event(
           '#dat_rde_estudiante_codigo_rude',
           'ajaxSuccess',
           like_function('$("#imagen").css("display","none")', 'event,request,settings'));
?>
<?php
    echo jquery_ajax_event(
           '#dat_rde_estudiante_codigo_rude',
           'ajaxStart',
           like_function('$("#imagen").css("display","block")', 'event,request,settings'));
?>

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



