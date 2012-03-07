<?php use_helper('ysJQueryRevolutions'); ?>
<?php use_helper('ysJQueryUICore'); ?>
<?php use_helper('ysJQueryUIDialog'); ?>
<?php use_helper('ysUtil'); ?>
<?php use_helper('Date') ?>
<?php if ($sf_user->hasFlash('notice7A')): ?>
    <?php include_partial('inicio/mensaje',array('fondo' => '#F00','letra' => '#fff','mensaje' => $sf_user->getFlash('notice7A'),'icono' => '/images/Cry.png' )); ?>
<?php else: ?>
                <?php if ($historialestados->Count()>0): ?>
					<?php $estudiante = Doctrine::getTable('DatRdeEstudiante')->find($historialestados[0]['codigo_rude_id']); ?>	
					<?php ui_grid_init("Estudiante: ".$estudiante->getNombre().", ".$estudiante->getPaterno()." ".$estudiante->getMaterno()."  (".implode('/',array_reverse(explode('-',$estudiante->getFechaNacimiento()))).")") ?>
				<?php else: ?>	
					<?php ui_grid_init('Estudiante sin Inscripci&oacute;n') ?>
				<?php endif; ?>

        <?php	  ui_grid_head_init() ?>
          <?php     ui_grid_th('Gesti&oacute;n') ?>
          
          <?php     ui_grid_th('Nivel') ?>
          <?php     ui_grid_th('Ciclo') ?>
          <?php     ui_grid_th('Especialidad') ?>
          <?php     ui_grid_th('Par.') ?>
          <?php     ui_grid_th('Cod. UE (SIE)') ?>
          <?php     ui_grid_th('Nombre UE') ?>
          <?php     ui_grid_th('Estado Mat. ini') ?>
          <?php     ui_grid_th('Estado Mat. fin') ?>          
          <?php     ui_grid_th('ELIMINAR') ?>
        <?php	  ui_grid_head_end() ?>

        <?php   ui_grid_body_init() ?>
          <?php $suma = 0;?>
          <?php foreach ($historialestados as $i => $ins): ?>
            <?php     ui_grid_tr_init() ?>
                <?php     ui_grid_td_init('style="text-align:center;"') ?>
                    <?php echo $ins['gestion_id']; ?>
                <?php     ui_grid_td_end() ?>
                <?php     ui_grid_td_init('style="text-align:left;"') ?>
                    <?php echo Doctrine::getTable('ClaCiclo')->find(array($ins['nivel_id'],$ins['ciclo_id']))->getDescCiclo(); ?>
                <?php     ui_grid_td_end() ?>
                <?php     ui_grid_td_init('style="text-align:left;"') ?>
                    <?php echo Doctrine::getTable('ClaGrado')->find(array($ins['nivel_id'],$ins['ciclo_id'],$ins['grado_id']))->getDescGrado(); ?>
                <?php     ui_grid_td_end() ?>
                <?php     ui_grid_td_init('style="text-align:left;"') ?>
                    <?php echo Doctrine::getTable('ClaCursoOferta')->find($ins['curso_oferta_id'])->getDescCursoOferta(); ?>
                <?php     ui_grid_td_end() ?>
                <?php     ui_grid_td_init('style="text-align:center;"') ?>
                    <?php echo $ins['paralelo']; ?>
                <?php     ui_grid_td_end() ?>
                
                <?php     ui_grid_td_init('style="text-align:center;"') ?>
                    <?php echo $ins['cod_ue_id']; ?>
                <?php     ui_grid_td_end() ?>

                <?php     ui_grid_td_init('style="text-align:left;"') ?>                    
                    
                    <?php echo Doctrine::getTable('DatRueUnidadEducativa')->find($ins['cod_ue_id'])->getDescUe(); ?>
                                        
                <?php     ui_grid_td_end() ?>

                <?php     ui_grid_td_init('style="text-align:center;"') ?>
                	<?php echo Doctrine::getTable('ClaEstadoMatricula')->find($ins['estado_matricula_inicio_id'])->getDescEstadoMatricula(); ?>
                <?php     ui_grid_td_end() ?> 	 

                <?php     ui_grid_td_init('style="text-align:center;"') ?>
                	<?php echo Doctrine::getTable('ClaEstadoMatricula')->find($ins['estado_matricula_fin_id'])->getDescEstadoMatricula(); ?>
                <?php     ui_grid_td_end() ?>
                
                
                <?php     ui_grid_td_init('style="text-align:center;"') ?>
                    <a href="<?php echo url_for('adultostecnicaeliminar/borrarInscripcion?id_inscripcion='.$ins['id_inscripcion']); ?>" onclick="return confirm('&iquest;DESEA ELIMINAR LA INSCRIPCI&Oacute;N DEL ESTUDIANTE?'); "><img border="0" width="22" height="22" src="/images/deleteins.png" style="border-width: 0px;" title="Eliminar la inscripci&oacute;n del estudiante" /></a>
                <?php     ui_grid_td_end() ?>
                
                <?php $suma = $suma+1;?> 
               
            <?php     ui_grid_tr_end() ?>
          <?php endforeach; ?>
        <?php   ui_grid_body_end() ?>

        <?php   ui_grid_foot_init() ?>
        	<?php if ($suma>0): ?>
        		<div class="ui-grid-results" style="font-weight: bold;text-align: center;color:#FFFFFF;font-size: 13Px;">Inscripciones encontradas: <?php echo $suma ?></div>
        	<?php endif; ?>	
        <?php   ui_grid_foot_end() ?>
      <?php ui_grid_end() ?>
<?php endif; ?>