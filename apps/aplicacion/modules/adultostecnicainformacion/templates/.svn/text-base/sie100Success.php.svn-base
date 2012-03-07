<?php use_helper('ysJQueryRevolutions') ?>
<?php use_helper('ysJQueryUICore'); ?>
<?php ui_add_effects_support('blind')?>
<?php if (!isset($notice)): ?>
    <?php if ($director): ?>
	    <?php echo ui_init_content_panel(array('class' => 'ui-dialog ui-widget ui-widget-content ui-corner-all ui-draggable ui-resizable'))?>
            <?php echo ui_init_title(array(
                'icon' => 'newwin',
                'class' => 'ui-widget-header ui-corner-all',
                'style' => 'top: 5px; left: 30px; height:50px;') ) ?>
              INFORMACI&Oacute;N DEL CENTRO DE EDUCACI&Oacute;N ALTERNATIVA
            <?php echo ui_end_title() ?>
            <?php echo ui_init_content()?>
            <div style="width: 100%;padding:10px;">
            <table align="center" style="width: 95%">
                <tr>
                    <td><?php include_partial('adultostecnicainformacion/identificacion', array('identificacion' => $identificacion, 'director' => $director)); ?></td>
                </tr>
                <tr>
                    <td><?php include_partial('adultostecnicainformacion/ubicacion', array('identificacion' => $identificacion, 'director' => $director)); ?></td>
                </tr>
                <tr>
                    <td><?php include_partial('adultostecnicainformacion/administrativa', array('nucleo' => $nucleo,'distrito'=>$distrito,'descDistrito'=>$descDistrito )); ?></td>
                </tr>
                <tr>
                    <td><?php include_partial('adultostecnicainformacion/dependencia', array('identificacion' => $identificacion,'director' => $director)); ?></td>
                </tr>
                <tr>
                    <?php if((int)$director->getGestionId()>2010): ?>
                    <td>
                        <?php //include_partial('adultostecnicainformacion/gradonuevo', array('director' => $director)); ?></td>
                    <?php else: ?>
                    <td>
                        <?php //include_partial('adultostecnicainformacion/grado', array('director' => $director)); ?></td>
                    <?php endif; ?>
                </tr>
            </table>
            </div>
        <?php echo ui_end_content()?>
        <?php echo ui_end_content_panel()?>
              <table align="center">
                  <tr><td><?php //include_partial('inicio/barrareportes',array('botones'=>array(array('link'=>'adultoshumanisticainformacion/reporte','caption'=>'SIE 100 Caratula'),
                                //                                                              array('link'=>'adultoshumanisticainformacion/reporte_estadistica','caption'=>'SIE 100 Estadistica'),
                                //                                                              array('link'=>'adultoshumanisticainformacion/reporte_estadistica_traslado','caption'=>'SIE 100 Estadistica Traslado'),
                                //                                                              array('link'=>'inscripcion/reporteunidad','caption'=>'SIE 100 RUDE')))); ?></td></tr>
              </table>
    <?php else: ?>
        <?php include_partial('inicio/mensaje',array('fondo' => '#F00','letra' => '#fff','mensaje' => 'LA UNIDAD TECNICA NO SE ENCUENTRA REGISTRADO PARA ESTE OPERATIVO','icono' => '/images/Ou.png' )); ?>
    <?php endif; ?>
<?php else: ?>
    <?php include_partial('inicio/mensaje',array('fondo' => '#F00','letra' => '#fff','mensaje' => $notice,'icono' => '/images/Scared.png' )); ?>
<?php endif; ?>

