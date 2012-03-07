<?php use_helper('ysJQueryRevolutions'); ?>
<?php use_helper('ysJQueryUICore'); ?>
<?php use_helper('ysJQueryUIDialog'); ?>
<?php use_helper('ysUtil'); ?>
<?php if (!isset($notice)): ?>
    <?php if(count($cursos) > 0): ?>
    <div style="width: 750px;margin-left: auto; margin-right: auto;">
      <?php ui_grid_init($a['ue'].' - '.Doctrine::getTable('DatRueUnidadEducativa')->find($a['ue'])->getDescUe()) ?>
        <?php	  ui_grid_head_init() ?>
          <?php     ui_grid_th('Nivel') ?>
          <?php     ui_grid_th('Ciclo') ?>
          <?php     ui_grid_th('Paralelo') ?>
          <?php     ui_grid_th('Turno') ?>
          <?php     ui_grid_th('Estudiante') ?>
          <?php     ui_grid_th('Boletines') ?>
        <?php	  ui_grid_head_end() ?>        
        <?php   ui_grid_body_init() ?>
          <?php $suma = 0;?>
        
          <?php foreach ($cursos as $i => $curso): ?>          
            <?php     ui_grid_tr_init() ?>
                <?php     ui_grid_td_init('style="text-align:left;"') ?>
                    <?php echo Doctrine::getTable('ClaCiclo')->find(array($curso['nivel_id'],$curso['ciclo_id']))->getDescCiclo(); ?>
                <?php     ui_grid_td_end() ?>
                <?php     ui_grid_td_init('style="text-align:left;"') ?>
                    <?php echo Doctrine::getTable('ClaGrado')->find(array($curso['nivel_id'],$curso['ciclo_id'],$curso['grado_id']))->getDescGrado(); ?>
                <?php     ui_grid_td_end() ?>
                <?php     ui_grid_td_init('style="text-align:center;"') ?>
                    <?php echo $curso['paralelo']; ?>
                <?php     ui_grid_td_end() ?>
                <?php     ui_grid_td_init('style="text-align:center;"') ?>
                    <?php echo Doctrine::getTable('ClaTurno')->find($curso['turno_id'])->getDescAbrv(); ?>
                <?php     ui_grid_td_end() ?> 	 
                <?php     ui_grid_td_init('style="text-align:center;"') ?>
                    <?php echo $curso['total']; ?>
                    <?php $suma = $suma + (int)$curso['total'];?>
                <?php     ui_grid_td_end() ?>
                <?php     ui_grid_td_init('style="text-align:center;"') ?>
                    <?php if(Doctrine::getTable('DatSieCurso')->find(array($curso['cod_ue_id'],$curso['sub_cea_id'],$curso['gestion_id'],'1',$curso['periodo_id'],$curso['nivel_id'],$curso['ciclo_id'],$curso['grado_id'],$curso['paralelo'],$curso['turno_id']))->getConsolidado()==1):?>
                    <a style="padding-left: 5px;padding-right: 5px;" href="<?php echo url_for('adultoshumanisticacalificaciones/reporte').'?paralelo='.$curso['paralelo'].'&nivel_id='.$curso['nivel_id'].'&grado_id='.$curso['grado_id'].'&cod_ue_id='.$a['ue'].'&gestion_id='.$a['gestion_id'].'&turno_id='.$curso['turno_id'].'&ciclo_id='.$curso['ciclo_id'].'&sub_cea_id='.$curso['sub_cea_id'].'&periodo_id='.$curso['periodo_id']; ?>" target="_blank">
                        <img src="/images/pdf.png" style="border-width: 0px;" title="Reporte formato PDF" />
                    </a>
                    <?php endif; ?>
                <?php     ui_grid_td_end() ?>
            <?php     ui_grid_tr_end() ?>
          <?php endforeach; ?>
        <?php   ui_grid_body_end() ?>
        <?php   ui_grid_foot_init() ?>
        <div class="ui-grid-results" style="font-weight: bold;text-align: center;color:#FFF;font-size: 14Px;">Total de estudiantes inscritos <?php echo $suma ?></div>
        <?php   ui_grid_foot_end() ?>
      <?php ui_grid_end() ?>
    </div>
    <?php else: ?>
        <?php include_partial('inicio/mensaje',array('fondo' => '#F00','letra' => '#fff','mensaje' =>'NO EXISTE REGISTRO DE INSCRIPCION PARA LA GESTION Y OPERATIVO SELECCIONADO O CODIGO SIE NO EXISTE','icono' => '/images/Ou.png' )); ?>
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





