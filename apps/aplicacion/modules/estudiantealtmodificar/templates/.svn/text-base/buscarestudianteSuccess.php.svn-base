<?php use_helper('ysJQueryRevolutions')?>
<?php use_helper('ysJQueryUIDialog')?>
<?php use_helper('ysJQueryUICore'); ?>
<?php use_helper('ysUtil'); ?>
<?php ui_add_effects_support('blind')?>
<?php if (!isset($notice)): ?>

<table style="text-align: center; border-top-color: rgb(204, 204, 204); border-bottom-color: rgb(204, 204, 204); border-bottom-style: solid; border-top-style: solid; background-color: rgb(255, 255, 230); color: rgb(255, 0, 0); font-size: 14px; font-weight: bold; width: 760px; margin-left: auto; margin-right: auto;">
    <tr>
        <td valign="middle" width="50"><img src="/images/note.png" alt="nota" align="left"></td>
        <td style="padding: 10px;" align="left">LA MODIFICACION DE DATOS SE LO REALIZARA SOLO UNA VEZ POR ESTUDIANTE Y SE DEBE REALIZAR PREVIA PRESENTACION DEL CERTIFICADO DE NACIMIENTO</td>
    </tr>
</table>
    <form id="myForm2" action="#">
    <?php echo ui_init_content_panel(array('class' => 'ui-dialog ui-widget ui-widget-content ui-corner-all ui-draggable ui-resizable'))?>
        <?php echo ui_init_title(array(
            'icon' => 'newwin',
            'class' => 'ui-widget-header ui-corner-all',
            'style' => 'top: 3px; left: 20px; height:20px;') ) ?>
          DATOS DEL ESTUDIANTE
        <?php echo ui_end_title() ?>
        <?php echo ui_init_content()?>
        <input type="hidden" name="dat_rde_estudiante[cod_ue_id]" value="<?php echo $datos->getCodUeId(); ?>" id="dat_rde_estudiante_cod_ue_id">
        <table align="center" style="width:740px;">
            <tr>
                <td class="caption">C.I.</td>
                <td class="caption">Paterno</td>
                <td class="caption">Materno</td>
                <td class="caption">Nombre(*)</td>
                <td class="caption">Genero</td>

            </tr>
            <tr>
                <td class="caption"><?php echo $estudiante['carnet_identidad']->render(); ?></td>
                <td class="caption"><?php echo $estudiante['paterno']->render(); ?></td>
                <td class="caption"><?php echo $estudiante['materno']->render(); ?></td>
                <td class="caption"><?php echo $estudiante['nombre']->render(); ?></td>
                <td class="caption"><?php echo $estudiante['genero']->render();
                echo $estudiante['codigo_rude']->render(); ?>
                </td>

            </tr>
         </table>
         <table align="center" style="width:740px;">
            <tr>
                <td class="caption">Fecha Nacimiento(*)</td>
                <td class="caption">Pais(*)</td>
                <td class="caption">Departamento(*)</td>
                <td class="caption">Provincia(*)</td>
            </tr>
            <tr>
                <td class="caption"><?php echo $estudiante['fecha_nacimiento']->render(); ?></td>
                <td class="caption"><?php $estudiante->setDefault('pais_nac_id',$datos->getPaisNacId()); ?><?php echo $estudiante['pais_nac_id']->render(); ?></td>
                <?php echo jquery_ajax(array(
                'listener' => array(
                    'selector' => '#dat_rde_estudiante_pais_nac_id',
                    'event' => 'change'),
                'url' => url_for('estudiantealtmodificar/departamento'),
                'success' =>  like_function("$('#departamento').html(data)" , 'data'),
                'data' => "'pais_id=' + ". jquery_get('this','val'),
                'condition' => '$("#dat_rde_estudiante_pais_nac_id").attr("value") == 1',
                'onFailureCondition' => "document.getElementById('dat_rde_estudiante_departamento_nac_id').disabled = true;
                                         document.getElementById('dat_rde_estudiante_departamento_nac_id').value = -999;
                                         document.getElementById('dat_rde_estudiante_provincia_nac_id').disabled = true;
                                         document.getElementById('dat_rde_estudiante_provincia_nac_id').value = -999;
                                         document.getElementById('dat_rde_estudiante_localidad_nac').value = ''",
                'type' => 'POST'));
                ?>
                <td class="caption"><div id="departamento">
                    <select name="dat_rde_estudiante[departamento_nac_id]" id="dat_rde_estudiante_departamento_nac_id" style="font-family: Arial;font-size: 12px;">
                        <option value="-999">[SELECCIONAR]</option>
                        <?php foreach ($departamentos as $departamento): ?>
                            <?php if($datos->getDepartamentoNacId()==$departamento->getIdDepartamento()): ?>
                                <option selected value="<?php echo $departamento->getIdDepartamento(); ?>"><?php echo $departamento->getDescDepartamento(); ?></option>
                            <?php else: ?>
                                <option value="<?php echo $departamento->getIdDepartamento(); ?>"><?php echo $departamento->getDescDepartamento(); ?></option>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </select>
                    <?php echo jquery_ajax(array(
                        'listener' => array(
                            'selector' => '#dat_rde_estudiante_departamento_nac_id',
                            'event' => 'change'),
                        'url' => url_for('estudiantealtmodificar/provincia'),
                        'success' =>  like_function("$('#provincia').html(data)" , 'data'),
                        'data' => "'departamento_id=' + ". jquery_get('this','val'),
                        'type' => 'POST'));
                    ?>
                </div></td>
                <td class="caption"><div id="provincia">
                        <select name="dat_rde_estudiante[provincia_nac_id]" id="dat_rde_estudiante_provincia_nac_id" style="font-family: Arial;font-size: 12px;" >
                            <option value="-999">[SELECCIONAR]</option>
                            <?php foreach ($provincias as $provincia): ?>
                            <?php if($datos->getProvinciaNacId()==$provincia->getIdProvincia()): ?>
                                <option selected value="<?php echo $provincia->getIdProvincia(); ?>"><?php echo $provincia->getDescProvincia(); ?></option>
                            <?php else: ?>
                                <option value="<?php echo $provincia->getIdProvincia(); ?>"><?php echo $provincia->getDescProvincia(); ?></option>
                            <?php endif; ?>
                        <?php endforeach; ?>
                        </select>
                </div></td>
              </tr>
          </table>
          <table align="center" style="width:740px;">
            <tr>
              <td class="caption">Localidad</td>
              <td class="caption">Oficialia</td>
              <td class="caption">Libro</td>
              <td class="caption">Partida</td>
              <td class="caption">Folio</td>
            </tr>
            <tr>
                <td class="caption"><?php echo $estudiante['localidad_nac']->render(); ?></td>
                <td class="caption"><?php echo $estudiante['oficialia']->render(); ?></td>
                <td class="caption"><?php echo $estudiante['libro']->render(); ?></td>
                <td class="caption"><?php echo $estudiante['partida']->render(); ?></td>
                <td class="caption"><?php echo $estudiante['folio']->render(); ?></td>
            </tr>
          </table>
        <?php echo ui_end_content()?>
    <?php echo ui_end_content_panel()?>
        <div style="margin-left: auto;margin-right: auto; text-align: center;padding-top: 15px;padding-bottom: 15px;">
                <input type="submit" value="Guardar Cambios" id ="btnGrabar" />
        </div>
    </form>
    <?php echo jquery_ajax_form(
      '#myForm2',
      array(
        'url' => url_for('estudiantealtmodificar/modificardatos'),
        'success' =>  like_function("$('#divResults').html(data)" , 'data'),
        'condition' => 'verificar() == false ',
        'onFailureCondition' => 'alert("Debe registrar los campos marcados con (*)")',
        'type' => 'POST'))?>
    <?php
        echo jquery_ajax_event(
               '#divResults',
               'ajaxSuccess',
               like_function('$("#imagen").css("display","none")', 'event,request,settings'));
    ?>
    <?php
        echo jquery_ajax_event(
               '#divResults',
               'ajaxStart',
               like_function('$("#imagen").css("display","block")', 'event,request,settings'));
    ?>
<script type="text/javascript">
/* <![CDATA[ */
function verificar()
{
    if((document.getElementById('dat_rde_estudiante_nombre').value!='')&&(document.getElementById('dat_rde_estudiante_pais_nac_id').value!=0)) {if((document.getElementById('dat_rde_estudiante_pais_nac_id').value==1)){if((document.getElementById('dat_rde_estudiante_departamento_nac_id').value!=-999)&&(document.getElementById('dat_rde_estudiante_provincia_nac_id').value!=-999)){return false;}else{return true;}}else return false;} else return true;
}
/* ]]> */
</script>
<?php else: ?>
     <?php include_partial('inicio/mensaje',array('fondo' => '#FFFFE6','letra' => '#F00','mensaje' => $notice,'icono' => '/images/Ou.png' )); ?>
<?php endif; ?>

<?php
    echo jquery_ajax_event(
           '#dat_rde_estudiante_pais_nac_id',
           'ajaxSuccess',
           like_function('$("#imagen").css("display","none")', 'event,request,settings'));
?>
<?php
    echo jquery_ajax_event(
           '#dat_rde_estudiante_pais_nac_id',
           'ajaxStart',
           like_function('$("#imagen").css("display","block")', 'event,request,settings'));
?>