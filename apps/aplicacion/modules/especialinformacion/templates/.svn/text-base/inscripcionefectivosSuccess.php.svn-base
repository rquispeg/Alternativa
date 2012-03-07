<?php use_helper('ysJQueryRevolutions'); ?>
<?php use_helper('ysJQueryUICore'); ?>
<?php use_helper('ysJQueryUIDialog'); ?>
<?php use_helper('ysUtil'); ?>
<?php if (!isset($notice)): ?>
    <?php if((int)$cursos->Count() > 0): ?>
    <div style="width: 770px;margin-left: auto; margin-right: auto;">
      <?php ui_grid_init($a['ue'].' - '.Doctrine::getTable('DatRueUnidadEducativa')->find($a['ue'])->getDescUe()) ?>
        <?php	  ui_grid_head_init() ?>
          <?php     ui_grid_th('Area Discapacidad') ?>          
          <?php     ui_grid_th('Nivel') ?>
          <?php     ui_grid_th('Grado') ?>
          <?php     ui_grid_th('Paralelo') ?>
          <?php     ui_grid_th('Turno') ?>
          <?php     ui_grid_th('Estudiantes') ?>
          <?php     ui_grid_th('<span class="helps"></span><span><p>AYUDA</p>Lista de estudiantes</span>
              <span class="helps" style="padding-left: 3px;padding-right: 3px;"></span><span><p>AYUDA</p>Reporte en formato PDF</span>
              <span class="helps" style="padding-left: 5px;padding-right: 3px;"></span><span><p>AYUDA</p>Reporte en formato EXCEL</span>') ?>
        <?php	  ui_grid_head_end() ?>
        <?php   ui_grid_body_init() ?>
          <?php $suma = 0;?>
          <?php foreach ($cursos as $i => $curso): ?>
            <?php     ui_grid_tr_init() ?>
                <?php     ui_grid_td_init('style="text-align:left;width:250px;"') ?>
                    <?php echo Doctrine::getTable('DatEspDiscapacidad')->find($curso['discapacidad_id'])->getDiscapacidad(); ?>
                <?php     ui_grid_td_end() ?>
                
                <?php     ui_grid_td_init('style="text-align:left;width:60px;"') ?>
                    <?php echo Doctrine::getTable('ClaCiclo')->find(array($curso['nivel_id'],$curso['ciclo_id']))->getDescCiclo();?>
                <?php     ui_grid_td_end() ?>
        
                <?php     ui_grid_td_init('style="text-align:left;width:60px;"') ?>
                    <?php echo Doctrine::getTable('ClaGrado')->find(array($curso['nivel_id'],$curso['ciclo_id'],$curso['grado_id']))->getDescGrado();?>
                <?php     ui_grid_td_end() ?>
                
                <?php     ui_grid_td_init('style="text-align:left;width:60px;"') ?>
                    <?php echo $curso['paralelo'];?>
                <?php     ui_grid_td_end() ?>
                
                <?php     ui_grid_td_init('style="text-align:left;width:60px;"') ?>
                    <?php echo Doctrine::getTable('ClaTurno')->find($curso['turno_id'])->getDescAbrv();?>
                <?php     ui_grid_td_end() ?>
                
                <?php     ui_grid_td_init('style="text-align:center;width:60px;"') ?>
                    <?php echo $curso['Total']; ?>
                    <?php $suma = $suma + (int)$curso['Total'];?>
                <?php     ui_grid_td_end() ?>
                <?php     ui_grid_td_init('style="text-align:center;width:100px;"') ?>
                    <a href="#" id = <?php echo 'modal'.$i; ?>><img src="/images/entrega.gif" style="border-width: 0px;" title="VER LISTA" /></a>
                    <?php echo jquery_ajax(array(
                        'listener' => array(
                            'selector' => '#modal'.$i,
                            'event' => 'click'),
                        'url' => url_for('especialinformacion/listaestudiantes'),
                        'success' =>  like_function("$('#divEstudiantes').html(data)" , 'data'),
                        'data' => "'paralelo='+'".$curso['paralelo']."'"."+'&nivel_id='+".$curso['nivel_id']."+'&grado_id='+".$curso['grado_id']."+'&ciclo_id='+".$curso['ciclo_id']."+'&cod_ue_id='+".$a['ue']."+'&gestion_id='+".$a['gestion_id']."+'&turno_id='+".$curso['turno_id']."+'&discapacidad_id='+".$curso['discapacidad_id'],
                        'type' => 'GET'));
                    ?>

                    <a style="padding-left: 5px;padding-right: 5px;" href="<?php echo url_for('especialinformacion/reporteporcurso').'?paralelo='.$curso['paralelo'].'&nivel_id='.$curso['nivel_id'].'&grado_id='.$curso['grado_id'].'&cod_ue_id='.$a['ue'].'&gestion_id='.$a['gestion_id'].'&turno_id='.$curso['turno_id'].'&ciclo_id='.$curso['ciclo_id'].'&discapacidad_id='.$curso['discapacidad_id'].'&tipo=1'; ?>" target="_blank">
                        <img src="/images/pdf.png" style="border-width: 0px;" title="Reporte formato PDF" />
                    </a>
                    
                <?php     ui_grid_td_end() ?>
            <?php     ui_grid_tr_end() ?>
          <?php endforeach; ?>
        <?php   ui_grid_body_end() ?>
        <?php   ui_grid_foot_init() ?>
        <div class="ui-grid-results" style="font-weight: bold;text-align: center;color:#05517E;font-size: 14Px;">Total estudiantes inscritos: <?php echo $suma ?></div>
        <?php   ui_grid_foot_end() ?>
      <?php ui_grid_end() ?>
    <?php  include_partial('inicio/barrareportes',array('botones'=>array(array('link'=>'especialinformacion/reporteunidad','caption'=>'Estudiantes Inscritos')))); ?>
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
