<?php use_helper('ysJQueryRevolutions')?>
<?php use_helper('ysJQueryAutocomplete')?>
<?php use_helper('ysJQueryUIDialog')?>
<?php use_helper('ysJQueryUICore'); ?>
<?php ui_add_effects_support('blind')?>

<div style="width: 770px;margin-left: auto; margin-right: auto;font-family: arial;">
<?php echo ui_init_content_panel(array('class' => 'ui-dialog ui-widget ui-widget-content ui-corner-all ui-draggable ui-resizable'))?>
    <?php echo ui_init_title(array(
        'icon' => 'newwin',
        'class' => 'ui-widget-header ui-corner-all',
        'style' => 'top: 3px; left: 20px; height:20px;font-family: arial') ) ?>
      Registre el c&oacute;digo RUDE para la busqueda
    <?php echo ui_end_title() ?>
    <?php echo ui_init_content(array('style'=>'font-family: arial'))?>
    <form id="myForm" action="#">
        <table align="center">
            <tr>
                <td>RUDEALT: </td>
                <td>
                    <input name="dat_rde_estudiante[codigo_rude]" id="dat_rde_estudiante_codigo_rude" type="text" size="28" maxlength="18" style="font-family: arial;" />
                </td>
                <td>&Aacute;rea de Educaci&oacute;n :</td>
                <td>
                    <?php echo $acreditaciones['acreditacion_id']->render(); ?>	
                </td>                
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
        'url' => url_for($url),
        'success' =>  like_function("$('#divResults').html(data)" , 'data'),
        'condition' => '$("#dat_rde_estudiante_codigo_rude").attr("value") != ""',
        'onFailureCondition' => 'alert("Debe registrar el RUDE del estudiante")',
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

