<?php use_helper('ysJQueryRevolutions')  //  ysJQueryRevolutions Helper ?>
<?php use_helper('ysJQueryUIDialog')     //  ysJQueryUIDialog Helper ?>
<?php use_helper('ysUtil') ?>
<?php ui_dialog_init('dialogId' , array(
    'title' => 'LISTA DE ESTUDIANTES',
    'modal' => true,
    'width' => '900px',
    'buttons' => array('Cerrar' => like_function(ui_dialog_close('this')))),
    'style="font-size: 9px;"')?>
    <?php ui_grid_init('Unidad educativa') ?>
    <?php	  ui_grid_head_init() ?>
      <?php     ui_grid_th('<a>N&deg;</a>') ?>
      <?php     ui_grid_th('<a>RUDEALT</a>') ?>
      <?php     ui_grid_th('<a>CI</a>') ?>
      <?php     ui_grid_th('<a>PATERNO</a>') ?>
      <?php     ui_grid_th('<a>MATERNO</a>') ?>
      <?php     ui_grid_th('<a>NOMBRE</a>') ?>
      <?php     ui_grid_th('<a>FECHA NAC</a>') ?>
      <?php     ui_grid_th('<a>GEN.</a>') ?>
      <?php     ui_grid_th('<a>PAIS</a>') ?>
      <?php     ui_grid_th('<a>DEP.</a>') ?>
      <?php     ui_grid_th('<a>PROVINCIA</a>') ?>
      <?php     ui_grid_th('<a>LOCALIDAD</a>') ?>
    <?php	  ui_grid_head_end() ?>

    <?php   ui_grid_body_init() ?>
      <?php foreach ($listas as $i => $lista): ?>
        <?php     ui_grid_tr_init() ?>
            <?php     ui_grid_td_init('style="text-align:left;width:10px;"') ?>
                <?php echo (int)$i+1; ?>
            <?php     ui_grid_td_end() ?>
            <?php     ui_grid_td_init('style="text-align:left;width:100px;"') ?>
                <?php echo $lista->getCodigoRude(); ?>
            <?php     ui_grid_td_end() ?>
            <?php     ui_grid_td_init('style="text-align:left;width:50px;"') ?>
                <?php echo $lista->getCarnetIdentidad(); ?>
            <?php     ui_grid_td_end() ?>
            <?php     ui_grid_td_init('style="text-align:left"') ?>
                <?php echo $lista->getPaterno(); ?>
            <?php     ui_grid_td_end() ?>
            <?php     ui_grid_td_init('style="text-align:left"') ?>
                <?php echo $lista->getMaterno(); ?>
            <?php     ui_grid_td_end() ?>
            <?php     ui_grid_td_init('style="text-align:left;width:100px;"') ?>
                <?php echo $lista->getNombre(); ?>
            <?php     ui_grid_td_end() ?>
            <?php     ui_grid_td_init('style="text-align:left;width:60px;"') ?>
                <?php echo implode('/',array_reverse(explode('-',$lista->getFechaNacimiento()))); ?>
            <?php     ui_grid_td_end() ?>
            <?php     ui_grid_td_init('style="text-align:center;;width:20px;"') ?>
                <?php echo $lista->getGenero(); ?>
            <?php     ui_grid_td_end() ?>
            <?php     ui_grid_td_init('style="text-align:left"') ?>
                <?php echo Doctrine::getTable('ClaPais')->find($lista->getPaisNacId())->getDescAbreviada(); ?>
            <?php     ui_grid_td_end() ?>
            <?php     ui_grid_td_init('style="text-align:left"') ?>
                <?php echo Doctrine::getTable('ClaDepartamento')->find($lista->getDepartamentoNacId())->getDescDepartamento(); ?>
            <?php     ui_grid_td_end() ?>
            <?php     ui_grid_td_init('style="text-align:left"') ?>
                <?php echo Doctrine::getTable('ClaProvincia')->find(array($lista->getDepartamentoNacId(),$lista->getProvinciaNacId()))->getDescProvincia(); ?>
            <?php     ui_grid_td_end() ?>
            <?php     ui_grid_td_init('style="text-align:left"') ?>
                <?php echo $lista->getLocalidadNac(); ?>
            <?php     ui_grid_td_end() ?>
        <?php     ui_grid_tr_end() ?>
      <?php endforeach; ?>
    <?php   ui_grid_body_end() ?>
  <?php ui_grid_end() ?>
<?php ui_dialog_end() ?>
