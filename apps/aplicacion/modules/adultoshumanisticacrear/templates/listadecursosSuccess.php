<?php if ($sf_user->hasFlash('notice')): ?>
    <?php include_partial('inicio/mensaje',array('fondo' => '#FFFFE6','letra' => '#f00','mensaje' => $sf_user->getFlash('notice'),'icono' => '/images/Happy.png' )); ?>
<?php endif; ?>
<?php if ($sf_user->hasFlash('notice_error')): ?>
    <?php include_partial('inicio/mensaje',array('fondo' => '#F00','letra' => '#fff','mensaje' => $sf_user->getFlash('notice_error'),'icono' => '/images/Cry.png' )); ?>
<?php endif; ?>
<?php use_helper('ysJQueryRevolutions')?>
<?php use_helper('ysJQueryAutocomplete')?>
<?php use_helper('ysJQueryUIDialog')?>
<?php use_helper('ysJQueryUICore'); ?>
<?php ui_grid_init('<b>LISTA DE CUSOS CREADOS '. $cursos[0]->getCodUeId().'-'.Doctrine::getTable('DatRueUnidadEducativa')->find($cursos[0]->getCodUeId())->getDescUe().'</b>') ?>
    <?php ui_grid_head_init() ?>
      <?php ui_grid_th('MODALIDAD') ?>
      <?php ui_grid_th('NIVEL') ?>
      <?php ui_grid_th('CICLO') ?>
      <?php ui_grid_th('PARALELO') ?>
      <?php ui_grid_th('TURNO') ?>
    <?php ui_grid_head_end() ?>
    <?php   ui_grid_body_init() ?>
      <?php foreach ($cursos as $dato): ?>
        <?php     ui_grid_tr_init() ?>
            <?php     ui_grid_td_init('style="text-align:left;"') ?>
                <?php echo Doctrine::getTable('ClaNivel')->find($dato->getNivelId())->getDescNivel(); ?>
            <?php     ui_grid_td_end() ?>
            <?php     ui_grid_td_init('style="text-align:left;"') ?>
                <?php echo Doctrine::getTable('ClaCiclo')->find(array($dato->getNivelId(),$dato->getCicloId()))->getDescCiclo(); ?>
            <?php     ui_grid_td_end() ?>
            <?php     ui_grid_td_init('style="text-align:left;"') ?>
                <?php echo Doctrine::getTable('ClaGrado')->find(array($dato->getNivelId(),$dato->getCicloId(),$dato->getGradoId()))->getDescGrado(); ?>
            <?php     ui_grid_td_end() ?>
            <?php     ui_grid_td_init('style="text-align:left;"') ?>
                <?php echo $dato->getParalelo(); ?>
            <?php     ui_grid_td_end() ?>
            <?php     ui_grid_td_init('style="text-align:center;"') ?>
                <?php echo Doctrine::getTable('ClaTurno')->find($dato->getTurnoId())->getDescTurno(); ?>
            <?php     ui_grid_td_end() ?>
        <?php     ui_grid_tr_end() ?>
      <?php endforeach; ?>
    <?php   ui_grid_body_end() ?>
    <?php   ui_grid_foot_init() ?>

    <?php   ui_grid_foot_end() ?>
  <?php ui_grid_end() ?>
  <div style="margin-left: auto;margin-right: auto; text-align: center;padding-top: 15px;padding-bottom: 15px;">
      <a href="<?php echo url_for('adultoshumanisticacrear/index'); ?>">CREAR OTRO CURSO</a>
       
  </div>
