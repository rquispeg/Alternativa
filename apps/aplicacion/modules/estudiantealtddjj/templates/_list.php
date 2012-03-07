<?php use_helper('ysJQueryRevolutions'); ?>
<?php use_helper('ysJQueryUIDialog'); ?>
<?php use_helper('ysJQueryUICore'); ?>
<div style="font-size: 9px;">
<?php ui_grid_init('<b>LISTA DE BACHILLERES ('.$ue.'-'.Doctrine::getTable('DatRueUnidadEducativa')->find($ue)->getDescUe().')</b>') ?>
    <?php ui_grid_head_init() ?>
      <?php ui_grid_th('RUDE') ?>
      <?php ui_grid_th('PATERNO') ?>
      <?php ui_grid_th('MATERNO') ?>
      <?php ui_grid_th('NOMBRE') ?>
      <?php ui_grid_th('FEC. NAC.') ?>
      <?php ui_grid_th('PAIS') ?>
      <?php ui_grid_th('DEPART. NAC.') ?>
      <?php ui_grid_th('FORM') ?>
    <?php ui_grid_head_end() ?>
    <?php   ui_grid_body_init() ?>
      <?php foreach ($datos as $dato): ?>
        <?php     ui_grid_tr_init() ?>
            <?php     ui_grid_td_init('style="text-align:left;"') ?>
                <?php $est = Doctrine::getTable('DatRdeEstudiante')->find($dato->getCodigoRudeId()); ?>
                <?php echo $est->getCodigoRude(); ?>
            <?php     ui_grid_td_end() ?>
            <?php     ui_grid_td_init('style="text-align:left;"') ?>
                <?php echo $est->getPaterno(); ?>
            <?php     ui_grid_td_end() ?>
            <?php     ui_grid_td_init('style="text-align:left;"') ?>
                <?php echo $est->getMaterno(); ?>
            <?php     ui_grid_td_end() ?>
            <?php     ui_grid_td_init('style="text-align:left;"') ?>
                <?php echo $est->getNombre(); ?>
            <?php     ui_grid_td_end() ?>
            <?php     ui_grid_td_init('style="text-align:center;"') ?>
                <?php echo implode('/',array_reverse(explode('-',substr($est->getFechaNacimiento(),0,10)))); ?>
            <?php     ui_grid_td_end() ?>
            <?php     ui_grid_td_init('style="text-align:left;"') ?>
                <?php echo Doctrine::getTable('ClaPais')->find($est->getPaisNacId())->getDescAbreviada(); ?>
            <?php     ui_grid_td_end() ?>
            <?php     ui_grid_td_init('style="text-align:left;"') ?>
                <?php echo Doctrine::getTable('ClaDepartamento')->find($est->getDepartamentoNacId())->getDescDepartamento(); ?>
            <?php     ui_grid_td_end() ?>
            <?php     ui_grid_td_init('style="text-align:center;"') ?>
                <a href="<?php echo url_for('estudiantealtddjj/reporteindividual?ue='.$ue.'&gestion='.$dato->getGestionId().'&rude='.$dato->getCodigoRudeId()); ?>" target="_blank">
                    <img src="/images/pdf.png" border="0" alt="reporte" />
                </a>
            <?php     ui_grid_td_end() ?>
        <?php     ui_grid_tr_end() ?>
      <?php endforeach; ?>
    <?php   ui_grid_body_end() ?>
    <?php   ui_grid_foot_init() ?>
        <?php if ($pager->haveToPaginate()): ?>
              <?php include_partial('estudiantealtddjj/pagination', array('pager' => $pager,'url'=>$link,'ue'=>$ue,'gestion'=>$gestion)) ?>
        <?php endif; ?>
        <strong><?php echo $pager->getNbResults() ?></strong> Resultados
        <?php if ($pager->haveToPaginate()): ?>
            - p&aacute;gina <strong><?php echo $pager->getPage() ?>/<?php echo $pager->getLastPage() ?></strong>
        <?php endif; ?>
    <?php   ui_grid_foot_end() ?>
  <?php ui_grid_end() ?>
</div>
