<?php use_helper('ysJQueryRevolutions')?>
<?php use_helper('ysJQueryAutocomplete')?>
<?php use_helper('ysJQueryUIDialog')?>
<?php use_helper('ysJQueryUICore'); ?>
<?php ui_add_effects_support('blind')?>

<div style="width: 770px; margin-left: auto; margin-right: auto;">

<?php echo ui_init_content_panel(array('class' => 'ui-dialog ui-widget ui-widget-content ui-corner-all ui-draggable ui-resizable'))?>
    <?php echo ui_init_title(array(
        'icon' => 'newwin',
        'class' => 'ui-widget-header ui-corner-all',
        'style' => 'top: 3px; left: 20px; height:20px;font-family: arial') ) ?>
    Ingrese datos para la busqueda
    <?php echo ui_end_title() ?>
    <?php echo ui_init_content()?>
    <form id="myForm" action="#">
        <table align="center">
            <tr>
                <td>Paterno:</td>
                <td>
                    <input type="text" id="datos_estudiante_paterno" name="datos_estudiante[paterno]" size="16" maxlength="35" style="text-transform: uppercase;" />
                </td>
                <td>Materno:</td>
                <td>
                    <input type="text" id="datos_estudiante_materno" name="datos_estudiante[materno]" size="16" maxlength="35" style="text-transform: uppercase;" />
                </td>
                <td>Nombre:</td>
                <td>
                    <input type="text" id="datos_estudiante_nombre" name="datos_estudiante[nombre]" size="24" maxlength="35" style="text-transform: uppercase;" />
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
        'condition' => '$("#datos_estudiante_paterno").attr("value") != "" || $("#datos_estudiante_materno").attr("value") != "" || $("#datos_estudiante_nombre").attr("value") != ""',
        'onFailureCondition' => 'alert("Debe ingresar al menos un criterio.")',
        'type' => 'POST'))?>
<?php
    echo jquery_ajax_event(
           '#datos_estudiante_nombre',
           'ajaxSuccess',
           like_function('$("#imagen").css("display","none")', 'event,request,settings'));
?>
<?php
    echo jquery_ajax_event(
           '#datos_estudiante_nombre',
           'ajaxStart',
           like_function('$("#imagen").css("display","block")', 'event,request,settings'));
?>