<?php echo ui_init_content_panel(array('class' => 'ui-dialog ui-widget ui-widget-content ui-corner-all ui-draggable ui-resizable'))?>
    <?php echo ui_init_title(array(
        'icon' => 'newwin',
        'class' => 'ui-widget-header ui-corner-all',
        'style' => 'top: 3px; left: 20px; height:20px;') ) ?>
      DATOS DEL ESTUDIANTE
    <?php echo ui_end_title() ?>
    <?php echo ui_init_content()?>
    <table align="center" style="width:740px;padding-left: 10px;padding-right: 10px;font-family: Arial;font-size: 12px;">
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
            <td class="caption"><?php echo $estudiante['genero']->render(); ?></td>
            
        </tr>
     </table>
     <table align="center" style="width:740px;padding-left: 10px;padding-right: 10px;font-family: Arial;font-size: 12px;">
        <tr>
            <td class="caption">Fecha Nacimiento(*)</td>
            <td class="caption">Pais(*)</td>
            <td class="caption">Departamento(*)</td>
            <td class="caption">Provincia(*)</td>
            <td class="caption">Localidad</td>
        </tr>
        <tr>
            <td class="caption"><?php echo $estudiante['fecha_nacimiento']->render(); ?></td>
            <td class="caption"><?php echo $estudiante['pais_nac_id']->render(); ?></td>
            <?php echo jquery_ajax(array(
            'listener' => array(
                'selector' => '#dat_rde_estudiante_pais_nac_id',
                'event' => 'change'),
            'url' => url_for('ins_sin_rude/departamento'),
            'success' =>  like_function("$('#departamento').html(data)" , 'data'),
            'data' => "'pais_id=' + ". jquery_get('this','val'),
            'condition' => '$("#dat_rde_estudiante_pais_nac_id").attr("value") == 1',
            'onFailureCondition' => "document.getElementById('dat_rde_estudiante_departamento_nac_id').disabled = true;
                                     document.getElementById('dat_rde_estudiante_departamento_nac_id').value = -999;
                                     document.getElementById('dat_rde_estudiante_provincia_nac_id').disabled = true;
                                     document.getElementById('dat_rde_estudiante_provincia_nac_id').value = -999;",
            'type' => 'POST'));
            ?>

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
            <td class="caption"><div id="departamento"><?php $estudiante->setDefault('departamento_nac_id','-999'); ?><?php echo $estudiante['departamento_nac_id']->render(); ?></div></td>
            <td class="caption"><div id="provincia"><?php echo $estudiante['provincia_nac_id']->render(); ?></div></td>
            <td class="caption"><?php echo $estudiante['localidad_nac']->render(); ?></td>
        </tr>
      </table>
      <table align="center" style="width:740px;padding-left: 10px;padding-right: 10px;font-family: Arial;font-size: 12px;">
        <tr>
            <td class="caption">Oficialia N&deg;</td>
            <td class="caption">Libro N&deg;</td>
            <td class="caption">Partida N&deg;</td>
            <td class="caption">Folio N&deg;</td>
        </tr>
        <tr>
            <td class="caption"><?php echo $estudiante['oficialia']->render(); ?></td>
            <td class="caption"><?php echo $estudiante['libro']->render(); ?></td>
            <td class="caption"><?php echo $estudiante['partida']->render(); ?></td>
            <td class="caption"><?php echo $estudiante['folio']->render(); ?></td>
        </tr>
    </table>
	<?php echo ui_end_content()?>
	<?php echo ui_init_title(array(
        'icon' => 'newwin',
        'class' => 'ui-widget-header ui-corner-all',
        'style' => 'top: 3px; left: 20px; height:20px;') ) ?>
      MODALIDAD DE EDUCACI&Oacute;N
    <?php echo ui_end_title() ?>
    <?php echo ui_init_content()?>
	<table align="center" style="width:740px;padding-left: 10px;padding-right: 10px;font-family: Arial;font-size: 12px;">
		<tr>
			<td>
			   Modalidad de Educaci&oacute;n
			</td>
			<td>
				<?php echo $acreditaciones['acreditacion_id']->render(); ?>		
			</td>					
		</tr>
	</table>
    <?php echo ui_end_content()?>
<?php echo ui_end_content_panel()?>
