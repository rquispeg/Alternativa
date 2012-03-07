<?php use_helper('ysJQueryRevolutions'); ?>
<?php use_helper('ysJQueryUICore'); ?>
<?php use_helper('ysJQueryUIDialog'); ?>
<?php use_helper('ysUtil'); ?>
<?php if (!isset($notice)): ?>
    <?php if(count($especialidades) > 0): ?>
    <form id="myForm2" onsubmit="return confirm('&iquest;Est&aacute; seguro de Adicionar la Especialidad?')" action="<?php echo url_for('ceaasignarespecialidad/guardar') ?>">
    <div style="width: 750px;margin-left: auto; margin-right: auto;">
      <?php ui_grid_init($ue.' - '.Doctrine::getTable('DatRueUnidadEducativa')->find($ue)->getDescUe()) ?>
        <?php	  ui_grid_head_init() ?>
          <?php     ui_grid_th('Especialidad') ?>
          <?php     ui_grid_th('Area') ?>          
        <?php	  ui_grid_head_end() ?>        
        <?php   ui_grid_body_init() ?>
          <?php $suma = 0;?>
        
          <?php foreach ($especialidades as $i => $especialidad): ?>          
            <?php     ui_grid_tr_init() ?>
                <?php     ui_grid_td_init('style="text-align:left;"') ?>
                    <?php echo $especialidad->ClaCursoOferta->getDescCursoOferta(); ?>
                <?php     ui_grid_td_end() ?>
                <?php     ui_grid_td_init('style="text-align:left;"') ?>
                    <?php echo $especialidad->ClaCursoOferta->ClaArea->getDescArea(); ?>
                    <?php $suma++; ?>
                <?php     ui_grid_td_end() ?>                
            <?php     ui_grid_tr_end() ?>            
          <?php endforeach; ?>
            <?php     ui_grid_tr_init() ?>            
                <?php     ui_grid_td_init('style="text-align:left;"') ?> 
                <?php echo $ofertas['curso_oferta_id']->render(); ?> 
                <?php     ui_grid_td_end() ?>
                <?php     ui_grid_td_init('style="text-align:left;"') ?>
                <input type="hidden" name="cod_ue_id" value="<?php echo $ue; ?>"></input>
                <div style="margin-left: auto;margin-right: auto; text-align: center;padding-top: 10px;padding-bottom: 10px;">
                    <input type="submit" value="Adicionar" id ="btnGrabar"  />
                </div>
                <?php     ui_grid_td_end() ?>                
            <?php     ui_grid_tr_end() ?>
        <?php   ui_grid_body_end() ?>
        <?php   ui_grid_foot_init() ?>
        <div class="ui-grid-results" style="font-weight: bold;text-align: center;color:#FFF;font-size: 14Px;">Total Especialidades <?php echo $suma ?></div>
        <?php   ui_grid_foot_end() ?>
      <?php ui_grid_end() ?>    
    </div>
    </form>
    <?php else: ?>
        <?php include_partial('inicio/mensaje',array('fondo' => '#F00','letra' => '#fff','mensaje' =>'NO CUENTA CON ESPECIALIDADES ASIGNADAS','icono' => '/images/Ou.png' )); ?>
    <?php endif; ?>
<?php else: ?>
    <?php include_partial('inicio/mensaje',array('fondo' => '#F00','letra' => '#fff','mensaje' =>$notice,'icono' => '/images/Ou.png' )); ?>
<?php endif; ?>


<script type="text/javascript">
/* <![CDATA[ */
$(document).ready(function()
{
     $(".helps").helptooltip();
});
/* ]]> */
</script>
