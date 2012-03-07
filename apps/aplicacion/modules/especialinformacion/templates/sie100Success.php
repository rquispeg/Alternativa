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
              INFORMACION DE LA UNIDAD EDUCATIVA
            <?php echo ui_end_title() ?>
            <?php echo ui_init_content()?>
            <div style="width: 100%;padding:10px;">
            <table align="center" style="width: 100%;padding:10px;">
                <tr>
                    <td><?php include_partial('especialinformacion/identificacion', array('identificacion' => $identificacion, 'director' => $director)); ?></td>
                </tr>
                <tr>
                    <td><?php include_partial('especialinformacion/ubicacion', array('identificacion' => $identificacion, 'director' => $director)); ?></td>
                </tr>
                <tr>
                    <td><?php include_partial('especialinformacion/administrativa', array('nucleo' => $nucleo,'distrito'=>$distrito,'descDistrito'=>$descDistrito )); ?></td>
                </tr>
                <tr>
                    <td><?php include_partial('especialinformacion/dependencia', array('identificacion' => $identificacion,'director' => $director)); ?></td>
                </tr>
                <tr>
                    <?php //if((int)$director->getGestionId()>2010): ?>
                    <td><?php //include_partial('unidadeducativainformacion/gradonuevo', array('director' => $director)); ?></td>
                    <?php //else: ?>
                    <td><?php //include_partial('unidadeducativainformacion/grado', array('director' => $director)); ?></td>
                    <?php //endif; ?>
                </tr>
            </table>
            </div>
        <?php echo ui_end_content()?>
        <?php echo ui_end_content_panel()?>
              <table align="center">
                  <tr><td><?php //include_partial('inicio/barrareportes',array('botones'=>array(array('link'=>'unidadeducativainformacion/reporte','caption'=>'SIE 100 Caratula'),
                                //                                                              array('link'=>'unidadeducativainformacion/reporte_estadistica','caption'=>'SIE 100 Estadistica'),
                                //                                                              array('link'=>'unidadeducativainformacion/reporte_estadistica_traslado','caption'=>'SIE 100 Estadistica Traslado'),
                                ///                                                              array('link'=>'inscripcionregular/reporteunidad','caption'=>'SIE 100 RUDE')))); ?></td></tr>
              </table>
    <?php else: ?>
        <?php include_partial('inicio/mensaje',array('fondo' => '#F00','letra' => '#fff','mensaje' => 'UNIDAD NO EXISTE O NO TIENE REGISTRO PARA LA GESTION Y OPERATIVO SELECCIONADO','icono' => '/images/Ou.png' )); ?>
    <?php endif; ?>
<?php else: ?>
    <?php include_partial('inicio/mensaje',array('fondo' => '#F00','letra' => '#fff','mensaje' => $notice,'icono' => '/images/Scared.png' )); ?>
<?php endif; ?>

