<?php use_helper('ysJQueryRevolutions'); ?>
<?php use_helper('ysJQueryUICore'); ?>
<?php use_helper('ysJQueryUIDialog'); ?>
<?php use_helper('ysUtil'); ?>
<?php use_helper('Date') ?>
<?php if ($sf_user->hasFlash('notice')): ?>
    <?php include_partial('inicio/mensaje',array('fondo' => '#F00','letra' => '#fff','mensaje' => $sf_user->getFlash('notice'),'icono' => '/images/Cry.png' )); ?>
<?php else: ?>
		<?php if ($inscripciones <> ''): ?>					
			<?php ui_grid_init("Estudiante: ".$estudiante->getNombre().", ".$estudiante->getPaterno()." ".$estudiante->getMaterno()."  (".implode('/',array_reverse(explode('-',$estudiante->getFechaNacimiento()))).")") ?>
		
			<?php	  ui_grid_head_init() ?>		  
			  <?php if($acreditacion == '22'): ?>
				<?php   ui_grid_th('Especialidad') ?>
			  <?php elseif($acreditacion == '23'):?>
			  <?php endif; ?>
			  <?php     ui_grid_th('Nivel') ?>
			  <?php     ui_grid_th('Ciclo') ?>
			  <?php     ui_grid_th('Par.') ?>
			  <?php     ui_grid_th('Estado Mat. Inicio') ?>
			  <?php     ui_grid_th('Estado Mat. Actual') ?>          
			  <?php     ui_grid_th('ELIMINAR') ?>
			<?php	  ui_grid_head_end() ?>

			<?php   ui_grid_body_init() ?>                 
				<?php     ui_grid_tr_init() ?>				
					<?php if($acreditacion == '22'): ?>
						<?php     ui_grid_td_init('style="text-align:left;"') ?>
							<?php echo Doctrine::getTable('ClaCursoOferta')->find($inscripciones->getCursoOfertaId())->getDescCursoOferta(); ?>
						<?php     ui_grid_td_end() ?>
						<?php elseif($acreditacion == '23'):?>
					<?php endif; ?>			
					<?php     ui_grid_td_init('style="text-align:left;"') ?>
						<?php echo Doctrine::getTable('ClaCiclo')->find(array($inscripciones->getNivelId(),$inscripciones->getCicloId()))->getDescCiclo(); ?>
					<?php     ui_grid_td_end() ?>
					<?php     ui_grid_td_init('style="text-align:left;"') ?>
						<?php echo Doctrine::getTable('ClaGrado')->find(array($inscripciones->getNivelId(),$inscripciones->getCicloId(),$inscripciones->getGradoId()))->getDescGrado(); ?>
					<?php     ui_grid_td_end() ?>
					<?php     ui_grid_td_init('style="text-align:center;"') ?>
						<?php echo $inscripciones->getParalelo(); ?>
					<?php     ui_grid_td_end() ?>                               
					

					<?php     ui_grid_td_init('style="text-align:center;"') ?>
						<?php echo Doctrine::getTable('ClaEstadoMatricula')->find($inscripciones->getEstadoMatriculaInicioId())->getDescEstadoMatricula(); ?>
					<?php     ui_grid_td_end() ?> 	 

					<?php     ui_grid_td_init('style="text-align:center;"') ?>
						<?php echo Doctrine::getTable('ClaEstadoMatricula')->find($inscripciones->getEstadoMatriculaFinId())->getDescEstadoMatricula(); ?>
					<?php     ui_grid_td_end() ?>
					
					
					<?php     ui_grid_td_init('style="text-align:center;"') ?>
						<a href="<?php echo url_for('ins_eliminar/borrarInscripcion?acreditacion='.$acreditacion.'&id_inscripcion='.$inscripciones->getInscripcionId()); ?>" onclick="return confirm('&iquest;DESEA ELIMINAR LA INSCRIPCI&Oacute;N DEL ESTUDIANTE?'); "><img border="0" width="22" height="22" src="/images/deleteins.png" style="border-width: 0px;" title="Eliminar la inscripci&oacute;n del estudiante" /></a>
					<?php     ui_grid_td_end() ?>
				   
				<?php     ui_grid_tr_end() ?>
			<?php else: ?>	
				<?php ui_grid_init("Sin Inscripcion el Estudiante: ".$estudiante->getNombre().", ".$estudiante->getPaterno()." ".$estudiante->getMaterno()."  (".implode('/',array_reverse(explode('-',$estudiante->getFechaNacimiento()))).")") ?>
			<?php endif; ?>			
        <?php   ui_grid_body_end() ?>
      <?php ui_grid_end() ?>
<?php endif; ?>