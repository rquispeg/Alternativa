<?php use_helper('ysJQueryRevolutions'); ?>
<?php use_helper('ysJQueryUICore'); ?>
<?php use_helper('ysJQueryUIDialog'); ?>
<?php use_helper('ysUtil'); ?>
<?php use_helper('Date') ?>
			  <?php ui_grid_init('Estudiante(s) encontrado(s)') ?>
        <?php	  ui_grid_head_init() ?>
          <?php     ui_grid_th('RUDEALT') ?>
          <?php     ui_grid_th('Paterno') ?>
          <?php     ui_grid_th('Materno') ?>
          <?php     ui_grid_th('Nombre') ?>
          <?php     ui_grid_th('Fec. Nac.') ?>          
        <?php	  ui_grid_head_end() ?>

        <?php   ui_grid_body_init() ?>
          <?php $suma = 0;?>
          <?php foreach ($estudiantes as $i => $estudiante): ?>
            <?php     ui_grid_tr_init() ?>
                <?php     ui_grid_td_init('style="text-align:left;width:32px;"') ?>
                    <?php //echo $estudiante['codigo_rude']; ?>
                    <a href="#" id = <?php echo 'modal'.$i; ?>><strong><?php echo $estudiante['codigo_rude']?></strong></a>
                    <?php echo jquery_ajax(array(
                        'listener' => array(
                            'selector' => '#modal'.$i,
                            'event' => 'click'),
                        'url' => url_for('estudiantealtbusqueda/listainscripciones'),
                        'success' =>  like_function("$('#divUes').html(data)" , 'data'),
                        'data' => "'codigo_rude='+'".$estudiante['codigo_rude']."'",
                        'type' => 'GET'));
                    ?>
                    
                <?php     ui_grid_td_end() ?>
                <?php     ui_grid_td_init('style="text-align:left;width:66px;"') ?>
                    <?php echo $estudiante['paterno']; ?>
                <?php     ui_grid_td_end() ?>
                <?php     ui_grid_td_init('style="text-align:left;width:66px;"') ?>
                    <?php echo $estudiante['materno']; ?>
                <?php     ui_grid_td_end() ?>
                <?php     ui_grid_td_init('style="text-align:left;width:120px;"') ?>
                    <?php echo $estudiante['nombre']; ?>
                <?php     ui_grid_td_end() ?> 	 
                <?php     ui_grid_td_init('style="text-align:center;width:60px;"') ?>
                    <?php echo implode('/',array_reverse(explode('-',$estudiante['fecha_nacimiento']))); ?>                    
                <?php     ui_grid_td_end() ?> 	 
                                              
                <?php $suma = $suma+1;?> 
               
            <?php     ui_grid_tr_end() ?>
          <?php endforeach; ?>
        <?php   ui_grid_body_end() ?>

        <?php   ui_grid_foot_init() ?>
        	<?php if ($suma>0): ?>
        		<div class="ui-grid-results" style="font-weight: bold;text-align: center;color:#FFFFFF;font-size: 13Px;">Total encontrados: <?php echo $suma ?> estudiantes.</div>
        	<?php else: ?>
        	  <div class="ui-grid-results" style="font-weight: bold;text-align: center;color:#FFFFFF;font-size: 13Px;">No se encontraron estudiantes.</div>
        	<?php endif; ?>	
        <?php   ui_grid_foot_end() ?>
      <?php ui_grid_end() ?>
