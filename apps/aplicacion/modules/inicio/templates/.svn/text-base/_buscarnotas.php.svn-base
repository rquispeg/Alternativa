<style type="text/css">
    #dat_rde_estudiante_paterno,#dat_rde_estudiante_materno ,#dat_rde_estudiante_nombre { text-transform: uppercase; }
</style>

<?php //use_helper('ysJQueryDollarRevolutions') //  ysJQueryRevolutions Helper ?>
<?php use_helper('ysJQueryRevolutions'); ?>
<?php use_helper('ysJQueryAutocomplete')?>
<?php use_helper('ysJQueryUITabs')      //  ysJQueryUITab Helper ?>
<?php use_helper('ysJQueryUIAccordion')      //  ysJQueryUITab Helper ?>
<?php use_helper('ysJQueryUIProgressbar')      //  ysJQueryUITab Helper ?>
<?php use_helper('ysJQueryUIDialog'); ?>
<?php use_helper('ysJQueryUICore'); ?>
<?php use_helper('ysUtil'); ?>
<?php ui_add_effects_support('bounce')  //  support for bounce effect ?>
<?php ui_tabs_init_panel(
        'tabPanelId',
        array(
          'selected' =>  0,
          'sortable' => true,
          'unselect' => true,
          'show'     => true,
          'collapsible' => false),
        'style="display:block;font-size:11px;font-family:Arial;"')?>
        <?php ui_tabs_init()?>
          <?php ui_tab('myTab1', 'Buscar por RUDE')?>
          <?php ui_tab('myTab2', 'Buscar por datos personales')?>
        <?php ui_tabs_end()?>
    <?php ui_tabs_init_content_for('myTab1')?>
        <form id="myForm1" action="#">
            <table align="center">
                <tr>
                    <td>RUDE </td>
                    <td>
                        <input name="dat_rde_estudiante[codigo_rude]" id="dat_rde_estudiante_codigo_rude" type="text" size="28" maxlength="18" style="font-family: arial;" />
                        <input type="submit" value="Buscar"  class ="btnBuscar" id ="btnBuscar1" />
                    </td>
                </tr>
            </table>
        </form>
        <?php echo jquery_ajax_form(
              '#myForm1',
              array(
                'url' => url_for($url_rude),
                'success' =>  like_function("$('#divResult').html(data)" , 'data'),
                'condition' => '$("#dat_rde_estudiante_codigo_rude").attr("value") != ""',
                'onFailureCondition' => 'alert("Debe registrar el RUDE del estudiante")',
                'type' => 'POST')) ?>
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
    <?php ui_tabs_end_content()?>
    <?php ui_tabs_init_content_for('myTab2')?>
        <form id="myForm2" action="#">
            <table align="center" width="100%">
                <tr>
                    <td>PATERNO </td>
                    <td>MATERNO </td>
                    <td>NOMBRE </td>
                    <td>FECHA NACIMIENTO </td>
                    <td rowspan="2" valign="middle"><input type="submit" value="Buscar"  class ="btnBuscar" id ="btnBuscar2" /></td>
                </tr>
                <tr>
                    <td>
                        <?php echo $estudiante['paterno']->render(); ?>
                    </td>
                    <td>
                        <?php echo $estudiante['materno']->render(); ?>
                    </td>
                    <td>
                        <?php echo $estudiante['nombre']->render(); ?>
                    </td>
                    <td>
                        <?php echo $estudiante['fecha_nacimiento']->render(); ?>
                    </td>
                </tr>
            </table>
        </form>
        <?php echo jquery_ajax_form(
              '#myForm2',
              array(
                'url' => url_for($url_datospersonales),
                'success' =>  like_function("$('#divResult').html(data)" , 'data'),
                'condition' => '$("#datos_estudiante_paterno").attr("value") != "" || $("#datos_estudiante_materno").attr("value") != "" || $("#datos_estudiante_nombre").attr("value") != ""',
                'onFailureCondition' => 'alert("Debe ingresar todos los criterios criterio.")',
                'type' => 'POST')) ?>
        <?php
            echo jquery_ajax_event(
                   '#datos_estudiante_paterno',
                   'ajaxSuccess',
                   like_function('$("#imagen").css("display","none")', 'event,request,settings'));
        ?>
        <?php
            echo jquery_ajax_event(
                   '#datos_estudiante_paterno',
                   'ajaxStart',
                   like_function('$("#imagen").css("display","block")', 'event,request,settings'));
        ?>

    <?php ui_tabs_end_content()?>
<?php  ui_tabs_end_panel() ?>