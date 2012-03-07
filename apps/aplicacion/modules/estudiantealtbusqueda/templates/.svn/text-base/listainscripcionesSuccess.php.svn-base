<?php use_helper('ysJQueryRevolutions')  //  ysJQueryRevolutions Helper ?>
<?php use_helper('ysJQueryUIDialog')     //  ysJQueryUIDialog Helper ?>
<?php use_helper('ysUtil') ?>
<?php ui_dialog_init('dialogId' , array(
    'title' => 'EDUCACION ALTERNATIVA',
    'modal' => true,
    'width' => '900px',
    'buttons' => array('Cerrar' => like_function(ui_dialog_close('this')))),
    'style="font-size: 10px;"')?>
    
    <?php ui_grid_init('HISTORIAL DE INSCRIPCION EN EDUCACION ALTERNATIVA DE: '.$rude ) ?>
    <?php	  ui_grid_head_init() ?>
      <?php     ui_grid_th('N&deg;') ?>
      <?php     ui_grid_th('Sub. Educativo') ?>
      <?php     ui_grid_th('Gesti&oacute;n') ?>
      <?php     ui_grid_th('Nivel') ?>
      <?php     ui_grid_th('Grado') ?>
      <?php     ui_grid_th('Par.') ?>
      <?php     ui_grid_th('Cod. UE.') ?>
      <?php     ui_grid_th('Nombre UE') ?>
    <?php	  ui_grid_head_end() ?>
    <?php   ui_grid_body_init() ?>

       <?php foreach ($ins_especiales as $i => $ins): ?>
        <?php     ui_grid_tr_init() ?>
            <?php     ui_grid_td_init('style="text-align:left;"') ?>
                <?php echo (int)$i+1; ?>
            <?php     ui_grid_td_end() ?>
            <?php     ui_grid_td_init('style="text-align:left;"') ?>                
                EDUCACION ESPECIAL
            <?php     ui_grid_td_end() ?>
            <?php     ui_grid_td_init('style="text-align:center;"') ?>
                <?php echo $ins['gestion_id'];; ?>
            <?php     ui_grid_td_end() ?>
            <?php     ui_grid_td_init('style="text-align:left;"') ?>                
                <?php echo Doctrine::getTable('ClaCiclo')->find(array($ins['nivel_id'],$ins['ciclo_id']))->getDescCiclo(); ?>
            <?php     ui_grid_td_end() ?>
            
            <?php     ui_grid_td_init('style="text-align:left;"') ?>                
                <?php echo Doctrine::getTable('ClaGrado')->find(array($ins['nivel_id'],$ins['ciclo_id'],$ins['grado_id']))->getDescGrado();; ?>
            <?php     ui_grid_td_end() ?>
            
            <?php     ui_grid_td_init('style="text-align:center;"') ?>
                <?php echo $ins['paralelo']; ?>
            <?php     ui_grid_td_end() ?>
            
            <?php     ui_grid_td_init('style="text-align:left;"') ?>                
                <?php echo $ins['cod_ue_id']; ?>
            <?php     ui_grid_td_end() ?>
            
            <?php     ui_grid_td_init('style="text-align:left;"') ?>
            	<?php echo Doctrine::getTable('DatRueUnidadEducativa')->find($ins['cod_ue_id'])->getDescUe(); ?>
            <?php     ui_grid_td_end() ?>
            <?php    ui_grid_tr_end() ?>
      <?php endforeach; ?>
      <?php foreach ($ins_tecnicas as $i => $ins): ?>
        <?php     ui_grid_tr_init() ?>
            <?php     ui_grid_td_init('style="text-align:left;"') ?>
                <?php echo (int)$i+1; ?>
            <?php     ui_grid_td_end() ?>
            <?php     ui_grid_td_init('style="text-align:left;"') ?>
                EDUCACION TECNICA
            <?php     ui_grid_td_end() ?>
            <?php     ui_grid_td_init('style="text-align:center;"') ?>
                <?php echo $ins['gestion_id'];; ?>
            <?php     ui_grid_td_end() ?>
            <?php     ui_grid_td_init('style="text-align:left;"') ?>
                <?php echo Doctrine::getTable('ClaCiclo')->find(array($ins['nivel_id'],$ins['ciclo_id']))->getDescCiclo(); ?>
            <?php     ui_grid_td_end() ?>

            <?php     ui_grid_td_init('style="text-align:left;"') ?>
                <?php echo Doctrine::getTable('ClaGrado')->find(array($ins['nivel_id'],$ins['ciclo_id'],$ins['grado_id']))->getDescGrado();; ?>
            <?php     ui_grid_td_end() ?>

            <?php     ui_grid_td_init('style="text-align:center;"') ?>
                <?php echo $ins['paralelo']; ?>
            <?php     ui_grid_td_end() ?>

            <?php     ui_grid_td_init('style="text-align:left;"') ?>
                <?php echo $ins['cod_ue_id']; ?>
            <?php     ui_grid_td_end() ?>

            <?php     ui_grid_td_init('style="text-align:left;"') ?>
            	<?php echo Doctrine::getTable('DatRueUnidadEducativa')->find($ins['cod_ue_id'])->getDescUe(); ?>
            <?php     ui_grid_td_end() ?>
            <?php    ui_grid_tr_end() ?>
      <?php endforeach; ?>
      <?php foreach ($ins_adultos as $i => $ins): ?>
        <?php     ui_grid_tr_init() ?>
            <?php     ui_grid_td_init('style="text-align:left;"') ?>
                <?php echo (int)$i+1; ?>
            <?php     ui_grid_td_end() ?>
            <?php     ui_grid_td_init('style="text-align:left;"') ?>
                EDUCACION H. DE ADULTOS
            <?php     ui_grid_td_end() ?>
            <?php     ui_grid_td_init('style="text-align:center;"') ?>
                <?php echo $ins['gestion_id'];; ?>
            <?php     ui_grid_td_end() ?>
            <?php     ui_grid_td_init('style="text-align:left;"') ?>
                <?php echo Doctrine::getTable('ClaCiclo')->find(array($ins['nivel_id'],$ins['ciclo_id']))->getDescCiclo(); ?>
            <?php     ui_grid_td_end() ?>

            <?php     ui_grid_td_init('style="text-align:left;"') ?>
                <?php echo Doctrine::getTable('ClaGrado')->find(array($ins['nivel_id'],$ins['ciclo_id'],$ins['grado_id']))->getDescGrado();; ?>
            <?php     ui_grid_td_end() ?>

            <?php     ui_grid_td_init('style="text-align:center;"') ?>
                <?php echo $ins['paralelo']; ?>
            <?php     ui_grid_td_end() ?>

            <?php     ui_grid_td_init('style="text-align:left;"') ?>
                <?php echo $ins['cod_ue_id']; ?>
            <?php     ui_grid_td_end() ?>

            <?php     ui_grid_td_init('style="text-align:left;"') ?>
            	<?php echo Doctrine::getTable('DatRueUnidadEducativa')->find($ins['cod_ue_id'])->getDescUe(); ?>
            <?php     ui_grid_td_end() ?>
            <?php    ui_grid_tr_end() ?>
      <?php endforeach; ?>
    <?php   ui_grid_body_end() ?>
  <?php ui_grid_end() ?>
<?php ui_dialog_end() ?>
